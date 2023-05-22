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
    <style>
        .table {
          border-collapse: collapse;
          width: 100%;
        }
      
        th,
        td {
          border: 1px solid #ccc;
          padding: 10px;
          text-align: left;
        }
      
        th {
          font-weight: bold;
          width: 120px;
        }
      
        .vertical-line {
          border-left: 1px solid #ccc;
        }
      
        .title {
          font-weight: bold;
          font-size: 16px;
        }
      
        .content {
          font-size: 14px;
          line-height: 1.5;
        }
      </style>
      
      <div class="recents-grids">
        <div class="projects">
          <div class="card">
            <div class="card-body">
              <div class="table-responsive">
                <table class="table">
                  <tbody>
                    <tr>
                      <th scope="row">Titre</th>
                      <td class="vertical-line">
                        <p class="title">{{$service->titre}}</p>
                      </td>
                    </tr>
                    <tr>
                      <th scope="row">Description</th>
                      <td class="vertical-line">
                        <p class="content">{{$service->description}}</p>
                      </td>
                    </tr>
                    <tr>
                      <th scope="row">Avantage</th>
                      <td class="vertical-line">
                        <p class="content">{{$service->avantage}}</p>
                      </td>
                    </tr>
                    <tr>
                      <th scope="row">Raison</th>
                      <td class="vertical-line">
                        <p class="content">{{$service->raison}}</p>
                      </td>
                    </tr>
                    <tr>
                      <th scope="row">Cible</th>
                      <td class="vertical-line">
                        <p class="content">{{$service->cible}}</p>
                      </td>
                    </tr>
                    <tr>
                      <th scope="row">Web Site</th>
                      <td class="vertical-line">
                        <p class="content">{{$service->website}}</p>
                      </td>
                    </tr>
                    <tr>
                      <th scope="row">Business Plan</th>
                      <td class="vertical-line">
                        <p class="content">{{$service->business_plan}}</p>
                      </td>
                    </tr>
                    <tr>
                      <th scope="row">Fond</th>
                      <td class="vertical-line">
                        <p class="content">{{$service->fond}}</p>
                      </td>
                    </tr>
                    <!-- Ajoutez des lignes supplémentaires pour les autres champs -->
                  </tbody>
                </table>
              </div>
              <button class="btn btn-danger"><a class="nav-link" href="{{route('services.create')}}">Retour</a></button>
            </div>
          </div>
        </div>
      </div>
      
@endsection
