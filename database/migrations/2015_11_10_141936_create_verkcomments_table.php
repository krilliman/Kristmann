<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVerkcommentsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('verkcomments', function(Blueprint $table)
		{
			$table->increments('id');
			$table->text('post_name');
			$table->text('comment');
			$table->text('current_user');
			$table->text('current_userPhoto');
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
		Schema::drop('verkcomments');
	}

}
