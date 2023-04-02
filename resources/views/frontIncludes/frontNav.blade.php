<div id="frontNav">
    <a href="{{route('home')}}">
        <div id="mainLogo">
            <img src="{{asset("images/logo/logomain.png")}}" alt="">
        </div>
    </a>
    <div id="navMenu">
        <a href="{{route('home')}}"><div class="navItem">Home</div></a>
        <a href="{{route('front.faq')}}"><div class="navItem" id="attentionItem">Please Read Faq's</div></a>
{{--        <div class="navItem"><a href="{{route('front.products')}}">Online Courses</a></div>--}}
        <a href="{{route('front.team')}}"><div class="navItem">Team Training</div></a>
        <a href="{{route('front.consulting')}}"><div class="navItem">Consulting</div></a>
        <a href="tel:{{config('app.telephone')}}"><div class="navItem">Call us</div></a>
    </div>
    <div id="loginMenu">
        <div id="googleIcon">
            <a href=""><img src="{{asset("images/logo/google-icon.webp")}}" alt=""></a>
        </div>
        <a href="{{route("login")}}"><div class="navItem">Login</div></a>
    </div>
</div>
