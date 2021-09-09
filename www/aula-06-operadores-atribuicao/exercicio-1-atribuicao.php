<!DOCTYPE html>

<html lang="pt-br">

    <head>

        <meta charset="UTF-8">
        <link rel="stylesheet" href="../_css/estilo.css"/>
        <title>Exercício - Atribuição</title>

    </head>

    <body> 

        <div>

            <?php
            
                //Aplicar 10% de desconto a um produto.
                //Aplicar 10% de aumento a outro produto.       

                $preco = $_GET["a"];
                $preco2 = $_GET["b"];

                echo "O preço do produto 1 é R$". number_format(($preco), 2);
                echo "<br>O preço do produto 2 é R$". number_format(($preco2), 2); 

                $preco -= $preco * 0.1;
                echo "<br>O novo preço do produto com 10% de desconto é de R$". number_format(($preco), 2);

                $preco2 += $preco2 * 0.1;
                echo "<br>O novo preço do produto com 10% de aumento é de R$". number_format(($preco2), 2); 

            ?>

        </div>

    </body>

</html>