<!DOCTYPE html>

<html lang="pt-br">

    <head>

        <meta charset="UTF-8">
        <link rel="stylesheet" href="../_css2/estilo.css"/>
        <title>exercicio 1</title>

    </head>

    <body> 

        <div>

            <form method="get" action="exercicio-2.php">
                Escolha uma Tabuada:
                <select name="num" id="inum" class="botao">
                    <?php 
                        for ($c=1;$c<=10;$c++) {
                            echo "<option>$c</option>";
                        }
                    ?>
                </select><br><br>
                <input type="submit" value="Visualizar" class="botao">
            </form>

        </div>

    </body>

</html>