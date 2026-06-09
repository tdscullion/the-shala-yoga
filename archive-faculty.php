<?php get_header(); ?>


<section class="hero-standard bg-pinked-linen text-on-light">
    <div class="hero-standard-inner">
        <img
            class="hero-standard-spiral"
            src="<?php echo get_template_directory_uri(); ?>/assets/spirals/spiral-1-cropped.png"
            alt=""
            aria-hidden="true"
        >

        <div class="hero-standard-content">
            <h1 class="hero-standard-title">
                Meet the <em>Faculty</em>
            </h1>

            <p class="hero-standard-sub">
                The teachers behind every Shala training — senior, specialist and
                experienced. Each module of our 200-Hour and 300-Hour programmes
                is led by a dedicated subject expert, so you learn from those who
                have devoted their careers to the practice they teach.
            </p>
        </div>
    </div>
</section>      

<main id="main-content" style="padding:80px 48px;">

    <h1>Faculty</h1>

    <?php if (have_posts()) : ?>
        <div style="display:grid; grid-template-columns:repeat(3, 1fr); gap:24px;">

            <?php while (have_posts()) : the_post(); ?>

                <?php
                $display_name = get_field('display_name') ?: get_the_title();
                $main_image = get_field('main_image');
                $role_title = get_field('role_title');
                $short_bio = get_field('short_bio');
                ?>

                <article>
                    <a href="<?php the_permalink(); ?>" style="text-decoration:none; color:inherit;">

                        <?php if ($main_image) : ?>
                            <img
                                src="<?php echo esc_url($main_image['url']); ?>"
                                alt="<?php echo esc_attr($main_image['alt']); ?>"
                                style="width:100%; height:320px; object-fit:cover;"
                            >
                        <?php endif; ?>

                        <h2>
                            <?php echo wp_kses_post(theshala_highlight_text($display_name)); ?>
                        </h2>

                        <?php if ($role_title) : ?>
                            <p><strong><?php echo esc_html($role_title); ?></strong></p>
                        <?php endif; ?>

                        <?php if ($short_bio) : ?>
                            <p><?php echo esc_html($short_bio); ?></p>
                        <?php endif; ?>

                    </a>
                </article>

            <?php endwhile; ?>

        </div>
    <?php else : ?>
        <p>No faculty members found.</p>
    <?php endif; ?>

</main>


<?php get_footer(); ?>