<?php get_header() ?>

<?php if (have_posts()) : ?>
    <div class="row">
        <?php while (have_posts()) : the_post(); ?>
            <div class="col-sm-4">
                <div class="card" style="width: 18rem;">
                    <?php the_post_thumbnail('post-thumbnail', ['class' => 'card-img-top, img-fluid', 'alt' => '']) ?>
                    <div class="card-body">
                        <h5 class="card-title"><?php the_title() ?></h5>
                        <h6 class="card-subtitle mb-2 text-muted"><?php the_category() ?> </h6>
                        <p class="card-text"><?php the_excerpt() ?></p>
                    </div>
                </div>
            </div>
        <?php endwhile ?>
    </div>
<?php else : ?>
    <h1>Pas d'article</h1>
<?php endif; ?>
<?php get_footer() ?>