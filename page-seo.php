<?php
/*
Template Name: SEO Page
*/

get_header();
?>

<main id="main-content" class="seo-page">
<!-- ══════════════════════════════════════════════════ -->
<!-- SECTION 1: HERO                                    -->
<!-- ══════════════════════════════════════════════════ -->

<?php
$hero_title = get_field('hero_title');
$hero_subtitle = get_field('hero_subtitle');
$area = get_field('area') ?: 'South London';
$directions = get_field('directions') ?: 'South London';
?>

<!-- ══════════════════════════════════════════════════ -->
<!-- BREADCRUMB -->
<!-- ══════════════════════════════════════════════════ -->

<div class="seo-breadcrumb-section">
    <nav class="seo-breadcrumbs" aria-label="Breadcrumb">
        <a href="<?php echo esc_url(home_url('/')); ?>">Home</a>
        <span>/</span>
        <a href="<?php echo esc_url(home_url('/200-hour/')); ?>">Teacher Training</a>
        <span>/</span>
        <span><?php echo esc_html($area); ?></span>
    </nav>
</div>

<section class="hero-standard bg-chalk text-on-light">
    <div class="hero-standard-inner">
        <img
            class="hero-standard-spiral"
            src="<?php echo esc_url(get_template_directory_uri() . '/assets/spirals/spiral-1-cropped.png'); ?>"
            alt=""
            aria-hidden="true"
        />

        <div class="hero-standard-content">
            <?php if ($hero_title) : ?>
                <h1 class="hero-standard-title">
                    <?php echo theshala_highlight_text($hero_title); ?>
                </h1>
            <?php endif; ?>

          <?php if ($hero_subtitle) : ?>
              <p class="hero-standard-sub">
                  <?php echo esc_html($hero_subtitle); ?>
              </p>
          <?php endif; ?>

            <div class="hero-standard-btns">
                <a href="/200-hour" class="btn btn-pink">Explore 200-Hour</a>
                <a href="/300-hour" class="btn btn-pink">300-Hour →</a>
            </div>
        </div>
    </div>
</section>
<div class="seo-hero-rule"></div>

<!-- ══════════════════════════════════════════════════ -->
<!-- SECTION 2: INTRO (shared, lightly reworded)        -->
<!-- ══════════════════════════════════════════════════ -->
<section class="intro-section">
  <p class="lede">
    The Shala School of Yoga is a Yoga Alliance accredited teacher training school based in West Norwood, easily reached from across
    <!-- [VAR:AREA] -->
    <strong><?php echo esc_html($area); ?></strong>. For almost 30 years the Shala has been sharing yoga with practitioners and teachers, and since 2016 has been running a fully fledged yoga training school with Level 1, Level 2 and CPD trainings — offering small cohorts, senior faculty, and a curriculum designed to cultivate confident, thoughtful teachers.
  </p>
</section>

<!-- ══════════════════════════════════════════════════ -->
<!-- SECTION 3: TRAINING THAT SERVES [AREA] (variable)  -->
<!-- ══════════════════════════════════════════════════ -->
<!-- DEV NOTE — TASH: copy currently positions South London + nearby boroughs.
     Open question: reflect UK-wide / international students here, or keep
     this section laser-focused on South London for SEO and use the FAQ to
     address out-of-area students? Suggest: keep here local-focused (it's an
     SEO umbrella page targeting "Yoga Teacher Training in South London"),
     and let the FAQ "Is it best to live in South London?" do the broader
     reassurance work. -->
<section class="section local-section">
  <div class="section-inner">
    <span class="eyebrow">
      <!-- [VAR:AREA] -->
      Local to South London
    </span>
    <h2 class="section-h2">
      <!-- [VAR:AREA] -->
      Training that serves <em><?php echo esc_html($area); ?></em>
    </h2>
    <div class="local-grid">
      <div>
        <!-- [VAR:LOCAL_COPY] — unique per page -->
       <?php if ($local_copy = get_field('local_copy')) : ?>
          <div class="body-text">
              <?php echo wpautop(wp_kses_post($local_copy)); ?>
          </div>
      <?php endif; ?>
        <p class="body-text">Whether you're travelling from inner South London or the outer boroughs, the studio will feel like a second home for the duration of your training.</p>
      </div>
      <dl class="local-facts">
        <dt>Studio location</dt>
        <dd>West Norwood, SE27</dd>
        <dt>Nearest rail</dt>
        <dd>West Norwood &amp; Tulse Hill (Southern / Thameslink)</dd>
        <dt>Journey from central South London</dt>
        <!-- [VAR:TRANSPORT] -->
        <dd>Approximately 15–25 minutes by train</dd>
        <dt>Students travel from</dt>
        <!-- [VAR:PLACES] -->
        <dd>Brixton, Clapham, Dulwich, Streatham, Crystal Palace and beyond</dd>
      </dl>
    </div>
  </div>
