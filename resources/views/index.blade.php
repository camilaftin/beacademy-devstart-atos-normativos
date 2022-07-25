<!--<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Resolução Cepe</title>
</head>-->
@include('layout.head')
<body>
@include('layout.navbar')
<div class="container">  
        <h1>Lista das Resoluções do Cepe</h1>
        <a href="/criar" class="btn btn-info btn-sm text-white">Cadastrar</a>
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
                    @foreach($atos as $ato)
                    <tr class="text-center">                        
                        <td>{{ $ato->numero }}</td>
                        <td>{{ $ato->ano }}</td>
                        <td>{{ $ato->ementa }}</td>
                        <td>{{ $ato->setor }}</td>
                        <td>{{ $ato->resposta }}</td>
                        <td>{{ $ato->classificacao }}</td>
                        <td>{{ $ato->data_envio }}</td>
                        <td><a href="{{route('atos.show', $ato->id)}}" class="btn btn-info btn-sm text-white">Visualizar</a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="pagination justify-content-center">
            {{$atos->links('pagination::bootstrap-5')}}
            </div>
        </div>    
<footer class="footer">
    <div class="container">
        By Camila</br>
        Programa DevStart</br>
        Be academy
    </div>
</footer>

</body>
</html>