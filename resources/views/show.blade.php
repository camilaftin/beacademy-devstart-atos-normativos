@include('layout.head')

<body>
  @include('layout.navbar')

  <!-- CARD DE SETOR -->
  <div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
      <h1 class="h3 mb-0 text-gray-800">Resolução nº {{ $ato->numero }}/{{ $ato->ano }}</h1>
    </div>
    <div class="row">
      <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
          <div class="card-body">
            <div class="row no-gutters align-items-center">
              <div class="col mr-2">
                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                  Setor</div>
                <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $ato->setor }}</div>
              </div>
              <div class="col-auto">
                <i class="fas fa-calendar fa-2x text-gray-300"></i>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- CARD DE CLASSIFICACAO -->

      <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-success shadow h-100 py-2">
          <div class="card-body">
            <div class="row no-gutters align-items-center">
              <div class="col mr-2">
                <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                  Classificacao</div>
                <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $ato->classificacao }}</div>
              </div>
              <div class="col-auto">
                <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- CARD DE RESPOSTA -->

      <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-info shadow h-100 py-2">
          <div class="card-body">
            <div class="row no-gutters align-items-center">
              <div class="col mr-2">
                <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Resposta
                </div>
                <div class="row no-gutters align-items-center">
                  <div class="col-auto">
                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">{{ $ato->resposta }}</div>
                  </div>
                </div>
              </div>
              <div class="col-auto">
                <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- CARD DE DATA DE ENVIO -->

      <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-warning shadow h-100 py-2">
          <div class="card-body">
            <div class="row no-gutters align-items-center">
              <div class="col mr-2">
                <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                  Data de envio</div>
                <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $ato->data_envio }}</div>
              </div>
              <div class="col-auto">
                <i class="fas fa-comments fa-2x text-gray-300"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="d-flex justify-content-center" style="padding-top: 40px">
      <div class="col-lg-10">
        <div class="card shadow mb-4">
          <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Resolução nº {{ $ato->numero }}/{{ $ato->ano }}</h6>
          </div>
          <div class="card-body">
            {{ $ato->ementa }}
          </div>
        </div>
      </div>
    </div>

    <div class="form-group">
      <div class="d-flex justify-content-center" style="padding: 40px"">
      <a href=" {{route('atos.edit', $ato->id)}}" class="btn btn-info btn-sm text-white">botao de editar</a>
        botao de excluir

      </div>
    </div>
  </div>
























  <!--
  
  
  <div class=" container">
        <h1>Resolução nº {{ $ato->numero }}/{{ $ato->ano }}</h1>
        <a href="/" class="btn btn-info btn-sm text-white">Voltar</a>
        <table class="table">
          <thead class="text-center">
            <tr>
              <th scope="col">Numero</th>
              <th scope="col">Ano</th>
              <th scope="col">Ementa</th>
              <th scope="col">Setor</th>
              <th scope="col">Classificação</th>
              <th scope="col">Resposta</th>
              <th scope="col">Data envio</th>
              <th scope="col">Editar</th>
              <th scope="col">Apagar</th>
            </tr>
          </thead>
          <tbody>
            <tr class="text-center">
              <td>{{ $ato->numero }}</td>
              <td>{{ $ato->ano }}</td>
              <td>{{ $ato->ementa }}</td>
              <td>{{ $ato->setor }}</td>
              <td>{{ $ato->classificacao }}</td>
              <td>{{ $ato->resposta }}</td>
              <td>{{ $ato->data_envio }}</td>
              <td><a href="{{route('atos.edit', $ato->id)}}" class="btn btn-warning btn-sm text-white"><i
                    class="bi bi-pencil-square">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                      class="bi bi-pencil-square" viewBox="0 0 16 16">
                      <path
                        d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                      <path fill-rule="evenodd"
                        d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                    </svg></i></a></td>
              <td>
                <form action="{{ route('atos.destruir', $ato->id)}}" method="POST">
                  @method('DELETE')
                  @csrf
                  <button type="submit" class="btn btn-primary btn-sm text-white"><i class="bi bi-trash"><svg
                        xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-trash" viewBox="0 0 16 16">
                        <path
                          d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z" />
                        <path fill-rule="evenodd"
                          d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z" />
                      </svg></i></button>
                </form>
              </td>
            </tr>

          </tbody>
        </table>
      </div>
</body>
</body>

</html>-->