<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class transfer extends Model
{
    protected $fillable = [

        'identification_number',
        'asset_category',
        'previous_user',
        'current_user',
        'previous_department',
        'department_id',
        'created_at',
        'updated_at'
    ];

    public function Department()
    {
        return $this->belongsTo('App\Department');
    }
}
