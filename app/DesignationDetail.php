<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DesignationDetail extends Model
{
    //WhizzAct
    protected $fillable = array('desig_name', 'is_active','created_at', 'updated_at');

    protected $table = 'desig_detail';
}
