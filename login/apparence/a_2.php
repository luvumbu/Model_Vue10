 
<?php 

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
*/

?>
 
 













 
 
 
  

  
 
      
 




      



 

<?php 

 
 



$nombre_total_element = count($apple->list_row)/ count($apple->row) ; 

 


 
 

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
*/



 echo '<div class="space_display">' ;

 
for($a = 0 ; $a< $nombre_total_element; $a ++) {
  echo "<br/>" ; 
  

 
  ?>
<div class="class_1" id="<?php echo "parent_".$liste_projet_id_sha1[$a] ?>">
        <h4 class="liste_projet_name">
          
      <input type="text" onkeyup="update_all_php(this)" style="color:<?php echo  $liste_projet_color_1[$a].";font-size:".$liste_projet_name_font_size[$a] ; ?>" id="<?php echo "input_".$liste_projet_id_sha1[$a] ?>" title="<?php echo $liste_projet_id_sha1[$a] ?>" value="<?php echo $liste_projet_name[$a] ?>"  class="liste_projet_name_input">
        </h4>       
     <div class="block_1">
            <div class="block_1_1">
            
         <!--    -->  
 
             
 
  
</label>

 
 
            <?php

 
                                if($liste_projet_img[$a]!=""){
$src_img__="redirection_dowload_img/".$liste_projet_img[$a] ; 

                                  ?>
                <div class="div_images" onclick="redirection_dowload_img(this)" style="background-image: url('<?php echo $src_img__ ; ?>')" title="<?php echo $liste_projet_id_sha1[$a] ?>"></div>  


                                  <?php 
                                }
                                else {
                                    ?>
                                    <div class="div_images" onclick="redirection_dowload_img(this)" title="<?php echo $liste_projet_id_sha1[$a] ?>"></div>  

                                    <?php 
                                }
              ?>
            </div>
            <div class="block_1_2">
                <textarea onkeyup="update_all_php(this)"  style="color:<?php echo  $liste_projet_color_2[$a].";font-size:".$liste_projet_description1_font_size[$a] ; ?>" id="<?php echo "textarea_".$liste_projet_id_sha1[$a] ?>" title="<?php echo $liste_projet_id_sha1[$a] ?>" class="liste_projet_description1_textarea"><?php echo $liste_projet_description1[$a] ?></textarea>

            </div>
            <label for="<?php echo "liste_projet_color_1_0_".$liste_projet_id_sha1[$a] ?>" title="<?php echo $liste_projet_id_sha1[$a] ?>">
         <!--  volume_element  -->  
 

         <!--  volume_element  -->  
     </div>

        <br/>

        
        
        <img width="50" onclick="redirection_dowload_img(this)" class="format_toogle" height="50" title="<?php echo $liste_projet_id_sha1[$a] ?>" src="https://img.icons8.com/material-outlined/50/picture.png" alt="picture"/>
 
        <?php 
              if($liste_projet_visibilite1[$a]==""){
                       ?>
                       
                       
                       <img class="format_toogle" title="<?php echo $liste_projet_id_sha1[$a] ?>"  onclick="visibility(this)" title="<?php echo $liste_projet_id_sha1[$a] ; ?>" width="50" height="50" src="https://img.icons8.com/ios-glyphs/50/invisible.png" alt="invisible"/>
                       <?php 
              }
              else {
?>
 <img class="format_toogle" title="<?php echo $liste_projet_id_sha1[$a] ?>"  onclick="visibility(this)" title="<?php echo $liste_projet_id_sha1[$a] ; ?>" width="50" height="50" src="https://img.icons8.com/ios-glyphs/50/visible--v1.png" alt="invisible"/>

<?php
              }
        ?>
      <a  href="<?php echo "blog/pages.php/".$liste_projet_id_sha1[$a] ?>">
       <img class="format_toogle" title="<?php echo $liste_projet_id_sha1[$a] ?>"   width="50" height="50" src="https://img.icons8.com/ios-glyphs/50/link--v1.png" alt="link--v1"/>

       </a>
       <?php 

            if($nombre_total_element==1){
?>

<img class="format_toogle"  width="50" height="50" onclick="add_element(this)" title="<?php echo $liste_projet_id_sha1[$a] ?>"  src="https://img.icons8.com/ios-glyphs/30/filled-plus-2-math.png" alt="filled-plus-2-math"/>
 
<?php 
            }



            if($element_edit){
?>

<img class="format_toogle" width="50" height="50" onclick="element_edit(this)" src="https://img.icons8.com/windows/50/edit--v1.png" title="<?php echo $liste_projet_id_sha1[$a] ?>" alt="edit--v1"/>

<?php 
            }
      ?>

          <img class="format_toogle" onclick="remove_all(this)" title="<?php echo $liste_projet_id_sha1[$a] ?>"   width="50" height="50" src="https://img.icons8.com/ios-glyphs/50/delete-forever.png" alt="delete-forever"/>
          <img class="format_toogle" onclick="annulation_all(this)" title="<?php echo $liste_projet_id_sha1[$a] ?>" width="50" height="50" src="https://img.icons8.com/windows/50/undo.png" alt="undo"/>
           <br/>
      <?php /*    <input type="color" title="<?php echo $liste_projet_id_sha1[$a] ?>" onchange="change_background(this)" > */ ?>

            </div>
    
<?php 
 
}




 ?>


 

    
