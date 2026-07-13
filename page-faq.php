<?php
/*
Template Name: FAQ
*/
get_header();

$hero_title = get_field('hero_title');
$hero_subtitle = get_field('hero_subtitle');
?>

<main id="main-content">
      <!-- HERO -->

      <section class="hero-utility bg-light-plum text-on-dark">
        <img
          class="hero-utility-spiral"
          src="<?php echo esc_url(get_template_directory_uri() . '/assets/spirals/spiral-3-cropped.png'); ?>"
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

      <!-- JUMP NAV -->
      <div class="orange-rule"></div>
      <nav class="page-jumpnav" aria-label="Page sections">
        <a href="#faq-general">General FAQs</a>
        <a href="#faq-200hr">200-Hour FAQs</a>
        <a href="#faq-300hr">300-Hour FAQs</a>
        <a href="#faq-modules">Module FAQs</a>
        <a href="#yoga-alliance">Yoga Alliance FAQs</a>
        <a href="#cpd">Yoga Alliance CPD Requirements</a>
      </nav>

      <!-- GENERAL FAQs -->
      <div class="section-band bg-chalk" id="faq-general">
        <div class="page-wrap">
          <h2 class="section-h2-hidden">General frequently asked questions</h2>
          <span class="section-eyebrow">General FAQs</span>
          <p class="section-h2">General Frequently Asked <em>Questions</em></p>
          <div class="accordion">
            <div class="acc-item">
              <button class="acc-trigger">
                <span class="acc-trigger-title"
                  >What are the Shala School of Yoga terms and conditions?</span
                >
                <span class="acc-icon"
                  ><svg viewBox="0 0 10 10">
                    <line x1="5" y1="1" x2="5" y2="9" />
                    <line x1="1" y1="5" x2="9" y2="5" /></svg
                ></span>
              </button>
              <div class="acc-body">
                <p>
                  Trainings at the Shala School of Yoga are run independently by
                  the teacher and all payments for training services are
                  accepted on behalf of the individual teachers. Please
                  <a href="/terms-and-conditions"
                    >read our Terms &amp; Conditions</a
                  >
                  for full information on cancellations, refunds and our
                  complaints procedure.
                </p>
              </div>
            </div>

            <div class="acc-item">
              <button class="acc-trigger">
                <span class="acc-trigger-title">Is the course accredited?</span>
                <span class="acc-icon"
                  ><svg viewBox="0 0 10 10">
                    <line x1="5" y1="1" x2="5" y2="9" />
                    <line x1="1" y1="5" x2="9" y2="5" /></svg
                ></span>
              </button>
              <div class="acc-body">
                <p>
                  Yes. We are a Registered Yoga School (RYS) with Yoga Alliance
                  (US) and are accredited to run 200- and 300-hour trainings. On
                  completion of your 300 hours you will receive a 300-hour Level
                  2 certificate accredited by the Yoga Alliance.
                </p>
              </div>
            </div>

            <div class="acc-item">
              <button class="acc-trigger">
                <span class="acc-trigger-title">Do you offer bursaries?</span>
                <span class="acc-icon"
                  ><svg viewBox="0 0 10 10">
                    <line x1="5" y1="1" x2="5" y2="9" />
                    <line x1="1" y1="5" x2="9" y2="5" /></svg
                ></span>
              </button>
              <div class="acc-body">
                <p>
                  Yes. As part of our commitment to inclusivity and creating
                  positive change, the Shala School of Yoga offers a 50% bursary
                  on each of our modules for those from marginalised groups,
                  vulnerable groups and/or those from currently
                  under-represented ethnic groups within the yoga and wellness
                  industry. Early applications are recommended — a decision is
                  usually made 6 weeks prior to the course starting.
                </p>
                <p>
                  <a href="/bursaries"
                    >Find out about eligibility criteria and how to apply →</a
                  >
                </p>
              </div>
            </div>

            <div class="acc-item">
              <button class="acc-trigger">
                <span class="acc-trigger-title"
                  >Do you offer financial support if I am not eligible for a
                  bursary?</span
                >
                <span class="acc-icon"
                  ><svg viewBox="0 0 10 10">
                    <line x1="5" y1="1" x2="5" y2="9" />
                    <line x1="1" y1="5" x2="9" y2="5" /></svg
                ></span>
              </button>
              <div class="acc-body">
                <p>
                  Sometimes we can offer additional financial support. If you
                  are unable to attend a course due to financial circumstances,
                  please email us explaining your situation, why you wish to do
                  the course and what you can afford — we may be able to offer a
                  discount.
                </p>
              </div>
            </div>

            <div class="acc-item">
              <button class="acc-trigger">
                <span class="acc-trigger-title"
                  >Can you offer extended payment plans?</span
                >
                <span class="acc-icon"
                  ><svg viewBox="0 0 10 10">
                    <line x1="5" y1="1" x2="5" y2="9" />
                    <line x1="1" y1="5" x2="9" y2="5" /></svg
                ></span>
              </button>
              <div class="acc-body">
                <p>
                  Yes. We can set payment plans up in a way that works for you.
                  If you need an extended payment plan, please
                  <a href="mailto:teachertraining@theshala.co.uk">email us</a>
                  stating your needs and we will do what we can to accommodate
                  this. Full payment does need to be made by the start of the
                  course.
                </p>
              </div>
            </div>

            <div class="acc-item">
              <button class="acc-trigger">
                <span class="acc-trigger-title">How are payments made?</span>
                <span class="acc-icon"
                  ><svg viewBox="0 0 10 10">
                    <line x1="5" y1="1" x2="5" y2="9" />
                    <line x1="1" y1="5" x2="9" y2="5" /></svg
                ></span>
              </button>
              <div class="acc-body">
                <ul>
                  <li>
                    Payments are preferably made by Bank Transfer (BACS Direct
                    Debit) at checkout.
                  </li>
                  <li>
                    Alternatively you can opt for credit or debit card, which
                    incurs higher banking charges for us.
                  </li>
                  <li>
                    A deposit is required for registration onto each course.
                  </li>
                  <li>Personalised payment plans are available on request.</li>
                  <li>
                    All course payments should be paid in full by the start of
                    each course.
                  </li>
                </ul>
              </div>
            </div>

            <div class="acc-item">
              <button class="acc-trigger">
                <span class="acc-trigger-title"
                  >If I miss part of the training due to unforeseen
                  circumstances, can I still get certified?</span
                >
                <span class="acc-icon"
                  ><svg viewBox="0 0 10 10">
                    <line x1="5" y1="1" x2="5" y2="9" />
                    <line x1="1" y1="5" x2="9" y2="5" /></svg
                ></span>
              </button>
              <div class="acc-body">
                <p>
                  For your own learning and growth, we strongly encourage you to
                  attend all parts of the training live. When for reasons
                  outside your control this has not been possible, we will
                  discuss this on a case-by-case basis. Sometimes catch-up
                  recordings are made available, or if required, 1-1 sessions
                  can be arranged at an additional fee.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="section-divider"></div>

      <!-- 200-HR FAQs -->
      <div class="section-band bg-linen" id="faq-200hr">
        <div class="page-wrap">
          <h2 class="section-h2-hidden">200-hour questions</h2>
          <span class="section-eyebrow">200-Hour FAQs</span>
          <div class="section-h2-row">
            <p class="section-h2">200-Hour <em>Questions</em></p>
            <!-- TODO: add Yoga Alliance RYS 200 logo once available -->
              <img
                  src="<?php echo esc_url(get_template_directory_uri() . '/assets/logos/rys200-logo.png'); ?>"
                  alt="Yoga Alliance RYS 300 Accredited"
                  class="prog-logo section-h2-logo"
              >
          </div>
          <div class="accordion">
            <div class="acc-item">
              <button class="acc-trigger">
                <span class="acc-trigger-title"
                  >When does the 200-hour course run?</span
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
                    The 200-hour programme runs annually from September to
                    March, with a graduation day in early May.
                  </li>
                  <li>
                    The course takes place over seven 3-day weekends in our West
                    Norwood studio (typically Saturday–Monday, 10am–6pm), plus
                    livestream and on-demand sessions for anatomy and
                    philosophy.
                  </li>
                  <li>
                    Full course dates are published on the
                    <a href="/200-hour">200-hour course page</a>.
                  </li>
                </ul>
              </div>
            </div>

            <div class="acc-item">
              <button class="acc-trigger">
                <span class="acc-trigger-title"
                  >Do you run an Open Day for the 200-hour course?</span
                >
                <span class="acc-icon"
                  ><svg viewBox="0 0 10 10">
                    <line x1="5" y1="1" x2="5" y2="9" />
                    <line x1="1" y1="5" x2="9" y2="5" /></svg
                ></span>
              </button>
              <div class="acc-body">
                <p>
                  Yes — we run two free Open Days each year for the 200-hour
                  course and highly recommend attending one if you can. It's a
                  chance to meet the lead teachers, get a feel for the studio
                  and ask any questions in person.
                </p>
                <p>
                  If the dates don't suit, you can also email us to request a
                  call with the Teacher Training Manager to discuss the course
                  in more detail.
                </p>
              </div>
            </div>

            <div class="acc-item">
              <button class="acc-trigger">
                <span class="acc-trigger-title"
                  >Can I arrange a call to discuss the course?</span
                >
                <span class="acc-icon"
                  ><svg viewBox="0 0 10 10">
                    <line x1="5" y1="1" x2="5" y2="9" />
                    <line x1="1" y1="5" x2="9" y2="5" /></svg
                ></span>
              </button>
              <div class="acc-body">
                <p>
                  Yes — we're always happy to chat. If you'd like to discuss the
                  course in more detail, please email us with your phone number
                  and a few convenient times, and our Teacher Training Manager
                  will be in touch to arrange a call.
                </p>
              </div>
            </div>

            <div class="acc-item">
              <button class="acc-trigger">
                <span class="acc-trigger-title"
                  >What is the application process?</span
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
                    Submit your full application form via the link on the
                    200-hour course page. We aim to respond within 7 days.
                  </li>
                  <li>
                    Early applications are highly recommended as the course is
                    usually oversubscribed.
                  </li>
                  <li>
                    The application deadline is 30 June for the September
                    intake.
                  </li>
                  <li>
                    On acceptance, you'll be invited to set up a payment plan
                    and pay the deposit to confirm your place.
                  </li>
                </ul>
              </div>
            </div>

            <div class="acc-item">
              <button class="acc-trigger">
                <span class="acc-trigger-title"
                  >What are the entry requirements?</span
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
                    A regular and committed asana practice of at least three
                    years, ideally with a vinyasa background.
                  </li>
                  <li>A recommendation from your main teacher.</li>
                  <li>
                    Some understanding of yoga beyond a purely physical
                    practice.
                  </li>
                  <li>
                    Successful applicants should be in good mental and physical
                    health and have stable personal circumstances.
                  </li>
                </ul>
              </div>
            </div>

            <div class="acc-item">
              <button class="acc-trigger">
                <span class="acc-trigger-title"
                  >How much does the 200-hour course cost?</span
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
                    £3,250 total course fee, with payment plans available.
                  </li>
                  <li>
                    £25 application fee (deducted from the course fee on
                    acceptance).
                  </li>
                  <li>£825 non-refundable deposit on acceptance.</li>
                  <li>
                    Remaining balance paid in three monthly instalments of £800.
                  </li>
                  <li>
                    Fees include the course manual, all training, assessment and
                    certification.
                  </li>
                  <li>
                    While enrolled, you'll receive a 20% concession on single
                    classes, class packs and most workshops at Vahni @ the
                    Shala.
                  </li>
                </ul>
              </div>
            </div>

            <div class="acc-item">
              <button class="acc-trigger">
                <span class="acc-trigger-title"
                  >How is the course structured?</span
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
                    <strong>In-studio:</strong> 186 hours across seven 3-day
                    weekends.
                  </li>
                  <li>
                    <strong>Blended learning:</strong> 9 hours of livestream
                    sessions, plus pre-recorded philosophy and anatomy content.
                  </li>
                  <li>
                    <strong>1-1 mentoring:</strong> online sessions via Zoom to
                    help prepare for your final teaching assessment.
                  </li>
                  <li>
                    <strong>Coursework:</strong> approximately 60–70 non-contact
                    hours, with 8–10 hours expected each month.
                  </li>
                </ul>
              </div>
            </div>

            <div class="acc-item">
              <button class="acc-trigger">
                <span class="acc-trigger-title"
                  >How is the course assessed?</span
                >
                <span class="acc-icon"
                  ><svg viewBox="0 0 10 10">
                    <line x1="5" y1="1" x2="5" y2="9" />
                    <line x1="1" y1="5" x2="9" y2="5" /></svg
                ></span>
              </button>
              <div class="acc-body">
                <p>
                  Assessment is continuous throughout the course and culminates
                  in a 1-hour final practical assessment, in which you teach a
                  small group class (10–12 students) in a style of your choice.
                  You'll receive detailed verbal feedback after your assessment.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="section-divider"></div>

      <!-- 300-HR FAQs -->
      <div class="section-band bg-chalk" id="faq-300hr">
        <div class="page-wrap">
          <h2 class="section-h2-hidden">300-hour questions</h2>
          <span class="section-eyebrow">300-Hour FAQs</span>
          <div class="section-h2-row">
            <p class="section-h2">300-Hour <em>Questions</em></p>
            <!-- TODO: add Yoga Alliance RYS 300 logo once available -->
              <img
                  src="<?php echo esc_url(get_template_directory_uri() . '/assets/logos/rys300-logo.png'); ?>"
                  alt="Yoga Alliance RYS 300 Accredited"
                  class="section-h2-logo"
              >
          </div>
          <div class="accordion">
            <div class="acc-item">
              <button class="acc-trigger">
                <span class="acc-trigger-title"
                  >What are the requirements to join the 300-hour
                  programme?</span
                >
                <span class="acc-icon"
                  ><svg viewBox="0 0 10 10">
                    <line x1="5" y1="1" x2="5" y2="9" />
                    <line x1="1" y1="5" x2="9" y2="5" /></svg
                ></span>
              </button>
              <div class="acc-body">
                <ul>
                  <li>A 200-hour certification is a pre-requisite.</li>
                  <li>
                    Your 200-hour certificate can be with another training
                    school.
                  </li>
                  <li>
                    You should be currently teaching or planning to teach.
                  </li>
                  <li>You should have a regular personal yoga practice.</li>
                </ul>
              </div>
            </div>

            <div class="acc-item">
              <button class="acc-trigger">
                <span class="acc-trigger-title"
                  >How do I apply for the programme?</span
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
                    <a href="/300-hour"
                      >Fill in the application form on the 300-hour page →</a
                    >
                  </li>
                  <li>
                    You will receive confirmation of your place, usually within
                    5 days.
                  </li>
                  <li>
                    For each individual module you choose, sign up via the
                    individual course page.
                  </li>
                </ul>
              </div>
            </div>

            <div class="acc-item">
              <button class="acc-trigger">
                <span class="acc-trigger-title"
                  >What is the total cost of the 300-hour programme?</span
                >
                <span class="acc-icon"
                  ><svg viewBox="0 0 10 10">
                    <line x1="5" y1="1" x2="5" y2="9" />
                    <line x1="1" y1="5" x2="9" y2="5" /></svg
                ></span>
              </button>
              <div class="acc-body">
                <p>
                  The total cost will range from £3,900 upwards and will vary
                  depending on your final module selection. Check our
                  <a href="/yoga-teacher-training-calendar">course calendar</a>
                  for an overview of all courses and prices.
                </p>
              </div>
            </div>

            <div class="acc-item">
              <button class="acc-trigger">
                <span class="acc-trigger-title"
                  >How do 300-hour students get the 10% teacher training
                  discount?</span
                >
                <span class="acc-icon"
                  ><svg viewBox="0 0 10 10">
                    <line x1="5" y1="1" x2="5" y2="9" />
                    <line x1="1" y1="5" x2="9" y2="5" /></svg
                ></span>
              </button>
              <div class="acc-body">
                <p>
                  300-hour students receive a 10% discount after they have
                  booked Enhanced Skills | 300hr Core Module + 2 Shala trainings
                  priced at £395 or above. Book further courses as usual, then
                  email us and the discount will be applied manually to the
                  balance.
                </p>
              </div>
            </div>

            <div class="acc-item">
              <button class="acc-trigger">
                <span class="acc-trigger-title"
                  >Do all modules need to be done with the Shala School of
                  Yoga?</span
                >
                <span class="acc-icon"
                  ><svg viewBox="0 0 10 10">
                    <line x1="5" y1="1" x2="5" y2="9" />
                    <line x1="1" y1="5" x2="9" y2="5" /></svg
                ></span>
              </button>
              <div class="acc-body">
                <p>
                  Yes. All modules need to be done with the Shala School of Yoga
                  or Yoga Treat in order to count towards the 300-hour
                  programme.
                </p>
              </div>
            </div>

            <div class="acc-item">
              <button class="acc-trigger">
                <span class="acc-trigger-title"
                  >Do on-demand courses count towards my 300 hours?</span
                >
                <span class="acc-icon"
                  ><svg viewBox="0 0 10 10">
                    <line x1="5" y1="1" x2="5" y2="9" />
                    <line x1="1" y1="5" x2="9" y2="5" /></svg
                ></span>
              </button>
              <div class="acc-body">
                <p>
                  Courses which are on-demand only can be allocated as CPD hours
                  only — they cannot be counted towards your 300-hour programme.
                  You will generally have access to on-demand material for 3
                  months.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="section-divider"></div>

      <!-- MODULE FAQs -->
      <div class="section-band bg-linen" id="faq-modules">
        <div class="page-wrap">
          <h2 class="section-h2-hidden">Module questions</h2>
          <span class="section-eyebrow">Module FAQs</span>
          <div class="section-h2-row">
            <p class="section-h2">Module <em>Questions</em></p>
            <!-- TODO: add Yoga Alliance YACEP logo once available -->
              <img
                  src="<?php echo esc_url(get_template_directory_uri() . '/assets/logos/yacep-logo.png'); ?>"
                  alt="Yoga Alliance RYS 300 Accredited"
                  class="prog-logo section-h2-logo"
              >
          </div>
          <div class="accordion">
            <div class="acc-item">
              <button class="acc-trigger">
                <span class="acc-trigger-title"
                  >Are the modules accredited?</span
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
                    The Shala School of Yoga is a Registered Yoga School (RYS)
                    with Yoga Alliance (US), accredited to run 200- and 300-hour
                    trainings.
                  </li>
                  <li>
                    For most modules you will receive a certificate which can be
                    used for CPD hours.
                  </li>
                  <li>
                    If the individual teacher is YACEP registered, you can also
                    register your hours via the individual teacher's profile on
                    Yoga Alliance.
                  </li>
                </ul>
              </div>
            </div>

            <div class="acc-item">
              <button class="acc-trigger">
                <span class="acc-trigger-title"
                  >Can a module be taken as a stand-alone CPD or as part of the
                  300-hour programme?</span
                >
                <span class="acc-icon"
                  ><svg viewBox="0 0 10 10">
                    <line x1="5" y1="1" x2="5" y2="9" />
                    <line x1="1" y1="5" x2="9" y2="5" /></svg
                ></span>
              </button>
              <div class="acc-body">
                <p>
                  Most of our modules can be taken either as a stand-alone CPD
                  or as an elective 300-hour module. If the YACEP logo appears
                  on the module page, the course holds YACEP CPD teacher
                  accreditation.
                </p>
              </div>
            </div>

            <div class="acc-item">
              <button class="acc-trigger">
                <span class="acc-trigger-title"
                  >Do I need a 200-hour qualification to do a CPD module?</span
                >
                <span class="acc-icon"
                  ><svg viewBox="0 0 10 10">
                    <line x1="5" y1="1" x2="5" y2="9" />
                    <line x1="1" y1="5" x2="9" y2="5" /></svg
                ></span>
              </button>
              <div class="acc-body">
                <p>
                  It is beneficial to have a 200-hour yoga teacher training
                  foundation when joining any of our modules. However, courses
                  are often suited to those working in non-yoga professional
                  settings or seeking personal development. Please get in touch
                  if you'd like to check whether a specific course is suitable
                  for you.
                </p>
                <p>
                  <strong>Note:</strong> The Advanced Teaching Skills Core
                  module is not suitable for anyone without a 200-hour
                  certificate.
                </p>
              </div>
            </div>

            <div class="acc-item">
              <button class="acc-trigger">
                <span class="acc-trigger-title"
                  >If I complete a module, am I qualified to teach?</span
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
                    In most cases, yes — if you have a 200-hour yoga teaching
                    qualification.
                  </li>
                  <li>
                    If you do not have a 200-hour qualification, you can teach
                    in informal settings, but you will not officially be
                    qualified to teach yoga without the foundational course.
                  </li>
                </ul>
              </div>
            </div>

            <div class="acc-item">
              <button class="acc-trigger">
                <span class="acc-trigger-title"
                  >If I miss some of the course, will I still get a
                  certificate?</span
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
                    100% attendance is usually required to receive a full
                    certificate.
                  </li>
                  <li>
                    A minimum of 75% attendance is usually required to receive a
                    certificate of completion.
                  </li>
                </ul>
              </div>
            </div>

            <div class="acc-item">
              <button class="acc-trigger">
                <span class="acc-trigger-title"
                  >How do I register hours for CPD / YACEP?</span
                >
                <span class="acc-icon"
                  ><svg viewBox="0 0 10 10">
                    <line x1="5" y1="1" x2="5" y2="9" />
                    <line x1="1" y1="5" x2="9" y2="5" /></svg
                ></span>
              </button>
              <div class="acc-body">
                <p>
                  If you are not allocating a module towards your 300 hours, you
                  can register individual modules for CPD hours through Yoga
                  Alliance. If the course page shows the YACEP logo, register
                  the hours through the lead teacher's profile — not the Shala
                  School of Yoga.
                </p>
              </div>
            </div>

            <div class="acc-item">
              <button class="acc-trigger">
                <span class="acc-trigger-title"
                  >Is there preparatory work or coursework for the
                  modules?</span
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
                    Some modules include preparatory work, reading and homework.
                    Details are given in your Welcome email.
                  </li>
                  <li>
                    Please note there is a
                    <strong>£25 admin fee</strong> charged for late marking of
                    coursework.
                  </li>
                  <li>
                    Certificates will only be issued on submission of all
                    required coursework.
                  </li>
                </ul>
              </div>
            </div>

            <div class="acc-item">
              <button class="acc-trigger">
                <span class="acc-trigger-title">Do I need to bring props?</span>
                <span class="acc-icon"
                  ><svg viewBox="0 0 10 10">
                    <line x1="5" y1="1" x2="5" y2="9" />
                    <line x1="1" y1="5" x2="9" y2="5" /></svg
                ></span>
              </button>
              <div class="acc-body">
                <ul>
                  <li>
                    It is best to bring your own yoga mat, though we have mats
                    to loan if needed.
                  </li>
                  <li>
                    We have blocks, bricks, blankets and bolsters available for
                    use.
                  </li>
                  <li>
                    For some prop-heavy trainings — yin and restorative
                    specifically — you will be asked to bring additional props.
                  </li>
                </ul>
              </div>
            </div>

            <div class="acc-item">
              <button class="acc-trigger">
                <span class="acc-trigger-title"
                  >I did a module last year, then decided to join the 300-hour
                  programme. Can those hours count?</span
                >
                <span class="acc-icon"
                  ><svg viewBox="0 0 10 10">
                    <line x1="5" y1="1" x2="5" y2="9" />
                    <line x1="1" y1="5" x2="9" y2="5" /></svg
                ></span>
              </button>
              <div class="acc-body">
                <p>
                  Yes, those hours can count towards your 300 hours, as long as
                  you have not already registered them with Yoga Alliance as CPD
                  hours. All courses need to be taken within a 5-year timeframe.
                </p>
              </div>
            </div>

            <div class="acc-item">
              <button class="acc-trigger">
                <span class="acc-trigger-title"
                  >How does it work if I join online?</span
                >
                <span class="acc-icon"
                  ><svg viewBox="0 0 10 10">
                    <line x1="5" y1="1" x2="5" y2="9" />
                    <line x1="1" y1="5" x2="9" y2="5" /></svg
                ></span>
              </button>
              <div class="acc-body">
                <p>
                  For virtual livestream courses, there is plenty of opportunity
                  to ask questions — we include time after every talk for
                  questions, discussion and interaction. For teaching practice,
                  you will be paired with other participants in breakout rooms.
                </p>
                <p>
                  For hybrid courses, all participants — both studio and online
                  — have access to catch-up recordings for 2 weeks.
                </p>
              </div>
            </div>

            <div class="acc-item">
              <button class="acc-trigger">
                <span class="acc-trigger-title"
                  >How long do I have access to on-demand courses?</span
                >
                <span class="acc-icon"
                  ><svg viewBox="0 0 10 10">
                    <line x1="5" y1="1" x2="5" y2="9" />
                    <line x1="1" y1="5" x2="9" y2="5" /></svg
                ></span>
              </button>
              <div class="acc-body">
                <p>
                  You will generally have access to pre-recorded course material
                  for 3 months. Catch-up Zoom videos — if there are any — are
                  available for 2 weeks only. Please check the individual course
                  description for exact details.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="section-divider"></div>

      <!-- YOGA ALLIANCE FAQs -->
      <div class="section-band bg-chalk" id="yoga-alliance">
        <div class="page-wrap">
          <h2 class="section-h2-hidden">Yoga Alliance questions</h2>
          <span class="section-eyebrow">Yoga Alliance FAQs</span>
          <p class="section-h2">Yoga Alliance <em>Questions</em></p>
          <div class="note-banner">
            <p>
              <strong>Please note:</strong> Yoga Alliance regulations and
              requirements do change. This information is provided as guidance
              and you should always check specifics directly with
              <a
                href="https://www.yogaalliance.org"
                target="_blank"
                rel="noopener"
                >Yoga Alliance</a
              >
              for the most current requirements.
            </p>
          </div>
          <div class="accordion">
            <div class="acc-item">
              <button class="acc-trigger">
                <span class="acc-trigger-title"
                  >Should I register my modules with Yoga Alliance after each
                  module?</span
                >
                <span class="acc-icon"
                  ><svg viewBox="0 0 10 10">
                    <line x1="5" y1="1" x2="5" y2="9" />
                    <line x1="1" y1="5" x2="9" y2="5" /></svg
                ></span>
              </button>
              <div class="acc-body">
                <p>
                  <strong
                    >300-hour students should NOT register each module with Yoga
                    Alliance.</strong
                  >
                  Registration happens once you have completed all your modules
                  and received your final RYS 300 certificate.
                </p>
                <p>
                  Important: if you register individual modules as YACEP (CPD
                  hours), you will not then be able to use those hours towards
                  your 300-hour certification.
                </p>
              </div>
            </div>

            <div class="acc-item">
              <button class="acc-trigger">
                <span class="acc-trigger-title"
                  >Will my details be shared with Yoga Alliance?</span
                >
                <span class="acc-icon"
                  ><svg viewBox="0 0 10 10">
                    <line x1="5" y1="1" x2="5" y2="9" />
                    <line x1="1" y1="5" x2="9" y2="5" /></svg
                ></span>
              </button>
              <div class="acc-body">
                <p>
                  As a student of our training course, you consent to your
                  contact details being passed to Yoga Alliance US so they can
                  invite you to register. You have the option to opt out — it
                  does not invalidate your certification.
                </p>
              </div>
            </div>

            <div class="acc-item">
              <button class="acc-trigger">
                <span class="acc-trigger-title"
                  >What is the difference between Yoga Alliance (USA) and Yoga
                  Alliance Professionals (UK)?</span
                >
                <span class="acc-icon"
                  ><svg viewBox="0 0 10 10">
                    <line x1="5" y1="1" x2="5" y2="9" />
                    <line x1="1" y1="5" x2="9" y2="5" /></svg
                ></span>
              </button>
              <div class="acc-body">
                <p>
                  Both are governing bodies that set standards within the
                  industry. We have chosen to affiliate with Yoga Alliance (USA)
                  as it is far more widely recognised internationally.
                </p>
              </div>
            </div>

            <div class="acc-item">
              <button class="acc-trigger">
                <span class="acc-trigger-title"
                  >My 200-hour is registered with Yoga Alliance (USA) — can I
                  register as RYT-500 after my 300 hours?</span
                >
                <span class="acc-icon"
                  ><svg viewBox="0 0 10 10">
                    <line x1="5" y1="1" x2="5" y2="9" />
                    <line x1="1" y1="5" x2="9" y2="5" /></svg
                ></span>
              </button>
              <div class="acc-body">
                <p>
                  Yes. Log into Yoga Alliance and upload details of your
                  300-hour qualification. You can then combine your 200-hour and
                  300-hour and register as RYT-500 once you have completed 100
                  hours of teaching after your course.
                </p>
              </div>
            </div>

            <div class="acc-item">
              <button class="acc-trigger">
                <span class="acc-trigger-title"
                  >My 200-hour is registered with Yoga Alliance Professionals
                  (UK) — can I register as RYT-500?</span
                >
                <span class="acc-icon"
                  ><svg viewBox="0 0 10 10">
                    <line x1="5" y1="1" x2="5" y2="9" />
                    <line x1="1" y1="5" x2="9" y2="5" /></svg
                ></span>
              </button>
              <div class="acc-body">
                <p>
                  Studios will consider you a 500-hour qualified teacher.
                  However, if your 200-hour and 300-hour qualifications are with
                  two different governing bodies, you cannot combine them to
                  register as a 500-hour teacher with Yoga Alliance (USA).
                </p>
              </div>
            </div>

            <div class="acc-item">
              <button class="acc-trigger">
                <span class="acc-trigger-title"
                  >Do I need insurance with Yoga Alliance (USA) if I'm already
                  insured with Yoga Alliance Professionals (UK)?</span
                >
                <span class="acc-icon"
                  ><svg viewBox="0 0 10 10">
                    <line x1="5" y1="1" x2="5" y2="9" />
                    <line x1="1" y1="5" x2="9" y2="5" /></svg
                ></span>
              </button>
              <div class="acc-body">
                <p>
                  No — you only need one insurance policy, and this can be with
                  any insurers. You may also wish to look at other providers
                  such as Towergate and Balens.
                </p>
              </div>
            </div>

            <div class="acc-item">
              <button class="acc-trigger">
                <span class="acc-trigger-title"
                  >I haven't yet registered my 200-hour training — what do I
                  need to do to gain RYT-500 status?</span
                >
                <span class="acc-icon"
                  ><svg viewBox="0 0 10 10">
                    <line x1="5" y1="1" x2="5" y2="9" />
                    <line x1="1" y1="5" x2="9" y2="5" /></svg
                ></span>
              </button>
              <div class="acc-body">
                <p>
                  You can register your trainings with Yoga Alliance at any
                  point. Simply register both your 200 and your 300 hours with
                  Yoga Alliance to obtain 500-hour status. Please check directly
                  with Yoga Alliance for current requirements on
                  post-qualification teaching hours and CPD.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="section-divider"></div>

      <!-- CPD REQUIREMENTS -->
      <div class="section-band bg-linen" id="cpd">
        <div class="page-wrap">
          <h2 class="section-h2-hidden">Yoga Alliance CPD requirements</h2>
          <span class="section-eyebrow">Yoga Alliance CPD Requirements</span>
          <p class="section-h2">Yoga Alliance CPD <em>Requirements</em></p>

          <div class="cpd-intro-grid">
            <div>
              <p class="section-intro">
                We are a Registered Yoga School (RYS) with Yoga Alliance (USA),
                the largest internationally recognised yoga accreditation body.
                To maintain their credentials, all Registered Yoga Teachers
                (RYTs) are required to complete 75 hours of Continuing Education
                (CE) — also known as CPD — within the first three years of
                registration.
              </p>
              <div class="cpd-req-list">
                <div class="cpd-req-item">
                  <span class="cpd-req-num">45</span>
                  <div class="cpd-req-body">
                    <div class="cpd-req-title">Hours of teaching yoga</div>
                    <div class="cpd-req-desc">
                      Logged teaching hours with students form the foundation of
                      your renewal requirement.
                    </div>
                  </div>
                </div>
                <div class="cpd-req-item">
                  <span class="cpd-req-num">30</span>
                  <div class="cpd-req-body">
                    <div class="cpd-req-title">Hours of further training</div>
                    <div class="cpd-req-desc">
                      In one or more of the four Yoga Alliance educational
                      categories — see below. All of our trainings are eligible
                      for these hours.
                    </div>
                  </div>
                </div>
              </div>
              <div class="info-box">
                <p>
                  All CPD hours must be logged through your Yoga Alliance
                  membership account. Visit the
                  <a
                    href="https://www.yogaalliance.org"
                    target="_blank"
                    rel="noopener"
                    >Yoga Alliance website</a
                  >
                  for full information on logging hours and to search for
                  qualified YACEP providers.
                </p>
              </div>
            </div>
            <div>
              <p
                style="
                  font-family: &quot;Cormorant Garamond&quot;, serif;
                  font-size: 18px;
                  line-height: 1.78;
                  color: var(--charcoal-plum);
                  margin-bottom: 24px;
                "
              >
                We understand that meeting ongoing registration requirements can
                sometimes feel like a burden — but our CPD modules are designed
                to be a profoundly enriching experience. It's a chance to
                refresh your inspiration, build new skills and reconnect with a
                wider teaching community.
              </p>
              <p
                style="
                  font-family: &quot;Cormorant Garamond&quot;, serif;
                  font-size: 18px;
                  line-height: 1.78;
                  color: var(--charcoal-plum);
                "
              >
                Your 30 hours of required CPD training can be completed in
                person at our London studio, online from anywhere in the world,
                or through a flexible hybrid model.
              </p>
              <div class="pull-quote" style="margin-top: 32px">
                <p class="pull-quote-text">
                  "In a profession that can sometimes feel isolating, CPD
                  provides opportunities for connection, collaboration and
                  growth."
                </p>
              </div>
              <a
                href="/cpds"
                style="
                  display: inline-block;
                  margin-top: 4px;
                  font-family: &quot;Jost&quot;, sans-serif;
                  font-size: 11px;
                  letter-spacing: 0.14em;
                  text-transform: uppercase;
                  color: var(--pink);
                  text-decoration: none;
                  border-bottom: 1px solid rgba(212, 0, 98, 0.3);
                  padding-bottom: 2px;
                "
                >Explore all CPD offerings →</a
              >
            </div>
          </div>

          <div class="cpd-cats">
            <div class="cpd-cat cpd-cat-orange">
              <h4>Techniques, Training &amp; Practice</h4>
              <p>
                Deepen your asana, pranayama and meditation knowledge with
                hands-on, embodied learning.
              </p>
            </div>
            <div class="cpd-cat cpd-cat-pink">
              <h4>Teaching Methodology</h4>
              <p>
                Refine how you sequence, cue, hold space and adapt your teaching
                to different students and settings.
              </p>
            </div>
            <div class="cpd-cat cpd-cat-aubergine">
              <h4>Anatomy &amp; Physiology</h4>
              <p>
                Understand how the body moves, heals and responds — taught with
                both intelligence and practical application.
              </p>
            </div>
            <div class="cpd-cat cpd-cat-charcoal">
              <h4>Philosophy, Lifestyle &amp; Ethics</h4>
              <p>
                The deeper currents of yoga — its origins, its ethics and its
                enduring relevance to modern teaching.
              </p>
            </div>
          </div>
        </div>
      </div>

      <!-- CTA BAND -->
      <section class="cta-band">
        <div class="page-wrap">
          <h2 class="cta-h2">We're happy to <em>help</em></h2>
          <p class="cta-sub">
            If anything isn't covered here, or you'd like to talk things through
            before applying, please don't hesitate to get in touch.
          </p>
          <div class="cta-buttons">
            <a href="/contact" class="btn-white">Contact Us</a>
            <a href="/200-hour" class="btn-ghost-w">200-Hour Overview</a>
            <a href="/300-hour" class="btn-ghost-w">300-Hour Overview</a>
          </div>
        </div>
      </section>
    </main>

<?php get_footer(); ?>