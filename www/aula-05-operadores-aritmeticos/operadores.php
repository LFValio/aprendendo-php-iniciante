<!DOCTYPE html>

<html lang="pt-br">

    <head>

        <title>Operadores Aritméticos</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="../_css/estilo.css"/>

    </head>

    <body>

        <div>

            <?php
            
            $num1 = $_GET["a"];
            $num2 = $_GET["b"];

            echo "<h3>Valores atribuídos: $num1 e $num2.</h3>";

            echo "A média desses dois números é: ". (($num1 + $num2) / 2);

            echo "<br>A soma vale: ". ($num1 + $num2);
            echo "<br>A subtração vale: ". ($num1 - $num2);
            echo "<br>A divisão vale: ". ($num1 / $num2);
            echo "<br>O módulo vale: ". ($num1 % $num2);

            ?>

        </div>

    </body>

</html>