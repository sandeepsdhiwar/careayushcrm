<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StatusDetail extends Model
{
    //WhizzAct
    protected $fillable = array('status_name', 'created_at', 'updated_at');

    protected $table = 'status_detail';
}
