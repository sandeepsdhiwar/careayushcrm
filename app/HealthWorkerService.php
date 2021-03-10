<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HealthWorkerService extends Model
{
    //WhizzAct
    protected $fillable = array('hw_id','service_id','created_at', 'updated_at');

    protected $table = 'hw_service';
}
