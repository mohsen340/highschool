<!DOCTYPE html>
<html>
<head>
    <title>برنامه هفتگی|کلاس ها</title>
    <link rel="stylesheet" type="text/css" href="{{asset('css/number.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        ul{
            background-color: transparent;
        }
    </style>
</head>
<body>
<div style="max-width: 100%;direction: rtl">
    @include('include.nav')
</div>
<main class="wrapper">
    <div class="row" >
        <div id="content" class="col-xs-12" >
            <section class="group row">


                <div class="col-xs-12 col-sm-6 col-md-3">
                    <a href="{{route('admin-class-schedule', 1)}}">
                        <article>

                            <div class="img" >
                                <img src="{{asset('img/13950712P2zti611000.jpg')}}">

                            </div>
                            <h3>اول  دبیرستان</h3>


                        </article>
                    </a>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-3">
                    <a href="{{route('admin-class-schedule', 2)}}">
                        <article>

                            <div class="img" >
                                <img src="{{asset('img/13950712P7wx968493.jpg')}}">

                            </div>
                            <h3>دوم دبیرستان</h3>


                        </article>
                    </a>
                </div>


                <div class="col-xs-12 col-sm-6 col-md-3">
                    <a href="{{route('admin-class-schedule', 3)}}">
                        <article>

                            <div class="img" >
                                <img src="{{asset('img/13950712P223348975.jpg')}}">
                            </div>
                            <h3>سوم دبیرستان</h3>


                        </article>
                    </a>
                </div>

                <div class="col-xs-12 col-sm-6 col-md-3">
                    <a href="{{route('admin-class-schedule', 4)}}">
                        <article>

                            <div class="img" >
                                <img src="{{asset('img/4873_45_دبیرستان دخترانه طاهره (6).jpg')}}">

                            </div>
                            <h3>پیش دانشگاهی</h3>


                        </article>
                    </a>
                </div>
            </section>
        </div>
    </div>
</main>
<div class="col-xs-12" style="padding: 0">
    @include('include.footer')
</div>
</body>
</html>