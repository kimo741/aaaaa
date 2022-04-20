<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Item;
use App\Models\Admin\Package;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class PackageController extends Controller
{
    public function index(){
        $packages = Package::all();
        return view('package.index', ['packages' => $packages]);
    }
    public function addForm(){
        $items = Item::all();
        return view('package.add', ['items' => $items]);
    }
    public function editForm($id){
        $package = Package::find($id);
        $all_items = Item::all();
        return view('package.edit',['package' => $package, 'all' => $all_items, 'id' => $id]);
    }

    public function update(Request $request){
        DB::beginTransaction();
        $validator = Validator::make($request->all(),[
            'name'        => 'required',
            'price'       => 'required',
            'description' => 'required',
            'type_label'  => 'required',
            'type_value'  => 'required',
            'status'      => 'required',
        ]);
        if ($validator->fails()){
            return redirect()->back()->with('error', $validator->errors());
        }

        if ($request->id)
            $package = Package::find($request->id);
        else
            $package = new Package();


        $package->name        = $request->name;
        $package->price       = $request->price;
        $package->description = $request->description;
        $package->type_label  = $request->type_label;
        $package->type_value  = $request->type_value;
//        $package->items_id    = json_decode($request->items_id);
        $package->status      = $request->status;
        $package->save();

        if($request->items_id){
            $package->items()->update($request->items_id);
        }

        DB::commit();
        if($request->id)
            return redirect()->route('package.get.all')->with('success','Package Updated Successfully');
        return redirect()->back()->with('success','Package Saved Successfully');
    }

    public function delete($id){
        $package = Package::find($id);
        $package->delete();
        return redirect()->back()->with('success', 'Package Is Deleted');
    }
}
