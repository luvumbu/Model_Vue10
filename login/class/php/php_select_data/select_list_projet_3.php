<?php 

 
$apple_2 = new Select_datas($servername,$username,$password,$dbname);

  array_push(
    $apple_2->row,

    'liste_projet_id',
    'liste_projet_id_sha1',
    'liste_projet_id_parent',
    'liste_projet_id_sha1_general',
    'liste_projet_ip',
    'liste_projet_img',
    'liste_projet_name',
    'liste_projet_description1',
    'liste_projet_description2',
    'liste_projet_visibilite1',
    'liste_projet_visibilite2',
    'liste_projet_type',
    'information_user_id_sha1',
    'liste_projet_new_file',
    'liste_projet_reg_date'
    

    );
 
 
    $liste_projet_id_parent =  $liste_projet_id_sha1[0] ; 

    echo   $liste_projet_id_parent ; 
    echo "<br/>" ;
    $apple_2->sql='SELECT * FROM `liste_projet` WHERE `liste_projet_id_parent` ="'.$liste_projet_id_parent.'"   ORDER BY `liste_projet_id` ';

    

    
    $apple_2->execution();
   
    $myJSON = json_encode($apple_2->list_row); 
 

    echo count($apple_2->list_row) ; 
 
 
  

// Utilisation
$b=array("x");
// creation de la variable vide
$number = 0 ; 
// affectation valeur array 
// execution et ajout des element dans la nouvelle table 

$liste_projet_id =$apple_2->add_array_element($number);
$number ++ ; 
$liste_projet_id_sha1 =$apple_2->add_array_element($number);
$number ++ ; 
$liste_projet_id_parent =$apple_2->add_array_element($number);
$number ++ ; 
$liste_projet_id_sha1_general =$apple_2->add_array_element($number);
$number ++ ; 
$liste_projet_ip =$apple_2->add_array_element($number);
$number ++ ; 

$liste_projet_img =$apple_2->add_array_element($number);
$number ++ ; 
$liste_projet_name =$apple_2->add_array_element($number);
$number ++ ; 
$liste_projet_description1 =$apple_2->add_array_element($number);
$number ++ ; 
$liste_projet_description2 =$apple_2->add_array_element($number);
$number ++ ; 
$liste_projet_visibilite1 =$apple_2->add_array_element($number);
$number ++ ; 

$liste_projet_visibilite2 =$apple_2->add_array_element($number);
$number ++ ; 
$liste_projet_type =$apple_2->add_array_element($number);
$number ++ ; 
$information_user_id_sha1 =$apple_2->add_array_element($number);
$number ++ ; 
$liste_projet_new_file =$apple_2->add_array_element($number);
$number ++ ; 
$liste_projet_reg_date =$apple_2->add_array_element($number);
$number ++ ; 





var_dump($liste_projet_id) ; 
var_dump($liste_projet_id_sha1) ; 
var_dump($liste_projet_id_parent) ; 
var_dump($liste_projet_id_sha1_general) ; 
var_dump($liste_projet_ip) ; 

var_dump($liste_projet_img) ; 
var_dump($liste_projet_name) ; 
var_dump($liste_projet_description1) ; 
var_dump($liste_projet_description2) ; 
var_dump($liste_projet_visibilite1) ; 

var_dump($liste_projet_visibilite2) ; 
var_dump($liste_projet_type) ; 
var_dump($information_user_id_sha1) ; 
var_dump($liste_projet_new_file) ; 
var_dump($liste_projet_reg_date) ; 


 


for($a= 0 ; $a < count($liste_projet_id) ; $a ++) {
     echo $liste_projet_id[$a]; 
     echo "<br/>" ; 
}


 



     


     
    ?>

 <?php 

 ?>