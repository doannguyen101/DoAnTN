<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class loaifile extends Model {
	protected $table = 'loaifiles';

	protected $fillable = ['tenloaifile','trangthai'];

	public $timestamps = false;
	//

}
