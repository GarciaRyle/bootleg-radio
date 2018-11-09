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
    <link rel="stylesheet" type="text/css" href="/css/profile.css">
</head>

<body>
    <div class="bg">
        <div style="height: 110px;"></div>
        <div class="userprofile">
            <div class="box1" style="background: #f4f4f4; border-radius: 10px;">
                <form enctype="multipart/form-data" method='post' action="{{'/update/' . $user->id }}">
                    @csrf
                    <div class="userright">
                        <div></div>
                        <div> <br>

                            <h2 style="font-size: 18px; color: #a2321a"> User Information</h2><br>

                            <h2 style="font-size: 16px; margin-left: 60px; font-family: 'Cinzel Decorative', cursive; color: #141312"> Name :</h2>
                            <br>
                            <input maxlength="35" style="margin-left:122px; margin-top: -48px; width: 250px ; height: 30px;" class="textedit form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{$user->name}}" required autofocus />
                            <br></br>
                            <h2 style="font-size: 16px; margin-left: 60px; font-family: 'Cinzel Decorative', cursive; color: #141312"> Email : </h2>
                            <br>
                            <input maxlength="35" style="margin-left:122px; margin-top: -48px; width: 250px ; height: 30px;" class="textedit form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{$user->email}}" required />

 <img src="/uploads/avatars/{{ $user->avatar }}" style="width: 150px; height: 150px; float:left; border-radius: 50% ; margin-right: 25px;">
                <br>
             
              
                    <label style="color: #141312">Update Profile Image</label><br>
                    <input type="file" name="avatar">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
       

                            <br>
                        </div>
                        <div><br>
                            <h2 style="font-size: 18px; color: #a2321a"> Band you've created</h2><br>
                            <div class="kalhati">
                                <div>
                                    <img class="img-valign" src="/images/Image/unknownPerson.png" alt="" style=" width: 190px; height: 190px;" />
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
                                            <div><button type="submit" class="btn btn-warning">Update Profile</button></div>
                                        </center>
                                        <br>

                                    </div>
                                </div>
                            </div>
                        </div>
                </form>
            </div>
        </div>
    </div>
    <div style="height:30px; background: transparent;"></div>

    @endsection
