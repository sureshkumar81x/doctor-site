<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddContentsColumnToDoctorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('doctors', function (Blueprint $table) {
            $table->longText('contents')->after('description')->nullable();
            $table->string('website')->after('contents')->nullable();
        });
        Schema::table('diagnostic_center', function (Blueprint $table) {
            $table->longText('contents')->after('description')->nullable();
            $table->string('website')->after('contents')->nullable();
            $table->longText('working_hours')->after('website')->nullable();
        });
        Schema::table('hospitals', function (Blueprint $table) {
            $table->longText('contents')->after('description')->nullable();
            $table->string('website')->after('contents')->nullable();
            $table->longText('working_hours')->after('website')->nullable();
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
            $table->dropColumn(['contents','website']);
        });
        Schema::table('diagnostic_center', function (Blueprint $table) {
            $table->dropColumn(['contents','website','working_hours']);
        });
        Schema::table('hospitals', function (Blueprint $table) {
            $table->dropColumn(['contents','website','working_hours']);
        });
    }
}
