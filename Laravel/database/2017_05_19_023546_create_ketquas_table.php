<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKetquasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('ketquas', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('mathisinh_id')->unsigned();
			$table->foreign('mathisinh_id')->references('mathisinh')->on('thisinhs')->onDelete('cascade');
			$table->integer('makythi_id')->unsigned();
			$table->foreign('makythi_id')->references('makythi')->on('kythis')->onDelete('cascade');
			$table->string('bainop');
			$table->integer('diemthi')->unsigned();
			$table->date('ngaynop');
			$table->date('ngaycham');
			$table->text('ghichu');
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
		Schema::drop('ketquas');
	}

}
