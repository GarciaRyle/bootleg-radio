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
    <style>
        body {
  text-align: center;
  background: #111A23;
}

.containers {
  height: 300px;
  position: relative;
  max-width: 320px;
  margin: auto;
}
.containers .imageWrapper {
  border: 3px solid #888;
  width: 100%;
    height: 100%;
  padding-bottom: 70%;
  overflow: hidden;
  position: absolute;
  top: 65%;
  left: 60%;
  transform: translate(-50%, -50%);
}
.containers .imageWrapper img {
  height: 110%;
  width: initial;
  max-height: 100%;
  max-width: initial;
  position: absolute;
  top: 60%;
  left: 50%;
  transform: translate(-50%, -50%);
}

.file-upload {
  position: relative;
  overflow: hidden;
  margin: 10px;
}

.file-upload {
  position: relative;
  overflow: hidden;
  margin: 10px;
  width: 100%;
  max-width: 150px;
  text-align: center;
  color: #fff;
    top: 50px;
    left: 25px;
  font-size: 16px;
  background: transparent;
  border: 2px solid #888;
  padding: .85em 1em;
  display: inline;
  -ms-transition: all 0.2s ease;
  -webkit-transition: all 0.2s ease;
  transition: all 0.2s ease;
}
.file-upload:hover {
  background: #999;
  -webkit-box-shadow: 0px 0px 10px 0px rgba(255, 255, 255, 0.75);
  -moz-box-shadow: 0px 0px 10px 0px rgba(255, 255, 255, 0.75);
  box-shadow: 0px 0px 10px 0px rgba(255, 255, 255, 0.75);
}

.file-upload input.file-input {
  position: absolute;
  top: 0;
  right: 0;
  margin: 0;
  padding: 0;
  font-size: 12px;
  cursor: pointer;
  opacity: 0;
  filter: alpha(opacity=0);
  height: 100%;
}

    </style>
</head>

<body>
    <div class="bg">
        <div style="height: 70px;"></div>
        <div class="userprofile">
            <div class="box1" style="background: #f4f4f4; border-radius: 10px;">
                <div class="userright">
                    <div></div>
                    <div>
                        <div class="containers">
                            <div class="imageWrapper">
                                <img class="image" src="">
                            </div>
                        </div>
                        <button class="file-upload" style="font-size: 15px;">
                            <input type="file" class="file-input">Upload
                        </button>
                    </div>

                    <div>
                        <Br>
                        <div class="animate six" style=" font-family: 'Cinzel Decorative', cursive; margin-left:110px;">
                            <span>A</span><span>D</span><span>D</span> &nbsp;<span>M</span><span>E</span><span>M</span><span> B</span><span>E</span><span>R</span></div>
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
    <script>
        $('.file-input').change(function() {
            var curElement = $(this).parent().parent().find('.image');
            console.log(curElement);
            var reader = new FileReader();

            reader.onload = function(e) {
                // get loaded data and render thumbnail.
                curElement.attr('src', e.target.result);
            };

            // read the image file as a data URL.
            reader.readAsDataURL(this.files[0]);
        });

    </script>


    @endsection
