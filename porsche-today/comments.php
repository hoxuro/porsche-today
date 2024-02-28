<!-- DIVIDER -->
<hr class="mt-30 mb-0">

<!-- LEAVE A COMMENT	-->

<!-- CONTACT FORM -->
<div class="grey-light-bg leave-comment-cont">
    <?php

    comment_form();

    ?>
</div>

<!-- DIVIDER -->
<hr class="mt-30 mb-0">



<?php

// Define the arguments of the function wp_list_comments
$args = array(
    'style' => 'li',
    'type' => 'comment',
    'callback' => 'custom_comments',
);

?>

<!-- COMMENTS -->
<div id="comments" class="mt-60">

    <h4 class="blog-page-title mb-15">Comments<small><span class="slash-divider">/</span> <?php echo get_comments_number() ?></small></h4>

    <ul class="media-list text comment-list">
        <?php
        // Invoke the function
        wp_list_comments($args);

        ?>

    </ul>

</div>