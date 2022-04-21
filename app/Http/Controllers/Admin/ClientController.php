<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Client;
use App\Models\Admin\Package;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class ClientController extends Controller
{
    public function index(){
        $clients = Client::all();
        $counts = Client::count();
        $active = Client::where('status','=',1)->count();
        $assigned = Client::where('package_id','!=',null|'0')->count();
        return view('client.manage.index', [
            'clients' => $clients,
            'all_client' => $counts,
            'active'    => $active,
            'assigned'    => $assigned,
        ]);
    }
    public function addForm(){
        $packages = Package::select(['id', 'name'])->where('status', '1')->get();
        return view('client.manage.info', ['packages' => $packages]);
    }
    public function editForm($id){
        $client = Client::find($id);
        $packages = Package::select(['id', 'name'])->where('status', '1')->get();
        return view('client.manage.edit',['client' => $client, 'id' => $id, 'packages' => $packages]);
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

        if($request->id)
            $client = Client::find($request->id);
        else
            $client = new Client();

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
            $this->assignPackage($client->id,$request->package_id);

        return redirect()->back()->with('success','Client Saved Successfully');
    }

    public function delete($id){
        $client = Client::find($id);
        $client->delete();
        return redirect()->back()->with('success', 'Client Is Deleted');
    }

    public function assignPackage($client_id, $package_id){
        $package = Package::find($package_id);
        $client = Client::find($client_id);
        if (isset($client) && isset($package)){
            $package->clients()->save($client);
        }else {
            return redirect()->back()->with('error','Package Not Saved');
        }
    }
}
