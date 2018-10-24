@extends('layouts.app')

@section('content')

<head>
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Cinzel+Decorative:700" rel="stylesheet">
    <style>
        .albumphoto {
            display: grid;
            grid-template-columns: 5% 15% 15% 15% 15% 15%;
            grid-auto-columns: auto;
            align-items: stretch;
            align-items: stretch;
        }

        .albumphoto>div {
            background: transparent;
        }

        .albumphoto>.box3:nth-child(odd) {
            background: transparent;
        }

        .lyrics {
            display: grid;
            grid-template-columns: auto;
            grid-auto-columns: 30% 70%;
            align-items: stretch;
            align-items: stretch;
        }

        .lyrics>div {
            background: transparent;
        }

        .lyrics>.box3:nth-child(odd) {
            background: transparent;
        }

        .musicplayer {
            display: grid;
            grid-template-columns: 5% 32.5% 25% 32.5% 5%;
            grid-auto-columns: auto;
            align-items: stretch;
            align-items: stretch;
        }

        .musicplayer>div {
            background: transparent;
        }

        .musicplayer>.box3:nth-child(odd) {
            background: transparent;
        }

        .userprofile {
            display: grid;
            grid-template-columns: 8% 84.5% 10%;
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

        .bandmember {
            display: grid;
            grid-template-columns: 10% 20% 20% 20% 20% 10%;
            grid-auto-columns: auto;
            align-items: stretch;
            align-items: stretch;
        }

        .bandmember>div {
            background: transparent;
        }

        .bandmember>.box3:nth-child(odd) {
            background: transparent;
        }

        .parent {
            position: relative;
            top: 0;
            left: 0;
        }

        .image1 {
            position: relative;
            top: 0;
            left: 0;
        }

        .image2 {
            position: absolute;
            top: 260px;
            left: 70px;
        }

        .text3 {
            font-size: 16px;
            font-family: 'Lato', sans-serif;
            margin-top: -10px;
            margin-left: 280px;
        }

        .text4 {
            font-size: 22px;
            font-family: 'Cinzel Decorative', cursive;
            margin-top: 90px;
            margin-left: 490px;

        }

        .desc {
            margin-left: 270px;
            margin-right: 70px;
            font-family: 'Lato', sans-serif;
            color: #141312;
            font-size: 16px;
            padding: 10px;
            border: 3px;
            border-style: double;
            border-color: transparent;
            color: #141312;
            padding: 1em;
            width: 560px;
            text-align: center;
            word-wrap: break-word;
        }

        .containerreg {
            position: relative;
            width: 100%;
            padding: 10px;
        }

        .image {
            display: block;
            width: 100%;
            height: auto;
        }

        .overlay {
            position: absolute;
            bottom: 100%;
            left: 0;
            right: 0;
            background-color: transparent;
            overflow: hidden;
            width: 100%;
            height: 0;
            transition: .5s ease;

        }

        .containerreg:hover .overlay {
            bottom: 0;
            height: 100%;
        }

        .text {
            color: white;
            font-size: 17px;
            font-family: 'Lato', sans-serif;
            position: absolute;
            top: 50%;
            left: 50%;
            -webkit-transform: translate(-50%, -50%);
            -ms-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
            text-align: center;
        }

        .inner {
            display: inline-block;
            font-size: 16px;
            text-align: center;
            font-family: 'Lato', sans-serif;
            margin-left: 36px;
        }

        /* Fake (pseudo) element, that enables vertical-align */
        .block2:before {
            display: inline-block;
        }

        .song_list {
            background: #d5d5d5;
            position: absloute;
            margin: 0 auto;
            width: 100%;
            height: 100%;
            font-size: 20px;
            color: #a2321a;
            font-family: 'Lato', sans-serif;
            overflow-y: scroll;
            -webkit-box-shadow: 10px 7px 20px -6px rgba(0, 0, 0, 0.75);
            -moz-box-shadow: 10px 7px 20px -6px rgba(0, 0, 0, 0.75);
            box-shadow: 10px 7px 20px -6px rgba(0, 0, 0, 0.75);
        }

        .title {
            width: 50%;
            text-align: center;
            float: left;
            font-size: 14px;
            padding: 2px 0 2px 0;

        }

        .dark {
            background: #c2b396;
        }

    </style>
</head>

<body style="background: #c2b396">
    <div style="background: transparent; height: 50px;"></div>
    <div class="userprofile">
        <div>
            <!--wagalisin-->
        </div>
       
        <div class="box1" style="background: #d5d5d5;">
            <div class="parent">
                <img class="image1" src="/images/defaultcbackcolor.jpg" />
                <img class="image2" src="/images/Image/unknownPerson.png" style=" border-radius: 50%; width: 200px; height: 150px;" />
                @foreach($bands as $row)
                <span style="margin-left: 270px; font-size: 26px; ">&nbsp {{$row['bandName']}}</span>
                <div class="text3">&nbsp {{$row['genre']}}</div>
                <div class="text4" style="color: #a2321a; font-size: 28px;">About Us</div>
                <div class="desc">{{$row['bandDescription']}}</div>
                @endforeach

            </div><br><br>
            <div class="bandmember">
                <div>
                    <!--wagalisin-->
                </div>
                <div class="containerreg">
                    <img src="/images/Image/unknownPerson.png" alt="Avatar" class="image">
                    <div class="overlay">
                        <div class="text">Vocalist</div>
                    </div>
                </div>
                <div class="containerreg">
                    <img src="/images/Image/unknownPerson.png" alt="Avatar" class="image">
                    <div class="overlay">
                        <div class="text">Drummer</div>
                    </div>
                </div>
                <div class="containerreg">
                    <img src="/images/Image/unknownPerson.png" alt="Avatar" class="image">
                    <div class="overlay">
                        <div class="text">Electric Guitarist</div>
                    </div>
                </div>
                <div class="containerreg">
                    <img src="/images/Image/unknownPerson.png" alt="Avatar" class="image">
                    <div class="overlay">
                        <div class="text">Bass Guitarist</div>
                    </div>
                </div>
            </div>
            <div style="background: transparent; height: 120px;"></div>


            <!--end-->
            <div class="musicplayer">
                <div>
                    <!--wagalisin-->
                </div>
                <div>
                    <img src="/images/Image/unknownPerson.png" style="width: 100%; height:350px" />
                </div>
                <div>
                    <div class="lyrics">
                        <div style="margin-top: 20px; text-align: center; font-size: 20px; color: #a2321a;">Album Name</div>
                        <div class="block2">
                            <div class="inner">Year</div>
                            <div class="inner">Tracks</div>
                            <div class="inner">Minutes</div>
                        </div><br>
                        <div>
                            <div style="margin-top: 20px; text-align: center; font-size: 20px;">Song Title</div>
                            <div style="height:210px;width:280px;border:1px solid #ccc;font-family: 'Lato', sans-serif;Serif;overflow:auto; padding: 20px; text-align: center;">
                                Mauris ultricies ante ut lectus accumsan sagittis. Maecenas feugiat efficitur turpis, vel dignissim nunc malesuada in. Vestibulum fermentum, elit eu interdum posuere, ex odio maximus ipsum, vitae fermentum sem erat ac massa. Morbi eleifend ut odio id aliquet. Praesent auctor viverra magna, at convallis lacus. Etiam orci diam, tincidunt eu interdum ac, varius ut nunc. Fusce ullamcorper eleifend dui nec porta.

                                Praesent lacinia nec eros at pulvinar. Praesent purus nunc, fringilla sit amet rhoncus eu, mattis et elit. Praesent tempor nunc ut consectetur venenatis. Donec fermentum diam nec dolor consequat ultrices. Proin quis dictum augue. Maecenas rhoncus mi nec rhoncus congue. Nullam at massa et urna auctor accumsan ut at ligula. Duis sit amet nisi quis dui mattis sodales ut nec tortor. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nunc ut dignissim mi, tempus ullamcorper sem.

                                Morbi non est consectetur, commodo elit eu, commodo ex. Nullam eu orci varius, pharetra enim quis, pretium tortor. Proin tincidunt ac arcu ac condimentum. Donec in justo sit amet dui rutrum luctus eget vitae lacus. Suspendisse euismod neque dolor. Quisque tempor leo non eleifend ultricies. Sed tristique tristique fermentum. Etiam elit nulla, pulvinar quis suscipit vitae, molestie dignissim nulla. Donec sagittis ultrices mi. Pellentesque et bibendum ex, in aliquam enim
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="song_list"><br><br><br>
                        <div class="title">Title</div>
                        <div class="title">Minutes</div>
                        <div class="title dark">Title</div>
                        <div class="title dark">Minutes</div>
                        <div class="title">Title</div>
                        <div class="title">Minutes</div>
                        <div class="title dark">Title</div>
                        <div class="title dark">Minutes</div>
                    </div>
                </div>
            </div>
            <h1 style="font-family: 'Lato', sans-serif; font-size: 18px; margin-left: 60px;"> ALBUMS</h1>
            <div class="albumphoto">
                <div>
                    <!--wagtangalindiv-->
                </div>
                <div>
                    <div class="containerreg">
                        <img src="/images/Image/unknownPerson.png" alt="Avatar" class="image">
                        <div class="overlay">
                            <div class="text">ALBUM NAME</div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="containerreg">
                        <img src="/images/Image/unknownPerson.png" alt="Avatar" class="image">
                        <div class="overlay">
                            <div class="text">ALBUM NAME</div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="containerreg">
                        <img src="/images/Image/unknownPerson.png" alt="Avatar" class="image">
                        <div class="overlay">
                            <div class="text">ALBUM NAME</div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="containerreg">
                        <img src="/images/Image/unknownPerson.png" alt="Avatar" class="image">
                        <div class="overlay">
                            <div class="text">ALBUM NAME</div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="containerreg">
                        <img src="/images/Image/unknownPerson.png" alt="Avatar" class="image">
                        <div class="overlay">
                            <div class="text">ALBUM NAME</div>
                        </div>
                    </div>
                </div>
            </div>
            <div style="background: #c2b396; height: 70px;"></div>
        </div>

    </div>

</body>
@endsection
