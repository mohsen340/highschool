<!DOCTYPE html>
<html>
<head>
    <title>مدیریت اخبار مدرسه</title>
    <link rel="stylesheet" type="text/css" href="{{asset('css/modir.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/post.css')}}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<div style="max-width: 100%;direction: rtl">
    @include('include.nav')
</div>
<main class="wrapper mt-5 pt-1">
    <h2>
        ثبت خبر جدید
    </h2>
    <div id="content" class="col-xs-12" >
        <section class="group row">
            <h2></h2>
        </section>
        <form class="form-post" method="POST" action="{{route('admin-post-create')}}" enctype="multipart/form-data">
            @csrf
            <div class="form-post-heading">اطلاعات خبر را وارد کنید</div>
                <label for="field1"><span>عنوان خبر <span class="required">*</span></span>
                    <input type="text" class="input-field" name="title" value="" required />
                </label>

                <label for="field2">
                    <span>تصویر خبر <span class="required">*</span></span>
                    <input type="file" class="input-field" name="image" required/>
                </label>

                <label for="field5">
                    <span>محتوای خبر <span class="required">*</span></span>
                    <textarea name="content" class="textarea-field" required></textarea></label>

                <label><span> </span>
                    <input type="submit" value="انتشار" /></label>
        </form>
    </div>
</main>
<div class="col-xs-12" style="padding: 0">
    @include('include.footer')
</div>
</body>
</html>