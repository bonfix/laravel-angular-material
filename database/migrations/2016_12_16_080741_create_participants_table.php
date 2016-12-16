<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateParticipantsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('participants', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('fn', 50)->nullable();
			$table->string('ln', 50)->nullable();
			$table->string('sn', 50)->nullable();
			$table->string('phone', 50)->nullable();
			$table->string('email', 50)->nullable();
			$table->string('county', 50)->nullable();
			$table->string('subc', 50)->nullable();
			$table->string('ward', 50)->nullable();
			$table->string('village', 50)->nullable();
			$table->string('dob', 50)->nullable();
			$table->string('b_name', 50)->nullable();
			$table->string('b_branch', 50)->nullable();
			$table->string('b_ac_name', 50)->nullable();
			$table->string('b_ac_no', 50)->nullable();
			$table->timestamps();
			$table->softDeletes();
			$table->integer('created_by')->nullable();
			$table->integer('updated_by')->nullable();
			$table->integer('deleted_by')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('participants');
	}

}
