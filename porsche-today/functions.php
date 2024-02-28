<?php

/**
 * Add theme support
 */
add_theme_support('post-thumbnails'); // Allow us to add a featured image to our posts

/* Adding dashicons to my theme */
function enqueue_dashicons()
{
  wp_enqueue_style('dashicons');
}
add_action('wp_enqueue_scripts', 'enqueue_dashicons');



/**
 * Remove wp-include jquery to use my own
 **/
// function quitar_jquery_wp() {
//     if (!is_admin()) {
//         wp_deregister_script('jquery');
//         wp_register_script('jquery', false);
//     }
// }
// add_action('wp_enqueue_scripts', 'quitar_jquery_wp');

/**
 * Prevent jQuery from also loading when we enter the admin area.
 * 
 **/
function mi_inicio()
{
  if (!is_admin()) {
    wp_enqueue_script('jquery');
  }
}
add_action('init', 'mi_inicio');

/**
 * Remove wp-include imagesloaded to use my own
 **/
function desactivar_imagesloaded_wp()
{
  wp_deregister_script('imagesloaded');
}
add_action('wp_enqueue_scripts', 'desactivar_imagesloaded_wp');


/**
 * Add CSS, JS files to our theme
 * 
 * !! Be careful, the order affects the final result
 */
function principalTheme_scripts()
{
  // Add main css stylesheet
  wp_enqueue_style('style', get_stylesheet_uri());
  // Add secundary css stylesheet
  wp_enqueue_style('icons-fonts', get_template_directory_uri() . '/assets/css/icons-fonts.css');
  wp_enqueue_style('text-rotator', get_template_directory_uri() . '/assets/css/text-rotator.css');
  wp_enqueue_style('twentytwenty', get_template_directory_uri() . '/assets/css/twentytwenty.css');
  wp_enqueue_style('bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css');
  wp_enqueue_style('bootstrap-datetime', get_template_directory_uri() . '/assets/css/bootstrap-datetimepicker.min.css');
  wp_enqueue_style('animate', get_template_directory_uri() . '/assets/css/animate.min.css');
  wp_enqueue_style('flexslider', get_template_directory_uri() . '/assets/css/flexslider.css');
  wp_enqueue_style('styleTheme', get_template_directory_uri() . '/assets/css/style.css');
  wp_enqueue_style('myStyle', get_template_directory_uri() . '/assets/css/myStyle.css');
  // a lo mejor necesito grab.png

  // Add JS script files
  wp_register_script('jquery-1.11.2', get_template_directory_uri() . '/assets/js/jquery-1.11.2.min.js', array('jquery'), null, true);
  wp_enqueue_script('jquery-1.11.2');

  wp_register_script('jquery-twitter', get_template_directory_uri() . '/assets/js/twitter/jquery.tweet.js', array('jquery'), null, true);
  wp_enqueue_script('jquery-twitter');

  wp_register_script('moment', get_template_directory_uri() . '/assets/js/moment.js', null, null, true);
  wp_enqueue_script('moment');

  wp_register_script('bootstrap-datetime', get_template_directory_uri() . '/assets/js/bootstrap-datetimepicker.min.js', null, null, true);
  wp_enqueue_script('bootstrap-datetime');


  wp_register_script('bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js', null, null, true);
  wp_enqueue_script('bootstrap');

  wp_register_script('contact-form-validation-recaptcha', get_template_directory_uri() . '/assets/js/contact-form-validation-recaptcha.js', null, null, true);
  wp_enqueue_script('contact-form-validation-recaptcha');

  wp_register_script('contact-form-validation', get_template_directory_uri() . '/assets/js/contact-form-validation.js', null, null, true);
  wp_enqueue_script('contact-form-validation');

  wp_register_script('contact-form-validation-min', get_template_directory_uri() . '/assets/js/contact-form-validation.min.js', null, null, true);
  wp_enqueue_script('contact-form-validation-min');

  wp_register_script('cookiealert', get_template_directory_uri() . '/assets/js/cookiealert.js', null, null, true);
  wp_enqueue_script('cookiealert');

  wp_register_script('flex-slider', get_template_directory_uri() . '/assets/js/flex-slider.js', null, null, true);
  wp_enqueue_script('flex-slider');

  wp_register_script('fs-menu', get_template_directory_uri() . '/assets/js/fs-menu.js', null, null, true);
  wp_enqueue_script('fs-menu');

  wp_register_script('gmap3', get_template_directory_uri() . '/assets/js/gmap3.min.js', null, null, true);
  wp_enqueue_script('gmap3');

  wp_register_script('isotope', get_template_directory_uri() . '/assets/js/isotope.pkgd.min.js', null, null, true);
  wp_enqueue_script('isotope');

  wp_register_script('jflickrfeed', get_template_directory_uri() . '/assets/js/jflickrfeed.min.js', null, null, true);
  wp_enqueue_script('jflickrfeed');

  wp_register_script('jquery-appear', get_template_directory_uri() . '/assets/js/jquery.appear.js', array('jquery'), null, true);
  wp_enqueue_script('jquery-appear');

  wp_register_script('jquery-backgroundvideo', get_template_directory_uri() . '/assets/js/jquery.backgroundvideo.min.js', array('jquery'), null, true);
  wp_enqueue_script('jquery-backgroundvideo');

  wp_register_script('jquery-countdown', get_template_directory_uri() . '/assets/js/jquery.countdown.min.js', array('jquery'), null, true);
  wp_enqueue_script('jquery-countdown');

  wp_register_script('jquery-countTo', get_template_directory_uri() . '/assets/js/jquery.countTo.js', array('jquery'), null, true);
  wp_enqueue_script('jquery-countTo');

  wp_register_script('jquery-event-move', get_template_directory_uri() . '/assets/js/jquery.event.move.js', array('jquery'), null, true);
  wp_enqueue_script('jquery-event-move');

  wp_register_script('jquery-flexslider-min', get_template_directory_uri() . '/assets/js/jquery.flexslider-min.js', array('jquery'), null, true);
  wp_enqueue_script('jquery-flexslider-min');

  wp_register_script('jquery-magnific-popup', get_template_directory_uri() . '/assets/js/jquery.magnific-popup.min.js', array('jquery'), null, true);
  wp_enqueue_script('jquery-magnific-popup');

  wp_register_script('jquery-nav', get_template_directory_uri() . '/assets/js/jquery.nav.js', array('jquery'), null, true);
  wp_enqueue_script('jquery-nav');

  wp_register_script('jquery-stellar', get_template_directory_uri() . '/assets/js/jquery.stellar.min.js', array('jquery'), null, true);
  wp_enqueue_script('jquery-stellar');

  wp_register_script('jquery-twentytwenty', get_template_directory_uri() . '/assets/js/jquery.twentytwenty.js', array('jquery'), null, true);
  wp_enqueue_script('jquery-twentytwenty');

  wp_register_script('jquery-validate', get_template_directory_uri() . '/assets/js/jquery.validate.min.js', array('jquery'), null, true);
  wp_enqueue_script('jquery-validate');

  wp_register_script('masonry', get_template_directory_uri() . '/assets/js/masonry.pkgd.min.js', array('jquery'), null, true);
  wp_enqueue_script('masonry');

  wp_register_script('modernizr', get_template_directory_uri() . '/assets/js/modernizr.js', array('jquery'), null, true);
  wp_enqueue_script('modernizr');

  wp_register_script('owl-carousel', get_template_directory_uri() . '/assets/js/owl.carousel.min.js', array('jquery'), null, true);
  wp_enqueue_script('owl-carousel');

  wp_register_script('side-menu', get_template_directory_uri() . '/assets/js/side-menu.js', array('jquery'), null, true);
  wp_enqueue_script('side-menu');

  wp_register_script('text-rotator', get_template_directory_uri() . '/assets/js/text-rotator.js', array('jquery'), null, true);
  wp_enqueue_script('text-rotator');

  wp_register_script('imagesloaded', get_template_directory_uri() . '/assets/js/imagesloaded.pkgd.min.js', null, null, true);
  wp_enqueue_script('imagesloaded');

  wp_register_script('wow', get_template_directory_uri() . '/assets/js/wow.min.js', null, null, true);
  wp_enqueue_script('wow');

  wp_register_script('jquery-sticky', get_template_directory_uri() . '/assets/js/jquery.sticky.js', array('jquery'), null, true);
  wp_enqueue_script('jquery-sticky');

  wp_register_script('profile-pic-preview', get_template_directory_uri() . '/assets/js/preview.js', array('jquery'), null, true);
  wp_enqueue_script('profile-pic-preview');


  wp_register_script('myJs', get_template_directory_uri() . '/assets/js/myJs.js', array('jquery'), null, true);
  wp_enqueue_script('myJs');

  // ------------------------------------------------------------------------------------------- //
  wp_register_script('main', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), null, true);
  wp_enqueue_script('main');

  wp_enqueue_script('masonry');  // active masonry library

  wp_register_script('masonry-init',  get_template_directory_uri() . '/assets/js/main.js', array('jquery'), null, true);
  wp_enqueue_script('masonry-init');
}
add_action('wp_enqueue_scripts', 'principalTheme_scripts');


