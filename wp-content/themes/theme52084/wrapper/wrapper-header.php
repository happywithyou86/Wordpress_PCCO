<?php /* Wrapper Name: Header */ ?>
<div class="row">
	<div class="span5" data-motopress-type="static" data-motopress-static-file="static/static-logo.php">
		<?php get_template_part("static/static-logo"); ?>
	</div>
	<div class="span7">
        <div class="header_block1">
        	<div class="social-nets-wrapper" data-motopress-type="static" data-motopress-static-file="static/static-social-networks.php">
        		<?php get_template_part("static/static-social-networks"); ?>
        	</div>
        	<div class="support-wrapper" data-motopress-type="static" data-motopress-static-file="static/static-support.php">
        	   <?php get_template_part("static/static-support"); ?>
        	</div>
        </div>
	</div>
</div>
<div class="menu_holder">
    <div class="row">
    	<div class="span9 <?php echo cherry_get_layout_class( 'full_width_content' ); ?>" data-motopress-type="static" data-motopress-static-file="static/static-nav.php">
    		<?php get_template_part("static/static-nav"); ?>
    	</div>
	   <div class="span3">
        	<div class="help-wrapper" data-motopress-type="static" data-motopress-static-file="static/static-help.php">
        	   <?php get_template_part("static/static-help"); ?>
        	</div>
       </div>
    </div>
</div>