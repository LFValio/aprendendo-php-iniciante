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
        
                $v[0] = 4;
                $v[1] = 6;
                $v[2] = 8;
                var_export($v);

                echo "<br><br>";

                $v2 = array(5, 1, 2, 9, 3.5, 6, 7);
                var_dump($v2);

            ?>

        </div>

    </body>

</html>