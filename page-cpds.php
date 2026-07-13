<?php
/*
Template Name: CPDs Page
*/

get_header();

$hero_title = get_field('hero_title');
$hero_subtitle = get_field('hero_subtitle');
$hero_button_1_text = get_field('hero_button_1_text');
$hero_button_1_link = get_field('hero_button_1_link');
$hero_button_2_text = get_field('hero_button_2_text');
$hero_button_2_link = get_field('hero_button_2_link');
?>

 <main id="main-content">
      <section class="hero-standard bg-linen text-on-light">
        <div class="hero-standard-inner">
          <img
            class="hero-standard-spiral spiral-rotate"
            src="<?php echo esc_url(get_template_directory_uri() . '/assets/spirals/spiral-1-cropped.png'); ?>"
            alt="decorative spiral image"
            aria-hidden="true"
          />
          <div class="hero-standard-content">
            <h1 class="hero-standard-title">
              <?php echo theshala_highlight_text($hero_title); ?>
            </h1>

            <p class="hero-standard-sub">
              <?php echo esc_html($hero_subtitle); ?>
            </p>

            <div class="hero-standard-btns">
             <?php if ($hero_button_1_text && $hero_button_1_link) : ?>
                  <a
                      href="<?php echo esc_url($hero_button_1_link['url']); ?>"
                      class="btn btn-pink"
                      target="<?php echo esc_attr($hero_button_1_link['target']); ?>"
                  >
                      <?php echo esc_html($hero_button_1_text); ?>
                  </a>
              <?php endif; ?>

              <?php if ($hero_button_2_text && $hero_button_2_link) : ?>
                  <a
                      href="<?php echo esc_url($hero_button_2_link['url']); ?>"
                      class="btn-ghost btn-pink"
                      target="<?php echo esc_attr($hero_button_2_link['target']); ?>"
                  >
                      <?php echo esc_html($hero_button_2_text); ?>
                  </a>
              <?php endif; ?>
            </div>
          </div>
        </div>
      </section>
      <!-- FILTER BAR -->
      <nav class="filter-bar">
        <div class="filter-inner">
          <span class="filter-label">Show me</span>
          <button class="f-btn active" data-filter="all">Everything</button>
           <div class="f-sep"></div>

          <button class="f-btn" data-filter="studio">
              In Studio
          </button>

          <button class="f-btn" data-filter="live">
              Livestream
          </button>

          <button class="f-btn" data-filter="ondemand" data-scroll="od-section">
              On Demand
          </button>

          <span class="filter-count">
              <strong id="count">0</strong> courses
          </span>

        </div>
      </nav>
   

      <!-- FLAGSHIP PROGRAMMES -->
      <header class="section-label">
        <h2>Flagship <em>Programmes</em></h2>
      </header>

      <section class="flagship-grid">
        <!-- 200-Hour -->
        <article
          class="flagship-card fc-200"
          data-tags="studio specialist asana"
          style="--fc-tint-color: rgba(212, 0, 98, 1)"
        >
          <div class="fc-bg">
            <img
              src="<?php echo get_template_directory_uri(); ?>/assets/images/200-hour-hero.webp"
              alt=""
            />
          </div>
          <div class="fc-tint"></div>
          <div class="fc-fade"></div>
          <div class="fc-watermark">
            <img
              src="<?php echo get_template_directory_uri(); ?>/assets/images/RYS200_LOGO_transparent.png"
              alt="Yoga Alliance RYS 200"
            />
          </div>
          <div class="fc-tags">
            <span class="fc-tag">In Studio</span>
            <span class="fc-tag">200 Hrs · Yoga Alliance</span>
          </div>
          <div class="fc-title">200-Hour Teacher Training</div>
          <div class="fc-teacher">Gingi Lee &amp; Charli Van Ness</div>
          <div class="fc-desc">
            Described by graduates as transformational and life-changing — a
            deeply immersive journey into teaching, practice and self-enquiry
            rooted in 29 years of Shala lineage. Level 1.
          </div>
          <div class="fc-foot">
            <div class="fc-date">
              <strong>Sep 2026 – May 2027</strong>In Studio
            </div>
            <div class="fc-right">
              <div class="fc-price">£3,250</div>
                <a href="<?php echo esc_url(home_url('/300-hour/')); ?>" class="fc-cta">
                  Find Out More →
              </a>
            </div>
          </div>
        </article>

        <!-- 300-Hour -->
        <article
          class="flagship-card fc-300"
          data-tags="studio live specialist asana"
          style="--fc-tint-color: rgba(59, 19, 46, 1)"
        >
          <div class="fc-bg">
            <img
              src="<?php echo get_template_directory_uri(); ?>/assets/images/300-hour-hero.jpg"
              alt=""
            />
          </div>
          <div class="fc-tint"></div>
          <div class="fc-fade"></div>
          <div class="fc-watermark">
            <img
              src="<?php echo get_template_directory_uri(); ?>/assets/images/RYS300_LOGO_transparent.png"
              alt="Yoga Alliance RYS 300"
            />
          </div>
          <div class="fc-tags">
            <span class="fc-tag">In Studio &amp; Livestream</span>
            <span class="fc-tag">300 Hrs · Yoga Alliance</span>
          </div>
          <div class="fc-title">300-Hour Teacher Training</div>
          <div class="fc-teacher">Full Teaching Faculty</div>
          <div class="fc-desc">
            Our Level 2 programme — build a specialised portfolio across CPDs
            and core modules at a pace that works for your life. Combine In
            Studio and Livestream.
          </div>
          <div class="fc-foot">
            <div class="fc-date">
              <strong>Flexible Start Dates</strong>Studio + Livestream
            </div>
            <div class="fc-right">
              <div class="fc-price">£3,900+</div>
              <a href="<?php echo esc_url(home_url('/300-hour/')); ?>" class="fc-cta">
                  Find Out More →
              </a>
            </div>
          </div>
        </article>
      </section>

      <!-- Upcoming COURSES -->
      <header class="section-label" id="sec-2026">
          <h2>Upcoming <em>Courses</em></h2>
      </header>

      <section class="grid" id="grid-2026">

      <?php
      $today = date('Ymd');

      $all_courses = new WP_Query([
          'post_type'      => 'course',
          'posts_per_page' => -1,
          'meta_key'       => 'start_date',
          'orderby'        => 'meta_value',
          'order'          => 'ASC',
          'meta_query'     => [
              [
                  'key'     => 'start_date',
                  'value'   => $today,
                  'compare' => '>=',
                  'type'    => 'NUMERIC',
              ],
          ],
      ]);

      $card_index = 0;
      $image_tint_index = 0;
      $typo_colour_index = 0;

      $image_tints = [
          'rgba(59,19,46,1)',   // aubergine
          'rgba(97,64,81,1)',   // grey-magenta
          'rgba(212,0,98,1)',   // pink
          'rgba(243,153,0,1)',  // orange
      ];

      $typo_colours = [
          'c-plinen',
          'c-pink',
          'c-linen',
          'c-aubergine',
          'c-blush',
          'c-charcoal',
          'c-greige',
      ];

      if ($all_courses->have_posts()) :
          while ($all_courses->have_posts()) :
              $all_courses->the_post();

              $course_id = get_the_ID();

              $course_title = get_field('short_title', $course_id);

              if (!$course_title) {
                  $course_title = get_the_title($course_id);
              }

              $course_image = get_field('course_card_image', $course_id);
              $course_dates = get_field('course_card_dates', $course_id);
              $course_price = get_field('course_price', $course_id);
              $course_format = get_field('course_format', $course_id);
              $course_instructors = get_field('course_instructors', $course_id);

              $teacher_names = '';

              if ($course_instructors) {
                  $names = [];

                  foreach ($course_instructors as $instructor) {
                      $names[] = is_object($instructor)
                          ? get_the_title($instructor->ID)
                          : get_the_title($instructor);
                  }

                  $teacher_names = implode(', ', $names);
              }

              $format_label = $course_format;

              /* Filter tags */
              $filter_tags = ['all'];

              $format_string = strtolower($course_format);

              if (strpos($format_string, 'studio') !== false) {
                  $filter_tags[] = 'studio';
              }

              if (
                  strpos($format_string, 'live') !== false ||
                  strpos($format_string, 'livestream') !== false ||
                  strpos($format_string, 'online') !== false
              ) {
                  $filter_tags[] = 'live';
              }

              $filter_tags = implode(' ', array_unique($filter_tags));

              $is_image_card = $card_index % 2 !== 0;

              if ($is_image_card) {
                  $image_tint = $image_tints[$image_tint_index % count($image_tints)];
                  $image_tint_index++;
              } else {
                  $typo_colour = $typo_colours[$typo_colour_index % count($typo_colours)];
                  $typo_colour_index++;
              }
      ?>

          <?php if ($is_image_card) : ?>

              <article
                  class="card card-img"
                  data-tags="<?php echo esc_attr($filter_tags); ?>"
                  style="--tint: <?php echo esc_attr($image_tint); ?>;"
              >

                <a href="<?php the_permalink(); ?>" class="card-full-link" aria-label="<?php echo esc_attr('View ' . $course_title); ?>"></a>
                  <div class="bg">
                      <?php if ($course_image) : ?>
                          <img
                              src="<?php echo esc_url($course_image['url']); ?>"
                              alt="<?php echo esc_attr($course_image['alt']); ?>"
                          >
                      <?php endif; ?>
                  </div>

                  <div class="tint"></div>
                  <div class="fade"></div>

                  <div class="content">
                      <div class="img-top">
                          <?php if ($format_label) : ?>
                              <div class="card-tags">
                                  <span class="pill-studio">
                                      <?php echo esc_html($format_label); ?>
                                  </span>
                              </div>
                          <?php endif; ?>

                          <div class="img-title">
                              <?php echo esc_html($course_title); ?>
                          </div>

                          <?php if ($teacher_names) : ?>
                              <div class="img-teacher">
                                  <?php echo esc_html($teacher_names); ?>
                              </div>
                          <?php endif; ?>
                      </div>

                      <div class="img-bottom">
                          <div class="img-foot">
                              <?php if ($course_dates) : ?>
                                  <div class="foot-date">
                                      <strong><?php echo esc_html($course_dates); ?></strong>
                                  </div>
                              <?php endif; ?>

                              <?php if ($course_price) : ?>
                                  <div class="foot-price">
                                      <?php echo esc_html($course_price); ?>
                                  </div>
                              <?php endif; ?>
                          </div>

                          <a href="<?php the_permalink(); ?>" class="img-cta">
                              Find Out More →
                          </a>
                      </div>
                  </div>
              </article>

          <?php else : ?>

              <article
                  class="card card-typo <?php echo esc_attr($typo_colour); ?>"
                  data-tags="<?php echo esc_attr($filter_tags); ?>"
              >
                <a href="<?php the_permalink(); ?>" class="card-full-link" aria-label="<?php echo esc_attr('View ' . $course_title); ?>"></a>
                  <div class="t-tags">
                      <?php if ($format_label) : ?>
                          <span class="pill-studio">
                              <?php echo esc_html($format_label); ?>
                          </span>
                      <?php endif; ?>
                  </div>

                  <div class="t-title">
                      <?php echo esc_html($course_title); ?>
                  </div>

                  <?php if ($teacher_names) : ?>
                      <div class="t-teacher">
                          <?php echo esc_html($teacher_names); ?>
                      </div>
                  <?php endif; ?>

                  <div class="t-foot">
                      <?php if ($course_dates) : ?>
                          <div class="t-date">
                              <strong><?php echo esc_html($course_dates); ?></strong>
                          </div>
                      <?php endif; ?>

                      <?php if ($course_price) : ?>
                          <div class="t-price">
                              <?php echo esc_html($course_price); ?>
                          </div>
                      <?php endif; ?>
                  </div>

                  <a href="<?php the_permalink(); ?>" class="t-cta">
                      Find Out More →
                  </a>
              </article>

          <?php endif; ?>

      <?php
              $card_index++;
          endwhile;
          wp_reset_postdata();
      endif;
      ?>

      </section>


      <!-- ON DEMAND -->
      <section class="od-section" id="od-section">
        <div class="od-inner">
          <header class="section-label" style="margin: 0 0 24px 0; padding: 0">
            <h2>On Demand <em>Courses</em></h2>
          </header>

          <div class="od-grid">
            
            <article class="od-card" style="--tint: rgba(75, 58, 67, 1)">
              <div class="od-bg">
                <img
                 src="https://staging.theshalalondon.com/wp-content/uploads/2026/06/advanced-300-hour-yoga-teacher-training.jpg"
                  alt="Yoga Anatomy"
                />
              </div>
              <div class="od-tint"></div>
              <div class="od-fade"></div>
              <div class="od-content">
                <div class="od-tag-row">
                  <span class="od-tag">On Demand</span>
                </div>
                <div class="od-card-title">Yoga Anatomy | Embodied Wisdom</div>
                <div class="od-card-teacher">Melanie Cooper</div>
                <div class="od-card-desc">
                  A foundational course exploring the anatomy of yoga in a way
                  that is relevant, practical and accessible — designed for
                  those with limited or no anatomical knowledge.
                </div>
                <div class="od-card-foot">
                  <div class="od-price">£195</div>
                  <a href="#" class="od-enrol">Enrol →</a>
                </div>
              </div>
            </article>

            <article class="od-card" style="--tint: rgba(97, 64, 81, 1)">
              <div class="od-bg">
                <img
                  src="https://staging.theshalalondon.com/wp-content/uploads/2026/06/300-hour-teacher-training-shala-london.jpg"
                  alt="Yoga Philosophy"
                  style="object-position: center 25%"
                />
              </div>
              <div class="od-tint"></div>
              <div class="od-fade"></div>
              <div class="od-content">
                <div class="od-tag-row">
                  <span class="od-tag">On Demand</span>
                </div>
                <div class="od-card-title">Yoga Philosophy Foundations</div>
                <div class="od-card-teacher">Matthew Clark</div>
                <div class="od-card-desc">
                  An ideal introduction to yogic philosophy — the history,
                  origins, key texts and theories behind yoga, led by Dr Matthew
                  Clark through his extraordinary gift for storytelling.
                </div>
                <div class="od-card-foot">
                  <div class="od-price">£195</div>
                  <a href="#" class="od-enrol">Enrol →</a>
                </div>
              </div>
            </article>

            
            <article class="od-card" style="--tint: rgba(243, 153, 0, 1)">
              <div class="od-bg">
                <img
                  src="https://staging.theshalalondon.com/wp-content/uploads/2026/06/300-hour-beyond-the-postures-module.jpg"
                  alt="Business of Yoga"
                />
              </div>
              <div class="od-tint"></div>
              <div class="od-fade"></div>
              <div class="od-content">
                <div class="od-tag-row">
                  <span class="od-tag">On Demand</span>
                </div>
                <div class="od-card-title">Business of Yoga</div>
                <div class="od-card-teacher">Lynda Phoenix</div>
                <div class="od-card-desc">
                  A four-part course for teachers who want to market themselves
                  effectively — covering website, SEO, email marketing, social
                  media and paid campaigns to grow your audience.
                </div>
                <div class="od-card-foot">
                  <div class="od-price">£195</div>
                  <a href="#" class="od-enrol">Enrol →</a>
                </div>
              </div>
            </article>
          </div>
        </div>
      </section>

      <div id="empty-state">
        <p>No courses match that filter — try a different combination.</p>
      </div>

      <!-- PINK CTA BANNER -->
      <section class="pink-cta">
        <h3>Stay up to <em>date</em></h3>
        <p>
          Join our newsletter for first access to new modules, retreats and
          teacher trainings — or book a call to talk through your path.
        </p>
        <div class="pink-cta-btns">
          <a
            href="<?php echo esc_url(home_url('/signup/')); ?>"
            class="pcb-fill"
            >Join Newsletter</a
          >
          <a href="mailto:teachertraining@theshala.co.uk" class="pcb-ghost"
            >Book a Call</a
          >
        </div>
      </section>
    </main>

<?php get_footer(); ?>