<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Item;
use App\Models\Admin\Package;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ItemController extends Controller
{
    public function index(){
        $items = Item::all();
        return view('item.index', ['items' => $items]);
    }
    public function addForm(){
        $packages = Package::all();
        return view('item.add',['packages' => $packages]);
    }
    public function editForm($id){
        $item = Item::find($id);
        $packages = Package::all();
        return view('item.edit',['item' => $item, 'id' => $id, 'packages' =>$packages]);
    }

    public function update(Request $request){
        $validator = Validator::make($request->all(),[
            'label'  => 'required',
            'value'  => 'required',
        ]);
        if ($validator->fails()){
            return redirect()->back()->with('error', $validator->errors());
        }
        if ($request->id)
            $item = Item::find($request->id);
        else
            $item = new Item();

        $item->package_id = $request->package_id;
        $item->label      = $request->label;
        $item->value      = $request->value;
        if($request->value === 'duration'){
            $item->count    = null;
            $item->duration = $request->duration;
        } elseif ($request->value === 'count'){
            $item->duration = null;
            $item->count    = $request->count;
        }
        $item->save();

        return redirect()->back()->with('success','Item Saved Successfully');
    }

    public function delete($id){
        $item = Item::find($id);
        $item->delete();
        return redirect()->back()->with('success', 'Item Is Deleted');
    }

}
