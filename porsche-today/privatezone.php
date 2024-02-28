<?php

/*************************************************
 * Template Name: Private Zone
 * 
 * **********************************************/

get_header('header.php');

?>

<body>

    <!-- LOADER -->
    <div id="loader-overflow">
        <div id="loader3">Please enable JS</div>
    </div>

    <div id="wrap" class="boxed" style="background-image: url(<?php echo bloginfo('template_directory') ?>/assets/images/coffee-bg.jpg)">
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
                <div id="index-link" class="sm-img-bg-fullscr parallax-section" style="background-image: url(<?php echo bloginfo('template_directory') ?>/assets/images/porsche-silverhand.jpg)" data-stellar-background-ratio="0.5">
                    <div class="container hero-container sm-content-cont js-height-fullscr">
                        <div class="sm-cont-middle">

                            <!-- OPACITY container -->
                            <div class="opacity-scroll2">

                                <div class="login-container">
                                    <!-- NAV TABS -->
                                    <div class="tab-tab">
                                        <ul class="nav nav-tabs bootstrap-tabs mb-0">
                                            <li class="active">
                                                <a href="#login-link" data-toggle="tab">Login</a>
                                            </li>
                                        </ul>
                                    </div>

                                    <!-- TAB PANELS -->
                                    <div class="tab-content tab6-cont">

                                        <div class="tab-pane fade in active" id="login-link">

                                            <?php

                                            if (!is_user_logged_in()) {
                                                // user is not logged in, show the loggin form
                                                wp_login_form();
                                            } else {
                                                // user is logged in, show the admin area and logout buttons
                                                $user = wp_get_current_user();   // retrive an object user
                                                $user_name = $user->display_name;
                                                $rol = get_author_role($user->ID);

                                                echo '<h4>Hello<span> ' . $user_name . '</h4>';
                                                echo '<h6>' . $rol . '<h6>';

                                                do_shortcode('[hhh_show_message id="' . $user->ID . '"]');

                                                // Display admin-area button
                                                wp_register('', '');

                                                echo '<br/>';
                                                // Display logout button
                                                wp_loginout(get_permalink());
                                            }
                                            ?>

                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>

                </div>

            </div>

            <?php

            get_footer('footer.php');

            ?>