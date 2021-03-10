<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ReplaceQuery extends Model
{
    //WhizzAct
    protected $fillable = array('query_date','customer_id','booking_id','service_id','from_date','till_date','replce_status','ccare_executive','created_at', 'updated_at');

    protected $table = 'replace_query';
}
