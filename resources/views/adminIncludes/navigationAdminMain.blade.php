<div class="adminNav">
        <div class="adminNavWrap">
            <div class="logo"><img src="{{asset('images/logo/logomain.png')}}" alt=""></div>
                <div class="rightAdminMainNav">
                    <div class="profilePicture">
                        @if(auth()->user()->profilePic)
                        <img src="{{asset("images/profilePic/" . auth()->user()->profilePic)}}" alt="">
                        @else
                        <img src="{{asset("images/avatars/profile.png")}}" alt="">
                        @endif
                    </div>
                    <form action="{{route('logout')}}" method="POST">
                        @csrf
                        <button class="adminButton" type="submit">Logout</button>
                    </form>
    {{--                <div class="language">--}}
    {{--                    <div class="downArrowLang" id="dropLanguage">--}}
    {{--                        <img src="{{asset("images/flags/" . setFlag(request()->route()->uri()) . ".png")}}" id="selectedLanguage" alt="">--}}
    {{--                        <img class="flagArrow" src="{{asset("images/arrows/down.png")}}" alt="">--}}
    {{--                    </div>--}}
    {{--                    <div class="dropdownLanguage" id="dropDownLanguage">--}}
    {{--                        <a href="{{route('admin.home.ru')}}">--}}
    {{--                            <div class="dropdownLanguageItem" id="russia">--}}
    {{--                                <img src="{{asset("images/flags/ru.png")}}" alt="">--}}
    {{--                                <div class="dropdownLanguageText">Russian</div>--}}
    {{--                            </div>--}}
    {{--                        </a>--}}
    {{--                        <a href="{{route('admin.home.pl')}}">--}}
    {{--                            <div class="dropdownLanguageItem" id="poland">--}}
    {{--                                <img src="{{asset("images/flags/pl.png")}}" alt="">--}}
    {{--                                <div class="dropdownLanguageText">Poland</div>--}}
    {{--                            </div>--}}
    {{--                        </a>--}}
    {{--                        <a href="{{route('admin.en.home')}}">--}}
    {{--                            <div class="dropdownLanguageItem" id="england">--}}
    {{--                                <img src="{{asset("images/flags/en.png")}}" alt="">--}}
    {{--                                <div class="dropdownLanguageText">Great Britain</div>--}}
    {{--                            </div>--}}
    {{--                        </a>--}}
    {{--                        <a href="{{route('admin.home.ro')}}">--}}
    {{--                            <div class="dropdownLanguageItem" id="romania">--}}
    {{--                                <img src="{{asset("images/flags/ro.png")}}" alt="">--}}
    {{--                                <div class="dropdownLanguageText">Romanian</div>--}}
    {{--                            </div>--}}
    {{--                        </a>--}}
    {{--                        <a href="{{route('admin.home.sp')}}">--}}
    {{--                            <div class="dropdownLanguageItem" id="spain">--}}
    {{--                                <img src="{{asset("images/flags/sp.png")}}" alt="">--}}
    {{--                                <div class="dropdownLanguageText">Spain</div>--}}
    {{--                            </div>--}}
    {{--                        </a>--}}
    {{--                </div>--}}
                </div>
            </div>
        </div>
</div>
