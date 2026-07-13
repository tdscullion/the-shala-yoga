<?php

get_header();

$hero_title = get_field('hero_title');
$hero_subtitle = get_field('hero_subtitle');
$hero_button_1_text = get_field('hero_button_1_text');
$hero_button_1_link = get_field('hero_button_1_link');
$hero_button_2_text = get_field('hero_button_2_text');
$hero_button_2_link = get_field('hero_button_2_link');

$show_flagship_section = get_field('show_flagship_section');
$flagship_200_image = get_field('flagship_200_image');
$flagship_300_image = get_field('flagship_300_image');

$show_retreat_section = get_field('show_retreat_section');
$retreat_heading = get_field('retreat_heading');
$retreat_link = get_field('retreat_link');
$retreat_title = get_field('retreat_title');
$retreat_dates_label = get_field('retreat_dates_label');
$retreat_options = get_field('retreat_options');
$retreat_description = get_field('retreat_description');
$retreat_meta_1_label = get_field('retreat_meta_1_label');
$retreat_meta_1_value = get_field('retreat_meta_1_value');
$retreat_meta_2_label = get_field('retreat_meta_2_label');
$retreat_meta_2_value = get_field('retreat_meta_2_value');
$retreat_meta_3_label = get_field('retreat_meta_3_label');
$retreat_meta_3_value = get_field('retreat_meta_3_value');
$retreat_button = get_field('retreat_button');
$retreat_image_1_wide = get_field('retreat_image_1_wide');
$retreat_image_2 = get_field('retreat_image_2');
$retreat_image_3 = get_field('retreat_image_3');
$retreat_image_4 = get_field('retreat_image_4');
$retreat_image_5_wide = get_field('retreat_image_5_wide');
$retreat_image_6 = get_field('retreat_image_6');

