
<!DOCTYPE html>
<html>
<head>
    <title>ثبت نام</title>
    <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/login.css')}}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>

<div id="input">
    <h1>ثبت نام</h1>
    <form action="{{route('register')}}" method="POST">
        @csrf
        <div class="container">

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

            <input id="father_name" type="text" class="form-control{{ $errors->has('father_name') ? ' is-invalid' : '' }}" name="father_name" value="{{ old('father_name') }}" placeholder="نام پدر را وارد کنید"  >

            <input id="birth_date" type="text" class="form-control{{ $errors->has('birth_date') ? ' is-invalid' : '' }}" name="birth_date" value="{{ old('birth_date') }}" placeholder="تاریخ تولد خود را وارد کنید"  >

            @if ($errors->has('father_name'))
                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('father_name') }}</strong>
                                    </span>
            @endif


            <select id="grade" class="box {{ $errors->has('grade') ? ' is-invalid' : '' }}" name="grade_id" value="{{ old('grade') }}" >
                <option value="1">اول </option>
                <option value="2">دوم </option>
                <option value="3">سوم </option>
                <option value="4">چهارم </option>
            </select><br>




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

            <button type="submit">ثبت نام</button>

        </div>

        <div class="container" style="background-color:#f1f1f1">
            <a href="{{route('site-home')}}"> <button type="button" class="cancelbtn1" >بازگشت</button></a>
            <a href="{{route('login')}}"> <button type="button" class="cancelbtn1" >ورود</button></a>

        </div>

        @csrf
    </form>

</div>
</body>
<script>

    // function  checkUserType(elm) {
    //     let fatherName=document.getElementById('father_name');
    //     let degree=document.getElementById('degree');
    //     let experience=document.getElementById('experience');
    //     if(elm.value==2){
    //         degree.classList.remove('d-none');
    //         experience.classList.remove('d-none');
    //         fatherName.classList.add('d-none');
    //     }
    //     else if(elm.value==1){
    //         degree.classList.add('d-none');
    //         experience.classList.add('d-none');
    //         fatherName.classList.remove('d-none');
    //
    //     }
    // }
</script>
</html>

