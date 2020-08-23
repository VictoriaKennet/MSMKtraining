<template>
    <b-container class="mt-2 mb-2">
        <h1 style="text-align: center">Clients</h1>
        <b-table :items="items" :fields="fields"></b-table>
    </b-container>
</template>

<script>
export default {
    data() {
        return {
            fields: ['name', 'identification'],
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
    }
}
</script>
