<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWeldingProcessesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('welding_processes', function (Blueprint $table) {
            $table->id();
            $table->string('test', 250);
            $table->string('range', 250);
            $table->foreignId('wps_reference_id');
        });

        Schema::table('welding_processes', function (Blueprint $table) {
            $table->index('wps_reference_id');
            $table->foreign('wps_reference_id')->references('id')->on('wps_reference')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('welding_processes');
    }
}
