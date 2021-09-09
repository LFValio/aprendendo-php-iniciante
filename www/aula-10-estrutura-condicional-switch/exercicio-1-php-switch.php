<!DOCTYPE html>

<html lang="pt-br">

    <head>

        <meta charset="UTF-8">
        <link rel="stylesheet" href="../_css2/estilo.css"/>
        <title>Exercício - 1 - PHP - Switch</title>

    </head>

    <body> 

        <div>

            <?php
            
                $num = isset($_GET["num"])?$_GET["num"]:0;
                $op = isset($_GET["oper"])?$_GET["oper"]:1;
                
                switch($op) {
                    case 1:
                        $re = pow($num, 2);
                        break;
                    case 2:
                        $re = $num * 3;
                        break;
                    case 3:
                        $re = number_format(sqrt($num), 2);
                        break;
                }

                echo "O resultado da operação selecionada é: <span class='foco'>$re</span><br><br>";

            ?>

                <a href="exercicio-1-html-switch.html"><span class='botao'>Voltar</a>

        </div>

    </body>

</html>