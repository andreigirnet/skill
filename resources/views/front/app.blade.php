<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    {{-- Title --}}
    <title>{{env("APP_NAME")}}</title>
    {{-- Fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=PT+Sans+Narrow" rel="stylesheet">
    {{-- Css --}}
    <link rel="stylesheet" href="{{asset("css/main.css")}}">
    <link rel="stylesheet" href="{{asset("css/front/registerInclude.css")}}">
    <link rel="stylesheet" href="{{asset("css/front/footer.css")}}">
    <link rel="stylesheet" href="{{asset("css/front/brandSwiper.css")}}">
    <link rel="stylesheet" href="{{asset("css/front/landing.css")}}">
    <link rel="stylesheet" href="{{asset("css/front/products.css")}}">
    <link rel="stylesheet" href="{{asset("css/front/product.css")}}">
    <link rel="stylesheet" href="{{asset("css/front/teamTraining.css")}}">
    <link rel="stylesheet" href="{{asset("css/front/faq.css")}}">
    <link rel="stylesheet" href="{{asset("css/front/consulting.css")}}">
    <link rel="stylesheet" href="{{asset("css/front/login.css")}}">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css"/>
</head>
<body>
@include("frontIncludes/hamburger")
@include("frontIncludes/responsiveNav")
@include("frontIncludes/frontNav")

@yield('content')

@include("frontIncludes/registerInclude")
@include("frontIncludes/footer")
@include("frontIncludes/brandSwiper")
<script src="{{asset("js/hamburgerAction.js")}}"></script>
<script src="{{asset("js/brandSwiper.js")}}"></script>
<script src="{{asset("js/accordion.js")}}"></script>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
    AOS.init();
</script>
</body>
</html>
