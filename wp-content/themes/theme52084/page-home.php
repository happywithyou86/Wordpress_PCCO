<?php
/**
* Template Name: Home Page
*/

get_header(); ?>

<div class="motopress-wrapper content-holder clearfix">


<?php if ( of_get_option( "px_slider_visibility", "true" ) == "true" ) { ?>
    <div class="extraslider">
        <?php get_template_part("includes/parallaxSlider"); ?>
    </div>
 <?php } else { ?>
  <div data-motopress-type="static" data-motopress-static-file="static/static-slider.php">
   <?php get_template_part("static/static-slider"); ?>
  </div>
 <?php } ?>
	<div class="container extra-zindex">
		<div class="row">
			<?php do_action( 'cherry_before_home_page_content' ); ?>
                    <?php // get_template_part("static/static-slider"); ?>
        			<div class="<?php echo apply_filters( 'cherry_home_layout', 'span12' ); ?>" data-motopress-wrapper-file="page-home.php" data-motopress-wrapper-type="content">
        				<div class="row">
        					<div class="<?php echo apply_filters( 'cherry_home_layout', 'span12' ); ?>" data-motopress-type="loop" data-motopress-loop-file="loop/loop-page.php">
        						<?php get_template_part("loop/loop-page"); ?>
        					</div>
        				</div>
        			</div>
			<?php do_action( 'cherry_after_home_page_content' ); ?>
		</div>
	</div>
</div>

<?php get_footer(); ?>