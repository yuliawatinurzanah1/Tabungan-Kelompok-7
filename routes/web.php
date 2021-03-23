<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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

Route::get('/' , 'StudentController@dashboard');

Auth::routes();

Route::get('/account/{userId}/{userVerificationToken}/activate', 'Auth\AccountController@verifyToken');
Route::get('/account/waiting-verification', 'Auth\AccountController@waitingVerification');
Route::post('/account/resend-verification', 'Auth\AccountController@resendVerification');

Route::get('/account/forgot-password', 'Auth\AccountController@forgotPassword')->name('forgot.password');
Route::post('/account/forgot-password', 'Auth\AccountController@sendEmailForgotPassword')->name('forgot.password');
Route::get('/account/{resetVerificationToken}/forgot-password', 'Auth\AccountController@verifyForgotToken');
Route::post('/account/reset-password', 'Auth\AccountController@updatePassword')->name('password-reset');

//Route untuk register teacher dan staff

Route::get('/register-student', 'Auth\RegisterController@registerStudent');
Route::get('/register-walikelas', 'Auth\RegisterController@registerWalikelas');
// Route::get('/register-staff', 'Auth\RegisterController@registerStaff');

//Login 

Route::get('/account/profile/Student', 'Auth\LoginController@LoginStudent');
Route::get('/account/profile/Teacher', 'Auth\LoginController@LoginTeacher');
Route::get('/account/profile/Staff', 'Auth\LoginController@LoginStaff');

//Edit profile

//Route::get('/account/profile/Student/edit', 'Auth\EditController@EditStudent');
//Route::get('/account/profile/Teacher/edit', 'Auth\EditController@EditTeacher');
//Route::get('/account/profile/Staff/edit', 'Auth\EditController@EditStaff');

//Route Untuk Student jika register dan login maka akan ke halaman ini
Route::group(['middleware' => ['role:admin']], function () {
	Route::get('/admin' , 'AdminController@dashboard');

//ADmin
	Route::get('/admin/dashboard' , 'AdminController@dashboard');

    Route::get('/admin/list-student' , 'AdminController@listStudent');
    Route::get('/admin/list-student/detail/{id}' , 'AdminController@detailStudent');
    
    //route CRUD student
    Route::get('/admin/create-student' , 'AdminController@addStudent');
    Route::post('/admin/create-student' , 'AdminController@saveStudent');
    
    Route::get('/admin/edit-student/{id}' , 'AdminController@editStudent');
    Route::post('/admin/update-student/{id}' , 'AdminController@updateStudent');

 	Route::get('/admin/student/hapus/{stu_id}' , 'AdminController@hapusStudent');

 	//route teacher
    Route::get('/admin/list-teacher' , 'AdminController@listTeacher'); 
    Route::get('/admin/list-teacher/detail/{id}' , 'AdminController@detailTeacher');

 	Route::get('/admin/create-teacher' , 'AdminController@addTeacher');
    Route::post('/admin/create-teacher' , 'AdminController@saveTeacher');
    
    Route::get('/admin/edit-teacher/{id}' , 'AdminController@editTeacher');
    Route::post('/admin/update/{id}' , 'AdminController@updateTeacher');

 	Route::get('/admin/teacher/hapus/{tcr_id}' , 'AdminController@hapusTeacher');
   
    
    //Route::get('/admin' , 'AdminController@addClass');

 	//route kelas
    Route::get('/admin/list-class' , 'AdminController@listClass');
    //Route::get('/admin/list-class/detail/{id}' , 'AdminController@detailClass');

   
    Route::get('admin/add-class','AdminController@addClass');
    Route::post('admin/add-class' , 'AdminController@saveClass');

    Route::get('/admin/edit-class/{id}' , 'AdminController@editClass');
    Route::post('/admin/update-class/{id}' , 'AdminController@updateClass');

    Route::get('admin/class/hapus/{class_id}','AdminController@hapusClass');

//Tabungan
   

    Route::get('/admin/list-tabungan'  , 'AdminController@listTabungan');
    Route::get('/admin/list-tabungan/detail' , 'AdminController@detailTabungan');
    Route::get('/admin/list-tabungan/detail/siswa' , 'AdminController@detailTabunganSiswa');

    //Untuk Save
    //ini untuk bagian input data kelas dan siswa
    Route::post('/admin/add-class' , 'AdminController@SaveAddClass');
    Route::post('/admin/add-student' , 'AdminController@SaveAddStudent');
    
   
   // Route::get('/admin/edit-class/{id}' , 'AdminController@editClass');
   // Route::get('/admin/list-class' , 'AdminController@listClass'); 
       
    
    
});
//student
	Route::group(['middleware' => ['role:student', 'verified']], function () {
	Route::get('/student' , 'StudentController@dashboard');
    Route::get('/student/list-tabungan' , 'StudentController@listTabungan');
    Route::get('/student/list-tabungan/detail/{id}' , 'StudentController@detailTabungan');
    
});
//walikelas
	Route::group(['middleware' => ['role:walikelas', 'verified']], function () {
	Route::get('/walikelas' , 'WalikelasController@dashboard');

	Route::get('/walikelas/list-student' , 'WalikelasController@listStudent');
	Route::get('/walikelas/list-student/detail/{id}' , 'WalikelasController@detailStudent');

	//FITUR KELOLA TABUNGAN

	Route::get('/walikelas/list-tabungan' , 'WalikelasController@listTabungan');
	Route::get('/walikelas/list-tabungan/detail/{id}' , 'WalikelasController@detailTabungan');

	Route::get('/walikelas/create-tabungan' , 'WalikelasController@addTabungan');
    Route::post('/walikelas/create-tabungan' , 'WalikelasController@saveTabungan');
    
    Route::get('/walikelas/edit-tabungan/{id}' , 'walikelasController@editTabungan');
    Route::post('/walikelas/update-tabungan/{id}' , 'walikelasController@updateTabungan');

 	Route::get('/walikelas/tabungan/hapus/{stu_id}' , 'WalikelasController@hapusTabungan');

 	//FITUR PENGAMBILAN TABUNGAN
 	Route::get('/walikelas/list-pengambilan' , 'WalikelasController@listPengambilan');
	Route::get('/walikelas/list-pengambilan/detail/{id}' , 'WalikelasController@detailPengambilan');

	Route::get('/walikelas/create-pengambilan' , 'WalikelasController@addPengambilan');
    Route::post('/walikelas/create-pengambilan' , 'WalikelasController@savePengambilan');
    
    Route::get('/walikelas/edit-pengambilan/{id}' , 'walikelasController@editPengambilan');
    Route::post('/walikelas/update-pengambilan/{id}' , 'walikelasController@updatePengambilan');

 	Route::get('/walikelas/pengambilan/hapus/{stu_id}' , 'WalikelasController@hapusPengambilan');
    
});




Route::get('table'  , 'AdminController@table');
Route::get('form' , 'AdminController@form');
