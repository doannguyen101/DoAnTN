<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class ketqua extends Model {
	protected $table = 'ketquas';

	protected $fillable = ['mathisinh_id','makythi_id','bainop','diemthi','ngaynop','ngaycham','ghichu','trangthai'];

	public $timestamps = false;
	//

}