/**
 * Register widgets zone for tag-cloud & calendar in sidebar
 */
function register_widgets_zones()
{
  // widget para la nube de tags
  $tags_cloud_args = [
    'name'          => 'tags cloud - sidebar', // Nombre que se muestra en el sidebar.php
    'id'            => 'tag-cloud-sidebar', // ID del div del widget
    'description'   => 'Widgets zone for tag-cloud',
    'before_widget' => '<div class="widget">',
    'after_widget'  => '</div>',
    'before_title'  => '<h5 class="widget-title">',
    'after_title'   => '</h5>',
  ];
  register_sidebar($tags_cloud_args);

  // widget para la nube de tags
  $calendar_args = [
    'name'          => 'calendar - sidebar', // Nombre que se muestra en el sidebar.php
    'id'            => 'calendar-sidebar', // ID del div del widget
    'description'   => 'Widgets zone for calendar',
    'before_widget' => '<div class="widget">',
    'after_widget'  => '</div>',
    'before_title'  => '<h5 class="widget-title">',
    'after_title'   => '</h5>',
  ];
  register_sidebar($calendar_args);
}

add_action('widgets_init', 'register_widgets_zones'); // Añaadimos la función 'register_widgets_zone' al hook 'widgets_init' para que se ejecute cuando se cargue el hook



