<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Order\UpdateOrderRequest;
use Illuminate\Http\Request;
use App\Models\Admin\Order;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Validator;

class OrderController extends Controller
{

    /*
     *  Create Order From Client Interface
     *  And then send thanks email to client
     *  And Send notifaction to Admin
     */
    public function create( Request $req ) {

        // validate client Request
        $validator = Validator::make($req->all(),[
            'client_name'  => 'required',
            'email'        => 'required|unique:orders,email',
            'city'         => 'required',
            'company_name' => 'required',
            'phone'        => 'required|unique:orders,phone|max:20',
            'age'          => 'required',
            'service'      => 'required',
            'type'         => 'required'
        ]);
        // return error massege if validator falis
        if ($validator->fails()){
            return  response()->json($validator->errors());
        }

        $order = Order::create( collect($req->all())->toArray() );

        // TODO Send clint Email
        // TODO Send Admin Email

        return response()->json([
            "status" => $order->id
        ]);
    }

    /*
      *  Update Order From Client Interface
      */
    public function edit( $id ) {
        // TODO ADD VIEW
        // return view('')
    }

    /*
      *  Update Order From Client Interface
      */
    public function update( UpdateOrderRequest $req ) {

        $orderToUpdate = $req->validated();

        $order = Order::where('id', $req->id)->update( $orderToUpdate );

        return response()->json([
            "status" => $order
        ]);
    }

    /*
      *  Update Order From Client Interface
      */
    public function delete( $id ) {

        // Get Order
        $order = Order::findOrfail($id);

        $order->delete();

        // TODO ADD VIEW
        return response()->json([
            "status" => $order
        ]);
    }
}
