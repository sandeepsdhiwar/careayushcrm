<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HealthWorker extends Model
{
    //WhizzAct
    protected $fillable = array('hw_name','hw_gender','hw_contact','hw_email','hw_location','hw_address','blood_group','profile_pic','is_active','created_at', 'updated_at');

    protected $table = 'health_worker';
}
