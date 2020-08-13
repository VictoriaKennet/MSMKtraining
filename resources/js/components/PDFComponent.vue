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
                                        <b-form-input list="code" id="input-with-list"></b-form-input>
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
                            <b-row>
                                <b-col>
                                    <!-- Выпадающий список wps reference -->
                                    <b-form-group label="WPS-Reference">
                                        <b-form-input list="wps-reference" id="input-with-list" @change="test($event)"></b-form-input>
                                        <b-form-datalist id="wps-reference" :options="data" text-field="name">
                                        </b-form-datalist>
                                    </b-form-group>

                                    <!-- <b-form-group label="Transfer mode">
                                        <b-form-input list="transfer_mode_list" id="input-with-list" :value="transfer_mode.test"></b-form-input>
                                        <b-form-datalist id="transfer_mode" :options="transfer_mode" text-field="text"></b-form-datalist>
                                    </b-form-group> -->

                                    <b-form-group label="Product type(plate or pipe)">
                                        <b-form-input list="product-type" id="input-with-list" :value="wps.product_type.test"></b-form-input>
                                        <b-form-datalist id="product-type" :options="product_type" text-field="test"></b-form-datalist>
                                    </b-form-group>

                                    <!-- /Выпадающий список wps reference -->
                                    <!-- <b-form-group label="Type of weld">
                                        <b-form-input list="type_weld" id="input-with-list" :value="wps.type_weld.test"></b-form-input>
                                        <b-form-datalist id="type_weld" ></b-form-datalist>
                                    </b-form-group> -->

                                    <!-- /Выпадающий список wps reference -->
                                    <b-form-group label="Parent material group(s)/subgrps">
                                        <b-form-input list="input-list" id="input-with-list"></b-form-input>
                                        <b-form-datalist id="input-list"></b-form-datalist>
                                    </b-form-group>

                                    <!-- /Выпадающий список wps reference -->
                                    <b-form-group label="Filler material groups(s)">
                                        <b-form-input list="input-list" id="input-with-list"></b-form-input>
                                        <b-form-datalist id="input-list"></b-form-datalist>
                                    </b-form-group>

                                    <!-- /Выпадающий список wps reference -->
                                    <label for="input-default">Filler material ( Designation)</label>
                                    <b-row class="my-1">
                                        <b-col sm="3">
                                        <label for="input-default">Process 1</label>
                                        </b-col>
                                        <b-col sm="9">
                                        <b-form-input list="input-list" id="input-with-list"></b-form-input>
                                        <b-form-datalist id="input-list"></b-form-datalist>
                                        </b-col>
                                    </b-row>
                                    <b-row class="my-1">
                                        <b-col sm="3">
                                        <label for="input-default">Process 2</label>
                                        </b-col>
                                        <b-col sm="9">
                                        <b-form-input list="input-list" id="input-with-list"></b-form-input>
                                        <b-form-datalist id="input-list"></b-form-datalist>
                                        </b-col>
                                    </b-row>

                                    <!-- /Выпадающий список wps reference -->
                                    <b-form-group label="Shielding gas">
                                        <b-form-input list="input-list" id="input-with-list"></b-form-input>
                                        <b-form-datalist id="input-list"></b-form-datalist>
                                    </b-form-group>
                                </b-col>
                                <b-col>
                                    <!-- /Выпадающий список wps reference -->
                                    <b-form-group label="Type of current and polarity">
                                        <b-form-input list="input-list" id="input-with-list"></b-form-input>
                                        <b-form-datalist id="input-list"></b-form-datalist>
                                    </b-form-group>

                                    <!-- /Выпадающий список wps reference -->
                                    <b-form-group label="Product type(plate or pipe)">
                                        <b-form-input list="input-list" id="input-with-list"></b-form-input>
                                        <b-form-datalist id="input-list"></b-form-datalist>
                                    </b-form-group>

                                    <!-- /Поле ввода  -->
                                    <b-form-group label="Material thickness(mm)">
                                        <b-form-input placeholder="Enter number">
                                        </b-form-input>
                                    </b-form-group>

                                    <!-- /Выпадающий список wps reference -->
                                    <label for="input-default">Deposited thickness(mm)</label>
                                    <b-row class="my-1">
                                        <b-col sm="3">
                                            <label for="input-default">Process 1</label>
                                        </b-col>
                                        <b-col sm="9">
                                            <b-form-input list="input-list" id="input-with-list"></b-form-input>
                                            <b-form-datalist id="input-list"></b-form-datalist>
                                        </b-col>
                                    </b-row>
                                    <b-row class="my-1">
                                        <b-col sm="3">
                                            <label for="input-default">Process 2</label>
                                        </b-col>
                                        <b-col sm="9">
                                            <b-form-input list="input-list" id="input-with-list"></b-form-input>
                                            <b-form-datalist id="input-list"></b-form-datalist>
                                        </b-col>
                                    </b-row>

                                    <!-- /Поле ввода  -->
                                    <b-form-group label="Outside pipe diameter(mm)">
                                        <b-form-input placeholder="Enter number">
                                        </b-form-input>
                                    </b-form-group>

                                    <!-- /Выпадающий список wps reference -->
                                    <b-form-group label="Welding position">
                                        <b-form-input list="input-list" id="input-with-list"></b-form-input>
                                        <b-form-datalist id="input-list"></b-form-datalist>
                                    </b-form-group>

                                    <!-- /Выпадающий список wps reference -->
                                    <b-form-group label="Weld details">
                                        <b-form-input list="input-list" id="input-with-list"></b-form-input>
                                        <b-form-datalist id="input-list"></b-form-datalist>
                                    </b-form-group>

                                    <!-- /Выпадающий список wps reference -->
                                    <b-form-group label="Multi-layer/single layer">
                                        <b-form-input list="input-list" id="input-with-list"></b-form-input>
                                        <b-form-datalist id="input-list"></b-form-datalist>
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
            <!-- Выпадающий список wps reference -->
            <select v-model="wps">
                <option v-for="item in data" :key="item.id" :value="item">{{ item.name }}</option>
            </select>
            <input type="hidden" name="wps_reference" :value="wps.name">
            <!-- /Выпадающий список wps reference -->

            <div>
                <label for="">range</label><input type="text" name="parent_material_group_range" :value="wps.parent_material_group.range"><br>
                <label for="">test</label>
                <select name="parent_material_group_test" v-model="wps.parent_material_group.test">
                    <option v-for="item in parent_material_group" :key="item.id" :value="item.test">{{ item.test }}</option>
                </select>
            </div>

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
            opt: ['Apple', 'Banana', 'Grape', 'Kiwi', 'Orange'],
            data: [],
            parent_material_group: [],
            product_type: [],
            transfer_mode:[],
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
                console.log(response.data)
                this.product_type = response.data;
            })
        },
        transferMode() {
            axios.get('/api/transfer_mode').then(response => {
                console.log(response.data)
                this.transfer_mode = response.data;
            })
        }
    }
};
</script>
<style>
  .img_size {
      height: 193px;
      margin: 8% 0 10% 30%;
    }
  .border_bt {
    margin-bottom: 40px;
  }
</style>
