<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{

		// disable foreign key checks
		DB::statement('SET FOREIGN_KEY_CHECKS=0;');

		Eloquent::unguard();
		//$this->call('SentrySeeder');
		$this->call('SentrySeeder');

		// enable foreign key checks
		DB::statement('SET FOREIGN_KEY_CHECKS=1;');
	}

}