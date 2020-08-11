<?php

use Illuminate\Database\Seeder;

class ProductType extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('product_type')->insert([
            'wps_reference_id' => '1',
            'test' => 'Plate (P)',
            'range' => 'Tube (T) and Plate (P)']);

        DB::table('product_type')->insert([
            'wps_reference_id' => '2',
            'test' => 'Plate (P)',
            'range' => 'Tube (T) and Plate (P)']);

        DB::table('product_type')->insert([
            'wps_reference_id' => '3',
            'test' => 'Plate (P)',
            'range' => 'Tube (T) and Plate (P)']);

        DB::table('product_type')->insert([
            'wps_reference_id' => '4',
            'test' => 'Plate (P)',
            'range' => 'Tube (T) and Plate (P)']);
        
        DB::table('product_type')->insert([
            'wps_reference_id' => '5',
            'test' => 'Plate (T)',
            'range' => 'Tube (T) and Plate (P)']);

        DB::table('product_type')->insert([
            'wps_reference_id' => '6',
            'test' => 'Plate (T)',
            'range' => 'Tube (T) and Plate (P)']);
    }
    }
}
