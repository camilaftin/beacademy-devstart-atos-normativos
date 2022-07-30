@include('layout.head')


<body>
  @include('layout.navbar')

  <div class="container">
    <div class="card o-hidden border-0 shadow-lg my-5">
      <div class="card-body p-0">
        <div class="col-lg-11">
          <div class="p-5">
            <div class="text-center">
              <h1 class="h4 text-gray-900 mb-4">Cadastrar Resolução</h1>
            </div>

            @if($errors->any())
            <div class="alert alert-danger" role="alert">
              @foreach($errors->all() as $error)
              {{ $error }}<br>
              @endforeach
            </div>
            @endif




            <form class="user" action="{{route('atos.store')}}" method="POST" enctype="multipart/form-data">
              @csrf
              <div class="form-group row">
                <div class="col-sm-6 mb-3 mb-sm-0">
                  <input type="number" class="form-control form-control-user" id="numero" name="numero"
                    placeholder="Numero">
                </div>
                <div class="col-sm-6">
                  <input type="number" class="form-control form-control-user" id="ano" name="ano" placeholder="Ano">
                </div>
              </div>
              <div class="form-group row">
                <div class="col-sm-6 mb-3 mb-sm-0">
                  <input type="text" class="form-control form-control-user" id="setor" name="setor" placeholder="Setor">
                </div>
                <div class="col-sm-6">
                  <input type="text" class="form-control form-control-user" id="classificacao" name="classificacao"
                    placeholder="Classificacao">
                </div>
              </div>
              <div class="form-group row">
                <div class="col-sm-6 mb-3 mb-sm-0">
                  <input type="text" class="form-control form-control-user" id="resposta" name="resposta"
                    placeholder="Resposta">
                </div>
                <div class="col-sm-6">
                  <input type="text" class="form-control form-control-user" id="data_envio" name="data_envio"
                    placeholder="Data envio">
                </div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control form-control-user" id="ementa" name="ementa"
                  placeholder="Ementa">
              </div>
              <div class="form-group justify-center">
                <input type="file" class="form-control form-control-user" id="image" name="image" placeholder="image">
              </div>
              <div class="form-field col-lg-12 d-grid gap-2 d-md-flex justify-content-md-end">
                <button type="submit" class="btn btn-lg btn-success btn-icon-split"><span
                    class="text-white-50"></span>Confirmar</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>