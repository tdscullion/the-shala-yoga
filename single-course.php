<?php get_header(); ?>

<main id="main-content">

    <?php while (have_posts()) : the_post(); ?>

        <!-- Sticky Bar & Hero -->
        <?php
        $course_intro = get_field('course_intro');
        $short_title = get_field('short_title') ?: get_the_title();
        $display_date = get_field('display_date');
        $course_price = get_field('course_price');
        $course_format = get_field('course_format');
        $instructors = get_field('course_instructors');

        $instructor_names = [];

        if ($instructors) {
            foreach ($instructors as $instructor) {
                $instructor_display_name = get_field('display_name', $instructor->ID) ?: get_the_title($instructor->ID);
                $instructor_names[] = wp_strip_all_tags(str_replace(['{{', '}}'], '', $instructor_display_name));
            }
        }

        $instructor_list = implode(', ', $instructor_names);
        ?>

        <div class="booking-bar" id="bookingBar">
            <div class="bar-left">
                <span class="bar-title">
                    <?php echo esc_html($short_title); ?>
                </span>

                <?php if ($instructor_list || $display_date || $course_price) : ?>
                    <span class="bar-meta">
                        <?php echo esc_html(implode(' · ', array_filter([
                            $instructor_list,
                            $display_date,
                            $course_price,
                        ]))); ?>
                    </span>
                <?php endif; ?>

                <?php if ($course_format) : ?>
                    <span class="bar-format">
                        <?php echo esc_html($course_format); ?>
                    </span>
                <?php endif; ?>
            </div>

            <div class="bar-btns">
                <a href="#express-interest" class="bar-btn bar-btn-primary">
                    Register Interest
                </a>
            </div>
        </div>

        <section class="hero-course" id="top">
            <div class="hero-course-inner">
                <img
                    class="hero-standard-spiral"
                    src="<?php echo esc_url(get_template_directory_uri() . '/assets/spirals/spiral-4-cropped.png'); ?>"
                    alt=""
                    aria-hidden="true"
                >

                <div class="hero-course-content">
                    <h1 class="hero-course-title">
                        <?php echo wp_kses_post(theshala_highlight_text($short_title)); ?>
                    </h1>

                    <?php if ($instructor_list) : ?>
                        <span class="hero-course-with">
                            with <?php echo esc_html($instructor_list); ?>
                        </span>
                    <?php endif; ?>

                    <?php if ($course_intro) : ?>
                        <p class="hero-course-bio">
                            <?php echo esc_html($course_intro); ?>
                        </p>
                    <?php endif; ?>
                </div>
            </div>
        </section>
        <!-- End Sticky Bar & Hero -->

        <!-- Course Main Content -->
         <?php
        $overview_heading = get_field('overview_heading');
        $overview_content = get_field('course_overview_content');
        $instructor_quote = get_field('instructor_quote');
        $inclusivity_note = get_field('inclusivity_note');

        $course_price = get_field('course_price');
        $course_duration = get_field('course_duration');
        $course_format = get_field('course_format');
        $logos = get_field('accreditation_logos');

        $future_cohort_date = get_field('future_cohort_date');
        $future_cohort_delivery_type = get_field('future_cohort_delivery_type');
        ?>

        <div class="body-wrap" id="section-overview">
            <h2 class="jump-anchor">Overview</h2>

            <div class="main-col">

                <a href="<?php echo esc_url(get_post_type_archive_link('course')); ?>" class="bio-backlink">
                    All Courses
                </a>

                <?php if ($overview_heading || $overview_content || $instructor_quote || $inclusivity_note) : ?>
                    <div class="intro-quote-block">

                        <?php if ($overview_heading) : ?>
                            <h2 class="intro-quote-heading">
                                <?php echo wp_kses_post(theshala_highlight_text($overview_heading)); ?>
                            </h2>
                        <?php endif; ?>

                        <?php if ($overview_content) : ?>
                            <p class="intro-body">
                                <?php echo nl2br(esc_html($overview_content)); ?>
                            </p>
                        <?php endif; ?>

                        <?php if ($instructor_quote) : ?>
                            <p class="inline-quote">
                                <?php echo esc_html($instructor_quote); ?>
                            </p>
                        <?php endif; ?>

                        <?php if ($inclusivity_note) : ?>
                            <p class="intro-note intro-note--plain">
                                <?php echo nl2br(esc_html($inclusivity_note)); ?>
                            </p>
                        <?php endif; ?>

                    </div>
                <?php endif; ?>

                <?php if (have_rows('who_is_this_course_for') || have_rows('whats_included')) : ?>
                    <div class="suitability-grid">

                        <?php if (have_rows('who_is_this_course_for')) : ?>
                            <div class="suitability">
                                <h3 class="suitability-heading">
                                    <em>Who</em> is this course for?
                                </h3>

                                <div class="suitability-pills">
                                    <?php while (have_rows('who_is_this_course_for')) : the_row(); ?>
                                        <?php if (get_sub_field('list_item')) : ?>
                                            <span class="s-pill">
                                                <?php echo esc_html(get_sub_field('list_item')); ?>
                                            </span>
                                        <?php endif; ?>
                                    <?php endwhile; ?>
                                </div>
                            </div>
                        <?php endif; ?>

                        <?php if (have_rows('whats_included')) : ?>
                            <div class="suitability">
                                <h3 class="suitability-heading">
                                    <em>What's</em> included?
                                </h3>

                                <div class="suitability-pills">
                                    <?php while (have_rows('whats_included')) : the_row(); ?>
                                        <?php if (get_sub_field('list_item')) : ?>
                                            <span class="s-pill">
                                                <?php echo esc_html(get_sub_field('list_item')); ?>
                                            </span>
                                        <?php endif; ?>
                                    <?php endwhile; ?>
                                </div>
                            </div>
                        <?php endif; ?>

                    </div>
                <?php endif; ?>

            </div>

            <div class="side-col">
                <div class="booking-card">

                    <?php if ($course_price || $logos) : ?>
                        <div class="booking-card-header">

                            <?php if ($course_price) : ?>
                                <div class="bc-price">
                                    <?php echo esc_html($course_price); ?>
                                </div>
                            <?php endif; ?>

                            <?php if ($logos) : ?>
                                <div class="bc-badges">
                                    <?php foreach ($logos as $logo) : ?>
                                        <img
                                            src="<?php echo esc_url($logo['url']); ?>"
                                            alt="<?php echo esc_attr($logo['alt']); ?>"
                                        >
                                    <?php endforeach; ?>
                                </div>
                            <?php endif; ?>

                        </div>
                    <?php endif; ?>

                    <div class="booking-card-body">

                        <?php if ($course_duration || $course_format) : ?>
                            <div class="bc-meta-strip">

                                <?php if ($course_duration) : ?>
                                    <div class="bc-meta-item">
                                        <span class="bc-meta-label">Hours</span>
                                        <span class="bc-meta-value">
                                            <?php echo esc_html($course_duration); ?>
                                        </span>
                                    </div>
                                <?php endif; ?>

                                <?php if ($course_format) : ?>
                                    <div class="bc-meta-item">
                                        <span class="bc-meta-label">Format</span>
                                        <span class="bc-meta-value">
                                            <?php echo esc_html($course_format); ?>
                                        </span>
                                    </div>
                                <?php endif; ?>

                            </div>

                            <hr class="bc-sep bc-sep--mb">
                        <?php endif; ?>

                        <?php if (have_rows('course_dates')) : ?>
                            <span class="bc-dates-label">Course Dates</span>

                            <?php while (have_rows('course_dates')) : the_row(); ?>
                                <?php
                                $date = get_sub_field('date');
                                $label = get_sub_field('label');
                                $time = get_sub_field('time');
                                $delivery_type = get_sub_field('delivery_type');

                                $pill_class = strtolower($delivery_type) === 'in studio' ? 'pill-studio' : 'pill-live';
                                ?>

                                <?php if ($date || $label || $time || $delivery_type) : ?>
                                    <div class="bc-date-row">
                                        <div>
                                            <?php if ($date) : ?>
                                                <div class="bc-date-name">
                                                    <?php echo esc_html($date); ?>
                                                </div>
                                            <?php endif; ?>

                                            <?php if ($label) : ?>
                                                <span class="bc-date-time">
                                                    <?php echo esc_html($label); ?>
                                                </span>
                                            <?php endif; ?>

                                            <?php if ($time) : ?>
                                                <span class="bc-date-time">
                                                    <?php echo esc_html($time); ?>
                                                </span>
                                            <?php endif; ?>
                                        </div>

                                        <?php if ($delivery_type) : ?>
                                            <span class="bc-date-type <?php echo esc_attr($pill_class); ?>">
                                                <?php echo esc_html($delivery_type); ?>
                                            </span>
                                        <?php endif; ?>
                                    </div>
                                <?php endif; ?>

                            <?php endwhile; ?>

                            <hr class="bc-sep">
                        <?php endif; ?>

                        <?php if (have_rows('good_to_know')) : ?>
                            <span class="bc-dates-label">Good to know</span>

                            <ul class="bc-notes">
                                <?php while (have_rows('good_to_know')) : the_row(); ?>
                                    <?php if (get_sub_field('list_item')) : ?>
                                        <li><?php echo wp_kses_post(get_sub_field('list_item')); ?></li>
                                    <?php endif; ?>
                                <?php endwhile; ?>
                            </ul>

                            <hr class="bc-sep">
                        <?php endif; ?>

                        <a href="#express-interest" class="bc-btn bc-btn-primary">
                            Register Interest
                        </a>

                        <a href="#section-dates" class="bc-btn bc-btn-ghost">
                            View Dates
                        </a>

                        <?php if ($future_cohort_date) : ?>
                            <p class="bc-next-run">
                                Can't make these dates?<br>
                                Next cohort:
                                <strong><?php echo esc_html($future_cohort_date); ?></strong>

                                <?php if ($future_cohort_delivery_type) : ?>
                                    · <?php echo esc_html($future_cohort_delivery_type); ?>
                                <?php endif; ?>

                                · <a href="#section-dates">See all dates</a>
                            </p>
                        <?php endif; ?>

                    </div>
                </div>
            </div>
        </div>
        <!-- End Course Main Content -->

        <!-- Outcomes -->
        <?php
        $outcomes_heading = get_field('outcomes_heading');
        ?>

        <?php if ($outcomes_heading || have_rows('course_outcomes')) : ?>
            <div class="lower-wrap">

                <?php if ($outcomes_heading) : ?>
                    <div class="s-div">
                        <h2>
                            <?php echo wp_kses_post(theshala_highlight_text($outcomes_heading)); ?>
                        </h2>
                    </div>
                <?php endif; ?>

                <?php if (have_rows('course_outcomes')) : ?>
                    <div class="aims-grid">

                        <?php $outcome_index = 1; ?>

                        <?php while (have_rows('course_outcomes')) : the_row(); ?>
                            <?php $outcome_text = get_sub_field('outcome_text'); ?>

                            <?php if ($outcome_text) : ?>
                                <div class="aim-item" data-n="<?php echo esc_attr(str_pad($outcome_index, 2, '0', STR_PAD_LEFT)); ?>">
                                    <span class="aim-num">
                                        <?php echo esc_html(str_pad($outcome_index, 2, '0', STR_PAD_LEFT)); ?>
                                    </span>

                                    <p class="aim-text">
                                        <?php echo esc_html($outcome_text); ?>
                                    </p>
                                </div>
                            <?php endif; ?>

                            <?php $outcome_index++; ?>
                        <?php endwhile; ?>

                    </div>
                <?php endif; ?>

            </div>
        <?php endif; ?>
        <!-- End Outcomes -->
        
        <!-- Testimonials -->
        <?php
        $reviews_heading = get_field('reviews_heading');
        $featured_review_quote = get_field('featured_review_quote');
        $featured_review_author = get_field('featured_review_author');
        $review_cards = get_field('review_cards');
        $review_count = $review_cards ? count($review_cards) : 0;
        ?>

        <?php if ($reviews_heading || $featured_review_quote || $review_count > 0) : ?>
            <div class="testimonials-section" id="section-testimonials">
                <div class="testimonials-inner">

                    <h2 class="jump-anchor">What Our Students Say</h2>

                    <?php if ($reviews_heading) : ?>
                        <div class="s-div">
                            <h2><?php echo wp_kses_post(theshala_highlight_text($reviews_heading)); ?></h2>
                        </div>
                    <?php endif; ?>

                    <?php if ($featured_review_quote) : ?>
                        <div class="testi-featured">
                            <div class="testi-featured-left">
                                <p class="testi-featured-quote">
                                    <?php echo esc_html($featured_review_quote); ?>
                                </p>

                                <?php if ($featured_review_author) : ?>
                                    <span class="testi-featured-name">
                                        <?php echo esc_html($featured_review_author); ?>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>
                    <?php endif; ?>

                    <?php if ($review_count > 0) : ?>

                        <?php if ($review_count >= 4) : ?>
                            <div class="testi-carousel-head">
                                <div class="testi-carousel-controls">
                                    <span class="testi-carousel-label">More testimonials</span>

                                    <div class="testi-arrows">
                                        <button class="testi-arrow" type="button" onclick="shiftTesti(-1)">←</button>
                                        <button class="testi-arrow" type="button" onclick="shiftTesti(1)">→</button>
                                    </div>
                                </div>
                            </div>
                        <?php endif; ?>

                        <div class="<?php echo $review_count >= 4 ? 'testi-track-wrap' : 'testi-grid-wrap'; ?>">
                            <div
                                class="<?php echo $review_count >= 4 ? 'testi-track' : 'testi-grid'; ?>"
                                <?php echo $review_count >= 4 ? 'id="testiTrack"' : ''; ?>
                            >

                                <?php foreach ($review_cards as $review) : ?>
                                    <?php
                                    $quote = $review['review_quote'] ?? '';
                                    $author = $review['review_author'] ?? '';
                                    ?>

                                    <?php if ($quote || $author) : ?>
                                        <div class="testi-card">
                                            <p class="testi-quote">
                                                <?php echo esc_html($quote); ?>
                                            </p>

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
                    <?php endif; ?>

                </div>
            </div>
        <?php endif; ?>
        <!-- End Testimonials-->

        <!-- Mantras -->
        <?php
        $mantras = get_field('mantra_items');
        $mantra_count = $mantras ? count($mantras) : 0;
        ?>

        <?php if ($mantra_count > 0) : ?>
            <div class="mantra-strip">
                <div class="mantra-strip-inner">

                    <?php foreach ($mantras as $index => $mantra) : ?>
                        <?php $mantra_text = $mantra['mantra_text'] ?? ''; ?>

                        <?php if ($mantra_text) : ?>
                            <div class="word-strip-item">
                                <span class="ws-verb">
                                    <?php echo wp_kses_post(theshala_highlight_text($mantra_text)); ?>
                                </span>
                            </div>

                            <?php if ($index < $mantra_count - 1) : ?>
                                <span class="word-strip-sep">·</span>
                            <?php endif; ?>
                        <?php endif; ?>

                    <?php endforeach; ?>

                </div>
            </div>
        <?php endif; ?>
        <!-- End Mantras-->


       

    <?php endwhile; ?>

</main>

<?php get_footer(); ?>