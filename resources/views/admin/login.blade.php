<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>DASHGUM - Bootstrap Admin Template</title>

    <!-- Bootstrap core CSS -->
    <link href="{{asset('assets')}}/admin/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="{{asset('assets')}}/admin/font-awesome/css/font-awesome.css" rel="stylesheet" />

    <!-- Custom styles for this template -->
    <link href="{{asset('assets')}}/admin/css/style.css" rel="stylesheet">
    <link href="a{{asset('assets')}}/admin/css/style-responsive.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<!-- **********************************************************************************************************************************************************
MAIN CONTENT
*********************************************************************************************************************************************************** -->
    <div id="login-page">
        <div class="container">
            @include('home.messages')
            <form class="form-login" action="{{route('loginadmincheck')}}" method="post">
                @csrf
                <h2 class="form-login-heading">sign in now</h2>
                <div class="login-wrap">
                    <input type="email" name="email" class="form-control" placeholder="Email">
                    <br>
                    <input type="password" name="password" class="form-control" placeholder="Password">
                    <label class="checkbox">
                    </label>
                    <button class="btn btn-theme btn-block" type="submit"><i class="fa fa-lock"></i> SIGN IN</button>
                    <hr>
                    <div class="registration">
                        Don't have an account yet?<br/>
                        <a class="" href="/registeruser">
                            Create an account
                        </a>
                    </div>

                </div>

            </form>

        </div>
    </div>
    <!-- js placed at the end of the document so the pages load faster -->
    <script src="{{asset('assets')}}/admin/js/jquery.js"></script>
    <script src="{{asset('assets')}}/admin/js/bootstrap.min.js"></script>

    <!--BACKSTRETCH-->
    <!-- You can use an image of whatever size. This script will stretch to fit in any screen size.-->
    <script type="text/javascript" src="{{asset('assets')}}/admin/js/jquery.backstretch.min.js"></script>
    <script>
        $.backstretch("{{asset('assets')}}/admin/img/login-bg.jpg", {speed: 500});
    </script>


</body>



</html>


