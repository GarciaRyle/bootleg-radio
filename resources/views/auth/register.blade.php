@extends('layouts.app')
@section('content')
<!DOCTYPE html>
<html lang=eng>

<head>
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Cinzel+Decorative:700" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="/css/register.css">
    <style>/*registration form*/


    </style>
</head>

<body style="background: #bfa872" />

<!-- register -->
<div class="registerform">
    <form method="POST" action="{{ route('register') }}">
        @csrf
        <div class="box1"> <img src="images/logo.png" style="height: 400px; width: 400px; margin-left: 250px; margin-top: 90px;"></div>



        <div class="containerko">

            <div class="centered">
                <center>
                    <div class="containerr" style=" font-family: 'Cinzel Decorative', cursive;">
                        <div class="animate six" style=" font-family: 'Cinzel Decorative', cursive;">
                            <span>R</span><span>E</span><span>G</span><span>I</span><span>S</span><span>T</span><span>E</span><span>R</span>&nbsp;<span>N</span><span>O</span><span>W</span></div>
                    </div>

                    <input id="name" type="text" placeholder="Name" style="width: 70%; height: 40px; padding: 15px; margin-left: 50px 0 22px 0; border-radius: 15px;" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus> <br>

                    @if ($errors->has('name'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('name') }}</strong>
                    </span>
                    @endif



                    <input id="email" type="email" placeholder="E-mail" style="width: 70%; height: 40px; padding: 15px; margin: 5px 0 22px 0; border-radius: 15px;" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                    @if ($errors->has('email'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                    @endif



                    <input id="password" placeholder="Enter Password" type="password" style="width: 70%; height: 40px; padding: 15px; margin: 5px 0 22px 0; border-radius: 15px;" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required> 

                    @if ($errors->has('password'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                    @endif


                    <input id="password-confirm" placeholder="Re-enter Password" type="password" style="width: 70%; height: 40px; padding: 15px; margin: 5px 0 22px 0; border-radius: 15px;" class="form-control" name="password_confirmation" required> <br>

                    <div class="clearfix">

                        <button type="submit" class="signupbtn" style="background-color: #4cb433; width: 150px; height: 50px; border-radius: 20px;">Sign Up</button>
                    </div>
                    <br>
                </center>
            </div>
        </div>

        @endsection
