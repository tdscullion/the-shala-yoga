<?php get_header(); ?>

<main id="main-content">
    <section class="hero-home">
        <div class="hero-home-inner">
            <div class="hero-home-spiral" aria-hidden="true">
                <img
                    src="<?php echo esc_url(get_template_directory_uri() . '/assets/spirals/spiral-1-cropped.png
                    '); ?>"
                    alt=""
                >
            </div>

            <div class="hero-home-titlewrap">
                <h1 class="hero-home-title">
                    Authentic yoga education — grounded, transformative, profoundly
                    <em>human.</em>
                </h1>
            </div>

            <div class="hero-home-textcol">
                <div class="hero-home-textinner">
                    <p class="hero-home-sub">
                        Yoga education rooted in decades of experience, exceptional
                        teachers and genuine connection — where ancient wisdom meets
                        modern insight to deepen personal and professional growth.
                    </p>

                    <div class="hero-home-btns">
                        <a href="<?php echo esc_url(home_url('/cpds/')); ?>" class="btn btn-pink">Explore Courses</a>
                        <a href="<?php echo esc_url(home_url('/about/')); ?>" class="btn btn-ghost-pink">Our Story</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>