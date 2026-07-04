<footer>
    <div class="footer-inner">
        <div class="footer-top">
            <div class="footer-brand">
                <a href="<?php echo esc_url(home_url('/')); ?>" class="footer-logo-link" aria-label="The Shala School of Yoga">
                    <img
                        class="footer-logo-img"
                        src="<?php echo esc_url(get_template_directory_uri() . '/assets/logos/logo-footer.svg'); ?>"
                        alt="The Shala School of Yoga"
                    />
                </a>

                <p>
                    Transformative yoga education grounded in decades of experience,
                    exceptional teachers and genuine human connection — where ancient
                    wisdom meets modern insight to inspire personal and professional
                    growth.
                </p>

                <address class="footer-address">
                    The Shala School of Yoga<br>
                    West Norwood, London<br>
                    <a href="mailto:teachertraining@theshala.co.uk">teachertraining@theshala.co.uk</a>
                </address>

                <a href="mailto:teachertraining@theshala.co.uk" class="footer-msg-btn">✉ Message Us</a>

                <div class="footer-newsletter">
                    <span class="footer-newsletter-label">Newsletter</span>
                    <p class="footer-newsletter-copy">
                        Seasonal updates, course openings &amp; reflections from the mat.
                    </p>
                    <a href="<?php echo esc_url(home_url('/signup/')); ?>" class="footer-newsletter-link">
                        Sign up →
                    </a>
                </div>
            </div>

            <div class="footer-col">
                <h4>Training</h4>
                <a href="<?php echo esc_url(home_url('/200-hour/')); ?>">200-Hour YTT</a>
                <a href="<?php echo esc_url(home_url('/300-hour/')); ?>">300-Hour YTT</a>
                <a href="<?php echo esc_url(home_url('/cpds/')); ?>">Modules &amp; CPDs</a>
                <a href="#">On Demand</a>
                <a href="<?php echo esc_url(home_url('/retreats/')); ?>">Retreats</a>

                <h4>Community</h4>
                <a href="#">200-Hour Open Day</a>
                <a href="#">Yoga Philosophy Club</a>
                <a href="#">Saha Gatherings</a>
            </div>

            <div class="footer-col">
                <h4>About</h4>
                <a href="<?php echo esc_url(home_url('/about/')); ?>">About the Shala</a>
                <a href="<?php echo esc_url(home_url('/faculty/')); ?>">Our Faculty</a>
                <a href="<?php echo esc_url(home_url('/our-space/')); ?>">Our Space</a>
                <a href="<?php echo esc_url(home_url('/testimonials/')); ?>">Testimonials</a>
                <a href="<?php echo esc_url(home_url('/bursaries/')); ?>">Bursaries</a>
                <a href="#">Jobs</a>
                <a href="<?php echo esc_url(home_url('/contact/')); ?>">Contact Us</a>
                <a href="<?php echo esc_url(home_url('/blog/')); ?>">Blog</a>
            </div>

            <div class="footer-col">
                <h4>Legal</h4>
                <a href="<?php echo esc_url(home_url('/terms-and-conditions/')); ?>">Terms &amp; Conditions</a>
                <a href="#">Privacy Policy</a>
                <a href="#">Cookie Policy</a>

                <h4>Support</h4>
                <a href="<?php echo esc_url(home_url('/faq/')); ?>">Course FAQs</a>
                <a href="<?php echo esc_url(home_url('/contact/')); ?>">Contact Us</a>

                <h4>Vahni Yoga Classes</h4>
                <a href="https://www.vahnilondon.com/" target="_blank" rel="noopener">Visit Vahni →</a>
            </div>

            <div class="footer-courses-col">
                <h4>Upcoming Courses</h4>

                <?php

                $today = date('Ymd');

                $footer_courses = new WP_Query([
                    'post_type'      => 'course',
                    'posts_per_page' => 12,
                    'meta_key'       => 'start_date',
                    'orderby'        => 'meta_value',
                    'order'          => 'ASC',
                    'meta_query'     => [
                        [
                            'key'     => 'start_date',
                            'value'   => $today,
                            'compare' => '>=',
                            'type'    => 'NUMERIC',
                        ],
                    ],
                ]);

                if ($footer_courses->have_posts()) :
                    while ($footer_courses->have_posts()) :
                        $footer_courses->the_post();

                        $footer_title = get_field('footer_title');

                        if (!$footer_title) {
                            $footer_title = get_field('short_title');
                        }

                        if (!$footer_title) {
                            $footer_title = get_the_title();
                        }

                        $start_date = get_field('start_date');

                        $month = '';

                        if ($start_date) {
                            $month = date('M', strtotime($start_date));
                        }
                ?>

                    <a href="<?php the_permalink(); ?>">
                        <?php echo esc_html($footer_title); ?>

                        <?php if ($month) : ?>
                            | <?php echo esc_html($month); ?>
                        <?php endif; ?>
                    </a>

                <?php
                    endwhile;
                    wp_reset_postdata();
                endif;
                ?>

            </div>

        <div class="footer-bottom">
            <p>
                &copy; <?php echo date('Y'); ?> The Shala School of Yoga | All rights reserved |
                Trainings are independently run by teachers. Payments processed by
                The Shala School of Yoga Ltd.
            </p>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>