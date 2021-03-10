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
use App\ServiceType;

class ServiceController extends Controller
{
    //WhizzAct
    public function store(Request $request)
    {
        $st = new ServiceType($request->all());
        if ($st->save()) {
            return redirect()->back()->with('msg', 'Service Type created Successfully');
        }
    }

    public function update(Request $request)
    {
        $st = ServiceType::find($request->st_id)->update($request->all());
        if ($st) {
            return redirect()->back()->with('msg', 'Service Type updated Successfully');
        }
    }
    
    public function delete($id)
    {
        $st = ServiceType::where('id', $id)->delete();
        if ($st) {
            echo "success";
        } else {
            echo "failed";
        }
    }
}
