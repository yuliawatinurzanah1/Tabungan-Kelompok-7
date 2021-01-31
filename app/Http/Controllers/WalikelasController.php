<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WalikelasController extends Controller
{
    public function dashboard()
	{
		return view ('walikelas.dashboard');
	}
	 public function listTabungan()
	{
		return view ('walikelas.list-tabungan');
	}
	 public function listStudent()
	{
		return view ('walikelas.list-students');
	}
	 public function listSPemakaianTabungan()
	{
		return view ('walikelas.list-pemakaian-tabungan');
	}
  	
}
