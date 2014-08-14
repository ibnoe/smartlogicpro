<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePerusahaansTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('perusahaans', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string(' kd_perusahaan');
			$table->string('nama_perusahaan');
			$table->string('alamat');
			$table->string('kota');
			$table->string('propinsi');
			$table->string('kode_pos');
			$table->string('handphone');
			$table->string('telephone');
			$table->string('fax');
			$table->string ('email');
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
		Schema::drop('perusahaans');
	}

}
