<?php

get_header();

$blog_page_id = get_option('page_for_posts');

$hero_title = get_field('hero_title', $blog_page_id);
$hero_subtitle = get_field('hero_subtitle', $blog_page_id);
?>
<main id="main-content">
      <!-- PAGE HEADER -->
      <section class="hero-standard bg-pinked-linen text-on-light">
        <div class="hero-standard-inner">
          <img
            class="hero-standard-spiral"
            src="<?php echo esc_url(get_template_directory_uri() . '/assets/spirals/spiral-3-cropped.png'); ?>"
            alt=""
            aria-hidden="true"
          />
          <div class="hero-standard-content">
            <h1 class="hero-standard-title">
               <?php echo theshala_highlight_text($hero_title); ?>
            </h1>

            <p class="hero-standard-sub">
               <?php echo esc_html($hero_subtitle); ?>
            </p>
          </div>
        </div>
      </section>

      <!-- FILTER BAR Needs Taggs for blogs-->
      <!-- <nav class="filter-bar" aria-label="Filter posts by topic">
        <div class="filter-bar-inner">
          <span class="filter-label">Topics</span>

          <div class="filter-chips" id="filterChips">
            <a href="#" class="active" data-topic="all">All</a>
            <a href="#" data-topic="practice">Practice</a>
            <a href="#" data-topic="philosophy">Philosophy</a>
            <a href="#" data-topic="pranayama">Pranayama &amp; Breath</a>
            <a href="#" data-topic="nidra">Yoga Nidra</a>
            <a href="#" data-topic="womens-health">Women's Health</a>
            <a href="#" data-topic="teaching">Teaching Life</a>
            <a href="#" data-topic="interviews">Interviews</a>
          </div>

          <div class="filter-active" id="filterActive">
            <span class="filter-active-label">Filtering by</span>
            <span class="filter-active-pill" id="filterActivePill"
              >Topic name</span
            >
            <button class="filter-active-clear" id="filterClear">
              Clear filter
            </button>
          </div>

          <button
            class="filter-more"
            id="filterMore"
            aria-expanded="false"
            aria-controls="topicsPanel"
          >
            <span>All topics</span><span class="filter-more-icon">+</span>
          </button>

          <div class="filter-search">
            <input
              type="text"
              placeholder="Search articles…"
              aria-label="Search articles"
            />
          </div>
        </div>
      </nav> -->

      <!-- ALL TOPICS EXPANDED PANEL -->
      <!-- <div class="topics-panel" id="topicsPanel" aria-hidden="true">
        <div class="topics-panel-inner">
          <div class="topics-panel-grid">
            <div class="topics-panel-group">
              <h4>Practice</h4>
              <a href="#" data-topic="practice">Practice — general</a>
              <a href="#" data-topic="asana">Asana &amp; alignment</a>
              <a href="#" data-topic="pranayama">Pranayama &amp; breath</a>
              <a href="#" data-topic="nidra">Yoga Nidra</a>
              <a href="#" data-topic="meditation">Meditation</a>
              <a href="#" data-topic="restorative">Restorative &amp; Yin</a>
              <a href="#" data-topic="vinyasa">Vinyasa</a>
            </div>

            <div class="topics-panel-group">
              <h4>Body &amp; Wellbeing</h4>
              <a href="#" data-topic="anatomy">Anatomy</a>
              <a href="#" data-topic="womens-health">Women's health</a>
              <a href="#" data-topic="menstrual">Menstrual cycle</a>
              <a href="#" data-topic="menopause">Menopause</a>
              <a href="#" data-topic="pregnancy">Pregnancy &amp; post-natal</a>
              <a href="#" data-topic="trauma">Trauma-informed</a>
              <a href="#" data-topic="ayurveda">Ayurveda</a>
              <a href="#" data-topic="sleep">Sleep</a>
            </div>

            <div class="topics-panel-group">
              <h4>Philosophy &amp; Tradition</h4>
              <a href="#" data-topic="philosophy">Philosophy</a>
              <a href="#" data-topic="yoga-sutras">Yoga Sutras</a>
              <a href="#" data-topic="bhagavad-gita">Bhagavad Gita</a>
              <a href="#" data-topic="tantra">Tantra</a>
              <a href="#" data-topic="ethics">Yamas &amp; Niyamas</a>
              <a href="#" data-topic="mythology">Mythology</a>
            </div>

            <div class="topics-panel-group">
              <h4>Teaching &amp; Community</h4>
              <a href="#" data-topic="teaching">Teaching life</a>
              <a href="#" data-topic="theming">Theming &amp; sequencing</a>
              <a href="#" data-topic="adjustments">Adjustments &amp; assists</a>
              <a href="#" data-topic="kids-yoga">Kids yoga</a>
              <a href="#" data-topic="chair-yoga">Chair yoga</a>
              <a href="#" data-topic="neurodivergence">Neurodivergence</a>
              <a href="#" data-topic="interviews">Interviews</a>
              <a href="#" data-topic="retreats">Retreats &amp; travel</a>
            </div>
          </div>
        </div>
      </div> -->

      <!-- FEATURED POST DYNAMIC-->
     <?php
      $blog_page_id = get_option('page_for_posts');
      $featured_post = get_field('featured_blog_post', $blog_page_id);

      if ($featured_post) :
          $featured_post_id = is_object($featured_post) ? $featured_post->ID : $featured_post;

          $featured_title = get_the_title($featured_post_id);
          $featured_link = get_permalink($featured_post_id);
          $featured_excerpt = get_the_excerpt($featured_post_id);
          $featured_date = get_the_date('M Y', $featured_post_id);
          $featured_image = get_the_post_thumbnail_url($featured_post_id, 'large');
          $featured_categories = get_the_category($featured_post_id);
          $featured_category = !empty($featured_categories) ? $featured_categories[0]->name : 'Blog';
      ?>

      <section class="featured-section">
        <div class="featured-inner">
          <span class="featured-eyebrow">Featured</span>

          <a href="<?php echo esc_url($featured_link); ?>" class="featured-card">
            <div class="featured-img">
              <span class="featured-img-tag">Featured</span>

              <?php if ($featured_image) : ?>
                <img
                  src="<?php echo esc_url($featured_image); ?>"
                  alt="<?php echo esc_attr($featured_title); ?>"
                />
              <?php endif; ?>
            </div>

            <div class="featured-text">
              <div class="featured-meta">
                <span class="featured-cat"><?php echo esc_html($featured_category); ?></span>
                <span class="dot"></span>
                <span><?php echo esc_html($featured_date); ?></span>
              </div>

              <h2 class="featured-title">
                <?php echo esc_html($featured_title); ?>
              </h2>

              <?php if ($featured_excerpt) : ?>
                <p class="featured-excerpt">
                  <?php echo esc_html($featured_excerpt); ?>
                </p>
              <?php endif; ?>

              <span class="featured-link">Read the full piece →</span>
            </div>
          </a>
        </div>
      </section>

      <?php endif; ?>

      <!-- POSTS GRID -->
       <?php
        $paged = get_query_var('paged') ? get_query_var('paged') : 1;

        query_posts(array(
            'post_type'      => 'post',
            'posts_per_page' => 9,
            'paged'          => $paged,
        ));
        ?>
      <section class="posts-section">
        <div class="posts-inner">
          <div class="posts-header">
            <h2 class="posts-h2">More from <em>the journal</em></h2>

            <?php
            global $wp_query;

            $posts_per_page = (int) $wp_query->query_vars['posts_per_page'];
            $current_page   = max(1, get_query_var('paged'));

            $start = (($current_page - 1) * $posts_per_page) + 1;
            $end   = min($start + $posts_per_page - 1, $wp_query->found_posts);
            ?>

            <?php if ($wp_query->found_posts > 0) : ?>
                <span class="posts-count">
                    Showing <?php echo esc_html($start); ?>–<?php echo esc_html($end); ?> of <?php echo esc_html($wp_query->found_posts); ?> articles
                </span>
            <?php endif; ?>
        </div>
          <!-- Static -->
          <!-- <div class="posts-grid">
            <a href="#" class="post-card">
              <div class="post-card-img">
                <img
                  src="assets/images/blog-menopause.jpg"
                  alt="Reclaiming the Crone"
                />
              </div>
              <div class="post-card-body">
                <span class="post-card-eyebrow">Women's Health</span>
                <h3 class="post-card-title">
                  Reclaiming the Crone — womb wisdom beyond menopause
                </h3>
                <p class="post-card-excerpt">
                  Ancient wisdom for modern women — how the doshas dance through
                  your cycle, and how to care for each phase with tenderness.
                </p>
                <div class="post-card-foot">
                  <span class="post-card-date">Oct 2025</span>
                  <span class="post-card-read">Read more →</span>
                </div>
              </div>
            </a>

            <a href="#" class="post-card">
              <div class="post-card-img">
                <img
                  src="assets/images/blog-ayurveda.jpg"
                  alt="Ayurveda &amp; the menstrual cycle"
                />
              </div>
              <div class="post-card-body">
                <span class="post-card-eyebrow">Women's Health</span>
                <h3 class="post-card-title">
                  Ayurveda &amp; the menstrual cycle
                </h3>
                <p class="post-card-excerpt">
                  How the doshas dance through your cycle, and how to care for
                  each phase with tenderness — drawing on Ayurvedic teaching.
                </p>
                <div class="post-card-foot">
                  <span class="post-card-date">Sep 2025</span>
                  <span class="post-card-read">Read more →</span>
                </div>
              </div>
            </a>

            <a href="#" class="post-card">
              <div class="post-card-img">
                <img
                  src="assets/images/blog-nidra-sleep.jpg"
                  alt="Yoga Nidra for sleep"
                />
              </div>
              <div class="post-card-body">
                <span class="post-card-eyebrow">Yoga Nidra</span>
                <h3 class="post-card-title">
                  A free Yoga Nidra for waking in the night
                </h3>
                <p class="post-card-excerpt">
                  Waking in the middle of the night with an overactive brain can
                  be anxiety-inducing — Melanie Cooper offers a free recording
                  to guide you back to sleep.
                </p>
                <div class="post-card-foot">
                  <span class="post-card-date">Sep 2025</span>
                  <span class="post-card-read">Read more →</span>
                </div>
              </div>
            </a>

            <a href="#" class="post-card">
              <div class="post-card-img">
                <img
                  src="assets/images/blog-28-day.jpg"
                  alt="Yoga for a 28-day cycle"
                />
              </div>
              <div class="post-card-body">
                <span class="post-card-eyebrow">Practice</span>
                <h3 class="post-card-title">Yoga for a 28-day cycle</h3>
                <p class="post-card-excerpt">
                  There's a quiet power in showing up for yourself each day. But
                  what if there were days when showing up looked different —
                  softer, slower, more inward?
                </p>
                <div class="post-card-foot">
                  <span class="post-card-date">Aug 2025</span>
                  <span class="post-card-read">Read more →</span>
                </div>
              </div>
            </a>

            <a href="#" class="post-card">
              <div class="post-card-img">
                <img src="assets/images/blog-theming.jpg" alt="Teaching Life" />
              </div>
              <div class="post-card-body">
                <span class="post-card-eyebrow">Teaching Life</span>
                <h3 class="post-card-title">
                  The real reason my classes started filling up again
                </h3>
                <p class="post-card-excerpt">
                  The quiet worry we don't always talk about — when sign-ups
                  feel sparse and your spark fades. It's not just the low
                  numbers, it's how they mess with your confidence.
                </p>
                <div class="post-card-foot">
                  <span class="post-card-date">Jul 2025</span>
                  <span class="post-card-read">Read more →</span>
                </div>
              </div>
            </a>

            <a href="blog-article.html" class="post-card">
              <div class="post-card-img">
                <img
                  src="assets/images/blog-pranayama-thumb.jpg"
                  alt="Pranayama"
                />
              </div>
              <div class="post-card-body">
                <span class="post-card-eyebrow">Pranayama &amp; Breath</span>
                <h3 class="post-card-title">
                  Pranayama as an essential daily support system
                </h3>
                <p class="post-card-excerpt">
                  An exploration of the benefits of this practice — how
                  transformative and supportive pranayama can be when woven into
                  the fabric of a daily life.
                </p>
                <div class="post-card-foot">
                  <span class="post-card-date archive">From the archive</span>
                  <span class="post-card-read">Read more →</span>
                </div>
              </div>
            </a>

            <a href="#" class="post-card">
              <div class="post-card-img">
                <img
                  src="assets/images/blog-nidra-opposites.jpg"
                  alt="Yoga Nidra"
                />
              </div>
              <div class="post-card-body">
                <span class="post-card-eyebrow">Yoga Nidra</span>
                <h3 class="post-card-title">
                  Yoga Nidra and awareness of opposites
                </h3>
                <p class="post-card-excerpt">
                  The student is encouraged to experience the body as hot then
                  cold, heavy then light — but what is the purpose of holding
                  opposites in awareness?
                </p>
                <div class="post-card-foot">
                  <span class="post-card-date archive">From the archive</span>
                  <span class="post-card-read">Read more →</span>
                </div>
              </div>
            </a>

            <a href="#" class="post-card">
              <div class="post-card-img">
                <img
                  src="assets/images/charli-van-ness.jpg"
                  alt="Charli Van Ness interview"
                />
              </div>
              <div class="post-card-body">
                <span class="post-card-eyebrow">Interviews</span>
                <h3 class="post-card-title">
                  An interview with Charli Van Ness
                </h3>
                <p class="post-card-excerpt">
                  Lead teacher trainer Charli Van Ness on how she became
                  interested in yoga, how it helped her in life, and how she
                  supports others to deepen their practice.
                </p>
                <div class="post-card-foot">
                  <span class="post-card-date archive">From the archive</span>
                  <span class="post-card-read">Read more →</span>
                </div>
              </div>
            </a>

            <a href="#" class="post-card">
              <div class="post-card-img">
                <img
                  src="assets/images/blog-300hr.jpg"
                  alt="300-hour training"
                />
              </div>
              <div class="post-card-body">
                <span class="post-card-eyebrow">Practice</span>
                <h3 class="post-card-title">
                  5 benefits of expanding your Level 1 teacher training
                </h3>
                <p class="post-card-excerpt">
                  Our 300-hour training is for teachers who have completed their
                  Level 1 (200-hour) — a plethora of benefits for the working
                  yoga teacher.
                </p>
                <div class="post-card-foot">
                  <span class="post-card-date archive">From the archive</span>
                  <span class="post-card-read">Read more →</span>
                </div>
              </div>
            </a>
          </div> -->
          <!-- End Static -->
          <div class="posts-grid">
            <?php if (have_posts()) : ?>
                <?php while (have_posts()) : the_post(); ?>

                    <a href="<?php the_permalink(); ?>" class="post-card">
                        <div class="post-card-img">
                            <?php if (has_post_thumbnail()) : ?>
                                <?php the_post_thumbnail('medium_large'); ?>
                            <?php else : ?>
                                <img
                                    src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/blog-featured.jpg'); ?>"
                                    alt="<?php echo esc_attr(get_the_title()); ?>"
                                />
                            <?php endif; ?>
                        </div>

                        <div class="post-card-body">
                            <?php
                            $categories = get_the_category();
                            if (!empty($categories)) :
                            ?>
                                <span class="post-card-eyebrow">
                                    <?php echo esc_html($categories[0]->name); ?>
                                </span>
                            <?php endif; ?>

                            <h3 class="post-card-title">
                                <?php the_title(); ?>
                            </h3>

                            <p class="post-card-excerpt">
                                <?php echo esc_html(wp_trim_words(get_the_excerpt(), 24)); ?>
                            </p>

                            <div class="post-card-foot">
                                <span class="post-card-date">
                                    <?php echo esc_html(get_the_date('M Y')); ?>
                                </span>

                                <span class="post-card-read">Read more →</span>
                            </div>
                        </div>
                    </a>

                <?php endwhile; ?>
            <?php else : ?>
                <p>No blog posts found.</p>
            <?php endif; ?>
        </div>

          <!-- Pagination -->
          <nav class="pagination" aria-label="Blog pagination">
            <?php
            echo paginate_links([
                'prev_text' => '← Prev',
                'next_text' => 'Next →',
            ]);
            ?>
        </nav>
        </div>
      </section>

      <!-- NEWSLETTER BAND -->
      <section class="newsletter-band">
        <div class="newsletter-inner">
          <h2 class="newsletter-h2">
            Seasonal updates, course openings &amp;
            <em>reflections from the mat</em>
          </h2>
          <p class="newsletter-sub">
            Sign up to The Shala newsletter for monthly writing and special
            offers — featured pieces, new courses and a selection of news,
            delivered with care.
          </p>
          <form class="newsletter-form" onsubmit="event.preventDefault()">
            <input
              type="email"
              placeholder="Your email address"
              aria-label="Email address"
              required
            />
            <button type="submit">Let me in</button>
          </form>
        </div>
      </section>

      <!-- CTA BAND -->
      <section class="cta-band">
        <div class="cta-band-inner">
          <h2 class="cta-h2">Ready to <em>train</em> with us?</h2>
          <p class="cta-sub">
            Our 200-hour and 300-hour teacher trainings, CPDs and retreats are
            built on the same wisdom and care you'll find in these pages.
          </p>
          <div class="cta-buttons">
            <a href="/200-hour" class="btn-white">Explore 200 Hour</a>
            <a href="/cpds" class="btn-ghost-w">Browse CPDs</a>
          </div>
        </div>
      </section>
    </main>

<?php get_footer(); ?>