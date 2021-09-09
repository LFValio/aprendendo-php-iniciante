<!DOCTYPE html>

<html lang="pt-br">

    <head>

        <meta charset="UTF-8">
        <link rel="stylesheet" href="../_css/estilo.css"/>
        <title>Funções Aritméticas Adicionais</title>
        <style>

            h3 {
                font: 20pt Times;
                color: #4169e1;
                font-weight: bold;
            }        

        </style>

    </head>

    <body>

        <div>

            <?php
            
                    $v1 = $_GET["a"];
                    $v2 = $_GET["b"];
                    echo "<h3>Valores atribuídos: $v1 e $v2.</h3>";
                    echo "O valor absoluto de $v1 é: ". abs($v1);
                    echo "<br>O valor de $v1<sup>$v2</sup> é: ". pow($v1, $v2);
                    echo "<br>O valor da raiz quadrada de $v1 é: ". sqrt($v1);
                    echo "<br>Arredondamento de $v2: ". round($v2);
                    echo "<br>Parte inteira de $v2: ". intval($v2);
                    echo "<br>O valor de $v2 em moeda é: R$". number_format($v2, 2, ",", ".");

            ?>

        </div>

    </body>

</html>