/**
 * Retrieve the number of visits of a post
 * @param int post_id
 * @return string number of visits
 **/
function get_num_visits($post_id)
{
  $numvisits = get_post_meta($post_id, 'numvisits', true);


  if (!$numvisits) $numvisits = 0;

  if ($numvisits == 1) {
    return $numvisits . ' visit';
  } else {
    return $numvisits . ' visits';
  }


  return $numvisits;
}

/**
 * Update the number of visits of a post
 * @param int post_id
 **/
function add_num_visits($post_id)
{
  $numvisits = get_post_meta($post_id, 'numvisits', true);

  if ($numvisits == 0) { // The counter does not exists yet... we must create it
    add_post_meta($post_id, 'numvisits', 1, true);
  } else { //the counter exists, we must add 1 visit
    $numvisits++;
    update_post_meta($post_id, 'numvisits', $numvisits);
  }
}


/*  ······················ AUTHOR FUNCTIONS ························ */

/**
 * Get the author role with a given author_id.
 * 
 * @param $author_id author id
 * @return the role of the author as a string
 **/
function get_author_role($author_id)
{
  // get the author object
  $author = get_userdata($author_id);

  // store the author roles array
  $roles = $author->roles;

  // retrieve the author roles like a string comma separated
  return implode(', ', $roles);
}

/**
 * Add social media fields
 * @param $user_methods array User profile fields - Provided by 'user_contactmethods' action hook
 * return $user_methods array User profile fields
 **/
function add_social_media_fields($user_methods)
{
  $user_methods['facebook'] = "Facebook";
  $user_methods['twitter'] = "Twitter";
  $user_methods['instagram'] = "Instagram";
  $user_methods['linkedin'] = "LinkedIn";
  return $user_methods;
}
add_action('user_contactmethods', 'add_social_media_fields');


/**
 * Insert enctype to user profile form in admin area
 * 
 */
