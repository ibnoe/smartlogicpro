<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateGajisTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('gajis', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string(' kd_tunjangan');
			$table->string('kd_lembur');
			$table->string('kd_pph');
			$table->string('kd_gaji');
			$table->date('tanggal');
			$table->integer('tun_jab');
			$table->integer('ttl_tunjangan');
			$table->integer('pph_thr');
			$table->integer('pph_gaji_sebulan');
			$table->integer('jml_potongan');
			$table->integer('ttl_lembur');
			$table->integer('gaji_pokok');
			$table->integer('gaji_bruto');
			$table->integer('gaji_bersih');
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
		Schema::drop('gajis');
	}

}
