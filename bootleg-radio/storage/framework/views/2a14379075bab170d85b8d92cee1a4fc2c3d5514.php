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

<body style="background-color: #141312">
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

    <!--top-->
    <div id="slider">
        <figure>
            <img src="images/Image/decmberave.jpg">
            <img src="images/Image/belongzoo.jpg">
            <img src="images/Image/inmyprison.jpg">
            <img src="images/Image/decmberave.jpg">
            <img src="images/Image/inmyprison.jpg">
        </figure>
    </div>
    <!--sidebar code -->
    <div id="sidebar">
        <br><br><br><br><br>
        <img src="images/Image/unknownPerson.png" alt="Avatar" style="  border-radius: 50%; width: 150px; height: 120px;">

        <div class="flex-wrap"> <br> <br>


            <label for="username" style="font-family: 'Coda', cursive; font-size: 14px; color: #ffffff " class="col-md-4 col-form-label text-md-right"> <?php echo e(Auth::user()->name); ?></label>
            <br><br>
            <button style="background-color: #c2b396; border-radius: 10px; width: 180px; height: 40px; font-family: 'Coda', cursive; font-size: 14px; color:#a2321a; font-family: 'Coda', cursive;">
                <?php echo e(__('Profile')); ?>

            </button>

            <button style="
                background-color: #c2b396; border-radius: 10px; width: 180px; height: 40px; font-family: 'Coda' ,
                cursive; font-size: 14px; color: #a2321a type=" logoout" class="btn btn-primary" ">
                 <a style=" background-color: #c2b396; border-radius: 10px; width: 180px; height: 40px; font-family: 'Coda' , cursive; font-size: 14px; color: #a2321a; text-decoration:none" href="<?php echo e(action("HomeController@bandreg")); ?>"> <?php echo e(__('Create A Band')); ?></a>
            </button>

            <button style="background-color: #c2b396; border-radius: 10px; width: 180px; height: 40px; font-family: 'Coda' ,
                cursive; font-size: 14px; color: #a2321a " type=" logoout" class="btn btn-primary" href="<?php echo e(route('logout')); ?>" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                <?php echo e(__('Logout')); ?> </button>
            <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                <?php echo csrf_field(); ?>
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
        } </script>

    <div class="parallax" id="home"> </div>
    <div style="height: 435px;background-color:#141312;font-size:36px">
        <!--Featured Artist -->
        <br>
        <div class="wrappery">
            <div id="mainlogo">
                <img class="logobottom" src="images/Image/unique.jpg" />
                <img class="logotop" src="images/Image/grandma.jpg" />
            </div>
            <div>
                <h1 style="padding-top: 50px; font-family: 'Lato', sans-serif; color: #c2b396; font-size: 20px;"> FEATURED
                    ARTIST</h1>
                <h2 style="font-family: 'Cinzel Decorative', cursive; color: #c2b396; font-size: 32px;"> UNIQUE SALONGA</h2>
                <h2 style="padding-top: 20px; font-family: 'Lato', sans-serif; color: #c2b396; font-size: 17px;"> Unique's
                    solo debut album Grandma is the only thing <br> Filipino music fans and musicians can talk about
                    since <br> it dropped earlier this week of 13th of August, which <br> everyone giving their own
                    take on each song off the <br>12-track record</h2>
                <input type="image" src="images/Image/playbutton.png" alt="Submit" width="58" height="78" style="padding-top: 20px;">
            </div>
        </div>
    </div>

    <!--Bands-->
    <div class="parallax"> </div>
    <div style="height: 235px;background-color:#141312;font-size:36px">
        <br>
        <h2 style="font-family: 'Cinzel Decorative', cursive; color: #c2b396; font-size: 40px; text-align: center;"> FILIPINO BANDS</h2>
        <center>
            <figure class="snip1543">
                <img src="images/Image/kamikazee.jpg" alt="sample108" />
                <figcaption> <br> <br>
                    <h3 style="font-family: 'Cinzel Decorative', cursive;">KAMIKAZEE</h3>
                    <p style="font-family: 'Lato', sans-serif;">Kamikazee is a Filipino rock band formed in 2000.</p>
                </figcaption>
                <a href="#"></a>
            </figure>
            <figure class="snip1543">
                <img src="images/Image/jointheclub.jpg" alt="sample108" />
                <figcaption>
                    <h3 style="font-family: 'Cinzel Decorative', cursive;">JOIN THE CLUB</h3>
                    <p style="font-family: 'Lato', sans-serif;">Join The Club is a Filipino post-punk band founded in 2001.</p>
                </figcaption>
                <a href="#"></a>
            </figure>
            <figure class="snip1543"><img src="images/Image/itchyworm.jpg" alt="sample101" />
                <figcaption> <br>
                    <h3 style="font-family: 'Cinzel Decorative', cursive;">ITCHYWORMS</h3>
                    <p style="font-family: 'Lato', sans-serif;">The Itchyworms are a Filipino rock band whose music is primarily guitar-driven rock with
                        pronounced 1960s and 1980s pop. </p>
                </figcaption>
                <br>
                <a href="#"></a>
            </figure>
        </center>
        <script>

        </script>
    </div>
    <div style="height: 480px;background-color:#141312;font-size:36px">
        <center>
            <div style="padding-top: 115px;">
                <figure class="snip1543">
                    <img src="images/Image/silent.jpg" alt="sample108" />
                    <figcaption>
                        <h3 style="font-family: 'Cinzel Decorative', cursive;">SILENT SANCTUARY</h3>
                        <p style="font-family: 'Lato', sans-serif;">Silent Sanctuary is a 5-piece Filipino rock band that was formed in Metro Manila,
                            Philippines in 2001.</p>
                    </figcaption>
                    <a href="#"></a>
                </figure>
                <figure class="snip1543">
                    <img src="images/Image/december.jpg" alt="sample108" />
                    <figcaption> <br>
                        <h3 style="font-family: 'Cinzel Decorative', cursive;">DECEMBER AVENUE</h3>
                        <p style="font-family: 'Lato', sans-serif;">December Avenue is an Alt Rock band based in Manila, PH.</p>
                    </figcaption>
                    <a href="#"></a>
                </figure>
                <figure class="snip1543"><img src="images/Image/eheads.jpg" alt="sample101" />
                    <figcaption> <br> <br>
                        <h3 style="font-family: 'Cinzel Decorative', cursive;">ERASERHEADS</h3>
                        <p style="font-family: 'Lato', sans-serif;">Eraserheads is a Filipino rock band formed in 1989.</p>
                    </figcaption>
                    <br>
                    <a href="#"></a>
                </figure>
            </div>
            <a class="button">
                <span class="content" style="font-family: 'Cinzel Decorative', cursive; font-size: 18px;">SEE MORE</span>
            </a>
        </center>
    </div>

    <div style="height: 270px;background-color:#d5d5d5;font-size:36px">
        <br><br>
        <h2 style="font-family: 'Cinzel Decorative', cursive; color: #a2321a; font-size: 28px; text-align: center; "> THANK YOU FOR
            LISTENING. NOW JOIN US.</h2>
        <h2 style="font-family: 'Lato', sans-serif;  color: #a2321a; font-size: 20px; text-align: center"> We would like to
            you to hear more Filipino music.</h2>
        <center> <button style="background-color: #c2b396; border-radius: 10px; width: 160px; height: 50px; font-family: 'Cinzel Decorative', cursive; font-size: 14px; color: #a2321a ">
                SIGN UP NOW!</button> </center>

    </div>


    <!--footer-->

    <div style="height: 250px;background-color:#141312;font-size:36px">
        <div class="wrapper">
            <div>
                <div class="lalagyan" style="font-family: 'Yanone Kaffeesatz', sans-serif; color: #c2b396; font-size: 25px; padding-top: 35px; padding-left: 65px;">
                    Who's Your Daddy?</div>
                <div class="lalagyan" style="font-family: 'Archivo Narrow'; color: #c2b396; font-size: 25px; padding-left: 65px;">
                    Bootleg Radio</div>

                <div class="lalagyan" style="font-family: 'Lato', sans-serif; color: #d5d5d5; font-size: 19px; padding-left: 65px;">
                    11th Flr. Common Goal Tower Bldg.
                    <br>Madrigal Business Park
                    <br>Alabang, Muntinlupa City, Philippines
                    <br>Email us: info@bootleg-radio.com</div>
            </div>

            <div>
                <div class="lalagyan" style="font-family: 'Lato', sans-serif; color: #c2b396; font-size: 25px; padding-top: 35px; padding-left: 35px;">
                    To promote your products in Bootleg-Radio.com's site, please contact our sales group: </div>
                <div class="lalagyan" style="font-family: 'Archivo Narrow'; color: #d5d5d5; font-size: 19px; padding-left: 35px;">
                    Phone: +63 (2) 772-3152 / 5859670
                    <br>Fax: +63 (2) 771-0143
                    <br>E-mail address: sales@bootleg-radio.com</div>
            </div>
            <div>
                <div class="lalagyan" style="font-family: 'Lato', sans-serif; color: #c2b396; font-size: 25px; padding-top: 35px; padding-left: 35px;">
                    For event sponsorships: </div>
                <div class="lalagyan" style="font-family: 'Lato', sans-serif; color: #d5d5d5; font-size: 19px; padding-left: 35px;">
                    Please send proposals to sales@bootleg-radio.com</div>
            </div>
        </div>
    </div>
    <br>
    <br>
    <div class="footer" style="font-family: 'Lato', sans-serif; position: relative; left: 0;  bottom: 0;  height: 40px;  width: 100%; background-color: #1b1b1c; color: white; text-align: center; padding-top: 10px;">
        Copyright © 2018 Bootleg-Radio.com | About Us | Terms of Use | Email Us | FAQs </div>



</body>

</html>