function add_enctype_to_user_form()
{
  echo  'enctype="multipart/form-data"';
}
add_action('user_edit_form_tag', 'add_enctype_to_user_form');

/**
 * Add skills fields in user profile
 * @param $user user object Nos lo proveen dos hooks ('show_user_profile' y 'edit_user_profile')
 **/
function add_user_skill_info($user)
{
  // IF we have a pic uploaded get the url, on the contrary display transparent miniature
  if (!empty(get_user_meta($user->ID, 'user_pic', true))) {
    $src = get_user_meta($user->ID, 'user_pic', true);
  } else {
    $src = get_template_directory_uri() . '/assets/images/cloud.png';
  }

?>

  <h3>User profile picture</h3>
  <div class="flex-profile-pic">
    <input type="hidden" name="MAX_FILE_SIZE" value="20000000" /> <!-- limita el tamaño del campo que viene a continuacion -->
    <input type="file" id="user_pic" name="user_pic" />
    <div class="miniatura"></div>
    <img id="preview-img" src="<?php echo $src; ?>" width="250px" height="200px" style="margin-top: 10px;" />
    <p>Ruta: <?php echo get_user_meta($user->ID, 'user_pic', true); ?></p>
  </div>

  <h3>Favourite Car YouTube Video</h3>
  <table class="form-table">
    <tr>
      <th><label for="fav_car">Link:</label></th>
      <td><input type="text" name="fav_car" id="fav_car" name="fav_car" value="<?php echo get_user_meta($user->ID, 'fav_car', true); ?>" /></td>
    </tr>
  </table>


  <h3>User skill</h3>
  <table class="form-table">
    <tr>
      <th><label for="skill1">Skill 1</label></th>
      <td><input type="text" name="skill1" id="skill1" name="skill1" value="<?php echo get_user_meta($user->ID, 'skill1', true); ?>" /></td>
      <th><label for="skill1V">Skill 1 Value</label></th>
      <td><input type="text" name="skill1V" id="skill1V" name="skill1V" value="<?php echo get_user_meta($user->ID, 'skill1V', true); ?>" /></td>
    </tr>
    <tr>
      <th><label for="skill2">Skill 2</label></th>
      <td><input type="text" name="skill2" id="skill2" name="skill2" value="<?php echo get_user_meta($user->ID, 'skill2', true); ?>" /></td>
      <th><label for="skill2V">Skill 2 Value</label></th>
      <td><input type="text" name="skill2V" id="skill2V" name="skill2V" value="<?php echo get_user_meta($user->ID, 'skill2V', true); ?>" /></td>
    </tr>
    <tr>
      <th><label for="skill3">Skill 3</label></th>
      <td><input type="text" name="skill3" id="skill3" name="skill3" value="<?php echo get_user_meta($user->ID, 'skill3', true); ?>" /></td>
      <th><label for="skill3V">Skill 3 Value</label></th>
      <td><input type="text" name="skill3V" id="skill3V" name="skill3V" value="<?php echo get_user_meta($user->ID, 'skill3V', true); ?>" /></td>
    </tr>
    <tr>
      <th><label for="skill4">Skill 4</label></th>
      <td><input type="text" name="skill4" id="skill4" name="skill4" value="<?php echo get_user_meta($user->ID, 'skill4', true); ?>" /></td>
      <th><label for="skill4V">Skill 4 Value</label></th>
      <td><input type="text" name="skill4V" id="skill4V" name="skill4V" value="<?php echo get_user_meta($user->ID, 'skill4V', true); ?>" /></td>
    </tr>
  </table>


<?php

}
add_action('show_user_profile', 'add_user_skill_info');
add_action('edit_user_profile', 'add_user_skill_info');


/**
 *  Save skills fields values in user profile.
 * 
 *  @param $user_id user object Nos lo proveen dos hooks ('personal_options_update' y 'edit_user_profile_update')
 * 
 */
