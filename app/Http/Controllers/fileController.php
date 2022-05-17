<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class fileController extends Controller
{
	public function index()
	{
		return view("index");
	}

	public function upload(Request $request)
	{
		
	}
}
