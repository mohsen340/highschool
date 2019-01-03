<!DOCTYPE html>
<html>
<head>
    <title>تکالیف درسی</title>
    <link rel="stylesheet" type="text/css" href="{{asset('css/tamrin.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
</head>
<body>
<div style="max-width: 100%;direction: rtl">
    @include('include.nav')
</div>
<div class="workbooks">
    <h2>تکالیف</h2>

    @foreach($homeworks as $homework)
        @foreach($homework as $homework1)
            <div class="tamrin" class="col-xs-12">
                <h5> تمرین درس {{$homework1->lesson->name}} </h5>
                <p>{{$homework1->content}}</p>
            </div>
        @endforeach
    @endforeach

</div>
<div>
    @include('include.footer')
</div>
</body>
</html>