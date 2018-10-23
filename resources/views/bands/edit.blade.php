@extends('layouts.app')

@section('content')

<head>
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Cinzel+Decorative:700" rel="stylesheet">
    <style>
        .album {
    display: grid;
    grid-template-columns: 40% 30% 30%;
    align-items: stretch;
    align-items: stretch;
}

.album > div {
    background: #d5d5d5;
}

.bandmem > .box3:nth-child(odd) {
    background: #d5d5d6;
}


.bandmem {
    display: grid;
    grid-template-columns: 20% 20% 20% 20% 20%;
    align-items: stretch;
    align-items: stretch;
}

.bandmem > div {
    background: #d5d5d5;
}

.bandmem > .box3:nth-child(odd) {
    background: #d5d5d6;
}

.bandprofile1 {
    display: grid;
    grid-template-columns: 5% 45% 5% 40% 5%;
    grid-auto-rows: 50px 80% 50px;
    align-items: stretch;
    align-items: stretch;
}

.bandprofile1 > div {
    background: transparent;
}

.bandprofile1 > .box3:nth-child(odd) {
    background: transparent;
}

.box1 {
    grid-column: 2/3;
    grid-row: 2/3;
}

.box2 {
    grid-column: 4/5;
    grid-row: 2/3;
}

.bandprofile {
    display: grid;
    grid-template-columns: 5% 45% 5% 40% 5%;
    grid-auto-rows: 50px 80% 50px;
    align-items: stretch;
    align-items: stretch;
}

.bandprofile > div {
    background: #d5d5d5;
}

.bandprofile > .box3:nth-child(odd) {
    background: #d5d5d6;
}

.box1 {
    grid-column: 2/3;
    grid-row: 2/3;
}

.box2 {
    grid-column: 4/5;
    grid-row: 2/3;
}


.img-valign {
    vertical-align: middle;
    margin-bottom: 0.5em;
}

.text2 {
    font-size: 26px;
    font-family: 'Cinzel Decorative', cursive;
}

.text3 {
    font-size: 16px;
    font-family: 'Lato', sans-serif;
    margin-top: -43px;
    margin-left: 153px;
}

.desc {
    margin-left: 70px;
    margin-right: 70px;
    font-family: 'Lato', sans-serif;
    font-size: 16px;
    padding: 10px;
    border: 3px;
    border-style: double;
    border-color: #a2321a;
    color: #141312;
    padding: 1em;
    text-align: center;
}

.containerreg {
    position: relative;
    width: 100%;
    padding: 10px;
}

.image {
    display: block;
    width: 100%;
    height: auto;
}

.overlay {
    position: absolute;
    bottom: 100%;
    left: 0;
    right: 0;
    background-color: transparent;
    overflow: hidden;
    width: 100%;
    height: 0;
    transition: .5s ease;
    
}

.containerreg:hover .overlay {
    bottom: 0;
    height: 100%;
}

.text {
    color: white;
    font-size: 17px;
    font-family: 'Lato', sans-serif;
    position: absolute;
    top: 50%;
    left: 50%;
    -webkit-transform: translate(-50%, -50%);
    -ms-transform: translate(-50%, -50%);
    transform: translate(-50%, -50%);
    text-align: center;
}

hr {
    display: block;
    border: 0;
    border-top: solid #c2b396;
    padding: 0;
    }
    .gridcol {
    display: grid;
    grid-template-columns: 50% 50%;
}

.gridcol > div {
    background: transparent;
    padding: 1em;
}

.gridcol > div:nth-child(odd) {
    background: transparent;
}
.banddes {
        
display: grid;
grid-template-columns: 10px 22% 10px 45% ;
grid-auto-rows: 100px;
}
.banddes > div {
background: transparent;
 padding: 1em;
}

