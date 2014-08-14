<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateLembursTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('lemburs', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string(' kd_tunjangan');
			$table->string('kd_lembur');
			$table->integer('jml_lembur_biasa');
			$table->integer('jml_lembur_libur');
			$table->integer('tarif_biasa');
			$table->integer('tarif_libur');
			$table->integer ('total');
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
		Schema::drop('lemburs');
	}

}
