<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class kythi extends Model {
	protected $table = 'kythis';

	protected $fillable = ['tenkythi','mabangthi','thoigianbatdau','thoigianketthuc','trangthai'];

	public $timestamps = false;
	//

}
