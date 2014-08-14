<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTanpafakturlengkapsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tanpafakturlengkaps', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('nama_pembeli');
			$table->string('no_faktur');
			$table->string('penjualan');
			$table->string('ppn');
			
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
		Schema::drop('tanpafakturlengkaps');
	}

}
