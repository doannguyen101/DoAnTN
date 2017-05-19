<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class file extends Model {
	protected $table = 'files';

	protected $fillable = ['maloaifile_id', 'tenfile', 'trangthai'];

	public $timestamps = false;
	//

}
