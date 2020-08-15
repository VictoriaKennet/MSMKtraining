<style>
    @page { margin:0px; }
    body {
        font-family: Arial, sans-serif;
        background: url("./bg.jpg") no-repeat;
        background-size: 100%;
        font-size: 12px;
    }
    .wrapper {
        width: 85%;
        margin: 0 auto
    }
    img {
        width: 100px;
    }
    td {
        vertical-align: top;
    }
    .contacts {
        margin: 80px 0px 30px 130px;
    }
    h3, h4 {
        text-align: center;
        margin: 0px
    }
    h3 {
        font-size: 24px;
    }
    h4 {
        font-size: 16px;
        margin-bottom: 30px;
    }
    table {
        width: 100%;
    }
    .tdHead1 {
        border-bottom: 1px solid #000;
        background: #dedede
    }
    input[type=checkbox] {
        margin-top:7px
    }
    p {
        margin-top: 20px
    }
    .f-s-9 {
        font-size: 9pt;
    }
    .tb-t-1 {
        font-weight: bold;
        width: 25%;
    }
    .tb-t-2 {
        width: 30%;
    }
    .tb-t-3 {
        background: #dedede;
        width: 45%;
    }
    .main-table .tb-t-2 {
        border-left-color: #000; /* Цвет линии слева */
        border-left-style: solid; /* Стиль линии */
        border-left-width: 1px;  /* Толщина линии */
        padding-left: 3px;  /* Расстояние между линией и текстом */
    }

    .main-table .tb-t-3 {
        border-left-color: #000; /* Цвет линии слева */
        border-left-style: solid; /* Стиль линии */
        border-left-width: 1px;  /* Толщина линии */
        padding-left: 3px;  /* Расстояние между линией и текстом */
    }

    .br-l {
        border-left-color: #000; /* Цвет линии слева */
        border-left-style: solid; /* Стиль линии */
        border-left-width: 1px;  /* Толщина линии */
        padding-left: 3px;  /* Расстояние между линией и текстом */
    }

    .br-b {
        border-bottom-color: #000; /* Цвет линии слева */
        border-bottom-style: solid; /* Стиль линии */
        border-bottom-width: 1px;  /* Толщина линии */
    }

    .bg-3 {
        background: #dedede;
    }

    .bld-text {
        font-size: 9pt;
        font-weight: bold;
    }



</style>

