<!DOCTYPE html>

<html lang="pt-br">

    <head>

        <meta charset="UTF-8">
        <link rel="stylesheet" href="../_css2/estilo.css"/>
        <title>exercicio 1</title>

    </head>

    <body> 

        <div>

            <?php
            
                    $c = 0;
                    do {
                        echo $c;
                        $c += 2;
                        echo "<br>";
                    } while($c <= 20);

            ?>

        </div>

    </body>

</html>