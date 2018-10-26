@extends('layouts.app')

@section('content')
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
    <link rel="stylesheet" type="text/css" href="/css/home.css">
</head>


<body style="background-color: #141312;">
    <div style="background-color: transparent; height: 10px;"></div>
    <div class="row"></div>

    <!--top-->
    <div style="height: 543px;background-color:#141312;font-size:36px" id="portfolio">
        <div class="wrapper">
            <div class="box1">
                <div class="video-section">
                    <video id="video-elem" preload="auto" autoplay="true" loop="loop" muted="muted">
                        <br>
                        <source src="images/katha.mp4" type="video/mp4">
                        Video not supported
                    </video>

                </div>
            </div>

            <div class="box2">
                <div id="slider">
                    <figure>
                        <img src="images/1.jpg" style="height: 270px;">
                        <img src="images/jack1.jpg" style="height: 270px;">
                        <img src="images/j3.jpg" style="height: 270px;">
                        <img src="images/4.jpg" style="height: 270px;">
                        <img src="images/j3.jpg" style="height: 270px;">
                    </figure>
                </div>
            </div>
            <div class="box3">
                <div id="slider">
                    <figure>
                        <img src="images/back.jpg" style="height: 244px;  margin-top: 4px;">
                        <img src="images/bk.jpg" style="height: 244px; margin-top: 4px;">
                        <img src="images/photo1.jpg" style="height: 244px; margin-top: 4px;">
                        <img src="images/photo3.jpg" style="height: 244px; margin-top: 4px;">
                        <img src="images/j3.jpg" style="height: 244px; margin-top: 4px;">
                    </figure>
                </div>
            </div>
        </div>
    </div>
    <div class="parallax"></div>

    <div style="height: 455px;background-color:#141312;font-size:36px">


        <!--Featured Artist -->

        <br>
        <div class="wrappery">
            <div id="mainlogo">
                <img class="logobottom" src="images/Image/unique.jpg" />
                <img class="logotop" src="images/Image/grandma.jpg" />
            </div>
            <div>
                <h1 style="padding-top: 20px; font-family: 'Lato', sans-serif; color: #c2b396; font-size: 20px;"> FEATURED
                    ARTIST</h1>
                <a href="{{ url('/featuredartist') }}" h2 style="font-family: 'Cinzel Decorative', cursive; color: #c2b396; font-size: 32px;"> UNIQUE SALONGA</a></h2>
                <h2 style="padding-top: 20px; font-family: 'Lato', sans-serif; color: #c2b396; font-size: 17px;"> Unique's
                    solo debut album Grandma is the only thing <br> Filipino music fans and musicians can talk about
                    since <br> it dropped earlier this week of 13th of August, which <br> everyone giving their own
                    take on each song off the <br>12-track record</h2>
                <input type="image" src="images/Image/playbutton.png" alt="Submit" width="58" height="78" style="padding-top: 20px;">
            </div>
        </div>
    
    <!--incoming events-->
    <div class="parallax"></div>
    <div style="background-color: #d5d5d5; height: 350px;">
        <br>
        <div style="height:30px;background-color: transparent; font-size:36px" id="portfolio">
            <center>

                <div style="font-size:28px; text-align: center; font-family: 'Lato', sans-serif; color: #c3b396 "> INCOMING EVENTS</div>
                <figure class="snip1543">
                    <img src="images/event3.jpg" alt="sample108" />
                    <figcaption>
                        <h3>URBANDUB</h3>
                        <p>Catch Them @</p>
                        <p>The Belle & Dragon – Legazpi Village.</p>
                        <p>Starts at 7PM</p>
                    </figcaption>
                    <a href="#"></a>
                </figure>
                <figure class="snip1543">
                    <img src="images/event2.jpg" alt="sample108" />
                    <figcaption>
                        <h3>FRANCO</h3>
                        <p>Catch Them @</p>
                        <p>12 Monkeys Music Hall & Pub – Ortigas Center.</p>
                        <p>Starts at 7PM</p>
                    </figcaption>
                    <a href="#"></a>
                </figure>
                <figure class="snip1543">
                    <img src="images/event3.jpg" alt="sample101" />
                    <figcaption>
                        <h3>UPDHARMA DOWN</h3>
                        <p>Catch Them @</p>
                        <p>SaGuijo Cafe & Bar – San Antonio Village. </p>
                        <p>Starts at 7PM</p>
                    </figcaption>
                    <a href="#"></a>
                </figure>
            </center>

        </div>


    </div>

    <!--footer-->

    <div style="height: 300px;background-color:#141312;font-size:36px">
        <div class="wrapper">
            <div>
                <div class="lalagyan" style="font-family: 'Lato', sans-serif; color: #c2b396; font-size: 25px; padding-top: 35px; padding-left: 65px;">
                    Who's Your Daddy?</div>
                <div class="lalagyan" style="font-family: 'Lato', sans-serif; color: #c2b396; font-size: 25px; padding-left: 65px;">
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
                <div class="lalagyan" style="font-family: 'Lato', sans-serif; color: #d5d5d5; font-size: 19px; padding-left: 35px;">
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
  
    <div class="footer" style="font-family: 'Lato', sans-serif; position: relative; left: 0;  bottom: 0;  height: 40px;  width: 100%; background-color: #1b1b1c; color: white; text-align: center; padding-top: 10px;">
        Copyright © 2018 Bootleg-Radio.com | About Us | Terms of Use | Email Us | FAQs </div>

    @endsection
