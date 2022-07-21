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
                        <td><a href="#" class="btn btn-warning btn-sm text-white"><i class="bi bi-pencil-square">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                            <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                            <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                        </svg></i></a></td>
                        <td><form action="{{ route('atos.destruir', $ato->id)}}" method="POST">
                                @method('DELETE')
                                @csrf
                            <button type="submit" class="btn btn-primary btn-sm text-white"><i class="bi bi-trash"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                                <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                            </svg></i></button>
                            </form>
                        </td>
                    </tr>
          
                </tbody>
            </table>
        </div>    
    </body>
</body>
</html>