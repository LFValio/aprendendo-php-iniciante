<!DOCTYPE html>

<html lang="pt-br">

    <head>

        <meta charset="UTF-8">
        <link rel="stylesheet" href="../_css2/estilo.css"/>

    </head>

    <body>
        <div>

            <form method="GET" action="teste-1.php">
                <?php
                    for($i=1;$i<5;$i++) {
                    echo "<input type='text' name='$i' placeholder='Nome'><br>";
                }
                ?>
                <input type="submit" value="Enviar">
            </form>

        </div>
    </body>

</html>