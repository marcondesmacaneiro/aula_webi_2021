<?php

         $iLinha = ($_GET['Linhas']);//rand(10, 30);
         $iColuna = ($_GET['Colunas']);//rand(10, 30);
         $iItens= ($_GET['Itens']);
         $iPagina=isset($_GET['pagina'])?$_GET['pagina']:1;
        for ($i = 0; $i < $iLinha; $i++) {
            for($j = 0; $j <= $iColuna; $j++) {
                $aArray[$i][$j] = rand(0, 100);
            }
        }


        echo '<table border="1">';
        $valor = $iPagina*$iItens;
        $fim = ($valor==$iItens)?$fim=$iItens-1:$fim=$valor-1;

        $inicio = ($valor==$iItens)?$inicio=0:$fim-($iItens-1);
        
                for ($i = $inicio; $i <= $fim; $i++) {
                 echo '<tr>';
                     echo "<td>{$i}</td>";
                    for($j = 0; $j <= $iColuna; $j++) {
                    echo '<td>';
                    echo $aArray[$i][$j]. ' ';
                    echo '</td>';
                }      
            echo '</tr>';  
            }     
          
        echo '</table>';

    
        for ($i = 1; $i <= ($iLinha/$iItens); $i++) {
            echo "<a href=\"?Linhas=$iLinha&Colunas=$iColuna&Itens=$iItens&salvar=Salvar&pagina={$i}\">{$i}</a> ";
        }
    ?>
  
