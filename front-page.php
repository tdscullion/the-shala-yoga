<?php get_header(); ?>


    <main id="main-content">
      <!-- HERO -->
      <section class="hero-home">
        <div class="hero-home-inner">
          <div class="hero-home-spiral" aria-hidden="true">
            <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/spirals/spiral-1-cropped.png'); ?>" alt="Spiral pattern" />
          </div>

          <div class="hero-home-titlewrap">
            <h1 class="hero-home-title">
              Authentic yoga education — grounded, transformative, profoundly
              <em>human.</em>
            </h1>
          </div>

          <div class="hero-home-textcol">
            <div class="hero-home-textinner">
              <p class="hero-home-sub">
                Yoga education rooted in decades of experience, exceptional
                teachers and genuine connection — where ancient wisdom meets
                modern insight to deepen personal and professional growth.
              </p>

              <div class="hero-home-btns">
                <a href="#" class="btn btn-pink">Explore Courses</a>
                <a href="#" class="btn btn-ghost-pink">Our Story</a>
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
            <div class="cc">
              <div class="cc-bg">
                <img
                  src="assets/images/course-sequencing.jpg"
                  alt="Creative Yoga Sequencing"
                />
              </div>
              <div
                class="cc-tint"
                style="background: rgba(212, 0, 98, 1)"
              ></div>
              <div class="cc-fade"></div>
              <div class="cc-body">
                <span class="cc-tag">Studio + Livestream</span>
                <div class="cc-title">Creative Yoga Sequencing</div>
                <div class="cc-teacher">Melanie Cooper</div>
                <div class="cc-foot">
                  <div class="cc-date"><strong>21–23 Mar 2026</strong>£395</div>
                </div>
              </div>
            </div>

            <div class="cc">
              <div class="cc-bg">
                <img
                  src="assets/images/course-kids-yoga.jpg"
                  alt="Holistic Kids Yoga"
                />
              </div>
              <div
                class="cc-tint"
                style="background: rgba(59, 19, 46, 1)"
              ></div>
              <div class="cc-fade"></div>
              <div class="cc-body">
                <span class="cc-tag">Studio + Livestream</span>
                <div class="cc-title">Holistic Kids Yoga</div>
                <div class="cc-teacher">Charli Van Ness</div>
                <div class="cc-foot">
                  <div class="cc-date"><strong>10–12 Apr 2026</strong>£595</div>
                </div>
              </div>
            </div>

            <div class="cc">
              <div class="cc-bg">
                <img
                  src="assets/images/course-chair-yoga.jpg"
                  alt="Chair Yoga"
                />
              </div>
              <div
                class="cc-tint"
                style="background: rgba(75, 58, 67, 1)"
              ></div>
              <div class="cc-fade"></div>
              <div class="cc-body">
                <span class="cc-tag">Studio + Livestream</span>
                <div class="cc-title">Chair Yoga</div>
                <div class="cc-teacher">Dina Cohen</div>
                <div class="cc-foot">
                  <div class="cc-date"><strong>9–26 Apr 2026</strong>£195</div>
                </div>
              </div>
            </div>

            <div class="cc">
              <div class="cc-bg">
                <img
                  src="assets/images/course-trauma-yoga.jpg"
                  alt="Trauma Informed Yoga"
                />
              </div>
              <div
                class="cc-tint"
                style="background: rgba(140, 0, 63, 1)"
              ></div>
              <div class="cc-fade"></div>
              <div class="cc-body">
                <span class="cc-tag">Livestream</span>
                <div class="cc-title">Trauma Informed Yoga</div>
                <div class="cc-teacher">Ellie Grace</div>
                <div class="cc-foot">
                  <div class="cc-date">
                    <strong>14 Apr – 19 May</strong>£450
                  </div>
                </div>
              </div>
            </div>

            <div class="cc">
              <div class="cc-bg">
                <img src="assets/images/course-nidra.jpg" alt="Yoga Nidra" />
              </div>
              <div
                class="cc-tint"
                style="background: rgba(139, 82, 0, 1)"
              ></div>
              <div class="cc-fade"></div>
              <div class="cc-body">
                <span class="cc-tag">Livestream</span>
                <div class="cc-title">Yoga Nidra</div>
                <div class="cc-teacher">
                  Melanie Cooper &amp; Jennie Wadsten Sharma
                </div>
                <div class="cc-foot">
                  <div class="cc-date"><strong>24–26 Apr 2026</strong>£395</div>
                </div>
              </div>
            </div>

            <div class="cc">
              <div class="cc-bg">
                <img
                  src="assets/images/course-adjustments.jpg"
                  alt="Yoga Adjusts"
                />
              </div>
              <div
                class="cc-tint"
                style="background: rgba(59, 19, 46, 1)"
              ></div>
              <div class="cc-fade"></div>
              <div class="cc-body">
                <span class="cc-tag">In Studio</span>
                <div class="cc-title">Yoga Adjusts &amp; Assists</div>
                <div class="cc-teacher">Gingi Lee</div>
                <div class="cc-foot">
                  <div class="cc-date"><strong>9–11 May 2026</strong>£450</div>
                </div>
              </div>
            </div>

            <div class="cc">
              <div class="cc-bg">
                <img src="assets/images/course-yin.jpg" alt="Yin Yoga" />
              </div>
              <div
                class="cc-tint"
                style="background: rgba(59, 19, 46, 1)"
              ></div>
              <div class="cc-fade"></div>
              <div class="cc-body">
                <span class="cc-tag">In Studio</span>
                <div class="cc-title">Yin Yoga</div>
                <div class="cc-teacher">Norman Blair</div>
                <div class="cc-foot">
                  <div class="cc-date"><strong>15–19 May 2026</strong>£675</div>
                </div>
              </div>
            </div>

            <div class="cc">
              <div class="cc-bg">
                <img
                  src="assets/images/course-elemental.jpg"
                  alt="Elemental Mandala Vinyasa"
                />
              </div>
              <div
                class="cc-tint"
                style="background: rgba(212, 0, 98, 1)"
              ></div>
              <div class="cc-fade"></div>
              <div class="cc-body">
                <span class="cc-tag">In Studio</span>
                <div class="cc-title">Elemental Mandala Vinyasa</div>
                <div class="cc-teacher">Emma Landolt</div>
                <div class="cc-foot">
                  <div class="cc-date"><strong>6–8 Jun 2026</strong>£450</div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="carousel-footer">
          <a href="/cpds" class="see-all see-all-strong"
            >View all 25+ courses →</a
          >
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
                  300 hours · Studio + Livestream · from £tbc
                </div>
                <a href="/300-hour" class="path-link">Explore the 300-Hour →</a>
              </div>
            </div>
            <div class="path-card">
              <div class="path-card-body">
                <div class="path-logo-wrap">
                  <!-- TODO: add YACEP logo once available -->
                </div>
                <span class="path-icon">CPD</span>
                <div class="path-title">Modules <em>&amp;</em> CPD Courses</div>
                <p class="path-desc">
                  25+ specialist courses a year, from Yin to Trauma Informed
                  Yoga, Elemental Mandala and Yoga Nidra.
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
                  <img
                    src="assets/images/200-hour-hero.jpg"
                    alt="200-Hour YTT"
                  />
                </div>
                <div class="fc-fade"></div>
              </div>
              <div class="fc-rest">
                <span class="fc-rest-tag">Yoga Alliance 200-RYS</span>
                <div class="fc-rest-title">
                  200-Hour Yoga Teacher <em>Training</em>
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
                  200-Hour Yoga Teacher <em>Training</em>
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
                    <span class="fcs-label">Investment</span
                    ><span class="fcs-val">£3,250</span>
                  </div>
                </div>
                <a href="/200-hour" class="fc-cta">Discover the 200-Hour →</a>
              </div>
            </div>

            <div class="fc">
              <div class="fc-image-layer">
                <div class="fc-bg">
                  <img
                    src="assets/images/300-hour-hero.jpg"
                    alt="300-Hour YTT"
                  />
                </div>
                <div class="fc-fade"></div>
              </div>
              <div class="fc-rest">
                <span class="fc-rest-tag">Yoga Alliance 300-RYS</span>
                <div class="fc-rest-title">
                  300-Hour Yoga Teacher <em>Training</em>
                </div>
                <div class="fc-rest-teacher">For Qualified Teachers</div>
              </div>
              <div class="fc-hover-layer">
                <span class="fc-hover-level"
                  >Level 2 · 300-RYS · Studio + Online</span
                >
                <h3 class="fc-hover-title">
                  300-Hour Yoga Teacher <em>Training</em>
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
                    ><span class="fcs-val">Studio + Online</span>
                  </div>
                  <div>
                    <span class="fcs-label">From</span
                    ><span class="fcs-val">£3,750</span>
                  </div>
                </div>
                <a href="/300-hour" class="fc-cta">Discover the 300-Hour →</a>
              </div>
            </div>
          </div>
        </div>
      </section>

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
                <em>Exceptional</em> Senior Teachers
              </div>
              <p class="reason-body">
                Our faculty bring decades of expertise in their specialised
                fields — people who don't just teach yoga, but who live it
                deeply and share it with genuine authority.
              </p>
            </div>
            <div class="reason-strip">
              <span class="reason-num">3</span>
              <div class="reason-title">Intimate <em>Learning Spaces</em></div>
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
                Traditional <em>Meets</em> Contemporary
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
                A Community Where <em>Transformation Happens</em>
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
            <div class="fac-card fac-card--gingi">
              <div class="fac-img">
                <img src="assets/images/gingi-lee.jpg" alt="Gingi Lee" />
                <div class="fac-img-fade"></div>
              </div>
              <div class="fac-colour">
                <div class="fac-colour-body">
                  <span class="fac-tag"
                    >Founder &amp; Lead Teacher Trainer</span
                  >
                  <div class="fac-name"><em>Gingi</em> Lee</div>
                  <span class="fac-role"
                    >200-Hour · 300-Hour · Assists &amp; Adjustments</span
                  >
                  <p class="fac-bio">
                    Gingi founded the Shala in 1997 and has been teaching yoga
                    for over 30 years. He brings rare depth, warmth, humour and
                    insight to every training — a teacher who changes not just
                    how you teach, but how you see.
                  </p>
                  <a href="/faculty" class="fac-link">About Gingi →</a>
                </div>
              </div>
              <div class="fac-body">
                <span class="fac-tag">Founder &amp; Lead Teacher Trainer</span>
                <div class="fac-name"><em>Gingi</em> Lee</div>
                <span class="fac-role"
                  >200-Hour · 300-Hour · Assists &amp; Adjustments</span
                >
              </div>
            </div>

            <div class="fac-card fac-card--melanie">
              <div class="fac-img">
                <img
                  src="assets/images/melanie-cooper.jpg"
                  alt="Melanie Cooper"
                />
                <div class="fac-img-fade"></div>
              </div>
              <div class="fac-colour">
                <div class="fac-colour-body">
                  <span class="fac-tag">Lead Teacher Trainer</span>
                  <div class="fac-name"><em>Melanie</em> Cooper</div>
                  <span class="fac-role"
                    >300-Hour · 200-Hour · Anatomy · Yoga Nidra · Yin Yoga ·
                    Pranayama</span
                  >
                  <p class="fac-bio">
                    Melanie's teaching is unlike anything else — clear,
                    accessible, safe and transformative. She brings deep
                    embodied knowledge and genuine curiosity to every room she
                    teaches in.
                  </p>
                  <a href="/faculty" class="fac-link">About Melanie →</a>
                </div>
              </div>
              <div class="fac-body">
                <span class="fac-tag">Lead Teacher Trainer</span>
                <div class="fac-name"><em>Melanie</em> Cooper</div>
                <span class="fac-role"
                  >300-Hour · 200-Hour · Anatomy · Yoga Nidra · Yin Yoga ·
                  Pranayama</span
                >
              </div>
            </div>

            <div class="fac-card fac-card--charli">
              <div class="fac-img">
                <img
                  src="assets/images/charli-van-ness.jpg"
                  alt="Charli Van Ness"
                />
                <div class="fac-img-fade"></div>
              </div>
              <div class="fac-colour">
                <div class="fac-colour-body">
                  <span class="fac-tag">Lead Teacher Trainer</span>
                  <div class="fac-name"><em>Charli</em> Van Ness</div>
                  <span class="fac-role"
                    >200-Hour · 300-Hour · Meditation · Kids Yoga · Somatic Yoga
                    · Sound Healing</span
                  >
                  <p class="fac-bio">
                    Multi-gifted Charli brings extraordinary skill, lightness,
                    and rigour to her teaching. Her trainings provide a rich
                    landscape of knowledge, creativity and self-exploration —
                    leaving you confident, equipped and inspired.
                  </p>
                  <a href="/faculty" class="fac-link">About Charli →</a>
                </div>
              </div>
              <div class="fac-body">
                <span class="fac-tag">Lead Teacher Trainer</span>
                <div class="fac-name"><em>Charli</em> Van Ness</div>
                <span class="fac-role"
                  >200-Hour · 300-Hour · Meditation · Kids Yoga · Somatic Yoga ·
                  Sound Healing</span
                >
              </div>
            </div>
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
              The Shala's training was the most profound experience of my life.
              Gingi and the faculty don't just teach you to teach — they help
              you become yourself.
            </p>
            <span class="testi-featured-name">200-Hour Graduate, 2024</span>
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
                  I've done CPDs with a lot of schools. The Shala is different —
                  there's a rigour and a warmth here that I've never found
                  anywhere else. Worth every penny.
                </p>
                <span class="testi-name">Tom B., Yin Yoga CPD, 2025</span>
              </div>
              <div class="testi-card">
                <p class="testi-quote">
                  The intimacy of the group made all the difference. With only
                  20-odd students, you're genuinely known and seen — and that
                  changes the quality of the whole experience.
                </p>
                <span class="testi-name"
                  >Priya D., 200-Hour Graduate, 2023</span
                >
              </div>
              <div class="testi-card">
                <p class="testi-quote">
                  Melanie's anatomy teaching is like nothing else I've
                  encountered — precise, poetic, and genuinely transformative.
                  It changed how I understand my own body.
                </p>
                <span class="testi-name">James W., 300-Hour Module, 2025</span>
              </div>
              <div class="testi-card">
                <p class="testi-quote">
                  I came to the Shala as a practitioner and left as a teacher.
                  But more than that, I left as a more complete human being.
                  That is the gift of this place.
                </p>
                <span class="testi-name"
                  >Fiona L., 200-Hour Graduate, 2024</span
                >
              </div>
              <div class="testi-card">
                <p class="testi-quote">
                  The Shala community is something I didn't know I needed. The
                  connections I made during training are still the most
                  nourishing relationships in my teaching life.
                </p>
                <span class="testi-name"
                  >Marcus O., 200-Hour Graduate, 2022</span
                >
              </div>
              <div class="testi-card">
                <p class="testi-quote">
                  Gingi is an extraordinary teacher. He somehow holds the entire
                  space — every student's journey — with grace, humour, and a
                  wisdom that is genuinely rare.
                </p>
                <span class="testi-name"
                  >Aoife C., 200-Hour Graduate, 2025</span
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
      <div class="gallery-band" id="section-life">
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
          <!-- TODO: add gallery images to assets/images/ -->
          <div class="g-cell g-tall"><div class="g-overlay"></div></div>
          <div class="g-cell"><div class="g-overlay"></div></div>
          <div class="g-cell"><div class="g-overlay"></div></div>
          <div class="g-cell"><div class="g-overlay"></div></div>
          <div class="g-cell"><div class="g-overlay"></div></div>
        </div>
      </div>

      <!-- RETREAT -->
      <section class="retreat-section" id="section-retreat">
        <h2 class="sr-only">Retreats</h2>
        <div class="retreat-inner">
          <div class="section-header-row">
            <div>
              <h3 class="section-heading" style="margin-bottom: 0">
                Escape <em>2027</em>
              </h3>
            </div>
            <a href="/retreats" class="see-all">Full details →</a>
          </div>
          <div class="retreat-layout">
            <div class="retreat-collage">
              <div class="rc-cell rc-wide">
                <img
                  src="assets/images/ulpotha-wide.jpg"
                  alt="Ulpotha Sri Lanka"
                />
              </div>
              <div class="rc-cell">
                <img
                  src="assets/images/retreat-community.jpg"
                  alt="Retreat community"
                />
              </div>
              <div class="rc-cell">
                <img
                  src="assets/images/retreat-practice.jpg"
                  alt="Retreat practice"
                />
              </div>
              <div class="rc-cell">
                <img src="assets/images/retreat-yoga.jpg" alt="Retreat yoga" />
              </div>
              <div class="rc-cell rc-span2">
                <img
                  src="assets/images/retreat-gathering.jpg"
                  alt="Retreat gathering"
                />
              </div>
              <div class="rc-cell">
                <img
                  src="assets/images/retreat-teaching.jpg"
                  alt="Retreat teaching"
                />
              </div>
            </div>
            <div class="retreat-copy">
              <div class="retreat-accent"></div>
              <h3 class="retreat-title">Ulpotha Retreat <em>2027</em></h3>
              <span class="retreat-dates-label">14–28 March 2027</span>
              <span class="retreat-options"
                >Available as 1 week or 2 weeks</span
              >
              <p class="retreat-desc">
                Ulpotha is one of the world's most extraordinary retreat
                sanctuaries. This will be our 8th visit to this ancient village
                in the Sri Lankan jungle, without electricity, where time slows
                and practice deepens. A setting unlike anywhere else on earth.
              </p>
              <div class="retreat-meta">
                <div>
                  <span class="rmi-label">Duration</span
                  ><span class="rmi-val">1 or 2 weeks</span>
                </div>
                <div>
                  <span class="rmi-label">Dates</span
                  ><span class="rmi-val">Mar 2027</span>
                </div>
                <div>
                  <span class="rmi-label">Places</span
                  ><span class="rmi-val">Very Limited</span>
                </div>
              </div>
              <a href="/retreats" class="retreat-btn">Find Out More</a>
            </div>
          </div>
        </div>
      </section>

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
            <div
              style="
                display: flex;
                gap: 12px;
                flex-wrap: wrap;
                align-items: center;
                margin-top: 28px;
              "
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
              src="assets/logos/vahni-logo.jpg"
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
              <div class="blog-card">
                <div class="blog-img">
                  <img src="assets/images/blog-01.jpg" alt="Blog" />
                </div>
                <div class="blog-copy">
                  <span class="blog-cat">Philosophy</span>
                  <div class="blog-title">
                    What does it really mean to teach yoga ethically?
                  </div>
                  <p class="blog-excerpt">
                    Beyond the Yamas and Niyamas — a practical look at ethical
                    teaching in the modern world.
                  </p>
                  <span class="blog-meta">Gingi Lee · February 2026</span>
                </div>
              </div>
              <div class="blog-card">
                <div class="blog-img">
                  <img src="assets/images/blog-02.jpg" alt="Blog" />
                </div>
                <div class="blog-copy">
                  <span class="blog-cat">Teaching</span>
                  <div class="blog-title">
                    How to start teaching yoga to children — the honest guide
                  </div>
                  <p class="blog-excerpt">
                    Charli Van Ness shares what nobody tells you about building
                    a kids yoga practice.
                  </p>
                  <span class="blog-meta">Charli Van Ness · January 2026</span>
                </div>
              </div>
              <div class="blog-card">
                <div class="blog-img">
                  <img src="assets/images/blog-03.jpg" alt="Blog" />
                </div>
                <div class="blog-copy">
                  <span class="blog-cat">Anatomy</span>
                  <div class="blog-title">
                    Why every yoga teacher needs to understand the nervous
                    system
                  </div>
                  <p class="blog-excerpt">
                    Melanie Cooper on the one shift in understanding that will
                    transform your teaching.
                  </p>
                  <span class="blog-meta">Melanie Cooper · December 2025</span>
                </div>
              </div>
              <div class="blog-card">
                <div class="blog-img">
                  <img src="assets/images/blog-04.jpg" alt="Blog" />
                </div>
                <div class="blog-copy">
                  <span class="blog-cat">Community</span>
                  <div class="blog-title">
                    Why the yoga teacher community matters more than you think
                  </div>
                  <p class="blog-excerpt">
                    Gingi Lee on Saha gatherings and why peer connection is the
                    missing piece in most trainings.
                  </p>
                  <span class="blog-meta">Gingi Lee · November 2025</span>
                </div>
              </div>
              <div class="blog-card">
                <div class="blog-img">
                  <img src="assets/images/blog-05.jpg" alt="Blog" />
                </div>
                <div class="blog-copy">
                  <span class="blog-cat">Training</span>
                  <div class="blog-title">
                    What to expect from your first year as a yoga teacher
                  </div>
                  <p class="blog-excerpt">
                    The questions nobody prepares you for — and how to navigate
                    them with grace.
                  </p>
                  <span class="blog-meta">Charli Van Ness · October 2025</span>
                </div>
              </div>
              <div class="blog-card">
                <div class="blog-img">
                  <img src="assets/images/blog-06.jpg" alt="Blog" />
                </div>
                <div class="blog-copy">
                  <span class="blog-cat">Sequencing</span>
                  <div class="blog-title">
                    The art of creative sequencing — less formula, more feeling
                  </div>
                  <p class="blog-excerpt">
                    Melanie Cooper on why the best sequences emerge from deep
                    listening, not clever planning.
                  </p>
                  <span class="blog-meta">Melanie Cooper · September 2025</span>
                </div>
              </div>
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
            <input
              class="nl-input"
              type="text"
              placeholder="Full name"
              id="nlName"
            />
            <input
              class="nl-input"
              type="email"
              placeholder="your@email.com"
              id="nlEmail"
            />
            <button class="nl-btn" onclick="handleNL(this)">Subscribe</button>
          </div>
          <p class="nl-note">No spam. Unsubscribe at any time.</p>
        </div>
      </section>
    </main>


<?php get_footer(); ?>