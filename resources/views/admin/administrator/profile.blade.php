@extends('admin.administrator.layout')
@section('adminPages')
<div class="profileContent">
      <div class="userInfo">
          <div class="userImage">
              @if(auth()->user()->profilePic)
              <img src="{{asset('images/profilePic/'. auth()->user()->profilePic)}}" alt="">
              @else
              <img src="{{asset('images/avatars/profile.png')}}" alt="">
              @endif
          </div>
          <form action="{{route('store.profileImg')}}" method="POST" enctype="multipart/form-data">
              @csrf
              @method('PUT')
              <input type="file" name="image">
              <button type="submit" class="adminButton">upload</button>
          </form>
          <div class="userProfileInfo">
              <div class="userNameValue">Your UserName:</div>
              {{auth()->user()->name}}
          </div>
          <div class="userProfileInfo">
              <div class="userEmailValue">Your email:</div>
              {{auth()->user()->email}}
          </div>
          <div class="userProfileInfo">
              <div class="userEmailValue">Created at:</div>
              {{auth()->user()->created_at}}
          </div>
      </div>
      <div class="userUpdate">
          <form class="userUpdateForm" action="" method="POST">
              <div class="formTitle">Change your password</div>
              @csrf
              @method('PUT')
              <label class="formLabel" for="userName">Old Password</label>
              <input class="formInputProfile" type="password" name="oldPassword">
              <label class="formLabel" for="userName">New Password</label>
              <input class="formInputProfile" type="password" name="newPassword">
              <label class="formLabel" for="userName">Confirm New Password</label>
              <input class="formInputProfile" type="password" name="confirmNewPassword">
              <button class="adminButton" type="submit">update</button>
          </form>
      </div>
</div>
@endsection