function save_skills_info($user_id)
{

  // save our profile picture
  // Grab the file data 

  $user_info = get_userdata($user_id);

  $user_name = $user_info->user_login;  // store the user login name


  if ($_FILES['user_pic']['error'] == UPLOAD_ERR_OK) {
    $upload_dir = wp_upload_dir();  // path to upload files folder in wordpress structure

    $subdir = "/user-profile-pics/"; // le pongo / porque las rutas anteriores no terminan ni empiezan en /

    $upload_path = $upload_dir['basedir'] . $subdir;

    // ahora vamos a crear un nombre de archivo que no sobreescriban si ya hay uno igual llamado
    $file_name = $user_name . '-' . $_FILES['user_pic']['name'];

    $file_temp = $_FILES['user_pic']['tmp_name']; // como se llama el fichero en el limbo
    $file_dest = $upload_path . $file_name;  // como se llama el fichero final

    // ahora tenemos que mover la foto del limbo a una carpeta donde no se borre (team)
    if (move_uploaded_file($file_temp, $file_dest)) {
      // The file has been correctly moved -> store the new url

      $upload_dir = wp_get_upload_dir();
      $file_url = $upload_dir['baseurl'] . $subdir . $file_name;


      update_user_meta($user_id, 'user_pic', $file_url);
    } else {
      // Some error ocurred -> store the error message
      //  $pic_error = "<strong>Error!</strong>The pic could not be loaded...";

      $pic_error =  "Something bad happens...";
      update_user_meta($user_id, 'user_pic', $pic_error);
    };
  }


  update_user_meta($user_id, 'fav_car', $_POST['fav_car']);

  update_user_meta($user_id, 'skill1', $_POST['skill1']);
  update_user_meta($user_id, 'skill1V', $_POST['skill1V']);

  update_user_meta($user_id, 'skill2', $_POST['skill2']);
  update_user_meta($user_id, 'skill2V', $_POST['skill2V']);


  update_user_meta($user_id, 'skill3', $_POST['skill3']);
  update_user_meta($user_id, 'skill3V', $_POST['skill3V']);


  update_user_meta($user_id, 'skill4', $_POST['skill4']);
  update_user_meta($user_id, 'skill4V', $_POST['skill4V']);
}
add_action('personal_options_update', 'save_skills_info');
add_action('edit_user_profile_update', 'save_skills_info');



/**
 * List post tags
 * 
 * @param $limit integer Number of tags listed
 * @return $tag_list $categories string list of links of tags
 */
function get_tag_list($limit)
{
  $args = array(
    'number' => $limit,
    'orderby' => 'count',
    'order' => 'DESC',
  );


  $tags = get_tags($args);   // tag object collection

  $tag_list = '';

  foreach ($tags as $tag) {

    $tag_list = $tag_list . '<li><a href="' . get_tag_link($tag->term_id) . '">  ' . $tag->name . ' <span class="icon count"> ' . $tag->count . '</span> </a></li>';
  }

  return $tag_list;
}


/*  ······················ COMMENTS ························ */

/**
 * Delete the url comment form field
 * 
 * @param $fields array lista de campos del form -> nos lo suministra el hook comment_form_default_fields
 * @return $fields array
 */
function delete_url_form_comment_form($fields)
{
  unset($fields['url']);

  return $fields;
}
add_action('comment_form_default_fields', 'delete_url_form_comment_form');

/**
 * Reorder comments form fields
 * 
 * @param $fields array comment form fields list -> provided by the hook comment_form_fielfs
 * @return $fields array
 */
function reorder_comment_form_fields($fields)
{


  if (!is_user_logged_in()) {  // en caso de que ya este logueado
    $aux = array();

    array_push($aux, $fields['author']);
    array_push($aux, $fields['email']);
    array_push($aux, $fields['comment']);
    array_push($aux, $fields['cookies']);
    array_push($aux, $fields['consent']);

    return $aux;
  } else {
    return $fields;
  }
}
add_action('comment_form_fields', 'reorder_comment_form_fields');

/**
 * Reorder comments form fields
 * 
 * @param $fields array comment form fields list -> provided by the hook comment_form_fielfs
 * @return $fields array
 */
