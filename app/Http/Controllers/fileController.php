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
		$this->filename =  mt_rand(1, time()) . "-Laravel-minifier.zip";
		$this->pathToDownload = storage_path("app/public/download/" . $this->filename);
		$this->StorageManager = $StorageManager;
	}

	// public function __construct(
	// 	private StorageManager $StorageManager,
	// 	private FileHandler $FileHandler
	// ) {}

	public function index()
	{
		return view("index");
	}

	public function upload(FileUploadRequest $request)
	{
		return $this->StorageManager->upload($request);
	}

	public function download()
	{
		return $this->StorageManager->download($this->pathToDownload);
	}

	public function delete()
	{
		return $this->StorageManager->delete("upload");
	}
}
