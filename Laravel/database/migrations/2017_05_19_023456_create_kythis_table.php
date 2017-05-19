<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKythisTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('kythis', function(Blueprint $table)
		{
			$table->increments('makythi');
			$table->string('tenkythi');
			$table->integer('mabangthi')->unsigned();
			$table->foreign('mabangthi')->references('mabangthi')->on('bangthis')->onDelete('cascade');
			$table->date('thoigianbatdau');
			$table->date('thoigianketthuc');
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
		Schema::drop('kythis');
	}

}
