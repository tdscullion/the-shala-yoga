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

                <span class="signup-eyebrow">
                    Stay Connected
                </span>

                <h1 class="signup-title">
                    Join our <em>mailing list</em>
                </h1>

                <p class="signup-text">
                    Be the first to hear about new teacher trainings, CPDs,
                    retreats, open days and community events from The Shala.
                </p>

            </div>

            <div class="signup-form">

                <script
                    async
                    type="module"
                    host_id="6002"
                    fields="fullName,email"
                    token="0V7LbJPXlk"
                    country_code="gb"
                    source_id='{"id":656}'
                    data-field-def="{}"
                    src="https://momence.com/plugin/lead-form/lead-form.js">
                </script>

                <div id="momence-plugin-lead-form"></div>

            </div>

        </div>

    </section>

</main>

<?php get_footer(); ?>