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
use App\MonthDetail;

class MonthController extends Controller
{
    //WhizzAct
    public function store(Request $request)
    {
        $dd = new MonthDetail($request->all());
        if ($dd->save()) {
            return redirect()->back()->with('msg', 'Month created Successfully');
        }
    }

    public function update(Request $request)
    {
        $dd = MonthDetail::find($request->month_id)->update($request->all());
        if ($dd) {
            return redirect()->back()->with('msg', 'Month updated Successfully');
        }
    }
    
    public function delete($id)
    {
        MonthDetail::where('id', $id)->delete();
        echo "success";
    }
}
