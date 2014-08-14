<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePjlnEksporTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('pjln_ekspor', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('nama_pembeli');
			$table->string('no_ekspor');
			$table->string('penjualan');
			
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
		Schema::drop('pjln_ekspor');
	}

}
