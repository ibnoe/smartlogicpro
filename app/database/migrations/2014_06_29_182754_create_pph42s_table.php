<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePph42sTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('pph42s', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string(' kd_perusahaan');
			$table->string('id_pph42');
			$table->integer('jumlah_omset');
			$table->string('bulan');
			$table->integer('tahun');
			$table->date('tanggal');
			$table->string ('nama_penyetor');
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
		Schema::drop('pph42s');
	}

}
