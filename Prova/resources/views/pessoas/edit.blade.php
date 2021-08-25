@extends('templates.template')

@section('content')
    <div class="sidebar-wrapper">
        <ul class="nav">
          <li>
            <a href="{{url('')}}">
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
            <a class="navbar-brand" href="javascript:;">Pessoas</a>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
      <div class="content">
        <div class="row">
        
        <div class="card-body">
                
                  
                <div class="col-8 m-auto">

                    <form action="{{ route('pessoas.update', $pessoa->id)}}" method="post">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="nome">Nome</label>
                            <input type="text" class="form-control" name="nome" id="nome" value="{{$pessoa->nome ?? ''}}">
                        </div>
                        <div class="form-group">
                            <label for="bairro">Bairro</label>
                            <input type="text" class="form-control" name="bairro" id="bairro" value="{{$pessoa->bairro ?? ''}}">
                        </div>
                        <div class="form-group">
                            <label for="cidade">Cidade</label>
                            <input type="text" class="form-control" name="cidade" id="cidade" value="{{$pessoa->cidade ?? ''}}">
                        </div>
                        <div class="form-group">
                            <label for="data_nascimento">Data de Nascimento</label>
                            <input type="date" class="form-control" name="data_nascimento" id="data_nascimento" value="{{$pessoa->data_nascimento ?? ''}}">
                        </div>
                        <div class="text-right">
                            <input type="submit" value="Editar" class="btn btn-primary mt-3 mb-4">
                            <input type="reset" value="Limpar" class="btn btn-danger mt-3 mb-4">
                        </div>
                    </form>
                </div>
        </div>

      </div>
    </div>
    
@endsection