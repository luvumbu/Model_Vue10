<?php 

$apple_x2 = new Select_datas($servername,$username,$password,$dbname);

array_push(
  $apple_x2->row,

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





  $apple_x2->sql='SELECT * FROM `liste_projet` WHERE `liste_projet_id_parent` ="'.$liste_projet_id_sha1_x1[$x2].'"  ORDER BY liste_projet_id';
  $apple_x2->execution();



  $number_x2= 0 ; 
  // affectation valeur array 
  // execution et ajout des element dans la nouvelle table 




  $liste_projet_id_x2=$apple_x2->add_array_element($number_x2);
  $number_x2++ ; 
  $liste_projet_id_sha1_x2=$apple_x2->add_array_element($number_x2);
  $number_x2++ ; 
  $liste_projet_id_parent_x2=$apple_x2->add_array_element($number_x2);
  $number_x2++ ; 
  $liste_projet_id_sha1_general_x2=$apple_x2->add_array_element($number_x2);
  $number_x2++ ; 
  $liste_projet_ip_x2=$apple_x2->add_array_element($number_x2);
  $number_x2++ ; 


  $liste_projet_img_x2=$apple_x2->add_array_element($number_x2);
  $number_x2++ ; 
  $liste_projet_name_x2=$apple_x2->add_array_element($number_x2);
  $number_x2++ ; 
  $liste_projet_description1_x2=$apple_x2->add_array_element($number_x2);
  $number_x2++ ; 
  $liste_projet_description2_x2=$apple_x2->add_array_element($number_x2);
  $number_x2++ ; 
  $liste_projet_visibilite1_x2=$apple_x2->add_array_element($number_x2);
  $number_x2++ ; 


  $liste_projet_visibilite2_x2=$apple_x2->add_array_element($number_x2);
  $number_x2++ ; 
  $liste_projet_type_x2=$apple_x2->add_array_element($number_x2);
  $number_x2++ ; 
  $information_user_id_sha1_x2=$apple_x2->add_array_element($number_x2);
  $number_x2++ ; 
  $liste_projet_new_file_x2=$apple_x2->add_array_element($number_x2);
  $number_x2++ ; 
  $liste_projet_reg_date_x2=$apple_x2->add_array_element($number_x2);
  $number_x2++ ; 


  $liste_projet_color_1_x2=$apple_x2->add_array_element($number_x2);
  $number_x2++ ; 

  $liste_projet_color_2_x2=$apple_x2->add_array_element($number_x2);
  $number_x2++ ; 


  $liste_projet_name_font_size_x2=$apple_x2->add_array_element($number_x2);
  $number_x2++ ; 
  $liste_projet_description1_font_size_x2=$apple_x2->add_array_element($number_x2);
  $number_x2++ ; 

  $liste_projet_background_color_x2=$apple_x2->add_array_element($number_x2);
  $number_x2++ ; 

  $liste_projet_description1_tittle_x2=$apple_x2->add_array_element($number_x2);
  
  $number_x2++ ; 
  $liste_projet_name_tittle_x2= $apple_x2->add_array_element($number_x2);

 


include("pages_json_5.php") ; 

  ?>
 


 
 
 