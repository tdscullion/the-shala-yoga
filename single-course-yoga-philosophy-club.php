<?php

get_header();
?>

<?php while (have_posts()) : the_post(); ?>

<?php
$course_intro     = get_field('course_intro');
$short_title      = get_field('short_title');
$hero_title       = get_field('course_hero_title');
$display_date     = get_field('display_date');
$course_price     = get_field('course_price');
$course_format    = get_field('course_format');
$instructors      = get_field('course_instructors');
$studio_link      = get_field('course_momence_link_studio');
$livestream_link  = get_field('course_momence_link_livestream');

$instructor_names = [];

if ($instructors) {
    foreach ($instructors as $instructor) {
        $display_name = get_field('display_name', $instructor->ID) ?: get_the_title($instructor->ID);
        $instructor_names[] = wp_strip_all_tags(str_replace(['{{', '}}'], '', $display_name));
    }
}

$instructor_list = implode(', ', $instructor_names);
?>

<main id="course-philosophy-page">
  <!-- STICKY BOOKING BAR (appears on scroll) -->
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
  <!-- HERO -->
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
  <!-- ═══════════════════════════════════════════════════════
     BODY WRAP — two columns: main content + sticky sidebar
═══════════════════════════════════════════════════════ -->
  <div class="body-wrap" id="section-overview">
    <h2 class="jump-anchor">
      Overview
    </h2>
    <!-- MAIN COLUMN -->
    <div class="main-col">
      <!-- DEVELOPER NOTE: link to the courses index / filter page -->
      <a class="bio-backlink" href="#">
        All Courses
      </a>
      <!-- Intro: quote + body inline -->
      <div class="intro-quote-block">
        <h2 class="intro-overview-heading">
          A supportive space to explore yogic
          <em>
            wisdom
          </em>
        </h2>
        <p class="intro-body">
          Yoga philosophy offers an invaluable framework for living with greater clarity, connection and wisdom. This monthly online gathering is a supportive space to explore yogic insights in dialogue &mdash; a place for teachers and practitioners of yoga to reflect together on how ancient wisdom can support modern lives.
        </p>
        <p class="intro-body">
          Sessions are facilitated by Daniel Simpson, whose blend of scholarly knowledge and light-hearted humour makes timeless teachings accessible and relevant. Each session is structured around a core theme, introduced by a presentation providing context, followed by reflection, questions and lively open discussion.
        </p>
        <p class="intro-pull-quote">
          Yoga philosophy offers a framework for living with greater clarity, connection and wisdom
          <span class="intro-attr-inline">
            Daniel Simpson
          </span>
        </p>
      </div>
      <!-- Who it's for — sub-heading within intro -->
      <div class="suitability suitability--compact">
        <h3 class="suitability-heading">
          <em>
            Who
          </em>
          is this course for?
        </h3>
        <div class="suitability-pills">
          <span class="s-pill">
            Yoga Teachers
          </span>
          <span class="s-pill">
            Yoga Practitioners
          </span>
          <span class="s-pill">
            300-hour Trainees
          </span>
          <span class="s-pill">
            Students of Philosophy
          </span>
          <span class="s-pill">
            Anyone Curious About Yogic Wisdom
          </span>
          <span class="s-pill">
            Teachers Seeking CPD Hours
          </span>
        </div>
      </div>
    </div>
    <!-- END MAIN COL -->
    <!-- SIDEBAR -->
    <div class="side-col">
      <div class="booking-card">
        <div class="booking-card-header">
          <div class="bc-price">
            &pound;135
          </div>
          <span class="bc-deposit">
            for 5 sessions &middot; &pound;30 single drop-in
          </span>
          <div class="bc-badges">
            <img alt="RYS 300" src="https://www.theshalalondon.com/wp-content/uploads/2025/10/RYS300-LOGO-150x150.png" />
            <img alt="YACEP" src="https://www.theshalalondon.com/wp-content/uploads/2025/10/YACEP-LOGO-150x150.png" />
          </div>
        </div>
        <div class="booking-card-body">
          <!-- Course meta strip -->
          <div class="bc-meta-strip">
            <div class="bc-meta-item">
              <span class="bc-meta-label">
                Hours
              </span>
              <span class="bc-meta-value">
                2 hrs
              </span>
              <span class="bc-meta-sub">
                per session
              </span>
            </div>
            <div class="bc-meta-item">
              <span class="bc-meta-label">
                Format
              </span>
              <span class="bc-meta-value">
                Livestream
              </span>
              <span class="bc-meta-sub">
                recording available 4 weeks
              </span>
            </div>
          </div>
          <hr class="bc-sep--tight bc-sep" />
          <span class="bc-dates-label">
            Next Sessions &middot; 7&ndash;9pm
          </span>
          <div class="bc-date-row">
            <div>
              <div class="bc-date-name">
                24 March 2026
              </div>
              <span class="bc-date-time">
                What Makes Life Meaningful
              </span>
            </div>
            <span class="bc-date-type pill-live">
              Livestream
            </span>
          </div>
          <div class="bc-date-row">
            <div>
              <div class="bc-date-name">
                6 May 2026
              </div>
              <span class="bc-date-time">
                Is Yoga Political?
              </span>
            </div>
            <span class="bc-date-type pill-live">
              Livestream
            </span>
          </div>
          <div class="bc-date-row">
            <div>
              <div class="bc-date-name">
                8 June 2026
              </div>
              <span class="bc-date-time">
                Rethinking Authenticity
              </span>
            </div>
            <span class="bc-date-type pill-live">
              Livestream
            </span>
          </div>
          <hr class="bc-sep" />
          <span class="bc-dates-label">
            Good to know
          </span>
          <ul class="bc-notes">
            <li>
              Attend any session as a standalone, or build a pathway through the year.
            </li>
            <li>
              Five sessions over 12 months = discounted rate + a certificate of attendance.
            </li>
            <li>
              Hours count towards 300-hour certification or CPD hours.
            </li>
            <li>
              Take the 5-session pass for five discounted sessions (valid 12 months), or book sessions individually at &pound;30 each.
            </li>
            <li>
              Sessions are recorded &mdash; catch up on demand for up to four weeks after.
            </li>
            <li>
              Select
              <strong>
                bank transfer (BACS)
              </strong>
              at checkout &mdash; it helps us keep course fees down by lowering card processing charges.
            </li>
            <li>
              300-hour students: 10% discount if you've booked 3 trainings (&pound;395+) including one core module. Email us for the discount code.
            </li>
          </ul>
          <hr class="bc-sep" />
          <a class="bc-btn bc-btn-primary" href="https://momence.com/m/445230">
            Book 5-Session Pass
          </a>
          <a class="bc-btn bc-btn-ghost" href="#section-topics">
            See All Topics
          </a>
          <a class="bc-interest" href="#express-interest">
            Register Interest Only &rarr;
          </a>
        </div>
      </div>
    </div>
    <!-- END SIDEBAR -->
  </div>
  <!-- END BODY WRAP -->
  <!-- ════════════════════════════════════════════════════════
     OUTCOMES — constrained width
