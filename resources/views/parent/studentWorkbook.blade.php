<!DOCTYPE html>
<html>
<head>
    <title>table.number</title>
    <link rel="stylesheet" type="text/css" href="{{asset('css/table.number.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<div style="max-width: 100%;direction: rtl">
    @include('include.nav')
</div>
<div class="row body-margin mt-5">

    <div id="profile" class="col-xs-12 ">
        <div id="img">
            <img src="{{asset('img/download (3).jpg')}}">
        </div>
        <div id="text">
            <ul>

                <li class="box"><h2>نام: <h3>فرانک </h3></h2></li>

                <li class="box"><h2> نام خانوادگی :  <h3> فتحی</h3></h2> </li>

                <li class="box"><h2>شماره ملی  : <h3>1490420223</h3></h2></li>

                <li class="box"><h2>نام پدر : <h3>غلامرضا </h3></h2> </li>


                <li class="box"><h2> مقطع تحصیلی : <h3> دوم متوسطه</h3></h2></li>


                <li class="box"><h2> رشته تحصیلی  : <h3>ریاضی </h3></h2></li>


                <li class="box"><h2> تاریخ تولد  : <h3> 1375/9/12</h3></h2></li>



            </ul>

        </div>

    </div>

    </nav>

    <table class="table">
        <thead>
        <tr>
            <th rowspan="2">ردیف </th>
            <th rowspan="2">کد درس</th>
            <th rowspan="2">نام درس</th>
            <th rowspan="2">واحد درس</th>
            <th colspan="3">نوبت اول</th>
            <th colspan="2"> نوبت دوم</th>
            <th rowspan="2"> نمره سالانه</th>

        </tr>

        <tr>
            <th>مستمر </th>
            <th>پایانی</th>
            <th>کل</th>
            <th>مستمر</th>
            <th>پایانی</th>

        </tr>
        </thead>
        <tbody>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        </tbody>
    </table>
    <table class="table2">
        <thead>
        <tr>
            <th colspan="2">تعداد واحد</th>
            <th rowspan="2">میانگین نوبت اول</th>
            <th rowspan="2">میانگین نوبت دوم</th>
        </tr>
        <tr>
            <th>اخذ شده</th>
            <th>گذرانده</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>

        </tr>
        </tbody>

    </table>
</div>
<div>
    @include('include.footer')
</div>
</body>
</html>