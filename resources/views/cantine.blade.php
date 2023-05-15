@extends('layouts/main')


@section('content')
<div class="container">

  <h1>Cantine</h1>

    <table class="table table-dark table-striped">
        <thead>
          <tr>
            <th scope="col">Nome</th>
            <th scope="col">indirizzo</th>
            <th scope="col">Comune</th>
            <th scope="col">provincia</th>
            <th scope="col">regione</th>
            <th scope="col">nazione</th>
            <th scope="col">telefono</th>
            <th scope="col">email</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($cantine as $cantina)
            <tr>
                <td>{{ $cantina->nome }}</td>
                <td> {{ $cantina->indirizzo }} </td>
                <td> {{ $cantina->comune }} </td>
                <td> {{ $cantina->provincia }} </td>
                <td> {{ $cantina->regione }} </td>
                <td> {{ $cantina->nazione }} </td>
                <td> {{ $cantina->telefono }} </td>
                <td> {{ $cantina->email }} </td>
            </tr>         
            @endforeach
        </tbody>
      </table>

</div>
@endsection