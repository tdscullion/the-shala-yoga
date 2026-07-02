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
            <h1 class="hero-utility-title">
                <?php the_title(); ?>
            </h1>

            <?php if (get_the_excerpt()) : ?>
                <p class="hero-utility-sub">
                    <?php echo esc_html(get_the_excerpt()); ?>
                </p>
            <?php endif; ?>
        </div>
    </section>

    <?php if (has_post_thumbnail()) : ?>
        <div class="blog-featured-img">
            <?php the_post_thumbnail('full'); ?>
        </div>
    <?php endif; ?>

    <div class="blog-layout">
        <article class="blog-body">

            <?php the_content(); ?>

            <div class="blog-tags">
                <span class="blog-tags-label">Filed under</span>

                <div class="blog-tags-list">
                    <?php
                    $categories = get_the_category();

                    if (!empty($categories)) :
                        foreach ($categories as $category) :
                    ?>
                        <a href="<?php echo esc_url(get_category_link($category->term_id)); ?>" class="blog-tag">
                            <?php echo esc_html($category->name); ?>
                        </a>
                    <?php
                        endforeach;
                    endif;
                    ?>
                </div>
            </div>

            <nav class="blog-post-nav" aria-label="Post navigation">
                <?php
                $prev_post = get_previous_post();
                $next_post = get_next_post();
                ?>

                <?php if ($prev_post) : ?>
                    <a href="<?php echo esc_url(get_permalink($prev_post)); ?>" class="blog-post-nav-item prev">
                        <span class="blog-post-nav-label">← Previous</span>
                        <span class="blog-post-nav-title">
                            <?php echo esc_html(get_the_title($prev_post)); ?>
                        </span>
                    </a>
                <?php endif; ?>

                <?php if ($next_post) : ?>
                    <a href="<?php echo esc_url(get_permalink($next_post)); ?>" class="blog-post-nav-item next">
                        <span class="blog-post-nav-label">Next →</span>
                        <span class="blog-post-nav-title">
                            <?php echo esc_html(get_the_title($next_post)); ?>
                        </span>
                    </a>
                <?php endif; ?>
            </nav>

        </article>

        <aside class="blog-sidebar">

            <?php if (get_the_author_meta('description')) : ?>
                <div class="sidebar-block sidebar-author-block">
                    <span class="sidebar-label">About the author</span>

                    <div class="sidebar-author">
                        <?php echo get_avatar(get_the_author_meta('ID'), 120, '', get_the_author()); ?>

                        <div class="sidebar-author-name">
                            <?php echo esc_html(get_the_author()); ?>
                        </div>

                        <p class="sidebar-author-bio">
                            <?php echo esc_html(get_the_author_meta('description')); ?>
                        </p>
                    </div>
                </div>
            <?php endif; ?>

            <div class="sidebar-block">
                <span class="sidebar-label">Read more</span>

                <?php
                $related_posts = new WP_Query(array(
                    'post_type'      => 'post',
                    'posts_per_page' => 3,
                    'post__not_in'   => array(get_the_ID()),
                    'category__in'   => wp_get_post_categories(get_the_ID()),
                ));

                if ($related_posts->have_posts()) :
                    while ($related_posts->have_posts()) :
                        $related_posts->the_post();
                ?>
                    <a href="<?php the_permalink(); ?>" class="sidebar-related-post">
                        <div class="srp-thumb">
                            <?php if (has_post_thumbnail()) : ?>
                                <?php the_post_thumbnail('thumbnail'); ?>
                            <?php else : ?>
                                <img
                                    src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/blog-featured.jpg'); ?>"
                                    alt="<?php echo esc_attr(get_the_title()); ?>"
                                />
                            <?php endif; ?>
                        </div>

                        <div>
                            <div class="srp-title">
                                <?php the_title(); ?>
                            </div>
                            <span class="srp-date">
                                <?php echo esc_html(get_the_date('F Y')); ?>
                            </span>
                        </div>
                    </a>
                <?php
                    endwhile;
                    wp_reset_postdata();
                endif;
                ?>
            </div>

        </aside>
    </div>

</main>

<?php get_footer(); ?>