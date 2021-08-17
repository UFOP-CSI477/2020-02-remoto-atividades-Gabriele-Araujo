@extends('templates.template')

@section('content')

<h1 class="text-center">Sistema de Manutenção de Equipamentos</h1>
    <div class="text-center">
        <a href="{{route('equipamentos.index')}}">
            <button class="btn btn-primary">Área Administrativa</button>
        </a>
        <a href="{{route('suporte.index')}}">
            <button class="btn btn-primary">Área Geral - Suporte</button>
        </a>
        <a href="{{route('registros.index')}}">
            <button class="btn btn-primary">Registros</button>
        </a>
    </div>
@endsection