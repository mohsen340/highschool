<!DOCTYPE html>
<html>
<head>
    <title>ورود</title>
    <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/login.css')}}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<div id="input">
    <h1>ورود</h1>
    <form action="{{route('login')}}" method="POST">
        @csrf
        <div class="container">
            {{--<select class="box" name="education">--}}
                {{--<option value="1">دانش آموز</option>--}}
                {{--<option value="4">اولیا</option>--}}
                {{--<option value="2">معلم </option>--}}
                {{--<option value="3">مدیر</option>--}}
            {{--</select><br>--}}
            <input id="email" type="email" class="{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus placeholder="ایمیل خود را وارد کنید...">


            <input id="password" type="password" class="{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required placeholder="رمز خود را وارد کنید...">

            <button type="submit">ورود</button>

        </div>

        <div class="container" style="background-color:#f1f1f1">
            <a href="{{route('site-home')}}"> <button type="button" class="cancelbtn1" >بازگشت</button></a>
            <a href="{{route('register')}}"> <button type="button" class="cancelbtn1" >ثبت نام</button></a>

        </div>
    </form>

</div>
</body>
</html>
