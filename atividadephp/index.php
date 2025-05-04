<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>


</head>

<body>

    <h2>Cadastro de Livro</h2>
    <form action="estoque.php" method="post">
        <p>
            <label for="titulo">Título do Livro:</label><br>
            <input type="text" name="titulo" placeholder="Título" required>
        </p>

        <p>
            <label for="autor">Autor:</label><br>
            <input type="text" name="autor" placeholder="Autor" required>
        </p>

        <p>
            <label for="preco">Preço Unitário (R$):</label><br>
            <input type="number" name="preco" step="0.01" placeholder="Preço" required>
        </p>

        <p>
            <label for="quantidade">Quantidade em Estoque:</label><br>
            <input type="number" name="quantidade" placeholder="Quantidade" required>
        </p>

        <button type="submit">Cadastrar Livro</button>
    </form>

</body>

</html>