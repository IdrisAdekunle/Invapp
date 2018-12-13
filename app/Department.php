<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    protected $fillable =[
        'name'
    ];

    public function Asset()
    {
        return $this->hasMany('App\Asset');
    }
    public function transfer()
    {
        return $this->hasMany('App\transfer');
    }


    public function setNameAttribute($name){

        $this->attributes['name'] = strtoupper($name);
    }
}
