@extends('layouts/app')

@section('content')

<div class="card" style="width: 18rem;">
    <div class="card-body">
      <h5 class="card-title">{{$cantina->nome}}</h5>
      <h6 class="card-subtitle mb-2 text-body-secondary">{{$cantina->indirizzo}}</h6>
      <h6 class="card-subtitle mb-2 text-body-secondary">{{$cantina->comune}}</h6>
      <h6 class="card-subtitle mb-2 text-body-secondary">{{$cantina->provincia}}</h6>
    </div>
  </div>


<!-- Button trigger modal -->
<button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">
    Elimina
  </button>
  
  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          Sei sicuro di voler eliminare?
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <form action="{{route('admin.cantina.destroy', $cantina)}}" method="POST">
            @csrf
            @method('DELETE')
            <button class="btn btn-danger" type="submit">Elimina</button>
        </form>
        </div>
      </div>
    </div>
  </div>






  <a href="{{route('admin.cantina.edit', $cantina)}}" class="btn btn-primary">modifica</a>


@endsection