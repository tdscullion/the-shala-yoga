<?php get_header(); ?>

  <main id="main-content">
      <!-- BLOG HERO -->
      <section class="hero-utility bg-charcoal-plum text-on-dark">
        <img
          class="hero-utility-spiral"
          src="<?php echo esc_url(get_template_directory_uri() . '/assets/spirals/spiral-3-cropped.png'); ?>"
          alt=""
          aria-hidden="true"
        />

        <div class="hero-utility-inner">
          <!-- <h1 class="hero-utility-title">
            Pranayama as an <em>Essential Daily</em> Support System
          </h1> -->
          <h1 class="hero-utility-title">
            <?php the_title(); ?>
        </h1>

          <!-- <p class="hero-utility-sub">
            This article explains the benefit of this practice and how important
            and transformative as well as supportive Pranayama can be.
          </p> -->
          <p class="hero-utility-sub">
            <?php echo esc_html(get_the_excerpt()); ?>
          </p>
        </div>
      </section>

      <!-- FEATURED IMAGE — B&W filter applied via CSS -->
      <!-- <div class="blog-featured-img">
        <img
          src="assets/images/blog-pranayama-hero.jpg"
          alt="Pranayama — breath practice"
        />
      </div> -->
      <div class="blog-featured-img">
        <?php if (has_post_thumbnail()) : ?>
            <?php the_post_thumbnail('full'); ?>
        <?php endif; ?>
    </div>

      <!-- MAIN CONTENT + SIDEBAR -->
      <div class="blog-layout">
        <article class="blog-body">
          <h2>Pranayama — An Essential Daily Support System</h2>

          <div class="blog-pull-quote">
            <span class="blog-pull-quote-mark">&ldquo;</span>
            <p class="blog-pull-quote-text">
              When you own your breath, nobody can steal your peace.
            </p>
            <cite>Unknown</cite>
          </div>

          <?php the_content(); ?>

          <!-- <p>
            Prana can be translated as energy, breath, and life force. Yama is
            control and Ayama is expansion. So, Pranayama is a practice of
            controlling breath and through that increasing and purifying our
            energy. It is part of the ancient wellness system of yoga, which in
            recent years has become very popular. It can also be practiced under
            the name of breathwork.
          </p>

          <p>
            There is much fluctuation in the world in recent years, fluctuation
            of systems such as the political and economic and often a lot of
            corresponding uncertainty in life which can lead to an environment
            where it is easier to feel anxious. One of the antidotes to feeling
            uncertain is to feel steady, to ground and gain support to allow
            some level of resilience in the face of uncertainty.
          </p>

          <p>
            Often people look at Pranayama as a practice of accessing the
            parasympathetic nervous system, the branch of our autonomic system
            that helps us rest, feel safe and digest. However, did you know that
            Pranayama is also a switch? A switch between intuitive and analytic
            modes of thinking, being energised and relaxed, as well as our
            receptiveness to solar and lunar energies?
          </p>

          <img
            src="assets/images/blog-pranayama-body.jpg"
            alt="Pranayama practice"
          />

          <p>
            The breath is a bridge between our mind and body and when we change
            and can control our breath, we can transform our thoughts, emotions
            and behavior through changing our physiology. This provides us with
            a free and readily available support system, especially when we are
            feeling triggered, automatic, disconnected, tired, scared and
            frantic.
          </p>

          <p>
            Our lizard or reptilian part of the brain oversees instinctive
            responses such as breathing but also our trauma responses. Threat
            and danger automatically shut down the part of the brain linked to
            thinking and instinctual survival responses kick in as thinking
            takes too long!
          </p>

          <p>
            Therefore, being able to pause and control one's breath is an
            important and essential skill in life. It helps us to get out of
            survival mode if we are not in actual danger and process information
            with more time, perspective and rationality. If we are tired, we can
            use Pranayama to energise, if we are frantic, we can use the breath
            to collect ourselves, if we are disconnected, we can give our life
            force energy the power to connect back to our centre.
          </p>

          <p>
            Pranayama as a system of support allows us to be responsive to what
            may come in life by helping the body and mind work towards
            homeostasis, a self-regulatory process by which we can maintain
            internal stability while adjusting to changing external conditions.
            This is precisely why this ancient life force energy control system
            is so much more than calming — but rather an essential physiological
            support system that can balance and give perspective to thoughts and
            feelings to ultimately respond to life events with an increased
            level of choice and intention.
          </p>

          <div class="blog-divider"></div>

          <p>
            For any teachers and practitioners who would like a deep dive into
            this powerful practice, see the link to the right for our
            comprehensive Pranayama Training course.
          </p> -->

          <div class="blog-share">
            <span class="blog-share-label">Share</span>
            <a href="#" class="share-btn">Facebook</a>
            <a href="#" class="share-btn">Instagram</a>
            <a href="#" class="share-btn">Copy Link</a>
          </div>

          <div class="blog-tags">
            <span class="blog-tags-label">Filed under</span>
            <div class="blog-tags-list">
              <a href="/blog" class="blog-tag">Breath</a>
              <a href="/blog" class="blog-tag">Breathwork</a>
              <a href="/blog" class="blog-tag">Pranayama</a>
              <a href="/blog" class="blog-tag">Wellness</a>
              <a href="/blog" class="blog-tag">Yoga</a>
              <a href="/blog" class="blog-tag">Yoga Philosophy</a>
              <a href="/blog" class="blog-tag">Mental Health</a>
              <a href="/blog" class="blog-tag">Mindfulness</a>
            </div>
          </div>

          <!-- Prev / Next post nav -->
          <nav class="blog-post-nav" aria-label="Post navigation">
            <a href="#" class="blog-post-nav-item prev">
              <span class="blog-post-nav-label">← Previous</span>
              <span class="blog-post-nav-title"
                >Yoga Nidra and awareness of opposites</span
              >
            </a>
            <a href="#" class="blog-post-nav-item next">
              <span class="blog-post-nav-label">Next →</span>
              <span class="blog-post-nav-title"
                >Why every yoga teacher needs to understand the nervous
                system</span
              >
            </a>
          </nav>
        </article>

        <!-- SIDEBAR -->
        <aside class="blog-sidebar">
          <!-- About the Author — OPTIONAL
           Only render when the author has a bio set.
           In WordPress: only output this block when
           get_the_author_meta('description') is not empty. -->
          <div class="sidebar-block sidebar-author-block">
            <span class="sidebar-label">About the author</span>
            <div class="sidebar-author">
              <img
                class="sidebar-author-img"
                src="assets/images/melanie-cooper.jpg"
                alt="Melanie Cooper"
              />
              <div class="sidebar-author-name">Melanie Cooper</div>
              <span class="sidebar-author-role"
                >Lead Teacher Trainer · 200-Hour · 300-Hour · Anatomy · Yoga
                Nidra · Pranayama</span
              >
              <p class="sidebar-author-bio">
                Melanie's teaching is unlike anything else — clear, accessible,
                and genuinely transformative. She brings deep embodied knowledge
                and curiosity to every room she teaches in.
              </p>
            </div>
          </div>

          <!-- Related Posts -->
          <div class="sidebar-block">
            <span class="sidebar-label">Read more</span>
            <a href="#" class="sidebar-related-post">
              <div class="srp-thumb">
                <img
                  src="assets/images/blog-nidra-thumb.jpg"
                  alt="Yoga Nidra"
                />
              </div>
              <div>
                <div class="srp-title">
                  Yoga Nidra and awareness of opposites
                </div>
                <span class="srp-date">October 2024</span>
              </div>
            </a>
            <a href="#" class="sidebar-related-post">
              <div class="srp-thumb">
                <img
                  src="assets/images/blog-theming-thumb.jpg"
                  alt="Theming Classes"
                />
              </div>
              <div>
                <div class="srp-title">
                  The real reason my classes started filling up again
                </div>
                <span class="srp-date">July 2025</span>
              </div>
            </a>
            <a href="#" class="sidebar-related-post">
              <div class="srp-thumb">
                <img
                  src="assets/images/blog-nervous-system-thumb.jpg"
                  alt="Nervous System"
                />
              </div>
              <div>
                <div class="srp-title">
                  Why every yoga teacher needs to understand the nervous system
                </div>
                <span class="srp-date">December 2023</span>
              </div>
            </a>
          </div>

          <!-- Course CTA -->
          <div class="sidebar-block">
            <div class="sidebar-course">
              <span class="sidebar-course-eyebrow">Upcoming Course</span>
              <div class="sidebar-course-title">
                Sacred Breath: Pranayama Training
              </div>
              <p class="sidebar-course-desc">
                A comprehensive deep-dive into pranayama practice for teachers
                and serious practitioners. October–December 2026.
              </p>
              <a href="/cpds" class="sidebar-course-btn">View Course Details</a>
            </div>
          </div>
        </aside>
      </div>

      <!-- COURSE CTA BAND -->
      <section class="course-cta-band">
        <div class="course-cta-band-inner">
          <h3>Sacred Breath: <em>Pranayama</em> Teacher Training</h3>
          <p>
            A comprehensive deep-dive into pranayama for teachers and serious
            practitioners — covering technique, philosophy, sequencing and the
            transformative power of breath. October–December 2026.
          </p>
          <div class="course-cta-btns">
            <a href="/cpds" class="cta-band-btn-primary">View Course Details</a>
            <a href="/contact" class="cta-band-btn-ghost">Message Us →</a>
          </div>
        </div>
      </section>
    </main>

<?php get_footer(); ?>