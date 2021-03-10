<div class="modal-header">
    <button type="button" class="close" data-dismiss="modal">&times;</button>
</div>
<div class="modal-body">
    <table style="width:100%;" class="table table-bordered">
        <tr>
            <th colspan="3" id="addHeader" style="text-transform:uppercase;"><center><strong>Create New Branch Employee</strong><br>
            <span style="color:red;" id="spanWarning"></span>
            </center></th>
        </tr>
    </table>
    <form action="/create_branch_employee/{{ csrf_token() }}" method="post"  enctype="multipart/form-data" style="z-index:10;">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <input type="hidden" name="emp_id" value="{{ Session::get('emp_id') }}">
        <center>
            <table class="table table-bordered" style="width:100%;">
                <tr>
                    <td>Branch Name</td>
                    <td><select name="branch_id" id="branch_id" class="form-control">
                        <?php
                        $man=App\EmployeeDetail::find(Session::get('emp_id'));
                        $bd = App\BranchDetail::find($man->branch_id);
                        ?>
                        @if($bd)
                        <option selected value="{{$bd->id}}">{{$bd->branch_name}}</option>
                        @endif
                    </select></td>
                </tr>
                <tr>
                    <td>Designation</td>
                    <td><select name="desig_id" id="desig_id" class="form-control">
                        <option value="" selected>select</option>    
                        <?php
                        $dd = App\DesignationDetail::where('desig_name','<>','Admin')->where('is_active', 'active')->get();
                        if($dd){
                            foreach ($dd as $alldd) {
                                # code...
                                ?>
                                <option value="{{$alldd->id}}">{{$alldd->desig_name}}</option>
                                <?php
                            }
                        }
                        ?>
                    </select></td>
                </tr>
                <tr>
                    <td>Employee Name</td>
                    <td><input type="text" name="emp_name" id="emp_name" class="form-control"></td>
                </tr>
                <tr>
                    <td>Gender</td>
                    <td><select name="emp_gender" id="emp_gender" class="form-control">
                        <option value="">select</option>    
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                        <option value="Other">Other</option>
                    </select></td>
                </tr>
                <tr>
                    <td>Date of Birth</td>
                    <td><input type="date" name="emp_doj" id="emp_doj" class="form-control"></td>
                </tr>
                <tr>
                    <td>Contact</td>
                    <td><input type="text" name="emp_contact" maxlength="10" minlength="10" id="emp_contact" class="form-control"></td>
                </tr>
                <tr>
                    <td>Alternet Contact</td>
                    <td><input type="text" name="alt_contact" maxlength="10" minlength="10" id="alt_contact" class="form-control"></td>
                </tr>
                <tr>
                    <td>Email ID</td>
                    <td><input type="email" name="emp_email" id="emp_email" class="form-control"></td>
                </tr>
                <tr>
                    <td>Blood Group</td>
                    <td><select name="blood_group" id="blood_group" class="form-control">
                        <option value="">Select</option>    
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
                    <td>Address</td>
                    <td><textarea name="emp_address" id="emp_address" class="form-control"></textarea></td>
                </tr>
                <tr>
                    <td>Profile Photo</td>
                    <td><input type="file" name="profile_pic" class="form-control"></td>
                </tr>
                 <tr>
                    <td>isActive <span id="span">*</span></td>
                    <td><select name="is_active" id="is_active" class="form-control" required>
                        <option value="" selected>Select Status</option>
                        <option value="active">Active</option>
                        <option value="inactive">Inactive</option>
                    </select>
                        <span id="span">
                            @if($errors->has('is_active'))
                            {{$errors->first('is_active')}}
                            @endif
                        </span>
                    </td>
                </tr>
                <tr>
                    <td colspan="2"><button type="submit" style="float:right" class="btn btn-success">SAVE</button></td>
                </tr>
            </table>
        </center>
    </form>
</div>