</div>

 

 <script>
  function update_all_php(_this){


    var input_ = document.getElementById("input_"+_this.title);
    var textarea_ = document.getElementById("textarea_"+_this.title);
 
 
var ok = new Information("class/php/php_update/update_all.php"); // création de la classe 
ok.add("liste_projet_id_sha1", _this.title); // ajout de l'information pour lenvoi 
ok.add("liste_projet_name", input_.value); // ajout de l'information pour lenvoi 
ok.add("liste_projet_description1", textarea_.value); // ajout de l'information pour lenvoi 

 
console.log(ok.info()); // demande l'information dans le tableau
ok.push(); // envoie l'information au code pkp 
 




  }
var img_1 = "https://img.icons8.com/ios-glyphs/50/visible--v1.png" ; 
var img_2 = "https://img.icons8.com/ios-glyphs/50/invisible.png" ; 
var img_3 = "https://img.icons8.com/ios-glyphs/50/link--v1.png" ; 
var img_4 = "https://img.icons8.com/ios-glyphs/50/delete-forever.png" ; 
var liste_projet_visibilite1 = "" ; 
  function visibility(_this){
    console.log(_this.src) ; 

    if(_this.src==img_2){
      _this.src=img_1; 
      liste_projet_visibilite1 = "(OO)" ;
    }
    else {
      _this.src=img_2; 
   

    }


 
var ok = new Information("class/php/php_update/visibility.php"); // création de la classe 
ok.add("liste_projet_id_sha1", _this.title); // ajout de l'information pour lenvoi 
ok.add("liste_projet_visibilite1", liste_projet_visibilite1); // ajout d'une deuxieme information denvoi  
console.log(ok.info()); // demande l'information dans le tableau
ok.push(); // envoie l'information au code pkp 
 




  }
 </script>
<style>
  .format_toogle{
    padding:10px; 
    margin:10px;
    background-color:rgba(0,0,0,0.1) ; 
    border:1px solid rgba(0,0,0,0.2) ; 
    transition:1s all ; 
  }
  .format_toogle:hover{
    cursor:pointer ; 
    transition:1s all ; 
    background-color:rgba(120,0,0,0.1) ; 
    border:1px solid rgba(120,0,0,0.2) ; 

  }
  .liste_projet_description1_textarea{
        border:1px solid rgba(0,0,0,0.1);
    width:80% ;
    padding-bottom:15px;  
    border-bottom:1px solid rgba(0,0,0,0.4);
  }
  .liste_projet_name_input{
    border:1px solid rgba(0,0,0,0.1);


    border-bottom:1px solid rgba(0,0,0,0.4);
    width:100%; 
  }
    .pages_x{
        width:50%;
        margin:auto ; 
    }
  .liste_projet_name,.liste_projet_description1{
    margin:20px; 
    padding:25px; 
  }
  .terminer{
    background-color:rgba(130,0,0,0.5); 
    width:100px; 
    color:white ; 

    text-align:center ; 
    border-radius :15px;
  }
 
  .class_1{
    border:1px solid rgba(0,0,0,0.3) ; 
 
    width:400px; 
    text-align:center ; 
    margin:200px; 
    margin-bottom:50px ; 
  
    width:80%; 
  }
  .space_display{
 
 display:flex; 
 justify-content:center ; 
 flex-wrap:wrap ;  
 margin-top:150px; 
 width:80%; 

 margin:auto ; 
 
     }
     .block_1_1{
   
     
  
     }

     .block_1_2 textarea{
  
     height : 300px; 
     width:300px; 
     margin:auto  ; 
  
     }
     .block_1{
     
      display:flex ; 
      justify-content:space-around ; 
      flex-wrap:wrap ; 
     }
    .div_images{
        width:299px;
        height:299px ; 
        
         
        background-image:url("../src/img/bokonzi.png");
        background-size:100%; 
    }

  
    .padding_el{
 
    
    }
    .green{
      background-color:green ; 
    }
    .test_1{
      display:flex;
      justify-content:space-around ; 
    }
</style>

<script>
  
</script>

<style>
  .space_display_1{
    display:none ; 
  }
</style>


 