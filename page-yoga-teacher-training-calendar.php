<?php
/*
Template Name: Yoga Teacher Training Calendar
*/

get_header();

$hero_title = get_field('hero_title');
$hero_subtitle = get_field('hero_subtitle');
$flagship_cards = get_field('course_flagship_cards');
?>

 <main id="main-content">
      <!-- PAGE HEADER -->
      <section class="hero-utility bg-light-plum text-on-dark">
        <img
          class="hero-utility-spiral"
          src="<?php echo esc_url(get_template_directory_uri() . '/assets/spirals/spiral-1-cropped.png'); ?>"
          alt=""
          aria-hidden="true"
        />

        <div class="hero-utility-inner">
          <h1 class="hero-utility-title">
             <?php echo theshala_highlight_text($hero_title); ?>
          </h1>

           <p class="hero-utility-sub">
            <?php echo esc_html($hero_subtitle); ?>
          </p>
        </div>
        </div>
      </section>

      <!-- THIN ORANGE RULE -->
      <div class="orange-rule"></div>

      <!-- LEGEND -->
      <div class="legend-row">
        <div class="legend-row-inner">
          <span class="legend-label">Format:</span>
          <div class="legend">
            <div class="legend-item">
              <span class="legend-dot studio"></span> In Studio
            </div>
            <div class="legend-item">
              <span class="legend-dot live"></span> Livestream
            </div>
            <div class="legend-item">
              <span class="legend-dot both"></span> Studio &amp; Livestream
            </div>
          </div>
        </div>
      </div>

      <div class="main">
        <!-- FLAGSHIP CARDS -->

        <?php if ($flagship_cards) : ?>
        <div class="flagship-grid">
            <?php foreach ($flagship_cards as $card) : ?>

                <?php
                $card_style = $card['card_style'];
                $card_logo = $card['card_logo'];
                $card_eyebrow = $card['card_eyebrow'];
                $card_title = $card['card_title'];
                $card_meta = $card['card_meta'];
                $card_dates = $card['card_dates'];
                $card_price = $card['card_price'];
                $card_price_sub = $card['card_price_sub'];
                $card_button = $card['card_button'];
                $card_button_orange = $card['card_button_orange'];
                ?>

                <div class="flagship-card <?php echo esc_attr($card_style); ?>">
                    <?php if ($card_logo) : ?>
                        <div class="flagship-card-top">
                            <img
                                src="<?php echo esc_url($card_logo['url']); ?>"
                                alt="<?php echo esc_attr($card_logo['alt']); ?>"
                            />
                        </div>
                    <?php endif; ?>

                    <div class="flagship-card-body">
                        <?php if ($card_eyebrow) : ?>
                            <div class="flagship-card-eyebrow">
                                <?php echo esc_html($card_eyebrow); ?>
                            </div>
                        <?php endif; ?>

                        <?php if ($card_title) : ?>
                            <h3 class="flagship-card-title">
                                <?php echo theshala_highlight_text($card_title); ?>
                            </h3>
                        <?php endif; ?>

                        <?php if ($card_meta) : ?>
                            <p class="flagship-card-meta">
                                <?php echo esc_html($card_meta); ?>
                            </p>
                        <?php endif; ?>

                        <?php if ($card_dates) : ?>
                            <div class="flagship-card-dates">
                                <?php echo esc_html($card_dates); ?>
                            </div>
                        <?php endif; ?>

                        <?php if ($card_price) : ?>
                            <div class="flagship-card-price">
                                <?php echo esc_html($card_price); ?>
                            </div>
                        <?php endif; ?>

                        <?php if ($card_price_sub) : ?>
                            <div class="flagship-card-price-sub">
                                <?php echo esc_html($card_price_sub); ?>
                            </div>
                        <?php endif; ?>

                        <?php if ($card_button) : ?>
                            <a
                                href="<?php echo esc_url($card_button['url']); ?>"
                                class="flagship-card-cta <?php echo $card_button_orange ? 'is-orange' : ''; ?>"
                                target="<?php echo esc_attr($card_button['target']); ?>"
                            >
                                <?php echo esc_html($card_button['title']); ?>
                            </a>
                        <?php endif; ?>
                    </div>
                </div>

            <?php endforeach; ?>
        </div>
    <?php endif; ?>

        <!-- SECTION: SUMMER 2026 -->
        <div class="accordion-section">
          <button
            class="accordion-trigger"
            aria-expanded="true"
            onclick="toggleAccordion(this)"
          >
            <div class="accordion-trigger-left"><h2>Summer 2026</h2></div>
            <div class="accordion-trigger-right">
              <span class="section-count">3 courses</span>
              <svg
                class="accordion-chevron"
                viewBox="0 0 24 24"
                fill="none"
                stroke="currentColor"
                stroke-width="2"
              >
                <polyline points="6 9 12 15 18 9" />
              </svg>
            </div>
          </button>
          <div class="accordion-body open">
            <table class="cal-table">
              <thead>
                <tr>
                  <th style="width: 26%">Course</th>
                  <th style="width: 19%">Date</th>
                  <th style="width: 17%">Teacher</th>
                  <th style="width: 13%">Format</th>
                  <th class="th-price" style="width: 9%">Price</th>
                  <th class="th-hrs" style="width: 7%">Hours</th>
                  <th style="width: 9%"></th>
                </tr>
              </thead>
              <!-- <tbody>
                <tr class="row-studio">
                  <td class="td-course"><a href="#">Elemental Nidra</a></td>
                  <td class="td-date">
                    <strong>4–5 Jul 2026</strong><span>1 Jul intro</span>
                  </td>
                  <td class="td-teacher">Emma Landolt</td>
                  <td class="td-format">
                    <span class="format-pill fp-studio">In Studio</span>
                  </td>
                  <td class="td-price">£350</td>
                  <td class="td-hrs">20 hrs</td>
                  <td class="td-cta"><a href="#">Find out more →</a></td>
                </tr>

                <tr class="row-live">
                  <td class="td-course">
                    <a href="#">Theming Yoga Classes &amp; Workshops</a>
                  </td>
                  <td class="td-date"><strong>23 Aug 2026</strong></td>
                  <td class="td-teacher">Jennie Wadsten Sharma</td>
                  <td class="td-format">
                    <span class="format-pill fp-live">Livestream</span>
                  </td>
                  <td class="td-price">£75</td>
                  <td class="td-hrs">7 hrs</td>
                  <td class="td-cta"><a href="#">Find out more →</a></td>
                </tr>

                <tr class="row-live">
                  <td class="td-course">
                    <a href="#">Teaching Yoga for Neurodivergence</a>
                  </td>
                  <td class="td-date"><strong>29–30 Aug 2026</strong></td>
                  <td class="td-teacher">Charli Van Ness</td>
                  <td class="td-format">
                    <span class="format-pill fp-live">Livestream</span>
                  </td>
                  <td class="td-price">£325</td>
                  <td class="td-hrs">15 hrs</td>
                  <td class="td-cta"><a href="#">Find out more →</a></td>
                </tr>
              </tbody> -->
              <?php
              $today = date('Ymd');

              $upcoming_courses = new WP_Query([
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

              if ($upcoming_courses->have_posts()) :
                  while ($upcoming_courses->have_posts()) :
                      $upcoming_courses->the_post();

                      $course_id = get_the_ID();

                      $start_date = get_field('start_date', $course_id);
                      $end_date = get_field('end_date', $course_id);
                      $course_price = get_field('course_price', $course_id);
                      $course_hours = get_field('course_hours', $course_id);
                      $course_format = get_field('course_format', $course_id);
                      $course_instructors = get_field('course_instructors', $course_id);

                      $start_date_obj = $start_date ? DateTime::createFromFormat('Ymd', $start_date) : false;
                      $end_date_obj = $end_date ? DateTime::createFromFormat('Ymd', $end_date) : false;

                      $formatted_start_date = $start_date_obj ? $start_date_obj->format('j M Y') : '';
                      $formatted_end_date = $end_date_obj ? $end_date_obj->format('j M Y') : '';

                      $display_date = $formatted_start_date;

                      if ($formatted_end_date && $formatted_end_date !== $formatted_start_date) {
                          $display_date = $formatted_start_date . ' – ' . $formatted_end_date;
                      }

                      $format_label = '';

                      if (is_array($course_format)) {
                          $format_label = $course_format['label'] ?? implode(' + ', $course_format);
                      } else {
                          $format_label = $course_format;
                      }

                      $format_class = 'fp-live';

                      if (stripos($format_label, 'studio') !== false) {
                          $format_class = 'fp-studio';
                      } elseif (stripos($format_label, 'online') !== false || stripos($format_label, 'livestream') !== false) {
                          $format_class = 'fp-live';
                      } elseif (stripos($format_label, 'hybrid') !== false) {
                          $format_class = 'fp-hybrid';
                      }

                      $teacher_names = '';

                      if ($course_instructors) {
                          if (is_array($course_instructors)) {
                              $names = [];

                              foreach ($course_instructors as $instructor) {
                                  if (is_object($instructor)) {
                                      $names[] = get_the_title($instructor->ID);
                                  } else {
                                      $names[] = get_the_title($instructor);
                                  }
                              }

                              $teacher_names = implode(', ', $names);
                          } else {
                              $teacher_names = get_the_title($course_instructors);
                          }
                      }
                    ?>

                      <tr class="row-live">
                          <td class="td-course">
                              <a href="<?php the_permalink(); ?>">
                                  <?php the_title(); ?>
                              </a>
                          </td>

                          <td class="td-date">
                              <?php if ($display_date) : ?>
                                  <strong><?php echo esc_html($display_date); ?></strong>
                              <?php endif; ?>
                          </td>

                          <td class="td-teacher">
                              <?php echo esc_html($teacher_names); ?>
                          </td>

                          <td class="td-format">
                              <?php if ($format_label) : ?>
                                  <span class="format-pill <?php echo esc_attr($format_class); ?>">
                                      <?php echo esc_html($format_label); ?>
                                  </span>
                              <?php endif; ?>
                          </td>

                          <td class="td-price">
                              <?php echo esc_html($course_price); ?>
                          </td>

                          <td class="td-hrs">
                              <?php echo esc_html($course_hours); ?>
                          </td>

                          <td class="td-cta">
                              <a href="<?php the_permalink(); ?>">More →</a>
                          </td>
                      </tr>

             <?php
                endwhile;
                wp_reset_postdata();

            else :
            ?>

            <tr>
                <td colspan="7" class="courses-empty">
                    Courses coming soon.
                </td>
            </tr>

            <?php endif; ?>
            </table>
          </div>
          <!-- /accordion-body -->
        </div>
        <!-- /accordion-section -->

        <!-- SECTION: AUTUMN 2026 -->
        <div class="accordion-section">
          <button
            class="accordion-trigger"
            aria-expanded="false"
            onclick="toggleAccordion(this)"
          >
            <div class="accordion-trigger-left"><h2>Autumn 2026</h2></div>
            <div class="accordion-trigger-right">
              <span class="section-count">12 courses</span>
              <svg
                class="accordion-chevron"
                viewBox="0 0 24 24"
                fill="none"
                stroke="currentColor"
                stroke-width="2"
              >
                <polyline points="6 9 12 15 18 9" />
              </svg>
            </div>
          </button>
          <div class="accordion-body">
            <table class="cal-table">
              <thead>
                <tr>
                  <th style="width: 26%">Course</th>
                  <th style="width: 19%">Date</th>
                  <th style="width: 17%">Teacher</th>
                  <th style="width: 13%">Format</th>
                  <th class="th-price" style="width: 9%">Price</th>
                  <th class="th-hrs" style="width: 7%">Hours</th>
                  <th style="width: 9%"></th>
                </tr>
              </thead>
              <tbody>
                <tr class="row-saha">
                  <td class="td-course">
                    <a href="#">Saha Gatherings — Teacher Community</a>
                  </td>
                  <td class="td-date"><strong>31 Aug 2026</strong></td>
                  <td class="td-teacher">Gingi Lee &amp; Melanie Cooper</td>
                  <td class="td-format">
                    <span class="format-pill fp-studio">In Studio</span>
                  </td>
                  <td class="td-price">£20</td>
                  <td class="td-hrs">—</td>
                  <td class="td-cta"><a href="#">Find out more →</a></td>
                </tr>

                <tr class="row-studio">
                  <td class="td-course">
                    <span class="course-sub">Flagship · 200-Hour</span>
                    <a href="#">200-Hour Yoga Teacher Training</a>
                  </td>
                  <td class="td-date">
                    <strong>12 Sep 2026 – 15 Mar 2027</strong>
                  </td>
                  <td class="td-teacher">Gingi Lee &amp; Charli Van Ness</td>
                  <td class="td-format">
                    <span class="format-pill fp-studio">In Studio</span>
                  </td>
                  <td class="td-price">£3,250</td>
                  <td class="td-hrs">200 hrs</td>
                  <td class="td-cta"><a href="#">Find out more →</a></td>
                </tr>

                <tr class="row-live philo-table">
                  <td class="td-course">
                    <a href="#" class="philo-main">Philosophy Club</a>
                    <span class="philo-session"
                      >Yoga and Death — Surrendering to Impermanence</span
                    >
                  </td>
                  <td class="td-date"><strong>15 Sep 2026</strong></td>
                  <td class="td-teacher">Daniel Simpson</td>
                  <td class="td-format">
                    <span class="format-pill fp-live">Livestream</span>
                  </td>
                  <td class="td-price">£30</td>
                  <td class="td-hrs">2 hrs</td>
                  <td class="td-cta"><a href="#">Find out more →</a></td>
                </tr>

                <tr class="row-studio">
                  <td class="td-course">
                    <a href="#">Inversions, Arm Balances &amp; Backbends</a>
                  </td>
                  <td class="td-date"><strong>19–20 Sep 2026</strong></td>
                  <td class="td-teacher">Charli Van Ness</td>
                  <td class="td-format">
                    <span class="format-pill fp-studio">In Studio</span>
                  </td>
                  <td class="td-price">£325</td>
                  <td class="td-hrs">15 hrs</td>
                  <td class="td-cta"><a href="#">Find out more →</a></td>
                </tr>

                <tr class="row-both">
                  <td class="td-course">
                    <span class="course-sub">300-Hour · Core Module 1</span>
                    <a href="#"
                      >Beyond Asana — The Inner Path of Teaching Yoga</a
                    >
                  </td>
                  <td class="td-date">
                    <strong>25–28 Sep &amp; 4, 18 Oct 2026</strong>
                  </td>
                  <td class="td-teacher">Gingi Lee &amp; Melanie Cooper</td>
                  <td class="td-format">
                    <span class="format-pill fp-both"
                      ><span class="fp-half fp-half-l">Studio</span
                      ><span class="fp-half fp-half-r">Live</span></span
                    >
                  </td>
                  <td class="td-price">£595</td>
                  <td class="td-hrs">60 hrs</td>
                  <td class="td-cta"><a href="#">Find out more →</a></td>
                </tr>

                <tr class="row-saha">
                  <td class="td-course">
                    <a href="#">Saha Gatherings — Teacher Community</a>
                  </td>
                  <td class="td-date"><strong>3 Oct 2026</strong></td>
                  <td class="td-teacher">Gingi Lee &amp; Kookie Punam Gill</td>
                  <td class="td-format">
                    <span class="format-pill fp-studio">In Studio</span>
                  </td>
                  <td class="td-price">£20</td>
                  <td class="td-hrs">—</td>
                  <td class="td-cta"><a href="#">Find out more →</a></td>
                </tr>

                <tr class="row-studio">
                  <td class="td-course">
                    <a href="#">Postnatal Baby &amp; Me</a>
                  </td>
                  <td class="td-date"><strong>3–4 Oct 2026</strong></td>
                  <td class="td-teacher">Alexa Dean</td>
                  <td class="td-format">
                    <span class="format-pill fp-studio">In Studio</span>
                  </td>
                  <td class="td-price">£350</td>
                  <td class="td-hrs">20 hrs</td>
                  <td class="td-cta"><a href="#">Find out more →</a></td>
                </tr>

                <tr class="row-live">
                  <td class="td-course">
                    <a href="#">Sacred Breath: Pranayama</a>
                  </td>
                  <td class="td-date">
                    <strong>31 Oct – 10 Dec 2026</strong><span>8 sessions</span>
                  </td>
                  <td class="td-teacher">
                    Melanie Cooper &amp; Jennie Wadsten Sharma
                  </td>
                  <td class="td-format">
                    <span class="format-pill fp-live">Livestream</span>
                  </td>
                  <td class="td-price">£450</td>
                  <td class="td-hrs">35 hrs</td>
                  <td class="td-cta"><a href="#">Find out more →</a></td>
                </tr>

                <tr class="row-saha">
                  <td class="td-course">
                    <a href="#">Saha Gatherings — Teacher Community</a>
                  </td>
                  <td class="td-date"><strong>7 Nov 2026</strong></td>
                  <td class="td-teacher">Gingi Lee</td>
                  <td class="td-format">
                    <span class="format-pill fp-studio">In Studio</span>
                  </td>
                  <td class="td-price">£20</td>
                  <td class="td-hrs">—</td>
                  <td class="td-cta"><a href="#">Find out more →</a></td>
                </tr>

                <tr class="row-studio">
                  <td class="td-course"><a href="#">Yoga Nidra</a></td>
                  <td class="td-date"><strong>20–22 Nov 2026</strong></td>
                  <td class="td-teacher">
                    Melanie Cooper &amp; Jennie Wadsten Sharma
                  </td>
                  <td class="td-format">
                    <span class="format-pill fp-studio">In Studio</span>
                  </td>
                  <td class="td-price">£495</td>
                  <td class="td-hrs">30 hrs</td>
                  <td class="td-cta"><a href="#">Find out more →</a></td>
                </tr>

                <tr class="row-studio">
                  <td class="td-course"><a href="#">Menstrual Health</a></td>
                  <td class="td-date"><strong>27–29 Nov 2026</strong></td>
                  <td class="td-teacher">
                    Charli Van Ness &amp; Olivia Fallon
                  </td>
                  <td class="td-format">
                    <span class="format-pill fp-studio">In Studio</span>
                  </td>
                  <td class="td-price">£450</td>
                  <td class="td-hrs">30 hrs</td>
                  <td class="td-cta"><a href="#">Find out more →</a></td>
                </tr>

                <tr class="row-saha">
                  <td class="td-course">
                    <a href="#">Saha Gatherings — Teacher Community</a>
                  </td>
                  <td class="td-date"><strong>5 Dec 2026</strong></td>
                  <td class="td-teacher">Gingi Lee</td>
                  <td class="td-format">
                    <span class="format-pill fp-studio">In Studio</span>
                  </td>
                  <td class="td-price">£20</td>
                  <td class="td-hrs">—</td>
                  <td class="td-cta"><a href="#">Find out more →</a></td>
                </tr>

                <tr class="row-studio">
                  <td class="td-course">
                    <a href="#">Sacred Sound &amp; Ceremony</a>
                  </td>
                  <td class="td-date"><strong>5–7 Dec 2026</strong></td>
                  <td class="td-teacher">Anne Malone</td>
                  <td class="td-format">
                    <span class="format-pill fp-studio">In Studio</span>
                  </td>
                  <td class="td-price">£450</td>
                  <td class="td-hrs">30 hrs</td>
                  <td class="td-cta"><a href="#">Find out more →</a></td>
                </tr>
              </tbody>
            </table>
          </div>
          <!-- /accordion-body -->
        </div>
        <!-- /accordion-section -->

        <!-- SECTION: WINTER 2027 -->
        <div class="accordion-section">
          <button
            class="accordion-trigger"
            aria-expanded="false"
            onclick="toggleAccordion(this)"
          >
            <div class="accordion-trigger-left"><h2>Winter 2027</h2></div>
            <div class="accordion-trigger-right">
              <span class="section-count">5 courses</span>
              <svg
                class="accordion-chevron"
                viewBox="0 0 24 24"
                fill="none"
                stroke="currentColor"
                stroke-width="2"
              >
                <polyline points="6 9 12 15 18 9" />
              </svg>
            </div>
          </button>
          <div class="accordion-body">
            <table class="cal-table">
              <thead>
                <tr>
                  <th style="width: 26%">Course</th>
                  <th style="width: 19%">Date</th>
                  <th style="width: 17%">Teacher</th>
                  <th style="width: 13%">Format</th>
                  <th class="th-price" style="width: 9%">Price</th>
                  <th class="th-hrs" style="width: 7%">Hours</th>
                  <th style="width: 9%"></th>
                </tr>
              </thead>
              <tbody>
                <tr class="row-both">
                  <td class="td-course">
                    <span class="course-sub">300-Hour · Core Module 2</span>
                    <a href="#"
                      >Embodied Asana — The Art &amp; Science of Physical
                      Practice</a
                    >
                  </td>
                  <td class="td-date"><strong>22–25 Jan 2027</strong></td>
                  <td class="td-teacher">Gingi Lee &amp; Melanie Cooper</td>
                  <td class="td-format">
                    <span class="format-pill fp-both"
                      ><span class="fp-half fp-half-l">Studio</span
                      ><span class="fp-half fp-half-r">Live</span></span
                    >
                  </td>
                  <td class="td-price">£595</td>
                  <td class="td-hrs">40 hrs</td>
                  <td class="td-cta"><a href="#">Find out more →</a></td>
                </tr>

                <tr class="row-studio">
                  <td class="td-course">
                    <a href="#">Somatic Yoga — Intuitive You</a>
                  </td>
                  <td class="td-date"><strong>30–31 Jan 2027</strong></td>
                  <td class="td-teacher">Charli Van Ness</td>
                  <td class="td-format">
                    <span class="format-pill fp-studio">In Studio</span>
                  </td>
                  <td class="td-price">£325</td>
                  <td class="td-hrs">15 hrs</td>
                  <td class="td-cta"><a href="#">Find out more →</a></td>
                </tr>

                <tr class="row-both">
                  <td class="td-course"><a href="#">Kids Yoga</a></td>
                  <td class="td-date">
                    <strong>19–21 Feb &amp; 14 Mar 2027</strong>
                  </td>
                  <td class="td-teacher">Charli Van Ness</td>
                  <td class="td-format">
                    <span class="format-pill fp-both"
                      ><span class="fp-half fp-half-l">Studio</span
                      ><span class="fp-half fp-half-r">Live</span></span
                    >
                  </td>
                  <td class="td-price">£595</td>
                  <td class="td-hrs">35 hrs</td>
                  <td class="td-cta"><a href="#">Find out more →</a></td>
                </tr>

                <tr class="row-both">
                  <td class="td-course"><a href="#">Yin Yoga</a></td>
                  <td class="td-date"><strong>27–28 Feb 2027</strong></td>
                  <td class="td-teacher">Melanie Cooper</td>
                  <td class="td-format">
                    <span class="format-pill fp-both"
                      ><span class="fp-half fp-half-l">Studio</span
                      ><span class="fp-half fp-half-r">Live</span></span
                    >
                  </td>
                  <td class="td-price">£395</td>
                  <td class="td-hrs">40 hrs</td>
                  <td class="td-cta"><a href="#">Find out more →</a></td>
                </tr>

                <tr class="row-both">
                  <td class="td-course"><a href="#">Pregnancy Yoga</a></td>
                  <td class="td-date">
                    <strong>2 Mar (intro) + 4–8 Mar 2027</strong>
                  </td>
                  <td class="td-teacher">Alexa Dean</td>
                  <td class="td-format">
                    <span class="format-pill fp-both"
                      ><span class="fp-half fp-half-l">Studio</span
                      ><span class="fp-half fp-half-r">Live</span></span
                    >
                  </td>
                  <td class="td-price">£650</td>
                  <td class="td-hrs">50 hrs</td>
                  <td class="td-cta"><a href="#">Find out more →</a></td>
                </tr>
              </tbody>
            </table>
          </div>
          <!-- /accordion-body -->
        </div>
        <!-- /accordion-section -->

        <!-- SECTION: SPRING 2027 -->
        <div class="accordion-section">
          <button
            class="accordion-trigger"
            aria-expanded="false"
            onclick="toggleAccordion(this)"
          >
            <div class="accordion-trigger-left"><h2>Spring 2027</h2></div>
            <div class="accordion-trigger-right">
              <span class="section-count">2 courses</span>
              <svg
                class="accordion-chevron"
                viewBox="0 0 24 24"
                fill="none"
                stroke="currentColor"
                stroke-width="2"
              >
                <polyline points="6 9 12 15 18 9" />
              </svg>
            </div>
          </button>
          <div class="accordion-body">
            <table class="cal-table" style="margin-bottom: 0">
              <thead>
                <tr>
                  <th style="width: 26%">Course</th>
                  <th style="width: 19%">Date</th>
                  <th style="width: 17%">Teacher</th>
                  <th style="width: 13%">Format</th>
                  <th class="th-price" style="width: 9%">Price</th>
                  <th class="th-hrs" style="width: 7%">Hours</th>
                  <th style="width: 9%"></th>
                </tr>
              </thead>
              <tbody>
                <tr class="row-studio">
                  <td class="td-course"><a href="#">Chair Yoga</a></td>
                  <td class="td-date"><strong>17–18 Apr 2027</strong></td>
                  <td class="td-teacher">Dina Cohen</td>
                  <td class="td-format">
                    <span class="format-pill fp-studio">In Studio</span>
                  </td>
                  <td class="td-price">£350</td>
                  <td class="td-hrs">25 hrs</td>
                  <td class="td-cta"><a href="#">Find out more →</a></td>
                </tr>

                <tr class="row-both">
                  <td class="td-course">
                    <a href="#">Creative Yoga Sequencing</a>
                  </td>
                  <td class="td-date"><strong>24–26 Apr 2027</strong></td>
                  <td class="td-teacher">Charli Van Ness</td>
                  <td class="td-format">
                    <span class="format-pill fp-both"
                      ><span class="fp-half fp-half-l">Studio</span
                      ><span class="fp-half fp-half-r">Live</span></span
                    >
                  </td>
                  <td class="td-price">£450</td>
                  <td class="td-hrs">30 hrs</td>
                  <td class="td-cta"><a href="#">Find out more →</a></td>
                </tr>

                <tr>
                  <td
                    colspan="7"
                    style="
                      padding: 20px 0;
                      font-size: 0.8rem;
                      color: var(--charcoal);
                      opacity: 0.45;
                      font-style: italic;
                      font-family: var(--cormorant);
                      font-size: 1rem;
                    "
                  >
                    More courses coming soon — sign up to our
                    <a
                      href="https://www.theshalalondon.com/newsletters-shala/"
                      target="_blank"
                      rel="noopener"
                      style="
                        color: var(--pink);
                        border-bottom: 1px solid rgba(212, 0, 98, 0.3);
                        font-style: normal;
                      "
                      >mailing list</a
                    >
                    to be first to hear.
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
          <!-- /accordion-body -->
        </div>
        <!-- /accordion-section -->
      </div>
      <!-- /main -->

      <!-- CTA BAND -->
      <div class="cta-band">
        <h2>Stay in the loop</h2>
        <p>
          Be first to hear about new courses, early-bird openings and Shala
          happenings.
        </p>
        <div class="cta-btns">
          <a
            href="https://www.theshalalondon.com/newsletters-shala/"
            target="_blank"
            rel="noopener"
            class="btn-white"
            >Newsletter Sign Up</a
          >
        </div>
      </div>
    </main>

<?php get_footer(); ?>