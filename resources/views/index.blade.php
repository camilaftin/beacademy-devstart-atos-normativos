@include('layout.head')

<td><a href="{{route('atos.pdf')}}">PDF</a></td>

<body>
  @include('layout.navbar')
  <div class="container">
    <!--<h1 class="h4 text-gray-900 mb-4">Lista Resoluções</h1>-->
    <div class="row">
      <div class="col-mt-6 mb-5" style="padding: 40px;">
        <form action="{{route('atos.index')}}" method="get">
          <div class="input-group">
            <input type="search" class="form-control rounded" name="search" placeholder="Procurar" aria-label="Search" aria-describedby="search-addon" />
            <button type="submit" class="btn btn-outline-primary">Procurar</button>
          </div>
        </form>
      </div>
    </div>
    <!--<a href="/criar" class="btn btn-info btn-sm text-white">Cadastrar</a>-->
    <div class="card shadow mb-4">
      <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Tabela com as resoluções</h6>
      </div>
      <div class="card-body">
        <div class="table-responsive">
        
          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
              <tr class="text-center">
                <th>Imagem</th>
                <th>Numero</th>
                <th>Ano</th>
                <th>Ementa</th>
                <th>Setor</th>
                <th>Resposta</th>
                <th>Classificacao</th>
                <th>Data Envio</th>
                <th>Acoes</th>
              </tr>
            </thead>
            <tbody>
              @foreach($atos as $ato)
              <tr class="text-center">
                <td id="image"><img width="100px" height="100px" src="{{ asset('storage/' . $ato->image)}}" class="rounded mx-auto d-block" id="image"> </td>
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
    <div class="pagination justify-content-center">
      {{$atos->links('pagination::bootstrap-5')}}
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