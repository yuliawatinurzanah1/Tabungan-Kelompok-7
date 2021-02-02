<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WalikelasController extends Controller
{
    public function dashboard()
	{
		return view ('walikelas.dashboard');
	}
	 public function listStudent()
	{
		return view ('walikelas.list-student');
	}
	 public function detailStudent ()
	{
        return view ('walikelas.detail-student');
    }
     public function listsClass()
	{
		return view ('walikelas.list-class');
	}
	 public function listTabungan()
	{
		return view ('walikelas.list-tabungan');
	}

	 public function listSPemakaianTabungan()
	{
		return view ('walikelas.list-pemakaian-tabungan');
	}
  	
}
  

   