@extends('templates.template')

@section('content')

    <h1 class="text-center">Área Administrativa</h1>

    <div class="text-center">
        <a href="">
            <button class="btn btn-success">Cadastrar</button>
        </a>
    </div>
    <div class="col-8 m-auto">
    @csrf
        <table class="table text-center mt-3 mb-4">
            <thead>
                <tr>
                <th scope="col">ID</th>
                <th scope="col">Equipamento ID</th>
                <th scope="col">Usuário ID</th>
                <th scope="col">Descrição</th>
                </tr>
            </thead>
            <tbody>
            @foreach($registro as $r)
                <tr>
                    <td>{{ $r->id }}</td>
                    <td>{{ $r->equipamento_id }} </td>
                    <td>{{ $r->user_id }} </td>
                    <td>{{ $r->descricao }} </td>
                    <td>
                        <a href="{{route('equipamentos.show', $e->id)}}">
                            <button class="btn btn-dark">Visualizar</button>
                        </a>
                        <a href="{{route('equipamentos.edit', $e->id)}}">
                            <button class="btn btn-primary">Editar</button>
                        </a>
                        <a href="{{route('equipamentos.destroy', $e->id)}}" class="del">
                            <button class="btn btn-danger">Deletar</button>
                        </a>
                    </td>
                </tr>
            @endforeach
                
            </tbody>
        </table>
        {{$registro->links("pagination::bootstrap-4")}}
    </div>

@endsection