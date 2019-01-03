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

    <img src="{{asset($post->image_path)}}" id="button1" style="  width: 30px; height: 30px;">


    <main class="wrapper rtl mt-5">
        <div class="row">
            <div id="content" class="group col-xs-12 col-lg-9">
                <h2 class="border-h2">{{$post->title}} </h2>
                <section class="group row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="p-5">

                            <img src="{{asset($post->image_path)}}" class="post-img" alt="">
                            <div class="mt-5">
                               {{$post->content}}
                            </div>
                        </div>
                    </div>

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