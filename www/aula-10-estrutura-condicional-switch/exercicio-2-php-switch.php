<!DOCTYPE html>

<html lang="pt-br">

    <head>

        <meta charset="UTF-8">
        <link rel="stylesheet" href="../_css2/estilo.css"/>
        <title>Exercício - 2 - PHP - Semana</title>

    </head>

    <body> 

        <form method="get" action="exercicio-formulario.php">
            
        </form>

        <div>

            <?php
            
                    $valor = isset($_GET["slc"])?$_GET["slc"]:0;

                    switch($valor) {
                        case 1:
                        case 2:
                        case 3:
                        case 4:
                        case 5:
                            echo "Dia de estudo!";
                            break;
                        case 6:
                        case 7:
                            echo "Dia de descanso, pequeno gafanhoto";
                            break;
                    }

            ?>
                    <br><br>
                    <a href="javascript:history.go(-1)" class='botao'>Voltar</a>

        </div>

    </body>

</html>