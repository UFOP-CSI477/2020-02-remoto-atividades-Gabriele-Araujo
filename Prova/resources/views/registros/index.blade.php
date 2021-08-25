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
                      <th class="text-center">Pessoa</th>
                      <th class="text-center">Unidade</th>
                      <th class="text-center">Vacina</th>
                      <th class="text-center">Dose</th>
                      <th class="text-center">Data</th>
                    </thead>

                    <tbody>
                    
                    @foreach($registro as $r)
                        <tr>
                          <td class="text-center">{{ $r->id }}</td>
                          <td class="text-center">{{ $r->pessoa->nome }}</td>
                          <td class="text-center">{{ $r->unidade->nome }}</td>
                          <td class="text-center">{{ $r->vacina->nome }}</td>
                          <td class="text-center">{{ $r->dose }}</td>
                          <td class="text-center">{{ $r->data }}</td>
                          <td class="text-center">
                            <a href="{{route('registros.edit', $r->id)}}">
                                <button class="btn btn-success">Editar</button>
                            </a>
                            <a href="{{route('registros.destroy', $r->id)}}" class="delReg">
                                <button class="btn btn-success">Deletar</button>
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
                        <a href="{{route('registros.create')}}">
                            <button class="btn btn-success">Inserir</button>
                        </a>
                    </div>
                </div>
              </div>
        </div>

      </div>
    </div>
    
@endsection