<!DOCTYPE html>
<html>
<head>
    <title>table</title>
    <link rel="stylesheet" type="text/css" href="{{asset('css/table.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<style>
    body{
        background-color: aliceblue;
        direction: rtl;
    }
</style>
<body>
<h5 class="st-header">برنامه هفتگی معلم محمدی</h5>
<form action="{{url('schpost')}}" method="POST">
    @csrf

    <table class="table">
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
            <td><input type="text" class="form-schedule" name="schedule[]" ></td>
            <td><input type="text" class="form-schedule" name="schedule[]" ></td>
            <td><input type="text" class="form-schedule" name="schedule[]" ></td>
            <td><input type="text" class="form-schedule" name="schedule[]" ></td>
        </tr>
        <tr>
            <td>یکشنبه</td>
            <td><input type="text" class="form-schedule" name="schedule[]"></td>
            <td><input type="text" class="form-schedule" name="schedule[]"></td>
            <td><input type="text" class="form-schedule" name="schedule[]"></td>
            <td><input type="text" class="form-schedule" name="schedule[]"></td>
        </tr>
        <tr>
            <td>دوشنبه</td>
            <td><input type="text" class="form-schedule" name="schedule[]"></td>
            <td><input type="text" class="form-schedule" name="schedule[]"></td>
            <td><input type="text" class="form-schedule" name="schedule[]"></td>
            <td><input type="text" class="form-schedule" name="schedule[]"></td>
        </tr>
        <tr>
            <td>سه شنبه</td>
            <td><input type="text" class="form-schedule" name="schedule[]"></td>
            <td><input type="text" class="form-schedule" name="schedule[]"></td>
            <td><input type="text" class="form-schedule" name="schedule[]"></td>
            <td><input type="text" class="form-schedule" name="schedule[]"></td>
        </tr>
        <tr>
            <td>چهارشنبه</td>
            <td><input type="text" class="form-schedule" name="schedule[]"></td>
            <td><input type="text" class="form-schedule" name="schedule[]"></td>
            <td><input type="text" class="form-schedule" name="schedule[]"></td>
            <td><input type="text" class="form-schedule" name="schedule[]"></td>
        </tr>
        </tbody>
    </table>
    <input type="submit" class="btn-main mr-5" value="ثبت برنامه هفتگی">
</form>
</body>
</html>

