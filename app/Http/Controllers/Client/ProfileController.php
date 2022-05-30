<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Admin\Client;
use App\Models\Admin\Package;
use App\Models\Admin\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class ProfileController extends Controller
{
    public function index(){
        $client = auth()->guard('client')->user();
        return view('client.dashboard.profile',['client' => $client]);
    }
    public function update(Request $request){
        $validator = Validator::make($request->all(),[
            'first_name' => 'required',
            'last_name'  => 'required',
            'email'      => 'required|email',
            'phone'      => 'required',
        ]);
        if ($validator->fails())
            return redirect()->back()->with('error', $validator->errors());

        $client = auth()->guard('client')->user();
        $client->first_name = $request->first_name;
        $client->last_name  = $request->last_name;
        $client->email      = $request->email;
        $client->phone      = $request->phone;
        $client->save();
        return redirect()->back()->with('success', 'Updated Successfully');
    }
    public function reset(Request $request){
        $client = Client::findOrFail(auth()->user()->id);
        $validator = Validator::make($request->all(),[
//            'password'         => 'required',
            'new_password'     => 'required',
            'confirm_password' => 'required',
        ]);
        if ($validator->fails())
            return redirect()->back()->with('error', $validator->errors());

//        if(! Hash::check($request->password, $client->password) )
//            return redirect()->back()->with('error', 'Old Password Incorrect');

        if ($request->new_password !== $request->confirm_password)
            return redirect()->back()->with('error','Your Password Confirm Invalid');

        $client->password = Hash::make($request->new_password);

        $client->save();

        return redirect()->back()->with('success','Your Password Changed');
    }

    public function assignPackage(Request $request){
        $validator = Validator::make($request->all(),[
            'package_id' => 'required',
            'client_id'  => 'required',
        ]);
        if ($validator->fails())
            return redirect()->back()->with('error', $validator->errors());

        $package = Package::find($request->package_id);
        $client = Client::find($request->client_id);
        if (isset($client) && isset($package)){
            $package->clients()->save($client);
            $client->sub_time  = Date::now();
            $client->expire_at = $this->expire($package->type_label, $package->type_value);
            $client->save();
            $this->handleTasks($package,$request->client_id);
            return redirect()->back();
        }else {
            return redirect()->back()->with('error','Package Not Saved');
        }
    }

    public function handleTasks($package, $client_id, $status = false){
        $arr_items = collect($package->items)->map(function ($item){
            return [
                'id' => $item['id'],
                'status' => 0,
                'type' => $item['value'],
                'remaining' => $item['value'] === 'count' ? $item['count'] : $this->expire($item['duration_label'], $item['duration_value']),
            ];
        });
        if($status)
            $task = Task::where('client_id',$client_id)->first();
        else
            $task = new Task();

        $task->client_id = $client_id;
        $task->items     = $arr_items;
        $task->status    = 1;
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



}
