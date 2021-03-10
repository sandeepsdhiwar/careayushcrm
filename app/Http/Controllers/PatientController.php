<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CustomerDetail;
use App\PatientDetail;
use Session;

class PatientController extends Controller
{
    //
    public function save(Request $request)
    {
        $pd=new PatientDetail($request->all());
        if ($pd->save()) {
            return redirect()->back()->with('msg', 'Patient Added Successfully');
        } else {
            return redirect()->back()->with('msg', 'Problem in adding patient details');
        }
    }

    public function update(Request $request)
    {
        $pd=PatientDetail::find($request->patient_id);
        if ($pd) {
            if ($pd->update($request->all())) {
                return redirect()->back()->with('msg', 'Patient Updated Successfully');
            } else {
                return redirect()->back()->with('msg', 'Patient Could not be Updated');
            }
        } else {
            return redirect()->back()->with('msg', 'No such Patient detail');
        }
    }
}
