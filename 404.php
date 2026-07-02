<?php get_header(); ?>

<main id="main-content">

    <section class="error-404-section">

        <div class="error-404-inner">

            <span class="error-code">
                404
            </span>

            <h1 class="error-title">
                Page <em>not found</em>
            </h1>

            <p class="error-text">
                Sorry, the page you're looking for doesn't exist, may have moved, or the link you followed is no longer available.
            </p>

            <div class="error-buttons">
                <a href="<?php echo esc_url(home_url('/')); ?>" class="btn btn-pink">
                    Return Home
                </a>

                <a href="<?php echo esc_url(home_url('/200-hour/')); ?>" class="btn-ghost btn-pink">
                    Explore Training →
                </a>
            </div>

        </div>

    </section>

</main>

<?php get_footer(); ?>