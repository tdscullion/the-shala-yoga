<?php

$overview_heading = get_field('overview_heading');
$overview_content = get_field('overview_content');
$instructor_quote = get_field('instructor_quote');
$who_is_this_for = get_field('who_is_this_for');
$whats_included = get_field('whats_included_');

?>


    <div class="body-wrap" id="section-overview">

      <div class="main-col">

         <div class="intro-quote-block">

            <?php if ($overview_heading) : ?>
                <h2>
                    <?php echo esc_html($overview_heading); ?>
                </h2>
            <?php endif; ?>

            <?php if ($overview_content) : ?>
                <p class="intro-body">
                    <?php echo nl2br(esc_html($overview_content)); ?>
                </p>
            <?php endif; ?>

            <?php if ($instructor_quote) : ?>
                <p class="inline-quote">
                    "<?php echo esc_html($instructor_quote); ?>"
                </p>
            <?php endif; ?>

          </div>  

          <?php if ($who_is_this_for || $whats_included) : ?>

          <div class="suitability-grid">

              <?php if ($who_is_this_for) : ?>
                  <div class="suitability">
                      <h3 class="suitability-heading">
                          <em>Who</em> is this course for?
                      </h3>
                      <div class="suitability-pills">
                          <?php
                          $items = explode('</li>', $whats_included);
                          foreach ($items as $item) :
                              $item = strip_tags($item);
                              if (trim($item)) :
                          ?>
                              <span class="s-pill">
                                  <?php echo esc_html(trim($item)); ?>
                              </span>
                          <?php
                              endif;
                          endforeach;
                          ?>
                    </div>
                  </div>
              <?php endif; ?>

              <?php if ($whats_included) : ?>
                  <div class="suitability">
                      <h3 class="suitability-heading">
                          <em>What's</em> included?
                      </h3>
                      <div class="suitability-pills">
                          <?php
                          $items = explode('</li>', $who_is_this_for);
                          foreach ($items as $item) :
                              $item = strip_tags($item);
                              if (trim($item)) :
                          ?>
                              <span class="s-pill">
                                  <?php echo esc_html(trim($item)); ?>
                              </span>
                          <?php
                              endif;

                          endforeach;
                          ?>
                      </div>
                  </div>
              <?php endif; ?>
          </div>
          <?php endif; ?>

      </div>
    </div>
