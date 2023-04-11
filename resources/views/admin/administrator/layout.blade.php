@extends('admin.adminLayout')
@section('adminContent')
<div class="mainContainer">
    <div class="adminContent">
        <div class="side" id="side">
            @include('adminIncludes.sideNavAdmin')
        </div>
        <div class="adminWrap">

            @yield('adminPages')
        </div>
    </div>
</div>
@endsection
