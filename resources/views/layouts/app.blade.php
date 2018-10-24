<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Bootleg</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700">

    <!-- Styles -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    {{--
    <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}

<style>
    body {
        font-family: 'Cinzel Decorative', cursive;
        color:
    }

    .fa-btn {
        margin-right: 7px;
    }

    .linenav {
        color: #d5d5d5;
    }

@media screen (min-width: 320px) {
#container {
width: 100%;
}
}
@media screen (min-width: 480px) {
#container {
width: 100%;
}
}

    </style>
</head>

<body id="app-layout">
    <nav style="background-color:#141312;">
        <div class="container">
            <div class="navbar-header">

                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!-- Branding Image -->
                <a href="{{ url('/') }}">
                    <img src="/images/Image/logo.png" style="width: 185px; height: 43px; padding-left: 40px; margin-top: 4px; ">
                </a>
            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">

                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                    @if (Auth::guest())
                    <li><a href="{{ url('/login') }}">Login</a></li>
                    <li><a href="{{ url('/register') }}">Register</a></li>
                    @else
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" style="position:relative; padding-left:50px; color: #c2b396;">
                            <img src="/uploads/avatars/{{ Auth::user()->avatar }}" style="width:32px; height:32px; position:absolute; top:10px; left:10px; border-radius:50%">
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu" role="menu">
                            <li><a href="{{ url('/profile') }}" style="color: #c2b396; font-family: 'Lato', sans-serif; font-size: 16px;"><i class="fa fa-btn fa-user"></i>&nbsp;Profile</a></li>
                            <li><a href="{{ action('BandRegController@create') }}" style="color: #c2b396; font-family: 'Lato', sans-serif; font-size: 16px;"><i class="fas fa-plus-square"></i> &nbsp; Create Band</a></li>
                            <li><a href="{{ action('BandRegController@index') }}" style="color: #c2b396; font-family: 'Lato', sans-serif; font-size: 16px;"><i class="far fa-eye"></i> &nbsp; View Profile</a></li>


                            <li><a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();" style="color: #a2321a; font-family: 'Lato', sans-serif; font-size: 16px;"><i class="fas fa-sign-out-alt"></i>
                                    &nbsp; {{ __('Logout') }}
                                </a></li>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>


                        </ul>
                    </li>
                    @endif
                </ul>

                <!-- Left Side Of Navbar -->
                <div class="linenav">
                    <ul class="nav navbar-nav" style="float:right; color: #c2b396;">
                        <li><a href="#" style="color: #c2b396; ">Home</a></li>
                        <li><a href="{{ url('/home') }}" style="color: #c2b396;">Bands</a></li>
                        <li><a href="#" style="color: #c2b396;">Web Jocks</a></li>
                        <li><a href="#" style="color: #c2b396;">Chat</a></li>
                        <li><a href="#" style="color: #c2b396;">More</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>

    @yield('content')

    <!-- JavaScripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js" integrity="sha384-I6F5OKECLVtK/BL+8iSLDEHowSAfUo76ZL9+kGAgTRdiByINKJaqTPH/QVNS1VDb" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}
</body>

</html>
