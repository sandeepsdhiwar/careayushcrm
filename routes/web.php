<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});
/****Login */
Route::get('/admin', function () {
    return view('admin.index');
});

Route::get('/manager', function () {
    return view('manager.index');
});

Route::get('/cce', function () {
    return view('cce.index');
});
Route::get('/offe', function () {
    return view('offe.index');
});

Route::post('/getLogin/{token}', 'LoginController@authenticate');

Route::get('/logout/{id}','LoginController@logout');

/********Dashboard */
Route::get('/admin-dashboard', function () {
    return view('admin.dashboard.index');
});

Route::get('/manager-dashboard', function () {
    return view('manager.dashboard.index');
});

Route::get('/cce-dashboard', function () {
    return view('cce.dashboard.index');
});

Route::get('/offe-dashboard', function () {
    return view('offe.dashboard.index');
});
/***********Branch Detail */
Route::get('/branch', function () {
    return view('admin.branch.index');
});
Route::get('/jqajax/getCreateFormBranch', function () {
    return view('admin.branch.jqajax.getCreateFormBranch');
});
Route::get('/jqajax/getEditFormBranch', function () {
    return view('admin.branch.jqajax.getEditFormBranch');
});
Route::post('/create_branch/{token}', 'BranchController@store');
Route::post('/update_branch/{id}/{token}', 'BranchController@update');
Route::get('/branch/getDeleteBranch/{id}', 'BranchController@delete');
/*****designation Detail */
Route::get('/designation', function () {
    return view('admin.designation.index');
});
Route::get('/jqajax/getCreateFormDesignation', function () {
    return view('admin.designation.jqajax.getCreateFormDesignation');
});
Route::get('/jqajax/getEditFormDesignation', function () {
    return view('admin.designation.jqajax.getEditFormDesignation');
});
Route::post('/create_designation/{token}', 'DesignationController@store');
Route::post('/update_designation/{id}/{token}', 'DesignationController@update');
Route::get('/designation/getDeleteDesignation/{id}', 'DesignationController@delete');
/*****Document type Detail */
Route::get('/document-type', function () {
    return view('admin.doc_type.index');
});
Route::get('/jqajax/getCreateFormDocument', function () {
    return view('admin.doc_type.jqajax.getCreateFormDocument');
});
Route::get('/jqajax/getEditFormDocument', function () {
    return view('admin.doc_type.jqajax.getEditFormDocument');
});
Route::post('/create_docutype/{token}', 'DocumentController@store');
Route::post('/update_docutype/{id}/{token}', 'DocumentController@update');
Route::get('/document/getDeleteDocument/{id}', 'DocumentController@delete');
/*****Month Detail */
Route::get('/month-detail', function () {
    return view('admin.month.index');
});
Route::get('/jqajax/getCreateFormMonth', function () {
    return view('admin.month.jqajax.getCreateFormMonth');
});
Route::get('/jqajax/getEditFormMonth', function () {
    return view('admin.month.jqajax.getEditFormMonth');
});
Route::post('/create_month/{token}', 'MonthController@store');
Route::post('/update_month/{id}/{token}', 'MonthController@update');
Route::get('/month/getDeleteMonth/{id}', 'MonthController@delete');
/*****Year Detail */
Route::get('/year-detail', function () {
    return view('admin.year.index');
});
Route::get('/jqajax/getCreateFormYear', function () {
    return view('admin.year.jqajax.getCreateFormYear');
});
Route::get('/jqajax/getEditFormYear', function () {
    return view('admin.year.jqajax.getEditFormYear');
});
Route::post('/create_year/{token}', 'YearController@store');
Route::post('/update_year/{id}/{token}', 'YearController@update');
Route::get('/year/getDeleteYear/{id}', 'YearController@delete');
/*****Service Type*/
Route::get('/service-type', function () {
    return view('admin.service.type.index');
});
Route::get('/jqajax/getCreateFormServiceType', function () {
    return view('admin.service.type.jqajax.getCreateFormServiceType');
});
Route::get('/jqajax/getEditFormServiceType', function () {
    return view('admin.service.type.jqajax.getEditFormServiceType');
});
Route::post('/create_servicetype/{token}', 'ServiceController@store');
Route::post('/update_servicetype/{id}/{token}', 'ServiceController@update');
Route::get('/servicetype/getDeleteServiceType/{id}', 'ServiceController@delete');
/*****Role Detail*/
Route::get('/role-detail', function () {
    return view('admin.role.index');
});
Route::get('/jqajax/getCreateFormRole', function () {
    return view('admin.role.jqajax.getCreateFormRole');
});
Route::get('/jqajax/getEditFormRole', function () {
    return view('admin.role.jqajax.getEditFormRole');
});
Route::post('/create_role/{token}', 'RoleController@store');
Route::post('/update_role/{id}/{token}', 'RoleController@update');
Route::get('/role/getDeleteRole/{id}', 'RoleController@delete');
/*****Login Detail*/
Route::get('/login-detail', function () {
    return view('admin.login.index');
});
Route::get('/jqajax/getCreateFormLogin', function () {
    return view('admin.login.jqajax.getCreateFormLogin');
});
Route::get('/jqajax/getEditFormLogin', function () {
    return view('admin.login.jqajax.getEditFormLogin');
});
Route::post('/create_login/{token}', 'LoginController@store');
Route::post('/update_login/{id}/{token}', 'LoginController@update');
Route::get('/login/getDeleteLogin/{id}', 'LoginController@delete');
/***********new-employee */
Route::get('/new-employee', function () {
    return view('admin.employee.new_employee');
});
Route::get('/employee-detail', function () {
    return view('admin.employee.employee_detail');
});
Route::get('/jqajax/getCreateFormEmployee', function () {
    return view('admin.employee.jqajax.getCreateFormEmployee');
});
Route::post('/create_employee/{token}', 'EmployeeController@store');

