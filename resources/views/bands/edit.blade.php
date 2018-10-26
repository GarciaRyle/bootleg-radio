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
    <link rel="stylesheet" type="text/css" href="/css/bandprofileedit.css">
</head>

<body>
    <div class="bg">
        <form method="post" action="{{ '/bands/update/'. $bands->id }}">
            {{csrf_field()}}
            <div class="bandprofile">

                <div class="box1">

                    <div class="banddes">

                        <div>&nbsp;&nbsp;&nbsp;<img class="img-valign" src="/images/Image/unknownPerson.png" alt="" style="  border-radius: 50%; width: 130px; height: 90px; margin-top: -16px;" /></div>
                        <div>
                            <div class="text2">
                                <input name="bandName" class="text2" value="{{$bands->bandName}}" maxlength="20" placeholder="Band Name:" style="margin-left:122px; margin-top: 28px; width: 300px ; height: 30px" ; />

                            </div>
                        </div>
                        <div><select class="text3" name="genre" placeholder="Genre" data-style="form-control btn-secondary" style="font-family: 'Lato', sans-serif; margin-left:-12px; margin-top: 60px;">
                                <option value="Indie">Indie</option>
                                <option value="Pop">Pop</option>
                                <option value="Rock">Rock</option>
                            </select></div>


                    </div>
                    <hr color: #c2b396>


<<<<<<< HEAD
<<<<<<< HEAD
            </div>
            <hr color: #c2b396>

           
            <br>
            <div class="desc">
                <textarea rows="3" cols="5" type="text" name="bandDescription"  placeholder="Information" maxlength="205" class="form-control required" style="font-family: 'Lato', sans-serif; font-size: 15px; width: 440px;">{{$bands->bandDescription}}</textarea>
=======
                    <br>
                    <div class="desc">
                        <textarea rows="3" cols="5" type="text" name="bandDescription" placeholder="Information" maxlength="205" class="form-control required" style="font-family: 'Lato', sans-serif; font-size: 15px; width: 440px;">{{$bands->bandDescription}}</textarea>
>>>>>>> 20ae95e325ae2615db7c2f7dc8b9b693b11e5d8b
=======

                    <br>
                    <div class="desc">
                        <textarea rows="3" cols="5" type="text" name="bandDescription" placeholder="Information" maxlength="205" class="form-control required" style="font-family: 'Lato', sans-serif; font-size: 15px; width: 440px;">{{$bands->bandDescription}}</textarea>
>>>>>>> 8a8cd6f7439e9b0d3cd54ed885133a842b0f617a

            </div>
            <hr color: #c2b396>

           
            <br>
          

            <center>
                <p style=" color: #141311; font-size: 20px; font-family: 'Lato' , sans-serif;"> BAND MEMBERS</p>
            </center>

            <div class="bandmem">
                <div>
                    <div class="containerreg">
                        <img src="/images/Image/unknownPerson.png" alt="Avatar" class="image">
                        <div class="overlay">
                            <div class="text">Vocalist</div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="containerreg">
                        <img src="/images/Image/unknownPerson.png" alt="Guirtarist" class="image">
                        <div class="overlay">
                            <div class="text">Drummer</div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="containerreg">
                        <img src="/images/Image/unknownPerson.png" alt="Guirtarist" class="image">
                        <div class="overlay">
                            <div class="text">Electric Guitarist</div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="containerreg">
                        <img src="/images/Image/unknownPerson.png" alt="Avatar" class="image">
                        <div class="overlay">
                            <div class="text">Bass Guitarist</div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="containerreg">
                        <img src="/images/Image/unknownPerson.png" alt="Avatar" class="image">
                        <div class="overlay">
                            <div class="text">Lead Singer</div>
                        </div>
                    </div>
                </div>
            </div>


        </div>





        <div class="box2">
            <div class="album">
                <div>
                    <div class="containerreg">
                        <img src="/images/Image/unknownPerson.png" alt="Avatar" class="image">
                        <div class="overlay">
                            <div class="text">Album 1</div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="containerreg">
                        <img src="/images/Image/unknownPerson.png" alt="Avatar" class="image" style="height: 50%;">
                        <div class="overlay">
                            <div class="text">Album 2</div>
                        </div>
                    </div>
                    <h2 style="font-size: 17px; text-align: center; font-family: 'Lato', sans-serif;">ARTIST ALBUM</h2>
                </div>
                <div>
                    <div class="containerreg">
                        <img src="/images/Image/unknownPerson.png" alt="Avatar" class="image">
                        <div class="overlay">
                            <div class="text">Album 3</div>
                        </div>
                    </div>

                    <h2 style="font-size: 17px; text-align: center; font-family: 'Lato', sans-serif;">ARTIST ALBUM</h2>
                </div>

            </div>

            <!--album-->
            <div class="gridcol">
                <div>
                    <label style="color: #a2321a; font-family: 'Lato', sans-serif;">Album Name:</label><br><br>
                    <center>
                        <div contenteditable="true" style="font-family: 'Lato', sans-serif; color: #c2b396; font-size: 19px; background-color: #ffffff; width: 250px; ">
                            I BELONG TO THE ZOO
                        </div>
                    </center>

                    <div class="form-group">
                        <br> <label style="color: #a2321a; font-family: 'Lato', sans-serif;">Single Name:</label><br><br>
                        <center>
                            <div contenteditable="true" style="font-family: 'Lato', sans-serif; color: #c2b396; font-size: 19px; background-color: #ffffff; width: 250px; height: 30px; ">
                                I BELONG TO THE ZOO
                            </div>
                        </center>
                    </div>
                </div>
                <div>
                    <div class="form-group">
                        <div class="form-group">
                            <label style="color: #a2321a; font-family: 'Lato', sans-serif;">Album Photo: </label><br>
                            <center> <br><input type="file" name="pic" accept="image/*" style="font-family: 'Lato', sans-serif;"></center>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-group">
                            <br><label style="color: #a2321a; font-family: 'Lato', sans-serif;">Single Photo: </label> <br>
                            <center> <br><input type="file" name="pic" accept="image/*" style="font-family: 'Lato', sans-serif;"></center>
                        </div>
                    </div>
                    

                    <div class="gridcol">
                        <div></div>
                         <div class="form-group">
                            <input type="submit" class="btn btn-primary" value="Update">
                           </div>   
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>




@endsection
