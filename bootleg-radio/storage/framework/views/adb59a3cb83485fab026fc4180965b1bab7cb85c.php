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

<body style="background-image: url(images/Image/background.jpg); background-size: cover;" />
    <!--nav-->
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
                    <li><a href="#buzz">LOGIN</a></li>
                    <li><a href="#more">REGISTER</a></li>

                </ul>

            </div>
        </div>

    </nav>

    <!--registration-->
    <div class="registerform">
        <div class="box1"> <img src="images/Image/reg.png"></div>
        <div></div>
        <div class="box2"></div>
        <div class="box3">
            <div class="containerko">
                <img src="images/Image/border.jpg" style="border-radius: 60px; box-shadow: 5px 10px #92321a; left: 50px;">
                <div class="centered">
                    <div class="containerr" style=" font-family: 'Cinzel Decorative', cursive;">
                        <div class="animate six" style=" font-family: 'Cinzel Decorative', cursive;">
                            <span>R</span><span>E</span><span>G</span><span>I</span><span>S</span><span>T</span><span>E</span><span>R</span>&nbsp<span>N</span><span>O</span><span>W</span></div>
                    </div>
               

                        <input type="text" placeholder="Name" name="name" required style="width: 105%; height: 40px; padding: 15px; margin: 5px 0 22px 0;"><br>
                        <input type="email" placeholder="Enter Email" name="email" required style="width: 105%; height: 40px; padding: 15px; margin: 5px 0 22px 0;"><br>
                        <input type="password" placeholder="Enter Password" name="psw" style="width: 105%; height: 40px; padding: 15px; margin: 5px 0 22px 0;" required><br>
                        <input type="password" placeholder="Repeat Password" name="psw-repeat" style="width: 105%; height: 40px; padding: 15px; margin: 5px 0 22px 0;" required><br>

                        
                        <div class="clearfix">
                            <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn" style="width: 50">Cancel</button>
                            <button type="submit" class="signupbtn" style="background-color: #4cb433;">Sign Up</button>
                </div>
            </div>
        </div>
    </div>



</body>

</html>
