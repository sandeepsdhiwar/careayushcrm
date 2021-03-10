<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EmployeeAttendance extends Model
{
    //WhizzAct
    protected $fillable = array('emp_id','work_date', 'in_time','out_time','attendance_status','created_at', 'updated_at');

    protected $table = 'emp_attendance';
}
