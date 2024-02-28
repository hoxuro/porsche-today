<?php
get_header('header.php');

// Recogemos el criterio de busqueda
if (is_category()) {
  $words = single_cat_title('', false) . ' category';
} elseif (is_tag()) {
  $words = single_tag_title('', false) . ' tag';
} elseif (is_author()) {
  the_post();
  $words = get_the_author();  // Obtenemos el autor de los posts

  // Debemos volver el puntero del resultset al primer resultado
  rewind_posts();
} elseif (is_day()) {
  $words = get_the_date('');
} elseif (is_month()) {
  $words = get_the_date('F Y');
} elseif (is_year()) {
  $words = get_the_date('F');
} elseif (is_tax('reviews-category')) {
} elseif (is_tax('review-tag')) {
}

// Hallar el numero de resultados de la búsqueda
if (have_posts()) {
  // $wp_the_query es una de las formas de referenciar a la consulta principal
  $total = $wp_the_query->found_posts;  // Almacenamos el numero de posts encontrados  
  if ($total !== 1) {
    $whatever = $total . ' posts found';
  } else {
    $whatever = '1 post found';
  }
} else {
  $whatever = 'No posts found';
}
?>

<body>

  <!-- LOADER -->
  <div id="loader-overflow">
    <div id="loader3">Please enable JS</div>
  </div>

  <div id="wrap" class="boxed ">
    <div class="grey-bg"> <!-- Grey BG  -->

      <!--[if lte IE 8]>
				<div id="ie-container">
					<div id="ie-cont-close">
						<a href='#' onclick='javascript&#058;this.parentNode.parentNode.style.display="none"; return false;'><img src='images/ie-warn/ie-warning-close.jpg' style='border: none;' alt='Close'></a>
					</div>
					<div id="ie-cont-content" >
						<div id="ie-cont-warning">
							<img src='images/ie-warn/ie-warning.jpg' alt='Warning!'>
						</div>
						<div id="ie-cont-text" >
							<div id="ie-text-bold">
								You are using an outdated browser
							</div>
							<div id="ie-text">
								For a better experience using this site, please upgrade to a modern web browser.
							</div>
						</div>
						<div id="ie-cont-brows" >
							<a href='http://www.firefox.com' target='_blank'><img src='images/ie-warn/ie-warning-firefox.jpg' alt='Download Firefox'></a>
							<a href='http://www.opera.com/download/' target='_blank'><img src='images/ie-warn/ie-warning-opera.jpg' alt='Download Opera'></a>
							<a href='http://www.apple.com/safari/download/' target='_blank'><img src='images/ie-warn/ie-warning-safari.jpg' alt='Download Safari'></a>
							<a href='http://www.google.com/chrome' target='_blank'><img src='images/ie-warn/ie-warning-chrome.jpg' alt='Download Google Chrome'></a>
						</div>
					</div>
				</div>
				<![endif]-->



      <?php
      get_template_part('nav', 'black--no-transparent');
      ?>

      <!-- PAGE TITLE SMALL -->
      <div class="search-bg page-title-cont page-title-large grey-dark-bg page-title-img  pt-250" style="background-image: url(<?php echo bloginfo('template_directory') ?>/assets/images/archive-bg.jpg)">
        <div class="relative container align-left">
          <div class="row">

            <div class="col-md-8">
              <div class="page-title-col">
                <div class="page-sub-title text-white my-text-shadow">
                  RESULTS FOR: <?php echo $words ?>
                </div>
                <h1 class="page-title text-white my-text-shadow"><?php echo $whatever ?></h1>
              </div>
            </div>

          </div>
        </div>
      </div>

      <!-- COTENT CONTAINER -->
      <div class="container p-140-cont">

        <div class="row">

          <!-- CONTENT -->
          <div class="col-sm-8 blog-main-posts">

            <div class="row">

              <?php  // en este caso vamos a usar el loop normal de wordpress

              if (have_posts()) :
                while (have_posts()) :
                  the_post();



                  if (has_post_thumbnail()) {
                    $thum_url = get_the_post_thumbnail_url();
                  } else {


                    if (get_post_type() === 'page') { // si el resultado es una pagina, y no un post normal

                      switch ($post->post_title) {
                        case 'HOME':
                          $thum_url = get_template_directory_uri() . '/assets/images/default.png';
                          break; // Haced captura de todas las paginas
                        case 'BOOKINGS':
                          $thum_url = get_template_directory_uri() . '/assets/images/';
                          break; // Haced captura de todas las paginas
                        case 'GALLERY':
                          $thum_url = get_template_directory_uri() . '/assets/images/';
                          break; // Haced captura de todas las paginas
                        case 'BLOG':
                          $thum_url = get_template_directory_uri() . '/assets/images/';
                          break; // Haced captura de todas las paginas
                        case 'CONTACT':
                          $thum_url = get_template_directory_uri() . '/assets/images/contact_hero.png';
                          break; // Haced captura de todas las paginas
                        case 'ARCHIVES':
                          $thum_url = get_template_directory_uri() . '/assets/images/';
                          break; // Haced captura de todas las paginas
                        case 'Privacy Policy':
                          $thum_url = get_template_directory_uri() . '/assets/images/';
                          break; // Haced captura de todas las paginas
                      }
                    } else {
                      $thum_url = get_template_directory_uri() . '/assets/images/default.png';
                    }
                  }


              ?>

                  <div class="col-md-12 wow fadeIn pb-70 search-post-container">

                    <div class="post-prev-img">
                      <a href="<?php echo the_permalink(); ?>"><img src="<?php echo $thum_url; ?>" alt="<?php echo the_title(); ?>"></a>
                    </div>

                    <div class="post-content">
                      <div class="post-prev-title">
                        <h3 class="search-post-title"><a href="<?php echo the_permalink(); ?>"><?php echo the_title(); ?></a></h3>
                      </div>

                      <div class="post-prev-info">
                        <?php echo the_time('F j, Y'); ?><span class="slash-divider">/</span><a href="#"><?php echo the_author_posts_link(); ?></a>
                      </div>

                    </div>
                  </div>

              <?php


                endwhile;

              else :
                echo '<h2 class="noposts">No posts published yet...</h2>';
              endif;

              $big = 999999999; // necesito este integer porque el la documentacion dice que sirve para evitar errores con la url

              $args = array(
                'type' => 'list',
                'prev_text' => '<i class="fa fa-angle-left"></i><span class="sr-only">Previous</span>',
                'next_text' => '<i class="fa fa-angle-right"></i><span class="sr-only">Next</span>',
              );

              ?>

              <div class="mt-0">
                <nav class="blog-pag">


                  <?php

                  echo the_posts_pagination($args);

                  ?>

                </nav>
              </div>

              <?php
              if (get_post_type() === 'projects') {
                echo '<div class="cpt"><span class="cpt-title">Projects</span></div>';
              }
              ?>


            </div>

          </div>

          <?php

          get_sidebar();

          ?>
        </div>

      </div>


      <!-- NEWS LETTER -->
      <div class="page-section nl-cont">
        <div class="container news-flex-box">
          <div class="col-md-6">
            <p class="heading-secondary">SUSCRIBE TO OUR NEWSLETTER</p>
            <p class="news-text">Get early access to our reviews and the possibility of accessing our marketplace 24 hours in advance by subscribing to our newsletter</p>
          </div>
          <div class="col-md-6 form-column">
            <div class="relative">
              <div id="mc_embed_signup" class="nl-form-container clearfix">
                <form action="#" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="newsletterform validate" target="_blank" novalidate> <!-- EDIT THIS ACTION URL (add "post-json?u" instead of "post?u" and appended "&amp;c=?" to the end of this URL) -->
                  <input type="email" value="" name="EMAIL" class="email nl-email-input" id="mce-EMAIL" placeholder="Enter your email" required>
                  <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                  <div style="position: absolute; left: -5000px;"><input type="text" name="b_ba37086d08bdc9f56f3592af0_e38247f7cc" tabindex="-1" value=""></div>

                  <input type="submit" value="SUBSCRIBE" name="subscribe" id="mc-embedded-subscribe" class="button medium gray">
                </form>
                <div id="notification_container"></div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <?php
      get_footer('footer.php');
      ?>