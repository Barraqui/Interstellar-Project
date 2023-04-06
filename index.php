<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
        <link rel="stylesheet" href="recurso\estilo.css">
        <link rel="stylesheet" href="recurso\elenco.css">
        <link rel="shortcut icon" href="midia\love.ico" type="image/x-icon">
        <title>Interstellar Project</title>

    </head>
    <body>
        
        <?php require_once('arquivosSite\header.php');?>

        <main>
            <div id="banner"></div>
            
            <div id="trailer">
                <video controls src="midia\y2meta.com - Interestelar - Trailer Oficial 3 dublado.mp4"></video>
                <div id="sinopse">
                    <h1>Sinopse</h1>
                    <p class="descricao">
                        Após ver a Terra consumindo boa parte de suas reservas naturais,
                        um grupo de astronautas recebe a missão de verificar possíveis planetas para receberem a população mundial,
                        possibilitando a continuação da espécie. Cooper (Matthew McConaughey) é chamado para liderar o grupo e aceita
                        a missão sabendo que pode nunca mais ver os filhos. Ao lado de Brand (Anne Hathaway), Jenkins (Marlon Sanders) e Doyle (Wes Bentley),
                        ele seguirá em busca de uma nova casa. Com o passar dos anos, sua filha Murph (Mackenzie Foy e Jessica Chastain) investirá numa própria jornada para também tentar salvar a população do planeta.
                    </p>
                </div>
            </div>
            <div id="actor-cards-container">
                <div class="cards-content">
                    <div class="card banner-1">Matthew McConaughey-Cooper</div>
                    <div class="card banner-2">Jessica Chastain-Murphy Cooper</div>
                    <div class="card banner-3">Anne Hathaway-Amelia Brand</div>
                    <div class="card banner-4">Michael Caine-Professor Brand</div>
                    <li id="scale"><a class="creditos" href="creditos.php">Elenco completo</a></li>
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
