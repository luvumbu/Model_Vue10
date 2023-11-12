<script src="class/js/js_on/js_cookie.js"></script> 
<?php 
include("header/header.php") ; 
?>
<!DOCTYPE html>
<html>
<body>
<!-- -->
 
<script src="class/js/js_on/lancement_action_1.js"></script>
<script src="class/js/js_on/lancement_action_2.js"></script> 
<script src="class/js/js_on/recherche_elements.js"></script>
<script src="class/js/js_on/id_input_update_all.js"></script>
<script src="class/js/js_on/add_img.js"></script>
<script src="class/js/js_on/add_img2.js"></script>
<script src="class/js/js_on/onclick_add_element.js"></script>
<script src="class/js/js_on/onclick_update_visibility1.js"></script>
<script src="class/js/js_on/onclick_update_visibility2.js"></script>
<script src="class/js/js_on/voir_projet_2.js"></script>
<script src="class/js/js_on/remove_projet_2.js"></script> 
<script src="class/js/js_on/voir_article_complet.js"></script>
<!-- -->
<script src="class/js/js_on/obj_element_2.js"></script>
<script src="class/js/js_on/add_img.js"></script>
<script src="class/js/js_on/add_img2.js"></script>
<script src="class/js/js_on/id_input_update_all.js"></script>
<script src="class/js/js_on/information_user.js"></script>
<script src="class/js/js_on/input_update_all.js"></script>
<!-- -->
<script src="class/js/js_on/js_cookie.js"></script>
<script src="class/js/js_on/lancement_action_1.js"></script>
<script src="class/js/js_on/lancement_action_2_0.js"></script>
<script src="class/js/js_on/lancement_action_2.js"></script>
<!-- -->
<script src="class/js/js_on/onclick_add_element.js"></script>
<script src="class/js/js_on/onclick_update_remove.js"></script>
<script src="class/js/js_on/onclick_update_visibility.js"></script>
<script src="class/js/js_on/onclick_update_visibility1.js"></script>
<script src="class/js/js_on/onclick_update_visibility2.js"></script>
<!-- -->
<script src="class/js/js_on/option_redirection.js"></script>
<script src="class/js/js_on/recherche_elements.js"></script>
<script src="class/js/js_on/remove_projet_2.js"></script>
<script src="class/js/js_on/session_destroy.js"></script>
<!-- -->
<script src="class/js/js_on/voir_projet_2.js"></script>
<!-- -->

<?php 

include("class/php/php_select_data/give_url.php") ; 
$element_edit =false;

if(isset($_SESSION["time"])){

    if($_SESSION["time"]!=""){
 
    
        include("class/php/php_select_data/select_list_projet_1.php") ; 
         include("apparence/a_2.php"); 
         if($nombre_total_element==1){
 
        include("class/php/php_select_data/select_list_projet_3.php") ; 
        include("apparence/a_3.php"); 
          
        }
 
    }
    else{
      $element_edit =true ; 

        include("class/php/php_select_data/select_list_projet_2.php") ; 
       
        include("apparence/a_2_2.php"); 
          if($nombre_total_element==1){
        
             }
 
    }
    }
    else {
      $element_edit =true ; 
    
   include("class/php/php_select_data/select_list_projet_2.php") ; 
  include("apparence/a_2.php"); 

     if($nombre_total_element==1){
        
        }
 

    }


?>
<img class="format_toogle position_absolute_1"  onclick="terminer()" width="50" height="50" src="https://img.icons8.com/cotton/50/completed-task--v1.png" alt="completed-task--v1"/>


  <style>
    .position_absolute_1{
position:fixed ; 
top:50%; 
right: 5% ; 

    }
  </style>

<script>




     
</script>
</body>
</html>
</script>