/*****Login by manager**********/
function getManCreateFormLogin(id)
{
    $('#myModal').modal('show');
    $.get('/jqajax/getManCreateFormLogin', {id:id}, function(result){
        $('#model_content').html("");
        $('#model_content').append(result);
    });
}

function getManEditFormLogin(id)
{
    $('#myModal').modal('show');
    $.get('/jqajax/getManEditFormLogin', {id:id}, function(result){
        $('#model_content').html("");
        $('#model_content').append(result);
    });
}

/***Branch */
function getCreateFormBranch(id){
    $('#myModal').modal('show');
    $.get('/jqajax/getCreateFormBranch', {id:id}, function(result){
        $('#model_content').html("");
        $('#model_content').append(result);
    });
}
function getEditFormBranch(id){
    $('#myModal').modal('show');
    $.get('/jqajax/getEditFormBranch', {id:id}, function(result){
        $('#model_content').html("");
        $('#model_content').append(result);
    });
}
function getDeleteBranch(id){
    var x = confirm("Are you sure you want to delete?");
    if (x){
        $.get('/branch/getDeleteBranch/'+id,{}, function(result){
            if(result=="success"){
                alert("Branch Deleted Successfull");
                location.reload();
            }else{
                alert(result);
            }
        });
        return true;
      }
    else
      return false;
}
/****Designation */
function getCreateFormDesignation(id){
    $('#myModal').modal('show');
    $.get('/jqajax/getCreateFormDesignation', {id:id}, function(result){
        $('#model_content').html("");
        $('#model_content').append(result);
    });
}
function getEditFormDesignation(id){
    $('#myModal').modal('show');
    $.get('/jqajax/getEditFormDesignation', {id:id}, function(result){
        $('#model_content').html("");
        $('#model_content').append(result);
    });
}
function getDeleteDesignation(id){
    var x = confirm("Are you sure you want to delete?");
    if (x){
        $.get('/designation/getDeleteDesignation/'+id,{}, function(result){
            if(result=="success"){
                alert("Designation Deleted Successfull");
                location.reload();
            }else{
                alert(result);
            }
        });
        return true;
      }
    else
      return false;
}
/****Document type */
function getCreateFormDocument(id){
    $('#myModal').modal('show');
    $.get('/jqajax/getCreateFormDocument', {id:id}, function(result){
        $('#model_content').html("");
        $('#model_content').append(result);
    });
}
function getEditFormDocument(id){
    $('#myModal').modal('show');
    $.get('/jqajax/getEditFormDocument', {id:id}, function(result){
        $('#model_content').html("");
        $('#model_content').append(result);
    });
}
function getDeleteDocument(id){
    var x = confirm("Are you sure you want to delete?");
    if (x){
        $.get('/document/getDeleteDocument/'+id,{}, function(result){
            if(result=="success"){
                alert("Document type Deleted Successfull");
                location.reload();
            }else{
                alert(result);
            }
        });
        return true;
      }
    else
      return false;
}
/****Month Detail */
function getCreateFormMonth(id){
    $('#myModal').modal('show');
    $.get('/jqajax/getCreateFormMonth', {id:id}, function(result){
        $('#model_content').html("");
        $('#model_content').append(result);
    });
}
function getEditFormMonth(id){
    $('#myModal').modal('show');
    $.get('/jqajax/getEditFormMonth', {id:id}, function(result){
        $('#model_content').html("");
        $('#model_content').append(result);
    });
}
function getDeleteMonth(id){
    var x = confirm("Are you sure you want to delete?");
    if (x){
        $.get('/month/getDeleteMonth/'+id,{}, function(result){
            if(result=="success"){
                alert("Month Deleted Successfull");
                location.reload();
            }else{
                alert(result);
            }
        });
        return true;
      }
    else
      return false;
}
/****Year Detail */
function getCreateFormYear(id){
    $('#myModal').modal('show');
    $.get('/jqajax/getCreateFormYear', {id:id}, function(result){
        $('#model_content').html("");
        $('#model_content').append(result);
    });
}
function getEditFormYear(id){
    $('#myModal').modal('show');
    $.get('/jqajax/getEditFormYear', {id:id}, function(result){
        $('#model_content').html("");
        $('#model_content').append(result);
    });
}
function getDeleteYear(id){
    var x = confirm("Are you sure you want to delete?");
    if (x){
        $.get('/year/getDeleteYear/'+id,{}, function(result){
            if(result=="success"){
                alert("Year Deleted Successfull");
                location.reload();
            }else{
                alert(result);
            }
        });
        return true;
      }
    else
      return false;
}
/****Service Type */
function getCreateFormServiceType(id){
    $('#myModal').modal('show');
    $.get('/jqajax/getCreateFormServiceType', {id:id}, function(result){
        $('#model_content').html("");
        $('#model_content').append(result);
    });
}
function getEditFormServiceType(id){
    $('#myModal').modal('show');
    $.get('/jqajax/getEditFormServiceType', {id:id}, function(result){
        $('#model_content').html("");
        $('#model_content').append(result);
    });
}
function getDeleteServiceType(id){
    var x = confirm("Are you sure you want to delete?");
    if (x){
        $.get('/servicetype/getDeleteServiceType/'+id,{}, function(result){
            if(result=="success"){
                alert("Year Deleted Successfull");
                location.reload();
            }else{
                alert(result);
            }
        });
        return true;
      }
    else
      return false;
}
/****Role Detail */
function getCreateFormRole(id){
    $('#myModal').modal('show');
    $.get('/jqajax/getCreateFormRole', {id:id}, function(result){
        $('#model_content').html("");
        $('#model_content').append(result);
    });
}
function getEditFormRole(id){
    $('#myModal').modal('show');
    $.get('/jqajax/getEditFormRole', {id:id}, function(result){
        $('#model_content').html("");
        $('#model_content').append(result);
    });
}
function getDeleteRole(id){
    var x = confirm("Are you sure you want to delete?");
    if (x){
        $.get('/role/getDeleteRole/'+id,{}, function(result){
            if(result=="success"){
                alert("Role Deleted Successfull");
                location.reload();
            }else{
                alert(result);
            }
        });
        return true;
      }
    else
      return false;
}
/****Login Detail */
function getCreateFormLogin(id){
    $('#myModal').modal('show');
    $.get('/jqajax/getCreateFormLogin', {id:id}, function(result){
        $('#model_content').html("");
        $('#model_content').append(result);
    });
}
function getEditFormLogin(id){
    $('#myModal').modal('show');
    $.get('/jqajax/getEditFormLogin', {id:id}, function(result){
        $('#model_content').html("");
        $('#model_content').append(result);
    });
}
function getDeleteLogin(id){
    var x = confirm("Are you sure you want to delete?");
    if (x){
        $.get('/Login/getDeleteLogin/'+id,{}, function(result){
            if(result=="success"){
                alert("Login Deleted Successfull");
                location.reload();
            }else{
                alert(result);
            }
        });
        return true;
      }
    else
      return false;
}
/*******Admin Employee */
function getCreateFormEmployee(id){
    $('#myModal').modal('show');
    $.get('/jqajax/getCreateFormEmployee', {id:id}, function(result){
        $('#model_content').html("");
        $('#model_content').append(result);
    });
}

