<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNguoidungsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('nguoidungs', function(Blueprint $table)
		{
			$table->string('tendangnhap')->unique();
			$table->string('matkhau', 20);
			$table->string('hoten');
			$table->string('gioitinh');
			$table->date('ngaysinh');
			$table->string('sodienthoai');
			$table->string('email');
			$table->string('hinhdaidien');
			$table->integer('quyen_id')->unsigned();
			$table->foreign('quyen_id')->references('maquyen')->on('quyens')->onDelete('cascade');
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
		Schema::drop('nguoidungs');
	}

}
