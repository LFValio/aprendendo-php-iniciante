<!DOCTYPE html>

<html lang="pt-br">

    <head>

        <meta charset="UTF-8">
        <link rel="stylesheet" href="../_css2/estilo.css"/>
        <title>Curso em Vídeo - PHP</title>

    </head>

    <body> 

        <div>

            <?php
        
                $txt = "Eu gosto de tomar café e programar!";
                $res = str_word_count($txt, 2);
                print_r($res);

            ?>

        </div>

    </body>

</html>