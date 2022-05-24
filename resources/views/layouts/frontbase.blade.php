<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>@yield("title")</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="{{asset('assets')}}/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('assets')}}/css/owl.carousel.min.css">
    <link rel="stylesheet" href="{{asset('assets')}}/css/magnific-popup.css">
    <link rel="stylesheet" href="{{asset('assets')}}/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{asset('assets')}}/css/themify-icons.css">
    <link rel="stylesheet" href="{{asset('assets')}}/css/nice-select.css">
    <link rel="stylesheet" href="{{asset('assets')}}/css/flaticon.css">
    <link rel="stylesheet" href="{{asset('assets')}}/css/gijgo.css">
    <link rel="stylesheet" href="{{asset('assets')}}/css/animate.min.css">
    <link rel="stylesheet" href="{{asset('assets')}}/css/slicknav.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <link rel="stylesheet" href="{{asset('assets')}}/css/style.css">
    <!-- <link rel="stylesheet" href="css/responsive.css"> -->
    @yield("head")
</head>

<body>
<!-- header -->
@include("home.header")
<!-- /header -->

<!-- slider -->
@section("slider")
@show
<!-- /slider -->


<!--
 section('sidebar')
 include('home.sidebar')
 show

//-->




<!-- index -->
@yield('content')
<!-- /index -->


<!-- footer -->
@include("home.footer")
@yield('foot')
<!-- /footer -->

</body>
</html>
