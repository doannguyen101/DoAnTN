<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class bangthirequest extends Request {

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
			'txttenbang' => 'required|unique:bangthis,tenbangthi',

		];
	}
	public function messages () {
		return [
			'txttenbang.required' => 'Vui lòng nhập tên bảng thi',
			'txttenbang.unique' => 'Tên bảng thi đã tồn tại',
		];
	}

}
