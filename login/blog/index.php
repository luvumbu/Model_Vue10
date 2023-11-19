<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap 5 Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script type="text/javascript" async
  src="https://cdnjs.cloudflare.com/ajax/libs/mathjax/2.7.7/MathJax.js?config=TeX-MML-AM_CHTML">
</script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/katex@0.13.18/dist/katex.min.css" integrity="sha384-x5exxh2F/B2ZFpFM/FPrMTtsqCr4R+jv2uwFLS4z+Dcsn38nW+RVMpS4b/e1vTA5" crossorigin="anonymous">
<script defer src="https://cdn.jsdelivr.net/npm/katex@0.13.18/dist/katex.min.js" integrity="sha384-AO2A7H2zPTV+7WHzh6gSCStSiyYWWJlwe76sUJbbzOz3h6msD9kHAyFFPBO9z+Tp" crossorigin="anonymous"></script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <script type="text/javascript" async
  src="https://cdnjs.cloudflare.com/ajax/libs/mathjax/2.7.7/MathJax.js?config=TeX-MML-AM_CHTML">
</script>

</head>
<body>

 

 
  
 
<?php 

include("index_json.php") ; 


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



 
  ?>


<div class="container-fluid p-5 text-center  padding_1" style="color:<?php echo $liste_projet_color_1[$a]?>">
  <h1>
    <?php echo $liste_projet_name[$a]  ?>
</h1>
<p class="padding_1" style="color:<?php echo $liste_projet_color_1[$a]?>" style="color:<?php echo $liste_projet_color_2[$a]?>">
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
<p class="gris_">
<?php echo $liste_projet_reg_date[$a]  ?>
</p>
 <a href="pages.php/<?php echo $liste_projet_id_sha1[$a] ?>">
    <h1 class="color_link" >
      Voir article
    </h1></a>
</div>

<?php 
}
}

?>
<a href="../../">
  <div class="alert alert-secondary" role="alert">
 Menu principal
</div>
</a>

</body>
</html>



<style>
    .img_class{
        max-width: 300px; 
    }
    .padding_1 {
        padding:35px; 
    }
    .color_link{
      background-color:#9ec5fe ; 
      padding:15px; 
      width: 40%; 
      margin:auto ; 
    }
    a {
      text-decoration:none ; 
      color:white ; 
    }
    .gris_{
      color:rgba(0,0,0,0.3) ; 
    }
</style>

<script>
    function img_reload(_this){
        console.log(_this.title) ; 
    }
</script>