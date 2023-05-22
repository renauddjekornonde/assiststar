@extends('layoutAdmin.app')


@section('content')
@if ($message= Session::get('sucess'))
  <div class="alert alert-info">
  {{$message}}
  </div>
@endif
   <div class="recent-grid">
                <div class="projects">
                    <div class="card">
                        <div class="card-header">
                            <h3>Service</h3>

                             <a href="">
                            <button>Ajouter <span class="las la-arrow-right"></span></button>
                            </a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table width="100%">
                                    <thead>
                                        <tr>
                                            <td>Titre</td>
                                            <td>Date</td>
                                            {{-- <td>Date</td> --}}
                                        </tr>
                                    </thead>
                                   @foreach ($services as $service)
                                       <tbody>
                                        <tr>
                                            <td>{{$service->titre}}</td>
                                            <td>UI Team</td>
                                            <td>
                                                <span class="status purple"></span>
                                                {{$service->created_at->format('d/m/y')}}
                                            </td>
                                        </tr>


                                    </tbody>
                                   @endforeach

                                </table>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="customers">
                    <div class="card">
                        <div class="card-header">
                            <h3>User</h3>
                             <a href="">
                            <button>Ajouter <span class="las la-arrow-right"></span></button>
                            </a>
                        </div>

                        @foreach ($users as $user)
                             <div class="card-body">

                            <div class="customer">
                                <div class="contact">
                                <h4>
                                {{-- {{$user->nom}} --}}
                                </h4><br>
                                    {{-- <img src="img/2.png" width="40px" height="40px" alt=""> --}}
                                    <div>
                                        <small>{{$user->nom}}
                                        {{$user->email}}</small>
                                    </div>
                                </div>
                                <div class="contact">
                                    <a href="https://www.facebook.com/"><span class=""><ion-icon name="logo-facebook"></ion-icon></span></a>
                                    {{-- <a href="https://web.whatsapp.com/"><span class=""><ion-icon name="logo-whatsapp"></ion-icon></span></a> --}}
                                    <a href="mailto:djekornonderenaud@gmail.com"><span class=""><ion-icon name="mail-sharp"></ion-icon></span></a>
                                </div>
                            </div>





                        </div>
                        @endforeach

                    </div>
                </div>

                  <div style="position:flex" class="projects">
                    <div class="card">
                        <div class="card-header">
                            <h3>Message</h3>
                            <a href="">
                            <button>Ajouter <span class="las la-arrow-right"></span></button>
                            </a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table width="100%">
                                    <thead>
                                        <tr>
                                            <td>Nom</td>
                                            <td>Email</td>
                                            <td>Date</td>
                                        </tr>
                                    </thead>
                                    @foreach ($messages as $message)
                                        <tbody>
                                        <tr>
                                            <td>{{$message->nom}}</td>
                                            <td>{{$message->email}}</td>

                                            <td>
                                                <span class="status purple"></span>
                                               {{$message->created_at->format('d/m/y')}}
                                            </td>
                                        </tr>
                                    </tbody>
                                    @endforeach
                                </table>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
@endsection
