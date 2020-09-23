<template>
    <div>
        <Navbar></Navbar>
        <b-container>

            <b-card no-body class="mb-1">
                <b-card-header header-tag="header" class="p-1" role="tab">
                    <b-button block v-b-toggle.accordion-1 variant="info">Page 1</b-button>
                </b-card-header>
                <b-collapse id="accordion-1" visible accordion="my-accordion" role="tabpanel">
                    <b-card-body>
                        <b-row>
                            <b-col>
                                <b-form-group label="Code/Testing Standard">
                                    <b-form-input
                                        placeholder="Choose code/Testing Standard"
                                        list="job-knowledge"
                                        name="job_knowledge"
                                    ></b-form-input>
                                    <b-form-datalist
                                        id="job-knowledge"
                                        :options="job_knowledge"
                                    ></b-form-datalist>
                                </b-form-group>
                                <b-form-group label="Code/Testing Standard">
                                    <b-form-input
                                        placeholder="Choose code/Testing Standard"
                                        list="job-knowledge"
                                        name="job_knowledge"
                                    ></b-form-input>
                                    <b-form-datalist
                                        id="job-knowledge"
                                        :options="job_knowledge"
                                    ></b-form-datalist>
                                </b-form-group>
                                <b-form-group label="Code/Testing Standard">
                                    <b-form-input
                                        placeholder="Choose code/Testing Standard"
                                        list="job-knowledge"
                                        name="job_knowledge"
                                    ></b-form-input>
                                    <b-form-datalist
                                        id="job-knowledge"
                                        :options="job_knowledge"
                                    ></b-form-datalist>
                                </b-form-group>
                                <b-form-group label="Code/Testing Standard">
                                    <b-form-input
                                        placeholder="Choose code/Testing Standard"
                                        list="job-knowledge"
                                        name="job_knowledge"
                                    ></b-form-input>
                                    <b-form-datalist
                                        id="job-knowledge"
                                        :options="job_knowledge"
                                    ></b-form-datalist>
                                </b-form-group>
                                <b-form-group label="Code/Testing Standard">
                                    <b-form-input
                                        placeholder="Choose code/Testing Standard"
                                        list="job-knowledge"
                                        name="job_knowledge"
                                    ></b-form-input>
                                    <b-form-datalist
                                        id="job-knowledge"
                                        :options="job_knowledge"
                                    ></b-form-datalist>
                                </b-form-group>
                                <b-form-group label="Code/Testing Standard">
                                    <b-form-input
                                        placeholder="Choose code/Testing Standard"
                                        list="job-knowledge"
                                        name="job_knowledge"
                                    ></b-form-input>
                                    <b-form-datalist
                                        id="job-knowledge"
                                        :options="job_knowledge"
                                    ></b-form-datalist>
                                </b-form-group>
                            </b-col>
                        </b-row>

                    </b-card-body>
                </b-collapse>
            </b-card>


            <form action="/welding-procedure" target="_blank" method="POST" enctype="multipart/form-data">
                <input type="submit" value="Open PDF" class="button">
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
            job_knowledge: ['Tested', 'Not Tested']
        }
    }
}
</script>

