<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDoctorsReviewTable extends Migration {

	public function up()
	{
		Schema::create('doctors_review', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('doctor_id')->unsigned();
			$table->string('name', 200)->nullable();
			$table->longText('comments')->nullable();
			$table->float('rating', 8,2)->default('0.00');
			$table->enum('status', array('Active', 'Inactive'))->nullable();
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('doctors_review');
	}
}