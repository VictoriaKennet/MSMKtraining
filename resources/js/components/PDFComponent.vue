<template>
<div>
	<div style="display:none">
		<div class="profile-modal-photo box-modal">
            <div class="box-modal_close arcticmodal-close"></div>
            <div>
            <img class="profile_photo_i" src="">
            </div>
            <div class="modal-footer center-wrap">
                <b-button class="js-main-image">Save</b-button>
            </div>
        </div>
	</div>
    <b-modal id="my-modal" size="lg" hide-footer v-model="modalShow">
        <b-row>
            <b-col>
                <b-form-group label="Test">
                    <b-form-input list="new-test" v-model="newElement.test"></b-form-input>
                    <b-form-datalist id="new-test" :options="data[newElement.selectArray]" text-field="test">
                    </b-form-datalist>
                </b-form-group>
            </b-col>
            <b-col>
                <b-form-group label="Range">
                    <b-form-input list="new-test" v-model="newElement.range"></b-form-input>
                    <b-form-datalist id="new-test" :options="data[newElement.selectArray]" text-field="range">
                    </b-form-datalist>
                </b-form-group>
            </b-col>
        </b-row>
        <b-button class="mt-3" @click="addElement">Save</b-button>
        <b-button class="mt-3" @click="modalShow = false">Close</b-button>
    </b-modal>

    <b-container class="mt-2 mb-2">
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
                                        <b-form-input placeholder="Choose employer" list="employer" name="employer"></b-form-input>
                                        <b-form-datalist id="employer" :options="employer">
                                        </b-form-datalist>
                                    </b-form-group>

                                    <!-- /Поле ввода  -->
                                    <b-form-group label="Code/testing standard">
                                        <b-form-input placeholder="Choose testing standard" list="testing-standard" name="testing_standard"></b-form-input>
                                        <b-form-datalist id="testing-standard" :options="testing_standard">
                                        </b-form-datalist>
                                    </b-form-group>

                                    <!-- /Поле ввода  -->
                                    <b-form-group label="Job knowledge">
                                        <b-form-input placeholder="Choose job knowledge" list="job-knowledge" name="job_knowledge"></b-form-input>
                                        <b-form-datalist id="job-knowledge" :options="job_knowledge">
                                        </b-form-datalist>
                                    </b-form-group>
                                </b-col>

                                <b-col>
                                    <b-img src="./user.png" fluid class="img_size perscab-photoedit-img" id="image"></b-img>
                                    <b-row>
                                        <b-col cols="8">
                                            <b-form-group>
                                                <b-form-file
                                                    ref="fileinput"
                                                    id="fileinput"
                                                    name="photo"
                                                    placeholder="Choose a file or drop it"
                                                    drop-placeholder="Drop file here"
                                                ></b-form-file>
                                            </b-form-group>
                                            <input name="photo_c" id="fileinput_c" multiple="false" type="hidden" value="">
                                        </b-col>
                                        <b-col cols="4">
                                            <b-button class="w-100" @click="deletePhoto">Delete photo</b-button>
                                        </b-col>
                                    </b-row>

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
                        <b-button block v-b-toggle.accordion-2 variant="info">Data for the table</b-button>
                    </b-card-header>
                    <b-collapse id="accordion-2" accordion="my-accordion" role="tabpanel">
                        <b-card-body>
                            <!-- Выпадающий список wps reference -->
                            <b-row>
                                <b-col cols="10">
                                    <b-form-group label="WPS-Reference">
                                        <b-form-input list="wps-reference" name="wps_reference" @change="setWPS($event)"></b-form-input>
                                        <b-form-datalist id="wps-reference" :options="data.wps_reference" text-field="name">
                                        </b-form-datalist>
                                    </b-form-group>
                                </b-col>
                                <b-col cols="1">
                                    <router-link to="/added">
                                        <b-icon icon="plus-circle-fill" class="icon_plus" font-scale="2"></b-icon>
                                    </router-link>
                                </b-col>
                                <b-col cols="1" v-if="wps.id">
                                    <router-link :to="'/edit/'+wps.id">
                                        <b-icon icon="pencil-square" class="icon_plus" font-scale="2"></b-icon>
                                    </router-link>
                                </b-col>
                            </b-row>
                            <hr>
                            <b-row>
                                <b-col cols="3">
                                    <label for="input-default">Designation</label>
                                </b-col>
                                <b-col cols="3">
                                    <b-form-group>
                                        <b-form-input name="header_1" list="main-header-1" :value="wps.header.test" @change="setElementWPS($event, 'header')"></b-form-input>
                                        <b-form-datalist id="main-header-1" :options="data.header" text-field="test"></b-form-datalist>
                                    </b-form-group>
                                </b-col>
                                <b-col cols="3">
                                    <b-form-group>
                                        <b-form-input name="header_2" list="main-header-2" :value="'t'+material_thickness"></b-form-input>
                                    </b-form-group>
                                </b-col>
                                <b-col cols="3">
                                    <b-form-group>
                                        <b-form-input name="header_3" list="main-header-3" :value="wps.header.range"></b-form-input>
                                        <b-form-datalist id="main-header-3" :options="data.header" text-field="range"></b-form-datalist>
                                    </b-form-group>
                                </b-col>
                            </b-row>
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
                                        <b-form-input name="welding_processes_test" list="welding-processes" :value="wps.welding_processes.test" @change="setElementWPS($event, 'welding_processes')"></b-form-input>
                                        <b-form-datalist id="welding-processes" :options="data.welding_processes" text-field="test"></b-form-datalist>
                                    </b-form-group>
                                </b-col>
                                <b-col cols="5">
                                    <b-form-group>
                                        <b-form-input name="welding_processes_range" list="welding-processes" :value="wps.welding_processes.range"></b-form-input>
                                        <b-form-datalist id="welding-processes" :options="data.welding_processes" text-field="range"></b-form-datalist>
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
                                        <b-form-input name="transfer_mode_test" list="transfer-mode-test" @change="setElement($event, 'transfer_mode', 'transfer_mode_range')"></b-form-input>
                                        <b-form-datalist id="transfer-mode-test" :options="data.transfer_mode" text-field="test"></b-form-datalist>
                                    </b-form-group>
                                </b-col>
                                <b-col cols="4">
                                    <b-form-group>
                                        <b-form-input name="transfer_mode_range" list="transfer-mode-range" :value="transfer_mode_range"></b-form-input>
                                        <b-form-datalist id="transfer-mode-range" :options="data.transfer_mode" text-field="range"></b-form-datalist>
                                    </b-form-group>
                                </b-col>
                                <b-col cols="1">
                                    <b-icon icon="plus-circle-fill" style="margin-top: 5px" font-scale="2" v-b-modal.my-modal @click="newElement.selectArray = 'transfer_mode'"></b-icon>
                                </b-col>
                            </b-row>
                            <hr>
                            <b-row>
                                <b-col cols="3">
                                    <label for="input-default">Product type <br>(plate or pipe)</label>
                                </b-col>
                                <b-col cols="4">
                                    <b-form-group>
                                        <b-form-input name="product_type_test" list="product-type" :value="wps.product_type.test" @change="setElementWPS($event, 'product_type')"></b-form-input>
                                        <b-form-datalist id="product-type" :options="data.product_type" text-field="test"></b-form-datalist>
                                    </b-form-group>
                                </b-col>
                                <b-col cols ="5">
                                    <b-form-group>
                                        <b-form-input name="product_type_range" list="product-type" :value="wps.product_type.range"></b-form-input>
                                        <b-form-datalist id="product-type" :options="data.product_type" text-field="range"></b-form-datalist>
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
                                        <b-form-input name="type_of_weld_test" list="type-weld" v-model="wps.type_of_weld.test" @change="setElementWPS($event, 'type_of_weld')"></b-form-input>
                                        <b-form-datalist id="type-weld" :options="data.type_of_weld" text-field="test"></b-form-datalist>
                                    </b-form-group>
                                </b-col>
                                <b-col cols ="5">
                                    <b-form-group>
                                        <b-form-input name="type_of_weld_range" list="type-weld" :value="wps.type_of_weld.range"></b-form-input>
                                        <b-form-datalist id="type-weld" :options="data.type_of_weld" text-field="range"></b-form-datalist>
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
                                        <b-form-input name="parent_material_group_test" list="parent-material-group" :value="wps.parent_material_group.test" @change="setElementWPS($event, 'parent_material_group')"></b-form-input>
                                        <b-form-datalist id="parent-material-group" :options="data.parent_material_group" text-field="test"></b-form-datalist>
                                    </b-form-group>
                                </b-col>
                                <b-col cols ="5">
                                    <b-form-group>
                                        <b-form-input name="parent_material_group_range" list="parent-material-group" :value="wps.parent_material_group.range"></b-form-input>
                                        <b-form-datalist id="parent-material-group" :options="data.parent_material_group" text-field="range"></b-form-datalist>
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
                                        <b-form-input name="filler_material_group_test" list="filler-material-group" :value="wps.filler_material_group.test" @change="setElementWPS($event, 'filler_material_group')"></b-form-input>
                                        <b-form-datalist id="filler-material-group" :options="data.filler_material_group" text-field="test"></b-form-datalist>
                                    </b-form-group>
                                </b-col>
                                <b-col cols="5">
                                    <b-form-group>
                                        <b-form-input name="filler_material_group_range" list="filler-material-group" :value="wps.filler_material_group.range"></b-form-input>
                                        <b-form-datalist id="filler-material-group" :options="data.filler_material_group" text-field="range"></b-form-datalist>
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
                                            <b-form-input name="process_data_test_1" list="process_data_1" :value="wps.filler_material_designation[0].process.test" @change="setElementWPSProcess($event, 'process_data', 0)"></b-form-input>
                                            <b-form-datalist id="process_data_1" :options="data.process_data" text-field="test"></b-form-datalist>
                                        </b-col>
                                    </b-row>
                                    <b-row>
                                        <b-col cols="5">
                                            <label for="input-default">Process 2</label>
                                        </b-col>
                                        <b-col cols="7">
                                            <b-form-input name="process_data_test_2" list="process_data_2" :value="wps.filler_material_designation[1].process.test" @change="setElementWPSProcess($event, 'process_data', 1)"></b-form-input>
                                            <b-form-datalist id="process_data_2" :options="data.process_data" text-field="test"></b-form-datalist>
                                        </b-col>
                                    </b-row>
                                </b-col>
                                <b-col>
                                    <b-form-group class="m-20">
                                        <b-form-input name="process_data_range_1" list="process-data-2-range-1" :value="wps.filler_material_designation[0].process.range"></b-form-input>
                                        <b-form-datalist id="process-data-2-range-1" :options="data.process_data" text-field="range"></b-form-datalist>
                                    </b-form-group>
                                    <b-form-group>
                                        <b-form-input name="process_data_range_2" list="process-data-2-range-2" :value="wps.filler_material_designation[1].process.range"></b-form-input>
                                        <b-form-datalist id="process-data-2-range-2" :options="data.process_data" text-field="range"></b-form-datalist>
                                    </b-form-group>
                                </b-col>
                                <b-col cols="1">
                                    <b-icon icon="plus-circle-fill" style="margin-top: 5px" font-scale="2" v-b-modal.my-modal @click="newElement.selectArray = 'process_data'"></b-icon>
                                </b-col>
                            </b-row>
                            <hr>
                            <b-row>
                                <b-col cols="3">
                                    <label for="input-default">Shielding gas</label>
                                </b-col>
                                <b-col cols="4">
                                    <b-form-group>
                                        <b-form-input name="shielding_gas_test" list="shielding-gas-test" @change="setElement($event, 'shielding_gas', 'shielding_gas_range')"></b-form-input>
                                        <b-form-datalist id="shielding-gas-test" :options="data.shielding_gas" text-field="test"></b-form-datalist>
                                    </b-form-group>
                                </b-col>
                                <b-col cols="4">
                                    <b-form-group>
                                        <b-form-input name="shielding_gas_range" list="shielding-gas-range" :value="shielding_gas_range"></b-form-input>
                                        <b-form-datalist id="shielding-gas-range" :options="data.shielding_gas" text-field="range"></b-form-datalist>
                                    </b-form-group>
                                </b-col>
                                <b-col cols="1">
                                    <b-icon icon="plus-circle-fill" style="margin-top: 5px" font-scale="2" v-b-modal.my-modal @click="newElement.selectArray = 'shielding_gas'"></b-icon>
                                </b-col>
                            </b-row>
                            <hr>
                            <b-row>
                                <b-col cols="3">
                                    <label for="input-default">Type of current and polarity</label>
                                </b-col>
                                <b-col cols="4">
                                    <b-form-group>
                                        <b-form-input name="type_polarity_test" list="type-polarity-test" @change="setElement($event, 'type_polarity', 'type_polarity_range')"></b-form-input>
                                        <b-form-datalist id="type-polarity-test" :options="data.type_polarity" text-field="test"></b-form-datalist>
                                    </b-form-group>
                                </b-col>
                                <b-col cols="4">
                                    <b-form-group>
                                        <b-form-input name="type_polarity_range" list="type-polarity-range" :value="type_polarity_range"></b-form-input>
                                        <b-form-datalist id="type-polarity-range" :options="data.type_polarity" text-field="range"></b-form-datalist>
                                    </b-form-group>
                                </b-col>
                                <b-col cols="1">
                                    <b-icon icon="plus-circle-fill" style="margin-top: 5px" font-scale="2" v-b-modal.my-modal @click="newElement.selectArray = 'type_polarity'"></b-icon>
                                </b-col>
                            </b-row>
                            <hr>
                            <b-row>
                                <b-col cols="3">
                                    <label for="input-default">Material thickness(mm)</label>
                                </b-col>
                                <b-col cols="4">
                                    <b-form-group>
                                        <b-form-input name="material_thickness" v-model="material_thickness"></b-form-input>
                                    </b-form-group>
                                </b-col>
                                <b-col cols="5">
                                    <b-row>
                                        <b-col cols="8">
                                            <b-form-group>
                                                <b-form-input :disabled="all_thickness" name="material_thickness_numb" list="material-thickness-numb" :value="materialThicknessNumb"></b-form-input>
                                                <b-form-datalist id="material-thickness-numb"></b-form-datalist>
                                                <!-- <b-form-input name="material_thickness_numb1"  :value="materialThicknessNumb" :option="material_thickness_list"></b-form-input> -->
                                            </b-form-group>
                                        </b-col>
                                        <b-col cols="4">
                                            <b-form-checkbox name="all_thickness" v-model="all_thickness">All Thickness</b-form-checkbox>
                                        </b-col>
                                        <!-- <b-col cols="5">
                                            <b-form-group>
                                                <b-form-input name="material_thickness_numb2"  :value="materialThicknessNumb2"></b-form-input>
                                            </b-form-group>
                                        </b-col>  -->
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
                                        <b-col cols="4">
                                            <b-form-input name="deposited_deposit1" list="deposited-deposit1"></b-form-input>
                                            <b-form-datalist id="deposited-deposit1" :options="deposit"></b-form-datalist>
                                        </b-col>
                                        <b-col cols="4">
                                            <b-form-input name="deposited_thickness_root" list="process" :disabled="applicable_1" v-model="deposited_thickness_root"></b-form-input>
                                            <b-form-datalist id="process"></b-form-datalist>
                                        </b-col>
                                    </b-row>
                                    <b-row>
                                        <b-col cols="4">
                                            <label for="input-default">Process 2</label>
                                        </b-col>
                                        <b-col cols="4">
                                            <b-form-input name="deposited_deposit2" list="deposited-deposit2"></b-form-input>
                                            <b-form-datalist id="deposited-deposit2" :options="deposit"></b-form-datalist>
                                        </b-col>
                                        <b-col cols="4">
                                            <b-form-input name="deposited_thickness_rest" list="process" :disabled="applicable_2" v-model="deposited_thickness_rest"></b-form-input>
                                            <b-form-datalist id="process"></b-form-datalist>
                                        </b-col>
                                    </b-row>
                                </b-col>
                                <b-col>
                                    <b-row>
                                        <b-col cols="3">
                                            <b-form-group>
                                                <b-form-input name="deposited_thickness_root_num_1" :disabled="applicable_1" :value="depositedThicknessRootNum1"></b-form-input>
                                                <!-- <b-form-input name="material_thickness_numb1"  :value="materialThicknessNumb" :option="material_thickness_list"></b-form-input> -->
                                            </b-form-group>
                                        </b-col>
                                        <b-col cols="3">
                                            <b-form-group>
                                                <b-form-input name="deposited_thickness_root_num_2" :disabled="applicable_1" :value="depositedThicknessRootNum2"></b-form-input>
                                                <!-- <b-form-input name="material_thickness_numb1"  :value="materialThicknessNumb" :option="material_thickness_list"></b-form-input> -->
                                            </b-form-group>
                                        </b-col>
                                        <b-col cols="5">
                                            <b-form-checkbox name="applicable_1" v-model="applicable_1">Not Applicable</b-form-checkbox>
                                        </b-col>
                                    </b-row>
                                    <b-row>
                                        <b-col cols="3">
                                            <b-form-group>
                                                <b-form-input name="deposited_thickness_rest_num_1" :disabled="applicable_2" :value="depositedThicknessRestNum1"></b-form-input>
                                                <!-- <b-form-input name="material_thickness_numb1"  :value="materialThicknessNumb" :option="material_thickness_list"></b-form-input> -->
                                            </b-form-group>
                                        </b-col>
                                        <b-col cols="3">
                                            <b-form-group>
                                                <b-form-input name="deposited_thickness_rest_num_2" :disabled="applicable_2" :value="depositedThicknessRestNum2"></b-form-input>
                                                <!-- <b-form-input name="material_thickness_numb1"  :value="materialThicknessNumb" :option="material_thickness_list"></b-form-input> -->
                                            </b-form-group>
                                        </b-col>
                                        <b-col cols="5">
                                            <b-form-checkbox name="applicable_2" v-model="applicable_2">Not Applicable</b-form-checkbox>
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
                                            <b-form-input name="outside_pipe_diameter" v-model="outside_pipe_diameter"></b-form-input>
                                        </b-form-group>
                                </b-col>
                                <b-col cols="5">
                                    <b-row>
                                        <b-col cols="4">
                                            <b-form-group>
                                                <b-form-input name="outside_pipe_diameter_1" :value="outsidePipeDiameter1"></b-form-input>
                                            </b-form-group>
                                        </b-col>
                                        <b-col cols="4">
                                            <b-form-group>
                                                <b-form-input name="outside_pipe_diameter_2" :value="outsidePipeDiameter2"></b-form-input>
                                            </b-form-group>
                                        </b-col>
                                        <b-col cols="4">
                                            <b-form-group>
                                                <b-form-input name="outside_pipe_diameter_3" :value="outsidePipeDiameter3"></b-form-input>
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
                                        <b-form-input name="welding_position_test" list="welding-position-test" @change="setElement($event, 'welding_position', 'welding_position_range')"></b-form-input>
                                        <b-form-datalist id="welding-position-test" :options="data.welding_position" text-field="test"></b-form-datalist>
                                    </b-form-group>
                                </b-col>
                                <b-col cols="4">
                                    <b-form-group>
                                        <b-form-input name="welding_position_range" list="welding-position-range" :value="welding_position_range"></b-form-input>
                                        <b-form-datalist id="welding-position-range" :options="data.welding_position" text-field="range"></b-form-datalist>
                                    </b-form-group>
                                </b-col>
                                <b-col cols="1">
                                    <b-icon icon="plus-circle-fill" style="margin-top: 5px" font-scale="2" v-b-modal.my-modal @click="newElement.selectArray = 'welding_position'"></b-icon>
                                </b-col>
                            </b-row>
                            <hr>
                            <b-row>
                                <b-col cols="3">
                                    <label for="input-default">Weld details</label>
                                </b-col>
                                <b-col cols="4">
                                    <b-form-group>
                                        <b-form-input name="welding_details_test" list="welding-details-test" @change="setElement($event, 'welding_details', 'welding_details_range')"></b-form-input>
                                        <b-form-datalist id="welding-details-test" :options="data.welding_details" text-field="test"></b-form-datalist>
                                    </b-form-group>
                                </b-col>
                                <b-col cols="4">
                                    <b-form-group>
                                        <b-form-input name="welding_details_range" list="welding-details-range" :value="welding_details_range"></b-form-input>
                                        <b-form-datalist id="welding-details-range" :options="data.welding_details" text-field="range"></b-form-datalist>
                                    </b-form-group>
                                </b-col>
                                <b-col cols="1">
                                    <b-icon icon="plus-circle-fill" style="margin-top: 5px" font-scale="2" v-b-modal.my-modal @click="newElement.selectArray = 'welding_details'"></b-icon>
                                </b-col>
                            </b-row>
                            <hr>
                            <b-row>
                                <b-col cols="3">
                                    <label for="input-default">Multi-layer/single layer</label>
                                </b-col>
                                <b-col cols="4">
                                    <b-form-group>
                                        <b-form-input name="single_layer_test" list="single-layer-test" :value="singleLayerTest"></b-form-input>
                                        <b-form-datalist id="single-layer-test"></b-form-datalist>
                                    </b-form-group>
                                </b-col>
                                <b-col cols="5">
                                    <b-form-group>
                                        <b-form-input name="single_layer_range" list="single-layer-range" :value="singleLayerRange"></b-form-input>
                                        <b-form-datalist id="single-layer-renge"></b-form-datalist>
                                    </b-form-group>
                                </b-col>
                            </b-row>
                            <hr>
                            <b-row>
                                <b-col cols="7">
                                    <label for="input-default">Supplementary fillet weld test (completed in conjunction with a butt weld qualification):</label>
                                </b-col>
                                <b-col cols="5">
                                    <b-form-group>
                                        <b-form-input name="weld_test" list="weld-test"></b-form-input>
                                        <b-form-datalist id="weld-test" :options="job_knowledge"></b-form-datalist>
                                    </b-form-group>
                                </b-col>
                            </b-row>
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
                                <b-col cols="2">
                                    <label for="input-default">Document number</label>
                                </b-col>
                                <b-col>
                                    <b-form-group>
                                        <b-form-input list="document-number1" name="document_number1" :value="document_number1"> {{document_number1}} </b-form-input>
                                        <b-form-datalist id="document-number1" text-field="name">
                                        </b-form-datalist>
                                    </b-form-group>
                                </b-col>
                                <b-col>
                                    <b-form-group>
                                        <b-form-input list="document-number2" name="document_number2" :value="document_number2"> {{document_number1}} </b-form-input>
                                        <b-form-datalist id="document-number2" text-field="name">
                                        </b-form-datalist>
                                    </b-form-group>
                                </b-col>
                            </b-row>
                            <hr>
                            <b-row>
                                <b-col>
                                    <b-form-group>
                                        <b-form-checkbox name="visual_examination">Visual Examination of Completed Weld</b-form-checkbox>
                                        <b-form-checkbox name="transverse_bends">Transverse bends root and face (6.5.2.3)</b-form-checkbox>
                                        <b-form-checkbox name="specimen_macro">Specimen Macro test for fusion</b-form-checkbox>
                                    </b-form-group>
                                </b-col>
                                <b-col>
                                    <b-form-group>
                                        <b-form-checkbox name="transverse_side">Transverse side bend specimen (6.5.2.3)</b-form-checkbox>
                                        <b-form-checkbox name="ultrasonic_examination">Ultrasonic Examination (6.5.2.1)</b-form-checkbox>
                                    </b-form-group>
                                </b-col>
                            </b-row>
                            <b-row>
                                <b-col>
                                    <label for="input-default">TEST WITHENESSED BY</label>
                                    <b-row class="my-1">
                                        <b-col cols="3">
                                            <label for="input-default">Name</label>
                                        </b-col>
                                        <b-col cols="9">
                                            <b-form-input name="withenessed_name" list="input-list"></b-form-input>
                                            <b-form-datalist id="input-list"></b-form-datalist>
                                        </b-col>
                                    </b-row>
                                    <b-row class="my-1">
                                        <b-col cols="3">
                                            <label for="input-default">Position</label>
                                        </b-col>
                                        <b-col cols="9">
                                            <b-form-input name="withenessed_position" list="input-list"></b-form-input>
                                            <b-form-datalist id="input-list"></b-form-datalist>
                                        </b-col>
                                    </b-row>
                                    <b-row class="my-1">
                                        <b-col cols="3">
                                            <label for="input-default">Date</label>
                                        </b-col>
                                        <b-col cols="9">
                                            <label for="datepicker-placeholder">Date picker with placeholder</label>
                                            <b-form-datepicker name="withenessed_date" id="datepicker-placeholder" placeholder="Choose a date" local="en"></b-form-datepicker>
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
                                            <b-form-input name="behaulf_name" list="input-list"></b-form-input>
                                            <b-form-datalist id="input-list"></b-form-datalist>
                                        </b-col>
                                    </b-row>
                                    <b-row class="my-1">
                                        <b-col cols="3">
                                            <label for="input-default">Position</label>
                                        </b-col>
                                        <b-col cols="9">
                                            <b-form-input name="behaulf_position" list="input-list"></b-form-input>
                                            <b-form-datalist id="input-list"></b-form-datalist>
                                        </b-col>
                                    </b-row>
                                    <b-row class="my-1">
                                        <b-col cols="3">
                                            <label for="input-default">Date</label>
                                        </b-col>
                                        <b-col cols="9">
                                            <label for="datepicker-placeholder">Date picker with placeholder</label>
                                            <b-form-datepicker name="behaulf_date" id="datepicker-placeholder-2" placeholder="Choose a date" local="en"></b-form-datepicker>
                                        </b-col>
                                    </b-row>
                                </b-col>
                            </b-row>
                        </b-card-body>
                    </b-collapse>
                </b-card>
                <b-row >
                    <b-col>
                        <div class="d-flex justify-content-center">
                            <input type="submit" value="Открыть PDF" class="button">
                        </div>
                    </b-col>
                </b-row>
            </form>
        </div>
    </b-container>
