<!DOCTYPE html>
<html lang="pt-br">

<head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Início</title>
</head>

<body>

    <div class="container">


        <form action="/cadastrar-produto" method="POST">

            @csrf
            <div class="form-group">
                <label>Nome do produto</label>
                <input class="form-control" type="text" name="nome">
            </div>

            <div class="form-group">
                <label>Valor do produto</label>
                <input class="form-control" type="text" name="valor">
                <small class="form-text text-muted">Utilize ponto no lugar da vírgula.</small>
            </div>

            <div class="form-group">
                <label>Quantidade em estoque</label>
                <input class="form-control" type="text" name="estoque">
            </div>

            <button type="submit" class="btn btn-dark">Enviar</button>
        </form> <br><br><br>


        <div class="display-flex">

            <a class="btn btn-dark" href="/lista-de-produtos" role="button">Lista de produtos</a>

        </div>


    </div>



    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>
