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


  
 
<?php 

include("parent_json.php") ; 


/*

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

var_dump($liste_projet_color_1) ; 
 

*/




for($a = 0 ; $a< count($liste_projet_id) ; $a++){


if($liste_projet_visibilite1[$a]!="")
{



  echo $a ; 
  echo "<br/>" ; 
  ?>


<div class="container-fluid p-5   text-center padding_1">
  <h1>
    <?php echo $liste_projet_name[$a]  ?>
</h1>
<p class="padding_1">
<?php echo $liste_projet_description1[$a]  ?>
</p>

<?php 

 
if($liste_projet_img[$a]==""){

    $redirection_dowload_img_ ="../../src/img/future (2).png" ;  
?>

<img class="img_class padding_1" onclick="img_reload(this)" title="<?php echo $liste_projet_id_sha1[$a] ?>" src="<?php echo $redirection_dowload_img_?>" alt="">

<?php 
}
else {


    $redirection_dowload_img_ ="../redirection_dowload_img/".$liste_projet_img[$a] ;  
  
    ?>

    <img class="img_class padding_1" onclick="img_reload(this)" title="<?php echo $liste_projet_id_sha1[$a] ?>" src="<?php echo $redirection_dowload_img_?>" alt="">
    
    <?php 
}

?>
<p>
<?php echo $liste_projet_reg_date[$a]  ?>
</p>
 
</div>

<?php 
}
}

?>
</body>
</html>



<style>
    .img_class{
        max-width: 300px; 
    }
    .padding_1 {
        padding:35px; 
    }
</style>

<script>
    function img_reload(_this){
        console.log(_this.title) ; 
    }
</script>