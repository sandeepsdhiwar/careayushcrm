<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class YearDetail extends Model
{
    //WhizzAct
    protected $fillable = array('year_name', 'is_active', 'created_at', 'updated_at');

    protected $table = 'year_detail';
}
