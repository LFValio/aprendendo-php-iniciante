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
                $numfin = isset($_GET["numfin"])?$_GET["numfin"]:10;

                $c = 1;
                $cf = $numfin;

                do {
                    echo "$num x $c = ". $c * $num;
                    $c++;
                    echo "<br>";
                } while($c <= $cf);
                
            ?>

            <br><br>
            <a href="javascript:history.go(-1)" class="botao">Voltar</a>

        </div>

    </body>

</html>