<div class="modal-header">
    <button type="button" class="close" data-dismiss="modal">&times;</button>
</div>
<div class="modal-body">
    <table style="width:100%;" class="table table-bordered">
        <tr>
            <th colspan="3" id="addHeader" style="text-transform:uppercase;"><center><strong>Update EMployee Login</strong><br>
            <span style="color:red;" id="spanWarning"></span>
            </center></th>
        </tr>
    </table>
    <form action="/manager_update_emp_login/{{ csrf_token() }}" method="post"  enctype="multipart/form-data" style="z-index:10;">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <input type="hidden" name="emp_id" value="{{$_GET['id']}}">
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
                <?php
                $emp=App\Employeedetail::find($_GET['id']);
                $desig=App\DesignationDetail::find($emp->desig_id);
                $ld=App\LoginDetail::where('emp_id',$_GET['id'])->first();
                $role=App\RoleDetail::find($ld->role_id);
                ?>
                <tr>
                    <td>Designation</td>
                    <td>{{$desig->desig_name}}</td>
                </tr>
                <tr>
                    <td>Employee Name</td>
                    <td>{{$emp->emp_name}}</td>
                </tr>
                <?php
                $rd=App\RoleDetail::all();
                ?>
                <tr>
                    <td>Login Role<span id="span">*</span></td>
                    <td>
                        <select name="role_id" id="role_id" class="form-control" required>
                        <option value="{{$role->role_id}}" selected>{{$role->role_name}}</option>
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
                    <td>Login Name</td>
                    <td><input type="text" name="login_name" id="login_name" class="form-control" value="{{$ld->login_name}}" required></td>
                </tr>

                <tr>
                    <td>Login Id</td>
                    <td><input type="text" name="login_id" id="login_id" class="form-control" value="{{$ld->login_id}}" required></td>
                </tr>
                <tr>
                    <td>Login Password</td>
                    <td><input type="text" name="login_password" id="login_password" class="form-control" value="{{$ld->login_password}}" required></td>
                </tr>
               
                 <tr>
                    <td>isActive <span id="span">*</span></td>
                    <td><select name="is_active" id="is_active" class="form-control" required>
                        <option value="{{$ld->is_active}}" selected>{{$ld->is_active}}</option>
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
                    <td colspan="2"><button type="submit" style="float:right" class="btn btn-success">UPDATE</button></td>
                </tr>
            </table>
            <input type="hidden" name="id" value="{{$ld->id}}">
        </center>
    </form>
</div>