<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NavAccess extends Model
{
    //WhizzAct
    protected $fillable = array('role_id','nav_url','created_at', 'updated_at');

    protected $table = 'nav_access';
}
