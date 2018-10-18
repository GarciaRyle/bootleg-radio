@extends('master')

@section('content')

<div class="row">
 <div class="col-md-12">
  <br />
  <h3>Edit Record</h3>
  <br />
  @if(count($errors) > 0)

  <div class="alert alert-danger">
         <ul>
         @foreach($errors->all() as $error)
          <li>{{$error}}</li>
         @endforeach
         </ul>
  @endif
  <form method="post" action="{{ '/bands/update/'. $bands->id }}">
   {{csrf_field()}}
   
   
   
   <div class="form-group">
    <input type="text" name="bandName" class="form-control" value="{{$bands->bandName}}" placeholder="Band Name:" />
   </div>
   <div class="col-md-4">
   <select class="selectpicker" name="genre" placeholder="Genre"
                                                        data-style="form-control btn-secondary" style="font-family: 'Lato', sans-serif;">
                                                        <option value="Indie">Indie</option>
                                                    <option value="Pop">Pop</option>
                                                    <option value="Rock">Rock</option>
                                                </select>
   </div>
   <br>
   <br>
   <div class="form-group">
    <input type="text" name="bandDescription" class="form-control" value="{{$bands->bandDescription}}" placeholder="Band Description:" />
   </div>
   <div class="form-group">
    <input type="submit" class="btn btn-primary" value="Update">
   </div>
  </form>
 </div>
</div>

@endsection
    
    