@extends('layouts.app')

@section('content')
<div class="loginContainer">
    <div class="loginFormWrap">
        <img class="logoMain" src="{{asset("images/logo/logomain.png")}}" alt="">
        <h1 class="loginTitle">System Registration</h1>
        <div class="registerLink"><a href="{{route("login")}}">Have already an account? Login Here</a></div>
        <form method="POST" class="loginForm" action="{{ route('register') }}">
            @csrf

            <input id="name" type="text" placeholder="name" class="inputLogin @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

            @error('name')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror

            <input id="email" type="email" placeholder="Email" class="inputLogin @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

            @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror

            <input id="password" type="password" placeholder="password" class="inputLogin @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

            @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
            <input id="password-confirm" placeholder="Password Confirm" type="password" class="inputLogin" name="password_confirmation" required autocomplete="new-password">
            <button type="submit" class="loginRegisterButton">
                Register
            </button>
        </form>
</div>
@endsection
