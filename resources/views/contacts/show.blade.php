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
                <h3 class="email">{{$contact->email}}</h3>
                <p class="message">Message : {{$contact->message}}</p>
              </div>
              <button class="btn btn-danger">
                <a class="nav-link" href="{{route('contacts.create')}}">Retour</a>
              </button>
            </div>
          </div>
        </div>
      </div>

@endsection
