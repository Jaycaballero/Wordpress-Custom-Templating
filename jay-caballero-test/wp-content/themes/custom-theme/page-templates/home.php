<?php 
  /* Template Name: Home page */ 
  get_header();
?>

<?php
  /* Get header fields value */
  $banner_image = get_field('banner_image');
  $banner_text_colour = get_field('banner_text_colour');
  $banner_heading_text = get_field('banner_heading_text');
  $banner_sub_text = get_field('banner_sub_text');

  /* Get expertise section fields value */
  $background_colour = get_field('background_colour');
  $section_text_colour = get_field('section_text_colour');
  $section_title = get_field('section_title');
  $section_heading = get_field('section_heading');
  $section_text_content = get_field('section_text_content');
  $expertise_text = get_field('expertise_text');

  /* Get why lorem section fields value */
  $background_color_2 = get_field('background_color_2');
  $background_image = get_field('background_image');
  $section_text_colour_2 = get_field('section_text_colour_2');
  $section_title_2 = get_field('section_title_2');
  $section_heading_2 = get_field('section_heading_2');
  $section_text_content_2 = get_field('section_text_content_2');

  /* Get business section fields value */
  $background_color_3 = get_field('background_colour_3');
  $section_text_colour_3 = get_field('section_text_colour_3');
  $section_title_3 = get_field('section_title_3');
  $section_heading_3 = get_field('section_heading_3');

?>

<section id="header-banner" class="position-relative" style="background-image: url('<?php echo $banner_image; ?>');">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="header-banner-content">
          <div class="banner-header-text">
            <h1 style="color: <?php echo $banner_text_colour;?>;"><?php echo $banner_heading_text; ?></h1>
            <div class="banner-subtext mt-4" style="color: <?php echo $banner_text_colour;?>;"><?php echo $banner_sub_text; ?></div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="custom-ovarley">
</section>

<section id="expertise" class="section-padding" style="background-color: <?php echo $background_colour; ?>;">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <h5 class="section-title"><?php echo $section_title; ?></h5>
        <div class="section-heading mt-4">
          <h2 style="color: <?php echo $section_text_colour; ?>;"><?php echo $section_heading; ?></h2>
        </div>
        <div class="section-text-content mt-4" style="color: <?php echo $section_text_colour; ?>;">
          <?php echo $section_text_content; ?>
        </div>
        <h5 class="text-w-colon text-white"><?php echo $expertise_text; ?></h5>

        <?php if( have_rows('expertise') ): ?>
          <?php while( have_rows('expertise') ): the_row(); ?>
            <div class="row mt-5">
              <?php if( have_rows('expertise_group_1')): ?>
                <?php while( have_rows('expertise_group_1')): the_row(); ?>
                  <?php
                    $expertise_icon = get_sub_field('expertise_icon');
                    $expertise_title = get_sub_field('expertise_title');
                  ?>
                  <div class="col-3">
                    <div class="expertise-wrapper">
                      <img src="<?php echo $expertise_icon; ?>" class="d-table m-auto">
                      <h4 class="text-center mt-4" style="color: <?php echo $section_text_colour; ?>;">
                        <?php echo $expertise_title; ?>
                      </h4>
                    </div>
                  </div>
                <?php endwhile; ?>
              <?php endif; ?>

              <?php if( have_rows('expertise_group_2')): ?>
                <?php while( have_rows('expertise_group_2')): the_row(); ?>
                  <?php
                    $expertise_icon = get_sub_field('expertise_icon');
                    $expertise_title = get_sub_field('expertise_title');
                  ?>
                  <div class="col-3">
                    <div class="expertise-wrapper">
                      <img src="<?php echo $expertise_icon; ?>" class="d-table m-auto">
                      <h4 class="text-center mt-4" style="color: <?php echo $section_text_colour; ?>;">
                        <?php echo $expertise_title; ?>
                        </h4>
                    </div>
                  </div>
                <?php endwhile; ?>
              <?php endif; ?>

              <?php if( have_rows('expertise_group_3')): ?>
                <?php while( have_rows('expertise_group_3')): the_row(); ?>
                  <?php
                    $expertise_icon = get_sub_field('expertise_icon');
                    $expertise_title = get_sub_field('expertise_title');
                  ?>
                  <div class="col-3">
                    <div class="expertise-wrapper">
                      <img src="<?php echo $expertise_icon; ?>" class="d-table m-auto">
                      <h4 class="text-center mt-4" style="color: <?php echo $section_text_colour; ?>;">
                        <?php echo $expertise_title; ?>
                      </h4>
                    </div>
                  </div>
                <?php endwhile; ?>
              <?php endif; ?>

              <?php if( have_rows('expertise_group_4')): ?>
                <?php while( have_rows('expertise_group_4')): the_row(); ?>
                  <?php
                    $expertise_icon = get_sub_field('expertise_icon');
                    $expertise_title = get_sub_field('expertise_title');
                  ?>
                  <div class="col-3">
                    <div class="expertise-wrapper">
                      <img src="<?php echo $expertise_icon; ?>" class="d-table m-auto">
                      <h4 class="text-center mt-4" style="color: <?php echo $section_text_colour; ?>;">
                        <?php echo $expertise_title; ?>
                      </h4>
                    </div>
                  </div>
                <?php endwhile; ?>
              <?php endif; ?>
            </div>
          <?php endwhile; ?>
        <?php endif; ?>
      </div>
    </div>
  </div>
