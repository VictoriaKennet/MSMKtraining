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
            $table->timestamps();
            $table->string('photo', 250);
            $table->string('name', 250);
            $table->string('identification', 250);
            $table->string('employer', 250);
            $table->string('testing_standard', 250);
            $table->string('job_knowledge', 250);
            $table->string('test_ref_no', 250);
            $table->boolean('b1');
            $table->boolean('b2');
            $table->boolean('b3');
            $table->boolean('b4');
            $table->boolean('b5');
            $table->string('test_withessed_name', 250);
            $table->string('test_withessed_position', 250);
            $table->date('date');
            $table->foreignId('shielding_gas_id');
            $table->foreignId('type_polarity_id');
            $table->foreignId('welding_details_id');
            $table->foreignId('transfer_mode_id');
            $table->foreignId('wps_reference_id');
            $table->foreignId('welding_position_id');
            
        });

        Schema::table('user_data', function (Blueprint $table) {
            $table->index('shielding_gas_id');
            $table->foreign('shielding_gas_id')->references('id')->on('shielding_gas');
        });

        Schema::table('user_data', function (Blueprint $table) {
            $table->index('type_polarity_id');
            $table->foreign('type_polarity_id')->references('id')->on('type_polarity');
        });

        Schema::table('user_data', function (Blueprint $table) {
            $table->index('welding_details_id');
            $table->foreign('welding_details_id')->references('id')->on('welding_details');
        });

        Schema::table('user_data', function (Blueprint $table) {
            $table->index('transfer_mode_id');
            $table->foreign('transfer_mode_id')->references('id')->on('transfer_mode');
        });

        Schema::table('user_data', function (Blueprint $table) {
            $table->index('welding_position_id');
            $table->foreign('welding_position_id')->references('id')->on('welding_position');
        });
        
        Schema::table('user_data', function (Blueprint $table) {
            $table->index('wps_reference_id');
            $table->foreign('wps_reference_id')->references('id')->on('wps_reference');
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
