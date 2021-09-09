<!DOCTYPE html>

<html lang="pt-br">

    <head>

        <meta charset="UTF-8">
        <link rel="stylesheet" href="../_css2/estilo.css"/>
        <title>Exercício 2 - PHP - elseif</title>

    </head>

    <body> 

        <div>

            <?php
            
                $ano = isset($_GET["ano"])?$_GET["ano"]:1900;
                $idade = date("Y") - $ano;
                if ($idade < 16) {
                    $voto = "não permitido";
                }
                elseif (($idade >= 16 && $idade < 18) || ($idade > 65)) {
                        $voto = "opcional";
                }
                else {
                        $voto = "obrigatório";
                }
            

                echo "Você nasceu em $ano e tem $idade anos, seu voto é $voto.";

            ?>

            <a href="exercicio-2.html">Voltar</a>

        </div>

    </body>

</html>