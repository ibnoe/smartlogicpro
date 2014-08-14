<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePenilaiansTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('penilaians', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string(' kd_absen');
			$table->string('kd_penilaian');
			$table->string ('kinerja');
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
		Schema::drop('penilaians');
	}

}
