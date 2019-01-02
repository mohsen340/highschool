<!DOCTYPE html>
<html>
<head>
    <title>لیست دانش آموزان مدرسه</title>
    <link rel="stylesheet" type="text/css" href="{{asset('css/list.student.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<div style="max-width: 100%;direction: rtl">
    @include('include.nav')
</div>
<div style="min-height: 500px">
<table class="table mt-5 pt-3">
    <thead>
    <tr>
        <th>ردیف</th>
        <th>نام و نام خانوادگی </th>
        <th>شماره ملی</th>
        <th>نام پدر</th>
        <th>تاریخ تولد</th>
        <th>کلاس</th>
    </tr>
    </thead>
    <tbody>
    @php($i=0)
    @foreach($students as $student)
    <tr>
        <td>{{++$i}}</td>
        <td>{{$student->first_name.' '.$student->last_name}}</td>
        <td>{{$student->national_code}}</td>
        <td>{{$student->father_name}}</td>
        <td>{{$student->birth_date}}</td>
        <td>{{$student->grade()->first()->name}}</td>
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