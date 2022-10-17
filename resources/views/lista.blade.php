<!DOCTYPE html>
<html lang="pt-br">

<head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Lista</title>
</head>

<body>

    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Produto</th>
                <th scope="col">Valor</th>
                <th scope="col">Qt. em estoque</th>
            </tr>
        </thead>
        <tbody>
            @foreach($produtos as $produto)
            <tr>
                <th scope="row"> {{ $produto-> id }} </th>
                <td>{{ $produto-> nome }}</td>
                <td>{{ $produto-> valor }}</td>
                <td>{{ $produto-> estoque }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <div class="display-flex">

        <a class="btn btn-dark" href="/" role="button">Voltar</a>
        <a class="btn btn-dark" href="/editar-produto/" role="button">Editar produtos</a>

    </div>



    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>
