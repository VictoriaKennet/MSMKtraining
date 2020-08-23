<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWPSReferenceTable extends Migration
{
    public function up()
    {
        Schema::create('wps_reference', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->foreignId('welding_processes_id')->nullable();
            $table->foreignId('type_weld_id')->nullable();
            $table->foreignId('product_type_id')->nullable();
            $table->foreignId('filler_material_group_id')->nullable();
            $table->foreignId('process_1_id')->nullable();
            $table->foreignId('process_2_id')->nullable();
            $table->foreignId('parent_material_group_id')->nullable();
            $table->foreignId('header_id')->nullable();
        });

        Schema::table('wps_reference', function (Blueprint $table) {
            $table->index('welding_processes_id');
            $table->foreign('welding_processes_id')->references('id')->on('welding_processes')->onDelete('cascade');
        });

        Schema::table('wps_reference', function (Blueprint $table) {
            $table->index('type_weld_id');
            $table->foreign('type_weld_id')->references('id')->on('type_weld')->onDelete('cascade');
        });

        Schema::table('wps_reference', function (Blueprint $table) {
            $table->index('product_type_id');
            $table->foreign('product_type_id')->references('id')->on('product_type')->onDelete('cascade');
        });

        Schema::table('wps_reference', function (Blueprint $table) {
            $table->index('filler_material_group_id');
            $table->foreign('filler_material_group_id')->references('id')->on('filler_material_group')->onDelete('cascade');
        });

        Schema::table('wps_reference', function (Blueprint $table) {
            $table->index('process_1_id');
            $table->foreign('process_1_id')->references('id')->on('process')->onDelete('cascade');
        });

        Schema::table('wps_reference', function (Blueprint $table) {
            $table->index('process_2_id');
            $table->foreign('process_2_id')->references('id')->on('process')->onDelete('cascade');
        });

        Schema::table('wps_reference', function (Blueprint $table) {
            $table->index('parent_material_group_id');
            $table->foreign('parent_material_group_id')->references('id')->on('parent_material_group')->onDelete('cascade');
        });

        Schema::table('wps_reference', function (Blueprint $table) {
            $table->index('header_id');
            $table->foreign('header_id')->references('id')->on('header')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('wps_reference');
    }
}
