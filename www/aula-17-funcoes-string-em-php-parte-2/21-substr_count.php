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
            
                $nome = "Estou aprendendo PHP porque gosto de PHP no Curso em Vídeo de PHP!";
                echo "A palavra 'PHP' foi encontrada ". substr_count($nome, "PHP"). " vezes.";

            ?>

        </div>  
 
    </body>

</html>