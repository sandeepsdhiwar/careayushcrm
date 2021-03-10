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
use App\RoleDetail;

class RoleController extends Controller
{
    //WhizzAct
    public function store(Request $request)
    {
        $st = new RoleDetail($request->all());
        if ($st->save()) {
            return redirect()->back()->with('msg', 'Role created Successfully');
        }
    }

    public function update(Request $request)
    {
        $st = RoleDetail::find($request->role_id)->update($request->all());
        if ($st) {
            return redirect()->back()->with('msg', 'Role updated Successfully');
        }
    }
    
    public function delete($id)
    {
        $st = RoleDetail::where('id', $id)->delete();
        if ($st) {
            echo "success";
        } else {
            echo "failed";
        }
    }
}