════════════════════════════════════════════════════════ -->
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
  <!-- ════════════════════════════════════════════════════════
     TESTIMONIALS — full-width band
════════════════════════════════════════════════════════ -->
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

            <?php if ($review_count >= 4) : ?>
                <div class="testi-carousel-head testi-carousel-head--end">
                    <div class="testi-carousel-control-row">
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
    </div>
<?php endif; ?>
<!-- End Testimonials -->
  <!-- ════════════════════════════════════════════════════════
     MANTRA STRIP — course-specific phrases
════════════════════════════════════════════════════════ -->
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
<!-- End Mantras -->
  <!-- ════════════════════════════════════════════════════════
     YOUR TEACHER — full-width band
════════════════════════════════════════════════════════ -->
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
            </div>

            <?php if ($main_image) : ?>
                <div class="teacher-band-img">
                    <img
                        src="<?php echo esc_url($main_image['url']); ?>"
                        alt="<?php echo esc_attr($main_image['alt'] ?: $display_name); ?>"
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
                                <?php echo wp_kses_post(theshala_highlight_text($display_name)); ?>
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
  <!-- ════════════════════════════════════════════════════════
     TOPICS — 8 philosophy threads (replaces curriculum+dates band)
════════════════════════════════════════════════════════ -->
<!-- TOPICS / SESSION CARDS -->
<div class="topics-band">
    <div class="topics-inner">
        <h2 class="jump-anchor" id="section-topics">Topics</h2>

        <div class="s-div">
            <h2>
                Eight threads of
                <em>enquiry</em>
            </h2>
        </div>

        <p class="topics-intro">
            Each session stands alone &mdash;
            <strong>book individually at &pound;30</strong>,
            or take the 5-session pass and let the themes build on each other.
            Sessions run roughly monthly; dates below are confirmed as they approach.
        </p>

        <?php if (have_rows('session_cards')) : ?>
            <div class="topics-grid">

                <?php while (have_rows('session_cards')) : the_row(); ?>
                    <?php
                    $date_display = get_sub_field('session_date_display');
                    $date_sort = get_sub_field('session_date_sort');
                    $title = get_sub_field('session_title');
                    $description = get_sub_field('session_description');
                    $button_link = get_sub_field('session_button_link');

                    $current_date = current_time('Ymd');

                    if ($date_sort && $date_sort < $current_date) {
                        continue;
                    }
                    ?>

                    <div class="topic-card">

                        <?php if ($date_display) : ?>
                            <span class="topic-date">
                                <?php echo esc_html($date_display); ?>
                            </span>
                        <?php endif; ?>

                        <?php if ($title) : ?>
                            <h3 class="topic-title">
                                <?php echo wp_kses_post(theshala_highlight_text($title)); ?>
                            </h3>
                        <?php endif; ?>

                        <?php if ($description) : ?>
                            <p class="topic-blurb">
                                <?php echo esc_html($description); ?>
                            </p>
                        <?php endif; ?>

                        <?php if (have_rows('session_questions')) : ?>
                            <ul class="topic-questions">
                                <?php while (have_rows('session_questions')) : the_row(); ?>
                                    <?php if (get_sub_field('question')) : ?>
                                        <li>
                                            <?php echo esc_html(get_sub_field('question')); ?>
                                        </li>
                                    <?php endif; ?>
                                <?php endwhile; ?>
                            </ul>
                        <?php endif; ?>

                        <?php if ($button_link) : ?>
                            <a
                                href="<?php echo esc_url($button_link); ?>"
                                class="topic-book"
                                target="_blank"
                                rel="noopener"
                            >
                                Book
                            </a>
                        <?php endif; ?>

                    </div>

                <?php endwhile; ?>

            </div>
        <?php endif; ?>
    </div>
