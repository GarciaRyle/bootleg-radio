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
    <link rel="stylesheet" type="text/css" href="/css/bandprofile.css">
    <style>
       
    </style>
</head>
<div class="bg">
    <div class="bandprofile">

        <div class="box1">
            <div>
                <br><img class="img-valign" src="/images/Image/unknownPerson.png" alt="" style="margin-left: 20px; margin-top: 10px;border-radius: 50%; width: 120px; height: 110px;" />
                @foreach($bands as $row)
                <a href="{{ url('/viewBanduser') }}" span class="text2">&nbsp {{$row['bandName']}}</a></span>

                <div class="text3">&nbsp; {{$row['genre']}}</div><br>
                <div class="gridcol">
                    <div></div>
                    <div class="gridcol" style="margin-top: -70px; margin-left: 50px;">
                        <div></div>
                        <div> @foreach($bands as $row)
                            <a href="{{ '/bands/edit/'. $row->id }}" class="btn btn-success">Edit</a>

                            @endforeach</div>

                    </div>
                </div>
                <hr color: #c2b396 style="margin-top: -10px;" >
                <div class="desc">{{$row['bandDescription']}}</div> <br>

                @endforeach
                <center>
                    <p style="color: #141311; font-size: 20px; font-family: 'Lato', sans-serif;"> BAND MEMBERS</p>
                </center>


                <script src="https://tympanus.net/Development/Elastislide/js/modernizr.custom.17475.js"></script>
                <!-- Elastislide Carousel -->
                <ul id="carousel" class="elastislide-list">
                     <li><a href=""><img src="/images/Image/addmember.png" style="height: 110px; width: 110px;" alt="" /></a></li>
                     <li><a href=""><img src="/images/Image/addmember.png" style="height: 110px; width: 110px;" alt="" /></a></li>
                     <li><a href=""><img src="/images/Image/addmember.png" style="height: 110px; width: 110px;" alt="" /></a></li>
                     <li><a href=""><img src="/images/Image/addmember.png" style="height: 110px; width: 110px;" alt="" /></a></li>
                     <li><a href=""><img src="/images/Image/addmember.png" style="height: 110px; width: 110px;" alt="" /></a></li>
                     <li><a href=""><img src="/images/Image/addmember.png" style="height: 110px; width: 110px;" alt="" /></a></li>
                     <li><a href=""><img src="/images/Image/addmember.png" style="height: 110px; width: 110px;" alt="" /></a></li>
                     <li><a href=""><img src="/images/Image/addmember.png" style="height: 110px; width: 110px;" alt="" /></a></li>
                     <li><a href=""><img src="/images/Image/addmember.png" style="height: 110px; width: 110px;" alt="" /></a></li>

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

                <script type="text/javascript" src="https://tympanus.net/codrops/adpacks/demoad.js"></script>
                <br>
                <center>
                    <a href="{{ 'AddBandMember' }}" class="btn btn-warning"> +Add Member</a>
                </center> 
            </div>
<br><br>
        </div>
        <div class="box2">

            <div class="album">
                <div>
                    <div class="containerreg">
                        <img src="/images/albumicon.jpg" alt="Album" class="image">
                        <div class="overlay">
                            <div class="text">Album 1</div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="containerreg">
                        <img src="/images/albumicon.jpg" alt="Album" class="image" style="height: 50%;">
                        <div class="overlay">
                            <div class="text">Album 2</div>
                        </div>
                    </div>
                 
                </div>
                <div>
                    <div class="containerreg">
                        <img src="/images/albumicon.jpg" alt="Album" class="image">
                        <div class="overlay">
                            <div class="text">Album 3</div>
                        </div>
                    </div>

                </div>

            </div>

            <!--album-->
            <br><br>
            <div class="gridcol">
                <div>
                    <label style="color: #a2321a; font-family: 'Lato', sans-serif;">Album Name:</label><br><br>
                    <center>
                       <h1></h1>
                    </center>

                    <div class="form-group">
                        <br> <label style="color: #a2321a; font-family: 'Lato', sans-serif;"></label><br><br>
                        <center>
                            <h1></h1>
                        </center>
                    </div>
                </div>
                <div>
                    <div class="form-group">
                        <div class="form-group">
                            <label style="color: #a2321a; font-family: 'Lato', sans-serif;">Single Name: </label><br>
                             <h1></h1><br>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-group">
                            <br><label style="color: #a2321a; font-family: 'Lato', sans-serif;"> </label> <br>
                          <h1></h1><br>
                        </div>
                    </div>
                    <br><br><br><br>
                    <div style="margin-left: 30px;">
                        @foreach($bands as $row)
                        <form method="post" class="delete_form" action="{{action('BandRegController@destroy', $row['id'])}}">
                            {{csrf_field()}}
                            <input type="hidden" name="_method" value="DELETE" />
                            <button type="submit" class="btn btn-danger">Delete this band</button>
                        </form>
                        @endforeach
                    </div><br><br><br>
                    <br><br>
                </div>
            </div>
        </div>
    </div>


    @endsection
