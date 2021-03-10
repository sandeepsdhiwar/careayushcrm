<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PatientDetail extends Model
{
    //WhizzAct
    protected $fillable = array('customer_id','patient_name','patient_location','patient_address','patient_contact','patient_gender','patient_age','created_at', 'updated_at');

    protected $table = 'patient_detail';
}
