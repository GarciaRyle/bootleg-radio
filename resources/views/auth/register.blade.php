@extends('layouts.app')

@section('content')
<!DOCTYPE html>
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
<div class="registerform">
    <form method="POST" action="{{ route('register') }}">
        @csrf
        <div class="box1"> <img src="images/Image/reg.png"></div>



        <div class="containerko">

            <div class="centered">
                <div class="containerr" style=" font-family: 'Cinzel Decorative', cursive;">
                    <div class="animate six" style=" font-family: 'Cinzel Decorative', cursive;">
                        <span>R</span><span>E</span><span>G</span><span>I</span><span>S</span><span>T</span><span>E</span><span>R</span>&nbsp<span>N</span><span>O</span><span>W</span></div>
                </div>

                <input id="name" type="text" placeholder="Name" style="width: 105%; height: 40px; padding: 15px; margin-left: 50px 0 22px 0;" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus> <br>

                @if ($errors->has('name'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('name') }}</strong>
                </span>
                @endif



                <input id="email" type="email" placeholder="E-mail" style="width: 105%; height: 40px; padding: 15px; margin: 5px 0 22px 0;" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required> <br>

                @if ($errors->has('email'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
                @endif



                <input id="password" placeholder="Enter Password" type="password" style="width: 105%; height: 40px; padding: 15px; margin: 5px 0 22px 0;" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required> <br>

                @if ($errors->has('password'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
                @endif


                <input id="password-confirm" placeholder="Re-enter Password" type="password" style="width: 105%; height: 40px; padding: 15px; margin: 5px 0 22px 0;" class="form-control" name="password_confirmation" required> <br>

                <div class="clearfix">

                    <button type="submit" class="signupbtn" style="background-color: #4cb433;">Sign Up</button>
                </div>

            </div>
        </div>

        @endsection