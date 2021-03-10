<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ServiceType extends Model
{
    //WhizzAct
    protected $fillable = array('service_name', 'is_active', 'created_at', 'updated_at');

    protected $table = 'service_type';
}
