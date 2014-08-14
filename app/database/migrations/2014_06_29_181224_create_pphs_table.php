<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePphsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('pphs', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string(' kd_pkp');
			$table->string('kd_lembur');
			$table->string('kd_pph');
			$table->integer('pph_thr');
			$table->integer ('pph_gaji_sebulan');
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
		Schema::drop('pphs');
	}

}
