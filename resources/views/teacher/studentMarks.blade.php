<!DOCTYPE html>
<html>
<head>
    <title>نمرات کلاسی</title>
    <link rel="stylesheet" type="text/css" href="{{asset('css/parents.number.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
    <style>
        body{
            background-color: #dee2b7;
        }
    </style>
</head>
<body>

<table class="table">

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
    <tr>
        <td>1</td>
        <td>{{$lesson->name}}</td>
        <form action="" method="">
            @csrf
            @php($size = sizeof($marks))
            @php($nulls = 20 - $size)
            @foreach($marks as $mark)
                <td><input class="number-input" type="number" value="{{$mark->mark}}" name="mark[]"></td>
            @endforeach

            @for($i=0 ; $i<$nulls; $i++)
                <td><input class="number-input" type="number" name="mark[]"></td>
            @endfor

        {{--<td><input class="number-input" type="number" name="mark[]"></td>--}}
        {{--<td><input class="number-input" type="number" name="mark[]"></td>--}}
        {{--<td><input class="number-input" type="number" name="mark[]"></td>--}}
        {{--<td><input class="number-input" type="number" name="mark[]"></td>--}}

        {{--<td><input class="number-input" type="number" name="mark[]"></td>--}}
        {{--<td><input class="number-input" type="number" name="mark[]"></td>--}}
        {{--<td><input class="number-input" type="number" name="mark[]"></td>--}}
        {{--<td><input class="number-input" type="number" name="mark[]"></td>--}}

        {{--<td><input class="number-input" type="number" name="mark[]"></td>--}}
        {{--<td><input class="number-input" type="number" name="mark[]"></td>--}}
        {{--<td><input class="number-input" type="number" name="mark[]"></td>--}}
        {{--<td><input class="number-input" type="number" name="mark[]"></td>--}}

        {{--<td><input class="number-input" type="number" name="mark[]"></td>--}}
        {{--<td><input class="number-input" type="number" name="mark[]"></td>--}}
        {{--<td><input class="number-input" type="number" name="mark[]"></td>--}}
        {{--<td><input class="number-input" type="number" name="mark[]"></td>--}}

        {{--<td><input class="number-input" type="number" name="mark[]"></td>--}}
        {{--<td><input class="number-input" type="number" name="mark[]"></td>--}}
        {{--<td><input class="number-input" type="number" name="mark[]"></td>--}}
        {{--<td><input class="number-input" type="number" name="mark[]"></td>--}}

        <td><input class="btn-main" type="submit" value="ثبت" ></td>
        </form>
    </tr>

    </tbody>
</table>
