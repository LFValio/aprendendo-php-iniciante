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
            
                $nome = isset($_GET["nome"])?$_GET["nome"]:"[nome não informado]";
                $ano = isset($_GET["anonasc"])?$_GET["anonasc"]:0;
                $idade = date("Y") - $ano;
                $sexo = isset($_GET["sexo"])?$_GET["sexo"]:"[sexo não informado]";
                echo "Valores recebidos:";
                echo "<br>Seu nome é $nome, você é $sexo e você tem $idade anos.";

            ?>

            <a href="exercicio-formulario-html-2.html">Voltar</a>

        </div>


    </body>

</html>