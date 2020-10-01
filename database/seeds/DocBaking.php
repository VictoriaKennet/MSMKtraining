<?php

use Illuminate\Database\Seeder;

class DocBaking extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('doc_baking')->insert([
            'main' => 'Not Applied',
        ]);
        DB::table('doc_baking')->insert([
            'main' => 'Oven Baked',
        ]);
        DB::table('doc_baking')->insert([
            'main' => 'Vacuum Packed',
        ]);
    }
}
