<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PaymentReceipt extends Model
{
    //WhizzAct
    protected $fillable = array('paymenthistory_id','include_item_id','include_amount','created_at', 'updated_at');

    protected $table = 'payment_receipt';
}
