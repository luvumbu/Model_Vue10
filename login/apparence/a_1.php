<?php

$myJSON = json_encode($apple->list_row); 



echo give_url() ; 
 
 
if(count($apple->list_row)!=0 ){
//include("a_condition_1.php") ; 




if(isset($_SESSION["time"])){

  if($_SESSION["time"]!=""){
    echo $_SESSION["time"]  ; 
    include("a_2.php"); 
    ?>

Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore esse saepe distinctio repellat molestias libero odio officiis, tempora repudiandae culpa iusto quos dolorem voluptates molestiae ipsa assumenda itaque sequi atque!
<?php 
  }
  }
  else {
    echo "pas de demande" ; 

  }



}
 
?>
 
 







 