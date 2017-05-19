<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class quyen extends Model {
	protected $table = 'quyens';

	protected $fillable = ['tenquyen','trangthai'];

	public $timestamps = false;
	//

}
