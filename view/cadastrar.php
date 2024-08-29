<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> Cadastro de Filmes</h1>
    <form action="http://localhost/aula4/controller/FilmeController.php?metodo=cadastrarFilme" method="post">
        <label for="titulo">Titulo: </label>
        <input type="text" name="titulo" id="titulo"> <br>

        <label for="diretor">Diretor:</label>
        <input type="text" name="diretor" id="diretor"> <br>

        <label for="ano">Ano:</label>
        <input type="number" name="ano" id="ano"> <br>

        <label for="sinopse">Sinopse:</label>
        <input type="text" name="sinopse" id="sinopse"> <br>
        <button type="submit">Enviar</button>
</form>
</body>
</html>