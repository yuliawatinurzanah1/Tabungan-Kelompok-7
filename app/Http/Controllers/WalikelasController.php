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
use App\Saving;
use App\Saving_usage;
use Auth;

class WalikelasController extends Controller
{
    public function dashboard()
	{
		return view ('walikelas.dashboard');
	}

//Management Siswa
	public function listStudent()
	{
		//untuk yg login
		$user = Auth()->user();

		$teachers = Teacher::where('tcr_usr_id', $user->usr_id)->first(); 
		$students = Student::join('users','students.stu_usr_id','=','users.usr_id')
					->where('stu_class_id', $teachers->tcr_class_id)
					->get();
		
		$count=0;
			
		return view ('walikelas.list-student',['students' => $students,'count'=> $count]);
	}

	public function detailStudent($id)
	{
		$student = Student::join('users', 'students.stu_usr_id', '=', 'users.usr_id') 
		->join('classes','stu_class_id','=','class_id')
		->join('grades','grade_id','=','class_grade_id')
		->join('majors','major_id','=','class_major_id')
		->where('stu_id',$id)
		->get();
		
		return view ('walikelas.detail-student',['student'=>$student]);
	}
	
    
//Managemen Tabungan    
 	public function listTabungan() 
		
	{
		//untuk yg login
		$user = Auth()->user();

		$teachers = Teacher::where('tcr_usr_id', $user->usr_id)->first(); 
		$students = Student::join('users','students.stu_usr_id','=','users.usr_id')
					->where('stu_class_id', $teachers->tcr_class_id)
					->get();

		$count=0;
		return view ('walikelas.list-tabungan',['students'=>$students,'count'=>$count]);	
	}
	public function detailTabungan($id)
	{
		$user= DB::table('users')->get();
		$savings = Saving::join('students','sav_stu_id','=','stu_id')
		->join('classes','stu_class_id','=','class_id') 
		->join('users','stu_usr_id','=','usr_id')
		->join('grades','grade_id','=','class_grade_id')
		->join('majors','major_id','=','class_major_id')
		
		->where('stu_id',$id)

		->get();
		$count=0;
		return view ('walikelas.detail-tabungan',['savings'=>$savings,'count'=>$count]);
	}
	
		//CRUD TABUNGAN
	public function addTabungan()
	{
		
		$user= DB::table('users')->get();
		$students = Student::join('users','stu_usr_id','=','usr_id')
		

		->get();
		$count=0;
		//$saving = DB::table('savings')->get();
		
		$grades = Grade::all();
		
		 
		//mengirim data tabungan ke view index
		return view ('walikelas.add-tabungan',['students'=>$students,'count'=>$count], compact('grades'));
	}

	public function saveTabungan(Request $request)
	{
		//dd($request->stu_id);
			$saving = new Saving;
				$saving->sav_stu_id       = $request->usr_name;
				$saving->sav_class_id     = $request->grade;
				$saving->sav_amount       = $request->sav_amount;
				$saving->sav_date		  = $request->sav_date;
				$saving->save();	
		
				Session::flash('sukses','Data Berhasil disimpan');
        return back();
        //mengirim data siswa ke view index
		return redirect('walikelas/add-tabungan');
	}
	
		public function editTabungan($id)
	{
		//mengambil data tabungan sesuai id yg dipilih
		$saving = DB::table('savings')
		->join('students','sav_stu_id','=','stu_id')
		->join('classes','stu_class_id','=','class_id') 
		->join('users','stu_usr_id','=','usr_id') 
		->join('majors','class_major_id','=','major_id')
		->where('stu_id',$id)
		->first();
		
		$classes = DB::table('classes')
		->join('grades','classes.class_grade_id','=','grades.grade_id')
		->join('majors','classes.class_major_id','=','majors.major_id')
		->get();
		//$grades = Grade::all();
		//$classes = Classes::all();
		
		//passingg data tabungan yg di dapat ke view edit-tabungan.blade.php
		return view('walikelas.edit-tabungan',['saving' => $saving,'classes' => $classes]);
			
	}


