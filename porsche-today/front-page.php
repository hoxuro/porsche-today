<?php
get_header('header.php');

?>

<body>

  <!-- LOADER -->
  <div id="loader-overflow" style="display: none;">
    <div id="loader3">Please enable JS</div>
  </div>

  <div id="wrap" class="boxed ">
    <div class="grey-bg"> <!-- Grey BG  -->

      <div class="header-transporent-bg-black">

        <!-- HEADER -->
        <?php
        get_template_part('nav');
        ?>

        <!-- STATIC MEDIA IMAGE -->
        <div class="sm-img-bg-fullscr parallax-section relative" style="background-image: url(<?php echo bloginfo('template_directory'); ?>/assets/images/static-media/hero-2.jpg)" data-stellar-background-ratio="0.5">
          <!-- IMG OVERLAY for mobile -->
          <div class="slider-text-bg"></div>

          <div class="container hero-container sm-content-cont-fullscr js-height-fullscr ">
            <div class="sm-cont-middle">

              <!-- OPACITY container -->
              <div class="opacity-scroll2 relative">

                <!-- LAYER NR. 1 -->
                <h1 class="cd-headline zoom light-72-wide font-white sm-mt-0  sm-mb-20">
                  <span>WE ARE</span> <br>
                  <span class="cd-words-wrapper waiting">
                    <b class="is-visible">INNOVATION</b>
                    <b>PERFORMANCE</b>
                    <b>PORSCHE</b>
                  </span>
                </h1>

                <!-- LAYER NR. 2 -->
                <div class="hero-text font-white norm-16-wide hide-0-736 sm-mb-60 sm-mt-40">
                  Get Porsche news, press releases and expert reviews along with detailed photos, spy shots and road tests. Updated daily, we scour the internet for all the latest Porsche news.
                </div>

                <!-- LAYER NR. 3 -->
                <div class="center-0-478">
                  <a class="button medium thin hover-dark tp-button white smooth-scroll" href="#section-blog">SEE MORE</a>
                </div>

              </div>

            </div>
          </div>
          <!-- SCROLL ICON -->
          <div class="local-scroll-cont font-white">
            <a href="#section-about" class="scroll-down smooth-scroll">
              <div class="icon icon-arrows-down"></div>
            </a>
          </div>
        </div>

      </div>


      <!-- FEATURES 2 -->
      <div class="page-section" id="section-about">
        <div class="container-fluid">


          <div class="row">

            <div class="col-md-6 wow fadeInLeft equal-height ">
              <div class="fes2-main-text-cont padding-x-reset">
                <div class="title-fs-45">
                  RAW<br>
                  <span class="bold">POWER</span>
                </div>
                <div class="line-3-70"></div>
                <div class="fes2-text-cont normal-text">Porsche's greatness is not limited to its vehicles; It is a culture, a lifestyle. It represents the tireless pursuit of excellence, the desire to go beyond established limits.</div>
              </div>
            </div>

            <div class="col-md-6">
              <div class="row">
                <div class="fes2-img equal-height about-img about-img-2"></div>
              </div>
            </div>

          </div>
        </div>
      </div>

      <!-- FEATURES 3 -->
      <div class="page-section">
        <div class="container-fluid">
          <div class="row">

            <div class="col-md-6 left-50 wow fadeInRight equal-height">
              <div class="fes2-main-text-cont padding-x-reset">
                <div class="title-fs-45">
                  BLISTERING<br>
                  <span class="bold">SPEED</span>
                </div>
                <div class="line-3-100"></div>
                <div class="fes2-text-cont normal-text">Porsche is a sensory experience. Every curve, every detail, has been perfected to give you a visceral connection to the road, elevating driving to an art.</div>
              </div>
            </div>

            <div class="col-md-6 right-50">
              <div class="row">
                <div class="fes3-img equal-height about-img about-img-1"></div>
              </div>
            </div>

          </div>
        </div>
      </div>

      <!-- ADS 1 -->
      <div id="services-link" class="page-section pt-50">
        <div class="container">

          <div class="row">

            <div class="col-md-6 left-50 padding-reset">
              <div class="fes2-main-text-cont about-text-box">
                <div class="title-fs-45">
                  COMFORT AND<br>
                  <span class="bold">LUXURY</span>
                </div>
                <div class="line-3-100"></div>
                <div class="fes2-text-cont normal-text">Welcome to the world of Porsche, where excellence meets everyday life. In a world where time is of the essence and elegance is essential, our everyday models reign supreme.</div>
                <div class="mt-30">
                  <a class="button medium thin gray hover-dark" href="#">ROAD CARS</a>
                </div>
              </div>
            </div>

            <div class="col-md-6 right-50 wow fadeInLeft">

              <div class="ads-img-cont padding-reset">
                <img class="img-width" src="<?php echo bloginfo('template_directory') ?>/assets/images/about-1.png" alt="img">
              </div>

            </div>

          </div>
        </div>
      </div>

      <!-- ADS 2 -->
      <div class="page-section">
        <div class="container">
          <div class="row">

            <div class="col-md-6 padding-reset">
              <div class="fes2-main-text-cont about-text-box">
                <div class="title-fs-45">
                  CUTTING-EDGE<br>
                  <span class="bold">TECHNOLOGY</span>
                </div>
                <div class="line-3-100"></div>
                <div class="fes2-text-cont normal-text">Porsche cars are equipped with the latest technological innovations to ensure optimal performance and an advanced driving experience.</div>
                <div class="mt-30">
                  <a class="button medium thin gray hover-dark" href="#">RACE CARS</a>
                </div>
              </div>
            </div>



            <div class="col-md-6 wow fadeInRight">

              <div class="ads-img-cont padding-reset">
                <img class="img-width" src="<?php echo bloginfo('template_directory') ?>/assets/images/about-2.png" alt="img">
              </div>

            </div>

          </div>
        </div>
      </div>

      <!-- ADS 3 -->
      <div class="page-section pb-50">
        <div class="container">
          <div class="row">

            <div class="col-md-6 left-50 padding-reset">
              <div class="fes2-main-text-cont about-text-box">
                <div class="title-fs-45">
                  TIMELESS<br>
                  <span class="bold">DESIGN</span>
                </div>
                <div class="line-3-100"></div>
                <div class="fes2-text-cont normal-text">Every Porsche is a design masterpiece, with elegant, aerodynamic lines that reflect the brand's rich heritage. Meticulous attention to detail and impeccable craftsmanship make each Porsche a gem on the road.</div>
                <div class="mt-30">
                  <a class="button medium thin gray hover-dark" href="#">HISTORIC MODELS</a>
                </div>
              </div>
            </div>

            <div class="col-md-6 right-50 wow fadeInLeft">

              <div class="ads-img-cont padding-reset">
                <img class="img-width" src="<?php echo bloginfo('template_directory') ?>/assets/images/about-3.png" alt="img">
              </div>

            </div>

          </div>
        </div>
      </div>

      <!-- VIDEO ADS 1 -->
      <div class="page-section video-ads-bg mb-100 video-bg">
        <div class="container">
          <div class="video-ads-text-cont clearfix">
            <span class="video-ads-text">CRAFTING MAJESTY</span>
            <span class="video-ads-a">
              <a class="popup-youtube" href="https://www.youtube.com/watch?v=478Ay_lNpT4">
                <span class="icon icon-music-play-button"></span>
              </a>
            </span>
            <span class="video-ads-text">ON EVERY MILE</span>
          </div>
        </div>
      </div>


      <!-- BLOG 1 -->
      <div class="page-section pt-110-b-30-cont" id="section-blog">
        <div class="container">

          <div class="mb-50">
            <h2 class="section-title pr-0">LATEST <span class="bold">BLOG POSTS</span><a href="<?php echo get_page_link(get_page_by_title("BLOG")->ID); ?>" class="button medium gray our-blog section-more right">OUR BLOG</a>
            </h2>
          </div>

          <div class="row">


            <?php

            //Comienza el loop
            $args = array(
              'posts_per_page' => 3,
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

                // Ahora debemos establecer los datos correspondientes en cada post usando las funciones the_*
            ?>

                <!-- Post Item 1 -->
                <div class="col-sm-6 col-md-4 col-lg-4 wow fadeIn pb-70 post-item">

                  <div class="post-prev-img">
                    <a href="<?php echo the_permalink(); ?>"><img src="<?php echo $thum_url; ?>" alt="Blog-post thumnail"></a>
                  </div>

                  <div class="post-prev-title post-title">
                    <h3><a href="<?php echo the_permalink(); ?>"><?php echo the_title(); ?></a></h3>
                  </div>

                  <div class="post-prev-info">
                    <?php echo the_time('F j, Y'); ?><span class="slash-divider">/</span><?php echo the_author_posts_link(); ?><?php echo the_category(); ?><!--<div class="tags-container"><?php echo the_tags(); ?></div> -->
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
              // Terminar el loop despues de haber rellenado los datos de ese post
              endwhile;

            // si ho hay post publicados
            else :
              echo '<h2 class="noPosts">No posts published yet...<h2/>';

            endif;

            // RESETEAR SIEMPRE despues de haber hecho uso de la clase WP_Query
            wp_reset_query();
            ?>


          </div>

        </div>
      </div>

      <!-- WORK PROCESS 1 -->
      <div class="page-section work-proc-1-bg work-bg" id="section-work">

        <div class="container fes4-cont">
          <div class="row">

            <div class="col-md-4 ">
              <div class="mb-50">
                <h2 class="section-title">WORK <span class="bold">PROCESS</span></h2>
              </div>
              <p class="mb-50 ">The construction process of a Porsche car involves several stages, each carefully executed to ensure the highest level of quality and precision.</p>
            </div>
            <div class="col-md-7 col-lg-offset-1">
              <div class="row">

                <div class="col-xs-12 col-sm-6 col-md-6">
                  <div class="fes4-box">
                    <div class="fes4-title-cont">
                      <div class="fes4-box-icon">
                        <div class="icon icon-basic-lightbulb"></div>
                      </div>
                      <h3><span class="bold">DESIGN AND ENGINEERING</span></h3>
                      <p>PORSCHE'S TEAM OF EXPERTS DEVELOPS THE CONCEPT FOR THE NEW MODEL AND DESIGNS EVERY ASPECT OF THE CAR</p>
                    </div>

                  </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6">
                  <div class="fes4-box">
                    <div class="fes4-title-cont">
                      <div class="fes4-box-icon">
                        <div class="icon icon-basic-gear"></div>
                      </div>
                      <h3><span class="bold">ASSEMBLY LINE</span></h3>
                      <p>THE COMPONENTS ARE THEN BROUGHT TOGETHER ON THE ASSEMBLY LINE, WHERE SKILLED TECHNICIANS METICULOUSLY ASSEMBLE THE CAR PIECE BY PIECE</p>
                    </div>
                  </div>
                </div>

              </div>

              <div class="row">

                <div class="col-xs-12 col-sm-6 col-md-6">
                  <div class="fes4-box">
                    <div class="fes4-title-cont">
                      <div class="fes4-box-icon">
                        <div class="icon icon-basic-laptop"></div>
                      </div>
                      <h3><span class="bold">ASSEMBLY LINE</span></h3>
                      <p>THE COMPONENTS ARE THEN BROUGHT TOGETHER ON THE ASSEMBLY LINE, WHERE SKILLED TECHNICIANS METICULOUSLY ASSEMBLE THE CAR PIECE BY PIECE</p>
                    </div>

                  </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6">
                  <div class="fes4-box">
                    <div class="fes4-title-cont">
                      <div class="fes4-box-icon">
                        <div class="icon icon-basic-paperplane"></div>
                      </div>
                      <h3><span class="bold">DELIVERY</span></h3>
                      <p>PORSCHE TAKES GREAT CARE TO ENSURE THAT EACH CAR ARRIVES IN PRISTINE CONDITION, READY TO DELIVER AN UNPARALLELED DRIVING EXPERIENCE</p>
                    </div>
                  </div>
                </div>

              </div>

            </div>
          </div>
        </div>
      </div>

      <!-- SECTION TESTIMONIALS -->
      <div class="container mt-100">
        <div class="mb-50">
          <h2 class="section-title pr-0">CUSTOMER <span class="bold">TESTIMONIALS</span></h2>
        </div>
      </div>

      <!-- TESTIMONIALS 2 FULL WIDTH SLIDER -->
      <div class="page-section p-60-cont owl-white-bg  fullwidth-slider remove-pt">


        <div class="owl-white-bg fullwidth-slider p-50-cont">

          <!-- Slide Item -->
          <div class="container relative">
            <div class="row">

              <div class="col-md-7">
                <blockquote class="testimonial-2">
                  <p>Owning a Porsche has been a dream come true for me, and the experience has exceeded all expectations. From the moment I walked into the dealership, the customer service was exceptional.</p>
                </blockquote>
              </div>

              <div class="col-md-4 col-md-offset-1">
                <div class="ts-author-cont">
                  <div class="ts-author-info">
                    <div class="ts-name">
                      <span class="bold">Amanda Jones</span>
                    </div>
                    <div class="ts-type">CROCS CEO</div>
                  </div>
                  <div class="ts-author-img">
                    <img src="<?php echo bloginfo('template_directory') ?>/assets/images/ts-author-2.png" alt="photo">
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Slide Item -->
          <div class="container relative">
            <div class="row">

              <div class="col-md-7">
                <blockquote class="testimonial-2">
                  <p>. From the impeccable craftsmanship to the attention to detail in every aspect of the car, it's evident that Porsche prioritizes quality above all else. </p>
                </blockquote>
              </div>

              <div class="col-md-4 col-md-offset-1">
                <div class="ts-author-cont">
                  <div class="ts-author-info">
                    <div class="ts-name">
                      <span class="bold">Jessica Holmes</span>
                    </div>
                    <div class="ts-type">BlackRock Investor</div>
                  </div>
                  <div class="ts-author-img">
                    <img src="<?php echo bloginfo('template_directory') ?>/assets/images/ts-author.png" alt="photo">
                  </div>
                </div>
              </div>

            </div>
          </div>

          <!-- Slide Item -->
          <div class="container relative">

            <div class="row">

              <div class="col-md-7">
                <blockquote class="testimonial-2">
                  <p>The driving experience is nothing short of exhilarating, with responsive handling and powerful performance that never fails to impress. </p>
                </blockquote>
              </div>

              <div class="col-md-4 col-md-offset-1">
                <div class="ts-author-cont">
                  <div class="ts-author-info">
                    <div class="ts-name">
                      <span class="bold">Carlos Adams</span>
                    </div>
                    <div class="ts-type">Racks Co-founder</div>
                  </div>
                  <div class="ts-author-img">
                    <img src="<?php echo bloginfo('template_directory') ?>/assets/images/ts-author-3.png" alt="photo">
                  </div>
                </div>
              </div>

            </div>
          </div>

        </div>
      </div>


      <!-- BUY SECTION -->
      <div class="container mt-100">
        <div class="row">

          <div class="col-md-6 padding-reset">
            <div class="fes2-main-text-cont about-text-box">
              <div class="title-fs-45">
                ARE YOU READY<br>TO HAVE A<br><span class="bold">PORSCHE?</span>
              </div>
              <div class="line-3-100"></div>
              <div class="mt-30">
                <a class="button large thin gray hover-dark" href="https://www.porsche.com/germany/">PORSCHE STORE</a>
              </div>
            </div>
          </div>

          <div class="col-md-6 wow fadeInRight">

            <div class="ads-img-cont padding-reset">
              <img class="img-width align-bottom" src="<?php echo bloginfo('template_directory') ?>/assets/images/buy-remove.png" alt="img">
            </div>

          </div>
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