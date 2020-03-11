<?php
if(isset($_GET['value'])){
    $value=$_GET['value'];
    $i=0;
    $found=false;
    do{
        if($tBuch[$i]['Name']==$value){
            foreach($tBuch[$i] as $asso => $data)
              echo "{$asso}: $data <br>";
            echo "<br>";
            $found=true;  
        }
       $i=$i+1;
    }while($i<count($tBuch));


}else
   echo "<br>Bitte geben Sie einen Namen ein!";  

if(!$found) 
  echo "Der Name wurde leider nicht gefunden!";

?>