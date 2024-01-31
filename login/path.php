 <!DOCTYPE html>
<html lang="en">
<head>
  <title>HOLA</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<?php 

include("class/php/php_select_data/give_url.php") ; 

//echo  give_url() ; 


 

switch (give_url()) {
  case "Misgroup":
    ?>
<div class="container-fluid p-5 bg-primary text-white text-center">
  <h1>Bonjour <?php echo give_url() ;  ?></h1>
  
</div>
  
<div class="container mt-5">

<h1>
Bienvenue sur BOKONZI !

</h1>




<script>
    var nombre = 20 ; 

   



    const element = document.getElementById("demo");
setInterval(function() {
    
    document.getElementById("nombre").innerHTML="Redirection vers projet dans "+nombre ; 

    nombre -- 
 



}, 1000);



</script>
<p>
Cher client privilégié <?php  echo   give_url() ?>,
</p>


<p>
    C'est avec une grande joie que nous vous accueillons sur notre plateforme en ligne. 🌟 Nous sommes reconnaissants de votre intérêt pour nos projets et services.

Préparez-vous à plonger dans l'univers captivant de BOKONZI. Chacun de nos projets est le fruit d'un dévouement total et d'une passion sans limite. Nous sommes ravis de pouvoir partager cela avec vous.

Cliquez sur le <a href="../blog/pages.php/1706655864617">bouton ci-dessous</a>   pour explorer nos réalisations exceptionnelles :
</p>



<p>
Votre soutien est notre moteur, et nous sommes impatients de vous offrir une expérience mémorable.

</p>

<p>
Merci de faire partie de notre histoire !

</p>
<p>
Bien à vous,

</p>
L'équipe de BOKONZI


<h1 id="nombre"></h1>
</div>




<meta http-equiv="Refresh" content="20; url='../blog/pages.php/1706655864617'" />

<?php 
    break;
    default:
    echo "<h1>Vous n'êtes pas autorisé <h1/>";

    ?>
<img src="https://www.creativefabrica.com/wp-content/uploads/2023/05/19/Forbidden-sign-Prohibited-symbol-Round-Graphics-70062501-1.png" alt="" srcset="">
    <?php
 


 
}
  

 

$filename_1="../model/class/php/connexion.php";
$filename_2="../model/class/php/Insertion_Bdd.php";
$filename_3="../model/class/php/Select_datas.php";
$filename_4="../model/class/php/config_folder_verif";
$SERVER_NAME=$_SERVER['SERVER_NAME'] ; 
    include($filename_1) ; 
    include($filename_2) ;
    include($filename_3) ; 

    $give_url = give_url() ; 




            $apple = new Insertion_Bdd(
          $servername,
          $username,
          $password,
          $dbname
          
          );
              
         
          $apple->set_msg_valudation("") ;  
          $apple->set_sql("INSERT INTO liste_log3 (liste_log_ip,liste_projet_id_sha1)
                  
          VALUES ('$SERVER_NAME','$give_url')") ; 
          $apple->execution() ;

    ?>

</body>
</html>
