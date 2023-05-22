@extends('layouts/app')

@section('content')

<div class="container">
    
    <form action="{{route('admin.cantina.update', $cantina)}}" method="POST">
    
        @csrf
        @method('PUT')

        <div class="mb-2 form-check" >
            <label class="form-label" for="nome">nome</label>
            <input class="form-control @error('nome') is-invalid @enderror" type="text" id="nome" name="nome" value="{{old('nome') ?? $cantina->nome}}">
            @error('nome')
                <em style="color:red"> {{$message}} </em>
            @enderror
        </div>
        <div class="mb-2 form-check" >
            <label class="form-label" for="indirizzo">indirizzo</label>
            <input class="form-control @error('indirizzo') is-invalid @enderror" type="text" id="indirizzo" name="indirizzo" value="{{old('indirizzo') ?? $cantina->indirizzo}}">
            @error('indirizzo')
                <em style="color:red"> {{$message}} </em>
            @enderror
        </div>
        <div class="mb-2 form-check" >
            <label class="form-label" for="comune">comune</label>
            <input class="form-control @error('comune') is-invalid @enderror" type="text" id="comune" name="comune" value="{{old('comune') ?? $cantina->indirizzo}}">
            @error('comune')
                <em style="color:red"> {{$message}} </em>
            @enderror
        </div>
        <div class="mb-2 form-check" >
            <label class="form-label" for="provincia">provincia</label>
            <input class="form-control @error('provincia') is-invalid @enderror" type="text" id="provincia" name="provincia" value="{{old('provincia') ?? $cantina->provincia}}">
            @error('provincia')
                <em style="color:red"> {{$message}} </em>
            @enderror
        </div>
        <div class="mb-2 form-check" >
            <label class="form-label" for="regione">regione</label>
            <input class="form-control @error('regione') is-invalid @enderror" type="text" id="regione" name="regione" value="{{old('regione') ?? $cantina->regione}}">
            @error('regione')
                <em style="color:red"> {{$message}} </em>
            @enderror
        </div>
        <div class="mb-2 form-check" >
            <label class="form-label" for="nazione">nazione</label>
            <input class="form-control @error('nazione') is-invalid @enderror" type="text" id="nazione" name="nazione" value="{{old('nazione') ?? $cantina->nazione}}">
            @error('nazione')
                <em style="color:red"> {{$message}} </em>
            @enderror
        </div>
        <div class="mb-2 form-check" >
            <label class="form-label" for="telefono">telefono</label>
            <input class="form-control @error('telefono') is-invalid @enderror" type="text" id="telefono" name="telefono" value="{{old('telefono') ?? $cantina->telefono}}">
            @error('telefono')
                <em style="color:red"> {{$message}} </em>
            @enderror
        </div>
        <div class="mb-2 form-check" >
            <label class="form-label" for="email">email</label>
            <input class="form-control @error('email') is-invalid @enderror" type="text" id="email" name="email" value="{{old('email') ?? $cantina->email}}">
            @error('email')
                <em style="color:red"> {{$message}} </em>
            @enderror
        </div>


        <button type="submit">invia</button>
    </form>
</div>
    

@endsection