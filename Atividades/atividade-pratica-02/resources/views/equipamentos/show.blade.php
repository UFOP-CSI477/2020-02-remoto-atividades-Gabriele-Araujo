@extends('templates.template')

@section('content')

    <h1 class="text-center">Visualizar</h1>

    <div class="col-8 m-auto">
        <p>Id: {{ $equipamento->id }}</p>
        <p>Nome: {{ $equipamento->name }}</p>
    </div>

@endsection