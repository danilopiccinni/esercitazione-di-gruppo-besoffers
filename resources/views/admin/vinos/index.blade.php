@extends('layouts/app')

@section('content')

<div class="container">

    <h1>Vini</h1>
  
      <table class="table table-dark table-striped">
          <thead>
            <tr>
              <th scope="col">Nome</th>
              <th scope="col">annata</th>
              <th scope="col">colore</th>
              <th scope="col">tipologia</th>
              <th scope="col">gradazione</th>
              <th scope="col">estratto</th>
              <th scope="col">acidita</th>
              <th></th>

            </tr>
          </thead>
          <tbody>
              @foreach ($vinos as $vino)
              <tr>
                  <td>{{ $vino->nome }}</td>
                  <td> {{ $vino->annata }} </td>
                  <td> {{ $vino->colore }} </td>
                  <td> {{ $vino->tipologia }} </td>
                  <td> {{ $vino->gradazione }} </td>
                  <td> {{ $vino->estratto }} </td>
                  <td> {{ $vino->acidita }} </td>
                  <td><a href="{{route('admin.vino.show', $vino)}}">apri</a></td>
              </tr>         
              @endforeach
          </tbody>
        </table>
        
        <a class="btn btn-success" href="{{route('admin.vino.create')}}">crea</a>
  </div>


    
@endsection