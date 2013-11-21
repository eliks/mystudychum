<?php

use Illuminate\Database\Migrations\Migration;

class AddUsers extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		DB::table('users')->insert(array(
		'first_name'=>'elisha',
		'last_name'=>'senoo',
		'password_hash'=>'james111',
		'email'=>'eli@mest.com',
		'gender'=>'MALE',
		'created_at'=>date('Y-m-d H:m:s'),
		'updated_at'=>date('Y-m-d H:m:s')
		));
		
		DB::table('users')->insert(array(
		'first_name'=>'elisha3',
		'last_name'=>'senoo1',
		'password_hash'=>'james222',
		'email'=>'senoo@gmail.com',
		'gender'=>'MALE',
		'created_at'=>date('Y-m-d H:m:s'),
		'updated_at'=>date('Y-m-d H:m:s')
		));
		
		DB::table('users')->insert(array(
		'first_name'=>'elisha2',
		'last_name'=>'senoo2',
		'password_hash'=>'james333',
		'email'=>'elioo@gmail.com',
		'gender'=>'MALE',
		'created_at'=>date('Y-m-d H:m:s'),
		'updated_at'=>date('Y-m-d H:m:s')
		));
		
		DB::table('users')->insert(array(
		'first_name'=>'elisha1',
		'last_name'=>'senoo3',
		'password_hash'=>'james111',
		'email'=>'elisha.senoo@meltwater.com',
		'gender'=>'MALE',
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
		DB::table('users')->where('first_name', '=', 'elisha')->delete();
		DB::table('users')->where('first_name', '=', 'elisha3')->delete();
		DB::table('users')->where('first_name', '=', 'elisha2')->delete();
		DB::table('users')->where('first_name', '=', 'elisha1')->delete();
	}

}