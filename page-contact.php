<?php
/*
Template Name: Contact Page
*/

get_header();

$hero_title = get_field('hero_title');
$hero_subtitle = get_field('hero_subtitle');
?>

   <main id="main-content">
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
      </section>

      <!-- ORANGE RULE -->
      <div class="hdr-orange-rule"></div>

      <!-- ══ SECTION: GET IN TOUCH ══ -->
      <div class="section-band bg-chalk" id="get-in-touch">
        <div class="page-wrap">
          <h2 class="sr-only">Get in Touch</h2>
          <div class="contact-layout reveal">
            <div>
              <h3 class="section-h2">We'd <em>love</em> to hear from you</h3>

              <div class="contact-form-wrap">
                <h3 class="form-heading">Send us a <em>message</em></h3>
                <p class="form-sub">
                  Tell us a little about your enquiry and we'll make sure it
                  reaches the right person.
                </p>

                <div class="form-field">
                  <label class="form-label" for="name">Your Name</label>
                  <input
                    class="form-input"
                    type="text"
                    id="name"
                    placeholder="First and last name"
                  />
                </div>
                <div class="form-field">
                  <label class="form-label" for="email">Email Address</label>
                  <input
                    class="form-input"
                    type="email"
                    id="email"
                    placeholder="your@email.com"
                  />
                </div>
                <div class="form-field">
                  <label class="form-label" for="subject">Enquiry Type</label>
                  <select class="form-select" id="subject">
                    <option value="" disabled selected>Please select…</option>
                    <option>200-Hour Teacher Training</option>
                    <option>300-Hour Teacher Training</option>
                    <option>Modules &amp; CPD Courses</option>
                    <option>Retreats</option>
                    <option>On Demand / Online</option>
                    <option>Bursaries &amp; Financial Support</option>
                    <option>General Enquiry</option>
                    <option>Something Else</option>
                  </select>
                </div>
                <div class="form-field">
                  <label class="form-label" for="message">Your Message</label>
                  <textarea
                    class="form-textarea"
                    id="message"
                    placeholder="Tell us what's on your mind…"
                  ></textarea>
                </div>
                <button class="form-submit" onclick="handleSubmit(this)">
                  Send Message
                </button>
              </div>
            </div>

            <div>
              <h3 class="section-h2" style="margin-bottom: 28px">
                Reach us <em>directly</em>
              </h3>
              <div class="ruled-list">
                <div class="ruled-list-item">
                  <span class="ruled-item-label">Shala School of Yoga</span>
                  <span class="ruled-item-text"
                    ><a href="mailto:teachertraining@theshala.co.uk"
                      >teachertraining@theshala.co.uk</a
                    ><br />General enquiries, 200-Hour, 300-Hour, modules and
                    CPDs</span
                  >
                </div>
                <div class="ruled-list-item">
                  <span class="ruled-item-label">Response Time</span>
                  <span class="ruled-item-text"
                    >We aim to reply within 2 working days. During training
                    periods, responses may be slightly delayed. For urgent
                    queries during a training weekend, please contact your
                    course tutor directly.</span
                  >
                </div>
                <div class="ruled-list-item">
                  <span class="ruled-item-label">Vahni Classes</span>
                  <span class="ruled-item-text"
                    >For yoga class bookings and schedules, please visit
                    <a href="https://vahnilondon.com" target="_blank"
                      >vahnilondon.com</a
                    ></span
                  >
                </div>
              </div>

              <div class="meet-block">
                <h3 class="section-h2 meet-block-h">
                  Chat to us · <em>Meet us</em>
                </h3>
                <ul class="meet-list">
                  <li>
                    <strong>Book a Call</strong> — speak with our teacher
                    training manager.
                  </li>
                  <li>
                    <strong>Open Day</strong> — our free 200-hour Open Day runs
                    twice a year. The ideal way for anyone starting out to
                    experience the school, meet the faculty and ask questions in
                    person.
                  </li>
                  <li>
                    <strong>Saha Gatherings</strong> — every 6–8 weeks, a hub
                    for those who have done a 200-hour to meet members of our
                    faculty and our friendly supportive community. £20.
                  </li>
                </ul>
                <div class="meet-cta-row">
                  <a
                    href="mailto:teachertraining@theshala.co.uk?subject=Book%20a%20Call"
                    class="meet-btn meet-btn-primary"
                    >Book a Call</a
                  >
                  <a
                    href="https://www.theshalalondon.com/yogateachertraining/200-hour-yoga-teacher-training-open-day/"
                    target="_blank"
                    class="meet-btn meet-btn-ghost"
                    >Book Open Day</a
                  >
                  <a
                    href="https://www.theshalalondon.com/yogateachertraining/saha-gatherings-the-yoga-teacher-community/"
                    target="_blank"
                    class="meet-btn meet-btn-ghost"
                    >Book Saha</a
                  >
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="section-divider"></div>

      <!-- ══ SECTION: HOW CAN WE HELP ══ -->
      <div class="section-band bg-linen" id="how-can-we-help">
        <div class="page-wrap">
          <h2 class="section-h2">What are you <em>looking</em> for?</h2>
          <div class="card-grid-3 reveal">
            <div class="info-card">
              <div class="info-card-icon">
                <svg viewBox="0 0 16 16">
                  <path
                    d="M8 1a4 4 0 1 1 0 8A4 4 0 0 1 8 1zM2 14s-.5-4 6-4 6 4 6 4"
                  />
                </svg>
              </div>
              <h4>Teacher Training Enquiries</h4>
              <p>
                Questions about the 200-Hour or 300-Hour programmes — content,
                dates, costs, entry requirements or bursaries.
              </p>
              <a href="mailto:teachertraining@theshala.co.uk"
                >teachertraining@theshala.co.uk →</a
              >
            </div>
            <div class="info-card">
              <div class="info-card-icon">
                <svg viewBox="0 0 16 16">
                  <circle cx="8" cy="8" r="6" />
                  <path d="M8 5v3l2 2" />
                </svg>
              </div>
              <h4>Current Students</h4>
              <p>
                If you're currently on a programme and have a question, your
                course tutor is your first point of contact. You can contact
                them through the WhatsApp group if you have one, or send an
                email to us to forward on.
              </p>
              <a href="mailto:teachertraining@theshala.co.uk"
                >teachertraining@theshala.co.uk →</a
              >
            </div>
            <div class="info-card">
              <div class="info-card-icon">
                <svg viewBox="0 0 16 16">
                  <path d="M2 3h12v8H2z" />
                  <path d="M5 11v2m6-2v2M3 13h10" />
                </svg>
              </div>
              <h4>Classes &amp; Workshops</h4>
              <p>
                All yoga classes and workshops in our West Norwood space are now
                run by Vahni. Same teachers, same community, new name.
              </p>
              <a href="mailto:vahni@theshala.co.uk">vahni@theshala.co.uk →</a>
            </div>
          </div>
        </div>
      </div>

      <div class="section-divider"></div>

      <!-- ══ SECTION: FIND US ══ -->
      <div class="section-band bg-chalk" id="finding">
        <div class="page-wrap">
          <h2 class="sr-only">Find Us</h2>
          <div class="contact-layout reveal">
            <div>
              <h3 class="section-h2">Getting <em>here</em></h3>
              <p class="section-intro" style="margin-bottom: 24px">
                The Shala is in West Norwood, South London — well connected by
                rail, bus and cycle routes.
              </p>

              <div class="ruled-list">
                <div class="ruled-list-item">
                  <span class="ruled-item-label">Entrance Address</span>
                  <span class="ruled-item-text"
                    >1 Chestnut Road<br />West Norwood, London SE27 9EZ</span
                  >
                </div>
                <div class="ruled-list-item">
                  <span class="ruled-item-label">Postal Address</span>
                  <span class="ruled-item-text"
                    >537 Norwood Road<br />West Norwood, London SE27 9DL</span
                  >
                </div>
                <div class="ruled-list-item">
                  <span class="ruled-item-label">Train</span>
                  <span class="ruled-item-text"
                    >West Norwood station — 5 min walk (Southern Rail with
                    direct links from London Bridge &amp; Victoria)<br />Tulse
                    Hill station — 10 min walk (Thameslink, with direct links
                    from Blackfriars, Farringdon, St Pancras International /
                    Kings Cross)</span
                  >
                </div>
                <div class="ruled-list-item">
                  <span class="ruled-item-label">Bus</span>
                  <span class="ruled-item-text"
                    >Routes 2, 68, 196, 322, 468 — stop on Norwood Road</span
                  >
                </div>
                <div class="ruled-list-item">
                  <span class="ruled-item-label">Cycle</span>
                  <span class="ruled-item-text"
                    >Secure cycle storage available at the studio</span
                  >
                </div>
                <div class="ruled-list-item">
                  <span class="ruled-item-label">By car</span>
                  <span class="ruled-item-text"
                    >Free street parking on adjacent residential roads at all
                    times</span
                  >
                </div>
                <div class="ruled-list-item">
                  <span class="ruled-item-label">Accessibility</span>
                  <span class="ruled-item-text"
                    >The Shala is on the third floor and our building has no
                    lift. If you have any access requirements — physical,
                    sensory or otherwise — please reach out before booking so we
                    can discuss.</span
                  >
                </div>
              </div>
            </div>

            <div>
               <div class="map-embed">
                <iframe
                  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2950.4289156824043!2d-0.10308579999999999!3d51.4343022!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4876045109687eb5%3A0x9b8d9a179971bc67!2sThe%20Shala%20School%20of%20Yoga!5e1!3m2!1sen!2suk!4v1782251916530!5m2!1sen!2suk"
                  allowfullscreen=""
                  loading="lazy"
                  referrerpolicy="strict-origin-when-cross-origin">
                </iframe>
              </div>
              <a
                href="https://tfl.gov.uk/plan-a-journey/?to=West+Norwood+Station"
                target="_blank"
                class="transport-link"
                >Plan your journey via TfL →</a
              >
              <p
                style="
                  margin-top: 10px;
                  font-size: 12px;
                  color: var(--text-light);
                  letter-spacing: 0.04em;
                "
              >
                We recommend arriving 10–15 minutes early for your first
                session.
              </p>
            </div>
          </div>
        </div>
      </div>

      <div class="section-divider"></div>

      <!-- ══ SECTION: FOLLOW US ══ -->
      <div class="section-band bg-linen" id="social">
        <div class="page-wrap reveal">
          <h2 class="section-h2">Follow us <em>online</em></h2>
          <p class="section-intro">
            Updates, inspiration and a window into life at the Shala — follow
            along on social and subscribe to our newsletter for the latest news.
          </p>
          <div class="social-strip">
            <a
              class="social-card"
              href="https://www.instagram.com/theshalalondon"
              target="_blank"
              style="background: var(--orange)"
            >
              <div class="social-card-icon">
                <svg viewBox="0 0 24 24">
                  <rect x="2" y="2" width="20" height="20" rx="5" />
                  <circle cx="12" cy="12" r="5" />
                  <circle
                    cx="17.5"
                    cy="6.5"
                    r="1"
                    fill="rgba(255,255,255,.7)"
                    stroke="none"
                  />
                </svg>
              </div>
              <span class="social-card-name">Instagram</span>
              <span class="social-card-handle">@theshalalondon</span>
            </a>
            <a
              class="social-card"
              href="https://www.facebook.com/TheShalaYogaLondon/"
              target="_blank"
              style="background: var(--pink)"
            >
              <div class="social-card-icon">
                <svg viewBox="0 0 24 24">
                  <path
                    d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"
                    fill="rgba(255,255,255,.7)"
                    stroke="none"
                  />
                </svg>
              </div>
              <span class="social-card-name">Facebook</span>
              <span class="social-card-handle">The Shala London</span>
            </a>
            <a
              class="social-card"
              href="https://www.youtube.com/channel/UCHr5Yo7c4nv8OgX3Fh6_tLQ"
              target="_blank"
              style="background: var(--charcoal-plum)"
            >
              <div class="social-card-icon">
                <svg viewBox="0 0 24 24">
                  <path
                    d="M22.54 6.42a2.78 2.78 0 0 0-1.95-1.96C18.88 4 12 4 12 4s-6.88 0-8.59.46a2.78 2.78 0 0 0-1.95 1.96A29 29 0 0 0 1 12a29 29 0 0 0 .46 5.58 2.78 2.78 0 0 0 1.95 1.95C5.12 20 12 20 12 20s6.88 0 8.59-.47a2.78 2.78 0 0 0 1.95-1.95A29 29 0 0 0 23 12a29 29 0 0 0-.46-5.58z"
                    fill="rgba(255,255,255,.7)"
                    stroke="none"
                  />
                  <polygon
                    points="9.75 15.02 15.5 12 9.75 8.98 9.75 15.02"
                    fill="white"
                  />
                </svg>
              </div>
              <span class="social-card-name">YouTube</span>
              <span class="social-card-handle">The Shala School of Yoga</span>
            </a>
            <a
              class="social-card"
              href="https://www.theshalalondon.com/newsletters-shala/"
              target="_blank"
              style="background: var(--aubergine)"
            >
              <div class="social-card-icon">
                <svg viewBox="0 0 24 24">
                  <path
                    d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"
                  />
                  <polyline points="22,6 12,13 2,6" />
                </svg>
              </div>
              <span class="social-card-name">Newsletter</span>
              <span class="social-card-handle">Subscribe for updates</span>
            </a>
          </div>
        </div>
      </div>

      <!-- CTA BAND -->
      <section class="cta-band">
        <div class="page-wrap reveal">
          <h2 class="cta-h2">Ready to take the <em>next step?</em></h2>
          <p class="cta-sub">
            Join us for a free Open Day, browse our upcoming courses, or simply
            send us a message — we're always glad to hear from you.
          </p>
          <div class="cta-buttons">
            <a
              href="mailto:teachertraining@theshala.co.uk?subject=Book%20a%20Call"
              class="btn-white"
              >Book a Call</a
            >
            <a
              href="https://www.theshalalondon.com/newsletters-shala/"
              target="_blank"
              class="btn-ghost-w"
              >Newsletter Sign Up</a
            >
          </div>
        </div>
      </section>
    </main>

<?php get_footer(); ?>