<template>
    <div>
        <Navbar></Navbar>
        <b-container class="my-2">
            <form action="/welding-record" target="_blank" method="POST" enctype="multipart/form-data">
                <b-card no-body class="mb-1">
                    <b-card-header header-tag="header" class="p-1" role="tab">
                        <b-button block v-b-toggle.accordion-1 variant="info">Page 1</b-button>
                    </b-card-header>
                    <b-collapse id="accordion-1" visible accordion="my-accordion" role="tabpanel">
                        <b-card-body>
                            <b-row>
                                <b-col cols="2">
                                    <label>Manufacturer:</label>
                                </b-col>
                                <b-col>
                                    <b-form-group>
                                        <b-form-input
                                            name="manufacturer_1"
                                        ></b-form-input>
                                    </b-form-group>
                                </b-col>
                                <b-col>
                                    <b-form-group>
                                        <b-form-input
                                            name="manufacturer_2"
                                        ></b-form-input>
                                    </b-form-group>
                                </b-col>

                                <b-col>
                                    <b-form-group>
                                        <b-form-input
                                            name="manufacturer_3"
                                        ></b-form-input>
                                    </b-form-group>
                                </b-col>
                            </b-row>

                        </b-card-body>
                    </b-collapse>
                </b-card>

                <!-- Record of Weld Test (1 part) -->

                <b-card no-body class="mb-1">
                    <b-card-header header-tag="header" class="p-1" role="tab">
                        <b-button block v-b-toggle.accordion-2 variant="info">Record of Weld Test (1 part)</b-button>
                    </b-card-header>
                    <b-collapse id="accordion-2" visible accordion="my-accordion" role="tabpanel">
                        <b-card-body>
                            <b-row>
                                <b-col cols="3">
                                    <label>Code/Testing Standard:</label>
                                </b-col>
                                <b-col>
                                    <b-form-group>
                                        <b-form-input
                                            list="code-standard"
                                            name="code-standard"
                                            v-model="data.code_standard"
                                        ></b-form-input>
                                        <b-form-datalist
                                            id="code-standard"
                                            :options="code_standard"
                                        ></b-form-datalist>
                                    </b-form-group>
                                </b-col>
                            </b-row>

                            <b-row>
                                <b-col cols="3">
                                    <label>Manufacturers pWPS No:</label>
                                </b-col>
                                <b-col>
                                    <b-form-group>
                                        <b-form-input
                                            name="manufacturers_1"
                                        ></b-form-input>
                                    </b-form-group>
                                </b-col>
                            </b-row>
                            <b-row>
                                <b-col cols="3">
                                    <label>Issue Number:</label>
                                </b-col>
                                <b-col>
                                    <b-form-group>
                                        <b-form-input
                                            name="issue_number"
                                        ></b-form-input>
                                    </b-form-group>
                                </b-col>
                            </b-row>
                            <b-row>
                                <b-col cols="3">
                                    <label>Manufacturers WPQR No:</label>
                                </b-col>
                                <b-col>
                                    <b-form-group>
                                        <b-form-input
                                            name="manufacturers_2"
                                        ></b-form-input>
                                    </b-form-group>
                                </b-col>
                            </b-row>
                            <b-row>
                                <b-col cols="3">
                                    <label>Parent Material:</label>
                                </b-col>
                                <b-col>
                                    <b-form-group>
                                        <b-form-input
                                            list="parent_material"
                                            name="parent_material"
                                            v-model="data.parent_material"
                                        ></b-form-input>
                                        <b-form-datalist
                                            id="parent_material"
                                            :options="parent_material"
                                        ></b-form-datalist>
                                    </b-form-group>
                                </b-col>
                            </b-row>
                            <b-row>
                                <b-col cols="3">
                                    <label>Heat No:</label>
                                </b-col>
                                <b-col>
                                    <b-form-group>
                                        <b-form-input
                                            name="heat_no"
                                        ></b-form-input>
                                    </b-form-group>
                                </b-col>
                            </b-row>
                            <b-row>
                                <b-col cols="3">
                                    <label>Welding Process:</label>
                                </b-col>
                                <b-col>
                                    <b-form-group>
                                        <b-form-input
                                            list="welding_process"
                                            name="welding_process"
                                            v-model="data.welding_process"
                                        ></b-form-input>
                                        <b-form-datalist
                                            id="welding_process"
                                            :options="welding_process"
                                        ></b-form-datalist>
                                    </b-form-group>
                                </b-col>
                            </b-row>
                            <b-row>
                                <b-col cols="3">
                                    <label>Specification:</label>
                                </b-col>
                                <b-col>
                                    <b-form-group>
                                        <b-form-input
                                            list="specification"
                                            name="specification"
                                            v-model="data.specification"
                                        ></b-form-input>
                                        <b-form-datalist
                                            id="specification"
                                            :options="specification"
                                        ></b-form-datalist>
                                    </b-form-group>
                                </b-col>
                            </b-row>
                            <b-row>
                            <b-col cols="3">
                                <label>Metal Transfer (GMAW):</label>
                            </b-col>
                            <b-col>
                                <b-form-group>
                                    <b-form-input
                                        list="metal_transfer"
                                        name="metal_transfer"
                                        v-model="data.metal_transfer"
                                    ></b-form-input>
                                    <b-form-datalist
                                        id="metal_transfer"
                                        :options="metal_transfer"
                                    ></b-form-datalist>
                                </b-form-group>
                            </b-col>
                            </b-row>
                            <b-row>
                                <b-col cols="3">
                                    <label>Mtl. Thickness (mm):</label>
                                </b-col>
                                <b-col>
                                    <b-form-group>
                                        <b-form-input
                                            name="mtl_thickness"
                                        ></b-form-input>
                                    </b-form-group>
                                </b-col>
                            </b-row>
                            <b-row>
                                <b-col cols="3">
                                    <label>Joint Type & Weld:</label>
                                </b-col>
                                <b-col>
                                    <b-form-group>
                                        <b-form-input
                                            list="joint_type_weld"
                                            name="joint_type_weld"
                                            v-model="data.joint_type_weld"
                                        ></b-form-input>
                                        <b-form-datalist
                                            id="joint_type_weld"
                                            :options="joint_type_weld"
                                        ></b-form-datalist>
                                    </b-form-group>
                                </b-col>
                            </b-row>
                            <b-row>
                                <b-col cols="3">
                                    <label>Outside Diameter (mm):</label>
                                </b-col>
                                <b-col>
                                    <b-form-group>
                                        <b-form-input
                                            name="outside_diameter"
                                        ></b-form-input>
                                    </b-form-group>
                                </b-col>
                            </b-row>
                            <b-row>
                                <b-col cols="3">
                                    <label>Preparation & Cleaning:</label>
                                </b-col>
                                <b-col>
                                    <b-form-group>
                                        <b-form-input
                                            list="preparation"
                                            name="preparation"
                                            v-model="data.preparation"
                                        ></b-form-input>
                                        <b-form-datalist
                                            id="preparation"
                                            :options="preparation"
                                        ></b-form-datalist>
                                    </b-form-group>
                                </b-col>
                            </b-row>
                            <b-row>
                                <b-col cols="3">
                                    <label>Welding Position:</label>
                                </b-col>
                                <b-col>
                                    <b-form-group>
                                        <b-form-input
                                            list="joint_type_weld"
                                            name="joint_type_weld"
                                            v-model="data.welding_position"
                                        ></b-form-input>
                                        <b-form-datalist
                                            id="joint_type_weld"
                                            :options="welding_position"
                                        ></b-form-datalist>
                                    </b-form-group>
                                </b-col>
                            </b-row>

                        </b-card-body>
                    </b-collapse>
                </b-card>

                <!-- Record of Weld Test (2 part) -->

                <b-card no-body class="mb-1">
                    <b-card-header header-tag="header" class="p-1" role="tab">
                        <b-button block v-b-toggle.accordion-3 variant="info">Record of Weld Test (2 part)</b-button>
                    </b-card-header>
                    <b-collapse id="accordion-3" visible accordion="my-accordion" role="tabpanel">
                        <b-card-body>
                            <b-row>
                                <b-col cols="2">
                                    <label>Filler Metal Designation: </label>
                                </b-col>
                                <b-col>
                                    <b-form-group>
                                        <b-form-input
                                            list="filler_metal_ds"
                                            name="filler_metal_ds"
                                            v-model="data.filler_metal_ds"
                                        ></b-form-input>
                                        <b-form-datalist
                                            id="filler_metal_ds"
                                            :options="filler_metal_ds"
                                        ></b-form-datalist>
                                    </b-form-group>
                                </b-col>
                            </b-row>
                            <b-row>
                                <b-col cols="2">
                                    <label>Filler Metal: </label>
                                </b-col>
                                <b-col>
                                    <b-form-group>
                                        <b-form-input
                                            list="filler_metal"
                                            name="filler_metal"
                                            v-model="data.filler_metal"
                                        ></b-form-input>
                                        <b-form-datalist
                                            id="filler_metal"
                                            :options="filler_metal"
                                        ></b-form-datalist>
                                    </b-form-group>
                                </b-col>
                            </b-row>
                            <b-row>
                                <b-col cols="2">
                                    <label>Baking or Drying: </label>
                                </b-col>
                                <b-col cols="4">
                                    <b-form-group>
                                        <b-form-input
                                            list="baking_drying"
                                            name="baking_drying"
                                            v-model="data.baking_drying"
                                        ></b-form-input>
                                        <b-form-datalist
                                            id="baking_drying"
                                            :options="baking_drying"
                                        ></b-form-datalist>
                                    </b-form-group>
                                </b-col>

                                <b-col cols="2">
                                    <label>Back Gouging: </label>
                                </b-col>
                                <b-col cols="4">
                                    <b-form-group>
                                        <b-form-input
                                            list="baking_gouging"
                                            name="baking_gouging"
                                            v-model="data.baking_gouging"
                                        ></b-form-input>
                                        <b-form-datalist
                                            id="baking_gouging"
                                            :options="baking_gouging"
                                        ></b-form-datalist>
                                    </b-form-group>
                                </b-col>
                            </b-row>
                            <b-row>
                                <b-col cols="2">
                                    <label>Shielding Gas Type: </label>
                                </b-col>
                                <b-col cols="4">
                                    <b-form-group>
                                        <b-form-input
                                            list="shielding_gas_type"
                                            name="shielding_gas_type"
                                            v-model="data.shielding_gas_type"
                                        ></b-form-input>
                                        <b-form-datalist
                                            id="shielding_gas_type"
                                            :options="shielding_gas_type"
                                        ></b-form-datalist>
                                    </b-form-group>
                                </b-col>

                                <b-col cols="2">
                                    <label>Preheat Temperature: </label>
                                </b-col>
                                <b-col cols="4">
                                    <b-form-group>
                                        <b-form-input
                                            name="preheat_temperature"
                                        ></b-form-input>
                                    </b-form-group>
                                </b-col>
                            </b-row>
                            <b-row>
                                <b-col cols="2">
                                    <label>Flow Rate (LPM): </label>
                                </b-col>
                                <b-col cols="4">
                                    <b-form-group>
                                        <b-form-input
                                            name="flow_rate"
                                        ></b-form-input>
                                    </b-form-group>
                                </b-col>

                                <b-col cols="2">
                                    <label>Interpass Temperature: </label>
                                </b-col>
                                <b-col cols="4">
                                    <b-form-group>
                                        <b-form-input
                                            name="interpass_temperature"
                                        ></b-form-input>
                                    </b-form-group>
                                </b-col>
                            </b-row>
                            <b-row>
                                <b-col cols="2">
                                    <label>Purging Gas Type: </label>
                                </b-col>
                                <b-col cols="4">
                                    <b-form-group>
                                        <b-form-input
                                            list="purging_gas_type"
                                            name="purging_gas_type"
                                            v-model="data.shielding_gas_type"
                                        ></b-form-input>
                                        <b-form-datalist
                                            id="purging_gas_type"
                                            :options="shielding_gas_type"
                                        ></b-form-datalist>
                                    </b-form-group>
                                </b-col>

                                <b-col cols="2">
                                    <label>Heat Treatment and/or Ageing: </label>
                                </b-col>
                                <b-col cols="4">
                                    <b-form-group>
                                        <b-form-input
                                            name="heating_treatment"
                                        ></b-form-input>
                                    </b-form-group>
                                </b-col>
                            </b-row>
                            <b-row>
                                <b-col cols="2">
                                    <label>Tungsten Type: </label>
                                </b-col>
                                <b-col cols="4">
                                    <b-form-group>
                                        <b-form-input
                                            list="tungsten_type"
                                            name="tungsten_type"
                                            v-model="data.tungsten_type"
                                        ></b-form-input>
                                        <b-form-datalist
                                            id="tungsten_type"
                                            :options="tungsten_type"
                                        ></b-form-datalist>
                                    </b-form-group>
                                </b-col>

                                <b-col cols="2">
                                    <label>Heat Treatment and/or Ageing: </label>
                                </b-col>
                                <b-col cols="4">
                                    <b-form-group>
                                        <b-form-input
                                            name="heating_cooling_rates"
                                        ></b-form-input>
                                    </b-form-group>
                                </b-col>
                            </b-row>
                            <b-row>
                                <b-col cols="2">
                                    <label>Tungsten Size: </label>
                                </b-col>
                                <b-col cols="4">
                                    <b-form-group>
                                        <b-form-input
                                            name="tungsten_size"
                                        ></b-form-input>
                                    </b-form-group>
                                </b-col>

                                <b-col cols="2">
                                    <label>Touch to Work: </label>
                                </b-col>
                                <b-col cols="4">
                                    <b-form-group>
                                        <b-form-input
                                            name="touch_work"
                                        ></b-form-input>
                                    </b-form-group>
                                </b-col>
                            </b-row>

                            <b-row>
                                <b-col cols="2">
                                    <label>Power Source: </label>
                                </b-col>
                                <b-col cols="4">
                                    <b-form-group>
                                        <b-form-input
                                            name="power_source"
                                        ></b-form-input>
                                    </b-form-group>
                                </b-col>
                            </b-row>

                            <b-row>
                                <b-col cols="2">
                                    <label>Automatic System: </label>
                                </b-col>
                                <b-col cols="4">
                                    <b-form-group>
                                        <b-form-input
                                            name="automatic_system"
                                        ></b-form-input>
                                    </b-form-group>
                                </b-col>
                            </b-row>

                            <b-row>
                                <b-col cols="2">
                                    <label>Control: </label>
                                </b-col>
                                <b-col cols="4">
                                    <b-form-group>
                                        <b-form-input
                                            name="control"
                                        ></b-form-input>
                                    </b-form-group>
                                </b-col>
                            </b-row>


                        </b-card-body>
                    </b-collapse>
                </b-card>

                <!-- Record of Welding Parameters -->

                <b-card no-body class="mb-1">
                    <b-card-header header-tag="header" class="p-1" role="tab">
                        <b-button block v-b-toggle.accordion-4 variant="info">Record of Welding Parameters</b-button>
                    </b-card-header>
                    <b-collapse id="accordion-4" visible accordion="my-accordion" role="tabpanel">
                        <b-card-body>

                            <b-row>
                                <b-col style="width: 13%" class="text-center"><b>Process</b></b-col>
                                <b-col style="width: 13%" class="text-center"><b>Size of Filler (mm)</b></b-col>
                                <b-col style="width: 13%" class="text-center"><b>Current A</b></b-col>
                                <b-col style="width: 13%" class="text-center"><b>Voltage V</b></b-col>
                                <b-col style="width: 13%" class="text-center"><b>Type of Current/Polarity</b></b-col>
                                <b-col style="width: 13%" class="text-center"><b>Type of transfer</b></b-col>
                                <b-col style="width: 13%" class="text-center"><b>Travel Speed (mm/sec)</b></b-col>
                                <b-col style="width: 13%" class="text-center"><b>Heat Input (Kj/mm)</b></b-col>
                                <b-col></b-col>
                            </b-row>

                            <b-row v-for="(item, index) in data.records" :key="index" class="mb-2">
                                <b-col style="width: 13%">
                                    <b-form-input
                                        name="record-process"
                                        v-model="item.record_process"
                                    ></b-form-input>
                                </b-col>
                                <b-col style="width: 13%">
                                    <b-form-input
                                        name="record-size"
                                        v-model="item.record_size"
                                    ></b-form-input>
                                </b-col>
                                <b-col style="width: 13%">
                                    <b-form-input
                                        name="record-current-a"
                                        v-model="item.record_current_a"
                                    ></b-form-input>
                                </b-col>
                                <b-col style="width: 13%">
                                    <b-form-input
                                        name="record-voltage-v"
                                        v-model="item.record_voltage_v"
                                    ></b-form-input>
                                </b-col>
                                <b-col style="width: 13%">
                                    <b-form-input
                                        name="record-type-current"
                                        v-model="item.record_type_current"
                                    ></b-form-input>
                                </b-col>
                                <b-col style="width: 13%">
                                    <b-form-input
                                        name="record-type-transfer"
                                        v-model="item.record_type_transfer"
                                    ></b-form-input>
                                </b-col>
                                <b-col style="width: 13%">
                                    <b-form-input
                                        name="record-travel-speed"
                                        v-model="item.record_travel_speed"
                                    ></b-form-input>
                                </b-col>
                                <b-col style="width: 13%">
                                    <b-form-input
                                        name="record-heat-input"
                                        v-model="item.record_heat_input"
                                    ></b-form-input>
                                </b-col>
                                <b-col class="text-center">
                                    <b-icon
                                        icon="trash-fill"
                                        font-scale="2"
                                        class="cursor"
                                        @click="delRecords(index)"
                                    ></b-icon>
                                </b-col>
                            </b-row>

                            <div class="mt-4">
                                <b-button block variant="outline-secondary" @click="addRecords">Added +</b-button>
                            </div>
                            <input type="hidden" name="records" :value="JSON.stringify(data.records)">
                        </b-card-body>
                    </b-collapse>
                </b-card>

                <!-- Aditional information -->

                <b-card no-body class="mb-1">
                    <b-card-header header-tag="header" class="p-1" role="tab">
                        <b-button block v-b-toggle.accordion-5 variant="info">Aditional information</b-button>
                    </b-card-header>
                    <b-collapse id="accordion-5" accordion="my-accordion" role="tabpanel">
                        <b-card-body>
                            <b-row>
                                <b-col>
                                    <label for="input-default">TEST WITHENESSED BY</label>
                                    <b-row class="my-1">
                                        <b-col cols="3">
                                            <label for="input-default">Name</label>
                                        </b-col>
                                        <b-col cols="9">
                                            <b-form-input v-model="clientData.withenessed_name" name="withenessed_name"></b-form-input>
                                        </b-col>
                                    </b-row>
                                    <b-row class="my-1">
                                        <b-col cols="3">
                                            <label for="input-default">Position</label>
                                        </b-col>
                                        <b-col cols="9">
                                            <b-form-input v-model="clientData.withenessed_position" name="withenessed_position"></b-form-input>
                                        </b-col>
                                    </b-row>
                                    <b-row class="my-1">
                                        <b-col cols="3">
                                            <label for="input-default">Date</label>
                                        </b-col>
                                        <b-col cols="9">
                                            <label for="datepicker-placeholder">Date picker with placeholder</label>
                                            <b-form-datepicker
                                                v-model="clientData.withenessed_date"
                                                name="withenessed_date"
                                                id="datepicker-placeholder"
                                                placeholder="Choose a date"
                                                local="en"
                                            ></b-form-datepicker>
                                        </b-col>
                                    </b-row>
                                </b-col>

                                <b-col>
                                    <label for="input-default">FOR AND OR BEHAULF OF MSMK TRAINING LTD</label>
                                    <b-row class="my-1">
                                        <b-col cols="3">
                                            <label for="input-default">Name</label>
                                        </b-col>
                                        <b-col cols="9">
                                            <b-form-input v-model="clientData.behaulf_name" name="behaulf_name"></b-form-input>
                                            <b-form-datalist id="input-list"></b-form-datalist>
                                        </b-col>
                                    </b-row>
                                    <b-row class="my-1">
                                        <b-col cols="3">
                                            <label for="input-default">Position</label>
                                        </b-col>
                                        <b-col cols="9">
                                            <b-form-input v-model="clientData.behaulf_position" name="behaulf_position"></b-form-input>
                                            <b-form-datalist id="input-list"></b-form-datalist>
                                        </b-col>
                                    </b-row>
                                    <b-row class="my-1">
                                        <b-col cols="3">
                                            <label for="input-default">Date</label>
                                        </b-col>
                                        <b-col cols="9">
                                            <label for="datepicker-placeholder">Date picker with placeholder</label>
                                            <b-form-datepicker
                                                name="behaulf_date"
                                                v-model="clientData.behaulf_date"
                                                id="datepicker-placeholder-2"
                                                placeholder="Choose a date"
                                                local="en"
                                            ></b-form-datepicker>
                                        </b-col>
                                    </b-row>
                                </b-col>
                            </b-row>
                        </b-card-body>
                    </b-collapse>
                </b-card>
                <div class="d-flex justify-content-center">
                    <input type="submit" value="Open PDF" class="button">
                </div>
            </form>
        </b-container>

    </div>
