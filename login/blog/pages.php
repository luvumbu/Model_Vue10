<?php
session_start() ; 
include("../class/php/php_select_data/give_url.php") ; 
include("pages_json.php") ; 
include("pages_css.php") ;   
include("add_log.php") ; 
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
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>   <?php echo $liste_projet_name[0] ; ?></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>  
  <link href="pages.css" rel="stylesheet" />
  <link rel="icon" type="image/x-icon" href="https://i.pinimg.com/564x/33/8a/ad/338aadfc695f8082f95b83ce9860e3de.jpg">
</head>
<body> 
<div class="display_flex_1">
    <b>  
        <div class="hreff_el_0" id="debut">            
            <?php echo $liste_projet_name[0] ; ?>
        </div>
    </b>

    <b>

 

 </label>
 

 <?php

/*
liste_projet_id_2
liste_projet_id_sha1_2
liste_projet_id_parent_2
liste_projet_id_sha1_general_2
liste_projet_ip_2
liste_projet_img_2
liste_projet_name_2
liste_projet_description1_2
liste_projet_description2_2
liste_projet_visibilite1_2
liste_projet_visibilite2_2
liste_projet_type_2
information_user_id_sha1_2
liste_projet_new_file_2
liste_projet_reg_date_2
liste_projet_color_1_2
liste_projet_color_2_2
$liste_projet_name_font_size
liste_projet_description1_font_size
*/

if($liste_projet_visibilite1[0]!="") 
{
 include("pages_result.php") ; 

}
else {
   


    if(isset($_SESSION["invitation"])){
        include("pages_result.php") ; 
    }
    else {
         echo "<h1>L'utilisateur donne pas l'accès a cette page</h1>";
    }
}
?>






 

 
<?php

 

if($liste_projet_id_parent[0]==0){
?>

<?php 
}
else {

    $link = $liste_projet_id_parent[0] ; 
    ?>
<a href="<?php echo $link ?>">
<div class="alert alert-dark m_princ" role="alert">
                Voir l'article Parent
</div>
</a>
 
    <?php 
}
 

?>
<a href="../index.php">
<div class="alert alert-warning m_princ" role="alert">
                Menu principal 
</div>


<a href="#debut">
    <div class="debut_page alert alert-secondary" role="alert">
    <img width="20" height="20" src="https://img.icons8.com/external-dreamstale-lineal-dreamstale/20/external-up-arrows-dreamstale-lineal-dreamstale-9.png" alt="external-up-arrows-dreamstale-lineal-dreamstale-9"/>
</div>
</a>

</a>
 
 
</body>
</html>