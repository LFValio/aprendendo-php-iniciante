<!DOCTYPE html>

<html lang="pt-br">

    <head>

        <meta charset="UTF-8">
        <link rel="stylesheet" href="../_css2/estilo.css"/>
        <title>Exercício 3 - PHP - Média</title>

    </head>

    <body> 

        <div>

            <?php
            
                $nota1 = isset($_GET["nota1"])?$_GET["nota1"]:0;
                $nota2 = isset($_GET["nota2"])?$_GET["nota2"]:0;
                $media = ($nota1 + $nota2) / 2;

                if ($media < 5) {
                    $situacao = "REPROVADO!";
                }
                elseif ($media >= 5 && $media < 7) {
                    $situacao = "RECUPERAÇÃO!";
                }
                else {
                    $situacao = "APROVADO!";
                }

                echo "Nota 1: $nota1";
                echo "<br>Nota 2: $nota2";
                echo "<br>Sua média foi $media, sua situação é: $situacao";

            ?>

            <a href="exercicio-3.html"><br>Voltar</a>

        </div>

    </body>

</html>