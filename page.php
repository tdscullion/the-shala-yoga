<?php get_header(); ?>

<main id="main-content" class="basic-page">
    <div class="basic-page-inner">

        <h1><?php the_title(); ?></h1>

        <div class="basic-page-content">
            <?php
            while (have_posts()) :
                the_post();
                the_content();
            endwhile;
            ?>
        </div>

    </div>
</main>

<?php get_footer(); ?>