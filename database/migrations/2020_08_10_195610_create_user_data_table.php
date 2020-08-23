<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_data', function (Blueprint $table) {
            $table->id();
            $table->string('photo');
            $table->string('name');
            $table->string('identification');
            $table->string('employer');
            $table->string('testing_standard');
            $table->string('job_knowledge');
            $table->string('test_ref');
            $table->string('lr_control');
            $table->json('wps_data');

            $table->string('document_number_1');
            $table->string('document_number_2');

            $table->boolean('visual_examination');
            $table->boolean('transverse_bends');
            $table->boolean('specimen_macro');
            $table->boolean('transverse_side');
            $table->boolean('ultrasonic_examination');

            $table->string('withenessed_name');
            $table->string('withenessed_position');
            $table->string('withenessed_date');

            $table->string('behaulf_name');
            $table->string('behaulf_position');
            $table->string('behaulf_date');

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
        Schema::dropIfExists('user_data');
    }
}
