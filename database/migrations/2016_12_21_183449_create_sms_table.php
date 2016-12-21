<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSmsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('sms', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('_id')->nullable();
			$table->text('body')->nullable();
			$table->integer('person')->nullable();
			$table->boolean('read')->nullable()->default(1);
			$table->boolean('seen')->nullable()->default(1);
			$table->dateTime('date_received')->nullable();
			$table->dateTime('date_sent')->nullable();
			$table->integer('thread_id')->nullable()->default(0);
			$table->string('status', 50)->nullable();
			$table->string('address', 50)->nullable();
			$table->string('type', 50)->nullable();
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
		Schema::drop('sms');
	}

}
