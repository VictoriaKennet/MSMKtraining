<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFillerMaterialDesignationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('filler_material_designation', function (Blueprint $table) {
            $table->id();
            $table->integer('process_number');
            $table->foreignId('process_id');
            $table->foreignId('wps_reference_id');
        });

        Schema::table('filler_material_designation', function (Blueprint $table) {
            $table->index('process_id');
            $table->foreign('process_id')->references('id')->on('process');
        });

        Schema::table('filler_material_designation', function (Blueprint $table) {
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
        Schema::dropIfExists('filler_material_designation');
    }
}
