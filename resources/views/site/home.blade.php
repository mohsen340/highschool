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
                @foreach($main_posts as $main_post)
                <div class="col-xs-12 col-sm-6 col-md-4">
                    <article>
                        <a href="{{route('post-show', $main_post->id)}}">
                            <div class="img">
                                <img src="{{asset($main_post->image_path)}}">

                            </div>
                            <h3>{{$main_post->title}} </h3>
                        </a>

                    </article>
                </div>
                @endforeach





            </section>
        </div>
        <aside id="sidebar" class="col-xs-12 col-lg-3">
                <h2 class="border-h2">اخبار </h2>
            <section class="group row">
                @foreach($posts as $post)
                <div class="col-xs-12">
                    <article>
                        <a href="{{route('post-show', $post->id)}}">
                            <div class="p">
                                <p>{{$post->title}}</p>

                            </div>

                        </a>
                    </article>

                </div>
                    @endforeach


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