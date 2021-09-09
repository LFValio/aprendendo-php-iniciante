<!DOCTYPE html>

<html lang="pt-br">

    <head>

        <meta charset="UTF-8">
        <link rel="stylesheet" href="../_css2/estilo.css"/>

    </head>

    <body>
        <div>

            <?php
                for($c=1;$c<5;$c++) {
                    $num[$c] = isset($_GET["$c"])?$_GET["$c"]:0;
            }
                print_r($num);
            ?>

        </div>
    </body>

</html>