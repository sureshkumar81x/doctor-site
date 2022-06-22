<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddSlugToAllTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('doctors', function (Blueprint $table) {
            $table->string('slug')->after('avg_rating')->nullable();
        });
        Schema::table('hospitals', function (Blueprint $table) {
            $table->string('slug')->after('avg_rating')->nullable();
        });
        Schema::table('diagnostic_center', function (Blueprint $table) {
            $table->string('slug')->after('avg_rating')->nullable();
        });
        Schema::table('categories', function (Blueprint $table) {
            $table->string('slug')->after('name')->nullable();
        });
        Schema::table('subcategories', function (Blueprint $table) {
            $table->string('slug')->after('name')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('doctors', function (Blueprint $table) {
            $table->dropColumn('slug');
        });
        Schema::table('hospitals', function (Blueprint $table) {
            $table->dropColumn('slug');
        });
        Schema::table('diagnostic_center', function (Blueprint $table) {
            $table->dropColumn('slug');
        });
        Schema::table('categories', function (Blueprint $table) {
            $table->dropColumn('slug');
        });
        Schema::table('subcategories', function (Blueprint $table) {
            $table->dropColumn('slug');
        });
    }
}
