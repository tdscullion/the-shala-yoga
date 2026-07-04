<?php
/*
Template Name: 200 Hour Page
*/

get_header();

$hero_title = get_field('hero_title');
$hero_subtitle = get_field('hero_subtitle');
$hero_button_1_text = get_field('hero_button_1_text');
$hero_button_1_link = get_field('hero_button_1_link');
$hero_button_2_text = get_field('hero_button_2_text');
$hero_button_2_link = get_field('hero_button_2_link');

$main_teachers = get_field('main_teachers');
$supporting_teachers = get_field('supporting_teachers');

$gallery_images = get_field('200_hour_gallery');

$suggested_courses = get_field('suggested_courses');

?>

    <main id="main-content">

    <!-- STICKY BOOKING BAR -->
    <div class="booking-bar" id="bookingBar">
        <div class="bar-left">
          <span class="bar-title">200-Hour Yoga Teacher Training</span>
          <span class="bar-meta"
            >Gingi Lee &amp; Charli Van Ness &nbsp;·&nbsp; Sep 2026 – May 2027
            &nbsp;·&nbsp; £3,250</span
          >
        </div>
        <div class="bar-btns">
          <a
            href="https://forms.office.com/Pages/ResponsePage.aspx?id=tLLKNRD4mEiDnO8jPFQT1J1Fn_kmT_xOgnbL8OFZO4JUMzQxRTEzSktSTFNKV0IwWFBVR1VURloyNy4u"
            target="_blank"
            class="bar-btn bar-btn-primary"
            >Apply</a
          >
          <a href="#open-days" class="bar-btn bar-btn-ghost">Open Day</a>
          <a href="#express-interest" class="bar-btn bar-btn-ghost"
            >Register Interest</a
          >
        </div>
      </div> 
      <section class="hero-standard bg-linen text-on-light" id="top">
        <div class="hero-standard-inner">
          <img
            class="hero-standard-spiral"
            src="<?php echo esc_url(get_template_directory_uri() . '/assets/spirals/spiral-1-cropped.png'); ?>"
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
            <span class="stat-num">29</span
            ><span class="stat-desc">Years in South London</span>
          </div>
          <div class="stat-box">
            <span class="stat-num">20</span
            ><span class="stat-desc">Students per cohort</span>
          </div>
          <div class="stat-box">
            <span class="stat-num">100+</span
            ><span class="stat-desc">Combined faculty experience</span>
          </div>
          <div class="stat-box">
            <span class="stat-num">RYS 200 &amp; 300</span
            ><span class="stat-desc">Yoga Alliance accredited</span>
          </div>
        </div>
      </div>

      <!-- BODY WRAP — main content + sticky sidebar -->
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
              Transform your
              <em style="color: var(--pink); font-style: italic"
                >inner and outer worlds</em
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
              "Yoga is the journey of the self, through the self, to the self."
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
                >— Bhagavad Gita</span
              >
            </p>
            <p class="intro-body">
              The Shala School of Yoga's 200-hour programme has been described
              by graduates as life-changing, transformational, and mind-blowing.
              Crafted from more than 50 combined years of teaching experience,
              the course intertwines traditional methods with a contemporary
              approach — a non-dogmatic immersion into the vast subject of yoga.
            </p>
            <p class="intro-body">
              Many people join for personal growth and exploration rather than
              to teach. For those called to share the practice, the course
              provides the skills, knowledge and support to grow into an
              authentic, confident teacher. Either way, it is an experience that
              stays with you.
            </p>
            <p class="inline-quote">
              "I came into this expecting to be taught how to teach yoga. What I
              learned was how to find myself as a teacher — my own voice, my own
              way. That gift of self-belief is priceless."
              <span class="inline-quote-attr">Course Graduate</span>
            </p>
            <p class="intro-body">
              The asana teaching draws on Vinyasa, Flow and Ashtanga traditions.
              Ashtanga's primary series is used as a framework through which
              postures, transitions and hands-on adjustments are explored in
              depth. Students are also taught an accessible all-levels Vinyasa
              sequence and introduced to the broader principles of Vinyasa flow
              sequencing.
            </p>
            <p class="intro-body">
              We accept just 20 students per intake, creating an intimate
              environment with a genuine sense of community, plenty of
              individual guidance, and real support throughout.
            </p>
          </div>

          <div class="suitability-grid">
            <div class="suitability">
              <h3 class="suitability-heading">
                <em>Who</em> is this course for?
              </h3>
              <div class="suitability-pills">
                <span class="s-pill"
                  >Practitioners seeking personal development</span
                >
                <span class="s-pill"
                  >Practitioners wanting to deepen their practice</span
                >
                <span class="s-pill">Aspiring yoga teachers</span>
                <span class="s-pill">Those considering a career change</span>
                <span class="s-pill">Movement and wellbeing professionals</span>
                <span class="s-pill"
                  >Therapists and coaches expanding their toolkit</span
                >
                <span class="s-pill"
                  >Lifelong learners drawn to the philosophy of yoga</span
                >
                <span class="s-pill"
                  >Those wanting to bring yoga to underrepresented
                  communities</span
                >
              </div>
            </div>
            <div class="suitability">
              <h3 class="suitability-heading"><em>What's</em> included?</h3>
              <div class="suitability-pills">
                <span class="s-pill">175 hrs in-studio teaching</span>
                <span class="s-pill">10 hrs livestream</span>
                <span class="s-pill">25 hrs on-demand video library</span>
                <span class="s-pill"
                  >75 hrs coursework &amp; teaching practice</span
                >
                <span class="s-pill">1-to-1 mentoring with lead teachers</span>
                <span class="s-pill">Course manual</span>
                <span class="s-pill"
                  >RYS 200-hour Yoga Alliance certification</span
                >
                <span class="s-pill"
                  >20% off Vahni @ the Shala classes &amp; workshops</span
                >
              </div>
            </div>
          </div>

          <p class="intro-note" style="font-style: normal; margin-bottom: 12px">
            The course is designed to be manageable alongside full-time work.
            Seven 3-day weekends are spread across seven months, supplemented by
            online learning and coursework between sessions. In-person
            attendance is <strong>essential</strong> throughout.
          </p>
          <p class="intro-note" style="font-style: normal; margin-bottom: 48px">
            One 50% bursary place is offered per intake for applicants who will
            go on to bring yoga into underrepresented communities.
            <a
              href="/bursaries"
              style="
                color: var(--pink);
                text-decoration: underline;
                text-underline-offset: 3px;
              "
              >Learn more about Shala School bursaries →</a
            >
          </p>
        </div>
        <!-- END MAIN COL -->

        <!-- SIDEBAR -->
        <div class="side-col">
          <div class="booking-card">
            <div class="booking-card-header">
              <div class="bc-price">£3,250</div>
              <!-- TODO: add RYS200 logo once available -->
              <div class="bc-badges"></div>
            </div>
            <div class="booking-card-body">
              <div class="bc-meta-strip">
                <div class="bc-meta-item">
                  <span class="bc-meta-label">Hours</span
                  ><span class="bc-meta-value">200+ hrs</span>
                </div>
                <div class="bc-meta-item">
                  <span class="bc-meta-label">Format</span
                  ><span class="bc-meta-value">In Studio</span>
                </div>
              </div>
              <hr class="bc-sep" style="margin-bottom: 16px" />
              <span class="bc-dates-label">Module Schedule · 2026–2027</span>
              <div class="bc-module-list">
                <div class="bc-module-row">
                  <span class="bc-mod-label">Module 1</span
                  ><span class="bc-mod-date">12–14 Sep 2026</span>
                </div>
                <div class="bc-module-row">
                  <span class="bc-mod-label">Module 2</span
                  ><span class="bc-mod-date">10–12 Oct 2026</span>
                </div>
                <div class="bc-module-row">
                  <span class="bc-mod-label">Module 3</span
                  ><span class="bc-mod-date">14–16 Nov 2026</span>
                </div>
                <div class="bc-module-row">
                  <span class="bc-mod-label">Module 4</span
                  ><span class="bc-mod-date">12–14 Dec 2026</span>
                </div>
                <div class="bc-module-row">
                  <span class="bc-mod-label">Module 5</span
                  ><span class="bc-mod-date">9–11 Jan 2027</span>
                </div>
                <div class="bc-module-row">
                  <span class="bc-mod-label">Module 6</span
                  ><span class="bc-mod-date">6–8 Feb 2027</span>
                </div>
                <div class="bc-module-row">
                  <span class="bc-mod-label">Module 7</span
                  ><span class="bc-mod-date">13–15 Mar 2027</span>
                </div>
                <div class="bc-module-row bc-module-row--grad">
                  <span class="bc-mod-label">Graduation</span
                  ><span class="bc-mod-date">3 May 2027</span>
                </div>
              </div>
              <a href="#section-dates" class="bc-full-schedule"
                >See full schedule →</a
              >
              <a
                href="https://forms.office.com/Pages/ResponsePage.aspx?id=tLLKNRD4mEiDnO8jPFQT1J1Fn_kmT_xOgnbL8OFZO4JUMzQxRTEzSktSTFNKV0IwWFBVR1VURloyNy4u"
                target="_blank"
                class="bc-btn bc-btn-primary"
                style="margin-top: 14px"
                >Apply</a
              >
              <a href="#express-interest" class="bc-btn bc-btn-ghost"
                >Register Interest</a
              >
              <hr class="bc-sep" />
              <span class="bc-dates-label">Fees &amp; Payments</span>
              <div class="bc-pricing-rows">
                <div class="bc-pricing-row">
                  <span class="bc-pr-label">Application fee</span
                  ><span class="bc-pr-val">£25</span>
                </div>
                <div class="bc-pricing-row">
                  <span class="bc-pr-label">Deposit (on acceptance)</span
                  ><span class="bc-pr-val">£825</span>
                </div>
                <div class="bc-pricing-row">
                  <span class="bc-pr-label">Balance · 3 × £800/month</span
                  ><span class="bc-pr-val">£2,400</span>
                </div>
                <div class="bc-pricing-row bc-pricing-row--total">
                  <span class="bc-pr-label">Total course fee</span
                  ><span class="bc-pr-val">£3,250</span>
                </div>
              </div>
              <hr class="bc-sep" />
              <span class="bc-dates-label">Good to know</span>
              <ul class="bc-notes">
                <li>
                  Application fee is deducted from the course fee if accepted.
                  Deposit is non-refundable.
                </li>
                <li>
                  Prefer a different payment plan? Pay your deposit and email us
                  to arrange. Full payment must be received before the course
                  starts.
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
              <div class="bc-future-cohorts">
                <span class="bc-future-cohorts-label">Future Cohort</span>
                <div class="bc-future-row">
                  <span class="bc-fr-label">2027–2028</span
                  ><span class="bc-fr-date">Sep 2027 – May 2028</span>
                </div>
              </div>
              <div class="bc-openday-prominent">
                <span class="bc-od-eyebrow">Practical Info</span>
                <h3 class="bc-od-heading"><em>Open Day</em></h3>
                <span class="bc-od-date">Thursday 12 March 2027</span>
                <p class="bc-od-copy">
                  Come and meet the teachers, ask questions, and get a real feel
                  for the course before you apply.
                </p>
                <a href="#open-days" class="bc-od-cta">Book Open Day</a>
              </div>
            </div>
          </div>
        </div>
        <!-- END SIDEBAR -->
      </div>
      <!-- END BODY WRAP -->

      <!-- WHAT YOU WILL GAIN -->
      <div class="lower-wrap">
        <div class="s-div">
          <h2>
            What you
            <em style="color: var(--pink); font-style: italic">will gain</em>
          </h2>
        </div>
        <div class="aims-grid">
          <div class="aim-item">
            <p class="aim-text">
              A deeper personal practice — and the confidence to take yoga
              beyond the mat into everyday life
            </p>
          </div>
          <div class="aim-item">
            <p class="aim-text">
              The ability to confidently teach a led all-levels Vinyasa class,
              or another style of your choice
            </p>
          </div>
          <div class="aim-item">
            <p class="aim-text">
              Possession of your own authentic voice and individual style as a
              teacher
            </p>
          </div>
          <div class="aim-item">
            <p class="aim-text">
              Skill in safe, intelligent hands-on adjustment technique for key
              postures
            </p>
          </div>
          <div class="aim-item">
            <p class="aim-text">
              A working knowledge of anatomy &amp; physiology, translated into
              your teaching
            </p>
          </div>
          <div class="aim-item">
            <p class="aim-text">
              A connection to the philosophical and historical roots of yoga
            </p>
          </div>
          <div class="aim-item">
            <p class="aim-text">
              A grounding in the ethics of yoga and what it means to live the
              practice
            </p>
          </div>
          <div class="aim-item">
            <p class="aim-text">
              The confidence to lead pranayama, meditation and chanting within a
              class
            </p>
          </div>
        </div>
      </div>

      <!-- TESTIMONIALS -->
      <div class="testimonials-section" id="section-testimonials">
        <div class="testimonials-inner">
          <div class="s-div">
            <h2>What our <em>students</em> say</h2>
            <p
              style="
                font-family: &quot;Cormorant Garamond&quot;, serif;
                font-size: 18px;
                font-style: italic;
                color: rgba(255, 255, 255, 0.85);
                line-height: 1.55;
                margin: 18px 0 0;
                max-width: 680px;
              "
            >
              Two of our graduates share what the 200-hour journey gave them —
              and how it shaped the teachers and practitioners they've become.
            </p>
          </div>
          <div class="grad-videos">
            <div class="grad-videos-grid">
              <div class="grad-video-card">
                <div class="grad-video-frame">
                  <!-- TODO: update with correct Vimeo IDs -->
                  <iframe
                    src="https://player.vimeo.com/video/260404994?byline=0&title=0&portrait=0"
                    allow="autoplay; fullscreen; picture-in-picture"
                    allowfullscreen
                    title="Graduate testimonial 1"
                  ></iframe>
                </div>
                <h4 class="grad-video-name">A graduate's <em>story</em></h4>
                <span class="grad-video-meta">Course Graduate · 2024</span>
              </div>
              <div class="grad-video-card">
                <div class="grad-video-frame">
                  <!-- TODO: update with correct Vimeo ID -->
                  <iframe
                    src="https://player.vimeo.com/video/260404994?byline=0&title=0&portrait=0"
                    allow="autoplay; fullscreen; picture-in-picture"
                    allowfullscreen
                    title="Graduate testimonial 2"
                  ></iframe>
                </div>
                <h4 class="grad-video-name">Finding my <em>voice</em></h4>
                <span class="grad-video-meta">Course Graduate · 2023</span>
              </div>
            </div>
            <div style="text-align: right; margin-top: 32px">
              <a
                href="/testimonials"
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
                >Read more graduate testimonials →</a
              >
            </div>
          </div>
          <div class="testi-featured">
            <div class="testi-featured-left">
              <p class="testi-featured-quote">
                I came into this expecting to be taught how to teach yoga. What
                I learned was how to find myself as a teacher — my own voice, my
                own way. That gift of self-belief is priceless.
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
                  Life-changing doesn't capture it. Gingi's teaching is
                  extraordinary — the precision of the asana work combined with
                  the depth of philosophy gave me a foundation I never expected.
                  I came out a different practitioner, and a different person.
                </p>
                <span class="testi-name">J.H. · Course Graduate</span>
              </div>
              <div class="testi-card">
                <p class="testi-quote">
                  Seven months flew by. The structure was manageable alongside
                  full-time work, the community was genuine, and the teaching
                  was exceptional. Highly recommend to anyone considering a
                  serious, grounded teacher training.
                </p>
                <span class="testi-name">Course Graduate 2024</span>
              </div>
              <div class="testi-card">
                <p class="testi-quote">
                  The depth surprised me — asana, anatomy, philosophy, hands-on
                  adjustments, breath, meditation, ethics. A serious, thorough
                  qualification I'm incredibly proud to hold.
                </p>
                <span class="testi-name">Course Graduate 2023</span>
              </div>
              <div class="testi-card">
                <p class="testi-quote">
                  I walked in thinking I wanted to teach. I walked out a
                  different person — with a practice that has stayed with me
                  every day since, and the confidence to actually hold a room.
                  The honesty and depth of this training is rare.
                </p>
                <span class="testi-name">Course Graduate 2024</span>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- MANTRA STRIP -->
      <div class="mantra-strip">
        <div class="mantra-strip-inner">
          <div class="word-strip-item">
            <span class="ws-verb">Deepen</span
            ><span class="ws-noun">your practice</span>
          </div>
          <span class="word-strip-sep">·</span>
          <div class="word-strip-item">
            <span class="ws-verb">Teach</span
            ><span class="ws-noun">with clarity</span>
          </div>
          <span class="word-strip-sep">·</span>
          <div class="word-strip-item">
            <span class="ws-verb">Find</span
            ><span class="ws-noun">your voice</span>
          </div>
          <span class="word-strip-sep">·</span>
          <div class="word-strip-item">
            <span class="ws-verb">Embody</span
            ><span class="ws-noun">the practice</span>
          </div>
          <span class="word-strip-sep">·</span>
          <div class="word-strip-item">
            <span class="ws-verb">Hold space</span
            ><span class="ws-noun">with presence</span>
          </div>
          <span class="word-strip-sep">·</span>
          <div class="word-strip-item">
            <span class="ws-verb">Live</span
            ><span class="ws-noun">the path</span>
          </div>
        </div>
      </div>

      <!-- TEACHERS BAND -->
      <div class="teachers-band" id="section-teacher">
        <div class="teachers-band-inner">
          <div class="s-div">
            <span class="s-div-eyebrow">Meet the Teachers</span>
            <h2>Your <em>teachers</em></h2>
            <span class="s-div-rule"></span>
          </div>
          <div class="teachers-row">
            <div class="teacher-compact">
              <div class="tc-img">
                <?php
                if (!empty($main_teachers[0])) :
                    $teacher = $main_teachers[0];
                    $card_image = get_field('main_image', $teacher->ID);

                    if ($card_image) :
                ?>
                    <img
                        src="<?php echo esc_url($card_image['url']); ?>"
                        alt="<?php echo esc_attr($card_image['alt']); ?>"
                    />
                <?php
                    endif;
                endif;
                ?>
              </div>
              <span class="tc-eyebrow">Lead Faculty · Co-founder</span>
              <h3 class="tc-name">
                <?php
                if (!empty($main_teachers[0])) {
                    echo theshala_highlight_text(
                        get_field('display_name', $main_teachers[0]->ID)
                    );
                }
                ?>
            </h3>
              <span class="tc-creds">E-RYT 500 · Teaching 30+ years</span>
              <p class="tc-bio">
                Gingi Lee teaches from the heart — with compassion, love and
                humour. Founder of the Shala Yoga Centre, which he ran for 25+
                years until 2026, he is co-founder and lead teacher of The Shala
                School of Yoga — a school built on the conviction that sharing
                yoga is a profound act of service.
              </p>
              <p class="tc-bio">
                Widely regarded as one of the UK's most senior and respected
                yoga teachers, Gingi has taught, trained and inspired thousands
                of practitioners and teachers. He trained in the Ashtanga
                tradition with the late Derek Ireland and continued his studies
                with Pattabhi Jois in Mysore.
              </p>
              <a href="/faculty" class="tc-more">Read full profile →</a>
            </div>
            <div class="teacher-compact">
              <div class="tc-img">
                  <?php
                if (!empty($main_teachers[1])) :
                    $teacher = $main_teachers[1];
                    $card_image = get_field('main_image', $teacher->ID);

                    if ($card_image) :
                ?>
                    <img
                        src="<?php echo esc_url($card_image['url']); ?>"
                        alt="<?php echo esc_attr($card_image['alt']); ?>"
                    />
                <?php
                    endif;
                endif;
                ?>
              </div>
              <span class="tc-eyebrow">Lead Faculty</span>
                <h3 class="tc-name">
                <?php
                if (!empty($main_teachers[1])) {
                    echo theshala_highlight_text(
                        get_field('display_name', $main_teachers[1]->ID)
                    );
                }
                ?>
            </h3>  
              <span class="tc-creds"
                >E-RYT 500 · YACEP Provider · Teaching since 2005</span
              >
              <p class="tc-bio">
                Charli teaches classes, workshops, teacher trainings and
                retreats to the community of all ages. She has run her own RYS
                200-hour Teacher Training School since 2007 and collaborates
                with the Shala School of Yoga on both the 200-hour and 300-hour
                programmes.
              </p>
              <p class="tc-bio">
                As a YACEP Provider, Charli also runs KulaKids, Sound Healing,
                and Women's Wellbeing CPD courses. Her presence supports every
                student in finding their own authentic voice as a teacher.
              </p>
              <a href="/faculty" class="tc-more">Read full profile →</a>
            </div>
          </div>
          <div class="faculty-divider">
            <span class="faculty-divider-eyebrow" style="text-align: left"
              >Specialist Faculty</span
            >
            <h3 class="faculty-divider-heading" style="text-align: left">
              Joined by <em>leading voices</em> in their fields
            </h3>
            <p
              class="faculty-divider-sub"
              style="text-align: left; margin-left: 0"
            >
              Anatomy, philosophy and the lineage of practice — taught by some
              of the UK's most respected senior teachers.
            </p>
            <div class="visiting-row">
              <div class="vt-card">
                <div class="vt-img">
                  <?php
                  if (!empty($supporting_teachers[0])) :
                      $teacher = $supporting_teachers[0];
                      $card_image = get_field('card_image', $teacher->ID);

                      if ($card_image) :
                  ?>
                      <img
                          src="<?php echo esc_url($card_image['url']); ?>"
                          alt="<?php echo esc_attr($card_image['alt']); ?>"
                      />
                  <?php
                      endif;
                  endif;
                  ?>
                </div>
                <span class="vt-eyebrow">Anatomy &amp; Physiology</span>
                <h4 class="vt-name">
                    <?php
                    if (!empty($supporting_teachers[0])) {
                        echo theshala_highlight_text(
                            get_field('display_name', $supporting_teachers[0]->ID)
                        );
                    }
                    ?>
                </h4>
                <span class="vt-creds">E-RYT 500 · Author · 25+ years</span>
                <p class="vt-bio">
                  Melanie brings yoga anatomy and physiology to life with rare
                  clarity and warmth. A senior Yoga Alliance teacher and
                  published author, she translates complex anatomical principles
                  into intelligent, embodied teaching that students remember.
                </p>
                <a href="/faculty" class="vt-more">Read profile →</a>
              </div>
              <div class="vt-card">
                <div class="vt-img">
                  <?php
                  if (!empty($supporting_teachers[1])) :
                      $teacher = $supporting_teachers[1];
                      $card_image = get_field('card_image', $teacher->ID);

                      if ($card_image) :
                  ?>
                      <img
                          src="<?php echo esc_url($card_image['url']); ?>"
                          alt="<?php echo esc_attr($card_image['alt']); ?>"
                      />
                  <?php
                      endif;
                  endif;
                  ?>
                </div>
                <span class="vt-eyebrow">History &amp; Philosophy</span>
                <h4 class="vt-name">
                    <?php
                    if (!empty($supporting_teachers[1])) {
                        echo theshala_highlight_text(
                            get_field('display_name', $supporting_teachers[1]->ID)
                        );
                    }
                    ?>
                </h4>
                <span class="vt-creds"
                  >PhD · SOAS · Scholar &amp; storyteller</span
                >
                <p class="vt-bio">
                  Matthew is a Sanskrit scholar and historian whose teaching
                  delves into the history, philosophy and roots of yoga. Known
                  for his magnificent storytelling, he makes ancient texts and
                  traditions vivid and immediate for contemporary practitioners.
                </p>
                <a href="/faculty" class="vt-more">Read profile →</a>
              </div>
              <div class="vt-card">
                <div
                  class="vt-img"
                  style="
                    background: var(--aubergine);
                    display: flex;
                    align-items: center;
                    justify-content: center;
                  "
                >
                  <span
                    style="
                      font-family: &quot;Playfair Display&quot;, serif;
                      font-style: italic;
                      font-size: 48px;
                      color: var(--orange);
                      opacity: 0.7;
                    "
                    >✦</span
                  >
                </div>
                <span class="vt-eyebrow">Guest Teachers</span>
                <h4 class="vt-name">Visiting Faculty</h4>
                <span class="vt-creds">Rotating senior teachers</span>
                <p class="vt-bio">
                  Each year we welcome one or two guest teachers to enrich the
                  training — senior practitioners from across the UK and
                  international yoga community, bringing fresh perspectives and
                  lineage depth.
                </p>
              </div>
            </div>
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
              <div class="g-tint"></div>
              <div class="g-overlay"><div class="g-zoom">+</div></div>
            </div>
            <div class="g-cell g-b" onclick="openLightbox(1)">
             <?php if (!empty($gallery_images[1])) : ?>
                  <img
                      src="<?php echo esc_url($gallery_images[1]['url']); ?>"
                      alt="<?php echo esc_attr($gallery_images[1]['alt']); ?>"
                  />
              <?php endif; ?>
              <div class="g-tint"></div>
              <div class="g-overlay"><div class="g-zoom">+</div></div>
            </div>
            <div class="g-cell g-c" onclick="openLightbox(2)">
              <?php if (!empty($gallery_images[2])) : ?>
                  <img
                      src="<?php echo esc_url($gallery_images[2]['url']); ?>"
                      alt="<?php echo esc_attr($gallery_images[2]['alt']); ?>"
                  />
              <?php endif; ?>
              <div class="g-tint"></div>
              <div class="g-overlay"><div class="g-zoom">+</div></div>
            </div>
            <div class="g-cell g-d" onclick="openLightbox(3)">
              <?php if (!empty($gallery_images[3])) : ?>
                  <img
                      src="<?php echo esc_url($gallery_images[3]['url']); ?>"
                      alt="<?php echo esc_attr($gallery_images[3]['alt']); ?>"
                  />
              <?php endif; ?>
              <div class="g-tint"></div>
              <div class="g-overlay"><div class="g-zoom">+</div></div>
            </div>
            <div class="g-cell g-e" onclick="openLightbox(4)">
                <?php if (!empty($gallery_images[4])) : ?>
                    <img
                        src="<?php echo esc_url($gallery_images[4]['url']); ?>"
                        alt="<?php echo esc_attr($gallery_images[4]['alt']); ?>"
                    />
                <?php endif; ?>
             
              <div class="g-tint"></div>
              <div class="g-overlay"><div class="g-zoom">+</div></div>
            </div>
          </div>
          <div style="text-align: center; margin-top: 32px">
            <a
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

      <!-- CURRICULUM + COURSE DATES -->
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
                    Techniques, Training &amp; Practice<span
                      class="acc-icon"
                    ></span>
                  </button>
                  <div class="acc-body open">
                    <div class="acc-inner">
                      <ul>
                        <li>
                          Asana — Ashtanga primary series as a framework, with
                          Vinyasa and flow sequencing
                        </li>
                        <li>
                          Hands-on adjustments and detailed alignment principles
                        </li>
                        <li>Pranayama, meditation and chanting</li>
                        <li>Kriya and advanced breathwork techniques</li>
                        <li>Yoga Nidra and relaxation techniques</li>
                        <li>Metta meditation and qi gong</li>
                        <li>Sacred sound and ceremony</li>
                      </ul>
                    </div>
                  </div>
                </div>

                <div class="acc-item">
                  <button class="acc-trigger" onclick="toggleAcc(this)">
                    Anatomy &amp; Physiology<span class="acc-icon"></span>
                  </button>
                  <div class="acc-body">
                    <div class="acc-inner">
                      <ul>
                        <li>
                          Functional anatomy applied to yoga — the major systems
                          of the body, movement patterns and healthy joint
                          principles
                        </li>
                        <li>
                          Benefits and contraindications for key postures,
                          breathwork and meditation practices
                        </li>
                        <li>Trauma-informed awareness in teaching</li>
                      </ul>
                    </div>
                  </div>
                </div>

                <div class="acc-item">
                  <button class="acc-trigger" onclick="toggleAcc(this)">
                    Yoga Philosophy, History &amp; Ethics<span
                      class="acc-icon"
                    ></span>
                  </button>
                  <div class="acc-body">
                    <div class="acc-inner">
                      <ul>
                        <li>History and philosophical roots of yoga</li>
                        <li>Yamas, Niyamas and the ethics of teaching</li>
                        <li>
                          Yogic precepts and how they translate into
                          contemporary practice
                        </li>
                        <li>
                          Living the practice — what it means to be a student
                          and a teacher of yoga today
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>

                <div class="acc-item">
                  <button class="acc-trigger" onclick="toggleAcc(this)">
                    Teaching Methodology<span class="acc-icon"></span>
                  </button>
                  <div class="acc-body">
                    <div class="acc-inner">
                      <ul>
                        <li>
                          Class design and sequencing — led, all-levels Vinyasa
                          and other styles
                        </li>
                        <li>
                          Voice, presence and finding your authentic teaching
                          style
                        </li>
                        <li>
                          Teaching environments, cueing language and observation
                        </li>
                        <li>
                          Ethics, boundaries and the teacher-student
                          relationship
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>

                <div class="acc-item">
                  <button class="acc-trigger" onclick="toggleAcc(this)">
                    Practicum &amp; Assessment<span class="acc-icon"></span>
                  </button>
                  <div class="acc-body">
                    <div class="acc-inner">
                      <ul>
                        <li>
                          Regular teaching practicums with constructive faculty
                          and peer feedback
                        </li>
                        <li>
                          One-to-one mentoring session with a senior faculty
                          member
                        </li>
                        <li>
                          Written coursework and a final practical teaching
                          assessment
                        </li>
                        <li>Personal practice log and reflective journal</li>
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
                          To provide a thorough, non-dogmatic foundation in the
                          vast subject of yoga
                        </li>
                        <li>
                          To meet and exceed Yoga Alliance RYS 200 standards at
                          every stage
                        </li>
                        <li>
                          To support each student in finding their own authentic
                          voice as a teacher
                        </li>
                        <li>
                          To foster a supportive kula where trainees can
                          practise, reflect and grow together
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>

                <div class="acc-item">
                  <button class="acc-trigger" onclick="toggleAcc(this)">
                    Methods of Learning<span class="acc-icon"></span>
                  </button>
                  <div class="acc-body">
                    <div class="acc-inner">
                      <ul>
                        <li>
                          Led by Gingi Lee and Charli Van Ness, with lectures
                          from senior guest faculty
                        </li>
                        <li>
                          Seven 3-day weekends in-studio, with livestream and
                          on-demand modules between
                        </li>
                        <li>
                          Partner and group practical exercises with
                          constructive feedback
                        </li>
                        <li>
                          Home study, reading and a reflective homework journal
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>

                <div class="acc-item">
                  <button class="acc-trigger" onclick="toggleAcc(this)">
                    What is Required<span class="acc-icon"></span>
                  </button>
                  <div class="acc-body">
                    <div class="acc-inner">
                      <ul>
                        <li>Attendance at all training weekends</li>
                        <li>
                          Completion of all written coursework and assessments
                        </li>
                        <li>
                          Homework journal, personal practice log, set reading
                          and practicum preparation
                        </li>
                        <li>
                          Attendance at a minimum of four yoga classes per month
                          outside of training
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
                          A Yoga Alliance registered 200-hour training (RYS
                          200), enabling graduates to register as RYT 200
                          teachers
                        </li>
                        <li>
                          All Yoga Alliance educational categories addressed in
                          full
                        </li>
                        <li>
                          Certificates issued once all coursework has been
                          completed
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>

              <div class="useful-info">
                <span class="useful-info-heading">Useful information</span>
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

            <div class="cd-col cd-dates" id="section-dates">
              <div class="s-div">
                <h2>Course dates <em>&amp; schedule</em></h2>
              </div>
              <div class="schedule">
                <div class="sched-day">
                  <div class="sched-left">
                    <span class="sched-date">12</span
                    ><span class="sched-dow">Saturday · Sep 2026</span>
                  </div>
                  <div class="sched-right">
                    <span class="sched-label"
                      >Module 1
                      <span class="sched-time-inline">10am – 6pm</span>
                      <span class="sched-type-pill pill-studio"
                        >In Studio</span
                      ></span
                    >
                    <div class="sched-detail">
                      Sat 12 – Mon 14 Sep · Course orientation, personal
                      practice foundations &amp; introduction to pranayama
                    </div>
                  </div>
                </div>

                <div class="sched-day">
                  <div class="sched-left">
                    <span class="sched-date">10</span
                    ><span class="sched-dow">Saturday · Oct 2026</span>
                  </div>
                  <div class="sched-right">
                    <span class="sched-label"
                      >Module 2
                      <span class="sched-time-inline">10am – 6pm</span>
                      <span class="sched-type-pill pill-studio"
                        >In Studio</span
                      ></span
                    >
                    <div class="sched-detail">
                      Sat 10 – Mon 12 Oct · Ashtanga primary series, hands-on
                      adjustments &amp; teaching methodology begins
                    </div>
                  </div>
                </div>

                <div class="sched-day">
                  <div class="sched-left">
                    <span class="sched-date">17</span
                    ><span class="sched-dow">Saturday · Oct 2026</span>
                  </div>
                  <div class="sched-right">
                    <span class="sched-label"
                      >Livestream 1
                      <span class="sched-time-inline">8.30 – 11.30am</span>
                      <span class="sched-type-pill pill-live"
                        >Livestream</span
                      ></span
                    >
                    <div class="sched-detail">
                      Anatomy &amp; physiology — session one
                    </div>
                  </div>
                </div>

                <div class="sched-day">
                  <div class="sched-left">
                    <span class="sched-date">14</span
                    ><span class="sched-dow">Saturday · Nov 2026</span>
                  </div>
                  <div class="sched-right">
                    <span class="sched-label"
                      >Module 3
                      <span class="sched-time-inline">10am – 6pm</span>
                      <span class="sched-type-pill pill-studio"
                        >In Studio</span
                      ></span
                    >
                    <div class="sched-detail">
                      Sat 14 – Mon 16 Nov · Yoga philosophy &amp; history ·
                      Yamas &amp; Niyamas · voice &amp; presence
                    </div>
                  </div>
                </div>

                <div class="sched-day">
                  <div class="sched-left">
                    <span class="sched-date">12</span
                    ><span class="sched-dow">Saturday · Dec 2026</span>
                  </div>
                  <div class="sched-right">
                    <span class="sched-label"
                      >Module 4
                      <span class="sched-time-inline">10am – 6pm</span>
                      <span class="sched-type-pill pill-studio"
                        >In Studio</span
                      ></span
                    >
                    <div class="sched-detail">
                      Sat 12 – Mon 14 Dec · Vinyasa sequencing, class design
                      &amp; sacred sound
                    </div>
                  </div>
                </div>

                <div class="sched-day">
                  <div class="sched-left">
                    <span class="sched-date">9</span
                    ><span class="sched-dow">Saturday · Jan 2027</span>
                  </div>
                  <div class="sched-right">
                    <span class="sched-label"
                      >Module 5
                      <span class="sched-time-inline">10am – 6pm</span>
                      <span class="sched-type-pill pill-studio"
                        >In Studio</span
                      ></span
                    >
                    <div class="sched-detail">
                      Sat 9 – Mon 11 Jan · Pranayama &amp; meditation deepening
                      · Yoga Nidra
                    </div>
                  </div>
                </div>

                <div class="sched-day">
                  <div class="sched-left">
                    <span class="sched-date">6</span
                    ><span class="sched-dow">Saturday · Feb 2027</span>
                  </div>
                  <div class="sched-right">
                    <span class="sched-label"
                      >Module 6
                      <span class="sched-time-inline">10am – 6pm</span>
                      <span class="sched-type-pill pill-studio"
                        >In Studio</span
                      ></span
                    >
                    <div class="sched-detail">
                      Sat 6 – Mon 8 Feb · Teaching practicals, assessment
                      preparation &amp; ethics of teaching
                    </div>
                  </div>
                </div>

                <div class="sched-day">
                  <div class="sched-left">
                    <span class="sched-date">20</span
                    ><span class="sched-dow">Saturday · Feb 2027</span>
                  </div>
                  <div class="sched-right">
                    <span class="sched-label"
                      >Livestream 2
                      <span class="sched-time-inline">8.30 – 11.30am</span>
                      <span class="sched-type-pill pill-live"
                        >Livestream</span
                      ></span
                    >
                    <div class="sched-detail">
                      Anatomy &amp; physiology — session two
                    </div>
                  </div>
                </div>

                <div class="sched-day">
                  <div class="sched-left">
                    <span class="sched-date">13</span
                    ><span class="sched-dow">Saturday · Mar 2027</span>
                  </div>
                  <div class="sched-right">
                    <span class="sched-label"
                      >Module 7
                      <span class="sched-time-inline">10am – 6pm</span>
                      <span class="sched-type-pill pill-studio"
                        >In Studio</span
                      ></span
                    >
                    <div class="sched-detail">
                      Sat 13 – Mon 15 Mar · Final practical teaching assessments
                      &amp; course reflection
                    </div>
                  </div>
                </div>

                <div class="sched-day">
                  <div class="sched-left">
                    <span class="sched-date">Apr</span
                    ><span class="sched-dow">Flexible · 2027</span>
                  </div>
                  <div class="sched-right">
                    <span class="sched-label"
                      >One-to-one Mentoring
                      <span class="sched-type-pill pill-studio"
                        >Studio or Online</span
                      ></span
                    >
                    <div class="sched-detail">
                      Scheduled individually with a senior faculty member during
                      the course
                    </div>
                  </div>
                </div>

                <div class="sched-day" style="border-bottom: none">
                  <div class="sched-left">
                    <span class="sched-date">3</span
                    ><span class="sched-dow">Monday · May 2027</span>
                  </div>
                  <div class="sched-right">
                    <span class="sched-label"
                      >Graduation Day
                      <span class="sched-time-inline">10am – 6pm</span>
                      <span class="sched-type-pill pill-studio"
                        >In Studio</span
                      ></span
                    >
                    <div class="sched-detail">
                      Yoga Alliance certificate ceremony &amp; community
                      celebration
                    </div>
                  </div>
                </div>
              </div>

              <div class="future-dates">
                <span class="future-dates-eyebrow">Future cohorts</span>
                <h3 class="future-dates-heading">
                  This course will run <em>again</em>
                </h3>
                <p class="future-dates-note">
                  Can't make the dates? This training runs annually.
                </p>
                <div class="future-run">
                  <span class="future-run-dates">Sep 2027 – May 2028</span>
                  <span class="future-run-label">Next cohort</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- OPEN DAYS -->
      <div class="lower-wrap" id="open-days">
        <div class="openday-block">
          <div class="openday-text">
            <h2 class="openday-heading">Join us at an <em>Open Day</em></h2>
            <p class="openday-copy">
              Before you apply, we warmly invite you to come and spend time with
              us at one of our twice-yearly Open Days — held every March and
              June at our West Norwood studio. You'll meet Gingi, Charli and the
              wider faculty, hear more about the course in person, experience a
              short practice, and have all your questions answered by current
              students and teachers.
            </p>
            <p class="openday-copy">
              Open Days are also open to anyone simply curious about deepening
              their practice — no commitment to apply required.
            </p>
            <a href="#" class="openday-cta">Book an Open Day place →</a>
            <span class="openday-dates"
              >Next dates: Thursday 12 March 2027 · Friday 18 June 2027</span
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
              <span class="apply-step-title"
                >Attend an Open Day or book a call</span
              >
              <div class="apply-step-text">
                We highly recommend attending one of our Open Days before
                applying. Alternatively, email
                <a href="mailto:teachertraining@theshala.co.uk"
                  >teachertraining@theshala.co.uk</a
                >
                to request a call with our Teacher Training Manager.
              </div>
            </div>
          </div>
          <div class="apply-step">
            <div class="apply-step-num">2</div>
            <div>
              <span class="apply-step-title">Submit your application</span>
              <div class="apply-step-text">
                Complete the full application form and pay the £25
                non-refundable application fee. We aim to respond within 7 days.
                Early applications are strongly recommended — the course is
                usually oversubscribed.
              </div>
            </div>
          </div>
          <div class="apply-step">
            <div class="apply-step-num">3</div>
            <div>
              <span class="apply-step-title"
                >Pay your deposit to confirm your place</span
              >
              <div class="apply-step-text">
                On acceptance, pay the £825 non-refundable deposit to secure
                your place. The balance of £2,400 is taken in three monthly
                instalments of £800 from that date.
              </div>
            </div>
          </div>
          <div class="apply-step">
            <div class="apply-step-num">4</div>
            <div>
              <span class="apply-step-title">Any questions?</span>
              <div class="apply-step-text">
                Email
                <a href="mailto:teachertraining@theshala.co.uk"
                  >teachertraining@theshala.co.uk</a
                >
                with any specific questions or learning requirements. We are
                always happy to chat.
              </div>
            </div>
          </div>
        </div>
        <a
          href="https://forms.office.com/Pages/ResponsePage.aspx?id=tLLKNRD4mEiDnO8jPFQT1J1Fn_kmT_xOgnbL8OFZO4JUMzQxRTEzSktSTFNKV0IwWFBVR1VURloyNy4u"
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
                                  />
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

      <!-- EXPRESS INTEREST -->
      <!-- <div class="interest-section" id="express-interest">
        <div class="interest-inner">
          <div class="interest-copy">
            <h2 class="interest-heading">
              Interested in the <em>200-hour?</em>
            </h2>
            <p class="interest-body">
              Not ready to apply yet — or want to hear about future cohorts?
              Register your interest and we'll be in touch with everything you
              need to know, including Open Day dates and when the next intake
              opens.
            </p>
            <p class="interest-reassure">
              No commitment required · No spam, ever · Priority notification of
              new intakes
            </p>
          </div>
          <div class="interest-form">
            <div class="interest-form-card">
              <div class="int-field">
                <label class="int-label" for="int-name">Your Name</label>
                <input
                  class="int-input"
                  id="int-name"
                  type="text"
                  placeholder="First and last name"
                />
              </div>
              <div class="int-field">
                <label class="int-label" for="int-email">Email Address</label>
                <input
                  class="int-input"
                  id="int-email"
                  type="email"
                  placeholder="your@email.com"
                />
              </div>
              <div class="int-field">
                <label class="int-label" for="int-background"
                  >Additional Information
                  <span style="opacity: 0.5; font-size: 9px"
                    >(optional)</span
                  ></label
                >
                <textarea
                  class="int-input int-textarea"
                  id="int-background"
                  placeholder="E.g. yoga teacher, school teacher — helps us tailor our reply"
                ></textarea>
              </div>
              <button class="int-submit" onclick="handleInterestSubmit(this)">
                Register My Interest →
              </button>
              <p class="int-note">
                We'll only use your details to contact you about this course and
                related Shala School news. Unsubscribe at any time.
              </p>
            </div>
          </div>
        </div>
      </div> -->

      <!-- TEST 200 ENQUIRE FORM -->
       <!-- EXPRESS INTEREST -->
      <div class="interest-section" id="express-interest">
          <div class="interest-inner">

              <div class="interest-copy">
                  <h2 class="interest-heading">
                      Interested in the <em>200-hour?</em>
                  </h2>

                  <p class="interest-body">
                      Not ready to apply yet — or want to hear about future cohorts?
                      Register your interest and we'll be in touch with everything you
                      need to know, including Open Day dates and when the next intake
                      opens.
                  </p>

                  <p class="interest-reassure">
                      No commitment required · No spam, ever · Priority notification of
                      new intakes
                  </p>
              </div>

              <div class="interest-form">
                  <div class="interest-form-card">


                      <div id="momence-plugin-lead-form"></div> 
                      <script async type="module" id="momence-plugin-lead-form-src" host_id="9055" fields="firstName,lastName,email" token="Ra7GErbXD5" country_code="gb" source_id="659" data-field-def='{"firstName":{"type":"text","label":"First name","required":true},"lastName":{"type":"text","label":"Last name","required":true},"email":{"type":"email","label":"Email","required":true}}' src="https://momence.com/plugin/lead-form/lead-form.js" ></script>

                      <style>
                          :root {
                              --momenceColorBackground: #FBFBFB;
                              --momenceColorPrimary: 212, 0, 98;
                              --momenceColorBlack: 81, 18, 62;
                          }
                      </style>
                      <!-- <p class="int-note">
                          We'll only use your details to contact you about this course and related
                          Shala School news. Unsubscribe at any time.
                      </p> -->
                  </div>
                  
              </div>

          </div>
      </div>

    </main>

<?php get_footer(); ?>