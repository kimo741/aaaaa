<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Admin\Client;
use App\Models\Admin\Package;
use App\Models\Admin\Task;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public $client;

    public function __construct()
    {
        $this->middleware(function ($request, $next) {
            $this->client = auth()->user();
            return $next($request);
        });
    }

    public function index(){
//         All Package To Upgrade
        $packages = Package::all();
        // Get Client Package
        if ($this->client->package_id){
            $package = $packages->find($this->client->package_id);
            // Get Package Items
            $items = $package->items;
            $task = Task::all();
            $client_tasks = $task->where('client_id',$this->client->id)->first();
            $statusWithItemID = collect($client_tasks->items)->map(function ($task){
                return ['item_id' => $task['id'],'status' => $task['status']];
            });
            return view('client.dashboard.home',['all_packages' => $packages, 'package' => $package , 'items' => $items, 'statusItem' => $statusWithItemID]);
        }
//         All & Done Tasks
        // Return View
            return view('client.dashboard.home',['all_packages' => $packages]);

    }
}
