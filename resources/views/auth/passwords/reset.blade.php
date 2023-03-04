@extends('layouts.app')

@section('content')
<div class="loginContainer">
    <div class="loginFormWrap">
        <img src="{{asset("images/logo/logomain.png")}}" alt="">
        <h1 class="loginTitle">Set a new password</h1>
        <div class="registerLink"><a href="{{route("login")}}">Go back to login page</a></div>
        <form method="POST" action="{{ route('password.update') }}">
        @csrf
        <input type="hidden" name="token" value="{{ $token }}">
        <input id="email" type="email" class=" inputLogin @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>
        @error('email')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
            <input id="password" type="password" class=" inputLogin @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
        @error('password')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
        <input id="password-confirm" type="password" class="inputLogin" name="password_confirmation" required autocomplete="new-password">
        <button type="submit" class="loginRegisterButton">
           {{ __('Reset Password') }}
        </button>
        </form>
    </div>
</div>
@endsection
