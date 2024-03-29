<!DOCTYPE html>
<html lang="vi" class="loading-site no-js">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>

   <?php
   $title = $detail->title ?? $detail->title;
   $brief = $detail->mota ?? null;
   $content = $detail->chitiet ?? null;
   $image = $detail->image != '' ? $detail->image : null;
   $image_thumb = $detail->image_thumb != '' ? $detail->image_thumb : null;
   $date = date('H:i d/m/Y', strtotime($detail->created_at));

   $url_taxonomy = route('frontend.cms.product_category', ['alias' => $detail->url_part]) . '.html';

   $title_taxonomy = $detail->taxonomy_title ?? $detail->taxonomy_title;

   $seo_title = $detail->meta_title ?? $title;
   $seo_keyword = $detail->meta_keyword ?? null;
   $seo_description = $detail->meta_description ?? $brief;
   $seo_image = $image ?? ($image_thumb ?? null);
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



   <div id="wrapper">
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
      <div id="page_content_wrapper">
         <div class="inner ">
            <!-- Begin main content -->
            <div class="inner_wrapper">
               <div class="sidebar_content full_width">

                  <div class="woocommerce-notices-wrapper"></div>
                  <div id="product-5389" class="product type-product post-5389 status-publish first instock product_cat-sides product_tag-delivery has-post-thumbnail shipping-taxable purchasable product-type-simple">

                     <div class="woocommerce-product-gallery woocommerce-product-gallery--with-images woocommerce-product-gallery--columns-4 images" data-columns="4" style="opacity: 1; transition: opacity 0.25s ease-in-out 0s;">
                        <div class="woocommerce-product-gallery__wrapper">
                           <div data-thumb="<?php echo e($detail->image); ?>" data-thumb-alt="" class="woocommerce-product-gallery__image"><a href="<?php echo e($detail->image); ?>" data-rel="woo-product-gallery"><img width="600" height="600" src="<?php echo e($detail->image); ?>" class="wp-post-image" alt="" decoding="async" title="<?php echo e($detail->title); ?>" data-caption="" data-src="<?php echo e($detail->image); ?>" data-large_image="<?php echo e($detail->image); ?>" data-large_image_width="1440" data-large_image_height="1440" loading="lazy"></a></div>
                        </div>
                     </div>

                     <div class="summary entry-summary">
                        <h1 class="product_title entry-title"><?php echo e($detail->title); ?></h1>
                        <p class="price"><span class="woocommerce-Price-amount amount"><bdi><?php echo e($detail->gia); ?> <?php if($detail->donvitien=='Dollar') echo '$'; else echo $detail->donvitien ?></bdi></span></p>
                        <div class="woocommerce-product-details__short-description">
                           <p><?php echo e($detail->mota); ?></p>
                        </div>


                        <form class="cart" action="<?php echo e(route('frontend.order.add_to_cart')); ?>" method="get" enctype="multipart/form-data">
                           <?php echo csrf_field(); ?>
                           <div class="wapf">
                              <div class="wapf-wrapper">
                                 <div class="wapf-field-group" data-group="6193">

                                    <!-- <div class="wapf-field-row">
                                       <div class="wapf-field-container wapf-field-radio" style="width:100%;" for="6052f6007295b">

                                          <div class="wapf-field-label wapf--above"><label><span>Size</span></label></div>
                                          <div class="wapf-field-input">
                                             <div class="wapf-radios">
                                                <div class="wapf-checkable wapf-checked"><label for="35601" class="wapf-input-label"><input id="35601" name="wapf[field_6052f6007295b]" class="wapf-input" type="radio" data-field-id="6052f6007295b" value="dai5l" checked=""><span class="wapf-label-text">Normal</span></label></div>
                                                <div class="wapf-checkable"><label for="63071" class="wapf-input-label"><input id="63071" name="wapf[field_6052f6007295b]" class="wapf-input" type="radio" data-field-id="6052f6007295b" value="57qtg" data-wapf-price="5" data-wapf-pricetype="fixed"><span class="wapf-label-text">Large <span class="wapf-pricing-hint">(+$5.00)</span></span></label></div>
                                             </div>
                                          </div>



                                       </div>
                                    </div> -->
                                    <!-- <div class="wapf-field-row">
                                       <div class="wapf-field-container wapf-field-checkboxes" style="width:100%;" for="6052f61e30176">

                                          <div class="wapf-field-label wapf--above"><label><span>Topping</span></label></div>
                                          <div class="wapf-field-input">
                                             <div class="wapf-checkboxes" data-is-required="">
                                                <div class="wapf-checkable"><label for="85664" class="wapf-input-label"><input id="85664" name="wapf[field_6052f61e30176][]" class="wapf-input" type="checkbox" data-field-id="6052f61e30176" value="bszsm" data-wapf-price="0.5" data-wapf-pricetype="fixed"><span class="wapf-label-text">Boiled Egg <span class="wapf-pricing-hint">(+$0.50)</span></span></label></div>
                                                <div class="wapf-checkable"><label for="83777" class="wapf-input-label"><input id="83777" name="wapf[field_6052f61e30176][]" class="wapf-input" type="checkbox" data-field-id="6052f61e30176" value="bia5r" data-wapf-price="0.5" data-wapf-pricetype="fixed"><span class="wapf-label-text">Sweet Corn <span class="wapf-pricing-hint">(+$0.50)</span></span></label></div>
                                                <div class="wapf-checkable"><label for="74091" class="wapf-input-label"><input id="74091" name="wapf[field_6052f61e30176][]" class="wapf-input" type="checkbox" data-field-id="6052f61e30176" value="o6iy0" data-wapf-price="0.5" data-wapf-pricetype="fixed"><span class="wapf-label-text">Red Bean <span class="wapf-pricing-hint">(+$0.50)</span></span></label></div>
                                                <div class="wapf-checkable"><label for="51891" class="wapf-input-label"><input id="51891" name="wapf[field_6052f61e30176][]" class="wapf-input" type="checkbox" data-field-id="6052f61e30176" value="l6vut" data-wapf-price="0.5" data-wapf-pricetype="fixed"><span class="wapf-label-text">Broccoli <span class="wapf-pricing-hint">(+$0.50)</span></span></label></div>
                                                <div class="wapf-checkable"><label for="87316" class="wapf-input-label"><input id="87316" name="wapf[field_6052f61e30176][]" class="wapf-input" type="checkbox" data-field-id="6052f61e30176" value="bedf4" data-wapf-price="0.5" data-wapf-pricetype="fixed"><span class="wapf-label-text">Pumpkin <span class="wapf-pricing-hint">(+$0.50)</span></span></label></div>
                                                <div class="wapf-checkable"><label for="94054" class="wapf-input-label"><input id="94054" name="wapf[field_6052f61e30176][]" class="wapf-input" type="checkbox" data-field-id="6052f61e30176" value="4syne" data-wapf-price="0.5" data-wapf-pricetype="fixed"><span class="wapf-label-text">Beetroot <span class="wapf-pricing-hint">(+$0.50)</span></span></label></div>
                                             </div>
                                          </div>



                                       </div>
                                    </div> -->
                                    <div class="wapf-field-row">
                                       <div class="wapf-field-container wapf-field-textarea" style="width:100%;" for="6052f64e87592">

                                          <div class="wapf-field-label wapf--above"><label><span>Availability :
                                             <?php if($detail->tinhtrang == 1): ?>
                                              in stock
                                             <?php else: ?>
                                              Out of stock
                                             <?php endif; ?></span></label></div>
                                        
                                       </div>
                                    </div>
                                    <div class="wapf-field-row">
                                       <div class="wapf-field-container wapf-field-textarea" style="width:100%;" for="6052f64e87592">

                                          <div class="wapf-field-label wapf--above"><label><span>Extra Request</span></label></div>
                                          <div class="wapf-field-input">
                                             <textarea name="customer_note" class="wapf-input" data-is-required=""></textarea>
                                          </div>
                                          <input type="hidden" name="customer_note">
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="wapf-product-totals" data-product-type="simple" data-product-price="17.45" data-product-id="5389" style="display: block;">
                                 <div class="wapf--inner">
                                    <div>
                                       <span>Product total</span>
                                       <span id="product-total" class="wapf-product-total price amount"><?php echo e(number_format($detail->gia)); ?> <?php if($detail->donvitien=='Dollar') echo '$'; else echo $detail->donvitien ?></span>
                                    </div>
                                    <!-- <div>
                                       <span>Options total</span>
                                       <span class="wapf-options-total price amount">$0.00</span>
                                    </div> -->
                                    <!-- <div>
                                       <span>Grand total</span>
                                       <span id="product-total" class="wapf-grand-total price amount">$17.45</span>
                                    </div> -->
                                    
                                 </div>
                              </div>
                           </div>
                           <div class="quantity">
                              <label class="screen-reader-text" for="quantity_65e7fca4f2c13">Baked Potato Pizza quantity</label>
                              <input type="number" id="id=" quantity"" class="input-text qty text" name="quantity" value="1" aria-label="Product quantity" size="4" min="1" max="" step="1" placeholder="" inputmode="numeric" autocomplete="off">
                           </div>
                           <input type="hidden" name="id_product" id="id_product" value="<?php echo e($detail->id); ?>">
                           <button type="submit" class="single_add_to_cart_button button alt">Add to cart</button>

                        </form>

                      


                        <!-- <div class="product_meta">



                           <span class="posted_in">Category: <a href="https://themes.themegoods.com/grandrestaurantv6/product-category/sides/" rel="tag">Sides</a></span>
                           <span class="tagged_as">Tag: <a href="https://themes.themegoods.com/grandrestaurantv6/product-tag/delivery/" rel="tag">delivery</a></span>

                        </div> -->
                     </div>


                     <div class="woocommerce-tabs wc-tabs-wrapper">
                        <ul class="tabs wc-tabs" role="tablist">
                           <li class="description_tab active" id="tab-title-description" role="tab" aria-controls="tab-description">
                              <a href="#tab-description">
                                 Description </a>
                           </li>
                           <!-- <li class="reviews_tab" id="tab-title-reviews" role="tab" aria-controls="tab-reviews">
                              <a href="#tab-reviews">
                                 Reviews (0) </a>
                           </li> -->
                        </ul>
                        <div class="woocommerce-Tabs-panel woocommerce-Tabs-panel--description panel entry-content wc-tab" id="tab-description" role="tabpanel" aria-labelledby="tab-title-description" style="">

                           <h2>Description</h2>

                           <p><?php echo $detail->chitiet; ?></p>
                        </div>
                   

                     </div>

                     <?php if(isset($posts)): ?>
                     <section class="related products">

                        <h2>Related products</h2>

                        <ul class="products columns-3">

                        <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                           <li class="product type-product post-5385 status-publish instock product_cat-main product_tag-delivery has-post-thumbnail shipping-taxable purchasable product-type-simple">
                              <a href="/chi-tiet-sp/<?php echo e($item->alias); ?>.html" class="woocommerce-LoopProduct-link woocommerce-loop-product__link"><img width="300" height="300" src="<?php echo e($item->image); ?>" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="" decoding="async" loading="lazy">
                                 <h2 class="woocommerce-loop-product__title"><?php echo e($item->title); ?></h2>
                                 <span class="price"><span class="woocommerce-Price-amount amount"><bdi><?php echo e($item->gia); ?> <?php if($item->donvitien=='Dollar') echo '$'; else echo $item->donvitien ?></bdi></span></span>
                              </a><a href="/chi-tiet-sp/<?php echo e($item->alias); ?>.html" data-quantity="1" class="button product_type_simple add_to_cart_button" data-product_id="5385" data-product_sku="" aria-label="Add “Tuna Roast Source” to your cart" aria-describedby="" rel="nofollow">Select options</a>
                           </li>
                           <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>

                     </section>
                     <?php endif; ?>
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
   <link rel="stylesheet" id="elementor-post-20-css" href="<?php echo e(asset('themes/frontend/home_files/css/post-20.css')); ?>" type="text/css" media="all">

   <link rel="stylesheet" id="elementor-post-75-css" href="<?php echo e(asset('themes/frontend/home_files/css/post-75.css')); ?>" type="text/css" media="all">

</body>

</html><?php /**PATH D:\xampp\htdocs\restaurant\resources\views/frontend/pages/product/detail.blade.php ENDPATH**/ ?>