<div class="wrapper">
    <div class="contacts">
        <b>MSMK</b> Training Ltd<br>
        75 Blackstock road, Sheffield, S14 1AD, United Kingdom<br>
        Phone:+44(0)11422811990, Mob: 07884261090, Email: msmktraining@googlemail.com
    </div>

    <h3>Welder Qualification Test Certificate</h3>
    <h4>Designation: {{$data->input('header_1')}}   t{{$data->input('material_thickness')}}   {{$data->input('welding_position_test')}} {{$data->input('header_2')}} </h4>

    <table cellpadding="0" cellspacing="0">
        <tr>
            <td width="150px">WPS reference</td>
            <td width="150px">{{$data->input('wps_reference')}}</td>
            <td rowspan="6" style="text-align: center">Test Ref / Certificate No:<br> {{$data->input('test_ref')}}
            <br> LR control No: NA <br> {{$data->input('lr_control')}}</td>
            <td rowspan="6" width="100px"><img src={{$data->input('photo')}}></td>
        </tr>
        <tr>
            <td>Welder`s name</td>
            <td>{{$data->input('name')}}</td>
        </tr>
        <tr>
            <td>Identification</td>
            <td>{{$data->input('identification')}}</td>
        </tr>
        <tr>
            <td>Employer</td>
            <td>{{$data->input('employer')}}</td>
        </tr>
        <tr>
            <td>Code/testing standard</td>
            <td>{{$data->input('testing_standard')}}</td>
        </tr>
        <tr>
            <td>Job knowledge</td>
            <td>{{$data->input('job_knowledge')}}</td>
        </tr>
    </table>






    <table cellpadding="0" cellspacing="0" >
        <tbody>
            <!-- !!!-1 part-!!! -->
            <tr>
                <td colspan="4" class="tdHead1">Test piece</td>
                <td colspan="3" class="tdHead1">Range of qualification</td>
            </tr>
            <tr class = "f-s-9 main-table">
                <td class="tb-t-1">Welding process(es)</td>
                <td colspan="3" class="tb-t-2">{{$data->input('welding_processes_test')}}</td>
                <td colspan="3" class="tb-t-3">{{$data->input('welding_processes_range')}}</td>
            </tr>
            <tr class = "f-s-9 main-table">
                <td class="tb-t-1">Transfer mode</td>
                <td colspan="3" class="tb-t-2">{{$data->input('transfer_mode_test')}}</td>
                <td colspan="3" class="tb-t-3">{{$data->input('transfer_mode_range')}}</td>
            </tr>
            <tr class = "f-s-9 main-table">
                <td class="tb-t-1">Product type (plate of pipe)</td>
                <td colspan="3" class="tb-t-2">{{$data->input('product_type_test')}}</td>
                <td colspan="3" class="tb-t-3">{{$data->input('product_type_range')}}</td>
            </tr>
            <tr class = "f-s-9 main-table">
                <td class="tb-t-1 br-b">Type of weld</td>
                <td colspan="3" class="tb-t-2 br-b">{{$data->input('type_of_weld_test')}}</td>
                <td colspan="3" class="tb-t-3 br-b">{{$data->input('type_of_weld_range')}}</td>
            </tr>
            <!-- !!!-2 part-!!! -->
            <tr class = "f-s-9 main-table">
                <td class="tb-t-1">Parent material group(s)/subgrps</td>
                <td colspan="3" class="tb-t-2">{{$data->input('parent_material_group_test')}}</td>
                <td colspan="3" class="tb-t-3">{{$data->input('parent_material_group_range')}}</td>
            </tr>
            <tr class="f-s-9 main-table">
                <td class="tb-t-1 br-b">Filler material groups(s)</td>
                <td colspan="3" class="tb-t-2 br-b">{{$data->input('filler_material_group_test')}}</td>
                <td colspan="3" class="tb-t-3 br-b">{{$data->input('filler_material_group_range')}}</td>
            </tr>
            <!-- !!!-3 part-!!! -->
            <tr class="f-s-9 main-table">
                <td rowspan="2" class="tb-t-1 br-b">Filler material ( Designation)</td>
                <td class="br-l">Process 1</td>
                <td colspan="2">{{$data->input('process_data_test_1')}}</td>
                <td colspan="3" class="tb-t-3">{{$data->input('process_data_range_1')}}</td>
            </tr>
            <tr class="f-s-9 main-table">
                <td class="br-l br-b">Process 2</td>
                <td colspan="2" class="br-b">{{$data->input('process_data_test_2')}}</td>
                <td colspan="3" class="tb-t-3 br-b">{{$data->input('process_data_range_2')}}</td>
            </tr>
            <!-- !!!-4 part-!!! -->
            <tr class="f-s-9 main-table">
                <td class="tb-t-1">Shielding gas</td>
                <td colspan="3" class="tb-t-2">{{$data->input('shielding_gas_test')}}</td>
                <td colspan="3" class="tb-t-3">{{$data->input('shielding_gas_range')}}</td>
            </tr>
            <tr class="f-s-9 main-table">
                <td class="tb-t-1">Type of current and polarity</td>
                <td colspan="3" class="tb-t-2">{{$data->input('type_polarity_test')}}</td>
                <td colspan="3" class="tb-t-3">{{$data->input('type_polarity_range')}}</td>
            </tr>
            <tr class="f-s-9 main-table">
                <td class="tb-t-1 br-b">Material thickness(mm)</td>
                <td colspan="3" class="br-l br-b">{{$data->input('material_thickness')}}</td>
                <td class="br-l br-b bg-3">{{$data->input('material_thickness_numb1')}}</td>
                <td class="br-b bg-3">To</td>
                <td class="br-b bg-3">{{$data->input('material_thickness_numb2')}}</td>
            </tr>
            <!-- !!!-5 part-!!! -->
            <tr class="f-s-9 main-table">
                <td rowspan="2" class="tb-t-1 br-b">Deposited thickness(mm)</td>
                <td class="br-l">Process 1</td>
                <td>Root</td>
                <td>{{$data->input('deposited_thickness_root')}}</td>
                <td class="br-l bg-3">{{$data->input('deposited_thickness_root_num_1')}}</td>
                <td class="bg-3">To</td>
                <td class="bg-3">{{$data->input('deposited_thickness_root_num_2')}}</td>
            </tr>
            <tr>
                <td class="br-l br-b">Process 2</td>
                <td class="br-b">Rest</td>
                <td class="br-b">{{$data->input('deposited_thickness_rest')}}</td>
                <td class="br-l br-b bg-3">{{$data->input('deposited_thickness_rest_num_1')}}</td>
                <td class="br-b bg-3">To</td>
                <td class="br-b bg-3">{{$data->input('deposited_thickness_rest_num_2')}}</td>
            </tr>
            <!-- !!!-6 part-!!! -->
            <tr class="f-s-9 main-table">
                <td class="tb-t-1">Outside pipe diameter(mm)</td>
                <td colspan="3" class="br-l">{{$data->input('outside_pipe_diameter')}}</td>
                <td class="br-l bg-3">{{$data->input('outside_pipe_diameter_1')}}</td>
                <td class="bg-3">{{$data->input('outside_pipe_diameter_2')}}</td>
                <td class="bg-3">{{$data->input('outside_pipe_diameter_3')}}</td>
            </tr>
            <tr class="f-s-9 main-table">
                <td class="tb-t-1">Welding position</td>
                <td colspan="3" class="tb-t-2">{{$data->input('welding_position_test')}}</td>
                <td colspan="3" class="tb-t-3">{{$data->input('welding_position_range')}}</td>
            </tr>
            <tr class="f-s-9 main-table">
                <td class="tb-t-1">Weld details</td>
                <td colspan="3" class="tb-t-2">{{$data->input('welding_details_test')}}</td>
                <td colspan="3" class="tb-t-3">{{$data->input('welding_details_range')}}</td>
            </tr>
            <tr class="f-s-9 main-table">
                <td class="tb-t-1 br-b">Multi-layer/single layer</td>
                <td colspan="3" class="tb-t-2 br-b">{{$data->input('single_layer_test')}}</td>
                <td colspan="3" class="tb-t-3 br-b">{{$data->input('single_layer_range')}}</td>
            </tr>
            <!-- !!!-7 part-!!! -->
            <tr>
                <td colspan="4" class="bld-text br-b">Supplementary fillet weld test (completed in conjunction with a butt weld qualification):</td>
                <td colspan="3" class="br-l br-b">{{$data->input('weld_test')}}</td>
            </tr>
            <tr>
                <td colspan="7" class="bg-3 br-b">Tests Performed</td>
            </tr>
        </tbody>
    </table>

    <table cellpadding="0" cellspacing="0">
        
        <tr>
            <td><input type="checkbox" <? echo($data->input('examination') == 'on' ? "checked" : "") ?>> Visual Examination of Completed Weld</td>
            <td></td>
        </tr>
        <tr>
            <td><input type="checkbox" <? echo($data->input('bends') == 'on' ? "checked" : "") ?>> Transverse bends root and face</td>
            <td><input type="checkbox" <? echo($data->input('side') == 'on' ? "checked" : "") ?>> Transverse side bend specimen</td>
        </tr>
        <tr>
            <td><input type="checkbox" <? echo($data->input('specimen') == 'on' ? "checked" : "") ?>> Specimen Macro test for fusion</td>
            <td><input type="checkbox" <? echo($data->input('specimen') == 'on' ? "checked" : "") ?>> Specimen Macro test for fusion</td>
        </tr>
    </table>
    <p>We certify that the statements in this record are correct and that the test coupons were prepared, welded, and tested in accordance with the requirements of BS EN ISO 9606-1: 2017 with ACCEPTABLE results</p>
</div>
