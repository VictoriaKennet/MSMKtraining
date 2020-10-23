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
    .contacts {
        margin: 80px 0px 70px 130px;
    }
    h3, h4 {
        text-align: center;
        margin: 0px
    }
    h3 {
        font-size: 24px;
    }
    table {
        margin: 0 30px;
        width: 100%;
    }
    .td-l {
        width: 30%;
        font-weight: bold;
    }
    .td-l-2 {
        width: 20%;
    }
    .td-range-l {
        width: 40%;
        font-weight: bold;
    }
    .bold {
        font-weight: bold;
    }
    .text-right {
        text-align: right;
    }
    .text-center {
        text-align: center;
    }
    .title-1 {
        font-weight: bold;
        font-size: 16px;
    }
    .p-b {
        margin: 40px 30px;
        font-size: 12px;
    }
    .p-b span {
        font-size: 10px;
    }
    .page-break {
        page-break-after: always;
    }
    .td-head {
        padding-bottom: 20px;
    }
    .table-record, .table-tests {
        border-spacing: 0px;
        border-collapse: collapse;
    }
    .table-record td, .table-record th {
        margin: 0;
        border: 1px solid #000;
    }
    .table-tests td {
        margin: 0;
        padding-left: 5px;
        border: 1px solid #000;
    }
    .table-record tr {
        text-align: center;
    }
    .small {
        font-size: 8px;
        font-weight: normal;
    }
    .b-t-no {
        border-top: none;
    }
    .title-2 {
        color: #365f91;
        font-family: "Cambria", sans-serif;
    }
    .bottom-inf1 {
        position: absolute;
        top: 85%;
    }

    .bottom-inf2 {
            position: absolute;
            top: 97.4%;
        }

</style>

