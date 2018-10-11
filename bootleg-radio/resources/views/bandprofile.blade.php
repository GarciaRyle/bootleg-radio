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

<body style="background-image: url(images/Image/registerbg.jpg); background-size: cover;" />
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
                 <a style=" background-color: #c2b396; border-radius: 10px; width: 180px; height: 40px; font-family: 'Coda' , cursive; font-size: 14px; color: #a2321a; text-decoration:none" href="{{ action("HomeController@bandreg") }}"> {{ __('Create A Band') }}</a>
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








</div>

</html>
