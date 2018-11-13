<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!--<link rel="stylesheet/less" href="src/style/main.css">-->
	
	<link rel="stylesheet/less" href="src/style/menuMovil.css">-->
	<!--<link rel="stylesheet" href="<?//echo get_template_directory_uri();?>/node_modules/bootstrap/dist/css/bootstrap.min.css">-->
	<script src="<?echo get_template_directory_uri();?>/node_modules/jquery/dist/jquery.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<!--<script src="<?//echo get_template_directory_uri();?>/src/js/fontawesome-all.js"></script>-->
	<!--<script src="<?//echo get_template_directory_uri();?>/node_modules/bootstrap/dist/js/bootstrap.js"></script>-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	<link rel="stylesheet/less" href="<?echo get_template_directory_uri();?>/src/style/main.less">
	<link rel="stylesheet/less" href="<?echo get_template_directory_uri();?>/node_modules/aos/dist/aos.css">
	<link rel="stylesheet/less" href="<?echo get_template_directory_uri();?>/node_modules/animate.css/animate.min.css">
	<script src="<?echo get_template_directory_uri();?>/node_modules/aos/dist/aos.js"></script>
	
	<link rel="stylesheet/less" href="<?echo get_template_directory_uri();?>/src/style/gradients.css">
	
	<link rel="stylesheet/less" href="<?echo get_template_directory_uri();?>/src/style/menuMovil2.less">
	<link rel="stylesheet/less" href="<?echo get_template_directory_uri();?>/src/style/media-query.less">
	<script src="<?echo get_template_directory_uri();?>/node_modules/less/dist/less.js"></script>
	<?php wp_head(); ?>
	
</head>
<?php /*wp_nav_menu( array( 'theme_location' => 'header-menu' ) );*/ ?>
<body class="hero hero--">

	<div id="bann" style="background-image: url('<?echo get_template_directory_uri();?>/src/images/gui_box4.png');" class="animated shake">
	</div>
	<nav class="navbar navbar-dark animated">
	  <div class="container-fluid">
	    <div class="navbar-header">
	      <a class="navbar-brand" href="#">
	        Logo
	      </a>
	    </div>
	    <ul class="navbar-nav mr-auto">
	      	<li class="nav-item active">
      	      <a class="nav-link" href="#">Home</a>
      	    </li>
	    </ul>
	  </div>
	</nav>
	<section id="guiboxContent">
	

	<nav class="menu" id="navMovil" style="display: none;">
	   <input type="checkbox" href="#" class="menu-open" name="menu-open" id="menu-open" />
	   <label class="menu-open-button" for="menu-open">
	    <span class="lines line-1"></span>
	    <span class="lines line-2"></span>
	    <span class="lines line-3"></span>
	  </label>

	   <a href="#" class="menu-item blue"> <i class="fa fa-anchor"></i> </a>
	   <a href="#" class="menu-item green"> <i class="fa fa-coffee"></i> </a>
	   <a href="#" class="menu-item red"> <i class="fa fa-heart"></i> </a>
	   <a href="#" class="menu-item purple"> <i class="fa fa-microphone"></i> </a>
	   <a href="#" class="menu-item orange"> <i class="fa fa-star"></i> </a>
	   <a href="#" class="menu-item lightblue"> <i class="fa fa-diamond"></i> </a>
	</nav>

	<div class="outer-menu">
	  <input class="checkbox-toggle" type="checkbox" />
	  <div class="hamburger">
	    <div></div>
	  </div>
	  <div id="logo-movil">
	  	<h2>LOGO</h2>
	  </div>
	  <div class="menu">
	    <div>
	      <div>
	        <ul>
	          <li><a href="#">About</a></li>
	          <li><a href="#">Products</a></li>
	          <li><a href="#">Blog</a></li>
	          <li><a href="#">Contact</a></li>
	        </ul>
	      </div>
	    </div>
	  </div>
	</div>

	<div class="container-fluid" id="mainContent">
		