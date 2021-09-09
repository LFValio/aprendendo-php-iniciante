<!DOCTYPE html>

<html lang="pt-br">

    <head>

        <meta charset="UTF-8">
        <link rel="stylesheet" href="../_css2/estilo.css"/>
        <title>exercicio 1</title>

    </head>

    <body> 

        <div>

            <?php
            
                $num = isset($_GET["num"])?$_GET["num"]:0;
                $qnt_mult = 0;
                echo "Analisando o número $num...";
                echo "<br><br>É múltiplo por: ";
                for ($c=1;$c<=$num;$c++) {
                    if ($num % $c == 0) {
                        echo "$c ";
                        $qnt_mult += 1;
                    }
                }
                echo "<br><br>Total de múltiplo: $qnt_mult";
                if ($qnt_mult == 2) {
                    echo "<br><br>Resultado: $num <span class='foco'>é número primo!</span>";
                }
             ?   else {
                    echo "<br><br>Resultado: $num <span class='foco'>não é primo</span>!";
                }

                    
            ?><br><br>

            <a href="javascript:history.go(-1)" class="botao">Voltar</a>

        </div>

    </body>

</html>