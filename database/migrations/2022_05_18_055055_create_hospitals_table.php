<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateHospitalsTable extends Migration {

	public function up()
	{
		Schema::create('hospitals', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('category_id')->nullable();
			$table->integer('subcategory_id')->nullable();
			$table->string('name')->nullable();
			$table->string('address')->nullable();
			$table->string('phone')->nullable();
			$table->longText('description')->nullable();
			$table->string('latitude')->nullable();
			$table->string('longitude')->nullable();
			$table->string('image')->nullable();
			$table->enum('status', array('Active', 'Inactive'))->nullable();
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('hospitals');
	}
}