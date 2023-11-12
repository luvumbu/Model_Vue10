<?php



echo '<div class="space_display">' ;

 
for($a = 0 ; $a< count($liste_projet_id_sha1_2); $a ++) {
  echo "<br/>" ; 

 
  ?>

<div class="class_1" id="<?php echo "parent_".$liste_projet_id_sha1_2[$a] ?>">
        <div class="div_images"></div>  
        <h4 class="liste_projet_name">
          
      <input type="text" onkeyup="update_all_php(this)" id="<?php echo "input_".$liste_projet_id_sha1_2[$a] ?>" title="<?php echo $liste_projet_id_sha1_2[$a] ?>" value="<?php echo $liste_projet_name_2[$a] ?>"  class="liste_projet_name_input">
        </h4>       
     
        <textarea onkeyup="update_all_php(this)" id="<?php echo "textarea_".$liste_projet_id_sha1_2[$a] ?>" title="<?php echo $liste_projet_id_sha1_2[$a] ?>" class="liste_projet_description1_textarea"><?php echo $liste_projet_description1_2[$a] ?></textarea>
        <br/>
 
        <?php 
              if($liste_projet_visibilite1_2[$a]==""){
                       ?>
                       
                       
                       <img class="format_toogle" title="<?php echo $liste_projet_id_sha1_2[$a] ?>"  onclick="visibility(this)" title="<?php echo $liste_projet_id_sha1_2[$a] ; ?>" width="50" height="50" src="https://img.icons8.com/ios-glyphs/50/invisible.png" alt="invisible"/>
                       <?php 
              }
              else {
?>
 <img class="format_toogle" title="<?php echo $liste_projet_id_sha1_2[$a] ?>"  onclick="visibility(this)" title="<?php echo $liste_projet_id_sha1_2[$a] ; ?>" width="50" height="50" src="https://img.icons8.com/ios-glyphs/50/visible--v1.png" alt="invisible"/>

<?php
              }
        ?>
       
        <img class="format_toogle" title="<?php echo $liste_projet_id_sha1_2[$a] ?>"   width="50" height="50" src="https://img.icons8.com/ios-glyphs/50/link--v1.png" alt="link--v1"/>
 
          <img class="format_toogle" onclick="remove_all(this)" title="<?php echo $liste_projet_id_sha1_2[$a] ?>"   width="50" height="50" src="https://img.icons8.com/ios-glyphs/50/delete-forever.png" alt="delete-forever"/>
     
     
     
          </div>
    
<?php 
}




 ?>


 

    
</div>


