<!DOCTYPE html>
<html>
<head>
    <title>دبیرستان نواب صفوی</title>
    <meta charset="utf_8">
    <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
    {{--<link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap-rtl.min.css')}}">--}}
    <link rel="stylesheet" type="text/css" href="{{asset('css/project.css')}}">
    <meta name="viewport" content="width=device-width, initial-scale=1">

</head>
<body class="rtl">
<div style="max-width: 100%">
@include('include.nav')



<div class="row rtl">
    <div id="header" class="col-xs-12">
        <div class="box">
            <h2>گاهی یک گام کوچک در مسیر درست میتواند به بزرگترین گام زندگیتان تبدیل شود .</h2>
        </div>
    </div>
</div>

<main class="wrapper rtl">
    <div class="row">
        <div id="content" class="group col-xs-12 col-lg-9">
                <h2 class="border-h2">اخبار </h2>
            <section class="group row">
                <div class="col-xs-12 col-sm-6 col-md-4">
                    <article>
                        <a href="{{url('/post')}}">
                            <div class="img">
                                <img src="{{asset('img/photo_2018-12-08_10-16-26.jpg')}}">

                            </div>
                            <h3>مانور زلزله </h3>
                        </a>

                    </article>
                </div>


                <div class="col-xs-12 col-sm-6 col-md-4">
                    <article>
                        <a href="#">
                            <div class="img">
                                <img src="{{asset('img/photo_2018-12-08_10-22-52.jpg')}}">

                            </div>
                            <h3>راهپیمایی 13 آبان </h3>
                        </a>

                    </article>
                </div>

                <div class="col-xs-12 col-sm-6 col-md-4">
                    <article>
                        <a href="#">
                            <div class="img">
                                <img src="{{asset('img/photo_2018-12-08_10-30-36.jpg')}}">

                            </div>
                            <h3>آغار سال تحصیلی </h3>
                        </a>

                    </article>
                </div>
            </section>
        </div>
        <aside id="sidebar" class="col-xs-12 col-lg-3">
                <h2 class="border-h2">اخبار </h2>
            <section class="group row">
                <div class="col-xs-12">
                    <article>
                        <a href="#">
                            <div class="p">
                                <p>انتخابات شورای مدرسه</p>

                            </div>

                        </a>
                    </article>

                </div>
                <div class="col-xs-12">
                    <article>
                        <a href="#">
                            <div class="p">
                                <p>هفته معلم </p>

                            </div>

                        </a>

                    </article>
                </div>
                <div class="col-xs-12">
                    <article>
                        <a href="#">
                            <div class="p">
                                <p>هفته تربیت بدنی </p>
                            </div>

                        </a>

                    </article>
                </div>
                <div class="col-xs-12">
                    <article>
                        <a href="#">
                            <div class="p">
                                <p>تقدیر از دانش آموزان تلاشگر </p>

                            </div>

                        </a>

                    </article>
                </div>
                <div class="col-xs-12">
                    <article>
                        <a href="#">
                            <div class="p">
                                <p>همایش صبحگاهی</p>

                            </div>

                        </a>

                    </article>
                </div>
                <div class="col-xs-12">
                    <article>
                        <a href="#">
                            <div class="p">
                                <p>هفته معلم</p>

                            </div>

                        </a>

                    </article>
                </div>
                <div class="col-xs-12">
                    <article>
                        <a href="#">
                            <div class="p">
                                <p>امتحانات میان ترم</p>

                            </div>

                        </a>

                    </article>
                </div>
                <div class="col-xs-12">
                    <article>
                        <a href="#">
                            <div class="p">
                                <p>هفته بسیج</p>

                            </div>

                        </a>

                    </article>

                </div>
            </section>
        </aside>
    </div>
</main>
@include('include.footer')
</div>


<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.js"></script>
<script>

</script>

</body>
</html>