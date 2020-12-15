<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReceiversTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('receivers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Name');
            $table->string('Age');
            $table->string('Address');
            $table->string('Mobile');
            $table->string('Email');
            $table->string('BloodGroup');
            $table->string('BloodPressure');
            $table->string('Covidpositive');
            $table->string('RecoveryDate');
            $table->string('Certified');



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
        Schema::dropIfExists('receivers');
    }
}
