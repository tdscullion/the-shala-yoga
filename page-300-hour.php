<?php
/*
Template Name: 300 Hour Page
*/

get_header();

$hero_title = get_field('hero_title');
$hero_subtitle = get_field('hero_subtitle');
$hero_button_1_text = get_field('hero_button_1_text');
$hero_button_1_link = get_field('hero_button_1_link');
$hero_button_2_text = get_field('hero_button_2_text');
$hero_button_2_link = get_field('hero_button_2_link');

$core_module_image_1 = get_field('core_module_image_1');
$core_module_image_2 = get_field('core_module_image_2');
$core_module_image_3 = get_field('core_module_image_3');

$teacher_slider_faculty = get_field('teacher_slider_faculty');

$gallery_images = get_field('300_hour_gallery');

$suggested_courses = get_field('suggested_courses');
?>

 <main id="main-content">
      <!-- STICKY BOOKING BAR -->
      <div class="booking-bar" id="bookingBar">
        <div class="bar-left">
          <span class="bar-title">300-Hour Yoga Teacher Training</span>
          <span class="bar-meta"
            >Modular &amp; flexible &nbsp;·&nbsp; Build over up to 5 years
            &nbsp;·&nbsp; Pay per module</span
          >
        </div>
        <div class="bar-btns">
          <a
            href="https://forms.office.com/Pages/ResponsePage.aspx?id=tLLKNRD4mEiDnO8jPFQT1J1Fn_kmT_xOgnbL8OFZO4JUMlpPNU5NSFg2WkExRDYzNVUwTjlXU0QxNi4u"
            target="_blank"
            class="bar-btn bar-btn-primary"
            >Apply</a
          >
          <a
            href="mailto:teachertraining@theshala.co.uk"
            class="bar-btn bar-btn-ghost"
            >Book a Call</a
          >
        </div>
      </div>

      <!-- HERO -->
      <section class="hero-standard bg-linen text-on-light" id="top">
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

      <!-- STATS BAR -->
      <div class="stats-bar">
        <div class="stats-bar-inner">
          <div class="stat-box">
            <span class="stat-num">110</span
            ><span class="stat-desc">Mandatory core hours</span>
          </div>
          <div class="stat-box">
            <span class="stat-num">190</span
            ><span class="stat-desc"
              >Elective hours · 20+ modules to choose from</span
            >
          </div>
          <div class="stat-box">
            <span class="stat-num">1-5 yrs</span
            ><span class="stat-desc">To complete at your own pace</span>
          </div>
          <div class="stat-box">
            <span class="stat-num">RYS 300</span
            ><span class="stat-desc">Yoga Alliance accredited</span>
          </div>
        </div>
      </div>

      <!-- BODY WRAP -->
      <div class="body-wrap" id="section-overview">
        <h2 class="jump-anchor">Overview</h2>

        <!-- MAIN COLUMN -->
        <div class="main-col">
          <a href="/cpds" class="bio-backlink">All Courses</a>

          <div class="intro-quote-block">
            <h2
              style="
                font-family: &quot;Playfair Display&quot;, serif;
                font-size: clamp(26px, 3vw, 38px);
                font-weight: 400;
                color: var(--aubergine);
                line-height: 1.2;
                margin-bottom: 24px;
              "
            >
              Create your own
              <em style="color: var(--pink); font-style: italic"
                >advanced training</em
              >
            </h2>
            <p
              style="
                font-family: &quot;Cormorant Garamond&quot;, serif;
                font-style: italic;
                font-size: 22px;
                color: var(--pink);
                line-height: 1.45;
                margin: 0 0 28px;
                font-weight: 500;
              "
            >
              "A 200-hour Level 1 training is just the beginning. Our 300-hour
              Level 2 programme is devised to ensure continued growth at a pace
              that is sustainable and attainable."
              <span
                style="
                  display: block;
                  font-family: &quot;Jost&quot;, sans-serif;
                  font-size: 11px;
                  font-style: normal;
                  font-weight: 500;
                  letter-spacing: 0.22em;
                  text-transform: uppercase;
                  color: var(--orange);
                  margin-top: 10px;
                "
                >— The Shala School of Yoga</span
              >
            </p>
            <p class="intro-body">
              Our unique, modular 300-hour Yoga Teacher Training (Level 2) lets
              you create a personalised, advanced teacher training pathway,
              furthering your studies with a team of inspiring teachers as and
              when you have the time, funds and energy. On completion, students
              whose 200-hour is registered with Yoga Alliance can certify as RYT
              500.
            </p>
            <p class="intro-body">
              There are just three mandatory core modules totalling a third of
              the course. The remaining two thirds of the hours are gathered
              from a broad selection of 1- to 6-day modules. These can be taken
              in any order, in studio, hybrid or livestreamed, and at any point
              within a five-year window. Most modules are also available as
              standalone CPDs and many are YACEP registered.
            </p>
            <p class="inline-quote">
              "I honestly haven't seen such a rich mix of integrity, care &amp;
              expertise from any other yoga collective — such unique courses,
              supportive, relevant &amp; responsive to the times we're living
              in." <span class="inline-quote-attr">LN · Course Graduate</span>
            </p>
            <p class="intro-body">
              This collaborative training is delivered by a hand-picked team of
              senior teachers, most with 20+ years of teaching experience.
            </p>
            <p class="intro-body">
              Apply below, or book a call with our teacher training manager by
              <a
                href="mailto:teachertraining@theshala.co.uk"
                style="
                  color: var(--pink);
                  text-decoration: underline;
                  text-underline-offset: 3px;
                "
                >emailing us</a
              >
              with a few suitable time windows.
            </p>
          </div>

          <div class="suitability-grid">
            <div class="suitability">
              <h3 class="suitability-heading">
                <em>Who</em> is this course for?
              </h3>
              <div class="suitability-pills">
                <span class="s-pill"
                  >Anyone who holds a 200-hour qualification</span
                >
                <span class="s-pill">Teachers seeking RYT 500 status</span>
                <span class="s-pill">Teachers wanting to specialise</span>
                <span class="s-pill"
                  >Those building a portfolio career in yoga</span
                >
                <span class="s-pill">Teachers returning after a break</span>
                <span class="s-pill"
                  >Movement &amp; wellbeing professionals expanding their
                  toolkit</span
                >
                <span class="s-pill"
                  >Lifelong learners committed to the path</span
                >
              </div>
            </div>
            <div class="suitability">
              <h3 class="suitability-heading">
                <em>What</em> the programme entails
              </h3>
              <div class="suitability-pills">
                <span class="s-pill"
                  >Three mandatory core modules (110 hrs) + 190 hrs of your
                  choice</span
                >
                <span class="s-pill"
                  >In Studio predominantly, with hybrid and livestream formats
                  also on offer</span
                >
                <span class="s-pill">Up to 5 years to complete</span>
                <span class="s-pill">Pay per module — spread the cost</span>
                <span class="s-pill"
                  >Modules also count as standalone CPD (many YACEP
                  registered)</span
                >
                <span class="s-pill"
                  >RYS 300-hour Yoga Alliance certification</span
                >
              </div>
            </div>
          </div>
        </div>
        <!-- END MAIN COL -->

        <!-- SIDEBAR -->
        <div class="side-col">
          <div class="booking-card">
            <div class="booking-card-header">
              <div class="bc-price" style="font-size: 22px; line-height: 1.2">
                Pay per module
              </div>
              <!-- TODO: add RYS300 logo once available -->
              <div class="bc-badges">
                <img
                  src="<?php echo esc_url(get_template_directory_uri() . '/assets/logos/rys300-logo.png'); ?>"
                  alt="Yoga Alliance RYS 300 Accredited"
                  class="prog-logo"
              >
              </div>
            </div>
            <div class="booking-card-body">
              <div class="bc-meta-strip">
                <div class="bc-meta-item">
                  <span class="bc-meta-label">Hours</span
                  ><span class="bc-meta-value">300 hrs</span>
                </div>
                <div class="bc-meta-item">
                  <span class="bc-meta-label">Format</span
                  ><span
                    class="bc-meta-value"
                    style="font-size: 13px; line-height: 1.25"
                    >In Studio<span
                      style="
                        font-family: &quot;Jost&quot;, sans-serif;
                        font-size: 9px;
                        font-weight: 400;
                        letter-spacing: 0.08em;
                        color: var(--text-light);
                        display: block;
                        margin-top: 2px;
                        text-transform: none;
                      "
                      >+ hybrid &amp; livestream options</span
                    ></span
                  >
                </div>
                <div class="bc-meta-item">
                  <span class="bc-meta-label">Window</span
                  ><span class="bc-meta-value">1-5 yrs</span>
                </div>
              </div>
              <hr class="bc-sep" style="margin-bottom: 16px" />

              <span class="bc-dates-label">Mandatory Core Modules</span>
              <div class="bc-module-list">
                <div class="bc-module-row">
                  <span class="bc-mod-label">Core 1 · Beyond the Postures</span
                  ><span class="bc-mod-date">60 hrs</span>
                </div>
                <div class="bc-module-row">
                  <span class="bc-mod-label">Core 2 · Embodied Asana</span
                  ><span class="bc-mod-date">40 hrs</span>
                </div>
                <div class="bc-module-row">
                  <span class="bc-mod-label">Core 3 · Philosophy Club</span
                  ><span class="bc-mod-date">10 hrs</span>
                </div>
                <div class="bc-module-row bc-module-row--grad">
                  <span class="bc-mod-label">Core total</span
                  ><span class="bc-mod-date">110 hrs</span>
                </div>
              </div>

              <hr class="bc-sep" />

              <span class="bc-dates-label">Optional 190 Hours</span>
              <p class="bc-info" style="margin-top: 6px">
                Choose from 20+ specialist modules — 1 to 6 days each, in
                studio, hybrid or livestreamed. Build a pathway around the
                topics you're most drawn to.
              </p>
              <a
                href="/yoga-teacher-training-calendar"
                class="bc-full-schedule"
                style="margin-top: 8px"
                >View Course Calendar →</a
              >

              <a
                href="https://forms.office.com/Pages/ResponsePage.aspx?id=tLLKNRD4mEiDnO8jPFQT1J1Fn_kmT_xOgnbL8OFZO4JUMlpPNU5NSFg2WkExRDYzNVUwTjlXU0QxNi4u"
                target="_blank"
                class="bc-btn bc-btn-primary"
                style="margin-top: 14px"
                >Apply →</a
              >
              <a
                href="mailto:teachertraining@theshala.co.uk"
                class="bc-btn bc-btn-ghost"
                >Book a Call</a
              >

              <hr class="bc-sep" />

              <span class="bc-dates-label">Application &amp; Fees</span>
              <div class="bc-pricing-rows">
                <div class="bc-pricing-row">
                  <span class="bc-pr-label">Application fee</span
                  ><span class="bc-pr-val">£0</span>
                </div>
                <div class="bc-pricing-row">
                  <span class="bc-pr-label">Total fee</span
                  ><span class="bc-pr-val">upwards from £3,900</span>
                </div>
                <div class="bc-pricing-row">
                  <span class="bc-pr-label">Per module</span
                  ><span class="bc-pr-val">Varies</span>
                </div>
              </div>

              <hr class="bc-sep" />

              <span class="bc-dates-label">Good to Know</span>
              <ul class="bc-notes">
                <li>
                  Each module is paid for individually as you book. Fees vary by
                  length and format.
                </li>
                <li>
                  The flexible structure means you can start with any module.
                </li>
                <li>
                  We recommend doing Beyond the Postures (Core Module 1) in the
                  first year if you can.
                </li>
                <li>
                  Modules taken at the Shala School can be retroactively
                  allocated to your 300-hour pathway, providing they haven't
                  been registered for CPD hours.
                </li>
                <li>
                  If your 200-hour is accredited by Yoga Alliance (USA), the
                  300-hour will allow you to register as RYT 500.
                </li>
                <li>
                  Select <strong>bank transfer (BACS)</strong> at checkout — it
                  helps us keep course fees down.
                </li>
                <li>
                  Bursary available: one 50% bursary place per module is offered
                  each year. <a href="/bursaries">Learn more →</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <!-- END SIDEBAR -->
      </div>
      <!-- END BODY WRAP -->

      <!-- BENEFITS OF 500-RYT -->
      <div class="lower-wrap">
        <div class="s-div">
          <h2>
            Benefits of becoming
            <em style="color: var(--pink); font-style: italic">500-RYT</em>
          </h2>
        </div>
        <p class="benefits-intro">
          After completing a 200-hour teacher training, many students find
          themselves yearning for further support, community and a deeper
          understanding of the many layers integral to the practice of yoga. Our
          300-hour lets you delve deeper into the areas that interest you most,
          gaining the skills and knowledge to build a meaningful, purposeful
          vocation as a teacher.
        </p>
        <div class="aims-grid">
          <div class="aim-item">
            <p class="aim-text">
              Strengthen your credibility and expand your knowledge as a teacher
            </p>
          </div>
          <div class="aim-item">
            <p class="aim-text">
              Discover new areas of specialist interest and delve deeper into
              the topics that interest you the most
            </p>
          </div>
          <div class="aim-item">
            <p class="aim-text">
              Ignite the areas you feel passionate about teaching — build a
              bespoke, sustainable, rewarding learning pathway
            </p>
          </div>
          <div class="aim-item">
            <p class="aim-text">
              Top up and enhance existing knowledge as the yoga world evolves
            </p>
          </div>
          <div class="aim-item">
            <p class="aim-text">
              Add new strings to your bow and broaden the offering you can bring
              to your students
            </p>
          </div>
          <div class="aim-item">
            <p class="aim-text">
              Be part of a wider, supportive community of teachers
            </p>
          </div>
          <div class="aim-item">
            <p class="aim-text">Find new inspiration and refuel your purpose</p>
          </div>
          <div class="aim-item">
            <p class="aim-text">
              Create a portfolio that reflects your unique voice as a teacher
            </p>
          </div>
        </div>
      </div>

      <!-- YOUR 300-HOUR JOURNEY -->
      <div class="journey-band" id="section-journey">
        <div class="journey-inner">
          <div class="journey-head">
            <h2 class="journey-h2">Your 300-Hour <em>Journey</em></h2>
            <p class="journey-sub">
              A flexible programme you build over time. Mix and match modules to
              suit your interests, schedule and budget — at your own pace,
              anywhere up to five years.
            </p>
          </div>
          <div class="journey-grid">
            <div class="j-step">
              <div class="j-step-num">1</div>
              <span class="j-step-eyebrow">Begin</span>
              <h3 class="j-step-title">Apply &amp; <em>enrol</em></h3>
              <p class="j-step-text">
                Submit your 200-hour certificate and a short application. Once
                accepted, you can begin booking modules in any order.
              </p>
            </div>
            <div class="j-step">
              <div class="j-step-num">2</div>
              <span class="j-step-eyebrow">Foundations</span>
              <h3 class="j-step-title">Three <em>core modules</em></h3>
              <p class="j-step-text">
                Beyond the Postures, Embodied Asana and Yoga Philosophy Club —
                110 mandatory hours that anchor your pathway, completed in any
                order at any time.
              </p>
            </div>
            <div class="j-step">
              <div class="j-step-num">3</div>
              <span class="j-step-eyebrow">Specialise</span>
              <h3 class="j-step-title">Build your <em>190 hours</em></h3>
              <p class="j-step-text">
                Choose from 20+ specialist CPD modules — Yin, Nidra,
                Trauma-Informed, Mandala Flow, Pranayama, Kids and many more.
              </p>
            </div>
            <div class="j-step">
              <div class="j-step-num">4</div>
              <span class="j-step-eyebrow">Certify</span>
              <h3 class="j-step-title"><em>Graduate</em></h3>
              <p class="j-step-text">
                On completion, register your 300hr with Yoga Alliance to
                certify. If your 200 hour is also with Yoga Alliance you can
                register 200+300 hours to become RYT 500.
              </p>
            </div>
          </div>
          <div class="journey-cta-row">
            <a href="/yoga-teacher-training-calendar" class="j-cta j-cta--pink"
              >View Course Calendar <span class="j-cta-arrow">→</span></a
            >
            <a href="/cpds" class="j-cta"
              >Browse Modules &amp; CPDs <span class="j-cta-arrow">→</span></a
            >
          </div>
        </div>
      </div>

      <!-- CORE MODULES -->
      <div class="core-modules-band" id="section-core-modules">
        <div class="core-modules-inner">
          <div class="s-div">
            <span class="s-div-eyebrow">110 Mandatory Hours</span>
            <h2>The three <em>core modules</em></h2>
            <p
              style="
                font-family: &quot;Cormorant Garamond&quot;, serif;
                font-size: 18px;
                font-style: italic;
                color: var(--charcoal-plum);
                line-height: 1.55;
                margin: 18px 0 0;
                max-width: 760px;
              "
            >
              These three components anchor every 300-hour pathway. They can be
              taken at any point in your training journey, in any order.
            </p>
          </div>
          <div class="core-modules-grid">
            <div class="cm-card">
              <div class="cm-card-img">
                <?php if ($core_module_image_1) : ?>
    <img
        src="<?php echo esc_url($core_module_image_1['url']); ?>"
        alt="<?php echo esc_attr($core_module_image_1['alt']); ?>"
    />
