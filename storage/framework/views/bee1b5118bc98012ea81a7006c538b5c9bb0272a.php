<!DOCTYPE html>
<html lang="vi" class="loading-site no-js">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>

   <?php
   $page_title = $taxonomy->title ?? ($page->title ?? $page->name);
   $title = $taxonomy->title ?? ($taxonomy->title ?? null);
   $image = $taxonomy->image ?? null;
   $seo_title = $taxonomy->meta_title ?? $title;
   $seo_keyword = $taxonomy->meta_keyword ?? null;
   $seo_description = $taxonomy->meta_description ?? null;
   $seo_image = $image ?? null;
   ?>
   <title><?php echo e($title); ?></title>
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

</head>

<body class="archive post-type-archive post-type-archive-product theme-grandrestaurant woocommerce-shop woocommerce woocommerce-page woocommerce-js tg_lightbox_black loftloader-lite-enabled elementor-default elementor-kit-24 e--ua-isTouchDevice e--ua-blink e--ua-edge e--ua-webkit smoove-overflow loaded">
   <div id="loftloader-wrapper" class="pl-imgloading" data-show-close-time="15000" data-max-load-time="0">
      <div class="loader-section section-fade"></div>
      <div class="loader-inner">
         <div id="loader">
            <div class="imgloading-container"><span style="background-image: url(<?php echo e($web_information->image->logo_header_dark ?? ''); ?>);"></span></div><img width="130" height="43" data-no-lazy="1" class="skip-lazy" alt="loader image" src="<?php echo e($web_information->image->logo_header_dark ?? ''); ?>">
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



   <div id="wrapper" >
      <div id="elementor-header" class="main-menu-wrapper">
         <div class="elementor elementor-148">
            <section class="elementor-section elementor-top-section elementor-element elementor-element-ec7022f elementor-section-content-middle elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="ec7022f" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;grandrestaurant_ext_is_background_parallax&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_background_backdrop&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_background_on_scroll&quot;:&quot;false&quot;}">

               <?php echo $__env->make('frontend.element.header_top', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </section>
            <section class="elementor-section elementor-top-section elementor-element elementor-element-4430805 elementor-section-content-middle elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="4430805" data-element_type="section" data-settings="{&quot;grandrestaurant_ext_is_background_parallax&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_background_backdrop&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_background_on_scroll&quot;:&quot;false&quot;}">

               <?php echo $__env->make('frontend.element.menu_page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </section>
         </div>
      </div>
      <?php echo $__env->make('frontend.element.custom', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      <div id="page_caption">

         <div class="page_title_wrapper">
            <div class="page_title_inner">
               <h1><?php echo e($taxonomy->title); ?></h1>
            </div>
            <br class="clear">
         </div>
      </div>
      <div id="page_content_wrapper">
         <div class="inner ">
            <!-- Begin main content -->
            <div class="inner_wrapper">
               <div class="sidebar_content full_width">

                  <h1 class="page-title">MENU</h1>




                  <div class="woocommerce-notices-wrapper"></div>
                  <!-- <p class="woocommerce-result-count">
                     Showing all 12 results</p> -->
                  <!-- <form class="woocommerce-ordering" method="get">
                     <select name="orderby" class="orderby" aria-label="Shop order">
                        <option value="menu_order" selected="selected">Default sorting</option>
                        <option value="popularity">Sort by popularity</option>
                        <option value="rating">Sort by average rating</option>
                        <option value="date">Sort by latest</option>
                        <option value="price">Sort by price: low to high</option>
                        <option value="price-desc">Sort by price: high to low</option>
                     </select>
                     <input type="hidden" name="paged" value="1">
                  </form> -->

                  <ul class="products columns-3">
                     <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                     <li class="product type-product post-5389 status-publish instock product_cat-sides product_tag-delivery has-post-thumbnail shipping-taxable purchasable product-type-simple">
                        <a href="/chi-tiet-sp/<?php echo e($item->alias); ?>.html" class="woocommerce-LoopProduct-link woocommerce-loop-product__link"><img width="300" height="300" src="<?php echo e($item->image); ?>" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="" decoding="async" loading="lazy">
                           <h2 class="woocommerce-loop-product__title"><?php echo e($item->title); ?></h2>
                           <span class="price"><span class="woocommerce-Price-amount amount"><bdi><?php echo e(number_format($item->giakm ? $item->giakm : $item->gia)); ?><span class="woocommerce-Price-currencySymbol"> <?php if($item->donvitien=='Dollar') echo '$'; else echo $item->donvitien ?></span></bdi></span></span>
                        </a><a href="/chi-tiet-sp/<?php echo e($item->alias); ?>.html" data-quantity="1" class="button product_type_simple add_to_cart_button" data-product_sku="" aria-label="Add “<?php echo e($item->title); ?>” to your cart" aria-describedby="" rel="nofollow">Select options</a>
                     </li>
                   

                     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


                  </ul>



               </div>
            </div>
            <!-- End main content -->
         </div>
      </div><!--  -->

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
   <link rel="stylesheet" id="elementor-post-20-css" href="<?php echo e(asset('themes/frontend/home_files/css/post-20.css')); ?>" type="text/css" media="all">

   <link rel="stylesheet" id="elementor-post-75-css" href="<?php echo e(asset('themes/frontend/home_files/css/post-75.css')); ?>" type="text/css" media="all">

</body>

</html><?php /**PATH D:\xampp\htdocs\restaurant\resources\views/frontend/pages/product/category.blade.php ENDPATH**/ ?>