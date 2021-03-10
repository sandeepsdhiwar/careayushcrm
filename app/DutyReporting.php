<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DutyReporting extends Model
{
    //WhizzAct
    protected $fillable = array('duty_id','duty_date','report_status','duty_charge','office_executive','created_at', 'updated_at');

    protected $table = 'duty_reporting';
}
