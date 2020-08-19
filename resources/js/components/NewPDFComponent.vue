<template>
<div>
    <b-container class="mt-2 mb-2">
        <form>
            <b-card no-body class="mb-1">
                <b-card-body>
                    <!-- Выпадающий список wps reference -->
                    <b-row>
                        <b-col cols="12">
                            <b-form-group label="WPS-Reference">
                                <b-form-input list="wps-reference" name="wps_reference" v-model="newElement.name"></b-form-input>
                            </b-form-group>
                        </b-col>
                    </b-row>
                    <hr>
                    <b-row>
                        <b-col cols="3">
                            <label for="input-default">Designation 9606-1</label>
                        </b-col>
                        <b-col cols="4">
                            <b-form-group>
                                <b-form-input name="header_1" list="main-header-1" v-model="newElement.header.test" @change="setElementWPS($event, 'header')"></b-form-input>
                                <b-form-datalist id="main-header-1" :options="data.header" text-field="test"></b-form-datalist>
                            </b-form-group>
                        </b-col>
                        <b-col cols="5">
                            <b-form-group>
                                <b-form-input name="header_2" list="main-header-2" v-model="newElement.header.range"></b-form-input>
                                <b-form-datalist id="main-header-2" :options="data.header" text-field="range"></b-form-datalist>
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
                                <b-form-input name="welding_processes_test" list="welding-processes" v-model="newElement.welding_processes.test" @change="setElementWPS($event, 'welding_processes')"></b-form-input>
                                <b-form-datalist id="welding-processes" :options="data.welding_processes" text-field="test"></b-form-datalist>
                            </b-form-group>
                        </b-col>
                        <b-col cols="5">
                            <b-form-group>
                                <b-form-input name="welding_processes_range" list="welding-processes" v-model="newElement.welding_processes.range"></b-form-input>
                                <b-form-datalist id="welding-processes" :options="data.welding_processes" text-field="range"></b-form-datalist>
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
                                <b-form-input name="product_type_test" list="product-type" v-model="newElement.product_type.test" @change="setElementWPS($event, 'product_type')"></b-form-input>
                                <b-form-datalist id="product-type" :options="data.product_type" text-field="test"></b-form-datalist>
                            </b-form-group>
                        </b-col>
                        <b-col cols ="5">
                            <b-form-group>
                                <b-form-input name="product_type_range" list="product-type" v-model="newElement.product_type.range"></b-form-input>
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
                                <b-form-input name="type_of_weld_test" list="type-weld" v-model="newElement.type_of_weld.test" @change="setElementWPS($event, 'type_of_weld')"></b-form-input>
                                <b-form-datalist id="type-weld" :options="data.type_of_weld" text-field="test"></b-form-datalist>
                            </b-form-group>
                        </b-col>
                        <b-col cols ="5">
                            <b-form-group>
                                <b-form-input name="type_of_weld_range" list="type-weld" v-model="newElement.type_of_weld.range"></b-form-input>
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
                                <b-form-input name="parent_material_group_test" list="parent-material-group" v-model="newElement.parent_material_group.test" @change="setElementWPS($event, 'parent_material_group')"></b-form-input>
                                <b-form-datalist id="parent-material-group" :options="data.parent_material_group" text-field="test"></b-form-datalist>
                            </b-form-group>
                        </b-col>
                        <b-col cols ="5">
                            <b-form-group>
                                <b-form-input name="parent_material_group_range" list="parent-material-group" v-model="newElement.parent_material_group.range"></b-form-input>
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
                                <b-form-input name="filler_material_group_test" list="filler-material-group" v-model="newElement.filler_material_group.test" @change="setElementWPS($event, 'filler_material_group')"></b-form-input>
                                <b-form-datalist id="filler-material-group" :options="data.filler_material_group" text-field="test"></b-form-datalist>
                            </b-form-group>
                        </b-col>
                        <b-col cols="5">
                            <b-form-group>
                                <b-form-input name="filler_material_group_range" list="filler-material-group" v-model="newElement.filler_material_group.range"></b-form-input>
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
                                    <b-form-input name="process_data_test_1" list="process_data_1" v-model="newElement.filler_material_designation[0].process.test" @change="setElementWPSProcess($event, 'process_data', 0)"></b-form-input>
                                    <b-form-datalist id="process_data_1" :options="data.process_data" text-field="test"></b-form-datalist>
                                </b-col>
                            </b-row>
                            <b-row>
                                <b-col cols="5">
                                    <label for="input-default">Process 2</label>
                                </b-col>
                                <b-col cols="7">
                                    <b-form-input name="process_data_test_2" list="process_data_2" v-model="newElement.filler_material_designation[1].process.test" @change="setElementWPSProcess($event, 'process_data', 1)"></b-form-input>
                                    <b-form-datalist id="process_data_2" :options="data.process_data" text-field="test"></b-form-datalist>
                                </b-col>
                            </b-row>
                        </b-col>
                        <b-col>
                            <b-form-group class="m-20">
                                <b-form-input name="process_data_range_1" list="process-data-2-range-1" v-model="newElement.filler_material_designation[0].process.range"></b-form-input>
                                <b-form-datalist id="process-data-2-range-1" :options="data.process_data" text-field="range"></b-form-datalist>
                            </b-form-group>
                            <b-form-group>
                                <b-form-input name="process_data_range_2" list="process-data-2-range-2" v-model="newElement.filler_material_designation[1].process.range"></b-form-input>
                                <b-form-datalist id="process-data-2-range-2" :options="data.process_data" text-field="range"></b-form-datalist>
                            </b-form-group>
                        </b-col>
                    </b-row>
                </b-card-body>
            </b-card>

            <b-row>
                <b-col>
                    <div class="d-flex justify-content-center">
                        <input type="button" value="Save" class="button" @click="save">
                        <input type="button" value="Back" class="button ml-2" @click="$router.push({path: '/'})">
                    </div>
                </b-col>
            </b-row>
        </form>
    </b-container>
</div>
</template>

<script>
export default {
    data() {
        return {
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
            newElement: {
                name: "",
                filler_material_designation: [
                    {
                        process_number: "1",
                        process: {
                            range: "",
                            test: ""
                        }
                    },
                    {
                        process_number: "2",
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
        }
    },
    created() {
        this.getData();
    },
    methods: {
        setElementWPS(event, array) {
            var result = this.data[array].find((item) => {
                return item.test == event;
            })
            this.newElement[array].range = result ? this.newElement[array].range = result.range : this.newElement[array].range = "";
        },
        setElementWPSProcess(event, array, index) {
            var result = this.data[array].find((item) => {
                return item.test == event;
            })
            this.newElement.filler_material_designation[index].process.range = result ? this.newElement.filler_material_designation[index].process.range = result.range : this.newElement.filler_material_designation[index].process.range = "";
        },
        getData() {
            axios.get('/api/pdf-data').then(response => {
                Object.assign(this.data, response.data);
            })
        },
        save() {
            axios.post('/api/added-wps', this.newElement).then((response) => {
                this.$router.push({path: '/'});
            }).catch((error) => {
                alert("Error")
            });
        }
    }
}
</script>
