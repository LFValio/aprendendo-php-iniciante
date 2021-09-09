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
            
                function somaRef(&$x) {
                    $x += 5;
                    return $x;
                }  


                function somaVal($y) {
                    $y += 10;
                    return $y;
                }


                $n1 = 5;
                echo "<p>Valor recebido de n1: $n1</p>";
                $resRef = somaRef($n1);
                echo "<p>Valor de n1 alterado dentro da função (referência): $resRef</p>";
                echo "<p>Valor dentro do programa principal: $n1</p><br>";
                
                $n2 = 7;
                echo "<p>Valor Recebido de n2: $n2";
                $resVal = somaVal($n2);
                echo "<p>Valor de n2 alterado dentro da função (valor): $resVal</p>";
                echo "<p>Valor dentro do programa principal: $n2</p>";
            ?>

        </div>

    </body>

</html>