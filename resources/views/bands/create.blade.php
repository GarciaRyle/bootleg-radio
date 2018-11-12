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
<style>
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
<body>
<div class="bg">
    <section class="form-box" style="">
        <div class="container">

            <div class="row">
                <div class="col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2 col-lg-6 col-lg-offset-3 form-wizard">

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

                    <!-- Form Wizard -->
                    <form role="form" method="post"  action="{{action('BandRegController@store')}}" enctype="multipart/form-data">
                    {{csrf_field()}}
                         <div class="animate six" style=" font-family: 'Cinzel Decorative', cursive;">
                                <span>C</span><span>R</span><span>E</span><span>A</span><span>T</span><span>E</span>&nbsp;<span>A</span>&nbsp;<span> </span><span>B</span><span>A</span><span>N</span><span>D</span></div>
                        <p style="color: #141311; font-size: 20px; font-family: 'Lato', sans-serif;"> Make your voice be heard</p>

                        <!-- Form progress -->
                        <div class="form-wizard-steps form-wizard-tolal-steps-4">
                            <div class="form-wizard-progress">
                                <div class="form-wizard-progress-line" data-now-value="12.25" data-number-of-steps="4" style="width: 12.25%;"></div>
                            </div>
                            <!-- Step 1 -->
                            <div class="form-wizard-step active">
                                <div class="form-wizard-step-icon"><i class="fas fa-info" aria-hidden="true"></i></div>
                                <p>Band Details</p>
                            </div>
                            <!-- Step 1 -->

                            <!-- Step 2 -->
                            <div class="form-wizard-step">
                                <div class="form-wizard-step-icon"><i class="fa fa-user" aria-hidden="true"></i></div>
                                <p>Members</p>
                            </div>
                            <!-- Step 2 -->

                            <!-- Step 3 -->
                            <div class="form-wizard-step">
                                <div class="form-wizard-step-icon"><i class="fas fa-image" aria-hidden="true"></i></div>
                                <p>Albums</p>
                            </div>
                            <!-- Step 3 -->

                            <!-- Step 4 -->
                            <div class="form-wizard-step">
                                <div class="form-wizard-step-icon"><i class="fas fa-music" aria-hidden="true"></i></div>
                                <p> Songs</p>
                            </div>
                            <!-- Step 4 -->
                        </div>
                        <!-- Form progress -->


                        <!-- Form Step 1 -->
                        <fieldset>

                            <h4>Band Information: <span>Step 1 - 4</span></h4>
                            <div class="form-group">
                                <label style="font-family: 'Lato', sans-serif;   color: #141312; font-size: 18px; ">Band Name: <span>*</span></label>
                                <input type="text" name="bandName" placeholder="Band Name" pattern="[a-zA-Z,0-9]{1,20}" class="form-control" value="{{ old('bandName') }}" style="font-family: 'Lato', sans-serif;width: 300px; border-radius: 20px;" maxlength="50">
                            
                            </div>
                                  <div class="form-group">
                                        <label style="font-family: 'Lato', sans-serif;   color: #141312; font-size: 18px;">Band Information: <span>*</span></label> 
                                        <textarea rows="3" cols="50" type="text" name="bandDescription" placeholder="" maxlength="255" class="form-control" style="font-family: 'Lato', sans-serif; font-size: 15px; width: 530px; height: 80px;"></textarea>
                                    </div>
                            <div class="container-fluid">
                                <div class="row form-inline">
                                    <div class="form-group col-md-3 col-xs-3">
                                        <label style="font-family: 'Lato', sans-serif;   color: #141312; font-size: 18px;">Band Genre: </label>
                                    </div>
                                    <div class="form-group col-md-3 col-xs-3" >

                                        <select name="genre" class="form-control" style="font-family: 'Lato', sans-serif;   color: #141312; font-size: 18px; width: 250px; margin-left: -15px">
                                            <option value="Indie">Indie</option>
                                            <option value="Pop">Pop</option>
                                            <option value="Rock">Rock</option>
                                            <option value="Dance">Dance</option>
                                            <option value="Blues">Blues</option>
                                            <option value="Classical">Classical</option>
                                            <option value="Country">Country</option>
                                            <option value="Jazz">Jazz</option>
                                            <option value="R&B">R&B</option>
                                            <option value="Reggae">Reggae</option>
                                            <option value="Rock">Rock</option>
                                            <option value="Others">Others</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        
                            <div class="form-wizard-buttons">
                                <button type="button" class="btn btn-next">Next</button>
                            </div>
                        </fieldset>
                        <!-- Form Step 1 -->

                        <!-- Form Step 2 -->
                        <fieldset>

                            <h4>Member Information : <span>Step 2 - 4</span></h4>
                            <div class="form-group">
                                <label>Name: <span>*</span></label><br>
                                <input type="text" name="memberName[]" placeholder="Member Name" style="width: 530px; height: 40px; border-color: #f2f2f2; border-radius: 5px; ">
                            </div>
                             <div class="form-group">
                                <label>Postition: <span>*</span></label><br>
                                <input type="text" name="position[]" placeholder="Member Position" style="width: 530px; height: 40px; border-color: #f2f2f2; border-radius: 5px;" >
                            </div>
                            <div class="form-group">
                                        <label style="font-family: 'Lato', sans-serif;   color: #141312; font-size: 18px;">Band Information: <span>*</span></label> 
                                        <textarea rows="3" cols="50" type="text" name="bio[]" placeholder="Information" maxlength="255"  style="font-family: 'Lato', sans-serif; font-size: 15px; width: 530px; height: 80px; border-color: #f2f2f2; border-radius: 5px;"></textarea>
                                    </div>
                           

                            <div class="form-wizard-buttons">
                                <button type="button" class="btn btn-previous">Previous</button>
                                <button type="button" class="btn btn-next">Next</button>
                            </div>
                        </fieldset>
                        <!-- Form Step 2 -->

                        <!-- Form Step 3 -->
                        <fieldset>

                            <h4>Album Information: <span>Step 3 - 4</span></h4>
                            <div class="form-group">
                                 <div class="container-fluid">
                                <div class="row form-inline">
                                    <div class="form-group col-md-3 col-xs-3">
                                        <label>Album Type: <span>*</span> </label>
                                    </div>
                                    <div class="form-group col-md-3 col-xs-3">
                                   
                                        <select class="form-control" style="font-family: 'Lato', sans-serif;   color: #141312; font-size: 18px; width: 250px; margin-left: -25px">
                                            <option>Album</option>
                                            <option>Single </option>
                                        </select>
                                    </div>
                                    
                                </div>
                            </div>
                                <label>Album Name: <span>*</span></label><br>
                                <input type="text" name="Employee ID" placeholder="Employee ID" style="width: 530px; height: 40px; border-color: #f2f2f2; border-radius: 5px;">
                           <label>Album Photo: <span>*</span></label>
                           <button class="file-upload" style= "margin-left: 65px; font-size: 14px; margin-left:5px">
                            <input type="file" class="file-input" id="files" style="font-size: 15px;">Album Photo
                        </button>
                                 </div>
                         
                           
                            <br />
                            <div class="form-wizard-buttons">
                                <button type="button" class="btn btn-previous">Previous</button>
                                <button type="button" class="btn btn-next">Next</button>


