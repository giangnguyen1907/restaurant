<!DOCTYPE html>
<html lang="vi" class="loading-site no-js">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>

    @php
    $seo_title = $seo_title ?? ($page->title ?? ($web_information->information->seo_title ?? ''));
    $seo_keyword = $seo_keyword ?? ($page->keyword ?? ($web_information->information->seo_keyword ?? ''));
    $seo_description = $seo_description ?? ($page->description ?? ($web_information->information->seo_description ?? ''));
    @endphp
    <title>ABOUT US</title>
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1" />
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="robots" content="index, follow" />
    <meta http-equiv="Content-Language" content="vi" />
    <meta name="copyright" content="Copyright" />
    <meta name="description" content="{{ $seo_description }}" />
    <meta name="keywords" content="{{ $seo_keyword }}" />
    <meta name="DC.title" content="{{ $seo_title }}" />
    <meta property="og:type" name="ogtype" content="Website" />
    <meta property="og:title" name="ogtitle" content="{{ $seo_title }}" />
    <meta property="og:image" name="ogimage" content="{{ $web_information->image->logo_header ?? '' }}" />
    <meta property="og:sitename" content="{{ Request::fullUrl() }}" />
    <link rel="canonical" href="{{ Request::fullUrl() }}" />
    <link rel="shortcut icon" type="image/png" href="{{ $web_information->image->favicon ?? '' }}" />

    @include('frontend.panels.styles')
    <link rel='stylesheet' id='elementor-post-4716-css' href='{{ asset('themes/frontend/home_files/css/post-4716.css') }}' type='text/css' media='all' />
</head>

