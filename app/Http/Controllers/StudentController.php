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
 	//public function listTabungan() 
		
	//{
		//untuk yg login
		//$user = Auth()->user();

		//$students= Saving::join('students','sav_stu_id','stu_id')
			//->join('users','users.usr_id','students.stu_usr_id')
			//->where('users.usr_id',$user->usr_id)
			//->get();
	//	$count=0;

		//$students = Student::groupBy('stu_usr_id', )

		//return view ('student.list-tabungan',['students'=>$students,'count'=>$count]);	
	//}
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
		return view ('student.detail-tabungan',['savings'=>$savings,'count'=>$count]);
	}

	//CREATE PENGAMBILAN TABUNGAN
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
		return view ('student.add-pengambilan',['students'=>$students,'count'=>$count], compact('grades'));
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
		return redirect('student/add-pengambilan');
	}

//Managemen Pengambilan Tabungan    
 	//public function listPengambilan()
	//{
		//untuk yg login
		//$user = Auth()->user();

		//$students= Saving_usage::join('students','usa_stu_id','stu_id')
					//->join('users','users.usr_id','students.stu_usr_id')
					//->where('users.usr_id',$user->usr_id)
					//->get();

		//$count=0;
	
		//return view ('student.list-Pengambilan',['students'=>$students,'count'=>$count]);	
	//}

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
		return view ('student.detail-pengambilan',['saving_usages'=>$saving_usages,'count'=>$count]);
	}

	








}
