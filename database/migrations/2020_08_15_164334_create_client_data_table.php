<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('client_data', function (Blueprint $table) {
            $table->id();
            $table->string('photo')->nullable();
            $table->string('name')->nullable();
            $table->string('identification')->nullable();
            $table->string('employer')->nullable();
            $table->string('testing_standard')->nullable();
            $table->string('job_knowledge')->nullable();
            $table->string('test_ref')->nullable();
            $table->string('lr_control')->nullable();
            $table->json('wps_data')->nullable();

            $table->json('transfer_mode')->nullable();
            $table->json('shielding_gas')->nullable();
            $table->json('type_polarity')->nullable();
            $table->json('welding_position')->nullable();
            $table->json('welding_details')->nullable();

            $table->string('document_number_1')->nullable();
            $table->string('document_number_2')->nullable();

            $table->boolean('visual_examination')->nullable();
            $table->boolean('transverse_bends')->nullable();
            $table->boolean('specimen_macro')->nullable();
            $table->boolean('transverse_side')->nullable();
            $table->boolean('ultrasonic_examination')->nullable();

            $table->string('withenessed_name')->nullable();
            $table->string('withenessed_position')->nullable();
            $table->string('withenessed_date')->nullable();

            $table->string('behaulf_name')->nullable();
            $table->string('behaulf_position')->nullable();
            $table->string('behaulf_date')->nullable();

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
        Schema::dropIfExists('client_data');
    }
}
