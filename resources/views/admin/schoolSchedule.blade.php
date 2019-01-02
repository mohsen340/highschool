
<!DOCTYPE html>
<html>
<head>
    <title>برنامه هفتگی مدرسه</title>
    <link rel="stylesheet" type="text/css" href="{{asset('css/modir.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<div style="max-width: 100%;direction: rtl">
    @include('include.nav')
</div>
<main class="wrapper">
    <div class="row" >
        <pr>	<h2 style="margin-top:100px; margin-bottom:40px;">با تمام علم ودانش ,شور  وحال و عشق خود      میکنم در کشورم سازندگی یا رب مدد </h2></pr>
        <div id="content" class="col-xs-12" >
            <section class="group row">


                {{--<div class="col-xs-12 col-sm-6 ">--}}
                    {{--<article>--}}
                        {{--<a href="{{route('admin-teachers-schedule')}}">--}}
                            {{--<div class="img">--}}
                                {{--<img src="{{asset('img/download (1).jpg')}}">--}}

                            {{--</div>--}}
                            {{--<h3>یرنامه هفتگی معلمان</h3>--}}
                        {{--</a>--}}

                    {{--</article>--}}
                {{--</div>--}}
                <div class="col-xs-12 col-sm-12">
                    <article>
                        <a href="{{route('admin-students-schedule')}}">
                            <div class="img">
                                <img src="{{asset('img/team.jpg')}}">

                            </div>
                            <h3>برنامه هفتگی دانش آموزان</h3>
                        </a>

                    </article>
                </div>
            </section>
        </div>
    </div>

</main>
<div class="col-xs-12" style="padding: 0">
    @include('include.footer')
</div>

<script src="jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script type="text/javascript"></script>

</body>
</html>