<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LocationDetail extends Model
{
    //WhizzAct
    protected $fillable = array('location_name','created_at', 'updated_at');

    protected $table = 'location_detail';
}
