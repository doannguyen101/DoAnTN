<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBaivietsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('baiviets', function(Blueprint $table)
		{
			$table->increments('mabaiviet');
			$table->integer('maloaibaiviet_id')->unsigned();
			$table->foreign('maloaibaiviet_id')->references('maloaibaiviet')->on('loaibaiviets')->onDelete('cascade');	
			$table->string('tenbaiviet');
			$table->longtext('noidung');
			$table->date('ngaydang');
			$table->date('ngaysoan');
			$table->string('loaibaiviet');
			$table->string('nguoidang_id');
			$table->foreign('nguoidang_id')->references('tendangnhap')->on('nguoidungs')->onDelete('cascade');
			$table->integer('mabangthi_id')->unsigned();
			$table->foreign('mabangthi_id')->references('mabangthi')->on('bangthis')->onDelete('cascade');
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
		Schema::drop('baiviets');
	}

}
