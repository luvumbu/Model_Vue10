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


 

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap 5 Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    

<div class="display_flex_1">
    <div>
            <?php echo $liste_projet_name[0] ; ?>
    </div>
    <div class="display_flex_2">
            <?php 
                        for($a = 0 ; $a<count($liste_projet_id_2) ; $a++){
                            echo "<div>".$liste_projet_id_2[$a]." : ".count($liste_projet_name)."</div>";
                        }


            ?>
    </div>
</div>

<?php 

$src_img = "../../redirection_dowload_img/".$liste_projet_img[0] ;


 
?> 
<div class="presentation_"  style='background-image:url("<?php echo $src_img ; ?>")'>
            <div class="text-center padding_1">
            <h1 style="color:<?php echo $liste_projet_color_1[0];?>">
            <?php echo $liste_projet_name[0] ; ?>
            </h1>
        </div>
        <div>
        <h2 class="text-center padding_1"  style="color:<?php echo $liste_projet_color_2[0];?>">
            <?php echo $liste_projet_description1[0] ; ?>
            </h2>
        </div>
</div>



<style>
    .display_flex_1,.display_flex_2{
        display:flex;
        justify-content:space-between ; 
      
    

    }
    .display_flex_1  {
       
 padding:15px ; 

    }

    .display_flex_2 div {
       margin-left:25px ; 
       margin-right:25px ; 
 

    }
    .padding_1{
        padding:45px; 
    }
    .presentation_{
      
       background-size:100% ; 

    }
 
</style>




</body>
</html>