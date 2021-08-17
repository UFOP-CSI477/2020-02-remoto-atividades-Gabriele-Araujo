@extends('templates.template')

@section('content')

<form action="{{url('equipamentos')}}" method="post">
    <h1 class="text-center">@if(isset($equipamentos))Editar @else Cadastrar @endif</h1>
    @csrf
    @method('PUT')

    <form name="formCad" id="formCad" method="post" action="{{url('equipamentos')}}">
        <div class="form-group">
            <label for="nome">Nome</label>
            <input type="text" class="form-control" name="name" id="name" required>
                
            <input type="submit" value="Atualizar" class="btn btn-primary mt-3 mb-4">
            <input type="reset" value="Limpar" class="btn btn-danger mt-3 mb-4">
        </div>
    </form>

</form>

@endsection