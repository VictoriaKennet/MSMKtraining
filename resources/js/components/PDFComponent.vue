<template>
  <div>
    <b-container>
      <div role="tablist">
      <b-card no-body class="mb-1">
        <b-card-header header-tag="header" class="p-1" role="tab">
          <b-button block v-b-toggle.accordion-1 variant="info">Main information</b-button>
        </b-card-header>
        <b-collapse id="accordion-1" visible accordion="my-accordion" role="tabpanel">
          <b-card-body>
            <b-row>
              <b-col>
                <b-form-group label="Welder's name">
                  <b-form-input placeholder="Enter welder's name">
                  </b-form-input>
                </b-form-group>

                <!-- /Поле ввода  -->
                <b-form-group label="Identification">
                  <b-form-input placeholder="Enter identification">
                  </b-form-input>
                </b-form-group>
                <!-- /Поле ввода  -->
                <b-form-group label="Code/testing standard">
                    <b-form-input list="input-list" id="input-with-list"></b-form-input>
                    <b-form-datalist id="input-list" :options="opt"></b-form-datalist>
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
                  <!-- /Выпадающий список wps reference -->
                <b-form-group v-model="wps" label="WPS-Reference">
                    <b-form-input list="my-list-id"></b-form-input>
                    <datalist id="my-list-id">
                      <option v-for="item in data" :key="item.id">{{ item.name }}</option>
                    </datalist>
                </b-form-group>
                <!-- /Выпадающий список wps reference -->
                <b-form-group label="Transfer mode">
                    <b-form-input list="input-list" id="input-with-list"></b-form-input>
                    <b-form-datalist id="input-list" :options="opt"></b-form-datalist>
                </b-form-group>
                <!-- /Выпадающий список wps reference --> 
                <b-form-group v-model="wps" label="Product type(plate or pipe)">
                    <b-form-input list="my-list-id2"></b-form-input>
                    <datalist id="my-list-id2">
                      <option 
                      v-for="prs in data"
                      v-bind:key="prs.id"
                      >{{ prs.product_type.test }}</option>
                    </datalist>
                </b-form-group>
                <!-- /Выпадающий список wps reference -->
                <b-form-group label="Type of weld">
                    <b-form-input list="input-list" id="input-with-list"></b-form-input>
                    <b-form-datalist id="input-list" :options="opt"></b-form-datalist>
                </b-form-group>
                <!-- /Выпадающий список wps reference -->
                <b-form-group label="Parent material group(s)/subgrps">
                    <b-form-input list="input-list" id="input-with-list"></b-form-input>
                    <b-form-datalist id="input-list" :options="opt"></b-form-datalist>
                </b-form-group>
                <!-- /Выпадающий список wps reference -->
                <b-form-group label="Filler material groups(s)">
                    <b-form-input list="input-list" id="input-with-list"></b-form-input>
                    <b-form-datalist id="input-list" :options="opt"></b-form-datalist>
                </b-form-group>

                <!-- /Выпадающий список wps reference -->
                <label for="input-default">Filler material ( Designation)</label>
                <b-row class="my-1">
                  <b-col sm="3">
                    <label for="input-default">Process 1</label>
                  </b-col>
                  <b-col sm="9">
                    <b-form-input list="input-list" id="input-with-list"></b-form-input>
                    <b-form-datalist id="input-list" :options="opt"></b-form-datalist>
                  </b-col>
                </b-row>
                <b-row class="my-1">
                  <b-col sm="3">
                    <label for="input-default">Process 2</label>
                  </b-col>
                  <b-col sm="9">
                    <b-form-input list="input-list" id="input-with-list"></b-form-input>
                    <b-form-datalist id="input-list" :options="opt"></b-form-datalist>
                  </b-col>
                </b-row>

                <!-- /Выпадающий список wps reference -->
                <b-form-group label="Shielding gas">
                    <b-form-input list="input-list" id="input-with-list"></b-form-input>
                    <b-form-datalist id="input-list" :options="opt"></b-form-datalist>
                </b-form-group>
                </b-col>


                <b-col>
                <!-- /Выпадающий список wps reference -->
                <b-form-group label="Type of current and polarity">
                    <b-form-input list="input-list" id="input-with-list"></b-form-input>
                    <b-form-datalist id="input-list" :options="opt"></b-form-datalist>
                </b-form-group>
                <!-- /Выпадающий список wps reference -->
                <b-form-group label="Product type(plate or pipe)">
                    <b-form-input list="input-list" id="input-with-list"></b-form-input>
                    <b-form-datalist id="input-list" :options="opt"></b-form-datalist>
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
                    <b-form-datalist id="input-list" :options="opt"></b-form-datalist>
                  </b-col>
                </b-row>
                <b-row class="my-1">
                  <b-col sm="3">
                    <label for="input-default">Process 2</label>
                  </b-col>
                  <b-col sm="9">
                    <b-form-input list="input-list" id="input-with-list"></b-form-input>
                    <b-form-datalist id="input-list" :options="opt"></b-form-datalist>
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
                    <b-form-datalist id="input-list" :options="opt"></b-form-datalist>
                </b-form-group>
                <!-- /Выпадающий список wps reference -->
                <b-form-group label="Weld details">
                    <b-form-input list="input-list" id="input-with-list"></b-form-input>
                    <b-form-datalist id="input-list" :options="opt"></b-form-datalist>
                </b-form-group>
                <!-- /Выпадающий список wps reference -->
                <b-form-group label="Multi-layer/single layer">
                    <b-form-input list="input-list" id="input-with-list"></b-form-input>
                    <b-form-datalist id="input-list" :options="opt"></b-form-datalist>
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
                  <b-form-checkbox-group id="checkbox-group-2" v-model="selected" stacked name="flavour-2">
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
                    <b-form-datalist id="input-list" :options="opt"></b-form-datalist>
                  </b-col>
                </b-row>
                <b-row class="my-1">
                  <b-col sm="3">
                    <label for="input-default">Position</label>
                  </b-col>
                  <b-col sm="9">
                    <b-form-input list="input-list" id="input-with-list"></b-form-input>
                    <b-form-datalist id="input-list" :options="opt"></b-form-datalist>
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
                  <b-form-checkbox-group id="checkbox-group-2" v-model="selected" stacked name="flavour-2">
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
                    <b-form-datalist id="input-list" :options="opt"></b-form-datalist>
                  </b-col>
                </b-row>
                <b-row class="my-1">
                  <b-col sm="3">
                    <label for="input-default">Position</label>
                  </b-col>
                  <b-col sm="9">
                    <b-form-input list="input-list" id="input-with-list"></b-form-input>
                    <b-form-datalist id="input-list" :options="opt"></b-form-datalist>
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

<style>

  .img_size {
      height: 193px;
      margin: 8% 0 10% 30%;
    }
  
  .border_bt {
    margin-bottom: 40px;
  }
  
</style>



<script>
export default {
    data() {
        return {
            opt: ['Apple', 'Banana', 'Grape', 'Kiwi', 'Orange'],
            data: [],
            parent_material_group: [],
            photo: null,
            wps: {
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
            }
        }
    },
    created() {
        this.getData();
        this.getParentMaterialGroup();
    },
    methods: {
        getData() {
            axios.get('/api/wps').then(response => {
                console.log(response.data)
                this.data = response.data;
            })
        },
        getParentMaterialGroup() {
            axios.get('/api/parent-material-group').then(response => {
                console.log(response.data)
                this.parent_material_group = response.data;
            })
        }
    }
};
</script>
