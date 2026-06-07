<?php
$hero_heading = get_field('hero_heading');
$hero_intro   = get_field('hero_intro');
$instructor   = get_field('instructor');
?>

<section class="hero-course">
    <div class="hero-course-inner">
        <img
            class="hero-standard-spiral"
            src="<?php echo esc_url(get_template_directory_uri() . '/assets/spirals/spiral-4-cropped.png'); ?>"
            alt=""
            aria-hidden="true"
        >

        <div class="hero-course-content">
            <?php if ($hero_heading) : ?>
                <h1 class="hero-course-title">
                    <?php echo preg_replace('/\{(.*?)\}/', '<em>$1</em>', esc_html($hero_heading)); ?>
                </h1>
            <?php endif; ?>

            <?php if ($instructor) : ?>
                <span class="hero-course-with">
                    with <?php echo esc_html($instructor->post_title); ?>
                </span>
            <?php endif; ?>

            <?php if ($hero_intro) : ?>
                <p class="hero-course-bio">
                    <?php echo esc_html($hero_intro); ?>
                </p>
            <?php endif; ?>
        </div>
    </div>
</section>