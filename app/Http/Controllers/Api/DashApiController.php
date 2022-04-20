<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Admin\Package;
use App\Models\Admin\Service;

class DashApiController extends Controller
{
    public function indexPackage(){
        $packages = Package::all();
        return response()->json(['packages' => $packages]);
    }
    public function showPackage($id){
        $package = Package::find($id);
        return response()->json(['package' => $package]);
    }

    public function indexService(){
        $services = Service::all();
        return response()->json(['services' => $services]);
    }
    public function showService($id){
        $service = Service::find($id);
        return response()->json(['service' => $service]);
    }


}
