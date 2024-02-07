<?php

//echo give_url() ; 


$liste_projet_id_sha1 = give_url();
$apple = new Select_datas($servername, $username, $password, $dbname);

array_push(
  $apple->row,

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





$apple->sql = 'SELECT * FROM `liste_projet` WHERE `liste_projet_id_sha1` ="' . $liste_projet_id_sha1 . '"  ORDER BY liste_projet_id';
$apple->execution();
$myJSON = json_encode($apple->list_row);








// !! 


// !! 



// echo   $myJSON ; 


// Utilisation

// creation de la variable vide
$number = 0;
// affectation valeur array 
// execution et ajout des element dans la nouvelle table 




$liste_projet_id = $apple->add_array_element($number);
$number++;
$liste_projet_id_sha1 = $apple->add_array_element($number);
$number++;
$liste_projet_id_parent = $apple->add_array_element($number);
$number++;
$liste_projet_id_sha1_general = $apple->add_array_element($number);
$number++;
$liste_projet_ip = $apple->add_array_element($number);
$number++;




$liste_projet_img = $apple->add_array_element($number);
$number++;

$liste_projet_name = $apple->add_array_element($number);
$number++;
$liste_projet_description1 = $apple->add_array_element($number);
$number++;
$liste_projet_description2 = $apple->add_array_element($number);
$number++;
$liste_projet_visibilite1 = $apple->add_array_element($number);
$number++;


$liste_projet_visibilite2 = $apple->add_array_element($number);
$number++;
$liste_projet_type = $apple->add_array_element($number);
$number++;
$information_user_id_sha1 = $apple->add_array_element($number);
$number++;
$liste_projet_new_file = $apple->add_array_element($number);
$number++;
$liste_projet_reg_date = $apple->add_array_element($number);
$number++;


$liste_projet_color_1 = $apple->add_array_element($number);
$number++;

$liste_projet_color_2 = $apple->add_array_element($number);
$number++;


$liste_projet_name_font_size = $apple->add_array_element($number);
$number++;
$liste_projet_description1_font_size = $apple->add_array_element($number);
$number++;

$liste_projet_background_color = $apple->add_array_element($number);
$number++;

$liste_projet_description1_tittle = $apple->add_array_element($number);

$number++;
$liste_projet_name_tittle = $apple->add_array_element($number);
$number = 0;









// !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
// information sur lutilisateur ok 
$apple_user = new Select_datas($servername, $username, $password, $dbname);

array_push(
  $apple_user->row,

  'information_user_prenom',
  'information_user_ip',
  'information_user_login',
  'information_user_name',

  'information_user_adresse',
  'information_user_adresse_mail',
  'information_user_code_postale',
  'information_user_password',
  'information_user_naissance',
  'information_user_tel',
  'information_user_reg_date'



);





$apple_user->sql = 'SELECT * FROM `information_user` WHERE `information_user_id_sha1`="' . $information_user_id_sha1[0] . '"';
$apple_user->execution();
$myJSON = json_encode($apple_user->list_row);



$information_user_prenom_user_info = $apple_user->list_row[0];
$information_user_ip_user_info = $apple_user->list_row[1];
$information_user_login_user_info = $apple_user->list_row[2];
$information_user_name_user_info = $apple_user->list_row[3];
$information_user_adresse_user_info = $apple_user->list_row[4];
$information_user_adresse_mail_user_info = $apple_user->list_row[5];
$information_user_code_postale_user_info = $apple_user->list_row[6];
$information_user_password_user_info = $apple_user->list_row[7];


$information_user_naissance_user_info = $apple_user->list_row[8];
$information_user_tel_user_info = $apple_user->list_row[9];
$information_user_reg_date_user_info = $apple_user->list_row[10];


// !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!



?>




<?php
// ok
$x1_2 = 0;

/*
echo $liste_projet_id[0] ; 
echo "<br/>"; 
echo $liste_projet_id_sha1[0] ; 
echo "<br/>"; 
echo $liste_projet_id_parent[0] ; 
echo "<br/>"; 
echo $liste_projet_id_sha1_general[0] ; 
echo "<br/>"; 
echo $liste_projet_ip[0] ; 
echo "<br/>"; 
echo $liste_projet_img[0] ; 
echo "<br/>"; 
echo $liste_projet_name[0] ; 
echo "<br/>"; 
echo $liste_projet_description1[0] ; 
echo "<br/>"; 
echo $liste_projet_description2[0] ; 
echo "<br/>"; 
echo $liste_projet_visibilite1[0] ; 
echo "<br/>"; 
echo $liste_projet_visibilite2[0] ; 
echo "<br/>"; 
echo $liste_projet_type[0] ; 
echo "<br/>"; 
echo $information_user_id_sha1[0] ; 
echo "<br/>"; 
echo $liste_projet_new_file[0] ; 
echo "<br/>"; 
echo $liste_projet_reg_date[0] ; 
echo "<br/>"; 
echo $liste_projet_color_1[0] ; 
echo "<br/>"; 
echo $liste_projet_color_2[0] ; 
echo "<br/>"; 
echo $liste_projet_name_font_size[0] ; 
echo "<br/>"; 
echo $liste_projet_description1_font_size[0] ; 
echo "<br/>"; 
echo $liste_projet_background_color[0] ; 
echo "<br/>"; 
echo $liste_projet_description1_tittle[0] ; 
echo "<br/>"; 
echo $liste_projet_name_tittle[0] ; 
echo "<br/>"; 


*/







if (count($apple->list_row) != 0 && $liste_projet_visibilite1[0] == "(OO)") {



  ?>



  <div class="pages_json_1">
    <div class="element_01">
      <?php echo $liste_projet_name[0]; ?>
    </div>


    <div class="element_02">
      <?php echo $liste_projet_description1[0]; ?>
    </div>
  </div>


  <!DOCTYPE html>
  <html lang="en">

  <head>
    <title>
      <?php echo $liste_projet_name[0]; ?>
    </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  </head>

  <body>






    <?php


    include("pages_json_2_menu.php");















    if (count($liste_projet_id_parent) != 0) {
      include("pages_json_2.php");
    }


    ?>










  <?php





}






//echo $liste_projet_description1[0] ; 



?>


  <style>
    .element_01,
    .element_02,
    .element_03,
    .element_04,
    .element_05,
    .element_06,
    .element_07,
    .element_08,
    .element_09,
    .element_10 {}

    .element_01 {}

    .pages_json_1 {
      background-color: green;
    }

    .pages_json_3 {
      background-color: pink;
    }

    .pages_json_4 {
      background-color: orange;
    }

    .pages_json_5 {
      background-color: red;
    }

    .pages_json_6 {
      background-color: yellow;
    }

    .pages_json_7 {
      background-color: black;
    }

    .pages_json_8 {
      background-color: violet;
    }
  </style>


</body>

</html>

<script>
  var  pages_json_1 = document.getElementById("pages_json_3") ; 
  var  pages_json_3 = document.getElementById("pages_json_3") ; 
  var  pages_json_4 = document.getElementById("pages_json_3") ; 
  var  pages_json_5 = document.getElementById("pages_json_3") ; 
  var  pages_json_6 = document.getElementById("pages_json_3") ; 
  var  pages_json_7 = document.getElementById("pages_json_3") ; 
  var  pages_json_8 = document.getElementById("pages_json_3") ; 
 
  
  console.log(pages_json_1.childElementCount) ; 
  console.log(pages_json_2.childElementCount) ; 
  console.log(pages_json_3.childElementCount) ; 
  console.log(pages_json_4.childElementCount) ; 

  console.log(pages_json_5.childElementCount) ; 
  console.log(pages_json_6.childElementCount) ; 
  console.log(pages_json_7.childElementCount) ; 
  console.log(pages_json_8.childElementCount) ; 


</script>