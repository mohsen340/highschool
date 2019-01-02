<!DOCTYPE html>
<html>
<head>
    <title>پنل کاربری</title>
    {{--<link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap-rtl.min.css')}}">--}}
    <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/student.dashboard.css')}}">
    <meta name="viewport" content="width=device-width, initial-scale=1">

</head>
<body>

<div class="row">

    <div id="profile" class="col-xs-12 ">
        <div id="img">
            <img src="{{asset('img/download (3).jpg')}}">
            <a href="{{ route('logout') }}" class="btn" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">خروج</a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">{{ csrf_field() }}</form>
            <a class="btn" href="{{route('site-home')}}">صفحه اصلی</a>
        </div>
        <div id="text">
            <ul>

                <li class="box"><h2>نام: <h3>sfsfs </h3></h2></li>

                <li class="box"><h2> نام خانوادگی :  <h3> fsfs</h3></h2> </li>

                <li class="box"><h2>شماره ملی  : <h3></h3></h2></li>

                <li class="box"><h2>نام پدر : <h3>sfs</h3></h2> </li>


                <li class="box"><h2> مقطع تحصیلی : <h3>sfs</h3></h2></li>


                <li class="box"><h2> رشته تحصیلی  : <h3>fsf </h3></h2></li>


                {{--<li class="box"><h2> تاریخ تولد  : <h3> 1375/9/12</h3></h2></li>--}}



            </ul>

        </div>

    </div>



    <div id="content" class="col-xs-12 ">
        <h4>دانش آموز عزیز  خوش آمدید.</h4>
        <p>دانش آموزان سرمایه های گرانبهای کشور  و آینده سازان کشور هستند وهمواره باعث افتخار کشور و مردم بوده اند.</p>
        <div class="col-xs-12 col-sm-6 col-md-4">
            <article>

                <div class="img">
                    <img src="{{asset('img/Schedule-1 (1).jpg')}}">

                </div>

                <a href="table.html">
                    <h3>برنامه هفتگی</h3>
                </a>
            </article>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-4">
            <article>

                <div class="img">
                    <img src="{{asset('img/51734_5f6a4402be7ae969b7bdc1b31edc3644.jpg')}}">

                </div>

                <a href="table.number.html">
                    <h3>کارنامه</h3>
                </a>
            </article>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-4">
            <article>
                <div class="img">
                    <img src="{{asset('img/16-34200-student_doing_homework.jpg')}}">

                </div>
                <a href="tamrin.html">
                    <h3>تکالیف</h3>
                </a>
            </article>
        </div>
    </div>
</div>

</body>
</html>