<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $fillable =[
        'name'
    ];


    public function Asset()
    {
        return $this->hasMany('App\Asset');
    }

    public function setNameAttribute($name){

        $this->attributes['name'] = strtoupper($name);
    }
}

