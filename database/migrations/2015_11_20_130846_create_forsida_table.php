<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateForsidaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('forsidas', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('frettdagsins');
			$table->string('frettmynd');
			$table->timestamps();
		});
			//Schema::insert(insert into forsidas ('id', 'frettdagsins', 'frettmynd', 'created_at') VALUES (1, 'Engin Frétt Í Dag', 'yoyo', 'now()'));

	Schema::table('forsidas')->insert(
			['frettdagsins' => 'Ekki neitt í dag']
		);
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('forsidas');
	}

}