<?php endif; ?>
              </div>
              <div class="cm-card-body">
                <span class="cm-card-eyebrow">Core Module 1</span>
                <h3 class="cm-card-title"><em>Beyond</em> the Postures</h3>
                <p class="cm-card-subtitle">The Inner Path of Teaching Yoga</p>
                <span class="cm-card-meta"
                  >60 hrs · 6 days · In Studio or Livestream</span
                >
                <p class="cm-card-text">
                  A wide-ranging exploration of teaching that goes beyond the
                  physical — covering aspects relevant to all yoga teachers,
                  whatever your focus. Four days in studio plus two
                  livestreamed; runs once a year with a team of senior faculty.
                </p>
                <div class="cm-card-next">
                  Next dates · <strong>25 Sept – 18 Oct 2026</strong>
                </div>
                <a href="#section-curriculum" class="cm-card-link"
                  >Core Module 1 details →</a
                >
              </div>
            </div>

            <div class="cm-card">
              <div class="cm-card-img">
                <?php if ($core_module_image_2) : ?>
    <img
        src="<?php echo esc_url($core_module_image_2['url']); ?>"
        alt="<?php echo esc_attr($core_module_image_2['alt']); ?>"
    />
<?php endif; ?>
              </div>
              <div class="cm-card-body">
                <span class="cm-card-eyebrow">Core Module 2</span>
                <h3 class="cm-card-title">Embodied <em>Asana</em></h3>
                <p class="cm-card-subtitle">
                  The Art &amp; Science of Physical Practice
                </p>
                <span class="cm-card-meta"
                  >40 hrs · 4 days · In Studio or Livestream</span
                >
                <p class="cm-card-text">
                  Led by Gingi Lee and Melanie Cooper, this asana-focused module
                  deepens your understanding of postural practice, alignment
                  principles and the mechanics of teaching asana with
                  intelligence and care.
                </p>
                <div class="cm-card-next">
                  Next dates · <strong>22 – 25 Jan 2027</strong>
                </div>
                <a href="#section-curriculum" class="cm-card-link"
                  >Core Module 2 details →</a
                >
              </div>
            </div>

            <div class="cm-card">
              <div class="cm-card-img">
                <?php if ($core_module_image_3) : ?>
    <img
        src="<?php echo esc_url($core_module_image_3['url']); ?>"
        alt="<?php echo esc_attr($core_module_image_2['alt']); ?>"
    />