</div>
<!-- END TOPICS / SESSION CARDS -->
 <!-- RELATED COURSES -->
<?php
$suggested_courses = get_field('suggested_courses');
$suggested_count = $suggested_courses ? count($suggested_courses) : 0;

$card_tints = [
    'rgba(75, 58, 67, 0.85)',
    'rgba(171, 102, 127, 0.85)',
    'rgba(166, 113, 75, 0.85)',
];
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
            </div>

            <div class="related-grid" id="relatedGrid">

                <?php foreach ($suggested_courses as $index => $course) : ?>
                    <?php
                    $course_id = $course->ID;
                    $tint = $card_tints[$index] ?? $card_tints[0];

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
                        style="--rt: <?php echo esc_attr($tint); ?>; text-decoration:none;"
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
<!-- End Suggested Courses -->
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
  <!-- UTILITY STRIP -->
  <div class="utility-strip">
    <div class="utility-inner">
      <div class="utility-left">
        <a class="util-link" href="https://www.theshalalondon.com/terms-conditions/" target="_blank">
          <svg fill="none" height="12" viewbox="0 0 12 12" width="12">
            <rect height="10" rx="1" stroke="currentColor" stroke-width="1.2" width="10" x="1" y="1">
            </rect>
            <line stroke="currentColor" stroke-width="1.2" x1="3.5" x2="8.5" y1="4" y2="4">
            </line>
            <line stroke="currentColor" stroke-width="1.2" x1="3.5" x2="8.5" y1="6" y2="6">
            </line>
            <line stroke="currentColor" stroke-width="1.2" x1="3.5" x2="6.5" y1="8" y2="8">
            </line>
          </svg>
          Terms &amp; Conditions
        </a>
        <div class="util-sep">
        </div>
        <a class="util-link" href="https://www.theshalalondon.com/faqs/#faq-modules" target="_blank">
          <svg fill="none" height="12" viewbox="0 0 12 12" width="12">
            <circle cx="6" cy="6" r="5" stroke="currentColor" stroke-width="1.2">
            </circle>
            <path d="M4.5 4.5C4.5 3.67 5.17 3 6 3s1.5.67 1.5 1.5c0 1-1.5 1.25-1.5 2" stroke="currentColor" stroke-linecap="round" stroke-width="1.2">
            </path>
            <circle cx="6" cy="9" fill="currentColor" r="0.6">
            </circle>
          </svg>
          Course FAQs
        </a>
        <div class="util-sep">
        </div>
        <a class="util-link" href="https://www.theshalalondon.com/faqs/#faq-modules" target="_blank">
          <svg fill="none" height="12" viewbox="0 0 12 12" width="12">
            <path d="M6 1.5l1.4 2.83 3.13.46-2.27 2.21.54 3.12L6 8.65l-2.81 1.47.54-3.12-2.27-2.21 3.13-.46L6 1.5z" stroke="currentColor" stroke-linejoin="round" stroke-width="1.2">
            </path>
          </svg>
          Bursary
        </a>
        <div class="util-sep">
        </div>
        <a class="util-link" href="https://www.theshalalondon.com/contact-2/" target="_blank">
          <svg fill="none" height="12" viewbox="0 0 12 12" width="12">
            <rect height="7" rx="1" stroke="currentColor" stroke-width="1.2" width="10" x="1" y="2.5">
            </rect>
            <path d="M1 3.5l5 3.5 5-3.5" stroke="currentColor" stroke-linecap="round" stroke-width="1.2">
            </path>
          </svg>
          Contact Us
        </a>
      </div>
      <div class="utility-right">
        Trainings are independently run by teachers.
        <strong>
          Payments processed by The Shala School of Yoga.
        </strong>
      </div>
    </div>
  </div>
  <script>
    // Express Interest form
    function handleInterestSubmit(btn) {
      const name = document.getElementById('int-name').value.trim();
      const email = document.getElementById('int-email').value.trim();
      if (!name || !email) {
        btn.textContent = 'Please fill in your name and email ↑';
        btn.style.background = 'var(--charcoal-plum)';
        setTimeout(() => {
          btn.textContent = 'Register My Interest →';
          btn.style.background = '';
        }, 2500);
        return;
      }
      btn.textContent = "Thank you — we'll be in touch soon ✓";
      btn.style.background = '#2d7a47';
      btn.disabled = true;
    }

    // Accordion
    function toggleAcc(trigger) {
      const body = trigger.nextElementSibling;
      const isOpen = trigger.classList.contains('open');
      document.querySelectorAll('.acc-trigger').forEach(t => {
        t.classList.remove('open');
        t.nextElementSibling.classList.remove('open');
      });
      if (!isOpen) {
        trigger.classList.add('open');
        body.classList.add('open');
      }
    }

    // Sticky booking bar
    const hero = document.getElementById('top');
    const bar = document.getElementById('bookingBar');
    const observer = new IntersectionObserver(([entry]) => {
      bar.classList.toggle('visible', !entry.isIntersecting);
    }, {
      threshold: 0,
      rootMargin: '-100px 0px 0px 0px'
    });
    observer.observe(hero);

    // Nav scroll + announcement bar — handled inside snippet-nav.html / snippet-announcement.html// Testimonials carousel
    function shiftTesti(dir) {
      const track = document.getElementById('testiTrack');
      if (!track) return;
      const cards = [...track.children];
      const cardW = cards[0] ? cards[0].offsetWidth + 18 : 340;
      const vis = Math.max(1, Math.floor(track.parentElement.offsetWidth / cardW));
      const maxPos = Math.max(0, cards.length - vis);
      testiPos = Math.max(0, Math.min((testiPos || 0) + dir, maxPos));
      track.style.transform = 'translateX(-' + (testiPos * cardW) + 'px)';
    }
    var testiPos = 0;
  </script>
</main>

<?php endwhile; ?>

<?php get_footer(); ?>
