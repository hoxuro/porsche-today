<?php

get_header('header.php');
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
      <div class="page-title-cont page-title-large grey-dark-bg page-title-img  pt-300 blog-bg" style="background-image: url(<?php echo bloginfo('template_directory') ?>/assets/images/blog-bg.jpg)">
        <div class="relative container align-left">
          <div class="row">
            <div class="col-md-12">
              <h1 class="my-page-title my-text-shadow">BLOG</h1>
            </div>
          </div>
        </div>
      </div>

      <!-- COTENT CONTAINER -->
      <div class="container p-140-cont">

        <div class="row">

          <!-- CONTENT -->
          <div class="col-sm-8 blog-main-posts">

            <h2 class="section-title section-title-blog">FEATURED <span class="bold">POST</span></h2>

            <?php //comienza el loop

            $args = array(
              'posts_per_page' => 1,
              'post_type' => array('post'),
            );

            $query = new WP_Query($args);

            if ($query->have_posts()) :

              while ($query->have_posts()) :

                $query->the_post();

                // Si tengo post_thumbnail
                if (has_post_thumbnail()) {
                  $thum_url = get_the_post_thumbnail_url();

                  // Pero si no tengo que mostrar una imagen por defecto
                } else {
                  $thum_url = get_template_directory_uri() . '/assets/images/default.png';
                }

                // Store the post ID to exclude in the main loop
                $post_destacado_id = $post->ID;

            ?>

                <!-- Post DESTACADO -->
                <div class="wow fadeIn pb-70">
                  <div class="post-prev-img">
                    <a href="<?php echo the_permalink(); ?>"><img src="<?php echo $thum_url; ?>" alt="<?php echo the_title(); ?>"></a>
                  </div>

                  <div class="post-prev-title">
                    <h3><a href="<?php echo the_permalink(); ?>"><?php echo the_title(); ?></a></h3>
                  </div>

                  <div class="post-prev-info">
                    <?php echo the_time('F j, Y'); ?><span class="slash-divider">/</span><?php echo the_author_posts_link(); ?><?php echo the_category(); ?>
                  </div>


                  <div class="post-prev-text">
                    <?php echo the_excerpt(); ?>
                  </div>

                  <div class="post-prev-more-cont clearfix">
                    <div class="post-prev-more left">
                      <a href="<?php echo the_permalink(); ?>" class="blog-more">READ MORE</a>
                    </div>
                    <div class="right">
                      <span aria-hidden="true" class="icon_comment_alt"></span><span class="icon-count"><?php echo get_comments_number(); ?></span>

                      <a href="#" class="post-prev-count dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                        <span aria-hidden="true" class="social_share"></span>
                      </a>
                      <ul class="social-menu dropdown-menu dropdown-menu-right" role="menu">
                        <li><a href="#"><span aria-hidden="true" class="social_facebook"></span></a>
                        </li>
                        <li><a href="#"><span aria-hidden="true" class="social_twitter"></span></a></li>
                        <li><a href="#"><span aria-hidden="true" class="social_dribbble"></span></a></li>
                      </ul>
                    </div>
                  </div>
                </div>


            <?php

              endwhile;

            else :
              echo "No posts published yet...";

            endif;

            // reseteamos el loop
            wp_reset_query();


            ?>


            <h2 id="section-posts" class="section-title section-title-blog">LATEST <span class="bold">BLOG POSTS</span></h2>

            <?php


            $paged = get_query_var('paged') > 1 ? get_query_var('paged') : 1;

            //Comienza el loop
            $args = array(
              'posts_per_page' => 5,
              'paged' => $paged,
              'post_type' => array('post'),
              // exclude the featured post ID
              'post__not_in' => array($post_destacado_id),   // exclude the featured post ID
            );

            $query = new WP_Query($args);


            if ($query->have_posts()) :

              //variable creada para cerrar los row en caso de num post impar
              $previousWasEven = true;

              while ($query->have_posts()) :

                // si el anterior era par añado un nuevo row
                if ($previousWasEven) {

            ?>

                  <div class="row">

                  <?php

                }

                $query->the_post();

                // Si tengo post_thumbnail
                if (has_post_thumbnail()) {
                  $thum_url = get_the_post_thumbnail_url();

                  // Pero si no tengo que mostrar una imagen por defecto
                } else {
                  $thum_url = get_template_directory_uri() . '/assets/images/default.png';
                }

                  ?>

                  <!-- Post Item -->
                  <div class="col-md-6 wow fadeIn pb-70 post-item">
                    <div class="post-prev-img">
                      <a href="<?php echo the_permalink(); ?>"><img src="<?php echo $thum_url; ?>" alt="<?php echo the_title(); ?>"></a>
                    </div>

                    <div class="post-prev-title post-title">
                      <h3><a href="<?php echo the_permalink(); ?>"><?php echo the_title(); ?></a></h3>
                    </div>

                    <div class="post-prev-info">
                      <?php echo the_time('F j, Y'); ?><span class="slash-divider">/</span><a href="#"><?php echo the_author_posts_link(); ?></a><?php echo the_category(); ?>
                    </div>


                    <div class="post-prev-text">
                      <?php echo the_excerpt(); ?>
                    </div>

                    <div class="post-prev-more-cont clearfix">
                      <div class="post-prev-more left">
                        <a href="<?php echo the_permalink(); ?>" class="blog-more">READ MORE</a>
                      </div>
                      <div class="right">
                        <span aria-hidden="true" class="icon_comment_alt"></span><span class="icon-count"><?php echo get_comments_number(); ?></span>

                        <a href="#" class="post-prev-count dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                          <span aria-hidden="true" class="social_share"></span>
                        </a>
                        <ul class="social-menu dropdown-menu dropdown-menu-right" role="menu">
                          <li><a href="#"><span aria-hidden="true" class="social_facebook"></span></a>
                          </li>
                          <li><a href="#"><span aria-hidden="true" class="social_twitter"></span></a></li>
                          <li><a href="#"><span aria-hidden="true" class="social_dribbble"></span></a></li>
                        </ul>
                      </div>
                    </div>
                  </div>

                  <?php


                  if ($previousWasEven) {

                    $previousWasEven = false;
                  } else {

                    $previousWasEven = true;

                  ?>

                  </div>

                <?php


                  }


                ?>


              <?php

              endwhile;

              // si el ultimo era impar cierro el row
              if (!$previousWasEven) {

              ?>

          </div>

        <?php

              };

              $big = 999999999; // necesito este integer porque el la documentacion dice que sirve para evitar errores con la url

              $args = array(
                'base' => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
                'format' => '?paged=%#%',
                'current' => max(1, get_query_var('paged')),
                'type' => 'list',
                'prev_text' => '<i class="fa fa-angle-left"></i><span class="sr-only">Previous</span>',
                'next_text' => '<i class="fa fa-angle-right"></i><span class="sr-only">Next</span>',
              );

        ?>

        <!-- PAGINATION -->
        <div class="mt-0">
          <nav class="blog-pag">


            <?php

              the_posts_pagination($args);

            ?>

          </nav>
        </div>

      <?php

            else :
              echo "No posts published yet";

            endif;


            // RESETEAR SIEMPRE despues de haber hecho uso de la clase WP_Query
            wp_reset_query();



      ?>
      <!-- pagination 1 -->
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