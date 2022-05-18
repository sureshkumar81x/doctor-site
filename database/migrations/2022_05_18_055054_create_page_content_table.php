<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePageContentTable extends Migration {

	public function up()
	{
		Schema::create('page_content', function(Blueprint $table) {
			$table->increments('id');
			$table->string('key')->nullable();
			$table->longText('description')->nullable();
			$table->longText('contents')->nullable();
			$table->string('image', 200)->nullable();
			$table->string('page')->nullable();
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('page_content');
	}
}