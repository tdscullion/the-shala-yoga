<?php get_header(); ?>

<main id="main-content">

    <?php while (have_posts()) : the_post(); ?>

        <!-- Sticky Bar & Hero -->
        <?php
        $course_intro = get_field('course_intro');
        $short_title = get_field('short_title');
        $hero_title = get_field('course_hero_title');
        $display_date = get_field('display_date');
        $course_price = get_field('course_price');
        $course_format = get_field('course_format');
        $instructors = get_field('course_instructors');
        $studio_link = get_field('course_momence_link_studio');
        $livestream_link = get_field('course_momence_link_livestream');

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
            <div class="booking-bar-inner">
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

                    <?php if ($studio_link || $livestream_link) : ?>

                        <?php if ($studio_link) : ?>
                            <a
                                href="<?php echo esc_url($studio_link); ?>"
                                class="bar-btn bar-btn-primary"
                                target="_blank"
                                rel="noopener"
                            >
                                Book In Studio
                            </a>
                        <?php endif; ?>

                        <?php if ($livestream_link) : ?>
                            <a
                                href="<?php echo esc_url($livestream_link); ?>"
                                class="bar-btn bar-btn-primary"
                                target="_blank"
                                rel="noopener"
                            >
                                Book Livestream
                            </a>
                        <?php endif; ?>

                    <?php else : ?>

                        <a href="#express-interest" class="bar-btn bar-btn-primary">
                            Register Interest
                        </a>

                    <?php endif; ?>

                </div>
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
                        <?php echo wp_kses_post(theshala_highlight_text($hero_title)); ?>
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

                <a href="<?php echo home_url('/cpds/'); ?>" class="bio-backlink">
                    All Courses
                </a>

                <?php if ($overview_heading || $overview_content || $instructor_quote || $inclusivity_note) : ?>
                    <div class="intro-quote-block">

                        <?php if ($overview_heading) : ?>
                            <h2 class="intro-overview-heading">
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

                        <?php
                        $has_good_to_know = have_rows('good_to_know');
                        ?>

                        <?php if ($has_good_to_know) : ?>
                            <span class="bc-dates-label">Good to know</span>

                            <ul class="bc-notes">

                                <?php while (have_rows('good_to_know')) : the_row(); ?>
                                    <?php if (get_sub_field('list_item')) : ?>
                                        <li>
                                            <?php echo wp_kses_post(get_sub_field('list_item')); ?>
                                        </li>
                                    <?php endif; ?>
                                <?php endwhile; ?>
                                <li>
                                    Prefer a different payment plan? Pay your deposit and email us to arrange. Full payment must be received before the course starts.
                                </li>
                                <li>
                                    Select <strong>bank transfer (BACS)</strong> at checkout — it helps us keep
                                    course fees down by lowering card processing charges.
                                </li>

                                <li>
                                    Bursary available: one 50% bursary place is offered each year.
                                    <a href="/bursaries/">Learn more →</a>
                                </li>

                                <li>
                                    FAQs
                                    <a href="/faqs/">Learn more →</a>
                                </li>

                                <li>
                                    T&amp;Cs
                                    <a href="/terms-conditions/">Learn more →</a>
                                </li>

                            </ul>

                            <hr class="bc-sep">
                        <?php endif; ?>

                        <?php if ($studio_link || $livestream_link) : ?>

                            <?php if ($studio_link) : ?>
                                <a
                                    href="<?php echo esc_url($studio_link); ?>"
                                    class="bc-btn bc-btn-primary"
                                    target="_blank"
                                    rel="noopener"
                                >
                                    Book In Studio
                                </a>
                            <?php endif; ?>

                            <?php if ($livestream_link) : ?>
                                <a
                                    href="<?php echo esc_url($livestream_link); ?>"
                                    class="bc-btn bc-btn-ghost"
                                    target="_blank"
                                    rel="noopener"
                                >
                                    Book Livestream
                                </a>
                            <?php endif; ?>

                        <?php else : ?>

                            <a href="#express-interest" class="bc-btn bc-btn-primary">
                                Register Interest
                            </a>

                        <?php endif; ?>

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

        <?php if ($review_count > 0) : ?> 
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

        <!-- Teacher Band -->
         <?php
        $instructors = get_field('course_instructors');
        ?>

        <?php if ($instructors) : ?>
            
        <?php endif; ?>
        <!-- End Teacher Band -->

        <!-- Teacher NEW Band -->
        <?php
        $instructors = get_field('course_instructors');
        $instructor_count = is_array($instructors) ? count($instructors) : 0;
        ?>

        <?php if ($instructor_count === 1) : ?>

            <?php
            $instructor = $instructors[0];
            $instructor_id = $instructor->ID;

            $display_name = get_field('display_name', $instructor_id) ?: get_the_title($instructor_id);
            $role_title = get_field('role_title', $instructor_id);
            $short_bio = get_field('short_bio', $instructor_id);
            $main_image = get_field('main_image', $instructor_id) ?: get_field('headshot', $instructor_id);
            ?>

            <div class="teacher-band" id="section-teacher">
                <div class="teacher-band-grid">

                    <div class="teacher-band-text">
                        <h2 class="jump-anchor">Your Teacher</h2>

                        <?php foreach ($instructors as $instructor) : ?>
                            <?php
                            $instructor_id = $instructor->ID;

                            $display_name = get_field('display_name', $instructor_id) ?: get_the_title($instructor_id);
                            $role_title = get_field('role_title', $instructor_id);
                            $short_bio = get_field('short_bio', $instructor_id);
                            ?>

                            <div class="s-div">
                                <h2>
                                    Your teacher <?php echo wp_kses_post(theshala_highlight_text($display_name)); ?>
                                </h2>
                            </div>

                            <div class="teacher-profile">
                                <div class="teacher-info">

                                    <?php if ($role_title) : ?>
                                        <span class="teacher-creds">
                                            <?php echo esc_html($role_title); ?>
                                        </span>
                                    <?php endif; ?>

                                    <?php if ($short_bio) : ?>
                                        <p class="teacher-bio">
                                            <?php echo nl2br(esc_html($short_bio)); ?>
                                        </p>
                                    <?php endif; ?>

                                </div>
                            </div>

                        <?php endforeach; ?>
                    </div>

                    <?php
                    $first_instructor = $instructors[0];
                    $main_image = get_field('main_image', $first_instructor->ID);

                    if (!$main_image) {
                        $main_image = get_field('headshot', $first_instructor->ID);
                    }
                    ?>

                    <?php if ($main_image) : ?>
                        <div class="teacher-band-img">
                            <img
                                src="<?php echo esc_url($main_image['url']); ?>"
                                alt="<?php echo esc_attr($main_image['alt'] ?: get_the_title($first_instructor->ID)); ?>"
                            >
                        </div>
                    <?php endif; ?>

                </div>
            </div>

            <?php elseif ($instructor_count > 1) : ?>

                <div class="teacher-band teacher-band--multiple" id="section-teacher">
                    <div class="teacher-band-inner">
                        <div class="s-div">
                            <h2>Your <em>teachers</em></h2>
                        </div>

                        <div class="teacher-multi-grid">
                            <?php foreach ($instructors as $instructor) : ?>
                                <?php
                                $instructor_id = $instructor->ID;

                                $display_name = get_field('display_name', $instructor_id) ?: get_the_title($instructor_id);
                                $role_title = get_field('role_title', $instructor_id);
                                $short_bio = get_field('short_bio', $instructor_id);
                                $main_image = get_field('main_image', $instructor_id) ?: get_field('headshot', $instructor_id);
                                $profile_link = get_permalink($instructor_id);
                                ?>

                                <article class="teacher-multi-card">
                                    <?php if ($main_image) : ?>
                                        <div class="teacher-multi-img">
                                            <img
                                                src="<?php echo esc_url($main_image['url']); ?>"
                                                alt="<?php echo esc_attr($main_image['alt'] ?: $display_name); ?>"
                                            >
                                        </div>
                                    <?php endif; ?>

                                    <div class="teacher-multi-body">
                                        <h3 class="teacher-multi-name">
                                            <?php echo theshala_highlight_text($display_name); ?>
                                        </h3>

                                        <?php if ($role_title) : ?>
                                            <span class="teacher-multi-role">
                                                <?php echo esc_html($role_title); ?>
                                            </span>
                                        <?php endif; ?>

                                        <?php if ($short_bio) : ?>
                                            <p class="teacher-multi-bio">
                                                <?php echo nl2br(esc_html($short_bio)); ?>
                                            </p>
                                        <?php endif; ?>

                                        <a href="<?php echo esc_url($profile_link); ?>" class="teacher-multi-link">
                                            Read profile →
                                        </a>
                                    </div>
                                </article>

                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>

            <?php endif; ?>
            <!-- End NEW Teacher Band -->

        <!-- Shala Gallery -->
         <?php
        $gallery_heading = get_field('gallery_heading');
        $gallery_items = get_field('gallery_items');
        $gallery_count = $gallery_items ? count($gallery_items) : 0;
        $gallery_classes = ['g-a', 'g-b', 'g-c', 'g-d', 'g-e'];
        ?>

        <?php if ($gallery_count > 0) : ?>
            <div class="gallery-band" id="section-gallery">
                <div class="gallery-band-inner">

                    <h2 class="jump-anchor">Gallery</h2>

                    <?php if ($gallery_heading) : ?>
                        <div class="s-div">
                            <h2>
                                <?php echo wp_kses_post(theshala_highlight_text($gallery_heading)); ?>
                            </h2>
                        </div>
                    <?php endif; ?>

                    <div class="gallery-grid">

                        <?php foreach ($gallery_items as $index => $item) : ?>
                            <?php
                            if ($index >= 5) {
                                break;
                            }

                            $grid_image = $item['grid_image'] ?? null;
                            $caption = $item['caption'] ?? '';
                            $cell_class = $gallery_classes[$index] ?? '';
                            ?>

                            <?php if ($grid_image) : ?>
                                <div
                                    class="g-cell <?php echo esc_attr($cell_class); ?>"
                                    onclick="openLightbox(<?php echo esc_attr($index); ?>)"
                                >
                                    <img
                                        src="<?php echo esc_url($grid_image['url']); ?>"
                                        alt="<?php echo esc_attr($grid_image['alt'] ?: $caption); ?>"
                                    >

                                    <div class="g-tint"></div>

                                    <?php if ($caption) : ?>
                                        <div class="g-caption">
                                            <span class="g-caption-text">
                                                <?php echo esc_html($caption); ?>
                                            </span>
                                        </div>
                                    <?php endif; ?>

                                    <div class="g-overlay">
                                        <div class="g-zoom">+</div>
                                    </div>
                                </div>
                            <?php endif; ?>

                        <?php endforeach; ?>

                    </div>
                </div>
            </div>
        <?php endif; ?>
        <!-- End Shala Gallery -->

        <?php
        $gallery_lightbox_images = [];

        if ($gallery_items) {
            foreach ($gallery_items as $item) {
                $grid_image = $item['grid_image'] ?? null;
                $lightbox_image = $item['lightbox_image'] ?? null;
                $caption = $item['caption'] ?? '';

                $image = $lightbox_image ?: $grid_image;

                if ($image) {
                    $gallery_lightbox_images[] = [
                        'src' => $image['url'],
                        'alt' => $image['alt'] ?: $caption,
                    ];
                }
            }
        }
        ?>
        <?php if (!empty($gallery_lightbox_images)) : ?>
            <script>
                window.courseGalleryImgs = <?php echo wp_json_encode($gallery_lightbox_images); ?>;
            </script>

            <!-- Lightbox -->
            <div class="lightbox" id="lightbox" onclick="closeLightboxOnBg(event)">
                <button class="lightbox-close" type="button" onclick="closeLightbox()">✕</button>

                <button class="lightbox-nav lightbox-prev" type="button" onclick="shiftLightbox(-1)">
                    ←
                </button>

                <div class="lightbox-inner">
                    <img id="lightboxImg" src="" alt="">
                </div>

                <button class="lightbox-nav lightbox-next" type="button" onclick="shiftLightbox(1)">
                    →
                </button>

                <span class="lightbox-counter" id="lightboxCounter"></span>
            </div>
        <!-- End Lightbox -->
        <?php endif; ?>

        <!-- Course Details  -->
        
        <?php
        $has_course_details = have_rows('course_detail_accordions');
        $has_schedule = have_rows('schedule_items');

        $future_cohort_heading = get_field('future_cohort_heading');
        $future_cohort_intro = get_field('future_cohort_intro');
        $future_cohort_date = get_field('future_cohort_date');
        $future_cohort_delivery_type = get_field('future_cohort_delivery_type');

        $has_future_cohort = $future_cohort_date || $future_cohort_heading || $future_cohort_intro;
        ?>

        <?php if ($has_course_details || $has_schedule || $has_future_cohort) : ?>
            <div class="curriculum-dates-band">
                <div class="curriculum-dates-inner">
                    <div class="curriculum-dates-grid">

                        <?php if ($has_course_details) : ?>
                            <div class="cd-col cd-curriculum" id="section-curriculum">
                                <div class="s-div">
                                    <h2>Course <em>details</em></h2>
                                </div>

                                <div class="curriculum">
                                    <?php $accordion_index = 0; ?>

                                    <?php while (have_rows('course_detail_accordions')) : the_row(); ?>

                                        <?php
                                        $accordion_title = get_sub_field('accordion_title');
                                        $accordion_content = get_sub_field('accordion_content');

                                        $accordion_items = $accordion_content
                                            ? array_filter(array_map('trim', preg_split('/\r\n|\r|\n/', $accordion_content)))
                                            : [];

                                        $is_open = $accordion_index === 0;
                                        ?>

                                        <?php if ($accordion_title && !empty($accordion_items)) : ?>

                                            <div class="acc-item">

                                                <button
                                                    class="acc-trigger <?php echo $is_open ? 'open' : ''; ?>"
                                                    type="button"
                                                    onclick="toggleAcc(this)"
                                                >
                                                    <?php echo esc_html($accordion_title); ?>
                                                    <span class="acc-icon"></span>
                                                </button>

                                                <div class="acc-body <?php echo $is_open ? 'open' : ''; ?>">
                                                    <div class="acc-inner">
                                                        <ul>

                                                            <?php foreach ($accordion_items as $item) : ?>
                                                                <li>
                                                                    <?php echo esc_html($item); ?>
                                                                </li>
                                                            <?php endforeach; ?>

                                                        </ul>
                                                    </div>
                                                </div>

                                            </div>

                                            <?php $accordion_index++; ?>

                                        <?php endif; ?>

                                    <?php endwhile; ?>

                                </div>
                            </div>
                        <?php endif; ?>

                        <?php if ($has_schedule || $has_future_cohort) : ?>
                            <div class="cd-col cd-dates" id="section-dates">
                                <h2 class="jump-anchor">Course Dates</h2>

                                <?php if ($has_schedule) : ?>
                                    <div class="s-div">
                                        <h2>Course dates <em>&amp; schedule</em></h2>
                                    </div>

                                    <div class="schedule">
                                        <?php while (have_rows('schedule_items')) : the_row(); ?>
                                            <?php
                                            $schedule_date = get_sub_field('schedule_date');
                                            $schedule_label = get_sub_field('schedule_label');
                                            $schedule_time = get_sub_field('schedule_time');
                                            $schedule_delivery_type = get_sub_field('schedule_delivery_type');
                                            $schedule_description = get_sub_field('schedule_description');

                                            $date_day = '';
                                            $date_month = '';

                                            if ($schedule_date) {
                                                $timestamp = strtotime($schedule_date);
                                                $date_day = date_i18n('j', $timestamp);
                                                $date_month = date_i18n('l · M', $timestamp);
                                            }

                                            $pill_class = strtolower($schedule_delivery_type) === 'in studio' ? 'pill-studio' : 'pill-live';
                                            ?>

                                            <?php if ($schedule_date || $schedule_label || $schedule_time || $schedule_delivery_type || $schedule_description) : ?>
                                                <div class="sched-day">
                                                    <div class="sched-left">
                                                        <?php if ($date_day) : ?>
                                                            <span class="sched-date">
                                                                <?php echo esc_html($date_day); ?>
                                                            </span>
                                                        <?php endif; ?>

                                                        <?php if ($date_month) : ?>
                                                            <span class="sched-dow">
                                                                <?php echo esc_html($date_month); ?>
                                                            </span>
                                                        <?php endif; ?>
                                                    </div>

                                                    <div class="sched-right">
                                                        <?php if ($schedule_label || $schedule_time || $schedule_delivery_type) : ?>
                                                            <span class="sched-label">
                                                                <?php echo esc_html($schedule_label); ?>

                                                                <?php if ($schedule_time) : ?>
                                                                    <span class="sched-time-inline">
                                                                        <?php echo esc_html($schedule_time); ?>
                                                                    </span>
                                                                <?php endif; ?>

                                                                <?php if ($schedule_delivery_type) : ?>
                                                                    <span class="sched-type-pill <?php echo esc_attr($pill_class); ?>">
                                                                        <?php echo esc_html($schedule_delivery_type); ?>
                                                                    </span>
                                                                <?php endif; ?>
                                                            </span>
                                                        <?php endif; ?>

                                                        <?php if ($schedule_description) : ?>
                                                            <div class="sched-detail">
                                                                <?php echo esc_html($schedule_description); ?>
                                                            </div>
                                                        <?php endif; ?>
                                                    </div>
                                                </div>
                                            <?php endif; ?>

                                        <?php endwhile; ?>
                                    </div>
                                <?php endif; ?>

                                <?php if ($has_future_cohort) : ?>
                                    <div class="future-dates">
                                        <span class="future-dates-eyebrow">
                                            Future Cohort
                                        </span>

                                        <?php if ($future_cohort_heading) : ?>
                                            <h3 class="future-dates-heading">
                                                <?php echo wp_kses_post(theshala_highlight_text($future_cohort_heading)); ?>
                                            </h3>
                                        <?php endif; ?>

                                        <?php if ($future_cohort_intro) : ?>
                                            <p class="future-dates-note">
                                                <?php echo nl2br(esc_html($future_cohort_intro)); ?>
                                            </p>
                                        <?php endif; ?>

                                        <?php if ($future_cohort_date || $future_cohort_delivery_type) : ?>
                                            <div class="future-run">
                                                <?php if ($future_cohort_date) : ?>
                                                    <span class="future-run-dates">
                                                        <?php echo esc_html($future_cohort_date); ?>
                                                    </span>
                                                <?php endif; ?>

                                                <?php if ($future_cohort_delivery_type) : ?>
                                                    <span class="future-run-label">
                                                        <?php echo esc_html($future_cohort_delivery_type); ?>
                                                    </span>
                                                <?php endif; ?>
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                <?php endif; ?>

                            </div>
                        <?php endif; ?>

                    </div>
                </div>
            </div>
        <?php endif; ?>
        <!-- End Course Details   -->

        <!-- Suggested Courses -->
        <?php
        $suggested_courses = get_field('suggested_courses');
        $suggested_count = $suggested_courses ? count($suggested_courses) : 0;
        ?>

        <?php if ($suggested_count > 0) : ?>
            <div class="related">
                <div class="related-inner">

                    <div class="related-head-row">
                        <div class="related-head">
                            <h2 class="related-head-title">
                                You might also <em>like</em>
                            </h2>
                        </div>

                        <?php if ($suggested_count > 3) : ?>
                            <div class="related-arrows">
                                <button class="related-arrow" type="button" onclick="shiftRelated(-1)" aria-label="Previous">
                                    ←
                                </button>

                                <button class="related-arrow" type="button" onclick="shiftRelated(1)" aria-label="Next">
                                    →
                                </button>
                            </div>
                        <?php endif; ?>
                    </div>

                    <div class="related-grid" id="relatedGrid">

                        <?php foreach ($suggested_courses as $course) : ?>
                            <?php
                            $course_id = $course->ID;

                            $short_title = get_field('short_title', $course_id) ?: get_the_title($course_id);
                            $card_subtitle = get_field('card_subtitle', $course_id);
                            $course_format = get_field('course_format', $course_id);
                            $display_date = get_field('display_date', $course_id);
                            $course_price = get_field('course_price', $course_id);
                            $course_card_image = get_field('course_card_image', $course_id);

                            $tag = $course_format ?: $card_subtitle;
                            ?>

                            <a
                                href="<?php echo esc_url(get_permalink($course_id)); ?>"
                                class="rc"
                                style="--rt: rgba(75, 58, 67, 1); text-decoration:none;"
                            >
                                <?php if ($course_card_image) : ?>
                                    <div class="bg">
                                        <img
                                            src="<?php echo esc_url($course_card_image['url']); ?>"
                                            alt="<?php echo esc_attr($course_card_image['alt'] ?: $short_title); ?>"
                                        >
                                    </div>
                                <?php endif; ?>

                                <div class="tint"></div>
                                <div class="fade"></div>

                                <div class="rcontent">

                                    <?php if ($tag) : ?>
                                        <span class="rc-tag">
                                            <?php echo esc_html($tag); ?>
                                        </span>
                                    <?php endif; ?>

                                    <div class="rc-title">
                                        <?php echo wp_kses_post(theshala_highlight_text($short_title)); ?>
                                    </div>

                                    <?php if ($display_date || $course_price) : ?>
                                        <div class="rc-foot">
                                            <?php if ($display_date) : ?>
                                                <div class="rc-date">
                                                    <strong><?php echo esc_html($display_date); ?></strong>
                                                </div>
                                            <?php endif; ?>

                                            <?php if ($course_price) : ?>
                                                <div class="rc-price">
                                                    <?php echo esc_html($course_price); ?>
                                                </div>
                                            <?php endif; ?>
                                        </div>
                                    <?php endif; ?>

                                </div>
                            </a>

                        <?php endforeach; ?>

                    </div>
                </div>
            </div>
        <?php endif; ?>
        <!-- Suggested Courses End -->

       <!-- EXPRESS INTEREST -->
        <div class="interest-section" id="express-interest">
            <div class="interest-inner">

                <div class="interest-copy">
                    <h2 class="interest-heading">
                        Interested in this <em>course?</em>
                    </h2>

                    <p class="interest-body">
                        Not ready to book yet — or want to hear about future dates?
                        Register your interest and we'll be in touch with everything you
                        need to know, including when new dates are announced.
                    </p>

                    <p class="interest-reassure">
                        No commitment required · No spam, ever · Priority notification of new dates
                    </p>
                </div>

                <div class="interest-form">
                    <div class="interest-form-card">

                        <?php
                        $momence_form_code = get_field('momence_form_code');

                        if ($momence_form_code) :
                            echo $momence_form_code;
                        else :
                        ?>

                            <p class="int-note">
                                No interest form has been added for this course yet.
                            </p>

                            <a
                                href="mailto:teachertraining@theshala.co.uk?subject=Course%20Enquiry"
                                class="int-submit"
                            >
                                Email Us →
                            </a>

                        <?php endif; ?>

                    </div>
                </div>

            </div>
        </div>
        <!-- END EXPRESS INTEREST -->

    <?php endwhile; ?>

</main>

<?php get_footer(); ?>