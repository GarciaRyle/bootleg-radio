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
    <link rel="stylesheet" type="text/css" href="/css/bandscreate.css">
</head>


<body>

    <div class="bg">
        <div style="height: 50px; background: transparent;"></div>
        <div class="userprofile">
            <div></div>
            <div>
                <div class="userright">
                    <div></div>
                    <div style="background: #f1f1f1;">
                        <div class="containerr" style=" font-family: 'Cinzel Decorative', cursive;">
                            <div class="animate six" style=" font-family: 'Cinzel Decorative', cursive;">
                                <span>C</span><span>R</span><span>E</span><span>A</span><span>T</span><span>E</span>&nbsp<span>A</span>&nbsp<span> </span><span>B</span><span>A</span><span>N</span><span>D</span></div>

                            <p style="color: #141311; font-size: 20px; font-family: 'Lato', sans-serif;"> Make your voice be heard</p>


                            @if(count($errors) > 0)
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach($errors->all() as $error)
                                    <li>{{$error}}</li>
                                    @endforeach
                                </ul>
                            </div>
                            @endif
                            @if(\Session::has('success'))
                            <div class="alert alert-success">
                                <p>{{ \Session::get('success') }}</p>
                            </div>
                            @endif
                            <form method="post" action="{{action('BandRegController@store')}}" enctype="multipart/form-data">
                                {{csrf_field()}}
                                <center>
                                    <div class="form-group">
                                        <label style="color: #a2321a; font-family: 'Lato', sans-serif;">Band Name:</label> <br><br>
                                        <input type="text" name="bandName" placeholder="Band Name" class="form-control required" value="{{ old('bandName') }}" style="font-family: 'Lato', sans-serif;width: 300px; border-radius: 20px;" maxlength="50">
                            
                                    </div>
                                </center>
                                <center><label style="font-family: 'Lato', sans-serif;   color: #a2321a ">Genre:</label></center> <br>


                                <select class="selectpicker" name="genre" placeholder="Genre" data-style="form-control btn-secondary" style="font-family: 'Lato', sans-serif; width: 300px; border-radius: 20px; height: 30px; font-size: 16px; ">
                                    <option value="Indie">Indie</option>
                                    <option value="Pop">Pop</option>
                                    <option value="Rock">Rock</option>

                                </select>
                                <center>
                                    <div class="form-group"><br>
                                        <label style="font-family: 'Lato', sans-serif;   color: #a2321a ">Band Information:</label> <br><br>
                                        <textarea rows="3" cols="50" type="text" name="bandDescription" placeholder="Information" maxlength="255" class="form-control required" style="font-family: 'Lato', sans-serif; font-size: 15px; width: 300px; border-radius: 20px;">{{ old('bandDescription') }}</textarea>
                                  
                                    </div>
                                </center>

                                <div class="form-group">
                                    <button type="submit" style="height: 50px; width:450px; background-color: #a2321a; font-family: 'Lato', sans-serif; font-siz: 18px; border-radius: 20px;">FINISH</button>
                                </div>
                            </form>

                        </div>

                    </div>
                </div>
            </div>
        </div>

<<<<<<< HEAD
        @endsection

=======
        @endsection
>>>>>>> 8a8cd6f7439e9b0d3cd54ed885133a842b0f617a
