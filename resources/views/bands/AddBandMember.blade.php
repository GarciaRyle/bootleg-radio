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
    <link rel="stylesheet" type="text/css" href="/css/addmember.css">
</head>

<body>
    <div class="bg">
        <div style="height: 70px;"></div>
        <div class="userprofile">
            <div class="box1" style="background: #f4f4f4; border-radius: 10px;">
                <div class="userright">
                    <div></div>
                    <div>
                        <img class="img-valign" src="images/Image/unknownPerson.png" alt="" style=" width: 300px; height: 350px; margin-top: 100px; " /><br>
                    </div>
                    <div>
                         <div class="animate six" style=" font-family: 'Cinzel Decorative', cursive; margin-left:110px;">
                                <span>A</span><span>D</span><span>D</span> &nbsp;<span>M</span><span>E</span><span>M</span><span> B</span><span>E</span><span>R</span></div>

                        <input type="file" name="avatar" style="margin-left:110px;">
                        <br>
                        <h2 style="font-size: 16px; margin-left: 50px; font-family: 'Cinzel Decorative', cursive; color: #141312"> Name :</h2>
                        <br><br>
                        <input maxlength="20" style="margin-left:100px; margin-top: -48px; width: 250px ; height: 30px;" class="textedit form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" required autofocus />
                        <h2 style="font-size: 16px; margin-left: 50px; font-family: 'Cinzel Decorative', cursive; color: #141312"> Position:</h2>
                        <br><br><br>
                        <input maxlength="20" style="margin-left:100px; margin-top: -48px; width: 250px ; height: 30px;" class="textedit form-control{{ $errors->has('position') ? ' is-invalid' : '' }}" name="Position" required autofocus />
                        <h2 style="font-size: 16px; margin-left: 52px; font-family: 'Cinzel Decorative', cursive; color: #141312"> Bio:</h2>
                        <br><br>

                        <textarea rows="3" cols="5" type="text" name="bandDescription" placeholder="Information" maxlength="205" class="form-control required" style="font-family: 'Lato', sans-serif; font-size: 15px; width: 250px; height: 80px; margin-left:100px; margin-top: -48px;; required autofocus "></textarea>
                        <br>
                         <div><a href="" type="submit" class="btn btn-warning" style="margin-left:135px; ">+Add Member</a></div>
                        <br>





                    </div>
                </div>
            </div>
        </div>
    </div>


    @endsection
