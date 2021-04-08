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



class AdminController extends Controller
{
	
	public function dashboard()
	{
		return view ('admin.dashboard');
	}
	
	//public function profile()
	//{
	//	return view ('admin.profile');
	//}

//Management Siswa
	public function listStudent()
	{
		//mengambil data dari tabel siswa
		$user= DB::table('users')->get();
		$students = Student::join('users','stu_usr_id','=','usr_id') 
		->join('classes','stu_class_id','=','class_id')
		->join('grades','grade_id','=','class_grade_id')
		->join('majors','major_id','=','class_major_id')
		->get();
		$count=0;

		//$students = Student::where('stu_')
			//dd($students);

		return view ('admin.list-student',['students' => $students,'count'=> $count]);
	}

	public function detailStudent($id)
	{
		$student = Student::join('users', 'students.stu_usr_id', '=', 'usr_id') 
		->join('classes','stu_class_id','=','class_id')
		->join('grades','grade_id','=','class_grade_id')
		->join('majors','major_id','=','class_major_id')
		->where('stu_id',$id)
		->get();
		
		return view ('admin.detail-student',['student'=>$student]);
	}


	 //Create siswa

	public function addStudent()
	{
		$classes = Classes::all();
		$majors = Major::all();
		$grades = Grade::all();
		//mengirim data siswa ke view index
		return view ('admin.add-student', compact('classes','majors','grades'));
	}

	public function saveStudent(Request $request)
	{
		$user=new User;
		$user->usr_name              = $request->student_name;
		$user->usr_email             = $request->email;
		$user->usr_phone             = $request->nomor_telepon;
		$user->usr_password          = Hash::make('12345678');
		$user->assignRole('student');
		$user->usr_is_active         = 1;
		$user->usr_email_verified_at = now();
			if($user->save()) {
				$student = new Student;
				$student->stu_usr_id       = $user->usr_id;
				$student->stu_class_id     = $request->grade;
				$student->stu_nis          = $request->nis;
				$student->stu_school_year  = $request->tahun_ajaran;
				$student->save();

				Session::flash('sukses','Data Berhasil disimpan');
        return back();

			}
		

		//mengirim data siswa ke view index
		return redirect('admin/list-student');
	}

	public function editStudent($id)
	{
		//mengambil data siswa sesuai id yg dipilih
		$student = DB::table('students')
		->join('users','students.stu_usr_id','=','users.usr_id')
		->join('classes','students.stu_class_id','=','classes.class_id')
		->join('majors','classes.class_major_id','=','majors.major_id')
		->join('grades','classes.class_grade_id','=','grades.grade_id')
		
		
		->where('stu_id',$id)
		->first();

		$classes = DB::table('classes')
		->join('grades','classes.class_grade_id','=','grades.grade_id')
		->join('majors','classes.class_major_id','=','majors.major_id')
		->get();

		//$majors = Majors::all();
		//$grade=DB::table('grades')->get();
    	//$class = DB::table('classes')->get();
    	//$major=DB::table('majors')->get();
		
		//passingg data siswa yg di dapat ke view edit-student.blade.php
		return view('admin.edit-student',['student' => $student,'classes' => $classes]);
	}
	public function updateStudent(Request $request,$id)
	{
		//dd($request);
		//update data siswa
		$student = DB::table('students')
		->join('users','students.stu_usr_id','=','users.usr_id')
		->where('stu_id',$id)
		->update([
			'stu_nis'		  => $request->nis,
			'usr_name'		  => $request->student_name,
			'stu_class_id'	  => $request->grade,
			'stu_school_year' => $request->tahun_ajaran,
			'usr_email'		  => $request->email,
			'usr_phone'       => $request->nomor_telepon
		]); 


		Session::flash('sukses','Data Berhasil disimpan');
        return back();

		return redirect('admin/list-student');
	}
	public function hapusStudent($stu_id)
	{
		//menghapus data siswa berdasarkan id

		$students= Student::where('stu_id',$stu_id);
		$students->delete();

		return redirect('admin/list-student');
	}


//Managemen Guru
	public function listTeacher()
	{
		//mengambil data dari tabel guru
		$teachers = Teacher::join('users','tcr_usr_id','=','usr_id') 
		->join('classes','tcr_class_id','=','class_id')
		->join('grades','grade_id','=','class_grade_id')
		->join('majors','major_id','=','class_major_id')
		->get();
		$count=0;	

		return view ('admin.list-teacher',['teachers' => $teachers,'count'=>$count]);
	}
	public function detailTeacher($id)
	{
		$teachers = Teacher::join('users', 'teachers.tcr_usr_id', '=', 'usr_id') 
		->join('classes','tcr_class_id','=','class_id')
		->join('grades','grade_id','=','class_grade_id')
		->join('majors','major_id','=','class_major_id')
		->where('tcr_id',$id)
		->get();
		return view ('admin.detail-teacher',['teachers'=>$teachers]);
	}

