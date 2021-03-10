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
use App\EmployeeDetail;
use App\LoginDetail;
use App\RoleDetail;

class LoginController extends Controller
{
    //WhizzAct
    //
    public function logout(Request $request, $id)
    {
        $request->session()->invalidate();
        Session::flush();
        return redirect('/');
    }

    public function authenticate(Request $request)
    {
        $login_id = $request->login_id;
        $login_password = $request->login_password;
        $logger_type=$request->logger_type;

        $checkLogin=LoginDetail::where('login_id', $login_id)->where('login_password', $login_password)->where('is_active', 'active')->first();
        if ($checkLogin) {
            $role=RoleDetail::find($checkLogin->role_id);
            $ed=EmployeeDetail::find($checkLogin->emp_id);
        }
        if ($role) {
            Session::put('role_name', $role->role_name);

            if ($checkLogin && $logger_type=="admin" && $role->role_name=="admin") {
                Session::put('branch_id', $ed->branch_id);
                Session::put('emp_id', $checkLogin->emp_id);
                Session::put('emp_name', $checkLogin->login_name);
                return  redirect('/admin-dashboard');
            } elseif ($checkLogin && $logger_type=="manager" && $role->role_name=="manager") {
                Session::put('branch_id', $ed->branch_id);
                Session::put('emp_id', $checkLogin->emp_id);
                Session::put('emp_name', $checkLogin->login_name);
                return  redirect('/manager-dashboard');
            } elseif ($checkLogin && $logger_type=="cce" && $role->role_name=="cce") {
                Session::put('branch_id', $ed->branch_id);
                Session::put('emp_id', $checkLogin->emp_id);
                Session::put('emp_name', $checkLogin->login_name);
                return  redirect('/cce-dashboard');
            } elseif ($checkLogin && $logger_type=="offe" && $role->role_name=="offe") {
                Session::put('branch_id', $ed->branch_id);
                Session::put('emp_id', $checkLogin->emp_id);
                Session::put('emp_name', $checkLogin->login_name);
                return  redirect('/offe-dashboard');
            } else {
                return redirect()->back()->with('msg', 'Invalid Login Try Again...');
            }
        } else {
            return redirect()->back()->with('msg', 'Invalid Login Try Again...');
        }
    }

    public function store(Request $request)
    {
        $ld = new LoginDetail($request->all());
        if ($ld->save()) {
            return redirect()->back()->with('msg', 'Login Detail created Successfully');
        }
    }

    public function update(Request $request)
    {
        $ld = LoginDetail::find($request->id)->update($request->all());
        if ($ld) {
            return redirect()->back()->with('msg', 'Login Detail updated Successfully');
        }
    }
    
    public function delete($id)
    {
        $ld = LoginDetail::find($id)->delete();
        if ($ld) {
            echo "success";
        } else {
            echo "failed";
        }
    }
}
