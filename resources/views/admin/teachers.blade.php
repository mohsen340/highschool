<!DOCTYPE html>
<html>
<head>
    <title>مدیریت معلمان</title>
    {{--<link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}">--}}
    <link rel="stylesheet" type="text/css" href="{{asset('css/login.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/list.teacher.css')}}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<div style="max-width: 100%;direction: rtl">
    @include('include.nav')
</div>
<div class="mt-5 pt-5">
    <div style="text-align: center">
        <h4>ثبت نام جدید معلم</h4>
    </div>



    <form  action="{{route('admin-teacher-register')}}" method="POST">
        @csrf
        <div class="container">
            <div class="col-sm-6">
            <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="first_name" value="{{ old('name') }}" placeholder="نام  را وارد کنید" required autofocus>

            @if ($errors->has('name'))
                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
            @endif

            <input id="last_name" type="text" class="form-control{{ $errors->has('last_name') ? ' is-invalid' : '' }}" name="last_name" value="{{ old('last_name') }}" placeholder="نام خانوادگی  را وارد کنید" required >

            @if ($errors->has('last_name'))
                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('last_name') }}</strong>
                                    </span>
            @endif


            <input id="national_code" type="number" class="form-control{{ $errors->has('national_code') ? ' is-invalid' : '' }}" name="national_code" value="{{ old('national_code') }}" placeholder="کد ملی را وارد کنید"  >

            @if ($errors->has('national_code'))
                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('national_code') }}</strong>
                                    </span>
            @endif

            <fieldset id="teacher_field" class="">
                <label for="avval">اول </label>
                <input id="avval" type="checkbox" style="margin-left: 1.2rem" name="one">

                <label for="dovvom">دوم </label>
                <input id="dovvom" type="checkbox" style="margin-left: 1.2rem" name="two">

                <label for="sevvom">سوم </label>
                <input id="sevvom" type="checkbox" style="margin-left: 1.2rem" name="three">

                <label for="chaharom">چهارم </label>
                <input id="chaharom" type="checkbox" style="margin-left: 1.2rem" name="four">
                <span>دبیرستان</span>
            </fieldset>
            </div>
            <div class="col-sm-6">
            <select id="degree" class="box {{ $errors->has('degree') ? ' is-invalid' : '' }}" name="degree" value="{{ old('degree') }}" >
                <option value="لیسانس">لیسانس</option>
                <option value="فوق لیسانس">فوق لیسانس</option>
            </select><br>

            <input id="lesson" type="text" class=" {{ $errors->has('lesson') ? ' is-invalid' : '' }}" name="lesson" value="{{ old('lesson') }}" required autofocus placeholder="درس تدریسی">
            @if ($errors->has('lesson'))
                <span class="invalid-feedback" role="alert">
                                 <strong>{{ $errors->first('lesson') }}</strong>
                            </span>
            @endif

            <input id="experience" type="text" class=" {{ $errors->has('experience') ? ' is-invalid' : '' }}" name="experience" value="{{ old('experience') }}" required autofocus placeholder="سابقه تدریس معلم">
            @if ($errors->has('experience'))
                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('experience') }}</strong>
                                    </span>
            @endif


            <input id="email" type="email" class="{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus placeholder="ایمیل را وارد کنید">
            @if ($errors->has('email'))
                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
            @endif


            <input id="password" type="password" class="{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required placeholder="رمز را وارد کنید">
            @if ($errors->has('password'))
                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
            @endif
            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required placeholder="رمز را دوباره وارد کنید">

            <input type="submit" class="btn-main" value="ثبت نام"/>
            </div>
        </div>

    </form>




</div>
<table class="table">
    <thead>
    <tr>
        <th>ردیف</th>
        <th>نام و نام خانوادگی </th>
        <th>شماره ملی</th>
        <th>مدرک تحصیلی</th>
        <th>سابقه  تدریس</th>
        <th>درس تدریس</th>
        {{--<th>مقطع تحصیلی</th>--}}
    </tr>
    </thead>
    <tbody>
    @php($i=0)
    @foreach($teachers as $teacher)
    <tr>

        <td>{{++$i}}</td>
        <td>{{$teacher->first_name.' '.$teacher->last_name}}</td>
        <td>{{$teacher->national_code}}</td>
        <td>{{$teacher->teacherInfo->degree}}</td>
        <td>{{$teacher->teacherInfo->experience}} سال</td>
        <td>{{$teacher->teacherLessons()->first()->name}}</td>
        {{--<td></td>--}}
    </tr>

    @endforeach

    <tr>

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


    <div class="col-xs-12" style="padding: 0">
        @include('include.footer')
    </div>

</body>
</html>