<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLoaibaivietsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('loaibaiviets', function(Blueprint $table)
		{
			$table->increments('maloaibaiviet');
			$table->string('tenloaibaiviet');
			$table->boolean('trangthai');
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('loaibaiviets');
	}

}
