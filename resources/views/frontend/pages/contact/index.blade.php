
<!DOCTYPE html>
<html lang="vi">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>

  @php
  $page_title = $taxonomy->title ?? ($page->title ?? ($page->name ?? ''));
  @endphp

  <title>{{ $page_title }}</title>
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
<body data-rsssl=1 class="archive tax-product_cat term-quan-ao-be-trai term-37 ot-vertical-menu woocommerce woocommerce-page woocommerce-no-js lightbox nav-dropdown-has-arrow">
    <a class="skip-link screen-reader-text" href="#main">Skip to content</a>
    <div id="wrapper">

      @include('frontend.element.header')

      <main id="main" class="">
         <div class="row category-page-row">
            <div class="col large-3 hide-for-medium ">
               <div id="shop-sidebar" class="sidebar-inner col-inner">
                  <aside id="nav_menu-3" class="widget widget_nav_menu">
                     <span class="widget-title shop-sidebar">Danh mục sản phẩm</span>
                     <div class="is-divider small"></div>
                     <div class="menu-danh-muc-san-pham-container">
                        <ul id="menu-danh-muc-san-pham" class="menu">
                           @php
                              $array_category_sp = array();
                              foreach ($taxonomy_sanpham as $category_sp) {
                                 if ($category_sp->parent_id != '') {
                                    $array_category_sp[$category_sp->parent_id] = $category_sp->parent_id;
                                 }
                              }
                           @endphp
                           <?php foreach($taxonomy_sanpham as $taxonomy_sp){
                              if(in_array($taxonomy_sp->id,$array_category_sp)) {
                           ?>
                              <li class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-has-children">
                                 <a href="/{{ $taxonomy_sp->taxonomy }}/{{ $taxonomy_sp->url_part }}.html">{{ $taxonomy_sp->title }}</a>
                                    <ul class="sub-menu">
                                       <?php
                                       foreach($taxonomy_sanpham as $sub_taxonomy_sp){ 
                                          if($sub_taxonomy_sp->parent_id == $taxonomy_sp->id){
                                       ?>
                                             <li class="menu-item menu-item-type-taxonomy menu-item-object-product_cat "><a href="/{{ $sub_taxonomy_sp->taxonomy }}/{{ $sub_taxonomy_sp->url_part }}.html">{{ $sub_taxonomy_sp->title }}</a></li>
                                          <?php } } ?>
                                    </ul>
                              </li>
                           <?php } else { ?>
                              <?php if($taxonomy_sp->parent_id == '') { ?>
                              <li class="menu-item menu-item-type-taxonomy menu-item-object-product_cat"><a href="/{{ $taxonomy_sp->taxonomy }}/{{ $taxonomy_sp->url_part }}.html">{{ $taxonomy_sp->title }}</a></li>
                           <?php } } } ?>
                           
                        </ul>
                     </div>
                  </aside>
                  <aside id="woocommerce_products-3" class="widget woocommerce widget_products">
                     <span class="widget-title shop-sidebar">Sản phẩm nổi bật</span>
                     <div class="is-divider small"></div>
                     <ul class="product_list_widget">
                        @foreach($posts_sp as $item)
                        @php
                           $hienthi = trim($item->hienthi,';');
                           $vitrihienthi = explode(';',$hienthi);       
                        @endphp
                           @if(in_array('1',$vitrihienthi))
                           <li>
                              <a href="/chi-tiet-sp/{{ $item->alias }}.html">
                              <img width="100" height="100" src="{{ $item->image }}" class="attachment-woocommerce_gallery_thumbnail size-woocommerce_gallery_thumbnail" alt="{{ $item->title }}" sizes="(max-width: 100px) 100vw, 100px" />     
                              <span class="product-title">{{ $item->title }}</span>
                              </a>
                              <span class="woocommerce-Price-amount amount">{{ number_format($item->giakm ? $item->giakm : $item->gia) }}<span class="woocommerce-Price-currencySymbol">&#8363;</span></span>
                           </li>
                           @endif
                        @endforeach
                     </ul>
                  </aside>
               </div>
               <!-- .sidebar-inner -->
            </div>
            <!-- #shop-sidebar -->
            <style type="text/css">
              h5.post-title, .from_the_blog_excerpt {
                 overflow: hidden;
                 display: -webkit-box;
                 -webkit-line-clamp: 2;
                         line-clamp: 2; 
                 -webkit-box-orient: vertical;
              }
            </style>
            <div class="large-9 col medium-col-first">
                <div class="page-inner">
                   <p>
                      <!-- wp:html -->
                   </p>
                   <h2 style="text-align: center;">
                      <span style="color: #000000; font-size: 100%; font-family: 'times new roman', times, serif;">
                          <strong>Thế Giới Thời Trang Baby – Nhà Cung Cấp Sỉ &amp; Lẻ Quần Áo Trẻ Em Uy Tín Hàng Đầu Việt Nam</strong>
                      </span>
                   </h2>
                   {{-- <p>
                      <span style="color: #000000; font-size: 120%; font-family: 'times new roman', times, serif;"><strong>
                        <img class="wp-image-3877 size-full alignleft lazy-load-active" src="public/themes/frontend/shopquanao/icon-dia-chi-the-gioi-thoi-trang-baby.png" data-src="public/themes/frontend/shopquanao/icon-dia-chi-the-gioi-thoi-trang-baby.png" alt="icon dia chi the gioi thoi trang baby" width="20" height="20">&nbsp;Địa Chỉ: 
                      </strong>  ........
                    </span>
                  </p>
                   <p>
                    <span style="font-family: 'times new roman', times, serif; font-size: 120%; color: #000000;">
                      <strong>
                        <img class="size-full wp-image-3879 alignleft lazy-load-active" src="public/themes/frontend/shopquanao/icon-hotline-the-gioi-thoi-trang-baby.png" data-src="public/themes/frontend/shopquanao/icon-hotline-the-gioi-thoi-trang-baby.png" alt="icon hotline the gioi thoi trang baby" width="20" height="20">&nbsp;Hotline:
                      </strong>&nbsp;
                      <strong>
                        <span style="color: #ff0000;">.........</span>
                    </p>
                   <p>
                    <span style="font-family: 'times new roman', times, serif; font-size: 120%; color: #000000;">
                      <strong>
                        <img class="size-full wp-image-3878 alignleft lazy-load-active" src="public/themes/frontend/shopquanao/icon-email-the-gioi-thoi-trang-baby.png" data-src="public/themes/frontend/shopquanao/icon-email-the-gioi-thoi-trang-baby.png" alt="icon email the gioi thoi trang baby" width="20" height="20">&nbsp;Email:
                      </strong> .......
                    </span>
                  </p>
                   <p>
                    <span style="font-family: 'times new roman', times, serif; font-size: 120%; color: #000000;">
                      <strong>
                        <img class="size-full wp-image-3982 alignleft lazy-load-active" src="public/themes/frontend/shopquanao/icon-website-new.png" data-src="public/themes/frontend/shopquanao/icon-website-new.png" alt="icon website new" width="20" height="20">&nbsp;Website:
                      </strong>&nbsp;
                      <span style="color: #008080;">
                        <a style="color: #008080;" href="http://thegioithoitrangbaby.com" target="_blank" rel="noopener noreferrer">.......</a>
                      </span>
                    </span>
                  </p> --}}
                   
                   
                   <p><span style="font-size: 120%; font-family: 'times new roman', times, serif;"><strong><span style="color: #000000;">Giới Thiệu Về&nbsp;Thế Giới Thời Trang Baby</span></strong></span></p>
                   <p style="padding-left: 30px;"><span style="color: #000000; font-size: 120%; font-family: 'times new roman', times, serif;"><span style="color: #800000;">❁</span> Thế Giới thời Trang Baby được thành lập vào 12 tháng 7 năm 2016. Tuy có “tuổi đời” non trẻ nhưng hiện nay đã có hàng triệu trẻ em Việt Nam đang sở hữu những mẫu <strong><a href="/">quần áo trẻ em</a></strong> chất lượng từ Thế Giới Thời Trang Baby.</span></p>
                   <p style="padding-left: 30px;"><span style="color: #000000; font-size: 120%; font-family: 'times new roman', times, serif;"><span style="color: #800000;">❁</span> Không chỉ là nơi được những khách hàng buôn sỉ, đại lý shop, đại lý bán hàng online,…tin dùng để lấy sỉ. Chúng tôi cũng đang nổi lực để xây dựng và phát triển chuỗi hệ thống cửa hàng quần áo trẻ em AN TOÀN dành cho trẻ em Việt Nam.</span></p>
                   <p style="padding-left: 30px;"><span style="color: #000000; font-size: 120%; font-family: 'times new roman', times, serif;"><span style="color: #800000;">❁</span> Hiện tại, chúng tôi đang cung cấp hơn 5 ngàn sản phẩm <strong>AN TOÀN, TIỆN ÍCH</strong>, được chứng nhận an toàn cho cho trẻ em, không chỉ giúp bé yêu đẹp mà còn khỏe mạnh.</span></p>
                   <p style="padding-left: 30px;"><span style="color: #000000; font-size: 120%; font-family: 'times new roman', times, serif;"><span style="color: #800000;">❁</span> Thế Giới Thời Trang Baby mong muốn sẽ trở thành người bạn đồng hành đáng tin cậy của hàng triệu bà mẹ trẻ năng động trên khắp Việt Nam.</span></p>
                   <p style="text-align: right;"><span style="font-size: 120%; font-family: 'times new roman', times, serif;"><em><span style="color: #000000;">Thế Giới Thời Trang Baby – Nơi Thiên Thần Tỏa Sáng</span></em></span></p>
                   <p style="text-align: center;"><span style="font-size: 120%; font-family: 'times new roman', times, serif;"><strong><span style="color: #0084a7;">Hướng Dẫn Đường Đi Đến Showroom Thế Giới Thời Trang Baby</span></strong></span></p>
                   
                   <p style="text-align: center;">
                    <iframe style="border: 0;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.415193853098!2d106.64378341480078!3d10.779478192319452!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752f173982a9a9%3A0x9b77f75913e13beb!2zVGjhur8gR2nhu5tpIFRo4budaSBUcmFuZyBCYWJ5!5e0!3m2!1svi!2s!4v1531465740653" width="1170" height="450" frameborder="0" allowfullscreen="allowfullscreen"></iframe>
                  </p>
                   <p>
                      <!-- /wp:html -->
                   </p>
                </div>
            </div>
         </div>
      </main>

       @include('frontend.element.footer')

    </div>

    @include('frontend.element.menu_mobile')

    @include('frontend.element.login_popup')

    @include('frontend.panels.stylefooter')
    
 </body>
</html>