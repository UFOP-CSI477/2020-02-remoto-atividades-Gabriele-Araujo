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
          <li>
            <a href="{{url('pessoas')}}">
              <p>Pessoas</p>
            </a>
          </li>
          <li>
            <a href="{{url('unidades')}}">
              <p>Unidades</p>
            </a>
          </li>
          <li>
            <a href="{{url('vacinas')}}">
              <p>Vacinas</p>
            </a>
          </li>
          <li>
            <a href="{{url('registros')}}">
              <p>Registros</p>
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
                
            <form name="formCad" id="formCad" method="post" action="{{url('vacinas')}}">
                @csrf
                <div class="form-group">
                    <label for="nome">Nome</label>
                    <input type="text" class="form-control" name="nome" id="nome" required>
                            
                    <label for="fabricante">Fabricante</label>
                    <input type="text" class="form-control" name="fabricante" id="fabricante" required>

                    <label for="doses">Doses</label>
                    <input type="number" class="form-control" name="doses" id="doses" required>

                    <div class="text-center">
                        <input type="submit" value="Inserir" class="btn btn-primary mt-3 mb-4">
                        <input type="reset" value="Limpar" class="btn btn-danger mt-3 mb-4">
                    </div>
                            
                </div>
            </form>
        </div>

    
      </div>
    </div>
    
@endsection