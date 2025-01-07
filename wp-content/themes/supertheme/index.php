<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <!-- Required meta tags -->
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- ADD CSS HERE -->

    <title> <?php bloginfo('title'); ?>
    </title>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <!-- ADD HTML HERE -->
    <div>
        <div class='header'>
            <?php
            wp_nav_menu(array(
                'theme_location' => 'header menu',
            ));
            ?>
        </div>

        <hr><br><br>
        <div class="post">
            <?php while (have_posts()) : the_post(); ?>
                <h2><?php the_title(); ?></h2>
                <h2><?php the_post_thumbnail(); ?></h2>
                <p><?php the_content(); ?></p>
            <?php endwhile; ?>
        </div>



        <div class="footer">
            <?php
            wp_nav_menu(array(
                'theme_location' => 'footer-menu',
            ));
            ?>
        </div>

    </div>

    <!-- ADD JAVASCRIPT HERE-->
    <?php wp_footer(); ?>
</body>

</html>