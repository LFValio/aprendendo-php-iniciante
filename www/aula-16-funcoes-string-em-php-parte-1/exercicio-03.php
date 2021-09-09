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
        
                $txt = "À partirrrrrrrrrrrrrrrrrrrrrrrrr deste momento eu apenas estou digitando o que vêm à minha cabeça, ao mesmo tempo de uma forma que tento deixar o texto coerente e com algum significado e não fique disperso de forma aleatória.";
                $wr = wordwrap($txt, 15, "<br>\n", false);
                echo $wr;
            ?>

        </div>

    </body>

</html>