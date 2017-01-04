<!DOCTYPE html>
    <head>
        <meta charset="utf-8">
        <link rel="shortcut icon" href="<?php echo $logo;?>" />
         <title><?php echo $titleName; ?></title>
        <meta name="description" content="Annop Pretest">
        <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1.0">
        <script src="<?php echo $assets_folder;?>/js/jquery-3.1.1.min.js"></script>
        <link rel="stylesheet" href="<?php echo $assets_folder;?>/css/bootstrap.min.css" />
        <script src="<?php echo $assets_folder;?>/js/bootstrap.min.js"></script>
        <script src="<?php echo $assets_folder;?>/sweetalert.min.js"></script>
        <link rel="stylesheet" href="<?php echo $assets_folder;?>/sweetalert.css" />
        <script src="<?php echo $logo;?>"></script>
      </head>
      <body>
          <main id="main-container">
            <div>
              <div class="row text-center" style="background:#ffe4a1;">
                  <div class="col-xs-12">
                      <img id="logo" src="<?php echo $logo;?>">
                      <h2 id="textBandner" style="color:#eb8948; display: inline; ">ANNOP PRETEST</h2>
                      <?php
                        if($activeURL != $studentURL.'/login.php'){
                          echo '<button type="button" class="navbar-toggle" style="background: white; padding: 2px 6px 5px 6px; " data-toggle="collapse" data-target="#myNavbar">
                              <span>เมนู</span> <span class="glyphicon glyphicon-menu-down"></span>
                          </button>';
                        }
                      ?>

                    </div>
                </div>
            </div>
<style>
@media screen and (orientation: portrait) {
  #textBandner{
    color:#eb8948;
    display: inline;
    font-size: 22px;
  }
  #logo{
    width:45px;
    padding: 5px
  }
}
@media screen and (orientation: landscape) {
  #space{
    height: 100px;
  }
  #textBandner{
    color:#eb8948;
    display: inline;
  }
  #logo{
    width:80px;
    padding: 5px
  }
}
</style>
