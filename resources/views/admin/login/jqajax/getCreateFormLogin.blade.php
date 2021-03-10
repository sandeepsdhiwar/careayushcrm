<?php
$ed=App\EmployeeDetail::all();
$dd=App\DesignationDetail::all();
$rd=App\RoleDetail::all();
$bd=App\BranchDetail::all();
?>
<div class="modal-header">
    <button type="button" class="close" data-dismiss="modal">&times;</button>
</div>
<div class="modal-body">
    <table style="width:100%;" class="table table-bordered">
        <tr>
            <th colspan="3" id="addHeader" style="text-transform:uppercase;"><center><strong>Create New Login</strong><br>
            <span style="color:red;" id="spanWarning"></span>
            </center></th>
        </tr>
    </table>
    <form action="/create_login/{{ csrf_token() }}" method="post"  enctype="multipart/form-data" style="z-index:10;">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <input type="hidden" name="emp_id" value="{{ Session::get('emp_id') }}">
        <center>
            <table class="table table-bordered" style="width:100%;">
                <tr>
                    <td>Employee Name<span id="span">*</span></td>
                    <td>
                        <select name="emp_id" id="emp_id" class="form-control" required>
                        <option value="" selected>Select Employee</option>
                        @foreach($ed as $alled)
                        <option value="{{$alled->id}}">{{$alled->emp_name}}</option>
                        @endforeach
                        </select>
                        <span id="span">
                            @if($errors->has('emp_id'))
                            {{$errors->first('emp_id')}}
                            @endif
                        </span>
                    </td>
                </tr>
                 
                <tr>
                    <td>Login Role<span id="span">*</span></td>
                    <td>
                        <select name="role_id" id="role_id" class="form-control" required>
                        <option value="" selected>Select Role</option>
                        @foreach($rd as $allrd)
                        <option value="{{$allrd->id}}">{{$allrd->role_name}}</option>
                        @endforeach
                        </select>
                        <span id="span">
                            @if($errors->has('role_id'))
                            {{$errors->first('role_id')}}
                            @endif
                        </span>
                    </td>
                </tr>
                 <tr>
                    <td>Login Name<span id="span">*</span></td>
                    <td><input type="text" value="" name="login_name" id="login_name" class="form-control" required>
                        <span id="span">
                            @if($errors->has('login_name'))
                            {{$errors->first('login_name')}}
                            @endif
                        </span>
                    </td>
                </tr>
                <tr>
                    <td>Login ID<span id="span">*</span></td>
                    <td><input type="text" value="" name="login_id" id="login_id" class="form-control" required>
                        <span id="span">
                            @if($errors->has('login_id'))
                            {{$errors->first('login_id')}}
                            @endif
                        </span>
                    </td>
                </tr>
                <tr>
                    <td>Login Password<span id="span">*</span></td>
                    <td><input type="text" value="" name="login_password" id="login_password" class="form-control" required>
                        <span id="span">
                            @if($errors->has('login_password'))
                            {{$errors->first('login_password')}}
                            @endif
                        </span>
                    </td>
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
                    <td colspan="2"><button type="submit" style="float:right" class="btn btn-success">CREATE</button></td>
                </tr>
            </table>
        </center>
    </form>
</div>