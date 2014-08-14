<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePtkpsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('ptkps', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('kd_statuskawin');
			$table->integer('jumlah_ptkp');
			$table->string ('status_kawin');
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
		Schema::drop('ptkps');
	}

}
