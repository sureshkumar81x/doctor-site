<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHospitalReviewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hospital_reviews', function (Blueprint $table) {
            $table->increments('id');
			$table->integer('hospital_id')->unsigned();
			$table->string('name')->nullable();
			$table->longText('comments')->nullable();
			$table->float('rating', 8,2)->default('0.00');
			$table->enum('status', array('Active', 'Inactive'))->default('Active');
			$table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hospital_reviews');
    }
}
