<?php

namespace App;


use Illuminate\Database\Eloquent\Model;
use DB;

class Asset extends Model
{
    protected  $fillable = [
        'identification_no',
        'sap_no',
        'asset_user',
        'item_id',
        'department_id',
        'model',
        'serial_number',
        'scrap',
        'qrcode'
    ];

    public function scopeGenerateID()
    {
        $increment_no = 1;
        $new_id = 100000;
        $prefix = "ICT/ASST/";
        $last_asset = DB::table('assets')
            ->latest('id')
            ->first();
        if ($last_asset == NULL) {

            $increment = $new_id + $increment_no;
            return $prefix . $increment;

        } else {

            $new_increment = $new_id + $last_asset->id + $increment_no;
            return $prefix . $new_increment;

        }


    }

    public function Department()
    {
        return $this->belongsTo('App\Department');
    }
    public function Item()
    {
        return $this->belongsTo('App\Item');
    }

    public function setModelAttribute($model){

        $this->attributes['model'] = strtoupper($model);
    }

    public function setSerialNumberAttribute($serial_number){

        $this->attributes['serial_number'] = strtoupper($serial_number);
    }
    public function setSapNoAttribute($sap_no){

        $this->attributes['sap_no'] = strtoupper($sap_no);
    }

    public function setAssetUserAttribute($asset_user){

        $this->attributes['asset_user'] = strtoupper($asset_user);
    }

    public function getRouteKeyName()
    {
        return 'sap_no';
    }
}