</template>


<script>
import Navbar from '../NavbarComponent';

export default {
    components: {
        Navbar
    },
    data() {
        return {
            code_standard: [
                "BS EN ISO 15614-1:2019 Lev 1 / BS EN ISO 5817:2014 Lev B",
                "BS EN ISO 15613-1:2004 / BS EN ISO 5817:2014 Lev B",
                "BS EN ISO 15614-1:2019 Lev 2 / BS EN ISO 5817:2014 Lev B"
            ],
            parent_material: [
                "BS EN 10025-2:2019",
                "BS EN 10025-2:2020",
                "BS EN 10025-2:2021",
                "BS EN 10025-4:2019",
                "BS EN 10025-6:2019",
                "BS EN 10088-2:2014",
                "BS EN 10088-2:2014",
                "BS EN 10088-2:2014",
                "BS EN 10088-2:2014",
                "BS EN 10088-2:2014",
                "BS EN 10088-2:2014",
                "BS EN 10088-2:2024",
                "BS EN 10088-2:2024"
            ],
            welding_process:[
                "111 MMA",
                "135 MAG ",
                "136 MAG",
                "138 MAG",
                "141 TIG",
                "141/136 TIG and FCAW",
                "111/136 MMA and FCAW",
                "135/136 MAG and FCAW",
                "15 PAW",
                "121 SAW"
            ],
            specification:[
                "S355J2+N",
                "S355J2",
                "S275JR+AR",
                "STRENX 700",
                "690QL",
                "1.4301 (304) Gr 8.1",
                "1.4301 (304) Gr 8.2",
                "1.4307 (304L) Gr 8.1",
                "1.4307 (304L) Gr 8.2",
                "1.4401 (316) Gr 8.1",
                "1.4401 (316) Gr 8.2",
                "1.4404 (316L) Gr 8.1",
                "1.4404 (316L) Gr 8.2",
            ],
            metal_transfer: [
                "Dip",
                "Globular",
                "Spray",
                "Pulsed",
                "Dip and Spray"
            ],
            joint_type_weld: [
                "Butt Weld CJP",
                "Butt Weld PJP",
                "Fillet Weld",
                "T-Butt PJP",
                "T-Butt CJP"
            ],
            preparation: [
                "CS Wire Brush",
                "SS Wire Brush"
            ],
            welding_position:[
                "PA",
                "PB",
                "PC",
                "PF",
                "PE",
                "PD",
                "HLO45",
                "PG",
                "PF and PC"
            ],
            filler_metal_ds: [
                "EN ISO 14341-A-G46 3  C 4Si1",
                "EN ISO 14341-A-G42 3  C 3Si1",
                "EN ISO 636: W 42 5 W3Si1",
                "EN ISO 14343-B / AWS A5.9/A5.9M ER 316L",
                "EN 12534 G69 4 M Mn3Ni1CrMo",
                "EN 758 T46 3 M M 2 H5",
                "ISO 14343-A G 19 12 3 L SI",
                "EN 758 T46 3 P M 1 H5",
                "ISO 2560-A:E 42 4 B 12 H5 ( E7016)",
                "ISO 2560-A:E 46 3 B 32 H5 ( E7018)",
                "EN 12072 G18 8 Mn",
                "ISO 18273 S Al5356",
                "ISO 18273 ER4043"
            ],
            filler_metal: [

            ],
            baking_drying:[
                "Not Applied",
                "Oven Baked",
                "Oven Baked"
            ],
            baking_gouging:[
                "Not Applied",
                "Back Gouged",
                "Back Grinded",
                "Machined",
                "Arc Aired"
            ],
            shielding_gas_type:[
                "I1",
                "I2",
                "Not Applicable",
                "M14",
                "M26",
                "M24",
                "I1/M24",
                "I1/M26",
                "I3",
                "M11",
                "M12",
                "M14"
            ],
            tungsten_type:[
                "NOT APPLICABLE",
                "Thoriated 2%",
                "Zirconiated 2%",
                "Lanthanated 2%"
            ],
            data: {
                code_standard: "",
                parent_material:"",
                welding_process:"",
                metal_transfer:"",
                specification:"",
                joint_type_weld:"",
                preparation:"",
                welding_position:"",
                filler_metal_ds:"",
                filler_metal:"",
                baking_drying:"",
                baking_gouging:"",
                shielding_gas_type:"",
                tungsten_type:"",
                records: [
                    {
                        record_process: "GMAW  135",
                        record_size: "1.0mm",
                        record_current_a: "144",
                        record_voltage_v: "17.5",
                        record_type_current: "DC+",
                        record_type_transfer: "Short",
                        record_travel_speed: "7.9",
                        record_heat_input: "0.26"
                    }
                ]
            },
            clientData: {
                withenessed_name: "",
                withenessed_position: "",
                withenessed_date: "",
                behaulf_name: "",
                behaulf_position: "",
                behaulf_date: ""
            }
        }
    },
    methods: {
        addRecords() {
            this.data.records.push(
                {
                    record_process: "",
                    record_size: "",
                    record_current_a: "",
                    record_voltage_v: "",
                    record_type_current: "",
                    record_type_transfer: "",
                    record_travel_speed: "",
                    record_heat_input: ""
                }
            )
        },
        delRecords(index) {
            this.data.records.splice(index, 1);
        }
    }
}
</script>
<style lang="css" scoped>
    .cursor {
        cursor: pointer;
    }
</style>
