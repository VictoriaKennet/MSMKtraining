<style>
    @page { margin:0px; }
    body {
        font-family: Arial, sans-serif;
        background: url("http://msmk.ho.ua/bg.jpg") no-repeat;
        background-size: 100%;
        font-size: 12px;
    }
    .wrapper {
        width: 85%;
        margin: 0 auto;
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
        border-bottom: 0.2px solid #4C4C4C;
        background: #d8d8d8
    }
    input[type=checkbox] {
        margin-top: 7px;
    }
    p {
        margin-top: 20px;
    }
    .f-s-9 {
        font-size: 9pt;
    }
    .tb-t-1 {
        font-weight: bold;
        width: 25%;
    }
    .tb-t-2 {
        width: 32%;
    }
    .tb-t-2-2 {
        width: 5%;
    }
    .tb-t-3 {
        background: #d8d8d8;
        width: 43%;
    }
    .main-table .tb-t-2 {
        border-left-color: #4C4C4C; /* Цвет линии слева */
        border-left-style: solid; /* Стиль линии */
        border-left-width: 0.2px;  /* Толщина линии */
    }

    .main-table .tb-t-3 {
        border-left-color: #4C4C4C; /* Цвет линии слева */
        border-left-style: solid; /* Стиль линии */
        border-left-width: 0.2px;  /* Толщина линии */
    }

    .br-l {
        border-left-color: #4C4C4C; /* Цвет линии слева */
        border-left-style: solid; /* Стиль линии */
        border-left-width: 0.2px;  /* Толщина линии */
    }

    .br-b {
        border-bottom-color: #4C4C4C; /* Цвет линии слева */
        border-bottom-style: solid; /* Стиль линии */
        border-bottom-width: 0.2px;  /* Толщина линии */
    }

    .mg-bt-10 {
        margin-bottom: 5px;
    }

    .bg-3 {
        background: #d8d8d8;
    }

    .bld-text {
        font-size: 9pt;
        font-weight: bold;
    }

    .table-inf td {
        padding: 2px 2px;
    }

    .bottom-inf {
        position: absolute;
        top: 97.4%;
    }


</style>