<body class="page-template-default page page-id-3664 theme-grandrestaurant woocommerce-js tg_lightbox_black loftloader-lite-enabled elementor-default elementor-kit-24 elementor-page elementor-page-3664 e--ua-isTouchDevice e--ua-blink e--ua-edge e--ua-webkit smoove-overflow loaded" data-elementor-device-mode="desktop">
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

    @include('frontend.element.menu_mobile')



    <div id="wrapper" class="hasbg transparent" style="padding-top: 149px; background-color: rgb(255, 255, 255);">

        <div id="elementor-header" class="main-menu-wrapper">
            <div data-elementor-type="wp-post" data-elementor-id="148" class="elementor elementor-148">
                <section class="elementor-section elementor-top-section elementor-element elementor-element-ec7022f elementor-section-content-middle elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="ec7022f" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;grandrestaurant_ext_is_background_parallax&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_background_backdrop&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_background_on_scroll&quot;:&quot;false&quot;}">
                    @include('frontend.element.header_top')
                </section>
                <section class="elementor-section elementor-top-section elementor-element elementor-element-4430805 elementor-section-content-middle elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="4430805" data-element_type="section" data-settings="{&quot;grandrestaurant_ext_is_background_parallax&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_background_backdrop&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_background_on_scroll&quot;:&quot;false&quot;}">
                    @include('frontend.element.header')
                </section>

            </div>
        </div>
        @include('frontend.element.custom')
        <div id="page_content_wrapper" class=" ">
            <div class="inner">
                <!-- Begin main content -->
                <div class="inner_wrapper">
                    <div class="sidebar_content full_width">

                        <div data-elementor-type="wp-page" data-elementor-id="4716" class="elementor elementor-4716">
                            

                            <section class="elementor-section elementor-top-section elementor-element elementor-element-0858780 elementor-section-height-min-height elementor-section-stretched elementor-section-boxed elementor-section-height-default elementor-section-items-middle jarallax" data-element_type="section" data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;,&quot;background_background&quot;:&quot;classic&quot;,&quot;grandrestaurant_ext_is_background_parallax&quot;:&quot;true&quot;,&quot;shape_divider_top&quot;:&quot;split&quot;,&quot;grandrestaurant_ext_is_background_parallax_speed&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0.8000000000000000444089209850062616169452667236328125,&quot;sizes&quot;:[]},&quot;grandrestaurant_ext_is_background_backdrop&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_background_on_scroll&quot;:&quot;false&quot;}" style="background-image: none; width: 1857px; left: -343.5px;">
                                <div class="elementor-shape elementor-shape-bottom" data-negative="false">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 20" preserveAspectRatio="none">
                                        <path class="elementor-shape-fill" d="M0,0v3c0,0,393.8,0,483.4,0c9.2,0,16.6,7.4,16.6,16.6c0-9.1,7.4-16.6,16.6-16.6C606.2,3,1000,3,1000,3V0H0z"></path>
                                    </svg>
                                </div>
                                <div class="elementor-container elementor-column-gap-default">
                                    <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-5a5aff9" data-id="5a5aff9" data-element_type="column" data-settings="{&quot;grandrestaurant_ext_link_reservation&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_link_sidemenu&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_link_fullmenu&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_link_closed_fullmenu&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_scrollme&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_smoove&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_parallax_mouse&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_infinite&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_fadeout_animation&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_mobile_static&quot;:&quot;false&quot;}">
                                        <div class="elementor-widget-wrap elementor-element-populated">
                                            <div class="elementor-element elementor-element-6095e86  elementor-widget__width-inherit elementor-widget elementor-widget-grandrestaurant-animated-text" data-id="6095e86 " data-element_type="widget" data-settings="{&quot;grandrestaurant_ext_link_reservation&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_link_sidemenu&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_link_fullmenu&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_link_closed_fullmenu&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_scrollme&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_smoove&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_parallax_mouse&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_infinite&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_mobile_static&quot;:&quot;false&quot;}" data-widget_type="grandrestaurant-animated-text.default">
                                                <div class="elementor-widget-container">
                                                    <div class="themegoods-animated-text text-alignment-center transition-bottom overflow-hidden blast-root" data-delimiter="sentence" data-transition="100" data-transition-delay="200" data-transition-duration="800">
                                                        <h2>
                                                            <span class="blast" style="transition-delay: 300ms; transition-duration: 800ms; transform: translateX(0px) translateY(0px) translateZ(0px); opacity: 1;">
                                                                Discover</span>
                                                        </h2>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-c8ea5fe  elementor-widget__width-auto elementor-widget elementor-widget-grandrestaurant-animated-text" data-id="c8ea5fe" data-element_type="widget" data-settings="{&quot;grandrestaurant_ext_link_reservation&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_link_sidemenu&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_link_fullmenu&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_link_closed_fullmenu&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_scrollme&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_smoove&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_parallax_mouse&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_infinite&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_mobile_static&quot;:&quot;false&quot;}" data-widget_type="grandrestaurant-animated-text.default">
                                                <div class="elementor-widget-container">
                                                    <div class="themegoods-animated-text text-alignment-left transition-bottom overflow-hidden blast-root" data-delimiter="word" data-transition="100" data-transition-delay="400" data-transition-duration="800">
                                                        <h2>
                                                            <span class="blast" style="transition-delay: 400ms; transition-duration: 800ms; transform: translateX(0px) translateY(0px) translateZ(0px); opacity: 1;">
                                                                ABOUT US</span>
                                                        </h2>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="jarallax-container-1" style="position: absolute; top: 0px; left: 0px; width: 100%; height: 100%; overflow: hidden; z-index: -100;">
                                    <img class="jarallax-img" src="{{ asset('themes/frontend/home_files/images/asian-assorted-food-set-ERZSHTC-1.jpg')}}" style="object-fit: cover; object-position: 50% 50%; max-width: none; position: absolute; top: 0px; left: 0px; width: 1857px; height: 633.75px; overflow: hidden; pointer-events: none; transform-style: preserve-3d; backface-visibility: hidden; will-change: transform, opacity;">
                                </div>
                            </section>

                            
                            <section class="elementor-section elementor-top-section elementor-element elementor-element-ae43cc9 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="ae43cc9" data-element_type="section" data-settings="{&quot;grandrestaurant_ext_is_background_parallax&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_background_backdrop&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_background_on_scroll&quot;:&quot;false&quot;}">
                                <div class="elementor-container elementor-column-gap-default">
                                    <div class="elementor-column elementor-col-66 elementor-top-column elementor-element elementor-element-7ae4776" data-id="7ae4776" data-element_type="column" data-settings="{&quot;grandrestaurant_ext_link_reservation&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_link_sidemenu&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_link_fullmenu&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_link_closed_fullmenu&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_scrollme&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_smoove&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_parallax_mouse&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_infinite&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_fadeout_animation&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_mobile_static&quot;:&quot;false&quot;}">
                                        <div class="elementor-widget-wrap elementor-element-populated">
                                            <div class="elementor-element elementor-element-7ba4115 elementor-widget elementor-widget-grandrestaurant-gallery-justified" data-id="7ba4115" data-element_type="widget" data-settings="{&quot;grandrestaurant_ext_link_reservation&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_link_sidemenu&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_link_fullmenu&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_link_closed_fullmenu&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_scrollme&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_smoove&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_parallax_mouse&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_infinite&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_fadeout_animation&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_mobile_static&quot;:&quot;false&quot;}" data-widget_type="grandrestaurant-gallery-justified.default">
                                                <div class="elementor-widget-container">
                                                    <div class="grandrestaurant-gallery-grid-content-wrapper do-justified justified-gallery smooved" data-row_height="150" data-margin="20" data-justify_last_row="yes" style="height: 287.043px;">
                                                        @foreach($blocksContent as $bl1)
                                                        @if($bl1->block_code=="about_story" && $bl1->parent_id != Null)
                                                        <div class="entry gallery-grid-item smoove fade-in smooved jg-entry entry-visible" data-delay="150" data-minwidth="769" data-opacity="0" style="opacity: 1; width: 165px; height: 247.043px; top: 20px; left: 20px;">
                                                            <a class="grandrestaurant_gallery_lightbox" href="{{ $bl1->image }}" data-rel="tg_gallery7ba4115" data-title="nataliya-solomakha-CUPAGFmg7eI-unsplash">
                                                                <img width="768" height="1152" decoding="async" src="{{ $bl1->image }}" class="" alt="" style="width: 165px; height: 248px; margin-left: -82.5px; margin-top: -124px;">
                                                            </a>
                                                        </div>
                                                        @endif
                                                        @endforeach
                                                       
                                                        <br class="clear">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @php
                                    foreach($blocksContent as $bl){
                                    if($bl->block_code=="about_story" && $bl->parent_id == Null){
                                     $story = $bl;
                                     break;
                                    }
                                    };
                                    @endphp
                                    <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-f3384fe" data-id="f3384fe" data-element_type="column" data-settings="{&quot;grandrestaurant_ext_link_reservation&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_link_sidemenu&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_link_fullmenu&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_link_closed_fullmenu&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_scrollme&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_smoove&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_parallax_mouse&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_infinite&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_fadeout_animation&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_mobile_static&quot;:&quot;false&quot;}">
                                        <div class="elementor-widget-wrap elementor-element-populated">
                                            <section class="elementor-section elementor-inner-section elementor-element elementor-element-d79c08b elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="d79c08b" data-element_type="section" data-settings="{&quot;grandrestaurant_ext_is_background_parallax&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_background_backdrop&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_background_on_scroll&quot;:&quot;false&quot;}">
                                                <div class="elementor-container elementor-column-gap-default">
                                                    <div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-1f01207" data-id="1f01207" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;grandrestaurant_ext_is_scrollme&quot;:&quot;true&quot;,&quot;grandrestaurant_ext_scrollme_translatey&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:-150,&quot;sizes&quot;:[]},&quot;grandrestaurant_ext_link_reservation&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_link_sidemenu&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_link_fullmenu&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_link_closed_fullmenu&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_scrollme_disable&quot;:&quot;mobile&quot;,&quot;grandrestaurant_ext_scrollme_smoothness&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:30,&quot;sizes&quot;:[]},&quot;grandrestaurant_ext_scrollme_scalex&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:1,&quot;sizes&quot;:[]},&quot;grandrestaurant_ext_scrollme_scaley&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:1,&quot;sizes&quot;:[]},&quot;grandrestaurant_ext_scrollme_scalez&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:1,&quot;sizes&quot;:[]},&quot;grandrestaurant_ext_scrollme_rotatex&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;grandrestaurant_ext_scrollme_rotatey&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;grandrestaurant_ext_scrollme_rotatez&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;grandrestaurant_ext_scrollme_translatex&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;grandrestaurant_ext_scrollme_translatez&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;grandrestaurant_ext_is_smoove&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_parallax_mouse&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_infinite&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_fadeout_animation&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_mobile_static&quot;:&quot;false&quot;}" data-parallax="{&quot;y&quot;:-150,&quot;smoothness&quot;:30}" style="transform:translate3d(0px, -53.144px, 0px) rotateX(0deg) rotateY(0deg) rotateZ(0deg) scaleX(1) scaleY(1) scaleZ(1); -webkit-transform:translate3d(0px, -53.144px, 0px) rotateX(0deg) rotateY(0deg) rotateZ(0deg) scaleX(1) scaleY(1) scaleZ(1); ">
                                                        <div class="elementor-widget-wrap elementor-element-populated smooved" style="perspective: 1000px;">
                                                            <div class="elementor-element elementor-element-1446afb elementor-widget elementor-widget-heading init-smoove smooved" data-id="1446afb" data-element_type="widget" data-settings="{&quot;grandrestaurant_ext_is_smoove&quot;:&quot;true&quot;,&quot;grandrestaurant_ext_smoove_disable&quot;:&quot;769&quot;,&quot;grandrestaurant_ext_smoove_duration&quot;:1000,&quot;grandrestaurant_ext_smoove_translatey&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:40,&quot;sizes&quot;:[]},&quot;grandrestaurant_ext_link_reservation&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_link_sidemenu&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_link_fullmenu&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_link_closed_fullmenu&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_scrollme&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_smoove_scalex&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:1,&quot;sizes&quot;:[]},&quot;grandrestaurant_ext_smoove_scaley&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:1,&quot;sizes&quot;:[]},&quot;grandrestaurant_ext_smoove_rotatex&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;grandrestaurant_ext_smoove_rotatey&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;grandrestaurant_ext_smoove_rotatez&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;grandrestaurant_ext_smoove_translatex&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;grandrestaurant_ext_smoove_translatez&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;grandrestaurant_ext_smoove_skewx&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;grandrestaurant_ext_smoove_skewy&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;grandrestaurant_ext_smoove_perspective&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:1000,&quot;sizes&quot;:[]},&quot;grandrestaurant_ext_is_parallax_mouse&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_infinite&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_fadeout_animation&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_mobile_static&quot;:&quot;false&quot;}" data-widget_type="heading.default" style="transition-duration: 1000ms; opacity: 1;">
                                                                <div class="elementor-widget-container">
                                                                    <h2 class="elementor-heading-title elementor-size-default">{{ $story->title }}</h2>
                                                                </div>
                                                            </div>
                                                            <div class="elementor-element elementor-element-f80853e elementor-widget elementor-widget-heading init-smoove smooved" data-id="f80853e" data-element_type="widget" data-settings="{&quot;grandrestaurant_ext_is_smoove&quot;:&quot;true&quot;,&quot;grandrestaurant_ext_smoove_disable&quot;:&quot;769&quot;,&quot;grandrestaurant_ext_smoove_duration&quot;:1000,&quot;grandrestaurant_ext_smoove_translatey&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:40,&quot;sizes&quot;:[]},&quot;grandrestaurant_ext_link_reservation&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_link_sidemenu&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_link_fullmenu&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_link_closed_fullmenu&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_scrollme&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_smoove_scalex&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:1,&quot;sizes&quot;:[]},&quot;grandrestaurant_ext_smoove_scaley&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:1,&quot;sizes&quot;:[]},&quot;grandrestaurant_ext_smoove_rotatex&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;grandrestaurant_ext_smoove_rotatey&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;grandrestaurant_ext_smoove_rotatez&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;grandrestaurant_ext_smoove_translatex&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;grandrestaurant_ext_smoove_translatez&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;grandrestaurant_ext_smoove_skewx&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;grandrestaurant_ext_smoove_skewy&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;grandrestaurant_ext_smoove_perspective&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:1000,&quot;sizes&quot;:[]},&quot;grandrestaurant_ext_is_parallax_mouse&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_infinite&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_fadeout_animation&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_mobile_static&quot;:&quot;false&quot;}" data-widget_type="heading.default" style="transition-duration: 1000ms; opacity: 1;">
                                                                <div class="elementor-widget-container">
                                                                    <h2 class="elementor-heading-title elementor-size-default">{{ $story->brief }}</h2>
                                                                </div>
                                                            </div>
                                                            <div class="elementor-element elementor-element-676e2b1 elementor-widget elementor-widget-image init-smoove smooved" data-id="676e2b1" data-element_type="widget" data-settings="{&quot;grandrestaurant_ext_is_smoove&quot;:&quot;true&quot;,&quot;grandrestaurant_ext_smoove_disable&quot;:&quot;769&quot;,&quot;grandrestaurant_ext_smoove_duration&quot;:1000,&quot;grandrestaurant_ext_smoove_translatey&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:40,&quot;sizes&quot;:[]},&quot;grandrestaurant_ext_link_reservation&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_link_sidemenu&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_link_fullmenu&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_link_closed_fullmenu&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_scrollme&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_smoove_scalex&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:1,&quot;sizes&quot;:[]},&quot;grandrestaurant_ext_smoove_scaley&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:1,&quot;sizes&quot;:[]},&quot;grandrestaurant_ext_smoove_rotatex&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;grandrestaurant_ext_smoove_rotatey&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;grandrestaurant_ext_smoove_rotatez&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;grandrestaurant_ext_smoove_translatex&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;grandrestaurant_ext_smoove_translatez&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;grandrestaurant_ext_smoove_skewx&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;grandrestaurant_ext_smoove_skewy&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;grandrestaurant_ext_smoove_perspective&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:1000,&quot;sizes&quot;:[]},&quot;grandrestaurant_ext_is_parallax_mouse&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_infinite&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_fadeout_animation&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_mobile_static&quot;:&quot;false&quot;}" data-widget_type="image.default" style="transition-duration: 1000ms; opacity: 1;">
                                                                <div class="elementor-widget-container">
                                                                    <img decoding="async" width="27" height="37" src="{{ asset('themes/frontend/home_files/images/noun_leaf_3120327.png') }}" class="attachment-large size-large wp-image-3508" alt="">
                                                                </div>
                                                            </div>
                                                            <div class="elementor-element elementor-element-af9b9c6 elementor-widget elementor-widget-text-editor init-smoove smooved" data-id="af9b9c6" data-element_type="widget" data-settings="{&quot;grandrestaurant_ext_is_smoove&quot;:&quot;true&quot;,&quot;grandrestaurant_ext_smoove_disable&quot;:&quot;769&quot;,&quot;grandrestaurant_ext_smoove_duration&quot;:1000,&quot;grandrestaurant_ext_smoove_translatey&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:40,&quot;sizes&quot;:[]},&quot;grandrestaurant_ext_link_reservation&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_link_sidemenu&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_link_fullmenu&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_link_closed_fullmenu&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_scrollme&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_smoove_scalex&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:1,&quot;sizes&quot;:[]},&quot;grandrestaurant_ext_smoove_scaley&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:1,&quot;sizes&quot;:[]},&quot;grandrestaurant_ext_smoove_rotatex&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;grandrestaurant_ext_smoove_rotatey&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;grandrestaurant_ext_smoove_rotatez&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;grandrestaurant_ext_smoove_translatex&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;grandrestaurant_ext_smoove_translatez&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;grandrestaurant_ext_smoove_skewx&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;grandrestaurant_ext_smoove_skewy&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;grandrestaurant_ext_smoove_perspective&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:1000,&quot;sizes&quot;:[]},&quot;grandrestaurant_ext_is_parallax_mouse&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_infinite&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_fadeout_animation&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_mobile_static&quot;:&quot;false&quot;}" data-widget_type="text-editor.default" style="transition-duration: 1000ms; opacity: 1;">
                                                                <div class="elementor-widget-container">
                                                                    <style>
                                                                        /*! elementor - v3.17.0 - 01-11-2023 */
                                                                        .elementor-widget-text-editor.elementor-drop-cap-view-stacked .elementor-drop-cap {
                                                                            background-color: #69727d;
                                                                            color: #fff
                                                                        }

                                                                        .elementor-widget-text-editor.elementor-drop-cap-view-framed .elementor-drop-cap {
                                                                            color: #69727d;
                                                                            border: 3px solid;
                                                                            background-color: transparent
                                                                        }

                                                                        .elementor-widget-text-editor:not(.elementor-drop-cap-view-default) .elementor-drop-cap {
                                                                            margin-top: 8px
                                                                        }

                                                                        .elementor-widget-text-editor:not(.elementor-drop-cap-view-default) .elementor-drop-cap-letter {
                                                                            width: 1em;
                                                                            height: 1em
                                                                        }

                                                                        .elementor-widget-text-editor .elementor-drop-cap {
                                                                            float: left;
                                                                            text-align: center;
                                                                            line-height: 1;
                                                                            font-size: 50px
                                                                        }

                                                                        .elementor-widget-text-editor .elementor-drop-cap-letter {
                                                                            display: inline-block
                                                                        }
                                                                    </style>
                                                                    <p>{!! $story->content !!}</p>
                                                                </div>
                                                            </div>
                                                            <!-- <div class="elementor-element elementor-element-7ef9236 elementor-align-center elementor-widget elementor-widget-button init-smoove smooved" data-id="7ef9236" data-element_type="widget" data-settings="{&quot;grandrestaurant_ext_is_smoove&quot;:&quot;true&quot;,&quot;grandrestaurant_ext_smoove_disable&quot;:&quot;769&quot;,&quot;grandrestaurant_ext_smoove_duration&quot;:1000,&quot;grandrestaurant_ext_smoove_translatey&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:40,&quot;sizes&quot;:[]},&quot;grandrestaurant_ext_link_reservation&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_link_sidemenu&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_link_fullmenu&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_link_closed_fullmenu&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_scrollme&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_smoove_scalex&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:1,&quot;sizes&quot;:[]},&quot;grandrestaurant_ext_smoove_scaley&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:1,&quot;sizes&quot;:[]},&quot;grandrestaurant_ext_smoove_rotatex&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;grandrestaurant_ext_smoove_rotatey&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;grandrestaurant_ext_smoove_rotatez&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;grandrestaurant_ext_smoove_translatex&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;grandrestaurant_ext_smoove_translatez&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;grandrestaurant_ext_smoove_skewx&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;grandrestaurant_ext_smoove_skewy&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;grandrestaurant_ext_smoove_perspective&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:1000,&quot;sizes&quot;:[]},&quot;grandrestaurant_ext_is_parallax_mouse&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_infinite&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_fadeout_animation&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_mobile_static&quot;:&quot;false&quot;}" data-widget_type="button.default" style="transition-duration: 1000ms; opacity: 1;">
                                                                <div class="elementor-widget-container">
                                                                    <div class="elementor-button-wrapper">
                                                                        <a class="elementor-button elementor-button-link elementor-size-sm" href="https://themes.themegoods.com/grandrestaurantv6/about-us">
                                                                            <span class="elementor-button-content-wrapper">
                                                                                <span class="elementor-button-text">Learn More</span>
                                                                            </span>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div> -->
                                                        </div>
                                                    </div>
                                                </div>
                                            </section>
                                        </div>
                                    </div>
                                </div>
                            </section>


                            <section class="elementor-section elementor-top-section elementor-element elementor-element-e6f426e elementor-reverse-mobile elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="e6f426e" data-element_type="section" data-settings="{&quot;grandrestaurant_ext_is_background_parallax&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_background_backdrop&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_background_on_scroll&quot;:&quot;false&quot;}">
                                <div class="elementor-container elementor-column-gap-default">
                                   @php
                                    foreach($blocksContent as $bl3){
                                    if($bl3->block_code=="about_res" && $bl3->parent_id == Null){
                                     $res = $bl3;
                                     break;
                                    }
                                    };
                                    @endphp
                                    <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-8ad5470" data-id="8ad5470" data-element_type="column" data-settings="{&quot;grandrestaurant_ext_link_reservation&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_link_sidemenu&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_link_fullmenu&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_link_closed_fullmenu&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_scrollme&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_smoove&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_parallax_mouse&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_infinite&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_fadeout_animation&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_mobile_static&quot;:&quot;false&quot;}">
                                        <div class="elementor-widget-wrap elementor-element-populated">
                                            <section class="elementor-section elementor-inner-section elementor-element elementor-element-898361c elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="898361c" data-element_type="section" data-settings="{&quot;grandrestaurant_ext_is_background_parallax&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_background_backdrop&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_background_on_scroll&quot;:&quot;false&quot;}">
                                                <div class="elementor-container elementor-column-gap-default">
                                                    <div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-907a492" data-id="907a492" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;grandrestaurant_ext_is_scrollme&quot;:&quot;true&quot;,&quot;grandrestaurant_ext_scrollme_translatey&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:-120,&quot;sizes&quot;:[]},&quot;grandrestaurant_ext_scrollme_smoothness&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:50,&quot;sizes&quot;:[]},&quot;grandrestaurant_ext_link_reservation&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_link_sidemenu&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_link_fullmenu&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_link_closed_fullmenu&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_scrollme_disable&quot;:&quot;mobile&quot;,&quot;grandrestaurant_ext_scrollme_scalex&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:1,&quot;sizes&quot;:[]},&quot;grandrestaurant_ext_scrollme_scaley&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:1,&quot;sizes&quot;:[]},&quot;grandrestaurant_ext_scrollme_scalez&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:1,&quot;sizes&quot;:[]},&quot;grandrestaurant_ext_scrollme_rotatex&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;grandrestaurant_ext_scrollme_rotatey&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;grandrestaurant_ext_scrollme_rotatez&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;grandrestaurant_ext_scrollme_translatex&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;grandrestaurant_ext_scrollme_translatez&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;grandrestaurant_ext_is_smoove&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_parallax_mouse&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_infinite&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_fadeout_animation&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_mobile_static&quot;:&quot;false&quot;}" data-parallax="{&quot;y&quot;:-120,&quot;smoothness&quot;:50}" style="transform:translate3d(0px, -82.662px, 0px) rotateX(0deg) rotateY(0deg) rotateZ(0deg) scaleX(1) scaleY(1) scaleZ(1); -webkit-transform:translate3d(0px, -82.662px, 0px) rotateX(0deg) rotateY(0deg) rotateZ(0deg) scaleX(1) scaleY(1) scaleZ(1); ">
                                                        <div class="elementor-widget-wrap elementor-element-populated smooved" style="perspective: 1000px;">
                                                            <div class="elementor-element elementor-element-1dbdf80 elementor-widget elementor-widget-heading init-smoove smooved" data-id="1dbdf80" data-element_type="widget" data-settings="{&quot;grandrestaurant_ext_is_smoove&quot;:&quot;true&quot;,&quot;grandrestaurant_ext_smoove_disable&quot;:&quot;769&quot;,&quot;grandrestaurant_ext_smoove_duration&quot;:1000,&quot;grandrestaurant_ext_smoove_translatey&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:40,&quot;sizes&quot;:[]},&quot;grandrestaurant_ext_link_reservation&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_link_sidemenu&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_link_fullmenu&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_link_closed_fullmenu&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_scrollme&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_smoove_scalex&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:1,&quot;sizes&quot;:[]},&quot;grandrestaurant_ext_smoove_scaley&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:1,&quot;sizes&quot;:[]},&quot;grandrestaurant_ext_smoove_rotatex&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;grandrestaurant_ext_smoove_rotatey&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;grandrestaurant_ext_smoove_rotatez&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;grandrestaurant_ext_smoove_translatex&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;grandrestaurant_ext_smoove_translatez&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;grandrestaurant_ext_smoove_skewx&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;grandrestaurant_ext_smoove_skewy&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;grandrestaurant_ext_smoove_perspective&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:1000,&quot;sizes&quot;:[]},&quot;grandrestaurant_ext_is_parallax_mouse&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_infinite&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_fadeout_animation&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_mobile_static&quot;:&quot;false&quot;}" data-widget_type="heading.default" style="transition-duration: 1000ms; opacity: 1;">
                                                                <div class="elementor-widget-container">
                                                                    <h2 class="elementor-heading-title elementor-size-default">{{ $res->title }}</h2>
                                                                </div>
                                                            </div>
                                                            <div class="elementor-element elementor-element-8831880 elementor-widget elementor-widget-heading init-smoove smooved" data-id="8831880" data-element_type="widget" data-settings="{&quot;grandrestaurant_ext_is_smoove&quot;:&quot;true&quot;,&quot;grandrestaurant_ext_smoove_disable&quot;:&quot;769&quot;,&quot;grandrestaurant_ext_smoove_duration&quot;:1000,&quot;grandrestaurant_ext_smoove_translatey&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:40,&quot;sizes&quot;:[]},&quot;grandrestaurant_ext_link_reservation&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_link_sidemenu&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_link_fullmenu&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_link_closed_fullmenu&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_scrollme&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_smoove_scalex&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:1,&quot;sizes&quot;:[]},&quot;grandrestaurant_ext_smoove_scaley&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:1,&quot;sizes&quot;:[]},&quot;grandrestaurant_ext_smoove_rotatex&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;grandrestaurant_ext_smoove_rotatey&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;grandrestaurant_ext_smoove_rotatez&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;grandrestaurant_ext_smoove_translatex&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;grandrestaurant_ext_smoove_translatez&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;grandrestaurant_ext_smoove_skewx&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;grandrestaurant_ext_smoove_skewy&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;grandrestaurant_ext_smoove_perspective&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:1000,&quot;sizes&quot;:[]},&quot;grandrestaurant_ext_is_parallax_mouse&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_infinite&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_fadeout_animation&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_mobile_static&quot;:&quot;false&quot;}" data-widget_type="heading.default" style="transition-duration: 1000ms; opacity: 1;">
                                                                <div class="elementor-widget-container">
                                                                    <h2 class="elementor-heading-title elementor-size-default">{{ $res->brief }}</h2>
                                                                </div>
                                                            </div>
                                                            <div class="elementor-element elementor-element-765a51c elementor-widget elementor-widget-image init-smoove smooved" data-id="765a51c" data-element_type="widget" data-settings="{&quot;grandrestaurant_ext_is_smoove&quot;:&quot;true&quot;,&quot;grandrestaurant_ext_smoove_disable&quot;:&quot;769&quot;,&quot;grandrestaurant_ext_smoove_duration&quot;:1000,&quot;grandrestaurant_ext_smoove_translatey&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:40,&quot;sizes&quot;:[]},&quot;grandrestaurant_ext_link_reservation&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_link_sidemenu&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_link_fullmenu&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_link_closed_fullmenu&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_scrollme&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_smoove_scalex&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:1,&quot;sizes&quot;:[]},&quot;grandrestaurant_ext_smoove_scaley&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:1,&quot;sizes&quot;:[]},&quot;grandrestaurant_ext_smoove_rotatex&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;grandrestaurant_ext_smoove_rotatey&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;grandrestaurant_ext_smoove_rotatez&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;grandrestaurant_ext_smoove_translatex&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;grandrestaurant_ext_smoove_translatez&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;grandrestaurant_ext_smoove_skewx&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;grandrestaurant_ext_smoove_skewy&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;grandrestaurant_ext_smoove_perspective&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:1000,&quot;sizes&quot;:[]},&quot;grandrestaurant_ext_is_parallax_mouse&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_infinite&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_fadeout_animation&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_mobile_static&quot;:&quot;false&quot;}" data-widget_type="image.default" style="transition-duration: 1000ms; opacity: 1;">
                                                                <div class="elementor-widget-container">
                                                                    <img decoding="async" width="27" height="37" src="{{ asset('themes/frontend/home_files/images/noun_leaf_3120327.png') }}" class="attachment-large size-large wp-image-3508" alt="">
                                                                </div>
                                                            </div>
                                                            <div class="elementor-element elementor-element-6012813 elementor-widget elementor-widget-text-editor init-smoove smooved" data-id="6012813" data-element_type="widget" data-settings="{&quot;grandrestaurant_ext_is_smoove&quot;:&quot;true&quot;,&quot;grandrestaurant_ext_smoove_disable&quot;:&quot;769&quot;,&quot;grandrestaurant_ext_smoove_duration&quot;:1000,&quot;grandrestaurant_ext_smoove_translatey&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:40,&quot;sizes&quot;:[]},&quot;grandrestaurant_ext_link_reservation&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_link_sidemenu&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_link_fullmenu&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_link_closed_fullmenu&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_scrollme&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_smoove_scalex&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:1,&quot;sizes&quot;:[]},&quot;grandrestaurant_ext_smoove_scaley&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:1,&quot;sizes&quot;:[]},&quot;grandrestaurant_ext_smoove_rotatex&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;grandrestaurant_ext_smoove_rotatey&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;grandrestaurant_ext_smoove_rotatez&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;grandrestaurant_ext_smoove_translatex&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;grandrestaurant_ext_smoove_translatez&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;grandrestaurant_ext_smoove_skewx&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;grandrestaurant_ext_smoove_skewy&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;grandrestaurant_ext_smoove_perspective&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:1000,&quot;sizes&quot;:[]},&quot;grandrestaurant_ext_is_parallax_mouse&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_infinite&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_fadeout_animation&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_mobile_static&quot;:&quot;false&quot;}" data-widget_type="text-editor.default" style="transition-duration: 1000ms; opacity: 1;">
                                                                <div class="elementor-widget-container">
                                                                    <p>{!! $res->content !!}</p>
                                                                </div>
                                                            </div>
                                                          
                                                        </div>
                                                    </div>
                                                </div>
                                            </section>
                                        </div>
                                    </div>
                                    <div class="elementor-column elementor-col-66 elementor-top-column elementor-element elementor-element-27714c7" data-id="27714c7" data-element_type="column" data-settings="{&quot;grandrestaurant_ext_link_reservation&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_link_sidemenu&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_link_fullmenu&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_link_closed_fullmenu&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_scrollme&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_smoove&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_parallax_mouse&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_infinite&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_fadeout_animation&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_mobile_static&quot;:&quot;false&quot;}">
                                        <div class="elementor-widget-wrap elementor-element-populated">
                                            <div class="elementor-element elementor-element-30187cd elementor-widget elementor-widget-grandrestaurant-gallery-justified" data-id="30187cd" data-element_type="widget" data-settings="{&quot;grandrestaurant_ext_link_reservation&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_link_sidemenu&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_link_fullmenu&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_link_closed_fullmenu&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_scrollme&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_smoove&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_parallax_mouse&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_infinite&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_fadeout_animation&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_mobile_static&quot;:&quot;false&quot;}" data-widget_type="grandrestaurant-gallery-justified.default">
                                                <div class="elementor-widget-container">
                                                    <div class="grandrestaurant-gallery-grid-content-wrapper do-justified justified-gallery smooved" data-row_height="150" data-margin="20" data-justify_last_row="yes" style="height: 287.792px;">
                                                        
                                                        @foreach($blocksContent as $bl2)
                                                        @if($bl2->block_code=="about_res" && $bl2->parent_id != Null)
                                                        <div class="entry gallery-grid-item smoove fade-in smooved jg-entry entry-visible" data-delay="150" data-minwidth="769" data-opacity="0" style="opacity: 1; width: 165px; height: 247.043px; top: 20px; left: 20px;">
                                                            <a class="grandrestaurant_gallery_lightbox" href="{{ $bl2->image }}" data-rel="tg_gallery7ba4115" data-title="nataliya-solomakha-CUPAGFmg7eI-unsplash">
                                                                <img width="768" height="1152" decoding="async" src="{{ $bl2->image }}" class="" alt="" style="width: 165px; height: 248px; margin-left: -82.5px; margin-top: -124px;">
                                                            </a>
                                                        </div>
                                                        @endif
                                                        @endforeach
                                                        <br class="clear">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            
                            @php
