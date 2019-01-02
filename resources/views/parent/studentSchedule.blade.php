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
        <td></td>
        <td></td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td>یکشنبه</td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td>دوشنبه</td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td>سه شنبه</td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td>چهارشنبه</td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
    </tr>
    </tbody>
</table>
<div class="col-xs-12" style="padding: 0">
    @include('include.footer')
</div>
</body>
</html>