	//CRUD Guru
	public function addTeacher()
	{
		$classes = Classes::all();
		$teacher = DB::table('teachers')->get();	 
		//mengirim data guru ke view index
		return view ('admin.add-teacher', compact('classes','teacher'));
	}

	public function saveTeacher(Request $request)
	{
		$user=new User;
		$user->usr_name              = $request->teacher_name;
		$user->usr_email             = $request->email;
		$user->usr_phone             = $request->nomor_telepon;
		$user->usr_password          = Hash::make('12345678');
		$user->assignRole('walikelas');
		$user->usr_is_active         = 1;
		$user->usr_email_verified_at = now();
			if($user->save()) {
				$teacher = new Teacher;

				$teacher->tcr_usr_id       = $user->usr_id;
				$teacher->tcr_nik          = $request ->nik;
				$teacher->tcr_class_id     = $request->grade;
				$teacher->tcr_marital_status   = $request->marital_status;
				$teacher->save();

				Session::flash('sukses','Data Berhasil disimpan');
        return back();

			}
		

		//mengirim data guru ke view index
		return redirect('admin/list-teacher');
	}

	public function editTeacher($id)
	{
		//mengambil data guru sesuai id yg dipilih
		$teacher = DB::table('teachers')
		->join('users','teachers.tcr_usr_id','=','users.usr_id')
		->where('tcr_id',$id)
		->first();
		$classes = Classes::all();
		
		//passingg data guru yg di dapat ke view edit-teacher.blade.php
		return view('admin.edit-teacher',['teacher' => $teacher,'classes' => $classes]);
			
	}
	public function updateTeacher(Request $request,$id)
	{
		//dd($request);
		//update data guru
		$teacher = DB::table('teachers')
		->join('users','teachers.tcr_usr_id','=','users.usr_id')
		->where('tcr_id',$id)
		->update([

			'tcr_nik'		  	 => $request->nik,
			'usr_name'		  	 => $request->teacher_name,
			'tcr_class_id'	  	 => $request->grade,
			'tcr_marital_status' => $request->marital_status,
			'usr_email'		  	 => $request->email,
			'usr_phone'       	 => $request->nomor_telepon]); 
		return redirect('admin/list-teacher');
	}
	public function hapusTeacher($tcr_id)
	{
		//menghapus data guru berdasarkan id
		$teacher= Teacher::where('tcr_id',$tcr_id);
		$teacher->delete();

		return redirect('admin/list-teacher');
	}
	

//Managemen Kelas
	public function listClass()
	{
		

		$user= DB::table('users')->get();
		$classes= DB::table('classes')
		->join('majors','major_id','=','class_major_id')
		->join('grades','grade_id','=','class_grade_id')
		->get();
		$count=0;
		return view ('admin.list-class',['classes'=>$classes,'count'=>$count]);
		
	}

	public function addClass()
	{
		$majors = Major::all();
		$grades = Grade::all();
		return view ('admin.add-class', compact('majors','grades'));
	}
	

	public function SaveAddClass(Request $request){
		
			$class = new Classes();
			$class->class_grade_id    = $request->grade;
			$class->class_major_id 	  = $request->major;
			$class->class_number 	  = $request->class_number;
			//dd($class);
			$class->save();
            Session::flash('sukses','Data Berhasil disimpan');
        return back();
    
    	return redirect('admin/list-class');
    }
  

    public function editClass($id)
    {
    	$classes = DB::table('classes')->where('class_id',$id)->first();
    	// dd($classes)
    	// ;
    	$grade=DB::table('grades')->get();
    	$class = DB::table('classes')->get();
    	$major=DB::table('majors')->get();	
    	return view ('admin.edit-class',['classes' => $classes,'class'=> $class,'grade'=>$grade,'major'=>$major]);
    }

    public function updateClass(Request $request,$class_id)
    {
  
    	$classes = DB::table('classes')
		->join('users','class_id','=','usr_id') 
		->where('class_id',$class_id)
		->update([	    	   

    	'class_grade_id' => $request->input('grade'),
    	'class_major_id' => $request->input('major'),
    	'class_number'   => $request->input('class_number')
    		
   		]); 
    	return redirect('admin/list-class');
    }

public function hapusClass($class_id)
	{
		//menghapus data kelas berdasarkan id

		$classes= Classes::where('class_id',$class_id);
		$classes->delete();

		return redirect('admin/list-class');
	}


	public function SaveAddStudent(Request $request){
            Session::flash('sukses','Data Berhasil disimpan');
        return back();
    }

	
    public function table (){
        return view ('admin.table');
    }

    public function form (){
        return view ('admin.form');
    }

 
}
