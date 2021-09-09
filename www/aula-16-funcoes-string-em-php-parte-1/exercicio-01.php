<!DOCTYPE html>

<html lang="pt-br">

    <head>

        <meta charset="UTF-8">
        <link rel="stylesheet" href="../_css2/estilo.css"/>
        <title>Curso em Vídeo - PHP</title>

    </head>

    <body> 

        <div>

            <?php
            
                  $prod = "café";
                  $preco = "6.99";
                  printf("O %s está custando R$%.2f!", $prod, $preco);

            ?>

        </div>

    </body>

</html>