</section>

<section id="why-lorem" class="section-padding" style="background-image: url('<?php echo $background_image; ?>'); background-color: <?php echo $background_color_2; ?>;">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="why-lorem-content d-table w-75">
          <div class="why-lorem-intro-wrapper">
            <h5 class="section-title" style="color: <?php echo $section_text_colour_2; ?>;"><?php echo $section_title_2; ?></h5>
            <div class="section-heading mt-4">
              <h2 style="color: <?php echo $section_text_colour_2; ?>;"><?php echo $section_heading_2; ?></h2>
            </div>
            <div class="section-text-content mt-4" style="color: <?php echo $section_text_colour_2; ?>;">
              <?php echo $section_text_content_2; ?>
            </div>
          </div>

          <?php $count = 1; ?>

          <?php if( have_rows('lorem_group') ): ?>
            <?php while( have_rows('lorem_group') ): the_row(); ?>

              <ul class="lorem-list list-unstyled p-0 mt-5">
                <?php if( have_rows('lorem_group_1')): ?>
                  <?php while( have_rows('lorem_group_1')): the_row(); ?>
                    <li>
                      <?php
                        $lorem_title = get_sub_field('lorem_title');
                        $lorem_text = get_sub_field('lorem_text');
                      ?>
                      <div class="count-number"><?php echo $count++; ?></div>
                      <div class="lorem-title mb-3"><h4><?php echo $lorem_title; ?></h4></div>
                      <div class="lorem-text"><?php echo $lorem_text; ?></div>
                    </li>
                  <?php endwhile; ?>
                <?php endif; ?>
                <?php if( have_rows('lorem_group_2')): ?>
                  <?php while( have_rows('lorem_group_2')): the_row(); ?>
                    <li>
                      <?php
                        $lorem_title = get_sub_field('lorem_title');
                        $lorem_text = get_sub_field('lorem_text');
                      ?>
                      <div class="count-number"><?php echo $count++; ?></div>
                      <div class="lorem-title mb-3"><h4><?php echo $lorem_title; ?></h4></div>
                      <div class="lorem-text"><?php echo $lorem_text; ?></div>
                    </li>
                  <?php endwhile; ?>
                <?php endif; ?>
                <?php if( have_rows('lorem_group_3')): ?>
                  <?php while( have_rows('lorem_group_3')): the_row(); ?>
                    <li>
                      <?php
                        $lorem_title = get_sub_field('lorem_title');
                        $lorem_text = get_sub_field('lorem_text');
                      ?>
                      <div class="count-number"><?php echo $count++; ?></div>
                      <div class="lorem-title mb-3"><h4><?php echo $lorem_title; ?></h4></div>
                      <div class="lorem-text"><?php echo $lorem_text; ?></div>
                    </li>
                  <?php endwhile; ?>
                <?php endif; ?>
              </ul>

            <?php endwhile; ?>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>
