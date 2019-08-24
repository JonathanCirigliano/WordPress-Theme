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

    
    
    <!--<div class="jumbotron p-4 p-md-5 text-dark rounded bg-danger">
    <div class="col-md-6 px-0">
      <h1 class="display-4 font-italic">Title of a longer featured blog post</h1>
      <p class="lead my-3">Multiple lines of text that form the lede, informing new readers quickly and efficiently about what’s most interesting in this post’s contents.</p>
      <p class="lead mb-0"><a href="#" class="text-dark font-weight-bold">Continue reading...</a></p>
    </div>
  </div>

  <div class="row mb-2">
    <div class="col-md-6">
      <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
        <div class="col p-4 d-flex flex-column position-static">
          <strong class="d-inline-block mb-2 text-danger">World</strong>
          <h3 class="mb-0">Featured post</h3>
          <div class="mb-1 text-muted">Nov 12</div>
          <p class="card-text mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
          <a href="#" class="stretched-link text-dark font-weight-bold">Continue reading</a>
        </div>
        <div class="col-auto d-none d-lg-block">
          <svg class="bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
        <div class="col p-4 d-flex flex-column position-static">
          <strong class="d-inline-block mb-2 text-danger">Design</strong>
          <h3 class="mb-0">Post title</h3>
          <div class="mb-1 text-muted">Nov 11</div>
          <p class="mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
          <a href="#" class="stretched-link text-dark font-weight-bold">Continue reading</a>
        </div>
        <div class="col-auto d-none d-lg-block">
          <svg class="bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>
        </div>
      </div>
    </div>
  </div>
</div>-->

<main role="main" class="container">
  <div class="row">
    <div class="col-md-8 blog-main">
      
      <?php if(have_posts()) : ?>
        <?php while(have_posts()) : the_post(); ?>
      <div class="blog-post">
        <h2 class="blog-post-title">
          <?php the_title(); ?>
        </h2>
        <p class="blog-post-meta">
            <?php the_time('F j, Y g:i a'); ?>
         by <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')) ?>" class="text-danger">
            <?php the_author(); ?>
         </a></p>
      
        <?php if(has_post_thumbnail()) : ?>
            <?php the_post_thumbnail('medium'); ?>
        <?php endif; ?>

      <div id="postContent">

        <?php the_content(); ?>
        
        <br/>
        
       

      </div>
        
      </div><!-- /.blog-post -->
            <?php endwhile; ?>
          <?php else : ?>
          <p><?php__('No Posts Found') ?></p>
      <?php endif; ?>



    </div><!-- /.blog-main -->
    <aside class="col-md-4 blog-sidebar">
    <?php if (is_active_sidebar('sidebar')): ?>
        <?php dynamic_sidebar('sidebar'); ?>
     <?php endif; ?>
    </aside><!-- /.blog-sidebar -->

  </div><!-- /.row -->

  <hr>

<?php comments_template(); ?>

</main><!-- /.container -->
</div>



<?php get_footer(); ?>
