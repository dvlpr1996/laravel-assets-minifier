<?php

namespace App\Services;

use ZipArchive;
use Illuminate\Support\Facades\File;


class ZipFile
{
  
	private $uploadPath;

	public function __construct() {
		$this->uploadPath = storage_path('app/public/upload/');
	}

	public function zipFiles(string $pathToZipFile)
	{
		$zip = new ZipArchive;
		// todo : check error issues
		if ($zip->open($pathToZipFile, ZipArchive::CREATE) === TRUE) {
			$files = File::files($this->uploadPath);
			foreach ($files as $key => $value) {
				$relativeName = basename($value);
				$zip->addFile($value, $relativeName);
			}
			$zip->close();
		}
	}

}
