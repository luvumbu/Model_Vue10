<?php 
  if(count( $liste_projet_id_parent_x2)!=0){
   
    
    ?>
    <div class="js4_1">

 
    <?php 
  for($x4 = 0 ; $x4<count( $liste_projet_id_parent_x2)  ; $x4 ++ ) {

    
    echo "<br/>5_". $liste_projet_id_sha1_x2[$x4] ; 














    $apple_x5 = new Select_datas($servername,$username,$password,$dbname);

array_push(
  $apple_x5->row,

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





  $apple_x5->sql='SELECT * FROM `liste_projet` WHERE `liste_projet_id_parent` ="'.$liste_projet_id_sha1_x2[$x4].'"  ORDER BY liste_projet_id';
  $apple_x5->execution();




  $number_x5= 0 ; 
  // affectation valeur array 
  // execution et ajout des element dans la nouvelle table 




  $liste_projet_id_x5=$apple_x5->add_array_element($number_x5);
  $number_x5++ ; 
  $liste_projet_id_sha1_x5=$apple_x5->add_array_element($number_x5);
  $number_x5++ ; 
  $liste_projet_id_parent_x5=$apple_x5->add_array_element($number_x5);
  $number_x5++ ; 
  $liste_projet_id_sha1_general_x5=$apple_x5->add_array_element($number_x5);
  $number_x5++ ; 
  $liste_projet_ip_x5=$apple_x5->add_array_element($number_x5);
  $number_x5++ ; 


  $liste_projet_img_x5=$apple_x5->add_array_element($number_x5);
  $number_x5++ ; 
  $liste_projet_name_x5=$apple_x5->add_array_element($number_x5);
  $number_x5++ ; 
  $liste_projet_description1_x5=$apple_x5->add_array_element($number_x5);
  $number_x5++ ; 
  $liste_projet_description2_x5=$apple_x5->add_array_element($number_x5);
  $number_x5++ ; 
  $liste_projet_visibilite1_x5=$apple_x5->add_array_element($number_x5);
  $number_x5++ ; 


  $liste_projet_visibilite2_x5=$apple_x5->add_array_element($number_x5);
  $number_x5++ ; 
  $liste_projet_type_x5=$apple_x5->add_array_element($number_x5);
  $number_x5++ ; 
  $information_user_id_sha1_x5=$apple_x5->add_array_element($number_x5);
  $number_x5++ ; 
  $liste_projet_new_file_x5=$apple_x5->add_array_element($number_x5);
  $number_x5++ ; 
  $liste_projet_reg_date_x5=$apple_x5->add_array_element($number_x5);
  $number_x5++ ; 


  $liste_projet_color_1_x5=$apple_x5->add_array_element($number_x5);
  $number_x5++ ; 

  $liste_projet_color_2_x5=$apple_x5->add_array_element($number_x5);
  $number_x5++ ; 


  $liste_projet_name_font_size_x5=$apple_x5->add_array_element($number_x5);
  $number_x5++ ; 
  $liste_projet_description1_font_size_x5=$apple_x5->add_array_element($number_x5);
  $number_x5++ ; 

  $liste_projet_background_color_x5=$apple_x5->add_array_element($number_x5);
  $number_x5++ ; 

  $liste_projet_description1_tittle_x5=$apple_x5->add_array_element($number_x5);
  
  $number_x5++ ; 
  $liste_projet_name_tittle_x5= $apple_x5->add_array_element($number_x5);


  ?>
 
  <?php 

    

include("pages_json_6.php") ; 
  }


  ?>
</div> 



<!-- js4_1-->
  <?php 
  }


  ?>

 