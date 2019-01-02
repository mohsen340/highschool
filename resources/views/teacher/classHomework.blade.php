<!DOCTYPE html>
<html>
<head>
    <title>تمرین کلاسی</title>
    <link rel="stylesheet" type="text/css" href="{{asset('css/tamrin.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
</head>
<body>
<div style="max-width: 100%;direction: rtl">
    @include('include.nav')
</div>
<div class="workbooks">
    <h2>تکالیف</h2>
    {{--<span class="main-alert main-alert-success">تمرین با موفقیت ارسال شد</span>--}}
    <div class="tamrin" class="col-xs-12">
        <h5>تمرین درس {{$lesson->name.' '.$grade->name}}</h5>

        <form class="p-5" action="{{route('teacher-class-homework-create')}}" method="POST">
            @csrf
            <textarea class="form-control" rows="8" name="content">

            </textarea>
            <input type="hidden"  value="{{$lesson->id}}" name="lesson_id">
            <input type="submit" class="btn-main mt-2" value="ارسال">
        </form>
    </div>

</div>
<div>
    @include('include.footer')
</div>
</body>
</html>