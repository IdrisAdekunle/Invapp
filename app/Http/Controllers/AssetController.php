<?php

namespace App\Http\Controllers;

use App\Asset;
use App\Item;
use App\Department;
use App\transfer;
use Illuminate\Http\Request;
use Excel;
use App\Exports\AssetExport;
use App\Exports\ScrapExport;
use Carbon\Carbon;
use Validator;
use SimpleSoftwareIO\QrCode\Facades\QrCode;




class AssetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {

      $asset = Asset::where('scrap',0)->get();

      return view('asset.index',compact('asset'));

    }
    public function scrapped()
    {

      $asset = Asset::where('scrap',1)->get();

      return view('asset.ScrappedAsset',compact('asset'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $items =Item::all();
            $departments=Department::all();
        return view('asset.create',['items'=>$items,'departments'=>$departments]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


            for ($a = 0; $a < count($request->model); $a++) {
                $asset = new Asset();
                $asset->identification_no = Asset::GenerateID();
                $asset->sap_no = $request->sap_no[$a];
                $asset->asset_user = $request->asset_user[$a];
                $asset->item_id = $request->item_id;
                $asset->department_id = $request->department_id;
                $asset->model = $request->model[$a];
                $asset->serial_number = $request->serial_number[$a];
                $asset->qrcode =$request->asset_user[$a].".png";

                    QrCode::format('png')
                    ->merge('img/grand.png', .1, true)
                    ->size(200)->errorCorrection('H')
                    ->generate('https://invapp.test/scan/'.$request->serial_number[$a],'../public/qrcodes/'.$request->asset_user[$a].".png");

                $asset->save();



            }


        session()->flash('message','All asset uploaded');
        return back();

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Asset  $asset
     * @return \Illuminate\Http\Response
     */
    public function show(Asset $asset)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Asset  $asset
     * @return \Illuminate\Http\Response
     */
    public function edit(Asset $asset)
    {
      // return $asset->department->id;

        $items = Item::where('id', '!=',$asset->Item->id)->get();
       $departments = Department::Where('id','!=',$asset->Department->id)->get();
        return view('asset.edit',['asset' => $asset,'items' => $items,'departments' => $departments]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Asset  $asset
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Asset $asset)
    {

      //  dd($request->all());
        $asset->update($request->all());

        session()->flash('message','Asset successful updated');
        return redirect()->route('asset.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Asset  $asset
     * @return \Illuminate\Http\Response
     */
    public function destroy(Asset $asset)
    {
        $asset->delete();
        session()->flash('message','Asset Deleted Successfully');
        return redirect()->route('scrapped');
    }

    public function ScrapAsset(Request $request, $id){

        $asset = Asset::FindOrFail($id);

        $asset->update($request->all());

        session()->flash('message','Asset scrapped');
        return redirect()->route('asset.index');

    }
    public function UnScrapAsset(Request $request, $id){

        $asset = Asset::FindOrFail($id);

        $asset->update($request->all());

        session()->flash('message','Asset moved out of scrapped');
        return back();

    }

    public function ExportAsset(){

       $prefix ="Assets_As_At_";
        $name = $prefix.carbon::now()->toFormattedDateString();

        return  Excel::download(new  AssetExport, $name.'.xlsx');

    }


    public function ExportScrap(){

        $prefix ="Scrapped_Assets_As_At_";
        $name = $prefix.carbon::now()->toFormattedDateString();

        return  Excel::download(new  ScrapExport, $name.'.xlsx');

    }




}
