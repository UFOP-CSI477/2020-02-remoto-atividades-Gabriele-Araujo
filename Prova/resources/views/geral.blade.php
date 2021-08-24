@extends('templates.template')

@section('content')
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li>
            <a href="{{url('painel')}}">
              <p>Página Inicial</p>
            </a>
          </li>
          <li class="active">
            <a href="{{url('geral')}}">
              <p>Área Geral</p>
            </a>
          </li>
          <li>
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
            <a class="navbar-brand" href="javascript:;">Página Inicial</a>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
      <div class="content">
        <div class="row">
         
        <div class="card-body">
                  @csrf
                  <table class="table">

                    <thead class="text-primary">
                      <th class="text-center">Aplicação</th>
                      <th class="text-center">Quantidade</th>
                    </thead>

                    <tbody>
                    
                        <tr>
                          <td class="text-center text-primary">Dose única</td>
                          <td class="text-center"></td>
                        </tr>
                        <tr>
                          <td class="text-center text-primary">Primeira dose</td>
                          <td class="text-center"></td>
                        </tr>
                        <tr>
                          <td class="text-center text-primary">Segunda dose</td>
                          <td class="text-center"></td>
                        </tr>
                        <tr>
                          <td class="text-center text-primary">TOTAL GERAL</td>
                          <td class="text-center"></td>
                        </tr>
                    
                    </tbody>

                  </table>
              </div>

        </div>

        <div class="card-body">
                  @csrf
                  <table class="table">

                    <thead class="text-primary">
                      <th class="text-center">Vacina</th>
                      <th class="text-center">Quantidade</th>
                      <th class="text-center">Porcentagem</th>
                    </thead>

                    <tbody>
                    @foreach($vacinas as $v, $vacinasDose as $vd)
                        <tr>
                          <td class="text-center text-primary">{{$v->nome}}</td>
                          <td class="text-center">{{$vd</td>
                        </tr>
                        

                        <tr>
                          <td class="text-center text-primary">TOTAL GERAL</td>
                          <td class="text-center"></td>
                        </tr>
                    
                    </tbody>

                  </table>
              </div>

        </div>
      </div>
    </div>
    
@endsection