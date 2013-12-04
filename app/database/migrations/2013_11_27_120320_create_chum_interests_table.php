<?php

use Illuminate\Database\Migrations\Migration;

class CreateChumInterestsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
		Schema::create('chum_interests', function($table)
		{
			$table->increments('id');
			$table->integer('chum_id');
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
		Schema::drop('chum_interests');
	}

}