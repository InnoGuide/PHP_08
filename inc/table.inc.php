<?php

if(isset($_GET['value'])){
    $value=$_GET['value'];
    echo "<table>";
    echo    "<tr>";
    foreach($tBuch[0] as $asso=>$dummy)
    echo "<th>$asso</th>";
    if($value>count($tBuch))
      $value=count($tBuch);
    for($i=0;$i<$value;$i=$i+1){
        echo "<tr>";
        foreach($tBuch[$i] as $data)
            echo "<td>$data</td>";
        echo "</tr>";
    }
    echo    "</tr>";
    echo "</table>";
}else
    echo "Bitte geben Sie einen Wert ein!";
?>