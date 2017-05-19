<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class truong extends Model {
	protected $table = 'truongs';

	protected $fillable = ['tentruong','trangthai'];

	public $timestamps = false;
	//

}
