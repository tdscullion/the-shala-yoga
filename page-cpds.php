<?php get_header(); ?>

    <section class="hero-standard bg-linen text-on-light">
        <div class="hero-standard-inner">

            <img
                class="hero-standard-spiral"
                src="<?php echo get_template_directory_uri(); ?>/assets/spirals/spiral-1-cropped.png"
                alt=""
                aria-hidden="true"
            >

            <div class="hero-standard-content">

                <h1 class="hero-standard-title">
                    CPD &amp; <em>Modules</em>
                </h1>

                <p class="hero-standard-sub">
                    Deepen your practice, expand your skills, and find your specialism
                    — from single-day workshops to multi-week immersions with some of
                    the UK's most respected teachers.
                </p>

                <div class="hero-standard-btns">
                    <a href="#" class="btn btn-pink">Browse Modules</a>
                    <a href="#" class="btn-ghost btn-pink">300-Hour →</a>
                </div>

            </div>

        </div>
    </section>

    <main id="main-content" style="padding:80px 48px;">

    <h1>CPD &amp; Modules</h1>

    <?php
    $cpd_courses = new WP_Query([
        'post_type' => 'course',
        'posts_per_page' => -1,
        'orderby' => 'meta_value',
        'meta_key' => 'start_date',
        'order' => 'ASC',
    ]);
    ?>

    <?php if ($cpd_courses->have_posts()) : ?>
        <div style="display:grid; grid-template-columns:repeat(3, 1fr); gap:24px;">

            <?php while ($cpd_courses->have_posts()) : $cpd_courses->the_post(); ?>

                <?php
                $short_title = get_field('short_title') ?: get_the_title();
                $card_subtitle = get_field('card_subtitle');
                $course_card_image = get_field('course_card_image');
                $display_date = get_field('display_date');
                $course_price = get_field('course_price');
                $course_format = get_field('course_format');
                ?>

                <article>
                    <a href="<?php the_permalink(); ?>" style="text-decoration:none; color:inherit;">

                        <?php if ($course_card_image) : ?>
                            <img
                                src="<?php echo esc_url($course_card_image['url']); ?>"
                                alt="<?php echo esc_attr($course_card_image['alt']); ?>"
                                style="width:100%; height:320px; object-fit:cover;"
                            >
                        <?php endif; ?>

                        <?php if ($course_format || $card_subtitle) : ?>
                            <p><strong><?php echo esc_html($course_format ?: $card_subtitle); ?></strong></p>
                        <?php endif; ?>

                        <h2>
                            <?php echo wp_kses_post(theshala_highlight_text($short_title)); ?>
                        </h2>

                        <?php if ($display_date) : ?>
                            <p><?php echo esc_html($display_date); ?></p>
                        <?php endif; ?>

                        <?php if ($course_price) : ?>
                            <p><?php echo esc_html($course_price); ?></p>
                        <?php endif; ?>

                    </a>
                </article>

            <?php endwhile; ?>

        </div>

        <?php wp_reset_postdata(); ?>

    <?php else : ?>
        <p>No courses found.</p>
    <?php endif; ?>

</main>

<?php get_footer(); ?>