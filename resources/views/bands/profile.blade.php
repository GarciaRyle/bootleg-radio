@extends('layouts.app')

@section('content')

<head>
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Cinzel+Decorative:700" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="/css/profilebands.css">
</head>

<body style="background: #c2b396">

    <div class="box1" style="background: #f1f1f1;">
            <div class="parent">
                <img class="image1" src="/images/defaultcbackcolor.jpg" style="width: 100%; height: 310px;"/>
                @foreach($bands as $row)

                <img src="/uploads/bands/{{ $row['fileUpload'] }}" class="image2" style=" border-radius: 50%; width: 200px; height: 200px;" alt="">
              
                <span style="margin-left: 270px; font-size: 26px; ">&nbsp; {{$row['bandName']}}</span>
                <a href="{{ '/bands/edit/'. $row->id }}" class="btn btn-success" style="margin-left:700px; margin-top: 7px;">Edit</a>
                <div class="text3">&nbsp; {{$row['genre']}}</div>
                
                    <center><div class="text4" style="color: #a2321a; font-size: 28px; margin-left: 0px;">About Us</div>
            <div class="desc" style="margin-left: 70px;">{{$row['bandDescription']}}</div></center>
                @endforeach
                <div> @foreach($bands as $row)
                          

                            @endforeach</div>\
        </div><br><br>

        <script src="https://tympanus.net/Development/Elastislide/js/modernizr.custom.17475.js"></script>
      <!-- Elastislide Carousel -->
            <ul id="carousel" class="elastislide-list">
                <li><a href=""><img src="" style="height: 210px; width: 210px;" alt="" /></a></li>
                
                @foreach($members as $mem)
                <li><a href=""><img src="/uploads/members/{{ $mem['photoUpload'] }}" style="height: 210px; width: 210px;">
              </a></li>
              @endforeach
        

            </ul>
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
                <img src="" style="width: 100%; height:350px" alt=""/>
            </div>
            <div>
                <div class="lyrics">
                    <div style="margin-top: 20px; text-align: center; font-size: 20px; color: #a2321a;"></div>
                    <div class="block2">
                        <div class="inner"></div>
                        <div class="inner"></div>
                        <div class="inner"></div>
                    </div><br>
                    <div>
                        <div style="margin-top: 20px; text-align: center; font-size: 20px;"></div>
                        <div style="height:210px;width:280px;border:1px solid #ccc;font-family: 'Lato', sans-serif;Serif;overflow:auto; padding: 20px; text-align: center;"> </div>
                    </div>
                </div>
            </div>
            <div>
                <div class="song_list"><br><br><br>
                    <div class="title"></div>
                    <div class="title"></div>
                    <div class="title dark"></div>
                    <div class="title dark"></div>
                    <div class="title"></div>
                    <div class="title"></div>
                    <div class="title dark"></div>
                    <div class="title dark"></div>
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
                        <div class="text"></div>
                    </div>
                </div>
            </div>
            <div>
                <div class="containerreg">
                    <img src="/images/Image/unknownPerson.png" alt="Avatar" class="image">
                    <div class="overlay">
                        <div class="text"></div>
                    </div>
                </div>
            </div>
            <div>
                <div class="containerreg">
                    <img src="/images/Image/unknownPerson.png" alt="Avatar" class="image">
                    <div class="overlay">
                        <div class="text"></div>
                    </div>
                </div>
            </div>
            <div>
                <div class="containerreg">
                    <img src="/images/Image/unknownPerson.png" alt="Avatar" class="image">
                    <div class="overlay">
                        <div class="text"></div>
                    </div>
                </div>
            </div>
            <div>
                <div class="containerreg">
                    <img src="/images/Image/unknownPerson.png" alt="Avatar" class="image">
                    <div class="overlay">
                        <div class="text"></div>
                    </div>
                </div>
            </div>
        </div>
        <div style="background: transparent; height: 100px;">
            @foreach($bands as $row)
            <form method="post" class="delete_form" action="{{action('BandRegController@destroy', $row['id'])}}">
                {{csrf_field()}}
                <input type="hidden" name="_method" value="DELETE" /><br><br>
               <center> <button type="submit" class="btn btn-danger">Delete this band</button></center>
            </form>
            @endforeach
        </div>

    </div>
</body>
@endsection
