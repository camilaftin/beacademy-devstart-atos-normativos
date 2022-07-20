<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Resolução {{ $ato->numero }}</title>
</head>
<body>
<div class="container">
        <h1>Resolução nº {{ $ato->numero }}/{{ $ato->ano }}</h1>
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
                        <th scope="col">Ações</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>{{ $ato->numero }}</td>
                        <td>{{ $ato->ano }}</td>
                        <td>{{ $ato->ementa }}</td>
                        <td>{{ $ato->setor }}</td>                        
                        <td>{{ $ato->classificacao }}</td>
                        <td>{{ $ato->resposta }}</td>
                        <td>{{ $ato->data_envio }}</td>
                        <td><a href="#" class="btn btn-warning btn-sm text-white">Editar</a>
                            <a href="#" class="btn btn-danger btn-sm text-white">Excluir</a>
                    </td>
                    </tr>
          
                </tbody>
            </table>
        </div>    
    </body>
</body>
</html>