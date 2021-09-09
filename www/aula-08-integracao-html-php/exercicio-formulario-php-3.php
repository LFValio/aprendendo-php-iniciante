<!DOCTYPE html>

<html lang="pt-br">

    <head>

        <?php 
        
            $texto = isset($_GET["t"])?$_GET["t"]:"[Texto Automático]";
            $tam = isset($_GET["tam"])?$_GET["tam"]:"12pt";
            $cor = isset($_GET["cor"])?$_GET["cor"]:"#000000";
            echo "$texto";

        ?>

        <meta charset="UTF-8">
        <link rel="stylesheet" href="../_css2/estilo.css"/>
        <title>Formulário - PHP</title>

        <style>

            span.txt {
                font-size: <?php echo $tam;?>;
                color: <?php echo $cor;?>;
            }

        </style>

    </head>

    <body> 

        <div>

            <?php
            
                echo "<span class='txt'>$texto</span>";

            ?>

            <a href="exercicio-formulario-html-3.html">Voltar</a>

        </div>


    </body>

</html>