function add_consent_fields($fields)
{

  $fields['consent'] = '<div class="row mb-30">
                            <div class="col-md-12"> 
                              <input type="checkbox" name="consent" id="consent" class="mr-10"> 
                              <label for="consent" style="display: inline;">Check this box to allow us publishing your comment. Doing so, you are accepting our <a href="' . get_page_link(get_page_by_title("Privacy Policy")->ID) . '">privacy policy</a></label>
                            </div>
                        </div>';

  return $fields;
}
add_action('comment_form_default_fields', 'add_consent_fields');


/**
 * Save comment consent field in DataBase
 * 
 * @param $comment_id integer comment consent form field ID -> provided by the hook comment_post
 *  
 * 
 */
function save_consent_field($comment_id)
{
  $consent_value = $_POST['consent'];

  if ($consent_value) {
    $value = 'Consent checkbox is checked. I accept the privacy policy';
  } else {
    if (is_user_logged_in()) {
      $value = 'Logged user. Privacy Policy have been already accepted';
    } else {
      $value = 'Consent checkbox NOT checked. I do NOT accept the privacy policy';
    }
  }

  update_comment_meta($comment_id, 'consent', $value);
}
add_action('comment_post', 'save_consent_field');

/**
 * Create the comment consent field in the admin area
 * 
 * @param $columns array Columns of comments field in admin area -> provided by the hook manage_edit-comments_columns
 * @return $columns array
 */
function create_consent_column($columns)
{
  $columns = array(
    'cb' => '<input type="checkbox">',
    'author' => 'Author',
    'comment' => 'Comment',
    'consent' => 'Consent',
    'response' => 'In response to',
    'date' => 'Submitted on',
  );

  return $columns;
}
add_action('manage_edit-comments_columns', 'create_consent_column');

/**
 * Display consent comment form field in admin-area
 * 
 * @param $column string where to display the value -> provided by the hook manage_comments_custom_column
 * @param $comment_id array Comment ID
 */
function display_consent_column_value($column, $comment_id)
{
  if ($column == 'consent') {
    echo get_comment_meta($comment_id, 'consent', true);
  }
}
add_action('manage_comments_custom_column', 'display_consent_column_value', 1, 2);


function porsche_modify_fields_form($args)
{
  $commenter = wp_get_current_commenter();

  $req = get_option('require_name_email');

  $aria_req = ($req ? " aria-required='true'" : '');

  /* Title & Notes & Submit */

  $title_reply = '<h4 class="blog-page-title mt-50 mb-25">LEAVE A COMMENT</h4>';

  $args['title_reply'] = $title_reply;
  $args['comment_notes_before'] = '';

  // $args['submit_field'] = '<div class="row">
  //                             <div class="col-md-12">
  //                                 <input name="submit" type="submit" id="submit" class="button medium gray" value="SEND MESSAGE">
  //                                 <input type="hidden" name="comment_post_ID" value="48" id="comment_post_ID">
  //                                 <input type="hidden" name="comment_parent" id="comment_parent" value="0">
  //                             </div>
  //                           </div>';

  $args['class_submit'] = 'button medium gray';
  $args['label_submit'] = 'SEND MESSAGE';


  /* Input fields */
  $author = '<div class="row">
                <div>
                    <div class="col-md-6 mb-30">
                      <label>Your name ' . ($req ? ' *' : '') . '</label>
                      <input class="controled" placeholder="' . __('NAME') . '"
                      id="author" name="author" type="text" value="' . esc_attr(
    $commenter['comment_author']
  ) . '" size="30"' . $aria_req . ' />
                    </div>
                ';

  $email = '<div class="col-md-6 mb-30">
                  <label>Your email address ' . ($req ? ' *' : '') . '</label>
                  <input placeholder="' . __('EMAIL') . '
                  " data-msg-required="Please enter your email address" data-msg-email="Please enter a valid email address" id="email" name="email" type="text" value="' .
    esc_attr($commenter['comment_author_email']) . '" maxlength="100" class="controled" size="30"' . $aria_req . '
                  />
            </div>
          </div>
        </div>';

  $url = '<input placeholder="' . __('Website') . '" id="url" name="url"
  type="text" value="' . esc_attr($commenter['comment_author_url']) . '"
  size="30" /></div>';

  $comment = '<div class="row">
  <div><div class="col-md-12 mb-40"><label>Message *</label><textarea placeholder="' . _x('MESSAGE', 'noun') . '"
  id="comment" name="comment" maxlength="5000" data-msg-required="Please enter your message" rows="3" class="controled"
  aria-required="true"></textarea></div></div></div>';

  $checkbox_cookies = '<div class="row mb-10">
                          <div class="col-md-12">
                            <input id="wp-comment-cookies-consent" name="wp-comment-cookies-consent" type="checkbox" value="yes" class="mr-10"><label style="display: inline;" for="wp-comment-cookies-consent">Save my name, email, and website in this browser for the next time I comment.</label>
                          </div>
                       </div>';

  /* Save fields in args */
  $args['fields']['author'] = $author;
  $args['fields']['email'] = $email;
  $args['fields']['url'] = $url;
  $args['fields']['cookies'] = $checkbox_cookies;
  $args['comment_field'] = $comment;

  return $args;
}
add_filter('comment_form_defaults', 'porsche_modify_fields_form');


