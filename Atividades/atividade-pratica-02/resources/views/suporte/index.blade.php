@extends('templates.template')

@section('content')

<h1 class="text-center">Área Geral - Suporte</h1>

<div class="col-8 m-auto">
    @csrf
        <table class="table text-center mt-3 mb-4">
            <thead>
                <tr>
                <th scope="col">ID</th>
                <th scope="col">Equipamento</th>
                </tr>
            </thead>
            <tbody>
            @foreach($equipamento as $e)
                <tr>
                    <td>{{ $e->id }}</td>
                    <td>{{ $e->name }} </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        {{$equipamento->links("pagination::bootstrap-4")}}
</div>
@endsection