<template>
    <div>
        <Navbar></Navbar>
        <b-container class="mt-2 mb-2">
            <h1 class="text-center">Saves</h1>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">WPS name</th>
                        <th scope="col">Last update</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    <tr v-for="(item, index) in items" :key="index">
                        <td><a :href="'/save/'+item.id">{{ item.wps.name ? item.wps.name : "Unknown" }}</a></td>
                        <td>{{ item.updated_at.substr(0, 10) }}</td>
                        <td class="text-right">
                            <b-icon
                                icon="trash-fill"
                                class="icon_plus mt-0" font-scale="2"
                                @click="deletClient(item)"
                            ></b-icon>
                        </td>
                    </tr>
                    <tr v-if="items.length == 0">
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
            items: []
        }
    },
    mounted() {
        this.getData();
    },
    methods: {
        getData() {
            axios.get('/api/clients').then(response => {
                this.items = response.data;
            })
        },
        deletClient(item) {
            swal({
                title: "Do you want to delete?",
                icon: "warning"
            }).then((willDelete) => {
                if (willDelete) {
                    axios.post('/api/del-client/'+item.id).then((response) => {
                        const index = this.items.indexOf(item)
                        this.items.splice(index, 1)
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
