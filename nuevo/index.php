<?php
/*
Theme Name: WPBootstrap
Theme URI: http://geekpurple.com/
Description: Plantilla demo para el post  <a href="http://geekpurple.com/crear-una-plantilla-de-wordpress-con-bootstrap/">Como hacer una plantilla para WordPress usando Bootstrap</a>.
Author: Yolanda Jimenez
Author URI: http://geekpurple.com/
Version: 1.0
Tags: wordpress, blog, bootstrap

Este tema ha sido creado basandonos en los ejemplos de Bootstrap para crear una web
*/
?>

<?php 
/**
 * Template Name: Home template
 *
 *
 * Template general para el home
 */
 get_header(); ?>
<!--Body content-->
            
            <div class="row" id="galeria">
               <!--<h1>Guía de uso Bootstrap en GeekPurple</h1>
               <p>Estamos haciendo un ejemplo sencillo para empezar a trabajar con Bootstrap.</p>
               
              <?php echo do_shortcode('[wonderplugin_slider id="1"]'); ?>-->
              <?php echo do_shortcode("[metaslider id=11]"); ?>

           </div>
             
             <div class="row-fluid">
               
               
               <div class="span4"> <h2> Titulo 1 </h2> 
                 <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean sollicitudin vestibulum est a aliquam. Suspendisse ac lectus ultrices, porta eros eu, viverra nunc. Aliquam vel eros iaculis, pharetra orci et, consectetur magna. Duis egestas orci sem, at commodo ante viverra quis. Donec sed dolor condimentum, congue erat ut, pulvinar tortor.</p>
                 
                 <a class="btn btn-primary" href="#">Botón titulo 1</a>
                 
                 <i class="icon-trash icon-white"></i> 
               </div>
               
               <div class="span4"> <h2> Titulo 2 </h2> 
                 <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean sollicitudin vestibulum est a aliquam. Suspendisse ac lectus ultrices, porta eros eu, viverra nunc. Aliquam vel eros iaculis, pharetra orci et, consectetur magna. Duis egestas orci sem, at commodo ante viverra quis. Donec sed dolor condimentum, congue erat ut, pulvinar tortor.</p>
                 <a class="btn btn-primary" href="#">Botón titulo 2</a>
                 
                 </div>
                 
               <div class="span4"> <h2> Titulo 3 </h2> 
                 <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean sollicitudin vestibulum est a aliquam. Suspendisse ac lectus ultrices, porta eros eu, viverra nunc. Aliquam vel eros iaculis, pharetra orci et, consectetur magna. Duis egestas orci sem, at commodo ante viverra quis. Donec sed dolor condimentum, congue erat ut, pulvinar tortor.</p> 
                 <a class="btn btn-primary" href="#">Botón titulo 3</a>
                 
                 </div>
             </div>
  </div> <!--div del contenedor del contenido principal-->
  </div><!--div del contenedor padre (abarca contenido principal y menu)-->
	
<?php get_footer(); ?>