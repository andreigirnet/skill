@extends('admin.adminLayout')
@section('adminContent')
<div class="mainContainer" x-data="{
        showNav: true,
        hideNav: function(){
            this.showNav = false;
        },
        hideNav: function(){
            this.showNav = false;
        },
    }">
    <div class="adminContent">
        <div class="side" id="side"   x-show="showNav" x-transition:enter.duration.500ms>
            @include('adminIncludes.sideNavAdmin')
        </div>
        <div class="adminWrap">

            @yield('adminPages')
        </div>
    </div>
</div>
<script src="//unpkg.com/alpinejs" defer></script>
@endsection
