<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DutyReplacement extends Model
{
    //WhizzAct
    protected $fillable = array('service_id','replace_to', 'replace_by', 'replace_date', 'office_executive','created_at', 'updated_at');

    protected $table = 'duty_replacement';
}
