<?php echo doctype(); ?>
<html>
  <head>
    <title></title>

    <?php
        $meta = array(
            array('http-equiv' => 'x-ua-compatible', 'content' => 'ie=edge'),
            array('name' => 'viewport', 'content' => 'width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no'),
            array('name' => 'robots', 'content' => 'no-cache'),
            array('name' => 'description', 'content' => 'Admin Panel'),
            array('name' => 'keywords', 'content' => 'Admin Panel,Panel, Administrator'),
            array('name' => 'robots', 'content' => 'no-cache'),
            array('name' => 'Content-type', 'content' => 'text/html; charset=utf-8', 'type' => 'equiv')
        );
        echo meta($meta); 
    ?>

    <!-- favicon ============================================ -->
    <?php echo link_tag('assets/bower_components/images/favicon.png', 'shortcut icon', 'image/ico'); ?>
    
    <!-- Bootstrap 3.3.7 -->
    <?php echo link_tag('assets/bower_components/css/bootstrap.min.css') ?>

    <!-- Font Awesome -->
    <?php echo link_tag('assets/bower_components/font-awesome/css/font-awesome.min.css') ?>

    <!-- Ionicons -->
    <?php echo link_tag('assets/bower_components/css/ionicons.min.css') ?>

    <!-- Theme style -->
    <?php echo link_tag('assets/bower_components/css/AdminLTE.min.css') ?>

    <!-- AdminLTE Skins. Choose a skin from the css/skins folder instead of downloading all of them to reduce the load. -->
    <?php echo link_tag('assets/bower_components/css/_all-skins.min.css') ?>

    <!-- DataTables CSS Stylesheet -->
    <?php echo link_tag('assets/bower_components/css/jquery.dataTables.min.css') ?>

    <?php echo link_tag('assets/bower_components/css/rowDetails.css') ?>

    <!-- Custom CSS Stylesheet -->
    <?php echo link_tag('assets/bower_components/css/style.css') ?>

    <!-- jQuery 3 -->
    <script src="<?php echo base_url()?>assets/bower_components/js/jquery.min.js"></script>

    <!-- Bootstrap 3.3.7 -->
    <script src="<?php echo base_url()?>assets/bower_components/js/bootstrap.min.js"></script>

    <!-- daterangepicker -->
    <script src="<?php echo base_url()?>assets/bower_components/js/moment.min.js"></script>
    <script src="<?php echo base_url()?>assets/bower_components/js/daterangepicker.min.js"></script>
    <?php echo link_tag('assets/bower_components/css/daterangepicker.css') ?>

    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

  </head>  