<div class="adminSideNav">
    <a href="{{route('admin.en.home')}}">
        <div class="navLinkAdmin">
            <div class="navIconAdmin"><img src="{{asset('images/icons/home.png')}}" alt=""></div>
            <div class="navLinkName">Home</div>
        </div>
    </a>
    <a href="{{route('admin.en.profile')}}">
        <div class="navLinkAdmin">
            <div class="navIconAdmin"><img src="{{asset('images/icons/profile.png')}}" alt=""></div>
            <div class="navLinkName">Profile</div>
        </div>
    </a>
    <div class="navLinkAdmin" id="employersNavButton">
        <div class="navIconAdmin"><img src="{{asset('images/icons/admin.png')}}" alt=""></div>
        <div class="navLinkName">For Employers</div>
    </div>
    <div class="dropAdminMenu" id="employersDrop">
        <a href="{{route('dashboard.employer')}}">
            <img class="navArrow" src="{{asset('images/arrows/right-white.png')}}" alt="">
            <div class="navLinkDropAdmin">Your Dashboard</div></a>
        <a href="{{route('register.employee')}}">
            <img class="navArrow" src="{{asset('images/arrows/right-white.png')}}" alt="">
            <div class="navLinkDropAdmin">Register Your Employee</div></a>
        <a href="{{route('admin.consulting')}}">
            <img class="navArrow" src="{{asset('images/arrows/right-white.png')}}" alt="">
            <div class="navLinkDropAdmin">Instructions</div>
        </a>
    </div>
    <div class="navLinkAdmin" id="billingNavButton">
        <div class="navIconAdmin"><img src="{{asset('images/icons/bank.png')}}" alt=""></div>
        <div class="navLinkName">Billing</div>
    </div>
    <div class="dropAdminMenu" id="billingDrop">
{{--        <a href="">--}}
{{--            <img class="navArrow" src="{{asset('images/arrows/right-white.png')}}" alt="">--}}
{{--            <div class="navLinkDropAdmin">Tarrifs</div>--}}
{{--        </a>--}}
        <a href="{{route('basket.index')}}">
            <img class="navArrow" src="{{asset('images/arrows/right-white.png')}}" alt="">
            <div class="navLinkDropAdmin">Basket</div>
        </a>
        <a href="{{route('order.index')}}">
            <img class="navArrow" src="{{asset('images/arrows/right-white.png')}}" alt="">
            <div class="navLinkDropAdmin">Orders</div>
        </a>
    </div>
    <a href="{{route('certificate.index')}}">
        <div class="navLinkAdmin">
            <div class="navIconAdmin"><img src="{{asset('images/icons/doc.png')}}" alt=""></div>
            <div class="navLinkName">Certificates</div>
        </div>
    </a>
    <a href="{{route('package.index')}}">
        <div class="navLinkAdmin">
            <div class="navIconAdmin"> <img src="{{asset('images/arrows/right-white.png')}}" alt=""></div>
            <div class="navLinkName">Packages</div>
        </div>
    </a>

    @if(auth()->user()->is_admin==1)
        <div class="navLinkAdmin" id="adminNavButton">
            <div class="navIconAdmin"><img src="{{asset('images/icons/star-white.png')}}" alt=""></div>
            <div class="navLinkName">Администратор</div>
        </div>
        <div class="dropAdminMenu" id="adminDrop">
            <a href="{{route('users.index')}}">
                <img class="navArrow" src="{{asset('images/arrows/right-white.png')}}" alt="">
                <div class="navLinkDropAdmin">Все пользователи</div>
            </a>
            <a href="{{route('orders.index')}}">
                <img class="navArrow" src="{{asset('images/arrows/right-white.png')}}" alt="">
                <div class="navLinkDropAdmin">Все заказы</div>
            </a>
            <a href="{{route('packages.admin.index')}}">
                <img class="navArrow" src="{{asset('images/arrows/right-white.png')}}" alt="">
                <div class="navLinkDropAdmin">Все пакеты</div>
            </a>
            <a href="{{route('certificates.admin.index')}}">
                <img class="navArrow" src="{{asset('images/arrows/right-white.png')}}" alt="">
                <div class="navLinkDropAdmin">Все сертификаты</div>
            </a>
        </div>
    @endif
</div>
