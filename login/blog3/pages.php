<?php
session_start() ; 
include("../class/php/php_select_data/give_url.php") ; 
include("pages_json.php") ; 
include("pages_css.php") ;   
if(count($apple->list_row)!=0){
include("add_log.php") ; 
$src = "../../src/img/all/qr_code/".give_url().".png" ; ?>

<div class="div_img_2">
 <img src="<?php echo $src ; ?>" alt="" srcset="">

</div>
<?php 
}
?>






 <?php 

 
$apple = new Select_datas($servername,$username,$password,$dbname);

  array_push(
    $apple->row,

    'liste_log_id',
    'liste_log_ip',
    'liste_projet_id_sha1',
    'liste_projet_id_parent',
    'information_user_id_sha1',
    'liste_reg_date'
 

    

    );





    $apple->sql='SELECT * FROM `liste_log2` WHERE `liste_projet_id_sha1`="'.give_url().'"';
    $apple->execution();
    $myJSON = json_encode($apple->list_row); 
 










      
$total_visit = count($apple->list_row)/6 ;

      
 
    //var_dump($apple->list_row) ; 


    ?>
 
 

 <?php 


   
$apple_my_ip = new Select_datas($servername,$username,$password,$dbname);

array_push(
  $apple_my_ip->row,

  'liste_log_id',
  'liste_log_ip',
  'liste_projet_id_sha1',
  'liste_projet_id_parent',
  'information_user_id_sha1',
  'liste_reg_date'


  

  );





  $apple_my_ip->sql='SELECT * FROM `liste_log2` WHERE `liste_log_ip` ="'.$REMOTE_ADDR.'" AND `liste_projet_id_sha1`="'.give_url().'"';
  $apple_my_ip->execution();
  $myJSON = json_encode($apple_my_ip->list_row); 



 



 
 

  ?>

 
<br/>
 



<?php 

$mes_visites = count($apple_my_ip->list_row)/6 ; 
//  echo $total_visit -count($apple_my_ip->list_row)/6;


  ?>

<!--
<p>
    Nombre total de visite  <?php echo  $total_visit ?> <img width="20" height="20" src="https://img.icons8.com/sf-regular/20/visible.png" alt="visible"/>
</p>
<p>
    Vous avez visite cette page   <?php echo  $mes_visites ?> fois  <img width="20" height="20" src="https://img.icons8.com/sf-regular/20/visible.png" alt="visible"/>
</p>

<p>
   Nombre de visite sans votre passage <?php echo  $total_visit-$mes_visites ?> fois  <img width="20" height="20" src="https://img.icons8.com/sf-regular/20/visible.png" alt="visible"/>
</p>

-->


<div class="background_bl">
<a href="<?php echo $replace_el  ?>" > Template  2 </a>
</div>
<br/>

<div class="background_bl">
    <a href="../" class="background_bl">Menu principal </a>
</div>


<br/>
<style>
    .background_bl{
        background-color:black ; 
        color:white ; 
        padding:15px; 
        text-align:center ; 
         
    }
</style>