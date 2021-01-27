<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WalikelasController extends Controller
{
    public function dashboard()
	{
		return view ('walikelas.dashboard');
	}
}
