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
use App\LoginDetail;
use App\EmployeeDetail;

class EmployeeController extends Controller
{
    //WhizzAct
    public function store(Request $request)
    {
        $ed = new EmployeeDetail($request->all());
        if ($request->hasFile('profile_pic')) {
            $extension = $request->file('profile_pic')->getClientOriginalExtension();
            $fileName = "careayush-".uniqid().time().".".$extension;
            $folderpath  = 'upload/employee/images'.'/';
            File::makeDirectory($folderpath, $mode = 0777, true, true);
            $request->file('profile_pic')->move($folderpath, $fileName);
            $profile_pic = 'upload/employee/images/'.$fileName;
        } else {
            $profile_pic = "";
        }
        $ed->profile_pic=$profile_pic;
        if ($ed->save()) {
            return redirect()->back()->with('msg', 'Employee created Successfully');
        }
    }

    public function update(Request $request)
    {
        $ed = EmployeeDetail::find($request->id);
        if ($request->hasFile('profile_pic')) {
            if ($ed->profile_pic!="") {
                File::delete($ed->profile_pic);
            }
            $extension = $request->file('profile_pic')->getClientOriginalExtension();
            $fileName = "careayush-".uniqid().time().".".$extension;
            $folderpath  = 'upload/employee/images'.'/';
            File::makeDirectory($folderpath, $mode = 0777, true, true);
            $request->file('profile_pic')->move($folderpath, $fileName);
            $profile_pic = 'upload/employee/images/'.$fileName;
        } else {
            if ($ed->profile_pic!="") {
                $profile_pic = $ed->profile_pic;
            } else {
                $profile_pic = "";
            }
        }
        $ed->branch_id=$request->branch_id;
        $ed->desig_id=$request->desig_id;
        $ed->emp_name=$request->emp_name;
        $ed->emp_gender=$request->emp_gender;
        $ed->emp_doj=$request->emp_doj;
        $ed->emp_contact=$request->emp_contact;
        $ed->alt_contact=$request->alt_contact;
        $ed->emp_email=$request->emp_email;
        $ed->emp_address=$request->emp_address;
        $ed->blood_group=$request->blood_group;
        $ed->is_active=$request->is_active;
        $ed->profile_pic=$profile_pic;
        if ($ed->update()) {
            return redirect()->back()->with('msg', 'Employee updated Successfully');
        }
    }
    
    public function delete($id)
    {
        $yd = EmployeeDetail::where('id', $id)->first();
        if ($yd) {
            echo "Sorry you can not delete this Employee because this Employee user many other important places";
        } else {
            YearDetail::where('id', $id)->delete();
            echo "Employee delete successfull";
        }
    }
}
