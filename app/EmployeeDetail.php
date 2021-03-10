<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EmployeeDetail extends Model
{
    //WhizzAct
    protected $fillable = array('branch_id','desig_id', 'emp_name','emp_gender','emp_contact','alt_contact','emp_email','emp_address','emp_doj','blood_group','profile_pic','is_active','created_at', 'updated_at');

    protected $table = 'emp_detail';
}
