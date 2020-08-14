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
                                    <b-form-group label="Code/testing standard">
                                        <b-form-input placeholder="Code/testing standard" list="code" id="input-with-list"></b-form-input>
                                        <b-form-datalist id="code">
                                        </b-form-datalist>
                                    </b-form-group>

                                    <!-- /Поле ввода  -->
                                    <b-form-group label="Test Ref No">
                                        <b-form-input placeholder="Enter Test Ref No">
                                        </b-form-input>
                                    </b-form-group>
                                </b-col>

                                <b-col>
                                    <b-form-group>
                                    <b-img src="https://cdn.onlinewebfonts.com/svg/img_245305.png" fluid class="img_size" ></b-img>
                                    <b-form-file
                                    v-model="photo"
                                    placeholder="Choose a file or drop it"
                                    drop-placeholder="Drop file here"
                                    ></b-form-file>
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
                                <b-form-input list="wps-reference" id="input-with-list" @change="test($event)"></b-form-input>
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
                                        <b-form-input list="welding-processes" id="input-with-list" :value="wps.welding_processes.test"></b-form-input>
                                        <b-form-datalist id="welding-processes" :options="welding_processes" text-field="test"></b-form-datalist>
                                    </b-form-group>
                                </b-col>
                                <b-col cols="5">
                                    <b-form-group>
                                        <b-form-input list="welding-processes" id="input-with-list" :value="wps.welding_processes.range"></b-form-input>
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
                                        <b-form-input list="transfer-mode" id="input-with-list"></b-form-input>
                                        <b-form-datalist id="transfer-mode" :options="transfer_mode" text-field="test">
                                        </b-form-datalist>
                                    </b-form-group>
                                </b-col>
                                <b-col cols="5">
                                    <b-form-group>
                                        <b-form-input list="transfer-mode" id="input-with-list"></b-form-input>
                                        <b-form-datalist id="transfer-mode" :options="transfer_mode" text-field="range">
                                        </b-form-datalist>
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
                                        <b-form-input list="product-type" id="input-with-list" :value="wps.product_type.test"></b-form-input>
                                        <b-form-datalist id="product-type" :options="product_type" text-field="test"></b-form-datalist>
                                    </b-form-group>
                                </b-col>
                                <b-col cols ="5">
                                    <b-form-group>
                                        <b-form-input list="product-type" id="input-with-list" :value="wps.product_type.range"></b-form-input>
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
                                        <b-form-input list="type-weld" id="input-with-list" :value="wps.type_of_weld.test"></b-form-input>
                                        <b-form-datalist id="type-weld" :options="type_of_weld" text-field="test"></b-form-datalist>
                                    </b-form-group>
                                </b-col>
                                <b-col cols ="5">
                                    <b-form-group>
                                        <b-form-input list="type-weld" id="input-with-list" :value="wps.type_of_weld.range"></b-form-input>
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
                                        <b-form-input list="parent-material-group" id="input-with-list" :value="wps.parent_material_group.test"></b-form-input>
                                        <b-form-datalist id="parent-material-group" :options="parent_material_group" text-field="test"></b-form-datalist>
                                    </b-form-group>
                                </b-col>
                                <b-col cols ="5">
                                    <b-form-group>
                                        <b-form-input list="parent-material-group" id="input-with-list" :value="wps.parent_material_group.range"></b-form-input>
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
                                        <b-form-input list="filler-material-group" id="input-with-list" :value="wps.filler_material_group.test"></b-form-input>
                                        <b-form-datalist id="filler-material-group" :options="filler_material_group" text-field="test"></b-form-datalist>
                                    </b-form-group>
                                </b-col>
                                <b-col cols="5">
                                    <b-form-group>
                                        <b-form-input list="filler-material-group" id="input-with-list" :value="wps.filler_material_group.range"></b-form-input>
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
                                            <b-form-input list="process" id="input-with-list"></b-form-input>
                                            <b-form-datalist id="process"></b-form-datalist>
                                        </b-col>
                                    </b-row>
                                    <b-row >
                                        <b-col cols="5">
                                            <label for="input-default">Process 2</label>
                                        </b-col>
                                        <b-col cols="7">
                                            <b-form-input list="process" id="input-with-list"></b-form-input>
                                            <b-form-datalist id="process"></b-form-datalist>
                                        </b-col>
                                    </b-row>
                                </b-col>
                                <b-col>
                                    <b-form-group class="m-20">
                                        <b-form-input list="test222" id="input-with-list"></b-form-input>
                                        <b-form-datalist id="test222" ></b-form-datalist>
                                    </b-form-group>
                                    <b-form-group>
                                        <b-form-input list="test222" id="input-with-list"></b-form-input>
                                        <b-form-datalist id="test222"></b-form-datalist>
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
                                        <b-form-input list="shielding-gas" id="input-with-list"></b-form-input>
                                        <b-form-datalist id="shielding-gas" :options="shielding_gas" text-field="test"></b-form-datalist>
                                    </b-form-group>
                                </b-col>
                                <b-col cols="5">
                                    <b-form-group>
                                        <b-form-input list="shielding-gas" id="input-with-list"></b-form-input>
                                        <b-form-datalist id="shielding-gas" :options="shielding_gas" text-field="range"></b-form-datalist>
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
                                        <b-form-input list="type-polarity" id="input-with-list"></b-form-input>
                                        <b-form-datalist id="type-polarity" :options="type_polarity" text-field="test"></b-form-datalist>
                                    </b-form-group>
                                </b-col>
                                <b-col cols="5">
                                    <b-form-group>
                                        <b-form-input list="type-polarity" id="input-with-list"></b-form-input>
                                        <b-form-datalist id="type-polarity" :options="type_polarity" text-field="range"></b-form-datalist>
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
                                        <b-form-input list="type-polarity" id="input-with-list"></b-form-input>
                                        <b-form-datalist id="type-polarity" :options="type_polarity" text-field="test"></b-form-datalist>
                                    </b-form-group>
                                </b-col>
                                <b-col cols="5">
                                    <b-row>
                                        <b-col cols="5">
                                            <b-form-group>
                                                <b-form-input>
                                                </b-form-input>
                                            </b-form-group>
                                        </b-col>
                                        <b-col cols="2">
                                            <p class="centre">To</p>
                                        </b-col>
                                        <b-col cols="5">
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
                                            <b-form-input list="process" id="input-with-list"></b-form-input>
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
                                            <b-form-input list="process" id="input-with-list"></b-form-input>
                                            <b-form-datalist id="process"></b-form-datalist>
                                        </b-col>
                                    </b-row>
                                </b-col>
                                <b-col>
                                    <b-form-group class="m-20">
                                        <b-form-input list="test333" id="input-with-list"></b-form-input>
                                        <b-form-datalist id="test333" ></b-form-datalist>
                                    </b-form-group>
                                    <b-form-group>
                                        <b-form-input list="test333" id="input-with-list"></b-form-input>
                                        <b-form-datalist id="test333"></b-form-datalist>
                                    </b-form-group>
                                </b-col>
                            </b-row>
                            <hr>





                            <b-row>
                                <b-col>
                                    

                                  
                                    

                                    <!-- /Поле ввода  -->
                                    <b-form-group label="Material thickness(mm)">
                                        <b-form-input placeholder="Enter number" name="material_thickness">
                                        </b-form-input>
                                    </b-form-group>

                                    <!-- /Поле ввода  -->
                                    <b-form-group label="Outside pipe diameter(mm)">
                                        <b-form-input placeholder="Enter number" name="outside_pipe_diameter">
                                        </b-form-input>
                                    </b-form-group>

                                    <!-- /Выпадающий список wps reference -->
                                    <b-form-group label="Welding position">
                                        <b-form-input list="welding-position" id="input-with-list"></b-form-input>
                                        <b-form-datalist id="welding-position" :options="welding_position" text-field="test"></b-form-datalist>
                                    </b-form-group>
                                    
                                    <!-- /Выпадающий список wps reference -->
                                    <b-form-group label="Weld details">
                                        <b-form-input list="welding-details" id="input-with-list"></b-form-input>
                                        <b-form-datalist id="welding-details" :options="welding_details" text-field="test"></b-form-datalist>
                                    </b-form-group>

                                    <!-- /Выпадающий список wps reference -->
                                    <b-form-group label="Multi-layer/single layer">
                                        <b-form-input list="input-list" id="input-with-list"></b-form-input>
                                        <b-form-datalist id="input-list"></b-form-datalist>
                                    </b-form-group>

                                    <!-- /Выпадающий список wps reference -->
                                    <label for="input-default">Deposited thickness(mm)</label>
                                    <b-row class="my-1">
                                        <b-col sm="4">
                                            <label for="input-default">Process 1 (Root)</label>
                                        </b-col>
                                        <b-col sm="8">
                                            <b-form-input placeholder="Enter number" name="deposited_root">
                                            </b-form-input>
                                        </b-col>
                                    </b-row>
                                    <b-row class="my-1">
                                        <b-col sm="4">
                                            <label for="input-default">Process 2 (Rest)</label>
                                        </b-col>
                                        <b-col sm="8">
                                            <b-form-input placeholder="Enter number" name="deposited_rest">
                                            </b-form-input>
                                        </b-col>
                                    </b-row>
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
    },
    methods: {
        test(value) {
            let result = this.data.find((item) => {
                return item.name == value;
            })
            result ? this.wps = result : this.wps = this.wpsDefault;
        },
        getData() {
            axios.get('/api/wps').then(response => {
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
                console.log(response.data)
                this.type_of_weld = response.data;
            })
        },
        fillerMaterialGroup() {
            axios.get('/api/filler-material-group').then(response => {
                console.log(response.data)
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
                console.log(response.data)
                this.welding_position = response.data;
            })
        },
        weldingDetails() {
            axios.get('/api/welding-details').then(response => {
                console.log(response.data)
                this.welding_details = response.data;
            })
        },
        weldingProcesses() {
            axios.get('/api/welding-processes').then(response => {
                console.log(response.data)
                this.welding_processes = response.data;
            })
        }
    }
};
</script>
<style>
  .img_size {
    height: 200px;
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
