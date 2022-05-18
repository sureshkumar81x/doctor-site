<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDiagnosticCenterTable extends Migration {

	public function up()
	{
		Schema::create('diagnostic_center', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('category_id')->unsigned()->nullable();
			$table->integer('subcategory_id')->nullable();
			$table->string('name')->nullable();
			$table->string('phone')->nullable();
			$table->string('address')->nullable();
			$table->longText('description')->nullable();
			$table->string('latitude')->nullable();
			$table->string('longitude')->nullable();
			$table->string('image')->nullable();
			$table->enum('status', array('Active', 'Inactive'))->default('Active');
			$table->float('avg_rating', 8,2)->nullable()->default('0.00');
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('diagnostic_center');
	}
}