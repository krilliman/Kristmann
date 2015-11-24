<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Forsida;

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	 public function run()
     {
         $this->call('ForsidaTableSeeder');

         $this->command->info('Forsida table seeded!');
     }

}
class ForsidaTableSeeder extends Seeder {

    public function run()
    {
        //DB::table('forsidas')->delete();

        Forsida::create(['frettdagsins' => 'ekkert i dag']);
    }

}
