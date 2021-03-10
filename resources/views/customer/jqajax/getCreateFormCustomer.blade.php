<div class="modal-header">
    <button type="button" class="close" data-dismiss="modal">&times;</button>
</div>
<div class="modal-body">
    <table style="width:100%;" class="table table-bordered">
        <tr>
            <th colspan="3" id="addHeader" style="text-transform:uppercase;"><center><strong>Create New Customer</strong><br>
            <span style="color:red;" id="spanWarning"></span>
            </center></th>
        </tr>
    </table>
    <form action="/create_customer/{{ csrf_token() }}" method="post"  enctype="multipart/form-data" style="z-index:10;">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <input type="hidden" name="emp_id" value="{{ Session::get('emp_id') }}">
        <center>
            <table class="table table-bordered" style="width:100%;">
                <tr>
                    <td>Customer Name</td>
                    <td><input type="text" name="cust_name" id="cust_name" class="form-control"></td>
                </tr>
                <tr>
                    <td>Contact</td>
                    <td><input type="text" name="cust_contact" maxlength="10" minlength="10" id="cust_contact" class="form-control"></td>
                </tr>
                <tr>
                    <td>Email ID</td>
                    <td><input type="email" name="cust_email" id="cust_email" class="form-control"></td>
                </tr>
                <tr>
                    <td>Lpocation</td>
                    <td><textarea name="cust_location" id="cust_location" class="form-control"></textarea></td>
                </tr>
                <tr>
                    <td colspan="2"><button type="submit" style="float:right" class="btn btn-success">SAVE</button></td>
                </tr>
            </table>
        </center>
    </form>
</div>