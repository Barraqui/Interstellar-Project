<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
        <link rel="stylesheet" href="recurso\estilo.css">
        <link rel="stylesheet" href="recurso\galeriaFilme.css">
        <link rel="shortcut icon" href="midia\love.ico" type="image/x-icon">
        <title>Interstellar Filme</title>

    </head>
    <body>
        <?php require_once('arquivosSite\header.php');?>

        <div><a class="voltar" href="galeriaImagens.php">Voltar</a></div>

        <main>
            <div id="galeria">
                <div class="grid">
                    <div class="foto" id="foto1">
                        <a href="#foto1">
                            <img class="galeria-imagens" src="https://hypescience.com/wp-content/uploads/2016/12/buraco-negro-interestelar-1.jpg" alt="">
                        </a>
                        <div class="fechar-foto"><a href="#Fechar">Fechar</a></div>
                    </div>
                    <div class="foto" id="foto2">
                        <a href="#foto2">
                            <img class="galeria-imagens" src="https://sm.ign.com/t/ign_br/articlepage/t/this-is-ho/this-is-how-interstellar-originally-ended_9e59.1280.jpg" alt="">
                        </a>
                        <div class="fechar-foto"><a href="#Fechar">Fechar</a></div>
                    </div>
                    <div class="foto" id="foto3">
                        <a href="#foto3">
                            <img class="galeria-imagens" src="https://external-preview.redd.it/x3CMvhZKhRai-t7KpTc-FW-jN7rb23MZjtdM7gcX9nQ.jpg?auto=webp&s=b54b87eab6f907d376e6f1a470adab0f8b204fef" alt="">
                        </a>
                        <div class="fechar-foto"><a href="#Fechar">Fechar</a></div>
                    </div>
                    <div class="foto" id="foto4">
                        <a href="#foto4">
                            <img class="galeria-imagens" src="https://cdn.universoracionalista.org/wp-content/uploads/2020/07/black-hole-miller.jpg" alt="">
                        </a>
                        <div class="fechar-foto"><a href="#Fechar">Fechar</a></div>
                    </div>
                    <div class="foto" id="foto5">
                        <a href="#foto5">
                            <img class="galeria-imagens" src="https://i.pinimg.com/736x/09/71/83/09718325fc438f1b42c18f42910fb2c1.jpg" alt="">
                        </a>
                        <div class="fechar-foto"><a href="#Fechar">Fechar</a></div>
                    </div>
                    <div class="foto" id="foto6">
                        <a href="#foto6">
                            <img class="galeria-imagens" src="https://www.magazine-hd.com/apps/wp/wp-content/uploads/2014/10/Interstellar-Galeria-III.jpg" alt="">
                        </a>
                        <div class="fechar-foto"><a href="#Fechar">Fechar</a></div>
                    </div>
                    <div class="foto" id="foto7">
                        <a href="#foto7">
                            <img class="galeria-imagens" src="https://www.thegoldentake.com/wp-content/uploads/Interstellar-%C2%A9-2014-Paramount-Pictures.jpg" alt="">
                        </a>
                        <div class="fechar-foto"><a href="#Fechar">Fechar</a></div>
                    </div>
                    <div class="foto" id="foto8">
                        <a href="#foto8">
                            <img class="galeria-imagens" src="https://static.polityka.pl/_resource/res/path/61/63/6163fcc5-3ecb-4f96-9c58-4ec32a177c9c" alt="">
                        </a>
                        <div class="fechar-foto"><a href="#Fechar">Fechar</a></div>
                    </div>
                    <div class="foto" id="foto9">
                        <a href="#foto9">
                            <img class="galeria-imagens" src="https://geneticaberrations.com/wp-content/uploads/2020/09/Interstellar-Tesseract-Wallpaper-aoe-The-Best-HD-Wallpaper.jpg" alt="">
                        </a>
                        <div class="fechar-foto"><a href="#Fechar">Fechar</a></div>
                    </div>
                    <div class="foto" id="foto10">
                        <a href="#foto10">
                            <img class="galeria-imagens" src="https://images.csmonitor.com/csm/2014/10/interstellar_1.jpg?alias=standard_900x600" alt="">
                        </a>
                        <div class="fechar-foto"><a href="#Fechar">Fechar</a></div>
                    </div>
                    <div class="foto" id="foto11">
                        <a href="#foto11">
                            <img class="galeria-imagens" src="https://i.pinimg.com/originals/f6/b3/65/f6b36555adaf2e213c9ce238322a21fa.jpg" alt="">
                        </a>
                        <div class="fechar-foto"><a href="#Fechar">Fechar</a></div>
                    </div>    
                    <div class="foto" id="foto12">
                        <a href="#foto12">
                            <img class="galeria-imagens" src="https://i.pinimg.com/originals/6b/de/7b/6bde7b25c24b959229561143f7f24ada.png" alt="">
                        </a>
                        <div class="fechar-foto"><a href="#Fechar">Fechar</a></div>
                    </div>
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