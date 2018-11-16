@extends('layouts.app')

@section('content')

<head>
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Cinzel+Decorative:700" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="/css/profilebands.css">
</head>

<body style="background: #c2b396">

        <div>
            <!--wagalisin-->
        </div>

        <div class="box1" style="background: #f1f1f1;">
            <div class="parent">
                <form method="post" action="{{ '/bands/update/'. $bands->id }}">
                    {{csrf_field()}}
                    <img class="image1" src="/images/defaultcbackcolor.jpg" style="width: 100%; height: 310px;" />
                    <img class="image2" src="/images/Image/unknownPerson.png" style=" border-radius: 50%; width: 200px; height: 200px;" />

                    <span class="text2" style="margin-left: 270px; font-size: 26px;">
                        <input name="bandName" pattern="[a-zA-Z,0-9_]{1,20}" oninvalid="setCustomValidity('Invalid Name. Allowed characters include A-z and 0-9. ')" onchange="try{setCustomValidity('')}catch(e){}" class="text2" value="{{$bands->bandName}}" maxlength="20" placeholder="Band Name:" />
                    </span>
                    <div class="text3" style="margin-top: -35px; margin-left: 1100px;">
                        <input type="submit" class="btn btn-primary" value="Update" style="font-family: 'Cinzel Decorative', cursive;">
                        
                    </div>
                    <div class="text3"><select style="margin-top: 10px; margin-left: -10px;" name="genre" placeholder="Genre" data-style="form-control btn-secondary">
                            <option value="Indie">Indie</option>
                            <option value="Pop">Pop</option>
                            <option value="Rock">Rock</option>
                            <option value="Dance">Dance</option>
                            <option value="Blues">Blues</option>
                            <option value="Classical">Classical</option>
                            <option value="Country">Country</option>
                            <option value="Jazz">Jazz</option>
                            <option value="R&B">R&B</option>
                            <option value="Reggae">Reggae</option>
                            <option value="Rock">Rock</option>
                        </select></div>
                        <div class="text4" style="color: #a2321a; font-size: 28px; margin-left: 590px;">About Us</div>
                        <div class="desc">
                        <textarea rows="3" cols="5" type="text" name="bandDescription" placeholder="Information" maxlength="205" class="form-control required" style="font-family: 'Lato', sans-serif; font-size: 15px; width: 600px; height: 100px; margin-left: 70px;">{{$bands->bandDescription}}</textarea>
                    </div>
                </form>
            </div>
            <br><br>

            <script src="https://tympanus.net/Development/Elastislide/js/modernizr.custom.17475.js"></script>
            <!-- Elastislide Carousel -->
            <ul id="carousel" class="elastislide-list">
                <li><a href=""><img src="" style="height: 210px; width: 210px;" alt="" /></a></li>
                <li><a href=""><img src="" style="height: 210px; width: 210px;" alt="" /></a></li>
                <li><a href=""><img src="" style="height: 210px; width: 210px;" alt="" /></a></li>
                <li><a href=""><img src="" style="height: 210px; width: 210px;" alt="" /></a></li>
                <li><a href=""><img src="" style="height: 210px; width: 210px;" alt="" /></a></li>
                <li><a href=""><img src="" style="height: 210px; width: 210px;" alt="" /></a></li>
                <li><a href=""><img src="" style="height: 210px; width: 210px;" alt="" /></a></li>
                <li><a href=""><img src="" style="height: 210px; width: 210px;" alt="" /></a></li>
                <li><a href=""><img src="" style="height: 210px; width: 210px;" alt="" /></a></li>
                <li><a href=""><img src="" style="height: 210px; width: 210px;" alt="" /></a></li>
                <li><a href=""><img src="" style="height: 210px; width: 210px;" alt="" /></a></li>
                <li><a href=""><img src="" style="height: 210px; width: 210px;" alt="" /></a></li>
                <li><a href=""><img src="" style="height: 210px; width: 210px;" alt="" /></a></li>
                <li><a href=""><img src="" style="height: 210px; width: 210px;" alt="" /></a></li>
                <li><a href=""><img src="" style="height: 210px; width: 210px;" alt="" /></a></li>
                <li><a href=""><img src="" style="height: 210px; width: 210px;" alt="" /></a></li>
                <li><a href=""><img src="" style="height: 210px; width: 210px;" alt="" /></a></li>
                <li><a href=""><img src="" style="height: 210px; width: 210px;" alt="" /></a></li>
                <li><a href=""><img src="" style="height: 210px; width: 210px;" alt="" /></a></li>
                <li><a href=""><img src="" style="height: 210px; width: 210px;" alt="" /></a></li>
            </ul>
            <br><br>
            <center>
                <a href="{{ '../../AddBandMember' }}" class="btn btn-warning"> +Add Member</a>
            </center>
            <!-- End Elastislide Carousel -->

            <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
            <script type="text/javascript" src="https://tympanus.net/Development/Elastislide/js/jquerypp.custom.js"></script>
            <script type="text/javascript" src="https://tympanus.net/Development/Elastislide/js/jquery.elastislide.js"></script>
            <script type="text/javascript">
                $('#carousel').elastislide({
                    minItems: 2
                });

            </script>
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
            <div style="background: transparent; height: 70px;"></div>
        </div>



</body>
@endsection
