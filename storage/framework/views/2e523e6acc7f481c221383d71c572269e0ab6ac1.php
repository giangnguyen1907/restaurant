<!DOCTYPE html>
<html lang="vi" class="loading-site no-js">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>

   <?php
   $seo_title = $seo_title ?? ($page->title ?? ($web_information->information->seo_title ?? ''));
   $seo_keyword = $seo_keyword ?? ($page->keyword ?? ($web_information->information->seo_keyword ?? ''));
   $seo_description = $seo_description ?? ($page->description ?? ($web_information->information->seo_description ?? ''));
   ?>
   <title>Contact</title>
   <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1" />
   <meta http-equiv="content-type" content="text/html; charset=utf-8" />
   <meta name="robots" content="index, follow" />
   <meta http-equiv="Content-Language" content="vi" />
   <meta name="copyright" content="Copyright" />
   <meta name="description" content="<?php echo e($seo_description); ?>" />
   <meta name="keywords" content="<?php echo e($seo_keyword); ?>" />
   <meta name="DC.title" content="<?php echo e($seo_title); ?>" />
   <meta property="og:type" name="ogtype" content="Website" />
   <meta property="og:title" name="ogtitle" content="<?php echo e($seo_title); ?>" />
   <meta property="og:image" name="ogimage" content="<?php echo e($web_information->image->logo_header ?? ''); ?>" />
   <meta property="og:sitename" content="<?php echo e(Request::fullUrl()); ?>" />
   <link rel="canonical" href="<?php echo e(Request::fullUrl()); ?>" />
   <link rel="shortcut icon" type="image/png" href="<?php echo e($web_information->image->favicon ?? ''); ?>" />

   <?php echo $__env->make('frontend.panels.styles', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
   <link rel='stylesheet' id='elementor-post-4716-css' href='<?php echo e(asset('themes/frontend/home_files/css/post-5160.css')); ?>' type='text/css' media='all' />

</head>

<body class="page-template-default page page-id-5160 theme-grandrestaurant woocommerce-js tg_lightbox_black loftloader-lite-enabled elementor-default elementor-kit-24 elementor-page elementor-page-5160 e--ua-isTouchDevice e--ua-blink e--ua-edge e--ua-webkit smoove-overflow loaded has-smoove" data-elementor-device-mode="desktop">
   <div id="loftloader-wrapper" class="pl-imgloading" data-show-close-time="15000" data-max-load-time="0">
      <div class="loader-section section-fade"></div>
      <div class="loader-inner">
         <div id="loader">
            <div class="imgloading-container"><span style="background-image: url(themes/frontend/home_files/images/logo@2x.png);"></span></div><img width="130" height="43" data-no-lazy="1" class="skip-lazy" alt="loader image" src="themes/frontend/home_files/images/logo@2x.png">
         </div>
      </div>
      <div class="loader-close-button" style=""><span class="screen-reader-text">Close</span></div>
   </div>
   <input type="hidden" id="pp_menu_layout" name="pp_menu_layout" value="classicmenu">
   <input type="hidden" id="pp_enable_right_click" name="pp_enable_right_click" value="">
   <input type="hidden" id="pp_enable_dragging" name="pp_enable_dragging" value="0">
   <input type="hidden" id="pp_image_path" name="pp_image_path" value="https://grandrestaurantv6.b-cdn.net/grandrestaurantv6/wp-content/themes/grandrestaurant/images/">
   <input type="hidden" id="pp_homepage_url" name="pp_homepage_url" value="https://themes.themegoods.com/grandrestaurantv6">
   <input type="hidden" id="pp_ajax_search" name="pp_ajax_search" value="">
   <input type="hidden" id="pp_fixed_menu" name="pp_fixed_menu" value="1">
   <input type="hidden" id="pp_topbar" name="pp_topbar" value="">
   <input type="hidden" id="post_client_column" name="post_client_column" value="4">
   <input type="hidden" id="pp_back" name="pp_back" value="Back">
   <input type="hidden" id="pp_page_title_img_blur" name="pp_page_title_img_blur" value="1">
   <input type="hidden" id="pp_reservation_start_time" name="pp_reservation_start_time" value="11:00">
   <input type="hidden" id="pp_reservation_end_time" name="pp_reservation_end_time" value="21:00">
   <input type="hidden" id="pp_reservation_time_step" name="pp_reservation_time_step" value="30">
   <input type="hidden" id="pp_reservation_date_format" name="pp_reservation_date_format" value="mm/dd/yy">
   <input type="hidden" id="pp_reservation_24hours" name="pp_reservation_24hours" value="">
   <input type="hidden" id="grandrestaurant_header_content" name="grandrestaurant_header_content" value="content">
   <input type="hidden" id="tg_enable_theme_lightbox" name="tg_enable_theme_lightbox" value="1">
   <input type="hidden" id="tg_lightbox_thumbnails" name="tg_lightbox_thumbnails" value="1">
   <input type="hidden" id="tg_lightbox_enable_title" name="tg_lightbox_enable_title" value="">

   <input type="hidden" id="pp_footer_style" name="pp_footer_style" value="4">

   <?php echo $__env->make('frontend.element.menu_mobile', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>



   <div id="wrapper" class="hasbg transparent" style="padding-top: 149px; background-color: rgb(255, 255, 255);">

      <div id="elementor-header" class="main-menu-wrapper">
         <div data-elementor-type="wp-post" data-elementor-id="148" class="elementor elementor-148">
            <section class="elementor-section elementor-top-section elementor-element elementor-element-ec7022f elementor-section-content-middle elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="ec7022f" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;grandrestaurant_ext_is_background_parallax&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_background_backdrop&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_background_on_scroll&quot;:&quot;false&quot;}">
               <?php echo $__env->make('frontend.element.header_top', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </section>
            <section class="elementor-section elementor-top-section elementor-element elementor-element-4430805 elementor-section-content-middle elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="4430805" data-element_type="section" data-settings="{&quot;grandrestaurant_ext_is_background_parallax&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_background_backdrop&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_background_on_scroll&quot;:&quot;false&quot;}">
               <?php echo $__env->make('frontend.element.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </section>

         </div>
      </div>
      <?php echo $__env->make('frontend.element.custom', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      <div id="page_content_wrapper" class=" ">
         <div class="inner">
            <!-- Begin main content -->
            <div class="inner_wrapper">
               <div class="sidebar_content full_width">

                  <div data-elementor-type="wp-page" data-elementor-id="5160" class="elementor elementor-5160">


                     <section class="elementor-section elementor-top-section elementor-element elementor-element-1b4a606 elementor-section-height-min-height elementor-section-stretched elementor-section-boxed elementor-section-height-default elementor-section-items-middle jarallax" data-element_type="section" data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;,&quot;background_background&quot;:&quot;classic&quot;,&quot;grandrestaurant_ext_is_background_parallax&quot;:&quot;true&quot;,&quot;shape_divider_top&quot;:&quot;split&quot;,&quot;grandrestaurant_ext_is_background_parallax_speed&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0.8000000000000000444089209850062616169452667236328125,&quot;sizes&quot;:[]},&quot;grandrestaurant_ext_is_background_backdrop&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_background_on_scroll&quot;:&quot;false&quot;}" style="background-image: none; width: 1857px; left: -343.5px;">
                        <div class="elementor-shape elementor-shape-bottom" data-negative="false">
                           <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 20" preserveAspectRatio="none">
                              <path class="elementor-shape-fill" d="M0,0v3c0,0,393.8,0,483.4,0c9.2,0,16.6,7.4,16.6,16.6c0-9.1,7.4-16.6,16.6-16.6C606.2,3,1000,3,1000,3V0H0z"></path>
                           </svg>
                        </div>
                        <div class="elementor-container elementor-column-gap-default">
                           <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-5a5aff9" data-id="5a5aff9" data-element_type="column" data-settings="{&quot;grandrestaurant_ext_link_reservation&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_link_sidemenu&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_link_fullmenu&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_link_closed_fullmenu&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_scrollme&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_smoove&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_parallax_mouse&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_infinite&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_fadeout_animation&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_mobile_static&quot;:&quot;false&quot;}">
                              <div class="elementor-widget-wrap elementor-element-populated">
                                 <div class="elementor-element elementor-element-ac25f27 elementor-widget__width-inherit elementor-widget elementor-widget-grandrestaurant-animated-text" data-id="ac25f27 " data-element_type="widget" data-settings="{&quot;grandrestaurant_ext_link_reservation&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_link_sidemenu&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_link_fullmenu&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_link_closed_fullmenu&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_scrollme&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_smoove&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_parallax_mouse&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_infinite&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_mobile_static&quot;:&quot;false&quot;}" data-widget_type="grandrestaurant-animated-text.default">
                                    <div class="elementor-widget-container">
                                       <div class="themegoods-animated-text text-alignment-center transition-bottom overflow-hidden blast-root" data-delimiter="sentence" data-transition="100" data-transition-delay="200" data-transition-duration="800">
                                          <h2>
                                             <span class="blast" style="transition-delay: 300ms; transition-duration: 800ms; transform: translateX(0px) translateY(0px) translateZ(0px); opacity: 1;">
                                                Get in</span>
                                          </h2>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="elementor-element elementor-element-02b5d64 elementor-widget__width-auto elementor-widget elementor-widget-grandrestaurant-animated-text" style="margin:auto;" data-id="02b5d64" data-element_type="widget" data-settings="{&quot;grandrestaurant_ext_link_reservation&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_link_sidemenu&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_link_fullmenu&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_link_closed_fullmenu&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_scrollme&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_smoove&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_parallax_mouse&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_infinite&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_mobile_static&quot;:&quot;false&quot;}" data-widget_type="grandrestaurant-animated-text.default">
                                    <div class="elementor-widget-container">
                                       <div class="themegoods-animated-text text-alignment-left transition-bottom overflow-hidden blast-root" data-delimiter="word" data-transition="100" data-transition-delay="400" data-transition-duration="800">
                                          <h2>
                                             <span class="blast" style="transition-delay: 400ms; transition-duration: 800ms; transform: translateX(0px) translateY(0px) translateZ(0px); opacity: 1;">Contact</span>
                                          </h2>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div id="jarallax-container-1" style="position: absolute; top: 0px; left: 0px; width: 100%; height: 100%; overflow: hidden; z-index: -100;">
                           <img class="jarallax-img" src="<?php echo e(asset('themes/frontend/home_files/images/interior-view-ofa-city-restaurant-PTWGQXH.jpg')); ?>" style="object-fit: cover; object-position: 50% 50%; max-width: none; position: absolute; top: 0px; left: 0px; width: 1857px; height: 633.75px; overflow: hidden; pointer-events: none; transform-style: preserve-3d; backface-visibility: hidden; will-change: transform, opacity;">
                        </div>
                     </section>
                     <section class="elementor-section elementor-top-section elementor-element elementor-element-99a3139 elementor-section-full_width elementor-section-stretched elementor-section-height-default elementor-section-height-default" data-id="99a3139" data-element_type="section" data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;,&quot;grandrestaurant_ext_is_background_parallax&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_background_backdrop&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_background_on_scroll&quot;:&quot;false&quot;}" style="width: 1343px; left: -86.5px;">
                        <div class="elementor-container elementor-column-gap-default">
                           <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-1b0612c" data-id="1b0612c" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;grandrestaurant_ext_link_reservation&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_link_sidemenu&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_link_fullmenu&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_link_closed_fullmenu&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_scrollme&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_smoove&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_parallax_mouse&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_infinite&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_fadeout_animation&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_mobile_static&quot;:&quot;false&quot;}">
                              <div class="elementor-widget-wrap elementor-element-populated smooved" style="perspective: 1000px;">
                                 <div class="elementor-element elementor-element-9335264 elementor-widget elementor-widget-heading init-smoove smooved" data-id="9335264" data-element_type="widget" data-settings="{&quot;grandrestaurant_ext_is_smoove&quot;:&quot;true&quot;,&quot;grandrestaurant_ext_smoove_disable&quot;:&quot;769&quot;,&quot;grandrestaurant_ext_smoove_duration&quot;:1000,&quot;grandrestaurant_ext_smoove_translatey&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:40,&quot;sizes&quot;:[]},&quot;grandrestaurant_ext_link_reservation&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_link_sidemenu&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_link_fullmenu&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_link_closed_fullmenu&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_scrollme&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_smoove_scalex&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:1,&quot;sizes&quot;:[]},&quot;grandrestaurant_ext_smoove_scaley&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:1,&quot;sizes&quot;:[]},&quot;grandrestaurant_ext_smoove_rotatex&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;grandrestaurant_ext_smoove_rotatey&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;grandrestaurant_ext_smoove_rotatez&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;grandrestaurant_ext_smoove_translatex&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;grandrestaurant_ext_smoove_translatez&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;grandrestaurant_ext_smoove_skewx&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;grandrestaurant_ext_smoove_skewy&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;grandrestaurant_ext_smoove_perspective&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:1000,&quot;sizes&quot;:[]},&quot;grandrestaurant_ext_is_parallax_mouse&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_infinite&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_fadeout_animation&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_mobile_static&quot;:&quot;false&quot;}" data-widget_type="heading.default" style="transition-duration: 1000ms; opacity: 1;">
                                    <div class="elementor-widget-container">
                                       <h2 class="elementor-heading-title elementor-size-default">Contact Us</h2>
                                    </div>
                                 </div>
                                 <section class="elementor-section elementor-inner-section elementor-element elementor-element-d80b255 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="d80b255" data-element_type="section" data-settings="{&quot;grandrestaurant_ext_is_background_parallax&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_background_backdrop&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_background_on_scroll&quot;:&quot;false&quot;}">
                                    <div class="elementor-container elementor-column-gap-default">
                                    <?php
                                    foreach($blocksContent as $bl){
                                    if($bl->block_code=="time" && $bl->parent_id == Null){
                                    ?>
                                       <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-bc989a1" data-id="bc989a1" data-element_type="column" data-settings="{&quot;grandrestaurant_ext_link_reservation&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_link_sidemenu&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_link_fullmenu&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_link_closed_fullmenu&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_scrollme&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_smoove&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_parallax_mouse&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_infinite&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_fadeout_animation&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_mobile_static&quot;:&quot;false&quot;}">
                                          <div class="elementor-widget-wrap elementor-element-populated smooved">
                                             <div class="elementor-element elementor-element-930975e elementor-widget elementor-widget-heading init-smoove smooved" data-id="930975e" data-element_type="widget" data-settings="{&quot;grandrestaurant_ext_is_smoove&quot;:&quot;true&quot;,&quot;grandrestaurant_ext_smoove_disable&quot;:&quot;769&quot;,&quot;grandrestaurant_ext_smoove_duration&quot;:1000,&quot;grandrestaurant_ext_smoove_translatey&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:40,&quot;sizes&quot;:[]},&quot;grandrestaurant_ext_link_reservation&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_link_sidemenu&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_link_fullmenu&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_link_closed_fullmenu&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_scrollme&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_smoove_scalex&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:1,&quot;sizes&quot;:[]},&quot;grandrestaurant_ext_smoove_scaley&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:1,&quot;sizes&quot;:[]},&quot;grandrestaurant_ext_smoove_rotatex&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;grandrestaurant_ext_smoove_rotatey&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;grandrestaurant_ext_smoove_rotatez&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;grandrestaurant_ext_smoove_translatex&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;grandrestaurant_ext_smoove_translatez&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;grandrestaurant_ext_smoove_skewx&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;grandrestaurant_ext_smoove_skewy&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;grandrestaurant_ext_smoove_perspective&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:1000,&quot;sizes&quot;:[]},&quot;grandrestaurant_ext_is_parallax_mouse&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_infinite&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_fadeout_animation&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_mobile_static&quot;:&quot;false&quot;}" data-widget_type="heading.default" style="transition-duration: 1000ms; opacity: 1;">
                                                <div class="elementor-widget-container">
                                                   <h4 class="elementor-heading-title elementor-size-default"><?php echo e($bl->title); ?> </h4>
                                                </div>
                                             </div>
                                             <div class="elementor-element elementor-element-a787091 elementor-widget elementor-widget-heading init-smoove smooved" data-id="a787091" data-element_type="widget" data-settings="{&quot;grandrestaurant_ext_is_smoove&quot;:&quot;true&quot;,&quot;grandrestaurant_ext_smoove_disable&quot;:&quot;769&quot;,&quot;grandrestaurant_ext_smoove_duration&quot;:1000,&quot;grandrestaurant_ext_smoove_translatey&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:40,&quot;sizes&quot;:[]},&quot;grandrestaurant_ext_link_reservation&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_link_sidemenu&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_link_fullmenu&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_link_closed_fullmenu&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_scrollme&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_smoove_scalex&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:1,&quot;sizes&quot;:[]},&quot;grandrestaurant_ext_smoove_scaley&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:1,&quot;sizes&quot;:[]},&quot;grandrestaurant_ext_smoove_rotatex&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;grandrestaurant_ext_smoove_rotatey&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;grandrestaurant_ext_smoove_rotatez&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;grandrestaurant_ext_smoove_translatex&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;grandrestaurant_ext_smoove_translatez&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;grandrestaurant_ext_smoove_skewx&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;grandrestaurant_ext_smoove_skewy&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;grandrestaurant_ext_smoove_perspective&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:1000,&quot;sizes&quot;:[]},&quot;grandrestaurant_ext_is_parallax_mouse&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_infinite&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_fadeout_animation&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_mobile_static&quot;:&quot;false&quot;}" data-widget_type="heading.default" style="transition-duration: 1000ms; opacity: 1;">
                                                <div class="elementor-widget-container">
                                                   <span class="elementor-heading-title elementor-size-default"><?php echo e($bl->brief); ?> </span>
                                                </div>
                                             </div>
                                             <div class="elementor-element elementor-element-354d2a0 elementor-widget elementor-widget-heading init-smoove smooved" data-id="354d2a0" data-element_type="widget" data-settings="{&quot;grandrestaurant_ext_is_smoove&quot;:&quot;true&quot;,&quot;grandrestaurant_ext_smoove_disable&quot;:&quot;769&quot;,&quot;grandrestaurant_ext_smoove_duration&quot;:1000,&quot;grandrestaurant_ext_smoove_translatey&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:40,&quot;sizes&quot;:[]},&quot;grandrestaurant_ext_link_reservation&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_link_sidemenu&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_link_fullmenu&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_link_closed_fullmenu&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_scrollme&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_smoove_scalex&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:1,&quot;sizes&quot;:[]},&quot;grandrestaurant_ext_smoove_scaley&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:1,&quot;sizes&quot;:[]},&quot;grandrestaurant_ext_smoove_rotatex&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;grandrestaurant_ext_smoove_rotatey&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;grandrestaurant_ext_smoove_rotatez&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;grandrestaurant_ext_smoove_translatex&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;grandrestaurant_ext_smoove_translatez&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;grandrestaurant_ext_smoove_skewx&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;grandrestaurant_ext_smoove_skewy&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;grandrestaurant_ext_smoove_perspective&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:1000,&quot;sizes&quot;:[]},&quot;grandrestaurant_ext_is_parallax_mouse&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_infinite&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_fadeout_animation&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_mobile_static&quot;:&quot;false&quot;}" data-widget_type="heading.default" style="transition-duration: 1000ms; opacity: 1;">
                                                <div class="elementor-widget-container">
                                                   <span class="elementor-heading-title elementor-size-default"><?php echo $bl->content; ?> </span>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <?php 
                                    }
                                    } 
                                       ?>
                                      
                                    </div>
                                 </section>
                                 <section class="elementor-section elementor-inner-section elementor-element elementor-element-5e2c95a elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="5e2c95a" data-element_type="section" data-settings="{&quot;grandrestaurant_ext_is_background_parallax&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_background_backdrop&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_background_on_scroll&quot;:&quot;false&quot;}">
                                    <div class="elementor-container elementor-column-gap-default">
                                       <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-7f4bbdb" data-id="7f4bbdb" data-element_type="column" data-settings="{&quot;grandrestaurant_ext_link_reservation&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_link_sidemenu&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_link_fullmenu&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_link_closed_fullmenu&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_scrollme&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_smoove&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_parallax_mouse&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_infinite&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_fadeout_animation&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_mobile_static&quot;:&quot;false&quot;}">
                                          <div class="elementor-widget-wrap elementor-element-populated smooved">
                                             <div class="elementor-element elementor-element-19665f7 elementor-widget elementor-widget-heading init-smoove smooved" data-id="19665f7" data-element_type="widget" data-settings="{&quot;grandrestaurant_ext_is_smoove&quot;:&quot;true&quot;,&quot;grandrestaurant_ext_smoove_disable&quot;:&quot;769&quot;,&quot;grandrestaurant_ext_smoove_duration&quot;:1000,&quot;grandrestaurant_ext_smoove_translatey&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:40,&quot;sizes&quot;:[]},&quot;grandrestaurant_ext_link_reservation&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_link_sidemenu&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_link_fullmenu&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_link_closed_fullmenu&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_scrollme&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_smoove_scalex&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:1,&quot;sizes&quot;:[]},&quot;grandrestaurant_ext_smoove_scaley&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:1,&quot;sizes&quot;:[]},&quot;grandrestaurant_ext_smoove_rotatex&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;grandrestaurant_ext_smoove_rotatey&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;grandrestaurant_ext_smoove_rotatez&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;grandrestaurant_ext_smoove_translatex&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;grandrestaurant_ext_smoove_translatez&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;grandrestaurant_ext_smoove_skewx&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;grandrestaurant_ext_smoove_skewy&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;grandrestaurant_ext_smoove_perspective&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:1000,&quot;sizes&quot;:[]},&quot;grandrestaurant_ext_is_parallax_mouse&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_infinite&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_fadeout_animation&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_mobile_static&quot;:&quot;false&quot;}" data-widget_type="heading.default" style="transition-duration: 1000ms; opacity: 1;">
                                                <div class="elementor-widget-container">
                                                   <h4 class="elementor-heading-title elementor-size-default">Location</h4>
                                                </div>
                                             </div>
                                             <div class="elementor-element elementor-element-5fcb112 elementor-widget elementor-widget-heading init-smoove smooved" data-id="5fcb112" data-element_type="widget" data-settings="{&quot;grandrestaurant_ext_is_smoove&quot;:&quot;true&quot;,&quot;grandrestaurant_ext_smoove_disable&quot;:&quot;769&quot;,&quot;grandrestaurant_ext_smoove_duration&quot;:1000,&quot;grandrestaurant_ext_smoove_translatey&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:40,&quot;sizes&quot;:[]},&quot;grandrestaurant_ext_link_reservation&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_link_sidemenu&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_link_fullmenu&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_link_closed_fullmenu&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_scrollme&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_smoove_scalex&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:1,&quot;sizes&quot;:[]},&quot;grandrestaurant_ext_smoove_scaley&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:1,&quot;sizes&quot;:[]},&quot;grandrestaurant_ext_smoove_rotatex&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;grandrestaurant_ext_smoove_rotatey&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;grandrestaurant_ext_smoove_rotatez&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;grandrestaurant_ext_smoove_translatex&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;grandrestaurant_ext_smoove_translatez&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;grandrestaurant_ext_smoove_skewx&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;grandrestaurant_ext_smoove_skewy&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;grandrestaurant_ext_smoove_perspective&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:1000,&quot;sizes&quot;:[]},&quot;grandrestaurant_ext_is_parallax_mouse&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_infinite&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_fadeout_animation&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_mobile_static&quot;:&quot;false&quot;}" data-widget_type="heading.default" style="transition-duration: 1000ms; opacity: 1;">
                                                <div class="elementor-widget-container">
                                                   <span class="elementor-heading-title elementor-size-default"><?php echo $web_information->information->address ?? ''; ?></span>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-8c4492f" data-id="8c4492f" data-element_type="column" data-settings="{&quot;grandrestaurant_ext_link_reservation&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_link_sidemenu&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_link_fullmenu&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_link_closed_fullmenu&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_scrollme&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_smoove&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_parallax_mouse&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_infinite&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_fadeout_animation&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_mobile_static&quot;:&quot;false&quot;}">
                                          <div class="elementor-widget-wrap elementor-element-populated smooved">
                                             <div class="elementor-element elementor-element-59166c7 elementor-widget elementor-widget-heading init-smoove smooved" data-id="59166c7" data-element_type="widget" data-settings="{&quot;grandrestaurant_ext_is_smoove&quot;:&quot;true&quot;,&quot;grandrestaurant_ext_smoove_disable&quot;:&quot;769&quot;,&quot;grandrestaurant_ext_smoove_duration&quot;:1000,&quot;grandrestaurant_ext_smoove_translatey&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:40,&quot;sizes&quot;:[]},&quot;grandrestaurant_ext_link_reservation&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_link_sidemenu&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_link_fullmenu&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_link_closed_fullmenu&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_scrollme&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_smoove_scalex&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:1,&quot;sizes&quot;:[]},&quot;grandrestaurant_ext_smoove_scaley&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:1,&quot;sizes&quot;:[]},&quot;grandrestaurant_ext_smoove_rotatex&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;grandrestaurant_ext_smoove_rotatey&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;grandrestaurant_ext_smoove_rotatez&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;grandrestaurant_ext_smoove_translatex&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;grandrestaurant_ext_smoove_translatez&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;grandrestaurant_ext_smoove_skewx&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;grandrestaurant_ext_smoove_skewy&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;grandrestaurant_ext_smoove_perspective&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:1000,&quot;sizes&quot;:[]},&quot;grandrestaurant_ext_is_parallax_mouse&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_infinite&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_fadeout_animation&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_mobile_static&quot;:&quot;false&quot;}" data-widget_type="heading.default" style="transition-duration: 1000ms; opacity: 1;">
                                                <div class="elementor-widget-container">
                                                   <h4 class="elementor-heading-title elementor-size-default">Contact</h4>
                                                </div>
                                             </div>
                                             <div class="elementor-element elementor-element-55e9ea7 elementor-widget elementor-widget-heading init-smoove smooved" data-id="55e9ea7" data-element_type="widget" data-settings="{&quot;grandrestaurant_ext_is_smoove&quot;:&quot;true&quot;,&quot;grandrestaurant_ext_smoove_disable&quot;:&quot;769&quot;,&quot;grandrestaurant_ext_smoove_duration&quot;:1000,&quot;grandrestaurant_ext_smoove_translatey&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:40,&quot;sizes&quot;:[]},&quot;grandrestaurant_ext_link_reservation&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_link_sidemenu&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_link_fullmenu&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_link_closed_fullmenu&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_scrollme&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_smoove_scalex&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:1,&quot;sizes&quot;:[]},&quot;grandrestaurant_ext_smoove_scaley&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:1,&quot;sizes&quot;:[]},&quot;grandrestaurant_ext_smoove_rotatex&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;grandrestaurant_ext_smoove_rotatey&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;grandrestaurant_ext_smoove_rotatez&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;grandrestaurant_ext_smoove_translatex&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;grandrestaurant_ext_smoove_translatez&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;grandrestaurant_ext_smoove_skewx&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;grandrestaurant_ext_smoove_skewy&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;grandrestaurant_ext_smoove_perspective&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:1000,&quot;sizes&quot;:[]},&quot;grandrestaurant_ext_is_parallax_mouse&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_infinite&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_fadeout_animation&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_mobile_static&quot;:&quot;false&quot;}" data-widget_type="heading.default" style="transition-duration: 1000ms; opacity: 1;">
                                                <div class="elementor-widget-container">
                                                   <span class="elementor-heading-title elementor-size-default">Tel: <?php echo $web_information->information->hotline ?? ''; ?></span>
                                                </div>
                                             </div>
                                             <div class="elementor-element elementor-element-d581131 elementor-widget elementor-widget-heading init-smoove smooved" data-id="d581131" data-element_type="widget" data-settings="{&quot;grandrestaurant_ext_is_smoove&quot;:&quot;true&quot;,&quot;grandrestaurant_ext_smoove_disable&quot;:&quot;769&quot;,&quot;grandrestaurant_ext_smoove_duration&quot;:1000,&quot;grandrestaurant_ext_smoove_translatey&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:40,&quot;sizes&quot;:[]},&quot;grandrestaurant_ext_link_reservation&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_link_sidemenu&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_link_fullmenu&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_link_closed_fullmenu&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_scrollme&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_smoove_scalex&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:1,&quot;sizes&quot;:[]},&quot;grandrestaurant_ext_smoove_scaley&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:1,&quot;sizes&quot;:[]},&quot;grandrestaurant_ext_smoove_rotatex&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;grandrestaurant_ext_smoove_rotatey&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;grandrestaurant_ext_smoove_rotatez&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;grandrestaurant_ext_smoove_translatex&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;grandrestaurant_ext_smoove_translatez&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;grandrestaurant_ext_smoove_skewx&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;grandrestaurant_ext_smoove_skewy&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;grandrestaurant_ext_smoove_perspective&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:1000,&quot;sizes&quot;:[]},&quot;grandrestaurant_ext_is_parallax_mouse&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_infinite&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_fadeout_animation&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_mobile_static&quot;:&quot;false&quot;}" data-widget_type="heading.default" style="transition-duration: 1000ms; opacity: 1;">
                                                <div class="elementor-widget-container">
                                                   <span class="elementor-heading-title elementor-size-default">E-mail: <?php echo $web_information->information->email ?? ''; ?></span>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </section>
                                 <!-- <div class="elementor-element elementor-element-bf810a7 elementor-widget elementor-widget-shortcode init-smoove smooved" data-id="bf810a7" data-element_type="widget" data-settings="{&quot;grandrestaurant_ext_is_smoove&quot;:&quot;true&quot;,&quot;grandrestaurant_ext_smoove_disable&quot;:&quot;769&quot;,&quot;grandrestaurant_ext_smoove_duration&quot;:1000,&quot;grandrestaurant_ext_smoove_translatey&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:40,&quot;sizes&quot;:[]},&quot;grandrestaurant_ext_link_reservation&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_link_sidemenu&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_link_fullmenu&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_link_closed_fullmenu&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_scrollme&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_smoove_scalex&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:1,&quot;sizes&quot;:[]},&quot;grandrestaurant_ext_smoove_scaley&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:1,&quot;sizes&quot;:[]},&quot;grandrestaurant_ext_smoove_rotatex&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;grandrestaurant_ext_smoove_rotatey&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;grandrestaurant_ext_smoove_rotatez&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;grandrestaurant_ext_smoove_translatex&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;grandrestaurant_ext_smoove_translatez&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;grandrestaurant_ext_smoove_skewx&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;grandrestaurant_ext_smoove_skewy&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;grandrestaurant_ext_smoove_perspective&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:1000,&quot;sizes&quot;:[]},&quot;grandrestaurant_ext_is_parallax_mouse&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_infinite&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_fadeout_animation&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_mobile_static&quot;:&quot;false&quot;}" data-widget_type="shortcode.default" style="transition-duration: 1000ms; opacity: 1;">
                                    <div class="elementor-widget-container">
                                       <div class="elementor-shortcode">
                                          <div class="wpcf7 js" id="wpcf7-f10-p5160-o1" lang="en-US" dir="ltr">
                                             <div class="screen-reader-response">
                                                <p role="status" aria-live="polite" aria-atomic="true"></p>
                                                <ul></ul>
                                             </div>
                                             <form action="/grandrestaurantv6/contact-gallery/#wpcf7-f10-p5160-o1" method="post" class="wpcf7-form init" aria-label="Contact form" novalidate="novalidate" data-status="init">
                                                <div style="display: none;">
                                                   <input type="hidden" name="_wpcf7" value="10">
                                                   <input type="hidden" name="_wpcf7_version" value="5.8.2">
                                                   <input type="hidden" name="_wpcf7_locale" value="en_US">
                                                   <input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f10-p5160-o1">
                                                   <input type="hidden" name="_wpcf7_container_post" value="5160">
                                                   <input type="hidden" name="_wpcf7_posted_data_hash" value="">
                                                </div>
                                                <p><label> Your name<br>
                                                      <span class="wpcf7-form-control-wrap" data-name="your-name"><input size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" value="" type="text" name="your-name"></span> </label>
                                                </p>
                                                <p><label> Your email<br>
                                                      <span class="wpcf7-form-control-wrap" data-name="your-email"><input size="40" class="wpcf7-form-control wpcf7-email wpcf7-validates-as-required wpcf7-text wpcf7-validates-as-email" aria-required="true" aria-invalid="false" value="" type="email" name="your-email"></span> </label>
                                                </p>
                                                <p><label> Your message (optional)<br>
                                                      <span class="wpcf7-form-control-wrap" data-name="your-message"><textarea cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea" aria-invalid="false" name="your-message"></textarea></span> </label>
                                                </p>
                                                <p><input class="wpcf7-form-control wpcf7-submit has-spinner" type="submit" value="Submit"><span class="wpcf7-spinner"></span>
                                                </p>
                                                <div class="wpcf7-response-output" aria-hidden="true"></div>
                                             </form>
                                          </div>
                                       </div>
                                    </div>
                                 </div> -->
                              </div>
                           </div>
                           <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-9d80303" data-id="9d80303" data-element_type="column" data-settings="{&quot;grandrestaurant_ext_link_reservation&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_link_sidemenu&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_link_fullmenu&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_link_closed_fullmenu&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_scrollme&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_smoove&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_parallax_mouse&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_infinite&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_fadeout_animation&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_mobile_static&quot;:&quot;false&quot;}">
                              <div class="elementor-widget-wrap elementor-element-populated">
                                 <div class="elementor-element elementor-element-1783165 elementor-widget elementor-widget-eb-google-map-extended" data-id="1783165" data-element_type="widget" data-settings="{&quot;grandrestaurant_ext_link_reservation&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_link_sidemenu&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_link_fullmenu&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_link_closed_fullmenu&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_scrollme&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_smoove&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_parallax_mouse&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_infinite&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_fadeout_animation&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_mobile_static&quot;:&quot;false&quot;}" data-widget_type="eb-google-map-extended.default">
                                    <div class="elementor-widget-container">
                                       <?php echo $web_information->source_code->map ?? ''; ?> 

                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </section>

                     <?php
                     foreach($blocksContent as $bl){
                     if($bl->block_code=="contact"){
                     $contact = $bl;
                     break;
                     }
                     };
                     ?>
                     <section class="elementor-section elementor-top-section elementor-element elementor-element-1b4a606  elementor-section-height-min-height elementor-section-stretched elementor-section-boxed elementor-section-height-default elementor-section-items-middle jarallax"  data-element_type="section" data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;,&quot;background_background&quot;:&quot;classic&quot;,&quot;grandrestaurant_ext_is_background_parallax&quot;:&quot;true&quot;,&quot;shape_divider_top&quot;:&quot;split&quot;,&quot;grandrestaurant_ext_is_background_parallax_speed&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0.8000000000000000444089209850062616169452667236328125,&quot;sizes&quot;:[]},&quot;grandrestaurant_ext_is_background_backdrop&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_background_on_scroll&quot;:&quot;false&quot;}" style="background-image: none; width: 1857px; left: -343.5px;">
                        <div class="elementor-background-overlay"></div>
                        <div class="elementor-shape elementor-shape-top" data-negative="false">
                           <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 20" preserveAspectRatio="none">
                              <path class="elementor-shape-fill" d="M0,0v3c0,0,393.8,0,483.4,0c9.2,0,16.6,7.4,16.6,16.6c0-9.1,7.4-16.6,16.6-16.6C606.2,3,1000,3,1000,3V0H0z"></path>
                           </svg>
                        </div>
                        <div class="elementor-container elementor-column-gap-default">
                           <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-7c1c8af"  data-element_type="column" data-settings="{&quot;grandrestaurant_ext_link_reservation&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_link_sidemenu&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_link_fullmenu&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_link_closed_fullmenu&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_scrollme&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_smoove&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_parallax_mouse&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_infinite&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_fadeout_animation&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_mobile_static&quot;:&quot;false&quot;}">
                              <div class="elementor-widget-wrap elementor-element-populated smooved" style="perspective: 1000px;">
                                 <div class="elementor-element elementor-element-9d15679  elementor-align-center elementor-widget elementor-widget-button init-smoove smooved" data-id="db13d49" data-element_type="widget" data-settings="{&quot;grandrestaurant_ext_link_reservation&quot;:&quot;true&quot;,&quot;grandrestaurant_ext_is_smoove&quot;:&quot;true&quot;,&quot;grandrestaurant_ext_smoove_disable&quot;:&quot;769&quot;,&quot;grandrestaurant_ext_smoove_duration&quot;:1000,&quot;grandrestaurant_ext_smoove_translatey&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:39,&quot;sizes&quot;:[]},&quot;grandrestaurant_ext_link_sidemenu&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_link_fullmenu&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_link_closed_fullmenu&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_scrollme&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_smoove_scalex&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:1,&quot;sizes&quot;:[]},&quot;grandrestaurant_ext_smoove_scaley&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:1,&quot;sizes&quot;:[]},&quot;grandrestaurant_ext_smoove_rotatex&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;grandrestaurant_ext_smoove_rotatey&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;grandrestaurant_ext_smoove_rotatez&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;grandrestaurant_ext_smoove_translatex&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;grandrestaurant_ext_smoove_translatez&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;grandrestaurant_ext_smoove_skewx&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;grandrestaurant_ext_smoove_skewy&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;grandrestaurant_ext_smoove_perspective&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:1000,&quot;sizes&quot;:[]},&quot;grandrestaurant_ext_is_parallax_mouse&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_infinite&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_fadeout_animation&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_mobile_static&quot;:&quot;false&quot;}" data-widget_type="button.default" style="transition-duration: 1000ms; opacity: 1;">
                                    <div class="elementor-widget-container">
                                       <div class="elementor-button-wrapper">
                                          <a class="elementor-button elementor-button-link elementor-size-md" href="" style=" 
                                                font-family: Lato, Sans-serif;
                                                font-size: 15px;
                                                font-weight: 900;
                                                fill: #FFFFFF;
                                                color: #FFFFFF;
                                                background-color: #02010100;
                                                border-style: solid;
                                                border-width: 2px 2px 2px 2px;
                                                border-color: #FFFFFF;
                                                border-radius: 5px 5px 5px 5px;
                                             ">
                                             <span class="elementor-button-content-wrapper">
                                                <span class="elementor-button-text"><?php echo e($contact->title); ?></span>
                                             </span>
                                          </a>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="elementor-element elementor-element-eda0a21  elementor-widget elementor-widget-heading init-smoove smooved" data-id="47ab28f" data-element_type="widget" data-settings="{&quot;grandrestaurant_ext_is_smoove&quot;:&quot;true&quot;,&quot;grandrestaurant_ext_smoove_disable&quot;:&quot;769&quot;,&quot;grandrestaurant_ext_smoove_duration&quot;:1000,&quot;grandrestaurant_ext_smoove_translatey&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:40,&quot;sizes&quot;:[]},&quot;grandrestaurant_ext_link_reservation&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_link_sidemenu&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_link_fullmenu&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_link_closed_fullmenu&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_scrollme&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_smoove_scalex&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:1,&quot;sizes&quot;:[]},&quot;grandrestaurant_ext_smoove_scaley&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:1,&quot;sizes&quot;:[]},&quot;grandrestaurant_ext_smoove_rotatex&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;grandrestaurant_ext_smoove_rotatey&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;grandrestaurant_ext_smoove_rotatez&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;grandrestaurant_ext_smoove_translatex&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;grandrestaurant_ext_smoove_translatez&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;grandrestaurant_ext_smoove_skewx&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;grandrestaurant_ext_smoove_skewy&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;grandrestaurant_ext_smoove_perspective&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:1000,&quot;sizes&quot;:[]},&quot;grandrestaurant_ext_is_parallax_mouse&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_infinite&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_fadeout_animation&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_mobile_static&quot;:&quot;false&quot;}" data-widget_type="heading.default" style="transition-duration: 1000ms; opacity: 1;">
                                    <div class="elementor-widget-container">
                                       <h2 class="elementor-heading-title elementor-size-default" style="text-align:center;" >
                                          <a href="tel:<?php echo e($contact->brief); ?>" style="color:#fff;">or call us <?php echo e($contact->brief); ?></a>
                                       </h2>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div id="jarallax-container-2" style="position: absolute; top: 0px; left: 0px; width: 100%; height: 100%; overflow: hidden; z-index: -100;">
                           <img class="jarallax-img" src="<?php echo e($contact->image); ?>" style="object-fit: cover; object-position: 50% 50%; max-width: none; position: absolute; top: 0px; left: 0px; width: 1857px; height: 633.75px; overflow: hidden; pointer-events: none; transform-style: preserve-3d; backface-visibility: hidden; will-change: transform, opacity; margin-top: 149.125px; transform: translate3d(0px, -334.438px, 0px);">
                        </div>
                     </section>
                  </div>
               </div>
            </div>
            <!-- End main content -->
         </div>
      </div>


      <?php echo $__env->make('frontend.element.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

   </div>

   <div id="woocommerce-mini-cart-wrapper">
      <div id="woocommerce-mini-cart-overlay"></div>
      <div id="woocommerce-mini-cart-flyout">
         <div class="woocommerce-mini-cart-shopping-cart">


            <p class="woocommerce-mini-cart__empty-message">No products in the cart.</p>


         </div>
      </div>
   </div>


   <a id="toTop" style="opacity: 0.5; visibility: visible;">
      <i class="fa fa-angle-up"></i>
   </a>
   <div id="overlay_background"></div>

   <?php echo $__env->make('frontend.element.booking', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

   <?php echo $__env->make('frontend.panels.stylefooter', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

   <script type='text/javascript' src='<?php echo e(asset('themes/frontend/home_files/js/owl.carousel.min.js')); ?>' id='owl-carousel-js'></script>
   <script data-minify="1" type='text/javascript' src='<?php echo e(asset('themes/frontend/home_files/js/tilt.jquery.js')); ?>' id='tilt-js'></script>
   <script data-minify="1" type='text/javascript' src='<?php echo e(asset('themes/frontend/home_files/js/justifiedGallery.js')); ?>' id='justifiedGallery-js'></script>

</body>

</html><?php /**PATH D:\xampp\htdocs\restaurant\resources\views/frontend/pages/contact/index.blade.php ENDPATH**/ ?>