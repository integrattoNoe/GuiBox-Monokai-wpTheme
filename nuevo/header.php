<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Bootstrap, from Twitter</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="<?php bloginfo('stylesheet_url');?>" rel="stylesheet">

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Le fav and touch icons -->
    <link rel="shortcut icon" href="../assets/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="../assets/ico/apple-touch-icon-57-precomposed.png">
   
<?php wp_enqueue_script("jquery"); ?>
<?php wp_head(); ?>

  <script src="http://code.jquery.com/jquery.js"></script>   
    <script src="<?php get_template_directory_uri() . '/js/bootstrap.js'?>"></script>
    <script src="<?php get_template_directory_uri() . '/js/bootstrap.min.js'?>"></script>
    <!--<script>
      $(document).ready(function(){
         $('.carousel').carousel();
      });
    </script>-->


  </head>

  <body>
<div id="padre">
<div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
        <a class="brand" href="#"><img id="logo-img" src="<?php bloginfo('template_url'); ?>/img/logoRockher.png" alt=""/></a>
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          
<title><?php wp_title('|',1,'right'); ?> <?php bloginfo('name'); ?></title>
          <div class="nav-collapse">
            <ul class="nav"> 
              <?php wp_list_pages(array('title_li' => '')); ?>
            </ul>

          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>
    


      <div class="container" id="principal">