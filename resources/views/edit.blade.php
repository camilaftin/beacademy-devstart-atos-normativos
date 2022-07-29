<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
    <title>Edição {{$ato->numero}}</title>
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link
    href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
    rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/style.css" rel="stylesheet">

  <!-- Custom styles for this page -->
  <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://unpkg.com/tailwindcss@2.2.19/dist/tailwind.min.css"/> <!--Replace with your tailwind.css once created-->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.bundle.min.js" integrity="sha256-xKeoJ50pzbUGkpQxDYHD7o7hxe0LaOGeguUidbq6vis=" 
  crossorigin="anonymous"></script>
</head>

<body>
<div class="container">
    <div class="card o-hidden border-0 shadow-lg my-5">
      <div class="card-body p-0">
        <div class="col-lg-11">
          <div class="p-5">
            <div class="text-center">
              <h1 class="h4 text-gray-900 mb-4">Editar Resolução {{$ato->numero}}</h1>
            </div>
            <form class="contact-form row" action="{{route('atos.update', $ato->id)}}" method="POST">
              @method('PUT')
              @csrf
              <div class="form-group row">
                <div class="col-sm-6 mb-3 mb-sm-0">
                  <input type="number" class="form-control form-control-user" id="numero" name="numero" value="{{$ato->numero}}">
                </div>
                <div class="col-sm-6">
                  <input type="number" class="form-control form-control-user" id="ano" name="ano" value="{{$ato->ano}}">
                </div>
              </div>
              <div class="form-group row">
                <div class="col-sm-6 mb-3 mb-sm-0">
                  <input type="text" class="form-control form-control-user" id="setor" name="setor" value="{{$ato->setor}}">
                </div>
                <div class="col-sm-6">
                  <input type="text" class="form-control form-control-user" id="classificacao" name="classificacao" value="{{$ato->classificacao}}">
                </div>
              </div>
              <div class="form-group row">
                <div class="col-sm-6 mb-3 mb-sm-0">
                  <input type="text" class="form-control form-control-user" id="resposta" name="resposta" value="{{$ato->resposta}}">
                </div>
                <div class="col-sm-6">
                  <input type="text" class="form-control form-control-user" id="data_envio" name="data_envio" value="{{$ato->data_envio}}">
                </div>
                <div class="form-group">
                <input type="text" class="form-control form-control-user" id="ementa" name="ementa" value="{{$ato->ementa}}">
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
</html>


