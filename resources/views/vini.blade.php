@extends('layouts/main')

@section('content')
<div class="container">

  <h1>Vini</h1>

    <table class="table table-dark table-striped">
        <thead>
          <tr>
            <th scope="col">Nome</th>
            <th scope="col">Annata</th>
            <th scope="col">Cantina</th>
            <th scope="col">Colore</th>
            <th scope="col">Tipologia</th>
            <th scope="col">Gradazione</th>
            <th scope="col">Estratto</th>
            <th scope="col">Acidità</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($vini as $vino)
            <tr>
                <td>{{ $vino->nome }}</td>
                <td> {{ $vino->annata }} </td>
                <td> {{ $vino->cantina }} </td>
                <td> {{ $vino->colore }} </td>
                <td> {{ $vino->tipologia }} </td>
                <td> {{ $vino->gradazione }} % </td>
                <td> {{ $vino->estratto }} (g/l)</td>
                <td> {{ $vino->acidita }} (g/l)</td>
            </tr>         
            @endforeach
        </tbody>
      </table>

</div>
@endsection