@extends('templates.template')

@section('content')

<h1 class="text-center">Tela Principal</h1>
    <div class="text-center">
        <a href="{{route('equipamentos.index')}}">
            <button class="btn btn-primary">Área Administrativa</button>
        </a>
        <a href="{{route('equipamentos.index')}}">
            <button class="btn btn-primary">Área Geral - Suporte</button>
        </a>
    </div>
@endsection