<div class="modal-header">
    <button type="button" class="close" data-dismiss="modal">&times;</button>
</div>
<div class="modal-body">
    <table style="width:100%;" class="table table-bordered">
        <tr>
            <th colspan="3" id="addHeader" style="text-transform:uppercase;"><center><strong>Edit Patient/User Detail</strong><br>
            <span style="color:red;" id="spanWarning"></span>
            </center></th>
        </tr>
    </table>
    <?php
    $pd=App\PatientDetail::find($_GET["patient_id"]);
    ?>
    <form action="/update_patient/{{ csrf_token() }}" method="post"  enctype="multipart/form-data" style="z-index:10;">
        <input type="hidden" name="_token" value="{{csrf_token()}}">
        <input type="hidden" name="customer_id" value="{{$_GET['customer_id']}}">
         <input type="hidden" name="patient_id" value="{{$_GET['patient_id']}}">
        <input type="hidden" name="branch_id" value="{{Session::get('branch_id')}}">
        <center>
            <table class="table table-bordered" style="width:100%;">
                <tr>
                    <td>Patient Name <span id="span">*</span></td>
                    <td><input type="text" name="patient_name" id="patient_name" value="{{$pd->patient_name}}" class="form-control"></td>
                </tr>
                <tr>
                    <td>Age<span id="span">*</span></td>
                    <td><input type="number" name="patient_age" id="patient_age" value="{{$pd->patient_age}}" class="form-control"></td>
                </tr>
                <tr>
                    <td>Gender</td>
                    <td>
                        <select name="patient_gender" id="patient_gender" class="form-control" required>
                            <option value="{{$pd->patient_gender}}" selected>{{$pd->patient_gender}}</option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                            <option value="Other">Other</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Contact <span id="span">*</span></td>
                    <td><input type="text" name="patient_contact" maxlength="10" minlength="10" id="patient_contact" class="form-control" value="{{$pd->patient_contact}}"></td>
                </tr>
                <tr>
                    <td>Location <span id="span">*</span></td>
                    <td><input type="text" name="patient_location" id="patient_location" class="form-control"  value="{{$pd->patient_location}}"></td>
                </tr>
                <tr>
                    <td>Address</td>
                    <td><textarea name="patient_address" id="patient_address" class="form-control">{{$pd->patient_address}}</textarea></td>
                </tr>
                
                <tr>
                    <td colspan="2"><button type="submit" style="float:right" class="btn btn-success">UPDATE</button></td>
                </tr>
            </table>
        </center>
    </form>
</div>