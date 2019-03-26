<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Asset;

class QrcodeController extends Controller
{


    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){

        return view('qrcode.index');

    }


    public function scan($serial){

        $asset = Asset::where('serial_number',$serial)->first();

       //dd($asset);

       return view('qrcode.show',compact('asset'));

    }




}
