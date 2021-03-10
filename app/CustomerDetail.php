<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CustomerDetail extends Model
{
    //WhizzAct
    protected $fillable = array('branch_id','cust_name','cust_contact','cust_email','cust_location','cust_address','ccare_executive','created_at', 'updated_at');

    protected $table = 'customer_detail';
}
