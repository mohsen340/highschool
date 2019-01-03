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
    <h5 class="st-header mt-5"> برنامه هفتگی کلاس {{$grade->name}}</h5>
</div>
<form action="{{route('admin-class-schedule-insert')}}" method="POST">
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

                    <option value="" selected></option>
                    @foreach($lessons as $lesson)
                    <option value="{{$lesson->id}}"
                            @if($day0[0]->time_num == 0 && $day0[0]->lesson_id == $lesson->id )
                                selected
                            @elseif($day0[1]->time_num == 0 && $day0[1]->lesson_id == $lesson->id)
                                selected
                            @elseif($day0[2]->time_num == 0 && $day0[2]->lesson_id == $lesson->id)
                            selected
                            @elseif($day0[3]->time_num == 0 && $day0[3]->lesson_id == $lesson->id)
                            selected
                            @endif>
                        {{$lesson->name}}
                    </option>
                    @endforeach

                </select>
            </td>
            <td>
                <select id="degree" class="form-schedule" name="schedule[0][]">
                    <option value="" selected></option>
                    @foreach($lessons as $lesson)
                        <option value="{{$lesson->id}}"
                                @if($day0[0]->time_num == 1 && $day0[0]->lesson_id == $lesson->id )
                                selected
                                @elseif($day0[1]->time_num == 1 && $day0[1]->lesson_id == $lesson->id)
                                selected
                                @elseif($day0[2]->time_num == 1 && $day0[2]->lesson_id == $lesson->id)
                                selected
                                @elseif($day0[3]->time_num == 1 && $day0[3]->lesson_id == $lesson->id)
                                selected
                                @endif>
                            {{$lesson->name}}
                        </option>
                    @endforeach
                </select>
            </td>
            <td>
                <select id="degree" class="form-schedule" name="schedule[0][]">
                    <option value="" selected></option>
                    @foreach($lessons as $lesson)
                        <option value="{{$lesson->id}}"
                                @if($day0[0]->time_num == 2 && $day0[0]->lesson_id == $lesson->id )
                                selected
                                @elseif($day0[1]->time_num == 2 && $day0[1]->lesson_id == $lesson->id)
                                selected
                                @elseif($day0[2]->time_num == 2 && $day0[2]->lesson_id == $lesson->id)
                                selected
                                @elseif($day0[3]->time_num == 2 && $day0[3]->lesson_id == $lesson->id)
                                selected
                                @endif>
                            {{$lesson->name}}
                        </option>
                    @endforeach
                </select>
            </td>
            <td>
                <select id="degree" class="form-schedule" name="schedule[0][]">
                    <option value="" selected></option>
                    @foreach($lessons as $lesson)
                        <option value="{{$lesson->id}}"
                                @if($day0[0]->time_num == 3 && $day0[0]->lesson_id == $lesson->id )
                                selected
                                @elseif($day0[1]->time_num == 3 && $day0[1]->lesson_id == $lesson->id)
                                selected
                                @elseif($day0[2]->time_num == 3 && $day0[2]->lesson_id == $lesson->id)
                                selected
                                @elseif($day0[3]->time_num == 3 && $day0[3]->lesson_id == $lesson->id)
                                selected
                                @endif>
                            {{$lesson->name}}
                        </option>
                    @endforeach
                </select>
            </td>
        </tr>
        <tr>
            <td>یکشنبه</td>
            <td>
                <select id="degree" class="form-schedule" name="schedule[1][]">
                    <option value="" selected></option>
                    @foreach($lessons as $lesson)
                        <option value="{{$lesson->id}}"
                                @if($day1[0]->time_num == 0 && $day1[0]->lesson_id == $lesson->id )
                                selected
                                @elseif($day1[1]->time_num == 0 && $day1[1]->lesson_id == $lesson->id)
                                selected
                                @elseif($day1[2]->time_num == 0 && $day1[2]->lesson_id == $lesson->id)
                                selected
                                @elseif($day1[3]->time_num == 0 && $day1[3]->lesson_id == $lesson->id)
                                selected
                                @endif>
                            {{$lesson->name}}
                        </option>
                    @endforeach
                </select>
            </td>
            <td>
                <select id="degree" class="form-schedule" name="schedule[1][]">
                    <option value="" selected></option>
                    @foreach($lessons as $lesson)
                        <option value="{{$lesson->id}}"
                                @if($day1[0]->time_num == 1 && $day1[0]->lesson_id == $lesson->id )
                                selected
                                @elseif($day1[1]->time_num == 1 && $day1[1]->lesson_id == $lesson->id)
                                selected
                                @elseif($day1[2]->time_num == 1 && $day1[2]->lesson_id == $lesson->id)
                                selected
                                @elseif($day1[3]->time_num == 1 && $day1[3]->lesson_id == $lesson->id)
                                selected
                                @endif>
                            {{$lesson->name}}
                        </option>
                    @endforeach
                </select>
            </td>
            <td>
                <select id="degree" class="form-schedule" name="schedule[1][]">
                    <option value="" selected></option>
                    @foreach($lessons as $lesson)
                        <option value="{{$lesson->id}}"
                                @if($day1[0]->time_num == 2 && $day1[0]->lesson_id == $lesson->id )
                                selected
                                @elseif($day1[1]->time_num == 2 && $day1[1]->lesson_id == $lesson->id)
                                selected
                                @elseif($day1[2]->time_num == 2 && $day1[2]->lesson_id == $lesson->id)
                                selected
                                @elseif($day1[3]->time_num == 2 && $day1[3]->lesson_id == $lesson->id)
                                selected
                                @endif>
                            {{$lesson->name}}
                        </option>
                    @endforeach
                </select>
            </td>
            <td>
                <select id="degree" class="form-schedule" name="schedule[1][]">
                    <option value="" selected></option>
                    @foreach($lessons as $lesson)
                        <option value="{{$lesson->id}}"
                                @if($day1[0]->time_num == 3 && $day1[0]->lesson_id == $lesson->id )
                                selected
                                @elseif($day1[1]->time_num == 3 && $day1[1]->lesson_id == $lesson->id)
                                selected
                                @elseif($day1[2]->time_num == 3 && $day1[2]->lesson_id == $lesson->id)
                                selected
                                @elseif($day1[3]->time_num == 3 && $day1[3]->lesson_id == $lesson->id)
                                selected
                                @endif>
                            {{$lesson->name}}
                        </option>
                    @endforeach
                </select>
            </td>
        </tr>
        <tr>

            @php

            @endphp
            <td>دوشنبه</td>
            <td>
                <select id="degree" class="form-schedule" name="schedule[2][]">
                    <option value="" selected></option>
                    @foreach($lessons as $lesson)
                        <option value="{{$lesson->id}}"
                                @if($day2[0]->time_num == 0 && $day2[0]->lesson_id == $lesson->id )
                                selected
                                @elseif($day2[1]->time_num == 0 && $day2[1]->lesson_id == $lesson->id)
                                selected
                                @elseif($day2[2]->time_num == 0 && $day2[2]->lesson_id == $lesson->id)
                                selected
                                @elseif($day2[3]->time_num == 0 && $day2[3]->lesson_id == $lesson->id)
                                selected
                                @endif>
                            {{$lesson->name}}
                        </option>
                    @endforeach
                </select>
            </td>
            <td>
                <select id="degree" class="form-schedule" name="schedule[2][]">
                    <option value="" selected></option>
                    @foreach($lessons as $lesson)
                        <option value="{{$lesson->id}}"
                                @if($day2[0]->time_num == 1 && $day2[0]->lesson_id == $lesson->id )
                                selected
                                @elseif($day2[1]->time_num == 1 && $day2[1]->lesson_id == $lesson->id)
                                selected
                                @elseif($day2[2]->time_num == 1 && $day2[2]->lesson_id == $lesson->id)
                                selected
                                @elseif($day2[3]->time_num == 1 && $day2[3]->lesson_id == $lesson->id)
                                selected
                                @endif>
                            {{$lesson->name}}
                        </option>
                    @endforeach
                </select>
            </td>
            <td>
                <select id="degree" class="form-schedule" name="schedule[2][]">
                    <option value="" selected></option>
                    @foreach($lessons as $lesson)
                        <option value="{{$lesson->id}}"
                                @if($day2[0]->time_num == 2 && $day2[0]->lesson_id == $lesson->id )
                                selected
                                @elseif($day2[1]->time_num == 2 && $day2[1]->lesson_id == $lesson->id)
                                selected
                                @elseif($day2[2]->time_num == 2 && $day2[2]->lesson_id == $lesson->id)
                                selected
                                @elseif($day2[3]->time_num == 2 && $day2[3]->lesson_id == $lesson->id)
                                selected
                                @endif>
                            {{$lesson->name}}
                        </option>
                    @endforeach
                </select></td>
            <td><select id="degree" class="form-schedule" name="schedule[2][]">
                    <option value="" selected></option>
                    @foreach($lessons as $lesson)
                        <option value="{{$lesson->id}}"
                                @if($day2[0]->time_num == 3 && $day2[0]->lesson_id == $lesson->id )
                                selected
                                @elseif($day2[1]->time_num == 3 && $day2[1]->lesson_id == $lesson->id)
                                selected
                                @elseif($day2[2]->time_num == 3 && $day2[2]->lesson_id == $lesson->id)
                                selected
                                @elseif($day2[3]->time_num == 3 && $day2[3]->lesson_id == $lesson->id)
                                selected
                                @endif>
                            {{$lesson->name}}
                        </option>
                    @endforeach
                </select></td>
        </tr>
        <tr>
            <td>سه شنبه</td>
            <td>
                <select id="degree" class="form-schedule" name="schedule[3][]">
                    <option value="" selected></option>
                    @foreach($lessons as $lesson)
                        <option value="{{$lesson->id}}"
                                @if($day3[0]->time_num == 0 && $day3[0]->lesson_id == $lesson->id )
                                selected
                                @elseif($day3[1]->time_num == 0 && $day3[1]->lesson_id == $lesson->id)
                                selected
                                @elseif($day3[2]->time_num == 0 && $day3[2]->lesson_id == $lesson->id)
                                selected
                                @elseif($day3[3]->time_num == 0 && $day3[3]->lesson_id == $lesson->id)
                                selected
                                @endif>
                            {{$lesson->name}}
                        </option>
                    @endforeach
                </select>
            </td>
            <td>
                <select id="degree" class="form-schedule" name="schedule[3][]">
                    <option value="" selected></option>
                    @foreach($lessons as $lesson)
                        <option value="{{$lesson->id}}"
                                @if($day3[0]->time_num == 1 && $day3[0]->lesson_id == $lesson->id )
                                selected
                                @elseif($day3[1]->time_num == 1 && $day3[1]->lesson_id == $lesson->id)
                                selected
                                @elseif($day3[2]->time_num == 1 && $day3[2]->lesson_id == $lesson->id)
                                selected
                                @elseif($day3[3]->time_num == 1 && $day3[3]->lesson_id == $lesson->id)
                                selected
                                @endif>
                            {{$lesson->name}}
                        </option>
                    @endforeach
                </select>
            </td>
            <td>
                <select id="degree" class="form-schedule" name="schedule[3][]">
                    <option value="" selected></option>
                    @foreach($lessons as $lesson)
                        <option value="{{$lesson->id}}"
                                @if($day3[0]->time_num == 2 && $day3[0]->lesson_id == $lesson->id )
                                selected
                                @elseif($day3[1]->time_num == 2 && $day3[1]->lesson_id == $lesson->id)
                                selected
                                @elseif($day3[2]->time_num == 2 && $day3[2]->lesson_id == $lesson->id)
                                selected
                                @elseif($day3[3]->time_num == 2 && $day3[3]->lesson_id == $lesson->id)
                                selected
                                @endif>
                            {{$lesson->name}}
                        </option>
                    @endforeach
                </select>
            </td>
            <td>
                <select id="degree" class="form-schedule" name="schedule[3][]">
                    <option value="" selected></option>
                    @foreach($lessons as $lesson)
                        <option value="{{$lesson->id}}"
                                @if($day3[0]->time_num == 3 && $day3[0]->lesson_id == $lesson->id )
                                selected
                                @elseif($day3[1]->time_num == 3 && $day3[1]->lesson_id == $lesson->id)
                                selected
                                @elseif($day3[2]->time_num == 3 && $day3[2]->lesson_id == $lesson->id)
                                selected
                                @elseif($day3[3]->time_num == 3 && $day3[3]->lesson_id == $lesson->id)
                                selected
                                @endif>
                            {{$lesson->name}}
                        </option>
                    @endforeach
                </select>
            </td>
        </tr>
        <tr>
            <td>چهارشنبه</td>
            <td>
                <select id="degree" class="form-schedule" name="schedule[4][]">
                    <option value="" selected></option>
                    @foreach($lessons as $lesson)
                        <option value="{{$lesson->id}}"
                                @if($day4[0]->time_num == 0 && $day4[0]->lesson_id == $lesson->id )
                                selected
                                @elseif($day4[1]->time_num == 0 && $day4[1]->lesson_id == $lesson->id)
                                selected
                                @elseif($day4[2]->time_num == 0 && $day4[2]->lesson_id == $lesson->id)
                                selected
                                @elseif($day4[3]->time_num == 0 && $day4[3]->lesson_id == $lesson->id)
                                selected
                                @endif>
                            {{$lesson->name}}
                        </option>
                    @endforeach
                </select>
            </td>
            <td>
                <select id="degree" class="form-schedule" name="schedule[4][]">
                    <option value="" selected></option>
                    @foreach($lessons as $lesson)
                        <option value="{{$lesson->id}}"
                                @if($day4[0]->time_num == 1 && $day4[0]->lesson_id == $lesson->id )
                                selected
                                @elseif($day4[1]->time_num == 1 && $day4[1]->lesson_id == $lesson->id)
                                selected
                                @elseif($day4[2]->time_num == 1 && $day4[2]->lesson_id == $lesson->id)
                                selected
                                @elseif($day4[3]->time_num == 1 && $day4[3]->lesson_id == $lesson->id)
                                selected
                                @endif>
                            {{$lesson->name}}
                        </option>
                    @endforeach
                </select>
            </td>
            <td>
                <select id="degree" class="form-schedule" name="schedule[4][]">
                    <option value="" selected></option>
                    @foreach($lessons as $lesson)
                        <option value="{{$lesson->id}}"
                                @if($day4[0]->time_num == 2 && $day4[0]->lesson_id == $lesson->id )
                                selected
                                @elseif($day4[1]->time_num == 2 && $day4[1]->lesson_id == $lesson->id)
                                selected
                                @elseif($day4[2]->time_num == 2 && $day4[2]->lesson_id == $lesson->id)
                                selected
                                @elseif($day4[3]->time_num == 2 && $day4[3]->lesson_id == $lesson->id)
                                selected
                                @endif>
                            {{$lesson->name}}
                        </option>
                    @endforeach
                </select>
            </td>
            <td>
                <select id="degree" class="form-schedule" name="schedule[4][]">
                    <option value="" selected></option>
                    @foreach($lessons as $lesson)
                        <option value="{{$lesson->id}}"
                                @if($day4[0]->time_num == 3 && $day4[0]->lesson_id == $lesson->id )
                                selected
                                @elseif($day4[1]->time_num == 3 && $day4[1]->lesson_id == $lesson->id)
                                selected
                                @elseif($day4[2]->time_num == 3 && $day4[2]->lesson_id == $lesson->id)
                                selected
                                @elseif($day4[3]->time_num == 3 && $day4[3]->lesson_id == $lesson->id)
                                selected
                                @endif>
                            {{$lesson->name}}
                        </option>
                    @endforeach
                </select>
            </td>
        </tr>
        </tbody>
    </table>
    <input name="grade_id" type="hidden" value="{{$grade->id}}">
    <input type="submit" class="btn-main mr-5 mb-3" value="ثبت برنامه هفتگی" style="width:120px ">
</form>
<div class="col-xs-12" style="padding: 0">
    @include('include.footer')
</div>
</body>
</html>

