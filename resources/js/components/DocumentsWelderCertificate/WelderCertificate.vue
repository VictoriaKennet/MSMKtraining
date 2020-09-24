<template>
    <div>
        <Navbar></Navbar>
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

        <b-modal id="modal-new-element" size="lg" hide-footer v-model="modalShow">
            <template v-slot:modal-title>
                New element
            </template>
            <b-row>
                <b-col>

                    <b-form-group label="Test">
                        <b-form-input
                            list="new-test"
                            name="new_element_test"
                            v-model="newElement.test"
                            v-validate="{ required: true}"
                            :class="errors.has('new_element_test') ? 'input-has-error' : ''"
                        ></b-form-input>
                        <b-form-datalist
                            id="new-test"
                            :options="data[newElement.table]"
                            text-field="test"
                        ></b-form-datalist>
                    </b-form-group>
                </b-col>
                <b-col>
                    <b-form-group label="Range">
                        <b-form-input
                            list="new-range"
                            name="new_element_range"
                            v-model="newElement.range"
                            v-validate="{ required: true}"
                            :class="errors.has('new_element_range') ? 'input-has-error' : ''"
                        ></b-form-input>
                        <b-form-datalist
                            id="new-range"
                            :options="data[newElement.table]"
                            text-field="range"
                        ></b-form-datalist>
                    </b-form-group>
                </b-col>
            </b-row>
            <b-button class="mt-3" @click="addElement">Save</b-button>
            <b-button class="mt-3" @click="modalShow = false">Close</b-button>
        </b-modal>

        <b-modal id="modal-edit-element" size="lg" hide-footer v-model="modalEditShow">
            <template v-slot:modal-title>
                Edit element
            </template>
            <b-row>
                <b-col>
                    <b-form-group label="Test">
                        <b-form-input
                            list="edit-test"
                            name="edit_element_test"
                            v-model="editElement.test"
                            v-validate="{ required: true}"
                            :class="errors.has('edit_element_test') ? 'input-has-error' : ''"
                        ></b-form-input>
                        <b-form-datalist
                            id="edit-test"
                            :options="data[editElement.table]"
                            text-field="test"
                        ></b-form-datalist>
                    </b-form-group>
                </b-col>
                <b-col>
                    <b-form-group label="Range">
                        <b-form-input
                            list="new-range"
                            name="edit_element_range"
                            v-model="editElement.range"
                            v-validate="{ required: true}"
                            :class="errors.has('edit_element_range') ? 'input-has-error' : ''"
                        ></b-form-input>
                        <b-form-datalist
                            id="new-range"
                            :options="data[editElement.table]"
                            text-field="range"
                        ></b-form-datalist>
                    </b-form-group>
                </b-col>
            </b-row>
            <b-button class="mt-3" @click="updateElement">Save</b-button>
            <b-button class="mt-3" @click="deleteElement" variant="danger">Delete</b-button>
            <b-button class="mt-3" @click="modalEditShow = false">Close</b-button>
        </b-modal>

        <b-container class="my-2">
            <div role="tablist">
                <form action="/welder-certificate" target="_blank" method="POST" enctype="multipart/form-data">
                    <b-card no-body class="mb-1">
                        <b-card-header header-tag="header" class="p-1" role="tab">
                            <b-button block v-b-toggle.accordion-1 variant="info">Main information</b-button>
                        </b-card-header>
                        <b-collapse id="accordion-1" visible accordion="my-accordion" role="tabpanel">
                            <b-card-body>
                                <b-row>
                                    <b-col>
                                        <!-- Поле ввода  -->
                                        <b-form-group label="Welder's name">
                                            <b-form-input
                                                placeholder="Enter welder's name"
                                                v-model="clientData.name"
                                                name="name"
                                            ></b-form-input>
                                        </b-form-group>

                                        <!-- Поле ввода  -->
                                        <b-form-group label="Identification">
                                            <b-form-input
                                                placeholder="Enter identification"
                                                v-model="clientData.identification"
                                                name="identification"
                                            ></b-form-input>
                                        </b-form-group>

                                        <!-- Поле ввода  -->
                                        <b-form-group label="Employer">
                                            <b-form-input
                                                placeholder="Choose employer"
                                                list="employer"
                                                name="employer"
                                                v-model="clientData.employer"
                                            ></b-form-input>
                                            <b-form-datalist id="employer" :options="employer">
                                            </b-form-datalist>
                                        </b-form-group>

                                        <!-- Поле ввода  -->
                                        <b-form-group label="Code/testing standard">
                                            <b-form-input
                                                placeholder="Choose testing standard"
                                                list="testing-standard"
                                                name="testing_standard"
                                                v-model="clientData.testing_standard"
                                            ></b-form-input>
                                            <b-form-datalist
                                                id="testing-standard"
                                                :options="testing_standard"
                                            ></b-form-datalist>
                                        </b-form-group>

                                        <!-- Поле ввода  -->
                                        <b-form-group label="Job knowledge">
                                            <b-form-input
                                                placeholder="Choose job knowledge"
                                                list="job-knowledge"
                                                name="job_knowledge"
                                                v-model="clientData.job_knowledge"
                                            ></b-form-input>
                                            <b-form-datalist
                                                id="job-knowledge"
                                                :options="job_knowledge"
                                            ></b-form-datalist>
                                        </b-form-group>
                                    </b-col>

                                    <b-col>
                                        <b-img src="/user.png" fluid class="img_size perscab-photoedit-img" id="image"></b-img>
                                        <b-row>
                                            <b-col cols="8">
                                                <!-- Поле фото  -->
                                                <b-form-group>
                                                    <b-form-file
                                                        ref="fileinput"
                                                        id="fileinput"
                                                        name="photo"
                                                        placeholder="Choose a file or drop it"
                                                        drop-placeholder="Drop file here"
                                                    ></b-form-file>
                                                </b-form-group>
                                                <input
                                                    name="photo_c"
                                                    id="fileinput_c"
                                                    multiple="false"
                                                    type="hidden"
                                                    value=""
                                                >
                                            </b-col>
                                            <b-col cols="4">
                                                <b-button class="w-100" @click="deletePhoto">Delete photo</b-button>
                                            </b-col>
                                        </b-row>

                                        <!-- Поле ввода  -->
                                        <b-form-group label="Test Ref / Certificate No">
                                            <b-form-input
                                                name="test_ref"
                                                placeholder="Enter Test Ref No"
                                                v-model="clientData.test_ref"
                                            ></b-form-input>
                                        </b-form-group>

                                        <!-- Поле ввода  -->
                                        <b-form-group label="LR Control No">
                                            <b-form-input
                                                name="lr_control"
                                                placeholder="Enter LR Control No"
                                                v-model="clientData.lr_control"
                                            ></b-form-input>
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
                                            <b-form-input
                                                list="wps-reference"
                                                name="wps_reference"
                                                @change="setWPS($event)"
                                                v-model="wps.name"
                                            ></b-form-input>
                                            <b-form-datalist
                                                id="wps-reference"
                                                :options="data.wps_reference"
                                                text-field="name"
                                            ></b-form-datalist>
                                        </b-form-group>
                                    </b-col>
                                    <b-col cols="1">
                                        <router-link to="/new-welder-certificate">
                                            <b-icon icon="plus-circle-fill" class="icon_plus" font-scale="2"></b-icon>
                                        </router-link>
                                    </b-col>
                                    <b-col cols="1" v-if="wps.id">
                                        <router-link :to="'/edit-welder-certificate/'+wps.id">
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
                                            <b-form-input
                                                name="header_1"
                                                list="main-header-1"
                                                v-model="wps.header.test"
                                                @change="setElementWPS($event, 'header')"
                                            ></b-form-input>
                                            <b-form-datalist
                                                id="main-header-1"
                                                :options="data.header"
                                                text-field="test"
                                            ></b-form-datalist>
                                        </b-form-group>
                                    </b-col>
                                    <b-col cols="3">
                                        <b-form-group>
                                            <b-form-input
                                                name="header_2"
                                                :value="materialThickness"
                                            ></b-form-input>
                                        </b-form-group>
                                    </b-col>
                                    <b-col cols="3">
                                        <b-form-group>
                                            <b-form-input
                                                name="header_3"
                                                list="main-header-3"
                                                v-model="wps.header.range"
                                            ></b-form-input>
                                            <b-form-datalist
                                                id="main-header-3"
                                                :options="data.header"
                                                text-field="range"
                                            ></b-form-datalist>
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
                                            <b-form-input
                                                name="welding_processes_test"
                                                list="welding-processes"
                                                v-model="wps.welding_processes.test"
                                                @change="setElementWPS($event, 'welding_processes')"
                                            ></b-form-input>
                                            <b-form-datalist
                                                id="welding-processes"
                                                :options="data.welding_processes"
                                                text-field="test"
                                            ></b-form-datalist>
                                        </b-form-group>
                                    </b-col>
                                    <b-col cols="5">
                                        <b-form-group>
                                            <b-form-input
                                                name="welding_processes_range"
                                                list="welding-processes"
                                                v-model="wps.welding_processes.range"
                                            ></b-form-input>
                                            <b-form-datalist
                                                id="welding-processes"
                                                :options="data.welding_processes"
                                                text-field="range"
                                            ></b-form-datalist>
                                        </b-form-group>
                                    </b-col>
                                </b-row>
                                <hr>
                                <b-row>
                                    <b-col cols="3">
                                        <label for="input-default">Transfer mode</label>
                                    </b-col>
                                    <b-col cols="4">
                                        <!-- Поле ввода  -->
                                        <b-form-group>
                                            <b-form-input
                                                name="transfer_mode_test"
                                                list="transfer-mode-test"
                                                v-model="clientData.transfer_mode.test"
                                                @change="setElement($event, 'transfer_mode')"
                                            ></b-form-input>
                                            <b-form-datalist
                                                id="transfer-mode-test"
                                                :options="data.transfer_mode"
                                                text-field="test"
                                            ></b-form-datalist>
                                        </b-form-group>
                                    </b-col>
                                    <b-col cols="3">
                                        <!-- Поле ввода  -->
                                        <b-form-group>
                                            <b-form-input
                                                name="transfer_mode_range"
                                                list="transfer-mode-range"
                                                v-model="clientData.transfer_mode.range"
                                            ></b-form-input>
                                            <b-form-datalist
                                                id="transfer-mode-range"
                                                :options="data.transfer_mode"
                                                text-field="range"
                                            ></b-form-datalist>
                                        </b-form-group>
                                    </b-col>
                                    <b-col cols="1">
                                        <b-icon
                                            icon="plus-circle-fill"
                                            style="margin-top: 5px"
                                            font-scale="2"
                                            v-b-modal.modal-new-element
                                            @click="newElement.table = 'transfer_mode'"
                                        ></b-icon>
                                    </b-col>
                                    <b-col cols="1" v-if="clientData.transfer_mode.test">
                                        <b-icon
                                            icon="pencil-square"
                                            style="margin-top: 5px"
                                            font-scale="2"
                                            v-b-modal.modal-edit-element
                                            @click="openEditModal('transfer_mode')"
                                        ></b-icon>
                                    </b-col>
                                </b-row>
                                <hr>
                                <b-row>
                                    <b-col cols="3">
                                        <label for="input-default">Product type <br>(plate or pipe)</label>
                                    </b-col>
                                    <b-col cols="4">
                                        <b-form-group>
                                            <b-form-input
                                                name="product_type_test"
                                                list="product-type"
                                                v-model="wps.product_type.test"
                                                @change="setElementWPS($event, 'product_type')"
                                            ></b-form-input>
                                            <b-form-datalist
                                                id="product-type"
                                                :options="data.product_type"
                                                text-field="test"
                                            ></b-form-datalist>
                                        </b-form-group>
                                    </b-col>
                                    <b-col cols ="5">
                                        <b-form-group>
                                            <b-form-input
                                                name="product_type_range"
                                                list="product-type"
                                                v-model="wps.product_type.range"
                                            ></b-form-input>
                                            <b-form-datalist
                                                id="product-type"
                                                :options="data.product_type"
                                                text-field="range"
                                            ></b-form-datalist>
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
                                            <b-form-input
                                                name="type_of_weld_test"
                                                list="type-weld"
                                                v-model="wps.type_of_weld.test"
                                                @change="setElementWPS($event, 'type_of_weld')"
                                            ></b-form-input>
                                            <b-form-datalist
                                                id="type-weld"
                                                :options="data.type_of_weld"
                                                text-field="test"
                                            ></b-form-datalist>
                                        </b-form-group>
                                    </b-col>
                                    <b-col cols ="5">
                                        <b-form-group>
                                            <b-form-input
                                                name="type_of_weld_range"
                                                list="type-weld"
                                                v-model="wps.type_of_weld.range"
                                            ></b-form-input>
                                            <b-form-datalist
                                                id="type-weld"
                                                :options="data.type_of_weld"
                                                text-field="range"
                                            ></b-form-datalist>
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
                                            <b-form-input
                                                name="parent_material_group_test"
                                                list="parent-material-group"
                                                v-model="wps.parent_material_group.test"
                                                @change="setElementWPS($event, 'parent_material_group')"
                                            ></b-form-input>
                                            <b-form-datalist
                                                id="parent-material-group"
                                                :options="data.parent_material_group"
                                                text-field="test"
                                            ></b-form-datalist>
                                        </b-form-group>
                                    </b-col>
                                    <b-col cols ="5">
                                        <b-form-group>
                                            <b-form-input
                                                name="parent_material_group_range"
                                                list="parent-material-group"
                                                v-model="wps.parent_material_group.range"
                                            ></b-form-input>
                                            <b-form-datalist
                                                id="parent-material-group"
                                                :options="data.parent_material_group"
                                                text-field="range"
                                            ></b-form-datalist>
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
                                            <b-form-input
                                                name="filler_material_group_test"
                                                list="filler-material-group"
                                                v-model="wps.filler_material_group.test"
                                                @change="setElementWPS($event, 'filler_material_group')"
                                            ></b-form-input>
                                            <b-form-datalist
                                                id="filler-material-group"
                                                :options="data.filler_material_group"
                                                text-field="test"
                                            ></b-form-datalist>
                                        </b-form-group>
                                    </b-col>
                                    <b-col cols="5">
                                        <b-form-group>
                                            <b-form-input
                                                name="filler_material_group_range"
                                                list="filler-material-group"
                                                v-model="wps.filler_material_group.range"
                                            ></b-form-input>
                                            <b-form-datalist
                                                id="filler-material-group"
                                                :options="data.filler_material_group"
                                                text-field="range"
                                            ></b-form-datalist>
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
                                                <b-form-input
                                                    name="process_data_test_1"
                                                    list="process_data_1"
                                                    v-model="wps.process_one.test"
                                                    @change="setElementWPS($event, 'process_one')"
                                                ></b-form-input>
                                                <b-form-datalist
                                                    id="process_data_1"
                                                    :options="data.process_one"
                                                    text-field="test"
                                                ></b-form-datalist>
                                            </b-col>
                                        </b-row>
                                        <b-row>
                                            <b-col cols="5">
                                                <label for="input-default">Process 2</label>
                                            </b-col>
                                            <b-col cols="7">
                                                <b-form-input
                                                    name="process_data_test_2"
                                                    list="process_data_2"
                                                    v-model="wps.process_two.test"
                                                    @change="setElementWPS($event, 'process_two')"
                                                ></b-form-input>
                                                <b-form-datalist
                                                    id="process_data_2"
                                                    :options="data.process_two"
                                                    text-field="test"
                                                ></b-form-datalist>
                                            </b-col>
                                        </b-row>
                                    </b-col>
                                    <b-col>
                                        <b-form-group class="m-20">
                                            <b-form-input
                                                name="process_data_range_1"
                                                list="process-data-2-range-1"
                                                v-model="wps.process_one.range"
                                            ></b-form-input>
                                            <b-form-datalist
                                                id="process-data-2-range-1"
                                                :options="data.process_one"
                                                text-field="range"
                                            ></b-form-datalist>
                                        </b-form-group>
                                        <b-form-group>
                                            <b-form-input
                                                name="process_data_range_2"
                                                list="process-data-2-range-2"
                                                v-model="wps.process_two.range"
                                            ></b-form-input>
                                            <b-form-datalist
                                                id="process-data-2-range-2"
                                                :options="data.process_two"
                                                text-field="range"
                                            ></b-form-datalist>
                                        </b-form-group>
                                    </b-col>
                                </b-row>
                                <hr>
                                <b-row>
                                    <b-col cols="3">
                                        <label for="input-default">Shielding gas</label>
                                    </b-col>
                                    <b-col cols="4">
                                        <!-- Поле ввода  -->
                                        <b-form-group>
                                            <b-form-input
                                                name="shielding_gas_test"
                                                list="shielding-gas-test"
                                                v-model="clientData.shielding_gas.test"
                                                @change="setElement($event, 'shielding_gas')"
                                            ></b-form-input>
                                            <b-form-datalist
                                                id="shielding-gas-test"
                                                :options="data.shielding_gas"
                                                text-field="test"
                                            ></b-form-datalist>
                                        </b-form-group>
                                    </b-col>
                                    <b-col cols="3">
                                        <!-- Поле ввода  -->
                                        <b-form-group>
                                            <b-form-input
                                                name="shielding_gas_range"
                                                list="shielding-gas-range"
                                                v-model="clientData.shielding_gas.range"
                                            ></b-form-input>
                                            <b-form-datalist
                                                id="shielding-gas-range"
                                                :options="data.shielding_gas"
                                                text-field="range"
                                            ></b-form-datalist>
                                        </b-form-group>
                                    </b-col>
                                    <b-col cols="1">
                                        <b-icon
                                            icon="plus-circle-fill"
                                            style="margin-top: 5px"
                                            font-scale="2"
                                            v-b-modal.modal-new-element
                                            @click="newElement.table = 'shielding_gas'"
                                        ></b-icon>
                                    </b-col>
                                    <b-col cols="1" v-if="clientData.shielding_gas.test">
                                        <b-icon
                                            icon="pencil-square"
                                            style="margin-top: 5px"
                                            font-scale="2"
                                            v-b-modal.modal-edit-element
                                            @click="openEditModal('shielding_gas')"
                                        ></b-icon>
                                    </b-col>
                                </b-row>
                                <hr>
                                <b-row>
                                    <b-col cols="3">
                                        <label for="input-default">Type of current and polarity</label>
                                    </b-col>
                                    <b-col cols="4">
                                        <!-- Поле ввода  -->
                                        <b-form-group>
                                            <b-form-input
                                                name="type_polarity_test"
                                                list="type-polarity-test"
                                                v-model="clientData.type_polarity.test"
                                                @change="setElement($event, 'type_polarity')"
                                            ></b-form-input>
                                            <b-form-datalist
                                                id="type-polarity-test"
                                                :options="data.type_polarity"
                                                text-field="test"
                                            ></b-form-datalist>
                                        </b-form-group>
                                    </b-col>
                                    <b-col cols="3">
                                        <!-- Поле ввода  -->
                                        <b-form-group>
                                            <b-form-input
                                                name="type_polarity_range"
                                                list="type-polarity-range"
                                                v-model="clientData.type_polarity.range"
                                            ></b-form-input>
                                            <b-form-datalist
                                                id="type-polarity-range"
                                                :options="data.type_polarity"
                                                text-field="range"
                                            ></b-form-datalist>
                                        </b-form-group>
                                    </b-col>
                                    <b-col cols="1">
                                        <b-icon
                                            icon="plus-circle-fill"
                                            style="margin-top: 5px"
                                            font-scale="2"
                                            v-b-modal.modal-new-element
                                            @click="newElement.table = 'type_polarity'"
                                        ></b-icon>
                                    </b-col>
                                    <b-col cols="1" v-if="clientData.type_polarity.test">
                                        <b-icon
                                            icon="pencil-square"
                                            style="margin-top: 5px"
                                            font-scale="2"
                                            v-b-modal.modal-edit-element
                                            @click="openEditModal('type_polarity')"
                                        ></b-icon>
                                    </b-col>
                                </b-row>
                                <hr>
                                <b-row>
                                    <b-col cols="3">
                                        <label for="input-default">Material thickness(mm)</label>
                                    </b-col>
                                    <b-col cols="9">
                                        <!-- Plate 1 -->
                                        <b-row>
                                            <b-col cols="2">
                                                <b-form-checkbox
                                                    name="plate_1_thickness_cb"
                                                    size="lg"
                                                    v-model="clientData.plate_1_thickness_cb"
                                                >Plate 1</b-form-checkbox>
                                            </b-col>
                                            <b-col cols="3">
                                                <b-form-group>
                                                    <b-form-input
                                                        name="plate_1_thickness"
                                                        v-model="clientData.plate_1_thickness"
                                                    ></b-form-input>
                                                </b-form-group>
                                            </b-col>
                                            <b-col cols="4">
                                                <b-form-group>
                                                    <b-form-input
                                                        name="plate_1_thickness_numb"
                                                        :value="materialThicknessPlate_1"
                                                    ></b-form-input>
                                                </b-form-group>
                                            </b-col>
                                            <b-col cols="3">
                                                <b-form-checkbox
                                                    name="all_thickness_plate_1"
                                                    v-model="clientData.all_thickness_plate_1"
                                                >All Thickness</b-form-checkbox>
                                            </b-col>
                                        </b-row>
                                        <!-- Plate 2 -->
                                        <b-row>
                                            <b-col cols="2">
                                                <b-form-checkbox
                                                    name="plate_2_thickness_cb"
                                                    size="lg"
                                                    v-model="clientData.plate_2_thickness_cb"
                                                >Plate 2</b-form-checkbox>
                                            </b-col>
                                            <b-col cols="3">
                                                <b-form-group>
                                                    <b-form-input
                                                        name="plate_2_thickness"
                                                        v-model="clientData.plate_2_thickness"
                                                    ></b-form-input>
                                                </b-form-group>
                                            </b-col>
                                            <b-col cols="4">
                                                <b-form-group>
                                                    <b-form-input
                                                        name="plate_2_thickness_numb"
                                                        :value="materialThicknessPlate_2"
                                                    ></b-form-input>
                                                </b-form-group>
                                            </b-col>
                                            <b-col cols="3">
                                                <b-form-checkbox
                                                    name="all_thickness_plate_2"
                                                    v-model="clientData.all_thickness_plate_2"
                                                >All Thickness</b-form-checkbox>
                                            </b-col>
                                        </b-row>
                                        <!-- Tube 1 -->
                                        <b-row>
                                            <b-col cols="2">
                                                <b-form-checkbox
                                                    name="tube_1_thickness_cb"
                                                    size="lg"
                                                    v-model="clientData.tube_1_thickness_cb"
                                                >Tube 1</b-form-checkbox>
                                            </b-col>
                                            <b-col cols="3">
                                                <b-form-group>
                                                    <b-form-input
                                                        name="tube_1_thickness"
                                                        v-model="clientData.tube_1_thickness"
                                                    ></b-form-input>
                                                </b-form-group>
                                            </b-col>
                                            <b-col cols="4">
                                                <b-form-group>
                                                    <b-form-input
                                                        name="tube_1_thickness_numb"
                                                        :value="materialThicknessTube_1"
                                                    ></b-form-input>
                                                </b-form-group>
                                            </b-col>
                                            <b-col cols="3">
                                                <b-form-checkbox
                                                    name="all_thickness_tube_1"
                                                    v-model="clientData.all_thickness_tube_1"
                                                >All Thickness</b-form-checkbox>
                                            </b-col>
                                        </b-row>
                                        <!-- Tube 2 -->
                                        <b-row>
                                            <b-col cols="2">
                                                <b-form-checkbox
                                                    name="tube_2_thickness_cb"
                                                    size="lg"
                                                    v-model="clientData.tube_2_thickness_cb"
                                                >Tube 2</b-form-checkbox>
                                            </b-col>
                                            <b-col cols="3">
                                                <b-form-group>
                                                    <b-form-input
                                                        name="tube_2_thickness"
                                                        v-model="clientData.tube_2_thickness"
                                                    ></b-form-input>
                                                </b-form-group>
                                            </b-col>
                                            <b-col cols="4">
                                                <b-form-group>
                                                    <b-form-input
                                                        name="tube_2_thickness_numb"
                                                        :value="materialThicknessTube_2"
                                                    ></b-form-input>
                                                </b-form-group>
                                            </b-col>
                                            <b-col cols="3">
                                                <b-form-checkbox
                                                    name="all_thickness_tube_2"
                                                    v-model="clientData.all_thickness_tube_2"
                                                >All Thickness</b-form-checkbox>
                                            </b-col>
                                        </b-row>
                                        <!-- Bar -->
                                        <b-row>
                                            <b-col cols="2">
                                                <b-form-checkbox
                                                    name="bar_thickness_cb"
                                                    size="lg"
                                                    v-model="clientData.bar_thickness_cb"
                                                >Bar</b-form-checkbox>
                                            </b-col>
                                            <b-col cols="3">
                                                <b-form-group>
                                                    <b-form-input
                                                        name="bar_thickness"
                                                        v-model="clientData.bar_thickness"
                                                    ></b-form-input>
                                                </b-form-group>
                                            </b-col>
                                            <b-col cols="4">
                                                <b-form-group>
                                                    <b-form-input
                                                        name="bar_thickness_numb"
                                                        :value="materialThicknessBar"
                                                    ></b-form-input>
                                                </b-form-group>
                                            </b-col>
                                            <b-col cols="3">
                                                <b-form-checkbox
                                                    name="all_thickness_3"
                                                    v-model="clientData.all_thickness_bar"
                                                >All Thickness</b-form-checkbox>
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
                                            <b-col cols="4">
                                                <b-form-input
                                                    name="deposited_deposit1"
                                                    list="deposited-deposit1"
                                                    :disabled="clientData.applicable_1"
                                                    v-model="clientData.deposited_deposit1"
                                                ></b-form-input>
                                                <b-form-datalist id="deposited-deposit1" :options="deposit"></b-form-datalist>
                                            </b-col>
                                            <b-col cols="4">
                                                <b-form-input
                                                    name="deposited_thickness_root"
                                                    :disabled="clientData.applicable_1"
                                                    v-model="clientData.deposited_thickness_root"
                                                ></b-form-input>
                                            </b-col>
                                        </b-row>
                                        <b-row>
                                            <b-col cols="4">
                                                <label for="input-default">Process 2</label>
                                            </b-col>
                                            <b-col cols="4">
                                                <b-form-input
                                                    name="deposited_deposit2"
                                                    list="deposited-deposit2"
                                                    :disabled="clientData.applicable_2"
                                                    v-model="clientData.deposited_deposit2"
                                                ></b-form-input>
                                                <b-form-datalist id="deposited-deposit2" :options="deposit"></b-form-datalist>
                                            </b-col>
                                            <b-col cols="4">
                                                <b-form-input
                                                    name="deposited_thickness_rest"
                                                    :disabled="clientData.applicable_2"
                                                    v-model="clientData.deposited_thickness_rest"
                                                ></b-form-input>
                                            </b-col>
                                        </b-row>
                                    </b-col>
                                    <b-col>
                                        <b-row>
                                            <b-col cols="3">
                                                <b-form-group>
                                                    <b-form-input
                                                        name="deposited_thickness_root_num_1"
                                                        :disabled="clientData.applicable_1"
                                                        :value="depositedThicknessRootNum1"
                                                    ></b-form-input>
                                                </b-form-group>
                                            </b-col>
                                            <b-col cols="3">
                                                <b-form-group>
                                                    <b-form-input
                                                        name="deposited_thickness_root_num_2"
                                                        :disabled="clientData.applicable_1"
                                                        :value="depositedThicknessRootNum2"
                                                    ></b-form-input>
                                                </b-form-group>
                                            </b-col>
                                            <b-col cols="5">
                                                <b-form-checkbox name="applicable_1" v-model="clientData.applicable_1">Not Applicable</b-form-checkbox>
                                            </b-col>
                                        </b-row>
                                        <b-row>
                                            <b-col cols="3">
                                                <b-form-group>
                                                    <b-form-input
                                                        name="deposited_thickness_rest_num_1"
                                                        :disabled="clientData.applicable_2"
                                                        :value="depositedThicknessRestNum1"
                                                    ></b-form-input>
                                                </b-form-group>
                                            </b-col>
                                            <b-col cols="3">
                                                <b-form-group>
                                                    <b-form-input
                                                        name="deposited_thickness_rest_num_2"
                                                        :disabled="clientData.applicable_2"
                                                        :value="depositedThicknessRestNum2"
                                                    ></b-form-input>
                                                </b-form-group>
                                            </b-col>
                                            <b-col cols="5">
                                                <b-form-checkbox name="applicable_2" v-model="clientData.applicable_2">Not Applicable</b-form-checkbox>
                                            </b-col>
                                        </b-row>
                                    </b-col>
                                </b-row>
                                <hr>
                                <!-- Outside diameter(mm) 1 -->
                                <b-row>
                                    <b-col cols="3">
                                        <label for="input-default">Outside diameter(mm) 1</label>
                                    </b-col>
                                    <b-col cols="4">
                                        <b-form-group>
                                            <b-form-input
                                                name="outside_pipe_diameter_1"
                                                v-model="clientData.outside_pipe_diameter_1"
                                            ></b-form-input>
                                        </b-form-group>
                                    </b-col>
                                    <b-col cols="5">
                                        <b-row>
                                            <b-col cols="4">
                                                <b-form-group>
                                                    <b-form-input
                                                        name="outside_pipe_diameter_1_1"
                                                        :value="outsidePipeDiameter_1_1"
                                                    ></b-form-input>
                                                </b-form-group>
                                            </b-col>
                                            <b-col cols="4">
                                                <b-form-group>
                                                    <b-form-input
                                                        name="outside_pipe_diameter_1_2"
                                                        :value="outsidePipeDiameter_1_2"
                                                    ></b-form-input>
                                                </b-form-group>
                                            </b-col>
                                            <b-col cols="4">
                                                <b-form-group>
                                                    <b-form-input
                                                        name="outside_pipe_diameter_1_3"
                                                        :value="outsidePipeDiameter_1_3"
                                                    ></b-form-input>
                                                </b-form-group>
                                            </b-col>
                                        </b-row>
                                    </b-col>
                                </b-row>
                                <!-- Outside diameter(mm) 2 -->
                                <b-row v-if="clientData.tube_1_thickness_cb && clientData.tube_2_thickness_cb">
                                    <b-col cols="3">
                                        <label for="input-default">Outside diameter(mm) 2</label>
                                    </b-col>
                                    <b-col cols="4">
                                        <b-form-group>
                                            <b-form-input
                                                name="outside_pipe_diameter_2"
                                                v-model="clientData.outside_pipe_diameter_2"
                                            ></b-form-input>
                                        </b-form-group>
                                    </b-col>
                                    <b-col cols="5">
                                        <b-row>
                                            <b-col cols="4">
                                                <b-form-group>
                                                    <b-form-input
                                                        name="outside_pipe_diameter_2_1"
                                                        :value="outsidePipeDiameter_2_1"
                                                    ></b-form-input>
                                                </b-form-group>
                                            </b-col>
                                            <b-col cols="4">
                                                <b-form-group>
                                                    <b-form-input
                                                        name="outside_pipe_diameter_2_2"
                                                        :value="outsidePipeDiameter_2_2"
                                                    ></b-form-input>
                                                </b-form-group>
                                            </b-col>
                                            <b-col cols="4">
                                                <b-form-group>
                                                    <b-form-input
                                                        name="outside_pipe_diameter_2_3"
                                                        :value="outsidePipeDiameter_2_3"
                                                    ></b-form-input>
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
                                        <!-- Поле ввода  -->
                                        <b-form-group>
                                            <b-form-input
                                                name="welding_position_test"
                                                list="welding-position-test"
                                                v-model="clientData.welding_position.test"
                                                @change="setElement($event, 'welding_position')"
                                            ></b-form-input>
                                            <b-form-datalist
                                                id="welding-position-test"
                                                :options="data.welding_position"
                                                text-field="test"
                                            ></b-form-datalist>
                                        </b-form-group>
                                    </b-col>
                                    <b-col cols="3">
                                        <!-- Поле ввода  -->
                                        <b-form-group>
                                            <b-form-input
                                                name="welding_position_range"
                                                list="welding-position-range"
                                                v-model="clientData.welding_position.range"
                                            ></b-form-input>
                                            <b-form-datalist
                                                id="welding-position-range"
                                                :options="data.welding_position"
                                                text-field="range"
                                            ></b-form-datalist>
                                        </b-form-group>
                                    </b-col>
                                    <b-col cols="1">
                                        <b-icon
                                            icon="plus-circle-fill"
                                            style="margin-top: 5px"
                                            font-scale="2"
                                            v-b-modal.modal-new-element
                                            @click="newElement.table = 'welding_position'"
                                        ></b-icon>
                                    </b-col>
                                    <b-col cols="1" v-if="clientData.welding_position.test">
                                        <b-icon
                                            icon="pencil-square"
                                            style="margin-top: 5px"
                                            font-scale="2"
                                            v-b-modal.modal-edit-element
                                            @click="openEditModal('welding_position')"
                                        ></b-icon>
                                    </b-col>
                                </b-row>
                                <hr>
                                <b-row>
                                    <b-col cols="3">
                                        <label for="input-default">Weld details</label>
                                    </b-col>
                                    <b-col cols="4">
                                        <!-- Поле ввода  -->
                                        <b-form-group>
                                            <b-form-input
                                                name="welding_details_test"
                                                list="welding-details-test"
                                                v-model="clientData.welding_details.test"
                                                @change="setElement($event, 'welding_details')"
                                            ></b-form-input>
                                            <b-form-datalist
                                                id="welding-details-test"
                                                :options="data.welding_details"
                                                text-field="test"
                                            ></b-form-datalist>
                                        </b-form-group>
                                    </b-col>
                                    <b-col cols="3">
                                        <!-- Поле ввода  -->
                                        <b-form-group>
                                            <b-form-input
                                                name="welding_details_range"
                                                list="welding-details-range"
                                                v-model="clientData.welding_details.range"
                                            ></b-form-input>
                                            <b-form-datalist
                                                id="welding-details-range"
                                                :options="data.welding_details"
                                                text-field="range"
                                            ></b-form-datalist>
                                        </b-form-group>
                                    </b-col>
                                    <b-col cols="1">
                                        <b-icon
                                            icon="plus-circle-fill"
                                            style="margin-top: 5px"
                                            font-scale="2"
                                            v-b-modal.modal-new-element
                                            @click="newElement.table = 'welding_details'"
                                        ></b-icon>
                                    </b-col>
                                    <b-col cols="1" v-if="clientData.welding_details.test">
                                        <b-icon
                                            icon="pencil-square"
                                            style="margin-top: 5px"
                                            font-scale="2"
                                            v-b-modal.modal-edit-element
                                            @click="openEditModal('welding_details')"
                                        ></b-icon>
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
                                        </b-form-group>
                                    </b-col>
                                    <b-col cols="5">
                                        <b-form-group>
                                            <b-form-input name="single_layer_range" list="single-layer-range" :value="singleLayerRange"></b-form-input>
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
                                            <b-form-input
                                                name="weld_test"
                                                list="weld-test"
                                                v-model="clientData.weld_test"
                                            ></b-form-input>
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
                                            <b-form-input
                                                list="document-number1"
                                                name="document_number1"
                                                v-model="clientData.document_number1"
                                            ></b-form-input>
                                        </b-form-group>
                                    </b-col>
                                    <b-col>
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
                                        <b-form-group>
                                            <b-form-checkbox v-model="clientData.visual_examination" name="visual_examination">Visual Examination of Completed Weld</b-form-checkbox>
                                            <b-form-checkbox v-model="clientData.transverse_bends" name="transverse_bends">Transverse bends root and face (6.5.2.3)</b-form-checkbox>
                                            <b-form-checkbox v-model="clientData.specimen_macro" name="specimen_macro">Specimen Macro test for fusion</b-form-checkbox>
                                        </b-form-group>
                                    </b-col>
                                    <b-col>
                                        <b-form-group>
                                            <b-form-checkbox v-model="clientData.transverse_side" name="transverse_side">Transverse side bend specimen (6.5.2.3)</b-form-checkbox>
                                            <b-form-checkbox v-model="clientData.ultrasonic_examination" name="ultrasonic_examination">Ultrasonic Examination (6.5.2.1)</b-form-checkbox>
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
                    <b-row>
                        <b-col>
                            <div class="d-flex justify-content-center">
                                <input type="submit" value="Open PDF" class="button">
                                <input v-if="$route.params.id" type="button" @click="updateData" value="Update data" class="button ml-1">
                                <input v-if="$route.params.id" type="button" @click="deleteData" value="Delete" class="button-red ml-1">
                                <a v-if="$route.params.id" href="/saves" class="button ml-2">Back</a>
                                <input v-else type="button" @click="saveData" value="Save data" class="button ml-1">
                            </div>
                        </b-col>
                    </b-row>
                </form>
            </div>
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
            newElement: {
                table: null,
                test: "",
                range: ""
            },
            editElement: {
                id: null,
                table: null,
                test: "",
                range: ""
            },
            modalShow: false,
            modalEditShow: false,
            employer: ['Cornelius Ltd', 'Self Employer'],
            testing_standard: ['BS EN 9606-1', 'BS EN 9606-2', 'GL 2007'],
            job_knowledge: ['Tested', 'Not Tested'],
            deposit: ['All', 'Root', 'Rest'],
            data: {
                wps_reference: [],
                parent_material_group: [],
                product_type: [],
                transfer_mode: [],
                type_of_weld: [],
                filler_material_group: [],
                shielding_gas: [],
                type_polarity: [],
                welding_position: [],
                welding_details: [],
                welding_processes: [],
                process_one: [],
                process_two: [],
                header: [],
            },
            wpsDefault: {
                id: null,
                name: "",
                process_one: {
                    id: null,
                    range: "",
                    test: ""
                },
                process_two: {
                    id: null,
                    range: "",
                    test: ""
                },
                filler_material_group: {
                    id: null,
                    range: "",
                    test: ""
                },
                parent_material_group: {
                    id: null,
                    range: "",
                    test: ""
                },
                product_type: {
                    id: null,
                    range: "",
                    test: ""
                },
                type_of_weld: {
                    id: null,
                    range: "",
                    test: ""
                },
                welding_processes: {
                    id: null,
                    range: "",
                    test: ""
                },
                header: {
                    id: null,
                    range: "",
                    test: ""
                },
            },
            wps: {},
            clientData: {
                name: "",
                identification: "",
                employer: "",
                testing_standard: "",
                job_knowledge: "",
                photo: "",
                test_ref: "",
                lr_control: "",
                deposited_thickness_root: 0,
                deposited_thickness_rest: 0,
                outside_pipe_diameter_1: 0,
                outside_pipe_diameter_2: 0,
                deposited_deposit1: '',
                deposited_deposit2: '',
                applicable_1: false,
                applicable_2: false,
                document_number1: "MSMK QF032",
                document_number2: "Rev 1",
                weld_test: '',
                visual_examination: false,
                transverse_bends: false,
                specimen_macro: false,
                transverse_side: false,
                ultrasonic_examination: false,
                withenessed_name: '',
                withenessed_position: '',
                withenessed_date: '',
                behaulf_name: '',
                behaulf_position: '',
                behaulf_date: '',
                all_thickness_plate_1: false,
                all_thickness_plate_2: false,
                all_thickness_tube_1: false,
                all_thickness_tube_2: false,
                all_thickness_bar: false,

                plate_1_thickness_cb: true,
                plate_2_thickness_cb: false,
                tube_1_thickness_cb: false,
                tube_2_thickness_cb: false,
                bar_thickness_cb: false,
                plate_1_thickness: 0,
                plate_2_thickness: 0,
                tube_1_thickness: 0,
                tube_2_thickness: 0,
                bar_thickness: 0,
                transfer_mode: {
                    id: null,
                    range: "",
                    test: ""
                },
                shielding_gas: {
                    id: null,
                    range: "",
                    test: ""
                },
                type_polarity: {
                    id: null,
                    range: "",
                    test: ""
                },
                welding_position: {
                    id: null,
                    range: "",
                    test: ""
                },
                welding_details: {
                    id: null,
                    range: "",
                    test: ""
                }
            },
        }
    },
    created() {
        this.wps = this.wpsDefault;
        this.getData();
    },
    computed: {
        depositedThicknessRootNum1() {
            if(this.clientData.deposited_thickness_root < 3) {
                return 'From '+ this.clientData.deposited_thickness_root
            } else {
                return 'From 3'
            }
        },
        depositedThicknessRootNum2() {
            if ((this.clientData.deposited_thickness_root >= 3) && (this.clientData.deposited_thickness_root < 12)) {
                return this.clientData.deposited_thickness_root * 2
            } else {
                if (this.clientData.deposited_thickness_root >= 12) {
                    return "No Restriction"
                } else {
                    if ((this.clientData.deposited_thickness_root * 2)<3) {
                        return "3"
                    } else {
                        return this.clientData.deposited_thickness_root * 2
                    }
                }
            }
        },
        depositedThicknessRestNum1() {
            if(this.clientData.deposited_thickness_rest < 3) {
                return 'From '+ this.clientData.deposited_thickness_rest
            } else {
                return 'From 3'
            }
        },
        depositedThicknessRestNum2() {
            if ((this.clientData.deposited_thickness_rest >= 3) && (this.clientData.deposited_thickness_rest < 12)) {
                return this.clientData.deposited_thickness_rest * 2
            } else {
                if (this.clientData.deposited_thickness_rest >= 12) {
                    return "No Restriction"
                } else {
                    if ((this.clientData.deposited_thickness_rest * 2)<3) {
                        return "3"
                    } else {
                        return this.clientData.deposited_thickness_rest * 2
                    }
                }
            }
        },
        materialThicknessPlate_1() {
            let result = '';
            if (this.clientData.plate_1_thickness >= 3){
                return "From 3 To No Restriction";
            } else {
                result = "From " + this.clientData.plate_1_thickness + " To "
            }
            if ((this.clientData.plate_1_thickness*2) < 3)  {
                result = result + "3"
            } else {
                result = result + this.clientData.plate_1_thickness * 2
            }
            return result;
        },
        materialThicknessPlate_2() {
            let result = '';
            if (this.clientData.plate_2_thickness >= 3){
                return "From 3 To No Restriction";
            } else {
                result = "From " + this.clientData.plate_2_thickness + " To "
            }
            if ((this.clientData.plate_2_thickness*2) < 3)  {
                result = result + "3"
            } else {
                result = result + this.clientData.plate_2_thickness * 2
            }
            return result;
        },
        materialThicknessTube_1() {
            let result = '';
            if (this.clientData.tube_1_thickness >= 3){
                return "From 3 To No Restriction";
            } else {
                result = "From " + this.clientData.tube_1_thickness + " To "
            }
            if ((this.clientData.tube_1_thickness*2) < 3)  {
                result = result + "3"
            } else {
                result = result + this.clientData.tube_1_thickness * 2
            }
            return result;
        },
        materialThicknessTube_2() {
            let result = '';
            if (this.clientData.tube_2_thickness >= 3){
                return "From 3 To No Restriction";
            } else {
                result = "From " + this.clientData.tube_2_thickness + " To "
            }
            if ((this.clientData.tube_2_thickness*2) < 3)  {
                result = result + "3"
            } else {
                result = result + this.clientData.tube_2_thickness * 2
            }
            return result;
        },
        materialThicknessBar() {
            let result = '';
            if (this.clientData.bar_thickness >= 3) {
                return "From 3 To No Restriction";
            } else {
                result = "From " + this.clientData.bar_thickness + " To "
            }
            if ((this.clientData.bar_thickness * 2) < 3) {
                result = result + "3"
            } else {
                result = result + this.clientData.bar_thickness * 2
            }
            return result;
        },
        outsidePipeDiameter_1_1() {
            if(this.clientData.outside_pipe_diameter_1 == "Not Applicable") {
                return "For D >=500"
            } else {
                if (this.wps.product_type.test == "Plate (P)") {
                    return "For D >=500"
                } else {
                    if(this.clientData.outside_pipe_diameter_1 <= 25) {
                        return this.clientData.outside_pipe_diameter_1
                    } else {
                        if ((this.clientData.outside_pipe_diameter_1 > 25) && (this.clientData.outside_pipe_diameter_1 <= 50)) {
                            return 25
                        } else {
                            return this.clientData.outside_pipe_diameter_1*0.5
                        }
                    }
                }
            }
        },
        outsidePipeDiameter_1_2() {
            if(this.clientData.outside_pipe_diameter_1 == "Not Applicable") {
                return "or >=75"
            } else {
                if(this.wps.product_type.test == "Plate (P)") {
                    return "or >=75"
                } else {
                    return "to"
                }
            }
        },
        outsidePipeDiameter_1_3() {
            if(this.clientData.outside_pipe_diameter_1 == "Not Applicable") {
                return "in PA, PB, PC and PD rotated"
            } else {
                if(this.wps.product_type.test == "Plate (P)") {
                    return "in PA, PB, PC and PD rotated"
                } else {
                    if(this.clientData.outside_pipe_diameter_1 > 25) {
                        return "No Restriction"
                    } else {
                        return this.clientData.outside_pipe_diameter_1 * 2
                    }
                }
            }
        },
        outsidePipeDiameter_2_1() {
            if(this.clientData.outside_pipe_diameter_2 == "Not Applicable") {
                return "For D >=500"
            } else {
                if (this.wps.product_type.test == "Plate (P)") {
                    return "For D >=500"
                } else {
                    if(this.clientData.outside_pipe_diameter_2 <= 25) {
                        return this.clientData.outside_pipe_diameter_2
                    } else {
                        if ((this.clientData.outside_pipe_diameter_2 > 25) && (this.clientData.outside_pipe_diameter_2 <= 50)) {
                            return 25
                        } else {
                            return this.clientData.outside_pipe_diameter_2*0.5
                        }
                    }
                }
            }
        },
        outsidePipeDiameter_2_2() {
            if(this.clientData.outside_pipe_diameter_2 == "Not Applicable") {
                return "or >=75"
            } else {
                if(this.wps.product_type.test == "Plate (P)") {
                    return "or >=75"
                } else {
                    return "to"
                }
            }
        },
        outsidePipeDiameter_2_3() {
            if(this.clientData.outside_pipe_diameter_2 == "Not Applicable") {
                return "in PA, PB, PC and PD rotated"
            } else {
                if(this.wps.product_type.test == "Plate (P)") {
                    return "in PA, PB, PC and PD rotated"
                } else {
                    if(this.clientData.outside_pipe_diameter_2 > 25) {
                        return "No Restriction"
                    } else {
                        return this.clientData.outside_pipe_diameter_2 * 2
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
        },
        materialThickness() {
            let result = 't';
            if(this.wps.product_type.test == 'Plate(P) to Bar') {
                return result +
                    this.clientData.plate_1_thickness + '/' +
                    this.clientData.outside_pipe_diameter_1
            }
            else if(this.wps.product_type.test == 'Plate(T) to Bar') {
                return result +
                    this.clientData.tube_1_thickness + '/' +
                    this.clientData.outside_pipe_diameter_1
            }
            else if(this.clientData.plate_1_thickness_cb && this.clientData.plate_2_thickness_cb) {
                return result +
                    this.clientData.plate_1_thickness + '-' +
                    this.clientData.plate_2_thickness
            }
            else if(this.clientData.tube_1_thickness_cb && this.clientData.tube_2_thickness_cb) {
                return result +
                    this.clientData.tube_1_thickness + '/' +
                    this.clientData.outside_pipe_diameter_1 + '/t' +
                    this.clientData.tube_2_thickness + '/' +
                    this.clientData.outside_pipe_diameter_2
            }
            else {
                if(this.clientData.plate_1_thickness_cb && this.clientData.tube_1_thickness_cb) {
                    return result +
                        this.clientData.plate_1_thickness + '-' +
                        this.clientData.tube_1_thickness + '/' +
                        this.clientData.outside_pipe_diameter_1
                }
                else if(this.clientData.plate_1_thickness_cb && this.clientData.bar_thickness_cb) {
                    return result +
                        this.clientData.plate_1_thickness + '/t' +
                        this.clientData.bar_thickness
                }
                else if(this.clientData.plate_1_thickness_cb) {
                    return result + this.clientData.plate_1_thickness
                }
                else if(this.clientData.bar_thickness_cb) {
                    return result + this.clientData.bar_thickness
                }
            }
        }
    },
    methods: {
        addElement() {
            this.$validator.validateAll().then((result) => {
                if (!result) {
                    return;
                } else {
                    axios.post('/api/element', this.newElement).then((response) => {
                        this.data[this.newElement.table].push(response.data)
                        this.modalShow = false
                    }).catch((error) => {
                        swal({
                            icon: "error",
                            text: 'Error'
                        });
                    });
                }
            })
        },
        openEditModal(table) {
            this.editElement.table = table
            this.editElement.id = this.clientData[table].id
            this.editElement.test = this.clientData[table].test
            this.editElement.range = this.clientData[table].range
            this.modalEditShow = true
        },
        deletePhoto() {
            document.getElementById("image").setAttribute('src', './user.png');
            document.getElementById("fileinput_c").setAttribute('value', '');
            this.$refs.fileinput.reset();
        },
        setElement(event, array) {
            var result = this.data[array].find((item) => {
                return item.test == event;
            })
            if(result) {
                this.clientData[array].range = result.range
                this.clientData[array].id = result.id
            } else {
                this.clientData[array].range = ""
                this.clientData[array].id = null
            }
        },
        setElementWPS(event, array) {
            var result = this.data[array].find((item) => {
                return item.test == event;
            })
            result ? this.wps[array].range = result.range : this.wps[array].range = "";
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
                result.process_one = result.process_one ? result.process_one : this.wpsDefault.process_one
                result.process_two = result.process_two ? result.process_two : this.wpsDefault.process_two
                this.wps = result
            } else {
                this.wps = this.wpsDefault
            }
        },
        getData() {
            axios.get('/api/pdf-data').then(response => {
                Object.assign(this.data, response.data);
            })
            if(this.$route.params.id) {
                axios.get('/api/client/'+this.$route.params.id).then(response => {
                    Object.assign(this.clientData, response.data.client);
                    Object.assign(this.wps, response.data.wps);
                    if(response.data.client.photo) {
                        document.getElementById("image").setAttribute('src', response.data.client.photo)
                        document.getElementById("fileinput_c").setAttribute('value', response.data.client.photo)
                    }
                })
            }
        },
        updateElement() {
            this.$validator.validateAll().then((result) => {
                if (!result) {
                    return;
                } else {
                    axios.post('/api/element/'+this.editElement.id, this.editElement).then((response) => {
                        this.data[this.editElement.table].map(item => {
                            if(item.id == this.editElement.id) {
                                item.test = this.editElement.test
                                item.range = this.editElement.range
                                this.clientData[this.editElement.table] = this.editElement
                            }
                        })
                        this.modalEditShow = false
                    }).catch((error) => {
                        swal({
                            icon: "error",
                            text: 'Error'
                        });
                    });
                }
            })
        },
        deleteElement() {
            axios.post('/api/del-element/'+this.editElement.id, this.editElement).then((response) => {
                this.data[this.editElement.table].map(item => {
                    if(item.id == this.editElement.id) {
                        this[this.editElement.table] = {
                            test: "",
                            range: ""
                        }
                        let index = this.data[this.editElement.table].indexOf(item)
                        this.data[this.editElement.table].splice(index, 1)
                    }
                })
                this.modalEditShow = false
            }).catch((error) => {
                swal({
                    icon: "error",
                    text: 'Error'
                });
            });
        },
        saveData() {
            this.clientData.photo = document.getElementById("fileinput_c").getAttribute('value')
            axios.post('/api/client', {
                wps: this.wps,
                client: this.clientData
            }).then((response) => {
                swal({
                    icon: 'success',
                    text: `Client saved`
                });
            }).catch((error) => {
                swal({
                    icon: "error",
                    text: 'Error'
                });
            });
        },
        updateData() {
            this.clientData.photo = document.getElementById("fileinput_c").getAttribute('value')
            axios.post('/api/client/'+this.$route.params.id, {
                wps: this.wps,
                client: this.clientData
            }).then((response) => {
                swal({
                    icon: 'success',
                    text: `Client updated`
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
                    axios.post('/api/del-client/'+this.$route.params.id).then((response) => {
                        window.location.href = '/clients';
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
