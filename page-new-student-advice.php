<?php
/*
Template Name: New Student Advice
*/

get_header();

$hero_title = get_field('hero_title');
$hero_subtitle = get_field('hero_subtitle');
?>

<main id="main-content">
      <!-- HEADER -->
      <section class="hero-utility bg-light-plum text-on-dark">
        <img
          class="hero-utility-spiral"
          src="<?php echo esc_url(get_template_directory_uri() . '/assets/spirals/spiral-1-cropped.png'); ?>"
          alt=""
          aria-hidden="true"
        />

        <div class="hero-utility-inner">
          <h1 class="hero-utility-title"><?php echo theshala_highlight_text($hero_title); ?></h1>

          <p class="hero-utility-sub">
            <?php echo esc_html($hero_subtitle); ?>
          </p>
        </div>
      </section>

      <!-- JUMP NAV -->
      <div class="page-jumpnav-wrap">
        <nav class="page-jumpnav" aria-label="Jump to section">
          <a href="#before" class="active">Before You Arrive</a>
          <a href="#bring">What to Bring</a>
          <a href="#weekends">Your Weekends</a>
          <a href="#instudio">In Studio</a>
          <a href="#online">Online &amp; Hybrid</a>
          <a href="#support">Support</a>
          <a href="#finding">Finding Us</a>
        </nav>
      </div>

      <!-- ══ SECTION: BEFORE YOU ARRIVE ══ -->
      <div class="section-band bg-chalk" id="before">
        <div class="page-wrap">
          <span class="section-eyebrow">Before You Arrive</span>
          <h2 class="section-h2">What to do <em>first</em></h2>
          <p class="section-intro">
            So you can arrive fully present and ready to begin, please consider
            these recommendations.
          </p>
          <div class="accordion">
            <div class="acc-item">
              <button class="acc-trigger">
                <span class="acc-trigger-title"
                  >Read your pre-course welcome email</span
                >
                <span class="acc-icon"
                  ><svg viewBox="0 0 10 10">
                    <line x1="5" y1="1" x2="5" y2="9" />
                    <line x1="1" y1="5" x2="9" y2="5" /></svg
                ></span>
              </button>
              <div class="acc-body">
                <p>
                  You will receive a welcome email with any pre-course
                  requirements and information. Please read this carefully — it
                  may include:
                </p>
                <ul>
                  <li>
                    Course resources such as a PDF manual and/or access to a
                    video library
                  </li>
                  <li>Essential information like access to the building</li>
                  <li>Any pre-course preparation requirements</li>
                </ul>
              </div>
            </div>
            <div class="acc-item">
              <button class="acc-trigger">
                <span class="acc-trigger-title"
                  >Begin your required reading</span
                >
                <span class="acc-icon"
                  ><svg viewBox="0 0 10 10">
                    <line x1="5" y1="1" x2="5" y2="9" />
                    <line x1="1" y1="5" x2="9" y2="5" /></svg
                ></span>
              </button>
              <div class="acc-body">
                <p>
                  Some courses include one or more required texts. For those on
                  the 200 and 300 hour programmes we also have a full
                  recommended reading list, which you are sent when your place
                  is confirmed. If you are unable to find this please
                  <a href="mailto:teachertraining@theshala.co.uk"
                    >email the team</a
                  >
                  and request it.
                </p>
              </div>
            </div>
            <div class="acc-item">
              <button class="acc-trigger">
                <span class="acc-trigger-title">Attendance &amp; lateness</span>
                <span class="acc-icon"
                  ><svg viewBox="0 0 10 10">
                    <line x1="5" y1="1" x2="5" y2="9" />
                    <line x1="1" y1="5" x2="9" y2="5" /></svg
                ></span>
              </button>
              <div class="acc-body">
                <ul>
                  <li>
                    Full attendance is expected and required for certification —
                    please plan ahead and notify the team early if you
                    anticipate missing any hours.
                  </li>
                  <li>If lateness is unavoidable, please message ahead.</li>
                </ul>
                <p>
                  For the full attendance policy — including certification
                  thresholds and how absences are handled — see our
                  <a href="#">Terms &amp; Conditions</a>.
                </p>
              </div>
            </div>
            <div class="acc-item">
              <button class="acc-trigger">
                <span class="acc-trigger-title">Personal practice</span>
                <span class="acc-icon"
                  ><svg viewBox="0 0 10 10">
                    <line x1="5" y1="1" x2="5" y2="9" />
                    <line x1="1" y1="5" x2="9" y2="5" /></svg
                ></span>
              </button>
              <div class="acc-body">
                <ul>
                  <li>
                    As a trainee, your personal practice is part of the growth,
                    learning and exploration — and you are expected to maintain
                    a regular practice.
                  </li>
                  <li>
                    If you don't currently have a consistent personal practice,
                    now is the time to establish one. Even 20 minutes daily at
                    home, at whatever level feels right for you, will deepen
                    your learning significantly.
                  </li>
                  <li>
                    You're also very welcome to attend
                    <a
                      href="https://www.vahni.com"
                      target="_blank"
                      rel="noopener"
                      >Vahni</a
                    >
                    classes at The Shala — students on the 200 hour and 300 hour
                    programmes receive a 20% discount on classes throughout
                    their studies with us.
                  </li>
                </ul>
              </div>
            </div>
            <div class="acc-item">
              <button class="acc-trigger">
                <span class="acc-trigger-title">Study hours</span>
                <span class="acc-icon"
                  ><svg viewBox="0 0 10 10">
                    <line x1="5" y1="1" x2="5" y2="9" />
                    <line x1="1" y1="5" x2="9" y2="5" /></svg
                ></span>
              </button>
              <div class="acc-body">
                <ul>
                  <li>
                    Teacher training is not only what happens on the weekends —
                    it's also about what happens after and in between, and this
                    may include assigned readings and reflective writing between
                    sessions.
                  </li>
                  <li>
                    On the 200-hour training, plan for approximately 3–5 hours
                    of study per week outside of contact weekends. This includes
                    practice journalling, reading, and preparation for practicum
                    teaching.
                  </li>
                  <li>
                    Keeping a reflective journal is highly recommended whilst
                    studying with us — a place to track your growth and setbacks
                    as both practitioner and teacher.
                  </li>
                </ul>
              </div>
            </div>
            <div class="acc-item">
              <button class="acc-trigger">
                <span class="acc-trigger-title">Assessment &amp; feedback</span>
                <span class="acc-icon"
                  ><svg viewBox="0 0 10 10">
                    <line x1="5" y1="1" x2="5" y2="9" />
                    <line x1="1" y1="5" x2="9" y2="5" /></svg
                ></span>
              </button>
              <div class="acc-body">
                <ul>
                  <li>
                    Assessment on our Module courses is ongoing and informal —
                    your tutor will check in with you throughout, and will raise
                    any concerns should they have any.
                  </li>
                  <li>
                    Assessment criteria for our 200-hour are detailed on the
                    <a href="#">course page</a>.
                  </li>
                </ul>
                <p>
                  For more details on how a course is assessed, see our
                  <a href="#">FAQs</a>.
                </p>
              </div>
            </div>
            <div class="acc-item">
              <button class="acc-trigger">
                <span class="acc-trigger-title"
                  >Join the student community group</span
                >
                <span class="acc-icon"
                  ><svg viewBox="0 0 10 10">
                    <line x1="5" y1="1" x2="5" y2="9" />
                    <line x1="1" y1="5" x2="9" y2="5" /></svg
                ></span>
              </button>
              <div class="acc-body">
                <ul>
                  <li>
                    Depending on the tutor, you may have a private WhatsApp
                    group for your course. You'll be added automatically a day
                    or two before the course begins.
                  </li>
                  <li>
                    You are also invited to join the closed
                    <a
                      href="https://www.facebook.com/groups/theshalacommunity/requests/"
                      target="_blank"
                      rel="noopener"
                      >Shala Community Facebook Group</a
                    >
                    for our students.
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="section-divider"></div>

      <!-- ══ SECTION: WHAT TO BRING — #887479 ══ -->
      <div class="bring-band" id="bring">
        <div class="page-wrap">
          <span class="section-eyebrow">What to Bring</span>
          <h2 class="section-h2">
            Come
            <em style="font-style: italic; color: var(--pink)">prepared</em>
          </h2>
          <p
            style="
              font-size: 15px;
              line-height: 1.85;
              color: rgba(255, 255, 255, 0.78);
              max-width: 640px;
              margin-bottom: 0;
            "
          >
            In-studio training days run from 10am–6pm. These can be full, tiring
            and deeply rewarding. Here's what you'll want to have with you.
          </p>
          <div class="bring-card-grid">
            <div class="bring-card">
              <div class="bring-card-icon">
                <svg viewBox="0 0 16 16">
                  <ellipse cx="8" cy="9" rx="5" ry="3" />
                  <path d="M3 9V5c0-1.66 2.24-3 5-3s5 1.34 5 3v4" />
                </svg>
              </div>
              <h4>Your mat &amp; props</h4>
              <p>
                Bolsters, blocks, straps and blankets are available at the
                school but it's best to bring your own mat — if you need to
                borrow one, you may.
              </p>
            </div>
            <div class="bring-card">
              <div class="bring-card-icon">
                <svg viewBox="0 0 16 16">
                  <circle cx="8" cy="5" r="3" />
                  <path d="M2 14s0-5 6-5 6 5 6 5" />
                </svg>
              </div>
              <h4>Lunch &amp; snacks</h4>
              <p>
                Good cafés are nearby but training days can give you an appetite
                — bring snacks. If you bring your own lunch there is a fridge
                and microwave for your use, and we request you eat food in the
                studio not the lounge.
              </p>
            </div>
            <div class="bring-card">
              <div class="bring-card-icon">
                <svg viewBox="0 0 16 16">
                  <path d="M6 2h4v3l1 1v7H5V6l1-1V2z" />
                  <path d="M6 2a2 2 0 0 1 4 0" />
                </svg>
              </div>
              <h4>Drinks</h4>
              <p>
                Filtered water and tea is available. Please bring a reusable
                bottle.
              </p>
            </div>
          </div>
          <div class="bring-note">
            <p>
              We request that phones remain on silent and preferably out of
              sight during teaching hours. Tutors will often allow students to
              film and we request that one person is nominated to do this and
              share content with the school and with the group.
            </p>
          </div>
        </div>
      </div>

      <div class="section-divider"></div>

      <!-- ══ SECTION: YOUR WEEKENDS ══ -->
      <div class="section-band bg-linen" id="weekends">
        <div class="page-wrap">
          <span class="section-eyebrow">Your Weekends</span>
          <h2 class="section-h2">How the <em>days unfold</em></h2>
          <p class="section-intro">
            Training weekends follow a consistent rhythm that allows you to
            settle, go deep and integrate. Here is the shape of a typical day.
          </p>
          <div class="ruled-list">
            <div class="ruled-list-item">
              <span class="ruled-item-label">09:45</span
              ><span class="ruled-item-text"
                >Doors open — settle in, connect with your cohort</span
              >
            </div>
            <div class="ruled-list-item">
              <span class="ruled-item-label">10:00</span
              ><span class="ruled-item-text"
                >Opening — grounding practice, intentions</span
              >
            </div>
            <div class="ruled-list-item">
              <span class="ruled-item-label">10:30</span
              ><span class="ruled-item-text">Morning teaching block</span>
            </div>
            <div class="ruled-list-item">
              <span class="ruled-item-label">13:30</span
              ><span class="ruled-item-text"
                >Lunch break — time to rest, eat and integrate</span
              >
            </div>
            <div class="ruled-list-item">
              <span class="ruled-item-label">14:30</span
              ><span class="ruled-item-text">Afternoon teaching block</span>
            </div>
            <div class="ruled-list-item">
              <span class="ruled-item-label">17:45</span
              ><span class="ruled-item-text"
                >Closing circle — reflection, Q&amp;A, next steps</span
              >
            </div>
            <div class="ruled-list-item">
              <span class="ruled-item-label">18:00</span
              ><span class="ruled-item-text">Day ends</span>
            </div>
          </div>
          <div class="pull-quote" style="margin-top: 40px">
            <p class="pull-quote-text">
              "The rhythm of the weekends — arriving, practising, resting,
              departing — becomes its own kind of practice over the course."
            </p>
          </div>
        </div>
      </div>

      <div class="section-divider"></div>

      <!-- ══ SECTION: IN STUDIO ══ -->
      <div class="section-band bg-pinked" id="instudio">
        <div class="page-wrap">
          <span class="section-eyebrow">In Studio</span>
          <h2 class="section-h2">Access &amp; <em>Studio Etiquette</em></h2>
          <div class="accordion">
            <div class="acc-item">
              <button class="acc-trigger">
                <span class="acc-trigger-title">Access codes &amp; entry</span>
                <span class="acc-icon"
                  ><svg viewBox="0 0 10 10">
                    <line x1="5" y1="1" x2="5" y2="9" />
                    <line x1="1" y1="5" x2="9" y2="5" /></svg
                ></span>
              </button>
              <div class="acc-body">
                <ul>
                  <li>
                    The access codes will be sent by automated email to you —
                    check your spam.
                  </li>
                  <li>
                    There are two keypads at the street level door; please use
                    the keypad on the left.
                  </li>
                  <li>
                    If the door does not open on the third floor, the bottom
                    lock may be engaged and you will need to wait until a member
                    of staff arrives. There is a doorbell at this level — if in
                    doubt, you can ring.
                  </li>
                  <li>
                    Please save these codes on your phone. A member of staff may
                    not always be available to let you in if you are running
                    late.
                  </li>
                </ul>
              </div>
            </div>
            <div class="acc-item">
              <button class="acc-trigger">
                <span class="acc-trigger-title">Studio etiquette</span>
                <span class="acc-icon"
                  ><svg viewBox="0 0 10 10">
                    <line x1="5" y1="1" x2="5" y2="9" />
                    <line x1="1" y1="5" x2="9" y2="5" /></svg
                ></span>
              </button>
              <div class="acc-body">
                <ul>
                  <li>
                    Please arrive at 9.45 so we can start promptly at 10am. If
                    you are late and a meditation is in progress, please do not
                    go into the studio until you can hear talking.
                  </li>
                  <li>
                    The reception area is a <strong>food-free zone</strong> —
                    please eat in the studio if you have your own food.
                  </li>
                  <li>
                    Keep the studios tidy during training — our cleaners are
                    usually not able to access the studio during intensive
                    training periods.
                  </li>
                  <li>
                    Please refrain from mobile phone usage in the studios.
                    Phones should be on silent and preferably out of sight
                    during teaching hours.
                  </li>
                  <li>
                    Remove shoes on arrival and leave bags under the benches in
                    the changing areas — take valuables into the studio with
                    you.
                  </li>
                  <li>
                    If you have a suitcase, please ask someone from the team to
                    put this in the store room.
                  </li>
                  <li>
                    Be as quiet as possible when arriving, during breaks, and
                    when leaving, to avoid disrupting other yoga and Pilates
                    classes in progress.
                  </li>
                </ul>
              </div>
            </div>
            <div class="acc-item">
              <button class="acc-trigger">
                <span class="acc-trigger-title">Facilities at The Shala</span>
                <span class="acc-icon"
                  ><svg viewBox="0 0 10 10">
                    <line x1="5" y1="1" x2="5" y2="9" />
                    <line x1="1" y1="5" x2="9" y2="5" /></svg
                ></span>
              </button>
              <div class="acc-body">
                <p>
                  The Shala is located on the third floor. Facilities include:
                </p>
                <ul>
                  <li>Reception/lounge area</li>
                  <li>
                    Three studios (Mysore, Hampi and Pushkar) with full props —
                    bolsters, blankets, blocks, bricks, straps and eye bags
                    available
                  </li>
                  <li>
                    Cloakroom/changing room (gender neutral) and toilets (gender
                    neutral x 3)
                  </li>
                  <li>
                    Showers x 2 (please note we do not provide towels or shower
                    toiletries)
                  </li>
                  <li>Free tea and filtered water available</li>
                </ul>
                <p>
                  Please note: there is no lift in the building. If you have any
                  mobility requirements, please contact us before to discuss
                  accessibility issues.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="section-divider"></div>

      <!-- ══ SECTION: ONLINE & HYBRID ══ -->
      <div class="section-band bg-dusty-blush" id="online">
        <div class="page-wrap">
          <span class="section-eyebrow">Online &amp; Hybrid</span>
          <h2 class="section-h2">Joining <em>virtually</em></h2>
          <p class="section-intro">
            Some of our courses are offered as livestream or as hybrid — with
            the option to attend in studio or via virtual livestream. Here is
            everything you need to know.
          </p>
          <div class="accordion">
            <div class="acc-item">
              <button class="acc-trigger">
                <span class="acc-trigger-title"
                  >Virtual livestream — practicalities</span
                >
                <span class="acc-icon"
                  ><svg viewBox="0 0 10 10">
                    <line x1="5" y1="1" x2="5" y2="9" />
                    <line x1="1" y1="5" x2="9" y2="5" /></svg
                ></span>
              </button>
              <div class="acc-body">
                <ul>
                  <li>
                    The Zoom link will be sent out one hour before the session
                    starts — please check your inbox, including spam, social and
                    promotions folders. The link will remain the same throughout
                    the course.
                  </li>
                  <li>
                    Make sure the correct name is displayed on your Zoom account
                    before joining.
                  </li>
                  <li>Use the raised hand function if you wish to speak.</li>
                  <li>
                    Keep yourself on mute at all times except when invited to
                    speak.
                  </li>
                  <li>
                    Please be mindful of how much you're speaking and whether
                    your questions are relevant to the whole group — allow
                    quieter members of the group space to contribute.
                  </li>
                  <li>
                    Use the chat function to message the tutor or the whole
                    group as needed.
                  </li>
                  <li>
                    Keep your camera on unless you are uncomfortable to do so —
                    this creates a safer, more connected space for all.
                  </li>
                  <li>
                    Please be aware that sessions are usually recorded and
                    shared with attendees. Your visuals will not appear in the
                    recording but any audio will.
                  </li>
                </ul>
              </div>
            </div>
            <div class="acc-item">
              <button class="acc-trigger">
                <span class="acc-trigger-title"
                  >Hybrid courses — what to know</span
                >
                <span class="acc-icon"
                  ><svg viewBox="0 0 10 10">
                    <line x1="5" y1="1" x2="5" y2="9" />
                    <line x1="1" y1="5" x2="9" y2="5" /></svg
                ></span>
              </button>
              <div class="acc-body">
                <ul>
                  <li>
                    Hybrid courses offer the choice of attending in studio or
                    via virtual livestream — you select your format at booking.
                  </li>
                  <li>
                    A designated facilitator is available during most hybrid
                    sessions to support the livestream experience.
                  </li>
                  <li>
                    Formats are not mixed within a single course — you opt for
                    either in studio OR livestream (one exception: Core Module
                    1).
                  </li>
                </ul>
                <p>
                  For switching between formats, admin fees and the school's
                  right to convert format, see our
                  <a href="#">Terms &amp; Conditions</a>.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="section-divider"></div>

      <!-- ══ SECTION: SUPPORT ══ -->
      <div class="section-band bg-white" id="support">
        <div class="page-wrap">
          <span class="section-eyebrow">Support</span>
          <h2 class="section-h2">We're here <em>for you</em></h2>
          <p class="section-intro">
            Training can bring up unexpected things — personally, practically
            and physically. If you are concerned about whether you are ready for
            a course or the timing is right for you, please speak to us first.
            <a href="#">Message the team</a>.
          </p>
          <div class="accordion">
            <div class="acc-item">
              <button class="acc-trigger">
                <span class="acc-trigger-title">Your course tutor</span>
                <span class="acc-icon"
                  ><svg viewBox="0 0 10 10">
                    <line x1="5" y1="1" x2="5" y2="9" />
                    <line x1="1" y1="5" x2="9" y2="5" /></svg
                ></span>
              </button>
              <div class="acc-body">
                <ul>
                  <li>
                    Each course is run by a tutor, who should be your first
                    point of contact once the course has begun.
                  </li>
                  <li>
                    Practical and administrative enquiries should consistently
                    be channelled through the admin team at
                    <a href="mailto:teachertraining@theshala.co.uk"
                      >teachertraining@theshala.co.uk</a
                    >.
                  </li>
                  <li>
                    Tutors will reach out if they have any concerns about your
                    progress or wellbeing.
                  </li>
                </ul>
              </div>
            </div>
            <div class="acc-item">
              <button class="acc-trigger">
                <span class="acc-trigger-title">Pastoral support</span>
                <span class="acc-icon"
                  ><svg viewBox="0 0 10 10">
                    <line x1="5" y1="1" x2="5" y2="9" />
                    <line x1="1" y1="5" x2="9" y2="5" /></svg
                ></span>
              </button>
              <div class="acc-body">
                <ul>
                  <li>
                    If you're going through a difficult time — personally or
                    professionally — you can speak confidentially to your tutor.
                  </li>
                  <li>
                    We can also point you toward appropriate external support if
                    needed.
                  </li>
                  <li>
                    Our role is one of teachers, not trained therapists or
                    medical professionals.
                  </li>
                </ul>
                <p>
                  If you have a medical condition or mental health concern that
                  may affect your training, please review the disclosure
                  requirements in our <a href="#">Terms &amp; Conditions</a>.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="section-divider"></div>

      <!-- ══ SECTION: FINDING US ══ -->
      <div class="section-band bg-greige" id="finding">
        <div class="page-wrap">
          <span class="section-eyebrow">Finding Us</span>
          <h2 class="section-h2">Getting to <em>the Shala</em></h2>
          <div class="contact-grid">
            <div>
              <p class="section-intro" style="margin-bottom: 24px">
                The Shala is in West Norwood, South London — well connected by
                rail, bus and cycle routes.
              </p>
              <div class="ruled-list">
                <div class="ruled-list-item">
                  <span class="ruled-item-label">Entrance</span
                  ><span class="ruled-item-text"
                    >1 Chestnut Road, West Norwood, London SE27 9EZ</span
                  >
                </div>
                <div class="ruled-list-item">
                  <span class="ruled-item-label">Postal</span
                  ><span class="ruled-item-text"
                    >537 Norwood Road, West Norwood, London SE27 9DL</span
                  >
                </div>
                <div class="ruled-list-item">
                  <span class="ruled-item-label">Train</span
                  ><span class="ruled-item-text"
                    >West Norwood — 5 min walk (Southern Rail, direct from
                    London Bridge &amp; Victoria)<br />Tulse Hill — 10 min walk
                    (Thameslink, direct from Blackfriars, Farringdon, St Pancras
                    International / Kings Cross)</span
                  >
                </div>
                <div class="ruled-list-item">
                  <span class="ruled-item-label">Bus</span
                  ><span class="ruled-item-text"
                    >Routes 2, 68, 196, 322, 468 — stop on Norwood Road</span
                  >
                </div>
                <div class="ruled-list-item">
                  <span class="ruled-item-label">Cycle</span
                  ><span class="ruled-item-text"
                    >Secure cycle storage available at the studio</span
                  >
                </div>
                <div class="ruled-list-item">
                  <span class="ruled-item-label">By car</span
                  ><span class="ruled-item-text"
                    >Free street parking on adjacent residential roads at all
                    times</span
                  >
                </div>
                <div class="ruled-list-item">
                  <span class="ruled-item-label">Access</span
                  ><span class="ruled-item-text"
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
              <p
                style="
                  margin-top: 16px;
                  font-size: 11px;
                  letter-spacing: 0.14em;
                  text-transform: uppercase;
                "
              >
                <a
                  href="https://tfl.gov.uk/plan-a-journey/"
                  target="_blank"
                  rel="noopener"
                  style="
                    color: var(--pink);
                    text-decoration: none;
                    font-weight: 500;
                  "
                  >Plan your journey via TfL →</a
                >
              </p>
              <p
                style="
                  margin-top: 12px;
                  font-size: 13px;
                  color: var(--text-mid);
                  line-height: 1.6;
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

      <!-- ══ SECTION: FOLLOW US ONLINE ══ -->
      <div class="section-band bg-chalk" id="social">
        <div class="page-wrap">
          <span class="section-eyebrow">Connect</span>
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
              href="<?php echo esc_url(home_url('/signup/')); ?>"
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

      <!-- CTA -->
      <section class="cta-band">
        <div class="page-wrap">
          <h2 class="cta-h2">We'd love to hear from <em>you</em></h2>
          <p class="cta-sub">
            If anything isn't covered here, or you just want to talk things
            through before you start, please don't hesitate to get in touch.
          </p>
          <div class="cta-buttons">
            <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="btn-white">Book a Call</a>
            <a href="<?php echo esc_url(home_url('/signup/')); ?>" class="btn-ghost-w">Newsletter Sign Up</a>
          </div>
        </div>
      </section>
    </main>

<?php get_footer(); ?>