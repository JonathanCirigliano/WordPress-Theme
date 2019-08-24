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
 
<section id=contact>
<div class="container">    
<div class="row">
<div class="col-md-6">
    <div id="contattiTesto">
        <h2>Vieni a trovarci</h2>
        <p id="mexBenvenuto">Eccoci qui! Se vuoi venire a trovarci segui le indicazioni sulla mappa. Puoi anche prenotare un tavolo compilando la form sottostante con i tuoi dati, e inviandoci un messaggio. Ti aspettiamo! </p>
        <p><span id="orari">Orari di apertura</span><br />
            Dalle 12.00 alle 14.30 <br />
            e dalle 19.00 alle 22.30. <br />
            Sabato a pranzo e domenica chiuso <br />
            Tel +39 3486407586</p>
    </div>
    </div>

<div class="col-md-6">
    <figure><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2290.266656897882!2d15.857534551588257!3d40.24404087592373!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1338d4146445610b%3A0x3bd28acc073f36b4!2sPizzeria+Zio+Paolo!5e0!3m2!1sit!2sit!4v1560542369870!5m2!1sit!2sit"  allowfullscreen=""></iframe></figure>
</div>
</div>
</div>
</section>

<section id="prenota">
    <div class="container">
        <h2>Prenota Qui!</h2>
        <?php echo do_shortcode('[contact-form-7 id="71" title="Modulo di contatto 1"]'); ?>
    </div>
</section>

<?php get_footer(); ?>