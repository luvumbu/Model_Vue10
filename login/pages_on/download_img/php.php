<?php

session_start() ; 



 
 $recherche_elements = $_SESSION["recherche_elements"]  ; 
 $paths ="../../../model/class/php/";
include($paths."connexion.php") ; 

  
include("Insertion_Bdd.php") ; 


function reload($time){
  ?>
  <meta http-equiv="refresh" content="<?php echo $time ;?>;url=../../" />
 
 <?php
}



 
// Testons si le fichier a bien été envoyé et s'il n'y a pas d'erreur
if (isset($_FILES['screenshot']) && $_FILES['screenshot']['error'] == 0)
{
 
                // Testons si l'extension est autorisée
                $fileInfo = pathinfo($_FILES['screenshot']['name']);
                $extension = $fileInfo['extension'];
 
    
                        // On peut valider le fichier et le stocker définitivement
                        move_uploaded_file($_FILES['screenshot']['tmp_name'], "uploads/".$_SESSION["name"].".". $extension);
                  
                
 $name=$_SESSION["name"].".". $extension ;


       
 $apple = new Insertion_Bdd(
  $servername,
  $username,
  $password,
  $dbname
  
  );
      
 
  $apple->set_msg_valudation("") ;  
  $apple->set_sql('UPDATE  `liste_projet` SET `liste_projet_img` = "'.$name.'" WHERE  `liste_projet_id_sha1` = "'.$recherche_elements.'"') ; 
  $apple->execution() ;
      



  reload(1);


}
else {
 
  reload(5);
}




 


?>

 

<img src="https://www.gif-maniac.com/gifs/54/53604.gif" alt="" srcset="">