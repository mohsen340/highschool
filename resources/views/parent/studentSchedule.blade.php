<!DOCTYPE html>
<html>
<head>
    <title>برنامه هفتگی</title>
    <link rel="stylesheet" type="text/css" href="{{asset('css/table.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<style>
    body{
        background-color: #dee2b7;
    }
</style>
<body>
<div style="max-width: 100%;direction: rtl">
    @include('include.nav')
</div>
<table class="table mt-5 pt-2">
    <thead>
    <tr>
        <th>ایام هفته</th>
        <th>زنگ اول</th>
        <th>زنگ دوم</th>
        <th>زنگ سوم</th>
        <th>زنگ  چهارم</th>
    </tr>
    </thead>
    <tbody>


    <tr>
        <td>شنبه</td>
        <td>
            @if(     $day0[0]->time_num == 0){{$day0[0]->lesson->name}}
            @elseif ($day0[1]->time_num == 0){{$day0[1]->lesson->name}}
            @elseif ($day0[2]->time_num == 0){{$day0[2]->lesson->name}}
            @elseif ($day0[3]->time_num == 0){{$day0[3]->lesson->name}}
            @endif
        </td>
        <td>
            @if(     $day0[0]->time_num == 1){{$day0[0]->lesson->name}}
            @elseif ($day0[1]->time_num == 1){{$day0[1]->lesson->name}}
            @elseif ($day0[2]->time_num == 1){{$day0[2]->lesson->name}}
            @elseif ($day0[3]->time_num == 1){{$day0[3]->lesson->name}}
            @endif
        </td>
        <td>
            @if(     $day0[0]->time_num == 2){{$day0[0]->lesson->name}}
            @elseif ($day0[1]->time_num == 2){{$day0[1]->lesson->name}}
            @elseif ($day0[2]->time_num == 2){{$day0[2]->lesson->name}}
            @elseif ($day0[3]->time_num == 2){{$day0[3]->lesson->name}}
            @endif
        </td>
        <td>
            @if(     $day0[0]->time_num == 3){{$day0[0]->lesson->name}}
            @elseif ($day0[1]->time_num == 3){{$day0[1]->lesson->name}}
            @elseif ($day0[2]->time_num == 3){{$day0[2]->lesson->name}}
            @elseif ($day0[3]->time_num == 3){{$day0[3]->lesson->name}}
            @endif
        </td>
    </tr>
    <tr>
        <td>یکشنبه</td>
        <td>
            @if(     $day1[0]->time_num == 0){{$day1[0]->lesson->name}}
            @elseif ($day1[1]->time_num == 0){{$day1[1]->lesson->name}}
            @elseif ($day1[2]->time_num == 0){{$day1[2]->lesson->name}}
            @elseif ($day1[3]->time_num == 0){{$day1[3]->lesson->name}}
            @endif
        </td>
        <td>
            @if(     $day1[0]->time_num == 1){{$day1[0]->lesson->name}}
            @elseif ($day1[1]->time_num == 1){{$day1[1]->lesson->name}}
            @elseif ($day1[2]->time_num == 1){{$day1[2]->lesson->name}}
            @elseif ($day1[3]->time_num == 1){{$day1[3]->lesson->name}}
            @endif
        </td>
        <td>
            @if(     $day1[0]->time_num == 2){{$day1[0]->lesson->name}}
            @elseif ($day1[1]->time_num == 2){{$day1[1]->lesson->name}}
            @elseif ($day1[2]->time_num == 2){{$day1[2]->lesson->name}}
            @elseif ($day1[3]->time_num == 2){{$day1[3]->lesson->name}}
            @endif
        </td>
        <td>
            @if(     $day1[0]->time_num == 3){{$day1[0]->lesson->name}}
            @elseif ($day1[1]->time_num == 3){{$day1[1]->lesson->name}}
            @elseif ($day1[2]->time_num == 3){{$day1[2]->lesson->name}}
            @elseif ($day1[3]->time_num == 3){{$day1[3]->lesson->name}}
            @endif
        </td>
    </tr>
    <tr>
        <td>دوشنبه</td>
        <td>
            @if(     $day2[0]->time_num == 0){{$day2[0]->lesson->name}}
            @elseif ($day2[1]->time_num == 0){{$day2[1]->lesson->name}}
            @elseif ($day2[2]->time_num == 0){{$day2[2]->lesson->name}}
            @elseif ($day2[3]->time_num == 0){{$day2[3]->lesson->name}}
            @endif
        </td>
        <td>
            @if(     $day2[0]->time_num == 1){{$day2[0]->lesson->name}}
            @elseif ($day2[1]->time_num == 1){{$day2[1]->lesson->name}}
            @elseif ($day2[2]->time_num == 1){{$day2[2]->lesson->name}}
            @elseif ($day2[3]->time_num == 1){{$day2[3]->lesson->name}}
            @endif
        </td>
        <td>
            @if(     $day2[0]->time_num == 2){{$day2[0]->lesson->name}}
            @elseif ($day2[1]->time_num == 2){{$day2[1]->lesson->name}}
            @elseif ($day2[2]->time_num == 2){{$day2[2]->lesson->name}}
            @elseif ($day2[3]->time_num == 2){{$day2[3]->lesson->name}}
            @endif
        </td>
        <td>
            @if(     $day2[0]->time_num == 3){{$day2[0]->lesson->name}}
            @elseif ($day2[1]->time_num == 3){{$day2[1]->lesson->name}}
            @elseif ($day2[2]->time_num == 3){{$day2[2]->lesson->name}}
            @elseif ($day2[3]->time_num == 3){{$day2[3]->lesson->name}}
            @endif
        </td>
    </tr>
    <tr>
        <td>سه شنبه</td>
        <td>
            @if(     $day3[0]->time_num == 0){{$day3[0]->lesson->name}}
            @elseif ($day3[1]->time_num == 0){{$day3[1]->lesson->name}}
            @elseif ($day3[2]->time_num == 0){{$day3[2]->lesson->name}}
            @elseif ($day3[3]->time_num == 0){{$day3[3]->lesson->name}}
            @endif
        </td>
        <td>
            @if(     $day3[0]->time_num == 1){{$day3[0]->lesson->name}}
            @elseif ($day3[1]->time_num == 1){{$day3[1]->lesson->name}}
            @elseif ($day3[2]->time_num == 1){{$day3[2]->lesson->name}}
            @elseif ($day3[3]->time_num == 1){{$day3[3]->lesson->name}}
            @endif
        </td>
        <td>
            @if(     $day3[0]->time_num == 2){{$day3[0]->lesson->name}}
            @elseif ($day3[1]->time_num == 2){{$day3[1]->lesson->name}}
            @elseif ($day3[2]->time_num == 2){{$day3[2]->lesson->name}}
            @elseif ($day3[3]->time_num == 2){{$day3[3]->lesson->name}}
            @endif
        </td>
        <td>
            @if(     $day3[0]->time_num == 3){{$day3[0]->lesson->name}}
            @elseif ($day3[1]->time_num == 3){{$day3[1]->lesson->name}}
            @elseif ($day3[2]->time_num == 3){{$day3[2]->lesson->name}}
            @elseif ($day3[3]->time_num == 3){{$day3[3]->lesson->name}}
            @endif
        </td>
    </tr>
    <tr>
        <td>چهارشنبه</td>
        <td>
            @if(     $day4[0]->time_num == 0){{$day4[0]->lesson->name}}
            @elseif ($day4[1]->time_num == 0){{$day4[1]->lesson->name}}
            @elseif ($day4[2]->time_num == 0){{$day4[2]->lesson->name}}
            @elseif ($day4[3]->time_num == 0){{$day4[3]->lesson->name}}
            @endif
        </td>
        <td>
            @if(     $day4[0]->time_num == 1){{$day4[0]->lesson->name}}
            @elseif ($day4[1]->time_num == 1){{$day4[1]->lesson->name}}
            @elseif ($day4[2]->time_num == 1){{$day4[2]->lesson->name}}
            @elseif ($day4[3]->time_num == 1){{$day4[3]->lesson->name}}
            @endif
        </td>
        <td>
            @if(     $day4[0]->time_num == 2){{$day4[0]->lesson->name}}
            @elseif ($day4[1]->time_num == 2){{$day4[1]->lesson->name}}
            @elseif ($day4[2]->time_num == 2){{$day4[2]->lesson->name}}
            @elseif ($day4[3]->time_num == 2){{$day4[3]->lesson->name}}
            @endif
        </td>
        <td>
            @if(     $day4[0]->time_num == 3){{$day4[0]->lesson->name}}
            @elseif ($day4[1]->time_num == 3){{$day4[1]->lesson->name}}
            @elseif ($day4[2]->time_num == 3){{$day4[2]->lesson->name}}
            @elseif ($day4[3]->time_num == 3){{$day4[3]->lesson->name}}
            @endif
        </td>
    </tr>



    {{--<tr>--}}
        {{--<td>شنبه</td>--}}
        {{--<td></td>--}}
        {{--<td></td>--}}
        {{--<td></td>--}}
        {{--<td></td>--}}
    {{--</tr>--}}
    {{--<tr>--}}
        {{--<td>یکشنبه</td>--}}
        {{--<td></td>--}}
        {{--<td></td>--}}
        {{--<td></td>--}}
        {{--<td></td>--}}
    {{--</tr>--}}
    {{--<tr>--}}
        {{--<td>دوشنبه</td>--}}
        {{--<td></td>--}}
        {{--<td></td>--}}
        {{--<td></td>--}}
        {{--<td></td>--}}
    {{--</tr>--}}
    {{--<tr>--}}
        {{--<td>سه شنبه</td>--}}
        {{--<td></td>--}}
        {{--<td></td>--}}
        {{--<td></td>--}}
        {{--<td></td>--}}
    {{--</tr>--}}
    {{--<tr>--}}
        {{--<td>چهارشنبه</td>--}}
        {{--<td></td>--}}
        {{--<td></td>--}}
        {{--<td></td>--}}
        {{--<td></td>--}}
    {{--</tr>--}}



    </tbody>
</table>
<div class="col-xs-12" style="padding: 0">
    @include('include.footer')
</div>
</body>
</html>

