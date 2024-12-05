<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Biblioteca da FBStech</title>
</head>
<body>
    <div id="page">
        <main>
            <div class="headline">
                <h1>Biblioteca FBStech</h1>
                <p>Cadastre livros que você recomenda para uma leitura que acrescente aos seus colegas</p>
            </div>
            <form action="" id="formulario">
                <div class="input-wrapper">
                    <label for="titulo">Titulo</label>
                    <input type="text" name="titulo" id="titulo" placeholder="Titulo do Livro">
                </div>
                <div class="input-wrapper">
                    <label for="autor">Autor</label>
                    <input type="text" name="autor" id="autor" placeholder="Autor do Livro">
                </div>
                <div class="input-wrapper">
                    <label for="ano">Ano de Publicação</label>
                    <input type="text" name="ano" id="ano" placeholder="Ano de publicação">
                </div>
                <div class="input-wrapper">
                    <label for="isbn">ISBN</label>
                    <input type="text" name="ISBN" id="isbn" placeholder="ISBN">
                </div>
                <div class="input-wrapper">
                    <label for="sinopse">Sinopse</label>
                    <textarea name="sinopse" id="sinopse">Sinopse do Livro</textarea>
                </div>
                <div class="button">
                    <input type="submit" value="Cadastrar">
                </div>
            </form>
        </main>
    </div>
</body>
</html>