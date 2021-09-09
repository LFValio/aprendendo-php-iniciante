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

                $c = 1;
                while ($c <= 5) {
                    $val = "num$c"; //num1, num2, num3, num4, num5
                    $url = "val$c"; //val1, val2, val3, val4, val5
                    $$val = isset($_GET[$url]) ? $_GET[$url] : 0; //$num1 = val1
                    echo "Valor $c: ". $$val;
                    $c++; // 1 + 1 + 1 + 1 + 1
                    echo "<br>";
                } 

                /* variável dinâmica (uma variável que se altera sozinha)
                 o que está acontecendo é que ela está se transformando em 5 variáveis diferentes, $num1,  $num2, $num3, $num4 e $num5
                 isso acontece por causa do uso de variáveis de variáveis --> $$val 
                 (que é basicamente a variável $num que receberá a sequência de números de $c.)
                 então, a variável $num (que é $$val) vai puxar os valores colocados pelo usuário nas caixas de texto do arquivo PHP anterior */



                 // aqui um teste (deu certo)

                /* $c = 1;
                while ($c <= 5) {
                    $valor = "num$c";
                    $a = "val$c";
                    $$valor = $_GET["$a"];
                    echo "Valor $c: ". $$valor;
                    $c++;
                    echo "<br>";
                } */

            ?>
                        
        </div>

    </body>

</html>