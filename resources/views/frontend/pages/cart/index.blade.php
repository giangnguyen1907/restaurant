   <!DOCTYPE html>
   <html lang="vi">
   <meta http-equiv="content-type" content="text/html;charset=UTF-8" />

   <head>

      <title>Giỏ hàng</title>
      <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1" />
      <meta http-equiv="content-type" content="text/html; charset=utf-8" />
      <meta name="robots" content="index, follow" />
      <meta http-equiv="Content-Language" content="vi" />
      <meta name="copyright" content="Copyright" />
      <meta property="og:type" name="ogtype" content="Website" />
      <meta property="og:sitename" content="{{ Request::fullUrl() }}" />
      <link rel="canonical" href="{{ Request::fullUrl() }}" />
      <link rel="shortcut icon" type="image/png" href="{{ $web_information->image->favicon ?? '' }}" />

      @include('frontend.panels.styles')

   </head>

   <body class="page-template-default page page-id-7 theme-grandrestaurant woocommerce-cart woocommerce-page woocommerce-js tg_lightbox_black loftloader-lite-enabled elementor-default elementor-kit-24 e--ua-isTouchDevice e--ua-blink e--ua-edge e--ua-webkit smoove-overflow loaded">
      <div id="loftloader-wrapper" class="pl-imgloading" data-show-close-time="15000" data-max-load-time="0">
         <div class="loader-section section-fade"></div>
         <div class="loader-inner">
            <div id="loader">
               <div class="imgloading-container"><span style="background-image: url({{ $web_information->image->logo_header_dark ?? '' }});"></span></div><img width="130" height="43" data-no-lazy="1" class="skip-lazy" alt="loader image" src="{{ $web_information->image->logo_header_dark ?? '' }}">
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



      <div id="wrapper">
         <div id="elementor-header" class="main-menu-wrapper">
            <div class="elementor elementor-148">
               <section class="elementor-section elementor-top-section elementor-element elementor-element-ec7022f elementor-section-content-middle elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="ec7022f" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;grandrestaurant_ext_is_background_parallax&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_background_backdrop&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_background_on_scroll&quot;:&quot;false&quot;}">

                  @include('frontend.element.header_top')
               </section>
               <section class="elementor-section elementor-top-section elementor-element elementor-element-4430805 elementor-section-content-middle elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="4430805" data-element_type="section" data-settings="{&quot;grandrestaurant_ext_is_background_parallax&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_background_backdrop&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_background_on_scroll&quot;:&quot;false&quot;}">

                  @include('frontend.element.menu_page')
               </section>
            </div>
         </div>
         @include('frontend.element.custom')
         <div id="page_caption">

            <div class="page_title_wrapper baseline">
               <div class="page_title_inner baseline">
                  <h1>
                     Cart </h1>
               </div>
               <br class="clear">
            </div>
         </div>
         <div id="page_content_wrapper" class=" ">
            <div class="inner">
               <!-- Begin main content -->
               <div class="inner_wrapper">
                  <div class="sidebar_content full_width">

                  @if (session('cart'))
                     <div class="woocommerce">
                        <div class="woocommerce-notices-wrapper"></div>
                        <form class="woocommerce-cart-form" action="" method="post">
                           @csrf
                           <table class="shop_table shop_table_responsive cart woocommerce-cart-form__contents" cellspacing="0">
                              <thead>
                                 <tr>
                                    <th class="product-remove"><span class="screen-reader-text">Remove item</span></th>
                                    <th class="product-thumbnail"><span class="screen-reader-text">Thumbnail image</span></th>
                                    <th class="product-name">Product</th>
                                    <th class="product-price">Price</th>
                                    <th class="product-quantity">Quantity</th>
                                    <th class="product-subtotal">Subtotal</th>
                                 </tr>
                              </thead>
                              <tbody>
                              @php $total = 0 @endphp
                                          @foreach (session('cart') as $id => $details)
                                          @php
                                             $total += $details['price'] * $details['quantity'];
                                             $alias_detail = Str::slug($details['title']);
                                             $url_link = route('frontend.cms.product', ['alias_detail' => $alias_detail]).'.html' ;
                                          @endphp
                                 <tr class="woocommerce-cart-form__cart-item cart_item">

                                    <td class="product-remove">
                                       <a onclick="removecart({{ $id }})" class="remove" aria-label="Remove Baked Potato Pizza from cart" data-product_id="5389" data-product_sku="">×</a>
                                    </td>

                                    <td class="product-thumbnail">
                                       <a href="{{ $url_link }}"><img width="300" height="300" src="{{ $details['image_thumb'] ?? $details['image'] }}" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="" decoding="async" fetchpriority="high"></a>
                                    </td>

                                    <td class="product-name" data-title="Product">
                                       <a href="{{ $url_link }}">{{ $details['title'] }}</a>
                                       <!-- <dl class="variation">
                                          <dt class="variation-Size">Size:</dt>
                                          <dd class="variation-Size">
                                             <p>Normal</p>
                                          </dd>
                                       </dl> -->
                                    </td>

                                    <td class="product-price" data-title="Price">
                                       <span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">$</span>{{ isset($details['price']) && $details['price'] > 0 ? number_format($details['price']) : __('Contact') }}</bdi></span>
                                    </td>

                                    <td class="product-quantity" data-title="Quantity">
                                       <div class="quantity">
                                          <label class="screen-reader-text" for="quantity_66012ede6838a"> {{ isset($details['price']) && $details['price'] > 0 ? number_format($details['price']) : __('Contact') }}</label>
                                          <input type="number"  class="input-text qty text" name="quantity"
                                                         id="quantity{{ $id }}"
                                                         value="{{ $details['quantity'] }}"
                                                         aria-label="Product quantity" 
                                                         onchange="updateCart({{ $id }})" 
                                                         size="4" min="0" max="" step="1" placeholder="" inputmode="numeric" autocomplete="off">
                                       </div>
                                    </td>

                                    <td class="product-subtotal" data-title="Subtotal">
                                       <span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">$</span>{{ number_format($details['price'] * $details['quantity']) }}</bdi></span>
                                    </td>
                                 </tr>
                                 @endforeach

                                 <tr>
                                    <td colspan="6" class="actions">

                                       <div class="coupon">
                                          <label for="coupon_code" class="screen-reader-text">Coupon:</label> <input type="text" name="coupon_code" class="input-text" id="coupon_code" value="" placeholder="Coupon code"> <button type="submit" class="button" name="apply_coupon" value="Apply coupon">Apply coupon</button>
                                       </div>

                                       <a class="button" href="{{ url()->current() }}" >Update cart</a>


                                       <!-- <input type="hidden" id="woocommerce-cart-nonce" name="woocommerce-cart-nonce" value="87ebcf3dfb"><input type="hidden" name="_wp_http_referer" value="/grandrestaurantv6/cart/"> -->
                                    </td>
                                 </tr>

                              </tbody>
                           </table>
                        </form>


                        <div class="cart-collaterals">
                           <div class="cart_totals ">


                              <h2>Cart totals</h2>

                              <table cellspacing="0" class="shop_table shop_table_responsive">

                                 <tbody>
                                    <tr class="cart-subtotal">
                                       <th>Subtotal</th>
                                       <td data-title="Subtotal"><span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">$</span>{{ number_format($total) }}</bdi></span></td>
                                    </tr>






                                    <tr class="order-total">
                                       <th>Total</th>
                                       <td data-title="Total"><strong><span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">$</span>{{ number_format($total) }}</bdi></span></strong> </td>
                                    </tr>


                                 </tbody>
                              </table>

                              <div class="wc-proceed-to-checkout">

                                 <a href="/thanh-toan" class="checkout-button button alt wc-forward">
                                    Proceed to checkout</a>
                              </div>


                           </div>
                        </div>

                     </div>
                  @else  
                  <div class="woocommerce">
                        <div class="woocommerce-notices-wrapper"></div> 
                        <p>Chưa có sản phẩm nào trong giỏ hàng</p>
                  </div>
                  @endif 
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

                        function removecart(id){
                           var f = "?id=" + id;
                           var _url = "/remove-from-cart" + f;
                           jQuery.ajax({
                              type: "GET",
                              url: _url,
                              data: f,
                              cache: false,
                              context: document.body,
                              success: function(data) {
                                 window.location.reload();
                              }
                           });
                        }

                        function updateCart(id){
                           var quantity = document.getElementById('quantity'+ id ).value;
                           if (quantity * 1.0 < 1 ) {
                                 document.getElementById('quantity'+ id ).value = 1;
                                 return;
                           }
                           if (typeof quantity == "undefined") {
                              quantity = 1;
                           }
                           // var quantity = document.getElementById('quantity').value;
                           var f = "?quantity=" + quantity + "&id=" + id;
                           var _url = "/update-cart" + f;
                           jQuery.ajax({
                              type: "GET",
                              url: _url,
                              data: f,
                              cache: false,
                              context: document.body,
                              success: function(data) {
                                 window.location.reload();
                              }
                           });
                        }
                     </script>
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
      <link rel="stylesheet" id="elementor-post-20-css" href="{{ asset('themes/frontend/home_files/css/post-20.css') }}" type="text/css" media="all">

      <link rel="stylesheet" id="elementor-post-75-css" href="{{ asset('themes/frontend/home_files/css/post-75.css') }}" type="text/css" media="all">

   </body>

   </html>