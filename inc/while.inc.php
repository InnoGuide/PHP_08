<?php
    $i=0;
    $sumAlter=0;
    while($i<count($tBuch)){
        $sumAlter=$sumAlter+$tBuch[$i]['Alter'];
        $i=$i+1;
    }
    $avg=$sumAlter/count($tBuch);
    echo "<br> Das Durchschnittsalter beträgt $avg";
?>