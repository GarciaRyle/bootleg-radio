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
        .memberphoto {
        margin-top: 30px;
        margin-left: 20px; 
        height: 300px;
        width: 270px;
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
    height: 50px;
  width: 110%;
  max-width: 190px;
  text-align: center;
  color: #141312;
  font-size: 1.2em;
  background: transparent;
  border: 2px solid #141312;
  padding: .85em 1em;
  display: inline;
  -ms-transition: all 0.2s ease;
  -webkit-transition: all 0.2s ease;
  transition: all 0.2s ease;
}
.file-upload:hover {
  background: #c2b396;
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
  font-size:16px;
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
                        <img class="memberphoto" id="image" src="/images/Image/unknownPerson.png" />
                        <form enctype="multipart/form-data" action="/bands.AddBandMember" method="post">
                        <button class="file-upload" style= "margin-left: 65px; font-size: 14px;">
                            <input type="file" class="file-input" id="files" style="font-size: 15px;">Upload Photo
                        </button>
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            </form>
                    </div>

                    <div>
                    <form enctype="multipart/form-data" method='post' action="{{ route('AddBandMemberstore') }}">
                    @csrf
                  
                         <div class="animate six" style=" font-family: 'Cinzel Decorative', cursive; margin-left:110px;">
                                <span>A</span><span>D</span><span>D</span> &nbsp;<span>M</span><span>E</span><span>M</span><span> B</span><span>E</span><span>R</span></div>

   <input type="file" name="photoUpload" style="margin-left:110px;">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                     
                        <br>
                        <label>Band Name</label>
                        <select  name="bandId" style="width: 200px; ">
                        @foreach($bands as $band)
                    <option value="{{ $band->id }}">{{ $band->bandName }}</option>
                        @endforeach
                        </select>
                        <h2 style="font-size: 16px; margin-left: 50px; font-family: 'Cinzel Decorative', cursive; color: #141312"> Name :</h2>
                        <br><br>
                        <input maxlength="20" style="margin-left:100px; margin-top: -48px; width: 250px ; height: 30px;" class="textedit form-control{{ $errors->has('memberName') ? ' is-invalid' : '' }}" name="memberName" required autofocus>
                        <h2 style="font-size: 16px; margin-left: 50px; font-family: 'Cinzel Decorative', cursive; color: #141312"> Position:</h2>
                        <br><br><br>
                        <input maxlength="20" style="margin-left:100px; margin-top: -48px; width: 250px ; height: 30px;" class="textedit form-control{{ $errors->has('position') ? ' is-invalid' : '' }}" name="position" required>
                        <h2 style="font-size: 16px; margin-left: 52px; font-family: 'Cinzel Decorative', cursive; color: #141312"> Bio:</h2>
                <br><br>

                        <textarea rows="3" cols="5" type="text" name="bio" placeholder="Information" maxlength="205" class="form-control required" style="font-family: 'Lato', sans-serif; font-size: 15px; width: 250px; height: 80px; margin-left:100px; margin-top: -48px;; required autofocus "></textarea>
                        <br>

                         <div><button type="submit" class="btn btn-warning" style="margin-left:135px; ">+Add Member</button></div>
                        <br>

</form>




          </div>
                </div>
            </div>
        </div>

        <script>
            document.getElementById("files").onchange = function() {
                var reader = new FileReader();

                reader.onload = function(e) {
                    // get loaded data and render thumbnail.
                    document.getElementById("image").src = e.target.result;
                };

                // read the image file as a data URL.
                reader.readAsDataURL(this.files[0]);
            };

        </script>



    @endsection

