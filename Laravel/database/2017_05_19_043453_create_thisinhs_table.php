<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateThisinhsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('thisinhs', function(Blueprint $table)
		{
			$table->integer('mathisinh')->unique();
			$table->string('tendangnhap')->unsigned();
			$table->foreign('tendangnhap')->references('tendangnhap')->on('nguoidungs')->onDelete('cascade');
			$table->increments('matruong_id')->unsigned();
			$table->foreign('matruong_id')->references('matruong')->on('truongs')->onDelete('cascade');
			$table->string('mssv');
			$table->string('lop');
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
		Schema::drop('thisinhs');
	}

}
