<?php

use Illuminate\Database\Migrations\Migration;

class StartOfDb extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
		Schema::create('chums', function($table){
			$table->increments('id');
			$table->integer('user_id');
			$table->integer('chum_id');
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
		Schema::drop('chums');
	}

}
