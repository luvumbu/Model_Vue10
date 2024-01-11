<?php 

echo "__".$liste_projet_id_sha1_x0[$x0]."<br/>" ; 

  // 

                    $apple_x1 = new Select_datas($servername,$username,$password,$dbname);

                    array_push(
                      $apple_x1->row,

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





                      $apple_x1->sql='SELECT * FROM `liste_projet` WHERE `liste_projet_id_parent` ="'.$liste_projet_id_sha1_x0[$x0].'"  ORDER BY liste_projet_id';
                      $apple_x1->execution();

                  
 

               







                            $number_x1 = 0 ; 
      // affectation valeur array 
      // execution et ajout des element dans la nouvelle table 




      $liste_projet_id_x1 =$apple_x1->add_array_element($number_x1);
      $number_x1 ++ ; 
      $liste_projet_id_sha1_x1 =$apple_x1->add_array_element($number_x1);
      $number_x1 ++ ; 
      $liste_projet_id_parent_x1 =$apple_x1->add_array_element($number_x1);
      $number_x1 ++ ; 
      $liste_projet_id_sha1_general_x1 =$apple_x1->add_array_element($number_x1);
      $number_x1 ++ ; 
      $liste_projet_ip_x1 =$apple_x1->add_array_element($number_x1);
      $number_x1 ++ ; 


      $liste_projet_img_x1 =$apple_x1->add_array_element($number_x1);
      $number_x1 ++ ; 
      $liste_projet_name_x1 =$apple_x1->add_array_element($number_x1);
      $number_x1 ++ ; 
      $liste_projet_description1_x1 =$apple_x1->add_array_element($number_x1);
      $number_x1 ++ ; 
      $liste_projet_description2_x1 =$apple_x1->add_array_element($number_x1);
      $number_x1 ++ ; 
      $liste_projet_visibilite1_x1 =$apple_x1->add_array_element($number_x1);
      $number_x1 ++ ; 


      $liste_projet_visibilite2_x1 =$apple_x1->add_array_element($number_x1);
      $number_x1 ++ ; 
      $liste_projet_type_x1 =$apple_x1->add_array_element($number_x1);
      $number_x1 ++ ; 
      $information_user_id_sha1_x1 =$apple_x1->add_array_element($number_x1);
      $number_x1 ++ ; 
      $liste_projet_new_file_x1 =$apple_x1->add_array_element($number_x1);
      $number_x1 ++ ; 
      $liste_projet_reg_date_x1 =$apple_x1->add_array_element($number_x1);
      $number_x1 ++ ; 


      $liste_projet_color_1_x1 =$apple_x1->add_array_element($number_x1);
      $number_x1 ++ ; 

      $liste_projet_color_2_x1 =$apple_x1->add_array_element($number_x1);
      $number_x1 ++ ; 


      $liste_projet_name_font_size_x1 =$apple_x1->add_array_element($number_x1);
      $number_x1 ++ ; 
      $liste_projet_description1_font_size_x1 =$apple_x1->add_array_element($number_x1);
      $number_x1 ++ ; 

      $liste_projet_background_color_x1 =$apple_x1->add_array_element($number_x1);
      $number_x1 ++ ; 

      $liste_projet_description1_tittle_x1 =$apple_x1->add_array_element($number_x1);
      
      $number_x1 ++ ; 
      $liste_projet_name_tittle_x1 = $apple_x1->add_array_element($number_x1);
 
             
             



     // var_dump($liste_projet_id_sha1_x1);  

         


     if(count($liste_projet_id_sha1_x1)!=0){

      ?>
<div class="js3">


      <?php 
            for($x2 = 0 ; $x2 <count($liste_projet_id_sha1_x1) ;$x2 ++ ) {
        echo $liste_projet_id_sha1_x1[$x2] ; 


include("pages_json_4.php") ; 



    
      }

      ?>
      </div>
      <?php 
     }








?>
<style>
  .js3{
    background-color:blue ; 
  }
</style>