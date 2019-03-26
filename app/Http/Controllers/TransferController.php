<?php

namespace App\Http\Controllers;
use App\Asset;
use App\transfer;
use App\department;

use Illuminate\Http\Request;

class TransferController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index() {

$transfers = transfer::all();

return view('transfer.index',compact('transfers'));

    }

  public function assets(){


        $assets = Asset::all();

        return view('transfer.assets',compact('assets'));
}


    public function transfer($id){

        $asset = Asset::where('sap_no',$id)->first();
        $departments = Department::Where('id','!=',$asset->Department->id)->get();

        return view('transfer.transfer',compact('asset','departments'));


    }


    public function store(Request $request){

      //DD($request->all());

       Asset::where('id',$request->id)->update($request->only(['asset_user','department_id']));

      $transfer = new transfer();

      $transfer->identification_number = $request->identification_no;
        $transfer->asset_category = $request->category;
        $transfer->previous_user = $request->pu;
        $transfer->current_user = $request->asset_user;
        $transfer->previous_department = $request->pd;
        $transfer->department_id = $request->department_id;
        $transfer ->justification = $request->justification;

        $transfer->save();

        session()->flash('message','Asset Transfer successful');
        return redirect()->route('transferAsset');





    }
}
