<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DutyAssignment extends Model
{
    //WhizzAct
    protected $fillable = array('service_id','health_worker_id','from_date','till_date','office_executive','created_at', 'updated_at');

    protected $table = 'duty_assignment';
}
