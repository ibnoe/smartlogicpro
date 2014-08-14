<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateJabatansTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('jabatans', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('kd_jab');
			$table->string('nama_jabatan');
			$table->integer('tun_kes');
			$table->integer('tun_mkn');
			$table->integer('tun_transport');
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
		Schema::drop('jabatans');
	}

}
