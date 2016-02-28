<?php get_header();?>
<?php the_post(); ?>

<main class="prime-content">
    <section class="portfolio-viewbox">
        <div class="container">
            <div class="portfolio-items row center-xs">
                <div class="portfolio-item">
                    <h5 class="text-uppercase"><a class="text-head"
                                                  href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
                    <div class="text-desc"><?php the_content(); ?></div>
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
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>




