<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDoctorsTable extends Migration {

	public function up()
	{
		Schema::create('doctors', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('category_id')->unsigned();
			$table->integer('subcategory_id')->nullable();
			$table->string('name')->nullable();
			$table->string('phone', 15)->nullable();
			$table->string('address')->nullable();
			$table->string('latitude')->nullable();
			$table->string('longitude', 200)->nullable();
			$table->longText('description')->nullable();
			$table->string('profile_image')->nullable();
			$table->string('working_hours', 250)->nullable();
			$table->float('avg_rating', 8,2)->nullable()->default('0.00');
			$table->enum('status', array('Active', 'Inactive'))->nullable();
			$table->timestamps();
			$table->softDeletes();
		});
	}

	public function down()
	{
		Schema::drop('doctors');
	}
}