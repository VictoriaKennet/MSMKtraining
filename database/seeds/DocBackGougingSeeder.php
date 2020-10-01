<?php

use Illuminate\Database\Seeder;

class DocBackGougingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('doc2_back_gouging')->insert([
            'main' => 'No Applicable
',
        ]);
        DB::table('doc2_back_gouging')->insert([
            'main' => 'Back Gouged',
        ]);
        DB::table('doc2_back_gouging')->insert([
            'main' => 'Back Grinded',
        ]);
        DB::table('doc2_back_gouging')->insert([
            'main' => 'Machined',
        ]);
        DB::table('doc2_back_gouging')->insert([
            'main' => 'Arc Aired',
        ]);
    }
}
