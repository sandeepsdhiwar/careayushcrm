<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BillDetail extends Model
{
    //WhizzAct
    protected $fillable = array('customer_id','booking_id','net_service_amount', 'tax_percent','net_tax_amount','net_discount_offer','total_paid','total_balance','bill_date', 'office_executive','created_at', 'updated_at');

    protected $table = 'bill_detail';
}
