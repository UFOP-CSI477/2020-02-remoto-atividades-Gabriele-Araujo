@extends('templates.template')

@section('content')

    <h1 class="text-center">Cadastrar</h1>

    <div class="col-8 m-auto">
        <form name="formCad" id="formCad" method="post" action="{{url('equipamentos')}}">
            @csrf
            <div class="form-group">
                <label for="nome">Nome</label>
                <input type="text" class="form-control" name="name" id="name">
                
                <input type="submit" value="Cadastrar" class="btn btn-primary mt-3 mb-4">
                <input type="reset" value="Limpar" class="btn btn-danger mt-3 mb-4">
            </div>
        </form>
    </div>

@endsection