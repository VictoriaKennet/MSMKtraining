<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            wps_reference::class,
            // filler_material_designation::class,
            // filler_material_group::class,
            // parent_material_group::class,
            // product_type::class,
            // shielding_gas::class,
            // transfer_mode::class,
            // type_of_weld::class,
            // type_polarity::class,
            // welding_details::class,
            // welding_position::class,
            // welding_processes::class
        ]);
    }
}