<?php endif; ?>
              </div>
              <div class="cm-card-body">
                <span class="cm-card-eyebrow">Core Module 3</span>
                <h3 class="cm-card-title">Yoga Philosophy <em>Club</em></h3>
                <p class="cm-card-subtitle">
                  A Practical Exploration of Yoga's Living Philosophy
                </p>
                <span class="cm-card-meta"
                  >10+ hrs · 5+ sessions · Livestream</span
                >
                <p class="cm-card-text">
                  A practical, engaging exploration of yoga philosophy led by
                  Daniel Simpson. Two-hour livestream sessions every 4–6 weeks
                  throughout the year — choose the five or more sessions that
                  interest you most.
                </p>
                <div class="cm-card-next">
                  Next dates · <strong>Ongoing year-round</strong>
                </div>
                <a href="#section-curriculum" class="cm-card-link"
                  >Core Module 3 details →</a
                >
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- OPTIONAL MODULES -->
      <div class="optional-band">
        <div class="optional-inner">
          <div class="optional-head">
            <div class="s-div">
              <span class="s-div-eyebrow">The Remaining 190 Hours</span>
              <h2>Optional <em>modules</em></h2>
            </div>
            <p class="optional-intro">
              Choose freely from a diverse range of 1- to 6-day modules to make
              up the rest of your pathway. Here's a flavour of what we usually
              offer each year — full availability and dates live on the
              <a
                href="/yoga-teacher-training-calendar"
                style="
                  color: var(--pink);
                  text-decoration: underline;
                  text-underline-offset: 3px;
                "
                >Course Calendar</a
              >.
            </p>
          </div>
          <div class="optional-pills">
            <a href="/cpds" class="opt-pill">Adjustments &amp; Assists</a>
            <a href="/cpds" class="opt-pill">Chair Yoga</a>
            <a href="/cpds" class="opt-pill">Creative Sequencing</a>
            <a href="/cpds" class="opt-pill">Elemental Mandala Vinyasa</a>
            <a href="/cpds" class="opt-pill"
              >Inversions, Arm Balances &amp; Backbends</a
            >
            <a href="/cpds" class="opt-pill">Kids Yoga</a>
            <a href="/cpds" class="opt-pill">Mindfulness &amp; Meditation</a>
            <a href="/cpds" class="opt-pill">Post-Natal Yoga</a>
            <a href="/cpds" class="opt-pill">Pregnancy Yoga</a>
            <a href="/cpds" class="opt-pill">Pranayama</a>
            <a href="/cpds" class="opt-pill">Restorative Yoga</a>
            <a href="/cpds" class="opt-pill">Sacred Sound &amp; Ceremony</a>
            <a href="/cpds" class="opt-pill">Somatic Yoga</a>
            <a href="/cpds" class="opt-pill">Theming Classes &amp; Workshops</a>
            <a href="/cpds" class="opt-pill">Trauma-Informed Yoga</a>
            <a href="/cpds" class="opt-pill">Menstrual Health</a>
            <a href="/cpds" class="opt-pill">Yin Yoga</a>
            <a href="/cpds" class="opt-pill">Yoga Anatomy</a>
            <a href="/cpds" class="opt-pill">Yoga for Neurodiversity</a>
            <a href="/cpds" class="opt-pill">Yoga Nidra</a>
          </div>
          <p class="optional-note">
            Many of these modules are also YACEP registered and can stand alone
            as CPD qualifications. Training courses run by our affiliated
            partner
            <a href="https://yogatreat.co.uk" target="_blank" rel="noopener"
              >Yoga Treat</a
            >
            (Melanie Cooper &amp; Jennie Wadsten Sharma) may also be included in
            your 300-hour programme.
          </p>
          <div class="optional-cta-row">
            <a href="/cpds" class="j-cta j-cta--pink"
              >All Modules &amp; CPDs <span class="j-cta-arrow">→</span></a
            >
            <a href="/yoga-teacher-training-calendar" class="j-cta"
              >Course Calendar <span class="j-cta-arrow">→</span></a
            >
          </div>
        </div>
      </div>

      <!-- MISSION BAND -->
      <div class="mission-band" id="section-mission">
        <div class="mission-inner">
          <div class="s-div" style="text-align: center; margin-bottom: 32px">
            <span class="s-div-eyebrow" style="color: var(--orange)"
              >Our Mission</span
            >
            <h2>A school built on <em>service</em></h2>
          </div>
          <p class="mission-body-lg">
            The Shala School of Yoga is built on the conviction that sharing
            yoga is a profound act of service. For nearly 30 years, the Shala
            has served its community of yoga practitioners and teachers as a
            place to practice and explore yoga.
          </p>
          <p class="mission-body-lg">
            Our 300-hour programme is a natural extension of that mission:
            continued growth at a pace that's sustainable and attainable, taught
            by senior faculty who care deeply about the art and science of yoga.
            We believe an advanced training should ignite what you already love
            about yoga, not just add hours to a certificate.
          </p>
          <a href="/about" class="mission-link" style="margin-top: 14px"
            >Read more about The Shala →</a
          >
        </div>
      </div>

      <!-- TESTIMONIALS -->
      <div class="testimonials-section" id="section-testimonials">
        <div class="testimonials-inner">
          <div class="s-div">
            <h2>What our <em>students</em> say</h2>
          </div>
          <div class="testi-featured">
            <div class="testi-featured-left">
              <p class="testi-featured-quote">
                Still buzzing and soaking in the magic of my time
                @theshalalondon. Not only is it a beautiful space physically, it
                genuinely radiates warmth, intention, and high vibrations. Every
                part of the centre feels like a safe space for embracing growth
                and deep transformation — I always come away feeling fuller,
                more equipped for life and for teaching my students.
              </p>
              <span class="testi-featured-name">Course Graduate</span>
            </div>
          </div>
          <div class="testi-carousel-head" style="justify-content: flex-end">
            <div style="display: flex; align-items: center; gap: 16px">
              <span
                style="
                  font-family: &quot;Jost&quot;, sans-serif;
                  font-size: 9px;
                  letter-spacing: 0.24em;
                  text-transform: uppercase;
                  color: rgba(255, 255, 255, 0.5);
                "
                >More testimonials</span
              >
              <div class="testi-arrows">
                <button class="testi-arrow" onclick="shiftTesti(-1)">←</button>
                <button class="testi-arrow" onclick="shiftTesti(1)">→</button>
              </div>
            </div>
          </div>
          <div class="testi-track-wrap">
            <div class="testi-track" id="testiTrack">
              <div class="testi-card">
                <p class="testi-quote">
                  The training has enriched my life beyond measure. Thank you
                  from my heart.
                </p>
                <span class="testi-name">RW · Course Graduate</span>
              </div>
              <div class="testi-card">
                <p class="testi-quote">
                  A really thoughtful 300hr advanced YTT. The diversity of
                  teachers and subjects allowed me to choose things which truly
                  inspired me. I learnt so much and am so pleased I took the
                  plunge.
                </p>
                <span class="testi-name">Laura · Course Graduate</span>
              </div>
              <div class="testi-card">
                <p class="testi-quote">
                  This is a wonderfully diverse and flexible programme. The
                  trainings are well structured and the tutors a pleasure to
                  work with. I have learned so very much, made amazing
                  connections and joined a nourishing community.
                </p>
                <span class="testi-name">EH · Course Graduate</span>
              </div>
              <div class="testi-card">
                <p class="testi-quote">
                  Everyone at the Shala has been super supportive, kind but
                  essentially great at giving teachers extra tools to go out and
                  offer more. They literally try to give you as much of their
                  knowledge and experience.
                </p>
                <span class="testi-name">AG · Course Graduate</span>
              </div>
              <div class="testi-card">
                <p class="testi-quote">
                  I have had the privilege to train with some outstanding
                  tutors. The fellow students I have worked with, and the huge
                  wealth of knowledge, experience and community so readily
                  shared — I feel completely humbled.
                </p>
                <span class="testi-name">SC · Course Graduate</span>
              </div>
              <div class="testi-card">
                <p class="testi-quote">
                  It has been such a momentous journey and I have relished every
                  second. I could never have foreseen how it has changed me both
                  inside and out.
                </p>
                <span class="testi-name">KT · Course Graduate</span>
              </div>
            </div>
          </div>
          <div style="text-align: center; margin-top: 40px">
            <a href="/testimonials" class="testi-readmore"
              >Read more graduate testimonials →</a
            >
          </div>
        </div>
      </div>

      <!-- MANTRA STRIP -->
      <div class="mantra-strip">
        <div class="mantra-strip-inner">
          <div class="word-strip-item">
            <span class="ws-verb">Reignite</span
            ><span class="ws-noun">inspiration</span>
          </div>
          <span class="word-strip-sep">·</span>
          <div class="word-strip-item">
            <span class="ws-verb">Choose</span
            ><span class="ws-noun">your path</span>
          </div>
          <span class="word-strip-sep">·</span>
          <div class="word-strip-item">
            <span class="ws-verb">Deepen</span
            ><span class="ws-noun">your study</span>
          </div>
          <span class="word-strip-sep">·</span>
          <div class="word-strip-item">
            <span class="ws-verb">Evolve</span
            ><span class="ws-noun">as a teacher</span>
          </div>
          <span class="word-strip-sep">·</span>
          <div class="word-strip-item">
            <span class="ws-verb">Create</span
            ><span class="ws-noun">your portfolio</span>
          </div>
          <span class="word-strip-sep">·</span>
          <div class="word-strip-item">
            <span class="ws-verb">Certify</span
            ><span class="ws-noun">as 500-RYT</span>
          </div>
        </div>
      </div>

      <!-- TEACHERS BAND -->
      <div class="teachers-band" id="section-teacher">
        <div class="teachers-band-inner">
          <div class="s-div">
            <h2>Your <em>teachers</em></h2>
          </div>
          <p class="teachers-intro">
            Our 300-hour faculty brings together a hand-picked team of senior
            teachers. <em>Gingi Lee</em>, <em>Melanie Cooper</em> and
            <em>Charli Van Ness</em> lead the programme alongside specialists
            including Jennie Wadsten Sharma, Norman Blair, Daniel Simpson, Dr
            Matthew Clark, Alexa Dean, Anne Malone, Ellie Grace, Dina Cohen,
            Emma Landolt and Kookie Punam Gill, most with 20+ years of teaching
            experience.
            <a
              href="/faculty"
              class="teachers-intro-link"
              style="color: var(--orange)"
              >See the full team →</a
            >
          </p>
          <div class="t-carousel-head">
            <div class="t-carousel-arrows">
              <button
                class="t-carousel-arrow"
                onclick="shiftTeacherCarousel(-1)"
                aria-label="Previous"
              >
                ←
              </button>
              <button
                class="t-carousel-arrow"
                onclick="shiftTeacherCarousel(1)"
                aria-label="Next"
              >
                →
              </button>
            </div>
          </div>
         <div class="t-carousel" id="teacherCarousel">
          <?php if ($teacher_slider_faculty) : ?>
              <?php foreach ($teacher_slider_faculty as $teacher) : ?>
                  <?php
                  $teacher_id = $teacher->ID;
                  $teacher_link = get_permalink($teacher_id);

                  $card_image = get_field('card_image', $teacher_id);
                  $display_name = get_field('display_name', $teacher_id);
                  $role_title = get_field('role_title', $teacher_id);

                  if (!$display_name) {
                      $display_name = get_the_title($teacher_id);
                  }
                  ?>

                  <a href="<?php echo esc_url($teacher_link); ?>" class="t-card">
                      <div class="t-card-img">
                          <?php if ($card_image) : ?>
                              <img
                                  src="<?php echo esc_url($card_image['url']); ?>"
                                  alt="<?php echo esc_attr($card_image['alt']); ?>"
                              />
                          <?php endif; ?>
                      </div>

                      <span class="t-card-name">
                          <?php echo theshala_highlight_text($display_name); ?>
                      </span>

                      <?php if ($role_title) : ?>
                          <span class="t-card-role">
                              <?php echo esc_html($role_title); ?>
                          </span>
                      <?php endif; ?>
                  </a>

              <?php endforeach; ?>
          <?php endif; ?>
      </div>
        </div>
      </div>

      <!-- GALLERY -->
      <div class="gallery-band" id="section-gallery">
        <div class="gallery-band-inner">
          <div class="s-div">
            <h2>Shala <em style="color: var(--pink)">moments</em></h2>
          </div>
          <div class="gallery-grid">
            <div class="g-cell g-a" onclick="openLightbox(0)">
              <?php if (!empty($gallery_images[0])) : ?>
                <img
                    src="<?php echo esc_url($gallery_images[0]['url']); ?>"
                    alt="<?php echo esc_attr($gallery_images[0]['alt']); ?>"
                />
              <?php endif; ?>
            </div>
            <div class="g-cell g-b" onclick="openLightbox(1)">
              <?php if (!empty($gallery_images[1])) : ?>
                <img
                    src="<?php echo esc_url($gallery_images[1]['url']); ?>"
                    alt="<?php echo esc_attr($gallery_images[1]['alt']); ?>"
                />
              <?php endif; ?>
            </div>
            <div class="g-cell g-c" onclick="openLightbox(2)">
              <?php if (!empty($gallery_images[2])) : ?>
                <img
                    src="<?php echo esc_url($gallery_images[2]['url']); ?>"
                    alt="<?php echo esc_attr($gallery_images[2]['alt']); ?>"
                />
              <?php endif; ?>
            </div>
            <div class="g-cell g-d" onclick="openLightbox(3)">
              <?php if (!empty($gallery_images[3])) : ?>
                <img
                    src="<?php echo esc_url($gallery_images[3]['url']); ?>"
                    alt="<?php echo esc_attr($gallery_images[3]['alt']); ?>"
                />
              <?php endif; ?>
            </div>
            <div class="g-cell g-e" onclick="openLightbox(4)">
              <?php if (!empty($gallery_images[4])) : ?>
                <img
                    src="<?php echo esc_url($gallery_images[4]['url']); ?>"
                    alt="<?php echo esc_attr($gallery_images[4]['alt']); ?>"
                />
              <?php endif; ?>
            </div>
          </div>
          <div style="text-align: center; margin-top: 32px">
            
              href="/gallery"
              style="
                font-family: &quot;Jost&quot;, sans-serif;
                font-size: 11px;
                font-weight: 400;
                letter-spacing: 0.2em;
                text-transform: uppercase;
                color: var(--orange);
                text-decoration: none;
                border-bottom: 1px solid var(--orange);
                padding-bottom: 3px;
              "
              >More Pictures →</a
            >
          </div>
        </div>
      </div>

