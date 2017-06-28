<!doctype html>
<html >
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>RSPInnovations LLP</title>

    <link href="{{ asset('/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="{{ asset('/vendor/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">

    <!-- Theme CSS -->
    <link href="{{ asset('/css/grayscale.min.css')}}" rel="stylesheet">

</head>
<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">

<!-- Navigation -->
<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                Menu <i class="fa fa-bars"></i>
            </button>
            <a class="navbar-brand page-scroll" href="http://13.78.180.95">
                <i class="fa fa-play-circle"></i> <span class="light">RSP</span> Innovations
            </a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
            <ul class="nav navbar-nav">
                <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                <li class="hidden">
                    <a href="#page-top"></a>
                </li>
                @if (Route::has('login'))
                    <li>

                        @if (Auth::check())
                            <a class="page-scroll" href="{{ url('/home') }}">Home</a>
                    </li>
                @else
                    <li>
                        <a class="page-scroll" href="http://13.78.180.95">Home</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="{{ url('/login') }}">Login</a>
                    </li>

                @endif
                @endif
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>

<header class="intro">
    <div class="intro-body">
        <div class="container">
            <div class="row" >
                <div class="col-md-3">
                </div>
                <div class="col-md-6">
                    <h2 align="center">Register</h2>

                    <div class="panel-body" align="center">
                    <form class="form-horizontal" role="form" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Register
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
                    </div>
                <div class="col-md-3">
                </div>
            </div>
        </div>
    </div>
    </header>

    <!-- About Section -->

    <!-- Map Section -->
    <div style="-webkit-filter: grayscale(100%);pointer-events:none"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3887.909202067609!2d77.57431731444292!3d12.977658990851852!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bae1611d58e5283%3A0xfb0e68f4978e73e1!2sRSP+Innovations!5e0!3m2!1sen!2sin!4v1498676835198" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe></div>


    <!-- Footer -->
    <footer>
        <div class="container text-center">
            <p>Copyright &copy; 2017 <a href="http://rspinnovations.com/">RSPInnov LLP</a>
        </div>
    </footer>

    <!-- jQuery -->

    <script src="{{ asset ('/vendor/jquery/jquery.js') }}"></script>


    <script src="{{ asset ('/vendor/bootstrap/js/bootstrap.min.js')}}"></script>

    <!-- Plugin JavaScript -->
    <script src= 'https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js'></script>

    <!-- Google Maps API Key - Use your own API key to enable the map feature. More information on the Google Maps API can be found at https://developers.google.com/maps/ -->

    <script src= "https://maps.googleapis.com/maps/api/js?key=AIzaSyCRngKslUGJTlibkQ3FkfTxj3Xss1UlZDA&sensor=false"></script>
    <!-- Theme JavaScript -->
    <script src="{{ asset ('/js/grayscale.min.js')}}"></script>

    </body>
    </html>
