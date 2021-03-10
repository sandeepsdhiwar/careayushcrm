<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ServiceNeed extends Model
{
    //WhizzAct
    protected $fillable = array('booking_id', 'patient_id', 'service_type_id', 'from_date', 'till_date', 'total_days', 'session_day_charge', 'service_charge', 'service_tax', 'discount_offer', 'payable_amount', 'service_session', 'service_location', 'service_address', 'service_status', 'created_at', 'updated_at');

    protected $table = 'service_needed';
}
