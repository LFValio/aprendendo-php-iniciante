<!DOCTYPE html>

<html lang="pt-br">

    <head>

        <meta charset="UTF-8">
        <link rel="stylesheet" href="../_css2/estilo.css"/>
        <title>exercicio 1</title>

    </head>

    <body> 

        <div>

            <form method="get" action="exercicio-3-1.php">
                <?php 
                    $c = 1;
                    while ($c <= 5) {
                       echo "Valor $c: <input type='number' name='val$c' max='100' min='0' value='0'><br>";
                       $c++;
                    }
                ?>
                <input type="submit" value="Enviar" class="botao">
            </form>
            
        </div>

    </body>

</html>