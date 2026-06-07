<?php get_header(); ?>

<main id="main-content">

    <?php while (have_posts()) : the_post(); ?>

        <?php
        $role_title = get_field('role_title');
        $hero_intro = get_field('hero_intro');
        $headshot = get_field('headshot');
        ?>

        <section class="hero-teacher">
            <div class="hero-teacher-inner">

                <div class="hero-teacher-media">

                    <img
                        class="hero-standard-spiral"
                        src="<?php echo get_template_directory_uri(); ?>/assets/spirals/spiral-2-cropped.png"
                        alt=""
                        aria-hidden="true"
                    >

                    <?php if ($headshot) : ?>
                        <div class="hero-teacher-photo">
                            <img
                                src="<?php echo esc_url($headshot['url']); ?>"
                                alt="<?php echo esc_attr($headshot['alt']); ?>"
                            >
                        </div>
                    <?php endif; ?>

                </div>

                <div class="hero-teacher-content">

                    <h1 class="hero-teacher-name">
                        <?php the_title(); ?>
                    </h1>

                    <?php if ($role_title) : ?>
                        <span class="hero-teacher-role">
                            <?php echo esc_html($role_title); ?>
                        </span>
                    <?php endif; ?>

                    <?php if ($hero_intro) : ?>
                        <p class="hero-teacher-bio">
                            <?php echo esc_html($hero_intro); ?>
                        </p>
                    <?php endif; ?>

                </div>

            </div>
        </section>

        <?php if (have_rows('stats')) : ?>
            <h2>Stats</h2>
            <ul>
                <?php while (have_rows('stats')) : the_row(); ?>
                    <li><?php the_sub_field('stat_text'); ?></li>
                <?php endwhile; ?>
            </ul>
        <?php endif; ?>

        <?php if (get_field('display_headline')) : ?>
            <h2><?php the_field('display_headline'); ?></h2>
        <?php endif; ?>

        <?php if (get_field('instructor_approach')) : ?>
            <h3>Instructor Approach</h3>
            <p><?php echo nl2br(esc_html(get_field('instructor_approach'))); ?></p>
        <?php endif; ?>

        <?php if (get_field('early_years')) : ?>
            <h3>Early Years</h3>
            <p><?php echo nl2br(esc_html(get_field('early_years'))); ?></p>
        <?php endif; ?>

        <?php if (get_field('training_influences')) : ?>
            <h3>Training &amp; Influences</h3>
            <p><?php echo nl2br(esc_html(get_field('training_influences'))); ?></p>
        <?php endif; ?>

        <?php if (get_field('instructor_teaching_today')) : ?>
            <h3>Instructor Teaching Today</h3>
            <p><?php echo nl2br(esc_html(get_field('instructor_teaching_today'))); ?></p>
        <?php endif; ?>

        <?php if (get_field('instructor_specialisms')) : ?>
            <h3>Instructor Specialisms</h3>
            <p><?php echo nl2br(esc_html(get_field('instructor_specialisms'))); ?></p>
        <?php endif; ?>

        <?php if (get_field('quote_1_text')) : ?>
            <blockquote>
                <p><?php echo esc_html(get_field('quote_1_text')); ?></p>

                <?php if (get_field('quote_1_attribution')) : ?>
                    <cite><?php echo esc_html(get_field('quote_1_attribution')); ?></cite>
                <?php endif; ?>
            </blockquote>
        <?php endif; ?>

        <?php if (get_field('quote_2_text')) : ?>
            <blockquote>
                <p><?php echo esc_html(get_field('quote_2_text')); ?></p>

                <?php if (get_field('quote_2_attribution')) : ?>
                    <cite><?php echo esc_html(get_field('quote_2_attribution')); ?></cite>
                <?php endif; ?>
            </blockquote>
        <?php endif; ?>

        <?php if (have_rows('training_lineage')) : ?>
            <h2>Training &amp; Lineage</h2>
            <ul>
                <?php while (have_rows('training_lineage')) : the_row(); ?>
                    <?php if (get_sub_field('line_item')) : ?>
                        <li><?php echo esc_html(get_sub_field('line_item')); ?></li>
                    <?php endif; ?>
                <?php endwhile; ?>
            </ul>
        <?php endif; ?>

        <?php $logos = get_field('accreditation_logos'); ?>
        <?php if ($logos) : ?>
            <h2>Accreditation Logos</h2>

            <?php foreach ($logos as $logo) : ?>
                <img
                    src="<?php echo esc_url($logo['url']); ?>"
                    alt="<?php echo esc_attr($logo['alt']); ?>"
                    style="max-width: 120px; height: auto;"
                >
            <?php endforeach; ?>
        <?php endif; ?>

        <?php if (have_rows('instructor_connections')) : ?>
            <h2>Connect</h2>
            <ul>
                <?php while (have_rows('instructor_connections')) : the_row(); ?>
                    <?php
                    $label = get_sub_field('link_label');
                    $url = get_sub_field('link_url');
                    ?>

                    <?php if ($label && $url) : ?>
                        <li>
                            <a href="<?php echo esc_url($url); ?>">
                                <?php echo esc_html($label); ?>
                            </a>
                        </li>
                    <?php endif; ?>
                <?php endwhile; ?>
            </ul>
        <?php endif; ?>

        <?php $featured_courses = get_field('featured_courses'); ?>
            <?php if ($featured_courses) : ?>
                <h2>Featured Courses</h2>

                <ul>
                    <?php foreach ($featured_courses as $course) : ?>
                        <li>
                            <a href="<?php echo esc_url(get_permalink($course->ID)); ?>">
                                <?php echo esc_html(get_the_title($course->ID)); ?>
                            </a>
                        </li>
                    <?php endforeach; ?>
                </ul>
            <?php endif; ?>

        <?php if (have_rows('testimonials')) : ?>
            <h2>Testimonials</h2>

            <ul>
                <?php while (have_rows('testimonials')) : the_row(); ?>
                    <li>
                        <?php if (get_sub_field('testimonial_quote')) : ?>
                            <blockquote>
                                <?php echo esc_html(get_sub_field('testimonial_quote')); ?>
                            </blockquote>
                        <?php endif; ?>

                        <?php if (get_sub_field('testimonial_author')) : ?>
                            <p>
                                <strong><?php echo esc_html(get_sub_field('testimonial_author')); ?></strong>
                            </p>
                        <?php endif; ?>
                    </li>
                <?php endwhile; ?>
            </ul>
        <?php endif; ?>

        <?php $gallery_images = get_field('gallery_images'); ?>

            <?php if ($gallery_images) : ?>
                <h2>Gallery</h2>

                <div>
                    <?php foreach ($gallery_images as $image) : ?>
                        <img
                            src="<?php echo esc_url($image['url']); ?>"
                            alt="<?php echo esc_attr($image['alt']); ?>"
                            style="max-width: 200px; margin: 10px;"
                        >
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>

    <?php endwhile; ?>

</main>

<?php get_footer(); ?>