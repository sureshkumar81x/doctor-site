<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSubcategoriesTable extends Migration {

	public function up()
	{
		Schema::create('subcategories', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('category_id')->unsigned();
			$table->string('name')->nullable();
			$table->string('image')->nullable();
			$table->enum('status', array('Active', 'Inactive'))->default('Active');
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('subcategories');
	}
}