<?php get_header(); ?>

<div class="container">
       <header class="blog-header py-3">
                <nav class="navbar navbar-expand-lg navbar-light bg-white">
                    <a class="navbar-brand" href="#">Cirigliano's Pizza</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                    <?php
                        wp_nav_menu( array(
                            'menu' => get_post_meta( $post->ID, 'MenuName', true),
                            'theme_location' => 'primary',
                            'depth' => 14,
                            'container' => 'div',
                            'container_class' => 'collapse navbar-collapse',
                            'container_id' => 'navbarNav',
                            'menu_class' => 'navbar-nav ml-auto',
                            'fallback_cb' => 'wp_bootstrap_navwalker::fallback',
                            'walker' => new wp_bootstrap_navwalker())
                            );
                            ?>
                    </div>
                  </nav>
            </header>
        </div>


    <div id="primary" class="container">
        <main id="main" class="site-main" role="main">
            <section class="error-404 not-found">

                <head class="page-header">
                    <h1 class="page-title">Sorry, page not found</h1>
                </head>

                <div class="page-content">

                    <h4>Niente è stato trovato in questa sezione. Prova nei link qui sotto o digita nella barra di ricerca.</h4>

                    <?php get_search_form(); ?>

                    <?php the_widget('WP_Widget_Recent_Posts'); ?>

                    <div class="widget widget_categories">
                        <h3>Cerca tra le nostre categorie</h3>
                        <ul>
                            <?php
                                wp_list_categories(array(
                                    'orderby' => 'count',
                                    'order'  => 'DESC',
                                    'show_count'  => 1,
                                    'title_li' => '',
                                    'number'  => 5
                                 ));
                            ?>
                        </ul>
                    </div>

                    <?php the_widget('WP_Widget_Archives', 'dropdown=0') ?>

                </div>
            </section>
        </main>
    </div>

<?php get_footer(); ?>