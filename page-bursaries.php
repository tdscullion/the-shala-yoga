<?php
/*
Template Name: Bursaries Page
*/

get_header();
?>

<main id="main-content">
      <!-- ══ PAGE HERO — lightened plum, white heading, aubergine body ══ -->
      <section class="hero-utility bg-light-plum text-on-dark">
        <img
          class="hero-utility-spiral"
          src="<?php echo esc_url(get_template_directory_uri() . '/assets/spirals/spiral-1-cropped.png'); ?>"
          alt=""
          aria-hidden="true"
        />

        <div class="hero-utility-inner">
          <h1 class="hero-utility-title">
            Diversity &amp; Inclusion<br /><em>Bursary</em>
          </h1>

          <p class="hero-utility-sub">
            Yoga should be made accessible to everyone, though often it is not
            reaching the communities that need it the most. Our bursary exists
            to support people from groups historically marginalised in the yoga
            world, who may not otherwise have access to yoga teacher training.
          </p>
        </div>
      </section>

      <!-- ══ STATS BAR — orange (replaces jump nav) ══ -->
      <div class="stats-bar">
        <div class="stats-bar-inner">
          <div class="stat-box">
            <span class="stat-num">50%</span>
            <span class="stat-desc">of training fee covered</span>
          </div>
          <div class="stat-box">
            <span class="stat-num">25+</span>
            <span class="stat-desc">bursaries available a year</span>
          </div>
          <div class="stat-box">
            <span class="stat-num">6–8</span>
            <span class="stat-desc">weeks before course to apply</span>
          </div>
          <div class="stat-box">
            <span class="stat-num">7</span>
            <span class="stat-desc">days to secure your place</span>
          </div>
        </div>
      </div>

      <!-- ══ GRADED RULE — reusable orange→pink hairline (saved as snippet for site-wide use) ══ -->
      <hr class="graded-rule" />

      <!-- ══ OVERVIEW (Mission Band) — quote styled with shared feature-quote system ══ -->
      <section class="mission-band">
        <div class="mission-band-inner">
          <blockquote class="feature-quote">
            Our aim is to support those who will use their learning to create
            positive change in their communities and widen access to yoga for
            others.
          </blockquote>
          <div class="mission-body">
            <p>
              We know that teacher training is a significant investment —
              financially and energetically. This Shala bursary covers 50% of
              the training fee and is open to applicants for our 200-hour, CPD
              &amp; 300 hour modules.
            </p>
            <p>
              If you feel yoga teacher training is out of reach, and you meet
              the criteria below, we warmly encourage you to apply. We want to
              hear your story and hope to support you to take yoga in to new
              communities.
            </p>
          </div>
        </div>
      </section>

      <div class="section-divider"></div>

      <!-- ══ ELIGIBILITY ══ -->
      <section id="eligibility" class="eligibility-section">
        <div class="eligibility-inner">
          <div class="s-div">
            <h2>Is this bursary a good <em>fit</em> for you?</h2>
          </div>
          <div class="elig-grid">
            <!-- YES -->
            <div class="elig-card good">
              <h3>Yes</h3>
              <ul class="elig-list">
                <li>
                  <strong>You are part of an under-represented group</strong>
                  For example: people from ethnic minority backgrounds, LGBTQIA+
                  individuals, people from lower socio-economic backgrounds,
                  individuals who have experienced discrimination or systemic
                  barriers, or people with disabilities that have limited access
                  to yoga spaces.
                </li>
                <li>
                  <strong
                    >You are experiencing genuine financial difficulty</strong
                  >
                  You would not be able to take part in the training without
                  financial support.
                </li>
                <li>
                  <strong
                    >You are committed to using your training to support
                    others</strong
                  >
                  For example, bringing yoga to underserved communities, running
                  accessible classes, or contributing to positive social change.
                </li>
                <li>
                  <strong>You meet the entry requirements</strong>
                  You are ready for the course and meet the general application
                  criteria for the module or CPD you're applying for.
                </li>
              </ul>
            </div>

            <!-- UNLIKELY -->
            <div class="elig-card notfit">
              <h3>Unlikely</h3>
              <ul class="elig-list">
                <li>
                  <strong>You are able to pay without financial strain</strong>
                  You can fund the training in full or via a payment plan
                  without significant hardship.
                </li>
                <li>
                  <strong
                    >You are not part of an under-represented group</strong
                  >
                  You don't identify with a community that has experienced
                  marginalisation or under-representation in yoga.
                </li>
                <li>
                  <strong
                    >You are seeking primarily personal development</strong
                  >
                  You are mainly looking for personal growth rather than
                  community impact.
                </li>
                <li>
                  <strong
                    >You are applying on a non-qualifying characteristic</strong
                  >
                  The basis of your application is not, in itself, a criterion
                  for under-representation.
                </li>
              </ul>
            </div>
          </div>

          <div class="elig-note">
            <p>
              If you're unsure, you're welcome to apply — but we encourage you
              to self-assess <em>honestly and respectfully</em> before doing so.
              We have one bursary per course and want the bursary to reach those
              who genuinely need it most and who are most likely to contribute
              to positive social change.
            </p>
          </div>
        </div>
      </section>

      <div class="section-divider"></div>

      <!-- ══ HOW TO APPLY — match 200hr style ══ -->
      <section id="process" class="apply-section">
        <div class="apply-inner">
          <div class="s-div">
            <h2>How to <em>apply</em></h2>
          </div>
          <div class="apply-grid">
            <div>
              <div class="apply-steps">
                <div class="apply-step">
                  <div class="apply-step-num">1</div>
                  <div>
                    <span class="apply-step-title"
                      >Complete the bursary application form</span
                    >
                    <div class="apply-step-text">
                      A short video is welcome if it feels more natural. Your
                      personal statement should cover your background and lived
                      experience, your financial situation, how you meet the
                      criteria for under-representation, and how you intend to
                      create positive impact.
                    </div>
                  </div>
                </div>
                <div class="apply-step">
                  <div class="apply-step-num">2</div>
                  <div>
                    <span class="apply-step-title">Shortlisting</span>
                    <div class="apply-step-text">
                      Shortlisted applicants may be invited for a brief informal
                      Zoom chat.
                    </div>
                  </div>
                </div>
                <div class="apply-step">
                  <div class="apply-step-num">3</div>
                  <div>
                    <span class="apply-step-title">Selection</span>
                    <div class="apply-step-text">
                      If a final decision cannot be made from the application
                      alone, the recipient may be selected at random from the
                      shortlist. Or occasionally, the bursary discount may be
                      split into 25% for two people.
                    </div>
                  </div>
                </div>
                <div class="apply-step">
                  <div class="apply-step-num">4</div>
                  <div>
                    <span class="apply-step-title">Notification</span>
                    <div class="apply-step-text">
                      Successful applicants are notified 3–6 weeks before the
                      course begins. A place is held for 7 days — your deposit
                      will be required to confirm it.
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

            <div>
              <h3>When to apply</h3>
              <div class="apply-meta-box">
                <h4>Key Dates</h4>
                <div class="pmeta-row">
                  <span class="pmeta-label">Recommended</span>
                  <span class="pmeta-val"
                    >6–8 weeks before the course start date</span
                  >
                </div>
                <div class="pmeta-row">
                  <span class="pmeta-label">Late applications</span>
                  <span class="pmeta-val"
                    >May be considered up to 4 weeks beforehand, depending on
                    demand</span
                  >
                </div>
                <div class="pmeta-row">
                  <span class="pmeta-label">200hr deadline</span>
                  <span class="pmeta-val">Usually 30 June</span>
                </div>
                <div class="pmeta-row">
                  <span class="pmeta-label">Notification</span>
                  <span class="pmeta-val">3–6 weeks before course begins</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <div class="section-divider"></div>

      <!-- ══ FURTHER INFORMATION ══ -->
      <section id="further-info" class="info-section">
        <div class="info-inner">
          <div class="s-div">
            <h2>Further <em>information</em></h2>
          </div>
          <div class="info-grid">
            <div class="info-card">
              <span class="info-card-icon">◈</span>
              <h4>Your Place</h4>
              <p>
                A bursary place is held for 7 days. You will be required to pay
                the deposit to secure your bursary place.
              </p>
            </div>
            <div class="info-card">
              <span class="info-card-icon">◈</span>
              <h4>What's Covered</h4>
              <p>
                The bursary covers 50% of the training fee. You may receive one
                bursary only from the Shala School.
              </p>
            </div>
            <div class="info-card">
              <span class="info-card-icon">◈</span>
              <h4>Reapplying</h4>
              <p>
                If you decline a bursary place, you may not reapply unless there
                are exceptional circumstances.
              </p>
            </div>
            <div class="info-card">
              <span class="info-card-icon">◈</span>
              <h4>Cancellations</h4>
              <p>
                If you cancel after accepting a bursary, standard Terms &amp;
                Conditions apply and your deposit is not refundable.
              </p>
            </div>
            <div class="info-card">
              <span class="info-card-icon">◈</span>
              <h4>After the Course</h4>
              <p>
                We ask recipients to complete a short feedback form and, if
                comfortable, share a few words to inspire future applicants.
                Anonymous contributions are warmly welcomed.
              </p>
            </div>
            <div class="info-card" style="background: var(--aubergine)">
              <span class="info-card-icon" style="color: var(--orange)">◈</span>
              <h4 style="color: rgba(255, 255, 255, 0.5)">View Courses</h4>
              <p style="color: rgba(255, 255, 255, 0.75)">
                Ready to explore which training you'd like to apply for? Browse
                all our upcoming courses and CPDs.
              </p>
              <a
                href="#"
                style="
                  display: inline-block;
                  margin-top: 16px;
                  font-family: &quot;Jost&quot;, sans-serif;
                  font-size: 10px;
                  font-weight: 500;
                  letter-spacing: 0.14em;
                  text-transform: uppercase;
                  color: var(--orange);
                  text-decoration: none;
                  border-bottom: 1px solid rgba(243, 153, 0, 0.35);
                  padding-bottom: 2px;
                "
                >View all courses →</a
              >
            </div>
          </div>
        </div>
      </section>

      <!-- ══ TESTIMONIALS — match Kids course style ══ -->
      <section id="testimonials" class="testimonials-section">
        <div class="testimonials-inner">
          <div class="s-div">
            <h2>Bursary <em>stories</em></h2>
          </div>

          <!-- Featured pull-quote -->
          <div class="testi-featured">
            <p class="testi-featured-quote">
              The bursary provided me with this wonderful opportunity at the
              Shala which is such an awesome place to learn and practice.
              Everybody I met there was super kind and inspiring.
            </p>
            <span class="testi-featured-name"
              >A.F. · Yin Yoga with Melanie Cooper</span
            >
          </div>

          <!-- Carousel -->
          <div class="testi-carousel-head">
            <div style="display: flex; align-items: center; gap: 16px">
              <span
                style="
                  font-family: &quot;Jost&quot;, sans-serif;
                  font-size: 9px;
                  letter-spacing: 0.24em;
                  text-transform: uppercase;
                  color: rgba(255, 255, 255, 0.5);
                  font-weight: 500;
                "
                >More stories</span
              >
              <div class="testi-arrows">
                <button
                  class="testi-arrow"
                  onclick="shiftTesti(-1)"
                  aria-label="Previous"
                >
                  ←
                </button>
                <button
                  class="testi-arrow"
                  onclick="shiftTesti(1)"
                  aria-label="Next"
                >
                  →
                </button>
              </div>
            </div>
          </div>
          <div class="testi-track-wrap">
            <div class="testi-track" id="testiTrack">
              <div class="testi-card">
                <p class="testi-quote">
                  Receiving the bursary for the training has hugely impacted me
                  and my students and the area we are based in. Without this
                  help from the Shala I would really struggle to be able to
                  afford the trainings — teaching in a low income and diverse
                  area means I keep fees very low and even free for those who
                  need it.
                </p>
                <span class="testi-name"
                  >Stephanie R.<span class="testi-course"
                    >Creative Sequencing</span
                  ></span
                >
              </div>

              <div class="testi-card">
                <p class="testi-quote">
                  I am a strong believer of encouraging diversity within the
                  studio space. I believe in the value of having a diverse mix
                  of teachers within the yoga space, and one of the reasons why
                  I wanted to be a yoga teacher is to encourage this. I am now
                  teaching Yin Yoga in a few studios and gyms in London.
                </p>
                <span class="testi-name"
                  >Liz M.<span class="testi-course"
                    >Yin Yoga with Norman Blair</span
                  ></span
                >
              </div>

              <div class="testi-card">
                <p class="testi-quote">
                  I am writing to express my heartfelt gratitude for being
                  selected as a recipient of a bursary for the Yoga Nidra
                  course. Your belief in my potential and commitment to
                  supporting my journey means more than words can convey.
                </p>
                <span class="testi-name"
                  >Sheraleigh S.<span class="testi-course"
                    >Yoga Nidra</span
                  ></span
                >
              </div>

              <div class="testi-card">
                <p class="testi-quote">
                  One of my most favourite spaces to learn and make meaningful
                  connections with other yoga teachers. It genuinely radiates
                  warmth, intention, and high vibrations. Every part of the
                  centre feels like a safe space for embracing growth and deep
                  transformation.
                </p>
                <span class="testi-name"
                  >S.P.<span class="testi-course"
                    >Creative Sequencing 2025</span
                  ></span
                >
              </div>

              <div class="testi-card">
                <p class="testi-quote">
                  The 30hr Yin Yoga teacher training with Melanie Cooper
                  provided the fire I needed to get going with my teaching.
                  Generosity is definitely a word I would associate with my time
                  on this course — the space, fellow students, staff and the
                  generosity of knowledge being shared were all fantastic.
                </p>
                <span class="testi-name"
                  >Lisa Y.<span class="testi-course"
                    >Yin Yoga with Melanie Cooper</span
                  ></span
                >
              </div>

              <div class="testi-card">
                <p class="testi-quote">
                  My 3 days with Anne and the other course attendees was
                  wonderful. Anne teaches from the heart and she is so
                  inspirational. There's so much more to this course than the
                  practicals — learning about holding space, ceremonies, and not
                  being afraid to show our true personalities.
                </p>
                <span class="testi-name"
                  >Pam S.<span class="testi-course"
                    >Sacred Sound &amp; Ceremony with Anne Malone</span
                  ></span
                >
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- ══ CTA BAND ══ -->
      <section class="cta-band">
        <div class="cta-band-inner">
          <h2>Apply for a <em>Bursary</em></h2>
          <p>
            Browse our upcoming courses, then submit your application. We'd love
            to support your journey into teaching.
          </p>
          <div class="cta-btns">
            <a
              href="https://forms.office.com/Pages/ResponsePage.aspx?id=tLLKNRD4mEiDnO8jPFQT1J1Fn_kmT_xOgnbL8OFZO4JUMzQxRTEzSktSTFNKV0IwWFBVR1VURloyNy4u"
              target="_blank"
              class="btn-white"
              >Apply →</a
            >
            <a href="#" class="btn-outline-white">View All Courses</a>
          </div>
        </div>
      </section>
    </main>

<?php
get_footer();