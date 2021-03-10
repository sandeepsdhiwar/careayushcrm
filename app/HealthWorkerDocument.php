<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HealthWorkerDocument extends Model
{
    //WhizzAct
    protected $fillable = array('hw_id','doc_type_id','doc_file','created_at', 'updated_at');

    protected $table = 'hw_document';
}
