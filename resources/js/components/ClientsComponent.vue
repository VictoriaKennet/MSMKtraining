<template>
    <div>
        <Navbar></Navbar>
        <b-container class="mt-2 mb-2">
            <h1 class="text-center">Saves WPS</h1>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col" width="70%">WPS name</th>
                        <th scope="col">Created</th>
                        <th scope="col">Last update</th>
                        <th scope="col">Delete</th>
                    </tr>
                </thead>
                <tbody>
                    <tr v-for="(item, index) in data.certificate" :key="index">
                        <td><a :href="'/welder-certificate/'+item.id">{{ item.wps.name ? item.wps.name : "Unknown" }}</a></td>
                        <td>{{ item.create_date }}</td>
                        <td>{{ item.update_date }}</td>
                        <td class="text-right">
                            <b-icon
                                icon="trash-fill"
                                class="icon_plus mt-0" font-scale="2"
                                @click="deletCertificate(item)"
                            ></b-icon>
                        </td>
                    </tr>
                    <tr v-if="data.certificate.length == 0">
                        <td colspan="3" class="text-center">
                            No matching records found
                        </td>
                    </tr>
                </tbody>
            </table>
            <hr>
            <h1 class="text-center">Saves records</h1>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col" width="70%">Code standard</th>
                        <th scope="col">Created</th>
                        <th scope="col">Last update</th>
                        <th scope="col">Delete</th>
                    </tr>
                </thead>
                <tbody>
                    <tr v-for="(item, index) in data.records" :key="index">
                        <td><a :href="'/welding-record/'+item.id">{{ item.data.code_standard ? item.data.code_standard : "Unknown" }}</a></td>
                        <td>{{ item.create_date }}</td>
                        <td>{{ item.update_date }}</td>
                        <td class="text-right">
                            <b-icon
                                icon="trash-fill"
                                class="icon_plus mt-0" font-scale="2"
                                @click="deletRecord(item)"
                            ></b-icon>
                        </td>
                    </tr>
                    <tr v-if="data.records.length == 0">
                        <td colspan="3" class="text-center">
                            No matching records found
                        </td>
                    </tr>
                </tbody>
            </table>
        </b-container>
    </div>
</template>

<script>
import Navbar from './NavbarComponent';
export default {
    components: {
        Navbar
    },
    data() {
        return {
            data: {
                certificate: [],
                records: []
            }
        }
    },
    mounted() {
        this.getData();
    },
    methods: {
        getData() {
            axios.get('/api/clients').then(response => {
                console.log(response.data)
                this.data = Object.assign(this.data, response.data);
            })
        },
        deletCertificate(item) {
            swal({
                title: "Do you want to delete?",
                icon: "warning"
            }).then((willDelete) => {
                if (willDelete) {
                    axios.post('/api/del-client/'+item.id).then((response) => {
                        const index = this.data.certificate.indexOf(item)
                        this.data.certificate.splice(index, 1)
                    }).catch((error) => {
                        swal({
                            icon: "error",
                            text: 'Error'
                        });
                    });
                }
            });
        },
        deletRecord(item) {
            swal({
                title: "Do you want to delete?",
                icon: "warning"
            }).then((willDelete) => {
                if (willDelete) {
                    axios.post('/api/del-record/'+item.id).then((response) => {
                        const index = this.data.records.indexOf(item)
                        this.data.records.splice(index, 1)
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