	public function updateTabungan(Request $request,$id)
	{
		//dd($request);
		//update data tabungan 
		$saving = DB::table('savings')
		->join('students','sav_stu_id','=','stu_id')
		->where('stu_id',$id)
		->update([

			'sav_class_id'	 => $request->grade,
			'sav_amount'	 => $request->sav_amount,
			'sav_date'	  	 => $request->sav_date
		]);
			
		return redirect('walikelas/list-tabungan');
	}

	//Managemen Pengambilan Tabungan    
 	public function listPengambilan()
	{
		//untuk yg login
		$user = Auth()->user();

		$teachers = Teacher::where('tcr_usr_id', $user->usr_id)->first(); 
		$students = Student::join('users','students.stu_usr_id','=','users.usr_id')
					->where('stu_class_id', $teachers->tcr_class_id)
					->get();

		$count=0;
	
		return view ('walikelas.list-Pengambilan',['students'=>$students,'count'=>$count]);	
	}

	public function detailPengambilan($id)
	{
		$user= DB::table('users')->get();
		$saving_usages = Saving_usage::join('students','usa_stu_id','=','stu_id')
		->join('classes','stu_class_id','=','class_id') 
		->join('users','stu_usr_id','=','usr_id')
		->join('grades','grade_id','=','class_grade_id')
		->join('majors','major_id','=','class_major_id')
		
		->where('stu_id',$id)

		->get();
		$count=0;
		return view ('walikelas.detail-pengambilan',['saving_usages'=>$saving_usages,'count'=>$count]);
	}
	//CRUD PENGAMBILAN TABUNGAN
	public function addPengambilan()
	{
		$user= DB::table('users')->get();
		$students = Student::join('users','stu_usr_id','=','usr_id')
		

		->get();
		$count=0;
		$grades = Grade::all();
		//$students = Student::all();
		//$classes = Classes::all();
		//$savings = Savings::all();
		//$saving = DB::table('savings')->get();	 
		//mengirim data tabungan ke view index
		return view ('walikelas.add-pengambilan',['students'=>$students,'count'=>$count], compact('grades'));
	}

	public function savePengambilan(Request $request)
	{
		
			$saving_usage = new Saving_usage;
				$saving_usage->usa_stu_id       = $request->usr_name;
				$saving_usage->usa_class_id     = $request->grade;
				$saving_usage->usa_amount       = $request->usa_amount;
				$saving_usage->usa_date		    = $request->usa_date;
				$saving_usage->usa_information  = $request->usa_information;
				$saving_usage->save();	
		
				Session::flash('sukses','Data Berhasil disimpan');
        return back();
        //mengirim data siswa ke view index
		return redirect('walikelas/add-pengambilan');
	}
	
		public function editPengambilan($id)
	{
		//mengambil data tabungan sesuai id yg dipilih
		$saving_usage = DB::table('saving_usages')
		->join('students','usa_stu_id','=','stu_id')
		->join('classes','stu_class_id','=','class_id') 
		->join('users','stu_usr_id','=','usr_id') 
		->join('majors','class_major_id','=','major_id')
		->where('stu_id',$id)
		->first();
		
		$classes = DB::table('classes')
		->join('grades','classes.class_grade_id','=','grades.grade_id')
		->join('majors','classes.class_major_id','=','majors.major_id')
		->get();
	
		//passingg data tabungan yg di dapat ke view edit-Pemakaian.blade.php
		return view('walikelas.edit-pengambilan',['saving_usage' => $saving_usage,'classes' => $classes]);
			
	}
	public function updatePengambilan(Request $request,$id)
	{
		//dd($request);
		//update data tabungan
		$saving_usage = DB::table('saving_usages')
		->join('students','saving_usages.usa_stu_id','=','users.stu_id')
		->join('classes','students.stu_class_id','=','classes.class_id') 
		->join('users','students.stu_usr_id','=','users.usr_id')
		->join('majors','classes.class_major_id','=','majors.major_id')
		->where('stu_id',$id)
		->update([

			'usa_class_id'	 => $request->grade,
			'usa_amount '	 => $request->usa_amount,
			'usa_date'	  	 => $request->usa_date,
			'usa_information'=> $request->usa_information
		]);
			
		return redirect('walikelas/list-pengambilan');
	}















}

	
  	

  

   