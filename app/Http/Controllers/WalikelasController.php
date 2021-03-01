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

class WalikelasController extends Controller
{
    public function dashboard()
	{
		return view ('walikelas.dashboard');
	}

//Management Siswa
	public function listStudent()
	{
		//mengambil data dari tabel siswa
		$user= DB::table('users')->get();
		$students = Student::join('users','stu_usr_id','=','usr_id') 
		->join('classes','stu_class_id','=','class_id')
		->get();
		$count=0;
			//dd($students);

		return view ('walikelas.list-student',['students' => $students,'count'=> $count]);
	}

	public function detailStudent($id)
	{
		$student = Student::join('users', 'students.stu_usr_id', '=', 'users.usr_id') 
		->where('stu_id',$id)
		->get();
		
		return view ('walikelas.detail-student',['student'=>$student]);
	}
    
//Managemen Tabungan    
 	public function listTabungan()
	{
		$user= DB::table('users')->get();
		$students = Student::join('users','stu_usr_id','=','usr_id') 
		->join('classes','stu_class_id','=','class_id')
		//->join('majors','major_id','=','class_major_id')
		//->join('savings','sav_class_id','=','sav_id')
		
		->get();
		$count=0;
		return view ('walikelas.list-tabungan',['students'=>$students,'count'=>$count]);	
	}
	public function detailTabungan()
	{
		$user= DB::table('users')->get();
		$students = Student::join('users','stu_usr_id','=','usr_id') 
		->join('classes','stu_class_id','=','class_id')
		->join('majors','major_id','=','class_major_id')
		->join('savings','sav_class_id','=','sav_id')
		
		
		->get();
		$count=0;
		return view ('walikelas.detail-tabungan',['students'=>$students,'count'=>$count]);
	}
  	
}
  

   