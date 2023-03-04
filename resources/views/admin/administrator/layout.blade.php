@extends('admin.adminLayout')
@section('adminContent')
<div class="mainContainer">
    <div class="adminContent">
        <div class="side">
            @include('adminIncludes.sideNavAdmin')
        </div>
        <div class="adminWrap">
            <div class="urlPage">/{{request()->route()->uri()}}</div>
            @yield('adminPages')
        </div>
    </div>
</div>
@endsection
