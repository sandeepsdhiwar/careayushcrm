<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\BookingDetail;
use App\ServiceNeed;

class BookingController extends Controller
{
    //
    public function createBooking(Request $request)
    {
        $bd=new BookingDetail();
        $randnum = rand(11111111, 99999999);
        $book_code='CA'.$randnum;
        $bd->booking_code=$book_code;
        $bd->booking_date=date("Y-m-d");
        $bd->booking_time=date("h:i:s");
        $bd->customer_id=$request->customer_id;
        $bd->ccare_executive=Session::get('emp_id');
        $bd->status_id=$request->status_id;
        
        if ($bd->save()) {
            $sn=new ServiceNeed($request->all());
            $sn->booking_id=$bd->id;
            $sn->service_status="Confirm";
            if ($sn->save()) {
                return redirect('view-customer-history/'.$request->customer_id)->with('msg', 'Booking, Requirement Created Successfully');
            } else {
                return redirect()->back()->with('msg', 'Booking Created without requirement add requirement');
            }
        } else {
            return redirect()->back()->with('msg', 'Booking Not created');
        }
    }

    public function updateBooking(Request $request)
    {
        $bd=BookingDetail::find($request->booking_id);
        if ($bd->update($request->all())) {
            return redirect()->back()->with('msg', 'Booking Detail Updated');
        } else {
            return redirect()->back()->with('msg', 'Could Not Update Booking Detail');
        }
    }
    public function updateServiceNeed(Request $request)
    {
        $sn=ServiceNeed::find($request->service_need_id);
        if ($sn->update($request->all())) {
            return redirect()->back()->with('msg', 'Requirement Updated');
        } else {
            return redirect()->back()->with('msg', 'Requirement could not be updated');
        }
    }
    public function createServiceNeed(Request $request)
    {
        $sn=new ServiceNeed($request->all());
        if ($sn->save()) {
            return redirect()->back()->with('msg', 'Requirement Added');
        } else {
            return redirect()->back()->with('msg', 'Requirement could not be added');
        }
    }
}
