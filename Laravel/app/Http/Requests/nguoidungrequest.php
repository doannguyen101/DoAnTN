<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class nguoidungrequest extends Request {

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
			'txttendangnhap' => 'required|unique:nguoidungs,tendangnhap',

			];
			
	}
	public function messages () {
		return [
			'txttendangnhap.required' => 'Vui lòng nhập tên đăng nhập',
			'txttendangnhap.unique' => 'Tên đăng nhập đã tồn tại',
		];
	}

}
