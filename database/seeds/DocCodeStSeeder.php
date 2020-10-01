<?php

use Illuminate\Database\Seeder;

class DocCodeStSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('doc2_code_st')->insert([
            'main' => 'BS EN ISO 15614-1:2019 Lev 1 / BS EN ISO 5817:2014 Lev B',
        ]);
        DB::table('doc2_code_st')->insert([
            'main' => 'BS EN ISO 15613-1:2004 / BS EN ISO 5817:2014 Lev B',
        ]);
        DB::table('doc2_code_st')->insert([
            'main' => 'BS EN ISO 15614-1:2019 Lev 2 / BS EN ISO 5817:2014 Lev B',
        ]);
    }
}
