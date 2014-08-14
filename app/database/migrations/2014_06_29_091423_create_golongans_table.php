<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateGolongansTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('golongans', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('kd_gol');
			$table->string('gol_pok');
			$table->integer ('tun_jab');
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
		Schema::drop('golongans');
	}

}
