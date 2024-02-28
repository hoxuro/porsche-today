<?php

get_header('header.php');

// Get the author object
$curauth = (get_query_var('author_name')) ? get_user_by('slug', get_query_var('author_name')) : get_userdata(get_query_var('author'));

$author_id = $curauth->ID;
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


            <div class="header-transporent-bg-black">

                <?php

                get_template_part('nav', 'author');

                ?>

                <!-- STATIC MEDIA IMAGE -->
                <div id="index-link" class="sm-img-bg-fullscr parallax-section" style="background-image: url(<?php echo bloginfo('template_directory') ?>/assets/images/authors-header.jpg)" data-stellar-background-ratio="0.5">
                    <div class="container hero-container sm-content-cont js-height-fullscr">
                        <div class="sm-cont-middle">

                            <!-- OPACITY container -->
                            <div class="opacity-scroll2">

                                <!-- LAYER NR. 1 -->
                                <div class="font-white light-50-wide sm-mb-15 sm-mt-20 author-text">
                                    <p><?php echo $curauth->nickname; ?></p>
                                    <p><span class="bold"><?php echo $curauth->first_name; ?></span></p>
                                    <p><span class="bold"><?php echo $curauth->last_name; ?></span></p>
                                    <p> <?php
                                        $author_role = get_author_role($curauth->ID) . '';
                                        echo ucwords($author_role);
                                        ?></p>
                                </div>

                                <ul class="my-social-menu" role="menu">
                                    <li>
                                        <a target="_blank" href="<?php echo get_the_author_meta('facebook', $author_id) ?>"><span aria-hidden="true" class="social_facebook my-icon-big"></span></a>
                                    </li>
                                    <li>
                                        <a target="_blank" href="<?php echo get_the_author_meta('twitter', $author_id) ?>"><span aria-hidden="true" class="social_twitter my-icon-big"></span></a>
                                    </li>
                                    <li>
                                        <a target="_blank" href="<?php echo get_the_author_meta('linkedin', $author_id) ?>"><span aria-hidden="true" class="social_linkedin my-icon-big"></span></a>
                                    </li>
                                    <li>
                                        <a target="_blank" href="<?php echo get_the_author_meta('instagram', $author_id) ?>"><span aria-hidden="true" class="social_instagram my-icon-big"></span></a>
                                    </li>
                                </ul>

                            </div>

                        </div>
                    </div>
                    <!-- SCROLL ICON -->
                    <div class="local-scroll-cont font-white">
                        <a href="#about" class="scroll-down smooth-scroll">
                            <div class="icon icon-arrows-down"></div>
                        </a>
                    </div>
                </div>

            </div>

            <div class="container pt-100 pb-100">
                <div class="row">
                    <div class="col-md-12">
                        <div class="title-fs-45 pb-30 text-center">
                            SHARING A FEW <span class="bold">THOUGHTS</span> ABOUT ME
                        </div>

                        <blockquote class="custom-blockquote mb-40">
                            <p><?php echo $curauth->description; ?></p>
                        </blockquote>
                    </div>
                </div>
            </div>


            <!-- FEATURES 3 -->
            <div class="page-section">
                <div class="container-fluid">
                    <div class="row">

                        <div class="col-md-6 left-50 wow fadeInRight equal-height">
                            <div class="author-flex-col wow fadeInRight p-0 order-1">
                                <div class="container-autor">
                                    <div class="title-fs-45">
                                        MY <span class="bold">DRIVING SKILLS</span>
                                    </div>
                                    <div class="line-3-70"></div>
                                </div>
                                <div class="container-text container-text-2">
                                    <div class="mt-55 mb-30">
                                        <div class="skillbar clearfix " data-percent="<?php echo get_the_author_meta('skill1V', $author_id) ?>%">
                                            <div class="skillbar-title"><span><?php echo get_the_author_meta('skill1', $author_id) ?></span></div>
                                            <div class="skillbar-bar"></div>
                                            <div class="skill-bar-percent"><?php echo get_the_author_meta('skill1V', $author_id) ?>%</div>
                                        </div> <!-- End Skill Bar -->

                                        <div class="skillbar clearfix " data-percent="<?php echo get_the_author_meta('skill2V', $author_id) ?>%">
                                            <div class="skillbar-title"><span><?php echo get_the_author_meta('skill2', $author_id) ?></span></div>
                                            <div class="skillbar-bar"></div>
                                            <div class="skill-bar-percent"><?php echo get_the_author_meta('skill2V', $author_id) ?>%</div>
                                        </div> <!-- End Skill Bar -->

                                        <div class="skillbar clearfix " data-percent="<?php echo get_the_author_meta('skill3V', $author_id) ?>%">
                                            <div class="skillbar-title"><span><?php echo get_the_author_meta('skill3', $author_id) ?></span></div>
                                            <div class="skillbar-bar"></div>
                                            <div class="skill-bar-percent"><?php echo get_the_author_meta('skill3V', $author_id) ?>%</div>
                                        </div> <!-- End Skill Bar -->

                                        <div class="skillbar clearfix " data-percent="<?php echo get_the_author_meta('skill4V', $author_id) ?>%">
                                            <div class="skillbar-title"><span><?php echo get_the_author_meta('skill4', $author_id) ?></span></div>
                                            <div class="skillbar-bar"></div>
                                            <div class="skill-bar-percent"><?php echo get_the_author_meta('skill4V', $author_id) ?>%</div>
                                        </div> <!-- End Skill Bar -->
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 right-50 mt-768">
                            <div class="row">
                                <div class="imagen" style="background-image: url(<?php echo get_the_author_meta('user_pic', $author_id)  ?>); background-size: contain; aspect-ratio: 16/9;"></div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <!-- BLOG 1 -->
            <div class="page-section pt-110-b-30-cont">
                <div class="container">

                    <div class="mb-50">
                        <h2 class="section-title pr-0">MY LATEST <span class="bold">POSTS</span>
                        </h2>
                    </div>

                    <div class="row">


                        <?php

                        //Comienza el loop
                        $args = array(
                            'posts_per_page' => 3,
                            'author' => $author_id,
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

            <div class="img-circuit" style="background-image: url(<?php echo bloginfo('template_directory') ?>/assets/images/authors-bg.jpg)">
                <div class="video-ads-text-cont clearfix video-container my-text-shadow">
                    <span class="video-ads-text">MY FAVOURITE</span>
                    <span class="video-ads-a">
                        <a class="popup-youtube" href="<?php echo get_the_author_meta('fav_car', $author_id) ?>">
                            <span class="icon icon-music-play-button"></span>
                        </a>
                    </span>
                    <span class="video-ads-text">CAR</span>
                </div>
            </div>

            <?php

            get_footer('footer.php');

            ?>