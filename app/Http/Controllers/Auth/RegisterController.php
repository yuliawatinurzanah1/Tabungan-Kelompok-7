<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;
use Illuminate\Support\Str;
use Auth;
use Illuminate\Support\Facades\DB;
use App\Student;
use App\Classes;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */
    public function registerStudent()
    {
    	$students= DB::table('students')->get();
    	$classes= DB::table('classes')
    	->join('grades','grade_id','=','class_grade_id')
		->join('majors','major_id','=','class_major_id')
		->get();
    	//dd($students);
        return view('auth.register-student',['students'=> $students,'classes'=> $classes]);
    }

    public function registerWalikelas()
    {
        return view('auth.register-walikelas');
    }

    public function registerStaff()
    {
        return view('auth.register-staff');
    }

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    public function redirectTo() {
        if (Auth()->user()->hasRole('student')) {
            return '/student';
        }else{
            return '/walikelas';
        }
    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'usr_name' => ['required', 'string', 'max:255'],
            'usr_email' => ['required', 'string', 'max:255', 'unique:users,usr_email'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'usr_phone' => ['required', 'min:11'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        // dd($data);
         

        $user = User::create([
            'usr_name'			 => $data['usr_name'],
            'usr_email' 		 => $data['usr_email'],
            'usr_phone' 		 => $data['usr_phone'],
            'usr_password' 		 => Hash::make($data['password']),
            'usr_verification_token' => str_replace('/', '', Hash::make(Str::random(12))),
            'usr_is_active'		 => true,
            'usr_gender'		 => $data['usr_gender'],
            'usr_place_of_birth' => $data['usr_place_of_birth'],
            'usr_date_of_birth'  => $data['usr_date_of_birth'],
            'usr_religion'		 => $data['usr_religion'],
            'usr_addres'         => $data['usr_addres'],
            
        ]);

       

        if ($data['role'] == 1) {
        	 $students = Student::create([
        	'stu_usr_id'	  => $user->usr_id,
        	'stu_nis'		  => $data['stu_nis'],
        	'stu_class_id'	  => $data['stu_class_id'],	
        	'stu_school_year' => $data['stu_school_year']

        	]);

            $user->assignRole('student');
            $user->created_by = $user->usr_id;
        } elseif ($data['role'] == 2) {
            $user->assignRole('walikelas');
            $user->created_by = $user->usr_id;
        } elseif ($data['role'] == 3) {
            $user->assignRole('staff');
            $user->created_by = $user->usr_id;
        }


        Mail::to($data['usr_email'])->send(new SendMail($user));
        return $user;
    }
}
