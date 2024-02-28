<?php

/*************************************************
 * Template Name: Privacy Policy
 * 
 * **********************************************/

get_header('header.php');


the_post();

?>


<body>

    <!-- LOADER -->
    <div id="loader-overflow">
        <div id="loader3">Please enable JS</div>
    </div>

    <div id="wrap" class="boxed ">
        <div class="grey-bg"> <!-- Grey BG  -->


            <?php
            get_template_part('nav', 'black--no-transparent');
            ?>

            <!-- PAGE TITLE SMALL -->
            <div class="contact-bg page-title-cont page-title-large grey-dark-bg page-title-img  pt-300" style="">
                <div class="relative container align-left">
                    <div class="row">

                        <div class="col-md-12">
                            <h1 class="my-page-title my-text-shadow">PRIVACY POLICY</h1>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container pt-50 pb-100">
                <?php
                the_content();
                ?>
            </div>

            <?php



            get_footer('footer.php');
            ?>