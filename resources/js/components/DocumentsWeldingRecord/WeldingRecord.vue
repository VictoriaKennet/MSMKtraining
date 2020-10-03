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
                                            :options="recordData.specification"
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
                                            v-model="data.parent_mlt.main"
                                            @change="setElement($event, 'parent_mlt')"
                                        ></b-form-input>
                                        <b-form-datalist
                                            id="specification"
                                            :options="recordData.parent_mlt"
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
                                            list="designation_gas_flux"
                                            name="designation_gas_flux"
                                            v-model="data.designation_gas_flux.main"
                                            @change="setElement($event, 'designation_gas_flux')"
                                        ></b-form-input>
                                        <b-form-datalist
                                            id="designation_gas_flux"
                                            :options="recordData.designation_gas_flux"
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
                                <b-col>
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
                                <b-col>
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
                                <b-col>
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
                                        :value="recordHeatInput(index)"
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
                            <b-row>
                                <b-col cols="3">
                                    <label>Ref No:</label>
                                </b-col>
                                <b-col>
                                    <b-form-group>
                                        <b-form-input
                                            name="ref_no"
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
                                        name="date_welderT"
                                        id="datepicker-placeholder"
                                        placeholder="Choose a date"
                                        local="en"
                                    ></b-form-datepicker>
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
                            <b-row class="mb-2">
                                <b-col cols="3">
                                    <label>Parental Material Thickness (mm):</label>
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
                            <b-row class="mb-2">
                                <b-col cols="3">
                                    <label>Weld Material Thickness (mm):</label>
                                </b-col>
                                <b-col>
                                    <b-form-group>
                                        <b-form-input
                                            name="weld_material_thickness"
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
                                        ></b-form-input>
                                    </b-form-group>
                                </b-col>
                            </b-row>
                            <b-row class="mb-2">
                                <b-col cols="3">
                                    <label>Filler Material Designation:</label>
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
                            <b-row class="mb-2">
                                <b-col cols="3">
                                    <label>Filler Material Make:</label>
                                </b-col>
                                <b-col>
                                    <b-form-group>
                                        <b-form-input
                                            name="filler_material_make"
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
                            </b-row>
                            <b-row class="mb-2">
                                <b-col cols="3">
                                    <label>Designation of Backing Gas:</label>
                                </b-col>
                                <b-col>
                                    <b-form-group>
                                        <b-form-input
                                            name="designation_backing_gas"
                                        ></b-form-input>
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
                                            name="type_welding_current"
                                        ></b-form-input>
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
                                        ></b-form-input>
                                    </b-form-group>
                                </b-col>
                            </b-row>
                            <b-row class="mb-2">
                                <b-col cols="3">
                                    <label>Interpass Temperature°C (Max):</label>
                                </b-col>
                                <b-col>
                                    <b-form-group>
                                        <b-form-input
                                            name="interpass_max"
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
                                    <label>Trade name:</label>
                                </b-col>
                                <b-col>
                                    <b-form-group>
                                        <b-form-input
                                            name="trade_name"
                                        ></b-form-input>
                                    </b-form-group>
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
                                        ></b-form-input>
                                    </b-form-group>
                                </b-col>
                            </b-row>

                            <hr>

                            <b-row class="mb-2">
                                <b-col cols="3">
                                    <label>Test House and Report No:</label>
                                </b-col>
                                <b-col>
                                    <b-form-group>
                                        <b-form-input
                                            name="test_house_report"
                                        ></b-form-input>
                                    </b-form-group>
                                </b-col>
                            </b-row>
                            <b-row class="mb-2">
                                <b-col cols="3">
                                    <label>Report no:</label>
                                </b-col>
                                <b-col>
                                    <b-form-group>
                                        <b-form-input
                                            name="report_no"
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
                                        ></b-form-input>
                                    </b-form-group>
                                </b-col>
                                <b-col cols="2">
                                    <label>Flaw Detection & Serial Number:</label>
                                </b-col>
                                <b-col cols="4">
                                    <b-form-group>
                                        <b-form-input
                                            name="flaw_detection_serial_number:"
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
                                            list="document-number1"
                                            name="document_number1"
                                            v-model="clientData.document_number1"
                                        ></b-form-input>
                                    </b-form-group>
                                </b-col>
                                <b-col cols="5">
                                    <b-form-group>
                                        <b-form-input
                                            list="document-number2"
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
            recordData: {
                code_standard: [],
                designation_gas_flux: [],
                welding_process: [],
                joint_type_weld: [],
                parent_mlt: [],
                welding_post: [],
                preparation: [],
                metal_transfer: [],
                filler_mat_designation: []
            },
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
                welding_process: {
                    main: "",
                    add: ""
                },
                parent_mlt: {
                    main: "",
                    add: ""
                },
                welding_post: {
                    main: "",
                    add: ""
                },
                joint_type_weld: {
                    main: "",
                    add: ""
                },
                designation_gas_flux: {
                    main: "",
                    add: ""
                },

                metal_transfer: "",
                parent_material: "",
                code_standard: "",
                preparation: "",


                specification:"",
                filler_metal_ds:"",
                filler_metal:"",
                baking_drying:"",
                baking_gouging:"",
                shielding_gas_type:"",
                purging_gas_type:"",
                tungsten_type:"",
                records: [
                    {
                        record_process: "",
                        record_size: 0,
                        record_current_a: 0,
                        record_voltage_v: 0,
                        record_type_current: "",
                        record_type_transfer: "",
                        record_travel_speed: "",
                        record_heat_input: ""
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
    created() {
        this.getRecordData();
    },
    methods: {
        recordHeatInput(index) {
            if(this.data.records[index].record_process == '141 TIG' || this.data.records[index].record_process == '141/136 TIG and FCAW') {
                this.data.records[index].record_heat_input = this.data.records[index].record_current_a * this.data.records[index].record_voltage_v * 0.001 * 0.6;
                return this.data.records[index].record_heat_input;
            } else {
                this.data.records[index].record_heat_input = this.data.records[index].record_current_a * this.data.records[index].record_voltage_v * 0.001 * 0.8;
                return this.data.records[index].record_heat_input;
            }
        },

        getRecordData() {
            axios.get('/api/record-data').then(response => {
                Object.assign(this.recordData, response.data);
                console.log(response.data)
            })
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
