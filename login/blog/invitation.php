<?php 
session_start() ; 


include("../../model/class/php/Select_datas.php") ;  
include("../../model/class/php/connexion.php") ;  
include("../../model/class/php/Insertion_Bdd.php") ;  


// exemple lien de invitation 
//https://bokonzi.com/login/blog/invitation.php/stelar
?>

<?php

function give_url(){

    // url == $_SERVER['PHP_SELF'] ; 
    $reverse_el =strrev($_SERVER['PHP_SELF'])  ; 
    $val_final ="" ; 
     for($a = 0 ; $a<strlen($_SERVER['PHP_SELF']) ; $a ++){
       
     
        if($reverse_el[$a]=="/"){
            break ; 
        } 
        else {
            $val_final = $val_final.$reverse_el[$a] ; 
        }
     }
    
     $val_final =strrev($val_final)  ; 
     return  $val_final ; 
}
 

 

$_SESSION["invitation"] = give_url();



?>


<meta http-equiv="Refresh" content="0; url='../'" />





<?php 
$give_url = give_url() ; 
$REMOTE_ADDR = $_SERVER['REMOTE_ADDR'] ; 
$apple = new Insertion_Bdd(
    $servername,
    $username,
    $password,
    $dbname
    
    );
        
   
    $apple->set_msg_valudation("") ;  


 
        $apple->set_sql("INSERT INTO liste_log3 (liste_log_ip,liste_projet_id_sha1,liste_projet_id_parent,information_user_id_sha1)                
        VALUES ('$REMOTE_ADDR','$give_url','','')") ; 
  



    $apple->execution() ;


    ?>