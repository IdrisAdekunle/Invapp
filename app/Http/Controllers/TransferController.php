<?php

namespace App\Http\Controllers;
use App\transfer;

use Illuminate\Http\Request;

class TransferController extends Controller
{
    public function index() {

$transfers = transfer::all();

return view('transfer.index',compact('transfers'));

    }
}
