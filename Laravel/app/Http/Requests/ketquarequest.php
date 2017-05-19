<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class ketquarequest extends Request {

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
			'cbbtenthisinh' => 'required:ketquas,mathisinh_id',
			'txtdiemthi' => 'required:ketquas,diemthi',
		];
	}
	public function messages () {
		return [
			'cbbtenthisinh.required' => 'Vui lòng nhập tên thí sinh',
			'txtdiemthi.required' => 'Vui lòng nhập điểm',
		];
	}

}
