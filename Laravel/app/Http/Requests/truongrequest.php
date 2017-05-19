<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class truongrequest extends Request {

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
	 * @return array
	 */
	public function rules()
	{
		return [
			'txttentruong' => 'required|unique:truongs,tentruong',
		];
	}
	public function messages () {
		return [
			'txttentruong.required' => 'Vui lòng nhập tên trường',
			'txttentruong.unique' => 'Tên trường thi đã tồn tại',
		];
	}

}
