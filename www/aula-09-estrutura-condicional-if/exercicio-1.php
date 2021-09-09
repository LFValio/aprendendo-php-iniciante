<!DOCTYPE html>

<html lang="pt-br">

    <head>

        <meta charset="UTF-8">
        <link rel="stylesheet" href="../_css2/estilo.css"/>
        <title>Exercício 1 - PHP - Estrutura Condicional</title>

    </head>

    <body> 

        <div>

            <?php
            
                $ano = isset($_GET["ano"])?$_GET["ano"]:1900;
                $idade = date("Y") - $ano;
                if ($idade >= 18) {
                    $vota = "já pode votar";
                    $dirige = "já pode dirigir";
                }
                else {
                    $vota = "não pode votar";
                    $dirige = "não pode dirigir";
                }

                echo "Você nasceu em $ano e tem $idade anos, você $vota e também $dirige.";

            ?>

        </div>

    </body>

</html>