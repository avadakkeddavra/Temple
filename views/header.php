<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="<?php echo TEMPLATE_PATH?>css/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="<?php echo TEMPLATE_PATH?>css/style.css">
    <link rel="stylesheet" href="<?php echo TEMPLATE_PATH?>css/media.css">
    <link rel="stylesheet" href="<?php echo TEMPLATE_PATH?>font-awesome-4.7.0/css/font-awesome.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700|Raleway:100,300,400,500,700&amp;subset=cyrillic" rel="stylesheet">
</head>
<body>
    <div class="mobile-menu visible-xs visible-sm" data-status="hidden">
        <ul>
            <li><a href="<?php echo CORE_PATH?>">Home</a></li>
            <li><a href="<?php echo CORE_PATH?>about">About</a></li>
            <li><a href="<?php echo CORE_PATH?>blog">Blog</a></li>
            <li><a href="<?php echo CORE_PATH?>">Projects</a></li>
            <li><a href="<?php echo CORE_PATH?>">Contacts</a></li>
        </ul>
   </div>
    <div class="menu-row row ">
       <div class="col-xs-4 logo"><span>TEMPLE</span></div>
        <ul class="menu col-xs-8 visible-md visible-lg">
            <li><a href="<?php echo CORE_PATH?>">Home</a></li>
            <li><a href="<?php echo CORE_PATH?>about">About</a></li>
            <li><a href="<?php echo CORE_PATH?>blog">Blog</a></li>
            <li><a href="<?php echo CORE_PATH?>">Projects</a></li>
            <li><a href="<?php echo CORE_PATH?>">Contacts</a></li>
        </ul>
        <div class="visible-xs col-xs-8 visible-sm show-mobile-menu">
            <button id="menu-show"><i class="fa fa-bars"></i></button>
        </div>
    </div>