<?php

use Illuminate\Database\Migrations\Migration;

class CreateInterestsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
		Schema::create('interests', function($table)
		{
			$table->increments('id');
			$table->string('interest_name');
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
		Schema::drop('interests');
	}

}