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
use App\BranchDetail;
use App\EmployeeDetail;

class BranchController extends Controller
{
    //WhizzAct
    public function store(Request $request)
    {
        $bd = new BranchDetail($request->all());
        if ($bd->save()) {
            return redirect()->back()->with('msg', 'Branch created Successfully');
        }
    }

    public function update(Request $request)
    {
        $bd = BranchDetail::find($request->branch_id)->update($request->all());
        if ($bd) {
            return redirect()->back()->with('msg', 'Branch updated Successfully');
        }
    }
    
    public function delete($id)
    {
        $yd = EmployeeDetail::where('branch_id', $id)->first();
        if ($yd) {
            echo "Sorry you can not delete this branch because this branch use many other important places";
        } else {
            BranchDetail::where('id', $id)->delete();
            echo "success";
        }
    }
}
