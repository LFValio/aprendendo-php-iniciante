<!DOCTYPE html>

<html lang="pt-br">

    <head>

        <meta charset="UTF-8">
        <link rel="stylesheet" href="../_css2/estilo.css"/>
        <title>Formulário - PHP</title>

    </head>

    <body> 

        <div>

            <?php
            
                    $valor = $_GET["v"];
                    echo "O valor obtido é $valor";
                    echo "<br>Sua raiz quadrada é ". number_format(sqrt($valor), 2);

            ?>

            <a href="exercicio-formulario-html.html">Voltar</a>

        </div>


    </body>

</html>