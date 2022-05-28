<?php

namespace App\Services;

use Exception;
use ZipArchive;
use App\Services\FileHandler;
use Illuminate\Support\Facades\Storage;

class ZipFile
{

	public function __construct(
		private FileHandler $FileHandler
	) {
	}

	public function zipFiles(string $pathToDownload)
	{
		$zip = new ZipArchive;

		if ($zip->open($pathToDownload, ZipArchive::CREATE) !== TRUE) {
			throw new Exception("Something went wrong");
		}

		// ($path == "img") ? $path = "img" : $path = "assets";

		foreach (Storage::files("upload/img") as $key => $value) {
			$zip->addFile(
				storage_path("app/public/") . $value,
				basename($value)
			);
		}
		$zip->close();
	}
}
