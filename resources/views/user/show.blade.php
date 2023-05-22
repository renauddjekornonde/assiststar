@extends('layoutAdmin.app')
@section('content')
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li  class="list-group-item">{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif

    @if (Session::has('success'))
        <div class="alert alert-success">
            {{Session::get('success')}}
        </div>
    @endif

    <div class="recents-grids">
            <div class="projects">
                <div class="card">
                    <div class="card-body">

                        <div class="table-responsive">
                            <table width="100%">
                                <thead>
                                    <tr>
                                        <td>Id</td>
                                        <td>Nom</td>
                                        <td>Email</td>
                                        {{-- <td>Password</td>
                                        <td>Date</td> --}}

                                    </tr>
                                </thead>
                                
                                    <tbody>
                                    <tr>
                                        <td><h6>{{$user->id}}</h6></td>
                                        <td><h6>{{$user->nom}}</h6></td>
                                        <td><h6>{{$user->email}}</h6></td>
                                        {{-- <td><h6>{{$user->password}}</h6></td> --}}
                                    
                                      
                                        
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    <button class="btn btn-danger"><a class="nav-link" href="{{route('user.index')}}">Retour</a></button>
                </div>
            </div>
        </div>
@endsection
