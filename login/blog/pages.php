<?php
include("../class/php/php_select_data/give_url.php") ; 

include("pages_json.php") ; 



/*
liste_projet_id
liste_projet_id_sha1
liste_projet_id_parent
liste_projet_id_sha1_general
liste_projet_ip
liste_projet_img
liste_projet_name
liste_projet_description1
liste_projet_description2
liste_projet_visibilite1
liste_projet_visibilite2
liste_projet_type
information_user_id_sha1
liste_projet_new_file
liste_projet_reg_date
liste_projet_color_1
liste_projet_color_2

*/


 
 //echo count($liste_projet_name[0]) ; 


 


if( count($apple->list_row)!=0){
 
    
 include("pages_ok.php") ; 
}
 
 
?>





