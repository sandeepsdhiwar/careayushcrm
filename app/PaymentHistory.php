<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PaymentHistory extends Model
{
    //WhizzAct
    protected $fillable = array('bill_id','payment_date','paid_amount','tax_percent','tax_amount','pay_mode','cheque_no','cheque_date','bank_name_branch','office_executive','created_at', 'updated_at');

    protected $table = 'payment_history';
}
