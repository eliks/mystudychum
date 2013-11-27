<?php

use Illuminate\Database\Migrations\Migration;

class AddInterests extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
		DB::table('interests')->insert(array(
		'interest_name'=>'Accounting',
		'created_at'=>date('Y-m-d H:m:s'),
		'updated_at'=>date('Y-m-d H:m:s')
		));
		
		DB::table('interests')->insert(array(
		'interest_name'=>'Politics',
		'created_at'=>date('Y-m-d H:m:s'),
		'updated_at'=>date('Y-m-d H:m:s')
		));
		
		DB::table('interests')->insert(array(
		'interest_name'=>'Geography',
		'created_at'=>date('Y-m-d H:m:s'),
		'updated_at'=>date('Y-m-d H:m:s')
		));
		
		DB::table('interests')->insert(array(
		'interest_name'=>'Economics',
		'created_at'=>date('Y-m-d H:m:s'),
		'updated_at'=>date('Y-m-d H:m:s')
		));
		
		DB::table('interests')->insert(array(
		'interest_name'=>'Philosophy',
		'created_at'=>date('Y-m-d H:m:s'),
		'updated_at'=>date('Y-m-d H:m:s')
		));
		
		DB::table('interests')->insert(array(
		'interest_name'=>'Mathematics',
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
		DB::table('interests')->where('interest_name', '=', 'Accounting')->delete();
		DB::table('interests')->where('interest_name', '=', 'Politics')->delete();
		DB::table('interests')->where('interest_name', '=', 'Geography')->delete();
		DB::table('interests')->where('interest_name', '=', 'Economics')->delete();
		DB::table('interests')->where('interest_name', '=', 'Philosophy')->delete();
		DB::table('interests')->where('interest_name', '=', 'Mathematics')->delete();
	}

}