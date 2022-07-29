@include('layout.head')

<body>
  @include('layout.navbar')
  <div class="container">
  <h1 class="h4 text-gray-900 mb-4">Lista Resoluções</h1>
    <!--<a href="/criar" class="btn btn-info btn-sm text-white">Cadastrar</a>-->
    <div class="card shadow mb-4">
      <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Tabela Completa</h6>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
              <tr class="text-center">
                <th>Numero</th>
                <th>Ano</th>
                <th>Ementa</th>
                <th>Setor</th>
                <th>Classificacao</th>
                <th>Resposta</th>
                <th>Data Envio</th>
                <th>Acoes</th>
              </tr>
            </thead>
            <tbody>
              @foreach($atos as $ato)
              <tr class="text-center">
                <td>{{ $ato->numero }}</td>
                <td>{{ $ato->ano }}</td>
                <td>{{ $ato->ementa }}</td>
                <td>{{ $ato->setor }}</td>
                <td>{{ $ato->resposta }}</td>
                <td>{{ $ato->classificacao }}</td>
                <td>{{ $ato->data_envio }}</td>
                <td><a href="{{route('atos.show', $ato->id)}}" class="btn btn-info btn-sm text-white">Visualizar</a>
                </td>
              </tr>
            </tbody>
            @endforeach
          </table>
        </div>
      </div>
    </div>
    <footer class="sticky-footer bg-white">
      <div class="container my-auto">
        <div class="copyright text-center my-auto">
          <span>Copyright &copy; 2022 <br>By Camila Tinelli<br>DevStart<br>Be Academy</span>
        </div>
      </div>
    </footer>
</body>

</html>