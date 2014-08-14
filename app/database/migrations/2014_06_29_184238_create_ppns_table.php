<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePpnsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('ppns', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string(' kd_perusahaan');
			$table->string('ppn_pembelian');
			$table->string('ppn_penjualan');
			$table->string('bulan');
			$table->integer('tahun');
			$table->string('biaya_membangun_sendiri');
			$table->string('penomoran_faktur');
			$table->string ('penjualan_tanpa_faktur');
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
		Schema::drop('ppns');
	}

}
