<?php

namespace App\Services;

use Exception;
use Illuminate\Support\Facades\Storage;

class FileHandler
{
	public function fileType($extension)
	{
		$assets = ["html", "js", "css"];
		$img = ["png", "jpg"];

		if (in_array($extension, $assets))
			return false;
		if (in_array($extension, $img))
			return true;
	}

	public function specificUploadPath($files)
	{
		if ($this->fileType($files->extension())) {
			return $path = "upload/img";
		}
		return $path = "upload/assets";
	}

	public function originalFileSize()
	{
	}

	public function randomFileName()
	{
		return "laravel-minifier-" . mt_rand(1, time());
	}

	public function checkDirExists(string $action, string $msg = "deleted")
	{
		if (empty(Storage::allDirectories($action))) {
			throw new Exception('There is no file to' . " " . $msg);
		}
	}

	public function checkFileUploaded($request)
	{
		if (!$request->hasFile("files")) {
			throw new Exception("You have not uploaded any file");
		}
	}
}
