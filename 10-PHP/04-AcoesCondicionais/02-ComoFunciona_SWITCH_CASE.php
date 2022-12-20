<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>CURSO PHP FUNDAMENTAL</title>
    </head>
    <body>
        <?php 

            $_dia = "quarta";

            switch  ($_dia){
                case "segunda":
                    echo "Hoje é segunda";
                break;

                case "terca":
                    echo "hoje é terca";
                break;

                case "quarta":
                    echo "hoje é quarta";
                break;

                case "quinta":
                    echo "hoje é quinta";
                break;

                case "sexta":
                    echo "hoje é sexta";
                break;
                
                case "sabado":
                    echo "hoje é sabado";
                break;

                default:
                    echo "hoje é domingo";
            }

        ?>
    </body>
</html>