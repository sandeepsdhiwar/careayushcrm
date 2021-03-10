<?php
$bd = App\BranchDetail::where('id', $_GET['id'])->first();
if($bd){
?>
<div class="modal-header">
    <button type="button" class="close" data-dismiss="modal">&times;</button>
</div>
<div class="modal-body">
    <table style="width:100%;" class="table table-bordered">
        <tr>
            <th colspan="3" id="addHeader" style="text-transform:uppercase;"><center><strong>Update Branch</strong><br>
            <span style="color:red;" id="spanWarning"></span>
            </center></th>
        </tr>
    </table>
    <form action="/update_branch/{{$bd->id}}/{{ csrf_token() }}" method="post"  enctype="multipart/form-data" style="z-index:10;">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <input type="hidden" name="admin_id" value="{{ Session::get('admin_id') }}">
        <input type="hidden" name="branch_id" value="{{ $bd->id }}">
        <center>
            <table class="table table-bordered" style="width:100%;">
                <tr>
                    <td>Branch Name<span id="span">*</span></td>
                    <td><input type="text" value="{{$bd->branch_name}}" name="branch_name" id="branch_name" class="form-control" required>
                        <span id="span">
                            @if($errors->has('branch_name'))
                            {{$errors->first('branch_name')}}
                            @endif
                        </span>
                    </td>
                </tr>
                <tr>
                    <td>Branch Address<span id="span">*</span></td>
                    <td><input type="text" value="{{$bd->branch_address}}" name="branch_address" id="branch_address" class="form-control" required>
                        <span id="span">
                            @if($errors->has('branch_address'))
                            {{$errors->first('branch_address')}}
                            @endif
                        </span>
                    </td>
                </tr>
                <tr>
                    <td>isActive <span id="span">*</span></td>
                    <td><select name="is_active" id="is_active" class="form-control" required>
                        <option value="{{$bd->is_active}}">{{$bd->is_active}}</option>
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
        </center>
    </form>
</div>
<?php
}
?>