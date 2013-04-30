<?php

use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration {
	
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		    Schema::create('users', function($table) {
			    $table->increments('id');
			    $table->string('email', 320);
			    $table->string('password', 64);
			    $table->string('name', 20);
			    $table->string('last_name', 20);
			    $table->integer('role');
			    $table->boolean('active');
			    $table->string('activation_key', 64);
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
		Schema::drop('users');
	}

}