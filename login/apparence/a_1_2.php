<?php

$myJSON = json_encode($apple->list_row); 



echo give_url() ; 
 
 
if(count($apple->list_row)!=0 ){
//include("a_condition_1.php") ; 




if(isset($_SESSION["time"])){

  if($_SESSION["time"]!=""){
    echo $_SESSION["time"]  ; 
    include("a_2.php"); 
  }
  }
  else {
    echo "pas de demande" ; 

  }



}
 
?>
 
 







 