

<?php get_header(); ?>


<div class="text">
    <div">
        <a href="../"><span style="font-size: 1.5em"></span><b><i class="fas fa-arrow-circle-left"></i> Volver al inicio</b></a>
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <section class="page-content">
            <div>
                <h1 id="title"><?php the_title(); ?></h1>
            </div> 
                <p>Publicado el <?php the_time('j \d\e F \d\e Y') ?></p>
                <?php the_content(); ?>

            </section>
            <?php endwhile; else: ?>
            <p><?php _e('Sorry, no posts matched your criteria.'); ?></p><?php endif; ?>

    </div>
</div>

</div>
<?php get_footer(); ?>