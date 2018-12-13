<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Asset;
use App\Item;
use App\Department;

class DashboardController extends Controller
{
    public function index(){


        $department_count = Department::all()->count();
        $total_asset_count = Asset::all()->count();
        $current_asset_count = Asset::Where('scrap',0)->count();
        $scrap_count = Asset::where('scrap',1)->count();
        $items = Item::all();
        $departments = Department::all();

        return view ('welcome',compact('department_count','total_asset_count','items','departments','scrap_count','current_asset_count'));

    }
}
