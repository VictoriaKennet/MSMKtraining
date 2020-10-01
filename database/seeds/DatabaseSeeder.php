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
            DocCodeSt::class,
            DocMetalTransfer::class,
            DocPreparation::class,
            DocFillerMatDesignation::class,
            DocBaking::class,
            DocBackGouging::class,
            DocSpecification::class
        ]);
    }
}
