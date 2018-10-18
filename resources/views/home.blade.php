@extends('layouts.app')

@section('content')
<style>
    /* Events */

.snip1543 {
  background-color: #fff;
  color: #ffffff;
  display: inline-block;
  font-family: 'Source Sans Pro', sans-serif;
  font-size: 16px;
  margin: 10px 5px;
  max-width: 315px;
  min-width: 230px;
  overflow: hidden;
  position: relative;
  text-align: left;
  width: 100%;
  -webkit-transform: translateZ(0);
  transform: translateZ(0);
}

.snip1543 *,
.snip1543 *:before,
.snip1543 *:after {
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
  -webkit-transition: all 0.45s ease;
  transition: all 0.45s ease;
}

.snip1543 img {
  backface-visibility: hidden;
  max-width: 100%;
  vertical-align: top;
}

.snip1543:before,
.snip1543:after {
  position: absolute;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  content: '';
  background-color: #b81212;
  opacity: 0.5;
  -webkit-transition: all 0.45s ease;
  transition: all 0.45s ease;
}

.snip1543:before {
  -webkit-transform: skew(30deg) translateX(-80%);
  transform: skew(30deg) translateX(-80%);
}

.snip1543:after {
  -webkit-transform: skew(-30deg) translateX(-70%);
  transform: skew(-30deg) translateX(-70%);
}

.snip1543 figcaption {
  position: absolute;
  top: 0px;
  bottom: 0px;
  left: 0px;
  right: 0px;
  z-index: 1;
  bottom: 0;
  padding: 25px 40% 25px 20px;
}

.snip1543 figcaption:before,
.snip1543 figcaption:after {
  position: absolute;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  background-color: #b81212;
  box-shadow: 0 0 20px rgba(0, 0, 0, 0.7);
  content: '';
  opacity: 0.5;
  z-index: -1;
}

.snip1543 figcaption:before {
  -webkit-transform: skew(30deg) translateX(-100%);
  transform: skew(30deg) translateX(-100%);
}

.snip1543 figcaption:after {
  -webkit-transform: skew(-30deg) translateX(-90%);
  transform: skew(-30deg) translateX(-90%);
}

.snip1543 h3,
.snip1543 p {
  margin: 0;
  opacity: 0;
  letter-spacing: 1px;
}

.snip1543 h3 {
  font-family: 'Teko', sans-serif;
  font-size: 36px;
  font-weight: 700;
  line-height: 1em;
  text-transform: uppercase;
}

.snip1543 p {
  font-size: 0.9em;
}

.snip1543 a {
  position: absolute;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  z-index: 1;
}

.snip1543:hover h3,
.snip1543.hover h3,
.snip1543:hover p,
.snip1543.hover p {
  -webkit-transform: translateY(0);
  transform: translateY(0);
  opacity: 0.9;
  -webkit-transition-delay: 0.2s;
  transition-delay: 0.2s;
}

.snip1543:hover:before,
.snip1543.hover:before {
  -webkit-transform: skew(30deg) translateX(-20%);
  transform: skew(30deg) translateX(-20%);
  -webkit-transition-delay: 0.05s;
  transition-delay: 0.05s;
}

.snip1543:hover:after,
.snip1543.hover:after {
  -webkit-transform: skew(-30deg) translateX(-10%);
  transform: skew(-30deg) translateX(-10%);
}

.snip1543:hover figcaption:before,
.snip1543.hover figcaption:before {
  -webkit-transform: skew(30deg) translateX(-40%);
  transform: skew(30deg) translateX(-40%);
  -webkit-transition-delay: 0.15s;
  transition-delay: 0.15s;
}

.snip1543:hover figcaption:after,
.snip1543.hover figcaption:after {
  -webkit-transform: skew(-30deg) translateX(-30%);
  transform: skew(-30deg) translateX(-30%);
  -webkit-transition-delay: 0.1s;
  transition-delay: 0.1s;
}



/*hero section */ 
.wrapper {
  display: grid;
  grid-template-columns: 1fr 2fr 30%;
  grid-auto-rows: minmax(10px, auto);
  align-items: stretch;
  align-items: stretch; }

