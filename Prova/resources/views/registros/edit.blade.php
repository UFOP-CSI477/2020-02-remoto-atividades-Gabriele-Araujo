@extends('templates.template')

@section('content')
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li>
            <a href="{{url('painel')}}">
              <p>Página Inicial</p>
            </a>
          </li>
          <li>
            <a href="{{url('geral')}}">
              <p>Área Geral</p>
            </a>
          </li>
          <li class="active">
            <a href="{{url('administrativo')}}">
              <p>Área Administrativa</p>
            </a>
          </li>
        </ul>
      </div>
    </div>

    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-absolute fixed-top navbar-transparent">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <div class="navbar-toggle">
              <button type="button" class="navbar-toggler">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </button>
            </div>
            <a class="navbar-brand" href="javascript:;">Vacinas</a>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
      <div class="content">
        <div class="row">
        
        <div class="card-body">
                
            <form name="formCad" id="formCad" method="post" action="{{url('registros')}}">
            @csrf
            @method('PUT')
            <div class="form-group">
                    <label for="pessoa_id">Pessoa</label>
                    <select class="form-control" name="pessoa_id" id="pessoa_id">
                    <option value="{{$registro->pessoa_id ?? ''}}">Selecione</option>
                    @foreach($pessoa as $p)
                        <option value="{{$p->id}}">{{$p->nome}}</option>
                    @endforeach
                    </select>
                </div>
                <div class="form-group">
                <label for="unidade_id">Unidade</label>
                    <select class="form-control" name="unidade_id" id="unidade_id">
                    <option value="{{$registro->unidade_id ?? ''}}">Selecione</option>
                    @foreach($unidade as $u)
                        <option value="{{$u->id}}">{{$u->nome}}</option>
                    @endforeach
                    </select>
                </div>
                <div class="form-group">
                <label for="vacina_id">Pessoa</label>
                    <select class="form-control" name="vacina_id" id="vacina_id">
                    <option value="{{$registro->vacina_id ?? ''}}">Selecione</option>
                    @foreach($vacina as $v)
                        <option value="{{$v->id}}">{{$v->nome}}</option>
                    @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="dose">Dose</label>
                    <input type="number" class="form-control" name="dose" id="dose" value="{{$registro->dose ?? ''}}">
                </div>
                <div class="form-group">
                    <label for="data">Data</label>
                    <input type="date" class="form-control" name="data" id="data" value="{{$registro->data ?? ''}}">
                </div>
                <div class="text-right">
                    <input type="submit" value="Editar" class="btn btn-primary mt-3 mb-4">
                    <input type="reset" value="Limpar" class="btn btn-danger mt-3 mb-4">
                </div>
            </form>
        </div>

    
      </div>
    </div>
    
@endsection