<!DOCTYPE html>
<html>
<head>
    <title>نمرات کلاسی</title>
    <link rel="stylesheet" type="text/css" href="{{asset('css/parents.number.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
</head>
<body>
<div style="max-width: 100%;direction: rtl">
    @include('include.nav')
</div>
<div style="min-height: 500px">
<table class="table mt-5 pt-3" >

    <tr>
        <th rowspan="2">ردیف </th>
        <th rowspan="2">نام درس</th>
        <th colspan="4" >ماه مهر</th>
        <th colspan="4">ماه آبان</th>
        <th colspan="4">ماه آذر</th>
        <th colspan="4"> ماه دی</th>
        <th colspan="4">ماه بهمن</th>

    </tr>

    <tr>
        <th>هفته 1</th>
        <th>هفته 2</th>
        <th>هفته 3</th>
        <th>هفته 4</th>
        <th>هفته 1</th>
        <th>هفته 2</th>
        <th>هفته 3</th>
        <th>هفته 4</th>
        <th>هفته 1</th>
        <th>هفته 2</th>
        <th>هفته 3</th>
        <th>هفته 4</th>
        <th>هفته 1</th>
        <th>هفته 2</th>
        <th>هفته 3</th>
        <th>هفته 4</th>
        <th>هفته 1</th>
        <th>هفته 2</th>
        <th>هفته 3</th>
        <th>هفته 4</th>

    </tr>
    </thead>
    <tbody>

    @php($i=0)
    @foreach($marks as $mark)
    <tr>
        <td>{{++$i}}</td>
        <td>{{$mark[$i-1]->lesson->name}}</td>
        @foreach($mark as $mark1)
        <td>{{$mark1->mark}}</td>
        @endforeach
    </tr>

        @endforeach


    </tbody>
</table>
</div>
<div class="col-xs-12" style="padding: 0">
    @include('include.footer')
</div>
</body>
</html>