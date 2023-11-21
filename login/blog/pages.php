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
  <title>   <?php echo $liste_projet_name[0] ; ?></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    

<div class="display_flex_1">
    <b>

  
    <div>
            <?php echo $liste_projet_name[0] ; ?>
    </div>  </b>

    <b>

 
    <div class="display_flex_2 pages_1">
            <?php 
                        for($a = 0 ; $a<count($liste_projet_id_2) ; $a++){
                            echo "<div>".$liste_projet_name_2[$a]."</div>";
                        }


            ?>
    </div>   </b>
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


 <?php 

if( count($a_) >0) {

  //  echo count($a_) ; 
  //  echo count($a_[0]) ; 
    //var_dump($a_) ; 


for($z = 0 ; $z<count($a_); $z ++) {

     

    for($z_ = 0 ; $z_<count($a_[0]); $z_ ++) {

         //echo $a_[$z][$z_];
       

        if($z_==6){
                    echo "<div class='text-center'>
                    <b class='text-center'>".$a_[$z][$z_]."</b>
                    </div>";
?>


<b>


<div class="text-center bold_child">
<?php 


 
 


 
 
 


 

  

 

  
 
    if(count($b_[$z])==0){
    
    }
    else {
 /*
        echo $b_[$z][0] ; 
        echo "<br/>" ; 
 
        echo "<br/>" ; 
        echo $b_[$z][1] ; 
  
        echo "<br/>" ; 
        echo $b_[$z][2] ; 
         
        echo "<br/>" ; 
      
        echo $b_[$z][3] ; 
        echo "<br/>" ; 
 
        echo $b_[$z][4] ; 
        echo "<br/>" ; 
        echo $b_[$z][5] ; 
        echo "<br/>" ; 
        echo $b_[$z][6] ; 
        echo "<br/>" ; 
        echo $b_[$z][7] ; 

*/
        var_dump($b_[$z]) ; 
    }
   
 
 
 


 
 

 

 
?>
</div>
</b>
<?php 

        }
    
    
    }


}



     }
?>



<style>
    .display_flex_1,.display_flex_2{
        display:flex;
        justify-content:space-between ; 
      
    

    }
    .mmm{
        border:10px solid black ; 
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
    .bold_child{
        padding:25px ; 
    }
 .pages_1{
    color:rgba(0,0,0,0.3) ; 
 }
</style>



<a href="../../">
  <div class="" role="alert">
 Menu principal 
</div>
</a>
</body>
</html>