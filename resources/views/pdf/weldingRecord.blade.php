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
</style>

<div class="wrapper">
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
            <td colspan="3">{{$data->input('code-standard')}}</td>
        </tr>
        <tr>
            <td class="td-l">Manufacturers WPQR No:</td>
            <td class="td-l">MA 04</td>
            <td class="bold">Ref No:</td>
            <td class="text-right">WPQR/19-003</td>
        </tr>
        <tr>
            <td class="td-l">Manufacturer:</td>
            <td class="td-l">Mason & King Ltd</td>
            <td class="bold">Issue Number:</td>
            <td class="text-right">01</td>
        </tr>
        <tr>
            <td></td>
            <td class="td-l">Birstall Street</td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td>Leicester   LE1 2HJ</td>
            <td></td>
            <td></td>
        </tr>
    </table>
    <br>
    <table>
        <tr>
            <td class="td-l">Date of Welding / Welder:</td>
            <td class="bold">14 January 2019 MUHAMMAD AAMIR</td>
        </tr>
        <tr>
            <td class="title-1">Range of Qualification:</td>
            <td></td>
        </tr>
    </table>

    <table>
        <tr>
            <td class="td-range-l">Welding Process(es):</td>
            <td>Gas Metal Arc Welding 135</td>
        </tr>
        <tr>
            <td class="td-range-l">Type of Joint and Weld:</td>
            <td>Pipe and Plates Butt and Fillet Welds </td>
        </tr>
        <tr>
            <td class="td-range-l">Parent Mtl. Group(s) and Sub Group(s):</td>
            <td>PD CEN ISO/TR 15608:2017 Gr 1 & 2 and Combination between these groups </td>
        </tr>
        <tr>
            <td class="td-range-l">Parental Material Thickness (mm):</td>
            <td>Butt Welds: 1.0 to 4.0mm / Fillet Welds: 1.4-4mm</td>
        </tr>
        <tr>
            <td class="td-range-l">Weld Material Thickness (mm):</td>
            <td>As Parent Material </td>
        </tr>
        <tr>
            <td class="td-range-l">Single Run/Multi Run:</td>
            <td>Single Run Butt and Fillet Welds</td>
        </tr>
        <tr>
            <td class="td-range-l">Throat Thickness (mm):</td>
            <td>Fillet Welds: 1.5 to 3mm </td>
        </tr>
        <tr>
            <td class="td-range-l">Outside Pipe / Boss Diameter(mm):</td>
            <td>≥500mm (≥150mm PA/PC/PF Rotated)</td>
        </tr>
        <tr>
            <td class="td-range-l">Filler Material Designation:</td>
            <td>EN ISO 14341-A: G4Si1 (SG2 A18)</td>
        </tr>
        <tr>
            <td class="td-range-l">Filler Material Make:</td>
            <td>Any supply compliant with EN 10204 (except class 2.1)</td>
        </tr>
        <tr>
            <td class="td-range-l">Filler Material Size Range:</td>
            <td>Any Filler Size Compliant with stated Heat Input Range</td>
        </tr>
        <tr>
            <td class="td-range-l">Designation of Shielding Gas/Flux:</td>
            <td>ISO 14175:2008 – Class M14 ( ±20% CO2)</td>
        </tr>
        <tr>
            <td class="td-range-l">Designation of Backing Gas:</td>
            <td></td>
        </tr>
        <tr>
            <td class="td-range-l">Type of Welding Current and Polarity:</td>
            <td>DC-Direct Current Electrode Positive</td>
        </tr>
        <tr>
            <td class="td-range-l">Mode of Metal Transfer (MIG/MAG):</td>
            <td>Short Transfer</td>
        </tr>
        <tr>
            <td class="td-range-l">Welding Positions:</td>
            <td>All Positions except PG, PJ and J-LO45</td>
        </tr>
        <tr>
            <td class="td-range-l">Heat Input:</td>
            <td>0.26 Kj/mm (-25%)</td>
        </tr>
        <tr>
            <td class="td-range-l">Preheat Temperature °C (Min):</td>
            <td>Min 10°C </td>
        </tr>
        <tr>
            <td class="td-range-l">Interpass Temperature°C  (Max):</td>
            <td>Not Applicable </td>
        </tr>
        <tr>
            <td class="td-range-l">Heat Treatment and/or Ageing:</td>
            <td>Without Post Weld Heat Treatment and /or Ageing </td>
        </tr>
        <tr>
            <td class="td-range-l">Other Information: </td>
            <td>
                *Filler Metal Trade name: <b>Sidergas</b><br>
                **Filler Metal Lot Number:  <b>762692</b>
            </td>
        </tr>
    </table>

    <p class="p-b"><span>Certified that welds were prepared, welded and tested satisfactorily in accordance with the requirements of the code/testing standard.</span> <br>
    Test House and Report No: - MSMK Training Laboratory UKAS No: 10126 Report no: <b>MSMK 19-003-4</b></p>

    <table>
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
            <td colspan="3">BS EN ISO 15614-1:2017 Level 2 / BS EN ISO 5817:2014 Level B</td>
        </tr>
        <tr>
            <td class="td-l">Manufacturers pWPS Ref No:</td>
            <td class="td-l-2">pMA 04</td>
            <td class="bold">Issue Number:</td>
            <td>01</td>
        </tr>
        <tr>
            <td class="td-l">Manufacturers WPQR No:</td>
            <td class="td-l-2">MA 04</td>
            <td class="bold">Parent Material:</td>
            <td>STRENX 700MC</td>
        </tr>
        <tr>
            <td class="td-l"></td>
            <td class="td-l-2"></td>
            <td class="bold">Heat No:</td>
            <td>22-3561</td>
        </tr>
        <tr>
            <td class="td-l">Welding Process:</td>
            <td class="td-l-2">GMAW 135</td>
            <td class="bold">Specification:</td>
            <td>BS EN 10025-4</td>
        </tr>
        <tr>
            <td class="td-l">Metal Transfer (GMAW):</td>
            <td class="td-l-2">Short</td>
            <td class="bold">Mtl. Thickness (mm)</td>
            <td>2mm</td>
        </tr>
        <tr>
            <td class="td-l">Joint Type & Weld:</td>
            <td class="td-l-2">Butt Weld </td>
            <td class="bold">Outside Diameter (mm):</td>
            <td>Not Applicable </td>
        </tr>
        <tr>
            <td class="td-l">Preparation & Cleaning:</td>
            <td class="td-l-2">CS Wire brush </td>
            <td class="bold">Welding Position:</td>
            <td>PA</td>
        </tr>
    </table>
    <br><br><br><br>
    <table>
        <tr>
            <td class="td-l">Filler Metal Designation:</td>
            <td colspan="3">EN ISO  14341-A: G4Si1 K 1.0mm L</td>
        </tr>
        <tr>
            <td class="td-l">Filler Make:</td>
            <td class="td-l-2">Sidergas</td>
            <td class="bold"></td>
            <td></td>
        </tr>
        <tr>
            <td class="td-l">Baking or Drying:</td>
            <td class="td-l-2">Not Applied</td>
            <td class="bold">Back Gouging:</td>
            <td>Not Applicable </td>
        </tr>
        <tr>
            <td class="td-l">Shielding Gas Type:</td>
            <td class="td-l-2">Ar 93/5/2% </td>
            <td class="bold">Preheat Temperature:</td>
            <td>Not Applied </td>
        </tr>
        <tr>
            <td class="td-l">Flow Rate (LPM):</td>
            <td class="td-l-2">18L/pm</td>
            <td class="bold">Interpass Temperature:</td>
            <td>Not Applicable </td>
        </tr>
        <tr>
            <td class="td-l">Purging Gas Type:</td>
            <td class="td-l-2">Not Applied </td>
            <td class="bold">Heat Treatment and/or Ageing:</td>
            <td>Not Applied </td>
        </tr>
        <tr>
            <td class="td-l">Tungsten Type:</td>
            <td class="td-l-2">Not Applicable </td>
            <td class="bold">Heating and Cooling Rates:</td>
            <td>No Applicable </td>
        </tr>
        <tr>
            <td class="td-l">Tungsten Size:</td>
            <td class="td-l-2">Not Applicable </td>
            <td class="bold"></td>
            <td></td>
        </tr>
        <tr>
            <td class="td-l">Touch to Work:</td>
            <td class="td-l-2">10-15mm</td>
            <td class="bold"></td>
            <td></td>
        </tr>
        <tr>
            <td class="td-l">Power Source:</td>
            <td class="td-l-2"></td>
            <td class="bold">Not Applicable</td>
            <td></td>
        </tr>
        <tr>
            <td class="td-l">Automatic System:</td>
            <td class="td-l-2"></td>
            <td class="bold">Not Applicable</td>
            <td></td>
        </tr>
        <tr>
            <td class="td-l">Control:</td>
            <td class="td-l-2"></td>
            <td class="bold">Not Applicable</td>
            <td></td>
        </tr>
    </table>
    <br><br>
    <table>
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
            <td colspan="3">BS EN ISO 15614-1:2017 Level 2 / BS EN ISO 5817:2014 Level B</td>
        </tr>
        <tr>
            <td class="td-l">Manufacturers pWPS No:</td>
            <td class="td-l">pMA 04</td>
            <td class="bold">Ref No:</td>
            <td class="text-right">WPQR/19-003</td>
        </tr>
        <tr>
            <td class="td-l">Manufacturers WPQR:</td>
            <td class="td-l">MA 04</td>
            <td class="bold">Issue Number:</td>
            <td class="text-right">01</td>
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
        <tr>
            <td>1</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
    </table>
    <br><br><br><br>
    <table>
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
    <div class="contacts">
        <b>MSMK</b> Training Ltd<br>
        75 Blackstock road, Sheffield, S14 1AD, United Kingdom<br>
        Phone:+44(0)11422811990, Mob: 07884261090, Email: msmktraining@googlemail.com
    </div>
    <div class="title-1 text-center">Tests Performed</div>
    <br><br>
    <table class="table-tests">
        <tr>
            <td class="bold">Manufacturers pWPS Ref No:</td>
            <td>pMA 04</td>
            <td class="bold">Examiner/Test Body:</td>
            <td>MSMK Training Ltd</td>
        </tr>
        <tr>
            <td class="bold">Manufacturers WPQR No:</td>
            <td>MA 04</td>
            <td class="bold">NDT Ref No:</td>
            <td class="bold">19-003-4L</td>
        </tr>
    </table>
</div>
