<template>
    <div>
        <Navbar></Navbar>
        <b-container class="my-2">
            <form action="/welding-record" target="_blank" method="POST" enctype="multipart/form-data">

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
                                            list="code_standard"
                                            name="code_standard"
                                            v-model="data.code_standard"
                                        ></b-form-input>
                                        <b-form-datalist
                                            id="code_standard"
                                            :options="recordData.code_standard"
                                            text-field="main"
                                        ></b-form-datalist>
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
                                            v-model="data.issue_number"
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
                                            name="manufacturers_2_2"
                                            v-model="data.manufacturers_2_2"
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
                                            v-model="data.parent_mlt.main"
                                            @change="setElement($event, 'parent_mlt')"
                                        ></b-form-input>
                                        <b-form-datalist
                                            id="parent_material"
                                            :options="recordData.parent_mlt"
                                            text-field="main"
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
                                            v-model="data.heat_no"
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
                                            v-model="data.welding_process.main"
                                            @change="setElement($event, 'welding_process')"
                                        ></b-form-input>
                                        <b-form-datalist
                                            id="welding_process"
                                            :options="recordData.welding_process"
                                            text-field="main"
                                        ></b-form-datalist>
                                    </b-form-group>
                                </b-col>
                                <b-col>
                                    <b-form-group>
                                        <b-form-input
                                            list="welding_process_2"
                                            name="welding_process_2"
                                            v-model="data.welding_process_2.main"
                                            @change="setElement($event, 'welding_process_2')"
                                        ></b-form-input>
                                        <b-form-datalist
                                            id="welding_process_2"
                                            :options="recordData.welding_process_2"
                                            text-field="main"
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
                                            :options="recordData.specification"
                                            text-field="main"
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
                                        :options="recordData.metal_transfer"
                                        text-field="main"
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
                                            v-model="data.mtl_thickness"
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
                                            v-model="data.joint_type_weld.main"
                                            @change="setElement($event, 'joint_type_weld')"
                                        ></b-form-input>
                                        <b-form-datalist
                                            id="joint_type_weld"
                                            :options="recordData.joint_type_weld"
                                            text-field="main"
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
                                            v-model="data.outside_diameter"
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
                                            :options="recordData.preparation"
                                            text-field="main"
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
                                            list="welding_post"
                                            name="welding_post"
                                            v-model="data.welding_post.main"
                                            @change="setElement($event, 'welding_post')"
                                        ></b-form-input>
                                        <b-form-datalist
                                            id="welding_post"
                                            :options="recordData.welding_post"
                                            text-field="main"
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
                                            :options="recordData.filler_mat_designation"
                                            text-field="main"
                                        ></b-form-datalist>
                                    </b-form-group>
                                </b-col>
                                <b-col cols="3">
                                    <b-form-group>
                                        <b-form-input
                                            name="filler_metal_ds_number"
                                            :value="data.filler_metal_ds_number"
                                        ></b-form-input>
                                    </b-form-group>
                                </b-col>
                            </b-row>
                            <b-row>
                                <b-col cols="2"></b-col>
                                <b-col>
                                    <b-form-group>
                                        <b-form-input
                                            list="filler_metal_ds_2"
                                            name="filler_metal_ds_2"
                                            v-model="data.filler_metal_ds_2"
                                        ></b-form-input>
                                        <b-form-datalist
                                            id="filler_metal_ds_2"
                                            :options="recordData.filler_mat_designation_2"
                                            text-field="main"
                                        ></b-form-datalist>
                                    </b-form-group>
                                </b-col>
                                <b-col cols="3">
                                    <b-form-group>
                                        <b-form-input
                                            name="filler_metal_ds_2_number"
                                            :value="data.filler_metal_ds_2_number"
                                        ></b-form-input>
                                    </b-form-group>
                                </b-col>
                            </b-row>
                            <b-row>
                                <b-col cols="2">
                                    <label>Filler Make: </label>
                                </b-col>
                                <b-col>
                                    <b-form-group>
                                        <b-form-input
                                            list="filler_metal"
                                            name="filler_metal"
                                            v-model="data.filler_metal"
                                        ></b-form-input>
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
                                            v-model="data.designation_gas_flux.main"
                                            @change="setElement($event, 'designation_gas_flux')"
                                        ></b-form-input>
                                        <b-form-datalist
                                            id="shielding_gas_type"
                                            :options="recordData.designation_gas_flux"
                                            text-field="main"
                                        ></b-form-datalist>
                                    </b-form-group>
                                    <b-row>
                                        <b-col cols="4">
                                            <b-form-checkbox
                                                name="isArg"
                                                size="lg"
                                                v-model="data.isArg"
                                            >Arg</b-form-checkbox>
                                        </b-col>
                                        <b-col>
                                            <b-form-group>
                                                <b-form-input
                                                    :disabled="!data.isArg"
                                                    name="arg"
                                                    v-model="data.arg"
                                                ></b-form-input>
                                            </b-form-group>
                                        </b-col>
                                    </b-row>

                                    <b-row>
                                        <b-col cols="4">
                                            <b-form-checkbox
                                                name="isCo2"
                                                size="lg"
                                                v-model="data.isCo2"
                                            >CO2</b-form-checkbox>
                                        </b-col>
                                        <b-col>
                                            <b-form-group>
                                                <b-form-input
                                                    :disabled="!data.isCo2"
                                                    name="co2"
                                                    v-model="data.co2"
                                                ></b-form-input>
                                            </b-form-group>
                                        </b-col>
                                    </b-row>

                                    <b-row>
                                        <b-col cols="4">
                                            <b-form-checkbox
                                                name="isO2"
                                                size="lg"
                                                v-model="data.isO2"
                                            >O2</b-form-checkbox>
                                        </b-col>
                                        <b-col>
                                            <b-form-group>
                                                <b-form-input
                                                    :disabled="!data.isO2"
                                                    name="o2"
                                                    v-model="data.o2"
                                                ></b-form-input>
                                            </b-form-group>
                                        </b-col>
                                    </b-row>

                                    <b-row>
                                        <b-col cols="4">
                                            <b-form-checkbox
                                                name="isHe"
                                                size="lg"
                                                v-model="data.isHe"
                                            >He</b-form-checkbox>
                                        </b-col>
                                        <b-col>
                                            <b-form-group>
                                                <b-form-input
                                                    :disabled="!data.isHe"
                                                    name="he"
                                                    v-model="data.he"
                                                ></b-form-input>
                                            </b-form-group>
                                        </b-col>
                                    </b-row>
                                </b-col>

                                <b-col cols="2">
                                    <label>Preheat Temperature: </label>
                                </b-col>
                                <b-col cols="4">
                                    <b-form-group>
                                        <b-form-input
                                            name="preheat_temperature"
                                            v-model="data.preheat_temperature"
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
                                            v-model="data.flow_rate"
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
                                            v-model="data.interpass_temperature"
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
                                            list="designation_purging_gas"
                                            name="designation_purging_gas"
                                            v-model="data.designation_backing_gas.main"
                                            @change="setElement($event, 'designation_backing_gas')"
                                        ></b-form-input>
                                        <b-form-datalist
                                            id="designation_purging_gas"
                                            :options="recordData.designation_backing_gas"
                                            text-field="main"
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
                                            v-model="data.heating_treatment"
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
                                    <label>Heating and Cooling Rates: </label>
                                </b-col>
                                <b-col cols="4">
                                    <b-form-group>
                                        <b-form-input
                                            name="heating_cooling_rates"
                                            v-model="data.heating_cooling_rates"
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
                                            v-model="data.tungsten_size"
                                        ></b-form-input>
                                    </b-form-group>
                                </b-col>

                                <b-col cols="2">
                                    <label>Electrode Stick-out: </label>
                                </b-col>
                                <b-col cols="4">
                                    <b-form-group>
                                        <b-form-input
                                            name="touch_work"
                                            v-model="data.touch_work"
                                        ></b-form-input>
                                    </b-form-group>
                                </b-col>
                            </b-row>

                            <b-row>
                                <b-col cols="2">
                                    <label>Power Source: </label>
                                </b-col>
                                <b-col>
                                    <b-form-group>
                                        <b-form-input
                                            name="power_source"
                                            v-model="data.power_source"
                                        ></b-form-input>
                                    </b-form-group>
                                </b-col>
                            </b-row>

                            <b-row>
                                <b-col cols="2">
                                    <label>Automatic System: </label>
                                </b-col>
                                <b-col>
                                    <b-form-group>
                                        <b-form-input
                                            name="automatic_system"
                                            v-model="data.automatic_system"
                                        ></b-form-input>
                                    </b-form-group>
                                </b-col>
                            </b-row>

                            <b-row>
                                <b-col cols="2">
                                    <label>Control: </label>
                                </b-col>
                                <b-col>
                                    <b-form-group>
                                        <b-form-input
                                            name="control"
                                            v-model="data.control"
                                        ></b-form-input>
                                    </b-form-group>
                                </b-col>
                            </b-row>

                            <b-row>
                                <b-col cols="2">
                                    <label>Throat Thickness size (mm): </label>
                                </b-col>
                                <b-col>
                                    <b-form-group>
                                        <b-form-input
                                            name="throat_thickness_size"
                                            v-model="data.throat_thickness_size"
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
                                    <b-form-group>
                                        <b-form-input
                                            list="record-process"
                                            name="record-process"
                                            v-model="item.record_process"
                                        ></b-form-input>
                                        <b-form-datalist
                                            id="record-process"
                                            :options="recordData.welding_process"
                                            text-field="main"
                                        ></b-form-datalist>
                                    </b-form-group>
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
                                        list="record-type-current"
                                        name="record-type-current"
                                        v-model="item.record_type_current"
                                    ></b-form-input>
                                    <b-form-datalist
                                        id="record-type-current"
                                        :options="record_type_current"
                                    ></b-form-datalist>
                                </b-col>
                                <b-col style="width: 13%">
                                    <b-form-input
                                        list="record-type-transfer"
                                        name="record-type-transfer"
                                        v-model="item.record_type_transfer"
                                    ></b-form-input>
                                    <b-form-datalist
                                        id="record-type-transfer"
                                        :options="recordData.metal_transfer"
                                        text-field="main"
                                    ></b-form-datalist>
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
                                        :value="recordHeatInput(index)"
                                    ></b-form-input>
                                </b-col>
                                <b-col class="text-center">
                                    <b-icon
                                        v-if="index != 0"
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

                <!-- Range of Qualification -->

                <b-card no-body class="mb-1">
                    <b-card-header header-tag="header" class="p-1" role="tab">
                        <b-button block v-b-toggle.accordion-1 variant="info">Range of Qualification</b-button>
                    </b-card-header>
                    <b-collapse id="accordion-1" visible accordion="my-accordion" role="tabpanel">
                        <b-card-body>
                            <b-row>
                                <b-col cols="3">
                                    <label>Manufacturers pWPS Ref No:</label>
                                </b-col>
                                <b-col>
                                    <b-form-group>
                                        <b-form-input
                                            name="manufacturers_2"
                                            v-model="data.manufacturers_2"
                                        ></b-form-input>
                                    </b-form-group>
                                </b-col>
                            </b-row>
                            <b-row class="mb-2">
                                <b-col cols="3">
                                    <label>Manufacturer:</label>
                                </b-col>
                                <b-col>
                                    <b-form-group>
                                        <b-form-input
                                            name="manufacturer_1"
                                            v-model="data.manufacturer_1"
                                        ></b-form-input>
                                    </b-form-group>
                                </b-col>
                                <b-col>
                                    <b-form-group>
                                        <b-form-input
                                            name="manufacturer_2"
                                            v-model="data.manufacturer_2"
                                        ></b-form-input>
                                    </b-form-group>
                                </b-col>

                                <b-col>
                                    <b-form-group>
                                        <b-form-input
                                            name="manufacturer_3"
                                            v-model="data.manufacturer_3"
                                        ></b-form-input>
                                    </b-form-group>
                                </b-col>
                            </b-row>
                            <b-row>
                                <b-col cols="3">
                                    <label>Ref No:</label>
                                </b-col>
                                <b-col>
                                    <b-form-group>
                                        <b-form-input
                                            name="ref_no"
                                            v-model="data.ref_no"
                                        ></b-form-input>
                                    </b-form-group>
                                </b-col>
                            </b-row>
                            <b-row>
                                <b-col cols="3">
                                    <label>Date of Welding / Welder:</label>
                                </b-col>
                                <b-col cols="9">
                                    <b-form-datepicker
                                        name="date_welder"
                                        v-model="data.date_welder"
                                        id="datepicker-placeholder"
                                        placeholder="Choose a date"
                                        local="en"
                                    ></b-form-datepicker>
                                </b-col>
                            </b-row>
                            <br>
                            <b-row>
                                <b-col cols="3">
                                    <label>Welder name:</label>
                                </b-col>
                                <b-col cols="9">
                                    <b-form-group>
                                        <b-form-input
                                            name="date_welder_name"
                                            v-model="data.date_welder_name"
                                        ></b-form-input>
                                    </b-form-group>
                                </b-col>
                            </b-row>
                            <hr>
                            <b-row class="mb-2">
                                <b-col cols="3">
                                    <label>Welding Process(es):</label>
                                </b-col>
                                <b-col>
                                    <b-form-group>
                                        <b-form-input
                                            list="welding_process_add"
                                            name="welding_process_add"
                                            v-model="data.welding_process.add"
                                        ></b-form-input>
                                        <b-form-datalist
                                            id="welding_process_add"
                                            :options="recordData.welding_process"
                                            text-field="add"
                                        ></b-form-datalist>
                                    </b-form-group>
                                </b-col>
                                <b-col>
                                    <b-form-group>
                                        <b-form-input
                                            list="welding_process_add_2"
                                            name="welding_process_add_2"
                                            v-model="data.welding_process_2.add"
                                        ></b-form-input>
                                        <b-form-datalist
                                            id="welding_process_add_2"
                                            :options="recordData.welding_process_2"
                                            text-field="add"
                                        ></b-form-datalist>
                                    </b-form-group>
                                </b-col>
                            </b-row>
                            <b-row class="mb-2">
                                <b-col cols="3">
                                    <label>Type of Joint and Weld:</label>
                                </b-col>
                                <b-col>
                                    <b-form-group>
                                        <b-form-input
                                            list="joint_type_weld_add"
                                            name="joint_type_weld_add"
                                            v-model="data.joint_type_weld.add"
                                            @change="jointTypeWeld"
                                        ></b-form-input>
                                        <b-form-datalist
                                            id="joint_type_weld_add"
                                            :options="recordData.joint_type_weld"
                                            text-field="add"
                                        ></b-form-datalist>
                                    </b-form-group>
                                </b-col>
                            </b-row>
                            <b-row class="mb-2">
                                <b-col cols="3">
                                    <label>Parent Mtl. Group(s) and Sub Group(s):</label>
                                </b-col>
                                <b-col>
                                    <b-form-group>
                                        <b-form-input
                                            list="parent_mlt_add"
                                            name="parent_mlt_add"
                                            v-model="data.parent_mlt.add"
                                        ></b-form-input>
                                        <b-form-datalist
                                            id="parent_mlt_add"
                                            :options="recordData.parent_mlt"
                                            text-field="add"
                                        ></b-form-datalist>
                                    </b-form-group>
                                </b-col>
                            </b-row>

                            <hr>
                            <b-row class="mb-2">
                                <b-col cols="3">
                                    <label>Parental Material Thicknes (mm):</label>
                                </b-col>
                                <b-col>
                                    <b-form-checkbox
                                        name="butt_welds"
                                        v-model="data.butt_welds"
                                    >
                                        Butt Welds
                                    </b-form-checkbox>
                                    <br>
                                    <b-form-checkbox
                                        name="fillet_welds"
                                        v-model="data.fillet_welds"
                                    >
                                        Fillet Welds
                                    </b-form-checkbox>
                                </b-col>
                            </b-row>
                            <hr>


                            <b-row class="mb-2">
                                <b-col cols="3">
                                    <label>Weld Material Thickness (mm):</label>
                                </b-col>
                                <b-col>
                                    <b-form-group>
                                        <b-form-input
                                            name="weld_material_thickness"
                                            v-model="data.weld_material_thickness"
                                        ></b-form-input>
                                    </b-form-group>
                                </b-col>
                            </b-row>
                            <b-row class="mb-2">
                                <b-col cols="3">
                                    <label>Single Run/Multi Run:</label>
                                </b-col>
                                <b-col>
                                    <b-form-group>
                                        <b-form-input
                                            name="single_run"
                                            v-model="data.single_run"
                                        ></b-form-input>
                                    </b-form-group>
                                </b-col>
                            </b-row>
                            <b-row class="mb-2">
                                <b-col cols="3">
                                    <label>Throat Thickness (mm):</label>
                                </b-col>
                                <b-col>
                                    <b-form-group>
                                        <b-form-input
                                            name="throat_thickness"
                                            :value="throat_thickness"
                                        ></b-form-input>
                                    </b-form-group>
                                </b-col>
                            </b-row>
                            <b-row class="mb-2">
                                <b-col cols="3">
                                    <label>Outside Pipe / Boss Diameter(mm):</label>
                                </b-col>
                                <b-col>
                                    <b-form-group>
                                        <b-form-input
                                            name="outside_pipe"
                                            v-model="data.outside_pipe"
                                        ></b-form-input>
                                    </b-form-group>
                                </b-col>
                            </b-row>
                            <b-row class="mb-2">
                                <b-col cols="3">
                                    <label>Filler Material Make:</label>
                                </b-col>
                                <b-col>
                                    <b-form-group>
                                        <b-form-input
                                            name="filler_material_make"
                                            v-model="data.filler_material_make"
                                        ></b-form-input>
                                    </b-form-group>
                                </b-col>
                            </b-row>
                            <b-row class="mb-2">
                                <b-col cols="3">
                                    <label>Filler Material Size Range:</label>
                                </b-col>
                                <b-col>
                                    <b-form-group>
                                        <b-form-input
                                            name="filler_material_size_range"
                                            v-model="data.filler_material_size_range"
                                        ></b-form-input>
                                    </b-form-group>
                                </b-col>
                            </b-row>
                            <b-row class="mb-2">
                                <b-col cols="3">
                                    <label>Designation of Shielding Gas/Flux:</label>
                                </b-col>
                                <b-col>
                                    <b-form-group>
                                        <b-form-input
                                            list="designation_gas_flux_add"
                                            name="designation_gas_flux_add"
                                            v-model="data.designation_gas_flux.add"
                                        ></b-form-input>
                                        <b-form-datalist
                                            id="designation_gas_flux_add"
                                            :options="recordData.designation_gas_flux"
                                            text-field="add"
                                        ></b-form-datalist>
                                    </b-form-group>
                                </b-col>
                                <b-col cols="2">
                                    <b-form-input
                                        name="designation_gas_flux_range"
                                        :value="designation_gas_flux_range"
                                    ></b-form-input>
                                </b-col>
                            </b-row>
                            <b-row class="mb-2">
                                <b-col cols="3">
                                    <label>Designation of Backing Gas:</label>
                                </b-col>
                                <b-col>
                                    <b-form-group>
                                        <b-form-input
                                            list="designation_backing_gas"
                                            name="designation_backing_gas"
                                            v-model="data.designation_backing_gas.add"
                                        ></b-form-input>
                                        <b-form-datalist
                                            id="designation_backing_gas"
                                            :options="recordData.designation_backing_gas"
                                            text-field="add"
                                        ></b-form-datalist>
                                    </b-form-group>
                                </b-col>
                            </b-row>
                            <b-row class="mb-2">
                                <b-col cols="3">
                                    <label>Type of Welding Current and Polarity:</label>
                                </b-col>
                                <b-col>
                                    <b-form-group>
                                        <b-form-input
                                            list="type_welding_current_polarity"
                                            name="type_welding_current_polarity"
                                            v-model="data.type_welding_current_polarity"
                                        ></b-form-input>
                                        <b-form-datalist
                                            id="type_welding_current_polarity"
                                            :options="type_welding_current_polarity"
                                        ></b-form-datalist>
                                    </b-form-group>
                                </b-col>
                            </b-row>
                            <b-row class="mb-2">
                                <b-col cols="3">
                                    <label>Mode of Metal Transfer (MIG/MAG):</label>
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
                                            :options="recordData.metal_transfer"
                                            text-field="main"
                                        ></b-form-datalist>
                                    </b-form-group>
                                </b-col>
                            </b-row>
                            <b-row class="mb-2">
                                <b-col cols="3">
                                    <label>Welding Positions:</label>
                                </b-col>
                                <b-col>
                                    <b-form-group>
                                        <b-form-input
                                            list="welding_post_add"
                                            name="welding_post_add"
                                            v-model="data.welding_post.add"
                                        ></b-form-input>
                                        <b-form-datalist
                                            id="welding_post_add"
                                            :options="recordData.welding_post"
                                            text-field="add"
                                        ></b-form-datalist>
                                    </b-form-group>
                                </b-col>
                            </b-row>
                            <b-row class="mb-2">
                                <b-col cols="3">
                                    <label>Heat Input:</label>
                                </b-col>
                                <b-col>
                                    <b-form-group>
                                        <b-form-input
                                            name="heat_input"
                                            v-model="data.heat_input"
                                        ></b-form-input>
                                    </b-form-group>
                                </b-col>
                            </b-row>

                            <b-row class="mb-2">
                                <b-col cols="3">
                                    <label>Preheat Temperature °C (Min):</label>
                                </b-col>
                                <b-col>
                                    <b-form-group>
                                        <b-form-input
                                            name="interpass_min"
                                            :value="interpassMin"
                                        ></b-form-input>
                                    </b-form-group>
                                </b-col>
                            </b-row>
                            <b-row class="mb-2">
                                <b-col cols="3">
                                    <label>Interpass Temperature °C (Max):</label>
                                </b-col>
                                <b-col>
                                    <b-form-group>
                                        <b-form-input
                                            name="interpass_max"
                                            :value="interpassMax"
                                        ></b-form-input>
                                    </b-form-group>
                                </b-col>
                            </b-row>
                            <b-row class="mb-2">
                                <b-col cols="3">
                                    <label>Heat Treatment and/or Ageing</label>
                                </b-col>
                                <b-col>
                                    <b-form-group>
                                        <b-form-input
                                            name="heat_treatment"
                                            v-model="data.heat_treatment"
                                        ></b-form-input>
                                    </b-form-group>
                                </b-col>
                            </b-row>
                            <hr>
                            <b-row class="mb-2">
                                <b-col cols="3">
                                    <label>Other Information </label>
                                </b-col>
                            </b-row>
                            <b-row class="mb-2">
                                <b-col cols="3">
                                    <label>Lot Number:</label>
                                </b-col>
                                <b-col>
                                    <b-form-group>
                                        <b-form-input
                                            name="lot_number"
                                            v-model="data.lot_number"
                                        ></b-form-input>
                                    </b-form-group>
                                </b-col>
                            </b-row>
                            <hr>
                            <b-row class="mb-2">
                                <b-col cols="3">
                                    <label>Report no:</label>
                                </b-col>
                                <b-col>
                                    <b-form-group>
                                        <b-form-input
                                            name="report_no"
                                            v-model="data.report_no"
                                        ></b-form-input>
                                    </b-form-group>
                                </b-col>
                            </b-row>
                        </b-card-body>
                    </b-collapse>
                </b-card>

                <!-- Adding tables -->

                <b-card no-body class="mb-1">
                    <b-card-header header-tag="header" class="p-1" role="tab">
                        <b-button block v-b-toggle.accordion-5 variant="info">Tests Performed</b-button>
                    </b-card-header>
                    <b-collapse id="accordion-5" accordion="my-accordion" role="tabpanel">
                        <b-card-body>
                            <b-row>
                                <b-col cols="2">
                                    <label>Examiner/Test Body:</label>
                                </b-col>
                                <b-col>
                                    <b-form-group>
                                        <b-form-input
                                            name="examiner_test_body"
                                            v-model="data.examiner_test_body"
                                        ></b-form-input>
                                    </b-form-group>
                                </b-col>
                            </b-row>
                            <b-row>
                                <b-col cols="2">
                                    <label>NDT Ref No:</label>
                                </b-col>
                                <b-col>
                                    <b-form-group>
                                        <b-form-input
                                            name="ndf_ref_no"
                                            v-model="data.ndf_ref_no"
                                        ></b-form-input>
                                    </b-form-group>
                                </b-col>
                            </b-row>

                            <b-row>
                                <b-col cols="2">
                                    <label>Visual (add inf):</label>
                                </b-col>
                                <b-col>
                                    <b-form-group>
                                        <b-form-input
                                            name="visual"
                                            v-model="data.visual"
                                        ></b-form-input>
                                    </b-form-group>
                                </b-col>
                            </b-row>
                            <b-row>
                                <b-col cols="2">
                                    <label>Name of Examiner:</label>
                                </b-col>
                                <b-col>
                                    <b-form-group>
                                        <b-form-input
                                            name="name_examiner"
                                            v-model="data.name_examiner"
                                        ></b-form-input>
                                    </b-form-group>
                                </b-col>
                            </b-row>

                            <hr>

                            <b-row>
                                <b-col cols="2">
                                    <label>Viewing Conditions:</label>
                                </b-col>
                                <b-col>
                                    <b-form-group>
                                        <b-form-input
                                            name="viewing_conditions"
                                            v-model="data.viewing_conditions"
                                        ></b-form-input>
                                    </b-form-group>
                                </b-col>
                            </b-row>
                            <b-row>
                                <b-col cols="2">
                                    <label>Penetrant-Manufacture Type:</label>
                                </b-col>
                                <b-col cols="4">
                                    <b-form-group>
                                        <b-form-input
                                            name="penetrant_manufacture_type"
                                            v-model="data.penetrant_manufacture_type"
                                        ></b-form-input>
                                    </b-form-group>
                                </b-col>
                                <b-col cols="2">
                                    <label>Name of Examiner & PCN No:</label>
                                </b-col>
                                <b-col cols="4">
                                    <b-form-group>
                                        <b-form-input
                                            name="name_examiner"
                                            v-model="data.name_examiner"
                                        ></b-form-input>
                                    </b-form-group>
                                </b-col>
                            </b-row>
                            <b-row>
                                <b-col cols="2">
                                    <label>Develop-Manufacture Type:</label>
                                </b-col>
                                <b-col cols="4">
                                    <b-form-group>
                                        <b-form-input
                                            name="develop_manufacture"
                                            v-model="data.develop_manufacture"
                                        ></b-form-input>
                                    </b-form-group>
                                </b-col>
                                <b-col cols="2">
                                    <label>Detection Media:</label>
                                </b-col>
                                <b-col cols="4">
                                    <b-form-group>
                                        <b-form-input
                                            name="detection_media"
                                            v-model="data.detection_media"
                                        ></b-form-input>
                                    </b-form-group>
                                </b-col>
                            </b-row>
                            <b-row>
                                <b-col cols="2">
                                    <label>Remover-Manufacturer & Type:</label>
                                </b-col>
                                <b-col cols="4">
                                    <b-form-group>
                                        <b-form-input
                                            name="remover_manufacturer_type"
                                            v-model="data.remover_manufacturer_type"
                                        ></b-form-input>
                                    </b-form-group>
                                </b-col>
                                <b-col cols="2">
                                    <label>Detection Media, Contrast Paint:</label>
                                </b-col>
                                <b-col cols="4">
                                    <b-form-group>
                                        <b-form-input
                                            name="detection_media_contrast_paint"
                                            v-model="data.detection_media_contrast_paint"
                                        ></b-form-input>
                                    </b-form-group>
                                </b-col>
                            </b-row>

                            <hr>

                            <b-row>
                                <b-col cols="2">
                                    <label>Ultrasonic:</label>
                                </b-col>
                                <b-col cols="4">
                                    <b-form-group>
                                        <b-form-input
                                            name="ultrasonic"
                                            v-model="data.ultrasonic"
                                        ></b-form-input>
                                    </b-form-group>
                                </b-col>
                                <b-col cols="2">
                                    <label>Reference Block(s) Used:</label>
                                </b-col>
                                <b-col cols="4">
                                    <b-form-group>
                                        <b-form-input
                                            name="reference_blocks"
                                            v-model="data.reference_blocks"
                                        ></b-form-input>
                                    </b-form-group>
                                </b-col>
                            </b-row>
                            <b-row>
                                <b-col cols="2">
                                    <label>Procedure Number:</label>
                                </b-col>
                                <b-col cols="4">
                                    <b-form-group>
                                        <b-form-input
                                            name="procedure_number"
                                            v-model="data.procedure_number"
                                        ></b-form-input>
                                    </b-form-group>
                                </b-col>
                                <b-col cols="2">
                                    <label>Name of Examiner & PCN No:</label>
                                </b-col>
                                <b-col cols="4">
                                    <b-form-group>
                                        <b-form-input
                                            name="name_examiner_PCN"
                                            v-model="data.name_examiner_PCN"
                                        ></b-form-input>
                                    </b-form-group>
                                </b-col>
                            </b-row>
                            <b-row>
                                <b-col cols="2">
                                    <label>Probe(s) & Serial Number:</label>
                                </b-col>
                                <b-col cols="4">
                                    <b-form-group>
                                        <b-form-input
                                            name="probe_serial_number"
                                            v-model="data.probe_serial_number"
                                        ></b-form-input>
                                    </b-form-group>
                                </b-col>
                                <b-col cols="2">
                                    <label>Flaw Detection & Serial Number:</label>
                                </b-col>
                                <b-col cols="4">
                                    <b-form-group>
                                        <b-form-input
                                            name="flaw_detection_serial_number"
                                            v-model="data.flaw_detection_serial_number"
                                        ></b-form-input>
                                    </b-form-group>
                                </b-col>
                            </b-row>

                            <hr>

                            <b-row>
                                <b-col cols="2">
                                    <label>Tensile Test (add inf):</label>
                                </b-col>
                                <b-col cols="4">
                                    <b-form-group>
                                        <b-form-input
                                            name="tensile_test_add"
                                            v-model="data.tensile_test_add"
                                        ></b-form-input>
                                    </b-form-group>
                                </b-col>
                                <b-col cols="2">
                                    <label>Tensile Test:</label>
                                </b-col>
                                <b-col cols="4">
                                    <b-form-group>
                                        <b-form-input
                                            name="tensile_test"
                                            v-model="data.tensile_test"
                                        ></b-form-input>
                                    </b-form-group>
                                </b-col>
                            </b-row>
                            <b-row>
                                <b-col cols="2">
                                    <label>A:</label>
                                </b-col>
                                <b-col cols="4">
                                    <b-form-group>
                                        <b-form-input
                                            name="a_1"
                                            v-model="data.a_1"
                                        ></b-form-input>
                                    </b-form-group>
                                </b-col>
                                <b-col cols="2">
                                    <label>B:</label>
                                </b-col>
                                <b-col cols="4">
                                    <b-form-group>
                                        <b-form-input
                                            name="b_1"
                                            v-model="data.b_1"
                                        ></b-form-input>
                                    </b-form-group>
                                </b-col>
                            </b-row>
                            <b-row>
                                <b-col cols="2">
                                    <label>A (Thickness):</label>
                                </b-col>
                                <b-col cols="4">
                                    <b-form-group>
                                        <b-form-input
                                            name="a_thickness"
                                            v-model="data.a_thickness"
                                        ></b-form-input>
                                    </b-form-group>
                                </b-col>
                                <b-col cols="2">
                                    <label>B (Thickness):</label>
                                </b-col>
                                <b-col cols="4">
                                    <b-form-group>
                                        <b-form-input
                                            name="b_thickness"
                                            v-model="data.b_thickness"
                                        ></b-form-input>
                                    </b-form-group>
                                </b-col>
                            </b-row>
                            <b-row>
                                <b-col cols="2">
                                    <label>A (Width):</label>
                                </b-col>
                                <b-col cols="4">
                                    <b-form-group>
                                        <b-form-input
                                            name="a_width"
                                            v-model="data.a_width"
                                        ></b-form-input>
                                    </b-form-group>
                                </b-col>
                                <b-col cols="2">
                                    <label>B (Width):</label>
                                </b-col>
                                <b-col cols="4">
                                    <b-form-group>
                                        <b-form-input
                                            name="b_width"
                                            v-model="data.b_width"
                                        ></b-form-input>
                                    </b-form-group>
                                </b-col>
                            </b-row>
                            <b-row>
                                <b-col cols="2">
                                    <label>A (Maximim Force (KN)):</label>
                                </b-col>
                                <b-col cols="4">
                                    <b-form-group>
                                        <b-form-input
                                            name="a_maximum"
                                            v-model="data.a_maximum"
                                        ></b-form-input>
                                    </b-form-group>
                                </b-col>
                                <b-col cols="2">
                                    <label>B (Maximim Force (KN)):</label>
                                </b-col>
                                <b-col cols="4">
                                    <b-form-group>
                                        <b-form-input
                                            name="b_maximum"
                                            v-model="data.b_maximum"
                                        ></b-form-input>
                                    </b-form-group>
                                </b-col>
                            </b-row>

                            <hr>

                            <b-row>
                                <b-col cols="2">
                                    <label>Bend Tests (add inf):</label>
                                </b-col>
                                <b-col cols="10">
                                    <b-form-group>
                                        <b-form-input
                                            name="bend_tests"
                                            v-model="data.bend_tests"
                                        ></b-form-input>
                                    </b-form-group>
                                </b-col>
                            </b-row>
                            <b-row>
                                <b-col cols="2">
                                    <label>Thickness:</label>
                                </b-col>
                                <b-col cols="4">
                                    <b-form-group>
                                        <b-form-input
                                            name="thickness"
                                            v-model="data.thickness"
                                        ></b-form-input>
                                    </b-form-group>
                                </b-col>
                                <b-col cols="2">
                                    <label>Width:</label>
                                </b-col>
                                <b-col cols="4">
                                    <b-form-group>
                                        <b-form-input
                                            name="width"
                                            v-model="data.width"
                                        ></b-form-input>
                                    </b-form-group>
                                </b-col>
                            </b-row>

                            <b-row>
                                <b-col cols="2">
                                    <label>Dia of Former:</label>
                                </b-col>
                                <b-col cols="4">
                                    <b-form-group>
                                        <b-form-input
                                            name="dia_former"
                                            v-model="data.dia_former"
                                        ></b-form-input>
                                    </b-form-group>
                                </b-col>
                                <b-col cols="2">
                                    <label>Side:</label>
                                </b-col>
                                <b-col cols="4">
                                    <b-form-group>
                                        <b-form-input
                                            name="side"
                                            v-model="data.side"
                                        ></b-form-input>
                                    </b-form-group>
                                </b-col>
                            </b-row>
                            <b-row>
                                <b-col cols="2">
                                    <label>Angle of Bend:</label>
                                </b-col>
                                <b-col cols="4">
                                    <b-form-group>
                                        <b-form-input
                                            name="angle_bend"
                                            v-model="data.angle_bend"
                                        ></b-form-input>
                                    </b-form-group>
                                </b-col>
                                <b-col cols="2">
                                    <label>Face:</label>
                                </b-col>
                                <b-col cols="4">
                                    <b-form-group>
                                        <b-form-input
                                            name="face"
                                            v-model="data.face"
                                        ></b-form-input>
                                    </b-form-group>
                                </b-col>
                            </b-row>
                            <b-row>
                                <b-col cols="2">
                                    <label>Elongation:</label>
                                </b-col>
                                <b-col cols="4">
                                    <b-form-group>
                                        <b-form-input
                                            name="elongation"
                                            v-model="data.elongation"
                                        ></b-form-input>
                                    </b-form-group>
                                </b-col>
                                <b-col cols="2">
                                    <label>Root:</label>
                                </b-col>
                                <b-col cols="4">
                                    <b-form-group>
                                        <b-form-input
                                            name="root"
                                            v-model="data.root"
                                        ></b-form-input>
                                    </b-form-group>
                                </b-col>
                            </b-row>
                            <b-row>
                                <b-col cols="2">
                                    <label>Distance between Rollers:</label>
                                </b-col>
                                <b-col cols="10">
                                    <b-form-group>
                                        <b-form-input
                                            name="distance_between_rollers"
                                            v-model="data.distance_between_rollers"
                                        ></b-form-input>
                                    </b-form-group>
                                </b-col>
                            </b-row>

                            <hr>

                            <b-row>
                                <b-col cols="2">
                                    <label>Macro/Microscopic Test: (add inf)</label>
                                </b-col>
                                <b-col cols="10">
                                    <b-form-group>
                                        <b-form-input
                                            name="macro_microscopic_test_add"
                                            v-model="data.macro_microscopic_test_add"
                                        ></b-form-input>
                                    </b-form-group>
                                </b-col>
                            </b-row>
                            <b-row>
                                <b-col cols="2">
                                    <label>Macro/Microscopic Test:</label>
                                </b-col>
                                <b-col cols="10">
                                    <b-form-group>
                                        <b-form-input
                                            name="macro_microscopic_test"
                                            v-model="data.macro_microscopic_test"
                                        ></b-form-input>
                                    </b-form-group>
                                </b-col>
                            </b-row>
                            <b-row>
                                <b-col cols="2">
                                    <label>Etchant Type:</label>
                                </b-col>
                                <b-col cols="4">
                                    <b-form-group>
                                        <b-form-input
                                            name="etchant_type"
                                            v-model="data.etchant_type"
                                        ></b-form-input>
                                    </b-form-group>
                                </b-col>
                                <b-col cols="2">
                                    <label>Method:</label>
                                </b-col>
                                <b-col cols="4">
                                    <b-form-group>
                                        <b-form-input
                                            name="method"
                                            v-model="data.method"
                                        ></b-form-input>
                                    </b-form-group>
                                </b-col>
                            </b-row>

                            <b-row>
                                <b-col cols="2">
                                    <label>Location, Orientation & Examined Surface:</label>
                                </b-col>
                                <b-col cols="4">
                                    <b-form-group>
                                        <b-form-input
                                            name="orientation"
                                            v-model="data.orientation"
                                        ></b-form-input>
                                    </b-form-group>
                                </b-col>
                                <b-col cols="2">
                                    <label>Location, Orientation & Examined Surface: (add inf)</label>
                                </b-col>
                                <b-col cols="4">
                                    <b-form-group>
                                        <b-form-input
                                            name="orientation_add"
                                            v-model="data.orientation_add"
                                        ></b-form-input>
                                    </b-form-group>
                                </b-col>
                            </b-row>


                        </b-card-body>
                    </b-collapse>
                </b-card>

                <!-- Bottom information -->

                <b-card no-body class="mb-1">
                    <b-card-header header-tag="header" class="p-1" role="tab">
                        <b-button block v-b-toggle.accordion-6 variant="info">Bottom information</b-button>
                    </b-card-header>
                    <b-collapse id="accordion-6" accordion="my-accordion" role="tabpanel">
                        <b-card-body>
                            <b-row>
                                <b-col cols="2">
                                    <label for="input-default">Document number</label>
                                </b-col>
                                <b-col cols="5">
                                    <b-form-group>
                                        <b-form-input
                                            name="document_number1"
                                            v-model="clientData.document_number1"
                                        ></b-form-input>
                                    </b-form-group>
                                </b-col>
                                <b-col cols="5">
                                    <b-form-group>
                                        <b-form-input
                                            name="document_number2"
                                            v-model="clientData.document_number2"
                                        ></b-form-input>
                                    </b-form-group>
                                </b-col>
                            </b-row>
                            <hr>
                            <b-row>

                                <b-col>
                                    <label for="input-default">TEST WITHENESSED BY</label>
                                    <b-row class="my-1">
                                        <b-col cols="3">
                                            <label for="input-default">Name</label>
                                        </b-col>
                                        <b-col cols="9">
                                            <b-form-input
                                                v-model="clientData.withenessed_name"
                                                name="withenessed_name"
                                            ></b-form-input>
                                        </b-col>
                                    </b-row>
                                    <b-row class="my-1">
                                        <b-col cols="3">
                                            <label for="input-default">Position</label>
                                        </b-col>
                                        <b-col cols="9">
                                            <b-form-input
                                                v-model="clientData.withenessed_position"
                                                name="withenessed_position"
                                            ></b-form-input>
                                        </b-col>
                                    </b-row>
                                    <b-row class="my-1">
                                        <b-col cols="3">
                                            <label for="input-default">Date</label>
                                        </b-col>
                                        <b-col cols="9">
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
                                            <b-form-input
                                                v-model="clientData.behaulf_name"
                                                name="behaulf_name"></b-form-input>
                                        </b-col>
                                    </b-row>
                                    <b-row class="my-1">
                                        <b-col cols="3">
                                            <label for="input-default">Position</label>
                                        </b-col>
                                        <b-col cols="9">
                                            <b-form-input
                                                v-model="clientData.behaulf_position"
                                                name="behaulf_position"
                                            ></b-form-input>
                                        </b-col>
                                    </b-row>
                                    <b-row class="my-1">
                                        <b-col cols="3">
                                            <label for="input-default">Date</label>
                                        </b-col>
                                        <b-col cols="9">
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
                    <input v-if="$route.params.id" type="button" @click="updateData" value="Update data" class="button ml-1">
                    <input v-if="$route.params.id" type="button" @click="deleteData" value="Delete" class="button-red ml-1">
                    <a v-if="$route.params.id" href="/saves" class="button ml-2">Back</a>
                    <input v-else type="button" @click="saveData" value="Save data" class="button ml-1">
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
            recordData: {
                code_standard: [],
                designation_gas_flux: [],
                designation_backing_gas: [],
                welding_process: [],
                welding_process_2: [],
                joint_type_weld: [],
                parent_mlt: [],
                welding_post: [],
                preparation: [],
                metal_transfer: [],
                filler_mat_designation: [],
                filler_mat_designation_2: [],
                specification: []
            },
            record_type_current: [
                "DC+", "DC-", "AC"
            ],
            baking_drying: [
                "Not Applied",
                "Oven Baked",
                "Oven Baked"
            ],
            baking_gouging: [
                "Not Applied",
                "Back Gouged",
                "Back Grinded",
                "Machined",
                "Arc Aired"
            ],
            tungsten_type: [
                "NOT APPLICABLE",
                "Thoriated 2%",
                "Zirconiated 2%",
                "Lanthanated 2%"
            ],
            type_welding_current_polarity: [
                'DC-Direct Current Electrode Positive',
                'DC-Direct Current Electrode Negative',
                'DC-Direct Current Electrode Negative/Positive',
                'Alternative Current'
            ],
            data: {
                code_standard: "",
                issue_number: "",
                manufacturers_2_2: "",
                parent_mlt: {
                    main: "",
                    add: ""
                },
                heat_no: "",
                welding_process: {
                    main: "",
                    add: ""
                },
                welding_process_2: {
                    main: "",
                    add: ""
                },
                specification: "",
                metal_transfer: "",
                mtl_thickness: "",
                joint_type_weld: {
                    main: "",
                    add: ""
                },
                outside_diameter: "",
                preparation: "",
                welding_post: {
                    main: "",
                    add: ""
                },
                filler_metal_ds: "",
                filler_metal_ds_number: "",
                filler_metal_ds_2_number: "",
                filler_metal: "",
                baking_drying: "",
                baking_gouging: "",
                designation_gas_flux: {
                    main: "",
                    add: ""
                },
                isArg: "",
                arg: "",
                isCo2: "",
                co2: "",
                isO2: "",
                o2: "",
                isHe: "",
                he: "",
                preheat_temperature: "",
                flow_rate: "",
                interpass_temperature: "",
                designation_backing_gas: {
                    main: "",
                    add: ""
                },
                heating_treatment: "",
                tungsten_type: "",
                heating_cooling_rates: "",
                tungsten_size: "",
                touch_work: "",
                power_source: "",
                automatic_system: "",
                control: "",
                throat_thickness_size: "",
                records: [
                    {
                        record_process: "",
                        record_size: 0,
                        record_current_a: 0,
                        record_voltage_v: 0,
                        record_type_current: "",
                        record_type_transfer: "",
                        record_travel_speed: 0,
                        record_heat_input: ""
                    }
                ],
                manufacturers_2: "",
                manufacturer_1: "",
                manufacturer_2: "",
                manufacturer_3: "",
                ref_no: "",
                date_welder: "",
                date_welder_name: "",
                fillet_welds: false,
                butt_welds: false,
                weld_material_thickness: "",
                single_run: "",
                outside_pipe: "",
                filler_material_make: "",
                filler_material_size_range: "",
                type_welding_current_polarity: "",
                heat_input: "",
                heat_treatment: "",
                lot_number: "",
                report_no: "",
                examiner_test_body: "",
                ndf_ref_no: "",
                visual: "",
                name_examiner: "",
                viewing_conditions: "",
                penetrant_manufacture_type: "",
                name_examiner: "",
                develop_manufacture: "",
                detection_media: "",
                remover_manufacturer_type: "",
                detection_media_contrast_paint: "",
                ultrasonic: "",
                reference_blocks: "",
                procedure_number: "",
                name_examiner_PCN: "",
                probe_serial_number: "",
                flaw_detection_serial_number: "",
                tensile_test_add: "",
                tensile_test: "",
                a_1: "",
                b_1: "",
                a_thickness: "",
                b_thickness: "",
                a_width: "",
                b_width: "",
                a_maximum: "",
                b_maximum: "",
                bend_tests: "",
                thickness: "",
                width: "",
                dia_former: "",
                side: "",
                angle_bend: "",
                face: "",
                elongation: "",
                root: "",
                distance_between_rollers: "",
                macro_microscopic_test_add: "",
                macro_microscopic_test: "",
                etchant_type: "",
                method: "",
                orientation: "",
                orientation_add: ""
            },
            clientData: {
                document_number1: "",
                document_number2: "",
                withenessed_name: "",
                withenessed_position: "",
                withenessed_date: "",
                behaulf_name: "",
                behaulf_position: "",
                behaulf_date: ""
            }
        }
    },
    created() {
        this.getRecordData();
    },
    computed: {
        throat_thickness() {
            if(Number.isInteger(+this.data.throat_thickness_size)) {
                return (0.75 * +this.data.throat_thickness_size) + "mm - " + (1.5 * +this.data.throat_thickness_size) + "mm";
            } else {
                return "No Applicable";
            }
        },
        designation_gas_flux_range() {
            if(this.data.isCo2) {
                return ("(" + this.data.co2 - (this.data.co2 * 0.2)) + "% - " + (+this.data.co2 + (this.data.co2 * 0.2)) + "% CO2)"
            }
            if(this.data.isHe) {
                return ("(" + this.data.he - (this.data.he * 0.1)) + "% - " + (+this.data.co2 + (this.data.he * 0.1)) + "% He)"
            }
        },
        interpassMin() {
            if(this.data.preheat_temperature == "No Applicable") {
                return "Min 10°C";
            }
            if(this.data.preheat_temperature > 60) {
                return "Min " + (+this.data.preheat_temperature - 50) + "°C";
            } else {
                return "Min 10°C";
            }
        },
        interpassMax() {
            if(this.data.interpass_temperature == "No Applicable") {
                return "No Applicable";
            } else {
                return "Max " + (+this.data.interpass_temperature + 50) + "°C";
            }
        }
    },
    methods: {
        jointTypeWeld() {
            if(this.data.joint_type_weld.add.indexOf("Fillet") >= 0 && this.data.joint_type_weld.add.indexOf("Butt") >= 0) {
                this.data.fillet_welds = true;
                this.data.butt_welds = true;
            } else if(this.data.joint_type_weld.add.indexOf("Fillet") >= 0) {
                this.data.fillet_welds = true;
                this.data.butt_welds = false;
            } else if(this.data.joint_type_weld.add.indexOf("Butt") >= 0) {
                this.data.fillet_welds = false;
                this.data.butt_welds = true;
            } else {
                this.data.fillet_welds = false;
                this.data.butt_welds = false;
            }
        },
        recordHeatInput(index) {
            var result = 0;
            if(this.data.records[index].record_process == '141 TIG' || this.data.records[index].record_process == '141/136 TIG and FCAW') {
                result = (this.data.records[index].record_current_a * this.data.records[index].record_voltage_v / this.data.records[index].record_travel_speed * 0.001 * 0.6).toFixed(2);
            } else {
                result = (this.data.records[index].record_current_a * this.data.records[index].record_voltage_v / this.data.records[index].record_travel_speed * 0.001 * 0.8).toFixed(2);
            }
            result = !isNaN(result) && isFinite(result) ? result : 0;
            this.data.records[index].record_heat_input = result;

            if(this.data.fillet_welds && !this.data.butt_welds) {
                if(this.data.records.length == 1) {
                    this.data.filler_metal_ds_number = this.data.records[0].record_heat_input;
                }
                if(this.data.records.length > 1) {
                    let record_heat_input = this.data.records.map((el) => el.record_heat_input);
                    let max = Math.max.apply(null, record_heat_input);
                    let min = Math.min.apply(null, record_heat_input);
                    this.data.filler_metal_ds_number = (0.75 * min).toFixed(2) + "Kj/mm - " + max + "Kj/mm";
                }
            }
            if(!this.data.fillet_welds && this.data.butt_welds) {
                if(this.data.records.length == 1) {
                    this.data.filler_metal_ds_number = this.data.records[0].record_heat_input;
                }
                if(this.data.records.length > 1) {
                    let record_heat_input = this.data.records.map((el) => el.record_heat_input);
                    let max = Math.max.apply(null, record_heat_input);
                    let min = Math.min.apply(null, record_heat_input);
                    this.data.filler_metal_ds_number = (0.75 * min).toFixed(2) + "Kj/mm - " + (0.75 * max).toFixed(2) + "Kj/mm";
                }
            }

            if(this.data.fillet_welds && this.data.butt_welds) {
                let uniq_records = [];
                this.data.records.map((el) => {
                    if(el.record_process && !uniq_records.find((item) => item.record_process == el.record_process)) {
                        uniq_records.push(el)
                    }
                });
                if(uniq_records.length == 2) {
                    var valuesOne = this.record_heat_input(0, uniq_records);
                    this.data.filler_metal_ds_number = (0.75 * valuesOne.min).toFixed(2) + "Kj/mm - " + valuesOne.max + "Kj/mm";
                    var valuesTwo = this.record_heat_input(1, uniq_records);
                    this.data.filler_metal_ds_2_number = (0.75 * valuesTwo.min).toFixed(2) + "Kj/mm - " + (0.75 * valuesTwo.max).toFixed(2) + "Kj/mm";
                }
            }
            return result;
        },

        record_heat_input(index, uniq_records) {
            let result = {
                max: 0,
                min: 0
            }
            let arr = this.data.records.filter((f) => {
                return f.record_process == uniq_records[index].record_process
            }).map((el) => el.record_heat_input);
            result.max = Math.max.apply(null, arr);
            result.min = Math.min.apply(null, arr);
            return result;
        },

        getRecordData() {
            axios.get('/api/record-data').then(response => {
                Object.assign(this.recordData, response.data);
            })
            if(this.$route.params.id) {
                axios.get('/api/record/'+this.$route.params.id).then(response => {
                    this.clientData = Object.assign(this.clientData, response.data.client);
                    this.data = Object.assign(this.data, response.data.data);
                })
            }
        },

        setElement(event, array) {
            var result = this.recordData[array].find((item) => {
                return item.main == event;
            })
            if(result) {
                this.data[array].add = result.add
            } else {
                this.data[array].add = ""
            }
        },

        addRecords() {
            this.data.records.push(
                {
                    record_process: "",
                    record_size: 0,
                    record_current_a: 0,
                    record_voltage_v: 0,
                    record_type_current: "",
                    record_type_transfer: "",
                    record_travel_speed: 0,
                    record_heat_input: ""
                }
            )
        },
        delRecords(index) {
            this.data.records.splice(index, 1);
        },
        saveData() {
            axios.post('/api/record', {
                data: this.data,
                client: this.clientData
            }).then((response) => {
                swal({
                    icon: 'success',
                    text: `Saved`
                });
            }).catch((error) => {
                swal({
                    icon: "error",
                    text: 'Error'
                });
            });
        },
        updateData() {
            axios.post('/api/record/'+this.$route.params.id, {
                data: this.data,
                client: this.clientData
            }).then((response) => {
                swal({
                    icon: 'success',
                    text: `Updated`
                });
            }).catch((error) => {
                swal({
                    icon: "error",
                    text: 'Error'
                });
            });
        },
        deleteData() {
            swal({
                title: "Do you want to delete?",
                icon: "warning"
            }).then((willDelete) => {
                if (willDelete) {
                    axios.post('/api/del-record/'+this.$route.params.id).then((response) => {
                        window.location.href = '/saves';
                    }).catch((error) => {
                        swal({
                            icon: "error",
                            text: 'Error'
                        });
                    });
                }
            });
        }
    }
}
</script>
<style lang="css" scoped>
    .cursor {
        cursor: pointer;
    }
</style>
