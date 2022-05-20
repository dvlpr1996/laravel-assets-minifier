<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FileUploadRequest extends FormRequest
{
	protected $stopOnFirstFailure = true;
	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function authorize()
	{
		return true;
	}

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array<string, mixed>
	 */
	public function rules()
	{
		return [
			"files" => ["required"],
			"files.*" => [
				"file", "min:1", "max:2000", "filled",
				"mimes:png,jpeg,css,html,js"
			]
		];
	}
}