function custom_comments($comment, $args, $depth)
{
?>

  <li class="media comment-item <?php echo ($depth > 1) ? 'comment-reply' : '';  ?>">

    <a class="pull-left" href="">
      <?php echo get_avatar($comment, 60, 'robohash', 'comment-avatar', array('class' => array('media-object', 'comment-avatar'))) ?>
    </a>



    <div class="media-body">

      <div class="comment-item-title">
        <div class="comment-author">
          <p class="author-name"><?php comment_author(); ?></p>
        </div>
        <div class="comment-date">
          <?php comment_date('F j, Y'); ?><?php echo ' at '; ?><?php comment_time(); ?><span class="slash-divider">-</span>

          <?php

          comment_reply_link(array_merge(
            $args,
            array(
              'depth' => $depth,
              'max_depth' => $args['max_depth'],
            )
          ));

          ?>
        </div>
      </div>

      <?php comment_text(); ?>

    </div>

  </li>

<?php
}





/*  ······················ AUTHOR FUNCTIONS ························ */

/**
 * Customize login template logo
 */
function custom_login_logo()
{
?>
  <style>
    #login h1 a,
    .login h1 a {
      width: 300px;
      background-size: contain;
      background-position: center center;
    }

    .wp-login-lost-password {
      color: white !important;
    }

    #backtoblog a {
      color: white !important;
    }

    .login {
      background-image: url("<?php echo bloginfo('template_directory') ?>/assets/images/authors-header.jpg");
    }
  </style>
<?php
}
add_action('login_enqueue_scripts', 'custom_login_logo');

/**
 * Redireccionar la url del logo
 */
function redirect_login_logo_url()
{
  return home_url("/");
}
add_filter('login_headerurl', 'redirect_login_logo_url');

/**
 * Customize login error
 */
function customize_login_error()
{
  return "Oooops! You must enter a valid username and password...";
}
add_filter('login_errors', 'customize_login_error');



/*  ······················ SHORTCODES ························ */

/**
 * 
 */
function br_callback()
{
  return '<br />';
}
add_shortcode('br', 'br_callback');


/*  ······················ SEARCH PAGINATION NUMBER ························ */


/**
 * Show custom number of posts per page depending on template
 * @param $query object WP Query -> provided by the hook pre_get_posts
 */
function custom_posts_per_page($query)
{
  if ((is_search() || is_archive()) && $query->is_main_query() && !is_admin()) { // if we are in search.php or archive.php templates
    // Modify WP Query argument 'post_per_page'
    $query->set('posts_per_page', '15');
  }
}
add_action('pre_get_posts', 'custom_posts_per_page');

/**
 * Exclude message custom post type from query
 * @param $query object WP Query -> provided by the hook pre_get_posts
 */
function exclude_CPT_from_query($query)
{
  if ((is_search() || is_archive()) && $query->is_main_query() && !is_admin()) {
    $query->set('post_type', array('post', 'page', 'reviews'));
  }
}
add_action('pre_get_posts', 'exclude_CPT_from_query');


function my_excerpt_length($length)
{
  $newLength = 23;
  if (is_home() && !is_front_page()) {
    //estoy en el blog
    $newLength = 50;
  }
  return $newLength;
}
add_filter('excerpt_length', 'my_excerpt_length');
