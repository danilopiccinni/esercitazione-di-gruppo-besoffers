@extends('layouts/main')


@section('content')


<div class="container">

  <h1>Cantine</h1>

  <form action="{{route('guest.filter')}}" class="d-flex my-5 col-6 offset-3" role="search" method="GET">
    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="search">
    <button class="btn btn-outline-success" type="submit">Search</button>
  </form>

    {{-- <table class="table table-dark table-striped">
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
      </table> --}}


      <div class="row gap-4">
        @foreach($cantine as $cantina)
        
        <div class="card d-flex flex" style="width: 18rem;">
          <div class="card-body">
            <h5 class="card-title">{{$cantina->nome}}</h5>
            <h6 class="card-subtitle mb-2 text-body-secondary">{{ $cantina->indirizzo }}</h6>
            <p class="card-text">{{ $cantina->comune }} </p>
            <p class="card-text">{{ $cantina->provincia }} </p>
            <p class="card-text">{{ $cantina->regione }} </p>
            <p class="card-text">{{ $cantina->nazione }} </p>
            <p class="card-text">{{ $cantina->telefono }} </p>
            <p class="card-text">{{ $cantina->email }} </p>
          </div>
        </div>
  @endforeach
</div>


</div>
@endsection