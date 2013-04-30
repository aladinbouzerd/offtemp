<?php

use Illuminate\Database\Migrations\Migration;

class CreatePasswordsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('passwords', function($t)
		{
			$t->string('id')->unique();
			$t->text('user_id');
			$t->string('label', 40);
			$t->string('password', 64);
			$t->string('duration');
			$t->boolean('active');
			$t->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('passwords')
	}

}