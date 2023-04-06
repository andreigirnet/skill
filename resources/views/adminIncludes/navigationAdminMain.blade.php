<div class="adminNav">
        <div class="adminNavWrap">
            <a href="{{route('admin.en.home')}}"><div class="logo"><img src="{{asset('images/logo/logomain.png')}}" alt=""></div></a>
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
                </div>
            </div>
        </div>
</div>
