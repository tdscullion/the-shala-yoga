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
      <!-- FILTER BAR -->
      <nav class="filter-bar">
        <div class="filter-inner">
          <span class="filter-label">Show me</span>
          <button class="f-btn active" data-filter="all">Everything</button>
          <div class="f-sep"></div>
          <button class="f-btn" data-filter="studio">In Studio</button>
          <button class="f-btn" data-filter="live">Livestream</button>
          <button class="f-btn" data-filter="ondemand" data-scroll="od-section">
            On Demand
          </button>
          <div class="f-sep"></div>
          <button class="f-btn" data-filter="free">Low Cost &amp; Free</button>
          <button class="f-btn" data-filter="asana">Asana</button>
          <button class="f-btn" data-filter="inner">Inner Practice</button>
          <button class="f-btn" data-filter="specialist">
            Specialist Training
          </button>
          <span class="filter-count"
            ><strong id="count">0</strong> courses</span
          >
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
              src="https://www.theshalalondon.com/wp-content/uploads/2021/12/TT-Website-HERO-image-copy-3-e1683793704771-1024x800.jpg"
              alt=""
            />
          </div>
          <div class="fc-tint"></div>
          <div class="fc-fade"></div>
          <div class="fc-watermark">
            <img
              src="RYS200_LOGO_transparent.png"
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
              <a href="#" class="fc-cta">Find Out More →</a>
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
              src="https://www.staging.theshalaschool.com/wp-content/uploads/why-train-in-the-shala-school-of-yoga.webp"
              alt=""
            />
          </div>
          <div class="fc-tint"></div>
          <div class="fc-fade"></div>
          <div class="fc-watermark">
            <img
              src="RYS300_LOGO_transparent.png"
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
              <a href="#" class="fc-cta">Find Out More →</a>
            </div>
          </div>
        </article>
      </section>

      <!-- 2026 COURSES -->
      <header class="section-label" id="sec-2026">
        <h2>Upcoming <em>Courses</em></h2>
      </header>
      <section class="grid" id="grid-2026">
        <!-- 1 — Elemental Yoga Nidra -->
        <article class="card card-typo c-plinen" data-tags="studio inner">
          <div class="t-tags"><span class="pill-studio">In Studio</span></div>
          <div class="t-title">Elemental Yoga Nidra</div>
          <div class="t-teacher">Emma Landolt</div>
          <div class="t-desc">
            A deep immersion into Yoga Nidra through the wisdom of the four
            elements: earth, water, fire, and air. Can also be taken as Part 2
            of the Elemental Mandala Flow course.
          </div>
          <div class="t-foot">
            <div class="t-date"><strong>4–5 Jul 2026</strong></div>
            <div class="t-price">£350</div>
          </div>
          <a href="#" class="t-cta">Find Out More →</a>
        </article>

        <!-- 2 — Theming Yoga Classes -->
        <article
          class="card card-img"
          data-tags="live specialist"
          style="--tint: rgba(243, 153, 0, 1)"
        >
          <div class="bg">
            <img
              src="https://www.theshalalondon.com/wp-content/uploads/2025/11/Saha-Gatherings-photo-6-819x1024.jpg"
              alt="Theming Yoga Classes"
              style="object-position: center 60%"
            />
          </div>
          <div class="tint"></div>
          <div class="fade"></div>
          <div class="content">
            <div class="img-top">
              <div class="card-tags">
                <span class="pill-live">Livestream</span>
              </div>
              <div class="img-title">Theming Yoga Classes &amp; Workshops</div>
              <div class="img-teacher">Jennie Wadsten Sharma</div>
              <div class="img-desc">
                Learn how to authentically weave themes into your classes —
                inspiring students and creatively introducing yogic concepts in
                an accessible and meaningful way.
              </div>
            </div>
            <div class="img-bottom">
              <div class="img-foot">
                <div class="foot-date"><strong>23 Aug 2026</strong></div>
                <div class="foot-price">£75</div>
              </div>
              <a href="#" class="img-cta">Find Out More →</a>
            </div>
          </div>
        </article>

        <!-- 3 — Teaching for Neurodivergence -->
        <article class="card card-typo c-aubergine" data-tags="live specialist">
          <div class="t-tags"><span class="pill-live">Livestream</span></div>
          <div class="t-title">Teaching Yoga for Neurodivergence</div>
          <div class="t-teacher">Charli Van Ness</div>
          <div class="t-desc">
            Equipping you with the knowledge, tools and confidence to create
            inclusive, sensory-aware yoga for neurodivergent students — relevant
            for both children and adult students.
          </div>
          <div class="t-foot">
            <div class="t-date"><strong>29–30 Aug 2026</strong></div>
            <div class="t-price">£325</div>
          </div>
          <a href="#" class="t-cta">Find Out More →</a>
        </article>

        <!-- 4 — Saha Gatherings -->
        <article
          class="card card-img"
          data-tags="studio free"
          style="--tint: rgba(97, 64, 81, 1)"
        >
          <div class="bg">
            <img
              src="https://www.theshalalondon.com/wp-content/uploads/2025/11/Saha-Gatherings-photo-6-819x1024.jpg"
              alt="Saha Gatherings"
              style="object-position: center 40%"
            />
          </div>
          <div class="tint"></div>
          <div class="fade"></div>
          <div class="content">
            <div class="img-top">
              <div class="card-tags">
                <span class="pill-studio">In Studio</span>
              </div>
              <div class="img-title">Saha Gatherings</div>
              <div class="img-teacher">Teacher Community</div>
              <div class="img-desc">
                A gathering for graduates, teachers and the wider Shala
                community — practice, dialogue and sangha. Hosted by rotating
                Shala faculty.
              </div>
            </div>
            <div class="img-bottom">
              <div class="img-foot">
                <div class="foot-date">
                  <strong>Next: 31 Aug 2026</strong>Every 4–6 weeks
                </div>
                <div class="foot-price">£20</div>
              </div>
              <a href="#" class="img-cta">Find Out More →</a>
            </div>
          </div>
        </article>

        <!-- 5 — Philosophy Club -->
        <article class="card card-typo c-greige" data-tags="live inner free">
          <div class="t-tags"><span class="pill-live">Livestream</span></div>
          <div class="t-title">Yoga Philosophy Club — Core Module 3</div>
          <div class="t-teacher">Daniel Simpson</div>
          <div class="t-desc">
            An online gathering exploring yogic wisdom in dialogue — alternating
            Tues, Wed and Thurs evenings, 7–9pm. Join for one session or the
            whole series.
          </div>
          <div class="t-foot">
            <div class="t-date">
              <strong>Next: 15 Sep 2026</strong>Every 4–6 weeks · 7–9pm
            </div>
            <div class="t-price">£30</div>
          </div>
          <a href="#" class="t-cta">Find Out More →</a>
        </article>

        <!-- 6 — Inversions, Arm Balances & Backbends -->
        <article
          class="card card-img"
          data-tags="studio asana specialist"
          style="--tint: rgba(212, 0, 98, 1)"
        >
          <div class="bg">
            <img
              src="https://www.theshalalondon.com/wp-content/uploads/2025/09/Yoga-for-Neurodiversity-BANNER.jpg"
              alt="Inversions Arm Balances"
              style="object-position: center 40%"
            />
          </div>
          <div class="tint"></div>
          <div class="fade"></div>
          <div class="content">
            <div class="img-top">
              <div class="card-tags">
                <span class="pill-studio">In Studio</span>
              </div>
              <div class="img-title">
                Inversions, Arm Balances &amp; Backbends
              </div>
              <div class="img-teacher">Gingi Lee</div>
              <div class="img-desc">
                Teach inversions, arm balances and backbending variations using
                the wall, props, advanced modifications, counterposes and
                hands-on adjustments. Suitable for all ages and abilities.
              </div>
            </div>
            <div class="img-bottom">
              <div class="img-foot">
                <div class="foot-date"><strong>19–20 Sep 2026</strong></div>
                <div class="foot-price">£350</div>
              </div>
              <a href="#" class="img-cta">Find Out More →</a>
            </div>
          </div>
        </article>

        <!-- 7 — Beyond the Postures -->
        <article
          class="card card-typo c-blush"
          data-tags="studio live specialist asana"
        >
          <div class="t-tags">
            <span class="pill-hybrid"
              ><span class="ph-l">In Studio</span
              ><span class="ph-r">Livestream</span></span
            >
          </div>
          <div class="t-title">Beyond the Postures — Core Module 1</div>
          <div class="t-teacher">Gingi Lee &amp; Melanie Cooper</div>
          <div class="t-desc">
            A transformational core module exploring what it truly means to hold
            space as a teacher — moving beyond physical practice into the heart
            of yoga itself.
          </div>
          <div class="t-foot">
            <div class="t-date"><strong>25 Sep – 18 Oct 2026</strong></div>
            <div class="t-price">£595</div>
          </div>
          <a href="#" class="t-cta">Find Out More →</a>
        </article>

        <!-- 8 — Sacred Breath: Pranayama -->
        <article
          class="card card-img"
          data-tags="live inner"
          style="--tint: rgba(243, 153, 0, 1)"
        >
          <div class="bg">
            <img
              src="https://www.theshalalondon.com/wp-content/uploads/2024/01/trauma-informed-yoga-1024x683.jpeg"
              alt="Sacred Breath Pranayama"
              style="object-position: center 30%"
            />
          </div>
          <div class="tint"></div>
          <div class="fade"></div>
          <div class="content">
            <div class="img-top">
              <div class="card-tags">
                <span class="pill-live">Livestream</span>
              </div>
              <div class="img-title">Sacred Breath: Pranayama</div>
              <div class="img-teacher">Melanie Cooper</div>
              <div class="img-desc">
                Theoretical understanding and practical application of ancient
                breath-control techniques — covering historical roots, benefits,
                precautions, and how to integrate pranayama into your teaching.
              </div>
            </div>
            <div class="img-bottom">
              <div class="img-foot">
                <div class="foot-date">
                  <strong>31 Oct – 10 Dec 2026</strong>
                </div>
                <div class="foot-price">£450</div>
              </div>
              <a href="#" class="img-cta">Find Out More →</a>
            </div>
          </div>
        </article>

        <!-- 9 — Yoga Nidra Teacher Training In Studio -->
        <article class="card card-typo c-charcoal" data-tags="studio inner">
          <div class="t-tags"><span class="pill-studio">In Studio</span></div>
          <div class="t-title">Yoga Nidra Teacher Training</div>
          <div class="t-teacher">
            Melanie Cooper &amp; Jennie Wadsten Sharma
          </div>
          <div class="t-desc">
            Three days of nurturing, deep rest and inspiration in studio — for
            those who prefer the depth and presence of in-person learning.
          </div>
          <div class="t-foot">
            <div class="t-date"><strong>20–22 Nov 2026</strong></div>
            <div class="t-price">£495</div>
          </div>
          <a href="#" class="t-cta">Find Out More →</a>
        </article>

        <!-- 10 — Menstrual Health Teacher Training -->
        <article
          class="card card-img"
          data-tags="studio specialist"
          style="--tint: rgba(212, 0, 98, 1)"
        >
          <div class="bg">
            <img
              src="https://www.staging.theshalaschool.com/wp-content/uploads/slide-pregnancy-yoga-1024x683-1.webp"
              alt="Menstrual Health"
            />
          </div>
          <div class="tint"></div>
          <div class="fade"></div>
          <div class="content">
            <div class="img-top">
              <div class="card-tags">
                <span class="pill-studio">In Studio</span>
              </div>
              <div class="img-title">Menstrual Health Teacher Training</div>
              <div class="img-teacher">Charli Van Ness</div>
              <div class="img-desc">
                A transformative training combining ancient wisdom, modern
                science and groundbreaking methodologies for a deeply empowering
                experience working holistically with women's health.
              </div>
            </div>
            <div class="img-bottom">
              <div class="img-foot">
                <div class="foot-date"><strong>27–29 Nov 2026</strong></div>
                <div class="foot-price">TBC</div>
              </div>
              <a href="#" class="img-cta">Find Out More →</a>
            </div>
          </div>
        </article>

        <!-- 11 — Sacred Sound & Ceremony -->
        <article class="card card-typo c-aubergine" data-tags="studio inner">
          <div class="t-tags"><span class="pill-studio">In Studio</span></div>
          <div class="t-title">Sacred Sound &amp; Ceremony</div>
          <div class="t-teacher">Anne Malone</div>
          <div class="t-desc">
            Discover how to create tranquil, transformative experiences using
            Himalayan singing bowls, voice, mantra, and sacred ceremony — for
            classes, events and retreats.
          </div>
          <div class="t-foot">
            <div class="t-date"><strong>5–7 Dec 2026</strong></div>
            <div class="t-price">TBC</div>
          </div>
          <a href="#" class="t-cta">Find Out More →</a>
        </article>
      </section>

      <!-- 2027 COURSES -->
      <header class="section-label" id="sec-2027">
        <h2>Coming <em>Soon</em></h2>
      </header>
      <section class="grid" id="grid-2027">
        <!-- Embodied Asana -->
        <article
          class="card card-img"
          data-tags="studio live asana specialist"
          style="--tint: rgba(75, 58, 67, 1)"
        >
          <div class="bg">
            <img
              src="https://www.theshalalondon.com/wp-content/uploads/2025/09/Yoga-for-Neurodiversity-BANNER.jpg"
              alt="Embodied Asana"
              style="object-position: center 30%"
            />
          </div>
          <div class="tint"></div>
          <div class="fade"></div>
          <div class="content">
            <div class="img-top">
              <div class="card-tags">
                <span class="pill-hybrid"
                  ><span class="ph-l">In Studio</span
                  ><span class="ph-r">Livestream</span></span
                >
              </div>
              <div class="img-title">Embodied Asana — Core Module 2</div>
              <div class="img-teacher">Gingi Lee &amp; Melanie Cooper</div>
              <div class="img-desc">
                A core module exploring anatomy, alignment and the intelligence
                of the body — the foundation for confident, safe and truly
                inspired physical teaching.
              </div>
            </div>
            <div class="img-bottom">
              <div class="img-foot">
                <div class="foot-date"><strong>22–25 Jan 2027</strong></div>
                <div class="foot-price">£595</div>
              </div>
              <a href="#" class="img-cta">Find Out More →</a>
            </div>
          </div>
        </article>

        <!-- Somatic Yoga -->
        <article
          class="card card-typo c-blush"
          data-tags="studio asana specialist"
        >
          <div class="t-tags"><span class="pill-studio">In Studio</span></div>
          <div class="t-title">Somatic Yoga | Intuitive You</div>
          <div class="t-teacher">Charli Van Ness</div>
          <div class="t-desc">
            Design intelligent, flowing classes rooted in somatic awareness —
            reigniting your creativity and reconnecting with the felt sense of
            truly embodied teaching.
          </div>
          <div class="t-foot">
            <div class="t-date"><strong>30–31 Jan 2027</strong></div>
            <div class="t-price">£325</div>
          </div>
          <a href="#" class="t-cta">Find Out More →</a>
        </article>

        <!-- Yin Yoga Melanie -->
        <article
          class="card card-img"
          data-tags="studio live asana specialist"
          style="--tint: rgba(97, 64, 81, 1)"
        >
          <div class="bg">
            <img
              src="https://www.staging.theshalaschool.com/wp-content/uploads/slide-somatic-yoga-1024x683-1.webp"
              alt="Yin Yoga Teacher Training"
            />
          </div>
          <div class="tint"></div>
          <div class="fade"></div>
          <div class="content">
            <div class="img-top">
              <div class="card-tags">
                <span class="pill-hybrid"
                  ><span class="ph-l">In Studio</span
                  ><span class="ph-r">Livestream</span></span
                >
              </div>
              <div class="img-title">Yin Yoga Teacher Training</div>
              <div class="img-teacher">Melanie Cooper</div>
              <div class="img-desc">
                Two days in person or livestreamed — learn to teach yin in a way
                that is inclusive, safe and compassionate, plus a library of
                invaluable recorded content.
              </div>
            </div>
            <div class="img-bottom">
              <div class="img-foot">
                <div class="foot-date"><strong>27–28 Feb 2027</strong></div>
                <div class="foot-price">£395</div>
              </div>
              <a href="#" class="img-cta">Find Out More →</a>
            </div>
          </div>
        </article>

        <!-- Pregnancy -->
        <article class="card card-typo c-greige" data-tags="studio specialist">
          <div class="t-tags"><span class="pill-studio">In Studio</span></div>
          <div class="t-title">Pregnancy Yoga Teacher Training</div>
          <div class="t-teacher">Alexa Dean</div>
          <div class="t-desc">
            A comprehensive training interweaving theory with a holistic,
            technical, and practical approach to teaching yoga to pregnant women
            — safely and with confidence.
          </div>
          <div class="t-foot">
            <div class="t-date"><strong>4–8 Mar 2027</strong></div>
            <div class="t-price">£650</div>
          </div>
          <a href="#" class="t-cta">Find Out More →</a>
        </article>

        <!-- Creative Sequencing -->
        <article
          class="card card-img"
          data-tags="studio live asana specialist"
          style="--tint: rgba(243, 153, 0, 1)"
        >
          <div class="bg">
            <img
              src="https://www.staging.theshalaschool.com/wp-content/uploads/slide-pregnancy-yoga-1024x683-1.webp"
              alt="Creative Yoga Sequencing"
            />
          </div>
          <div class="tint"></div>
          <div class="fade"></div>
          <div class="content">
            <div class="img-top">
              <div class="card-tags">
                <span class="pill-hybrid"
                  ><span class="ph-l">In Studio</span
                  ><span class="ph-r">Livestream</span></span
                >
              </div>
              <div class="img-title">Creative Yoga Sequencing</div>
              <div class="img-teacher">Melanie Cooper</div>
              <div class="img-desc">
                A 3-day training giving you the tools and inspiration to
                confidently and intelligently devise your own yoga sequences —
                with strong emphasis on creativity and music integration.
              </div>
            </div>
            <div class="img-bottom">
              <div class="img-foot">
                <div class="foot-date"><strong>Mar 2027</strong></div>
                <div class="foot-price">£395</div>
              </div>
              <a href="#" class="img-cta">Find Out More →</a>
            </div>
          </div>
        </article>

        <!-- Holistic Kids Yoga -->
        <article
          class="card card-typo c-aubergine"
          data-tags="studio live specialist"
        >
          <div class="t-tags">
            <span class="pill-hybrid"
              ><span class="ph-l">In Studio</span
              ><span class="ph-r">Livestream</span></span
            >
          </div>
          <div class="t-title">Holistic Kids Yoga</div>
          <div class="t-teacher">Charli Van Ness</div>
          <div class="t-desc">
            Brings support, inspiration and empowerment to the child's
            development — delivered through movement, mindfulness, creativity,
            nutrition, song, poetry and storytelling.
          </div>
          <div class="t-foot">
            <div class="t-date"><strong>Apr 2027</strong></div>
            <div class="t-price">£595</div>
          </div>
          <a href="#" class="t-cta">Find Out More →</a>
        </article>

        <!-- Chair Yoga -->
        <article
          class="card card-img"
          data-tags="studio specialist"
          style="--tint: rgba(59, 19, 46, 1)"
        >
          <div class="bg">
            <img
              src="https://www.theshalalondon.com/wp-content/uploads/2024/01/trauma-informed-yoga-1024x683.jpeg"
              alt="Chair Yoga"
              style="object-position: center 40%"
            />
          </div>
          <div class="tint"></div>
          <div class="fade"></div>
          <div class="content">
            <div class="img-top">
              <div class="card-tags">
                <span class="pill-studio">In Studio</span>
              </div>
              <div class="img-title">Chair Yoga</div>
              <div class="img-teacher">Dina Cohen</div>
              <div class="img-desc">
                A versatile, accessible practice for everyone — ideal for
                seniors and the less able-bodied, as well as those wanting
                different ways to enjoy yoga without getting up from the floor.
              </div>
            </div>
            <div class="img-bottom">
              <div class="img-foot">
                <div class="foot-date"><strong>Apr 2027</strong></div>
                <div class="foot-price">£195</div>
              </div>
              <a href="#" class="img-cta">Find Out More →</a>
            </div>
          </div>
        </article>

        <!-- Trauma Informed -->
        <article class="card card-typo c-blush" data-tags="live specialist">
          <div class="t-tags"><span class="pill-live">Livestream</span></div>
          <div class="t-title">Trauma-Informed Yoga</div>
          <div class="t-teacher">Ellie Grace</div>
          <div class="t-desc">
            A 6-week training — the evidence basis for using yoga with
            trauma-impacted students, how to teach with sensitivity and how to
            support students to feel genuinely safe and empowered.
          </div>
          <div class="t-foot">
            <div class="t-date"><strong>Apr – May 2027</strong></div>
            <div class="t-price">£450</div>
          </div>
          <a href="#" class="t-cta">Find Out More →</a>
        </article>

        <!-- Yoga Nidra Apr -->
        <article
          class="card card-img"
          data-tags="live inner"
          style="--tint: rgba(243, 153, 0, 1)"
        >
          <div class="bg">
            <img
              src="https://www.theshalalondon.com/wp-content/uploads/2023/12/kids-yoga-tt-1024x1024.jpg"
              alt="Yoga Nidra"
              style="object-position: center 15%"
            />
          </div>
          <div class="tint"></div>
          <div class="fade"></div>
          <div class="content">
            <div class="img-top">
              <div class="card-tags">
                <span class="pill-live">Livestream</span>
              </div>
              <div class="img-title">Yoga Nidra Teacher Training</div>
              <div class="img-teacher">
                Melanie Cooper &amp; Jennie Wadsten Sharma
              </div>
              <div class="img-desc">
                Three virtual days of nurturing, deep rest and inspiration —
                giving you what you need to deepen your practice and expand your
                teaching horizons into this profound practice.
              </div>
            </div>
            <div class="img-bottom">
              <div class="img-foot">
                <div class="foot-date"><strong>Apr 2027</strong></div>
                <div class="foot-price">£395</div>
              </div>
              <a href="#" class="img-cta">Find Out More →</a>
            </div>
          </div>
        </article>

        <!-- Peace of Mind -->
        <article class="card card-typo c-greige" data-tags="studio live inner">
          <div class="t-tags">
            <span class="pill-hybrid"
              ><span class="ph-l">In Studio</span
              ><span class="ph-r">Livestream</span></span
            >
          </div>
          <div class="t-title">
            Peace of Mind
            <em style="font-style: italic; opacity: 0.75; font-size: 17px"
              >— Mindfulness &amp; Meditation</em
            >
          </div>
          <div class="t-teacher">Charli Van Ness</div>
          <div class="t-desc">
            A 4-week hybrid course — an in-depth journey of empowerment to
            optimise mental health through breathwork, mindfulness and
            meditation, for yourself and those you teach.
          </div>
          <div class="t-foot">
            <div class="t-date"><strong>May 2027</strong></div>
            <div class="t-price">£495</div>
          </div>
          <a href="#" class="t-cta">Find Out More →</a>
        </article>

        <!-- Yoga Adjusts & Assists -->
        <article
          class="card card-img"
          data-tags="studio asana specialist"
          style="--tint: rgba(97, 64, 81, 1)"
        >
          <div class="bg">
            <img
              src="https://www.theshalalondon.com/wp-content/uploads/2025/11/Saha-Gatherings-photo-6-819x1024.jpg"
              alt="Yoga Adjusts"
              style="object-position: center 20%"
            />
          </div>
          <div class="tint"></div>
          <div class="fade"></div>
          <div class="content">
            <div class="img-top">
              <div class="card-tags">
                <span class="pill-studio">In Studio</span>
              </div>
              <div class="img-title">Yoga Adjusts &amp; Assists</div>
              <div class="img-teacher">Gingi Lee</div>
              <div class="img-desc">
                A practical 3-day YA accredited training focused on hands-on
                assists with a deep understanding of biomechanics and the subtle
                energetics of the body.
              </div>
            </div>
            <div class="img-bottom">
              <div class="img-foot">
                <div class="foot-date"><strong>May 2027</strong></div>
                <div class="foot-price">£450</div>
              </div>
              <a href="#" class="img-cta">Find Out More →</a>
            </div>
          </div>
        </article>

        <!-- Yin Yoga Norman -->
        <article
          class="card card-typo c-pink"
          data-tags="studio asana specialist"
        >
          <div class="t-tags"><span class="pill-studio">In Studio</span></div>
          <div class="t-title">Yin Yoga Teacher Training</div>
          <div class="t-teacher">Norman Blair</div>
          <div class="t-desc">
            Delve deep into the meditative practice of yin with one of the UK's
            most experienced yin teachers — designed equally for professional
            and personal development.
          </div>
          <div class="t-foot">
            <div class="t-date"><strong>May 2027</strong></div>
            <div class="t-price">£675</div>
          </div>
          <a href="#" class="t-cta">Find Out More →</a>
        </article>

        <!-- Elemental Mandala Vinyasa -->
        <article
          class="card card-img"
          data-tags="studio asana specialist"
          style="--tint: rgba(75, 58, 67, 1)"
        >
          <div class="bg">
            <img
              src="https://www.theshalalondon.com/wp-content/uploads/2024/01/trauma-informed-yoga-1024x683.jpeg"
              alt="Elemental Mandala Vinyasa"
              style="object-position: center 35%"
            />
          </div>
          <div class="tint"></div>
          <div class="fade"></div>
          <div class="content">
            <div class="img-top">
              <div class="card-tags">
                <span class="pill-studio">In Studio</span>
              </div>
              <div class="img-title">Elemental Mandala Vinyasa</div>
              <div class="img-teacher">Emma Landolt</div>
              <div class="img-desc">
                Create and teach classes that inspire embodied self-expression
                and awaken inner wisdom through movement, breath, and the
                elements.
              </div>
            </div>
            <div class="img-bottom">
              <div class="img-foot">
                <div class="foot-date"><strong>Jun 2027</strong></div>
                <div class="foot-price">£450</div>
              </div>
              <a href="#" class="img-cta">Find Out More →</a>
            </div>
          </div>
        </article>

        <!-- Postnatal -->
        <article class="card card-typo c-plinen" data-tags="studio specialist">
          <div class="t-tags"><span class="pill-studio">In Studio</span></div>
          <div class="t-title">Postnatal Baby &amp; Me Yoga</div>
          <div class="t-teacher">Alexa Dean</div>
          <div class="t-desc">
            A two-day intensive combining theory, practical learning and
            teaching practice for postnatal yoga — equipping you to confidently
            support those who have given birth and their babies.
          </div>
          <div class="t-foot">
            <div class="t-date"><strong>TBC 2027</strong></div>
            <div class="t-price">£350</div>
          </div>
          <a href="#" class="t-cta">Find Out More →</a>
        </article>

        <!-- GET ADVICE — filler card -->
        <aside class="card card-cta c-linen filler" style="cursor: default">
          <div class="cta-title">Get Advice</div>
          <div class="cta-body">
            Not sure where to start? Speak with our team — we'll help you find
            the right course or pathway for where you are in your journey.
          </div>
          <a href="mailto:teachertraining@theshala.co.uk" class="cta-btn"
            >Book a Call →</a
          >
        </aside>
      </section>

      <!-- ON DEMAND -->
      <section class="od-section" id="od-section">
        <div class="od-inner">
          <header class="section-label" style="margin: 0 0 24px 0; padding: 0">
            <h2>On Demand <em>Courses</em></h2>
          </header>

          <div class="od-grid">
            <!-- Anatomy -->
            <article class="od-card" style="--tint: rgba(75, 58, 67, 1)">
              <div class="od-bg">
                <img
                  src="https://www.theshalalondon.com/wp-content/uploads/2021/12/TT-Website-HERO-image-copy-3-e1683793704771-1024x800.jpg"
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

            <!-- Philosophy -->
            <article class="od-card" style="--tint: rgba(97, 64, 81, 1)">
              <div class="od-bg">
                <img
                  src="https://www.theshalalondon.com/wp-content/uploads/2025/11/Saha-Gatherings-photo-6-819x1024.jpg"
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

            <!-- Business -->
            <article class="od-card" style="--tint: rgba(243, 153, 0, 1)">
              <div class="od-bg">
                <img
                  src="https://www.staging.theshalaschool.com/wp-content/uploads/slide-somatic-yoga-1024x683-1.webp"
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
            href="https://www.theshalalondon.com/newsletters-school-of-yoga/"
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