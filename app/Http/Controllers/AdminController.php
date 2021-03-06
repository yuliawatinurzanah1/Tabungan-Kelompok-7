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
		->orderBy('classes.class_id','ASC')
		->orderBy('users.usr_name', 'ASC')
		->simplePaginate(10);

		$count=0;

		//$students = Student::where('stu_')
			//dd($students);

		return view ('admin.list-student',['students' => $students,'count'=> $count]);
	}

	public function detailStudent($id)
	{
		$student = Student::join('users', 'stu_usr_id', '=', 'usr_id') 
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
		$classes = DB::table('classes') 
		->join('grades','classes.class_grade_id','=','grades.grade_id')
		->join('majors','classes.class_major_id','=','majors.major_id')
		->get();
		$student =DB::table('students')->get();
		//mengirim data siswa ke view index
		return view ('admin.add-student', compact('classes','student'));
	}

	public function saveStudent(Request $request)
	{
		$cek_telp = User::whereUsrPhone($request->nomor_telepon)
		->whereEmaik($request->email)
		->count();

		$cek_nis = Student::whereStuNis($request->nis)
		->count();

		if( $cek_telp == 0 && $cek_nis == 0 )
	{
		$user=new User;
		$user->usr_name              = $request->student_name;
		$user->usr_email             = $request->email;
		$user->usr_phone             = $request->nomor_telepon;
		$user->usr_gender	   = $request->gender;
		$user->usr_place_of_birth = $request->place_of_birth;
		$user->usr_date_of_birth = $request->date_of_birth;
		$user->usr_religion		=$request->religion;
		$user->usr_addres		=$request->addres;
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

			return redirect('admin/list-student');
			} else {
				return redirect('/admin/create-student')->with('message', 'Tambah Data Siswa Gagal');			
			}

	} else {
			return redirect('/admin/create-student')->with('message', 'Nik atau No Telpon Sudah Terpakai');	
}


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
		$cek_telp = User::whereUsrPhone($request->nomor_telepon)
		->count();

		$cek_nis = Student::whereStuNis($request->nis)
		->count();

		if( $cek_telp == 0 && $cek_nis == 0 )
		{
		//dd($id);
		//update data siswa
		$student = DB::table('students')
		->join('users','students.stu_usr_id','=','users.usr_id')
		->join('classes','stu_class_id','=','class_id')
		->where('students.stu_usr_id','=',$id)
		->update([
			'stu_nis'		  => $request->nis,
			'usr_name'		  => $request->student_name,
			'stu_class_id'	  => $request->grade,
			'stu_school_year' => $request->tahun_ajaran,
			'usr_email'		  => $request->email,
			'usr_phone'       => $request->nomor_telepon,
			'class_number'	  => $request->class_number
		]); 
			return redirect('/admin/list-student');

		} else {
			return back()->with('message', 'Nik, No Telp, Atau Kelas Sudah Terpakai');	
		}

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
		$classes = Classes::join('grades','grade_id','=','class_grade_id')
		->join('majors','major_id','=','class_major_id') 
		->get();
		$teacher = Teacher::join('users','teachers.tcr_usr_id','=','users.usr_id')
		->get();	 
		//mengirim data guru ke view index
		return view ('admin.add-teacher', compact('classes','teacher'));
	}

	public function saveTeacher(Request $request)
	{

		$cek_telp = User::whereUsrPhone($request->nomor_telepon)
		->count();

		$cek_nik_class = Teacher::whereTcrNik($request->nik)
		->whereTcrClassId($request->grade)
		->count();

		if( $cek_telp == 0 && $cek_nik_class == 0 )
		{

		$users					     = new User;
		$user->usr_name              = $request->teacher_name;
		$user->usr_email             = $request->email;
		$user->usr_phone             = $request->nomor_telepon;
		$user->usr_gender	   = $request->gender;
		$user->usr_place_of_birth = $request->place_of_birth;
		$user->usr_date_of_birth = $request->date_of_birth;
		$user->usr_religion		=$request->religion;
		$user->usr_addres		=$request->addres;
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

				//mengirim data guru ke view index
				return redirect('admin/list-teacher');
			} else {
				return redirect('/admin/create-teacher')->with('message', 'Tambah Data Siswa Gagal');			
			}

		} else {
			return redirect('/admin/create-teacher')->with('message', 'Nik, No Telp, Atau Kelas Sudah Terpakai');	
		}


	}

	public function editTeacher($id)
	{

		//mengambil data guru sesuai id yg dipilih
		$teacher = DB::table('teachers')
		->join('users','teachers.tcr_usr_id','=','users.usr_id')
		->join('classes','teachers.tcr_class_id','=','classes.class_id')
		->join('majors','classes.class_major_id','=','majors.major_id')
		->join('grades','classes.class_grade_id','=','grades.grade_id')

		->where('tcr_id',$id)
		->first();
		

		$classes = DB::table('classes')
		->join('grades','classes.class_grade_id','=','grades.grade_id')
		->join('majors','classes.class_major_id','=','majors.major_id')
		->get();

		$teachers = Teacher::all();
		//passingg data guru yg di dapat ke view edit-teacher.blade.php
		return view('admin.edit-teacher',['teacher' => $teacher,'classes' => $classes,'teachers'=>$teachers]);
			
	}
	public function updateTeacher(Request $request, $id)
	{
		
		$cek_telp = User::whereUsrPhone($request->nomor_telepon)
		->count();

		$cek_nik_class = Teacher::whereTcrNik($request->nik)
		->whereTcrClassId($request->grade)
		->count();

		if( $cek_telp == 0 && $cek_nik_class == 0 )
		{
		//dd($request);
		//update data gurup
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
			if ($teacher) {
				return redirect('/admin/list-teacher');
			}		
		} else {
			return back()->with('message', 'Nik, No Telp, Atau Kelas Sudah Terpakai');	
		}
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
		->orderBy('classes.class_grade_id','ASC')
		->orderBy('majors.major_name','ASC')
		->orderBy('grades.grade_name','ASC')	
		->orderBy('classes.class_number','ASC')
		->get();
		$count=0;
		return view ('admin.list-class',['classes'=>$classes,'count'=>$count]);
		
	}

	public function addClass()
	{
		$classes = Classes::all();
		$majors = Major::all();
		$grades = Grade::all();
		return view ('admin.add-class', compact('classes','majors','grades'));
	}
	

	public function SaveAddClass(Request $request)
	{
		
		$cek = Classes::whereClassGradeId($request->grade)
		->whereClassMajorId($request->major)
		->whereClassNumber($request->class_number)
		->count();

		if ($cek == 0) {
				
			$class = new Classes();
			$class->class_grade_id    = $request->grade;
			$class->class_major_id 	  = $request->major;
			$class->class_number 	  = $request->class_number;
			//dd($class);
			$class->save();
    
    	return redirect('admin/list-class');
		} else {
			return back()->with('message', 'Kelas, Jurusan Atau Nomor Kelas Sudah Tersedia');		
		}
    }
  

    public function editClass($id)
    {
    	$classes = DB::table('classes')
    	->join('users','class_id','=','usr_id') 
		->join('majors','classes.class_major_id','=','majors.major_id')
		->join('grades','classes.class_grade_id','=','grades.grade_id')
		->where('class_id',$id)
		->groupBy('class_number')
		->first();
    	// dd($classes)
    	// ;
    	$class = DB::table('classes') 
		->join('majors','classes.class_major_id','=','majors.major_id')
		->join('grades','classes.class_grade_id','=','grades.grade_id')
    	->get();	
    	return view ('admin.edit-class',['classes' => $classes,'class'=> $class]);
    }

    public function updateClass(Request $request,$class_id)
    {


		$cek = Classes::whereClassGradeId($request->grade)
		->whereClassMajorId($request->major)
		->whereClassNumber($request->class_number)
		->count();

		if( $cek == 0 )
		{

    	$classes = DB::table('classes')
		->join('users','class_id','=','usr_id') 
		->where('class_id',$class_id)
		->groupBy('class_number')
		->update([	    	   

    	'class_grade_id' => $request->input('grade'),
    	'class_major_id' => $request->input('major'),
    	'class_number'   => $request->input('class_number')
    		
   		]); 
    		if ($classes) {
				return redirect('/admin/list-class');
			}		
		} else {
			return back()->with('message', 'Nik, No Telp, Atau Kelas Sudah Terpakai');	
		}
	}

public function hapusClass($id)
	{
		//menghapus data kelas berdasarkan id

		$classes = Classes::where('class_id',$id)->delete();
		//dd($classes);
		return redirect('admin/list-class');
	}

	
    public function table (){
        return view ('admin.table');
    }

    public function form (){
        return view ('admin.form');
    }

 
}
