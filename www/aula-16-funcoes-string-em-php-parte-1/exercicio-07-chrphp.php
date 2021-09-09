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
        
                $letra = ord("c");
                $num = chr("99");
                echo "A letra c possui o código $letra";
                echo "<br>O número 99 é da letra $num";
                
                // seria mostrado a letra C.
                // a letra c possui o código 99.

            ?>

        </div>

    </body>

</html>