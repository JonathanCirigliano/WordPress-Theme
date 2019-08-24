<div class="blog-post">
        <h2 class="blog-post-title">
        <a  class="text-danger" style="text-decoration: none" href="<?php the_permalink(); ?>">
          <?php the_title(); ?>
        </a>
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

        <?php the_excerpt(); ?>
        

      </div>
        
</div><!-- /.blog-post -->