@extends('master')

@section('content')
<div class="row">
 <div class="col-md-12">
  <br />
  <h3 aling="center">Add Data</h3>
  <br />
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

  <form method="post" action="{{action('BandRegController@store')}}">
   {{csrf_field()}}
   <div class="form-group">
    <input type="text" name="bandName" class="form-control" placeholder="Enter Band Name:" />
   </div>
   <div class="row">
                                            <div class="col-md-4">
                                                <select class="selectpicker" name="genre" placeholder="Genre"
                                                        data-style="form-control btn-secondary">
                                                    <option value="Indie">Indie</option>
                                                    <option value="Pop">Pop</option>
                                                    <option value="Rock">Rock</option>
                                                </select>
                                            </div>
   <div class="form-group">
    <input type="text" name="bandDescription" class="form-control" placeholder="Enter Band Detail:" />
   </div>
   <div class="form-group">
    <input type="submit" class="btn btn-primary" />
   </div>
  </form>
 </div>
</div>
@endsection
