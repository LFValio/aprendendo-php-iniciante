<!DOCTYPE html>

<html lang="pt-br">

    <head>

        <meta charset="UTF-8">
        <link rel="stylesheet" href="../_css2/estilo.css"/>
        <title>exercicio 2</title>

    </head>

    <body> 

        <div>

            <?php
            
                $ini = isset($_GET["numin"])?$_GET["numin"]:0;
                $fin = isset($_GET["numfin"])?$_GET["numfin"]:0;
                $inc = isset($_GET["inc"])?$_GET["inc"]:0;

                if ($ini >= $fin) {
                    while ($ini >= $fin) {
                        echo $ini;
                        $ini -= $inc;
                        echo "<br>";
                    }
                }
                else {
                    while ($ini <= $fin) {
                        echo $ini;
                        $ini += $inc;
                        echo "<br>";
                    }
                }
                
            ?>

        </div>

    </body>

</html>