</section>

<section id="business-outcomes" class="section-padding" style="background-color: <?php echo $background_color_3; ?>;">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <h5 class="section-title"><?php echo $section_title_3; ?></h5>
        <div class="section-heading mt-4">
          <h2 style="color: <?php echo $section_text_colour_3; ?>;"><?php echo $section_heading_3; ?></h2>
        </div>

         <?php if( have_rows('outcomes_group') ): ?>
          <?php while( have_rows('outcomes_group') ): the_row(); ?>

            <div class="row mt-4">
              <?php if( have_rows('outcomes_group_1')): ?>
                <?php while( have_rows('outcomes_group_1')): the_row(); ?>
                  <?php
                    $outcome_icon = get_sub_field('outcome_icon');
                    $outcome_title = get_sub_field('outcome_title');
                    $outcome_text = get_sub_field('outcome_text');
                  ?>
                  <div class="col-3">
                    <div class="outcome-wrapper">
                      <img src="<?php echo $outcome_icon; ?>">
                      <h4 class="mt-4" style="color: <?php echo $section_text_colour_3; ?>;">
                        <?php echo $outcome_title; ?>
                      </h4>
                      <div><?php echo $outcome_text; ?></div>
                    </div>
                  </div>
                <?php endwhile; ?>
              <?php endif; ?>

              <?php if( have_rows('outcomes_group_2')): ?>
                <?php while( have_rows('outcomes_group_2')): the_row(); ?>
                  <?php
                    $outcome_icon = get_sub_field('outcome_icon');
                    $outcome_title = get_sub_field('outcome_title');
                    $outcome_text = get_sub_field('outcome_text');
                  ?>
                  <div class="col-3">
                    <div class="outcome-wrapper">
                      <img src="<?php echo $outcome_icon; ?>">
                      <h4 class="mt-4" style="color: <?php echo $section_text_colour_3; ?>;">
                        <?php echo $outcome_title; ?>
                      </h4>
                      <div><?php echo $outcome_text; ?></div>
                    </div>
                  </div>
                <?php endwhile; ?>
              <?php endif; ?>

              <?php if( have_rows('outcomes_group_3')): ?>
                <?php while( have_rows('outcomes_group_3')): the_row(); ?>
                  <?php
                    $outcome_icon = get_sub_field('outcome_icon');
                    $outcome_title = get_sub_field('outcome_title');
                    $outcome_text = get_sub_field('outcome_text');
                  ?>
                  <div class="col-3">
                    <div class="outcome-wrapper">
                      <img src="<?php echo $outcome_icon; ?>">
                      <h4 class="mt-4" style="color: <?php echo $section_text_colour_3; ?>;">
                        <?php echo $outcome_title; ?>
                      </h4>
                      <div><?php echo $outcome_text; ?></div>
                    </div>
                  </div>
                <?php endwhile; ?>
              <?php endif; ?>

              <?php if( have_rows('outcomes_group_4')): ?>
                <?php while( have_rows('outcomes_group_4')): the_row(); ?>
                  <?php
                    $outcome_icon = get_sub_field('outcome_icon');
                    $outcome_title = get_sub_field('outcome_title');
                    $outcome_text = get_sub_field('outcome_text');
                  ?>
                  <div class="col-3">
                    <div class="outcome-wrapper">
                      <img src="<?php echo $outcome_icon; ?>">
                      <h4 class="mt-4" style="color: <?php echo $section_text_colour_3; ?>;">
                        <?php echo $outcome_title; ?>
                      </h4>
                      <div><?php echo $outcome_text; ?></div>
                    </div>
                  </div>
                <?php endwhile; ?>
              <?php endif; ?>

            </div>

          <?php endwhile; ?>
        <?php endif; ?>

      </div>
    </div>
  </div>
</section>


<?php get_footer(); ?>
