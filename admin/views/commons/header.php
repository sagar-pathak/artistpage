<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title><?php echo $title; ?></title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="<?php echo ADMIN_CSS_DIR; ?>bootstrap.min.css" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="<?php echo ADMIN_CSS_DIR; ?>animate.min.css" rel="stylesheet"/>

    <!--  Light Bootstrap Table core CSS    -->
    <link href="<?php echo ADMIN_CSS_DIR; ?>light-bootstrap-dashboard.css" rel="stylesheet"/>

    <!--     Fonts and icons     -->
    <link href="<?php echo ADMIN_CSS_DIR; ?>font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="<?php echo ADMIN_CSS_DIR; ?>pe-icon-7-stroke.css" rel="stylesheet" />
    <link href="<?php echo ADMIN_CSS_DIR; ?>demo.css" rel="stylesheet" />

    <?php if(isset($active_gallery) || isset($active_videos)){ ?>
    <!-- CSS to style the file input field as button and adjust the Bootstrap progress bars -->
    <link rel="stylesheet" href="<?php echo ADMIN_LIB_DIR;?>jQuery-File-Upload-9.12.5/css/blueimp-gallery.min.css">
    <!-- CSS to style the file input field as button and adjust the Bootstrap progress bars -->
    <link rel="stylesheet" href="<?php echo ADMIN_LIB_DIR;?>jQuery-File-Upload-9.12.5/css/jquery.fileupload.css">
    <link rel="stylesheet" href="<?php echo ADMIN_LIB_DIR;?>jQuery-File-Upload-9.12.5/css/jquery.fileupload-ui.css">
    <?php } ?>

</head>
<body>
    <div class="wrapper">