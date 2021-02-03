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


class AdminController extends Controller
{
	
	public function dashboard()
	{
		return view ('admin.dashboard');
	}
	
	public function profile()
	{
		return view ('admin.profile');
	}

	public function listStudent()
	{
		//mengambil data dari tabel siswa
		$students = Student::join('users','stu_usr_id','=','usr_id') 
		->join('classes','stu_class_id','=','class_id')
		->get();
			//dd($students);

		return view ('admin.list-student',['students' => $students]);
	}

	public function detailStudent()
	{
		return view ('admin.detail-student');
	}
	 //Create siswa

	public function addStudent()
	{
		$classes = Classes::all();
		//mengirim data siswa ke view index
		return view ('admin.add-student', compact('classes'));
	}

	public function saveStudent(Request $request)
	{
		$user=new User;
		$user -> usr_name = $request -> student_name;
		$user -> usr_email = $request -> email;
		$user -> usr_phone = $request -> nomor_telepon;
		$user -> usr_password = Hash::make('12345678');
		$user -> assignRole('student');
		$user -> usr_email_verified_at = now();
			if($user->save()) {
				$student = new Student;
				$student->stu_usr_id = $user->usr_id;
				$student->stu_class_id = $request->grade;
				$student->save();

			}
		

		//mengirim data siswa ke view index
		return redirect('add-student');
	}

	


	public function listsClass()
	{
		$majors = Major::all();
		$grades = Grade::all();
		return view ('admin.list-class', compact('majors','grades'));
	}

	public function addClass()
	{
		$majors = Major::all();
		$grades = Grade::all();
		return view ('admin.add-class', compact('majors','grades'));
	}

	public function listsTeacher()
	{
		return view ('admin.list-teacher');
	}
	public function detailTeacher()
	{
		return view ('admin.detail-teacher');
	}
	

	
	public function SaveAddClass(Request $request){
			$class = new Classes();
			$class->class_grade_id    = $request->grade;
			$class->class_major_id 	  = $request->major;
			$class->class_name 		  = $request->class_name;
			//dd($class);
			$class->save();
            Session::flash('sukses','Data Berhasil disimpan');
        return back();
    }

	public function SaveAddStudent(Request $request){
            Session::flash('sukses','Data Berhasil disimpan');
        return back();
    }

	public function listTabungan()
	{
		return view ('admin.list-tabungan');
	}
	public function detailTabungan()
	{
		return view ('admin.detail-tabungan');
	}
	public function detailTabunganSiswa()
	{
		return view ('admin.detail-tabungan-siswa');
	}
    public function table (){
        return view ('admin.table');
    }

    public function form (){
        return view ('admin.form');
    }

 
}
