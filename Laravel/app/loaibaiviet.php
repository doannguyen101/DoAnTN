<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class loaibaiviet extends Model {
	protected $table = 'loaibaiviets';

	protected $fillable = ['tenloaibaiviet','trangthai'];

	public $timestamps = false;
	//

}
