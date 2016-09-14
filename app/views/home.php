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
    <?php include(HEADER); ?>
    <?php include(FEED_HEADER); ?>
    <?php include(IMG_SLIDER); ?>
    <script src="<?php echo JS_DIR; ?>jquery-1.10.2.min.js"></script>
    <script src="<?php echo JS_DIR; ?>bootstrap/bootstrap.min.js"></script>
    <script src="<?php echo LIB_DIR; ?>bxslider/jquery.bxslider.js"></script>
    <script src="<?php echo JS_DIR; ?>custom.js"></script>
  </body>
</html>
