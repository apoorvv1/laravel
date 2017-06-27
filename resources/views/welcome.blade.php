<!doctype html>
<html lang="{{ config('app.locale') }}">
    <head>
       
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>RSPInnovations LLP</title>

    <!-- Bootstrap Core CSS -->
	
    {!! HTML::style('theme/vendor/bootstrap/css/bootstrap.min.css')!!}
	{!! HTML::style('theme/vendor/font-awesome/css/font-awesome.min.css')!!}
	{!! HTML::style('https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic')!!}
	{!! HTML::style('https://fonts.googleapis.com/css?family=Montserrat:400,700')!!}
	{!! HTML::style('theme/css/grayscale.min.css')!!}


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @if (Auth::check())
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ url('/login') }}">Login</a>
                        <a href="{{ url('/register') }}">Register</a>
                    @endif
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                   Apoorv Verma
                </div>
 </div>
        </div>
		{!! HTML::script('theme/vendor/jquery/jquery.js')!!}
 
    <!-- Bootstrap Core JavaScript -->
	{!! HTML::script('theme/vendor/bootstrap/js/bootstrap.min.js')!!}
  
    <!-- Plugin JavaScript -->
	{!! HTML::script('https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js')!!}
 
    <!-- Google Maps API Key - Use your own API key to enable the map feature. More information on the Google Maps API can be found at https://developers.google.com/maps/ -->

{!! HTML::script('https://maps.googleapis.com/maps/api/js?key=AIzaSyCRngKslUGJTlibkQ3FkfTxj3Xss1UlZDA&sensor=false')!!}
    <!-- Theme JavaScript -->
	{!! HTML::script('theme/js/grayscale.min.js')!!}

    </body>
</html>
