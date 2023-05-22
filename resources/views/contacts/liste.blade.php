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
                        <div class="card-header">
                            <h3>Message</h3>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                   @foreach ($messages as $message)
                                   <a href="{{route('contacts.show',$message->id)}}" class="{{ $message->isRead ? '' : 'unread-message' }}" style="text-decoration: none;">
                                    <p style="font-weight:bold">{{$message->nom}}</p>
                                    <p class="card-text clipped-text" title="{{$message->email}}">{{$message->created_at->format('d/m/y')}}</p>
                                    <hr>
                                  </a>

                                    @endforeach

                                </table>
                    </div>

                </div>
             </div>
         </div>
    </div>
@endsection
