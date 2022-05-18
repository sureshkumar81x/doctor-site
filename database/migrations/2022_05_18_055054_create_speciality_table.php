<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSpecialityTable extends Migration {

	public function up()
	{
		Schema::create('speciality', function(Blueprint $table) {
			$table->increments('id');
			$table->string('name', 200)->nullable();
			$table->enum('status', array('Active', 'Inactive'))->nullable();
			$table->timestamps();
			$table->softDeletes();
		});
	}

	public function down()
	{
		Schema::drop('speciality');
	}
}