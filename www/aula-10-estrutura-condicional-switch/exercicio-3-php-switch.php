<!DOCTYPE html>

<html lang="pt-br">

    <head>

        <meta charset="UTF-8">
        <link rel="stylesheet" href="../_css2/estilo.css"/>
        <title>Exercício - 3 - PHP - UF</title>

    </head>

    <body> 

        <div>

            <?php
            
                $est = isset($_GET["uf"])?$_GET["uf"]:0;

                switch($est) {
                    case 4:
                    case 1:
                    case 23:
                    case 22:
                    case 14:
                    case 3:
                    case 27:
                        echo "Região Norte";
                        break;
                    case 11:
                    case 12:
                    case 7:
                    case 9:
                        echo "Região Centro-Oeste";
                        break;
                    case 25:
                    case 13:
                    case 8:
                    case 19:
                        echo "Região Sudeste";
                        break;
                    case 16:
                    case 24:
                    case 21:
                        echo "Região Sul";
                        break;
                    default:
                        echo "Região Nordeste";

                    
                }

            ?>
            <br><br>
            <a href="javascript:history.go(-1)" class='botao'>Voltar</a>

        </div>
        


    </body>

</html>