<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Primos 100</title>
    </head>
    <body>
        
        <?php
            require "index.php";
            
            function primos_100 () {
                for ($i=1; $i<100; $i++) {
                    numeros_primos ($i);
                }
            }
            primos_100();
        ?>
    </body>
</html>
