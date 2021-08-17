@extends('templates.template')

@section('content')

    <h1 class="text-center">Crud</h1>

    <div class="text-center">
        <a href="{{route('equipamentos.create')}}">
            <button class="btn btn-success">Cadastrar</button>
        </a>
    </div>
    <div class="col-8 m-auto">
        <table class="table text-center mt-3 mb-4">
            <thead>
                <tr>
                <th scope="col">ID</th>
                <th scope="col">Equipamento</th>
                <th scope="col">Ações</th>
                </tr>
            </thead>
            <tbody>
            @foreach($equipamento as $e)
                <tr>
                    <td>{{ $e->id }}</td>
                    <td>{{ $e->name }} </td>
                    <td>
                        <a href="{{route('equipamentos.show', $e->id)}}">
                            <button class="btn btn-dark">Visualizar</button>
                        </a>
                        <a href="{{route('equipamentos.edit', $e->id)}}">
                            <button class="btn btn-primary">Editar</button>
                        </a>
                        <a href="">
                            <button class="btn btn-danger">Deletar</button>
                        </a>
                    </td>
                </tr>
            @endforeach
                
            </tbody>
        </table>
    </div>

@endsection