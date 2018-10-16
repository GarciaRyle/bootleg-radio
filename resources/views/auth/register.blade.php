<!DOCTYPE html>
<html lang=eng>

<head>
    <title>Bootleg</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie-edge">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Cinzel+Decorative:700" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="/css/style.css">
</head>

<body style="background-color: #2e2b29">
    <nav class="stroke">
        <div class="nav">
            <div class="nav-header">
                <ul>
                    <li><img src="images/Image/logo.png" s style="width: 190px; height: 53px; padding-left: 40px; bottom: 10%;">
                    </li>
                    <li><a href="#home">HOME</a></li>
                    <li><a href="#bands">BANDS</a></li>
                    <li><a href="#webjocks">WEB JOCKS</a></li>
                    <li><a href="#chat">CHAT</a></li>
                    <li><a href="#buzz">BUZZ</a></li>
                    <li><a href="#more">MORE</a></li>

                </ul>

            </div>
        </div>

    </nav>
    <!--Profile-->

    <div class="bandprofile1">
        <div class="box1">
            <img src="images/Image/reg.png">
        </div>

        <div class="box2">

            <br><br><br><br>
            <div class="containerr" style=" font-family: 'Cinzel Decorative', cursive;">
                <div class="animate six" style=" font-family: 'Cinzel Decorative', cursive;">
                    <span>R</span><span>E</span><span>G</span><span>I</span><span>S</span><span>T</span><span>E</span><span>R</span>&nbsp<span>N</span><span>O</span><span>W</span></div>
            </div> <br>

            <center> <input id="name" type="text" placeholder="Name" style="width: 50%; height: 40px; padding: 15px; margin: 5px 0 22px 0;" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus> <br></center>

            @if ($errors->has('name'))
            <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('name') }}</strong>
            </span>
            @endif


            <center>
                <input id="email" type="email" placeholder="E-mail" style="width: 50%; height: 40px; padding: 15px; margin: 5px 0 22px 0;" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required> <br>
            </center>
            @if ($errors->has('email'))
            <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('email') }}</strong>
            </span>
            @endif


            <center>
                <input id="password" placeholder="Enter Password" type="password" style="width: 50%; height: 40px; padding: 15px; margin: 5px 0 22px 0;" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required> <br>
            </center>
            @if ($errors->has('password'))
            <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('password') }}</strong>
            </span>
            @endif

            <center>
                <input id="password-confirm" placeholder="Re-enter Password" type="password" style="width: 50%; height: 40px; padding: 15px; margin: 5px 0 22px 0;" class="form-control" name="password_confirmation" required> <br>
            </center>
            <div class="clearfix">

               <center> <button type="submit" class="signupbtn" style="background-color: #4cb433; margin-left: 135px;">Sign Up</button> </center>
            </div>

        </div>
    </div>



    <!--sidebar code -->
    <div id="sidebar">
        <br><br><br><br><br>
        <img src="images/Image/unknownPerson.png" alt="Avatar" style="  border-radius: 50%; width: 150px; height: 120px;">

        <div class="flex-wrap"> <br> <br>


            <label for="username" style="font-family: 'Coda', cursive; font-size: 14px; color: #ffffff " class="col-md-4 col-form-label text-md-right"> {{ Auth::user()->name }}</label>
            <br><br>
            <button style="background-color: #c2b396; border-radius: 10px; width: 180px; height: 40px; font-family: 'Coda', cursive; font-size: 14px; color:#a2321a; font-family: 'Coda', cursive;">
                {{ __('Profile') }}
            </button>

            <button style="
                background-color: #c2b396; border-radius: 10px; width: 180px; height: 40px; font-family: 'Coda' ,
                cursive; font-size: 14px; color: #a2321a type=" logoout" class="btn btn-primary" ">
                 <a style=" background-color: #c2b396; border-radius: 10px; width: 180px; height: 40px; font-family: 'Coda' , cursive; font-size: 14px; color: #a2321a; text-decoration:none" href="{{ action("BandRegController@create") }}"> {{ __('Create A Band') }}</a>
            </button>

            <button style="background-color: #c2b396; border-radius: 10px; width: 180px; height: 40px; font-family: 'Coda' ,
                cursive; font-size: 14px; color: #a2321a " type=" logoout" class="btn btn-primary" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                {{ __('Logout') }} </button>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>





        </div>

    </div>


    <div id="toggle-btn" onclick="toggleSidebar(this)">
        <span></span>
        <span></span>
        <span></span>
    </div>
    <!--javascript -->
    <script>
        function toggleSidebar(ref) {
            ref.classList.toggle('active');
            document.getElementById('sidebar').classList.toggle('active');
        }

    </script>







</body>

</html>
