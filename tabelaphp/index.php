<?php
    include("config/global.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
      
         $a= rand(10,30);   
        for( $i=1; $i<=$a; $i++ ) {
            for( $j=1; $j<=$a; $j++ ) {  
        $valor[$i][$j] = rand(1,100);}
          
        }
    ?> 

     <table border="4" >  
          <tr> 
              
         <?php 
            for( $i=1; $i<=$a; $i++ )  { echo '<tr>' ;
                for( $j=1; $j<=$a; $j++ )  {
                echo '<td>'.$valor[$i][$j] .'</td>';}  echo '</tr>';
                }
          ?>      
         </tr>
         
        </table>  
       
</body>
</html>