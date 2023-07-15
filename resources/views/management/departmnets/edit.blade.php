@extends('layouts.master')

@section('content')
    <h1>Update Departement</h1>
     <form action="{{ route('departementUpdate',$departement->id)}}" method="POST">
        @csrf
<div class="row">
     <div class="col-md-6">
        <div class="form-group">
            <label for="name">Name</label>
             <input type="text" class="form-control" name ="name" value="{{$departement->name}}">
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label for="director_id">Director</label>
            <select name="director_id" class="form-control" >
                <option value="" selected>select a person</option>
                <option value="2" @if($departement->director_id == '2') selected @endif >  IT director</option>
                <option value="3" @if($departement->director_id == '3') selected @endif >IT user</option>
                <option value="4" @if($departement->director_id == '4') selected @endif >IT Admin</option>
            </select>
        </div>
    </div>
</div>
   <div class="row">
    <div class="col-md-12">
        <div class="form-group">
            <button type ="submit" class="btn btn-success float-right"> update</button>
    </div>
</div>

   </div>
        
     </form>
  
   
@endsection
