@extends('layouts.app')

@section('content')
<body style="background-image: url('../images/bandprobk.jpg'); background-repeat: no-repeat;" />
<div class="container">
    <div class="row"></div>
    <div class="col-md-10 col-md-offset-1"><br><br>
        <img src="/uploads/avatars/{{ $user->avatar }}" style="width: 150px; height: 150px; float:left; border-radius: 50% ; margin-right: 25px;">
       <br> <h2> {{ $user->name }}'s Profile </h2>
        <form enctype="multipart/form-data" action="/profile" method="POST">
            <label>Update Profile Image</label><br>
            <input type="file" name="avatar">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <input type="submit" class="pull-right btn btn-sm btn-danger" style="float:right;">
        </form>
    </div>
</div>
@endsection
