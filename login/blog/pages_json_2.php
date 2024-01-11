<?php 
//echo give_url() ; 
   
$apple_x0 = new Select_datas($servername,$username,$password,$dbname);

  array_push(
    $apple_x0->row,

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
    'liste_projet_reg_date',

    'liste_projet_color_1',
    'liste_projet_color_2', 

    'liste_projet_name_font_size', 
    'liste_projet_description1_font_size',
    'liste_projet_background_color',
    'liste_projet_description1_tittle',
    'liste_projet_name_tittle' 

    

    );





    $apple_x0->sql='SELECT * FROM `liste_projet` WHERE `liste_projet_id_parent` ="'.$liste_projet_id_sha1[0].'"  ORDER BY liste_projet_id';
    $apple_x0->execution();
    $myJSON = json_encode($apple_x0->list_row); 
 



 



    // echo   $myJSON ; 
 
 
// Utilisation
 
// creation de la variable vide
$number_x0 = 0 ; 
// affectation valeur array 
// execution et ajout des element dans la nouvelle table 




$liste_projet_id_x0 =$apple_x0->add_array_element($number_x0);
$number_x0 ++ ; 
$liste_projet_id_sha1_x0 =$apple_x0->add_array_element($number_x0);
$number_x0 ++ ; 
$liste_projet_id_parent_x0 =$apple_x0->add_array_element($number_x0);
$number_x0 ++ ; 
$liste_projet_id_sha1_general_x0 =$apple_x0->add_array_element($number_x0);
$number_x0 ++ ; 
$liste_projet_ip_x0 =$apple_x0->add_array_element($number_x0);
$number_x0 ++ ; 


$liste_projet_img_x0 =$apple_x0->add_array_element($number_x0);
$number_x0 ++ ; 
$liste_projet_name_x0 =$apple_x0->add_array_element($number_x0);
$number_x0 ++ ; 
$liste_projet_description1_x0 =$apple_x0->add_array_element($number_x0);
$number_x0 ++ ; 
$liste_projet_description2_x0 =$apple_x0->add_array_element($number_x0);
$number_x0 ++ ; 
$liste_projet_visibilite1_x0 =$apple_x0->add_array_element($number_x0);
$number_x0 ++ ; 


$liste_projet_visibilite2_x0 =$apple_x0->add_array_element($number_x0);
$number_x0 ++ ; 
$liste_projet_type_x0 =$apple_x0->add_array_element($number_x0);
$number_x0 ++ ; 
$information_user_id_sha1_x0 =$apple_x0->add_array_element($number_x0);
$number_x0 ++ ; 
$liste_projet_new_file_x0 =$apple_x0->add_array_element($number_x0);
$number_x0 ++ ; 
$liste_projet_reg_date_x0 =$apple_x0->add_array_element($number_x0);
$number_x0 ++ ; 


$liste_projet_color_1_x0 =$apple_x0->add_array_element($number_x0);
$number_x0 ++ ; 

$liste_projet_color_2_x0 =$apple_x0->add_array_element($number_x0);
$number_x0 ++ ; 


$liste_projet_name_font_size_x0 =$apple_x0->add_array_element($number_x0);
$number_x0 ++ ; 
$liste_projet_description1_font_size_x0 =$apple_x0->add_array_element($number_x0);
$number_x0 ++ ; 

$liste_projet_background_color_x0 =$apple_x0->add_array_element($number_x0);
$number_x0 ++ ; 

$liste_projet_description1_tittle_x0 =$apple_x0->add_array_element($number_x0);
 
$number_x0 ++ ; 
 $liste_projet_name_tittle_x0 = $apple_x0->add_array_element($number_x0);
$number_x0 = 0 ; 
 



 

 ?>




  <?php   
  
  
  echo "_".$liste_projet_id_sha1_x0[$x0]."<br/>"; 





  if(count($liste_projet_id_sha1_x0)!=0){


    
    ?>
<div class="js2">


<?php 
     for($x0 = 0 ; $x0<count($liste_projet_id_sha1_x0) ; $x0 ++) {   

      include("pages_json_3.php") ; 
 }
 
?>
 </div>
<?php 

  }

                 
            
  //

?>




 
 


 <style>
.js2{
  background-color:red ; 
}
 </style>