<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Client;
use App\Models\Admin\Item;
use App\Models\Admin\Package;
use App\Models\Admin\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class ClientController extends Controller
{
    public function index(){
        $clients = Client::all();
        $counts = $clients->count();
        $active = $clients->where('status','=','1')->count();
        $assigned = $clients->where('package_id','!=',null|'0')->count();
        return view('client.manage.index', [
            'clients'    => $clients,
            'all_client' => $counts,
            'active'     => $active,
            'assigned'   => $assigned,
        ]);
    }
    public function addForm(){
        $packages = Package::select(['id', 'name'])->where('status', '1')->get();
        return view('client.manage.info', ['packages' => $packages]);
    }
    public function editForm($id){
        $client   = Client::find($id);
        $packages = Package::select(['id', 'name'])->with('items')->where('status', '1')->get();
        $tasks    = Task::where('client_id',$client->id)->first('items');
        if(isset($tasks->items)) {
            $tasks    = collect($tasks->items)->map(function ($task) {
                return [
                  "id" => $task['id'],
                  "status" => $task['status'],
                  "label" => Item::find($task['id'])->label,
                ];
            });
        }

        return view('client.manage.edit',['client' => $client, 'id' => $id, 'packages' => $packages, 'tasks' => $tasks]);
    }

    public function update(Request $request){
//        return $request->task_items;
        $validator = Validator::make($request->all(),[
            'first_name' => 'required',
            'last_name'  => 'required',
            'email'      => 'required|email',
            'phone'      => 'required',
        ]);
        if ($validator->fails())
            return redirect()->back()->with('error', $validator->errors());

        if($request->id){
            $client = Client::find($request->id);
            $edit = true;
        } else {
            $client = new Client();
        }
        if ($request->hasFile('image')) :
            if($client->image)
                Storage::delete('public/' . $client->image);
            $client->image = substr($request->file('image')->store('public/client'), 7);
        endif;

        if ($request->password !== $request->confirm_password)
            return redirect()->back()->with('error','Your Password Confirm Invalid');

        $client->package_id = $request->package_id;
        $client->first_name = $request->first_name;
        $client->last_name = $request->last_name;
        $client->email     = $request->email;
        $client->phone     = $request->phone;
        $client->status    = $request->status;
        $client->password  = Hash::make($request->password);
        $client->save();

        if ($request->package_id && $request->package_id != 0)
            $this->assignPackage($client->id,$request->package_id,$edit);

        if ($request->task_items)
            $this->UpdateStatus($client->id, $request->task_items);

        return redirect()->back()->with('success','Client Saved Successfully');
    }

    public function delete($id){
        $client = Client::find($id);
        $client->delete();
        return redirect()->back()->with('success', 'Client Is Deleted');
    }

    public function assignPackage($client_id, $package_id, $status = false){
        $package = Package::find($package_id);
        $client = Client::find($client_id);
        if (isset($client) && isset($package)){
            $package->clients()->save($client);
            $client->sub_time  = Date::now();
            $client->expire_at = $this->expire($package->type_label, $package->type_value);
            $client->save();
            $this->handleTasks($package,$client_id,$status);
        }else {
            return redirect()->back()->with('error','Package Not Saved');
        }
    }

    public function UpdateStatus($client_id, $req_input_ids){
        $task = Task::all();
        $task_items = $task->firstWhere('client_id',$client_id);
        $input_ids = $req_input_ids ;
        $updated_items = collect($task_items->items)->map(function ($task) use ($input_ids){
            // CHECK ID For Item
            if (in_array($task['id'], $input_ids)){
                // Edit Status
                $task['status'] = 1;
            }
            return $task;
        });
        $task = $task->find($task_items->id);
        $task['items'] = $updated_items;
        $task->save();
    }

    public function expire($label, $value){
        switch ($label){
            case ('day'):
                return Date::now()->addDays($value);
            case ('week'):
                return Date::now()->addWeeks($value);
            case ('month'):
                return Date::now()->addMonths($value);
            case ('year'):
                return Date::now()->addYears($value);
        }
    }

    public function handleTasks($package, $client_id, $status = false){
        $arr_items = collect($package->items)->map(function ($item){
            return [
                'id'        => $item['id'],
                'status'    => 0,
                'type'      => $item['value'],
                'remaining' => $item['value'] === 'count' ? $item['count'] : $this->expire($item['duration_label'], $item['duration_value']),
            ];
        });
        if($status){
            $task = Task::where('client_id',$client_id)->first();
            if (!(isset($task)))
                $task = new Task();
        }
        else {
            $task = new Task();
        }
        $task->client_id = $client_id;
        $task->items     = $arr_items;
        $task->status    = 1;
        $task->save();
    }
}
