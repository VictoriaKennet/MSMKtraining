<template>
<div>
    <b-container>
      <div role="tablist">
            <form action="/pdf" target="_blank" method="POST" enctype="multipart/form-data">
                <b-card no-body class="mb-1">
                    <b-card-header header-tag="header" class="p-1" role="tab">
                        <b-button block v-b-toggle.accordion-1 variant="info">Main information</b-button>
                    </b-card-header>
                    <b-collapse id="accordion-1" visible accordion="my-accordion" role="tabpanel">
                        <b-card-body>
                            <b-row>
                                <b-col>
                                    <b-form-group label="Welder's name">
                                        <b-form-input placeholder="Enter welder's name" name="name">
                                        </b-form-input>
                                    </b-form-group>

                                    <!-- /Поле ввода  -->
                                    <b-form-group label="Identification">
                                        <b-form-input placeholder="Enter identification" name="identification">
                                        </b-form-input>
                                    </b-form-group>

                                    <!-- /Поле ввода  -->
                                    <b-form-group label="Employer">
                                        <b-form-input placeholder="Choose employer" list="employer" id="input-with-list" name="employer"></b-form-input>
                                        <b-form-datalist id="employer" :options="employer">
                                        </b-form-datalist>
                                    </b-form-group>

                                    <!-- /Поле ввода  -->
                                    <b-form-group label="Code/testing standard">
                                        <b-form-input placeholder="Choose testing standard" list="testing-standard" id="input-with-list" name="testing_standard"></b-form-input>
                                        <b-form-datalist id="testing-standard" :options="testing_standard">
                                        </b-form-datalist>
                                    </b-form-group>

                                    <!-- /Поле ввода  -->
                                    <b-form-group label="Job knowledge">
                                        <b-form-input placeholder="Choose job knowledge" list="job-knowledge" id="input-with-list" name="job_knowledge"></b-form-input>
                                        <b-form-datalist id="job-knowledge" :options="job_knowledge">
                                        </b-form-datalist>
                                    </b-form-group>
                                </b-col>

                                <b-col>
                                    <b-form-group>
                                        <b-img src="./user.png" fluid class="img_size" id="image"></b-img>
                                        <b-form-file
                                            name="photo"
                                            v-model="photo"
                                            placeholder="Choose a file or drop it"
                                            drop-placeholder="Drop file here"
                                            @change="previewFiles"
                                        ></b-form-file>
                                    </b-form-group>

                                    <!-- /Поле ввода  -->
                                    <b-form-group label="Test Ref / Certificate No">
                                        <b-form-input name = "test_ref" placeholder="Enter Test Ref No">
                                        </b-form-input>
                                    </b-form-group>

                                    <!-- /Поле ввода  -->
                                    <b-form-group label="LR Control No">
                                        <b-form-input name = "lr_control" placeholder="Enter LR Control No">
                                        </b-form-input>
                                    </b-form-group>
                                </b-col>
                            </b-row>
                        </b-card-body>
                    </b-collapse>
                </b-card>

                <b-card no-body class="mb-1">
                    <b-card-header header-tag="header" class="p-1" role="tab">
                        <b-button block v-b-toggle.accordion-2 variant="info">Data for a table</b-button>
                    </b-card-header>
                    <b-collapse id="accordion-2" accordion="my-accordion" role="tabpanel">
                        <b-card-body>
                            <!-- Выпадающий список wps reference -->
                            <b-form-group label="WPS-Reference">
                                <b-form-input list="wps-reference" id="input-with-list" name="wps_reference" @change="test($event)"></b-form-input>
                                <b-form-datalist id="wps-reference" :options="data" text-field="name">
                                </b-form-datalist>
                            </b-form-group>
                            <hr>
                            <b-row class="centre">
                                <b-col cols="3">
                                    <label for="input-default">Name</label>
                                </b-col>
                                <b-col cols="4">
                                    <label for="input-default">Test piece</label>
                                </b-col>
                                <b-col cols="5">
                                    <label for="input-default">Range of qualification</label>
                                </b-col>
                            </b-row>
                            <hr>
                            <b-row>
                                <b-col cols="3">
                                    <label for="input-default">Welding processe(es)</label>
                                </b-col>
                                <b-col cols="4">
                                    <b-form-group>
                                        <b-form-input name="welding_processes_test" list="welding-processes" id="input-with-list" :value="wps.welding_processes.test"></b-form-input>
                                        <b-form-datalist id="welding-processes" :options="welding_processes" text-field="test"></b-form-datalist>
                                    </b-form-group>
                                </b-col>
                                <b-col cols="5">
                                    <b-form-group>
                                        <b-form-input name="welding_processes_range" list="welding-processes" id="input-with-list" :value="wps.welding_processes.range"></b-form-input>
                                        <b-form-datalist id="welding-processes" :options="welding_processes" text-field="range"></b-form-datalist>
                                    </b-form-group>
                                </b-col>
                            </b-row>
                            <hr>
                            <b-row>
                                <b-col cols="3">
                                    <label for="input-default">Transfer mode</label>
                                </b-col>
                                <b-col cols="4">
                                    <b-form-group>
                                        <b-form-input name="transfer_mode_test" list="transfer-mode-test" id="input-with-list" @change="setElement($event, 'transfer_mode', 'transfer_mode_range')"></b-form-input>
                                        <b-form-datalist id="transfer-mode-test" :options="transfer_mode" text-field="test"></b-form-datalist>
                                    </b-form-group>
                                </b-col>
                                <b-col cols="5">
                                    <b-form-group>
                                        <b-form-input name="transfer_mode_range" list="transfer-mode-range" id="input-with-list" :value="transfer_mode_range"></b-form-input>
                                        <b-form-datalist id="transfer-mode-range" :options="transfer_mode" text-field="range"></b-form-datalist>
                                    </b-form-group>
                                </b-col>
                            </b-row>
                            <hr>
                            <b-row>
                                <b-col cols="3">
                                    <label for="input-default">Product type <br>(plate or pipe)</label>
                                </b-col>
                                <b-col cols="4">
                                    <b-form-group>
                                        <b-form-input name="product_type_test" list="product-type" id="input-with-list" :value="wps.product_type.test"></b-form-input>
                                        <b-form-datalist id="product-type" :options="product_type" text-field="test"></b-form-datalist>
                                    </b-form-group>
                                </b-col>
                                <b-col cols ="5">
                                    <b-form-group>
                                        <b-form-input name="product_type_range" list="product-type" id="input-with-list" :value="wps.product_type.range"></b-form-input>
                                        <b-form-datalist id="product-type" :options="product_type" text-field="range"></b-form-datalist>
                                    </b-form-group>
                                </b-col>
                            </b-row>
                            <hr>
                            <b-row>
                                <b-col cols ="3">
                                    <label for="input-default">Type of weld</label>
                                </b-col>
                                <b-col cols ="4">
                                    <b-form-group>
                                        <b-form-input name="type_of_weld_test" list="type-weld" id="input-with-list" :value="wps.type_of_weld.test"></b-form-input>
                                        <b-form-datalist id="type-weld" :options="type_of_weld" text-field="test"></b-form-datalist>
                                    </b-form-group>
                                </b-col>
                                <b-col cols ="5">
                                    <b-form-group>
                                        <b-form-input name="type_of_weld_range" list="type-weld" id="input-with-list" :value="wps.type_of_weld.range"></b-form-input>
                                        <b-form-datalist id="type-weld" :options="type_of_weld" text-field="range"></b-form-datalist>
                                    </b-form-group>
                                </b-col>
                            </b-row>
                            <hr>
                            <b-row>
                                <b-col cols ="3">
                                    <label for="input-default">Parent material group(s)/subgrps</label>
                                </b-col>
                                <b-col cols ="4">
                                    <b-form-group>
                                        <b-form-input name="parent_material_group_test" list="parent-material-group" id="input-with-list" :value="wps.parent_material_group.test"></b-form-input>
                                        <b-form-datalist id="parent-material-group" :options="parent_material_group" text-field="test"></b-form-datalist>
                                    </b-form-group>
                                </b-col>
                                <b-col cols ="5">
                                    <b-form-group>
                                        <b-form-input name="parent_material_group_range" list="parent-material-group" id="input-with-list" :value="wps.parent_material_group.range"></b-form-input>
                                        <b-form-datalist id="parent-material-group" :options="parent_material_group" text-field="range"></b-form-datalist>
                                    </b-form-group>
                                </b-col>
                            </b-row>
                            <hr>
                            <b-row>
                                <b-col cols ="3">
                                    <label for="input-default">Filler material groups(s)</label>
                                </b-col>
                                <b-col cols ="4">
                                    <b-form-group>
                                        <b-form-input name="filler_material_group_test" list="filler-material-group" id="input-with-list" :value="wps.filler_material_group.test"></b-form-input>
                                        <b-form-datalist id="filler-material-group" :options="filler_material_group" text-field="test"></b-form-datalist>
                                    </b-form-group>
                                </b-col>
                                <b-col cols="5">
                                    <b-form-group>
                                        <b-form-input name="filler_material_group_range" list="filler-material-group" id="input-with-list" :value="wps.filler_material_group.range"></b-form-input>
                                        <b-form-datalist id="filler-material-group" :options="filler_material_group" text-field="range"></b-form-datalist>
                                    </b-form-group>
                                </b-col>
                            </b-row>
                            <hr>
                            <b-row>
                                <b-col cols="3">
                                    <label for="input-default">Filler material ( Designation)</label>
                                </b-col>
                                <b-col cols="4">
                                    <b-row class="m-20">
                                        <b-col cols="5">
                                            <label for="input-default">Process 1</label>
                                        </b-col>
                                        <b-col cols="7">
                                            <b-form-input name="process_data_test_1" list="process_data_1" id="input-with-list" :value="wps.filler_material_designation[0].process.test"></b-form-input>
                                            <b-form-datalist id="process_data_1" :options="process_data" text-field="test"></b-form-datalist>
                                        </b-col>
                                    </b-row>
                                    <b-row >
                                        <b-col cols="5">
                                            <label for="input-default">Process 2</label>
                                        </b-col>
                                        <b-col cols="7">
                                            <b-form-input name="process_data_test_2" list="process-data-2-test-1" id="input-with-list" :value="wps.filler_material_designation[1].process.test"></b-form-input>
                                            <b-form-datalist id="process-data-2-test-2" :options="process_data" text-field="test"></b-form-datalist>
                                        </b-col>
                                    </b-row>
                                </b-col>
                                <b-col>
                                    <b-form-group class="m-20">
                                        <b-form-input name="process_data_range_1" list="process-data-2-range-1" id="input-with-list" :value="wps.filler_material_designation[0].process.range"></b-form-input>
                                        <b-form-datalist id="process-data-2-range-1" :options="process_data" text-field="range"></b-form-datalist>
                                    </b-form-group>
                                    <b-form-group>
                                        <b-form-input name="process_data_range_2" list="process-data-2-range-2" id="input-with-list" :value="wps.filler_material_designation[1].process.range"></b-form-input>
                                        <b-form-datalist id="process-data-2-range-2" :options="process_data" text-field="range"></b-form-datalist>
                                    </b-form-group>
                                </b-col>
                            </b-row>
                            <hr>
                            <b-row>
                                <b-col cols="3">
                                    <label for="input-default">Shielding gas</label>
                                </b-col>
                                <b-col cols="4">
                                    <b-form-group>
                                        <b-form-input name="shielding_gas_test" list="shielding-gas-test" id="input-with-list" @change="setElement($event, 'shielding_gas', 'shielding_gas_range')"></b-form-input>
                                        <b-form-datalist id="shielding-gas-test" :options="shielding_gas" text-field="test"></b-form-datalist>
                                    </b-form-group>
                                </b-col>
                                <b-col cols="5">
                                    <b-form-group>
                                        <b-form-input name="shielding_gas_range" list="shielding-gas-range" id="input-with-list" :value="shielding_gas_range"></b-form-input>
                                        <b-form-datalist id="shielding-gas-range" :options="shielding_gas" text-field="range"></b-form-datalist>
                                    </b-form-group>
                                </b-col>
                            </b-row>
                            <hr>
                            <b-row>
                                <b-col cols="3">
                                    <label for="input-default">Type of current and polarity</label>
                                </b-col>
                                <b-col cols="4">
                                    <b-form-group>
                                        <b-form-input name="type_polarity_test" list="type-polarity-test" id="input-with-list" @change="setElement($event, 'type_polarity', 'type_polarity_range')"></b-form-input>
                                        <b-form-datalist id="type-polarity-test" :options="type_polarity" text-field="test"></b-form-datalist>
                                    </b-form-group>
                                </b-col>
                                <b-col cols="5">
                                    <b-form-group>
                                        <b-form-input name="type_polarity_range" list="type-polarity-range" id="input-with-list" :value="type_polarity_range"></b-form-input>
                                        <b-form-datalist id="type-polarity-range" :options="type_polarity" text-field="range"></b-form-datalist>
                                    </b-form-group>
                                </b-col>
                            </b-row>
                            <hr>
                            <b-row>
                                <b-col cols="3">
                                    <label for="input-default">Material thickness(mm)</label>
                                </b-col>
                                <b-col cols="4">
                                    <b-form-group>
                                            <b-form-input name="material_thickness"></b-form-input>
                                    </b-form-group>
                                </b-col>
                                <b-col cols="5">
                                    <b-row>
                                        <b-col cols="5">
                                            <b-form-group>
                                                <b-form-input name="material_thickness_numb1"></b-form-input>
                                            </b-form-group>
                                        </b-col>
                                        <b-col cols="2">
                                            <p class="centre">To</p>
                                        </b-col>
                                        <b-col cols="5">
                                            <b-form-group>
                                                <b-form-input name="material_thickness_numb2"></b-form-input>
                                            </b-form-group>
                                        </b-col>
                                    </b-row>
                                </b-col>
                            </b-row>
                            <hr>
                            <b-row>
                                <b-col cols="3">
                                    <label for="input-default">Deposited thickness(mm)</label>
                                </b-col>
                                <b-col cols="4">
                                    <b-row class="m-20">
                                        <b-col cols="4">
                                            <label for="input-default">Process 1</label>
                                        </b-col>
                                        <b-col cols="3">
                                            <p class="centre">Root</p>
                                        </b-col>
                                        <b-col cols="5">
                                            <b-form-input name="deposited_thickness_root" list="process" id="input-with-list"></b-form-input>
                                            <b-form-datalist id="process"></b-form-datalist>
                                        </b-col>
                                    </b-row>
                                    <b-row>
                                        <b-col cols="4">
                                            <label for="input-default">Process 2</label>
                                        </b-col>
                                        <b-col cols="3">
                                            <p class="centre">Rest</p>
                                        </b-col>
                                        <b-col cols="5">
                                            <b-form-input name="deposited_thickness_rest" list="process" id="input-with-list"></b-form-input>
                                            <b-form-datalist id="process"></b-form-datalist>
                                        </b-col>
                                    </b-row>
                                </b-col>
                                <b-col>
                                    <b-row>
                                        <b-col cols="5">
                                            <b-form-group>
                                                <b-form-input name="deposited_thickness_root_num_1"></b-form-input>
                                            </b-form-group>
                                        </b-col>
                                        <b-col cols="2">
                                            <p class="centre">To</p>
                                        </b-col>
                                        <b-col cols="5">
                                            <b-form-group>
                                                <b-form-input name="deposited_thickness_root_num_2"></b-form-input>
                                            </b-form-group>
                                        </b-col>
                                    </b-row>
                                    <b-row>
                                        <b-col cols="5" class="m-20">
                                            <b-form-group>
                                                <b-form-input name="deposited_thickness_rest_num_1"></b-form-input>
                                            </b-form-group>
                                        </b-col>
                                        <b-col cols="2">
                                            <p class="centre">To</p>
                                        </b-col>
                                        <b-col cols="5">
                                            <b-form-group>
                                                <b-form-input name="deposited_thickness_rest_num_2"></b-form-input>
                                            </b-form-group>
                                        </b-col>
                                    </b-row>
                                </b-col>
                            </b-row>
                            <hr>
                            
                            <b-row>
                                <b-col cols="3">
                                    <label for="input-default">Outside pipe diameter(mm)</label>
                                </b-col>
                                <b-col cols="4">
                                    <b-form-group>
                                            <b-form-input name="outside_pipe_diameter"> </b-form-input>
                                        </b-form-group>
                                </b-col>
                                <b-col cols="5">
                                    <b-row>
                                        <b-col cols="4">
                                            <b-form-group>
                                                <b-form-input>
                                                </b-form-input>
                                            </b-form-group>
                                        </b-col>
                                        <b-col cols="4">
                                            <b-form-group>
                                                <b-form-input>
                                                </b-form-input>
                                            </b-form-group>
                                        </b-col>
                                        <b-col cols="4">
                                            <b-form-group>
                                                <b-form-input>
                                                </b-form-input>
                                            </b-form-group>
                                        </b-col>
                                    </b-row>
                                </b-col>
                            </b-row>
                            <hr>
                            <b-row>
                                <b-col cols="3">
                                    <label for="input-default">Welding position</label>
                                </b-col>
                                <b-col cols="4">
                                    <b-form-group>
                                        <b-form-input name="welding_position_test" list="welding-position-test" id="input-with-list" @change="setElement($event, 'welding_position', 'welding_position_range')"></b-form-input>
                                        <b-form-datalist id="welding-position-test" :options="welding_position" text-field="test"></b-form-datalist>
                                    </b-form-group>
                                </b-col>
                                <b-col cols="5">
                                    <b-form-group>
                                        <b-form-input name="welding_position_range" list="welding-position-range" id="input-with-list" :value="welding_position_range"></b-form-input>
                                        <b-form-datalist id="welding-position-range" :options="welding_position" text-field="range"></b-form-datalist>
                                    </b-form-group>
                                </b-col>
                            </b-row>
                            <hr>
                            <b-row>
                                <b-col cols="3">
                                    <label for="input-default">Weld details</label>
                                </b-col>
                                <b-col cols="4">
                                    <b-form-group>
                                        <b-form-input name="welding_details_test" list="welding-details-test" id="input-with-list" @change="setElement($event, 'welding_details', 'welding_details_range')"></b-form-input>
                                        <b-form-datalist id="welding-details-test" :options="welding_details" text-field="test"></b-form-datalist>
                                    </b-form-group>
                                </b-col>
                                <b-col cols="5">
                                    <b-form-group>
                                        <b-form-input name="welding_details_range" list="welding-details-range" id="input-with-list" :value="welding_details_range"></b-form-input>
                                        <b-form-datalist id="welding-details-range" :options="welding_details" text-field="range"></b-form-datalist>
                                    </b-form-group>
                                </b-col>
                            </b-row>
                            <hr>
                            <b-row>
                                <b-col cols="3">
                                    <label for="input-default">Multi-layer/single layer</label>
                                </b-col>
                                <b-col cols="4">
                                    <b-form-group>
                                        <b-form-input name="single_layer_test" list="single-layer-test" id="input-with-list"></b-form-input>
                                        <b-form-datalist id="single-layer-test"></b-form-datalist>
                                    </b-form-group>
                                </b-col>
                                <b-col cols="5">
                                    <b-form-group>
                                        <b-form-input name="single_layer_range" list="single-layer-range" id="input-with-list"></b-form-input>
                                        <b-form-datalist id="single-layer-renge"></b-form-datalist>
                                    </b-form-group>
                                </b-col>
                            </b-row>
                            <hr>

                        </b-card-body>
                    </b-collapse>
                </b-card>

                <b-card no-body class="mb-1">
                    <b-card-header header-tag="header" class="p-1" role="tab">
                        <b-button block v-b-toggle.accordion-3 variant="info">Aditional information</b-button>
                    </b-card-header>
                    <b-collapse id="accordion-3" accordion="my-accordion" role="tabpanel">
                        <b-card-body>
                            <b-row>
                                <b-col>
                                    <b-form-group label="Using sub-components:">
                                        <b-form-checkbox-group id="checkbox-group-2" stacked name="flavour-2">
                                        <b-form-checkbox>Default</b-form-checkbox>
                                        <b-form-checkbox>Default</b-form-checkbox>
                                        <b-form-checkbox>Default</b-form-checkbox>
                                        </b-form-checkbox-group>
                                    </b-form-group>

                                    <!-- /Выпадающий список wps reference -->
                                    <label for="input-default">TEST WITHENESSED BY</label>
                                    <b-row class="my-1">
                                        <b-col sm="3">
                                            <label for="input-default">Name</label>
                                        </b-col>
                                        <b-col sm="9">
                                            <b-form-input list="input-list" id="input-with-list"></b-form-input>
                                            <b-form-datalist id="input-list"></b-form-datalist>
                                        </b-col>
                                    </b-row>
                                    <b-row class="my-1">
                                        <b-col sm="3">
                                            <label for="input-default">Position</label>
                                        </b-col>
                                        <b-col sm="9">
                                            <b-form-input list="input-list" id="input-with-list"></b-form-input>
                                            <b-form-datalist id="input-list"></b-form-datalist>
                                        </b-col>
                                    </b-row>
                                    <b-row class="my-1">
                                        <b-col sm="3">
                                            <label for="input-default">Date</label>
                                        </b-col>
                                        <b-col sm="9">
                                            <label for="datepicker-placeholder">Date picker with placeholder</label>
                                            <b-form-datepicker id="datepicker-placeholder" placeholder="Choose a date" local="en"></b-form-datepicker>
                                        </b-col>
                                    </b-row>
                                </b-col>

                                <b-col>
                                    <b-form-group label="Using sub-components:" class="border_bt">
                                        <b-form-checkbox-group id="checkbox-group-2" stacked name="flavour-2">
                                        <b-form-checkbox >Default</b-form-checkbox>
                                        <b-form-checkbox>Default</b-form-checkbox>
                                        </b-form-checkbox-group>
                                    </b-form-group>

                                    <!-- /Выпадающий список wps reference -->
                                    <label for="input-default">FOR AND OR BEHAULF OF MSMK TRAINING LTD</label>
                                    <b-row class="my-1">
                                        <b-col sm="3">
                                            <label for="input-default">Name</label>
                                        </b-col>
                                        <b-col sm="9">
                                            <b-form-input list="input-list" id="input-with-list"></b-form-input>
                                            <b-form-datalist id="input-list"></b-form-datalist>
                                        </b-col>
                                    </b-row>
                                    <b-row class="my-1">
                                        <b-col sm="3">
                                            <label for="input-default">Position</label>
                                        </b-col>
                                        <b-col sm="9">
                                            <b-form-input list="input-list" id="input-with-list"></b-form-input>
                                            <b-form-datalist id="input-list"></b-form-datalist>
                                        </b-col>
                                    </b-row>
                                    <b-row class="my-1">
                                        <b-col sm="3">
                                            <label for="input-default">Date</label>
                                        </b-col>
                                        <b-col sm="9">
                                            <label for="datepicker-placeholder">Date picker with placeholder</label>
                                            <b-form-datepicker id="datepicker-placeholder-2" placeholder="Choose a date" local="en"></b-form-datepicker>
                                        </b-col>
                                    </b-row>
                                </b-col>
                            </b-row>
                        </b-card-body>
                    </b-collapse>
                </b-card>
                <input type="submit" value="Открыть PDF">
            </form>
        </div>
    <div>
        <form action="/pdf" target="_blank" method="POST" enctype="multipart/form-data">
            <input type="file" name="photo" /><br>

            <input type="submit" value="Открыть PDF">
        </form>
    </div>
    </b-container>
