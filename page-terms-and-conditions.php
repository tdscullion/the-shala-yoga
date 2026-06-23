<?php
/*
Template Name: Terms and Conditions
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
        <nav class="page-jumpnav" aria-label="Page sections">
          <a href="#modules-policy">Modules</a>
          <a href="#200hr-policy">200-Hour</a>
          <a href="#philosophy-club">Philosophy Club</a>
          <a href="#general-policies">All Courses</a>
          <a href="#course-content">Course Content</a>
          <a href="#accreditation">Accreditation</a>
          <a href="#accessibility">Accessibility &amp; Inclusion</a>
          <a href="#waiver">Waiver</a>
        </nav>
      </div>

      <!-- INTRO -->
      <div class="section-band bg-chalk" id="intro">
        <div class="page-wrap">
          <div class="section-pink-rule"></div>
          <h2 class="section-h2">
            The Shala School of Yoga <em>Terms &amp; Conditions</em>
          </h2>
          <p class="section-intro" style="margin-top: 18px">
            Trainings at the Shala School of Yoga are independently run by the
            teachers, and all payments for training services are processed by
            the Shala School of Yoga on behalf of the individual teachers
            hosting the course. We may update these terms and conditions from
            time to time and will publish the revised terms on our website.
          </p>
        </div>
      </div>
      <div class="section-divider"></div>

      <!-- MODULE POLICY -->
      <div class="section-band bg-linen" id="modules-policy">
        <div class="page-wrap">
          <div class="section-pink-rule"></div>
          <span class="section-eyebrow">Modules</span>
          <h2 class="section-h2">
            Course Modules: Transfer, Cancellations <em>&amp; Refund Policy</em>
          </h2>
          <p class="section-intro" style="margin-top: 18px">
            All transfer and cancellation requests must be
            <a
              href="mailto:teachertraining@theshala.co.uk"
              style="
                color: var(--pink);
                border-bottom: 1px solid rgba(212, 0, 98, 0.25);
              "
              >emailed</a
            >
            to the Teacher Training Coordinator.
          </p>
          <div class="accordion">
            <div class="acc-item">
              <button class="acc-trigger">
                <span class="acc-trigger-title"
                  >Transfers — more than 30 days before</span
                >
                <span class="acc-icon"
                  ><svg viewBox="0 0 10 10">
                    <line x1="5" y1="1" x2="5" y2="9" />
                    <line x1="1" y1="5" x2="9" y2="5" /></svg
                ></span>
              </button>
              <div class="acc-body">
                <p>
                  A £25 admin fee (plus any difference in course fees) applies
                  to transfer to another course with the same teacher. This
                  needs to be attended within a 13-month period.
                </p>
              </div>
            </div>
            <div class="acc-item">
              <button class="acc-trigger">
                <span class="acc-trigger-title"
                  >Transfers — less than 30 days before</span
                >
                <span class="acc-icon"
                  ><svg viewBox="0 0 10 10">
                    <line x1="5" y1="1" x2="5" y2="9" />
                    <line x1="1" y1="5" x2="9" y2="5" /></svg
                ></span>
              </button>
              <div class="acc-body">
                <p>
                  No transfers will be provided unless the course is fully
                  booked and your place can be filled from a waiting list, or
                  you are sick, injured, or have pregnancy-related health issues
                  and can provide a doctor's note. In these cases, a £25 admin
                  fee (plus any difference in course fees) applies. This needs
                  to be attended within a 13-month period.
                </p>
              </div>
            </div>
            <div class="acc-item">
              <button class="acc-trigger">
                <span class="acc-trigger-title"
                  >Transfers — after the course has started</span
                >
                <span class="acc-icon"
                  ><svg viewBox="0 0 10 10">
                    <line x1="5" y1="1" x2="5" y2="9" />
                    <line x1="1" y1="5" x2="9" y2="5" /></svg
                ></span>
              </button>
              <div class="acc-body">
                <p>No refunds will be provided under any circumstances.</p>
              </div>
            </div>
            <div class="acc-item">
              <button class="acc-trigger">
                <span class="acc-trigger-title"
                  >Transfers to a different teacher</span
                >
                <span class="acc-icon"
                  ><svg viewBox="0 0 10 10">
                    <line x1="5" y1="1" x2="5" y2="9" />
                    <line x1="1" y1="5" x2="9" y2="5" /></svg
                ></span>
              </button>
              <div class="acc-body">
                <p>
                  Transfers to courses taught by a different teacher are not
                  normally possible, as each course booking constitutes a
                  separate contract between you and the individual teacher. In
                  exceptional circumstances, a cross-teacher transfer may be
                  considered with the agreement of both teachers and at the
                  discretion of The Shala School of Yoga. A £20 admin fee will
                  apply in addition to the fees stipulated above.
                </p>
              </div>
            </div>
            <div class="acc-item">
              <button class="acc-trigger">
                <span class="acc-trigger-title"
                  >Cancellations — more than 30 days before</span
                >
                <span class="acc-icon"
                  ><svg viewBox="0 0 10 10">
                    <line x1="5" y1="1" x2="5" y2="9" />
                    <line x1="1" y1="5" x2="9" y2="5" /></svg
                ></span>
              </button>
              <div class="acc-body">
                <p>
                  A refund will be provided minus a 10% + VAT admin fee
                  (calculated on the full course fee).
                </p>
              </div>
            </div>
            <div class="acc-item">
              <button class="acc-trigger">
                <span class="acc-trigger-title"
                  >Cancellations — less than 30 days before</span
                >
                <span class="acc-icon"
                  ><svg viewBox="0 0 10 10">
                    <line x1="5" y1="1" x2="5" y2="9" />
                    <line x1="1" y1="5" x2="9" y2="5" /></svg
                ></span>
              </button>
              <div class="acc-body">
                <p>
                  No refunds or transfers will be provided unless the course is
                  fully booked and your place can be filled from a waiting list,
                  or you are sick, injured, or pregnant and can provide a
                  doctor's note. In these cases, a refund will be provided minus
                  a 10% + VAT admin fee, or a transfer to the next available
                  course at the discretion of the Shala team.
                </p>
              </div>
            </div>
            <div class="acc-item">
              <button class="acc-trigger">
                <span class="acc-trigger-title"
                  >Cancellations — after the course has started</span
                >
                <span class="acc-icon"
                  ><svg viewBox="0 0 10 10">
                    <line x1="5" y1="1" x2="5" y2="9" />
                    <line x1="1" y1="5" x2="9" y2="5" /></svg
                ></span>
              </button>
              <div class="acc-body">
                <p>No refunds will be provided under any circumstances.</p>
              </div>
            </div>
            <div class="acc-item">
              <button class="acc-trigger">
                <span class="acc-trigger-title"
                  >External events beyond our control</span
                >
                <span class="acc-icon"
                  ><svg viewBox="0 0 10 10">
                    <line x1="5" y1="1" x2="5" y2="9" />
                    <line x1="1" y1="5" x2="9" y2="5" /></svg
                ></span>
              </button>
              <div class="acc-body">
                <p>
                  We do not offer refunds where a participant is unable to
                  attend due to cancelled or disrupted transport, government
                  travel advice, border closures, conflict, or other external
                  events beyond our control. Participants are responsible for
                  arranging appropriate travel insurance.
                </p>
                <p>
                  By booking a place on a course or being accepted onto a
                  training programme, you enter into a contractual relationship
                  with the individual teacher offering the course. The Shala
                  School of Yoga acts solely as a facilitator for payments on
                  behalf of the teacher.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="section-divider"></div>

      <!-- 200-HR POLICY -->
      <div class="section-band bg-chalk" id="200hr-policy">
        <div class="page-wrap">
          <div class="section-pink-rule"></div>
          <span class="section-eyebrow">200-Hour</span>
          <h2 class="section-h2">
            200-Hour: Transfer, Cancellations <em>&amp; Refund Policy</em>
          </h2>
          <p class="section-intro" style="margin-top: 18px">
            All transfer and cancellation requests must be
            <a
              href="mailto:teachertraining@theshala.co.uk"
              style="
                color: var(--pink);
                border-bottom: 1px solid rgba(212, 0, 98, 0.25);
              "
              >emailed</a
            >
            to the Teacher Training Coordinator.
          </p>
          <div class="accordion">
            <div class="acc-item">
              <button class="acc-trigger">
                <span class="acc-trigger-title"
                  >Transfers — more than 60 days before</span
                >
                <span class="acc-icon"
                  ><svg viewBox="0 0 10 10">
                    <line x1="5" y1="1" x2="5" y2="9" />
                    <line x1="1" y1="5" x2="9" y2="5" /></svg
                ></span>
              </button>
              <div class="acc-body">
                <p>
                  A £60 admin fee (plus any difference in course fees) applies
                  to transfer to the next available course.
                </p>
              </div>
            </div>
            <div class="acc-item">
              <button class="acc-trigger">
                <span class="acc-trigger-title"
                  >Transfers — less than 60 days before</span
                >
                <span class="acc-icon"
                  ><svg viewBox="0 0 10 10">
                    <line x1="5" y1="1" x2="5" y2="9" />
                    <line x1="1" y1="5" x2="9" y2="5" /></svg
                ></span>
              </button>
              <div class="acc-body">
                <p>
                  No transfers will be provided unless the course is fully
                  booked and your place can be filled from a waiting list, or
                  you are sick, injured, or pregnant and can provide a doctor's
                  note. In these cases, a £60 admin fee (plus any difference in
                  course fees) applies.
                </p>
              </div>
            </div>
            <div class="acc-item">
              <button class="acc-trigger">
                <span class="acc-trigger-title"
                  >Transfers — after the course has started</span
                >
                <span class="acc-icon"
                  ><svg viewBox="0 0 10 10">
                    <line x1="5" y1="1" x2="5" y2="9" />
                    <line x1="1" y1="5" x2="9" y2="5" /></svg
                ></span>
              </button>
              <div class="acc-body">
                <p>No transfers will be provided under any circumstances.</p>
              </div>
            </div>
            <div class="acc-item">
              <button class="acc-trigger">
                <span class="acc-trigger-title"
                  >Cancellations — more than 60 days before</span
                >
                <span class="acc-icon"
                  ><svg viewBox="0 0 10 10">
                    <line x1="5" y1="1" x2="5" y2="9" />
                    <line x1="1" y1="5" x2="9" y2="5" /></svg
                ></span>
              </button>
              <div class="acc-body">
                <p>
                  A refund will be provided minus a 10% + VAT admin fee
                  (calculated on the full course fee).
                </p>
              </div>
            </div>
            <div class="acc-item">
              <button class="acc-trigger">
                <span class="acc-trigger-title"
                  >Cancellations — less than 60 days before</span
                >
                <span class="acc-icon"
                  ><svg viewBox="0 0 10 10">
                    <line x1="5" y1="1" x2="5" y2="9" />
                    <line x1="1" y1="5" x2="9" y2="5" /></svg
                ></span>
              </button>
              <div class="acc-body">
                <p>
                  No refunds or transfers will be provided unless the course is
                  fully booked and your place can be filled from a waiting list,
                  or you are sick, injured, or pregnant and can provide a
                  doctor's note. In these cases, a refund will be provided minus
                  a 10% + VAT admin fee.
                </p>
              </div>
            </div>
            <div class="acc-item">
              <button class="acc-trigger">
                <span class="acc-trigger-title"
                  >Cancellations — after the course has started</span
                >
                <span class="acc-icon"
                  ><svg viewBox="0 0 10 10">
                    <line x1="5" y1="1" x2="5" y2="9" />
                    <line x1="1" y1="5" x2="9" y2="5" /></svg
                ></span>
              </button>
              <div class="acc-body">
                <p>No refunds will be provided under any circumstances.</p>
              </div>
            </div>
            <div class="acc-item">
              <button class="acc-trigger">
                <span class="acc-trigger-title"
                  >External events beyond our control</span
                >
                <span class="acc-icon"
                  ><svg viewBox="0 0 10 10">
                    <line x1="5" y1="1" x2="5" y2="9" />
                    <line x1="1" y1="5" x2="9" y2="5" /></svg
                ></span>
              </button>
              <div class="acc-body">
                <p>
                  We do not offer refunds where a participant is unable to
                  attend due to cancelled or disrupted transport, government
                  travel advice, border closures, conflict, or other external
                  events beyond our control. Participants are responsible for
                  arranging appropriate travel insurance.
                </p>
                <p>
                  By booking a place on a course or being accepted onto a
                  training programme, you enter into a contractual relationship
                  with the individual teacher offering the course. The Shala
                  School of Yoga acts solely as a facilitator for payments on
                  behalf of the teacher.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="section-divider"></div>

      <!-- YOGA PHILOSOPHY CLUB -->
      <div class="section-band bg-linen" id="philosophy-club">
        <div class="page-wrap">
          <div class="section-pink-rule"></div>
          <span class="section-eyebrow">Philosophy Club</span>
          <h2 class="section-h2">
            Yoga Philosophy Club: Transfer, Cancellations
            <em>&amp; Refund Policy</em>
          </h2>
          <p class="section-intro" style="margin-top: 18px">
            Our preference is to offer transfers rather than refunds to help
            keep administration and costs low.
          </p>
          <div class="accordion">
            <div class="acc-item">
              <button class="acc-trigger">
                <span class="acc-trigger-title">Transfers</span>
                <span class="acc-icon"
                  ><svg viewBox="0 0 10 10">
                    <line x1="5" y1="1" x2="5" y2="9" />
                    <line x1="1" y1="5" x2="9" y2="5" /></svg
                ></span>
              </button>
              <div class="acc-body">
                <p>
                  You may transfer to another Yoga Philosophy Session up to
                  <strong>24 hours before</strong> the start time. Simply cancel
                  your session online and you will receive a credit to book
                  another date. If you cancel within 24 hours of the session
                  start time, no credit or transfer will be issued.
                </p>
              </div>
            </div>
            <div class="acc-item">
              <button class="acc-trigger">
                <span class="acc-trigger-title"
                  >Cancellations &amp; refunds — more than 24 hours before</span
                >
                <span class="acc-icon"
                  ><svg viewBox="0 0 10 10">
                    <line x1="5" y1="1" x2="5" y2="9" />
                    <line x1="1" y1="5" x2="9" y2="5" /></svg
                ></span>
              </button>
              <div class="acc-body">
                <p>
                  A refund may be provided minus a
                  <strong>£5 admin fee</strong>.
                </p>
              </div>
            </div>
            <div class="acc-item">
              <button class="acc-trigger">
                <span class="acc-trigger-title"
                  >Cancellations &amp; refunds — within 24 hours</span
                >
                <span class="acc-icon"
                  ><svg viewBox="0 0 10 10">
                    <line x1="5" y1="1" x2="9" y2="5" /></svg
                ></span>
              </button>
              <div class="acc-body">
                <p>
                  No refunds or transfers will be provided unless you are unable
                  to attend due to illness, injury, or pregnancy and can provide
                  a doctor's note, or the session is fully booked and your place
                  can be filled from a waiting list. In these cases, a refund
                  will be provided minus a £5 admin fee.
                </p>
                <p>
                  After a session has started,
                  <strong>no refunds or transfers</strong> will be issued under
                  any circumstances.
                </p>
              </div>
            </div>
            <div class="acc-item">
              <button class="acc-trigger">
                <span class="acc-trigger-title">Booking agreement</span>
                <span class="acc-icon"
                  ><svg viewBox="0 0 10 10">
                    <line x1="5" y1="1" x2="5" y2="9" />
                    <line x1="1" y1="5" x2="9" y2="5" /></svg
                ></span>
              </button>
              <div class="acc-body">
                <p>
                  By booking a place on a Yoga Philosophy Session, you agree to
                  these terms and enter into a contractual commitment with The
                  Shala School of Yoga.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="section-divider"></div>

      <!-- ALL COURSES -->
      <div class="section-band bg-chalk" id="general-policies">
        <div class="page-wrap">
          <div class="section-pink-rule"></div>
          <span class="section-eyebrow">All Courses</span>
          <h2 class="section-h2">All <em>Courses</em></h2>
          <p class="section-intro" style="margin-top: 18px">
            Policies that apply across all our trainings and programmes.
          </p>
          <div class="accordion">
            <div class="acc-item">
              <button class="acc-trigger">
                <span class="acc-trigger-title"
                  >Force Majeure / Events outside our control</span
                >
                <span class="acc-icon"
                  ><svg viewBox="0 0 10 10">
                    <line x1="5" y1="1" x2="5" y2="9" />
                    <line x1="1" y1="5" x2="9" y2="5" /></svg
                ></span>
              </button>
              <div class="acc-body">
                <p>
                  We are not liable for refunds, transfers, or compensation
                  where a participant is unable to attend due to circumstances
                  outside our control. This includes (but is not limited to):
                </p>
                <ul>
                  <li>War, conflict, civil unrest, or terrorism</li>
                  <li>Government travel advisories or restrictions</li>
                  <li>Airspace closures or flight cancellations</li>
                  <li>Natural disasters or extreme weather</li>
                  <li>Pandemics or public health restrictions</li>
                  <li>Visa or immigration issues</li>
                  <li>Personal travel disruption or accommodation issues</li>
                </ul>
                <p>
                  In such cases, participants remain responsible for the full
                  course fee. We strongly recommend comprehensive travel
                  insurance.
                </p>
              </div>
            </div>
            <div class="acc-item">
              <button class="acc-trigger">
                <span class="acc-trigger-title"
                  >Shala School of Yoga cancellations</span
                >
                <span class="acc-icon"
                  ><svg viewBox="0 0 10 10">
                    <line x1="5" y1="1" x2="5" y2="9" />
                    <line x1="1" y1="5" x2="9" y2="5" /></svg
                ></span>
              </button>
              <div class="acc-body">
                <p>
                  We reserve the right to cancel a course under exceptional
                  circumstances that prevent us from offering the course as
                  advertised or if there are insufficient bookings. Should this
                  happen, we will notify you as soon as possible and offer a
                  full refund in GBP (£) or a transfer to an alternative event.
                  We will not be responsible for any additional expenses
                  including travel, accommodation, or exchange rate losses.
                </p>
                <p>
                  If a course has to be cancelled partway through due to
                  extenuating circumstances, we will (a) defer the rest of the
                  course or, failing that, (b) give refunds on a pro-rata basis.
                </p>
              </div>
            </div>
            <div class="acc-item">
              <button class="acc-trigger">
                <span class="acc-trigger-title">Teacher substitution</span>
                <span class="acc-icon"
                  ><svg viewBox="0 0 10 10">
                    <line x1="5" y1="1" x2="5" y2="9" />
                    <line x1="1" y1="5" x2="9" y2="5" /></svg
                ></span>
              </button>
              <div class="acc-body">
                <p>
                  In the unlikely event that a scheduled teacher is unable to
                  deliver a training due to illness, injury or unforeseen
                  circumstances, The Shala reserves the right to provide a
                  suitably qualified teacher of equivalent experience.
                </p>
                <p>
                  If you specifically booked to study with the originally
                  advertised teacher and would prefer not to attend with the
                  replacement teacher, you may request to defer your place to
                  the next training led by the original teacher (subject to
                  availability).
                </p>
              </div>
            </div>
            <div class="acc-item">
              <button class="acc-trigger">
                <span class="acc-trigger-title">Attendance policy</span>
                <span class="acc-icon"
                  ><svg viewBox="0 0 10 10">
                    <line x1="5" y1="1" x2="5" y2="9" />
                    <line x1="1" y1="5" x2="9" y2="5" /></svg
                ></span>
              </button>
              <div class="acc-body">
                <p>
                  Our courses are designed to be attended live — either in
                  person or via livestream. Recordings of live sessions, where
                  available, are intended for recap purposes only and should not
                  be used as a substitute for live attendance.
                </p>
                <p>
                  In exceptional circumstances, on-demand catch-up may be
                  permitted in place of live attendance; however, this is the
                  exception rather than the rule. To qualify for certification,
                  students must attend a minimum of
                  <strong>90% of all scheduled live hours</strong>, with any
                  missed sessions made up as agreed in advance with the Teacher
                  Training Coordinator. Make-up sessions may incur an admin or
                  hourly fee.
                </p>
                <p>
                  This policy ensures that our trainings meet Yoga Alliance
                  standards for synchronous (live) contact hours.
                </p>
              </div>
            </div>
            <div class="acc-item">
              <button class="acc-trigger">
                <span class="acc-trigger-title">Hybrid courses</span>
                <span class="acc-icon"
                  ><svg viewBox="0 0 10 10">
                    <line x1="5" y1="1" x2="5" y2="9" />
                    <line x1="1" y1="5" x2="9" y2="5" /></svg
                ></span>
              </button>
              <div class="acc-body">
                <p>
                  Hybrid courses offer the option to choose an in-studio
                  experience or to attend via virtual livestream. We do not
                  offer a mixture of in-studio and livestream on one course.
                </p>
                <p>
                  If you wish to switch between formats, this is sometimes
                  possible (space permitting) with a minimum of 48 hours notice.
                  A £25 admin fee applies in all circumstances without
                  exception.
                </p>
                <p>
                  We reserve the right to make a hybrid course in-studio only or
                  livestream only if demand is not there for one format. In this
                  case, you will be offered the option to transfer to the single
                  format or receive a refund.
                </p>
              </div>
            </div>
            <div class="acc-item">
              <button class="acc-trigger">
                <span class="acc-trigger-title">Flexible Hybrid Admin Fee</span>
                <span class="acc-icon"
                  ><svg viewBox="0 0 10 10">
                    <line x1="5" y1="1" x2="5" y2="9" />
                    <line x1="1" y1="5" x2="9" y2="5" /></svg
                ></span>
              </button>
              <div class="acc-body">
                <p>
                  If you book the in-studio option but wish to have flexibility
                  to attend via virtual livestream, you can pay an admin fee of
                  £25 by clicking on the Flexible Hybrid Admin Fee orange
                  button. This will hold your in-studio place but also gives you
                  access to the livestream links.
                </p>
                <p>
                  You can request this at any point during the course but, since
                  this needs to be activated manually, it will only be processed
                  during our admin team's working hours Monday to Friday
                  (7am–4pm).
                </p>
              </div>
            </div>
            <div class="acc-item">
              <button class="acc-trigger">
                <span class="acc-trigger-title">Course pricing policy</span>
                <span class="acc-icon"
                  ><svg viewBox="0 0 10 10">
                    <line x1="5" y1="1" x2="5" y2="9" />
                    <line x1="1" y1="5" x2="9" y2="5" /></svg
                ></span>
              </button>
              <div class="acc-body">
                <p>
                  Course fees are subject to change as part of our annual
                  pricing review. The most current price listed on our website
                  or booking system at the time of purchase is the one that
                  applies. We encourage early booking to secure the best
                  available rate.
                </p>
              </div>
            </div>
            <div class="acc-item">
              <button class="acc-trigger">
                <span class="acc-trigger-title">Waiting list procedure</span>
                <span class="acc-icon"
                  ><svg viewBox="0 0 10 10">
                    <line x1="5" y1="1" x2="5" y2="9" />
                    <line x1="1" y1="5" x2="9" y2="5" /></svg
                ></span>
              </button>
              <div class="acc-body">
                <ul>
                  <li>
                    SMS notifications will be sent if a place becomes available
                    on the waiting list. You will have one hour to accept or
                    decline before it is offered to the next person.
                  </li>
                  <li>
                    If you have no card details on the system, the automated
                    system will skip to the next person on the list.
                  </li>
                  <li>
                    If a place becomes available within a week of the start
                    date, everyone on the list will be offered the opportunity
                    and the place will be allocated to whoever responds first.
                  </li>
                </ul>
              </div>
            </div>
            <div class="acc-item">
              <button class="acc-trigger">
                <span class="acc-trigger-title">Coursework</span>
                <span class="acc-icon"
                  ><svg viewBox="0 0 10 10">
                    <line x1="5" y1="1" x2="5" y2="9" />
                    <line x1="1" y1="5" x2="9" y2="5" /></svg
                ></span>
              </button>
              <div class="acc-body">
                <ul>
                  <li>
                    Prior to each course an email will be sent with information
                    on any preparatory work and reading required.
                  </li>
                  <li>Some courses may also require additional coursework.</li>
                  <li>
                    Without exception, late submissions of coursework will incur
                    a <strong>£25 late submission fee</strong>.
                  </li>
                  <li>
                    Certificates are issued after coursework has been marked.
                  </li>
                </ul>
              </div>
            </div>
            <div class="acc-item">
              <button class="acc-trigger">
                <span class="acc-trigger-title"
                  >300-Hour programme: module &amp; extension policy</span
                >
                <span class="acc-icon"
                  ><svg viewBox="0 0 10 10">
                    <line x1="5" y1="1" x2="5" y2="9" />
                    <line x1="1" y1="5" x2="9" y2="5" /></svg
                ></span>
              </button>
              <div class="acc-body">
                <p>
                  All modules must be completed within
                  <strong>5 years</strong> of the student's first module date.
                  Extensions may be granted in two scenarios:
                </p>
                <h4>Old Module Inclusion</h4>
                <p>
                  If a student completed a module outside the 5-year window and
                  wishes to include it toward their 300-hour programme, an
                  extension fee of 15% of the original module fee per module
                  applies. Student must provide proof of completion.
                </p>
                <h4>Programme Completion Extension</h4>
                <p>
                  If a student has not completed all modules within the 5-year
                  period and requests additional time, an extension fee of £100
                  per additional year applies. Maximum extensions are granted at
                  the discretion of The Shala School of Yoga.
                </p>
                <p>
                  All extension requests must be submitted by email to the
                  Teacher Training Coordinator. Extensions are not automatic and
                  are non-refundable once granted. No extensions will be
                  provided for courses prior to January 2020.
                </p>
              </div>
            </div>
            <div class="acc-item">
              <button class="acc-trigger">
                <span class="acc-trigger-title">Faculty changes</span>
                <span class="acc-icon"
                  ><svg viewBox="0 0 10 10">
                    <line x1="5" y1="1" x2="5" y2="9" />
                    <line x1="1" y1="5" x2="9" y2="5" /></svg
                ></span>
              </button>
              <div class="acc-body">
                <p>
                  At the discretion of the Shala School of Yoga, the course
                  teaching faculty may change.
                </p>
              </div>
            </div>
            <div class="acc-item">
              <button class="acc-trigger">
                <span class="acc-trigger-title"
                  >Photography &amp; copyright</span
                >
                <span class="acc-icon"
                  ><svg viewBox="0 0 10 10">
                    <line x1="5" y1="1" x2="5" y2="9" />
                    <line x1="1" y1="5" x2="9" y2="5" /></svg
                ></span>
              </button>
              <div class="acc-body">
                <p>
                  The Shala School of Yoga and course leaders reserve the right
                  to photograph or film sessions for website and marketing
                  purposes. If you prefer not to be photographed, please inform
                  the teacher at the start of the course.
                </p>
                <p>
                  All course materials are the intellectual property of the
                  instructor(s). Reproducing, repurposing, or presenting course
                  content in other trainings or public events without permission
                  is prohibited.
                </p>
              </div>
            </div>
            <div class="acc-item">
              <button class="acc-trigger">
                <span class="acc-trigger-title">COVID policy</span>
                <span class="acc-icon"
                  ><svg viewBox="0 0 10 10">
                    <line x1="5" y1="1" x2="5" y2="9" />
                    <line x1="1" y1="5" x2="9" y2="5" /></svg
                ></span>
              </button>
              <div class="acc-body">
                <p>
                  Students with Covid symptoms are requested to notify the
                  studio/lead teacher and refrain from attending in-person
                  sessions to protect others. If you need to stay at home due to
                  Covid, we will do our best to facilitate your attendance
                  virtually or offer catch-up options.
                </p>
              </div>
            </div>
            <div class="acc-item">
              <button class="acc-trigger">
                <span class="acc-trigger-title">Complaints procedure</span>
                <span class="acc-icon"
                  ><svg viewBox="0 0 10 10">
                    <line x1="5" y1="1" x2="5" y2="9" />
                    <line x1="1" y1="5" x2="9" y2="5" /></svg
                ></span>
              </button>
              <div class="acc-body">
                <p>
                  We are fully committed to providing an experience that aligns
                  with the course description. Should you wish to make a
                  complaint, please
                  <a href="mailto:teachertraining@theshala.co.uk"
                    >email the Teacher Training Coordinator</a
                  >
                  with details of the issue, any previous correspondence, and
                  the resolution you are seeking.
                </p>
                <p>
                  Our formal response will include details of the investigation,
                  a decision on whether the complaint is upheld, the rationale
                  behind our decision, and any redress offered. If a full
                  response is not possible within 30 working days, we will
                  provide an interim update.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="section-divider"></div>

      <!-- COURSE CONTENT & STRUCTURE -->
      <div class="section-band bg-linen" id="course-content">
        <div class="page-wrap">
          <div class="section-pink-rule"></div>
          <span class="section-eyebrow">Course Content</span>
          <h2 class="section-h2">Course Content <em>&amp; Structure</em></h2>
          <p class="section-intro" style="margin-top: 18px">
            What to expect from the way our courses are taught and assessed.
          </p>
          <div class="accordion">
            <div class="acc-item">
              <button class="acc-trigger">
                <span class="acc-trigger-title"
                  >Approach to learning &amp; assessment</span
                >
                <span class="acc-icon"
                  ><svg viewBox="0 0 10 10">
                    <line x1="5" y1="1" x2="5" y2="9" />
                    <line x1="1" y1="5" x2="9" y2="5" /></svg
                ></span>
              </button>
              <div class="acc-body">
                <p>
                  Most modules include a teaching practicum. There is usually no
                  written or practical "test" and you don't have to "prove"
                  anything — rather, we are interested in seeing that you have
                  gained an understanding and knowledge that you can apply to
                  individual students depending on their needs. You are not
                  expected to perform, but to learn and to spark your interest
                  in evolving as a yoga teacher.
                </p>
              </div>
            </div>
            <div class="acc-item">
              <button class="acc-trigger">
                <span class="acc-trigger-title">Training manuals</span>
                <span class="acc-icon"
                  ><svg viewBox="0 0 10 10">
                    <line x1="5" y1="1" x2="5" y2="9" />
                    <line x1="1" y1="5" x2="9" y2="5" /></svg
                ></span>
              </button>
              <div class="acc-body">
                <p>
                  Where training manuals are provided this is indicated on the
                  course page. These are usually sent as PDFs and we recommend
                  <a href="https://www.doxdirect.com/" target="_blank"
                    >DoxDirect</a
                  >
                  should you wish to have a printed copy.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="section-divider"></div>

      <!-- ACCREDITATION -->
      <div class="section-band bg-chalk" id="accreditation">
        <div class="page-wrap">
          <div class="section-pink-rule"></div>
          <span class="section-eyebrow">Accreditation</span>
          <h2 class="section-h2">Accreditation <em>&amp; Certification</em></h2>
          <p class="section-intro" style="margin-top: 18px">
            Information on how our courses are accredited and what this means
            for you.
          </p>
          <div class="accordion">
            <div class="acc-item">
              <button class="acc-trigger">
                <span class="acc-trigger-title">Are courses accredited?</span>
                <span class="acc-icon"
                  ><svg viewBox="0 0 10 10">
                    <line x1="5" y1="1" x2="5" y2="9" />
                    <line x1="1" y1="5" x2="9" y2="5" /></svg
                ></span>
              </button>
              <div class="acc-body">
                <p>
                  Most of our courses are accredited by Yoga Alliance (USA),
                  which differs from Yoga Alliance Professionals (UK). A
                  200-hour yoga teacher training is usually a prerequisite for
                  taking our courses, but some courses are open to students
                  without this qualification — please check with us.
                </p>
              </div>
            </div>
            <div class="acc-item">
              <button class="acc-trigger">
                <span class="acc-trigger-title"
                  >What are my certification options?</span
                >
                <span class="acc-icon"
                  ><svg viewBox="0 0 10 10">
                    <line x1="5" y1="1" x2="5" y2="9" />
                    <line x1="1" y1="5" x2="9" y2="5" /></svg
                ></span>
              </button>
              <div class="acc-body">
                <p>
                  For most modules you have two options: (1) allocate the hours
                  towards a 300-hour programme, or (2) register the hours as
                  YACEP CPD hours under the teacher running the course — if the
                  teacher themselves is YACEP registered. Each course page
                  indicates the accreditation options available.
                </p>
              </div>
            </div>
            <div class="acc-item">
              <button class="acc-trigger">
                <span class="acc-trigger-title"
                  >200-hour registered with Yoga Alliance (USA)</span
                >
                <span class="acc-icon"
                  ><svg viewBox="0 0 10 10">
                    <line x1="5" y1="1" x2="5" y2="9" />
                    <line x1="1" y1="5" x2="9" y2="5" /></svg
                ></span>
              </button>
              <div class="acc-body">
                <p>
                  If you have a 200-hour with Yoga Alliance (USA) and then
                  complete our 300-hour (also accredited by Yoga Alliance USA),
                  you will be able to register as a 500-hour teacher with the YA
                  after meeting the required additional teaching hours.
                </p>
              </div>
            </div>
            <div class="acc-item">
              <button class="acc-trigger">
                <span class="acc-trigger-title"
                  >200-hour registered with a different governing body</span
                >
                <span class="acc-icon"
                  ><svg viewBox="0 0 10 10">
                    <line x1="5" y1="1" x2="5" y2="9" />
                    <line x1="1" y1="5" x2="9" y2="5" /></svg
                ></span>
              </button>
              <div class="acc-body">
                <p>
                  If your 200-hour is registered with a different governing body
                  (such as Yoga Alliance Professionals UK), you may still apply
                  for our 300-hour and will have 500 hours of training, however
                  you will not be able to officially register as 500-hours with
                  one organisation.
                </p>
              </div>
            </div>
            <div class="acc-item">
              <button class="acc-trigger">
                <span class="acc-trigger-title"
                  >Attendance &amp; certification requirements</span
                >
                <span class="acc-icon"
                  ><svg viewBox="0 0 10 10">
                    <line x1="5" y1="1" x2="5" y2="9" />
                    <line x1="1" y1="5" x2="9" y2="5" /></svg
                ></span>
              </button>
              <div class="acc-body">
                <p>
                  To successfully complete the training, participants are
                  required to attend a minimum of
                  <strong>90% of the course live</strong>. Failure to meet the
                  attendance requirement may result in ineligibility for
                  certification. All mentoring, assignments, and coursework must
                  also be completed.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="section-divider"></div>

      <!-- ACCESSIBILITY & INCLUSION -->
      <div class="section-band bg-linen" id="accessibility">
        <div class="page-wrap">
          <div class="section-pink-rule"></div>
          <span class="section-eyebrow">Accessibility &amp; Inclusion</span>
          <h2 class="section-h2">
            Accessibility, Inclusion <em>&amp; Diversity</em>
          </h2>
          <p class="section-intro" style="margin-top: 18px">
            At The Shala School of Yoga, we are committed to creating a
            welcoming, inclusive and equitable space for every body and every
            mind.
          </p>
          <div class="accordion">
            <div class="acc-item">
              <button class="acc-trigger">
                <span class="acc-trigger-title"
                  >Our commitment to inclusion</span
                >
                <span class="acc-icon"
                  ><svg viewBox="0 0 10 10">
                    <line x1="5" y1="1" x2="5" y2="9" />
                    <line x1="1" y1="5" x2="9" y2="5" /></svg
                ></span>
              </button>
              <div class="acc-body">
                <p>
                  Our community is founded on respect, compassion and curiosity
                  — values that extend to how we teach, learn, and connect. We
                  recognise that every individual brings unique experiences,
                  identities and ways of learning and we aim to celebrate this
                  diversity.
                </p>
                <p>
                  We continually strive to make our trainings and events
                  accessible and supportive for all, regardless of race,
                  ethnicity, gender identity, sexual orientation, age, ability,
                  body type, neurodivergence, or background. We acknowledge we
                  may not always get it right, so we place great value on your
                  constructive feedback.
                </p>
              </div>
            </div>
            <div class="acc-item">
              <button class="acc-trigger">
                <span class="acc-trigger-title">Reasonable adjustments</span>
                <span class="acc-icon"
                  ><svg viewBox="0 0 10 10">
                    <line x1="5" y1="1" x2="5" y2="9" />
                    <line x1="1" y1="5" x2="9" y2="5" /></svg
                ></span>
              </button>
              <div class="acc-body">
                <p>
                  We will make reasonable adjustments wherever possible to
                  support participation in our trainings, courses, and
                  assessments. This may include:
                </p>
                <ul>
                  <li>Adapting communication styles or teaching delivery</li>
                  <li>
                    Allowing flexibility with assessments, coursework or
                    deadlines
                  </li>
                  <li>Making space for regular breaks or physical needs</li>
                  <li>
                    Adjusting the physical environment or online setup for
                    accessibility
                  </li>
                  <li>
                    Occasionally connecting students with other peers for
                    informal mentoring
                  </li>
                </ul>
                <p>
                  If you have any specific access needs, please
                  <a href="mailto:teachertraining@theshala.co.uk">email us</a>
                  in confidence before or during your training. You don't need a
                  formal diagnosis to ask for adjustments — we'll liaise with
                  the tutor and do our best to accommodate your needs.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="section-divider"></div>

      <!-- WAIVER -->
      <div class="section-band bg-chalk" id="waiver">
        <div class="page-wrap">
          <div class="section-pink-rule"></div>
          <span class="section-eyebrow">Waiver</span>
          <h2 class="section-h2">Customer <em>Waiver</em></h2>
          <p class="section-intro" style="margin-top: 18px">
            By booking a place, you acknowledge and agree to the following
            terms.
          </p>
          <div class="accordion">
            <div class="acc-item">
              <button class="acc-trigger">
                <span class="acc-trigger-title"
                  >Voluntary participation &amp; inherent risks</span
                >
                <span class="acc-icon"
                  ><svg viewBox="0 0 10 10">
                    <line x1="5" y1="1" x2="5" y2="9" />
                    <line x1="1" y1="5" x2="9" y2="5" /></svg
                ></span>
              </button>
              <div class="acc-body">
                <p>
                  Before participating in this or any other exercise program,
                  individuals should consult with a physician. I acknowledge
                  that I have voluntarily chosen to participate in the yoga
                  class, workshop, training, event, or activity sponsored by The
                  Shala School of Yoga, and that participation involves inherent
                  risks including physical strain, emotional discomfort and
                  mental introspection.
                </p>
              </div>
            </div>
            <div class="acc-item">
              <button class="acc-trigger">
                <span class="acc-trigger-title">Personal responsibility</span>
                <span class="acc-icon"
                  ><svg viewBox="0 0 10 10">
                    <line x1="5" y1="1" x2="5" y2="9" />
                    <line x1="1" y1="5" x2="9" y2="5" /></svg
                ></span>
              </button>
              <div class="acc-body">
                <p>
                  I acknowledge that I am solely responsible for my own health
                  and well-being during the course of the program. I agree to
                  listen to my body, communicate any discomfort or limitations
                  to the instructor, and modify or abstain from activities as
                  necessary.
                </p>
                <p>
                  I understand that the School may incorporate exercises aimed
                  at exploring personal experiences, emotions, and beliefs. I
                  acknowledge that the instructors are not licensed therapists
                  or mental health professionals and that I should seek
                  professional guidance if I require support beyond the scope of
                  the yoga program.
                </p>
              </div>
            </div>
            <div class="acc-item">
              <button class="acc-trigger">
                <span class="acc-trigger-title">Release of liability</span>
                <span class="acc-icon"
                  ><svg viewBox="0 0 10 10">
                    <line x1="5" y1="1" x2="5" y2="9" />
                    <line x1="1" y1="5" x2="9" y2="5" /></svg
                ></span>
              </button>
              <div class="acc-body">
                <p>
                  In consideration for being permitted to participate, I agree
                  that I, my heirs, assignees, guardians and legal
                  representatives will not make any claim against, sue, or
                  attach the property of any of the hosts, instructors,
                  organizers, or participants for injury, emotional distress or
                  any other damage resulting from my participation. I release
                  all such parties from any and all actions, causes of action,
                  lawsuits, claims, or demands.
                </p>
              </div>
            </div>
            <div class="acc-item">
              <button class="acc-trigger">
                <span class="acc-trigger-title">Pregnant students</span>
                <span class="acc-icon"
                  ><svg viewBox="0 0 10 10">
                    <line x1="5" y1="1" x2="5" y2="9" />
                    <line x1="1" y1="5" x2="9" y2="5" /></svg
                ></span>
              </button>
              <div class="acc-body">
                <p>
                  If I am pregnant, I understand that it is my responsibility to
                  consult with a physician before participation in any
                  activities. The Shala School of Yoga does not recommend
                  practising before 12 weeks and advises that I notify all
                  teacher(s) of my pregnancy. I participate fully at my own risk
                  and the risk of my child/children.
                </p>
              </div>
            </div>
            <div class="acc-item">
              <button class="acc-trigger">
                <span class="acc-trigger-title">Medical conditions</span>
                <span class="acc-icon"
                  ><svg viewBox="0 0 10 10">
                    <line x1="5" y1="1" x2="5" y2="9" />
                    <line x1="1" y1="5" x2="9" y2="5" /></svg
                ></span>
              </button>
              <div class="acc-body">
                <p>
                  If I am suffering from or have suffered from a medical
                  condition (including heart condition, chest pains, dizziness,
                  high blood pressure) or a serious injury, I understand I have
                  been advised to first consult my doctor before joining
                  classes.
                </p>
              </div>
            </div>
            <div class="acc-item">
              <button class="acc-trigger">
                <span class="acc-trigger-title">Mental health disclosure</span>
                <span class="acc-icon"
                  ><svg viewBox="0 0 10 10">
                    <line x1="5" y1="1" x2="5" y2="9" />
                    <line x1="1" y1="5" x2="9" y2="5" /></svg
                ></span>
              </button>
              <div class="acc-body">
                <p>
                  For teacher trainings, I understand that it is my
                  responsibility to provide full transparency regarding any past
                  and present mental health issues.
                </p>
              </div>
            </div>
            <div class="acc-item">
              <button class="acc-trigger">
                <span class="acc-trigger-title">Under 18s</span>
                <span class="acc-icon"
                  ><svg viewBox="0 0 10 10">
                    <line x1="5" y1="1" x2="5" y2="9" />
                    <line x1="1" y1="5" x2="9" y2="5" /></svg
                ></span>
              </button>
              <div class="acc-body">
                <p>
                  If the account is for a person under the age of 18, I confirm
                  that the contact details given are for someone over 18.
                </p>
              </div>
            </div>

            <div class="acc-item">
              <button class="acc-trigger">
                <span class="acc-trigger-title">Email notifications</span>
                <span class="acc-icon"
                  ><svg viewBox="0 0 10 10">
                    <line x1="5" y1="1" x2="5" y2="9" />
                    <line x1="1" y1="5" x2="9" y2="5" /></svg
                ></span>
              </button>
              <div class="acc-body">
                <p>
                  By entering into this agreement, I agree to receive email
                  notifications confirming information on my purchases,
                  bookings, class reminders, pass expirations and cancellations.
                </p>
              </div>
            </div>

            <div class="acc-item">
              <button class="acc-trigger">
                <span class="acc-trigger-title">Photography &amp; filming</span>
                <span class="acc-icon"
                  ><svg viewBox="0 0 10 10">
                    <line x1="5" y1="1" x2="5" y2="9" />
                    <line x1="1" y1="5" x2="9" y2="5" /></svg
                ></span>
              </button>
              <div class="acc-body">
                <p>
                  The Shala School of Yoga reserves the right to photograph or
                  film during classes, workshops, trainings and events for
                  marketing purposes. It is my responsibility to make myself
                  known should I not wish to be photographed or filmed.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- CTA -->
      <section class="cta-band">
        <div class="page-wrap" style="max-width: 900px">
          <h2 class="cta-h2">We're happy to <em>help</em></h2>
          <p class="cta-sub">
            If anything isn't clear, please don't hesitate to get in touch
            before booking.
          </p>
          <div class="cta-buttons">
            <a href="mailto:teachertraining@theshala.co.uk" class="btn-white"
              >Contact Us</a
            >
            <a href="#" class="btn-ghost-w">Course FAQs</a>
          </div>
        </div>
      </section>
    </main>

<?php get_footer(); ?>