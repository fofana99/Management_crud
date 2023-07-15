@extends('layouts.master')

@section('content')
    <div class='row'>
        <div class='col-md-6'>
            <h1>Departements</h1>
    </div>
     <div class='col-md-6'>
        <a href="{{route('departementCreate')}}" class="btn btn-dark float mt-2 float-right">
            Create New Departemnt
        </a>
     </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="table-responsive">
                <table class="table table-hover">

                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Director</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($departements as $departement)
                    <tr>
                        <td>{{$loop->index +1}}</td>
                        <td>{{$departement->name}}</td>
                        <td>{{$departement->director_id}}</td>
                        <td>
                            <div class="float-left  mx-1">
                            <a href="{{ route('departementEdit',$departement->id)}}" class="btn btn-success">
                                <i class="fa fa-edit"></i>
                            </a>
                            </div>
                            <div class="float-left  mx-1">
                           <form action="{{route('departementDelete', $departement->id)}}" method="POST">
                            @csrf 
                            <button class="btn btn-danger">
                                <i class="fa fa-trash"></i>

                            </button>
                           </form>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
