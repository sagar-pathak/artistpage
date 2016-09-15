<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title><?php echo TITLE; ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <link rel="stylesheet" href="<?php echo CSS_DIR; ?>bootstrap/bootstrap.css" media="screen">
    <link rel="stylesheet" href="<?php echo CSS_DIR; ?>custom.css">
    <link rel="stylesheet" href="<?php echo LIB_DIR; ?>animate-text/animate.css">
    <link rel="stylesheet" href="<?php echo LIB_DIR; ?>bxslider/jquery.bxslider.css">
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
              <li style="padding-top:11px;"><a class="inline-display clear-padding-lr" href="#">नेपाली</a>|<a class="inline-display clear-padding-lr" href="#">English</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
              <li class="active"><a href="#"><?php echo MENU1; ?><span class="sr-only">(current)</span></a></li>
              <li><a href="#"><?php echo MENU2; ?></a></li>
              <li><a href="#"><?php echo MENU3; ?></a></li>
              <li><a href="#"><?php echo MENU4; ?></a></li>
              <li><a href="#"><?php echo MENU5; ?></a></li>
              <li><a href="#"><?php echo MENU6; ?></a></li>
            </ul>
          </div>
        </div>
      </nav>
      <hr/>
    </nav>