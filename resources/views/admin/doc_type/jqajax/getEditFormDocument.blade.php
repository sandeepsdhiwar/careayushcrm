<?php
$dd = App\DocType::where('id', $_GET['id'])->first();
if($dd){
?>
<div class="modal-header">
    <button type="button" class="close" data-dismiss="modal">&times;</button>
</div>
<div class="modal-body">
    <table style="width:100%;" class="table table-bordered">
        <tr>
            <th colspan="3" id="addHeader" style="text-transform:uppercase;"><center><strong>Create New Document type</strong><br>
            <span style="color:red;" id="spanWarning"></span>
            </center></th>
        </tr>
    </table>
    <form action="/update_docutype/{{$dd->id}}/{{ csrf_token() }}" method="post"  enctype="multipart/form-data" style="z-index:10;">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <input type="hidden" name="emp_id" value="{{ Session::get('emp_id') }}">
        <input type="hidden" name="doctype_id" value="{{ $dd->id }}">
        <center>
            <table class="table table-bordered" style="width:100%;">
                <tr>
                    <td>Document Type Name<span id="span">*</span></td>
                    <td><input type="text" value="{{$dd->doc_name}}" name="doc_name" id="doc_name" class="form-control" required>
                        <span id="span">
                            @if($errors->has('doc_name'))
                            {{$errors->first('doc_name')}}
                            @endif
                        </span>
                    </td>
                </tr>
                <tr>
                    <td>isActive <span id="span">*</span></td>
                    <td><select name="is_active" id="is_active" class="form-control" required>
                        <option value="{{$dd->is_active}}">{{$dd->is_active}}</option>
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