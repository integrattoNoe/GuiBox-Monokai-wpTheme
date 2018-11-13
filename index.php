<?
  //require "header.php";
 get_header();
?>
  <!--<section>
    <div class="container">
        <h2>Image Post Type</h2>
        
        <div class="box image">
          <div class="box-header">
            <h3><a href=""><img src="https://goo.gl/oOD0V2" alt="" />Roswell Parian</a>
              <span>March 21,18:45pm <i class="fa fa-globe"></i></span>
            </h3>
            <span><i class="fa fa-angle-down"></i></span>
            <div class="window"><span></span></div>
          </div>
          <div class="box-content">
            <div class="content">
              <img src="https://goo.gl/nvqkEz" alt="" />
            </div>
            <div class="bottom">
              <p>The life is much more interesant, when you remmenber the last time</p>
              <span><span class="fa fa-search-plus"></span></span>
            </div>
          </div>
          <div class="box-likes">
            <div class="row">
              <span><a href="#"><img src="https://goo.gl/oM0Y8G" alt="" /></a></span>
              <span><a href="#"><img src="https://goo.gl/vswgSn" alt="" /></a></span>
              <span><a href="#"><img src="https://goo.gl/4W27eB" alt="" /></a></span>
              <span><a href="#">+99</a></span>
              <span>Like this</span>
            </div>
            <div class="row">
              <span>145 comments</span>
            </div>
          </div>
          <div class="box-buttons">
            <div class="row">
              <button><span class="fa fa-thumbs-up"></span></button>
              <button><span class="ion-chatbox-working"></span></button>
              <button><span class="ion-share"></span></button>
            </div>
          </div>
          <div class="box-click"><span><i class="ion-chatbox-working"></i> View 140 more comments</span></div>
          <div class="box-comments">
            <div class="comment"><img src="https://goo.gl/oM0Y8G" alt="" />
              <div class="content">
                <h3><a href="">Emily Rudd</a><span><time> 1 hr - </time><a href="#">Like</a></span></h3>
                <p>Wow irealy, i love here. Nice pic</p>
              </div>
            </div>
            <div class="comment"><img src="https://goo.gl/vswgSn" alt="" />
              <div class="content">
                <h3><a href="">barbara Palvin</a><span><time> 1 hr - </time><a href="#">Like</a></span></h3>
                <p>The life is perfect, <3 Nice Scene</p>
              </div>
            </div>
            <div class="comment"><img src="https://goo.gl/4W27eB" alt="" />
              <div class="content">
                <h3><a href="">Erica Mohn</a><span><time> 1 hr - </time><a href="#">Like</a></span></h3>
                <p>Keep up, look pro :D</p>
              </div>
            </div>
            <div class="comment"><img src="https://goo.gl/zX8wpb" alt="" />
              <div class="content">
                <h3><a href="">karlie Kloss</a><span><time> 1 hr - </time><a href="#">Like</a></span></h3>
                <p>I like the scene & the thing <3 lol</p>
              </div>
            </div>
            <div class="comment"><img src="https://goo.gl/K7E2k4" alt="" />
              <div class="content">
                <h3><a href="">Candice Swanepoel</a><span><time> 1 hr - </time><a href="#">Like</a></span></h3>
                <p>The simple idea is everything, :) oooh</p>
              </div>
            </div>
          </div>
            <div class="box-new-comment">
              <img src="https://goo.gl/oOD0V2" alt="" />
              <div class="content">
                <div class="row">
                  <textarea placeholder="write a comment..."></textarea>
                </div>
                <div class="row">
                  <span class="ion-android-attach"></span>
                  <span class="fa fa-smile-o"></span>
                </div>
              </div>
            </div>
        </div>
  </section>-->

  <div class="row" id="entry-content">
    <?
    global $wpdb;
    $args1= array(
        'post_type' => 'post',
        'orderby' => 'date',
        'posts_per_page' => 32,
        'order' => 'DESC'
        /*'tax_query' => array(
              array(
                'taxonomy' => 'product_tag',
                'field'    => 'slug',
                'terms'    => 'nuevo'
              )
        )*/
    );
     
    //$loop2 = new WP_Query( $args1 );
    if ( have_posts() ){
      while ( have_posts() ){
        the_post();
        /*print_r(the_title());
        echo the_post_thumbnail();
        echo the_excerpt();*/
      
    ?>
      
      <div class='divItemDashboard orderItem col-md-4 col-sm-6 col-xs-12 animated' data-aos="fade-up">
      <div class="header-entry">
        <a href="<?php echo get_permalink(); ?>"><h5><?echo the_title();?></h5></a>
      </div>
      <div class='entry-image'><?echo the_post_thumbnail();?></div>
      <div class='entry-title'><a href="<?php echo get_permalink(); ?>"><h5><?echo the_title();?></h5></a></div>
      <div class='horario divContent'>
        <?echo the_excerpt();?>
      </div>
      
      <div class='divContent divBtnAsigOp'>
        <a class='leerMas' href="<?php echo get_permalink(); ?>"> Leer Más...</a>
      </div>
      </div>
    <?php  }
    }else{
      echo "No ahy nada";
    }
    ?>
    
  </div>


  <!-- filters -->
  <svg xmlns="http://www.w3.org/2000/svg" version="1.1">
      <defs>
        <filter id="shadowed-goo">
            
            <feGaussianBlur in="SourceGraphic" result="blur" stdDeviation="10" />
            <feColorMatrix in="blur" mode="matrix" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 18 -7" result="goo" />
            <feGaussianBlur in="goo" stdDeviation="3" result="shadow" />
            <feColorMatrix in="shadow" mode="matrix" values="0 0 0 0 0  0 0 0 0 0  0 0 0 0 0  0 0 0 1 -0.2" result="shadow" />
            <feOffset in="shadow" dx="1" dy="1" result="shadow" />
            <feComposite in2="shadow" in="goo" result="goo" />
            <feComposite in2="goo" in="SourceGraphic" result="mix" />
        </filter>
        <filter id="goo">
            <feGaussianBlur in="SourceGraphic" result="blur" stdDeviation="10" />
            <feColorMatrix in="blur" mode="matrix" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 18 -7" result="goo" />
            <feComposite in2="goo" in="SourceGraphic" result="mix" />
        </filter>
      </defs>
  </svg>
<?
  //require "footer.php";
 get_footer();
?>