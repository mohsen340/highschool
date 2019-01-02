<!DOCTYPE html>
<html>
<head>
    <title>پنل معلم محترم</title>
    <link rel="stylesheet" type="text/css" href="{{asset('css/teacher.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<div style="max-width: 100%;direction: rtl">
    @include('include.nav')
</div>
<div class="row body-margin">

    <div id="profile" class="col-xs-12 ">
        <div id="img">
            <img src="{{asset('img/download (3).jpg')}}">
        </div>
        <div id="text">
            <ul>

                <li class="box">
                    <h2>نام: <h3>{{$teacher->first_name}} </h3></h2>
                </li>

                <li class="box">
                    <h2> نام خانوادگی : <h3> {{$teacher->last_name}}</h3></h2>
                </li>

                <li class="box">
                    <h2>شماره ملی : <h3>{{$teacher->national_code}}</h3></h2>
                </li>


                <li class="box">
                    <h2> سابقه تدریس: <h3> {{$info->experience}} سال</h3></h2>
                </li>

                <li class="box">
                    <h2> معلم: <h3> {{$lesson}}</h3></h2>
                </li>


                <li class="box">
                    <h2> مدرک تحصیلی: <h3>{{$info->degree}}</h3></h2>
                </li>


            </ul>

        </div>

    </div>

    </nav>

    <div id="content" class="col-xs-12 ">
        <h4>همکار عزیز خوش آمدید.</h4>
        <p></p>
        <div class="col-xs-12 col-sm-6 col-md-4">
            <article>

                <div class="img">
                    <img src="{{asset('img/3.png')}}">

                </div>

                <a href="{{route('teacher-schedule')}}">
                    <h3>برنامه هفتگی</h3>
                </a>
            </article>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-4">
            <article>

                <div class="img">
                    <img src="{{asset('img/128-512.png')}}">

                </div>

                <a href="{{route('teacher-classes-marks')}}">
                    <h3>دفتر نمره</h3>
                </a>
            </article>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-4">
            <article>
                <div class="img">
                    <img src="{{asset('img/26777.jpg')}}">

                </div>
                <a href="{{route('teacher-classes-homework')}}">
                    <h3>تکالیف</h3>
                </a>
            </article>
        </div>

    </div>
</div>
<div class="col-xs-12 mt-5" style="padding: 0">
    @include('include.footer')
</div>
    <script src="jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript"></script>
    <script>
        $(function () {
            $('#img1').click(function () {
                if ($('#list1').css("right") == "-435px") {
                    $('#list1').css("right", "0");
                }
            })
        });
    </script>
    </body>
</html>
