<div id="elementor-sticky-header" class="main-menu-wrapper visible scrolling">
		<div data-elementor-type="wp-post" data-elementor-id="64" class="elementor elementor-64">
			<section
				class="elementor-section elementor-top-section elementor-element elementor-element-95d787b elementor-section-content-middle elementor-section-boxed elementor-section-height-default elementor-section-height-default"
				data-id="95d787b" data-element_type="section"
				data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;grandrestaurant_ext_is_background_backdrop&quot;:&quot;true&quot;,&quot;grandrestaurant_ext_is_background_parallax&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_background_backdrop_blur&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:12,&quot;sizes&quot;:[]},&quot;grandrestaurant_ext_is_background_on_scroll&quot;:&quot;false&quot;}"
				style="backdrop-filter: blur(12px);">
				<div class="elementor-container elementor-column-gap-default">
					<div
						class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-1ac35f9"
						data-id="1ac35f9" data-element_type="column"
						data-settings="{&quot;grandrestaurant_ext_link_reservation&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_link_sidemenu&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_link_fullmenu&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_link_closed_fullmenu&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_scrollme&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_smoove&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_parallax_mouse&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_infinite&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_fadeout_animation&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_mobile_static&quot;:&quot;false&quot;}">
						<div class="elementor-widget-wrap elementor-element-populated">
							<div
								class="elementor-element elementor-element-8e7a180 elementor-widget__width-auto elementor-widget elementor-widget-image"
								data-id="8e7a180" data-element_type="widget"
								data-settings="{&quot;grandrestaurant_ext_link_reservation&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_link_sidemenu&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_link_fullmenu&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_link_closed_fullmenu&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_scrollme&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_smoove&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_parallax_mouse&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_infinite&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_fadeout_animation&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_mobile_static&quot;:&quot;false&quot;}"
								data-widget_type="image.default">
								<div class="elementor-widget-container">
									<a href="https://themes.themegoods.com/grandrestaurantv6/">
										<img width="202" height="68"
											src="{{ $web_information->image->logo_header_dark ?? '' }}"
											class="attachment-full size-full wp-image-39" alt="">
									</a>
								</div>
							</div>
						</div>
					</div>
					<div
						class="elementor-column elementor-col-66 elementor-top-column elementor-element elementor-element-0db5973"
						data-id="0db5973" data-element_type="column"
						data-settings="{&quot;grandrestaurant_ext_link_reservation&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_link_sidemenu&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_link_fullmenu&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_link_closed_fullmenu&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_scrollme&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_smoove&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_parallax_mouse&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_infinite&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_fadeout_animation&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_mobile_static&quot;:&quot;false&quot;}">
						<div class="elementor-widget-wrap elementor-element-populated">
							<div
								class="elementor-element elementor-element-abc7545 elementor-widget__width-auto elementor-hidden-tablet elementor-hidden-phone elementor-widget elementor-widget-grandrestaurant-navigation-menu"
								data-id="abc7545" data-element_type="widget"
								data-settings="{&quot;grandrestaurant_ext_link_reservation&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_link_sidemenu&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_link_fullmenu&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_link_closed_fullmenu&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_scrollme&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_smoove&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_parallax_mouse&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_infinite&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_fadeout_animation&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_mobile_static&quot;:&quot;false&quot;}"
								data-widget_type="grandrestaurant-navigation-menu.default">
								<div class="elementor-widget-container">
									<div class="themegoods-navigation-wrapper menu_style1">
										<div class="menu-main-menu-container">
										@php
											
											$main_menu = $menu->first(function ($item, $key) {
											return $item->menu_type == 'header' && ($item->parent_id == NULL || $item->parent_id == 0);
											});
											$array_cate = array();
											foreach ($menu as $cate) {
											if ($cate->parent_id != '') {
											$array_cate[$cate->parent_id] = $cate->parent_id;
											}
											}
										@endphp
											<ul id="nav_menu13" class="nav">
											<?php foreach($menu as $item){
                     					   		if($item->parent_id == $main_menu->id){
													if(in_array($item->id,$array_cate)) {
                     						?>
											<li class=" menu-item menu-item-type-custom menu-item-object-custom menu-item-home  menu-item-has-children arrow">
												<a href="{{ $item->url_link }}">
												{{ $item->name }}</a>
												<ul class="sub-menu">
												<?php
													foreach($menu as $sub_taxonomy){ 
														if($sub_taxonomy->parent_id == $item->id){
													?>
										            <li class=" menu-item menu-item-type-post_type menu-item-object-page menu-item-home">
														<a href="{{ $sub_taxonomy->url_link }}">{{ $sub_taxonomy->name }}</a>
													</li>
														<?php } } ?>
													
												</ul>
												
											</li>
											<?php } else { ?>
												<?php  ?>
													<li class=" menu-item menu-item-type-post_type menu-item-object-page">
												<a href="{{ $item->url_link }}">
												{{ $item->name }}</a>
											</li>
												
											<?php } } } ?>
											</ul>
										</div>
									</div>
									<br class="clear">
								</div>
							</div>
							<div
								class="elementor-element elementor-element-c3bf66c elementor-widget__width-auto elementor-hidden-phone elementor-widget elementor-widget-button"
								data-id="c3bf66c" data-element_type="widget"
								data-settings="{&quot;grandrestaurant_ext_link_reservation&quot;:&quot;true&quot;,&quot;grandrestaurant_ext_link_sidemenu&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_link_fullmenu&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_link_closed_fullmenu&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_scrollme&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_smoove&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_parallax_mouse&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_infinite&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_fadeout_animation&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_mobile_static&quot;:&quot;false&quot;}"
								data-widget_type="button.default">
								<div class="elementor-widget-container">
									<div class="elementor-button-wrapper">
										<a
											class="elementor-button elementor-button-link elementor-size-sm"
											href="https://themes.themegoods.com/grandrestaurantv6/home-2/?fbclid=IwAR38DbSCcwm2Jl4UqIzT9hYhZcU3qsGliuzODixxHMe5p0naCU9xZHlexHE#">
											<span class="elementor-button-content-wrapper">
												<span class="elementor-button-text">Reservation</span>
											</span>
										</a>
									</div>
								</div>
							</div>
							<div
								class="elementor-element elementor-element-bc8163a elementor-widget__width-auto elementor-hidden-desktop elementor-view-default elementor-widget elementor-widget-icon"
								data-id="bc8163a" data-element_type="widget"
								data-settings="{&quot;grandrestaurant_ext_link_sidemenu&quot;:&quot;true&quot;,&quot;grandrestaurant_ext_link_reservation&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_link_fullmenu&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_link_closed_fullmenu&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_scrollme&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_smoove&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_parallax_mouse&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_infinite&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_fadeout_animation&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_mobile_static&quot;:&quot;false&quot;}"
								data-widget_type="icon.default">
								<div class="elementor-widget-container">
									<div class="elementor-icon-wrapper">
										<a class="elementor-icon"
											href="https://themes.themegoods.com/grandrestaurantv6/home-2/?fbclid=IwAR38DbSCcwm2Jl4UqIzT9hYhZcU3qsGliuzODixxHMe5p0naCU9xZHlexHE#">
											<i aria-hidden="true" class="fas fa-equals"></i>
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
		</div>
	</div>

	<!-- <div id="option_wrapper">
		<div class="inner">
			<div style="text-align:center">
				<div class="purchase_theme_button">
					<a class="button" href="https://1.envato.market/AWGYyD" target="_blank">Purchase
						Now</a>
				</div>

				<h5>Ready to use Demos</h5>
				<p>
					Here are example of predefined demo sites that can be imported within one click.
				</p>

				<ul class="demo_list">
					<li>
						<img width="260" height="260" src="./home_files/images/16.jpg"
							alt="Asian Restaurant">
						<div class="demo_label">New</div>

						<div class="demo_thumb_hover_wrapper">
							<div class="demo_thumb_hover_inner">
								<div class="demo_thumb_desc">
									<h6>Asian Restaurant</h6>
									<a href="https://grandrestaurantv6-8.themegoods.com//asian"
										target="_blank" class="button white">Launch</a>
								</div>
							</div>
						</div>
					</li>
					<li>
						<img width="260" height="260" src="./home_files/images/15.jpg"
							alt="Steakhouse">
						<div class="demo_label">New</div>

						<div class="demo_thumb_hover_wrapper">
							<div class="demo_thumb_hover_inner">
								<div class="demo_thumb_desc">
									<h6>Steakhouse</h6>
									<a href="https://grandrestaurantv6-8.themegoods.com//steak"
										target="_blank" class="button white">Launch</a>
								</div>
							</div>
						</div>
					</li>
					<li>
						<img width="260" height="260" src="./home_files/images/14.jpg"
							alt="Elegant Restaurant">
						<div class="demo_label">New</div>

						<div class="demo_thumb_hover_wrapper">
							<div class="demo_thumb_hover_inner">
								<div class="demo_thumb_desc">
									<h6>Elegant Restaurant</h6>
									<a href="https://grandrestaurantv6-8.themegoods.com/"
										target="_blank" class="button white">Launch</a>
								</div>
							</div>
						</div>
					</li>
					<li>
						<img width="260" height="260" src="./home_files/images/13.jpg"
							alt="Fusion Restaurant">
						<div class="demo_label">New</div>

						<div class="demo_thumb_hover_wrapper">
							<div class="demo_thumb_hover_inner">
								<div class="demo_thumb_desc">
									<h6>Fusion Restaurant</h6>
									<a href="https://grandrestaurantv6-7.themegoods.com/"
										target="_blank" class="button white">Launch</a>
								</div>
							</div>
						</div>
					</li>
					<li>
						<img width="260" height="260" src="./home_files/images/12.jpg"
							alt="Clean Food">
						<div class="demo_label">New</div>

						<div class="demo_thumb_hover_wrapper">
							<div class="demo_thumb_hover_inner">
								<div class="demo_thumb_desc">
									<h6>Clean Food</h6>
									<a href="https://grandrestaurantv6-7.themegoods.com//clean"
										target="_blank" class="button white">Launch</a>
								</div>
							</div>
						</div>
					</li>
					<li>
						<img width="260" height="260" src="./home_files/images/11.jpg"
							alt="Pizza Restaurant">
						<div class="demo_label">New</div>

						<div class="demo_thumb_hover_wrapper">
							<div class="demo_thumb_hover_inner">
								<div class="demo_thumb_desc">
									<h6>Pizza Restaurant</h6>
									<a href="https://grandrestaurantv6-7.themegoods.com//pizza"
										target="_blank" class="button white">Launch</a>
								</div>
							</div>
						</div>
					</li>
					<li>
						<img width="260" height="260" src="./home_files/images/10.jpg"
							alt="Asian Fusion">

						<div class="demo_thumb_hover_wrapper">
							<div class="demo_thumb_hover_inner">
								<div class="demo_thumb_desc">
									<h6>Asian Fusion</h6>
									<a href="https://themes.themegoods.com/grandrestaurantv6/demo10"
										target="_blank" class="button white">Launch</a>
								</div>
							</div>
						</div>
					</li>
					<li>
						<img width="260" height="260" src="./home_files/images/9.jpg"
							alt="Fast Food &amp; Burger">

						<div class="demo_thumb_hover_wrapper">
							<div class="demo_thumb_hover_inner">
								<div class="demo_thumb_desc">
									<h6>Fast Food &amp; Burger</h6>
									<a href="https://themes.themegoods.com/grandrestaurantv6/demo9"
										target="_blank" class="button white">Launch</a>
								</div>
							</div>
						</div>
					</li>
					<li>
						<img width="260" height="260" src="./home_files/images/8.jpg"
							alt="Traditional Restaurant">

						<div class="demo_thumb_hover_wrapper">
							<div class="demo_thumb_hover_inner">
								<div class="demo_thumb_desc">
									<h6>Traditional Restaurant</h6>
									<a href="https://themes.themegoods.com/grandrestaurantv6/demo8"
										target="_blank" class="button white">Launch</a>
								</div>
							</div>
						</div>
					</li>
					<li>
						<img width="260" height="260" src="./home_files/images/1.jpg"
							alt="Main Demo">

						<div class="demo_thumb_hover_wrapper">
							<div class="demo_thumb_hover_inner">
								<div class="demo_thumb_desc">
									<h6>Main Demo</h6>
									<a href="https://themes.themegoods.com/grandrestaurantv6"
										target="_blank" class="button white">Launch</a>
								</div>
							</div>
						</div>
					</li>
					<li>
						<img width="260" height="260" src="./home_files/images/6.jpg"
							alt="Luxury Restaurant">

						<div class="demo_thumb_hover_wrapper">
							<div class="demo_thumb_hover_inner">
								<div class="demo_thumb_desc">
									<h6>Luxury Restaurant</h6>
									<a href="https://themes.themegoods.com/grandrestaurantv6/demo6"
										target="_blank" class="button white">Launch</a>
								</div>
							</div>
						</div>
					</li>
					<li>
						<img width="260" height="260" src="./home_files/images/2.jpg"
							alt="Chinese Restaurant">

						<div class="demo_thumb_hover_wrapper">
							<div class="demo_thumb_hover_inner">
								<div class="demo_thumb_desc">
									<h6>Chinese Restaurant</h6>
									<a href="https://themes.themegoods.com/grandrestaurantv6/demo2"
										target="_blank" class="button white">Launch</a>
								</div>
							</div>
						</div>
					</li>
					<li>
						<img width="260" height="260" src="./home_files/images/7.jpg"
							alt="Italian Restaurant">

						<div class="demo_thumb_hover_wrapper">
							<div class="demo_thumb_hover_inner">
								<div class="demo_thumb_desc">
									<h6>Italian Restaurant</h6>
									<a href="https://themes.themegoods.com/grandrestaurantv6/demo7"
										target="_blank" class="button white">Launch</a>
								</div>
							</div>
						</div>
					</li>
					<li>
						<img width="260" height="260" src="./home_files/images/3.jpg"
							alt="Healthy Food">

						<div class="demo_thumb_hover_wrapper">
							<div class="demo_thumb_hover_inner">
								<div class="demo_thumb_desc">
									<h6>Healthy Food</h6>
									<a href="https://themes.themegoods.com/grandrestaurantv6/demo3"
										target="_blank" class="button white">Launch</a>
								</div>
							</div>
						</div>
					</li>
					<li>
						<img width="220" height="220" src="./home_files/images/4.jpg"
							alt="Left Menu Layout">

						<div class="demo_thumb_hover_wrapper">
							<div class="demo_thumb_hover_inner">
								<div class="demo_thumb_desc">
									<h6>Left Menu Layout</h6>
									<a href="https://themes.themegoods.com/grandrestaurantv6/demo4"
										target="_blank" class="button white">Launch</a>
								</div>
							</div>
						</div>
					</li>
					<li>
						<img width="260" height="260" src="./home_files/images/5.jpg"
							alt="Cafe &amp; Bakery">

						<div class="demo_thumb_hover_wrapper">
							<div class="demo_thumb_hover_inner">
								<div class="demo_thumb_desc">
									<h6>Cafe &amp; Bakery</h6>
									<a href="https://themes.themegoods.com/grandrestaurantv6/demo5"
										target="_blank" class="button white">Launch</a>
								</div>
							</div>
						</div>
					</li>
				</ul>
			</div>
		</div>
	</div> -->