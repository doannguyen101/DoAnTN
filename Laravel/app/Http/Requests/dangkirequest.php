<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class dangkirequest extends Request {

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
			'name' => 'required|unique:users,name',
			'passwordtxt' => 'required|Minlength',
			'emailtxt' => 'required',

		];
	}
	public function messages () {
		return [
			'name.required' => 'Vui lòng nhập tên tài khoản',
			'name.unique' => 'Tên tài khoản đã tồn tại',
			'passwordtxt.required' => 'Vui lòng nhập mật khẩu',
			'passwordtxt.minlength' => 'Mật khẩu ít nhất 6 kí tự',
			'emailtxt.required' => 'Vui lòng nhập email',
		];
	}

}
