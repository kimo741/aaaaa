<?php

namespace App\Http\Controllers\Admin;

use App\Models\Admin\Service;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class ServiceController extends Controller
{
    public function index(){
        $services = Service::all();
        return view('service.index', ['services' => $services]);
    }
    public function addForm(){
        return view('service.add');
    }
    public function editForm($id){
        $service = Service::find($id);
        return view('service.edit',['service' => $service, 'id' => $id]);
    }

    public function update(Request $request){
        $validator = Validator::make($request->all(),[
            'title'  => 'required',
            'body'   => 'required',
            'status' => 'required',
        ]);
        if ($validator->fails()){
            return redirect()->back()->with('error', $validator->errors());
        }

        if ($request->id)
            $service = Service::find($request->id);
        else
            $service = new Service();

        $service->title  = $request->title;
        $service->body   = $request->body;
        $service->status = $request->status;
        $service->save();

        return redirect()->back()->with('success','Service Saved Successfully');
    }

    public function delete($id){
        $service = Service::find($id);
        $service->delete();
        return redirect()->back()->with('success', 'Service Is Deleted');
    }

}
