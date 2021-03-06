<?php
/**
 * Defines an array of options that will be used to generate the settings page and be saved in the database.
 * When creating the "id" fields, make sure to use all lowercase and no spaces.
 *
 */
if(!function_exists('optionsframework_options')) {
	function optionsframework_options() {
// Fonts
			global $typography_mixed_fonts;
			$typography_mixed_fonts = array_merge(options_typography_get_os_fonts() , options_typography_get_google_fonts());
			asort($typography_mixed_fonts);

			$options = array();
// ---------------------------------------------------------
// General
// ---------------------------------------------------------
			$options['general'] = array( "name" => theme_locals('general'),
								"type" => "heading");
			// Background Defaults
			$background_defaults = array(
				'color' => '#273448',
				'image' => '',
				'repeat' => 'repeat',
				'position' => 'top center',
				'attachment'=>'scroll'
			);
			$options['body_background'] = array(
								"id" => "body_background",
								"std" => $background_defaults);

			$options['main_layout'] = array(
								"id" => "main_layout",
								"std" => "fullwidth");

			$options['main_background'] = array(
								"id" => "main_background",
								"std" => "#fafafa");

			$header_bg_defaults = array(
				'color' => '',
				'image' => '',
				'repeat' => 'repeat',
				'position' => 'top center',
				'attachment'=>'scroll'
			);
			$options['header_background'] = array(
								"id" => "header_background",
								"std" => $header_bg_defaults);

			$options['links_color'] = array(
								"id" => "links_color",
								"std" => "#3a4755");

			$options['links_color_hover'] = array(
								"id" => "links_color_hover",
								"std" => "#ff781d");

			$options['google_mixed_3'] = array(
								'id' => 'google_mixed_3',
								'std' => array( 'size' => '13px', 'lineheight' => '24px', 'face' => 'Istok Web', 'style' => 'normal', 'character'  => 'latin', 'color' => '#9f9f9f'));

			$options['h1_heading'] = array(
								'id' => 'h1_heading',
								'std' => array( 'size' => '30px', 'lineheight' => '32px', 'face' => 'Istok Web', 'style' => 'normal', 'character'  => 'latin', 'color' => '#27384a'));

			$options['h2_heading'] = array(
								'id' => 'h2_heading',
								'std' => array( 'size' => '30px', 'lineheight' => '32px', 'face' => 'Istok Web', 'style' => 'normal', 'character'  => 'latin', 'color' => '#27384a'));

			$options['h3_heading'] = array(
								'id' => 'h3_heading',
								'std' => array( 'size' => '24px', 'lineheight' => '24px', 'face' => 'Istok Web', 'style' => 'normal', 'character'  => 'latin', 'color' => '#ff781d'));

			$options['h4_heading'] = array(
								'id' => 'h4_heading',
								'std' => array( 'size' => '18px', 'lineheight' => '24px', 'face' => 'Istok Web', 'style' => 'normal', 'character'  => 'latin', 'color' => '#ff781d'));

			$options['h5_heading'] = array(
								'id' => 'h5_heading',
								'std' => array( 'size' => '14px', 'lineheight' => '20px', 'face' => 'Istok Web', 'style' => 'normal', 'character'  => 'latin', 'color' => '#3a4755'));

			$options['h6_heading'] = array(
								'id' => 'h6_heading',
								'std' => array( 'size' => '18px', 'lineheight' => '24px', 'face' => 'Istok Web', 'style' => 'normal', 'character'  => 'latin', 'color' => '#27384a'));

			$options['g_search_box_id'] = array(
								"id" => "g_search_box_id",
								"disable" => "true",
								"std" => "no");

			$options['g_breadcrumbs_id'] = array(
								"id" => "g_breadcrumbs_id",
								"std" => "yes");

			$options['custom_css'] = array(
								"id" => "custom_css",
								"std" => "");

// ---------------------------------------------------------
// Logo & Favicon
// ---------------------------------------------------------
			$options["logo_favicon"] = array( "name" => theme_locals('logo_favicon'),
								"type" => "heading");

			$options['logo_type'] = array(
								"id" => "logo_type",
								"std" => "image_logo");

			$options['logo_typography'] = array(
								'id' => 'logo_typography',
								'std' => array( 'size' => '50px', 'lineheight' => '52px', 'face' => '"Times New Roman", Times, serif', 'style' => 'normal', 'character'  => 'latin', 'color' => '#1ba0cc'));

			$options['logo_url'] = array(
								"id" => "logo_url",
								"std" => CHILD_URL . "/images/logo.png");

			$options['favicon'] = array(
								"id" => "favicon",
								"std" => CHILD_URL . "/favicon.ico");

// ---------------------------------------------------------
// Navigation
// ---------------------------------------------------------
			$options['navigation'] = array( "name" => theme_locals('navigation'),
								"type" => "heading");

			$options['menu_typography'] = array(
								'id' => 'menu_typography',
								'std' => array( 'size' => '16px', 'lineheight' => '20px', 'face' => 'Istok Web', 'style' => 'normal', 'character'  => 'latin', 'color' => '#FFFFFF'));

			$options['sf_delay'] = array(
								"id" => "sf_delay",
								"std" => "1000");

			$options['sf_f_animation'] = array(
								"id" => "sf_f_animation",
								"std" => "show");

			$options['sf_sl_animation'] = array(
								"id" => "sf_sl_animation",
								"std" => "show");

			$options['sf_speed'] = array(
								"id" => "sf_speed",
								"std" => "normal");

			$options['sf_arrows'] = array(
								"id" => "sf_arrows",
								"std" => "true");

			$options['mobile_menu_label'] = array(
								"id" => "mobile_menu_label",
								"std" => theme_locals('mobile_menu_std'));
                                
			$options['stickup_menu'] = array(
								"name" => __('Use stickUp menu.', CHERRY_PLUGIN_DOMAIN),
								"desc" => __('Do you want to use stickUp menu?', CHERRY_PLUGIN_DOMAIN),
								"id" => "stickup_menu",
								"std" => "true",
								"type" => "radio",
								"options" => $true_false_array
			);

// ---------------------------------------------------------
// Slider
// ---------------------------------------------------------
			$options['slider'] = array( "name" => theme_locals('slider'),
								"type" => "heading");

	// Slider type
			$options['sl_type'] = array(
								"id" => "slider_type",
								"std" => "none_slider");
	// ---------------------------------------------------------
	// Camera Slider
	// ---------------------------------------------------------
			$options['sl_effect'] = array(
								"id" => "sl_effect",
								"std" => "simpleFade");

			$options['sl_columns'] = array(
								"id" => "sl_columns",
								"std" => "12");

			$options['sl_rows'] = array(
								"id" => "sl_rows",
								"std" => "8");

			$options['sl_banner'] = array(
								"id" => "sl_banner",
								"std" => "fadeIn");

			$options['sl_pausetime'] = array(
								"id" => "sl_pausetime",
								"std" => "7000");

			$options['sl_animation_speed'] = array(
								"id" => "sl_animation_speed",
								"std" => "1500");

			$options['sl_slideshow'] = array(
								"id" => "sl_slideshow",
								"std" => "true");

			$options['sl_thumbnails'] = array(
								"id" => "sl_thumbnails",
								"std" => "true"); // set "disabled" => "true" when only text in Slider posts

			$options['sl_control_nav'] = array(
								"id" => "sl_control_nav",
								"std" => "true");

			$options['sl_dir_nav'] = array(
								"id" => "sl_dir_nav",
								"std" => "true");

			$options['sl_dir_nav_hide'] = array(
								"id" => "sl_dir_nav_hide",
								"std" => "false");

			$options['sl_play_pause_button'] = array(
								"id" => "sl_play_pause_button",
								"std" => "true");

			$options['sl_pause_on_hover'] = array(
								"id" => "sl_pause_on_hover",
								"std" => "true");

			$options['sl_loader'] = array(
								"id" => "sl_loader",
								"std" => "no");
	// ---------------------------------------------------------
	// Accordion Slider
	// ---------------------------------------------------------
			$multicheck_defaults = array( '43' => 0,  '49' => 0, '50' => 0, '51' => 0, '52' => 0);
			$options['acc_show_post'] = array(
					"id" => "acc_show_post",
					"std" => $multicheck_defaults);

			$options['acc_slideshow'] = array(
								"id" => "acc_slideshow",
								"std" => "false");

			$options['acc_hover_pause'] = array(
								"id" => "acc_hover_pause",
								"std" => "true");

			$options['acc_pausetime'] = array(
								"id" => "acc_pausetime",
								"std" => "6000");

			$options['acc_animation_speed'] = array(
								"id" => "acc_animation_speed",
								"std" => "600");

			$options['acc_easing'] = array(
								"id" => "acc_easing",
								"std" => "easeOutCubic");

			$options['acc_trigger'] = array(
								"id" => "acc_trigger",
								"std" => "mouseover");

			$options['acc_starting_slide'] = array(
								"id" => "acc_starting_slide",
								"std" => "0");
// ---------------------------------------------------------
// Blog
// --------------------------------------------------------
			$options['blog'] = array( "name" => theme_locals('blog'),
								"type" => "heading");

			$options['blog_text'] = array(
								"id" => "blog_text",
								"std" => __("events", CURRENT_THEME));

                                

			$options['blog_related'] = array(
								"id" => "blog_related",
								"std" => theme_locals('posts_std'));

			$options['blog_sidebar_pos'] = array(
								"id" => "blog_sidebar_pos",
								"std" => "right");

			$options['post_image_size'] = array(
								"id" => "post_image_size",
								"std" => "large");

			$options['single_image_size'] = array(
								"id" => "single_image_size",
								"std" => "large");

			$options['post_meta'] = array(
								"id" => "post_meta",
								"std" => "true");

			$options['post_meta_display'] = array(
								"id" => "post_meta_display",
								"std" => "only_post");

			$options['post_excerpt'] = array(
								"id" => "post_excerpt",
								"std" => "true");

// ---------------------------------------------------------
// Portfolio
// ---------------------------------------------------------
			$options['portfolio'] = array(
								"name" => theme_locals("portfolio"),
								"type" => "heading");

			$options['folio_filter'] = array(
								"id" => "folio_filter",
								"std" => "cat");

			$options['folio_title'] = array(
								"id" => "folio_title",
								"std" => "yes");

			$options['folio_excerpt'] = array(
								"id" => "folio_excerpt",
								"std" => "yes");

			$options['folio_excerpt_count'] = array(
								"id" => "folio_excerpt_count",
								"std" => "20");

			$options['folio_btn'] = array(
								"id" => "folio_btn",
								"std" => "yes");

			$options['folio_meta'] = array(
								"id" => "folio_meta",
								"std" => "yes");

			$options['layout_mode'] = array(
								"id" => "layout_mode",
								"std" => "fitRows");

			$options['items_count2'] = array(
								"id" => "items_count2",
								"std" => "8");

			$options['items_count3'] = array(
								"id" => "items_count3",
								"std" => "9");

			$options['items_count4'] = array(
								"id" => "items_count4",
								"std" => "12");

// ---------------------------------------------------------
// Footer
// ---------------------------------------------------------
			$options['footer'] = array( "name" => theme_locals("footer"),
								"type" => "heading");

			$options['footer_text'] = array(
								"id" => "footer_text",
								"std" => "");

			$options['ga_code'] = array(
								"id" => "ga_code",
								"std" => "");

			$options['feed_url'] = array(
								"id" => "feed_url",
								"std" => "");

			$options['footer_menu'] = array(
								"id" => "footer_menu",
								"std" => "true");

			$options['footer_menu_typography'] = array(
								'id' => 'footer_menu_typography',
								'std' => array( 'size' => '10px', 'lineheight' => '18px', 'face' => 'Istok Web', 'style' => 'normal', 'character'  => 'latin', 'color' => '#88a1ad'));
	

    
// ---------------------------------------------------------
			// Parallax Slider
			// ---------------------------------------------------------
			$options['px_slider'] = array(
								"name" => __( 'Parallax Slider', CURRENT_THEME ),
								"type" => "heading"
			);

			$options['px_slider_visibility'] = array(
									"name" => __( 'Display Parallax Slider?', CURRENT_THEME ),
									"desc"    => __( 'Display Parallax Slider?', CURRENT_THEME ),
									"id"      => "px_slider_visibility",
									"type"    => "radio",
									"std"     => "true",
									"options" => array(
													"true" => theme_locals("yes"),
													"false" => theme_locals("no"),
												),
			);
                        $options['px_slider_effect'] = array(
									"name" => __( 'Sliding effect', CURRENT_THEME ),
									"desc"    => __( 'Select your animation type.', CURRENT_THEME ),
									"id"      => "px_slider_effect",
									"type"    => "select",
									"std"     => "zoom-fade-eff",
									"options" => array(
													"simple-fade-eff" => __( 'Simple Fade', CURRENT_THEME ),
													"zoom-fade-eff" => __( 'Zoom Fade', CURRENT_THEME ),
													"slide-top-eff" => __( 'Slide Top', CURRENT_THEME ),
												),
			);
			$options['px_slider_auto'] = array(
									"name" => __( 'Slideshow', CURRENT_THEME ),
									"desc"    => __( 'Animate slider automatically?', CURRENT_THEME ),
									"id"      => "px_slider_auto",
									"type"    => "radio",
									"std"     => "true",
									"options" => array(
													"true" => theme_locals("yes"),
													"false" => theme_locals("no"),
												),
			);

			$options['px_slider_pause'] = array(
									"name" => __( 'Pause time', CURRENT_THEME ),
									"desc"    => __( 'Pause time (ms).', CURRENT_THEME ),
									"id"      => "px_slider_pause",
									"type"    => "text",
									"std"     => "15000",
			);

			$options['px_slider_speed'] = array(
									"name" => __( 'Animation speed', CURRENT_THEME ),
									"desc"    => __( 'Animation speed (ms).', CURRENT_THEME ),
									"id"      => "px_slider_speed",
									"type"    => "text",
									"std"     => "1500",
			);

			$options['px_slider_pags'] = array(
									"name" => __( 'Pagination', CURRENT_THEME ),
									"desc"    => __( 'Display pagination?', CURRENT_THEME ),
									"id"      => "px_slider_pags",
									"type"    => "radio",
									"std"     => "false",
									"options" => array(
													"true" => theme_locals("yes"),
													"false" => theme_locals("no"),
												),
			);

			$options['px_slider_navs'] = array(
									"name" => __( 'Next & Prev navigation', CURRENT_THEME ),
									"desc"    => __( 'Display next & prev navigation?', CURRENT_THEME ),
									"id"      => "px_slider_navs",
									"type"    => "radio",
									"std"     => "true",
									"options" => array(
													"true" => theme_locals("yes"),
													"false" => theme_locals("no"),
												),
			);
    
           
            //Social Links
            
        		$options[] = array( 
        							"name" => "Social",
        							"type" => "heading"
        		);
                
         		$options['google'] = array( 
        							"name" => "Google+ URL",
        							"desc" => "Google+ URL",
        							"id" => "google",
        							"std" => "#",
        							"type" => "text"
               );
               
         		$options['linkedin'] = array( 
        							"name" => "Linkedin",
        							"desc" => "Linkedin  URL",
        							"id" => "linkedin",
        							"std" => "#",
        							"type" => "text"
               );
                
        		$options['rss'] = array( 
        							"name" => "RSS",
        							"desc" => "RSS URL",
        							"id" => "rss",
        							"std" => "#",
        							"type" => "text" 
                );
                
        		$options['pinterest'] = array( 
        							"name" => "Pinterest URL",
        							"desc" => "Pinterest URL",
        							"id" => "pinterest",
        							"std" => "#",
        							"type" => "text"
               );
               
               
        		
        		$options['facebook'] = array( 
        							"name" => "Facebook URL",
        							"desc" => "Facebook URL",
        							"id" => "facebook",
        							"std" => "#",
        							"type" => "text"
        		);		
        									
      		//End Social Links	
            
                //Support
                
                
                	$options[] = array( 
                						"name" => "Support",
                						"type" => "heading"
                	);
                    
                    
                	$options['support'] = array( 
    						"name" => __( 'Support', CURRENT_THEME ),
    						"desc" => __( 'Support', CURRENT_THEME ),
    						"id" => "support",
                            "std" => get_stylesheet_directory_uri() . "/images/support.png",
						    "type" => "upload"
                    );
                                        
                    
                	$options['support1_1'] = array( 
    					"name" => __( 'Telephone text', CURRENT_THEME ),
    					"desc" => __( 'Telephone text', CURRENT_THEME ),
    					"id" => "support1_1",
    					"std" => "Free Phone: -",
    					"type" => "text"
                	); 
                	$options['support1_2'] = array( 
    					"name" => __( 'Phone number', CURRENT_THEME ),
    					"desc" => __( 'Phone number', CURRENT_THEME ),
    					"id" => "support1_2",
    					"std" => "0800 368 0380",
    					"type" => "text"
                	); 
                    
                    
                    
                    /* help */ 
                    
                    
                    //Help

                	$options[] = array( 
                						"name" => "Help",
                						"type" => "heading"
                	);
                    
                    
                    $options['help_link1'] = array( 
						"name" => "Help link 1",
						"desc" => "Help link 1",
						"id" => "help_link1",
                        "std" => get_bloginfo('url') . "/about/faqs/",
					    "type" => "text"
                    );
                    $options['help_text-1'] = array( 
						"name" => "Help text 1",
						"desc" => "Help text 1",
						"id" => "help_text-1",
                        "std" => 'How May We Help?',
					    "type" => "text"
                    );
                    
                    $options['help_link2'] = array( 
						"name" => "Help link 2",
						"desc" => "Help link 2",
						"id" => "help_link2",
                        "std" => get_bloginfo('url') . "/about/faqs/",
					    "type" => "text"
                    );
                    $options['help_text-2'] = array( 
						"name" => "Help text 2",
						"desc" => "Help text 2",
						"id" => "help_text-2",
                        "std" => 'where can i find?',
					    "type" => "text"
                    );
            
    
    	return $options;
	}
}
?>
