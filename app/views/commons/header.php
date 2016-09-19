<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title><?php echo TITLE; ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <link rel="stylesheet" href="<?php echo CSS_DIR; ?>bootstrap/bootstrap.css" media="screen">
    <link rel="stylesheet" href="<?php echo CSS_DIR; ?>bootstrap/bootstrap-social.css">
    <link rel="stylesheet" href="<?php echo CSS_DIR; ?>font-awesome.css">
    <link rel="stylesheet" href="<?php echo CSS_DIR; ?>custom.css">
    <link rel="stylesheet" href="<?php echo LIB_DIR; ?>animate-text/animate.css">
    <link rel="stylesheet" href="<?php echo LIB_DIR; ?>bxslider/jquery.bxslider.css">
    <?php
    if(ACTIVE_GALLERY || ACTIVE_VIDEOS){
      echo '<link rel="stylesheet" href="'.LIB_DIR.'bootstrap-blueimp/blueimp-gallery.min.css">
      <link rel="stylesheet" href="'.LIB_DIR.'bootstrap-blueimp/bootstrap-image-gallery.css">'.PHP_EOL;
    }
    ?>
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="<?php echo JS_DIR; ?>html5shiv.js"></script>
      <script src="<?php echo JS_DIR; ?>respond.min.js"></script>
    <![endif]-->
    </head>
  <body>
    <nav class="navbar navbar-default clear-margin-b">
      <!-- first bar -->
      <div class="container container-fluid">
        <div class="navbar-header">
          <a class="navbar-brand" href="<?php echo DOMAIN_NAME; ?>">Artist Name<!-- <img src="<?php echo IMG_DIR; ?>logo.png" /> --></a>
        </div>
      </div>
      <hr/>
      <!-- second bar -->
      <nav class="container navbar navbar-default clear-margin-b">
        <div class="container-fluid clear-padding-lr">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            </button>
          </div>
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav hidden-xs hidden-sm">
              <li style="padding-top:11px;"><a class="inline-display clear-padding-lr <?php if($_SESSION['lang'] == 'ne'){echo " underline";}?>" href="<?php echo ROOT_PATH.SETLANG.'ne'; ?>">नेपाली</a>|<a class="inline-display clear-padding-lr <?php if($_SESSION['lang'] == 'en'){echo " underline";}?>" href="<?php echo ROOT_PATH.SETLANG.'en'; ?>">English</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
              <li <?php echo ACTIVE_HOME; ?>><a href="<?php echo ROOT_PATH_LANG."home"; ?>"><?php echo MENU1; ?><span class="sr-only">(current)</span></a></li>
              <li <?php echo ACTIVE_ABOUT; ?>><a href="<?php echo ROOT_PATH_LANG."about"; ?>"><?php echo MENU2; ?></a></li>
              <li <?php echo ACTIVE_GALLERY; ?>><a href="<?php echo ROOT_PATH_LANG."gallery"; ?>"><?php echo MENU3; ?></a></li>
              <li <?php echo ACTIVE_VIDEOS; ?>><a href="<?php echo ROOT_PATH_LANG."videos"; ?>"><?php echo MENU4; ?></a></li>
              <li <?php echo ACTIVE_FEEDBACK; ?>><a href="<?php echo ROOT_PATH_LANG."feedback"; ?>"><?php echo MENU5; ?></a></li>
            </ul>
          </div>
        </div>
      </nav>
      <hr/>
    </nav>