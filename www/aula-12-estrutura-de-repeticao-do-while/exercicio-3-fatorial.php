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
         
                $num = isset($_GET["num"])?$_GET["num"]:0;
                
                $fat = 1;
                $c = $num;

                if ($num == 0) {
                    $fat = 1;
                }
                else {
                    do {
                        $fat = $fat * $c;
                        $c--;
                    } while($c > 1);
                }

                echo "$num! = $fat";
                
            ?>

            <br><br>
            <a href="javascript:history.go(-1)" class="botao">Voltar</a>

        </div>

    </body>

</html>