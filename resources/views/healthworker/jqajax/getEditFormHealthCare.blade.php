<div class="modal-header">
    <button type="button" class="close" data-dismiss="modal">&times;</button>
</div>
<div class="modal-body">
    <table style="width:100%;" class="table table-bordered">
        <tr>
            <th colspan="3" id="addHeader" style="text-transform:uppercase;"><center><strong>Edit Health Worker</strong><br>
            <span style="color:red;" id="spanWarning"></span>
            </center></th>
        </tr>
    </table>
    <?php 
      $hwd=App\HealthWorker::find($_GET['id']);
    ?>
    <form action="/update_health_worker" method="post"  enctype="multipart/form-data" style="z-index:10;">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <input type="hidden" name="id" value="{{ $hwd->id }}">
        <input type="hidden" name="emp_id" value="{{ Session::get('emp_id') }}">
        <center>
            <table class="table table-bordered" style="width: 100%;">
                <tr>
                    <td>Health Care Name <span class="span">*</span></td>
                    <td><input type="text" name="hw_name" id="hw_name" class="form-control" value="{{$hwd->hw_name}}" required></td>
                </tr>
                <tr>
                    <td>Gender <span class="span">*</span></td>
                    <td><select name="hw_gender" id="hw_gender" selected="" class="form-control" required>
                        <option value="{{$hwd->hw_gender}}">{{$hwd->hw_gender}}</option>    
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                        <option value="Other">Other</option>
                    </select></td>
                </tr>
                <tr>
                    <td>Contact <span class="span">*</span></td>
                    <td><input type="text" name="hw_contact" id="hw_contact" value="{{$hwd->hw_contact}}" class="form-control" required></td>
                </tr>
                <tr>
                    <td>Email ID <span class="span">*</span></td>
                    <td><input type="email" name="hw_email" id="hw_email" class="form-control" value="{{$hwd->hw_email}}" required></td>
                </tr>
                <tr>
                    <td>Blood Group</td>
                    <td><select name="blood_group" id="blood_group" class="form-control">
                        <option value="{{$hwd->blood_group}}">{{$hwd->blood_group}}</option>    
                        <option value="A+">A+</option>
                        <option value="A-">A-</option>
                        <option value="B+">B+</option>
                        <option value="B-">B-</option>
                        <option value="AB+">AB+</option>
                        <option value="AB-">AB-</option>
                        <option value="O+">O+</option>
                        <option value="O-">O-</option>
                    </select></td>
                </tr>
                <tr>
                    <td>Location</td>
                    <td><input class="form-control" type="text" name="hw_location" value="{{$hwd->hw_location}}" id="hw_location"></td>
                </tr>
                <tr>
                    <td>Address</td>
                    <td><textarea name="hw_address" id="hw_address" value="{{$hwd->hw_address}}" class="form-control"></textarea></td>
                </tr>
                <tr>
                    <td>Profile Photo</td>
                    <td>
                        @if($hwd->profile_pic!="")
                        <img src="{{asset($hwd->profile_pic)}}" class="img-responsive" style="width:20%"><br>
                        @endif
                        <input type="file" name="profile_pic" class="form-control">
                        
                </tr>
                <tr>
                    <td colspan="2"><button type="submit" class="btn btn-success" style="float: right">update</button></td>
                </tr>
            </table>
        </center>
    </form>
</div>