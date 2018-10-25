@extends('layouts.app')

@section('content')<!DOCTYPE html>
<html lang=eng>

<head>
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Cinzel+Decorative:700" rel="stylesheet">
<style>/*registration form*/
.registerform {
    display: grid;
    grid-template-columns: 50% 5% 2fr 7%;
    grid-auto-rows: 90px 410px;
    align-items: stretch;
    align-items: stretch;
}

.registerform > div {
    background: transparent;
}

.registerform > .box3:nth-child(odd) {
    background: transparent;
}

.box1 {
    grid-column: 1/3;
    grid-row: 1/5;
}

.box2 {
    grid-row: 3/5;
}

.box3 {
    grid-column: 3/4;
    grid-row: 2/3;
}

.containerko {
    margin-left: 190px;
    text-align: center;
    color: white;
}

.centered {
    position: absolute;
    top: 47%;
    left: 50%;
    transform: translate(-50%, -50%);
}


    </style>
</head>

<body style="background-image: url(images/Image/background.jpg); background-size: cover;" />
   
<!-- register -->
<div>

                        <form method='post' action="{{'/update/' . $user->id }}" >
        @csrf
                        <div class="box1"> <img src="images/Image/reg.png"></div>
                      
                      
                      
                        <div class="containerko">
                    
                        <div class="centered">
                        <div class="containerr" style=" font-family: 'Cinzel Decorative', cursive;">
                        <div class="animate six" style=" font-family: 'Cinzel Decorative', cursive;">
                            <span>E</span><span>D</span><span>I</span><span>T</span><span></span>&nbsp<span>U</span><span>S</span><span>E</span><span>R</span></div>
                    </div>
                      
                                <input id="name" type="text" placeholder="Name" style="width: 105%; height: 40px; padding: 15px; margin-left: 50px 0 22px 0;" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{$user->name}}" required autofocus> <br>

                               
                           

                 
                                <input id="email" type="email" placeholder="E-mail" style="width: 105%; height: 40px; padding: 15px; margin: 5px 0 22px 0;" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{$user->email}}" required> <br>

                               

                    
                                <input id="password" placeholder="Enter Password" type="password" style="width: 105%; height: 40px; padding: 15px; margin: 5px 0 22px 0;" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" hidden="true" value="{{$user->password}}" required> <br>



                           
                            <button type="submit" class="signupbtn" style="background-color: #4cb433;">UPDATE PROFILE</button>
                </div>
                       
         </div>     </div>

    @endsection