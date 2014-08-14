<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTunjangansTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tunjangans', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string(' kd_absen');
			$table->string('kd_tunjangan');
			$table->integer('ttl_tun_kes');
			$table->integer('ttl_tun_makan');
			$table->integer('ttl_tun_transport');
			$table->integer ('ttl_tun');
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
		Schema::drop('tunjangans');
	}

}
