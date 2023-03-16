@extends('admin.administrator.layout')
@section('adminPages')
    <div class="dashWrapper">
        <div class="adminHomePageTitle">Share a package</div>
        <div class="shareContainer" x-data="{query:'Hello'}">
            <input type="text" x-model="query">
        </div>
    </div>
    <script src="//unpkg.com/alpinejs" defer></script>
@endsection
