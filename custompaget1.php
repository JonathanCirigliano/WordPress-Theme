<?php /* Template Name: CustomPageT1  */ ?>

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

<section class="chi_siamo">
        <div class="container">
            <div class="row">
            <div class="col-md-6">
            <div id="info">
                <h2>Chi siamo</h2>
                <p>Siamo un ristorante-pizzeria situato a Moliterno (PZ). L'obbiettivo che ci poniamo è quello di coniugare le ricette della tradizione lucana con la pizza come è conosciuta nel mondo. Solo nella nostra pizzeria infatti si possono trovare pizze con peperoni cruski e canestrato di Moliterno con tartufo. Puoi trovarci sempre nella nostra sede di Moliterno</p>
                <a href="#servizi" class="btn btn-danger btn-lg text-light font-weight-bold">i nostri Servizi</a>
            </div>
        </div>
        
        <div class="col-md-6">
            <div id="immagine">
                <!--<aside>-->
                <img src="<?php echo get_bloginfo( 'template_directory' ); ?>/img/pizza_01.jpg" />

                <!--</aside>-->
            </div>
        </div>
            </div>
        </div>
</section>

<section class="bg-danger servizi" id="servizi">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="box">
                    <i class="fas fa-pizza-slice"></i>
                    <h3>Pizzeria</h3>
                    <p>Il nostro core business principale è sicuramente la pizzeria. Quello che proviamo a fare per differenziarci dai nostri concorrenti è quello di mischiare la pizza tradizionale napoletana con i sapori della lucania.</p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="box">
                        <i class="fas fa-utensils"></i>
                        <h3>Ristorante</h3>
                        <p>La ristorazione è un'altra parte principale del nostro business. Da noi potete trovare i piatti della tradizione e dei sapori lucani. Nostre specialità sono il 'Baccalà a ciauredda', i 'Peperoni Cruschi', e il 'Pane Cotto'. </p>
                    </div>
            </div>

            <div class="col-md-4">
                <div class="box">
                    <i class="fas fa-glass-cheers"></i>
                    <h3>Eventi</h3>
                    <p>Per chiunque fosse interessato, ospitiamo anche eventi. Da noi infatti, potete prenotare una sala per festeggiare comunioni, battesimi, cresime e matrimoni, scegliendo tra il buffet o il servizio al tavolo.</p>
                </div>
            </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
