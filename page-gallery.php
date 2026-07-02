<?php 

/*
Template Name: Gallery Page
*/

get_header(); 

$gallery_all_images = get_field('gallery_all_images');
$gallery_200_hour_images = get_field('gallery_200_hour_images');
$gallery_300_hour_images = get_field('gallery_300_hour_images');
$gallery_cpds_images = get_field('gallery_cpds_images');
$gallery_retreats_images = get_field('gallery_retreats_images');
?>

    <main id="main-content">
      <section class="gallery-section">
        <div class="gallery-inner">
          <div class="gallery-head">
            <div class="gallery-eyebrow">— life at the shala —</div>
            <h2 class="gallery-h2">A space <em>of practice</em></h2>
            <div class="gallery-rule"></div>
            <p class="gallery-sub">
              Twenty-nine years of teaching, training and gathering — moments of
              stillness, connection and quiet effort.
            </p>
          </div>

          <div class="g-tabs" role="tablist">
            <button class="g-tab active" data-tab="all">All</button>
            <button class="g-tab" data-tab="200">200 Hour</button>
            <button class="g-tab" data-tab="300">300 Hour</button>
            <button class="g-tab" data-tab="cpd">CPDs</button>
            <button class="g-tab" data-tab="retreats">Retreats</button>
          </div>

          <!-- ALL -->
          <div class="tab-panel active" data-panel="all">
              <div class="mosaic" data-gallery="all">
                  <?php if ($gallery_all_images) : ?>
                      <?php foreach ($gallery_all_images as $index => $image) : ?>
                          <div class="m-cell c<?php echo esc_attr($index + 1); ?>">
                             <img
                                src="<?php echo esc_url($image['url']); ?>"
                                alt="<?php echo esc_attr($image['alt'] ?: 'The Shala gallery image'); ?>"
                                width="<?php echo esc_attr($image['width']); ?>"
                                height="<?php echo esc_attr($image['height']); ?>"
                                loading="<?php echo $index === 0 ? 'eager' : 'lazy'; ?>"
                                fetchpriority="<?php echo $index === 0 ? 'high' : 'auto'; ?>"
                            >
                              <div class="m-tint"></div>
                              <div class="m-zoom">+</div>
                          </div>
                      <?php endforeach; ?>
                  <?php endif; ?>
              </div>
          </div>

          <!-- 200 HOUR -->
          <div class="tab-panel" data-panel="200">
              <div class="mosaic" data-gallery="200">
                  <?php if ($gallery_200_hour_images) : ?>
                      <?php foreach ($gallery_200_hour_images as $index => $image) : ?>
                          <div class="m-cell c<?php echo esc_attr($index + 1); ?>">
                             <img
                                    src="<?php echo esc_url($image['url']); ?>"
                                    alt="<?php echo esc_attr($image['alt'] ?: 'The Shala gallery image'); ?>"
                                    width="<?php echo esc_attr($image['width']); ?>"
                                    height="<?php echo esc_attr($image['height']); ?>"
                                    loading="<?php echo $index === 0 ? 'eager' : 'lazy'; ?>"
                                    fetchpriority="<?php echo $index === 0 ? 'high' : 'auto'; ?>"
                                >
                              <div class="m-tint"></div>
                              <div class="m-zoom">+</div>
                          </div>
                      <?php endforeach; ?>
                  <?php endif; ?>
              </div>
          </div>

          <!-- 300 HOUR -->
          <div class="tab-panel" data-panel="300">
              <div class="mosaic" data-gallery="300">
                  <?php if ($gallery_300_hour_images) : ?>
                      <?php foreach ($gallery_300_hour_images as $index => $image) : ?>
                          <div class="m-cell c<?php echo esc_attr($index + 1); ?>">
                              <img
                                    src="<?php echo esc_url($image['url']); ?>"
                                    alt="<?php echo esc_attr($image['alt'] ?: 'The Shala gallery image'); ?>"
                                    width="<?php echo esc_attr($image['width']); ?>"
                                    height="<?php echo esc_attr($image['height']); ?>"
                                    loading="<?php echo $index === 0 ? 'eager' : 'lazy'; ?>"
                                    fetchpriority="<?php echo $index === 0 ? 'high' : 'auto'; ?>"
                                >
                              <div class="m-tint"></div>
                              <div class="m-zoom">+</div>
                          </div>
                      <?php endforeach; ?>
                  <?php endif; ?>
              </div>
          </div>

          <!-- CPD -->
          <div class="tab-panel" data-panel="cpd">
              <div class="mosaic" data-gallery="cpd">
                  <?php if ($gallery_cpds_images) : ?>
                      <?php foreach ($gallery_cpds_images as $index => $image) : ?>
                          <div class="m-cell c<?php echo esc_attr($index + 1); ?>">
                              <img
                                    src="<?php echo esc_url($image['url']); ?>"
                                    alt="<?php echo esc_attr($image['alt'] ?: 'The Shala gallery image'); ?>"
                                    width="<?php echo esc_attr($image['width']); ?>"
                                    height="<?php echo esc_attr($image['height']); ?>"
                                    loading="<?php echo $index === 0 ? 'eager' : 'lazy'; ?>"
                                    fetchpriority="<?php echo $index === 0 ? 'high' : 'auto'; ?>"
                                >
                              <div class="m-tint"></div>
                              <div class="m-zoom">+</div>
                          </div>
                      <?php endforeach; ?>
                  <?php endif; ?>
              </div>
          </div>

          <!-- RETREATS -->
          <div class="tab-panel" data-panel="retreats">
              <div class="mosaic" data-gallery="retreats">
                  <?php if ($gallery_retreats_images) : ?>
                      <?php foreach ($gallery_retreats_images as $index => $image) : ?>
                          <div class="m-cell c<?php echo esc_attr($index + 1); ?>">
                              <img
                                src="<?php echo esc_url($image['url']); ?>"
                                alt="<?php echo esc_attr($image['alt'] ?: 'The Shala gallery image'); ?>"
                                width="<?php echo esc_attr($image['width']); ?>"
                                height="<?php echo esc_attr($image['height']); ?>"
                                loading="<?php echo $index === 0 ? 'eager' : 'lazy'; ?>"
                                fetchpriority="<?php echo $index === 0 ? 'high' : 'auto'; ?>"
                              >
                              <div class="m-tint"></div>
                              <div class="m-zoom">+</div>
                          </div>
                      <?php endforeach; ?>
                  <?php endif; ?>
              </div>
          </div>
        </div>
      </section>

      <!-- ═══════ LIGHTBOX ═══════ -->
      <div class="lightbox" id="lightbox">
        <button class="lightbox-close" id="lbClose">✕</button>
        <button class="lightbox-nav lightbox-prev" id="lbPrev">‹</button>
        <div class="lightbox-inner"><img id="lbImg" src="" alt="" /></div>
        <button class="lightbox-nav lightbox-next" id="lbNext">›</button>
        <div class="lightbox-counter" id="lbCounter">1 / 1</div>
      </div>
    </main>

<?php get_footer(); ?>