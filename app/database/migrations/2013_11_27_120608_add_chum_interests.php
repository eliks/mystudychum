<?php

use Illuminate\Database\Migrations\Migration;

class AddChumInterests extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//$table->integer('chum_id');
			//$table->integer('interest_id');
		DB::table('chum_interests')->insert(array(
		'chum_id'=>'2',
		'interest_id'=>'1',
		'created_at'=>date('Y-m-d H:m:s'),
		'updated_at'=>date('Y-m-d H:m:s')
		));
		
		DB::table('chum_interests')->insert(array(
		'chum_id'=>'2',
		'interest_id'=>'2',
		'created_at'=>date('Y-m-d H:m:s'),
		'updated_at'=>date('Y-m-d H:m:s')
		));
		
		DB::table('chum_interests')->insert(array(
		'chum_id'=>'2',
		'interest_id'=>'3',
		'created_at'=>date('Y-m-d H:m:s'),
		'updated_at'=>date('Y-m-d H:m:s')
		));
		
		DB::table('chum_interests')->insert(array(
		'chum_id'=>'2',
		'interest_id'=>'4',
		'created_at'=>date('Y-m-d H:m:s'),
		'updated_at'=>date('Y-m-d H:m:s')
		));
		
		DB::table('chum_interests')->insert(array(
		'chum_id'=>'2',
		'interest_id'=>'5',
		'created_at'=>date('Y-m-d H:m:s'),
		'updated_at'=>date('Y-m-d H:m:s')
		));
		
		DB::table('chum_interests')->insert(array(
		'chum_id'=>'2',
		'interest_id'=>'6',
		'created_at'=>date('Y-m-d H:m:s'),
		'updated_at'=>date('Y-m-d H:m:s')
		));
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		//
		DB::table('chum_interests')->where('chum_id', '=', '2')->delete();
	}

}