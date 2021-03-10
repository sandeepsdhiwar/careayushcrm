<?php
$sn=App\ServiceNeed::find($_GET['service_need_id']);
$stype=App\ServiceType::find($sn->service_type_id);
$patient=App\PatientDetail::find($sn->patient_id);
$bd=App\BookingDetail::find($sn->booking_id);
$customer=App\CustomerDetail::find($bd->customer_id);
?>
<div class="modal-header">
    <button type="button" class="close" data-dismiss="modal">&times;</button>
</div>
<div class="modal-body">
    <table style="width:100%;" class="table table-bordered">
        <tr>
            <th colspan="3" id="addHeader" style="text-transform:uppercase;"><center><strong>Edit Service Requirement</strong><br>
            <span style="color:red;" id="spanWarning"></span>
            </center></th>
        </tr>
    </table>
    <form action="/update-service-need/{{ csrf_token() }}" method="post"  enctype="multipart/form-data" style="z-index:10;">
        <input type="hidden" name="_token" value="{{csrf_token()}}">
        <input type="hidden" name="booking_id" value="{{$bd->id}}">
        <input type="hidden" name="service_need_id" value="{{$_GET['service_need_id']}}">
        <center>
            <table class="table table-bordered" style="width:100%;">
                <tr>
                    <td>Cutomer</td>
                    <td>{{$customer->cust_name}}</td>
                </tr>
                <tr>
                    <td>Booking Code <span id="span">*</span></td>
                    <td>{{$bd->booking_code}}</td>
                </tr>
                <tr>
                    <td>Patient Name <span id="span">*</span></td>
                    <td>
                        <select class="form-control" required name="patient_id">
                            <option value="{{$patient->id}}" selected>{{$patient->patient_name}}</option>
                            <?php
                            $pd=App\PatientDetail::where('customer_id',$customer->id)->get();
                            ?>
                            @if($pd)
                            @foreach($pd as $allpd)
                            <option value="{{$allpd->id}}">{{$allpd->patient_name}}</option>
                            @endforeach
                            @endif
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Service Needed <span id="span">*</span></td>
                    <td>
                        <select class="form-control" required name="service_type_id">
                            <option value="{{$stype->id}}" selected>{{$stype->service_name}}</option>
                            <?php
                            $st=App\ServiceType::all();
                            ?>
                            @if($st)
                            @foreach($st as $allst)
                            <option value="{{$allst->id}}">{{$allst->service_name}}</option>
                            @endforeach
                            @endif
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>From Date <span id="span">*</span></td>
                    <td><input type="date" name="from_date" id="from_date" class="form-control" value="{{$sn->from_date}}"></td>
                </tr>
                <tr>
                    <td>Till Date <span id="span">*</span></td>
                    <td><input type="date" name="till_date" id="till_date" class="form-control" value="{{$sn->till_date}}"></td>
                </tr>
                <tr>
                    <td>Total Day <span id="span">*</span></td>
                    <td><input type="number" name="total_days" id="cust_location" class="form-control" value="{{$sn->total_days}}"></td>
                </tr>
                <tr>
                    <td>Service Session</td>
                    <td>
                        <select name="service_session" class="form-control">
                            <option value="{{$sn->service_session}}" selected>{{$sn->service_session}}</option>
                            <option value="Single Session">Single Session</option>
                            <option value="Day">Day</option>
                            <option value="Night">Night</option>
                            <option value="24 Hours">24 Hours</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Session Per Day Charge</td>
                    <td><input type="number" name="session_day_charge" id="session_day_charge" class="form-control" value="{{$sn->session_day_charge}}"></td>
                </tr>
                 <tr>
                    <td>Session Charge</td>
                    <td><input type="number" name="service_charge" id="service_charge" class="form-control" value="{{$sn->service_charge}}"></td>
                </tr>
                <tr>
                    <td>Service Tax(%)</td>
                    <td><input type="number" name="service_tax" id="service_tax" class="form-control" value="{{$sn->service_tax}}"></td>
                </tr>
                <tr>
                    <td>Discount</td>
                    <td><input type="number" name="discount_offer" id="discount_offer" class="form-control" value="{{$sn->discount_offer}}"></td>
                </tr>
                <tr>
                    <td>Payable Amount</td>
                    <td><input type="number" name="payable_amount" id="payable_amount" class="form-control" value="{{$sn->payable_amount}}"></td>
                </tr>
                
                <tr>
                    <td>Location <span id="span">*</span></td>
                    <td><input type="text" name="service_location" id="service_location" class="form-control" value="{{$sn->service_location}}"></td>
                </tr>
                <tr>
                    <td>Address</td>
                    <td><textarea name="service_address" id="service_address" class="form-control">{{$sn->service_address}}</textarea></td>
                </tr>
                 <tr>
                    <td>Service Status <span id="span">*</span></td>
                    <td>
                        <select class="form-control" required name="service_status">
                            <option value="{{$sn->service_status}}" selected>{{$sn->service_status}}</option>
                            <option value="Confirm">Confirm</option>
                            <option value="Cancel">Cancel</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td colspan="2"><button type="submit" style="float:right" class="btn btn-success">UPDATE</button></td>
                </tr>
            </table>
        </center>
    </form>
</div>