</section>

<!-- ══════════════════════════════════════════════════ -->
<!-- SECTION 4: THREE PATHS — restyled to match home    -->
<!-- "Choose your Path" palette: chalk bg, white cards, -->
<!-- linen borders, aubergine titles, pink italics      -->
<!-- ══════════════════════════════════════════════════ -->
<section class="trainings-section">
  <div class="section-inner">
    <div style="text-align:center;">
      <span class="eyebrow">Our Trainings</span>
      <h2 class="section-h2">Three paths to <em>teaching</em></h2>
      <p class="lede">From your first teaching qualification to advanced study and continuing education — all Yoga Alliance accredited, all taught by senior faculty.</p>
    </div>
    <div class="train-grid">
      <article class="train-card">
        <span class="train-card-tag">Level 1 · RYS200</span>
        <span class="train-card-icon">200</span>
        <h3>200-Hour <em>Teacher Training</em></h3>
        <p>Your foundation as a yoga teacher. A thorough, considered programme covering asana, philosophy, anatomy, methodology and teaching practice — taught in a single flagship cohort each year.</p>
        <a href="#" class="train-card-link">Explore 200-Hour →</a>
      </article>
      <article class="train-card">
        <span class="train-card-tag">Level 2 · RYS300</span>
        <span class="train-card-icon">300</span>
        <h3>300-Hour <em>Teacher Training</em></h3>
        <p>For qualified teachers ready to deepen. Advanced anatomy, adjusts, subtle body work, refined teaching craft and a bespoke, individualised route through nearly 200 hours of electives.</p>
        <a href="#" class="train-card-link">Explore 300-Hour →</a>
      </article>
      <article class="train-card">
        <span class="train-card-tag">CPD · YACEP</span>
        <span class="train-card-icon">CPD</span>
        <h3>Modules <em>&amp; CPDs</em></h3>
        <p>Specialist short courses — Yin, Nidra, Pregnancy, Trauma-Informed, Somatic, Adjusts and more. Count towards Yoga Alliance continuing education hours.</p>
        <a href="#" class="train-card-link">Explore CPDs →</a>
      </article>
    </div>
  </div>
</section>

<!-- ══════════════════════════════════════════════════ -->
<!-- SECTION 5: WHY THE SHALA (shared, 3 pills)         -->
<!-- ══════════════════════════════════════════════════ -->
<section class="why-section">
  <div class="section-inner" style="text-align:center;">
    <span class="eyebrow">Why The Shala</span>
    <h2 class="section-h2">Training that captures your <em>unique spirit</em></h2>
    <div class="why-pills">
      <div class="why-pill">
        <span class="why-pill-num">2000+</span>
        <h3>Students trained</h3>
        <p>Nearly three decades of teaching and sharing yoga — a community of practitioners and teachers built patiently over time.</p>
      </div>
      <div class="why-pill">
        <span class="why-pill-num">RYS</span>
        <h3>Yoga Alliance accredited</h3>
        <p>Certifications recognised internationally — RYS200, RYS300 and YACEP continuing education provider.</p>
      </div>
      <div class="why-pill">
        <span class="why-pill-num">20</span>
        <h3>Senior faculty led</h3>
        <p>Small cohorts taught by senior teachers including Gingi Lee and Melanie Cooper — you are known, seen and supported throughout.</p>
      </div>
    </div>
  </div>
</section>

