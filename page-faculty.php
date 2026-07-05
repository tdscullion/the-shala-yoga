<?php

/**
 * Template for the Faculty page.
 */


get_header();


$faculty_page = get_page_by_path('faculty');
$faculty_page_id = $faculty_page ? $faculty_page->ID : null;

$hero_title = get_field('hero_title', $faculty_page_id);
$hero_subtitle = get_field('hero_subtitle', $faculty_page_id);

$featured_faculty_grid = get_field('featured_faculty_grid', $faculty_page_id);

?>

<main id="main-content">
      <!-- Hero-->
      <section class="hero-standard bg-pinked-linen text-on-light">
        <div class="hero-standard-inner">
          <img
            class="hero-standard-spiral"
            src="<?php echo esc_url(get_template_directory_uri() . '/assets/spirals/spiral-1-cropped.png'); ?>"
            alt=""
            aria-hidden="true"
          />
          <div class="hero-standard-content">
            <h1 class="hero-standard-title"><?php echo theshala_highlight_text($hero_title); ?></h1>

            <p class="hero-standard-sub">
              <?php echo esc_html($hero_subtitle); ?>
            </p>
          </div>
        </div>
      </section>

      <!-- STATS BAR -->
      <div class="stats-bar">
        <div class="stats-bar-inner">
          <div class="stat-box">
            <span class="stat-num">12+</span
            ><span class="stat-desc">Specialist Senior Faculty</span>
          </div>
          <div class="stat-box">
            <span class="stat-num">2,000+</span
            ><span class="stat-desc">Students Trained Worldwide</span>
          </div>
          <div class="stat-box">
            <span class="stat-num">25+</span
            ><span class="stat-desc">Specialist Courses Per Year</span>
          </div>
          <div class="stat-box">
            <span class="stat-num">200+</span
            ><span class="stat-desc"
              >Combined Years of Teaching Experience</span
            >
          </div>
        </div>
      </div>


      <!-- TEACHERS GRID -->
      <div class="teachers-section reveal">
        <div class="teachers-grid">
          

         <?php if ($featured_faculty_grid) : ?>
            <?php foreach ($featured_faculty_grid as $faculty_member) : ?>
                <?php
                $faculty_id = $faculty_member->ID;

                $faculty_name = get_the_title($faculty_id);
                $faculty_link = get_permalink($faculty_id);
                $card_image = get_field('card_image', $faculty_id);
                $highlighted_tags = get_field('highlighted_tags', $faculty_id);

                $name_parts = explode(' ', $faculty_name, 2);
                $first_name = $name_parts[0];
                $surname = $name_parts[1] ?? '';
                ?>

                <a href="<?php echo esc_url($faculty_link); ?>" class="tc">
                    <?php if ($card_image) : ?>
                        <img
                            class="tc-img"
                            src="<?php echo esc_url($card_image['url']); ?>"
                            alt="<?php echo esc_attr($card_image['alt']); ?>"
                        >
                    <?php else : ?>
                        <div class="tc-placeholder">
                            <svg width="70" height="90" viewBox="0 0 70 90">
                                <circle cx="35" cy="26" r="18" fill="#9E8D95" />
                                <ellipse cx="35" cy="78" rx="30" ry="22" fill="#9E8D95" />
                            </svg>
                        </div>
                    <?php endif; ?>

                    <div class="tc-tint"></div>
                    <div class="tc-fade"></div>

                    <div class="tc-body">
                        <div class="tc-name">
                            <span class="fn"><?php echo esc_html($first_name); ?></span>
                            <span class="sn"><?php echo esc_html($surname); ?></span>
                        </div>

                        <?php if ($highlighted_tags) : ?>
                            <div class="tc-spec">
                                <?php echo esc_html(str_replace("\n", ' · ', trim($highlighted_tags))); ?>
                            </div>
                        <?php endif; ?>
                    </div>
                </a>

            <?php endforeach; ?>
        <?php endif; ?>

         
        </div>
      </div>

      <!-- CTA BAND -->
      <section class="cta-band-faculty">
        <div class="cta-band-faculty-inner">
          <h2 class="cta-band-faculty-h2">
            Ready to begin your <em>teaching journey?</em>
          </h2>
          <p class="cta-band-faculty-sub">
            Our 200-hour and 300-hour programmes are led by this extraordinary
            team — intimate cohorts, deep learning, and a community that lasts a
            lifetime.
          </p>
          <div class="cta-band-faculty-btns">
            <a href="/200-hour" class="btn btn-white-solid">Explore Courses</a>
            <a
              href="mailto:teachertraining@theshala.co.uk"
              class="btn-ghost btn-ghost-white"
              >Message Us</a
            >
          </div>
        </div>
      </section>
    </main>

<?php get_footer(); ?>