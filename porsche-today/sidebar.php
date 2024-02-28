            <!-- SIDEBAR RIGHT -->
            <div class="col-sm-4 col-md-3 col-md-offset-1">

              <!-- SEARCH -->
              <div class="widget">
                <form class="form-search widget-search-form" action="<?php echo home_url('/'); ?>" method="get">
                  <input type="text" name="s" class="input-search-widget" placeholder="Search">
                  <button class="" type="submit" title="Start Search">
                    <span aria-hidden="true" class="icon_search"></span>
                  </button>
                </form>
              </div>

              <!--- WIDGET --->
              <?php
              if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('tags cloud - sidebar')) : // Preguntamos si existe un area de widgets definida en el back end
              ?>

                <div class="widget">
                  <p>Something bad happened. Tags cloud could not be loaded.</p> <!-- Texto para cuando no haya definida un área de widgets -->
                </div>

              <?php endif; ?>


              <!--- WIDGET --->

              <?php
              if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('calendar - sidebar')) : // Preguntamos si existe un area de widgets definida en el back end
              ?>

                <div class="widget">
                  <p>Something bad happened. Calendar could not be loaded.</p> <!-- Texto para cuando no haya definida un área de widgets -->
                </div>

              <?php endif; ?>

              <!-- WIDGET -->
              <div class="widget">

                <h5 class="widget-title">Categories</h5>

                <div class="widget-body">
                  <ul class="clearlist widget-menu">

                    <?php
                    // devuelve un elemento li por cada categoria
                    $categories =  wp_list_categories('title_li=&show_count=1&echo=0');
                    $categories = preg_replace('/<\/a> \(([0-9]+)\)/', '</a><small><span class="slash-divider">/</span><span class="">\\1</span></small>', $categories);
                    echo $categories;
                    ?>

                  </ul>
                </div>

              </div>

              <!-- WIDGET -->
              <div class="widget">

                <h5 class="widget-title">Recent posts</h5>

                <div class="widget-body">
                  <ul class="clearlist widget-posts">

                    <?php   // comienza el loop para los recent posts

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

                    ?>

                        <li class="clearfix recent-post-container">
                          <a href="<?php echo the_permalink(); ?>"><img src="<?php echo $thum_url; ?>" alt="<?php echo the_title(); ?>" class="widget-posts-img" /></a>
                          <div class="widget-posts-descr">
                            <a href="<?php echo the_permalink(); ?>"><?php echo the_title(); ?></a>
                            <div><?php echo the_time('F j, Y'); ?><span class="slash-divider">/</span> <?php echo the_author_posts_link(); ?></div>
                          </div>
                        </li>


                    <?php

                      endwhile;

                    else :
                      echo "No posts published yet";

                    endif;


                    // RESETEAR SIEMPRE despues de haber hecho uso de la clase WP_Query
                    wp_reset_postdata();


                    ?>


                  </ul>
                </div>

              </div>


              <!-- WIDGET -->
              <div class="widget">

                <h5 class="widget-title">AUTHORS</h5>

                <div class="widget-body">
                  <ul class="clearlist widget-menu">

                    <?php
                    $args = array(
                      'optioncount' => 1,  // visualiza el numero de post
                      'echo' => 0,   // nos devuelve la lista de autores en lugar de visualizarla
                      'hide_empty' => false,  // hace que se visualizen tambien los autores
                      'orderby' => 'post_count',    // numero de post publicados
                      'order' => 'DESC',    // En orden de mayor número de post publicados
                    );
                    $authors = wp_list_authors($args);
                    $authors = preg_replace('/<\/a> \(([0-9]+)\)/', '</a><small><span class="slash-divider">/</span><span class="">\\1</span></small>', $authors);
                    echo $authors;

                    ?>
                  </ul>
                </div>

              </div>


              <!-- WIDGET -->
              <div class="widget">

                <h5 class="widget-title">Pages</h5>

                <div class="widget-body">
                  <ul class="clearlist widget-menu">

                    <?php
                    $pages = get_pages();   // devuelve una coleccion de objetos tipo pagina

                    foreach ($pages as $page) {
                      if (!in_array($page->post_title, array('HOME', 'BLOG', 'REVIEWS', 'ARCHIVES', 'CONTACT'))) {
                        $exclude_pages[] = $page->ID;
                      }
                    }

                    $args = array(
                      'title_li' => '',  // Elimino el titulo que me pone la funcion por defecto para usar el de mi layout
                      'exclude' => implode(',', $exclude_pages), // String con los ID's de las paginas separados por comas
                    );
                    wp_list_pages($args);
                    ?>
                  </ul>
                </div>

              </div>

            </div>