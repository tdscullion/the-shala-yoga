<?php
/*
Template Name: About Page
*/

get_header();
?>

<main id="main-content">

    <section class="hero-standard bg-pinked-linen text-on-light">
    <div class="hero-standard-inner">
        <img
            class="hero-standard-spiral"
            src="<?php echo esc_url(get_template_directory_uri() . '/assets/spirals/spiral-1-cropped.svg'); ?>"
            alt=""
            aria-hidden="true"
        >

        <div class="hero-standard-content">
            <h1 class="hero-standard-title">Our <em>Story</em></h1>

            <p class="hero-standard-sub">
                Twenty-nine years of teaching, training and tending a community of
                yoga teachers — built on depth, rigour, and the belief that yoga
                belongs to everyone.
            </p>
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
            <span class="stat-num">~2,000</span
            ><span class="stat-desc">Students trained</span>
          </div>
          <div class="stat-box">
            <span class="stat-num">12+</span
            ><span class="stat-desc">Senior specialist faculty</span>
          </div>
          <div class="stat-box">
            <span
              class="stat-num"
              style="font-size: 26px; letter-spacing: 0.01em"
              >RYS&nbsp;200&nbsp;&amp;&nbsp;300</span
            ><span class="stat-desc">Yoga Alliance accredited</span>
          </div>
        </div>
      </div>

      <!-- COMMUNITY CAROUSEL -->
      <div class="carousel-band">
        <div class="carousel-label">
          <h2 class="carousel-h2">Our <em>community</em></h2>
          <div class="carousel-controls">
            <button class="carousel-btn" id="prevBtn">‹</button>
            <button class="carousel-btn" id="nextBtn">›</button>
          </div>
        </div>
        <div class="carousel-viewport">
          <div class="carousel-track" id="carouselTrack">
            <div class="c-card">
              <img src="assets/images/community-01.jpg" alt="Shala student" />
              <div class="c-filter"></div>
            </div>
            <div class="c-card">
              <img src="assets/images/community-02.jpg" alt="Shala community" />
              <div class="c-filter"></div>
            </div>
            <div class="c-card">
              <img
                src="assets/images/community-03.jpg"
                alt="Personal development"
              />
              <div class="c-filter"></div>
            </div>
            <div class="c-card">
              <img src="assets/images/gingi-lee.jpg" alt="Gingi Lee teaching" />
              <div class="c-filter"></div>
            </div>
            <div class="c-card">
              <img src="assets/images/community-04.jpg" alt="Yoga practice" />
              <div class="c-filter"></div>
            </div>
            <div class="c-card">
              <img src="assets/images/alexa-dean.jpg" alt="Alexa Dean" />
              <div class="c-filter"></div>
            </div>
            <div class="c-card">
              <img src="assets/images/anne-malone.jpg" alt="Anne Malone" />
              <div class="c-filter"></div>
            </div>
            <div class="c-card">
              <img
                src="assets/images/adelene-cheong.jpg"
                alt="Adelene Cheong"
              />
              <div class="c-filter"></div>
            </div>
          </div>
        </div>
        <div class="carousel-dots" id="carouselDots"></div>
      </div>

      <!-- INTRO -->
      <section class="intro-band" id="intro">
        <div class="page-wrap">
          <div class="intro-grid">
            <div>
              <h2 class="intro-h2">
                A yoga school built on <em>decades of practice</em>
              </h2>
              <div class="intro-body">
                <p>
                  The Shala School of Yoga evolved from decades of practice,
                  teaching and deep immersion in yoga's transformative
                  potential. Created in 2016 as a sister organisation to The
                  Shala yoga centre founded in 1997, the School emerged as a
                  place where some of the UK's most experienced teachers could
                  share their valuable knowledge to nurture the next generation
                  of teachers.
                </p>
                <p>
                  What evolved was not just a sharing of techniques and theory,
                  but a catalyst for the profound shifts that happen personally
                  when yoga practice becomes a way of living.
                </p>
                <p>
                  We advocate yoga as something far beyond physical fitness — a
                  discipline that speaks to the whole person: body, mind, heart,
                  and spirit. Our approach honours yoga's ancient roots while
                  embracing contemporary understanding, creating trainings that
                  are rigorous without being dogmatic.
                </p>
                <p>
                  Since our founding, around two thousand students have moved
                  through our programs — some becoming certified teachers,
                  others deepening their teaching, many coming along for the
                  deep personal journey these trainings facilitate.
                </p>
              </div>
            </div>
            <div class="founder-panel">
              <img
                class="founder-img"
                src="assets/images/gingi-lee.jpg"
                alt="Gingi Lee, Founder"
              />
              <div class="founder-body">
                <h3 class="founder-name">Founder <em>Gingi</em> Lee</h3>
                <p class="founder-bio">
                  Gingi founded The Shala in 1997 and The Shala School of Yoga
                  in 2016. With nearly three decades of practice and teaching
                  behind him, Gingi has guided generations of teachers and
                  practitioners — anchoring the school's ethos of authenticity,
                  humility and depth. He continues to lead both 200-hour and
                  300-hour trainings, teaching from the heart with compassion,
                  love and humour.
                </p>
                <blockquote class="founder-quote">
                  <p class="founder-quote-text">
                    The greatest blessings over the years of running the Shala
                    have been the students — inspiring extraordinary people, of
                    all ages and from all walks of life, each with their own
                    life struggles and victories. From each I take away
                    something and learn something new.
                  </p>
                </blockquote>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- INTRO QUOTE BAND -->
      <div class="intro-quote-band">
        <div class="intro-quote-band-inner">
          <p class="intro-quote-band-text">
            "The inclusivity and warmth from teachers and students is like
            nowhere else. The training modules are delivered with such
            authenticity, you feel held and supported — it's an extraordinary
            experience. I never want the courses to end!"
          </p>
          <span class="intro-quote-band-attr">— Shala Student</span>
        </div>
      </div>

      <!-- WHAT HAPPENS HERE -->
      <section class="what-band" id="what">
        <div class="page-wrap">
          <div class="what-inner">
            <div>
              <h2 class="what-h2">What <em>actually</em> happens</h2>
            </div>
            <div class="what-body">
              <p>
                Students share with us the same feedback over and over again:
                something fundamentally shifts for them during these trainings.
                Not just in their understanding of yoga, but in how they meet
                themselves and connect differently to others and the world
                around them.
              </p>
              <p>
                There's a quality of openness that emerges when like-minded,
                open-hearted people gather and commit to this kind of learning —
                a willingness to be vulnerable, to question, to grow beyond the
                limits of what once felt comfortable.
              </p>
              <div class="pull-quote">
                <p class="pull-quote-text">
                  "We don't attribute this to any magic we possess. It happens
                  because we've created conditions where genuine, raw, open,
                  real human connection can flourish."
                </p>
              </div>
              <p>
                Our teachers show up as real humans who never stop learning, not
                as gurus who have all the answers. They bring their expertise —
                decades of it — but also their humanity, their ongoing
                questions, their continued evolution. And they learn equally
                from the students they are training.
              </p>
              <p>
                Transformation happens in the exchange — in honest conversation,
                in bodies moving together, in the alchemy of co-regulation, in
                the quiet moments of shared practice. In the laughter and the
                tears and everything else in between.
              </p>
            </div>
          </div>
        </div>
      </section>

      <!-- LINEAGE -->
      <section class="lineage-band">
        <div class="page-wrap">
          <div class="lineage-header">
            <h2 class="lineage-h2">Continuous <em>evolution</em></h2>
          </div>
          <div class="lineage-grid">
            <div class="lineage-card">
              <h3 class="lineage-card-title">Honouring Roots</h3>
              <p class="lineage-card-body">
                We honour the eight-limbed path, the ancient texts, the wisdom
                passed down through generations. The spiritual and philosophical
                dimensions of yoga as a way of life — we strive to keep these
                alive even as practice has become increasingly mainstream.
              </p>
            </div>
            <div class="lineage-card">
              <h3 class="lineage-card-title">Embracing Evolution</h3>
              <p class="lineage-card-body">
                Yoga is a living, breathing, ever-evolving tradition that must
                speak to the lives people are actually living — in contemporary
                bodies, facing present-day challenges, seeking meaning in a
                complex world. Modern research enriches ancient practice.
              </p>
            </div>
            <div class="lineage-card">
              <h3 class="lineage-card-title">Attunement to Self</h3>
              <p class="lineage-card-body">
                Teaching students to tune into their own needs — to challenge
                themselves in ways detached from striving, competitiveness and
                goals. We encourage practice attuned to self-nourishment,
                physically, emotionally and spiritually, honouring ahimsa
                throughout.
              </p>
            </div>
          </div>
        </div>
      </section>

      <!-- STORY / TIMELINE -->
      <section class="story-band" id="story">
        <div class="page-wrap">
          <div class="story-grid">
            <div>
              <h2 class="story-h2">
                Nearly three decades in <em>South London</em>
              </h2>
              <div class="timeline-item">
                <div class="tl-year-wrap">
                  <span class="tl-year">1997</span>
                  <div class="tl-dot"></div>
                </div>
                <div class="tl-body">
                  <strong>The Shala is born</strong>Originally known as Sangam,
                  one of only three yoga centres in London at the time. Starting
                  in a small warehouse in Battersea, classes filled through
                  word-of-mouth alone.
                </div>
              </div>
              <div class="timeline-item">
                <div class="tl-year-wrap">
                  <span class="tl-year">2000s</span>
                  <div class="tl-dot"></div>
                </div>
                <div class="tl-body">
                  <strong>Growing roots across South London</strong>Over the
                  years The Shala moved through various South London spaces,
                  building a devoted community around authentic, heart-centred
                  yoga.
                </div>
              </div>
              <div class="timeline-item">
                <div class="tl-year-wrap">
                  <span class="tl-year">2014</span>
                  <div class="tl-dot"></div>
                </div>
                <div class="tl-body">
                  <strong>West Norwood</strong>The Shala settles into its
                  beautiful Victorian warehouse in West Norwood — a home that
                  reflects the warmth and character of the community it serves.
                </div>
              </div>
              <div class="timeline-item">
                <div class="tl-year-wrap">
                  <span class="tl-year">2016</span>
                  <div class="tl-dot"></div>
                </div>
                <div class="tl-body">
                  <strong>The School is founded</strong>The Shala School of Yoga
                  is born as a sister organisation — providing a platform for
                  some of the UK's most experienced teachers to pass on their
                  knowledge through in-depth courses and trainings.
                </div>
              </div>
              <div class="timeline-item">
                <div class="tl-year-wrap">
                  <span class="tl-year">2026</span>
                  <div class="tl-dot"></div>
                </div>
                <div class="tl-body">
                  <strong
                    >The Shala Yoga Centre passes to new directorship</strong
                  >The Shala yoga centre transitions to new directorship under
                  Daniela Vanasco. Same place. Same team. Same ethos. New name —
                  Vahni.
                </div>
              </div>
              <div class="timeline-item">
                <div class="tl-year-wrap">
                  <span class="tl-year">Now</span>
                  <div class="tl-dot"></div>
                </div>
                <div class="tl-body">
                  <strong>A new era for the Shala School of Yoga</strong>The
                  school steps into a new focused chapter under the continued
                  directorship of Gingi Lee and Ella Milroy — carrying forward
                  the ethos that has shaped it across three decades.
                </div>
              </div>
            </div>
            <div class="story-right-col">
              <div class="story-img-main">
                <img
                  src="assets/images/studio-west-norwood.jpg"
                  alt="The Shala community"
                />
                <div class="story-img-caption">
                  <p class="story-img-caption-text">
                    The Shala's Victorian warehouse studio, West Norwood
                  </p>
                </div>
              </div>
              <div class="story-img-main" style="height: 280px">
                <img
                  src="assets/images/teacher-training-classroom.jpg"
                  alt="Teacher training"
                />
                <div class="story-img-caption">
                  <p class="story-img-caption-text">
                    In the trainee teacher classroom
                  </p>
                </div>
              </div>
              <div class="story-img-main" style="height: 280px">
                <img
                  src="assets/images/studio-practice.jpg"
                  alt="Studio practice"
                />
                <div class="story-img-caption">
                  <p class="story-img-caption-text">
                    Transformation through shared practice
                  </p>
                </div>
              </div>
              <div class="story-img-main" style="height: 280px">
                <img
                  src="assets/images/gingi-lee.jpg"
                  alt="Teaching at The Shala"
                />
                <div class="story-img-caption">
                  <p class="story-img-caption-text">
                    Decades of practice and teaching
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- FACULTY -->
      <section class="faculty-band" id="faculty">
        <div class="page-wrap">
          <div class="faculty-header">
            <h2 class="faculty-h2">
              Senior faculty with <em>exceptional depth</em>
            </h2>
            <p class="faculty-intro">
              Practitioners who've dedicated years — often decades — to both
              personal practice and the art of teaching. What unites them is
              something beyond credentials: heartfelt authenticity. No
              performance required. Ego left at the door. Just exceptionally
              experienced practitioners sharing what they know with generosity.
            </p>
          </div>
          <blockquote class="faculty-quote">
            <p class="faculty-quote-text">
              The awareness, humility, humour, patience and generosity of
              teachers was consistent — teaching us the essence, ethics, magic,
              nuance and grace of yoga in a subtle, authentic way.
            </p>
            <span class="faculty-quote-attr">— LS, 200-Hour Graduate</span>
          </blockquote>
          <div class="faculty-unified-grid">
            <a href="/faculty" class="faculty-card faculty-card-lead">
              <span class="fc-eyebrow">Founder · Lead Teacher</span>
              <p class="fc-name-lg"><em>Gingi</em> Lee</p>
              <p class="fc-desc">
                Founder of The Shala and The Shala School of Yoga. Teaches from
                the heart with compassion, love and humour.
              </p>
            </a>
            <a href="/faculty" class="faculty-card faculty-card-lead">
              <span class="fc-eyebrow">Lead Teacher · 200 &amp; 300hr</span>
              <p class="fc-name-lg"><em>Melanie</em> Cooper</p>
              <p class="fc-desc">
                Lead trainer on both flagship programmes, with decades of
                practice and teaching experience.
              </p>
            </a>
            <a href="/faculty" class="faculty-card faculty-card-lead">
              <span class="fc-eyebrow">Lead Teacher · 200 &amp; 300hr</span>
              <p class="fc-name-lg"><em>Charli</em> Van Ness</p>
              <p class="fc-desc">
                Senior teacher across both the 200 and 300-hour programmes,
                bringing profound depth of knowledge.
              </p>
            </a>
            <a href="/faculty" class="faculty-card"
              ><span class="fc-name"><em>Dr Matthew</em> Clark</span>
              <div class="fc-tags">
                <span class="fc-tag">Philosophy</span
                ><span class="fc-tag">History</span>
              </div></a
            >
            <a href="/faculty" class="faculty-card"
              ><span class="fc-name"><em>Norman</em> Blair</span>
              <div class="fc-tags"><span class="fc-tag">Yin Yoga</span></div></a
            >
            <a href="/faculty" class="faculty-card"
              ><span class="fc-name"><em>Jennie</em> Wadsten Sharma</span>
              <div class="fc-tags">
                <span class="fc-tag">Nidra</span
                ><span class="fc-tag">Theming</span
                ><span class="fc-tag">300-hour</span>
              </div></a
            >
            <a href="/faculty" class="faculty-card"
              ><span class="fc-name"><em>Daniel</em> Simpson</span>
              <div class="fc-tags">
                <span class="fc-tag">Yoga Philosophy</span>
              </div></a
            >
            <a href="/faculty" class="faculty-card"
              ><span class="fc-name"><em>Dina</em> Coen</span>
              <div class="fc-tags">
                <span class="fc-tag">Chair Yoga</span>
              </div></a
            >
            <a href="/faculty" class="faculty-card"
              ><span class="fc-name"><em>Ellie</em> Grace</span>
              <div class="fc-tags">
                <span class="fc-tag">Trauma-Informed Yoga</span>
              </div></a
            >
            <a href="/faculty" class="faculty-card"
              ><span class="fc-name"><em>Anne</em> Malone</span>
              <div class="fc-tags">
                <span class="fc-tag">Sacred Sound</span>
              </div></a
            >
            <a href="/faculty" class="faculty-card"
              ><span class="fc-name"><em>Alexa</em> Dean</span>
              <div class="fc-tags">
                <span class="fc-tag">Pregnancy</span
                ><span class="fc-tag">Post Natal</span
                ><span class="fc-tag">Baby &amp; Me</span>
              </div></a
            >
            <a href="/faculty" class="faculty-card"
              ><span class="fc-name"><em>Emma</em> Landolt</span>
              <div class="fc-tags">
                <span class="fc-tag">Elemental Mandala Flow</span
                ><span class="fc-tag">Nidra</span>
              </div></a
            >
            <a href="/faculty" class="faculty-card"
              ><span class="fc-name"><em>Kookie</em> Punam Gill</span>
              <div class="fc-tags"><span class="fc-tag">EDI</span></div></a
            >
          </div>
        </div>
      </section>

      <!-- STUDENTS -->
      <section class="students-band" id="students">
        <div class="page-wrap">
          <div class="students-header">
            <h2 class="students-h2">
              Students from all walks of <em>life</em>
            </h2>
          </div>
          <div class="students-two-col-new">
            <div class="students-text-col">
              <p class="students-body">
                Our students come from varied backgrounds and with different
                intentions. Some seek personal transformation. Others want to
                become teachers. Many are already teaching and are with us to
                advance their skills. Some work in caregiving professions and
                want to integrate yoga's tools into their existing work.
              </p>
              <p class="students-body">
                What matters isn't your background or current skill level — it's
                your willingness to engage deeply, honestly, and with an open
                heart. Our smaller group sizes (usually 15–22 students) ensure
                personalised attention and meaningful connection.
              </p>
            </div>
            <div class="students-list-col">
              <span class="students-include-heading"
                >Our students include…</span
              >
              <ul class="students-list">
                <li>Yoga Teachers</li>
                <li>Healthcare Professionals</li>
                <li>School Teachers</li>
                <li>Therapists &amp; Counsellors</li>
                <li>Doulas &amp; Midwives</li>
                <li>Life Coaches</li>
                <li>Personal Practitioners</li>
                <li>Anyone called to this path</li>
              </ul>
            </div>
          </div>
        </div>
      </section>

      <!-- PROGRAMMES -->
      <section class="programmes-band">
        <div class="page-wrap">
          <h2 class="prog-h2">
            <span class="prog-h2-aubergine">Yoga Alliance</span>-<em
              >accredited</em
            >
            training
          </h2>
          <p class="prog-intro">
            We offer RYS 200 and RYS 300 accredited programmes alongside a full
            calendar of CPD courses — designed for both personal development and
            professional teaching excellence.
          </p>
          <div class="prog-grid">
            <div class="prog-card">
              <!-- TODO: add RYS200 logo once available -->
              <span class="prog-hours">200h</span>
              <h3 class="prog-card-title">Level 1 Teacher Training</h3>
              <p class="prog-card-desc">
                A comprehensive immersion for those beginning their teaching
                journey or deepening personal practice. The full foundation
                programme.
              </p>
              <a href="/200-hour" class="prog-card-link">Explore 200-Hour →</a>
            </div>
            <div class="prog-card">
              <!-- TODO: add RYS300 logo once available -->
              <span class="prog-hours">300h</span>
              <h3 class="prog-card-title">Level 2 Advanced Training</h3>
              <p class="prog-card-desc">
                For teachers with a 200-hour qualification seeking to refine and
                expand their offerings. Deepen practice, broaden speciality.
              </p>
              <a href="/300-hour" class="prog-card-link">Explore 300-Hour →</a>
            </div>
            <div class="prog-card">
              <!-- TODO: add YACEP logo once available -->
              <span class="prog-hours">CPD</span>
              <h3 class="prog-card-title">CPD &amp; Modules</h3>
              <p class="prog-card-desc">
                Ongoing professional development in specialised areas — from
                one-day workshops to week-long intensives. Craft your own unique
                learning path.
              </p>
              <a href="/cpds" class="prog-card-link"
                >View CPD &amp; Modules →</a
              >
            </div>
          </div>
        </div>
      </section>

      <!-- COMMITMENT -->
      <section class="commit-band">
        <div class="page-wrap">
          <div class="commit-grid">
            <div>
              <h2 class="commit-h2">A school <em>open to all</em></h2>
              <div class="commit-body">
                <p>
                  We are committed to inclusivity and accessibility — values we
                  keep front and centre as we change and evolve. Our
                  trauma-informed teaching methods honour all bodies and
                  backgrounds.
                </p>
                <p>
                  We offer bursaries and scholarship opportunities to ensure
                  courses are available to those called to share yoga,
                  regardless of financial circumstances.
                </p>
                <p>
                  There's no single "right way" to practice or teach yoga —
                  there are many authentic paths, and we honour that plurality.
                  Our beautiful, purpose-built studio provides an ideal setting
                  for this work, but more important is the atmosphere we
                  cultivate — one of safety, support, curiosity, and genuine
                  care.
                </p>
              </div>
            </div>
            <div class="commit-pillars">
              <div class="pillar">
                <div class="pillar-icon">🌿</div>
                <div>
                  <p class="pillar-title">Trauma-Informed Practice</p>
                  <p class="pillar-desc">
                    All teaching approaches are grounded in trauma awareness,
                    honouring every body and lived experience in the room.
                  </p>
                </div>
              </div>
              <div class="pillar">
                <div class="pillar-icon">🌱</div>
                <div>
                  <p class="pillar-title">Bursary &amp; Scholarship Pathways</p>
                  <p class="pillar-desc">
                    Financial support is available to ensure that genuine
                    calling — not financial circumstances — determines access.
                  </p>
                </div>
              </div>
              <div class="pillar">
                <div class="pillar-icon">🤍</div>
                <div>
                  <p class="pillar-title">No Single "Right Way"</p>
                  <p class="pillar-desc">
                    A non-dogmatic approach that embraces the richness of yoga's
                    many traditions and diverse perspectives.
                  </p>
                </div>
              </div>
              <div class="pillar">
                <div class="pillar-icon">🌍</div>
                <div>
                  <p class="pillar-title">The Ripple Effect</p>
                  <p class="pillar-desc">
                    The more diverse our teaching community, the wider their
                    reach into different lives and communities.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- CTA -->
      <section class="cta-band">
        <div class="page-wrap">
          <h2 class="cta-h2">Ready to <em>begin</em>?</h2>
          <p class="cta-sub">
            We've been doing this work for nearly three decades. We've seen
            what's possible when people commit to genuine practice and
            communities form around shared values.
          </p>
          <div class="cta-buttons">
            <a href="/yoga-teacher-training-calendar" class="btn-white"
              >View All Courses</a
            >
            <a href="/contact" class="btn-ghost-w">Book a Call</a>
          </div>
        </div>
      </section>

</main>

<?php get_footer(); ?>