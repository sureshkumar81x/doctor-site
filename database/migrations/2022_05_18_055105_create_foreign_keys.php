<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Eloquent\Model;

class CreateForeignKeys extends Migration {

	public function up()
	{
		Schema::table('doctors_review', function(Blueprint $table) {
			$table->foreign('doctor_id')->references('id')->on('doctors')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('diagnostic_reviews', function(Blueprint $table) {
			$table->foreign('diagnostic_id')->references('id')->on('diagnostic_center')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('diagnostic_gallery', function(Blueprint $table) {
			$table->foreign('diagnostic_id')->references('id')->on('diagnostic_center')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('subcategories', function(Blueprint $table) {
			$table->foreign('category_id')->references('id')->on('categories')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('doctors_speciality_map', function(Blueprint $table) {
			$table->foreign('doctor_id')->references('id')->on('doctors')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('doctors_speciality_map', function(Blueprint $table) {
			$table->foreign('speciality_id')->references('id')->on('speciality')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
	}

	public function down()
	{
		Schema::table('doctors_review', function(Blueprint $table) {
			$table->dropForeign('doctors_review_doctor_id_foreign');
		});
		Schema::table('diagnostic_reviews', function(Blueprint $table) {
			$table->dropForeign('diagnostic_reviews_diagnostic_id_foreign');
		});
		Schema::table('diagnostic_gallery', function(Blueprint $table) {
			$table->dropForeign('diagnostic_gallery_diagnostic_id_foreign');
		});
		Schema::table('subcategories', function(Blueprint $table) {
			$table->dropForeign('subcategories_category_id_foreign');
		});
		Schema::table('doctors_speciality_map', function(Blueprint $table) {
			$table->dropForeign('doctors_speciality_map_doctor_id_foreign');
		});
		Schema::table('doctors_speciality_map', function(Blueprint $table) {
			$table->dropForeign('doctors_speciality_map_speciality_id_foreign');
		});
	}
}