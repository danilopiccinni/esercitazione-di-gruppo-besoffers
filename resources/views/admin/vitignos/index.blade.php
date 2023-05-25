@extends('layouts/app')

@section('content')

<div class="container">

    <h1>Vitigno</h1>
  
      <table class="table table-dark table-striped">
          <thead>
            <tr>
              <th scope="col">Nome</th>
              <th scope="col">Descrizione</th>
              <th scope="col">Vini</th>
              <th></th>

            </tr>
          </thead>
          <tbody>
              @foreach ($vitignos as $vitigno)
              <tr>
                  <td>{{ $vitigno->nome }}</td>
                  <td> {{ $vitigno->descrizione }} </td>
                  <td>
                    @foreach($vitigno->vinos as $vino)
                    <span>{{ $vino->nome}}, </span> 
                    @endforeach
                    </td>
                  <td><a href="{{route('admin.vitignos.show', $vitigno)}}">apri</a></td>
              </tr>         
              @endforeach
          </tbody>
        </table>
        
        <a class="btn btn-success" href="{{route('admin.vitignos.create')}}">crea</a>
  </div>


    
@endsection