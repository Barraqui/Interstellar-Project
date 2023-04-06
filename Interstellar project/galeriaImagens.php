<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
        <link rel="stylesheet" href="recurso\estilo.css">
        <link rel="stylesheet" href="recurso\galeriaImagens.css">
        <link rel="shortcut icon" href="midia\love.ico" type="image/x-icon">
        <title>Interstellar Galeria</title>

    </head>
    <body>
        <?php require_once('arquivosSite\header.php');?>
        <main>
            <div class="imagens-cards-container">
                <div class="imagens-cards">
                    <a href="galeriaFilme.php"><div class="card numero-1">Galeria Filme</div></a>
                    <a href="galeriaBastidores.php"><div class="card numero-2">Galeria Bastidores</div></a>
                </div>

            </div>
        </main>
        

        <footer>
            <div id="img-footer">
                <img class="img-footer" src="midia\love.jpg"/>
            </div>
            <span>Todos os direitos reservados © <?= date('Y'); ?> </span>
            <span>Desenvolvido por: Gabriel Barraqui</span>
        </footer>
    </body>

    <script src="recursosJS/botaoMusica.js"></script>
</html>