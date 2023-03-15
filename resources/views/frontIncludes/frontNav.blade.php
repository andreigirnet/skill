<div id="frontNav">
    <a href="{{route('home')}}">
        <div id="mainLogo">
            <img src="{{asset("images/logo/logomain.png")}}" alt="">
        </div>
    </a>
    <div id="navMenu">
        <div class="navItem"><a href="{{route('home')}}">Home</a></div>
        <div class="navItem attention"><a href="{{route('front.faq')}}" style="color: red;">Please Read Faq's</a></div>
{{--        <div class="navItem"><a href="{{route('front.products')}}">Online Courses</a></div>--}}
        <div class="navItem"><a href="{{route('front.team')}}">Team Training</a></div>
        <div class="navItem"><a href="{{route('front.consulting')}}">Consulting</a></div>
        <div class="navItem"><a href="tel:{{config('app.telephone')}}">Call us</a></div>
    </div>
    <div id="loginMenu">
        <div id="googleIcon">
            <a href=""><img src="{{asset("images/logo/google-icon.webp")}}" alt=""></a>
        </div>
        <div class="navItem"><a href="{{route("login")}}">Login</a></div>
    </div>
</div>
