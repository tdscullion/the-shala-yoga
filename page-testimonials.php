<?php
/*
Template Name: Testimonials Page
*/

get_header();
?>

<!-- Paste ONLY the <main id="main-content">...</main> section here -->
 <main id="main-content">
      <!-- HERO -->
      <section class="hero-standard bg-pinked-linen text-on-light">
        <div class="hero-standard-inner">
          <img
            class="hero-standard-spiral"
            src="<?php echo esc_url(get_template_directory_uri() . '/assets/spirals/spiral-1-cropped.png'); ?>"
            alt=""
            aria-hidden="true"
          />
          <div class="hero-standard-content">
            <h1>Stories from <em>our community</em></h1>

            <p class="hero-standard-sub">
              Twenty-nine years of teachers, practitioners, and friends. Here
              are some of their reflections.
            </p>
          </div>
        </div>
      </section>
      <!-- FILTER BAR -->
      <div class="t-filter">
        <span class="t-filter-label">Filter by</span>
        <span class="t-filter-chip is-active" data-filter="all">All</span>
        <span class="t-filter-chip" data-filter="200">200-Hour</span>
        <span class="t-filter-chip" data-filter="300">300-Hour</span>
      </div>

      <!-- FEATURED STORIES -->
      <div class="section-head">
        <h2>Featured Stories <em>— in their own words</em></h2>
      </div>

      <section class="featured-body">
        <div class="featured-inner">
          <div class="ed-row" data-category="300">
            <div class="ed-photo">
              <div class="ed-photo-placeholder">R</div>
            </div>
            <div class="ed-content">
              <p class="ed-quote">
                For over 40 years yoga has been one of my main practices — to
                keep me here on earth. I'd thought I'd lost the deeper aspect of
                my practice, and connection with my wisdom mind. I can't even
                begin to describe how we all created a miracle — it's like we
                all drank so deeply from the same well, full of the specific
                food we needed, and let go of the bits that are not serving us
                anymore. May we all light up the world we find ourselves in,
                sharing what light we have from the pool of eternal flame within
                us that never ceases to burn.
              </p>
              <div class="ed-attr">
                <span class="ed-attr-name">Robert W</span
                ><span class="ed-attr-sep">·</span> 300-Hour Graduate
              </div>
            </div>
          </div>

          <div class="ed-row is-right" data-category="300">
            <div class="ed-content">
              <p class="ed-quote">
                From the first module in my Level 2 teacher training — Yoga
                Nidra with Melanie Cooper and Jennie Wadsten — to the final one,
                Asana in Depth with Gingi Lee and Melanie Cooper, it has been
                such a momentous journey and I have relished every second. I
                could never have foreseen how it has changed me both inside and
                out. It's not about the certificate when you reach that
                milestone — it's about what you learn with every step of the
                path. The meaning of the words "Yoga is a journey of the self,
                through the self" in the Bhagavad Gita have never rung true as
                much as they do now.
              </p>
              <div class="ed-attr">
                <span class="ed-attr-name">Kate T</span
                ><span class="ed-attr-sep">·</span> 300-Hour Graduate
              </div>
            </div>
            <div class="ed-photo">
              <img src="assets/images/kate-towers.jpg" alt="Kate T" />
            </div>
          </div>

          <div class="ed-row" data-category="300">
            <div class="ed-photo">
              <img src="assets/images/jamie-tyler.png" alt="Jamie T" />
            </div>
            <div class="ed-content">
              <p class="ed-quote">
                I loved every minute of my 300hr training at The Shala. With
                every module I felt that my knowledge and confidence was
                growing, and that I couldn't wait to introduce the things I was
                learning into my regular classes. It has certainly made me a
                more compassionate and empathetic teacher, and through the care
                and diligence of the teachers I feel much more able to cater for
                a diverse range of students. I now have a much broader range of
                skills which has opened doors to many employment opportunities
                and a deeper connection to my own practice.
              </p>
              <div class="ed-attr">
                <span class="ed-attr-name">Jamie T</span
                ><span class="ed-attr-sep">·</span> 300-Hour Graduate
              </div>
            </div>
          </div>

          <div class="ed-row no-image" data-category="200">
            <div class="ed-content">
              <p class="ed-quote">
                Highlights of the course — the teachers. Gingi's great, kind and
                gentle power. Ella's love and attentiveness. Melanie's coolness
                and clarity. Matthew's magnificent storytelling. Hamish's wise
                words. Charli's epic sound ceremony. Seeing my peers teach.
                Teaching my exam class. All the beautiful added extras — lunches
                together, chatting on the sofa, the studio flowers, books, oils,
                bubbles, nibbles, socks.
              </p>
              <div class="ed-attr">
                <span class="ed-attr-name">Leila S</span
                ><span class="ed-attr-sep">·</span> 200-Hour Graduate
              </div>
            </div>
          </div>

          <div class="ed-row is-right" data-category="200">
            <div class="ed-content">
              <p class="ed-quote">
                Learning from people who have such experience in the yoga world
                on a deeply spiritual level was a gift. The feeling of belonging
                and knowing I was where I needed to be was wonderful. This
                wouldn't have been the case if not for the community and homely
                setting created by the Shala and the invitation to come as I am.
                The course is so well designed — to cover an array of knowledge
                from philosophy to meditation and anatomy as well as the study
                of asana. From day one the teaching cohort were well supported
                and nurtured.
              </p>
              <div class="ed-attr">
                <span class="ed-attr-name">Lydia G</span
                ><span class="ed-attr-sep">·</span> 200-Hour Graduate
              </div>
            </div>
            <div class="ed-photo">
              <img src="assets/images/lydia-g.jpg" alt="Lydia G" />
            </div>
          </div>

          <div class="ed-row" data-category="200">
            <div class="ed-photo">
              <div class="ed-photo-placeholder">J</div>
            </div>
            <div class="ed-content">
              <p class="ed-quote">
                Much more than a 200-hour Yoga Alliance accredited course. It is
                a creative, modern yoga teacher training programme put together
                by the most talented, authentic and experienced yoga teachers.
                The course offers students the clearest view of where the
                evolution of yoga has taken us — from its very origins to the
                philosophy, anatomy, spirituality and evidence-based benefits of
                yoga practice. It is a course that shows you the path, avoids
                the dogma and adapts to the student's individual needs. This is
                a yoga course for a lifetime.
              </p>
              <div class="ed-attr">
                <span class="ed-attr-name">José G</span
                ><span class="ed-attr-sep">·</span> 200-Hour Graduate
              </div>
            </div>
          </div>

          <div class="ed-row is-right" data-category="200">
            <div class="ed-content">
              <p class="ed-quote">
                The Shala is a unique and magical place to practice and study
                yoga. The depth and breadth of knowledge and experience among
                the teachers is extraordinary, and their approachability, warmth
                and passion is exceptional. The teacher training courses and
                CPDs are so beautifully planned and delivered with such
                professionalism — but also taught from the heart, with soul and
                passion. This is, for me, what makes The Shala unrivalled in the
                yoga community.
              </p>
              <div class="ed-attr">
                <span class="ed-attr-name">Juliet W</span
                ><span class="ed-attr-sep">·</span> 200-Hour Graduate
              </div>
            </div>
            <div class="ed-photo">
              <div class="ed-photo-placeholder">J</div>
            </div>
          </div>

          <div class="ed-row" data-category="200">
            <div class="ed-photo">
              <img src="assets/images/bianca-b.jpg" alt="Bianca B" />
            </div>
            <div class="ed-content">
              <p class="ed-quote">
                Words can't capture how amazing my experience doing the 200H
                Yoga Teacher Training course with The Shala was. The quality of
                practical teaching was incredibly high, and there was also a
                great focus on the spiritual and philosophical elements of yoga
                which I really enjoyed. Gingi, Charli and Ella are so warm and
                made the course accessible to a wide variety of practitioners,
                encouraging us to find our unique style. The sense of community
                was incredible and has given me a feeling of huge support and
                confidence to go out into the world and spread the wonders of
                yoga to others.
              </p>
              <div class="ed-attr">
                <span class="ed-attr-name">Bianca B</span
                ><span class="ed-attr-sep">·</span> 200-Hour Graduate
              </div>
            </div>
          </div>

          <div class="ed-row is-right" data-category="200">
            <div class="ed-content">
              <p class="ed-quote">
                This course has truly been life-changing. It was a journey to
                the depth of my soul, opening my mind and my heart. I feel
                incredibly fortunate to have had this opportunity of community,
                connection and personal transformation during such a tumultuous
                year. It was incredibly challenging but even more rewarding. It
                was a privilege to have been guided and nurtured by the team,
                who have an incomparable wealth of knowledge and experience.
                Each teacher and student generously created a space where it
                felt safe to laugh, to cry, to grow, to learn, to teach, to
                love, to share, to connect, to move, to trust, to overcome, to
                believe, to let go, to express, to shine, to simply be. There
                are no words to express how eternally grateful I will be for
                this life-affirming experience.
              </p>
              <div class="ed-attr">
                <span class="ed-attr-name">Zaynah S</span
                ><span class="ed-attr-sep">·</span> 200-Hour Graduate
              </div>
            </div>
            <div class="ed-photo">
              <img src="assets/images/zaynah-s.jpg" alt="Zaynah S" />
            </div>
          </div>
        </div>
      </section>

      <!-- MORE VOICES -->
      <section class="voices-body">
        <div class="voices-inner">
          <div class="section-head" style="padding-top: 0; padding-bottom: 0">
            <h2>More <em>Voices</em></h2>
          </div>
          <div class="voices-grid">
            <div class="voice-card" data-category="200">
              <div class="voice-photo">
                <img src="assets/images/jane-w.jpg" alt="Jane W" />
              </div>
              <div class="voice-text">
                <p class="voice-quote">
                  There are so many benefits to mention, but briefly — it'll
                  deepen your own practice, you'll meet like-minded people, and
                  strong bonds will be formed. Most importantly you'll emerge as
                  a teacher, confident with the material behind you to lead a
                  class, share your knowledge, and keep the flame of yoga alive.
                </p>
                <div class="voice-attr">
                  <span class="voice-attr-name">Jane W</span
                  ><span class="voice-attr-sep">·</span> 200-Hour
                </div>
              </div>
            </div>

            <div class="voice-card" data-category="200">
              <div class="voice-photo">
                <img src="assets/images/ina-n.jpg" alt="Ina N" />
              </div>
              <div class="voice-text">
                <p class="voice-quote">
                  It helped me come out of my shell and share my passion with
                  others — offering a welcoming community and a great
                  opportunity to connect and grow.
                </p>
                <div class="voice-attr">
                  <span class="voice-attr-name">Ina N</span
                  ><span class="voice-attr-sep">·</span> 200-Hour
                </div>
              </div>
            </div>

            <div class="voice-card" data-category="200">
              <div class="voice-photo">
                <img src="assets/images/val-s.jpg" alt="Val S" />
              </div>
              <div class="voice-text">
                <p class="voice-quote">
                  The course was a watershed for me. I have been practising yoga
                  for over twenty years, and was reluctant to pursue teaching.
                  The course gave me confidence and strengthened my love of the
                  practice. I felt that the course had really helped me in my
                  personal development as a human being.
                </p>
                <div class="voice-attr">
                  <span class="voice-attr-name">Val S</span
                  ><span class="voice-attr-sep">·</span> 200-Hour
                </div>
              </div>
            </div>

            <div class="voice-card" data-category="300">
              <div class="voice-photo">
                <img src="assets/images/ewa-h.jpg" alt="Ewa H" />
              </div>
              <div class="voice-text">
                <p class="voice-quote">
                  A truly transformative Level 2 journey. The structure of
                  choosing your own modules allowed me to focus where I needed
                  depth — and the calibre of teaching throughout was
                  extraordinary.
                </p>
                <div class="voice-attr">
                  <span class="voice-attr-name">Ewa H</span
                  ><span class="voice-attr-sep">·</span> 300-Hour
                </div>
              </div>
            </div>

            <div class="voice-card no-image" data-category="both">
              <div class="voice-text">
                <p class="voice-quote">
                  The Shala has provided a beautifully balanced teacher training
                  course and one of the most worthwhile experiences I've ever
                  had. They have created an exceptional learning environment
                  with wonderful teachers whose devotion to the art, science and
                  discipline of yoga is matched by their gift and expertise in
                  teaching it.
                </p>
                <div class="voice-attr">
                  <span class="voice-attr-name">Lesley C</span
                  ><span class="voice-attr-sep">·</span> 200 &amp; 300-Hour
                </div>
              </div>
            </div>

            <div class="voice-card no-image" data-category="200">
              <div class="voice-text">
                <p class="voice-quote">
                  The focus on finding my own voice as a teacher is a gift I
                  will forever be grateful for. Gingi's focus on asana
                  integrity, authenticity, and subtle adjustments has boosted my
                  confidence in listening to my body and trusting the process of
                  daily practice.
                </p>
                <div class="voice-attr">
                  <span class="voice-attr-name">Loren C</span
                  ><span class="voice-attr-sep">·</span> 200-Hour
                </div>
              </div>
            </div>

            <div class="voice-card no-image" data-category="200">
              <div class="voice-text">
                <p class="voice-quote">
                  Life-changing. I knew the Shala's YTT was going to be good —
                  just not how good. The team's compassion, coupled with their
                  unbelievable depth of knowledge and experience, really makes
                  the course.
                </p>
                <div class="voice-attr">
                  <span class="voice-attr-name">Emily S</span
                  ><span class="voice-attr-sep">·</span> 200-Hour
                </div>
              </div>
            </div>

            <div class="voice-card no-image" data-category="200">
              <div class="voice-text">
                <p class="voice-quote">
                  Yoga Teacher Training at The Shala has been a fantastic
                  experience start to finish. The teaching staff are amazing in
                  every sense of the word — their depth of knowledge combined
                  with a playful and caring attitude to learning creates a
                  perfect environment from which to explore the foundations of
                  the practice.
                </p>
                <div class="voice-attr">
                  <span class="voice-attr-name">Tom H</span
                  ><span class="voice-attr-sep">·</span> 200-Hour
                </div>
              </div>
            </div>

            <div class="voice-card no-image" data-category="200">
              <div class="voice-text">
                <p class="voice-quote">
                  Gingi, Charli and Ella have created a beautiful course that
                  enabled everybody to grow in their own individual ways.
                  Everybody on the course felt seen — wherever they were in
                  their lives and practice was valued. I did not expect to feel
                  a sense of overcoming personal barriers which allowed me to
                  exceed my expectations of myself.
                </p>
                <div class="voice-attr">
                  <span class="voice-attr-name">Jo E</span
                  ><span class="voice-attr-sep">·</span> 200-Hour
                </div>
              </div>
            </div>

            <div class="voice-card no-image" data-category="300">
              <div class="voice-text">
                <p class="voice-quote">
                  To be able to choose how to make up the hours — after the core
                  module is complete — is such a wonderful idea. The list of
                  available options was inviting, and to my delight there were
                  plenty of courses to choose from. It might've been 300 hours
                  of study and practice, but it was delivered with a deep
                  understanding, a supportive team of teachers and a huge heart.
                </p>
                <div class="voice-attr">
                  <span class="voice-attr-name">Laura V</span
                  ><span class="voice-attr-sep">·</span> 300-Hour
                </div>
              </div>
            </div>

            <div class="voice-card no-image" data-category="200">
              <div class="voice-text">
                <p class="voice-quote">
                  The professionalism and attention to detail is exceptional,
                  but also the team's ability to create a space that is
                  nourishing and accepting was equally important. The best thing
                  I have ever done in my life was to embark on this journey.
                  This beautiful space has a very special place in my heart.
                </p>
                <div class="voice-attr">
                  <span class="voice-attr-name">Ana M</span
                  ><span class="voice-attr-sep">·</span> 200-Hour
                </div>
              </div>
            </div>

            <div class="voice-card no-image" data-category="300">
              <div class="voice-text">
                <p class="voice-quote">
                  I have absolutely loved studying for the 300-hour certificate
                  with the Shala. It's really worked for me — being able to
                  choose the modules, focusing on specific areas such as yin,
                  yoga nidra, mindfulness, breathwork and yoga philosophy, with
                  such inspiring teachers. And being able to do all of that
                  remotely, in my own time scale.
                </p>
                <div class="voice-attr">
                  <span class="voice-attr-name">Judy W</span
                  ><span class="voice-attr-sep">·</span> 300-Hour
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- GRADUATE INTERVIEW -->
      <section class="interview">
        <div class="interview-inner">
          <div class="interview-content">
            <p class="interview-eyebrow">Graduate Interview</p>
            <h3>Lesley Collinson <em>on her Shala journey</em></h3>
            <p class="lead">
              Our teacher training manager Rina sits down with Lesley Collinson
              to discuss her experience studying at The Shala School of Yoga.
            </p>
            <p>
              Lesley graduated from our 200-hour programme in 2019 and went on
              to complete her 300-hour programme with us. Here she talks about
              her journey in conversation with Rina.
            </p>
          </div>
          <div class="interview-video">
            <!-- TODO: uncomment when ready -->
            <!-- <iframe src="https://player.vimeo.com/video/600859692" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></iframe> -->
            <div class="interview-video-placeholder">
              <svg viewBox="0 0 24 24" fill="currentColor">
                <path d="M8 5v14l11-7z" />
              </svg>
              <span>Vimeo · 600859692</span>
            </div>
          </div>
        </div>
      </section>

      <!-- CTA BAND -->
      <section class="cta-band">
        <div class="cta-band-inner">
          <h2 class="cta-h2">Ready to start <em>your training?</em></h2>
          <p class="cta-sub">
            Explore our 200-hour foundation programme or our modular 300-hour
            pathway.
          </p>
          <div class="cta-buttons">
            <a href="/yoga-teacher-training-calendar" class="btn btn-white"
              >See Course Calendar</a
            >
            <a href="/200-hour" class="btn-ghost btn-white"
              >200-Hour Programme</a
            >
            <a href="/300-hour" class="btn-ghost btn-white"
              >300-Hour Programme</a
            >
          </div>
        </div>
      </section>
    </main>

<?php get_footer(); ?>