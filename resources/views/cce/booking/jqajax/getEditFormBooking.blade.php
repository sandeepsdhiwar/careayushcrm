<?php
$bd=App\BookingDetail::find($_GET['booking_id']);
?>
<div class="modal-header">
    <button type="button" class="close" data-dismiss="modal">&times;</button>
</div>
<div class="modal-body">
    <table style="width:100%;" class="table table-bordered">
        <tr>
            <th colspan="3" id="addHeader" style="text-transform:uppercase;"><center><strong>Edit Booking Detail</strong><br>
            <span style="color:red;" id="spanWarning"></span>
            </center></th>
        </tr>
    </table>
    <form action="/update-booking/{{ csrf_token() }}" method="post"  enctype="multipart/form-data" style="z-index:10;">
        <input type="hidden" name="_token" value="{{csrf_token()}}">
        <input type="hidden" name="booking_id" value="{{$_GET['booking_id']}}">
        <center>
            <table class="table table-bordered" style="width:100%;">
                <?php
                $cd=App\CustomerDetail::find($bd->customer_id);
                ?>
                <tr>
                    <td>Cutomer</td>
                    <td>{{$cd->cust_name}}</td>
                </tr>
                <tr>
                    <td>Booking Code <span id="span">*</span></td>
                    <td><input type="text" name="booking_code" id="booking_code" value="{{$bd->booking_code}}" class="form-control" readonly></td>
                </tr>
                <tr>
                    <td>Booking Date<span id="span">*</span></td>
                    <td><input type="date" name="booking_date" id="booking_date" value="{{$bd->booking_date}}" class="form-control" readonly></td>
                </tr>
                <tr>
                    <td>Booking Time<span id="span">*</span></td>
                    <td><input type="time" name="booking_time" id="booking_time" value="{{$bd->booking_time}}" class="form-control" readonly></td>
                </tr>
                <tr>
                    <td>Book Status <span id="span">*</span></td>
                    <?php
                    $status=App\StatusDetail::find($bd->status_id);
                    ?>
                    <td>
                        <select class="form-control" required name="status_id">
                            <option value="{{$status->id}}" selected>{{$status->status_name}}</option>
                            <?php
                            $sd=App\StatusDetail::all();
                            ?>
                            @if($sd)
                            @foreach($sd as $allsd)
                            <option value="{{$allsd->id}}">{{$allsd->status_name}}</option>
                            @endforeach
                            @endif
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