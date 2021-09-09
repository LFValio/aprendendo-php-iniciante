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
            
                    $num = isset($_GET["num"])?$_GET["num"]:10;

                    for ($c=1;$c<=10;$c++) {
                        echo "$num x $c = ". $c * $num;
                        echo "<br>";
                    }

            ?><br>

            <a href="javascript:history.go(-1)" class="botao">Voltar</a>

        </div>

    </body>

</html>