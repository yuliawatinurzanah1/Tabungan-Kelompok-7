<?php


namespace App\Http\Controllers;
use App\User;
use Hash;
use Illuminate\Support\Carbon;
use App\Classes;
use App\Grade;
use App\Major;
use Session;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Student;
use App\Teacher;

class StudentController extends Controller
{
	public function __construct()
    {
        $this->middleware(['auth','verified']);
    }

    public function Dashboard()
    {
    	return view('student.dashboard');
    }

//Managemen Tabungan    
 	public function listTabungan()
	{
//untuk yg login
		$user = Auth()->user();


		$students = Student::join('users','stu_usr_id','=','usr_id') 
		->join('classes','stu_class_id','=','class_id')
		//->join('majors','major_id','=','class_major_id')
		//->join('savings','sav_class_id','=','sav_id')
		
		->get();
		$count=0;
		return view ('student.list-tabungan',['students'=>$students,'count'=>$count]);	
	}
	public function detailTabungan($id)
	{
		$user= DB::table('users')->get();
		$students = Student::join('users','stu_usr_id','=','usr_id') 
		->join('classes','stu_class_id','=','class_id')
		->join('majors','major_id','=','class_major_id')
		->join('savings','sav_class_id','=','sav_id')
		->where('stu_id',$id)
		
		->get();
		$count=0;
		return view ('student.detail-tabungan',['students'=>$students,'count'=>$count]);
	}













}
