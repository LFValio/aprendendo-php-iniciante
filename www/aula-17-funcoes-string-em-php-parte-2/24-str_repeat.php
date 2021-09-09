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
            
                $nome = "Valio";
                $alo = str_pad($nome, 20, " ", STR_PAD_CENTER);
                echo "O $alo é muito bonito!"

            ?>

        </div>  
 
    </body>

</html>