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
            <div">
                <h2 class="h3-sub">Upcoming <em>Courses</em></h2>
            </div>
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
         
          <!-- /accordion-body -->
        </div>
        
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