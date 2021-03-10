<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use DB;
use App\CustomerDetail;

class CustomerController extends Controller
{
    //
    public function createBranchCustomer(Request $request)
    {
        $cd=new CustomerDetail($request->all());
        if ($cd->save()) {
            return redirect('/branch-customer-detail')->with('msg', 'Customer Added Successfully');
        } else {
            return redirect()->back()->with('msg', 'Could not add Customer try again');
        }
    }

    public function updateBranchCustomer(Request $request)
    {
        $cd=CustomerDetail::find($request->id);
        if ($cd) {
            $cd->update($request->all());
            return redirect('/branch-customer-detail')->with('msg', 'Customer Updated Successfully');
        }
    }
}
