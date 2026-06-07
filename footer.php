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
                    <a href="https://www.theshalalondon.com/newsletters-shala/" class="footer-newsletter-link">Sign up →</a>
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
                <a href="https://www.vahni.com" target="_blank" rel="noopener">Visit Vahni →</a>
            </div>

            <div class="footer-courses-col">
                <h4>2026 Courses</h4>
                <a href="#">Elemental Nidra | Jul</a>
                <a href="#">Theming | Aug</a>
                <a href="#">Yoga for Neurodivergence | Aug</a>
                <a href="#">Inversions, Arm Balances &amp; Backbends | Sep</a>
                <a href="#">Beyond Asana Core 1 | Sep &amp; Oct</a>
                <a href="#">Post-Natal Baby &amp; Me | Oct</a>
                <a href="#">Sacred Breath | Pranayama | Oct &amp; Nov</a>
                <a href="#">Yoga Nidra | Nov</a>
                <a href="#">Menstrual Health | Nov</a>
                <a href="#">Sacred Sound &amp; Ceremony | Dec</a>
                <a href="#">Embodied Asana Core 2 | Jan</a>
                <a href="#">Somatic Yoga | Intuitive You | Jan</a>
                <a href="#">Yin Yoga | Feb</a>
                <a href="#">Pregnancy Yoga | Mar</a>
            </div>
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