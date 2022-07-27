<!--<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edição {{$ato->numero}}</title>-->
<!---------------------------------------------------------------------------->

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!---------------------------------------------------------------------------->

<style>
.get-in-touch {
  max-width: 800px;
  margin: 50px auto;
  position: relative;

}

.get-in-touch .title {
  text-align: center;
  text-transform: uppercase;
  letter-spacing: 3px;
  font-size: 3.2em;
  line-height: 48px;
  padding-bottom: 48px;
  color: #5543ca;
  background: #5543ca;
  background: -moz-linear-gradient(left, #f4524d 0%, #5543ca 100%) !important;
  background: -webkit-linear-gradient(left, #f4524d 0%, #5543ca 100%) !important;
  background: linear-gradient(to right, #f4524d 0%, #5543ca 100%) !important;
  -webkit-background-clip: text !important;
  -webkit-text-fill-color: transparent !important;
}

.contact-form .form-field {
  position: relative;
  margin: 32px 0;
}

.contact-form .input-text {
  display: block;
  width: 100%;
  height: 36px;
  border-width: 0 0 2px 0;
  border-color: #5543ca;
  font-size: 18px;
  line-height: 26px;
  font-weight: 400;
}

.contact-form .input-text:focus {
  outline: none;
}

.contact-form .input-text:focus+.label,
.contact-form .input-text.not-empty+.label {
  -webkit-transform: translateY(-24px);
  transform: translateY(-24px);
}

.contact-form .label {
  position: absolute;
  left: 20px;
  bottom: 11px;
  font-size: 18px;
  line-height: 26px;
  font-weight: 400;
  color: #5543ca;
  cursor: text;
  transition: -webkit-transform .2s ease-in-out;
  transition: transform .2s ease-in-out;
  transition: transform .2s ease-in-out,
    -webkit-transform .2s ease-in-out;
}

.contact-form .submit-btn {
  display: inline-block;
  background-color: #000;
  background-image: linear-gradient(125deg, #a72879, #064497);
  color: #fff;
  text-transform: uppercase;
  letter-spacing: 2px;
  font-size: 16px;
  padding: 8px 16px;
  border: none;
  width: 200px;
  cursor: pointer;
  margin: 3.5px;
}
</style>

</head>

<body>
  <section class="get-in-touch">
    <h1 class="title">Editar Resolução {{$ato->numero}}</h1>
    <form class="contact-form row" action="{{route('atos.update', $ato->id)}}" method="POST">
      @method('PUT')
      @csrf
      <div class="form-field col-lg-6">
        <input id="numero" name="numero" class="input-text js-input" type="number" value="{{$ato->numero}}" required>
        <label class="label" for="numero">Numero</label>
      </div>
      <div class="form-field col-lg-6 ">
        <input id="ano" name="ano" class="input-text js-input" type="number" step="0.01" min="0" value="{{$ato->ano}}"
          required>
        <label class="label" for="ano">Ano</label>
      </div>
      <div class="form-field col-lg-6 ">
        <input id="setor" name="setor" class="input-text js-input" type="text" value="{{$ato->setor}}" required>
        <label class="label" for="setor">Setor</label>
      </div>
      <div class="form-field col-lg-6 ">
        <input id="classificacao" name="classificacao" class="input-text js-input" type="text"
          value="{{$ato->classificacao}}" required>
        <label class="label" for="classificacao">Classificação</label>
      </div>
      <div class="form-field col-lg-6">
        <input id="resposta" name="resposta" class="input-text js-input" type="text" value="{{$ato->resposta}}"
          required>
        <label class="label" for="resposta">Resposta</label>
      </div>
      <div class="form-field col-lg-6">
        <input id="data_envio" name="data_envio" class="input-text js-input" type="text" value="{{$ato->data_envio}}"
          required>
        <label class="label" for="data_envio">Data Envio</label>
      </div>
      <div class="form-field col-lg-12">
        <input id="ementa" name="ementa" class="input-text js-input" type="text" value="{{$ato->ementa}}" required>
        <label class="label" for="ementa">Ementa</label>
      </div>
      <div class="form-field col-lg-12 d-grid gap-2 d-md-flex justify-content-md-end">
        <button type="submit" class="submit-btn">Atualizar</button>
      </div>
    </form>
  </section>

</body>

</html>