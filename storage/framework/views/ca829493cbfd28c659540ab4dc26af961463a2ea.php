<!DOCTYPE html>
<html lang="vi">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>

    <title>Check Out</title>
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1" />
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="robots" content="index, follow" />
    <meta http-equiv="Content-Language" content="vi" />
    <meta name="copyright" content="Copyright" />
    <meta property="og:type" name="ogtype" content="Website" />
    <meta property="og:sitename" content="<?php echo e(Request::fullUrl()); ?>" />
    <link rel="canonical" href="<?php echo e(Request::fullUrl()); ?>" />
    <link rel="shortcut icon" type="image/png" href="<?php echo e($web_information->image->favicon ?? ''); ?>" />

    <?php echo $__env->make('frontend.panels.styles', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

</head>

<body class="page-template-default page page-id-8 theme-grandrestaurant woocommerce-checkout woocommerce-page woocommerce-js tg_lightbox_black loftloader-lite-enabled elementor-default elementor-kit-24 e--ua-isTouchDevice e--ua-blink e--ua-edge e--ua-webkit smoove-overflow loaded">
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
        <div id="page_caption">

            <div class="page_title_wrapper baseline">
                <div class="page_title_inner baseline">
                    <h1>
                        Check Out </h1>
                </div>
                <br class="clear">
            </div>
        </div>
        <div id="page_content_wrapper" class=" ">
            <div class="inner">
                <!-- Begin main content -->
                <div class="inner_wrapper">
                    <div class="sidebar_content full_width">


                        <div class="woocommerce">
                            <div class="woocommerce-notices-wrapper"></div>

                            <form class="checkout_coupon woocommerce-form-coupon" method="post" style="">

                                <p>If you have a coupon code, please apply it below.</p>

                                <p class="form-row form-row-first">
                                    <label for="coupon_code" class="screen-reader-text">Coupon:</label>
                                    <input type="text" name="coupon_code" class="input-text" placeholder="Coupon code" id="coupon_code" value="">
                                </p>

                                <p class="form-row form-row-last">
                                    <button type="submit" class="button" name="apply_coupon" value="Apply coupon">Apply coupon</button>
                                </p>

                                <div class="clear"></div>
                            </form>
                            <div class="woocommerce-notices-wrapper"></div>
                            <form name="checkout" method="post" class="checkout woocommerce-checkout" action="/vnpay_payment" enctype="multipart/form-data" novalidate="novalidate">
                                <?php echo csrf_field(); ?>
                                <div class="col2-set" id="customer_details">
                                    <div class="col-1">
                                        <div class="woocommerce-billing-fields">

                                            <h3>Billing details</h3>



                                            <div class="woocommerce-billing-fields__field-wrapper">
                                                <p class="form-row form-row-wide validate-required" id="billing_first_name_field" data-priority="10"><label for="billing_first_name" class="">Full name&nbsp;<abbr class="required" title="required">*</abbr></label><span class="woocommerce-input-wrapper"><input type="text" class="input-text " name="name" id="billing_first_name" placeholder="" value="" autocomplete="given-name"></span></p>

                                                <p class="form-row address-field validate-state form-row-wide" id="billing_state_field" data-priority="80" data-o_class="form-row form-row-wide address-field validate-state"><label for="billing_state" class="">Address&nbsp;</label><span class="woocommerce-input-wrapper"><input type="text" class="input-text " value="" placeholder="" name="address" id="billing_state" autocomplete="address-level1" data-input-classes=""></span></p>

                                                <p class="form-row form-row-wide validate-required validate-phone" id="billing_phone_field" data-priority="100"><label for="billing_phone" class="">Phone&nbsp;<abbr class="required" title="required">*</abbr></label><span class="woocommerce-input-wrapper"><input type="tel" class="input-text " name="phone" id="billing_phone" placeholder="" value="" autocomplete="tel"></span></p>
                                                <p class="form-row form-row-wide validate-required validate-email" id="billing_email_field" data-priority="110"><label for="billing_email" class="">Email address&nbsp;<abbr class="required" title="required">*</abbr></label><span class="woocommerce-input-wrapper"><input type="email" class="input-text " name="email" id="billing_email" placeholder="" value="" autocomplete="email username"></span></p>
                                            </div>

                                        </div>

                                    </div>

                                    <div class="col-2">
                                        <div class="woocommerce-shipping-fields">
                                        </div>
                                        <div class="woocommerce-additional-fields">



                                            <h3>Additional information</h3>


                                            <div class="woocommerce-additional-fields__field-wrapper">
                                                <p class="form-row notes" id="order_comments_field" data-priority=""><label for="order_comments" class="">Order notes&nbsp;<span class="optional">(optional)</span></label><span class="woocommerce-input-wrapper"><textarea name="customer_note" class="input-text " id="order_comments" placeholder="Notes about your order, e.g. special notes for delivery." rows="3" cols="5"></textarea></span></p>
                                            </div>


                                        </div>
                                    </div>
                                </div>




                                <h3 id="order_review_heading">Your order</h3>


                                <div id="order_review" class="woocommerce-checkout-review-order">
                                    <table class="shop_table woocommerce-checkout-review-order-table">
                                        <thead>
                                            <tr>
                                                <th class="product-name">Product</th>
                                                <th class="product-total">Subtotal</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php $total = 0 ?>
                                                <?php $__currentLoopData = session('cart'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $id => $details): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <?php
                                                $total += $details['price'] * $details['quantity'];
                                               
                                                ?>
                                            <tr class="cart_item">
                                              
                                                <td class="product-name">
                                                   <?php echo e($details['title']); ?>&nbsp; <strong class="product-quantity">×&nbsp;<?php echo e($details['quantity']); ?></strong>
                                                    <dl class="variation">
                                                        <!-- <dt class="variation-Size">Size:</dt>
                                                        <dd class="variation-Size">
                                                            <p>Normal</p>
                                                        </dd> -->
                                                    </dl>
                                                </td>
                                                <td class="product-total">
                                                    <span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">$</span><?php echo e(number_format($details['price'] * $details['quantity'])); ?></bdi></span>
                                                </td>
                                               
                                            </tr>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </tbody>
                                        
                                        <tfoot>

                                            <tr class="cart-subtotal">
                                                <th>Subtotal</th>
                                                <td><span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">$</span><?php echo e(number_format($total)); ?></bdi></span></td>
                                            </tr>






                                            <tr class="order-total">
                                                <th>Total</th>
                                                <td><strong><span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">$</span><?php echo e($total); ?></bdi></span></strong> </td>
                                            </tr>


                                        </tfoot>
                                    </table>

                                    <div id="payment" class="woocommerce-checkout-payment">
                                        <!-- <ul class="wc_payment_methods payment_methods methods">
                                            <li class="wc_payment_method payment_method_bacs">
                                                <input id="payment_method_bacs" type="radio" class="input-radio" name="payment_method" value="bacs" checked="checked" data-order_button_text="">

                                                <label for="payment_method_bacs">
                                                    Direct bank transfer </label>
                                                <div class="payment_box payment_method_bacs" style="display: none;">
                                                    <p>Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order will not be shipped until the funds have cleared in our account.</p>
                                                </div>
                                            </li>
                                            <li class="wc_payment_method payment_method_cheque">
                                                <input id="payment_method_cheque" type="radio" class="input-radio" name="payment_method" value="cheque" data-order_button_text="">

                                                <label for="payment_method_cheque">
                                                    Check payments </label>
                                                <div class="payment_box payment_method_cheque" style="">
                                                    <p>Please send a check to Store Name, Store Street, Store Town, Store State / County, Store Postcode.</p>
                                                </div>
                                            </li>
                                            <li class="wc_payment_method payment_method_cod">
                                                <input id="payment_method_cod" type="radio" class="input-radio" name="payment_method" value="cod" data-order_button_text="">

                                                <label for="payment_method_cod">
                                                    Cash on delivery </label>
                                                <div class="payment_box payment_method_cod" style="display: none;">
                                                    <p>Pay with cash upon delivery.</p>
                                                </div>
                                            </li>
                                            <li class="wc_payment_method payment_method_paypal">
                                                <input id="payment_method_paypal" type="radio" class="input-radio" name="payment_method" value="paypal" data-order_button_text="Proceed to PayPal">

                                                <label for="payment_method_paypal">
                                                    PayPal <img src="https://www.paypalobjects.com/webstatic/mktg/Logo/AM_mc_vs_ms_ae_UK.png" alt="PayPal acceptance mark"><a href="https://www.paypal.com/gb/webapps/mpp/paypal-popup" class="about_paypal" onclick="javascript:window.open('https://www.paypal.com/gb/webapps/mpp/paypal-popup','WIPaypal','toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=yes, resizable=yes, width=1060, height=700'); return false;">What is PayPal?</a> </label>
                                                <div class="payment_box payment_method_paypal" style="display: none;">
                                                    <p>Pay via PayPal; you can pay with your credit card if you don’t have a PayPal account.</p>
                                                </div>
                                            </li>
                                        </ul> -->
                                        <div class="form-row place-order">
                                        

                                            <div class="woocommerce-terms-and-conditions-wrapper">
                                                <div class="woocommerce-privacy-policy-text">
                                                    <p>Your personal data will be used to process your order, support your experience throughout this website, and for other purposes described in our <a href="https://themes.themegoods.com/grandrestaurantv6/?page_id=3" class="woocommerce-privacy-policy-link" target="_blank">privacy policy</a>.</p>
                                                </div>
                                            </div>

                                            <input type="hidden" name="madonhang" id="madonhang" value="<?php echo e(time()); ?>">
                                          <input type="hidden" name="tongtien" id="tongtien" value="<?php echo e($total); ?>">
                                            <!-- <button type="submit" class="button alt" name="woocommerce_checkout_place_order" id="place_order" value="Place order" data-value="Place order">Place order</button> -->
                                            <button name="submit" value="submit" type="submit" class="button alt"  id="place_order"> Thanh toán sau khi nhận hàng</button>
                                            <button name="redirect" id="redirect" type="submit" onclick="saveuser()" class="button alt check_out" style="margin-top:10px;"> Thanh toán qua VNPAY</button>
                                            <style>
                                                  .check_out {
                                                    width: 100%;
                                                  }
                                            </style>
                                            <!-- <input type="hidden" id="woocommerce-process-checkout-nonce" name="woocommerce-process-checkout-nonce" value="ffe3270fe9"><input type="hidden" name="_wp_http_referer" value="/grandrestaurantv6/?wc-ajax=update_order_review"> -->
                                        </div>
                                    </div>

                                </div>


                            </form>

                        </div>
                    </div>
                </div>
                <script type="text/javascript">
                     function saveuser(){
                        var name = document.getElementById('name').value;
                        var phone = document.getElementById('phone').value;
                        var email = document.getElementById('email').value;
                        var address = document.getElementById('address').value;
                        var customer_note = document.getElementById('customer_note').value;
                        var f = "?name=" + name + "&phone=" + phone + "&email=" + email + "&address=" + address + "&customer_note=" + customer_note;
                        var _url = "/saveuser" + f;
                        jQuery.ajax({
                           type: "GET",
                           url: _url,
                           data: f,
                           cache: false,
                           context: document.body,
                           success: function(data) {

                           }
                        });
                     }

                  </script>
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

</html><?php /**PATH D:\xampp\htdocs\restaurant\resources\views/frontend/pages/cart/checkout.blade.php ENDPATH**/ ?>