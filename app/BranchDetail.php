<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BranchDetail extends Model
{
    //WhizzAct
    protected $fillable = array('branch_name','branch_address','is_active','created_at', 'updated_at');

    protected $table = 'branch_detail';
}
