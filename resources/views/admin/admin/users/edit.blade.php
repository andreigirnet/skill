@extends('admin.administrator.layout')
@section('adminPages')
    <div class="dashWrapper">
        <div class="adminHomePageTitle">Edit User</div>
        <div class="formEdit">
            <form action="{{route('user.update', $user->id)}}" method="POST" class="registerEmployeeForm">
                @csrf
                @method('PUT')
                <label class="formLabel" for="editName">User Name</label>
                <input class="formInputProfile" type="text" id="editName" name="name" value="{{$user->name}}">
                <label class="formLabel" for="editEmail">Email</label>
                <input class="formInputProfile" type="text" id="editEmail" name="email" value="{{$user->email}}">
                <button type="submit" class="adminButton">Update</button>
            </form>
        </div>
    </div>
@endsection
