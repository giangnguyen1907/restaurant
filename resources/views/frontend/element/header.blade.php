 <header id="header" class="header has-sticky sticky-jump">
 <div class="header-wrapper">
    <div id="top-bar" class="header-top hide-for-sticky nav-dark hide-for-medium">
       <div class="flex-row container">
          <div class="flex-col hide-for-medium flex-left">
             <ul class="nav nav-left medium-nav-center nav-small  nav-divided">
                <li class="header-contact-wrapper">
                   <ul id="header-contact" class="nav nav-divided nav-uppercase header-contact">
                      <li class="">
                         <a href="mailto:{{ $web_information->information->email }}" class="tooltip" title="{{ $web_information->information->email }}">
                         	<i class="icon-envelop" style="font-size:18px;"></i>			       
                         	<span>{{ $web_information->information->email }}</span>
                         </a>
                      </li>
                      <li class="">
                         <a href="tel:{{ $web_information->information->hotline }}" class="tooltip" title="{{ $web_information->information->hotline }}">
                         <i class="icon-phone" style="font-size:18px;"></i>			      
                         	<span>{{ $web_information->information->hotline }}</span>
                         </a>
                      </li>
                   </ul>
                </li>
             </ul>
          </div>
          <!-- flex-col left -->
          <div class="flex-col hide-for-medium flex-center">
             <ul class="nav nav-center nav-small  nav-divided">
             </ul>
          </div>
          <!-- center -->
          {{-- <div class="flex-col hide-for-medium flex-right">
             <ul class="nav top-bar-nav nav-right nav-small  nav-divided">
                <li id="menu-item-46" class="menu-item menu-item-type-post_type menu-item-object-page  menu-item-46"><a href="https://thegioithoitrangbaby.vn/dia-chi/" class="nav-top-link">Địa Chỉ</a></li>
                <li id="menu-item-47" class="menu-item menu-item-type-post_type menu-item-object-page  menu-item-47"><a href="https://thegioithoitrangbaby.vn/chinh-sach-quy-dinh/" class="nav-top-link">Chính Sách &#038; Quy Định</a></li>
                <li id="menu-item-48" class="menu-item menu-item-type-post_type menu-item-object-page  menu-item-48"><a href="https://thegioithoitrangbaby.vn/thong-tin-cua-hang/" class="nav-top-link">Thông Tin Cửa Hàng</a></li>
                <li id="menu-item-4390" class="menu-item menu-item-type-post_type menu-item-object-page  menu-item-4390"><a href="https://thegioithoitrangbaby.vn/gio-hang/" class="nav-top-link">Giỏ Hàng</a></li>
             </ul>
          </div> --}}
          <!-- .flex-col right -->
       </div>
       <!-- .flex-row -->
    </div>
    <!-- #header-top -->
    <div id="masthead" class="header-main hide-for-sticky">
       <div class="header-inner flex-row container logo-left medium-logo-center" role="navigation">
          <!-- Logo -->
          <div id="logo" class="flex-col logo">
             <!-- Header logo -->
             <a href="/" title="{{ $web_information->information->brief ?? '' }}" rel="home">
               <img width="295" height="143" src="{{ $web_information->image->logo_header ?? '' }}" class="header_logo header-logo" alt="{{ $web_information->information->brief ?? '' }}"/>
               <img  width="295" height="143" src="{{ $web_information->image->logo_header ?? '' }}" class="header-logo-dark" alt="{{ $web_information->information->brief ?? '' }}"/>
             </a>
          </div>
          <!-- Mobile Left Elements -->
          <div class="flex-col show-for-medium flex-left">
             <ul class="mobile-nav nav nav-left ">
                <li class="nav-icon has-icon">
                   <a href="#" data-open="#main-menu" data-pos="left" data-bg="main-menu-overlay" data-color="" class="is-small" aria-controls="main-menu" aria-expanded="false">
                   <i class="icon-menu" ></i>
                   </a>
                </li>
             </ul>
          </div>
          <!-- Left Elements -->
          <div class="flex-col hide-for-medium flex-left
             flex-grow">
             <ul class="header-nav header-nav-main nav nav-left  nav-divided nav-uppercase" >
                <li class="header-block">
                   <div class="header-block-block-1">
                      <div class="row row-small align-middle align-center header-block"  id="row-1048534264">
                         <div class="col medium-6 small-12 large-6"  >
                            <div class="col-inner"  >
                               <div class="gap-element clearfix" style="display:block; height:auto; padding-top:20px"></div>
                               <div class="searchform-wrapper ux-search-box relative is-normal">
                                  <form method="GET" class="searchform" action="/tim-kiem">
                                     <div class="flex-row relative">
                                        <div class="flex-col flex-grow">
                                           <input type="search" class="search-field mb-0" name="search" id="search" value="<?php if(isset($_REQUEST['search'])) { echo $_REQUEST['search']; } ?>" placeholder="Nhập sản phẩm bạn cần tìm..." />
                                        </div>
                                        <!-- .flex-col -->
                                        <div class="flex-col">
                                           <button type="submit" class="ux-search-submit secondary button icon mb-0">
                                           <i class="icon-search" ></i>				
                                       	</button>
                                        </div>
                                        <!-- .flex-col -->
                                     </div>
                                  </form>
                               </div>
                               <div class="gap-element clearfix" style="display:block; height:auto; padding-top:10px"></div>
                            </div>
                         </div>
                         <div class="col medium-3 small-12 large-3"  >
                            <div class="col-inner text-center"  >
                               <div class="gap-element clearfix" style="display:block; height:auto; padding-top:20px"></div>
                               <div class="icon-box featured-box icon-box-left text-left is-small"  >
                                  <div class="icon-box-img" style="width: 46px">
                                     <div class="icon">
                                        <div class="icon-inner" >
                                           <img width="185" height="175" src="/public/themes/frontend/shopquanao/iconhotro.png" class="attachment-medium size-medium" alt="" />					
                                        </div>
                                     </div>
                                  </div>
                                  <div class="icon-box-text last-reset">
                                     <p style="text-align: left;"><span style="font-size: 140%; color: #0092ff;"><strong>{{ $web_information->information->hotline }}</strong></span><br />Tư Vấn Miễn Phí 24/7</p>
                                  </div>
                               </div>
                               <!-- .icon-box -->
                            </div>
                         </div>
                         <div class="col medium-3 small-12 large-3"  >
                            <div class="col-inner text-center"  >
                               <div class="gap-element clearfix" style="display:block; height:auto; padding-top:20px"></div>
                               <div class="icon-box featured-box icon-box-left text-left is-small"  >
                                  <div class="icon-box-img" style="width: 46px">
                                     <div class="icon">
                                        <div class="icon-inner" >
                                           <img width="180" height="180" src="/public/themes/frontend/shopquanao/mien-phi-ship.png" class="attachment-medium size-medium" alt="" sizes="(max-width: 180px) 100vw, 180px" />					
                                        </div>
                                     </div>
                                  </div>
                                  <div class="icon-box-text last-reset">
                                     <p style="text-align: left;"><span style="font-size: 140%; color: #0092ff;"><strong>FREE ship</strong></span><br />Đơn Hàng Trên 500K</p>
                                  </div>
                               </div>
                               <!-- .icon-box -->
                            </div>
                         </div>
                         <style scope="scope">
                         </style>
                      </div>
                   </div>
                </li>
             </ul>
          </div>
          <!-- Right Elements -->
          <div class="flex-col hide-for-medium flex-right">
             <ul class="header-nav header-nav-main nav nav-right  nav-divided nav-uppercase">
             </ul>
          </div>
          <!-- Mobile Right Elements -->
          <div class="flex-col show-for-medium flex-right">
             <ul class="mobile-nav nav nav-right ">
                <li class="cart-item has-icon">
                   <div class="header-button">      
                     <a href="/" class="header-cart-link off-canvas-toggle nav-top-link icon primary button round is-small" data-open="#cart-popup" data-class="off-canvas-cart" title="Giỏ hàng" data-pos="right">
                      <i class="icon-shopping-bag"
                         data-icon-label="0">
                      </i>
                      </a>
                   </div>
                   <!-- Cart Sidebar Popup -->
                   <div id="cart-popup" class="mfp-hide widget_shopping_cart">
                      <div class="cart-popup-inner inner-padding">
                         <div class="cart-popup-title text-center">
                            <h4 class="uppercase">Giỏ hàng</h4>
                            <div class="is-divider"></div>
                         </div>
                         <div class="widget_shopping_cart_content">
                            <p class="woocommerce-mini-cart__empty-message">Chưa có sản phẩm trong giỏ hàng.</p>
                         </div>
                         <div class="cart-sidebar-content relative"></div>
                      </div>
                   </div>
                </li>
             </ul>
          </div>
       </div>
       <!-- .header-inner -->
    </div>
    <!-- .header-main -->
    <div id="wide-nav" class="header-bottom wide-nav nav-dark flex-has-center hide-for-medium">
       <div class="flex-row container">
          <div class="flex-col hide-for-medium flex-left">
             <ul class="nav header-nav header-bottom-nav nav-left  nav-divided nav-size-medium nav-spacing-medium nav-uppercase">
                <div id="mega-menu-wrap" class="ot-vm-click">
                   <div id="mega-menu-title">
                      <i class="icon-menu"></i> Danh mục sản phẩm                
                   </div>
                   @php
                     $array_category = array();
                     foreach ($taxonomy_sanpham as $category) {
                        if ($category->parent_id != '') {
                           $array_category[$category->parent_id] = $category->parent_id;
                        }
                     }
                  @endphp
                   <ul id="mega_menu" class="sf-menu sf-vertical sf-js-enabled sf-arrows">
                     <?php foreach($taxonomy_sanpham as $taxonomy){
                        if(in_array($taxonomy->id,$array_category)) {
                     ?>
                        <li class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-has-children">
                           <a href="/{{ $taxonomy->taxonomy }}/{{ $taxonomy->url_part }}.html">{{ $taxonomy->title }}</a>
                              <ul class="sub-menu">
                                 <?php
                                 foreach($taxonomy_sanpham as $sub_taxonomy){ 
                                    if($sub_taxonomy->parent_id == $taxonomy->id){
                                 ?>
                                       <li class="menu-item menu-item-type-taxonomy menu-item-object-product_cat "><a href="/{{ $sub_taxonomy->taxonomy }}/{{ $sub_taxonomy->url_part }}.html">{{ $sub_taxonomy->title }}</a></li>
                                    <?php } } ?>
                              </ul>
                        </li>
                     <?php } else { ?>
                        <?php if($taxonomy->parent_id == '') { ?>
                        <li class="menu-item menu-item-type-taxonomy menu-item-object-product_cat"><a href="/{{ $taxonomy->taxonomy }}/{{ $taxonomy->url_part }}.html">{{ $taxonomy->title }}</a></li>
                     <?php } } } ?>
                   </ul>
                </div>
             </ul>
          </div>
          <!-- flex-col -->
          @isset($menu)
          <div class="flex-col hide-for-medium flex-center">
             <ul class="nav header-nav header-bottom-nav nav-center  nav-divided nav-size-medium nav-spacing-medium nav-uppercase">
               @php
                 $main_menu = $menu->first(function ($item, $key) {
                     return $item->menu_type == 'header' && ($item->parent_id == null || $item->parent_id == 0);
                 });
                 
                 $content = '';
                 //cấp 1
                 foreach ($menu as $key => $item) {

                     $url = $title = '';
                     
                     if ($item->parent_id == $main_menu->id) {
                         $title = isset($item->json_params->title->{$locale}) && $item->json_params->title->{$locale} != '' ? $item->json_params->title->{$locale} : $item->name;
                         $url = $item->url_link;
                         $target = $item->json_params->target;
                         $active = $url == url()->current() ? 'active' : '';
                         
                         //cấp 2
                         if ($item->sub > 0) {

                            $content .= '<li id="menu-item-151155" class="menu-item menu-item-has-children"><a target="'.$target.'" href="' . $url . '" aria-current="page">' . $title . '</a>';

                             $content .= '<ul class="sub-menu">';
                             foreach ($menu as $item_sub) {
                                 $url = $title = '';
                                 if ($item_sub->parent_id == $item->id) {
                                     $title = isset($item_sub->json_params->title->{$locale}) && $item_sub->json_params->title->{$locale} != '' ? $item_sub->json_params->title->{$locale} : $item_sub->name;
                                     $url = $item_sub->url_link;
                                     $target = $item_sub->json_params->target;
                                     $content .= '<li id="menu-item-164365" class="menu-item"><a target="'.$target.'" href="' . $url . '">'.$title.'</a>';
                                     $content .= '</li>';
                                 }
                             }
                             $content .= '</ul>';
                         } else {
                           $content .= '<li class="menu-item menu-item-type-post_type menu-item-object-page '.$active.' "><a href="' . $url . '" target="'.$target.'" class="nav-top-link">' . $title . '</a></li>';
                         } 
                         $content .= '</li>';
                     }
                 }
                 echo $content;
               @endphp
                {{-- <li id="menu-item-49" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-4 current_page_item active  menu-item-49"><a href="https://thegioithoitrangbaby.vn/" class="nav-top-link">Trang chủ</a></li>
                <li id="menu-item-1540" class="menu-item menu-item-type-post_type menu-item-object-page  menu-item-1540"><a href="https://thegioithoitrangbaby.vn/thong-tin-cua-hang/" class="nav-top-link">Thông Tin Cửa Hàng</a></li>
                <li id="menu-item-4389" class="menu-item menu-item-type-taxonomy menu-item-object-category  menu-item-4389"><a href="https://thegioithoitrangbaby.vn/tin-tuc/" class="nav-top-link">Tin tức</a></li>
                <li id="menu-item-52" class="menu-item menu-item-type-post_type menu-item-object-page  menu-item-52"><a href="https://thegioithoitrangbaby.vn/thanh-toan-van-chuyen/" class="nav-top-link">Thanh toán &#038; Vận chuyển</a></li>
                <li id="menu-item-53" class="menu-item menu-item-type-post_type menu-item-object-page  menu-item-53"><a href="https://thegioithoitrangbaby.vn/lien-he/" class="nav-top-link">Liên Hệ</a></li> --}}
             </ul>
          </div>
          @endisset
          <!-- flex-col -->
          <div class="flex-col hide-for-medium flex-right flex-grow">
             <ul class="nav header-nav header-bottom-nav nav-right  nav-divided nav-size-medium nav-spacing-medium nav-uppercase">
                <li class="html header-button-1">
                   <div class="header-button">
                      <a href="/gio-hang" class="button primary" style="border-radius:4px;">
                      <span>Giỏ hàng</span>
                      </a>
                   </div>
                </li>
             </ul>
          </div>
          <!-- flex-col -->
       </div>
       <!-- .flex-row -->
    </div>
    <!-- .header-bottom -->
    <div class="header-bg-container fill">
       <div class="header-bg-image fill"></div>
       <div class="header-bg-color fill"></div>
    </div>
    <!-- .header-bg-container -->   
 </div>
 <!-- header-wrapper-->
</header>