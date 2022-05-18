<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDoctorsSpecialityMapTable extends Migration {

	public function up()
	{
		Schema::create('doctors_speciality_map', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('doctor_id')->unsigned();
			$table->integer('speciality_id')->unsigned();
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('doctors_speciality_map');
	}
}