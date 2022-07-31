<!---------------------------------------------------------------------------->

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link href="/css/styleForm.css" rel="stylesheet">
<!---------------------------------------------------------------------------->
@include('layout.head')

<body>
  <section class="get-in-touch">
    <h1 class="title">Editar Resolução {{$ato->numero}}</h1>
    @if($errors->any())
    <div class="alert alert-danger" role="alert">
      @foreach($errors->all() as $error)
      {{ $error }}<br>
      @endforeach
    </div>
    @endif

    <form class="contact-form row" action="{{route('atos.update', $ato->id)}}" method="POST" enctype="multipart/form-data">
      @method('PUT')
      @csrf
      <div class="form-field col-lg-6">
        <input id="numero" name="numero" class="input-text js-input" type="number" value="{{$ato->numero}}">
        <label class="label" for="numero">Numero</label>
      </div>
      <div class="form-field col-lg-6 ">
        <input id="ano" name="ano" class="input-text js-input" type="number" step="0.01" min="0" value="{{$ato->ano}}">
        <label class="label" for="ano">Ano</label>
      </div>
      <div class="form-field col-lg-6 ">
        <input id="setor" name="setor" class="input-text js-input" type="text" value="{{$ato->setor}}">
        <label class="label" for="setor">Setor</label>
      </div>
      <div class="form-field col-lg-6 ">
        <input id="classificacao" name="classificacao" class="input-text js-input" type="text" value="{{$ato->classificacao}}">
        <label class="label" for="classificacao">Classificação</label>
      </div>
      <div class="form-field col-lg-6">
        <input id="resposta" name="resposta" class="input-text js-input" type="text" value="{{$ato->resposta}}">
        <label class="label" for="resposta">Resposta</label>
      </div>
      <div class="form-field col-lg-6">
        <input id="data_envio" name="data_envio" class="input-text js-input" type="text" value="{{$ato->data_envio}}">
        <label class="label" for="data_envio">Data Envio</label>
      </div>
      <div class="form-field col-lg-12">
        <input id="ementa" name="ementa" class="input-text js-input" type="text" value="{{$ato->ementa}}">
        <label class="label" for="ementa">Ementa</label>
      </div>
      <div class="form-field col-lg-12">
        <input id="image" name="image" class="input-text js-input" type="file" value="{{$ato->image}}">Selecione uma
        imagem
      </div>
      <div class="form-field col-lg-12 d-grid gap-2 d-md-flex justify-content-md-end">
        <button type="submit" class="submit-btn">Atualizar</button>
        <a href="{{route('atos.index')}}" class="submit-btn text-center" style="text-decoration: none">Voltar</a>
      </div>
    </form>
  </section>

</body>

</html>