</div>
</template>
<script>
export default {
    data() {
        return {
            employer:['Cornelius Ltd', 'Self Employer'],
            testing_standard:['BS EN 9606-1', 'BS EN 9606-2', 'GL 2007'],
            job_knowledge:['Tested', 'Not Tested'],

            shielding_gas_range: "",
            transfer_mode_range: "",
            type_polarity_range: "",
            welding_position_range:"",
            welding_details_range: "",

            fields: ['Name', 'Test piece', 'Range of qualification'],
            data: [],
            parent_material_group: [],
            product_type: [],
            transfer_mode: [],
            type_of_weld: [],
            type_polarity: [],
            filler_material_group: [],
            filler_material_designation: [],
            shielding_gas: [],
            welding_position:[],
            welding_details:[],
            welding_processes:[],
            process_data: [],
            photo: null,
            selected: false,
            wpsDefault: {
                name: "",
                filler_material_designation: [
                    {
                        process_number: "",
                        process: {
                            range: "",
                            test: ""
                        }
                    },
                    {
                        process_number: "",
                        process: {
                            range: "",
                            test: ""
                        }
                    }
                ],
                filler_material_group: {
                    range: "",
                    test: ""
                },
                parent_material_group: {
                    range: "",
                    test: ""
                },
                product_type: {
                    range: "",
                    test: ""
                },
                type_of_weld: {
                    range: "",
                    test: ""
                },
                welding_processes: {
                    range: "",
                    test: ""
                }
            },
            wps: {}
        }
    },
    created() {
        this.wps = Object.assign({}, this.wpsDefault);
        this.getData();
        this.getParentMaterialGroup();
        this.productType();
        this.transferMode();
        this.typeWeld();
        this.fillerMaterialGroup();
        this.fillerMaterialDesignation();
        this.shieldingGas();
        this.typePolarity();
        this.weldingPosition();
        this.weldingDetails();
        this.weldingProcesses();
        this.process();
    },
    methods: {
        setElement(event, array, range) {
            var result = this[array].find((item) => {
                return item.test == event;
            })
            result ? this[range] = result.range : this[range] = "";
        },
        previewFiles(event) {
            if (event) {
                var reader = new FileReader();
                reader.onload = function (e) {
                    document.getElementById("image").setAttribute('src', e.target.result);
                };
                reader.readAsDataURL(event.target.files[0]);
            }
        },
        test(value) {
            let result = this.data.find((item) => {
                return item.name == value;
            })
            result ? this.wps = result : this.wps = this.wpsDefault;
        },
        getData() {
            axios.get('/api/wps').then(response => {
                console.log(response.data)
                this.data = response.data;
            })
        },
        getParentMaterialGroup() {
            axios.get('/api/parent-material-group').then(response => {
                this.parent_material_group = response.data;
            })
        },
        productType() {
            axios.get('/api/product-type').then(response => {
                this.product_type = response.data;
            })
        },
        transferMode() {
            axios.get('/api/transfer-mode').then(response => {
                this.transfer_mode = response.data;
            })
        },
        typeWeld() {
            axios.get('/api/type-weld').then(response => {
                this.type_of_weld = response.data;
            })
        },
        fillerMaterialGroup() {
            axios.get('/api/filler-material-group').then(response => {
                this.filler_material_group = response.data;
            })
        },
        fillerMaterialDesignation() {
            axios.get('/api/filler-material-designation').then(response => {
                this.filler_material_designation = response.data;
            })
        },
        shieldingGas() {
            axios.get('/api/shielding-gas').then(response => {
                this.shielding_gas = response.data;
            })
        },
        typePolarity() {
            axios.get('/api/type-polarity').then(response => {
                this.type_polarity = response.data;
            })
        },
        weldingPosition() {
            axios.get('/api/welding-position').then(response => {
                this.welding_position = response.data;
            })
        },
        weldingDetails() {
            axios.get('/api/welding-details').then(response => {
                this.welding_details = response.data;
            })
        },
        weldingProcesses() {
            axios.get('/api/welding-processes').then(response => {
                console.log(response.data)
                this.welding_processes = response.data;
            })
        },
        process() {
            axios.get('/api/process').then(response => {
                this.process_data = response.data;
            })
        },
    }
};
</script>
<style>
  .img_size {
    height: 150px;
    display: block;
    margin: 0 auto 10% auto;
    }
  .border_bt {
    margin-bottom: 40px;
  }
  .m-25 {
    margin-bottom: 25px;
  }
  .m-20 {
    margin-bottom: 20px;
  }
  .centre {
      text-align: center;
  }
</style>
