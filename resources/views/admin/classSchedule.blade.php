<!DOCTYPE html>
<html>
<head>
    <title>برنامه هفتگی کلاس</title>
    <link rel="stylesheet" type="text/css" href="{{asset('css/table.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<style>
    body {
        background-color: #dee2b7;
        direction: rtl;
    }
</style>
<body>
<div style="max-width: 100%;direction: rtl">
    @include('include.nav')
</div>
<div class="pt-2">
    <h5 class="st-header mt-5"> برنامه هفتگی کلاس اول دبیرستان</h5>
</div>
<form action="{{url('schpost')}}" method="POST">
    @csrf

    <table class="table">
        <thead>
        <tr>
            <th>ایام هفته</th>
            <th>زنگ اول</th>
            <th>زنگ دوم</th>
            <th>زنگ سوم</th>
            <th>زنگ چهارم</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>شنبه</td>
            <td>
                <select id="degree" class="form-schedule" name="schedule[0][]">
                    <option value="ریاضی">ریاضی</option>
                    <option value="شیمی">شیمی</option>
                    <option value="فیزیک">فیزیک</option>
                    <option value="فیزیک">زیست</option>
                </select>
            </td>
            <td>
                <select id="degree" class="form-schedule" name="schedule[0][]">
                    <option value="ریاضی">ریاضی</option>
                    <option value="شیمی">شیمی</option>
                    <option value="فیزیک" selected>فیزیک</option>
                    <option value="فیزیک">زیست</option>
                </select>
            </td>
            <td>
                <select id="degree" class="form-schedule" name="schedule[0][]">
                    <option value="ریاضی">ریاضی</option>
                    <option value="شیمی">شیمی</option>
                    <option value="فیزیک">فیزیک</option>
                    <option value="فیزیک">زیست</option>
                </select>
            </td>
            <td>
                <select id="degree" class="form-schedule" name="schedule[0][]">
                    <option value="ریاضی">ریاضی</option>
                    <option value="شیمی">شیمی</option>
                    <option value="فیزیک">فیزیک</option>
                    <option value="فیزیک">زیست</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>یکشنبه</td>
            <td>
                <select id="degree" class="form-schedule" name="schedule[1][]">
                    <option value="ریاضی">ریاضی</option>
                    <option value="شیمی">شیمی</option>
                    <option value="فیزیک">فیزیک</option>
                    <option value="فیزیک">زیست</option>
                </select>
            </td>
            <td>
                <select id="degree" class="form-schedule" name="schedule[1][]">
                    <option value="ریاضی">ریاضی</option>
                    <option value="شیمی">شیمی</option>
                    <option value="فیزیک">فیزیک</option>
                    <option value="فیزیک">زیست</option>
                </select>
            </td>
            <td>
                <select id="degree" class="form-schedule" name="schedule[1][]">
                    <option value="ریاضی">ریاضی</option>
                    <option value="شیمی">شیمی</option>
                    <option value="فیزیک">فیزیک</option>
                    <option value="فیزیک">زیست</option>
                </select>
            </td>
            <td>
                <select id="degree" class="form-schedule" name="schedule[1][]">
                    <option value="ریاضی">ریاضی</option>
                    <option value="شیمی">شیمی</option>
                    <option value="فیزیک">فیزیک</option>
                    <option value="فیزیک">زیست</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>دوشنبه</td>
            <td>
                <select id="degree" class="form-schedule" name="schedule[2][]">
                    <option value="ریاضی">ریاضی</option>
                    <option value="شیمی">شیمی</option>
                    <option value="فیزیک">فیزیک</option>
                    <option value="فیزیک">زیست</option>
                </select>
            </td>
            <td>
                <select id="degree" class="form-schedule" name="schedule[2][]">
                    <option value="ریاضی">ریاضی</option>
                    <option value="شیمی">شیمی</option>
                    <option value="فیزیک">فیزیک</option>
                    <option value="فیزیک">زیست</option>
                </select>
            </td>
            <td>
                <select id="degree" class="form-schedule" name="schedule[2][]">
                    <option value="ریاضی">ریاضی</option>
                    <option value="شیمی">شیمی</option>
                    <option value="فیزیک">فیزیک</option>
                    <option value="فیزیک">زیست</option>
                </select></td>
            <td><select id="degree" class="form-schedule" name="schedule[2][]">
                    <option value="ریاضی">ریاضی</option>
                    <option value="شیمی">شیمی</option>
                    <option value="فیزیک">فیزیک</option>
                    <option value="فیزیک">زیست</option>
                </select></td>
        </tr>
        <tr>
            <td>سه شنبه</td>
            <td>
                <select id="degree" class="form-schedule" name="schedule[3][]">
                    <option value="ریاضی">ریاضی</option>
                    <option value="شیمی">شیمی</option>
                    <option value="فیزیک">فیزیک</option>
                    <option value="فیزیک">زیست</option>
                </select>
            </td>
            <td>
                <select id="degree" class="form-schedule" name="schedule[3][]">
                    <option value="ریاضی">ریاضی</option>
                    <option value="شیمی">شیمی</option>
                    <option value="فیزیک">فیزیک</option>
                    <option value="فیزیک">زیست</option>
                </select>
            </td>
            <td>
                <select id="degree" class="form-schedule" name="schedule[3][]">
                    <option value="ریاضی">ریاضی</option>
                    <option value="شیمی">شیمی</option>
                    <option value="فیزیک">فیزیک</option>
                    <option value="فیزیک">زیست</option>
                </select>
            </td>
            <td>
                <select id="degree" class="form-schedule" name="schedule[3][]">
                    <option value="ریاضی">ریاضی</option>
                    <option value="شیمی">شیمی</option>
                    <option value="فیزیک">فیزیک</option>
                    <option value="فیزیک">زیست</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>چهارشنبه</td>
            <td>
                <select id="degree" class="form-schedule" name="schedule[4][]">
                    <option value="ریاضی">ریاضی</option>
                    <option value="شیمی">شیمی</option>
                    <option value="فیزیک">فیزیک</option>
                    <option value="فیزیک">زیست</option>
                </select>
            </td>
            <td>
                <select id="degree" class="form-schedule" name="schedule[4][]">
                    <option value="ریاضی">ریاضی</option>
                    <option value="شیمی">شیمی</option>
                    <option value="فیزیک">فیزیک</option>
                    <option value="فیزیک">زیست</option>
                </select>
            </td>
            <td>
                <select id="degree" class="form-schedule" name="schedule[4][]">
                    <option value="ریاضی">ریاضی</option>
                    <option value="شیمی">شیمی</option>
                    <option value="فیزیک">فیزیک</option>
                    <option value="فیزیک">زیست</option>
                </select>
            </td>
            <td>
                <select id="degree" class="form-schedule" name="schedule[4][]">
                    <option value="ریاضی">ریاضی</option>
                    <option value="شیمی">شیمی</option>
                    <option value="فیزیک">فیزیک</option>
                    <option value="فیزیک">زیست</option>
                </select>
            </td>
        </tr>
        </tbody>
    </table>
    <input type="submit" class="btn-main mr-5 mb-3" value="ثبت برنامه هفتگی" style="width:120px ">
</form>
<div class="col-xs-12" style="padding: 0">
    @include('include.footer')
</div>
</body>
</html>

