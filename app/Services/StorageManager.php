<?php

namespace App\Services;

use Illuminate\Support\Facades\Storage;

class StorageManager
{
	private $FileHandler;
	private $ZipFile;

	public function __construct(FileHandler $FileHandler, ZipFile $ZipFile)
	{
		$this->ZipFile = $ZipFile;
		$this->FileHandler = $FileHandler;
	}

	public function upload($request, $input)
	{
	}

	public function download(string $pathToDownload)
	{
		$this->ZipFile->zipFiles($pathToDownload);
		$this->FileHandler->checkFileExists("download", "downloaded");
		return response()->download($pathToDownload)
			->deleteFileAfterSend();
	}

	public function delete(string $path)
	{
		$this->FileHandler->checkFileExists("upload");
		foreach (Storage::files($path) as $files) {
			Storage::delete($files);
		}
	}
}
