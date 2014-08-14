<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTicketSupportsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('ticket_supports', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('kd_marketing');
			$table->text('keterangan');
			$table->string('lampiran');
			$table->string('jenis_ticket');
			$table->string('status_ticket');
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
		Schema::drop('ticket_supports');
	}

}
