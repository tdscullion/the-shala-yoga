<?php
/*
Template Name: Signup Page
*/

get_header();
?>

<main id="main-content">

    <section class="signup-section">
        <div class="signup-inner">

            <div class="signup-copy">
                <span class="signup-eyebrow">Stay Connected</span>

                <h1 class="signup-title">
                    Join our <em>mailing list</em>
                </h1>

                <p class="signup-text">
                    Be the first to hear about new teacher trainings, CPDs,
                    retreats, open days and community events from The Shala.
                </p>
            </div>

            <div class="signup-form">
                <div id="momence-plugin-lead-form"></div>

                <script
                    async
                    type="module"
                    id="momence-plugin-lead-form-src"
                    host_id="9055"
                    fields="fullName,email"
                    token="Ra7GErbXD5"
                    country_code="gb"
                    source_id="654"
                    data-field-def='{"fullName":{"type":"text","label":"Full name","required":true,"hidden":false,"placeholder":"Full Name"},"email":{"type":"email","label":"Email","required":true}}'
                    src="https://momence.com/plugin/lead-form/lead-form.js">
                </script>
            </div>

        </div>
    </section>

</main>

<?php get_footer(); ?>