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
</head>
<div class="bg">
    <div class="bandprofile">
        
        <div class="box1">
            <div>
                <br>&nbsp;&nbsp;&nbsp;<img class="img-valign" src="/images/Image/unknownPerson.png" alt="" style="  border-radius: 50%; width: 130px; height: 90px;" />
                @foreach($bands as $row)
                <a href="{{ url('/viewBanduser') }}" span class="text2">&nbsp {{$row['bandName']}}</a></span>

                <div class="text3">&nbsp {{$row['genre']}}</div><br>
                <hr color: #c2b396>
                <div class="desc" >{{$row['bandDescription']}}</div> <br>
               
                @endforeach
                <center>
                    <p style="color: #141311; font-size: 20px; font-family: 'Lato', sans-serif;"> BAND MEMBERS</p>
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
                            <img src="/images/Image/unknownPerson.png"alt="Avatar" class="image">
                            <div class="overlay">
                                <div class="text">Lead Singer</div>
                            </div>
                        </div>
                    </div>
                </div><br>
            <center>
            <a href="{{ 'AddBandMember' }}" class="btn btn-success"> +Add Member</a>
                </center><br>

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
                         
                       
            <div> @foreach($bands as $row)        
                            
                                <a href="{{ '/bands/edit/'. $row->id }}" class="btn btn-warning">Edit</a>
                           
                             @endforeach</div>
                        <div>
                            @foreach($bands as $row)        
                            <form method="post" class="delete_form" action="{{action('BandRegController@destroy', $row['id'])}}">
                                {{csrf_field()}}
                                <input type="hidden" name="_method" value="DELETE" />
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                             @endforeach
                            
                        </div>
                    </div>
                        <script>
$(document).ready(function(){
 $('.delete_form').on('submit', function(){
  if(confirm("Are you sure you want to delete it?"))
  {
   return true;
  }
  else
  {
   return false;
  }
 });
});
</script>
        </div>
                </div>



            </div>

        </div>
   
<!--javascript -->
    <script>
        function toggleSidebar(ref) {
            ref.classList.toggle('active');
            document.getElementById('sidebar').classList.toggle('active');
        }

    </script>
@endsection