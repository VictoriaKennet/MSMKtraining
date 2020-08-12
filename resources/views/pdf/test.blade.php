<style>
    @page { margin:0px; }
    body {
        font-family: DejaVu Sans, sans-serif;
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
    .tdHead2 {
        background: #dedede;
        border-top: 1px solid #000;
    }
    input[type=checkbox] {
        margin-top:7px
    }
    p {
        margin-top: 20px
    }
</style>

<div class="wrapper">
    <div class="contacts">
        <b>MSMK</b> Training Ltd<br>
        75 Blackstock road, Sheffield, S14 1AD, United Kingdom<br>
        Phone:+44(0)11422811990, Mob: 07884261090, Email: msmktraining@googlemail.com
    </div>

    <h3>Welder Qualification Test Certificate</h3>
    <h4>Designation: BS EN ISO  9606-1	:2017 111 P BW   FM1   t12   PE ss nb ml </h4>

    <table cellpadding="0" cellspacing="0">
        <tr>
            <td width="150px">WPS reference</td>
            <td width="150px">{{$data->input('wps_reference')}}</td>
            <td rowspan="6" style="text-align: center">Test Ref / Certificate No:<br> {{$data->input('certificate')}}<br> LR control No: NA</td>
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
            <td>{{$data->input('code')}}</td>
        </tr>
        <tr>
            <td>Job knowledge</td>
            <td>{{$data->input('job')}}</td>
        </tr>
    </table>

    <table cellpadding="0" cellspacing="0">
        <tr>
            <td class="tdHead1">Test piece</td>
            <td class="tdHead1"></td>
            <td class="tdHead1">Range of qualification</td>
        </tr>
        @for ($i = 0; $i < 5; $i++)
            <tr>
                <td style="border: 1px solid #dedede">
                    Welding process(es);<br>
                    Transfer mode<br>
                    Product type (plate of pipe)<br>
                    Type of weld
                </td>
                <td style="border: 1px solid #dedede">
                    {{$data->input('variants')}}<br>
                    Not Applicable<br>
                    Plate B<br>
                    Buff Weld (BW)
                </td>
                <td style="background: #dedede">
                    111 Manual Metal Arc Welding<br>
                    Not Applicable<br>
                    Tube (T) and Plate (P)<br>
                    Buff Weld (BW)
                </td>
            </tr>
        @endfor
    </table>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <td class="tdHead2">Tests performed</td>
            <td class="tdHead2"></td>
        </tr>
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
            <td></td>
        </tr>
    </table>
    <p>We certify that the statements in this record are correct and that the test coupons were prepared, welded, and tested in accordance with the requirements of BS EN ISO 9606-1: 2017 with ACCEPTABLE results</p>
</div>