.banddes > div:nth-child(odd) {
background: transparent;
}
</style>
</head>
<form method="post" action="{{ '/bands/update/'. $bands->id }}">
    {{csrf_field()}}
    <div class="bandprofile">

        <div class="box1">

            <div class="banddes">

                <div>&nbsp;&nbsp;&nbsp;<img class="img-valign" src="/images/Image/trialpic.jpg" alt="" style="  border-radius: 50%; width: 130px; height: 90px; margin-top: -16px;" /></div>
                <div>
                    <div class="text2">
                        <input name="bandName" class="text2" value="{{$bands->bandName}}" maxlength="20"  placeholder="Band Name:" style="margin-left:122px; margin-top: 28px; width: 300px ; height: 30px";/>
                      
                    </div>
                </div>
                <div><select class="text3" name="genre" placeholder="Genre" data-style="form-control btn-secondary" style="font-family: 'Lato', sans-serif; margin-left:-12px; margin-top: 60px;">
                        <option value="Indie">Indie</option>
                        <option value="Pop">Pop</option>
                        <option value="Rock">Rock</option>
                    </select></div>


            </div>
            <hr color: #c2b396>

           
            <br>
            <div class="desc">
                <textarea rows="3" cols="5" type="text" name="bandDescription" placeholder="Information" maxlength="205" class="form-control required" style="font-family: 'Lato', sans-serif; font-size: 15px; width: 440px; value="{{$bands->bandDescription}}"></textarea>

            </div>

            <center>
                <p style="color: #141311; font-size: 20px; font-family: 'Lato', sans-serif;"> BAND MEMBERS</p>
            </center>

            <div class="bandmem">
                <div>
                    <div class="containerreg">
                        <img src="/images/Image/vocalist.jpg" alt="Avatar" class="image">
                        <div class="overlay">
                            <div class="text">Vocalist</div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="containerreg">
                        <img src="/images/Image/drum.jpg" alt="Guirtarist" class="image">
                        <div class="overlay">
                            <div class="text">Drummer</div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="containerreg">
                        <img src="/images/Image/guitarist.jpg" alt="Guirtarist" class="image">
                        <div class="overlay">
                            <div class="text">Electric Guitarist</div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="containerreg">
                        <img src="/images/Image/bass.jpg" alt="Avatar" class="image">
                        <div class="overlay">
                            <div class="text">Bass Guitarist</div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="containerreg">
                        <img src="/images/Image/lead.jpg" alt="Avatar" class="image">
                        <div class="overlay">
                            <div class="text">Lead Singer</div>
                        </div>
                    </div>
                </div>
            </div>


        </div>





        <div class="box2">
            <div class="album">
                <div>
                    <div class="containerreg">
                        <img src="/images/Image/album1.jpg" alt="Avatar" class="image">
                        <div class="overlay">
                            <div class="text">Album 1</div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="containerreg">
                        <img src="/images/Image/album2.jpg" alt="Avatar" class="image" style="height: 50%;">
                        <div class="overlay">
                            <div class="text">Album 2</div>
                        </div>
                    </div>
                    <h2 style="font-size: 17px; text-align: center; font-family: 'Lato', sans-serif;">ARTIST ALBUM</h2>
                </div>
                <div>
                    <div class="containerreg">
                        <img src="/images/Image/album3.jpg" alt="Avatar" class="image">
                        <div class="overlay">
                            <div class="text">Album 3</div>
                        </div>
                    </div>

                    <h2 style="font-size: 17px; text-align: center; font-family: 'Lato', sans-serif;">ARTIST ALBUM</h2>
                </div>

            </div>

            <!--album-->
            <div class="gridcol">
                <div>
                    <label style="color: #a2321a; font-family: 'Lato', sans-serif;">Album Name:</label><br><br>
                    <center>
                        <div contenteditable="true" style="font-family: 'Lato', sans-serif; color: #c2b396; font-size: 19px; background-color: #ffffff; width: 250px; ">
                            I BELONG TO THE ZOO
                        </div>
                    </center>

                    <div class="form-group">
                        <br> <label style="color: #a2321a; font-family: 'Lato', sans-serif;">Single Name:</label><br><br>
                        <center>
                            <div contenteditable="true" style="font-family: 'Lato', sans-serif; color: #c2b396; font-size: 19px; background-color: #ffffff; width: 250px; height: 30px; ">
                                I BELONG TO THE ZOO
                            </div>
                        </center>
                    </div>
                </div>
                <div>
                    <div class="form-group">
                        <div class="form-group">
                            <label style="color: #a2321a; font-family: 'Lato', sans-serif;">Album Photo: </label><br>
                            <center> <br><input type="file" name="pic" accept="image/*" style="font-family: 'Lato', sans-serif;"></center>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-group">
                            <br><label style="color: #a2321a; font-family: 'Lato', sans-serif;">Single Photo: </label> <br>
                            <center> <br><input type="file" name="pic" accept="image/*" style="font-family: 'Lato', sans-serif;"></center>
                        </div>
                    </div>
                    

                    <div class="gridcol">
                        <div></div>
                         <div class="form-group">
                            <input type="submit" class="btn btn-primary" value="Update">
                           </div>   
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>




@endsection