function getEditFormEmployee(id){
    $('#myModal').modal('show');
    $.get('/jqajax/getEditFormEmployee', {id:id}, function(result){
        $('#model_content').html("");
        $('#model_content').append(result);
    });
}

/*******Branch Employee */
function getCreateFormBranchEmployee(id){
    $('#myModal').modal('show');
    $.get('/jqajax/getCreateFormBranchEmployee', {id:id}, function(result){
        $('#model_content').html("");
        $('#model_content').append(result);
    });
}

function getEditFormBranchEmployee(id){
    $('#myModal').modal('show');
    $.get('/jqajax/getEditFormBranchEmployee', {id:id}, function(result){
        $('#model_content').html("");
        $('#model_content').append(result);
    });
}
/*******Health Worker */
function getCreateFormHealthWorker(id){
    $('#myModal').modal('show');
    $.get('/jqajax/getCreateFormHealthWorker', {id:id}, function(result){
        $('#model_content').html("");
        $('#model_content').append(result);
    });
}
function getEditFormHealthCare(id){
    $('#myModal').modal('show');
    $.get('/jqajax/getEditFormHealthCare', {id:id}, function(result){
        $('#model_content').html("");
        $('#model_content').append(result);
    });
}
/******Admin Customer */
function getCreateFormCustomer(id){
    $('#myModal').modal('show');
    $.get('/jqajax/getCreateFormCustomer', {id:id}, function(result){
        $('#model_content').html("");
        $('#model_content').append(result);
    });
}

/******Admin Customer */
function getCreateFormBranchCustomer(){
    $('#myModal').modal('show');
    $.get('/jqajax/getCreateFormBranchCustomer', function(result){
        $('#model_content').html("");
        $('#model_content').append(result);
    });
}

function getEditFormBranchCustomer(id){
    $('#myModal').modal('show');
    $.get('/jqajax/getEditFormBranchCustomer', {id:id}, function(result){
        $('#model_content').html("");
        $('#model_content').append(result);
    });
}

/******Patient*****************/
function getCreateFormPatient(customer_id){
    $('#myModal').modal('show');
    $.get('/jqajax/getCreateFormPatient', {customer_id:customer_id}, function(result){
        $('#model_content').html("");
        $('#model_content').append(result);
    });
}

function getEditFormPatient(patient_id,customer_id){
    $('#myModal').modal('show');
    $.get('/jqajax/getEditFormPatient', {patient_id:patient_id,customer_id:customer_id}, function(result){
        $('#model_content').html("");
        $('#model_content').append(result);
    }); 
}

/***********booking***********/
function getEditFormBooking(booking_id){
    $('#myModal').modal('show');
    $.get('/jqajax/getEditFormBooking', {booking_id:booking_id}, function(result){
        $('#model_content').html("");
        $('#model_content').append(result);
    }); 
}

/***************service needs***********/
function getCreateServiceNeed(booking_id){
    $('#myModal').modal('show');
    $.get('/jqajax/getCreateServiceNeed', {booking_id:booking_id}, function(result){
        $('#model_content').html("");
        $('#model_content').append(result);
    });
}

function getEditServiceNeed(service_need_id){
    $('#myModal').modal('show');
    $.get('/jqajax/getEditServiceNeed', {service_need_id:service_need_id}, function(result){
        $('#model_content').html("");
        $('#model_content').append(result);
    });
}

