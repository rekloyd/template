
<!DOCTYPE html>

<head>
    <title><?php echo get_bloginfo('name'); ?></title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="<?php echo get_site_url( 'path' ); ?>/wp-content/themes/PauMorillas/styles.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">

        <!--Construcción de la meta <title> -->
    <?php if (is_single() || is_page() ) : if (have_posts() ) : while (have_posts() ) : the_post(); ?>
        <title><?php the_title(); ?></title>
    <?php endwhile; endif; elseif (is_home() ): ?>
        <title><?php the_title(); ?></title>
    <?php endif; ?>

    <!-- componemos la <meta description>-->
    <?php if (is_single() || is_page() ) : if (have_posts() ) : while (have_posts() ) : the_post(); ?>
        <meta name="description" content="<?php echo get_the_excerpt();?>">
        <!-- Si es la Homepage -->
        <?php endwhile; endif; elseif (is_home() ): ?>
            <meta name="description" content="<?php bloginfo('description'); ?>">
    <?php endif; ?>


</head>

<body>

<section>
    <?php wp_nav_menu(array('menu'=>'navbar','container'=>'','theme_location'=>'navbar','items_wrap'=>'<ul id="" class="">%3$s</ul>')); ?>
<header class="heading-container">
    <div class = "heading">
    <?php
    //función logo custom

        if(function_exists('the_custom_logo')){
    //ruta para tener el logo que elige el usuario en el admin de wordpress
            $custom_logo_id = get_theme_mod('custom_logo');
            $logo = wp_get_attachment_image_src($custom_logo_id);
        }
    ?>

    <img class="logo" src="<?php echo $logo[0]; ?>" alt="Logo-img">
    <h1 class="big-heading"><?php echo get_bloginfo('name'); ?></h1>
    <h2 class="description"><?php echo get_bloginfo('description');?></h2>
    
    </div>
</header>
</section>