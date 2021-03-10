<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MonthDetail extends Model
{
    //WhizzAct
    protected $fillable = array('month_name', 'is_active', 'created_at', 'updated_at');

    protected $table = 'month_detail';
}