Route::get('/jqajax/getEditFormEmployee', function () {
    return view('admin.employee.jqajax.getEditFormEmployee');
});

Route::post('/update_employee/{token}', 'EmployeeController@update');

/***********branch employee ********/

Route::get('/branch-employee-detail', function () {
    return view('offe.employee.employee_detail');
});
Route::get('/jqajax/getCreateFormBranchEmployee', function () {
    return view('manager.employee.jqajax.getCreateFormBranchEmployee');
});
Route::post('/create_branch_employee/{token}', 'EmployeeController@store');

Route::get('/jqajax/getEditFormBranchEmployee', function () {
    return view('manager.employee.jqajax.getEditFormBranchEmployee');
});

Route::post('/update_branch_employee/{token}', 'EmployeeController@update');
/*******Health Care */
Route::get('/new-health-worker', function () {
    return view('healthworker.newHealthWorker');
});
Route::get('/health-worker-detail', function () {
    return view('healthworker.healthWorker_detail');
});
Route::get('/jqajax/getEditFormHealthCare', function () {
    return view('healthworker.jqajax.getEditFormHealthCare');
});
Route::post('/create_health_worker/{token}', 'HealthWorkerController@store');//store helth worker

Route::post('/update_health_worker', 'HealthWorkerController@updateHW');//update helth worker

Route::get('/jqajax/getCreateFormHealthWorker', function () {
    return view('healthworker.jqajax.getCreateFormHealthWorker');
});

Route::get('/ccehealth-worker-detail', function () {
    return view('cce.healthWorker_detail');
});
Route::get('/branch-helthworkeroffe-detail', function () {
    return view('offe.helthworker.helthworker_details');
});

/*************Customer Detail */
Route::get('/customer-detail', function () {
    return view('customer.customer_detail');
});
Route::get('/jqajax/getCreateFormCustomer', function () {
    return view('customer.getCreateFormCustomer');
});

Route::get('/jqajax/getManCreateFormLogin',function(){
    return view('manager.employee.jqajax.getManCreateFormLogin');
});

Route::post('/manager_create_emp_login/{token}','LoginController@store');

Route::get('/jqajax/getManEditFormLogin',function(){
    return view('manager.employee.jqajax.getManEditFormLogin');
});

Route::post('/manager_update_emp_login/{token}','LoginController@update');

/*************Branch Customer Detail */
Route::get('/branch-customer-detail', function () {
    return view('cce.customer.customer_detail');
});
Route::get('/branch-customer-byme', function () {
    return view('cce.customer.customer_detailbyme');
});
Route::get('/branch-bookings-detail', function () {
    return view('cce.booking.bookings_detail');
});

Route::get('/jqajax/getCreateFormBranchCustomer',function(){
    return view('cce.customer.jqajax.getCreateFormBranchCustomer');
});

Route::post('/create_branch_customer/{token}','CustomerController@createBranchCustomer');

Route::get('/jqajax/getEditFormBranchCustomer',function(){
    return view('cce.customer.jqajax.getEditFormBranchCustomer');
});

Route::post('/update_branch_customer/{token}','CustomerController@updateBranchCustomer');

Route::get('/view-customer-history/{id}',function($id){
    return view('cce.customer.customer_history',['id'=>$id]);
});

/***************Patient****************/
Route::get('/jqajax/getCreateFormPatient',function(){
    return view('cce.patient.jqajax.getCreateFormPatient');
});
Route::post('/create_patient/{token}','PatientController@save');

Route::get('/jqajax/getEditFormPatient',function(){
    return view('cce.patient.jqajax.getEditFormPatient');
});
Route::post('/update_patient/{token}','PatientController@update');

/**********Booking*****************/
Route::get('/new-booking/{id}',function($id){
    return view('cce.booking.newBooking',['id'=>$id]);
});

Route::post('/create-new-booking/{token}','BookingController@createBooking');

Route::get('/jqajax/getEditFormBooking',function(){
    return view('cce.booking.jqajax.getEditFormBooking');
});

Route::post('/update-booking/{token}','BookingController@updateBooking');

/**************Service Needs****************/
Route::get('/jqajax/getCreateServiceNeed',function(){
    return view('cce.booking.jqajax.getCreateServiceNeed');
});

Route::post('/create-service-need/{token}','BookingController@createServiceNeed');

Route::get('/jqajax/getEditServiceNeed',function(){
    return view('cce.booking.jqajax.getEditServiceNeed');
});

Route::post('/update-service-need/{token}','BookingController@updateServiceNeed');
