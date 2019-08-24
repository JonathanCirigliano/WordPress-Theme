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

<section class="showcase">
    <div class="container">
      <div id="showcaseContent">
        <h1>Cirigliano's Pizza</h1>
        <p>Benvenuti nel sito della nostra Pizzeria. Qui potrete trovare tutte le informazioni su dove trovarci, e leggere le nostre specialità nella sezione blog.</p>
        <a href="<?php echo get_page_link(43); ?>" class="btn btn-danger btn-lg text-light font-weight-bold">Vai al Blog</a>
      </div>
    </div>
</section>

<?php get_footer(); ?>