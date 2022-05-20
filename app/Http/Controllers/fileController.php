<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use App\Http\Requests\FileUploadRequest;
use Illuminate\Http\File;

class fileController extends Controller
{
	public function index()
	{
		return view("index");
	}

	public function upload(FileUploadRequest $request)
	{
		return back()->with("success","your files successfully uploaded");
	}

	public function download(FileUploadRequest $request)
	{

	}

	public function delete(FileUploadRequest $request)
	{

	}
}
