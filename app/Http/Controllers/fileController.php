<?php

namespace App\Http\Controllers;

use App\Http\Requests\FileUploadRequest;

class fileController extends Controller
{
	public function index()
	{
		return view("index");
	}

	public function upload(FileUploadRequest $request)
	{
		
	}
}
