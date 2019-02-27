<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Cores</title>
    </head>
    <body>
        <?php
        $cores = array ();
        $cores[0] = 'branco';
        $cores[1] = 'marrom';
        $cores[2] = 'preto';
        
        function cores_vetor ($cores) {
            for ($i=0; $i<count($cores); $i++) {
            ?>  
            <li><?php echo $cores[$i];?></li> 
       <?php              
            }
               
           }
        ?>
            <ul>
                 <?php cores_vetor($cores);?>
            </ul>        
    </body>
</html>
