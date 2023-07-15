@extends('layouts.master')

@section('content')
    <h1>Create New Departement</h1>
     <form action="{{ route('departementStore')}}" method="POST">
        @csrf
<div class="row">
     <div class="col-md-6">
        <div class="form-group">
            <label for="name">Name</label>
             <input type="text" class="form-control" name ="name">
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label for="director_id">Director</label>
            <select name="director_id" class="form-control" >
                <option value="" selected>select a person</option>
                <option value="2">IT director</option>
                <option value="3">IT user</option>
                <option value="4">IT Admin</option>
            </select>
        </div>
    </div>
</div>
   <div class="row">
    <div class="col-md-12">
        <div class="form-group">
            <button type ="submit" class="btn btn-success float-right"> create</button>
    </div>
</div>

   </div>
        
     </form>
  
   
@endsection
