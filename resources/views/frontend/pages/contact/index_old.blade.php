
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

  <link rel="stylesheet" href="{{ asset('themes/frontend/phongkham/lienhe.css') }}" />

</head>
<body class="archive category category-24 cbp-spmenu-push cbp-spmenu-widget-push">

  @include('frontend.element.menu')

    @include('frontend.element.header')

  <section class="container12 sec32">
     <div class="wrap">
        <div class="d_flex">
           <div class="sec32_row0">
              <p class="entry-breadcrumb yoast_breadcrumb">
                <span>
                  <span>
                    <a href="/">Trang chủ</a>
                  </span> » 
                  <span class="breadcrumb_last" aria-current="page">Liên hệ</span>
                </span>
              </p>
           </div>
           <div id="primary" class="sec32_col1">
              <div class="entry-title entry-title--archive">
                 <h1 class="entry-title__h1"><span>Liên hệ</span></h1>
              </div>
              <article>
                <div class="entry-content">
                  <p>Với mong muốn mang những dịch vụ y tế chất lượng cao tới gần hơn tới người dân thủ đô và các tỉnh lân cận, Phòng khám Đa khoa được đặt tại vị trí đắc địa và thuận lợi giao thông, không chỉ đối với khách hàng tại Hà Nội mà ngay cả khách hàng từ các tỉnh cũng rất dễ dàng đi lại và tìm kiếm.</p>
                  <h2><strong>Cơ sở Viện Đào tạo Y học dự phòng và Y tế công cộng - số 1, Tôn Thất Tùng, Đống Đa, HN</strong></h2>
                  <div class="map_row d_flex">
                     <div class="map_row_col2">
                        <p><strong>Thông tin liên hệ:</strong><br>
                           Địa chỉ: số 1, Tôn Thất Tùng, Đống Đa, Hà Nội<br>
                           Cấp cứu (24/24): S<br>
                           Trực sản (24/24): {!! $web_information->information->trucsan ?? '' !!}<br>
                           Liên hệ:&nbsp;{!! $web_information->information->trucsan ?? '' !!}<br>
                        </p>
                        <p><strong>Giờ làm việc:</strong><br>
                           Từ Thứ 2 – Chủ nhật: 7h00 – 17h00<br>
                           Khám Nội – Đa khoa: 7h00 – 17h00<br>
                           Khám Ngoại: 8h00 – 17h00<br>
                           Khoa Phụ Sản: 7h30 – 20h00<br>
                           Khám Tai Mũi Họng: 8h00 – 17h00<br>
                           Khám Răng hàm mặt: 8h00 – 17h00<br>
                           Khám Nhi: 8h00 – 17h00<br>
                           Khám Ung bướu: Thứ 2 đến thứ 7 từ 8h00-17h00<br>
                           Khám Mắt, Da liễu: Thứ 2 đến thứ 7 từ 8h00-17h00
                        </p>
                     </div>
                     <div class="map_row_col1">
                      @isset($web_information->source_code->map)
                        {!! $web_information->source_code->map !!}
                      @endisset
                    </div>
                  </div>
                </div>
              </article>

           </div>
           <div id="secondary" class="sec32_col2">

            @include('frontend.element.cauhoi_left')

              @include('frontend.element.tintucmoi_left')

           </div>
        </div>
     </div>
  </section>

  @include('frontend.element.footer')

  @include('frontend.panels.scrolltop')

  @include('frontend.panels.scripts')

</body>
</html>