</div>
</template>
<script>
export default {
    data() {
        return {
            newElement: {
                selectArray: null,
                name: "",
                test: "",
                range: ""
            },
            modalShow: false,

            employer:['Cornelius Ltd', 'Self Employer'],
            testing_standard:['BS EN 9606-1', 'BS EN 9606-2', 'GL 2007'],
            job_knowledge:['Tested', 'Not Tested'],
            deposit:['All', 'Root', 'Rest'],

            document_number1: "MSMK QF032",
            document_number2: "Rev 1",

            all_thickness: false,
            applicable_1: false,
            applicable_2: false,


            shielding_gas_range: "",
            transfer_mode_range: "",
            type_polarity_range: "",
            welding_position_range:"",
            welding_details_range: "",

            material_thickness: 0,
            material_thickness1: "",
            material_thickness2: "",
            deposited_thickness_root: 0,
            deposited_thickness_rest: 0,
            outside_pipe_diameter: 0,

            data: {
                wps_reference: [],
                parent_material_group: [],
                product_type: [],
                transfer_mode: [],
                type_of_weld: [],
                filler_material_group: [],
                filler_material_designation: [],
                shielding_gas: [],
                type_polarity: [],
                welding_position: [],
                welding_details: [],
                welding_processes: [],
                process_data: [],
                header: [],
            },
            wpsDefault: {
                id: null,
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
                },
                header: {
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
    },
    computed: {
        depositedThicknessRootNum1() {
        if(this.deposited_thickness_root < 3) {
            return 'From '+ this.deposited_thickness_root
        } else {
            return 'From 3'
        }

        },
        depositedThicknessRootNum2() {
            if ((this.deposited_thickness_root >= 3) && (this.deposited_thickness_root < 12)) {
                return "25"
            } else {
                if (this.deposited_thickness_root >= 12) {
                    return "No Restriction"
                } else
                {
                    return this.deposited_thickness_root * 2
                }
            }
        },
        depositedThicknessRestNum1() {
            if(this.deposited_thickness_rest < 3) {
                return 'From '+ this.deposited_thickness_rest
            } else {
                return 'From 3'
            }
        },
        depositedThicknessRestNum2() {
            if ((this.deposited_thickness_rest >= 3) && (this.deposited_thickness_rest < 12)) {
                return "25"
            } else {
                if (this.deposited_thickness_rest >= 12) {
                    return "No Restriction"
                } else
                {
                    return this.deposited_thickness_rest * 2
                }
            }
        },


        materialThicknessNumb() {
            let result = '';
                if (this.material_thickness >= 3){
                    this.material_thickness1 = "From &nbsp;&nbsp;&nbsp; 3"
                    return "From 3 To No Restriction";
                } else {
                    result = "From " + this.material_thickness + " To "
                }
                    if ((this.material_thickness*2) < 3)  {
                        result = result + "3"
                    } else {
                        result = result + this.material_thickness * 2
                    }
                    return result;
        },

        outsidePipeDiameter1() {
            if(this.outside_pipe_diameter == "Not Applicable") {
                return "For D >=500"
            } else {
                if (this.wps.product_type.test == "Plate (P)") {
                    return "For D >=500"
                } else {
                    if(this.outside_pipe_diameter > 25) {
                        return this.outside_pipe_diameter * 1
                    } else {
                        return this.outside_pipe_diameter * 0.5
                    }
                }
            }
        },
        outsidePipeDiameter2() {
            if(this.outside_pipe_diameter == "Not Applicable") {
                return "or >=75"
            } else {
                if(this.wps.product_type.test == "Plate (P)") {
                    return "or >=75"
                } else {
                    return "To"
                }
            }
        },
        outsidePipeDiameter3() {
            if(this.outside_pipe_diameter == "Not Applicable") {
                return "in PA, PB, PC and PD rotated"
            } else {
                if(this.wps.product_type.test == "Plate (P)") {
                    return "in PA, PB, PC and PD rotated"
                } else {
                    if(this.outside_pipe_diameter <= 25) {
                        return this.outside_pipe_diameter * 2
                    } else {
                        return "No Restriction"
                    }
                }
            }
        },
        singleLayerTest() {
            if(this.wps.type_of_weld.test == 'Single Run Fillet Weld (FW)') {
                return "Single Layer (sl)"
            } else {
                return "Multi Layer (ml)"
            }
        },
        singleLayerRange() {
            if(this.singleLayerTest == 'Single Layer (sl)') {
                return "Single Layer Only (sl)"
            } else {
                return "Single Layer (sl) and Multi Layer (ml)"
            }
        }
    },
    methods: {
        addElement() {
            axios.post('/api/added', {
                table: this.newElement.selectArray,
                wps_reference_id: this.wps.id,
                name: this.newElement.name,
                range: this.newElement.range,
                test: this.newElement.test
            }).then((response) => {
                this.data[this.newElement.selectArray].push(response.data)
                this.modalShow = false
            }).catch((error) => {
                alert("Error")
            });
        },
        deletePhoto() {
            document.getElementById("image").setAttribute('src', './user.png');
            document.getElementById("fileinput_c").setAttribute('value', '');
            this.$refs.fileinput.reset();
        },
        setElement(event, array, range) {
            var result = this.data[array].find((item) => {
                return item.test == event;
            })
            result ? this[range] = result.range : this[range] = "";
        },
        setElementWPS(event, array) {
            var result = this.data[array].find((item) => {
                return item.test == event;
            })
            result ? this.wps[array].range = result.range : this.wps[array].range = "";
        },
        setElementWPSProcess(event, array, index) {
            var result = this.data[array].find((item) => {
                return item.test == event;
            })
            result ? this.wps.filler_material_designation[index].process.range = result.range : this.wps.filler_material_designation[index].process.range = "";
        },
        setWPS(value) {
            let result = this.data.wps_reference.find((item) => {
                return item.name == value;
            })
            if(result) {
                result.filler_material_group = result.filler_material_group ? result.filler_material_group : this.wpsDefault.filler_material_group
                result.header = result.header ? result.header : this.wpsDefault.header
                result.parent_material_group = result.parent_material_group ? result.parent_material_group : this.wpsDefault.parent_material_group
                result.product_type = result.product_type ? result.product_type : this.wpsDefault.product_type
                result.type_of_weld = result.type_of_weld ? result.type_of_weld : this.wpsDefault.type_of_weld
                result.welding_processes = result.welding_processes ? result.welding_processes : this.wpsDefault.welding_processes
                result.filler_material_designation = result.filler_material_designation.length > 0 ? result.filler_material_designation : this.wpsDefault.filler_material_designation
                this.wps = result
            } else {
                this.wps = this.wpsDefault
            }
        },
        getData() {
            axios.get('/api/pdf-data').then(response => {
                Object.assign(this.data, response.data);
            })
        },
    }
};
</script>
<style>
  .img_size {
    width: 29%;
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
  .button {
        background-color: white;
        color: #17a2b8;
        border: 2px solid #17a2b8;
        padding: 15px 32px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        border-radius: 12px;
        transition-duration: 0.4s;
        margin-top: 20px;
    }
    .icon_plus {
        margin-top: 33px
    }
    .button:hover {
        background-color: #17a2b8;
        color: white;
    }
</style>
