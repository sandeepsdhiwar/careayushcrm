<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DocType extends Model
{
    //WhizzAct
    protected $fillable = array('doc_name', 'is_active', 'created_at', 'updated_at');

    protected $table = 'doc_type';
}
