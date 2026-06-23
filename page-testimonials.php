<?php
/*
Template Name: Testimonials Page
*/

get_header();

$hero_title = get_field('hero_title');
$hero_subtitle = get_field('hero_subtitle');#
$featured_testimonials = get_field('featured_testimonials');
$voice_testimonials = get_field('voice_testimonials');
$interview_eyebrow = get_field('interview_eyebrow');
$interview_title = get_field('interview_title');
$interview_lead = get_field('interview_lead');
$interview_body = get_field('interview_body');
$interview_video_url = get_field('interview_video_url');
?>

<!-- Paste ONLY the <main id="main-content">...</main> section here -->
 <main id="main-content">
      <!-- HERO -->
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
      <!-- FILTER BAR -->
      <div class="t-filter">
        <span class="t-filter-label">Filter by</span>
        <span class="t-filter-chip is-active" data-filter="all">All</span>
        <span class="t-filter-chip" data-filter="200">200-Hour</span>
        <span class="t-filter-chip" data-filter="300">300-Hour</span>
      </div>

      <!-- FEATURED STORIES -->
      <div class="section-head">
        <h2>Featured Stories <em>— in their own words</em></h2>
      </div>

      <section class="featured-body">
        <div class="featured-inner">
            <?php if ($featured_testimonials) : ?>
                <?php foreach ($featured_testimonials as $testimonial) : ?>

                    <?php
                    $quote = $testimonial['testimonial_quote'];
                    $name = $testimonial['testimonial_name'];
                    $category = $testimonial['testimonial_category'];
                    $image = $testimonial['testimonial_image'];
                    $layout = $testimonial['testimonial_layout'];

                    $row_classes = 'ed-row';

                    if ($layout === 'right') {
                        $row_classes .= ' is-right';
                    }

                    if ($layout === 'none' || !$image) {
                        $row_classes .= ' no-image';
                    }
                    ?>

                    <div class="<?php echo esc_attr($row_classes); ?>" data-category="<?php echo esc_attr($category); ?>">

                        <?php if ($layout !== 'none' && $image && $layout !== 'right') : ?>
                            <div class="ed-photo">
                                <img
                                    src="<?php echo esc_url($image['url']); ?>"
                                    alt="<?php echo esc_attr($image['alt']); ?>"
                                >
                            </div>
                        <?php endif; ?>

                        <div class="ed-content">
                            <?php if ($quote) : ?>
                                <p class="ed-quote">
                                    <?php echo esc_html($quote); ?>
                                </p>
                            <?php endif; ?>

                            <div class="ed-attr">
                                <?php if ($name) : ?>
                                    <span class="ed-attr-name">
                                        <?php echo esc_html($name); ?>
                                    </span>
                                <?php endif; ?>

                                <?php if ($category) : ?>
                                    <span class="ed-attr-sep">·</span>
                                    <?php
                                    if ($category === '200') {
                                        echo '200-Hour Graduate';
                                    } elseif ($category === '300') {
                                        echo '300-Hour Graduate';
                                    } else {
                                        echo '200 &amp; 300-Hour Graduate';
                                    }
                                    ?>
                                <?php endif; ?>
                            </div>
                        </div>

                        <?php if ($layout === 'right' && $image) : ?>
                            <div class="ed-photo">
                                <img
                                    src="<?php echo esc_url($image['url']); ?>"
                                    alt="<?php echo esc_attr($image['alt']); ?>"
                                >
                            </div>
                        <?php endif; ?>

                    </div>

                <?php endforeach; ?>
            <?php endif; ?>
        </div>
      </section>

      <!-- MORE VOICES -->
      <section class="voices-body">
        <div class="voices-inner">
          <div class="section-head" style="padding-top: 0; padding-bottom: 0">
            <h2>More <em>Voices</em></h2>
          </div>
          <div class="voices-grid">
              <?php if ($voice_testimonials) : ?>
                  <?php foreach ($voice_testimonials as $voice) : ?>

                      <?php
                      $quote = $voice['voice_quote'];
                      $name = $voice['voice_name'];
                      $category = $voice['voice_category'];
                      $image = $voice['voice_image'];

                      $card_classes = 'voice-card';

                      if (!$image) {
                          $card_classes .= ' no-image';
                      }
                      ?>

                      <div class="<?php echo esc_attr($card_classes); ?>" data-category="<?php echo esc_attr($category); ?>">

                          <?php if ($image) : ?>
                              <div class="voice-photo">
                                  <img
                                      src="<?php echo esc_url($image['url']); ?>"
                                      alt="<?php echo esc_attr($image['alt']); ?>"
                                  >
                              </div>
                          <?php endif; ?>

                          <div class="voice-text">
                              <p class="voice-quote">
                                  <?php echo esc_html($quote); ?>
                              </p>

                              <div class="voice-attr">
                                  <span class="voice-attr-name">
                                      <?php echo esc_html($name); ?>
                                  </span>

                                  <span class="voice-attr-sep">·</span>

                                  <?php
                                  if ($category === '200') {
                                      echo '200-Hour';
                                  } elseif ($category === '300') {
                                      echo '300-Hour';
                                  } else {
                                      echo '200 &amp; 300-Hour';
                                  }
                                  ?>
                              </div>
                          </div>

                      </div>

                  <?php endforeach; ?>
              <?php endif; ?>
          </div>
        </div>
      </section>

      <!-- GRADUATE INTERVIEW -->
      <?php if ($interview_title || $interview_video_url) : ?>
        <section class="interview">
            <div class="interview-inner">
                <div class="interview-content">
                    <?php if ($interview_eyebrow) : ?>
                        <p class="interview-eyebrow">
                            <?php echo esc_html($interview_eyebrow); ?>
                        </p>
                    <?php endif; ?>

                    <?php if ($interview_title) : ?>
                        <h3>
                            <?php echo theshala_highlight_text($interview_title); ?>
                        </h3>
                    <?php endif; ?>

                    <?php if ($interview_lead) : ?>
                        <p class="lead">
                            <?php echo esc_html($interview_lead); ?>
                        </p>
                    <?php endif; ?>

                    <?php if ($interview_body) : ?>
                        <p>
                            <?php echo esc_html($interview_body); ?>
                        </p>
                    <?php endif; ?>
                </div>

                <?php if ($interview_video_url) : ?>
                    <div class="interview-video">
                        <iframe
                            src="<?php echo esc_url($interview_video_url); ?>"
                            allow="autoplay; fullscreen; picture-in-picture"
                            allowfullscreen
                        ></iframe>
                    </div>
                <?php endif; ?>
            </div>
        </section>
    <?php endif; ?>

      <!-- CTA BAND -->
      <section class="cta-band">
        <div class="cta-band-inner">
          <h2 class="cta-h2">Ready to start <em>your training?</em></h2>
          <p class="cta-sub">
            Explore our 200-hour foundation programme or our modular 300-hour
            pathway.
          </p>
          <div class="cta-buttons">
            <a href="/yoga-teacher-training-calendar" class="btn btn-white"
              >See Course Calendar</a
            >
            <a href="/200-hour" class="btn-ghost btn-white"
              >200-Hour Programme</a
            >
            <a href="/300-hour" class="btn-ghost btn-white"
              >300-Hour Programme</a
            >
          </div>
        </div>
      </section>
    </main>

<?php get_footer(); ?>