</div>
                        </fieldset>
                        <!-- Form Step 3 -->

                        <!-- Form Step 4 -->
                        <fieldset>

                            <h4>Song Information: <span>Step 4 - 4</span></h4>
                            <div style="clear:both;"></div>
                            <div class="form-group">
                                <label>Song title: <span>*</span></label><br>
                                <input type="text" name="Member Position" placeholder="Title" style="width: 530px; height: 40px; border-color: #f2f2f2; border-radius: 5px;" >
                            </div>
                            <div class="form-group">
                                <label>Song Lyrics: <span>*</span></label><br>
                                <input type="text" name="Member Position" placeholder="Lyrics" style="width: 530px; height: 40px; border-color: #f2f2f2; border-radius: 5px;" >
                            </div>
                            <label>Upload music: <span>*</span></label>
                           <button class="file-upload" style= "margin-left: 65px; font-size: 14px; margin-left:5px">
                            <input type="file" class="file-input" id="files" style="font-size: 15px;">Album Photo
                        </button>
                           
                           
                            <br />
                    
                            <br />
                            <div class="form-wizard-buttons">
                                <button type="button" class="btn btn-previous">Previous</button>
                                <button type="submit" class="form-group">Submit</button>
                            </div>
                        </fieldset>
                        <!-- Form Step 4 -->

                    </form>
                    <!-- Form Wizard -->
                </div>
            </div>

        </div>
    </section>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.6/js/bootstrap.min.js'></script>



    <script>
        "use strict";

        function scroll_to_class(element_class, removed_height) {
            var scroll_to = $(element_class).offset().top - removed_height;
            if ($(window).scrollTop() != scroll_to) {
                $('.form-wizard').stop().animate({
                    scrollTop: scroll_to
                }, 0);
            }
        }

        function bar_progress(progress_line_object, direction) {
            var number_of_steps = progress_line_object.data('number-of-steps');
            var now_value = progress_line_object.data('now-value');
            var new_value = 0;
            if (direction == 'right') {
                new_value = now_value + (100 / number_of_steps);
            } else if (direction == 'left') {
                new_value = now_value - (100 / number_of_steps);
            }
            progress_line_object.attr('style', 'width: ' + new_value + '%;').data('now-value', new_value);
        }

        jQuery(document).ready(function() {

            /*
                Form
            */
            $('.form-wizard fieldset:first').fadeIn('slow');

            $('.form-wizard .required').on('focus', function() {
                $(this).removeClass('input-error');
            });

            // next step
            $('.form-wizard .btn-next').on('click', function() {
                var parent_fieldset = $(this).parents('fieldset');
                var next_step = true;
                // navigation steps / progress steps
                var current_active_step = $(this).parents('.form-wizard').find('.form-wizard-step.active');
                var progress_line = $(this).parents('.form-wizard').find('.form-wizard-progress-line');

                // fields validation
                parent_fieldset.find('.required').each(function() {
                    if ($(this).val() == "") {

$(this).addClass('input-error');
                        next_step = false;
                    } else {
                        $(this).removeClass('input-error');
                    }
                });
                // fields validation

                if (next_step) {
                    parent_fieldset.fadeOut(400, function() {
                        // change icons
                        current_active_step.removeClass('active').addClass('activated').next().addClass('active');
                        // progress bar
                        bar_progress(progress_line, 'right');
                        // show next step
                        $(this).next().fadeIn();
                        // scroll window to beginning of the form
                        scroll_to_class($('.form-wizard'), 20);
                    });
                }

            });

            // previous step
            $('.form-wizard .btn-previous').on('click', function() {
                // navigation steps / progress steps
                var current_active_step = $(this).parents('.form-wizard').find('.form-wizard-step.active');
                var progress_line = $(this).parents('.form-wizard').find('.form-wizard-progress-line');

                $(this).parents('fieldset').fadeOut(400, function() {
                    // change icons
                    current_active_step.removeClass('active').prev().removeClass('activated').addClass('active');
                    // progress bar
                    bar_progress(progress_line, 'left');
                    // show previous step
                    $(this).prev().fadeIn();
                    // scroll window to beginning of the form
                    scroll_to_class($('.form-wizard'), 20);
                });
            });

            // submit
            $('.form-wizard').on('submit', function(e) {
                
                // fields validation
                $(this).find('.required').each(function() {
                    if ($(this).val() == "") {
                        e.preventDefault();
                        $(this).addClass('input-error');
                    } else {
                        $(this).removeClass('input-error');
                    }
                });
                // fields validation

            });


        });





        // image uploader scripts 

        var $dropzone = $('.image_picker'),
            $droptarget = $('.drop_target'),
            $dropinput = $('#inputFile'),
            $dropimg = $('.image_preview'),
            $remover = $('[data-action="remove_current_image"]');

        $dropzone.on('dragover', function() {
            $droptarget.addClass('dropping');
            return false;
        });

        $dropzone.on('dragend dragleave', function() {
            $droptarget.removeClass('dropping');
            return false;
        });

        $dropzone.on('drop', function(e) {
            $droptarget.removeClass('dropping');
            $droptarget.addClass('dropped');
            $remover.removeClass('disabled');
            e.preventDefault();

            var file = e.originalEvent.dataTransfer.files[0],
                reader = new FileReader();

            reader.onload = function(event) {
                $dropimg.css('background-image', 'url(' + event.target.result + ')');
            };

            console.log(file);
            reader.readAsDataURL(file);

            return false;
        });

        $dropinput.change(function(e) {
            $droptarget.addClass('dropped');
            $remover.removeClass('disabled');
            $('.image_title input').val('');

            var file = $dropinput.get(0).files[0],
                reader = new FileReader();

            reader.onload = function(event) {
                $dropimg.css('background-image', 'url(' + event.target.result + ')');
            }

            reader.readAsDataURL(file);
        });

        $remover.on('click', function() {
            $dropimg.css('background-image', '');
            $droptarget.removeClass('dropped');
            $remover.addClass('disabled');
            $('.image_title input').val('');
        });

        $('.image_title input').blur(function() {
            if ($(this).val() != '') {
                $droptarget.removeClass('dropped');
            }
        });

        // image uploader scripts

    </script>


</div>

</body>

</html>


@endsection