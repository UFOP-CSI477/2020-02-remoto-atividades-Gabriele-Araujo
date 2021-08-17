@extends('templates.template')

@section('content')

<h1 class="text-center">Editar</h1>

    <div class="col-8 m-auto">

        <form action="{{ route('equipamentos.update', $equipamento->id)}}" method="post">

            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="name">Nome</label>
                <input type="text" class="form-control" name="name" id="name" value="{{$equipamento->name ?? ''}}">
            </div>

            <div class="text-right">
                <input type="submit" value="Editar" class="btn btn-primary mt-3 mb-4">
                <input type="reset" value="Limpar" class="btn btn-danger mt-3 mb-4">
            </div>

        </form>

    </div>
@endsection