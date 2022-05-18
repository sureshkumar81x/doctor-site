<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDiagnosticReviewsTable extends Migration {

	public function up()
	{
		Schema::create('diagnostic_reviews', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('diagnostic_id')->unsigned();
			$table->string('name')->nullable();
			$table->longText('comments')->nullable();
			$table->float('rating', 8,2)->default('0.00');
			$table->enum('status', array('Active', 'Inactive'))->default('Active');
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('diagnostic_reviews');
	}
}