.wrapper > div {
  background: #141312; }

.wrapper > div:nth-child(odd) {
  background: #141312; }

.box1 {
  grid-column: 1/3;
  grid-row: 1/6; }

.box2 {
  grid-row: 1/2; }

.box3 {
  grid-row: 2/5; }

/*Video section*/ 
.video-section {
                position: relative;
                width: 920px;
                
                margin-right: 30px;
                max-height: 550px;
                overflow: hidden;
            }
            #video-elem {
                width: 100%;
            }
            video::-webkit-media-controls {
                display:none !important;
            }
            .video-overlay {
                position: absolute;
                top: 0;
                right: 0;
                bottom: 0;
                left: 0;
                opacity: 0;
                transition: opacity 0.3s ease;
            }
            .video-overlay:hover {
                opacity: 1;
            }
            .video-overlay h1 {
                position: absolute;
                left: 50%;
                top: 50%;
                font-family:"Bree Serif",sans-serif;
                transform: translateX(-50%) translateY(-50%);
                text-transform: uppercase;
                font-size: 3em;
                color: #000;
                text-align: center;
            }
            
* {
  margin:0px;
  padding:0px;
  box-sizing:border-box;
}


/* CSS GRID */

.gridcol {
  display: grid;
  grid-template-columns: 50% 50%; }

.gridcol > div {
  background: transparent;
  padding: 1em; }

.gridcol > div:nth-child(odd) {
  background: transparent; }

gridcols {
  display: grid;
  grid-template-columns: 27% 27% 28%; }

.gridcols > div {
  background: transparent;
  padding: 25px;
  width: 350px;
  padding-left: 35%; }

.gridcols > div:nth-child(odd) {
  background: transparent; }

.gridcols {
  display: grid;
  grid-template-columns: 27% 27% 28%; }

.gridcols > div {
  background: transparent;
  padding: 2px;
  width: 350px;
  padding-left: 35%; }

.gridcols > div:nth-child(odd) {
  background: transparent; }

.wrapper {
    display: grid;
    grid-template-columns: 33.3% 33.3% 33.3%;
    grid-auto-rows: minmax(10px, auto);
    align-items: stretch;
    align-items: stretch;
}

.wrapper > div {
    background: #141312;
}

.wrapper > div:nth-child(odd) {
    background: #141312;
}

/*parallax */
.parallax {
    /* The image used */
    background-image: url("../images/Image/back4.jpg");
    width: 100%;
    /* Set a specific height */
    min-height: 200px;
    /* Create the parallax scrolling effect */
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}
/* button */

.button {
display: block;
width: 170px;
height: 60px;
position: relative;
border: 3px solid #c2b396;
border-radius: 5px;
margin: 200px auto;
background-color: #a2321a;
}
.button .content {
display: block;
position: absolute;
bottom: 6px;
width: 100%;
height: 100%;
line-height: 60px;
text-align: center;
background-color: #c2b396;
color: #a2321a;
text-transform: uppercase;
box-shadow: 0 6px 0 #beac8a;
border-radius: 5px;
transition: all 0.1s linear;
}
            
.button:active .content {
 bottom: 0;
box-shadow: 0 0 0 #06c;
 }

/*slider*/ 

@keyframes slidy {
  0% {
    left: 0%; }
  20% {
    left: 0%; }
  25% {
    left: -100%; }
  45% {
    left: -100%; }
  50% {
    left: -200%; }
  70% {
    left: -200%; }
  75% {
    left: -300%; }
  95% {
    left: -300%; }
  100% {
    left: -400%; } }
div#slider {
  overflow: hidden; }

div#slider figure img {
  width: 20%;
  float: left; }

div#slider figure {
  position: relative;
  width: 500%;
  margin: 0;
  left: 0;
  text-align: left;
  font-size: 0;
  animation: 30s slidy infinite; }

.wrappery {
    display: grid;
    grid-template-columns: 50% 50%;
    grid-auto-rows: minmax(380px, auto);
    align-items: stretch;
    align-items: stretch;
}

.wrappery > div {
    background: #141312;
}

.wrappery > div:nth-child(odd) {
    background: #141312;
}
  
@-webkit-keyframes logomorph {
    0% {
        opacity: 1;
    }

    25% {
        opacity: 1;
    }

    75% {
        opacity: 0;
    }

    100% {
        opacity: 0;
    }
}

@-moz-keyframes logomorph {
    0% {
        opacity: 1;
    }

    25% {
        opacity: 1;
    }

    75% {
        opacity: 0;
    }

    100% {
        opacity: 0;
    }
}

@-o-keyframes logomorph {
    0% {
        opacity: 1;
    }

    25% {
        opacity: 1;
    }

    75% {
        opacity: 0;
    }

    100% {
        opacity: 0;
    }
}

@keyframes logomorph {
    0% {
        opacity: 1;
    }

    25% {
        opacity: 1;
    }

    75% {
        opacity: 0;
    }

    100% {
        opacity: 0;
    }
}

#mainlogo {
    position: relative;
    height: 281px;
    width: 450px;
    margin: 0 auto;
}

#mainlogo img {
    position: absolute;
    left: 140px;
}

#mainlogo img.logotop {
    -webkit-animation-name: logomorph;
    -webkit-animation-timing-function: ease-in-out;
    -webkit-animation-iteration-count: infinite;
    -webkit-animation-duration: 5s;
    -webkit-animation-direction: alternate;

    -moz-animation-name: logomorph;
    -moz-animation-timing-function: ease-in-out;
    -moz-animation-iteration-count: infinite;
    -moz-animation-duration: 5s;
    -moz-animation-direction: alternate;

    -o-animation-name: logomorph;
    -o-animation-timing-function: ease-in-out;
    -o-animation-iteration-count: infinite;
    -o-animation-duration: 5s;
    -o-animation-direction: alternate;

    animation-name: logomorph;
    animation-timing-function: ease-in-out;
    animation-iteration-count: infinite;
    animation-duration: 5s;
    animation-direction: alternate;
}





</style>

<body style="background-color: #141312; padding:0px;">
    <div style="background-color: transparent; height: 10px;"></div>
    <div class="container" style="width: 100%">
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
                    <h2 style="font-family: 'Cinzel Decorative', cursive; color: #c2b396; font-size: 32px;"> UNIQUE SALONGA</h2>
                    <h2 style="padding-top: 20px; font-family: 'Lato', sans-serif; color: #c2b396; font-size: 17px;"> Unique's
                        solo debut album Grandma is the only thing <br> Filipino music fans and musicians can talk about
                        since <br> it dropped earlier this week of 13th of August, which <br> everyone giving their own
                        take on each song off the <br>12-track record</h2>
                    <input type="image" src="images/Image/playbutton.png" alt="Submit" width="58" height="78" style="padding-top: 20px;">
                </div>
            </div>
        </div>

        <!--incoming events-->
        <div class="parallax"></div>
        <div style="background-color: #d5d5d5; height: 350px;">
<br>
            <div style="height:30px;background-color: transparent; font-size:36px" id="portfolio">
                <center>

                    <div style="font-size:28px; text-align: center; font-family: 'Coda', cursive; color: #c3b396 "> INCOMING EVENTS</div>
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

        @endsection