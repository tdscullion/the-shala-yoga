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

        <!-- STATS BAR -->
        <?php if (have_rows('stats')) : ?>
            <div class="stats-bar">
                <div class="stats-bar-inner">

                    <?php while (have_rows('stats')) : the_row(); ?>
                        <?php
                        $stat_value = get_sub_field('stat_value');
                        $stat_label = get_sub_field('stat_label');
                        ?>

                        <?php if ($stat_value || $stat_label) : ?>
                            <div class="stat-box">
                                <?php if ($stat_value) : ?>
                                    <span class="stat-num">
                                        <?php echo esc_html($stat_value); ?>
                                    </span>
                                <?php endif; ?>

                                <?php if ($stat_label) : ?>
                                    <span class="stat-desc">
                                        <?php echo esc_html($stat_label); ?>
                                    </span>
                                <?php endif; ?>
                            </div>
                        <?php endif; ?>

                    <?php endwhile; ?>

                </div>
            </div>
        <?php endif; ?>

        <!-- Bio Section -->
         <?php
        $display_name = get_field('display_name') ?: get_the_title();
        $first_name = explode(' ', get_the_title())[0];
        ?>

        <section class="bio-section">
            <div class="bio-inner">

                <div class="bio-body reveal">

                    <a href="<?php echo esc_url(get_post_type_archive_link('faculty')); ?>" class="bio-backlink">
                        All Teachers
                    </a>

                    <?php if (get_field('display_headline')) : ?>
                        <h2 class="section-heading" style="margin-bottom: 32px">
                            <?php echo wp_kses_post(theshala_highlight_text(get_field('display_headline'))); ?>
                        </h2>
                    <?php endif; ?>

                    <?php if (get_field('instructor_approach')) : ?>
                        <h3 class="bio-subhead">Approach</h3>
                        <p><?php echo nl2br(esc_html(get_field('instructor_approach'))); ?></p>
                    <?php endif; ?>

                    <?php if (get_field('early_years')) : ?>
                        <h3 class="bio-subhead">Early years</h3>
                        <p><?php echo nl2br(esc_html(get_field('early_years'))); ?></p>
                    <?php endif; ?>

                    <?php if (get_field('training_influences')) : ?>
                        <h3 class="bio-subhead">Training &amp; influences</h3>
                        <p><?php echo nl2br(esc_html(get_field('training_influences'))); ?></p>
                    <?php endif; ?>

                    <?php if (get_field('instructor_teaching_today')) : ?>
                        <h3 class="bio-subhead">Teaching today</h3>
                        <p><?php echo nl2br(esc_html(get_field('instructor_teaching_today'))); ?></p>
                    <?php endif; ?>

                    <?php if (get_field('quote_1_text')) : ?>
                        <blockquote class="feature-quote">
                            <?php echo esc_html(get_field('quote_1_text')); ?>

                            <?php if (get_field('quote_1_attribution')) : ?>
                                <span class="feature-quote-attr">
                                    <?php echo esc_html(get_field('quote_1_attribution')); ?>
                                </span>
                            <?php endif; ?>
                        </blockquote>
                    <?php endif; ?>

                    <?php if (get_field('quote_2_text')) : ?>
                        <blockquote class="feature-quote">
                            <?php echo esc_html(get_field('quote_2_text')); ?>

                            <?php if (get_field('quote_2_attribution')) : ?>
                                <span class="feature-quote-attr">
                                    <?php echo esc_html(get_field('quote_2_attribution')); ?>
                                </span>
                            <?php endif; ?>
                        </blockquote>
                    <?php endif; ?>

                    <?php if (get_field('instructor_specialisms')) : ?>
                        <h4 class="bio-specialisms-label">Specialisms</h4>
                        <p class="bio-specialisms">
                            <?php echo nl2br(esc_html(get_field('instructor_specialisms'))); ?>
                        </p>
                    <?php endif; ?>

                </div>

                <?php if (have_rows('training_lineage') || get_field('accreditation_logos') || have_rows('instructor_connections')) : ?>
                    <div class="bio-sidebar reveal rd2">

                        <?php if (have_rows('training_lineage') || get_field('accreditation_logos')) : ?>
                            <div class="bio-sidebar-box">
                                <h4>Training &amp; Lineage</h4>

                                <?php if (have_rows('training_lineage')) : ?>
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
                                    <div class="ryt500-logo-wrap">
                                        <?php foreach ($logos as $logo) : ?>
                                            <img
                                                src="<?php echo esc_url($logo['url']); ?>"
                                                alt="<?php echo esc_attr($logo['alt']); ?>"
                                                style="height:52px;width:auto;object-fit:contain;display:block;"
                                            >
                                        <?php endforeach; ?>
                                    </div>
                                <?php endif; ?>
                            </div>
                        <?php endif; ?>

                        <?php if (have_rows('instructor_connections')) : ?>
                            <div class="bio-sidebar-box">
                                <h4>Connect with <?php echo esc_html($first_name); ?></h4>

                                <div class="bio-social">
                                    <?php while (have_rows('instructor_connections')) : the_row(); ?>
                                        <?php
                                        $label = get_sub_field('link_label');
                                        $url = get_sub_field('link_url');
                                        ?>

                                        <?php if ($label && $url) : ?>
                                            <a href="<?php echo esc_url($url); ?>">
                                                <span></span><?php echo esc_html($label); ?>
                                            </a>
                                        <?php endif; ?>
                                    <?php endwhile; ?>
                                </div>
                            </div>
                        <?php endif; ?>

                    </div>
                <?php endif; ?>

            </div>
        </section>
        <!-- End Bio Section -->

        <!-- Courses -->
        <?php
        $featured_courses = get_field('featured_courses');
        $course_count = $featured_courses ? count($featured_courses) : 0;
        ?>

        <?php if ($course_count > 0) : ?>
            <section class="paths-section">
                <div class="paths-inner">

                    <div class="section-header-row reveal">
                        <div>
                            <h2 class="section-heading" style="margin-bottom: 0">
                                Courses
                            </h2>
                        </div>

                        <?php if ($course_count >= 4) : ?>
                            <div style="display: flex; align-items: center; gap: 16px">
                                <a
                                    href="<?php echo esc_url(get_post_type_archive_link('course')); ?>"
                                    class="see-all"
                                    style="border-bottom: none; padding-bottom: 0"
                                >
                                    More Courses
                                </a>

                                <div class="paths-arrows">
                                    <button class="paths-arrow" type="button" onclick="shiftPaths(-1)">←</button>
                                    <button class="paths-arrow" type="button" onclick="shiftPaths(1)">→</button>
                                </div>
                            </div>
                        <?php endif; ?>
                    </div>

                    <div class="<?php echo $course_count >= 4 ? 'paths-carousel-wrap' : 'paths-grid-wrap'; ?>">
                        <div
                            class="<?php echo $course_count >= 4 ? 'paths-track' : 'paths-grid'; ?>"
                            <?php echo $course_count >= 4 ? 'id="pathsTrack"' : ''; ?>
                        >

                            <?php foreach ($featured_courses as $course) : ?>
                                <?php
                                $course_id = $course->ID;

                                $short_title = get_field('short_title', $course_id);
                                $card_subtitle = get_field('card_subtitle', $course_id);
                                $course_card_image = get_field('course_card_image', $course_id);
                                $course_format = get_field('course_format', $course_id);
                                $display_date = get_field('display_date', $course_id);

                                $card_title = $short_title ?: get_the_title($course_id);
                                ?>

                                <a
                                    href="<?php echo esc_url(get_permalink($course_id)); ?>"
                                    class="pc"
                                    style="--pt: rgba(212, 0, 98, 1); text-decoration: none"
                                >
                                    <?php if ($course_card_image) : ?>
                                        <div class="bg">
                                            <img
                                                src="<?php echo esc_url($course_card_image['url']); ?>"
                                                alt="<?php echo esc_attr($course_card_image['alt']); ?>"
                                            >
                                        </div>
                                    <?php endif; ?>

                                    <div class="tint"></div>
                                    <div class="fade"></div>

                                    <div class="pccontent">

                                        <?php if ($course_format || $card_subtitle) : ?>
                                            <span class="pc-tag">
                                                <?php echo esc_html($course_format ?: $card_subtitle); ?>
                                            </span>
                                        <?php endif; ?>

                                        <div class="pc-title">
                                            <?php echo wp_kses_post(theshala_highlight_text($card_title)); ?>
                                        </div>

                                        <?php if ($display_date) : ?>
                                            <div class="pc-foot">
                                                <div class="pc-meta">
                                                    <strong><?php echo esc_html($display_date); ?></strong>
                                                </div>
                                            </div>
                                        <?php endif; ?>

                                    </div>
                                </a>

                            <?php endforeach; ?>

                        </div>
                    </div>

                </div>
            </section>
        <?php endif; ?>
        <!-- End Courses -->

        <!-- Testimonials -->
        <?php
        $testimonials = get_field('testimonials');
        $testimonial_count = $testimonials ? count($testimonials) : 0;
        $display_name = get_field('display_name') ?: get_the_title();
        ?>

        <?php if ($testimonial_count > 0) : ?>
            <section class="testi-section">
                <div class="testi-inner">

                    <div class="section-header-row reveal">
                        <div>
                            <h2 class="section-heading" style="color: white; margin-bottom: 0">
                                What <?php echo wp_kses_post(theshala_highlight_text($display_name)); ?>'s students say
                            </h2>
                        </div>

                        <?php if ($testimonial_count >= 4) : ?>
                            <div style="display: flex; align-items: center; gap: 16px">
                                <span class="testi-carousel-label">More testimonials</span>

                                <div class="testi-arrows">
                                    <button class="testi-arrow" type="button" onclick="shiftTesti(-1)">←</button>
                                    <button class="testi-arrow" type="button" onclick="shiftTesti(1)">→</button>
                                </div>
                            </div>
                        <?php endif; ?>
                    </div>

                    <div class="<?php echo $testimonial_count >= 4 ? 'testi-track-wrap' : 'testi-grid-wrap'; ?> reveal">
                        <div
                            class="<?php echo $testimonial_count >= 4 ? 'testi-track' : 'testi-grid'; ?>"
                            <?php echo $testimonial_count >= 4 ? 'id="testiTrack"' : ''; ?>
                        >

                            <?php foreach ($testimonials as $testimonial) : ?>
                                <?php
                                $quote = $testimonial['testimonial_quote'] ?? '';
                                $author = $testimonial['testimonial_author'] ?? '';
                                ?>

                                <?php if ($quote || $author) : ?>
                                    <div class="testi-card">

                                        <?php if ($quote) : ?>
                                            <p class="testi-quote">
                                                <?php echo esc_html($quote); ?>
                                            </p>
                                        <?php endif; ?>

                                        <?php if ($author) : ?>
                                            <span class="testi-name">
                                                <?php echo esc_html($author); ?>
                                            </span>
                                        <?php endif; ?>

                                    </div>
                                <?php endif; ?>

                            <?php endforeach; ?>

                        </div>
                    </div>

                </div>
            </section>
        <?php endif; ?>
        <!-- End Testimonials -->
        
        <!-- Gallery -->
        <?php
        $gallery_images = get_field('gallery_images');
        ?>

        <?php if ($gallery_images) : ?>
            <div class="image-strip">

                <?php foreach ($gallery_images as $image) : ?>

                    <div class="image-strip-item">
                       <img
                            src="<?php echo esc_url($image['url']); ?>"
                            alt="<?php echo esc_attr($image['alt'] ?: get_the_title()); ?>"
                        >
                    </div>

                <?php endforeach; ?>

            </div>
        <?php endif; ?>
        <!-- End Gallery -->

        <!-- CTAS -->
        <?php
        $display_name = get_field('display_name') ?: get_the_title();
        ?>

        <section class="cta-section">

            <h2 class="cta-title">
                Interested in training with
                <?php echo wp_kses_post(theshala_highlight_text($display_name)); ?>?
            </h2>

            <p class="cta-sub">
                Whether you're considering one of our trainings, a specialist CPD,
                or simply want to ask a question — we'd love to hear from you.
            </p>

            <div class="cta-btns">

                <a
                    href="<?php echo esc_url(get_post_type_archive_link('course')); ?>"
                    class="btn-ghost-w"
                >
                    View Courses
                </a>

                <a
                    href="/contact"
                    class="btn-ghost-w"
                >
                    Book a Call
                </a>

                <a
                    href="mailto:teachertraining@theshala.co.uk"
                    class="btn-textlink-w"
                >
                    Message Us
                </a>

            </div>

        </section>

    <?php endwhile; ?>

</main>

<?php get_footer(); ?>