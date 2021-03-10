<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LoginDetail extends Model
{
    //WhizzAct
    protected $fillable = array('role_id','emp_id','login_name','login_id','login_password','is_active','created_at', 'updated_at');

    protected $table = 'login_detail';
}
