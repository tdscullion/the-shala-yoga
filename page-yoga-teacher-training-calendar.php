<?php
/*
Template Name: Yoga Teacher Training Calendar
*/

get_header();
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
            Course <span class="year">Calendar</span>
          </h1>

           <p class="hero-utility-sub">
            25+ trainings for teachers and practitioners — in studio in South
            London, online by livestream, or both.
          </p>
          <p class="bursary-note">
            Payment plans available on all courses over £300.
            <a href="#">Bursary &amp; Payment Options →</a>
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
        <div class="flagship-grid">
          <!-- 200hr -->
          <div class="flagship-card flagship-200">
            <div class="flagship-card-top">
              <img
                src="assets/logos/rys200-logo.png"
                alt="Yoga Alliance RYS 200"
              />
            </div>
            <div class="flagship-card-body">
              <div class="flagship-card-eyebrow">Flagship · Level 1</div>
              <h3 class="flagship-card-title">
                200-Hour <em>Teacher Training</em>
              </h3>
              <p class="flagship-card-meta">
                Our foundational programme — six months in studio with Gingi Lee
                &amp; Charli Van Ness.
              </p>
              <div class="flagship-card-dates">Sep 2026 – Mar 2027</div>
              <div class="flagship-card-price">£3,250</div>
              <div class="flagship-card-price-sub">Payment plans available</div>
              <a href="#" class="flagship-card-cta">Apply Now</a>
            </div>
          </div>

          <!-- 300hr -->
          <div class="flagship-card flagship-300">
            <div class="flagship-card-top">
              <img
                src="assets/logos/rys300-logo.png"
                alt="Yoga Alliance RYS 300"
              />
            </div>
            <div class="flagship-card-body">
              <div class="flagship-card-eyebrow">Flagship · Level 2</div>
              <h3 class="flagship-card-title">
                300-Hour <em>Teacher Training</em>
              </h3>
              <p class="flagship-card-meta">
                Advanced training to refine your teaching, philosophy and
                practice.
              </p>
              <div class="flagship-card-dates">Sep 2026 – Mar 2027</div>
              <div class="flagship-card-price">from £3,900</div>
              <div class="flagship-card-price-sub">Payment plans available</div>
              <a href="#" class="flagship-card-cta">Apply Now</a>
            </div>
          </div>

          <!-- CPDs -->
          <div class="flagship-card flagship-cpd">
            <div class="flagship-card-top">
              <img
                src="assets/logos/yacep-logo.png"
                alt="Yoga Alliance YACEP"
              />
            </div>
            <div class="flagship-card-body">
              <div class="flagship-card-eyebrow">
                Continuing Professional Development
              </div>
              <h3 class="flagship-card-title">CPDs &amp; <em>Modules</em></h3>
              <p class="flagship-card-meta">
                25+ standalone trainings to deepen your practice or specialise.
              </p>
              <div class="flagship-card-dates">Year-round</div>
              <div class="flagship-card-price">from £70</div>
              <div class="flagship-card-price-sub">
                Open to teachers &amp; trainees
              </div>
              <a href="#" class="flagship-card-cta is-orange">View Modules</a>
            </div>
          </div>
        </div>

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
              <tbody>
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
              </tbody>
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