<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductTypeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_type', function (Blueprint $table) {
            $table->id();
            $table->string('test', 250);
            $table->string('range', 250);
            $table->foreignId('wps_reference_id');
        });

        Schema::table('product_type', function (Blueprint $table) {
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
        Schema::dropIfExists('product_type');
    }
}