<div class="wrapper">

    <!-- Page 1 -->

    <div class="bottom-inf2">
            <div>{{$data->input('document_number1')}}</div>
            <div>{{$data->input('document_number2')}}</div>
    </div>

    <div class="contacts">
        <b>MSMK</b> Training Ltd<br>
        75 Blackstock road, Sheffield, S14 1AD, United Kingdom<br>
        Phone:+44(0)11422811990, Mob: 07884261090, Email: msmktraining@googlemail.com
    </div>
    <h3>WELDING PROCEDURE QUALIFICATION RECORD</h3>
    <br><br>
    <table>
        <tr>
            <td class="td-l">Code/Testing Standard:</td>
            <td colspan="3">{{$data->input('code_standard')}}</td>
        </tr>
        <tr>
            <td class="td-l">Manufacturers WPQR No:</td>
            <td class="td-l">{{$data->input('manufacturers_2_2')}}</td>
            <td class="bold">Ref No:</td>
            <td class="text-right">{{$data->input('ref_no')}}</td>
        </tr>
        <tr>
            <td class="td-l">Manufacturer:</td>
            <td class="td-l">{{$data->input('manufacturer_1')}}</td>
            <td class="bold">Issue Number:</td>
            <td class="text-right">{{$data->input('issue_number')}}</td>
        </tr>
        <tr>
            <td></td>
            <td class="td-l">{{$data->input('manufacturer_2')}}</td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td class="td-l">{{$data->input('manufacturer_3')}}</td>
            <td></td>
            <td></td>
        </tr>
    </table>
    <br>
    <table>
        <tr>
            <td class="td-l">Date of Welding / Welder:</td>
            <td class="bold">{{$data->input('date_welder')}} {{$data->input('date_welder_name')}}</td>
        </tr>
        <tr>
            <td class="title-1">Range of Qualification:</td>
            <td></td>
        </tr>
    </table>

    <table>
        <tr>
            <td class="td-range-l">Welding Process(es):</td>
            <td>{{$data->input('welding_process_add')}}</td>
        </tr>
        <tr>
            <td class="td-range-l">Type of Joint and Weld:</td>
            <td>{{$data->input('joint_type_weld_add')}}</td>
        </tr>
        <tr>
            <td class="td-range-l">Parent Mtl. Group(s) and Sub Group(s):</td>
            <td>{{$data->input('parent_mlt_add')}}</td>
        </tr>
        <tr>
            <td class="td-range-l">Parental Material Thickness (mm):</td>
            <?php
                $fillet_welds = 0;
                $butt_welds = 0;

                if($data->input('mtl_thickness') <= 3) {
                    $fillet_welds = (0.7 * $data->input('mtl_thickness'))." to ".(2 * $data->input('mtl_thickness'));
                    $butt_welds = (0.5 * $data->input('mtl_thickness'))." to ".(2 * $data->input('mtl_thickness'));
                }
                if(3 < $data->input('mtl_thickness') && $data->input('mtl_thickness') < 30) {
                    $fillet_welds = "3 to ".(2 * $data->input('mtl_thickness'));
                }
                if($data->input('mtl_thickness') >= 30) {
                    $fillet_welds = ">=5";
                }

                if(3 < $data->input('mtl_thickness') && $data->input('mtl_thickness') <= 12) {
                    $butt_welds = "3 to ".(2 * $data->input('mtl_thickness'));
                }
                if(12 < $data->input('mtl_thickness') && $data->input('mtl_thickness') <= 100) {
                    $butt_welds = (0.5 * $data->input('mtl_thickness'))." to ".(2 * $data->input('mtl_thickness'));
                }
            ?>
            @if($data->input('butt_welds') && $data->input('fillet_welds'))
                <td>
                    Butt Welds: {{ $butt_welds }}mm / Fillet Welds: {{ $fillet_welds }}mm
                </td>
            @else
                @if($data->input('fillet_welds'))
                    <td>
                        Fillet Welds: {{ $fillet_welds }}mm
                    </td>
                @else
                    <td>
                        Butt Welds: {{ $butt_welds }}mm
                    </td>
                @endif
            @endif
        </tr>
        <tr>
            <td class="td-range-l">Weld Material Thickness (mm):</td>
            <td>{{$data->input('weld_material_thickness')}}</td>
        </tr>
        <tr>
            <td class="td-range-l">Single Run/Multi Run:</td>
            <td>{{$data->input('single_run')}}</td>
        </tr>
        <tr>
            <td class="td-range-l">Throat Thickness (mm):</td>
            <td>{{$data->input('throat_thickness')}}</td>
        </tr>
        <tr>
            <td class="td-range-l">Outside Pipe / Boss Diameter(mm):</td>
            <td>
                @if ($data->input('outside_pipe') === "Not Applicable")
                    <img src="img/img1.png"> 500mm (<img src="img/img1.png">150mm PA/PC/PF Rotated)
                @else
                    <img src="img/img1.png"> {{ 0.5 * $data->input('outside_pipe') }}
                @endif
            </td>
        </tr>
        <tr>
            <td class="td-range-l">Filler Material Designation:</td>
            <td>{{$data->input('filler_metal_ds')}} or equivalent</td>
        </tr>
        <tr>
            <td class="td-range-l">Filler Material Make:</td>
            <td>{{$data->input('filler_material_make')}}</td>
        </tr>
        <tr>
            <td class="td-range-l">Filler Material Size Range:</td>
            <td>{{$data->input('filler_material_size_range')}}</td>
        </tr>
        <tr>
            <td class="td-range-l">Designation of Shielding Gas/Flux:</td>
            <td>{{$data->input('designation_gas_flux_add')}}</td>
        </tr>
        <tr>
            <td class="td-range-l">Designation of Backing Gas:</td>
            <td>{{$data->input('designation_backing_gas')}}</td>
        </tr>
        <tr>
            <td class="td-range-l">Type of Welding Current and Polarity:</td>
            <td>{{$data->input('type_welding_current')}}</td>
        </tr>
        <tr>
            <td class="td-range-l">Mode of Metal Transfer (MIG/MAG):</td>
            <td>{{$data->input('metal_transfer')}}</td>
        </tr>
        <tr>
            <td class="td-range-l">Welding Positions:</td>
            <td>{{$data->input('welding_post_add')}}</td>
        </tr>
        <tr>
            <td class="td-range-l">Heat Input:</td>
            <td>{{$data->input('heat_input')}}</td>
        </tr>
        <tr>
            <td class="td-range-l">Preheat Temperature °C (Min):</td>
            <td>{{$data->input('interpass_min')}}</td>
        </tr>
        <tr>
            <td class="td-range-l">Interpass Temperature°C  (Max):</td>
            <td>{{$data->input('interpass_max')}}</td>
        </tr>
        <tr>
            <td class="td-range-l">Heat Treatment and/or Ageing:</td>
            <td>{{$data->input('heat_treatment')}}</td>
        </tr>
        <tr>
            <td class="td-range-l">Other Information: </td>
            <td>
                *Filler Metal Trade name: <b>{{$data->input('filler_metal')}}</b><br>
                **Filler Metal Lot Number:  <b>{{$data->input('lot_number')}}</b>
            </td>
        </tr>
    </table>

    <p class="p-b"><span>Certified that welds were prepared, welded and tested satisfactorily in accordance with the requirements of the code/testing standard.</span> <br>
    Test House and Report No: - MSMK Training Laboratory UKAS No: 10126 Report no: <b>{{$data->input('report_no')}}</b></p>

    <table class="bottom-inf1">
        <tr>
            <td class="td-head" colspan="2">TEST WITNESSED BY:</td>
            <td class="td-head" colspan="2">FOR AND ON BEHALF OF MSMK TRAINING LTD:</td>
        </tr>
        <tr>
            <td>Name: <b>{{$data->input('withenessed_name')}}</b></td>
            <td>Position: <b>{{$data->input('withenessed_position')}}</b></td>

            <td>Name: <b>{{$data->input('behaulf_name')}}</b></td>
            <td>Position: <b>{{$data->input('behaulf_position')}}</b></td>
        </tr>
        <tr>
            <td>Date:  <b>{{date("j-M-Y", strtotime($data->input('withenessed_date')))}}</b></td>
            <td>Signature:</td>

            <td>Date:  <b>{{date("j-M-Y", strtotime($data->input('behaulf_position')))}}</b></td>
            <td>Signature:</td>
        </tr>
    </table>
    <div class="page-break"></div>

    <!-- Page 2 -->

    <div class="bottom-inf2">
            <div>{{$data->input('document_number1')}}</div>
            <div>{{$data->input('document_number2')}}</div>
    </div>

    <div class="contacts">
        <b>MSMK</b> Training Ltd<br>
        75 Blackstock road, Sheffield, S14 1AD, United Kingdom<br>
        Phone:+44(0)11422811990, Mob: 07884261090, Email: msmktraining@googlemail.com
    </div>
    <div class="title-1 text-center">Record of Weld Test</div>
    <br><br>
    <table>
        <tr>
            <td class="td-l">Code/Testing Standard:</td>
            <td colspan="3">{{$data->input('code_standard')}}</td>
        </tr>
        <tr>
            <td class="td-l">Manufacturers pWPS Ref No:</td>
            <td class="td-l-2">{{$data->input('manufacturers_2')}}</td>
            <td class="bold">Issue Number:</td>
            <td>{{$data->input('issue_number')}}</td>
        </tr>
        <tr>
            <td class="td-l">Manufacturers WPQR No:</td>
            <td class="td-l-2">{{$data->input('manufacturers_2_2')}}</td>
            <td class="bold">Parent Material:</td>
            <td>{{$data->input('parent_material')}}</td>
        </tr>
        <tr>
            <td class="td-l"></td>
            <td class="td-l-2"></td>
            <td class="bold">Heat No:</td>
            <td>{{$data->input('heat_no')}}</td>
        </tr>
        <tr>
            <td class="td-l">Welding Process:</td>
            <td class="td-l-2">{{$data->input('welding_process')}}</td>
            <td class="bold">Specification:</td>
            <td>{{$data->input('specification')}}</td>
        </tr>
        <tr>
            <td class="td-l">Metal Transfer (GMAW):</td>
            <td class="td-l-2">{{$data->input('metal_transfer')}}</td>
            <td class="bold">Mtl. Thickness (mm)</td>
            <td>{{$data->input('mtl_thickness')}}</td>
        </tr>
        <tr>
            <td class="td-l">Joint Type & Weld:</td>
            <td class="td-l-2">{{$data->input('joint_type_weld')}}</td>
            <td class="bold">Outside Diameter (mm):</td>
            <td>{{$data->input('outside_diameter')}}</td>
        </tr>
        <tr>
            <td class="td-l">Preparation & Cleaning:</td>
            <td class="td-l-2">{{$data->input('preparation')}}</td>
            <td class="bold">Welding Position:</td>
            <td>{{$data->input('welding_post')}}</td>
        </tr>
    </table>
    <br><br>

    <table class="table-tests text-center">
            <tr class="bold">
                <td width="50%">Join Design</td>
                <td width="50%">Welding Sequences</td>
            </tr>
            <tr>
                <td width="50%"> <br><br><br><br> <br><br><br><br><br><br><br><br></td>
                <td width="50%"> <br><br><br><br> <br><br><br><br><br><br><br><br></td>
            </tr>
        </table>


    <br><br>
    <table>
        <tr>
            <td class="td-l">Filler Metal Designation:</td>
            <td colspan="3">{{$data->input('filler_metal_ds')}} {{ $data->input('records2') }}mm</td>
        </tr>
        <tr>
            <td class="td-l">Filler Make:</td>
            <td class="td-l-2">{{$data->input('filler_metal')}}</td>
            <td class="bold"></td>
            <td></td>
        </tr>
        <tr>
            <td class="td-l">Baking or Drying:</td>
            <td class="td-l-2">{{$data->input('baking_drying')}}</td>
            <td class="bold">Back Gouging:</td>
            <td>{{$data->input('baking_gouging')}} </td>
        </tr>
        <tr>
            <td class="td-l">Shielding Gas Type:</td>
            <td class="td-l-2">
                @if($data->input('isArg'))
                    <div>Arg {{ $data->input('arg') }}%</div>
                @endif
                @if($data->input('isCo2'))
                    <div>CO2 {{ $data->input('co2') }}%</div>
                @endif
                @if($data->input('isO2'))
                    <div>O2 {{ $data->input('o2') }}%</div>
                @endif
                @if($data->input('isHe'))
                    <div>He {{ $data->input('he') }}%</div>
                @endif
            </td>
            <td class="bold">Preheat Temperature:</td>
            <td>{{$data->input('preheat_temperature')}} </td>
        </tr>
        <tr>
            <td class="td-l">Flow Rate (LPM):</td>
            <td class="td-l-2">{{$data->input('flow_rate')}}</td>
            <td class="bold">Interpass Temperature:</td>
            <td>{{$data->input('interpass_temperature')}}</td>
        </tr>
        <tr>
            <td class="td-l">Purging Gas Type:</td>
            <td class="td-l-2">{{$data->input('designation_gas_flux')}}</td>
            <td class="bold">Heat Treatment and/or Ageing:</td>
            <td>{{$data->input('heating_treatment')}}</td>
        </tr>
        <tr>
            <td class="td-l">Tungsten Type:</td>
            <td class="td-l-2">{{$data->input('tungsten_type')}}</td>
            <td class="bold">Heating and Cooling Rates:</td>
            <td>{{$data->input('heating_cooling_rates')}}</td>
        </tr>
        <tr>
            <td class="td-l">Tungsten Size:</td>
            <td class="td-l-2">{{$data->input('tungsten_size')}}</td>
            <td class="bold"></td>
            <td></td>
        </tr>
        <tr>
            <td class="td-l">Touch to Work:</td>
            <td class="td-l-2">{{$data->input('touch_work')}}</td>
            <td class="bold"></td>
            <td></td>
        </tr>
        <tr>
            <td class="td-l">Power Source:</td>
            <td class="td-l-2"></td>
            <td class="bold">{{$data->input('power_source')}}</td>
            <td></td>
        </tr>
        <tr>
            <td class="td-l">Automatic System:</td>
            <td class="td-l-2"></td>
            <td class="bold">{{$data->input('automatic_system')}}</td>
            <td></td>
        </tr>
        <tr>
            <td class="td-l">Control:</td>
            <td class="td-l-2"></td>
            <td class="bold">{{$data->input('control')}}</td>
            <td></td>
        </tr>
    </table>
    <br><br>

    <!-- ADD BOTTOM -->
    <table class="bottom-inf1">
        <tr>
            <td class="td-head" colspan="2">TEST WITNESSED BY:</td>
            <td class="td-head" colspan="2">FOR END ON BEHALF OF MSMK TRAINING LTD:</td>
        </tr>
        <tr>
            <td>Name: <b>{{$data->input('withenessed_name')}}</b></td>
            <td>Position: <b>{{$data->input('withenessed_position')}}</b></td>

            <td>Name: <b>{{$data->input('behaulf_name')}}</b></td>
            <td>Position: <b>{{$data->input('behaulf_position')}}</b></td>
        </tr>
        <tr>
            <td>Date:  <b>{{date("j-M-Y", strtotime($data->input('withenessed_date')))}}</b></td>
            <td>Signature:</td>

            <td>Date:  <b>{{date("j-M-Y", strtotime($data->input('behaulf_position')))}}</b></td>
            <td>Signature:</td>
        </tr>
    </table>
    <div class="page-break"></div>

    <!-- Page 3 -->

    <div class="bottom-inf2">
            <div>{{$data->input('document_number1')}}</div>
            <div>{{$data->input('document_number2')}}</div>
    </div>

    <div class="contacts">
        <b>MSMK</b> Training Ltd<br>
        75 Blackstock road, Sheffield, S14 1AD, United Kingdom<br>
        Phone:+44(0)11422811990, Mob: 07884261090, Email: msmktraining@googlemail.com
    </div>
    <div class="title-1 text-center">Record of Welding Parameters</div>
    <br><br>
    <table>
        <tr>
            <td class="td-l">Code/Testing Standard:</td>
            <td colspan="3">{{$data->input('code_standard')}}</td>
        </tr>
        <tr>
            <td class="td-l">Manufacturers pWPS No:</td>
            <td class="td-l">{{$data->input('manufacturers_2')}}</td>
            <td class="bold">Ref No:</td>
            <td class="text-right">{{$data->input('ref_no')}}</td>
        </tr>
        <tr>
            <td class="td-l">Manufacturers WPQR:</td>
            <td class="td-l">{{$data->input('manufacturers_2_2')}}</td>
            <td class="bold">Issue Number:</td>
            <td class="text-right">{{$data->input('issue_number')}}</td>
        </tr>
    </table>
    <br><br><br>

    <table class="table-record">
        <tr>
            <th>Run</th>
            <th>Process</th>
            <th>Size of Filler (mm)</th>
            <th>Current A</th>
            <th>Voltage V</th>
            <th>Type of Current/Polarity</th>
            <th>Type of transfer</th>
            <th>Travel Speed (mm/sec)</th>
            <th>Heat Input (Kj/mm)</th>
        </tr>
        @foreach (json_decode($data->input('records')) as $key => $item)
            <tr>
                <td>{{$key+1}}</td>
                <td>{{$item->record_process}}</td>
                <td>{{$item->record_size}}</td>
                <td>{{$item->record_current_a}}</td>
                <td>{{$item->record_voltage_v}}</td>
                <td>{{$item->record_type_current}}</td>
                <td>{{$item->record_type_transfer}}</td>
                <td>{{$item->record_travel_speed}}</td>
                <td>{{$item->record_heat_input}}</td>
            </tr>
        @endforeach
    </table>
    <br><br><br><br>
    <table class="bottom-inf1">
        <tr>
            <td class="td-head" colspan="2">TEST WITNESSED BY:</td>
            <td class="td-head" colspan="2">FOR END ON BEHALF OF MSMK TRAINING LTD:</td>
        </tr>
        <tr>
            <td>Name: <b>{{$data->input('withenessed_name')}}</b></td>
            <td>Position: <b>{{$data->input('withenessed_position')}}</b></td>

            <td>Name: <b>{{$data->input('behaulf_name')}}</b></td>
            <td>Position: <b>{{$data->input('behaulf_position')}}</b></td>
        </tr>
        <tr>
            <td>Date:  <b>{{date("j-M-Y", strtotime($data->input('withenessed_date')))}}</b></td>
            <td>Signature:</td>

            <td>Date:  <b>{{date("j-M-Y", strtotime($data->input('behaulf_position')))}}</b></td>
            <td>Signature:</td>
        </tr>
    </table>
    <div class="page-break"></div>

    <!-- Page 4 -->

    <div class="bottom-inf2">
            <div>{{$data->input('document_number1')}}</div>
            <div>{{$data->input('document_number2')}}</div>
    </div>

    <div class="contacts">
        <b>MSMK</b> Training Ltd<br>
        75 Blackstock road, Sheffield, S14 1AD, United Kingdom<br>
        Phone:+44(0)11422811990, Mob: 07884261090, Email: msmktraining@googlemail.com
    </div>
    <div class="title-1 text-center">Tests Performed</div>
    <br><br>
    <table class="table-tests">
        <tr>
            <td class="bold" width="30%">Manufacturers pWPS Ref No:</td>
            <td>{{$data->input('manufacturers_1')}}</td>
            <td class="bold" width="30%">Examiner/Test Body:</td>
            <td>{{$data->input('examiner_test_body')}}</td>
        </tr>
        <tr>
            <td class="bold" width="30%">Manufacturers WPQR No:</td>
            <td>{{$data->input('manufacturers_2_2')}}</td>
            <td class="bold" width="30%">NDT Ref No:</td>
            <td class="bold">{{$data->input('ndf_ref_no')}}</td>
        </tr>
    </table>
    <br><br>
    <table class="table-tests">
        <tr>
            <td class="bold" width="33%">
                <u>Visual: <span class="small">({{$data->input('visual')}})</span></u>
            </td>
            <td class="bold" width="15%">Acceptable</td>
            <td class="bold">Name of Examiner:</td>
            <td>{{$data->input('name_examiner')}}</td>
        </tr>
    </table>
    <br><br>
    <table class="table-tests">
        <tr>
            <td class="bold" width="33%">
                <u>DYE Penetrant Test: <span class="small">({{$data->input('visual')}})</span></u>
            </td>
            <td class="bold" width="15%">Acceptable</td>
            <td class="bold">Viewing Conditions:</td>
            <td>{{$data->input('viewing_conditions')}}</td>
        </tr>
        <tr>
            <td class="bold" width="33%">Penetrant-Manufacture Type</td>
            <td width="15%">{{$data->input('penetrant_manufacture_type')}}</td>
            <td class="bold">Name of Examiner & PCN No:</td>
            <td>{{$data->input('name_examiner')}}</td>
        </tr>
        <tr>
            <td class="bold" width="33%">Develop-Manufacture Type</td>
            <td width="15%">{{$data->input('develop_manufacture')}}</td>
            <td class="bold">Detection Media:</td>
            <td>{{$data->input('detection_media')}}</td>
        </tr>
        <tr>
            <td class="bold" width="33%">Remover-Manufacturer & Type</td>
            <td width="15%">{{$data->input('remover_manufacturer_type')}}</td>
            <td class="bold">Detection Media, Contrast Paint:</td>
            <td>{{$data->input('detection_media_contrast_paint')}}</td>
        </tr>
    </table>
    <br><br>
    <table class="table-tests">
        <tr>
            <td class="bold" width="33%">
                <u>Ultrasonic: <span class="small">({{$data->input('visual')}})</span></u>
            </td>
            <td width="15%">{{$data->input('ultrasonic')}}</td>
            <td class="bold">Reference Block(s) Used:</td>
            <td>{{$data->input('reference_blocks')}}</td>
        </tr>
        <tr>
            <td class="bold" width="33%">Procedure Number:</td>
            <td width="15%">{{$data->input('procedure_number')}}</td>
            <td class="bold">Name of Examiner & PCN No:</td>
            <td>{{$data->input('name_examiner_PCN')}}</td>
        </tr>
        <tr>
            <td class="bold" width="33%">Probe(s) & Serial Number:</td>
            <td width="15%">{{$data->input('probe_serial_number')}}</td>
            <td class="bold">Flaw Detection & Serial Number:</td>
            <td>{{$data->input('flaw_detection_serial_number')}}</td>
        </tr>
    </table>
    <br><br>
    <table class="table-tests">
        <tr>
            <td class="bold" colspan="3" width="45%">Tensile Test <span class="small">({{$data->input('tensile_test_add')}})</span></td>
            <td class="bold" colspan="6">{{$data->input('tensile_test')}}</td>
        </tr>
        <tr>
            <td>A: {{$data->input('a_1')}} <br> B: {{$data->input('b_1')}}</td>
            <td>Thickness:<br>Thickness:</td>
            <td>{{$data->input('a_thickness')}} <br> {{$data->input('b_thickness')}} </td>
            <td>Width:<br>Width:</td>
            <td>{{$data->input('a_width')}} <br> {{$data->input('b_width')}}</td>
            <td colspan="2">Maximim Force (KN):<br>Maximum Force (KN):</td>
            <td colspan="2">{{$data->input('a_maximum')}} <br> {{$data->input('b_maximum')}}</td>
        </tr>
        <tr style="text-align:center">
            <td class="bold">Type/No:</td>
            <td width="18%">0.2% Proof Stress N/mm?</td>
            <td width="15%">Yield Strength N/mm?</td>
            <td width="21%" colspan="2">Tensile Strength N/mm?</td>
            <td>Elongation on%</td>
            <td>Reduction of area %</td>
            <td>Fracture Location</td>
            <td>Result</td>
        </tr>
        <tr style="text-align:center">
            <td class="bold">Requirement</td>
            <td></td>
            <td></td>
            <td colspan="2"></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td class="bold"><br></td>
            <td></td>
            <td></td>
            <td colspan="2"></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td class="bold"><br></td>
            <td></td>
            <td></td>
            <td colspan="2"></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
    </table>
    <br><br>
    <table class="table-tests">
        <tr>
            <td width="35%" rowspan="4">
                <u><b>Bend Tests:</b> <span class="small">({{$data->input('bend_tests')}})</small></u><br>
                <br>
                <u>Dimensions</u><br>
                Thickness: {{$data->input('thickness')}}<br>
                Width: {{$data->input('width')}}
            </td>
            <td>Dia of Former:</td>
            <td>{{$data->input('dia_former')}}</td>
            <td>Side:</td>
            <td>{{$data->input('side')}}</td>
        </tr>
        <tr>
            <td>Angle of Bend:</td>
            <td>{{$data->input('angle_bend')}}</td>
            <td>Face:</td>
            <td>{{$data->input('face')}}</td>
        </tr>
        <tr>
            <td>Elongation:</td>
            <td>{{$data->input('elongation')}}</td>
            <td>Root:</td>
            <td>{{$data->input('root')}}</td>
        </tr>
        <tr>
            <td colspan="2">Distance between Rollers:</td>
            <td colspan="2" class="bold">{{$data->input('distance_between_rollers')}}</td>
        </tr>
    </table>
    <br><br>
    <table class="table-tests">
        <tr>
            <td class="bold" width="30%" rowspan="2">
                <u class="title-2">Macro/Microscopic Test</u> <span class="small"><b>({{$data->input('macro_microscopic_test_add')}})</b></span>
            </td>
            <td class="bold" rowspan="2">{{$data->input('macro_microscopic_test')}}</td>
            <td>Etchant Type:</td>
            <td>{{$data->input('etchant_type')}}</td>
        </tr>
        <tr>
            <td>Method:</td>
            <td>{{$data->input('method')}}</td>
        </tr>
        <tr>
            <td>Location, Orientation & Examined Surface:</td>
            <td class="bold">{{$data->input('orientation')}}</td>
            <td colspan="2">{{$data->input('orientation_add')}}</td>
        </tr>
    </table>

</div>
