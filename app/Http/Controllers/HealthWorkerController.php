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
use App\HealthWorker;
use App\EmployeeDetail;
use App\LocationDetail;

class HealthWorkerController extends Controller
{
    //WhizzAct
    public function store(Request $request)
    {
        $hw = new HealthWorker($request->all());
        if ($request->hasFile('profile_pic')) {
            $extension = $request->file('profile_pic')->getClientOriginalExtension();
            $fileName = "careayush-".uniqid().time().".".$extension;
            $folderpath  = 'upload/healthWorker/images'.'/';
            File::makeDirectory($folderpath, $mode = 0777, true, true);
            $request->file('profile_pic')->move($folderpath, $fileName);
            $profile_pic = 'upload/healthWorker/images/'.$fileName;
        } else {
            $profile_pic = "";
        }
        $ld=LocationDetail::where('location_name', $request->location_name)->first();
        if (!$ld) {
            $l=new LocationDetail();
            $l->location_name=$request->location_name;
            $l->save();
        }
        $hw->hw_location=$request->location_name;
        $hw->profile_pic=$profile_pic;
        $hw->is_active='active';
        if ($hw->save()) {
            return redirect()->back()->with('msg', 'Employee created Successfully');
        }
    }

    public function updateHW(Request $request)
    {
        $hw = HealthWorker::find($request->id);
        if ($request->hasFile('profile_pic')) {


            if($hw->profile_pic!="")
	        {
	            if(file_exists( public_path().'/upload/healthWorker/images/'.$hw->profile_pic))
	            {
	                unlink(public_path().'/upload/healthWorker/images/'.$hw->profile_pic);
	            }
	        }

            $extension = $request->file('profile_pic')->getClientOriginalExtension();
            $fileName = "careayush-".uniqid().time().".".$extension;
            $folderpath  = 'upload/healthWorker/images'.'/';
            File::makeDirectory($folderpath, $mode = 0777, true, true);
            $request->file('profile_pic')->move($folderpath, $fileName);
            $profile_pic = 'upload/healthWorker/images/'.$fileName;
        } else {
            $profile_pic = "";
        }

        $ld=LocationDetail::where('location_name', $request->location_name)->first();
        if (!$ld) {
            $l=new LocationDetail();
            $l->location_name=$request->location_name;
            $l->update();
        }
        $hw->hw_name=$request->hw_name;
        $hw->hw_gender=$request->hw_gender;
        $hw->hw_contact=$request->hw_contact;
        $hw->hw_email=$request->hw_email;
        $hw->hw_location=$request->hw_location;
        $hw->hw_address=$request->hw_address;
        $hw->blood_group=$request->blood_group;
        $hw->profile_pic=$profile_pic;
        
        
        if ($hw->update()) {
            return redirect()->back()->with('msg', 'Employee updated Successfully');
        }
    }


    
    
    // public function delete($id){
    //     $yd = HealthWorker::where('id', $id)->first();
    //     if($yd){
    //         echo "Sorry you can not delete this Employee because this Employee user many other important places";
    //     }else{
    //         YearDetail::where('id', $id)->delete();
    //         echo "Employee delete successfull";
    //     }
    // }
}
