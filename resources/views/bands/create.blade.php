@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang=eng>

<head>
    <style>
        .bandregister {
    display: grid;
    grid-template-columns: 50% 35% 22%;
          
}

.bandregister > div {

    background: #d5d5d5;
    align-items: center;
    height: 500px;
    padding: 1em;
}

.bandregister > div:nth-child(odd) {
    background: transparent;

}
        
.containerr {
    width: 100%;
    text-transform: uppercase;
    text-align: center;
    color: #c2b396;

}


.animate {
    font-size: 50px;


}

.animate span {
    display: inline-block;
}



.animate span:nth-of-type(2) {
    animation-delay: .05s;
}

.animate span:nth-of-type(3) {
    animation-delay: .1s;
}

.animate span:nth-of-type(4) {
    animation-delay: .15s;
}

.animate span:nth-of-type(5) {
    animation-delay: .2s;
}

.animate span:nth-of-type(6) {
    animation-delay: .25s;
}

.animate span:nth-of-type(7) {
    animation-delay: .3s;
}

.animate span:nth-of-type(8) {
    animation-delay: .35s;
}

.animate span:nth-of-type(9) {
    animation-delay: .4s;
}

.animate span:nth-of-type(10) {
    animation-delay: .45s;
}

.animate span:nth-of-type(11) {
    animation-delay: .5s;
}

.animate span:nth-of-type(12) {
    animation-delay: .55s;
}

.animate span:nth-of-type(13) {
    animation-delay: .6s;
}

.animate span:nth-of-type(14) {
    animation-delay: .65s;
}

.animate span:nth-of-type(15) {
    animation-delay: .7s;
}

.animate span:nth-of-type(16) {
    animation-delay: .75s;
}

.animate span:nth-of-type(17) {
    animation-delay: .8s;
}

.animate span:nth-of-type(18) {
    animation-delay: .85s;
}

.animate span:nth-of-type(19) {
    animation-delay: .9s;
}

.animate span:nth-of-type(20) {
    animation-delay: .95s;
}

.six span {
    color: rgba(234, 40, 3, 0.8);
    opacity: 0;
    font-family: 'Cinzel Decorative', cursive;
    font-size: 26px;
    transform: rotate(-180deg) translate(150px, 0);
    animation: twister .5s forwards;

}


@keyframes twister {
    10% {
        opacity: 1;
    }

    100% {
        transform: rotate(0deg) translate(0);
        opacity: 1;
    }
}

</style>
</head>

<body style="background-image: url('../images/bandregbk.jpg'); background-repeat: no-repeat;" />


<div style="height: 50px; backgrounda-color: #141311;"></div>
<div class="bandregister">
    <div></div>
    <div>
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
                        <input type="text" name="bandName" placeholder="Band Name" class="form-control required" style="font-family: 'Lato', sans-serif;width: 300px; border-radius: 20px;" maxlength="50">
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
                        <textarea rows="3" cols="50" type="text" name="bandDescription" placeholder="Information" maxlength="255" class="form-control required" style="font-family: 'Lato', sans-serif; font-size: 15px; width: 300px; border-radius: 20px;"></textarea>
                        
                    </div>
                </center>

                <div class="form-group">
                    <button type="submit" style="height: 50px; width:450px; background-color: #a2321a; font-family: 'Lato', sans-serif; font-siz: 18px;">FINISH</button>
                </div>
            </form>


        </div>
    </div>
</div>
<div>




    <div id="toggle-btn" onclick="toggleSidebar(this)">
        <span></span>
        <span></span>
        <span></span>
    </div>

    <!--javascript -->
    <script>
        function toggleSidebar(ref) {
            ref.classList.toggle('active');
            document.getElementById('sidebar').classList.toggle('active');
        }

    </script>








</div>
@endsection
