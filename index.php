<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Primos</title>
    </head>
    <body>
        <?php
            function numeros_primos ($num) {
                $cont = 0;
                if ($num == 1){
                    echo "Número $num é primo!";
                }else {
                for ($i=1; $i<=$num; $i++) {
                    if ($num%$i == 0) {
                        $cont++;
                    }
                }
                if ($cont == 2) {
                    echo "Número $num é primo!";
                }else {
                    echo "Número $num é composto!";
                }
                }
            }
        ?>
    </body>
</html>
