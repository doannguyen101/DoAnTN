<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class nguoidung extends Model {
	protected $table = 'nguoidungs';

	protected $fillable = ['tendangnhap','matkhau','hoten','gioitinh','ngaysinh','sodienthoai','email','hinhdaidien','quyen_id','mathisinh','mssv','matruong_id','lop','trangthai'];

	public $timestamps = false;
	//

}
