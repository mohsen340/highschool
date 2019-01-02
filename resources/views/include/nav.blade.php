<div id="topmenu">
    <nav class="wrapper">

        <ul>
            <li><a href="{{url('/')}}">صفحه اصلی</a></li>
            @guest
                <li><a href="{{route('login')}}">ورود</a></li>
            @endguest
            @auth
                <?php
                if (Auth::user()->role == 1) {?>
                <li><a href="{{route('student-dashboard')}}">معلم گرامی خوش آمدید</a></li>
                <?php }
                ?>
                <?php
                if (Auth::user()->role == 2) {?>
                <li><a href="{{route('teacher-dashboard')}}">اولیای گرامی خوش آمدید</a></li>
                <?php }
                ?>

            @endauth
            @auth
                <li>
                    <a href="{{ route('logout') }}" class="btn" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">خروج</a>
                </li>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">{{ csrf_field() }}</form>
            @endauth
        </ul>
    </nav>
</div>

<img src="{{asset('img/images.png')}}" id="button1" style="  width: 30px; height: 30px;">
<script src="{{asset('js/jquery.js')}}" ></script>
<script defer>
    $(function () {
        $('#button1').click(function () {
            $("#topmenu ul").slideToggle();
        })
    });
</script>