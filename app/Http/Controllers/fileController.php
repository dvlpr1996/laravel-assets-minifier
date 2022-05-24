<?php

namespace App\Http\Controllers;

use App\Http\Requests\FileUploadRequest;
use App\Services\StorageManager;

class fileController extends Controller
{
	private $filename;
	private $pathToDownload;
	private $StorageManager;

	public function __construct(StorageManager $StorageManager)
	{
		$this->filename = time() . mt_rand() . "-Laravel-minifier.zip";
		$this->pathToDownload = storage_path("app/public/download/" . $this->filename);
		$this->StorageManager = $StorageManager;
	}

	public function index()
	{
		return view("index");
	}

	public function upload(FileUploadRequest $request)
	{
		if ($request->hasFile("files")) {
			foreach ($request->file("files") as $files) {
				$files->store("upload");
			}
		}
		return back()->with("success", "your files successfully uploaded");
	}

	public function download()
	{	
		// delete after downloaded
		return $this->StorageManager->download($this->pathToDownload);
	}

	public function delete()
	{
		$this->StorageManager->delete("upload");
		return back()->with("success", "your files successfully deleted");
	}
}
