<?php
session_start();
include("../class/php/php_select_data/give_url.php");
include("pages_json.php");
include("pages_css.php");
if (count($apple->list_row) != 0) {
  include("add_log.php");
  $src = "../../src/img/all/qr_code/" . give_url() . ".png"; ?>

  <div class="div_img_2">
    <img src="<?php echo $src; ?>" alt="" srcset="">

  </div>
<?php
}
$apple = new Select_datas($servername, $username, $password, $dbname);
array_push(
  $apple->row,
  'liste_log_id',
  'liste_log_ip',
  'liste_projet_id_sha1',
  'liste_projet_id_parent',
  'information_user_id_sha1',
  'liste_reg_date'
);
$apple->sql = 'SELECT * FROM `liste_log2` WHERE `liste_projet_id_sha1`="' . give_url() . '"';
$apple->execution();
$myJSON = json_encode($apple->list_row);
$total_visit = count($apple->list_row) / 6;
//var_dump($apple->list_row) ;    
$apple_my_ip = new Select_datas($servername, $username, $password, $dbname);
array_push(
  $apple_my_ip->row,
  'liste_log_id',
  'liste_log_ip',
  'liste_projet_id_sha1',
  'liste_projet_id_parent',
  'information_user_id_sha1',
  'liste_reg_date'
);
$apple_my_ip->sql = 'SELECT * FROM `liste_log2` WHERE `liste_log_ip` ="' . $REMOTE_ADDR . '" AND `liste_projet_id_sha1`="' . give_url() . '"';
$apple_my_ip->execution();
$myJSON = json_encode($apple_my_ip->list_row);
$mes_visites = count($apple_my_ip->list_row) / 6;
//  echo $total_visit -count($apple_my_ip->list_row)/6; 
/*
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

*/
?>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link active" href="<?php echo $replace_el ?>">Template 02</a>
      </li>

      <!--   <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>-->

    </ul>
  </div>
  <div class="dark_mode_style" onclick="dark_mode(this)" id="dark_mode" title="not">
    <img width="50" height="50" src="https://img.icons8.com/office/50/light-on--v1.png" />
  </div>
  <div id="dark_mode_style">
  </div>
  <script>
    function Ajax(id, source) {
      var xhttp = new XMLHttpRequest();
      xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
          document.getElementById(id).innerHTML =
            this.responseText;
        }
      };
      xhttp.open("GET", source, true);
      xhttp.send();
    }
    // exemple de code 
    /* 
    Ajax(nomId,document/source.txt);
    */


    function dark_mode(_this) {

      if (_this.title == "not") {
        Ajax("dark_mode_style", "../dark_mode.html");
        _this.title = "dark_mode";

      }
      else {
        Ajax("dark_mode_style", "../not.html");
        _this.title = "not";
      }


    }

  </script>
  <style>
    .dark_mode_style {

      position: fixed;
      top: 60px;
      right: 0;
    }

    .dark_mode_style:hover {
      background-color: rgba(100, 100, 0, 0.6);
      border-radius: 100%;
      cursor: pointer;
      transition: 1s all;
    }
  </style>