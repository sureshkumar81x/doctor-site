<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDiagnosticGalleryTable extends Migration {

	public function up()
	{
		Schema::create('diagnostic_gallery', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('diagnostic_id')->unsigned();
			$table->string('image')->nullable();
			$table->enum('status', array('Active', 'Inactive'))->default('Active');
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('diagnostic_gallery');
	}
}