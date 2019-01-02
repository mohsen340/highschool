<!DOCTYPE html>
<html>
<head>
    <title>اخبار مدرسه</title>
    <meta charset="utf_8">
    <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
    {{--<link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap-rtl.min.css')}}">--}}
    <link rel="stylesheet" type="text/css" href="{{asset('css/project.css')}}">
    <meta name="viewport" content="width=device-width, initial-scale=1">

</head>
<body class="rtl">
<div style="max-width: 100%">
    @include('include.nav')

    <img src="{{asset('img/images.png')}}" id="button1" style="  width: 30px; height: 30px;">


    <main class="wrapper rtl mt-5">
        <div class="row">
            <div id="content" class="group col-xs-12 col-lg-9">
                <h2 class="border-h2">همایش زلزله </h2>
                <section class="group row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="p-5">

                            <img src="{{asset('img/photo_2018-12-08_10-16-26.jpg')}}" class="post-img" alt="">
                            <div class="mt-5">
                                لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان فارسی ایجاد کرد. در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها و شرایط سخت تایپ به پایان رسد وزمان مورد نیاز شامل حروفچینی دستاوردهای اصلی و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.
                            </div>
                        </div>
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
<script src="js/bootstrap.jquery.js"></script>
<script>
    $(function () {
        $('#button1').click(function () {
            $("#topmenu ul").slideToggle();
        })
    });
</script>

</body>
</html>