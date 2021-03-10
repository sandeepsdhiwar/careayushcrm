<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class IncludeItem extends Model
{
    //WhizzAct
    protected $fillable = array('inclusion_name','created_at', 'updated_at');

    protected $table = 'include_item';
}
