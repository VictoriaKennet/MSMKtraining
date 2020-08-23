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
            'test' => 'Plate (P)',
            'range' => 'Tube (T) and Plate (P)'
        ]);

        DB::table('product_type')->insert([
            'test' => 'Plate (P)',
            'range' => 'Tube (T) and Plate (P)'
        ]);

        DB::table('product_type')->insert([
            'test' => 'Plate (P)',
            'range' => 'Tube (T) and Plate (P)'
        ]);

        DB::table('product_type')->insert([
            'test' => 'Plate (P)',
            'range' => 'Tube (T) and Plate (P)'
        ]);

        DB::table('product_type')->insert([
            'test' => 'Plate (T)',
            'range' => 'Tube (T) and Plate (P)'
        ]);

        DB::table('product_type')->insert([
            'test' => 'Plate (T)',
            'range' => 'Tube (T) and Plate (P)'
        ]);
    }
}