<!-- Lightbox -->
<div class="lightbox" id="lightbox" onclick="closeLightboxOnBg(event)">
  <button class="lightbox-close" onclick="closeLightbox()">✕</button>
  <button class="lightbox-nav lightbox-prev" onclick="shiftLightbox(-1)">
    ←
  </button>
  <div class="lightbox-inner"><img id="lightboxImg" src="" alt="" /></div>
  <button class="lightbox-nav lightbox-next" onclick="shiftLightbox(1)">
    →
  </button>
  <span class="lightbox-counter" id="lightboxCounter"></span>
</div>

      <!-- CURRICULUM + VIDEO/DATES -->
      <div class="curriculum-dates-band">
        <div class="curriculum-dates-inner">
          <div class="curriculum-dates-grid">
            <div class="cd-col cd-curriculum" id="section-curriculum">
              <div class="s-div">
                <h2>Course <em style="color: var(--pink)">details</em></h2>
              </div>
              <div class="curriculum">
                <div class="acc-item">
                  <button class="acc-trigger open" onclick="toggleAcc(this)">
                    Programme Structure<span class="acc-icon"></span>
                  </button>
                  <div class="acc-body open">
                    <div class="acc-inner">
                      <ul>
                        <li>
                          Three mandatory core modules totalling 110 hours
                        </li>
                        <li>
                          Remaining 190 hours selected from a wide range of
                          optional CPD modules
                        </li>
                        <li>
                          Modules taken in any order, anywhere up to 5 years
                          from enrolment
                        </li>
                        <li>
                          Choice of in-studio, hybrid or virtual livestream
                          formats
                        </li>
                        <li>Pay per module — no upfront lump sum</li>
                      </ul>
                    </div>
                  </div>
                </div>

                <div class="acc-item">
                  <button class="acc-trigger" onclick="toggleAcc(this)">
                    Core Module 1 — Beyond the Postures<span
                      class="acc-icon"
                    ></span>
                  </button>
                  <div class="acc-body">
                    <div class="acc-inner">
                      <ul>
                        <li>
                          60 hours over 6 days — 4 in studio, 2 livestream
                          (option to do all 6 days livestream)
                        </li>
                        <li>
                          The Inner Path of Teaching Yoga — exploring the full
                          range of yoga beyond the postures
                        </li>
                        <li>Runs once a year with a team of senior faculty</li>
                        <li>
                          Recommended in the first year of your training
                          journey, though not essential
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>

                <div class="acc-item">
                  <button class="acc-trigger" onclick="toggleAcc(this)">
                    Core Module 2 — Embodied Asana<span class="acc-icon"></span>
                  </button>
                  <div class="acc-body">
                    <div class="acc-inner">
                      <ul>
                        <li>
                          40 hours over 4 consecutive days — in studio or
                          livestream
                        </li>
                        <li>
                          The Art &amp; Science of Physical Practice, led by
                          Gingi Lee and Melanie Cooper
                        </li>
                        <li>Runs once a year</li>
                        <li>
                          If you don't teach asana-based classes, email us about
                          exemption options
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>

                <div class="acc-item">
                  <button class="acc-trigger" onclick="toggleAcc(this)">
                    Core Module 3 — Yoga Philosophy Club<span
                      class="acc-icon"
                    ></span>
                  </button>
                  <div class="acc-body">
                    <div class="acc-inner">
                      <ul>
                        <li>
                          10+ hours via 2-hour livestream sessions led by Daniel
                          Simpson
                        </li>
                        <li>Sessions every 4–6 weeks throughout the year</li>
                        <li>Choose the 5+ sessions that interest you most</li>
                      </ul>
                    </div>
                  </div>
                </div>

                <div class="acc-item">
                  <button class="acc-trigger" onclick="toggleAcc(this)">
                    Optional Modules<span class="acc-icon"></span>
                  </button>
                  <div class="acc-body">
                    <div class="acc-inner">
                      <ul>
                        <li>
                          Choose from a diverse range of 1- to 6-day specialist
                          modules
                        </li>
                        <li>
                          Topics include Yin, Pregnancy, Anatomy,
                          Trauma-Informed, Pranayama, Kids and many more
                        </li>
                        <li>
                          Most modules are also standalone CPD qualifications,
                          many YACEP registered
                        </li>
                        <li>
                          Selected training courses from our affiliated partner
                          <a
                            href="https://yogatreat.co.uk"
                            target="_blank"
                            rel="noopener"
                            style="
                              color: var(--pink);
                              text-decoration: underline;
                              text-underline-offset: 2px;
                            "
                            >Yoga Treat</a
                          >
                          may also be included
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>

                <div class="acc-item">
                  <button class="acc-trigger" onclick="toggleAcc(this)">
                    Yoga Alliance Accreditation<span class="acc-icon"></span>
                  </button>
                  <div class="acc-body">
                    <div class="acc-inner">
                      <ul>
                        <li>
                          We have RYS 300 status (Registered Yoga School — 300
                          hour) accredited by Yoga Alliance
                        </li>
                        <li>
                          If your 200-hour is YA-registered, combine 200 + 300
                          to certify as RYT 500
                        </li>
                        <li>
                          Certificate issued once all 300 hours and required
                          coursework are complete
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>

                <div class="acc-item">
                  <button class="acc-trigger" onclick="toggleAcc(this)">
                    Eligibility &amp; Prerequisites<span
                      class="acc-icon"
                    ></span>
                  </button>
                  <div class="acc-body">
                    <div class="acc-inner">
                      <ul>
                        <li>
                          Completion of an accredited 200-hour Yoga Teacher
                          Training
                        </li>
                        <li>An active personal practice</li>
                        <li>
                          Commitment to completing all 300 hours within the
                          5-year window
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>

                <div class="acc-item">
                  <button class="acc-trigger" onclick="toggleAcc(this)">
                    Course Aims<span class="acc-icon"></span>
                  </button>
                  <div class="acc-body">
                    <div class="acc-inner">
                      <ul>
                        <li>
                          To support continued growth and evolution at a
                          sustainable, attainable pace
                        </li>
                        <li>
                          To inspire, refuel, support and challenge teachers
                          throughout their careers
                        </li>
                        <li>
                          To allow each teacher to specialise in the areas they
                          feel most called to
                        </li>
                        <li>
                          To meet and exceed Yoga Alliance RYS 300 standards at
                          every stage
                        </li>
                        <li>
                          To foster a wider community of teachers across the
                          Shala network
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>

              <div class="useful-info">
                <ul class="useful-info-list">
                  <li><a href="/faq">Frequently Asked Questions →</a></li>
                  <li>
                    <a href="/terms-and-conditions">Terms &amp; Conditions →</a>
                  </li>
                  <li>
                    <a href="/bursaries">Bursaries &amp; Scholarships →</a>
                  </li>
                  <li><a href="/contact">Contact us →</a></li>
                </ul>
              </div>
            </div>

            <div class="cd-col cd-dates" id="section-video">
              <div class="s-div">
                <h2>
                  YA Accreditation &amp; what sets our <em>programme apart</em>
                </h2>
              </div>
              <p class="cd-video-intro">
                Hear from our teacher training manager about how the modular
                structure works, the Yoga Alliance accreditation process, and
                what makes the Shala School's 300-hour different from other
                Level 2 trainings.
              </p>
              <div class="cd-video-frame">
                <!-- TODO: confirm Vimeo ID is correct -->
                <iframe
                  src="https://player.vimeo.com/video/866289021?byline=1&title=1&portrait=1"
                  allow="autoplay; fullscreen; picture-in-picture"
                  allowfullscreen
                  title="YA Accreditation & What Sets Our Programme Apart"
                ></iframe>
              </div>
              <span class="cd-video-caption"
                >Vimeo · with the Shala faculty</span
              >
              <div class="future-dates" style="margin-top: 48px">
                <h3 class="future-dates-heading">
                  See <em>everything</em> coming up
                </h3>
                <p class="future-dates-note">
                  All upcoming dates, formats and prices for 300-hour core
                  modules and optional CPDs are kept up to date on the Course
                  Calendar.
                </p>
                <div
                  style="
                    display: flex;
                    gap: 14px;
                    flex-wrap: wrap;
                    margin-top: 8px;
                  "
                >
                  <a
                    href="/yoga-teacher-training-calendar"
                    class="j-cta j-cta--pink"
                    >Course Calendar <span class="j-cta-arrow">→</span></a
                  >
                  <a href="/cpds" class="j-cta"
                    >All Modules &amp; CPDs
                    <span class="j-cta-arrow">→</span></a
                  >
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- BOOK A CALL -->
      <div class="lower-wrap">
        <div class="openday-block">
          <div class="openday-text">
            <h2 class="openday-heading">
              Talk to us about your <em>pathway</em>
            </h2>
            <p class="openday-copy">
              Since the 300-hour is modular and personal, it can be helpful to
              chat to our teacher training manager to help plan your route.
              <a
                href="mailto:teachertraining@theshala.co.uk?subject=300-hour%20pathway%20%E2%80%94%20book%20a%20call"
                style="
                  color: white;
                  text-decoration: underline;
                  text-underline-offset: 3px;
                  font-weight: 600;
                "
                >Email</a
              >
              our team with your number and a few convenient times and we'll set
              up a call to talk through your aims, the modules that might suit
              you, and how to build a pathway that works alongside your life.
            </p>
            <p class="openday-copy">
              You're also warmly invited to join us for a Saha Teacher Community
              gathering —
              <a
                href="#"
                style="
                  color: white;
                  text-decoration: underline;
                  text-underline-offset: 3px;
                "
                >find out more here</a
              >.
            </p>
            <a href="mailto:teachertraining@theshala.co.uk" class="openday-cta"
              >Book a Call →</a
            >
          </div>
        </div>
      </div>

      <!-- HOW TO APPLY -->
      <div class="lower-wrap">
        <div class="s-div">
          <h2>How to <em>apply</em></h2>
        </div>
        <div class="apply-steps">
          <div class="apply-step">
            <div class="apply-step-num">1</div>
            <div>
              <span class="apply-step-title">Submit your application</span>
              <div class="apply-step-text">
                Complete the application form and send us a copy of your
                200-hour certificate at
                <a href="mailto:teachertraining@theshala.co.uk"
                  >teachertraining@theshala.co.uk</a
                >. We aim to respond within 7 days.
              </div>
            </div>
          </div>
          <div class="apply-step">
            <div class="apply-step-num">2</div>
            <div>
              <span class="apply-step-title">Book your modules as you go</span>
              <div class="apply-step-text">
                Once accepted, you book and pay a deposit for each module
                individually as you choose them. The balance for each module is
                due 3 weeks before the module starts.
              </div>
            </div>
          </div>
          <div class="apply-step">
            <div class="apply-step-num">3</div>
            <div>
              <span class="apply-step-title"
                >Complete your 300 hours within 5 years</span
              >
              <div class="apply-step-text">
                Combine the 3 core modules (110 hrs) with 190 hrs of optional
                modules at your own pace. On completion we issue your RYS 300
                certificate. Any questions along the way? Just
                <a href="mailto:teachertraining@theshala.co.uk">email us</a>.
              </div>
            </div>
          </div>
        </div>
        <a
          href="https://forms.office.com/Pages/ResponsePage.aspx?id=tLLKNRD4mEiDnO8jPFQT1J1Fn_kmT_xOgnbL8OFZO4JUMlpPNU5NSFg2WkExRDYzNVUwTjlXU0QxNi4u"
          target="_blank"
          class="apply-btn"
          >Apply →</a
        >
      </div>

      <!-- RELATED COURSES -->
      <div class="related">
        <div class="related-inner">
          <div class="related-head-row">
            <div class="related-head">
              <h2
                style="
                  font-family: &quot;Playfair Display&quot;, serif;
                  font-size: clamp(20px, 2vw, 28px);
                  font-weight: 400;
                  color: var(--aubergine);
                  letter-spacing: 0;
                  text-transform: none;
                "
              >
                You might also
                <em style="color: var(--pink); font-style: italic">like</em>
              </h2>
            </div>
            <div class="related-arrows">
              <button class="related-arrow" onclick="shiftRelated(-1)">
                ←
              </button>
              <button class="related-arrow" onclick="shiftRelated(1)">→</button>
            </div>
          </div>
          <div class="related-grid" id="relatedGrid">

    <?php if ($suggested_courses) : ?>

        <?php foreach ($suggested_courses as $index => $course) : ?>

            <?php
            $course_id = $course->ID;

            $course_title = get_field('short_title', $course_id);

            if (!$course_title) {
                $course_title = get_the_title($course_id);
            }

            $course_link = get_permalink($course_id);

            $course_image = get_field('course_card_image', $course_id);
            $course_format = get_field('course_format', $course_id);
            $course_card_dates = get_field('course_card_dates', $course_id);

            $tints = [
                'rgba(59, 19, 46, 1)',
                'rgba(140, 0, 63, 1)',
                'rgba(139, 82, 0, 1)',
            ];

            $tint = $tints[$index % count($tints)];

            $format_label = '';

            if (is_array($course_format)) {
                $format_label = $course_format['label'] ?? implode(' + ', $course_format);
            } else {
                $format_label = $course_format;
            }
            ?>

            <a
                href="<?php echo esc_url($course_link); ?>"
                class="rc"
                style="--rt: <?php echo esc_attr($tint); ?>"
            >
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

                <div class="rcontent">

                    <?php if ($format_label) : ?>

                        <span class="rc-tag">
                            <?php echo esc_html($format_label); ?>
                        </span>

                    <?php endif; ?>

                    <div class="rc-title">
                        <?php echo esc_html($course_title); ?>
                    </div>

                    <?php if ($course_card_dates) : ?>

                        <div class="rc-foot">
                            <div class="rc-date">
                                <strong><?php echo esc_html($course_card_dates); ?></strong>
                            </div>
                        </div>

                    <?php endif; ?>

                </div>
            </a>

        <?php endforeach; ?>

    <?php endif; ?>

</div>
        </div>
      </div>
    </main>

<?php get_footer(); ?>