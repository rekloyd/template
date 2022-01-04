
<?php get_header();?>

    <div class="text"> 
    <?php get_search_form(); ?>
    <h2 class="heading2">Latest Blog Posts    <i class="fas fa-edit"></i></h2>
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <img class="thumb" src="<?php the_post_thumbnail_url();?>" alt="thumbnail">
            <section class="posts">
                <a href="<?php the_permalink(); ?>"><p><strong> <?php the_title(); ?></strong> (<?php the_time('j \d\e F \d\e Y') ?>)</p></a>
                <?php the_excerpt();?>

            </section>
            <?php endwhile; else: ?>
            <p><?php _e('Sorry, no posts matched your criteria.'); ?></p><?php endif; ?>


    </div>



<div class="text">
<section>
    <h2>About me <i class="fas fa-child"></i></h2>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam vero, sed vel enim labore officiis doloremque sunt error harum? Provident obcaecati vitae nemo exercitationem soluta molestias facilis, quaerat voluptatibus deleniti harum rerum. Ea vitae, enim odio eius aut sequi ut doloremque. Illo, quas quam! Possimus quibusdam voluptatem doloremque laudantium quis!Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam vero, sed vel enim labore officiis doloremque sunt error harum? Provident obcaecati vitae nemo exercitationem soluta molestias facilis, quaerat voluptatibus deleniti harum rerum. Ea vitae, enim odio eius aut sequi ut doloremque. Illo, quas quam! Possimus quibusdam voluptatem doloremque laudantium quis!Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam vero, sed vel enim labore officiis doloremque sunt error harum? Provident obcaecati vitae nemo exercitationem soluta molestias facilis, quaerat voluptatibus deleniti harum rerum. Ea vitae, enim odio eius aut sequi ut doloremque. Illo, quas quam! Possimus quibusdam voluptatem doloremque laudantium quis!Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam vero, sed vel enim labore officiis doloremque sunt error harum? Provident obcaecati vitae nemo exercitationem soluta molestias facilis, quaerat voluptatibus deleniti harum rerum. Ea vitae, enim odio eius aut sequi ut doloremque. Illo, quas quam! Possimus quibusdam voluptatem doloremque laudantium quis!</p>

</section>
</div>

<?php get_footer(); ?>

