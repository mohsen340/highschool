<!DOCTYPE html>
<html>
<head>
    <title>اولیا و دانش آموز</title>
    <link rel="stylesheet" type="text/css" href="{{asset('css/parents.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
    <meta name="viewport" content="width=device-width, initial-scale=1">

</head>
<body>
<div>
    <div style="max-width: 100%;direction: rtl">
        @include('include.nav')
    </div>
    <div class="body-padding">

        <div class="row mt-5">
            <div id="profile" class="col-xs-12 ">
                <div id="img">
                    <img src="{{asset('img/download (3).jpg')}}">
                </div>
                <div id="text">
                    <ul>

                        <li class="box">
                            <h2>نام: <h3> {{$user->first_name}} </h3></h2>
                        </li>

                        <li class="box">
                            <h2> نام خانوادگی : <h3> {{$user->last_name}}</h3></h2>
                        </li>

                        <li class="box">
                            <h2>شماره ملی : <h3>{{$user->national_code}}</h3></h2>
                        </li>

                        <li class="box">
                            <h2>نام پدر : <h3>{{$user->father_name}} </h3></h2>
                        </li>


                        <li class="box">
                            <h2> کلاس : <h3>{{$grade->name}}</h3></h2>
                        </li>


                        <li class="box">
                            <h2> تاریخ تولد : <h3> 1375/9/12</h3></h2>
                        </li>


                    </ul>

                </div>

            </div>
        </div>
        <div class="row ">
            <div id="content" class="col-xs-12" >
                <h4>با سلام و خوش آمد گویی ورود شما اولیای محترم به جمع کاربران وب سایت گروه دبیرستان نواب صفوی را خیر
                    مقدم
                    میگوییم.</h4>
                <p>امیدواریم از کلیه خدمات و امکانات این وب سایت بهره مند شوید.
                    اولیای گرامی شما میتوانید با کلیک بر روی آیکون برنامه هفتگی ،برنامه هفتگی فرزند خود را مشاهده کنید و با کلیک
                    بر
                    روی دفتر نمره نمرات فرزند خود را در طول سال تحصیلی مشاهده کنید.
                همچنین  میتوانید با کلیک رو تکالیف، تکلیف های فرزند خود را که معلم مربوطه هر درس ارائه کرده است را مشاهده فرمائید.</p>
                <div class="col-xs-12 col-sm-6 col-md-4">
                    <article>

                        <div class="img">
                            <img src="{{asset('img/Schedule-1 (1).jpg')}}">

                        </div>

                        <a href="{{route('parent-student-schedule')}}">
                            <h3>برنامه هفتگی</h3>
                        </a>
                    </article>
                </div>
                {{--<div class="col-xs-12 col-sm-6 col-md-3">--}}
                    {{--<article>--}}

                        {{--<div class="img">--}}
                            {{--<img src="{{asset('img/images (1).jpg')}}">--}}

                        {{--</div>--}}

                        {{--<a href="{{route('parent-student-workbook')}}">--}}
                            {{--<h3>برنامه هفتگی</h3>--}}
                        {{--</a>--}}
                    {{--</article>--}}
                {{--</div>--}}
                <div class="col-xs-12 col-sm-6 col-md-4">
                    <article>

                        <div class="img">
                            <img src=" {{asset('img/markBook.jpg')}}">

                        </div>

                        <a href="{{route('parent-student-marks')}}">
                            <h3>دفتر نمره</h3>
                        </a>
                    </article>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4">
                    <article>
                        <div class="img">
                            <img src="{{asset('img/16-34200-student_doing_homework.jpg')}}">

                        </div>
                        <a href="{{route('parent-student-homework')}}">
                            <h3>تکالیف</h3>
                        </a>
                    </article>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="col-xs-12" style="padding: 0">
    @include('include.footer')
</div>
</body>
</html>