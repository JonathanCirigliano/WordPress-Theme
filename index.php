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
                      <!--<ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                          <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#">Features</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#">Pricing</a>
                        </li>
                      </ul>-->
                    </div>
                  </nav>
                </header>



<main role="main" class="container">
  <div class="row">
    <div class="col-md-8 blog-main">
      
    <?php
if ( have_posts() ) : while ( have_posts() ) : the_post();
?>
            <?php get_template_part('content'); ?>

        <?php endwhile; ?>
      <?php else : ?>
      <p><?php__('No Posts Found') ?></p>
      <?php endif; ?>



    </div><!-- /.blog-main -->

    <aside class="col-md-4 blog-sidebar archivi">
      
     <?php if (is_active_sidebar('sidebar')): ?>
        <?php dynamic_sidebar('sidebar'); ?>
     <?php endif; ?>
    </aside><!-- /.blog-sidebar -->

  </div><!-- /.row -->
  </div>

</main><!-- /.container -->

<?php get_footer(); ?>