$gallery_image_1 = get_field('gallery_image_1');
$gallery_image_2 = get_field('gallery_image_2');
$gallery_image_3 = get_field('gallery_image_3');
$gallery_image_4 = get_field('gallery_image_4');
$gallery_image_5 = get_field('gallery_image_5');
?>


    <main id="main-content">
      <!-- HERO -->
      <section class="hero-home">
        <div class="hero-home-inner">
          <div class="hero-home-spiral" aria-hidden="true">
            <img class="spiral-rotate" src="<?php echo esc_url(get_template_directory_uri() . '/assets/spirals/spiral-1-cropped.png'); ?>" alt="Spiral pattern" />
          </div>

          <div class="hero-home-titlewrap">
            <h1 class="hero-home-title">
              <?php echo theshala_highlight_text($hero_title); ?>
            </h1>
          </div>

          <div class="hero-home-textcol">
            <div class="hero-home-textinner">
              <p class="hero-home-sub">
                <?php echo esc_html($hero_subtitle); ?>
              </p>

              <div class="hero-home-btns">
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
        </div>
      </section>

      <!-- JUMP NAV -->
      <nav class="page-jumpnav" aria-label="Jump to section">
        <a href="#section-courses">Courses</a>
        <a href="#section-paths">Training Paths</a>
        <a href="#section-flagship">200 &amp; 300</a>
        <a href="#section-why">Why Us?</a>
        <a href="#section-faculty">Faculty</a>
        <a href="#section-retreat">Retreat</a>
      </nav>

      <!-- STATS BAR -->
      <div class="stats-bar">
        <div class="stats-bar-inner">
          <div class="stat-box">
            <span class="stat-num">29</span
            ><span class="stat-desc">Years in South London</span>
          </div>
          <div class="stat-box">
            <span class="stat-num">2,000</span
            ><span class="stat-desc">Students trained worldwide</span>
          </div>
          <div class="stat-box">
            <span class="stat-num">12+</span
            ><span class="stat-desc">Senior specialist faculty</span>
          </div>
          <div class="stat-box">
            <span class="stat-num">RYS 200 &amp; 300</span
            ><span class="stat-desc">Yoga Alliance accredited</span>
          </div>
        </div>
      </div>

      <!-- COURSE CAROUSEL -->
       <section class="carousel-section" id="section-courses">
          <h2 class="sr-only">Courses</h2>

          <div class="carousel-header">
              <div>
                  <h3 class="section-heading" style="margin-bottom: 0">
                      Choose a <em>course</em>
                  </h3>
              </div>

              <div class="slider-arrows">
                  <button class="s-arrow" onclick="shiftCar(-1)">←</button>
                  <button class="s-arrow" onclick="shiftCar(1)">→</button>
              </div>
          </div>

          <div class="carousel-track-wrap">
              <div class="carousel-track" id="carTrack">

                  <?php
                  $today = date('Ymd');

                  $home_courses = new WP_Query([
                      'post_type'      => 'course',
                      'posts_per_page' => 8,
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

                  if ($home_courses->have_posts()) :
                      while ($home_courses->have_posts()) :
                          $home_courses->the_post();

                          $course_id = get_the_ID();
                          $course_title = get_field('short_title', $course_id);

                          if (!$course_title) {
                              $course_title = get_the_title();
                          }

                          $course_link = get_permalink();
                          
                          $course_card_image = get_field('course_card_image', $course_id);
                          $course_price = get_field('course_price', $course_id);
                          $course_start_date = get_field('start_date', $course_id);
                          $course_card_dates = get_field('course_card_dates', $course_id);

                          $tint_colours = [
                              'rgba(212, 0, 98, 1)',  // pink
                              'rgba(59, 19, 46, 1)',  // plum
                              'rgba(75, 58, 67, 1)',  // mauve
                              'rgba(139, 82, 0, 1)',  // amber
                          ];

                          $tint_index = $home_courses->current_post % count($tint_colours);
                          $course_tint = $tint_colours[$tint_index];
                          $course_format = get_field('course_format', $course_id);
                          $course_instructors = get_field('course_instructors', $course_id);

                          $teacher_names = '';

                          if ($course_instructors) {
                              $names = [];

                              foreach ($course_instructors as $instructor) {
                                  if (is_object($instructor)) {
                                      $names[] = get_the_title($instructor->ID);
                                  } else {
                                      $names[] = get_the_title($instructor);
                                  }
                              }

                              $teacher_names = implode(', ', $names);
                          }
                          ?>

                          <a href="<?php echo esc_url($course_link); ?>" class="cc">
                              <div class="cc-bg">
                                  <?php if ($course_card_image) : ?>
                                      <img
                                          src="<?php echo esc_url($course_card_image['url']); ?>"
                                          alt="<?php echo esc_attr($course_card_image['alt']); ?>"
                                      />
                                  <?php endif; ?>
                              </div>

                              <div
                                  class="cc-tint"
                                  style="background: <?php echo esc_attr($course_tint); ?>"
                              ></div>

                              <div class="cc-fade"></div>

                              <div class="cc-body">
                                  <?php if ($course_format) : ?>
                                      <span class="cc-tag">
                                          <?php
                                          if (is_array($course_format)) {
                                              echo esc_html(implode(' + ', array_column($course_format, 'label')));
                                          } else {
                                              echo esc_html($course_format);
                                          }
                                          ?>
                                      </span>
                                  <?php endif; ?>

                                  <div class="cc-title">
                                      <?php echo esc_html($course_title); ?>
                                  </div>

                                  <?php if ($teacher_names) : ?>
                                      <div class="cc-teacher">
                                          <?php echo esc_html($teacher_names); ?>
                                      </div>
                                  <?php endif; ?>

                                  <div class="cc-foot">
                                      <div class="cc-date">
                                          <?php if ($course_card_dates) : ?>
                                              <strong>
                                                  <?php echo esc_html($course_card_dates); ?>
                                              </strong>
                                          <?php endif; ?>

                                          <?php if ($course_price) : ?>
                                            <span class="cc-price">
                                                <?php echo esc_html($course_price); ?>
                                            </span>
                                        <?php endif; ?>
                                      </div>
                                  </div>
                              </div>
                          </a>

                      <?php
                      endwhile;
                      wp_reset_postdata();
                  endif;
                  ?>

              </div>
          </div>

          <div class="carousel-footer">
              <a href="<?php echo esc_url(home_url('/cpds')); ?>" class="see-all see-all-strong">
                  View all 25+ courses →
              </a>
          </div>
      </section>
     

      <!-- TRAINING PATHS -->
      <section class="paths-section" id="section-paths">
        <h2 class="sr-only">Training Paths</h2>
        <div class="paths-inner">
          <div class="section-header-row">
            <div>
              <h3 class="section-heading" style="margin-bottom: 0">
                Choose your <em>path</em>
              </h3>
            </div>
          </div>
          <div class="path-compare">
            <div class="path-compare-card">
              <span class="pc-q"
                >New to teaching? Start with the 200-Hour.</span
              >
              <a href="#section-flagship" class="pc-a">200-Hour</a>
            </div>
            <div class="path-compare-card">
              <span class="pc-q"
                >Already a teacher? Choose CPDs or the 300-Hour.</span
              >
              <a href="#section-flagship" class="pc-a">300-Hour &amp; CPDs</a>
            </div>
          </div>
          <div class="paths-grid">
            <div class="path-card">
              <div class="path-card-body">
                <div class="path-logo-wrap">
                  <!-- TODO: add RYS200 logo once available -->
                    <img
                  src="<?php echo esc_url(get_template_directory_uri() . '/assets/logos/rys200-logo.png'); ?>"
                  alt="Yoga Alliance RYS 200 Accredited"
                  class="prog-logo"
              >
                </div>
                <span class="path-icon">200</span>
                <div class="path-title">200-Hour <em>Teacher Training</em></div>
                <p class="path-desc">
                  Our flagship Level 1 programme — a comprehensive, Yoga
                  Alliance accredited foundation for both aspiring teachers and
                  those seeking personal development.
                </p>
                <div class="path-meta">
                  200 hours · In Studio · Sep 2026–May 2027 · £3,250
                </div>
                <a href="/200-hour" class="path-link">Explore the 200-Hour →</a>
              </div>
            </div>
            <div class="path-card">
              <div class="path-card-body">
                <div class="path-logo-wrap">
                  <!-- TODO: add RYS300 logo once available -->
                   <img
                  src="<?php echo esc_url(get_template_directory_uri() . '/assets/logos/rys300-logo.png'); ?>"
                  alt="Yoga Alliance RYS 300 Accredited"
                  class="prog-logo"
              >
                </div>
                <span class="path-icon">300</span>
                <div class="path-title">
                  300-Hour <em>Advanced Training</em>
                </div>
                <p class="path-desc">
                  Our highly respected Level 2 programme for 200-hour qualified
                  teachers, allowing you to focus on your areas of interest and
                  create your own unique learning pathway.
                </p>
                <div class="path-meta">
                  300 hours · In Studio + Livestream · from £3,900
                </div>
                <a href="/300-hour" class="path-link">Explore the 300-Hour →</a>
              </div>
            </div>
            <div class="path-card">
              <div class="path-card-body">
                <div class="path-logo-wrap">
                  <img
                  src="<?php echo esc_url(get_template_directory_uri() . '/assets/logos/yacep-logo.png'); ?>"
                  alt="Yoga Alliance YACEP Accredited"
                  class="prog-logo"
              >
                </div>
                <span class="path-icon">CPD</span>
                <div class="path-title">CPD Training <em>Modules</em></div>
                <p class="path-desc">
                  25 specialist courses a year from Yin to Trauma Informed Yoga, Elemental Mandala Vinyasa and Yoga Nidra. 
                </p>
                <div class="path-meta">
                  15–60 hours · Various formats · £75–£675
                </div>
                <a href="/cpds" class="path-link">Browse all CPDs →</a>
              </div>
            </div>
            <div class="path-card">
              <div class="path-card-body">
                <div class="path-logo-wrap" style="visibility: hidden"></div>
                <span
                  class="path-icon"
                  style="
                    font-size: 38px;
                    color: var(--pink);
                    margin-bottom: 18px;
                  "
                  >Retreats</span
                >
                <div class="path-title">Yoga <em>Escapes</em></div>
                <p class="path-desc">
                  Immersive retreats in extraordinary locations, led by our
                  faculty, rooted in community.
                </p>
                <div class="path-meta">Ulpotha, Sri Lanka · Mar 2027</div>
                <a href="/retreats" class="path-link">View Retreats →</a>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- FLAGSHIP PROGRAMMES -->
       <?php if ($show_flagship_section) : ?>
      <section class="flagship-section" id="section-flagship">
        <h2 class="sr-only">200 &amp; 300 Hour</h2>
        <div class="flagship-inner">
          <div class="section-header-row">
            <div>
              <h3 class="section-heading" style="margin-bottom: 0">
                Flagship <em>programmes</em>
              </h3>
            </div>
            <a href="/yoga-teacher-training-calendar" class="see-all"
              >All training →</a
            >
          </div>
          <div class="flagship-grid">
            <div class="fc">
              <div class="fc-image-layer">
                <div class="fc-bg">
                  <?php if ($flagship_200_image) : ?>
                      <img
                          src="<?php echo esc_url($flagship_200_image['url']); ?>"
                          alt="<?php echo esc_attr($flagship_200_image['alt']); ?>"
                      />
                  <?php endif; ?>
                </div>
                <div class="fc-fade"></div>
              </div>
              <div class="fc-rest">
                <span class="fc-rest-tag">Yoga Alliance 200-RYS</span>
                <div class="fc-rest-title">
                  <em>200-Hour</em> Yoga Teacher Training
                </div>
                <div class="fc-rest-teacher">
                  Gingi Lee &amp; Charli Van Ness
                </div>
              </div>
              <div class="fc-hover-layer">
                <span class="fc-hover-level"
                  >Level 1 · 200-RYS · In Studio</span
                >
                <h3 class="fc-hover-title">
                  <em>200-Hour</em> Yoga Teacher Training
                </h3>
                <p class="fc-hover-desc">
                  A transformative foundation including 200+ hours of asana,
                  philosophy, anatomy, teaching methodology, pranayama,
                  meditation, chanting and personal practice. Led by Gingi Lee
                  and Charli Van Ness with an intimate cohort of 20.
                </p>
                <div class="fc-stats">
                  <div>
                    <span class="fcs-label">Duration</span
                    ><span class="fcs-val">7 months</span>
                  </div>
                  <div>
                    <span class="fcs-label">Next cohort</span
                    ><span class="fcs-val">Sep 2026</span>
                  </div>
                  <div>
                    <span class="fcs-label">Price</span
                    ><span class="fcs-val">£3,250</span>
                  </div>
                </div>
                <a href="/200-hour" class="fc-cta">Discover the 200-Hour →</a>
              </div>
            </div>

            <div class="fc">
              <div class="fc-image-layer">
                <div class="fc-bg">
                  <?php if ($flagship_300_image) : ?>
                      <img
                          src="<?php echo esc_url($flagship_300_image['url']); ?>"
                          alt="<?php echo esc_attr($flagship_300_image['alt']); ?>"
                      />
                  <?php endif; ?>
                </div>
                <div class="fc-fade"></div>
              </div>
              <div class="fc-rest">
                <span class="fc-rest-tag">Yoga Alliance 300-RYS</span>
                <div class="fc-rest-title">
                  <em>300-Hour</em> Yoga Teacher Training
                </div>
                <div class="fc-rest-teacher"> with Melanie Cooper, Gingi Lee & Faculty</div>
              </div>
              <div class="fc-hover-layer">
                <span class="fc-hover-level"
                  >Level 2 · 300-RYS · In Studio + Livestream</span
                >
                <h3 class="fc-hover-title">
                  <em>300-Hour</em> Yoga Teacher Training
                </h3>
                <p class="fc-hover-desc">
                  A modular programme for qualified teachers to diversify,
                  specialise and go deeper. Nearly 200 hours of electives means
                  you can create your own bespoke learning pathway. Flexible,
                  rigorous, and genuinely transformative.
                </p>
                <div class="fc-stats">
                  <div>
                    <span class="fcs-label">Duration</span
                    ><span class="fcs-val">1–5 years</span>
                  </div>
                  <div>
                    <span class="fcs-label">Format</span
                    ><span class="fcs-val">In Studio + Online</span>
                  </div>
                  <div>
                    <span class="fcs-label">From</span
                    ><span class="fcs-val">£3,900</span>
                  </div>
                </div>
                <a href="/300-hour" class="fc-cta">Discover the 300-Hour →</a>
              </div>
            </div>
          </div>
        </div>
      </section>
      <?php endif; ?>

      <!-- WHY TRAIN WITH US -->
      <section class="why-train" id="section-why">
        <h2 class="sr-only">Why Train Here</h2>
        <div class="why-train-inner">
          <div class="why-train-top">
            <div class="why-train-left">
              <h3
                class="section-heading"
                style="font-size: clamp(32px, 4.5vw, 58px)"
              >
                What makes us <em>different</em>
              </h3>
              <p class="intro-text">
                A lineage spanning three decades — from one of London's
                pioneering yoga centres to a thriving international school
                rooted in lived practice, exceptional teaching, and authentic
                community.
              </p>
            </div>
            <div class="why-train-right">
              <p class="why-pull">
                A school built on the belief that
                <span>sharing yoga is a profound act of service</span> — and
                that teachers need rigorous, authentic, deeply human training
                that builds on their own individual life experience.
              </p>
              <a href="/about" class="why-about-link">Read About Us →</a>
            </div>
          </div>
          <div class="reasons-strips">
            <div class="reason-strip">
              <span class="reason-num">1</span>
              <div class="reason-title">A Long <em>Lineage</em></div>
              <p class="reason-body">
                From one of London's first yoga centres to an international
                school of yoga — our roots run deep. A tradition of excellence
                in teaching, practice, and human connection built over 29 years.
              </p>
            </div>
            <div class="reason-strip">
              <span class="reason-num">2</span>
              <div class="reason-title">
                Exceptional <em>Senior Teachers</em>
              </div>
              <p class="reason-body">
                Our faculty bring decades of expertise in their specialised
                fields — people who don't just teach yoga, but who live it
                deeply and share it with genuine authority.
              </p>
            </div>
            <div class="reason-strip">
              <span class="reason-num">3</span>
              <div class="reason-title"><em>Intimate</em> Learning Spaces</div>
              <p class="reason-body">
                With just 20–24 students per course, your unique potential is
                truly seen, supported, and challenged to evolve.
              </p>
            </div>
            <div class="reason-strip">
              <span class="reason-num">4</span>
              <div class="reason-title">Yoga Alliance <em>Accredited</em></div>
              <p class="reason-body">
                200-RYS, 300-RYS and YACEP accredited programmes and courses
                with flexible, modular learning paths. Bursaries are available
                to support accessibility — contact us to find out more.
              </p>
            </div>
            <div class="reason-strip">
              <span class="reason-num">5</span>
              <div class="reason-title">
                Traditional Meets <em>Contemporary</em>
              </div>
              <p class="reason-body">
                Comprehensive training at the crossroads of ancient wisdom and
                modern life — honouring the depth of the tradition while
                speaking directly to the world we inhabit.
              </p>
            </div>
            <div class="reason-strip">
              <span class="reason-num">6</span>
              <div class="reason-title">
                A <em>Community</em> Where Transformation Happens
              </div>
              <p class="reason-body">
                A collaborative learning community where real change happens
                through authentic human connection — through vulnerability,
                co-regulation, laughter, tears, and everything in between.
              </p>
            </div>
          </div>
        </div>
      </section>

      <!-- RIPPLE EFFECT -->
      <section class="why-teachers">
        <div class="why-spiral" aria-hidden="true">
          <!-- TODO: flag spiral rendering to Ella -->
          <img src="assets/spirals/3. Spiral_Chalk_and_pink.svg" alt="" />
        </div>
        <div class="why-teachers-inner">
          <h3 class="section-heading">The ripple <em>effect</em></h3>
          <p class="ripple-quote">
            By teaching teachers, we are
            <span>tending to the future of yoga.</span>
          </p>
          <p class="why-body">
            The profound ripple effect of yoga travels far beyond our training
            centre. A yoga teacher can shape individual lives, communities, and
            the way yoga itself continues into the future — meeting people of
            all ages and walks of life, often at vulnerable or pivotal
            moments.<br /><br />Our mission is to nurture teachers who are
            skilled, confident, and rooted in lived practice. But equally
            important is cultivating thoughtful, grounded, emotionally
            intelligent human beings — people who can truly hold space, ask
            meaningful questions, and meet others with sensitivity, compassion,
            and understanding.
          </p>
          <a href="/about" class="why-link">Read our Mission →</a>
        </div>
      </section>

      <!-- FACULTY -->
      <section class="faculty-section" id="section-faculty">
        <h2 class="sr-only">Faculty</h2>
        <div class="faculty-inner">
          <div class="section-header-row">
            <div>
              <h3 class="section-heading" style="margin-bottom: 0">
                Our gifted teaching <em>faculty</em>
              </h3>
            </div>
            <a href="/faculty" class="see-all">All teachers →</a>
          </div>
          <div class="faculty-grid">
             <?php
              $featured_faculty = get_field('home_featured_faculty');

              if ($featured_faculty) :
                  foreach ($featured_faculty as $faculty_member) :
                      $faculty_id = $faculty_member->ID;

                      $faculty_name = get_the_title($faculty_id);
                      $faculty_link = get_permalink($faculty_id);
                      $card_image = get_field('card_image', $faculty_id);

                      $role_title = get_field('role_title', $faculty_id);
                      $short_bio = get_field('short_bio', $faculty_id);
                      $highlighted_tags = get_field('highlighted_tags', $faculty_id);

                      $first_name = strtok($faculty_name, ' ');
                      $surname = trim(str_replace($first_name, '', $faculty_name));
              ?>

                      <div class="fac-card">
                          <div class="fac-img">
                             <?php if ($card_image) : ?>
                                <img
                                    src="<?php echo esc_url($card_image['url']); ?>"
                                    alt="<?php echo esc_attr($card_image['alt']); ?>"
                                />
                              <?php endif; ?>

                              <div class="fac-img-fade"></div>
                          </div>

                          <div class="fac-colour">
                              <div class="fac-colour-body">
                                  <?php if ($role_title) : ?>
                                      <span class="fac-tag">
                                          <?php echo esc_html($role_title); ?>
                                      </span>
                                  <?php endif; ?>

                                  <div class="fac-name">
                                      <em><?php echo esc_html($first_name); ?></em>
                                      <?php echo esc_html($surname); ?>
                                  </div>

                                  <?php if ($highlighted_tags) : ?>
                                      <span class="fac-role">
                                          <?php echo esc_html(str_replace("\n", ' · ', trim($highlighted_tags))); ?>
                                      </span>
                                  <?php endif; ?>

                                  <?php if ($short_bio) : ?>
                                      <p class="fac-bio">
                                          <?php echo esc_html($short_bio); ?>
                                      </p>
                                  <?php endif; ?>

                                  <a href="<?php echo esc_url($faculty_link); ?>" class="fac-link">
                                    About <?php echo esc_html($first_name); ?> →
                                </a>
                              </div>
                          </div>

                          <div class="fac-body">
                              <?php if ($role_title) : ?>
                                  <span class="fac-tag">
                                      <?php echo esc_html($role_title); ?>
                                  </span>
                              <?php endif; ?>

                              <div class="fac-name">
                                  <em><?php echo esc_html($first_name); ?></em>
                                  <?php echo esc_html($surname); ?>
                              </div>

                              <?php if ($highlighted_tags) : ?>
                                  <span class="fac-role">
                                      <?php echo esc_html(str_replace("\n", ' · ', trim($highlighted_tags))); ?>
                                  </span>
                              <?php endif; ?>
                          </div>
                      </div>

              <?php
                  endforeach;
              endif;
              ?>
          </div>
        </div>
      </section>

      <!-- WORD STRIP -->
      <div class="word-strip-band">
        <div class="word-strip-inner">
          <div class="word-strip-item">
            <span class="ws-verb">Discover</span
            ><span class="ws-noun">your voice</span>
          </div>
          <span class="word-strip-sep">·</span>
          <div class="word-strip-item">
            <span class="ws-verb">Embody</span
            ><span class="ws-noun">the tradition</span>
          </div>
          <span class="word-strip-sep">·</span>
          <div class="word-strip-item">
            <span class="ws-verb">Evolve</span
            ><span class="ws-noun">your knowledge</span>
          </div>
          <span class="word-strip-sep">·</span>
          <div class="word-strip-item">
            <span class="ws-verb">Reflect</span
            ><span class="ws-noun">deeply</span>
          </div>
          <span class="word-strip-sep">·</span>
          <div class="word-strip-item">
            <span class="ws-verb">Belong</span
            ><span class="ws-noun">in community</span>
          </div>
          <span class="word-strip-sep">·</span>
          <div class="word-strip-item">
            <span class="ws-verb">Awaken</span
            ><span class="ws-noun">to possibility</span>
          </div>
        </div>
      </div>

      <!-- TESTIMONIALS -->
      <section class="testi-section" id="section-testimonials">
        <h2 class="sr-only">Testimonials</h2>
        <div class="testi-inner">
          <div class="section-header-row">
            <div>
              <h3 class="section-heading">What our <em>students</em> say</h3>
            </div>
          </div>
          <div class="testi-featured">
            <p class="testi-featured-quote">
              This course has truly been life-changing. It was a journey to the depth of my soul, opening my mind and my heart... I feel incredibly fortunate to have had this opportunity of community, connection and personal transformation.
            </p>
            <span class="testi-featured-name">Zaynah S</span>
          </div>
          <div class="testi-carousel-head">
            <div class="testi-arrows">
              <button class="testi-arrow" onclick="shiftTesti(-1)">←</button>
              <button class="testi-arrow" onclick="shiftTesti(1)">→</button>
            </div>
          </div>
          <div class="testi-track-wrap">
            <div class="testi-track" id="testiTrack">
              <div class="testi-card">
                <p class="testi-quote">
                 "A creative modern yoga teacher training programme put together by the most talented, authentic, and experienced yoga teachers... this is a yoga course for a lifetime!"
                </p>
                <span class="testi-name">José G</span>
              </div>
              <div class="testi-card">
                <p class="testi-quote">
                  "The sense of community that was created throughout the course was incredible and has given me a feeling of huge support and confidence to go out into the world and spread the wonders of yoga to others."
                </p>
                <span class="testi-name"
                  >Bianca B</span
                >
              </div>
              <div class="testi-card">
                <p class="testi-quote">
                  ""The space itself is a sanctuary, the teachers are down-to-earth and warm as well as being experts in their fields, and the course content is exceptional."
                </p>
                <span class="testi-name">Izzy H</span>
              </div>
              <div class="testi-card">
                <p class="testi-quote">
                  "I had the privilege to learn from the most knowledgeable, kind, and compassionate experts in the yoga universe."
                </p>
                <span class="testi-name"
                  >Vaho V</span
                >
              </div>
              <div class="testi-card">
                <p class="testi-quote">
                 "The focus on finding my own voice as a teacher is a gift that I will forever be grateful for as it has opened up a world of possibilities and aspirations for me."
                </p>
                <span class="testi-name"
                  >LC</span
                >
              </div>
              <div class="testi-card">
                <p class="testi-quote">
                 "10/10, you won't find another school like The Shala!"
                </p>
                <span class="testi-name"
                  >Graduate</span
                >
              </div>
              <div class="testi-card">
                <p class="testi-quote">
                 "It allows you to find out who you are on your own terms and gives space for you to become the best teacher YOU can be without imposing any restrictions or external values on you."
                </p>
                <span class="testi-name"
                  >Shelley G</span
                >
              </div>
              <div class="testi-card">
                <p class="testi-quote">
                 "The centre "genuinely radiates warmth, intention, and high vibrations. Every part of the centre feels like a safe space for embracing growth and deep transformation. I always come away feeling fuller, more equipped for life and for teaching"
                </p>
                <span class="testi-name"
                  >300 hour graduate</span
                >
              </div>
              <div class="testi-card">
                <p class="testi-quote">
                "Everyone at the Shala has been super supportive, kind but essentially great at giving teachers extra tools to go out and offer more. They literally try to give you as much of their knowledge and experience."
                </p>
                <span class="testi-name"
                  >AG</span
                >
              </div>
              <div class="testi-card">
                <p class="testi-quote">
                "It has been such a momentous journey and I have relished every second. I could never have foreseen how it has changed me both inside and out."
                </p>
                <span class="testi-name"
                  >KT</span
                >
              </div>
            </div>
          </div>
          <div class="testi-footer-link">
            <a href="/testimonials" class="testi-see-all"
              >Read more graduate testimonials →</a
            >
          </div>
        </div>
      </section>

      <!-- SHALA LIFE GALLERY -->
      <section class="gallery-band" id="section-life">
        <h2 class="sr-only">Shala Life</h2>
        <div class="gallery-band-header">
          <div>
            <h3 class="section-heading" style="margin-bottom: 0">
              Shala <em>Life</em>
            </h3>
          </div>
          <a href="/gallery" class="see-all">See our space →</a>
        </div>
        <div class="gallery-grid">
        <!-- GALLERY Grid -->
          <div class="g-cell g-tall">
              <?php if ($gallery_image_1) : ?>
                  <img
                      src="<?php echo esc_url($gallery_image_1['url']); ?>"
                      alt="<?php echo esc_attr($gallery_image_1['alt']); ?>"
                  >
              <?php endif; ?>
              <div class="g-overlay"></div>
          </div>
          <div class="g-cell">
              <?php if ($gallery_image_2) : ?>
                  <img
                      src="<?php echo esc_url($gallery_image_2['url']); ?>"
                      alt="<?php echo esc_attr($gallery_image_2['alt']); ?>"
                  >
              <?php endif; ?>
              <div class="g-overlay"></div>
          </div>                    
          <div class="g-cell">
              <?php if ($gallery_image_3) : ?>
                  <img
                      src="<?php echo esc_url($gallery_image_3['url']); ?>"
                      alt="<?php echo esc_attr($gallery_image_3['alt']); ?>"
                  >
              <?php endif; ?>
              <div class="g-overlay"></div>
          </div>
          <div class="g-cell">
              <?php if ($gallery_image_4) : ?>
                  <img
                      src="<?php echo esc_url($gallery_image_4['url']); ?>"
                      alt="<?php echo esc_attr($gallery_image_4['alt']); ?>"
                  >
              <?php endif; ?>
              <div class="g-overlay"></div>
          </div>
          <div class="g-cell">
              <?php if ($gallery_image_5) : ?>
                  <img
                      src="<?php echo esc_url($gallery_image_5['url']); ?>"
                      alt="<?php echo esc_attr($gallery_image_5['alt']); ?>"
                  >
              <?php endif; ?>
              <div class="g-overlay"></div>
          </div>

        </div>
      </section>

      <!-- RETREAT -->
      <?php if ($show_retreat_section) : ?>
      <section class="retreat-section" id="section-retreat">
          <h2 class="sr-only">Retreats</h2>

          <div class="retreat-inner">
              <div class="section-header-row">
                  <div>
                      <?php if ($retreat_heading) : ?>
                          <h3 class="section-heading" style="margin-bottom: 0">
                              <?php echo theshala_highlight_text($retreat_heading); ?>
                          </h3>
                      <?php endif; ?>
                  </div>

                  <?php if ($retreat_link) : ?>
                      <a
                          href="<?php echo esc_url($retreat_link['url']); ?>"
                          class="see-all"
                          target="<?php echo esc_attr($retreat_link['target']); ?>"
                      >
                          <?php echo esc_html($retreat_link['title']); ?>
                      </a>
                  <?php endif; ?>
              </div>

              <div class="retreat-layout">
                 <div class="retreat-collage">
                    <div class="rc-cell rc-wide">
                        <?php if ($retreat_image_1_wide) : ?>
                            <img src="<?php echo esc_url($retreat_image_1_wide['url']); ?>" alt="<?php echo esc_attr($retreat_image_1_wide['alt']); ?>">
                        <?php endif; ?>
                    </div>

                    <div class="rc-cell">
                        <?php if ($retreat_image_2) : ?>
                            <img src="<?php echo esc_url($retreat_image_2['url']); ?>" alt="<?php echo esc_attr($retreat_image_2['alt']); ?>">
                        <?php endif; ?>
                    </div>

                    <div class="rc-cell">
                        <?php if ($retreat_image_3) : ?>
                            <img src="<?php echo esc_url($retreat_image_3['url']); ?>" alt="<?php echo esc_attr($retreat_image_3['alt']); ?>">
                        <?php endif; ?>
                    </div>

                    <div class="rc-cell">
                        <?php if ($retreat_image_4) : ?>
                            <img src="<?php echo esc_url($retreat_image_4['url']); ?>" alt="<?php echo esc_attr($retreat_image_4['alt']); ?>">
                        <?php endif; ?>
                    </div>

                    <div class="rc-cell rc-span2">
                        <?php if ($retreat_image_5_wide) : ?>
                            <img src="<?php echo esc_url($retreat_image_5_wide['url']); ?>" alt="<?php echo esc_attr($retreat_image_5_wide['alt']); ?>">
                        <?php endif; ?>
                    </div>

                    <div class="rc-cell">
                        <?php if ($retreat_image_6) : ?>
                            <img src="<?php echo esc_url($retreat_image_6['url']); ?>" alt="<?php echo esc_attr($retreat_image_6['alt']); ?>">
                        <?php endif; ?>
                    </div>
                </div>

                  <div class="retreat-copy">
                      <!-- <div class="retreat-accent"></div> -->

                      <?php if ($retreat_title) : ?>
                          <h3 class="retreat-title">
                              <?php echo theshala_highlight_text($retreat_title); ?>
                          </h3>
                      <?php endif; ?>

                      <?php if ($retreat_dates_label) : ?>
                          <span class="retreat-dates-label">
                              <?php echo esc_html($retreat_dates_label); ?>
                          </span>
                      <?php endif; ?>

                      <?php if ($retreat_options) : ?>
                          <span class="retreat-options">
                              <?php echo esc_html($retreat_options); ?>
                          </span>
                      <?php endif; ?>

                      <?php if ($retreat_description) : ?>
                          <p class="retreat-desc">
                              <?php echo esc_html($retreat_description); ?>
                          </p>
                      <?php endif; ?>

                      <div class="retreat-meta">
                          <?php if ($retreat_meta_1_label || $retreat_meta_1_value) : ?>
                              <div>
                                  <span class="rmi-label"><?php echo esc_html($retreat_meta_1_label); ?></span>
                                  <span class="rmi-val"><?php echo esc_html($retreat_meta_1_value); ?></span>
                              </div>
                          <?php endif; ?>

                          <?php if ($retreat_meta_2_label || $retreat_meta_2_value) : ?>
                              <div>
                                  <span class="rmi-label"><?php echo esc_html($retreat_meta_2_label); ?></span>
                                  <span class="rmi-val"><?php echo esc_html($retreat_meta_2_value); ?></span>
                              </div>
                          <?php endif; ?>

                          <?php if ($retreat_meta_3_label || $retreat_meta_3_value) : ?>
                              <div>
                                  <span class="rmi-label"><?php echo esc_html($retreat_meta_3_label); ?></span>
                                  <span class="rmi-val"><?php echo esc_html($retreat_meta_3_value); ?></span>
                              </div>
                          <?php endif; ?>
                      </div>

                      <?php if ($retreat_button) : ?>
                          <a
                              href="<?php echo esc_url($retreat_button['url']); ?>"
                              class="retreat-btn"
                              target="<?php echo esc_attr($retreat_button['target']); ?>"
                          >
                              <?php echo esc_html($retreat_button['title']); ?>
                          </a>
                      <?php endif; ?>
                  </div>
              </div>
          </div>
      </section>
      <?php endif; ?>

      <!-- VAHNI BANNER -->
      <div class="vahni-banner">
        <div class="vahni-banner-inner">
          <div>
            <span class="vb-eyebrow"
              >Formerly the Shala London — classes now at Vahni</span
            >
            <h3 class="vb-title">
              Classes &amp; workshops with <em>Vahni</em>
            </h3>
            <p class="vb-body">
              Classes and workshops in our West Norwood space are now run by
              Vahni. Same teachers, same community, same space — a new name with
              a fresh focus on wellbeing.
            </p>
            <div class="vb-btns"
            >
              <a
                href="https://vahnilondon.com/schedule"
                target="_blank"
                rel="noopener"
                class="btn-vahni"
                >Vahni Schedule →</a
              >
              <a
                href="https://vahnilondon.com"
                target="_blank"
                rel="noopener"
                class="btn-vahni-outline"
                >Visit Vahni →</a
              >
            </div>
          </div>
          <div class="vahni-logo-wrap">
            <!-- TODO: add Vahni logo to assets/logos/ -->
            <img
                src="<?php echo esc_url(get_template_directory_uri() . '/assets/logos/vahni-logo.jpg'); ?>"
                alt="Vahni — the alchemy of wellbeing"
                style="mix-blend-mode: multiply"
            />                
          </div>
        </div>
      </div>

     <!-- BLOG -->
      <section class="blog-section" id="section-blog">
        <h2 class="sr-only">Blog</h2>
        <div class="blog-inner">
          <div class="blog-header">
            <div>
              <h3 class="section-heading" style="margin-bottom: 0">
                <em>Insights</em> from the blog
              </h3>
            </div>
            <div style="display: flex; gap: 16px; align-items: center">
              <div class="slider-arrows">
                <button class="s-arrow" onclick="shiftBlog(-1)">←</button>
                <button class="s-arrow" onclick="shiftBlog(1)">→</button>
              </div>
              <a href="/blog" class="see-all">All posts →</a>
            </div>
          </div>
          <div class="blog-track-wrap">
            <div class="blog-track" id="blogTrack">
              <?php
              $latest_posts = new WP_Query([
                  'post_type'      => 'post',
                  'posts_per_page' => 6,
                  'post_status'    => 'publish',
              ]);

              if ($latest_posts->have_posts()) :
                  while ($latest_posts->have_posts()) :
                      $latest_posts->the_post();

                      $post_id = get_the_ID();
                      $post_title = get_the_title();
                      $post_link = get_permalink();
                      $post_image = get_the_post_thumbnail_url($post_id, 'large');
                      $post_excerpt = get_the_excerpt();
                      $categories = get_the_category();
                      $category_name = !empty($categories) ? $categories[0]->name : 'Blog';
                      ?>

                      <a href="<?php echo esc_url($post_link); ?>" class="blog-card">
                          <div class="blog-img">
                              <?php if ($post_image) : ?>
                                  <img
                                      src="<?php echo esc_url($post_image); ?>"
                                      alt="<?php echo esc_attr($post_title); ?>"
                                  />
                              <?php endif; ?>
                          </div>

                          <div class="blog-copy">
                              <span class="blog-cat">
                                  <?php echo esc_html($category_name); ?>
                              </span>

                              <div class="blog-title">
                                  <?php echo esc_html($post_title); ?>
                              </div>

                              <p class="blog-excerpt">
                                  <?php echo esc_html(wp_trim_words($post_excerpt, 22)); ?>
                              </p>
                          </div>
                      </a>

                  <?php
                  endwhile;
                  wp_reset_postdata();
              endif;
              ?>
          </div>
          </div>
        </div>
      </section>

      <!-- NEWSLETTER -->
      <section class="newsletter" id="section-newsletter">
        <h2 class="sr-only">Newsletter</h2>
        <div class="newsletter-inner">
          <h3>Join our yoga <em>community</em></h3>
          <p>
            New courses, retreat announcements and blog posts — delivered
            thoughtfully.
          </p>
          <div class="nl-form">
             <div id="momence-plugin-lead-form"></div>
            <script
                async
                type="module"
                id="momence-plugin-lead-form-src"
                host_id="9055"
                fields="fullName,email"
                token="Ra7GErbXD5"
                country_code="gb"
                source_id="654"
                data-field-def='{"fullName":{"type":"text","label":"Full name","required":true,"hidden":false,"placeholder":"Full Name"},"email":{"type":"email","label":"Email","required":true}}'
                src="https://momence.com/plugin/lead-form/lead-form.js"
            ></script>
            </div>
          <p class="nl-note">No spam. Unsubscribe at any time.</p>
        </div>
      </section>
    </main>


<?php get_footer(); ?>