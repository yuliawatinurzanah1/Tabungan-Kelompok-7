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

	public function countPerhari()
	{
		//$saving = DB::table('savings')->get();
		$student = Student::where('stu_usr_id',Auth()->user()->usr_id)
					->first();



				//dd($student->stu_id);
		$saving = Saving::where('sav_stu_id',$student->stu_id)
		
		->sum('sav_amount');

				//dd($saving);
		

		//dd(Auth()->user()->usr_id);
		//$saving_usage = DB::table('saving_usages')->get();
		$saving_usage = Saving_usage::where('usa_stu_id',$student->stu_id)
		->sum('usa_amount');

		//$saving_usage = "Rp " . number_format($saving_usage,2,',','.');
		$hasil = $saving - $saving_usage;
		$hasil = "Rp " . number_format($hasil,2,',','.');

			//dd($hasil);
		return view('student.saldo',compact('saving','saving_usage','hasil'));
		
		
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
		return view ('student.detail-pengambilan',['saving_usages'=>$saving_usages,'count'=>$count]);
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

				
				return redirect('student/add-pengambilan');
			

			
	}










}
