<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use Session;
use Carbon;
use File;
use view;
use DB;
use App\Http\Requests;
use App\DesignationDetail;
use App\EmployeeDetail;

class DesignationController extends Controller
{
    //WhizzAct
    public function store(Request $request)
    {
        $dd = new DesignationDetail($request->all());
        if ($dd->save()) {
            return redirect()->back()->with('msg', 'Designation created Successfully');
        }
    }

    public function update(Request $request)
    {
        $dd = DesignationDetail::find($request->design_id)->update($request->all());
        if ($dd) {
            return redirect()->back()->with('msg', 'Designation updated Successfully');
        }
    }
    
    public function delete($id)
    {
        $dd = EmployeeDetail::where('desig_id', $id)->first();
        if ($dd) {
            echo "Sorry you can not delete this Designation because this Designation use many other important places";
        } else {
            DesignationDetail::where('id', $id)->delete();
            echo "success";
        }
    }
}
