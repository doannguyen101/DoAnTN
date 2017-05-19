<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class baiviet extends Model {
	protected $table = 'baiviets';

	protected $fillable = ['maloaibaiviet_id','tenbaiviet','noidung','ngaydang','ngaysoan','loaibaiviet','nguoidang_id','mabangthi_id','trangthai'];

	public $timestamps = false;
	//

}
