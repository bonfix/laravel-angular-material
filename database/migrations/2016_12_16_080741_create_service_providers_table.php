<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateServiceProvidersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('service_providers', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('name', 50)->nullable();
			$table->string('contract_no', 50)->nullable();
			$table->string('service', 50)->nullable();
			$table->string('course', 50)->nullable();
			$table->integer('capacity')->nullable()->default(0);
			$table->string('p_name', 50)->nullable();
			$table->string('p_address', 50)->nullable();
			$table->string('p_location', 50)->nullable();
			$table->string('phone', 50)->nullable();
			$table->string('email', 50)->nullable();
			$table->string('county', 50)->nullable();
			$table->string('subc', 50)->nullable();
			$table->string('ward', 50)->nullable();
			$table->string('village', 50)->nullable();
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
		Schema::drop('service_providers');
	}

}