<div class="wrapper">
    <div class="bottom-inf">
        <div>{{$data->input('document_number1')}}</div>
        <div>{{$data->input('document_number2')}}</div>
    </div>
    <div class="contacts">
        <b>MSMK</b> Training Ltd<br>
        75 Blackstock road, Sheffield, S14 1AD, United Kingdom<br>
        Phone:+44(0)11422811990, Mob: 07884261090, Email: msmktraining@googlemail.com
    </div>

    <h3>Welder Qualification Test Certificate</h3>
    <h4>Designation: {{$data->input('header_1')}}   {{$data->input('header_2')}}   {{$data->input('header_3')}} </h4>

    <table cellpadding="0" cellspacing="0" class="mg-bt-10">
        <tr>
            <td width="150px">WPS reference</td>
            @if($data->input('photo_c'))
                <td width="150px">{{$data->input('wps_reference')}}</td>
            @else
                <td width="360px">{{$data->input('wps_reference')}}</td>
            @endif
            <td rowspan="6" style="text-align: center" height="100">Test Ref / Certificate No:<br> <strong>{{$data->input('test_ref')}}</strong>
            <br> LR control No:<br> <strong>{{$data->input('lr_control')}}</strong></td>
            @if($data->input('photo_c'))
                <td rowspan="6" width="100px"><img src={{$data->input('photo_c')}}></td>
            @endif
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






    <table cellpadding="0" cellspacing="0" style='margin-top: -10px'>
        <tbody class="table-inf">
            <!-- !!!-1 part-!!! -->
            <tr>
                <td colspan="6" class="tdHead1">Test piece</td>
                <td colspan="2" class="tdHead1">Range of qualification</td>
            </tr>
            <tr class = "f-s-9 main-table">
                <td class="tb-t-1">Welding process(es)</td>
                <td colspan="5" class="tb-t-2">{{$data->input('welding_processes_test')}}</td>
                <td colspan="2" class="tb-t-3">{{$data->input('welding_processes_range')}}</td>
            </tr>
            <tr class = "f-s-9 main-table">
                <td class="tb-t-1">Transfer mode</td>
                <td colspan="5" class="tb-t-2">{{$data->input('transfer_mode_test')}}</td>
                <td colspan="2" class="tb-t-3">{{$data->input('transfer_mode_range')}}</td>
            </tr>
            <tr class = "f-s-9 main-table">
                <td class="tb-t-1">Product type (plate of pipe)</td>
                <td colspan="5" class="tb-t-2">{{$data->input('product_type_test')}}</td>
                <td colspan="2" class="tb-t-3">{{$data->input('product_type_range')}}</td>
            </tr>
            <tr class = "f-s-9 main-table">
                <td class="tb-t-1 br-b">Type of weld</td>
                <td colspan="5" class="tb-t-2 br-b">{{$data->input('type_of_weld_test')}}</td>
                <td colspan="2" class="tb-t-3 br-b">{{$data->input('type_of_weld_range')}}</td>
            </tr>
            <!-- !!!-2 part-!!! -->
            <tr class = "f-s-9 main-table">
                <td class="tb-t-1">Parent material group(s)/subgrps</td>
                <td colspan="5" class="tb-t-2">{{$data->input('parent_material_group_test')}}</td>
                <td colspan="2" class="tb-t-3">{{$data->input('parent_material_group_range')}}</td>
            </tr>
            <tr class="f-s-9 main-table">
                <td class="tb-t-1 br-b">Filler material groups(s)</td>
                <td colspan="5" class="tb-t-2 br-b">{{$data->input('filler_material_group_test')}}</td>
                <td colspan="2" class="tb-t-3 br-b">{{$data->input('filler_material_group_range')}}</td>
            </tr>
            <!-- !!!-3 part-!!! -->
            <tr class="f-s-9 main-table">
                <td rowspan="2" class="tb-t-1 br-b">Filler material (Designation)</td>
                <td class="br-l" colspan="2">Process 1</td>
                <td colspan="3" >{{$data->input('process_data_test_1')}}</td>
                <td colspan="2" class="tb-t-3">{{$data->input('process_data_range_1')}}</td>
            </tr>
            <tr class="f-s-9 main-table">
                <td class="br-l br-b" colspan="2">Process 2</td>
                <td colspan="3" class="br-b">{{$data->input('process_data_test_2')}}</td>
                <td colspan="2" class="tb-t-3 br-b">{{$data->input('process_data_range_2')}}</td>
            </tr>
            <!-- !!!-4 part-!!! -->
            <tr class="f-s-9 main-table">
                <td class="tb-t-1">Shielding gas</td>
                <td colspan="5" class="tb-t-2">{{$data->input('shielding_gas_test')}}</td>
                <td colspan="2" class="tb-t-3">{{$data->input('shielding_gas_range')}}</td>
            </tr>
            <tr class="f-s-9 main-table">
                <td class="tb-t-1">Type of current and polarity</td>
                <td colspan="5" class="tb-t-2">{{$data->input('type_polarity_test')}}</td>
                <td colspan="2" class="tb-t-3">{{$data->input('type_polarity_range')}}</td>
            </tr>



            @if (($data->input('plate_thickness_cb'))&&($data->input('tube_thickness_cb'))&&($data->input('bar_thickness_cb')))
                <tr class="f-s-9 main-table">
                    <td  rowspan="3"  class="tb-t-1 br-b">Material thickness(mm)</td>
                    <td class="br-l" colspan="5">Plate &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; {{$data->input('plate_thickness')}}</td>
                    @if($data->input('all_thickness_1'))
                        <td colspan="2" class="br-l tb-t-3"> All Thickness </td>
                    @else
                        @if($data->input('plate_thickness')>=3)
                            <td class="br-l bg-3"> From &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 3</td>
                            <td class=" bg-3"> to &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; No Restriction </td>
                        @else
                            @if (($data->input('plate_thickness')*2) < 3)
                                <td class="br-l bg-3">From &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; {{$data->input('plate_thickness')}}</td>
                                <td class="bg-3"> to &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 3 </td>
                            @else
                                <td class="br-l bg-3">From &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; {{$data->input('plate_thickness')}}</td>
                                <td class="bg-3"> to &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; {{$data->input('plate_thickness')*2}} </td>
                            @endif
                        @endif
                    @endif
                </tr>
                <tr class="f-s-9 main-table">
                    <td class="br-l" colspan="5">Tube &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; {{$data->input('tube_thickness')}}</td>
                    @if($data->input('all_thickness_2'))
                        <td colspan="2" class="br-l tb-t-3"> All Thickness </td>
                    @else
                        @if($data->input('tube_thickness')>=3)
                            <td class="br-l bg-3"> From &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 3</td>
                            <td class="bg-3"> to &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; No Restriction </td>
                        @else
                            @if (($data->input('tube_thickness')*2) < 3)
                                <td class="br-l bg-3">From &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; {{$data->input('tube_thickness')}}</td>
                                <td class="bg-3"> to &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 3 </td>
                            @else
                                <td class="br-l bg-3">From &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; {{$data->input('tube_thickness')}}</td>
                                <td class="bg-3"> to &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; {{$data->input('tube_thickness')*2}} </td>
                            @endif
                        @endif
                    @endif
                </tr>
                    <tr class="f-s-9 main-table">
                         <td class="br-l br-b" colspan="5">Bar &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; {{$data->input('bar_thickness')}}</td>
                        @if($data->input('all_thickness_3'))
                            <td colspan="2" class="br-l br-b tb-t-3"> All Thickness </td>
                        @else
                            @if($data->input('bar_thickness')>=3)
                                <td class="br-l br-b bg-3"> From &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 3</td>
                                <td class="br-b bg-3"> to &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; No Restriction </td>
                            @else
                                @if (($data->input('bar_thickness')*2) < 3)
                                    <td class="br-l br-b bg-3">From &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; {{$data->input('bar_thickness')}}</td>
                                    <td class="br-b bg-3"> to &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 3 </td>
                                @else
                                    <td class="br-l br-b bg-3">From &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; {{$data->input('bar_thickness')}}</td>
                                    <td class="br-b bg-3"> to &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; {{$data->input('bar_thickness')*2}} </td>
                                @endif
                            @endif
                        @endif
                    </tr>
            @else
                @if ( ( ($data->input('plate_thickness_cb'))&&($data->input('tube_thickness_cb')) )||
                      ( ($data->input('plate_thickness_cb'))&&($data->input('bar_thickness_cb')) )||
                      ( ($data->input('tube_thickness_cb'))&&($data->input('bar_thickness_cb')) ) )

                    @if (($data->input('plate_thickness_cb'))&&($data->input('tube_thickness_cb')))
                    <tr class="f-s-9 main-table">
                    <td  rowspan="2"  class="tb-t-1 br-b">Material thickness(mm)</td>
                    <td class="br-l" colspan="5">Plate &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; {{$data->input('plate_thickness')}}</td>
                    @if($data->input('all_thickness_1'))
                        <td colspan="2" class="br-l tb-t-3"> All Thickness </td>
                    @else
                        @if($data->input('plate_thickness')>=3)
                            <td class="br-l bg-3"> From &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 3</td>
                            <td class=" bg-3"> to &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; No Restriction </td>
                        @else
                            @if (($data->input('plate_thickness')*2) < 3)
                                <td class="br-l bg-3">From &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; {{$data->input('plate_thickness')}}</td>
                                <td class="bg-3"> to &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 3 </td>
                            @else
                                <td class="br-l bg-3">From &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; {{$data->input('plate_thickness')}}</td>
                                <td class="bg-3"> to &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; {{$data->input('plate_thickness')*2}} </td>
                            @endif
                        @endif
                    @endif
                </tr>
                    <tr class="f-s-9 main-table">
                         <td class="br-l br-b" colspan="5">Tube &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; {{$data->input('tube_thickness')}}</td>
                        @if($data->input('all_thickness_2'))
                            <td colspan="2" class="br-l br-b tb-t-3"> All Thickness </td>
                        @else
                            @if($data->input('tube_thickness')>=3)
                                <td class="br-l br-b bg-3"> From &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 3</td>
                                <td class="br-b bg-3"> to &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; No Restriction </td>
                            @else
                                @if (($data->input('tube_thickness')*2) < 3)
                                    <td class="br-l br-b bg-3">From &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; {{$data->input('tube_thickness')}}</td>
                                    <td class="br-b bg-3"> to &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 3 </td>
                                @else
                                    <td class="br-l br-b bg-3">From &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; {{$data->input('tube_thickness')}}</td>
                                    <td class="br-b bg-3"> to &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; {{$data->input('tube_thickness')*2}} </td>
                                @endif
                            @endif
                        @endif
                    </tr>
                    @endif

                    @if (($data->input('plate_thickness_cb'))&&($data->input('bar_thickness_cb')))
                    <tr class="f-s-9 main-table">
                    <td  rowspan="2"  class="tb-t-1 br-b">Material thickness(mm)</td>
                    <td class="br-l" colspan="5">Plate &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; {{$data->input('plate_thickness')}}</td>
                    @if($data->input('all_thickness_1'))
                        <td colspan="2" class="br-l tb-t-3"> All Thickness </td>
                    @else
                        @if($data->input('plate_thickness')>=3)
                            <td class="br-l bg-3"> From &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 3</td>
                            <td class=" bg-3"> to &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; No Restriction </td>
                        @else
                            @if (($data->input('plate_thickness')*2) < 3)
                                <td class="br-l bg-3">From &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; {{$data->input('plate_thickness')}}</td>
                                <td class="bg-3"> to &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 3 </td>
                            @else
                                <td class="br-l bg-3">From &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; {{$data->input('plate_thickness')}}</td>
                                <td class="bg-3"> to &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; {{$data->input('plate_thickness')*2}} </td>
                            @endif
                        @endif
                    @endif
                </tr>
                    <tr class="f-s-9 main-table">
                         <td class="br-l br-b" colspan="5">Bar &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; {{$data->input('bar_thickness')}}</td>
                        @if($data->input('all_thickness_3'))
                            <td colspan="2" class="br-l br-b tb-t-3"> All Thickness </td>
                        @else
                            @if($data->input('bar_thickness')>=3)
                                <td class="br-l br-b bg-3"> From &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 3</td>
                                <td class="br-b bg-3"> to &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; No Restriction </td>
                            @else
                                @if (($data->input('bar_thickness')*2) < 3)
                                    <td class="br-l br-b bg-3">From &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; {{$data->input('bar_thickness')}}</td>
                                    <td class="br-b bg-3"> to &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 3 </td>
                                @else
                                    <td class="br-l br-b bg-3">From &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; {{$data->input('bar_thickness')}}</td>
                                    <td class="br-b bg-3"> to &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; {{$data->input('bar_thickness')*2}} </td>
                                @endif
                            @endif
                        @endif
                    </tr>
                    @endif

                    @if (($data->input('tube_thickness_cb'))&&($data->input('bar_thickness_cb')))
                    <tr class="f-s-9 main-table">
                    <td  rowspan="2"  class="tb-t-1 br-b">Material thickness(mm)</td>
                    <td class="br-l" colspan="5">Tube &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; {{$data->input('tube_thickness')}}</td>
                    @if($data->input('all_thickness_2'))
                        <td colspan="2" class="br-l tb-t-3"> All Thickness </td>
                    @else
                        @if($data->input('tube_thickness')>=3)
                            <td class="br-l bg-3"> From &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 3</td>
                            <td class=" bg-3"> to &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; No Restriction </td>
                        @else
                            @if (($data->input('tube_thickness')*2) < 3)
                                <td class="br-l bg-3">From &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; {{$data->input('tube_thickness')}}</td>
                                <td class="bg-3"> to &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 3 </td>
                            @else
                                <td class="br-l bg-3">From &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; {{$data->input('tube_thickness')}}</td>
                                <td class="bg-3"> to &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; {{$data->input('tube_thickness')*2}} </td>
                            @endif
                        @endif
                    @endif
                </tr>
                    <tr class="f-s-9 main-table">
                         <td class="br-l br-b" colspan="5">Bar &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; {{$data->input('bar_thickness')}}</td>
                        @if($data->input('all_thickness_3'))
                            <td colspan="2" class="br-l br-b tb-t-3"> All Thickness </td>
                        @else
                            @if($data->input('bar_thickness')>=3)
                                <td class="br-l br-b bg-3"> From &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 3</td>
                                <td class="br-b bg-3"> to &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; No Restriction </td>
                            @else
                                @if (($data->input('bar_thickness')*2) < 3)
                                    <td class="br-l br-b bg-3">From &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; {{$data->input('bar_thickness')}}</td>
                                    <td class="br-b bg-3"> to &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 3 </td>
                                @else
                                    <td class="br-l br-b bg-3">From &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; {{$data->input('bar_thickness')}}</td>
                                    <td class="br-b bg-3"> to &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; {{$data->input('bar_thickness')*2}} </td>
                                @endif
                            @endif
                        @endif
                    </tr>
                    @endif
                @else

                    @if (($data->input('plate_thickness_cb')) || ($data->input('tube_thickness_cb')) || ($data->input('bar_thickness_cb')))

                        @if ($data->input('plate_thickness_cb'))
                         <tr class="f-s-9 main-table">
                             <td class="tb-t-1 br-b">Material thickness(mm)</td>
                             <td class="br-l br-b" colspan="5">Plate &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; {{$data->input('plate_thickness')}}</td>
                            @if($data->input('all_thickness_1'))
                                <td colspan="2" class="br-l br-b tb-t-3"> All Thickness </td>
                            @else
                                @if($data->input('plate_thickness')>=3)
                                    <td class="br-l br-b bg-3"> From &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 3</td>
                                    <td class="br-b bg-3"> to &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; No Restriction </td>
                                @else
                                    @if (($data->input('plate_thickness')*2) < 3)
                                        <td class="br-l br-b bg-3">From &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; {{$data->input('plate_thickness')}}</td>
                                        <td class="br-b bg-3"> to &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 3 </td>
                                    @else
                                        <td class="br-l br-b bg-3">From &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; {{$data->input('plate_thickness')}}</td>
                                        <td class="br-b bg-3"> to &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; {{$data->input('plate_thickness')*2}} </td>
                                    @endif
                                @endif
                            @endif
                            </tr>
                        @endif

                        @if ($data->input('tube_thickness_cb'))
                         <tr class="f-s-9 main-table">
                             <td class="tb-t-1 br-b">Material thickness(mm)</td>
                             <td class="br-l br-b" colspan="5">Tube &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; {{$data->input('tube_thickness')}}</td>
                            @if($data->input('all_thickness_2'))
                                <td colspan="2" class="br-l br-b tb-t-3"> All Thickness </td>
                            @else
                                @if($data->input('tube_thickness')>=3)
                                    <td class="br-l br-b bg-3"> From &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 3</td>
                                    <td class="br-b bg-3"> to &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; No Restriction </td>
                                @else
                                    @if (($data->input('tube_thickness')*2) < 3)
                                        <td class="br-l br-b bg-3">From &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; {{$data->input('tube_thickness')}}</td>
                                        <td class="br-b bg-3"> to &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 3 </td>
                                    @else
                                        <td class="br-l br-b bg-3">From &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; {{$data->input('tube_thickness')}}</td>
                                        <td class="br-b bg-3"> to &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; {{$data->input('tube_thickness')*2}} </td>
                                    @endif
                                @endif
                            @endif
                            </tr>
                        @endif

                        @if ($data->input('bar_thickness_cb'))
                         <tr class="f-s-9 main-table">
                             <td class="tb-t-1 br-b">Material thickness(mm)</td>
                              <td class="br-l br-b" colspan="5">Bar &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; {{$data->input('bar_thickness')}}</td>
                             @if($data->input('all_thickness_3'))
                                 <td colspan="2" class="br-l br-b tb-t-3"> All Thickness </td>
                             @else
                                 @if($data->input('bar_thickness')>=3)
                                     <td class="br-l br-b bg-3"> From &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 3</td>
                                     <td class="br-b bg-3"> to &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; No Restriction </td>
                                 @else
                                     @if (($data->input('bar_thickness')*2) < 3)
                                         <td class="br-l br-b bg-3">From &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; {{$data->input('bar_thickness')}}</td>
                                         <td class="br-b bg-3"> to &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 3 </td>
                                     @else
                                         <td class="br-l br-b bg-3">From &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; {{$data->input('bar_thickness')}}</td>
                                         <td class="br-b bg-3"> to &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; {{$data->input('bar_thickness')*2}} </td>
                                     @endif
                                 @endif
                             @endif
                             </tr>
                        @endif
                    @endif
                @endif
            @endif



            <!-- !!!-5 part-!!! -->
            <tr class="f-s-9 main-table">
                <td rowspan="2" class="tb-t-1 br-b">Deposited thickness(mm)</td>
                @if($data->input('applicable_1'))
                    <td class="br-l" colspan="5">Process 1 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Not Applicable</td>
                    <td class="br-l bg-3" colspan="2">Not Applicable</td>
                @else
                    @if($data->input('deposited_deposit1') == null)
                        <td class="br-l" colspan="5">Process 1 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; {{$data->input('deposited_thickness_root')}}</td>
                    @else
                        <td class="br-l" colspan="5">Process 1 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; {{$data->input('deposited_deposit1')}}
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; {{$data->input('deposited_thickness_root')}}</td>
                    @endif

                    @if($data->input('deposited_thickness_root') < 3)
                        <td class="br-l bg-3">From &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; {{$data->input('deposited_thickness_root')}}</td>
                        <td class="bg-3"> to &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; {{$data->input('deposited_thickness_root_num_2')}}</td>
                    @else
                        <td class="br-l bg-3">From &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 3 </td>
                        <td class="bg-3">to &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; {{$data->input('deposited_thickness_root_num_2')}}</td>

                    @endif
                @endif
            </tr>
            <tr>
                @if($data->input('applicable_2'))
                    <td class="br-l br-b" colspan="5">Process 2 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  Not Applicable</td>
                    <td class="br-l bg-3 br-b" colspan="2">Not Applicable</td>
                @else
                    @if($data->input('deposited_deposit2') == null)
                        <td class="br-l br-b" colspan="5">Process 2 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  {{$data->input('deposited_thickness_rest')}}</td>
                    @else
                        <td class="br-l br-b" colspan="5">Process 2 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  {{$data->input('deposited_deposit2')}}
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; {{$data->input('deposited_thickness_rest')}}</td>
                    @endif
                    @if($data->input('deposited_thickness_rest') < 3)
                        <td class="br-l bg-3 br-b"> From &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; {{$data->input('deposited_thickness_rest')}}</td>
                        <td class="bg-3 br-b"> to &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; {{$data->input('deposited_thickness_rest_num_2')}}</td>
                    @else
                        <td class="br-l bg-3 br-b"> From &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 3</td>
                        <td class="bg-3 br-b"> to &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; {{$data->input('deposited_thickness_rest_num_2')}}</td>
                    @endif
                @endif

            </tr>
            <!-- !!!-6 part-!!! -->
            <tr class="f-s-9 main-table">
                <td class="tb-t-1">Outside pipe diameter(mm)</td>
                <td colspan="5" class="br-l">{{$data->input('outside_pipe_diameter')}}</td>
                @if (is_numeric($data->input('outside_pipe_diameter_1')))
                     <td class="br-l bg-3"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{$data->input('outside_pipe_diameter_1')}}</td>
                     <td class="bg-3"> {{$data->input('outside_pipe_diameter_2')}} &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; {{$data->input('outside_pipe_diameter_3')}}</td>
                @else
                    <td colspan="2" class="tb-t-3">{{$data->input('outside_pipe_diameter_1')}} {{$data->input('outside_pipe_diameter_2')}} {{$data->input('outside_pipe_diameter_3')}}</td>
                @endif

            </tr>
            <tr class="f-s-9 main-table">
                <td class="tb-t-1">Welding position</td>
                <td colspan="5" class="tb-t-2">{{$data->input('welding_position_test')}}</td>
                <td colspan="2" class="tb-t-3">{{$data->input('welding_position_range')}}</td>
            </tr>
            <tr class="f-s-9 main-table">
                <td class="tb-t-1">Weld details</td>
                <td colspan="5" class="tb-t-2">{{$data->input('welding_details_test')}}</td>
                <td colspan="2" class="tb-t-3">{{$data->input('welding_details_range')}}</td>
            </tr>
            <tr class="f-s-9 main-table">
                <td class="tb-t-1 br-b">Multi-layer/single layer</td>
                <td colspan="5" class="tb-t-2 br-b">{{$data->input('single_layer_test')}}</td>
                <td colspan="2" class="tb-t-3 br-b">{{$data->input('single_layer_range')}}</td>
            </tr>
            <!-- !!!-7 part-!!! -->
            <tr>
                <td colspan="6" class="bld-text br-b">Supplementary fillet weld test (completed in conjunction with a butt weld qualification):</td>
                <td colspan="3" class="br-l br-b">{{$data->input('weld_test')}}</td>
            </tr>
            <tr>
                <td colspan="8" class="bg-3">Tests Performed</td>
            </tr>
        </tbody>
    </table>

    <table cellpadding="0" cellspacing="0">

        <tr>
            <td>
                @if($data->input('visual_examination'))
                    <input type="checkbox" checked>
                @else
                    <input type="checkbox">
                @endif
                 Visual Examination of Completed Weld
            </td>
            <td></td>
        </tr>
        <tr>
            <td>
                @if($data->input('transverse_bends'))
                    <input type="checkbox" checked>
                @else
                    <input type="checkbox">
                @endif
                 Transverse bends root and face (6.5.2.3)
            </td>
            <td>
                @if($data->input('transverse_side'))
                    <input type="checkbox" checked>
                @else
                    <input type="checkbox">
                @endif
                 Transverse side bend specimen (6.5.2.3)
            </td>
        </tr>
        <tr>
            <td>
                @if($data->input('specimen_macro'))
                    <input type="checkbox" checked>
                @else
                    <input type="checkbox">
                @endif
                 Specimen Macro test for fusion
            </td>
            <td>
                @if($data->input('ultrasonic_examination'))
                    <input type="checkbox" checked>
                @else
                    <input type="checkbox">
                @endif
                 Ultrasonic Examination (6.5.2.1)
            </td>
        </tr>
    </table>
    <p>We certify that the statements in this record are correct and that the test coupons were prepared, welded, and tested in accordance with the requirements of BS EN ISO 9606-1: 2017 with <strong> ACCEPTABLE </strong> results</p>

    <table>
        <tbody>
            <tr>
                <td colspan="2">TEST WITNESSED BY:   </td>
                <td></td>
                <td colspan="2"> FOR AND ON BEHALF OF MSMK TRAINING LTD:</td>
            </tr>
            <tr style="color: white;">
                <td>!</td>
                <td>!</td>
                <td>!</td>
                <td>!</td>
                <td>!</td>
            </tr>
            <tr>
                <td>Name: <b>{{$data->input('withenessed_name')}}</b></td>
                <td>Position: <b>{{$data->input('withenessed_position')}}</b></td>
                <td class="tb-t-2-2"></td>
                <td>Name: <b>{{$data->input('behaulf_name')}}</b></td>
                <td>Position: <b>{{$data->input('behaulf_position')}}</b></td>
            </tr>
            <tr>
                <td>Date: <b>{{date("j-M-Y", strtotime($data->input('withenessed_date')))}}</b></td>
                <td>Signature:  </td>
                <td class="tb-t-2-2"></td>
                <td>Date: <b>{{date("j-M-Y", strtotime($data->input('behaulf_date')))}}</b></td>
                <td>Signature:  </td>
            </tr>
        </tbody>
    </table>



</div>
