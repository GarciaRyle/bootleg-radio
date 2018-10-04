<!DOCTYPE html>
<html lang=eng> 
<head> 
     <title>Bootleg</title>
    <meta charset="UTF-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie-edge">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Coda" rel="stylesheet">
    	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Droid+Sans:400,700">
    <link href="https://fonts.googleapis.com/css?family=Ropa+Sans" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Source+Code+Pro:700" rel="stylesheet">
     <link href="https://fonts.googleapis.com/css?family=Archivo+Narrow" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="/css/style.css">
</head>
    <body style="background-color: #141312">
         <nav class="stroke">
         <div class="nav">
        <div class="nav-header">
              <ul>  <li><img src="images/Image/logo.png"s style="width: 190px; height: 53px; padding-left: 40px; bottom: 10%;"> </li>
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
                <div class="wrap">
          <div id="arrow-left" class="arrow"></div>
          <div id="slider">
            <div class="slide slide1">
              <div class="slide-content">
                  <span style="color: #c2b396; font-family: 'Source Code Pro', monospace; font-size: 70px;">DECEMBER AVENUE</span>
              </div>
            </div>
            <div class="slide slide2">
              <div class="slide-content">
               <span style="color: #c2b396; font-family: 'Source Code Pro', monospace; font-size: 70px;">IV OF SPADES</span>
              </div>
            </div>
            <div class="slide slide3">
              <div class="slide-content">
               <span style="color: #c2b396; font-family: 'Source Code Pro', monospace; font-size: 70px;">I BELONG TO THE ZOO</span>
              </div>
            </div>
          </div>
          <div id="arrow-right" class="arrow"></div>
        </div>
                <!--script of hero section-->
        <script>let sliderImages = document.querySelectorAll(".slide"),
          arrowLeft = document.querySelector("#arrow-left"),
          arrowRight = document.querySelector("#arrow-right"),
          current = 0;

        // Clear all images
        function reset() {
          for (let i = 0; i < sliderImages.length; i++) {
            sliderImages[i].style.display = "none";
          }
        }

        // Init slider
        function startSlide() {
          reset();
          sliderImages[0].style.display = "block";
        }

        // Show prev
        function slideLeft() {
          reset();
          sliderImages[current - 1].style.display = "block";
          current--;
        }

        // Show next
        function slideRight() {
          reset();
          sliderImages[current + 1].style.display = "block";
          current++;
        }

        // Left arrow click
        arrowLeft.addEventListener("click", function() {
          if (current === 0) {
            current = sliderImages.length;
          }
          slideLeft();
        });

        // Right arrow click
        arrowRight.addEventListener("click", function() {
          if (current === sliderImages.length - 1) {
            current = -1;
          }
          slideRight();
        });

        startSlide();
        </script>

        <!--sidebar code --> 
        <div id="sidebar">
              <br><br><br><br><br>
                    <img src="images/Image/logo.png" alt="Avatar" style="  border-radius: 50%; width: 150px; height: 120px;">
          
            <div class="flex-wrap">  <br> <br>
            <form method="POST" action="<?php echo e(route('login')); ?>">
                        <?php echo csrf_field(); ?>
          
          

            <input id="email" type="email" placeholder="Username" class="form-control<?php echo e($errors->has('email') ? ' is-invalid' : ''); ?> signup " name="email" value="<?php echo e(old('email')); ?>" required autofocus>
           
            <?php if($errors->has('email')): ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($errors->first('email')); ?></strong>
                                    </span>
                                <?php endif; ?>
            
                                <br>
        
                           
                                <input id="password" type="password"  placeholder="Password" class="form-control<?php echo e($errors->has('password') ? ' is-invalid' : ''); ?> signup" name="password" required>

                                <?php if($errors->has('password')): ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($errors->first('password')); ?></strong>
                                    </span>
                                <?php endif; ?>

 <br><br>
                           <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" <?php echo e(old('remember') ? 'checked' : ''); ?>>

                                    <label class="form-check-label" for="remember">
                                        <?php echo e(__('Remember Me')); ?>

                                    </label>
                                </div>


         
            <br><br><button style="background-color: #c2b396; border-radius: 10px; width: 140px; height: 40px; font-family: 'Coda', cursive; font-size: 14px; color: #a2321a ">     <?php echo e(__('Login')); ?></button>
          
            
 
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
         
         <div class="parallax" id="home">  </div>
        <div style="height: 435px;background-color:#141312;font-size:36px">
        <!--Featured Artist --> 
            <br>
            <div class="wrappery">
            <div id="mainlogo">
                <img class="logobottom" src="images/Image/unique.jpg" />
                <img class="logotop" src="images/Image/grandma.jpg" />
            </div>
               <div>
                <h1 style="padding-top: 50px; font-family: 'Coda', cursive; color: #c2b396; font-size: 20px;"> FEATURED ARTIST</h1>
                <h2 style= "font-family: 'Coda', cursive; color: #c2b396; font-size: 32px;"> UNIQUE SALONGA</h2> 
                <h2 style= "padding-top: 20px; font-family: 'Coda', cursive; color: #c2b396; font-size: 17px;"> Unique's solo debut album Grandma is the only thing <br> Filipino music fans and musicians can talk about since <br> it dropped earlier this week of 13th of August, which <br> everyone giving their own take on each song off the <br>12-track record</h2>
                    <input type="image" src="images/Image/playbutton.png" alt="Submit" width="58" height="78" style="padding-top: 20px;">
                </div>
        </div>
        </div>
        
        <!--Bands--> 
        <div class="parallax">  </div>
        <div style="height: 235px;background-color:#141312;font-size:36px">
            <br> <h2 style= "font-family: 'Coda', cursive; color: #c2b396; font-size: 40px; text-align: center;"> FILIPINO BANDS</h2> 
    <center> <figure class="snip1543">
      <img src="images/Image/kamikazee.jpg" alt="sample108" />
      <figcaption> <br> <br>
        <h3>KAMIKAZEE</h3>
        <p>Kamikazee is a Filipino rock band formed in 2000.</p>
      </figcaption>
      <a href="#"></a>
    </figure>
   <figure class="snip1543">
      <img src="images/Image/jointheclub.jpg" alt="sample108" />
      <figcaption> <br>
        <h3>JOIN THE CLUB</h3>
        <p>Join The Club is a Filipino post-punk band founded in 2001.</p>
      </figcaption>
      <a href="#"></a>
    </figure>
    <figure class="snip1543"><img src="images/Image/itchyworm.jpg" alt="sample101" />
      <figcaption> <br>
        <h3>ITCHYWORMS</h3>
        <p>The Itchyworms are a Filipino rock band whose music is primarily guitar-driven rock with pronounced 1960s and 1980s pop.  </p>
      </figcaption>
        <br>
  <a href="#"></a>
        </figure> </center>
            <script>
        
                </script>
        </div>
        <div style="height: 480px;background-color:#141312;font-size:36px">
            <center>  <div style="padding-top: 115px;">
                <figure class="snip1543">
      <img src="images/Image/silent.jpg" alt="sample108" />
      <figcaption> <br>
        <h3>SILENT SANCTUARY</h3>
        <p>Silent Sanctuary is a 5-piece Filipino rock band that was formed in Metro Manila, Philippines in 2001.</p>
      </figcaption>
      <a href="#"></a>
    </figure>
   <figure class="snip1543">
      <img src="images/Image/december.jpg" alt="sample108" />
      <figcaption>  <br> <br>
        <h3>DECEMBER AVENUE</h3>
        <p>December Avenue is an Alt Rock band based in Manila, PH.</p>
      </figcaption>
      <a href="#"></a>
    </figure>
    <figure class="snip1543"><img src="images/Image/eheads.jpg" alt="sample101" />
      <figcaption>  <br> <br>
        <h3>ERASERHEADS</h3>
        <p>Eraserheads is a Filipino rock band formed in 1989.</p>
      </figcaption>
        <br>
  <a href="#"></a>
                </figure> </div> 
             <a class="button">
            <span class="content" style="font-family: 'Ropa Sans', sans-serif; font-size: 18px;">SEE MORE</span>
        </a>
            </center>    
        </div>
       
        <div style="height: 200px;background-color:#d5d5d5;font-size:36px">
        <br> <h2 style= "font-family: 'Coda', cursive; color: #a2321a; font-size: 28px; text-align: center; "> THANK YOU FOR LISTENING. NOW JOIN US.</h2>
        <h2 style= "font-family: 'Coda', cursive; color: #a2321a; font-size: 20px; text-align: center"> We would like to you to hear the more Filipino music.</h2>
              <center> <button style="background-color: #c2b396; border-radius: 10px; width: 140px; height: 40px; font-family: 'Coda', cursive; font-size: 14px; color: #a2321a "> SIGN UP NOW!</button> </center>
        </div>
        
        
        <!--footer-->
          
              <div style="height: 250px;background-color:#141312;font-size:36px">
                  <div class="wrapper">
                    <div> <div class="lalagyan" style="font-family: 'Yanone Kaffeesatz', sans-serif; color: #c2b396; font-size: 25px; padding-top: 35px; padding-left: 65px;"> Who's Your Daddy?</div>
        <div class="lalagyan" style="font-family: 'Archivo Narrow'; color: #c2b396; font-size: 25px; padding-left: 65px;"> Bootleg Radio</div>
        
        <div class="lalagyan" style="font-family: 'Archivo Narrow'; color: #d5d5d5; font-size: 19px; padding-left: 65px;"> 11th Flr. Common Goal    Tower Bldg.
            <br>Madrigal Business Park
            <br>Alabang, Muntinlupa City, Philippines
            <br>Email us: info@bootleg-radio.com</div> </div>
        
            <div> <div class="lalagyan" style="font-family: 'Yanone Kaffeesatz', sans-serif; color: #c2b396; font-size: 25px; padding-top: 35px; padding-left: 35px;"> To promote your products in Bootleg-Radio.com's site, please contact our sales group: </div>
            <div class="lalagyan" style="font-family: 'Archivo Narrow'; color: #d5d5d5; font-size: 19px; padding-left: 35px;"> Phone: +63 (2) 772-3152 / 5859670
            <br>Fax: +63 (2) 771-0143
            <br>E-mail address: sales@bootleg-radio.com</div> 
            </div>
        <div> <div class="lalagyan" style="font-family: 'Yanone Kaffeesatz', sans-serif; color: #c2b396; font-size: 25px; padding-top: 35px; padding-left: 35px;"> For event sponsorships: </div>
            <div class="lalagyan" style="font-family: 'Archivo Narrow'; color: #d5d5d5; font-size: 19px; padding-left: 35px;"> Please send proposals to sales@bootleg-radio.com</div>      
        </div>
        </div>
    </div>
    
    <div class="footer" style=" position: relative; left: 0;  bottom: 0;  height: 40px;  width: 100%; background-color: #1b1b1c; color: white; text-align: center; padding-top: 10px; font-family: 'Coda', cursive;  ">  Copyright © 2018 Bootleg-Radio.com | About Us | Terms of Use | Email Us | FAQs </div>
        
           
       
         
    </body>
</html>
