@extends('layouts.app')

@section('content')

<head>
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Cinzel+Decorative:700" rel="stylesheet">
</head>
<style>
    body, html {
        height: 100%;
    }

    .bg { 
        /* The image used */
        background-image: url("images/Image/background.jpg");

        /* Full height */
        height: 95%; 

        /* Center and scale the image nicely */
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
    }
    .userright {
            display: grid;
            grid-template-columns: 5% 43% 45%;
            grid-auto-columns: auto;
            align-items: stretch;
            align-items: stretch;
        }
    .kalhati {
            display: grid;
            grid-template-columns: 50% 50%;
            grid-auto-columns: auto;
            align-items: stretch;
            align-items: stretch;
        }
      .userprofile {
            display: grid;
            grid-template-columns: 15% 70% 15%;
            grid-auto-columns: auto;
            align-items: stretch;
            align-items: stretch;
        }

        .userprofile>div {
            background: transparent;
        }

        .userprofile>.box3:nth-child(odd) {
            background: transparent;
        }

        .box1 {
            grid-column: 2/3;
            grid-row: auto;
            background: #d5d5d5;
        }
        .text4 {
            font-size: 17px;
            font-family: 'Lato', sans-serif;
            margin-top: -32px;
            margin-left: 170px;
            color: rgb(150, 133, 75);
        }
  
</style>

<body>
    <div class="bg">
      <div style="height: 110px;"></div>
        <div class="userprofile">
            <div class="box1" style="background: #f4f4f4; border-radius: 10px;">
                <div class="userright">
                    <div></div>
                    <div> <br>
                        <h2 style="font-size: 18px; color: #a2321a"> User Information</h2><br>
                        <h2 style="font-size: 16px; margin-left: 60px; font-family: 'Cinzel Decorative', cursive; color: #141312"> Name :</h2>
                           <input name="bandName" class="text2" maxlength="20" placeholder="Band Name:" style="margin-left:122px; margin-top: -48px; width: 250px ; height: 30px" ; />

                        <h2 style="font-size: 16px; margin-left: 60px; font-family: 'Cinzel Decorative', cursive; color: #141312"> Email : </h2>
                        <input name="bandName" class="text2" maxlength="20" placeholder="Band Name:" style="margin-left:122px; margin-top: -48px; width: 250px ; height: 30px" ; />


                        <br>
                    </div>
                    <div><br>
                        <h2 style="font-size: 18px; color: #a2321a"> Band you've created</h2><br>
                        <div class="kalhati">
                            <div>
                                <img class="img-valign" src="images/Image/unknownPerson.png" alt="" style=" width: 190px; height: 190px;" />
                            </div>
                            <div><br>
                                <h2 style="font-size: 16px;  font-family: 'Cinzel Decorative', cursive; color: rgb(150, 133, 75)"> Band Name</h2>
                                <h2 style="font-size: 14px; font-family: 'Lato', sans-serif; padding: 5px; color: #141312"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut gravida, metus quis congue finibus, tellus massa aliquet diam</h2>
                                <br><br><br>
                                <div class="kalhati">
                                    <center>
                                        <div></div>
                                    </center>
                                    <center>
                                        <div><button type="submit" class="btn btn-warning">Update</button></div>
                                    </center>
                                        <br>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div style="height:30px; background: transparent;"></div>

        @endsection
