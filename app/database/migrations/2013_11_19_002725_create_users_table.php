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
		//
		Schema::create('users', function($table)
		{
			$table->increments('id');
			$table->string('first_name');
			$table->string('last_name');
			$table->string('other_names');
			$table->date('DOB');
			$table->string('education');
			$table->string('email');
			$table->string('image_url');
			$table->string('location');
			$table->string('interests');
			$table->enum('gender', array('MALE', 'FEMALE'));
			$table->integer('country_id');
			$table->string('password');
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
		//
		Schema::drop('users');
	}

}
