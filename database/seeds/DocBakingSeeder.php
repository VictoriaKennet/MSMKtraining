<?php

use Illuminate\Database\Seeder;

class DocBakingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('doc2_baking')->insert([
            'main' => 'Not Applied',
        ]);
        DB::table('doc2_baking')->insert([
            'main' => 'Oven Baked',
        ]);
        DB::table('doc2_baking')->insert([
            'main' => 'Vacuum Packed',
        ]);
    }
}