foreach($blocksContent as $bl){
if($bl->block_code=="contact"){
$contact = $bl;
break;
}
};
@endphp
<section class="elementor-section elementor-top-section elementor-element elementor-element-282cecd  elementor-section-height-min-height elementor-section-stretched elementor-section-boxed elementor-section-height-default elementor-section-items-middle jarallax" data-id="692a2d2" data-element_type="section" data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;,&quot;background_background&quot;:&quot;classic&quot;,&quot;grandrestaurant_ext_is_background_parallax&quot;:&quot;true&quot;,&quot;shape_divider_top&quot;:&quot;split&quot;,&quot;grandrestaurant_ext_is_background_parallax_speed&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0.8000000000000000444089209850062616169452667236328125,&quot;sizes&quot;:[]},&quot;grandrestaurant_ext_is_background_backdrop&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_background_on_scroll&quot;:&quot;false&quot;}" style="background-image: none; width: 1857px; left: -343.5px;">
	<div class="elementor-background-overlay"></div>
	<div class="elementor-shape elementor-shape-top" data-negative="false">
		<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 20" preserveAspectRatio="none">
			<path class="elementor-shape-fill" d="M0,0v3c0,0,393.8,0,483.4,0c9.2,0,16.6,7.4,16.6,16.6c0-9.1,7.4-16.6,16.6-16.6C606.2,3,1000,3,1000,3V0H0z"></path>
		</svg>
	</div>
	<div class="elementor-container elementor-column-gap-default">
		<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-7c1c8af" data-id="0591d0b" data-element_type="column" data-settings="{&quot;grandrestaurant_ext_link_reservation&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_link_sidemenu&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_link_fullmenu&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_link_closed_fullmenu&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_scrollme&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_smoove&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_parallax_mouse&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_infinite&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_fadeout_animation&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_mobile_static&quot;:&quot;false&quot;}">
			<div class="elementor-widget-wrap elementor-element-populated smooved" style="perspective: 1000px;">
				<div class="elementor-element elementor-element-9d15679  elementor-align-center elementor-widget elementor-widget-button init-smoove smooved" data-id="db13d49" data-element_type="widget" data-settings="{&quot;grandrestaurant_ext_link_reservation&quot;:&quot;true&quot;,&quot;grandrestaurant_ext_is_smoove&quot;:&quot;true&quot;,&quot;grandrestaurant_ext_smoove_disable&quot;:&quot;769&quot;,&quot;grandrestaurant_ext_smoove_duration&quot;:1000,&quot;grandrestaurant_ext_smoove_translatey&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:39,&quot;sizes&quot;:[]},&quot;grandrestaurant_ext_link_sidemenu&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_link_fullmenu&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_link_closed_fullmenu&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_scrollme&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_smoove_scalex&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:1,&quot;sizes&quot;:[]},&quot;grandrestaurant_ext_smoove_scaley&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:1,&quot;sizes&quot;:[]},&quot;grandrestaurant_ext_smoove_rotatex&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;grandrestaurant_ext_smoove_rotatey&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;grandrestaurant_ext_smoove_rotatez&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;grandrestaurant_ext_smoove_translatex&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;grandrestaurant_ext_smoove_translatez&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;grandrestaurant_ext_smoove_skewx&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;grandrestaurant_ext_smoove_skewy&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;grandrestaurant_ext_smoove_perspective&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:1000,&quot;sizes&quot;:[]},&quot;grandrestaurant_ext_is_parallax_mouse&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_infinite&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_fadeout_animation&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_mobile_static&quot;:&quot;false&quot;}" data-widget_type="button.default" style="transition-duration: 1000ms; opacity: 1;">
					<div class="elementor-widget-container">
						<div class="elementor-button-wrapper">
							<a class="elementor-button elementor-button-link elementor-size-md" href="https://themes.themegoods.com/grandrestaurantv6/home-2/?fbclid=IwAR38DbSCcwm2Jl4UqIzT9hYhZcU3qsGliuzODixxHMe5p0naCU9xZHlexHE#">
								<span class="elementor-button-content-wrapper">
									<span class="elementor-button-text">{{ $contact->title }}</span>
								</span>
							</a>
						</div>
					</div>
				</div>
				<div class="elementor-element elementor-element-eda0a21  elementor-widget elementor-widget-heading init-smoove smooved" data-id="47ab28f" data-element_type="widget" data-settings="{&quot;grandrestaurant_ext_is_smoove&quot;:&quot;true&quot;,&quot;grandrestaurant_ext_smoove_disable&quot;:&quot;769&quot;,&quot;grandrestaurant_ext_smoove_duration&quot;:1000,&quot;grandrestaurant_ext_smoove_translatey&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:40,&quot;sizes&quot;:[]},&quot;grandrestaurant_ext_link_reservation&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_link_sidemenu&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_link_fullmenu&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_link_closed_fullmenu&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_scrollme&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_smoove_scalex&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:1,&quot;sizes&quot;:[]},&quot;grandrestaurant_ext_smoove_scaley&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:1,&quot;sizes&quot;:[]},&quot;grandrestaurant_ext_smoove_rotatex&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;grandrestaurant_ext_smoove_rotatey&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;grandrestaurant_ext_smoove_rotatez&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;grandrestaurant_ext_smoove_translatex&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;grandrestaurant_ext_smoove_translatez&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;grandrestaurant_ext_smoove_skewx&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;grandrestaurant_ext_smoove_skewy&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;grandrestaurant_ext_smoove_perspective&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:1000,&quot;sizes&quot;:[]},&quot;grandrestaurant_ext_is_parallax_mouse&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_infinite&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_fadeout_animation&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_mobile_static&quot;:&quot;false&quot;}" data-widget_type="heading.default" style="transition-duration: 1000ms; opacity: 1;">
					<div class="elementor-widget-container">
						<h2 class="elementor-heading-title elementor-size-default">
							<a href="tel:{{ $contact->brief }}" style="color:#fff;">or call us {{ $contact->brief }}</a>
						</h2>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div id="jarallax-container-2" style="position: absolute; top: 0px; left: 0px; width: 100%; height: 100%; overflow: hidden; z-index: -100;">
		<img class="jarallax-img" src="{{ $contact->image }}" style="object-fit: cover; object-position: 50% 50%; max-width: none; position: absolute; top: 0px; left: 0px; width: 1857px; height: 633.75px; overflow: hidden; pointer-events: none; transform-style: preserve-3d; backface-visibility: hidden; will-change: transform, opacity; margin-top: 149.125px; transform: translate3d(0px, -334.438px, 0px);">
	</div>
</section>


                        </div>
                    </div>
                </div>
                <!-- End main content -->
            </div>
        </div>


        @include('frontend.element.footer')

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

    @include('frontend.element.booking')

    @include('frontend.panels.stylefooter')

    <script type='text/javascript' src='{{ asset('themes/frontend/home_files/js/owl.carousel.min.js') }}' id='owl-carousel-js'></script>
    <script data-minify="1" type='text/javascript' src='{{ asset('themes/frontend/home_files/js/tilt.jquery.js') }}' id='tilt-js'></script>
    <script data-minify="1" type='text/javascript' src='{{ asset('themes/frontend/home_files/js/justifiedGallery.js') }}' id='justifiedGallery-js'></script>

</body>

</html>