<!-- ══════════════════════════════════════════════════ -->
<!-- SECTION 6: GETTING HERE (variable + shared map)    -->
<!-- ══════════════════════════════════════════════════ -->
<section class="getting-section">
  <div class="section-inner" style="max-width:1080px;">
    <span class="eyebrow">
      <!-- [VAR:AREA] -->
      Getting here from <?php echo esc_html($area); ?>
    </span>
    <h2 class="section-h2">Finding <em>the studio</em></h2>
    <div class="getting-grid">
      <div class="getting-text">
        <?php if ($directions = get_field('directions')) : ?>
            <div class="body-text">
                <?php echo wpautop(wp_kses_post($directions)); ?>
            </div>
        <?php endif; ?>
        <address class="getting-address">
          <strong>Visit us</strong>
          The Shala School of Yoga<br>
          West Norwood, London SE27<br>
          <a href="mailto:teachertraining@theshala.co.uk" style="color:var(--pink);text-decoration:none;">teachertraining@theshala.co.uk</a>
        </address>
      </div>
      <div class="getting-map">
        <!-- Shared across all umbrella pages. Pinned to West Norwood. -->
        <iframe
          src="https://www.google.com/maps?q=West+Norwood,+London+SE27&output=embed"
          loading="lazy"
          referrerpolicy="no-referrer-when-downgrade"
          title="The Shala School of Yoga — West Norwood, London SE27">
        </iframe>
      </div>
    </div>
  </div>
</section>

<!-- ══════════════════════════════════════════════════ -->
<!-- SECTION 7: TESTIMONIAL (shared)                    -->
<!-- ══════════════════════════════════════════════════ -->
<section class="testimonial-section">
  <div class="testimonial-box">
    <p class="testimonial-quote">The Shala didn't just train me to teach — it gave me a foundation I still draw on every class, years later. The care and depth of the faculty is rare.</p>
    <p class="testimonial-attr"><strong>Emma R.</strong> 200-Hour &amp; 300-Hour Graduate</p>
  </div>
</section>

<!-- ══════════════════════════════════════════════════ -->
<!-- SECTION 8: FAQ (shared, 3 questions)               -->
<!-- ══════════════════════════════════════════════════ -->
<section class="faq-section">
  <div class="section-narrow" style="text-align:center;">
    <span class="eyebrow">Frequently Asked</span>
    <h2 class="section-h2">Questions, <em>answered</em></h2>
  </div>
  <div class="faq-list">
    <div class="faq-item">
      <!-- [VAR:AREA] -->
      <h3 class="faq-q">Is it best to live in <em><?php echo esc_html($area); ?></em> to train with you?</h3>
      <p class="faq-a">No. While many of our students travel from across South London and nearby boroughs, we regularly train people from neighbouring counties — Kent, Surrey, Sussex — and much further afield for the 200-hour and 300-hour programmes. Sessions are structured so that travel is manageable, and those travelling from further afield will often stay overnight in London with friends or in a hotel.</p>
    </div>
    <div class="faq-item">
      <h3 class="faq-q">What's the <em>time commitment</em>?</h3>
      <p class="faq-a">The 200-hour programme runs over approximately nine months, with a mix of immersive weekend blocks and self-directed study. The 300-hour is more fluid and flexible — you can do short intensives as and when time, money and energy permit. Full details are on each course page.</p>
    </div>
    <div class="faq-item">
      <h3 class="faq-q">Is the certification <em>recognised internationally</em>?</h3>
      <p class="faq-a">Yes. The Shala is a Yoga Alliance Registered Yoga School at both RYS200 and RYS300 level, and a YACEP continuing education provider. Graduates can register with Yoga Alliance and teach internationally.</p>
    </div>
    <div class="faq-item">
      <h3 class="faq-q">What if I'm <em>new to yoga</em>?</h3>
      <p class="faq-a">The 200-hour is open to anyone with a committed personal practice — we don't require years of experience, but we do expect a real relationship with the practice, and usually a minimum of three years practising. If you're unsure, you're welcome to get in touch directly.</p>
    </div>
  </div>
</section>

<!-- ══════════════════════════════════════════════════ -->
<!-- SECTION 9: CTA BAND — pink panel (cta-band snippet) -->
<!-- ══════════════════════════════════════════════════ -->
<section class="cta-band">
  <div class="cta-band-inner">
    <h2 class="cta-h2">Ready to <em>begin?</em></h2>
    <p class="cta-sub">Explore our trainings, attend an open day, or send us a note. We'd love to hear from you.</p>
    <div class="cta-buttons">
      <a href="#" class="btn-white">View All Trainings</a>
      <a href="mailto:teachertraining@theshala.co.uk" class="btn-ghost-w">Message Us</a>
    </div>
  </div>
</section>
</main>

<?php get_footer(); ?>
