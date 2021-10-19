<?php
/*
* Template Name: Page avec bannière
* Template Post Type: page, post
*/
?>

<?php get_header() ?>

<?php while (have_posts()) : the_post(); ?>
    Ici la bannière
    <h1><?php the_title() ?></h1>
    <img src="<?php the_post_thumbnail_url() ?>" style="width: 100%; height: auto;" />
    <p>
        <?php the_content() ?>
    </p>
<?php endwhile ?>

<?php get_footer() ?>