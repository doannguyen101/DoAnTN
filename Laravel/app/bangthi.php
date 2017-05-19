<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class bangthi extends Model {
	protected $table = 'bangthis';

	protected $fillable = ['tenbangthi', 'trangthai'];

	public $timestamps = false;
	//

}
