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
            User::class,
            WeldingProcesses::class,
            TransferMode::class,
            ProductType::class,
            TypeWeld::class,
            Process::class,
            ParentMaterialGroup::class,
            FillerMaterialGroup::class,
            ShieldingGas::class,
            TypePolarity::class,
            WeldingDetails::class,
            WeldingPosition::class,
            Header::class,
            Reference::class,
            DocDesignationGasFlux::class,
            DocParentMlt::class,
            DocTypeJoin::class,
            DocWeldingPost::class,
            DocWeldPr::class,
            DocCodeStSeeder::class,
            DocMetalTransferSeeder::class,
            DocPreparationSeeder::class,
            DocFillerMatDesignationSeeder::class,
            DocBakingSeeder::class,
            DocBackGougingSeeder::class,
            DocSpecificationSeeder::class
        ]);
    }
}
