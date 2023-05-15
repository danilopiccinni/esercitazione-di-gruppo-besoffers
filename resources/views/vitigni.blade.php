@extends('layouts/main')

@section('content')
<div class="container">

    <h1>Vitgni</h1>

    <table class="table table-dark table-striped">
        <thead>
          <tr>
            <th scope="col">Nome</th>
            <th scope="col">Descrizione</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($vitigni as $vitigno)
            <tr>
                <td>{{ $vitigno->nome }}</td>
                <td> {{ $vitigno->descrizione }} </td>
            </tr>         
            @endforeach
        </tbody>
      </table>

</div>
@endsection