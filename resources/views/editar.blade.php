<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projeto</title>
</head>

<body>

    <form action="/editar-produto/{{ $produto -> id }}" method="POST">

        @csrf

        <br>
        <label for="">Nome do produto:</label>
        <input type="text" name="nome" value="{{ $produto -> nome }}">
        <br><br>

        <label for="">Valor do produto:</label>
        <input type="text" name="valor" value="{{ $produto -> valor }}">
        <br><br>

        <label for="">Quantidade em estoque:</label>
        <input type="text" name="estoque" value="{{ $produto -> estoque }}">
        <br><br>

        <button> Editar produto </button>

    </form>

</body>

</html>
