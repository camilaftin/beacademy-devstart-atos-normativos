<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PDF Atos</title>
</head>
<body>
  <div class="container">
    <h1 class="h4 text-gray-900 mb-4">Lista Resoluções</h1>
    <div class="card shadow mb-4">
    
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
                </td>
              </tr>
            </tbody>
            @endforeach
          </table>
        </div>
      </div>
    </div>

    <a href="{{route('pdf.convert')}}" class="btn btn-success">Convert PDF</a>
    
    
</body>

</html>