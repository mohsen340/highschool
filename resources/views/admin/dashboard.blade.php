<!DOCTYPE html>
<html>
<head>
    <title>مدیریت مدرسه</title>
    <link rel="stylesheet" type="text/css" href="{{asset('css/modir.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<div style="max-width: 100%;direction: rtl">
    @include('include.nav')
</div>
<main class="wrapper mt-5 pt-2">
    <h2>
        ز گهواره تا  گور دانش بجوی
    </h2>
    <div id="content" class="col-xs-12" >
        <section class="group row">
            <h2></h2>
            <div class="col-xs-12 col-sm-6 col-md-3">
                <article>
                    <a href="{{route('admin-students')}}">
                        <div class="img">
                            <img src="{{asset('img/The-First-Few-Weeks-Of-University-Life.jpg')}}">

                        </div>
                        <h3>مدیریت دانش آموزان </h3>
                    </a>

                </article>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-3">
                <article>
                    <a href="{{route('admin-teachers')}}">
                        <div class="img">
                            <img src="{{asset('img/English-teacher.jpg')}}">

                        </div>
                        <h3>مدیریت معلمان</h3>
                    </a>

                </article>
            </div>


            <div class="col-xs-12 col-sm-6 col-md-3">
                <article>
                    <a href="{{route('admin-post')}}">
                        <div class="img">
                            <img src="{{asset('img/news.jpg')}}">

                        </div>
                        <h3>اخبار مدرسه</h3>
                    </a>

                </article>
            </div>

            <div class="col-xs-12 col-sm-6 col-md-3">
                <article>
                    <a href="{{route('admin-schedule')}}">
                        <div class="img" style="padding-right: 2rem;padding-left: 2rem">
                            <img src="{{asset('img/book.png')}}">

                        </div>
                        <h3>برنامه هفتگی</h3>
                    </a>

                </article>
            </div>
        </section>
    </div>
</main>
<div class="col-xs-12" style="padding: 0">
    @include('include.footer')
</div>
</body>
</html>