<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		//call the class and run the seeds
		$this->call('StudentAppSeeder');
		$this->command->info('Student app seeds finished');
	}

}
