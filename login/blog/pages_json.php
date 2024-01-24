<?php 
include("../../model/class/php/Insertion_Bdd.php") ;  
include("../../model/class/php/Select_datas.php") ;  
include("../../model/class/php/connexion.php") ;  
include("../../model/class/php/Get_anne.php") ;   


 
include("pages_json_1.php") ; 

include("pages_json_style.php") ; 







 
 
 
 
$replace_el = str_replace("blog","blog1", $_SERVER['PHP_SELF']);


 
?>
  
 
 <a href="<?php echo $replace_el  ?>" style="background-color:rgba(100,50,0,0.6);color:white;padding:15px"> Template  2 </a>