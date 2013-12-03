<?php

use Illuminate\Database\Migrations\Migration;

class AddInterestUser extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
		DB::table('interest_user')->insert(array(
		'user_id'=>'2',
		'interest_id'=>'1',
		'created_at'=>date('Y-m-d H:m:s'),
		'updated_at'=>date('Y-m-d H:m:s')
		));
		
		DB::table('interest_user')->insert(array(
		'user_id'=>'2',
		'interest_id'=>'2',
		'created_at'=>date('Y-m-d H:m:s'),
		'updated_at'=>date('Y-m-d H:m:s')
		));
		
		DB::table('interest_user')->insert(array(
		'user_id'=>'2',
		'interest_id'=>'3',
		'created_at'=>date('Y-m-d H:m:s'),
		'updated_at'=>date('Y-m-d H:m:s')
		));
		
		DB::table('interest_user')->insert(array(
		'user_id'=>'2',
		'interest_id'=>'4',
		'created_at'=>date('Y-m-d H:m:s'),
		'updated_at'=>date('Y-m-d H:m:s')
		));
		
		DB::table('interest_user')->insert(array(
		'user_id'=>'2',
		'interest_id'=>'5',
		'created_at'=>date('Y-m-d H:m:s'),
		'updated_at'=>date('Y-m-d H:m:s')
		));
		
		DB::table('interest_user')->insert(array(
		'user_id'=>'2',
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
		DB::table('interest_user')->where('user_id', '=', '2')->delete();
	}

}