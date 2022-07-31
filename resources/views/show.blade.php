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


    <!-- CARD DA IMAGE -->

    <div class="d-flex justify-content-center" style="padding-top: 40px">
      <div class="col-lg-20">
        <div class="card shadow mb-4">
          <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Resolução nº {{ $ato->numero }}/{{ $ato->ano }}</h6>
          </div>
          <div class="card-body">
            <td><img width="200px" height="200px" src="{{ asset('storage/' . $ato->image)}}" class="rounded mx-auto d-block"> </td>
          </div>
        </div>
      </div>
    </div>

    <!-- CARD DA EMENTA -->

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
      <form action=" {{ route('atos.destruir', $ato->id)}}" method="POST">
        @method('DELETE')
        @csrf
        <button type='submit' class="btn btn-lg btn-danger btn-icon-split" role="button" aria-pressed="true" style="width:100%">Excluir</button>
        </form>
        <div class="col-lg-1 d-md-flex justify-content-md-end">
          <a href="{{route('atos.edit', $ato->id)}}" class="btn btn-lg btn-warning btn-icon-split">Editar</a>
        </div>
      </div>
    </div>
  </div>