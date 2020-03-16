<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    protected $fillable = [
        'name', 'email','department_id', 'tel',
    ];

    public function getDepartment(){
    	return $this->belongsTo('App\Model\Department', 'department_id', 'id');
    }
}
