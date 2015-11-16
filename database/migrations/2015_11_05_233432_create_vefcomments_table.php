<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVefcommentsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('vefcomments', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('post_name');
			$table->string('comment');
			$table->string('current_user');
			$table->string('current_userPhoto');
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
		Schema::drop('vefcomments');
	}

}
