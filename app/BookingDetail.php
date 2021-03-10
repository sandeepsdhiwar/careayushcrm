<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BookingDetail extends Model
{
    //WhizzAct
    protected $fillable = array('booking_code','booking_date','booking_time','customer_id','ccare_executive','status_id','created_at', 'updated_at');

    protected $table = 'booking_detail';
}
