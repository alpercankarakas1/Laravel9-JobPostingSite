<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>@yield("title")</title>

    <!-- Bootstrap core CSS -->
    <link href="{{asset('assets')}}/admin/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="{{asset('assets')}}/admin/font-awesome/css/font-awesome.css" rel="stylesheet" />

    <!-- Custom styles for this template -->
    <link href="{{asset('assets')}}/admin/css/style.css" rel="stylesheet">
    <link href="{{asset('assets')}}/admin/css/style-responsive.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    @yield("head")
</head>

<body>

@yield('content')

@yield('foot')

</body>
</html>
