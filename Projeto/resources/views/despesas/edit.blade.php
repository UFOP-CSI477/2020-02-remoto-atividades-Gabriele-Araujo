@extends('templates.template')

@section('content')
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li>
            <a href="{{url('painel')}}">
              <i class="nc-icon nc-tile-56"></i>
              <p>Painel</p>
            </a>
          </li>
          <li class="active">
            <a href="{{url('despesas')}}">
              <i class="nc-icon nc-cart-simple"></i>
              <p>Despesas</p>
            </a>
          </li>
          <li>
            <a href="{{url('banco')}}">
              <i class="nc-icon nc-bank"></i>
              <p>Banco</p>
            </a>
          </li>
          <li>
            <a href="{{url('usuario')}}">
              <i class="nc-icon nc-single-02"></i>
              <p>Usuário</p>
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
            <a class="navbar-brand" href="javascript:;">Despesas</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navigation">
            <form>
              <div class="input-group no-border">
                <input type="text" value="" class="form-control" placeholder="Search...">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <i class="nc-icon nc-zoom-split"></i>
                  </div>
                </div>
              </div>
            </form>
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link btn-magnify" href="javascript:;">
                  <i class="nc-icon nc-layout-11"></i>
                  <p>
                    <span class="d-lg-none d-md-block">Stats</span>
                  </p>
                </a>
              </li>
              <li class="nav-item btn-rotate dropdown">
                <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="nc-icon nc-bell-55"></i>
                  <p>
                    <span class="d-lg-none d-md-block">Some Actions</span>
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="#">Action</a>
                  <a class="dropdown-item" href="#">Another action</a>
                  <a class="dropdown-item" href="#">Something else here</a>
                </div>
              </li>
              <li class="nav-item">
                <a class="nav-link btn-rotate" href="javascript:;">
                  <i class="nc-icon nc-settings-gear-65"></i>
                  <p>
                    <span class="d-lg-none d-md-block">Account</span>
                  </p>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
      <div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title"></h4>
              </div>

              
              <div class="card-body">
                
                  
                <div class="col-8 m-auto">

                    <form action="{{ route('despesas.update', $despesa->id)}}" method="post">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="nome">Nome</label>
                            <input type="text" class="form-control" name="name" id="name" value="{{$despesa->name ?? ''}}">
                        </div>
                        <div class="form-group">
                            <label for="descricao">Descrição</label>
                            <input type="text" class="form-control" name="descricao" id="descricao" value="{{$despesa->descricao ?? ''}}">
                        </div>
                        <div class="form-group">
                            <label for="data">Data</label>
                            <input type="date" class="form-control" name="data" id="data" value="{{$despesa->data ?? ''}}">
                        </div>
                        <div class="form-group">
                            <label for="valor">Valor</label>
                            <input type="float" class="form-control" name="valor" id="valor" value="{{$despesa->valor ?? ''}}">
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
      </div>
@endsection