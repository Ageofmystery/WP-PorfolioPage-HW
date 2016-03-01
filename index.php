<?php get_header();?>

<main class="prime-content">
    <div class="current-page-big row middle-xs">
        <div class="container">
            <h2 class="current-page-name text-uppercase">Our Portfolio</h2>
        </div>
    </div>
    <div class="container text-center page-desc-info info-top">
        <h4 class="text-primehead text-uppercase">Nothing but the best for our Portfolio</h4>
        <p class="text-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent justo ligula, interdum ut lobortis quis, interdum vitae metus. Proin fringilla metus non nulla cursus, sit amet rutrum est pretium.</p>
    </div>
    <div class="container">
        <ul class="view-change row">
            <?php
            $args = array(
                'style'              => 'list',
                'title_li'           => '',
                'taxonomy'           => 'genre',
            );
            wp_list_categories( $args ); ?>
        </ul>
    </div>
    <section class="portfolio-viewbox">
        <div class="container">
            <div class="portfolio-items row center-xs between-sm">
                <?php if (have_posts()) :
                    while (have_posts()) {
                        the_post(); ?>
                        <div class="portfolio-item">
                            <h5 class="text-uppercase text-head"><?php the_title(); ?></h5>
                            <div class="text-desc"><?php the_excerpt(); ?></div>
                            <div class="notebook-module">
                                <figure>
                                    <img class="notebook-full"
                                         src="<?php bloginfo('template_directory'); ?>/img/notebook-module.png"
                                         width="354" height="200" alt="Notebook">
                                </figure>
                                <div class="notebook-add row center-xs middle-xs">
                                    <div class="click-add row center-xs middle-xs"><span class="fa fa-plus"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php };
                else :
                    echo '<p class="text-center article-desc">Empty</p>';
                endif; ?>
            </div>
        </div>
    </section>
    <div class="container text-center page-desc-info info-bottom">
        <h4 class="text-primehead text-uppercase">Nothing but the best for our Portfolio</h4>
        <p class="text-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent justo ligula, interdum ut lobortis quis, interdum vitae metus. Proin fringilla metus non nulla cursus, sit amet rutrum est pretium.</p>
        <button class="btn-green text-uppercase">Get a Free Quote</button>
    </div>
</main>

<?php get_footer(); ?>




