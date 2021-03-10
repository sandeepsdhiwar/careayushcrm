<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RoleDetail extends Model
{
    //WhizzAct
    protected $fillable = array('role_name', 'is_active','created_at', 'updated_at');

    protected $table = 'role_detail';
}
