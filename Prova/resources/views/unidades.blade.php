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
                  @csrf
                  <table class="table">

                    <thead class="text-primary">
                      <th class="text-center">ID</th>
                      <th class="text-center">Nome</th>
                      <th class="text-center">Bairro</th>
                      <th class="text-center">Cidade</th>
                    </thead>

                    <tbody>
                    
                    @foreach($unidade as $u)
                        <tr>
                          <td class="text-center">{{ $u->id }}</td>
                          <td class="text-center">{{ $u->nome }}</td>
                          <td class="text-center">{{ $u->bairro }}</td>
                          <td class="text-center">{{ $u->cidade }}</td>
                          <td class="text-center">
                            <a href="{{route('unidades.destroy', $u->id)}}" class="delUni">
                                <button class="btn btn-danger">Deletar</button>
                            </a> 
                          </td>
                        </tr>
                    @endforeach
                    
                    </tbody>

                  </table>

                <div class="content">
                    <div class="text-center">
                        <a href="{{url('administrativo')}}">
                            <button class="btn btn-primary">Voltar</button>
                        </a>    
                        
                    </div>
                </div>
              </div>
        </div>

      </div>
    </div>
    
@endsection