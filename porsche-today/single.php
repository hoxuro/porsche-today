<?php

get_header('header.php');

if (has_post_thumbnail()) {
    $thumb_url = get_the_post_thumbnail_url();
} else {
    $thumb_url = '';
}

the_post();
$post_id = $post->ID;

$comments = get_comments_number() == 0 ? 'No comments' : get_comments_number();

add_num_visits($post_id);
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

            <!-- COTENT CONTAINER -->
            <div class="container p-140-cont">
                <div class="row">

                    <!-- CONTENT -->
                    <div class="col-sm-8 blog-main-posts">

                        <!-- POST ITEM -->
                        <div class="blog-post wow fadeIn pb-50">


                            <div class="post-prev-more-cont clearfix pb-10">
                                <div class="post-prev-more left">
                                    <span aria-hidden="true" class="fa fa-comments-o my-post-icons"></span><span class="my-post-icons-text"><?php echo $comments; ?></span>
                                    <span class="slash-divider">/</span>
                                    <span aria-hidden="true" class="fa fa-eye my-post-icons"></span><span class="my-post-icons-text"><?php echo get_num_visits($post->ID); ?></span>
                                </div>
                                <div class="right">
                                    <a href="#" class="post-prev-count dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                        <span aria-hidden="true" class="icon-basic-share my-post-icons"></span>
                                    </a>
                                    <ul class="social-menu dropdown-menu dropdown-menu-right" role="menu">
                                        <li><a href="#"><span aria-hidden="true" class="social_instagram"></span></a></li>
                                        <li><a href="#"><span aria-hidden="true" class="social_facebook"></span></a></li>
                                        <li><a href="#"><span aria-hidden="true" class="social_twitter"></span></a></li>
                                        <li><a href="#"><span aria-hidden="true" class="social_dribbble"></span></a></li>
                                    </ul>
                                </div>
                            </div>

                            <?php
                            if ($thumb_url) {
                            ?>
                                <div class="post-prev-img">
                                    <img src="<?php echo $thumb_url; ?>" alt="the post image">
                                </div>
                            <?php
                            }
                            ?>

                            <div class="post-prev-title">
                                <h1 class="post-heading-1"><?php echo the_title();  ?></h1>
                            </div>

                            <div class="post-prev-info">
                                <?php echo the_time('F j, Y'); ?><span class="slash-divider">/</span><a href="#"><?php echo the_author_posts_link(); ?></a><?php echo the_category(); ?>

                            </div>

                            <div class="post-prev-text">
                                <?php echo the_content(); ?>
                            </div>

                            <div class="post-prev-more-cont clearfix">
                                <div class="post-prev-more left">
                                    <div class="tags-container">
                                        <div class="fa fa-tags my-post-icons-right"></div>
                                        <?php echo the_tags(); ?>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- DIVIDER -->
                        <hr class="mt-0 mb-0">

                        <!-- RELATED POSTS -->
                        <h4 class="blog-page-title mt-50 mb-25">RELATED POSTS</h4>

                        <div class="row related-posts">

                            <!-- post relacionados -->
                            <?php


                            $cats = get_the_category($post->ID);

                            $cats_arr = array();

                            // Obtener solo los IDs de las categorías
                            foreach ($cats as $category) {
                                $cats_arr[] = $category->term_id;
                            }


                            $args =  array(
                                'posts_per_page' => 3,
                                'category__in' => $cats_arr,
                                // solo los post que compartan categoria
                                // que no salga el post que estoy viendo arriba
                                'post__not_in' => array($post_id), //exclude the actual post
                            );

                            $related_posts = new WP_Query($args);

                            if ($related_posts->have_posts()) :
                                while ($related_posts->have_posts()) :
                                    $related_posts->the_post();

                                    // Si tengo post_thumbnail
                                    if (has_post_thumbnail()) {
                                        $related_thum = get_the_post_thumbnail_url();

                                        // Pero si no tengo que mostrar una imagen por defecto
                                    } else {
                                        $related_thum = get_template_directory_uri() . '/assets/images/default.png';
                                    }

                            ?>
                                    <!-- Post Item 1 -->
                                    <div class="col-sm-6 col-md-4 col-lg-4 wow fadeIn pb-70 related-item">

                                        <div class="post-prev-img">
                                            <a href="<?php echo the_permalink(); ?>"><img src="<?php echo $related_thum; ?>" alt="<?php echo the_title(); ?>"></a>
                                        </div>

                                        <div class="post-prev-title post-title">
                                            <h3><a href="<?php echo the_permalink(); ?>"><?php echo the_title(); ?></a></h3>
                                        </div>

                                        <div class="post-prev-info">
                                            <?php echo the_time('F j, Y'); ?><span class="slash-divider">/</span><?php echo the_author_posts_link(); ?><?php echo the_category(); ?><!--<div class="tags-container"><?php echo the_tags(); ?></div> -->
                                        </div>

                                    </div>


                                <?php
                                endwhile;

                            else :
                                ?>

                                <h3 class="blog-page-title pb-50">No posts related...</h3>

                            <?php

                            endif;

                            wp_reset_query();

                            ?>

                        </div>


                        <!-- AUTHOR -->
                        <div class="post-author-container clearfix mb-50">

                            <div class="post-author-avatar">

                                <?php

                                echo get_avatar($author_id); ?>
                            </div>

                            <div class="comment-content">

                                <div class="comment-author">
                                    <?php echo get_the_author_posts_link() ?>
                                </div>

                                <p><?php echo get_the_author_meta('description', $author_id);  ?> </p>

                            </div>
                        </div>

                        <!-- DIVIDER -->
                        <hr class="mt-0 mb-0">

                        <?php comments_template(); ?>

                    </div>

                    <?php

                    get_sidebar();


                    ?>

                </div>
            </div>

            <?php

            get_footer('footer.php');

            ?>