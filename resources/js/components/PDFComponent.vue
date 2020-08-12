<template>
  <div>
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
  </div>
</template>

<script>
export default {
    data() {
        return {
            data: [],
            parent_material_group: [],
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
