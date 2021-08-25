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
            <a class="navbar-brand" href="javascript:;">Área Administrativa</a>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
      <div class="content">
        <div class="row">
          <div class="content">
            <div class="text-center">
              <a href="{{route('vacinas.index')}}">
                <button class="btn btn-primary">Vacinas</button>
              </a>
              <a href="{{route('pessoas.index')}}">
                <button class="btn btn-primary">Pessoas</button>
              </a>
              <a href="{{route('unidades.index')}}">
                <button class="btn btn-primary">Unidades</button>
              </a>
              <a href="{{route('registros.index')}}">
                <button class="btn btn-primary">Registros</button>
              </a>
            </div>
          </div>
      </div>
    </div>
    
@endsection