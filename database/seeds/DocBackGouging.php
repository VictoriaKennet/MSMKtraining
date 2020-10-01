<?php

use Illuminate\Database\Seeder;

class DocBackGouging extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('doc_back_gouging')->insert([
            'main' => 'No Applicable
',
        ]);
        DB::table('doc_back_gouging')->insert([
            'main' => 'Back Gouged',
        ]);
        DB::table('doc_back_gouging')->insert([
            'main' => 'Back Grinded',
        ]);
        DB::table('doc_back_gouging')->insert([
            'main' => 'Machined',
        ]);
        DB::table('doc_back_gouging')->insert([
            'main' => 'Arc Aired',
        ]);
    }
}
