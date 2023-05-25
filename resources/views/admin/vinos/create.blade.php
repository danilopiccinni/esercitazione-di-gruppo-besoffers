@extends('layouts/app')

@section('content')

<div class="container">
    
    <form action="{{route('admin.vino.store')}}" method="POST">
    
        @csrf

        <div class="mb-2 form-check" >
            <label class="form-label" for="nome">nome</label>
            <input class="form-control @error('nome') is-invalid @enderror" type="text" id="nome" name="nome" value="{{old('nome')}}">
            @error('nome')
                <em style="color:red"> {{$message}} </em>
            @enderror
        </div>

        <div class="mb-2 form-check" >
            <label class="form-label" for="annata">annata</label>
            <input class="form-control @error('annata') is-invalid @enderror" type="number" id="annata" name="annata" value="{{old('annata')}}">
            @error('annata')
                <em style="color:red"> {{$message}} </em>
            @enderror
        </div>
        {{-- <div class="mb-2 form-check" >
            <label class="form-label" for="annata">annata</label>
            <input class="form-control @error('annata') is-invalid @enderror" type="date" id="annata" name="annata" value="{{old('annata')}}">
            @error('annata')
                <em style="color:red"> {{$message}} </em>
            @enderror
        </div> --}}

        <div class="my-5 form-check" >
            <label class="form-label" for="colore">colore</label>
            <select class="ms-2" style="width: 200px; text-align: center; border-radius:4px;border:1px solid grey" name="colore" id="colore">
                <option value="">nessuna</option>
                    <option value="rosso" >rosso</option>
                    <option value="rose" >rose</option>
                    <option value="bianco">bianco</option>
            </select>
            @error('colore')
            <div class="invalid-feedback">
                <em> {{$message}} </em>
            </div>
            @enderror
        </div>

        <div class="my-5 form-check" >
            <label class="form-label" for="cantina_id">cantina</label>
            <select class="ms-2" style="width: 200px; text-align: center; border-radius:4px;border:1px solid grey" name="cantina_id" id="cantina_id">
                <option value="">nessuna</option>
                @foreach ($cantinas as $cantina)
                    <option value="{{$cantina->id}}" >{{$cantina->nome}}</option>
                @endforeach
            </select>
            @error('repo')
            <div class="invalid-feedback">
                <em> {{$message}} </em>
            </div>
            @enderror
        </div>

        <div class="my-5 form-check" >
            <label class="form-label" for="tipologia">tipologia</label>
            <select class="ms-2" style="width: 200px; text-align: center; border-radius:4px;border:1px solid grey" name="tipologia" id="tipologia">
                <option value="">nessuna</option>
                    <option value="fermo" >fermo</option>
                    <option value="frizzante" >frizzante</option>
                    <option value="passito">passito</option>
            </select>
            @error('tipologia')
            <div class="invalid-feedback">
                <em> {{$message}} </em>
            </div>
            @enderror
        </div>

        {{-- <div class="mb-2 form-check" >
            <label class="form-label" for="tipologia">tipologia</label>
            <input class="form-control @error('tipologia') is-invalid @enderror" type="text" id="tipologia" name="tipologia" value="{{old('tipologia')}}">
            @error('tipologia')
                <em style="color:red"> {{$message}} </em>
            @enderror
        </div> --}}
        <div class="mb-2 form-check" >
            <label class="form-label" for="gradazione">gradazione</label>
            <input class="form-control @error('gradazione') is-invalid @enderror" type="text" id="gradazione" name="gradazione" value="{{old('gradazione')}}">
            @error('gradazione')
                <em style="color:red"> {{$message}} </em>
            @enderror
        </div>
        <div class="mb-2 form-check" >
            <label class="form-label" for="estratto">estratto</label>
            <input class="form-control @error('estratto') is-invalid @enderror" type="text" id="estratto" name="estratto" value="{{old('estratto')}}">
            @error('estratto')
                <em style="color:red"> {{$message}} </em>
            @enderror
        </div>
        <div class="mb-2 form-check" >
            <label class="form-label" for="acidita">acidita</label>
            <input class="form-control @error('acidita') is-invalid @enderror" type="text" id="acidita" name="acidita" value="{{old('acidita')}}">
            @error('acidita')
                <em style="color:red"> {{$message}} </em>
            @enderror
        </div>


        <button class="btn btn-success" type="submit">Crea</button>
    </form>
</div>
    
@endsection