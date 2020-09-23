<template>
    <div>
        <Navbar></Navbar>
        <b-container class="my-2">
            <form action="/welding-record" target="_blank" method="POST" enctype="multipart/form-data">
                <b-card no-body class="mb-1">
                    <b-card-header header-tag="header" class="p-1" role="tab">
                        <b-button block v-b-toggle.accordion-1 variant="info">Page 1</b-button>
                    </b-card-header>
                    <b-collapse id="accordion-1" visible accordion="my-accordion" role="tabpanel">
                        <b-card-body>
                            <b-row>
                                <b-col cols="3">
                                    <label>Code/Testing Standard:</label>
                                </b-col>
                                <b-col>
                                    <b-form-group>
                                        <b-form-input
                                            list="code-standard"
                                            name="code-standard"
                                            v-model="data.code_standard"
                                        ></b-form-input>
                                        <b-form-datalist
                                            id="code-standard"
                                            :options="code_standard"
                                        ></b-form-datalist>
                                    </b-form-group>
                                </b-col>
                            </b-row>

                            <b-row>
                                <b-col cols="3">
                                    <label>Manufacturers WPQR No: </label>
                                </b-col>
                                <b-col>
                                    <b-form-group>
                                        <b-form-input
                                            name="manufacturers"
                                        ></b-form-input>
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
                <div class="d-flex justify-content-center">
                    <input type="submit" value="Open PDF" class="button">
                </div>
            </form>
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
            code_standard: [
                "BS EN ISO 15614-1:2019 Lev 1 / BS EN ISO 5817:2014 Lev B",
                "BS EN ISO 15613-1:2004 / BS EN ISO 5817:2014 Lev B",
                "BS EN ISO 15614-1:2019 Lev 2 / BS EN ISO 5817:2014 Lev B"
            ],
            data: {
                code_standard: ""
            },
            clientData: {
                withenessed_name: "",
                withenessed_position: "",
                withenessed_date: "",
                behaulf_name: "",
                behaulf_position: "",
                behaulf_date: ""
            }
        }
    }
}
</script>

