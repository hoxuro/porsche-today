<?php

/*************************************************
 * Template Name: Archives
 * 
 * **********************************************/

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
            <div class="blog-bg page-title-cont page-title-large grey-dark-bg page-title-img  pt-250" style="background-image: url(<?php echo bloginfo('template_directory') ?>/assets/images/archives-bg.jpg)">
                <div class="relative container align-left">
                    <div class="row">

                        <div class="col-md-12">
                            <h1 class="my-page-title my-text-shadow">ARCHIVES</h1>
                        </div>

                    </div>
                </div>
            </div>



            <!-- COTENT CONTAINER -->
            <div class="container p-140-cont">
                <div class="row masonry">

                    <?php

                    $args = array(
                        'type' => 'post_by_link',  // retrieves posts title
                        'limit' => 20, // only the last 20 posts published
                    );

                    wp_get_archives($args);

                    ?>


                    <!-- Post Item -->
                    <div class="col-sm-6 col-md-4 col-lg-4 mb-20 archives-normal">

                        <div class="post-prev-title mb-10" style="border: 1px solid #7e8082; padding: 0.5rem;">
                            <h3>LAST ENTRIES</h3>
                        </div>

                        <div class="post-prev-text mb-0">

                            <?php
                            $args = array(
                                'type' => 'postbypost', // selecciona los archivos tipo post
                            );
                            wp_get_archives($args);
                            ?>
                        </div>


                    </div>

                    <!-- Post Item big -->
                    <div class="col-sm-6 col-md-4 col-lg-4 mb-20 archives-big">

                        <div class="post-prev-title mb-10" style="border: 1px solid #7e8082; padding: 0.5rem;">
                            <h3>REVIEWS</h3>
                        </div>

                        <div class="post-prev-text mb-0">

                            <?php
                            $args = array(
                                'type' => 'postbypost', // selecciona los archivos tipo post
                                'post_type' => 'reviews',
                            );
                            wp_get_archives($args);
                            ?>

                        </div>

                    </div>

                    <!-- Post Item -->
                    <div class="col-sm-6 col-md-4 col-lg-4 mb-20 archives-normal">

                        <div class="post-prev-title mb-10" style="border: 1px solid #7e8082; padding: 0.5rem;">
                            <h3>DAILY POSTS</h3>
                        </div>

                        <div class="post-prev-text mb-0">

                            <?php
                            $args = array(
                                'type' => 'daily',     // dated with published posts 
                                'show_post_count' => true,    // Show number of posts published
                                'limit' => 20,    // 20 dates tops
                                'echo' => false,
                            );
                            $daily = wp_get_archives($args);
                            $daily = preg_replace('/<\/a> \(([0-9]+)\)/', '</a><small><span class="slash-divider">/</span><span class="">\\1</span></small>', $daily);
                            echo $daily;

                            ?>
                        </div>

                    </div>

                    <!-- Post Item big -->
                    <div class="col-sm-6 col-md-4 col-lg-4 mb-20 archives-normal">

                        <div class="post-prev-title mb-10" style="border: 1px solid #7e8082; padding: 0.5rem;">
                            <h3>MONTHLY POSTS</h3>
                        </div>

                        <div class="post-prev-text mb-0">
                            <?php
                            $args = array(
                                'type' => 'monthly',     // dated with published posts 
                                'show_post_count' => true,    // Show number of posts published
                                'limit' => 20,    // 20 dates tops
                                'echo' => false,
                            );
                            $monthly = wp_get_archives($args);
                            $monthly = preg_replace('/<\/a> \(([0-9]+)\)/', '</a><small><span class="slash-divider">/</span><span class="">\\1</span></small>', $monthly);
                            echo $monthly;

                            ?>

                        </div>

                    </div>

                    <!-- Post Item -->
                    <div class="col-sm-6 col-md-4 col-lg-4 mb-20 archives-normal">

                        <div class="post-prev-title mb-10" style="border: 1px solid #7e8082; padding: 0.5rem;">
                            <h3>YEARLY POSTS</h3>
                        </div>

                        <div class="post-prev-text mb-0">
                            <?php
                            $args = array(
                                'type' => 'yearly',     // dated with published posts 
                                'show_post_count' => true,    // Show number of posts published
                                'limit' => 20,    // 20 dates tops
                                'echo' => false,
                            );
                            $yearly = wp_get_archives($args);
                            $yearly = preg_replace('/<\/a> \(([0-9]+)\)/', '</a><small><span class="slash-divider">/</span><span class="">\\1</span></small>', $yearly);
                            echo $yearly;

                            ?> </div>

                    </div>

                    <!-- Post Item -->
                    <div class="col-sm-6 col-md-4 col-lg-4 mb-20 archives-big">

                        <div class="post-prev-title mb-10" style="border: 1px solid #7e8082; padding: 0.5rem;">
                            <h3>CATEGORIES</h3>
                        </div>

                        <div class="post-prev-text mb-0">
                            <?php
                            $args = array(
                                'show_count' => 1,
                                'title_li' => '',
                            );
                            wp_list_categories($args);
                            ?>

                        </div>

                    </div>

                    <!--- END CARD  --->

                    <!-- Post Item -->
                    <div class="col-sm-6 col-md-4 col-lg-4 mb-20 archives-normal">

                        <div class="post-prev-title mb-10" style="border: 1px solid #7e8082; padding: 0.5rem;">
                            <h3>AUTHORS</h3>
                        </div>

                        <div class="post-prev-text mb-0">
                            <?php
                            $args = array(

                                'orderby' => 'post_count',
                                'order' => 'DESC',
                                'number' => null,
                                'optioncount' => true,
                                'hide_empty' => false,
                                'echo' => false,

                            );
                            $authors = wp_list_authors($args);
                            $authors = preg_replace('/<\/a> \(([0-9]+)\)/', ' <span class="heavyblue pull-right">\\1</span></a>', $authors);
                            echo $authors;
                            ?>

                        </div>

                    </div>

                    <!--- END CARD  --->

                    <?php

                    // Authors loop
                    // We need name and ID of each author

                    $args = array(
                        'display_name',
                        'ID'
                    );

                    $authors = get_users($args);  // Retrieve an author objects collection with display_name and ID properties
                    foreach ($authors as $author) {




                    ?>
                        <!--- BEGIN CARD  --->
                        <!-- Post Item big -->
                        <div class="col-sm-6 col-md-4 col-lg-4 mb-20 archives-big">

                            <div class="post-prev-title mb-10" style="border: 1px solid #7e8082; padding: 0.5rem;">
                                <h3><?php echo $author->display_name  ?></h3>
                            </div>

                            <div class="post-prev-text mb-0">
                                <?php

                                $args = array(

                                    'posts_per_page' => 20,
                                    'author' => $author->ID,
                                );

                                $posts_by_author = get_posts($args);

                                if (empty($posts_by_author)) {
                                    echo '<h4>No posts yet...</h4>';
                                } else {
                                    foreach ($posts_by_author as $post) {
                                        echo '<li> <a href="' . get_permalink($post->ID) . '" >' . $post->post_title . ' <span class="icon-count">' . $post->numvisits . '</span>  </a> </li>';
                                    }
                                }


                                ?>
                            </div>


                        </div>


                        <!--- END CARD  --->
                    <?php
                    }


                    ?>


                    <!-- Post Item -->
                    <div class="col-sm-6 col-md-4 col-lg-4 mb-20 archives-normal">

                        <div class="post-prev-title mb-10" style="border: 1px solid #7e8082; padding: 0.5rem;">
                            <h3>MOST POPULAR POSTS</h3>
                        </div>

                        <div class="post-prev-text mb-0">
                            <?php

                            $args = array(

                                'posts_per_page' => 20,
                                'meta_key' => 'numvisits',   // filter by numvisits metadata
                                'orderby' => 'meta_value_num', // Order by numvisits numeric value
                                'order' => 'DESC',
                            );

                            $popular = get_posts($args);

                            if (empty($popular)) {
                                echo '<h4>No posts visited...</h4>';
                            } else {
                                foreach ($popular as $post) {
                                    echo '<li> <a href="' . get_permalink($post->ID) . '" >' . $post->post_title . ' <span class="icon-count">' . $post->numvisits . '</span>  </a> </li>';
                                }
                            }

                            ?>
                        </div>

                    </div>

                    <!-- Post Item -->
                    <div class="col-sm-6 col-md-4 col-lg-4 mb-20 archives-normal">

                        <div class="post-prev-title mb-10" style="border: 1px solid #7e8082; padding: 0.5rem;">
                            <h3>TAGS LIST</h3>
                        </div>

                        <div class="post-prev-text mb-0">
                            <?php

                            echo get_tag_list(20);

                            ?>

                        </div>

                    </div>

                    <!-- Post Item -->
                    <div class="col-sm-6 col-md-4 col-lg-4 mb-20 archives-big">

                        <div class="post-prev-title mb-10" style="border: 1px solid #7e8082; padding: 0.5rem;">
                            <h3>MOST COMMENTED POSTS</h3>
                        </div>

                        <?php


                        ?>
                        <div class="post-prev-text mb-0">

                            <?php

                            $args = array(
                                'orderby' => 'comment_count',
                                'post_per_page' => null,

                            );

                            $most = new WP_Query($args);
                            while ($most->have_posts()) :
                                $most->the_post();
                                $num_comments = get_comments_number($post->ID);
                                echo '<li><a href="' . get_the_permalink($post->ID) . '">' . $post->post_title . ' ' . $num_comments . '</a></li>';
                            endwhile;
                            wp_reset_query();

                            ?>

                        </div>

                    </div>

                    <!-- Post Item -->
                    <div class="col-sm-6 col-md-4 col-lg-4 mb-20 archives-normal">

                        <div class="post-prev-title mb-10" style="border: 1px solid #7e8082; padding: 0.5rem;">
                            <h3>MOST COMMENTED REVIEWS</h3>
                        </div>

                        <?php


                        ?>
                        <div class="post-prev-text mb-0">

                            <?php

                            $args = array(
                                'orderby' => 'comment_count',
                                'post_per_page' => null,
                                'post_type' => 'reviews',
                            );

                            $most = new WP_Query($args);
                            while ($most->have_posts()) :
                                $most->the_post();
                                $num_comments = get_comments_number($post->ID);
                                echo '<li><a href="' . get_the_permalink($post->ID) . '">' . $post->post_title . ' ' . $num_comments . '</a></li>';
                            endwhile;
                            wp_reset_query();

                            ?>

                        </div>

                    </div>

                    <!-- Post Item -->
                    <div class="col-sm-6 col-md-4 col-lg-4 mb-20 archives-big">

                        <div class="post-prev-title mb-10" style="border: 1px solid #7e8082; padding: 0.5rem;">
                            <h3>MOST POPULAR REVIEWS</h3>
                        </div>

                        <div class="post-prev-text mb-0">
                            <?php

                            $args = array(

                                'posts_per_page' => 20,
                                'post_type' => 'reviews',
                                'meta_key' => 'numvisits',   // filter by numvisits metadata
                                'orderby' => 'meta_value_num', // Order by numvisits numeric value
                                'order' => 'DESC',
                            );

                            $popular = get_posts($args);

                            if (empty($popular)) {
                                echo '<h4>No posts visited...</h4>';
                            } else {
                                foreach ($popular as $post) {
                                    echo '<li> <a href="' . get_permalink($post->ID) . '" >' . $post->post_title . ' <span class="icon-count">' . $post->numvisits . '</span>  </a> </li>';
                                }
                            }

                            ?>
                        </div>

                    </div>

                </div>

            </div>

            <!-- NEWS LETTER -->
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