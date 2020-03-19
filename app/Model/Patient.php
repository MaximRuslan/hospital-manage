<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    protected $fillable = [
        'name','civil_id' , 'phone' , 'email', 'address','status','status_date',
    ];
}
