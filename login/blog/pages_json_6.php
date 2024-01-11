<?php 
  if(count($liste_projet_id_sha1_x5)!=0){
    for($x6  = 0 ; $x6 <count($liste_projet_id_sha1_x5) ; $x6 ++) {
        echo "<br/>6_".$liste_projet_id_sha1_x5[$x6] ; 



//!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!

$apple_x6 = new Select_datas($servername,$username,$password,$dbname);

array_push(
$apple_x6->row,

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





$apple_x6->sql='SELECT * FROM `liste_projet` WHERE `liste_projet_id_parent` ="'.$liste_projet_id_sha1_x5[$x6].'"  ORDER BY liste_projet_id';
$apple_x6->execution();



$number_x6= 0 ; 
// affectation valeur array 
// execution et ajout des element dans la nouvelle table 




$liste_projet_id_x6=$apple_x6->add_array_element($number_x6);
$number_x6++ ; 
$liste_projet_id_sha1_x6=$apple_x6->add_array_element($number_x6);
$number_x6++ ; 
$liste_projet_id_parent_x6=$apple_x6->add_array_element($number_x6);
$number_x6++ ; 
$liste_projet_id_sha1_general_x6=$apple_x6->add_array_element($number_x6);
$number_x6++ ; 
$liste_projet_ip_x6=$apple_x6->add_array_element($number_x6);
$number_x6++ ; 


$liste_projet_img_x6=$apple_x6->add_array_element($number_x6);
$number_x6++ ; 
$liste_projet_name_x6=$apple_x6->add_array_element($number_x6);
$number_x6++ ; 
$liste_projet_description1_x6=$apple_x6->add_array_element($number_x6);
$number_x6++ ; 
$liste_projet_description2_x6=$apple_x6->add_array_element($number_x6);
$number_x6++ ; 
$liste_projet_visibilite1_x6=$apple_x6->add_array_element($number_x6);
$number_x6++ ; 


$liste_projet_visibilite2_x6=$apple_x6->add_array_element($number_x6);
$number_x6++ ; 
$liste_projet_type_x6=$apple_x6->add_array_element($number_x6);
$number_x6++ ; 
$information_user_id_sha1_x6=$apple_x6->add_array_element($number_x6);
$number_x6++ ; 
$liste_projet_new_file_x6=$apple_x6->add_array_element($number_x6);
$number_x6++ ; 
$liste_projet_reg_date_x6=$apple_x6->add_array_element($number_x6);
$number_x6++ ; 


$liste_projet_color_1_x6=$apple_x6->add_array_element($number_x6);
$number_x6++ ; 

$liste_projet_color_2_x6=$apple_x6->add_array_element($number_x6);
$number_x6++ ; 


$liste_projet_name_font_size_x6=$apple_x6->add_array_element($number_x6);
$number_x6++ ; 
$liste_projet_description1_font_size_x6=$apple_x6->add_array_element($number_x6);
$number_x6++ ; 

$liste_projet_background_color_x6=$apple_x6->add_array_element($number_x6);
$number_x6++ ; 

$liste_projet_description1_tittle_x6=$apple_x6->add_array_element($number_x6);

$number_x6++ ; 
$liste_projet_name_tittle_x6= $apple_x6->add_array_element($number_x6);








?>

<div class="js4_2">



<?php 
include("pages_json_7.php") ; 

?>
</div>

<?php 
// !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!





        
    }
}


?>
 