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
use App\YearDetail;

class YearController extends Controller
{
    //WhizzAct
    public function store(Request $request)
    {
        $yd = new YearDetail($request->all());
        if ($yd->save()) {
            return redirect()->back()->with('msg', 'Year created Successfully');
        }
    }

    public function update(Request $request)
    {
        $yd = YearDetail::find($request->year_id)->update($request->all());
        if ($yd) {
            return redirect()->back()->with('msg', 'Year updated Successfully');
        }
    }
    
    public function delete($id)
    {
        $yd = YearDetail::where('id', $id)->delete();
        if ($yd) {
            echo "success";
        } else {
            echo "failed";
        }
    }
}
