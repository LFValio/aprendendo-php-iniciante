<!DOCTYPE html>

<html lang="pt-br">

    <head>

        <meta charset="UTF-8">
        <link rel="stylesheet" href="../_css/estilo.css"/>
        <title>Exercício 4 - Variável Variante</title>

    </head>

    <body> 

        <div>

            <?php
            
                $x = "abc";
                $$x = "def";
                echo "O conteúdo da variável x é $x.";
                echo "<br>A variável abc criada recebeu o valor $abc.";

            ?>

        </div>

    </body>

</html>