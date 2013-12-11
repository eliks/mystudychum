<?php

use Illuminate\Database\Migrations\Migration;

class CreateInterestUserTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
		Schema::create('interest_user', function($table)
		{
			$table->increments('id');
			$table->integer('user_id');
			$table->integer('interest_id');
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
		Schema::drop('interest_user');
	}

}