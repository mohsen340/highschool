<!DOCTYPE html>
<html>
<head>
    <title>لیست کلاس ها|نمرات</title>
    <link rel="stylesheet" type="text/css" href="{{asset('css/number.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<div style="max-width: 100%;direction: rtl">
    @include('include.nav')
</div>
<main class="wrapper">
    <div class="row" >
        <div id="content" class="col-xs-12 " >
            <pr><h2  style="margin-top: -90px;margin-bottom:200px;"> امیر المومنین علی علیه اسلام می فرمایند:
                    اندیشیدن و  فهمیدن  سودمند تر است از  تکرار بسیار و  درس  گرفتن است.</h2></pr>
            <section class="group row">


                <div class="col-xs-12 col-sm-6 col-md-3">
                    <article>

                        <div class="img" id="img1">
                            <img src="{{asset('img/13950712P2zti611000.jpg')}}">

                        </div>
                        <h3>اول دبیرستان</h3>


                    </article>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-3">
                    <article>

                        <div class="img" id="img2">
                            <img src="{{asset('img/13950712P7wx968493.jpg')}}">

                        </div>
                        <h3>دوم دبیرستان</h3>


                    </article>
                </div>


                <div class="col-xs-12 col-sm-6 col-md-3">
                    <article>

                        <div class="img" id="img3">
                            <img src="{{asset('img/13950712P223348975.jpg')}}">

                        </div>
                        <h3>سوم دبیرستان</h3>


                    </article>
                </div>

                <div class="col-xs-12 col-sm-6 col-md-3">
                    <article>

                        <div class="img" id="img4">
                            <img src="{{asset('img/4873_45_دبیرستان دخترانه طاهره (6).jpg')}}">

                        </div>
                        <h3>پیش دانشگاهی</h3>


                    </article>
                </div>
            </section>
        </div>
    </div>

</main>

</body>
</html>
<nav id="list1">
    <ul class="menu">
        @foreach($grade1_students as $student)
        <li><a href="{{route('teacher-student-marks', $student->id)}}">{{$student->first_name.' '.$student->last_name}}</a></li>
        @endforeach
    </ul>
    <img src="{{asset('img/images (3).jpg')}}" id="button0" style="  width: 30px; height: 30px;">
</nav>
<nav id="list2">
    <ul class="menu">
        @foreach($grade2_students as $student)
            <li><a href="{{route('teacher-student-marks', $student->id)}}">{{$student->first_name.' '.$student->last_name}}</a></li>
        @endforeach
    </ul>
    <img src="{{asset('img/images (3).jpg')}}" id="button2" style="  width: 30px; height: 30px;">
</nav>

<nav id="list3">
    <ul class="menu">
        @foreach($grade3_students as $student)
            <li><a href="{{route('teacher-student-marks', $student->id)}}">{{$student->first_name.' '.$student->last_name}}</a></li>
        @endforeach
    </ul>
    <img src="{{asset('img/images (3).jpg')}}" id="button3" style="  width: 30px; height: 30px;">
</nav>

<nav id="list4">
    <ul class="menu">
        @foreach($grade4_students as $student)
            <li><a href="{{route('teacher-student-marks', $student->id)}}">{{$student->first_name.' '.$student->last_name}}</a></li>
        @endforeach
    </ul>
    <img src="{{asset('img/images (3).jpg')}}" id="button4" style="  width: 30px; height: 30px;">
</nav>

<script src="{{asset('js/jquery.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script type="text/javascript"></script>
<script>
    $(function(){
        $('#img1').click(function(){
            if($('#list1').css("top")=="-900px"){
                $('#list1').css("top","0");
            }
        })
    });

    $(function(){
        $('#img2').click(function(){
            if($('#list2').css("top")=="-900px"){
                $('#list2').css("top","0");
            }
        })
    });

    $(function(){
        $('#img3').click(function(){
            if($('#list3').css("top")=="-900px"){
                $('#list3').css("top","0");
            }
        })
    });
    $(function(){
        $('#img4').click(function(){
            if($('#list4').css("top")=="-900px"){
                $('#list4').css("top","0");
            }
        })
    });
    $(function(){
        $('#button0').click(function(){

            $("#list1").css("top","-900px");
        })
    });

    $(function(){
        $('#button2').click(function(){

            $("#list2").css("top","-900px");
        })
    });
    $(function(){
        $('#button3').click(function(){

            $("#list3").css("top","-900px");
        })
    });
    $(function(){
        $('#button4').click(function(){

            $("#list4").css("top","-900px");
        })
    });
</script>
</body>
<div class="col-xs-12" style="padding: 0">
    @include('include.footer')
</div>
</html>