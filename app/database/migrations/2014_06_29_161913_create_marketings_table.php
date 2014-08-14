<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMarketingsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('marketing', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string(' kd_marketing');
			$table->string('nama_depan');
			$table->string('nama_belakang');
			$table->string('username');
			$table->string('password');
			$table->string('email');
			$table->string('no_hp');
			$table->string('alamat');
			$table->string('kota');
			$table->string('propinsi');
			$table->string ('kode_pos');
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
		Schema::drop('marketings');
	}

}
