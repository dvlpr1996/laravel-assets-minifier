<?php

namespace App\Services;

use Exception;
use App\Services\ZipFile;
use App\Services\FileHandler;
use Illuminate\Support\Facades\Storage;

class StorageManager
{

	public function __construct(
		private FileHandler $FileHandler,
		private ZipFile $ZipFile
	) {
	}

	public function upload($request)
	{
		try {

			// fix this check
			if (!$request->isMethod('POST')) {
				throw new Exception("action is not valid try again!");
			}

			$this->FileHandler->checkFileUploaded($request);

			foreach ($request->file("files") as $files) {
				$files->storeAs(
					$this->FileHandler->specificUploadPath($files),
					$this->FileHandler->randomFileName($files)
				);
			}

			if ($files->isValid()) {
				return back()->with("success", "your files successfully uploaded");
			}
		} catch (Exception $exception) {
			return back()->withError($exception->getMessage());
		}
	}

	public function download(string $pathToDownload)
	{
		try {
			$this->ZipFile->zipFiles($pathToDownload);
			$this->FileHandler->checkDirExists("download", "downloaded");
			return response()->download($pathToDownload);
		} catch (Exception $exception) {
			return back()->withError("Something went wrong");
		}
	}

	public function delete(string $path)
	{
		try {
			$this->FileHandler->checkDirExists($path);
			Storage::deleteDirectory($path);
			return back()->with("success", "file successfully deleted");
		} catch (Exception $exception) {
			return back()->withError($exception->getMessage());
		}
	}
}
