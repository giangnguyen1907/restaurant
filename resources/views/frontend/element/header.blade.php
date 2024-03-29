			<div class="elementor-container elementor-column-gap-default">
				<div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-6f4b83f" data-id="6f4b83f" data-element_type="column" data-settings="{&quot;grandrestaurant_ext_link_reservation&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_link_sidemenu&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_link_fullmenu&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_link_closed_fullmenu&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_scrollme&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_smoove&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_parallax_mouse&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_infinite&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_fadeout_animation&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_mobile_static&quot;:&quot;false&quot;}">
					<div class="elementor-widget-wrap elementor-element-populated">
						<div class="elementor-element elementor-element-12b4967 elementor-widget__width-auto elementor-widget elementor-widget-image" data-id="12b4967" data-element_type="widget" data-settings="{&quot;grandrestaurant_ext_link_reservation&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_link_sidemenu&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_link_fullmenu&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_link_closed_fullmenu&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_scrollme&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_smoove&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_parallax_mouse&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_infinite&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_fadeout_animation&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_mobile_static&quot;:&quot;false&quot;}" data-widget_type="image.default">
							<div class="elementor-widget-container">
								
								<a href="/">
									<img width="202" height="68" src="{{ $web_information->image->logo_header_light ?? '' }}" class="attachment-full size-full wp-image-38" alt="">
								</a>
							</div>
						</div>
					</div>
				</div>
				<div class="elementor-column elementor-col-66 elementor-top-column elementor-element elementor-element-cc22ef6" data-id="cc22ef6" data-element_type="column" data-settings="{&quot;grandrestaurant_ext_link_reservation&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_link_sidemenu&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_link_fullmenu&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_link_closed_fullmenu&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_scrollme&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_smoove&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_parallax_mouse&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_infinite&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_fadeout_animation&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_mobile_static&quot;:&quot;false&quot;}">
					<div class="elementor-widget-wrap elementor-element-populated">
						<div class="elementor-element elementor-element-2af0d5e elementor-widget__width-auto elementor-hidden-tablet elementor-hidden-phone elementor-widget elementor-widget-grandrestaurant-navigation-menu" data-id="2af0d5e" data-element_type="widget" data-settings="{&quot;grandrestaurant_ext_link_reservation&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_link_sidemenu&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_link_fullmenu&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_link_closed_fullmenu&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_scrollme&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_smoove&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_parallax_mouse&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_infinite&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_fadeout_animation&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_mobile_static&quot;:&quot;false&quot;}" data-widget_type="grandrestaurant-navigation-menu.default">
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
											<!-- <li class=" menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children arrow elementor-megamenu megamenu arrow">
												<a href="https://themes.themegoods.com/grandrestaurantv6/home-2/?fbclid=IwAR38DbSCcwm2Jl4UqIzT9hYhZcU3qsGliuzODixxHMe5p0naCU9xZHlexHE#">
													Menus</a>
												<div class="elementor-megamenu-wrapper">
													<div data-elementor-type="wp-post" data-elementor-id="5408" class="elementor elementor-5408">
														<section class="elementor-section elementor-top-section elementor-element elementor-element-c597a2e elementor-section-content-bottom elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="c597a2e" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;grandrestaurant_ext_is_background_parallax&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_background_backdrop&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_background_on_scroll&quot;:&quot;false&quot;}">
															<div class="elementor-container elementor-column-gap-default">
																<div class="elementor-column elementor-col-20 elementor-top-column elementor-element elementor-element-a6187d4" data-id="a6187d4" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;grandrestaurant_ext_link_reservation&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_link_sidemenu&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_link_fullmenu&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_link_closed_fullmenu&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_scrollme&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_smoove&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_parallax_mouse&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_infinite&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_fadeout_animation&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_mobile_static&quot;:&quot;false&quot;}">
																	<div class="elementor-widget-wrap elementor-element-populated">
																		<div class="elementor-element elementor-element-b75a555 elementor-widget__width-inherit elementor-widget elementor-widget-heading" data-id="b75a555" data-element_type="widget" data-settings="{&quot;grandrestaurant_ext_link_reservation&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_link_sidemenu&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_link_fullmenu&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_link_closed_fullmenu&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_scrollme&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_smoove&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_parallax_mouse&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_infinite&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_fadeout_animation&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_mobile_static&quot;:&quot;false&quot;}" data-widget_type="heading.default">
																			<div class="elementor-widget-container">
																				<style>
																					/*!
																						elementor -
																						v3.17.0 -
																						01-11-2023
																						*/
																					.elementor-heading-title {
																						padding: 0;
																						margin: 0;
																						line-height: 1
																					}

																					.elementor-widget-heading .elementor-heading-title[class*=elementor-size-]>a {
																						color: inherit;
																						font-size: inherit;
																						line-height: inherit
																					}

																					.elementor-widget-heading .elementor-heading-title.elementor-size-small {
																						font-size: 15px
																					}

																					.elementor-widget-heading .elementor-heading-title.elementor-size-medium {
																						font-size: 19px
																					}

																					.elementor-widget-heading .elementor-heading-title.elementor-size-large {
																						font-size: 29px
																					}

																					.elementor-widget-heading .elementor-heading-title.elementor-size-xl {
																						font-size: 39px
																					}

																					.elementor-widget-heading .elementor-heading-title.elementor-size-xxl {
																						font-size: 59px
																					}
																				</style>
																				<h3 class="elementor-heading-title elementor-size-default">
																					<a href="https://themes.themegoods.com/grandrestaurantv6/menu-mixed/">Menu
																						Mixed</a>
																				</h3>
																			</div>
																		</div>
																	</div>
																</div>
																<div class="elementor-column elementor-col-20 elementor-top-column elementor-element elementor-element-20b4cb0" data-id="20b4cb0" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;grandrestaurant_ext_link_reservation&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_link_sidemenu&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_link_fullmenu&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_link_closed_fullmenu&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_scrollme&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_smoove&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_parallax_mouse&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_infinite&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_fadeout_animation&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_mobile_static&quot;:&quot;false&quot;}">
																	<div class="elementor-widget-wrap elementor-element-populated">
																		<div class="elementor-element elementor-element-ede776c elementor-widget__width-inherit elementor-widget elementor-widget-heading" data-id="ede776c" data-element_type="widget" data-settings="{&quot;grandrestaurant_ext_link_reservation&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_link_sidemenu&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_link_fullmenu&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_link_closed_fullmenu&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_scrollme&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_smoove&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_parallax_mouse&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_infinite&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_fadeout_animation&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_mobile_static&quot;:&quot;false&quot;}" data-widget_type="heading.default">
																			<div class="elementor-widget-container">
																				<h3 class="elementor-heading-title elementor-size-default">
																					<a href="https://themes.themegoods.com/grandrestaurantv6/menu-classic/">Menu
																						Classic</a>
																				</h3>
																			</div>
																		</div>
																	</div>
																</div>
																<div class="elementor-column elementor-col-20 elementor-top-column elementor-element elementor-element-6533b91" data-id="6533b91" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;grandrestaurant_ext_link_reservation&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_link_sidemenu&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_link_fullmenu&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_link_closed_fullmenu&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_scrollme&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_smoove&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_parallax_mouse&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_infinite&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_fadeout_animation&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_mobile_static&quot;:&quot;false&quot;}">
																	<div class="elementor-widget-wrap elementor-element-populated">
																		<div class="elementor-element elementor-element-241a1a8 elementor-widget__width-inherit elementor-widget elementor-widget-heading" data-id="241a1a8" data-element_type="widget" data-settings="{&quot;grandrestaurant_ext_link_reservation&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_link_sidemenu&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_link_fullmenu&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_link_closed_fullmenu&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_scrollme&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_smoove&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_parallax_mouse&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_infinite&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_fadeout_animation&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_mobile_static&quot;:&quot;false&quot;}" data-widget_type="heading.default">
																			<div class="elementor-widget-container">
																				<h3 class="elementor-heading-title elementor-size-default">
																					<a href="https://themes.themegoods.com/grandrestaurantv6/menu-grid/">Menu
																						Grid</a>
																				</h3>
																			</div>
																		</div>
																	</div>
																</div>
																<div class="elementor-column elementor-col-20 elementor-top-column elementor-element elementor-element-196ddba" data-id="196ddba" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;grandrestaurant_ext_link_reservation&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_link_sidemenu&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_link_fullmenu&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_link_closed_fullmenu&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_scrollme&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_smoove&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_parallax_mouse&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_infinite&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_fadeout_animation&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_mobile_static&quot;:&quot;false&quot;}">
																	<div class="elementor-widget-wrap elementor-element-populated">
																		<div class="elementor-element elementor-element-4e5db28 elementor-widget__width-inherit elementor-widget elementor-widget-heading" data-id="4e5db28" data-element_type="widget" data-settings="{&quot;grandrestaurant_ext_link_reservation&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_link_sidemenu&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_link_fullmenu&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_link_closed_fullmenu&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_scrollme&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_smoove&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_parallax_mouse&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_infinite&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_fadeout_animation&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_mobile_static&quot;:&quot;false&quot;}" data-widget_type="heading.default">
																			<div class="elementor-widget-container">
																				<h3 class="elementor-heading-title elementor-size-default">
																					<a href="https://themes.themegoods.com/grandrestaurantv6/menu-grid-image/">Menu
																						Grid
																						Image</a>
																				</h3>
																			</div>
																		</div>
																	</div>
																</div>
																<div class="elementor-column elementor-col-20 elementor-top-column elementor-element elementor-element-6406500" data-id="6406500" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;grandrestaurant_ext_link_reservation&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_link_sidemenu&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_link_fullmenu&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_link_closed_fullmenu&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_scrollme&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_smoove&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_parallax_mouse&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_infinite&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_fadeout_animation&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_mobile_static&quot;:&quot;false&quot;}">
																	<div class="elementor-widget-wrap elementor-element-populated">
																		<div class="elementor-element elementor-element-bf0ad29 elementor-widget__width-inherit elementor-widget elementor-widget-heading" data-id="bf0ad29" data-element_type="widget" data-settings="{&quot;grandrestaurant_ext_link_reservation&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_link_sidemenu&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_link_fullmenu&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_link_closed_fullmenu&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_scrollme&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_smoove&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_parallax_mouse&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_infinite&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_fadeout_animation&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_mobile_static&quot;:&quot;false&quot;}" data-widget_type="heading.default">
																			<div class="elementor-widget-container">
																				<h3 class="elementor-heading-title elementor-size-default">
																					<a href="https://themes.themegoods.com/grandrestaurantv6/menu-parallax/">Menu
																						Parallax</a>
																				</h3>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</section>
													</div>
												</div>
												<ul class="sub-menu">
													<li class=" menu-item menu-item-type-post_type menu-item-object-page">
														<a href="https://themes.themegoods.com/grandrestaurantv6/menu-mixed/">Menu
															Mixed</a>
													</li>
													<li class=" menu-item menu-item-type-post_type menu-item-object-page">
														<a href="https://themes.themegoods.com/grandrestaurantv6/menu-classic/">Menu
															Classic</a>
													</li>
													<li class=" menu-item menu-item-type-post_type menu-item-object-page">
														<a href="https://themes.themegoods.com/grandrestaurantv6/menu-grid/">Menu
															Grid</a>
													</li>
													<li class=" menu-item menu-item-type-post_type menu-item-object-page">
														<a href="https://themes.themegoods.com/grandrestaurantv6/menu-grid-image/">Menu
															Grid Image</a>
													</li>
													<li class=" menu-item menu-item-type-post_type menu-item-object-page">
														<a href="https://themes.themegoods.com/grandrestaurantv6/menu-parallax/">Menu
															Parallax</a>
													</li>
												</ul>
											</li>
											<li class=" menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children arrow elementor-megamenu megamenu arrow">
												<a href="https://themes.themegoods.com/grandrestaurantv6/home-2/?fbclid=IwAR38DbSCcwm2Jl4UqIzT9hYhZcU3qsGliuzODixxHMe5p0naCU9xZHlexHE#">
													Pages</a>
												<div class="elementor-megamenu-wrapper">
													<div data-elementor-type="wp-post" data-elementor-id="5427" class="elementor elementor-5427">
														<section class="elementor-section elementor-top-section elementor-element elementor-element-7f7078a elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="7f7078a" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;grandrestaurant_ext_is_background_parallax&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_background_backdrop&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_background_on_scroll&quot;:&quot;false&quot;}">
															<div class="elementor-container elementor-column-gap-default">
																<div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-3e10a94" data-id="3e10a94" data-element_type="column" data-settings="{&quot;grandrestaurant_ext_link_reservation&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_link_sidemenu&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_link_fullmenu&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_link_closed_fullmenu&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_scrollme&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_smoove&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_parallax_mouse&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_infinite&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_fadeout_animation&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_mobile_static&quot;:&quot;false&quot;}">
																	<div class="elementor-widget-wrap elementor-element-populated">
																		<section class="elementor-section elementor-inner-section elementor-element elementor-element-33e8b47 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="33e8b47" data-element_type="section" data-settings="{&quot;grandrestaurant_ext_is_background_parallax&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_background_backdrop&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_background_on_scroll&quot;:&quot;false&quot;}">
																			<div class="elementor-container elementor-column-gap-default">
																				<div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-b4d0780" data-id="b4d0780" data-element_type="column" data-settings="{&quot;grandrestaurant_ext_link_reservation&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_link_sidemenu&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_link_fullmenu&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_link_closed_fullmenu&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_scrollme&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_smoove&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_parallax_mouse&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_infinite&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_fadeout_animation&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_mobile_static&quot;:&quot;false&quot;}">
																					<div class="elementor-widget-wrap elementor-element-populated">
																						<div class="elementor-element elementor-element-da1f5fd elementor-widget elementor-widget-heading" data-id="da1f5fd" data-element_type="widget" data-settings="{&quot;grandrestaurant_ext_link_reservation&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_link_sidemenu&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_link_fullmenu&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_link_closed_fullmenu&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_scrollme&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_smoove&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_parallax_mouse&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_infinite&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_fadeout_animation&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_mobile_static&quot;:&quot;false&quot;}" data-widget_type="heading.default">
																							<div class="elementor-widget-container">
																								<h3 class="elementor-heading-title elementor-size-default">
																									Page
																									Templates</h3>
																							</div>
																						</div>
																					</div>
																				</div>
																			</div>
																		</section>
																		<section class="elementor-section elementor-inner-section elementor-element elementor-element-7d73a0a elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="7d73a0a" data-element_type="section" data-settings="{&quot;grandrestaurant_ext_is_background_parallax&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_background_backdrop&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_background_on_scroll&quot;:&quot;false&quot;}">
																			<div class="elementor-container elementor-column-gap-default">
																				<div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-19dca3f" data-id="19dca3f" data-element_type="column" data-settings="{&quot;grandrestaurant_ext_link_reservation&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_link_sidemenu&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_link_fullmenu&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_link_closed_fullmenu&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_scrollme&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_smoove&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_parallax_mouse&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_infinite&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_fadeout_animation&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_mobile_static&quot;:&quot;false&quot;}">
																					<div class="elementor-widget-wrap elementor-element-populated">
																						<div class="elementor-element elementor-element-2d62d71 elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list" data-id="2d62d71" data-element_type="widget" data-settings="{&quot;grandrestaurant_ext_link_reservation&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_link_sidemenu&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_link_fullmenu&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_link_closed_fullmenu&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_scrollme&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_smoove&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_parallax_mouse&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_infinite&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_fadeout_animation&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_mobile_static&quot;:&quot;false&quot;}" data-widget_type="icon-list.default">
																							<div class="elementor-widget-container">
																								<ul class="elementor-icon-list-items">
																									<li class="elementor-icon-list-item">
																										<a href="https://themes.themegoods.com/grandrestaurantv6/about-us/">

																											<span class="elementor-icon-list-text">
																												About
																												Us</span>
																										</a>
																									</li>
																									<li class="elementor-icon-list-item">
																										<a href="https://themes.themegoods.com/grandrestaurantv6/our-chefs/">

																											<span class="elementor-icon-list-text">
																												Our
																												Chefs</span>
																										</a>
																									</li>
																									<li class="elementor-icon-list-item">
																										<a href="https://themes.themegoods.com/grandrestaurantv6/our-services/">

																											<span class="elementor-icon-list-text">
																												Our
																												Services</span>
																										</a>
																									</li>
																								</ul>
																							</div>
																						</div>
																					</div>
																				</div>
																				<div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-2b7a989" data-id="2b7a989" data-element_type="column" data-settings="{&quot;grandrestaurant_ext_link_reservation&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_link_sidemenu&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_link_fullmenu&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_link_closed_fullmenu&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_scrollme&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_smoove&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_parallax_mouse&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_infinite&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_fadeout_animation&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_mobile_static&quot;:&quot;false&quot;}">
																					<div class="elementor-widget-wrap elementor-element-populated">
																						<div class="elementor-element elementor-element-23a4a0b elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list" data-id="23a4a0b" data-element_type="widget" data-settings="{&quot;grandrestaurant_ext_link_reservation&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_link_sidemenu&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_link_fullmenu&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_link_closed_fullmenu&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_scrollme&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_smoove&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_parallax_mouse&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_infinite&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_fadeout_animation&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_mobile_static&quot;:&quot;false&quot;}" data-widget_type="icon-list.default">
																							<div class="elementor-widget-container">
																								<ul class="elementor-icon-list-items">
																									<li class="elementor-icon-list-item">
																										<a href="https://themes.themegoods.com/grandrestaurantv6/contact-multiple-maps/">

																											<span class="elementor-icon-list-text">
																												Contact
																												Multiple
																												Maps</span>
																										</a>
																									</li>
																									<li class="elementor-icon-list-item">
																										<a href="https://themes.themegoods.com/grandrestaurantv6/contact-parallax/">

																											<span class="elementor-icon-list-text">
																												Contact
																												Parallax</span>
																										</a>
																									</li>
																									<li class="elementor-icon-list-item">
																										<a href="https://themes.themegoods.com/grandrestaurantv6/contact-gallery/">

																											<span class="elementor-icon-list-text">
																												Contact
																												Gallery</span>
																										</a>
																									</li>
																								</ul>
																							</div>
																						</div>
																					</div>
																				</div>
																			</div>
																		</section>
																		<section class="elementor-section elementor-inner-section elementor-element elementor-element-a61b712 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="a61b712" data-element_type="section" data-settings="{&quot;grandrestaurant_ext_is_background_parallax&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_background_backdrop&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_background_on_scroll&quot;:&quot;false&quot;}">
																			<div class="elementor-container elementor-column-gap-default">
																				<div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-61073dc" data-id="61073dc" data-element_type="column" data-settings="{&quot;grandrestaurant_ext_link_reservation&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_link_sidemenu&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_link_fullmenu&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_link_closed_fullmenu&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_scrollme&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_smoove&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_parallax_mouse&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_infinite&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_fadeout_animation&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_mobile_static&quot;:&quot;false&quot;}">
																					<div class="elementor-widget-wrap elementor-element-populated">
																						<div class="elementor-element elementor-element-52628b2 elementor-widget elementor-widget-heading" data-id="52628b2" data-element_type="widget" data-settings="{&quot;grandrestaurant_ext_link_reservation&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_link_sidemenu&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_link_fullmenu&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_link_closed_fullmenu&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_scrollme&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_smoove&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_parallax_mouse&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_infinite&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_fadeout_animation&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_mobile_static&quot;:&quot;false&quot;}" data-widget_type="heading.default">
																							<div class="elementor-widget-container">
																								<h3 class="elementor-heading-title elementor-size-default">
																									Our
																									Restaurant</h3>
																							</div>
																						</div>
																					</div>
																				</div>
																			</div>
																		</section>
																		<section class="elementor-section elementor-inner-section elementor-element elementor-element-8df5fe9 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="8df5fe9" data-element_type="section" data-settings="{&quot;grandrestaurant_ext_is_background_parallax&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_background_backdrop&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_background_on_scroll&quot;:&quot;false&quot;}">
																			<div class="elementor-container elementor-column-gap-default">
																				<div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-6de6056" data-id="6de6056" data-element_type="column" data-settings="{&quot;grandrestaurant_ext_link_reservation&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_link_sidemenu&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_link_fullmenu&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_link_closed_fullmenu&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_scrollme&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_smoove&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_parallax_mouse&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_infinite&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_fadeout_animation&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_mobile_static&quot;:&quot;false&quot;}">
																					<div class="elementor-widget-wrap elementor-element-populated smooved">
																						<div class="elementor-element elementor-element-d8032ee elementor-widget elementor-widget-heading" data-id="d8032ee" data-element_type="widget" data-settings="{&quot;grandrestaurant_ext_link_reservation&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_link_sidemenu&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_link_fullmenu&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_link_closed_fullmenu&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_scrollme&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_parallax_mouse&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_infinite&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_fadeout_animation&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_mobile_static&quot;:&quot;false&quot;}" data-widget_type="heading.default">
																							<div class="elementor-widget-container">
																								<span class="elementor-heading-title elementor-size-default">
																									Lunch
																									Time</span>
																							</div>
																						</div>
																						<div class="elementor-element elementor-element-c508242 elementor-widget elementor-widget-heading" data-id="c508242" data-element_type="widget" data-settings="{&quot;grandrestaurant_ext_link_reservation&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_link_sidemenu&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_link_fullmenu&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_link_closed_fullmenu&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_scrollme&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_parallax_mouse&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_infinite&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_fadeout_animation&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_mobile_static&quot;:&quot;false&quot;}" data-widget_type="heading.default">
																							<div class="elementor-widget-container">
																								<span class="elementor-heading-title elementor-size-default">
																									Monday
																									to
																									Sunday</span>
																							</div>
																						</div>
																						<div class="elementor-element elementor-element-4221321 elementor-widget elementor-widget-heading init-smoove smooved" data-id="4221321" data-element_type="widget" data-settings="{&quot;grandrestaurant_ext_is_smoove&quot;:&quot;true&quot;,&quot;grandrestaurant_ext_smoove_disable&quot;:&quot;769&quot;,&quot;grandrestaurant_ext_smoove_duration&quot;:1000,&quot;grandrestaurant_ext_smoove_translatey&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:40,&quot;sizes&quot;:[]},&quot;grandrestaurant_ext_link_reservation&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_link_sidemenu&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_link_fullmenu&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_link_closed_fullmenu&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_scrollme&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_smoove_scalex&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:1,&quot;sizes&quot;:[]},&quot;grandrestaurant_ext_smoove_scaley&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:1,&quot;sizes&quot;:[]},&quot;grandrestaurant_ext_smoove_rotatex&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;grandrestaurant_ext_smoove_rotatey&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;grandrestaurant_ext_smoove_rotatez&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;grandrestaurant_ext_smoove_translatex&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;grandrestaurant_ext_smoove_translatez&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;grandrestaurant_ext_smoove_skewx&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;grandrestaurant_ext_smoove_skewy&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;grandrestaurant_ext_smoove_perspective&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:1000,&quot;sizes&quot;:[]},&quot;grandrestaurant_ext_is_parallax_mouse&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_infinite&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_fadeout_animation&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_mobile_static&quot;:&quot;false&quot;}" data-widget_type="heading.default" style="transition-duration: 1000ms; opacity: 1;">
																							<div class="elementor-widget-container">
																								<span class="elementor-heading-title elementor-size-default">
																									10.30am
																									-
																									3:00pm</span>
																							</div>
																						</div>
																					</div>
																				</div>
																				<div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-70f3c2c" data-id="70f3c2c" data-element_type="column" data-settings="{&quot;grandrestaurant_ext_link_reservation&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_link_sidemenu&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_link_fullmenu&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_link_closed_fullmenu&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_scrollme&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_smoove&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_parallax_mouse&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_infinite&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_fadeout_animation&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_mobile_static&quot;:&quot;false&quot;}">
																					<div class="elementor-widget-wrap elementor-element-populated smooved">
																						<div class="elementor-element elementor-element-da8ee18 elementor-widget elementor-widget-heading" data-id="da8ee18" data-element_type="widget" data-settings="{&quot;grandrestaurant_ext_link_reservation&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_link_sidemenu&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_link_fullmenu&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_link_closed_fullmenu&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_scrollme&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_parallax_mouse&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_infinite&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_fadeout_animation&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_mobile_static&quot;:&quot;false&quot;}" data-widget_type="heading.default">
																							<div class="elementor-widget-container">
																								<span class="elementor-heading-title elementor-size-default">
																									Dinner
																									Time</span>
																							</div>
																						</div>
																						<div class="elementor-element elementor-element-89271e9 elementor-widget elementor-widget-heading" data-id="89271e9" data-element_type="widget" data-settings="{&quot;grandrestaurant_ext_link_reservation&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_link_sidemenu&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_link_fullmenu&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_link_closed_fullmenu&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_scrollme&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_parallax_mouse&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_infinite&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_fadeout_animation&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_mobile_static&quot;:&quot;false&quot;}" data-widget_type="heading.default">
																							<div class="elementor-widget-container">
																								<span class="elementor-heading-title elementor-size-default">
																									Monday
																									to
																									Sunday</span>
																							</div>
																						</div>
																						<div class="elementor-element elementor-element-a1f7081 elementor-widget elementor-widget-heading init-smoove smooved" data-id="a1f7081" data-element_type="widget" data-settings="{&quot;grandrestaurant_ext_is_smoove&quot;:&quot;true&quot;,&quot;grandrestaurant_ext_smoove_disable&quot;:&quot;769&quot;,&quot;grandrestaurant_ext_smoove_duration&quot;:1000,&quot;grandrestaurant_ext_smoove_translatey&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:40,&quot;sizes&quot;:[]},&quot;grandrestaurant_ext_link_reservation&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_link_sidemenu&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_link_fullmenu&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_link_closed_fullmenu&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_scrollme&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_smoove_scalex&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:1,&quot;sizes&quot;:[]},&quot;grandrestaurant_ext_smoove_scaley&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:1,&quot;sizes&quot;:[]},&quot;grandrestaurant_ext_smoove_rotatex&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;grandrestaurant_ext_smoove_rotatey&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;grandrestaurant_ext_smoove_rotatez&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;grandrestaurant_ext_smoove_translatex&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;grandrestaurant_ext_smoove_translatez&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;grandrestaurant_ext_smoove_skewx&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;grandrestaurant_ext_smoove_skewy&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;grandrestaurant_ext_smoove_perspective&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:1000,&quot;sizes&quot;:[]},&quot;grandrestaurant_ext_is_parallax_mouse&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_infinite&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_fadeout_animation&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_mobile_static&quot;:&quot;false&quot;}" data-widget_type="heading.default" style="transition-duration: 1000ms; opacity: 1;">
																							<div class="elementor-widget-container">
																								<span class="elementor-heading-title elementor-size-default">
																									5.30pm
																									-
																									11:00pm</span>
																							</div>
																						</div>
																					</div>
																				</div>
																			</div>
																		</section>
																	</div>
																</div>
																<div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-e42801f" data-id="e42801f" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;grandrestaurant_ext_link_reservation&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_link_sidemenu&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_link_fullmenu&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_link_closed_fullmenu&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_scrollme&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_smoove&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_parallax_mouse&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_infinite&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_fadeout_animation&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_mobile_static&quot;:&quot;false&quot;}">
																	<div class="elementor-widget-wrap elementor-element-populated">
																		<div class="elementor-element elementor-element-1c34aec elementor-widget__width-inherit elementor-widget elementor-widget-heading" data-id="1c34aec" data-element_type="widget" data-settings="{&quot;grandrestaurant_ext_link_reservation&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_link_sidemenu&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_link_fullmenu&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_link_closed_fullmenu&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_scrollme&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_smoove&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_parallax_mouse&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_infinite&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_fadeout_animation&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_mobile_static&quot;:&quot;false&quot;}" data-widget_type="heading.default">
																			<div class="elementor-widget-container">
																				<h3 class="elementor-heading-title elementor-size-default">
																					<a href="https://themes.themegoods.com/grandrestaurantv6/contact-multiple-maps/">
																						Get
																						Directions</a>
																				</h3>
																			</div>
																		</div>
																	</div>
																</div>
																<div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-a7d4f7d" data-id="a7d4f7d" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;grandrestaurant_ext_link_reservation&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_link_sidemenu&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_link_fullmenu&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_link_closed_fullmenu&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_scrollme&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_smoove&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_parallax_mouse&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_infinite&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_fadeout_animation&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_mobile_static&quot;:&quot;false&quot;}">
																	<div class="elementor-widget-wrap elementor-element-populated">
																		<div class="elementor-element elementor-element-90427cc elementor-widget__width-inherit elementor-widget elementor-widget-heading" data-id="90427cc" data-element_type="widget" data-settings="{&quot;grandrestaurant_ext_link_reservation&quot;:&quot;true&quot;,&quot;grandrestaurant_ext_link_fullmenu&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_link_closed_fullmenu&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_scrollme&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_smoove&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_parallax_mouse&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_infinite&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_fadeout_animation&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_mobile_static&quot;:&quot;false&quot;}" data-widget_type="heading.default">
																			<div class="elementor-widget-container">
																				<h3 class="elementor-heading-title elementor-size-default">
																					<a href="https://themes.themegoods.com/grandrestaurantv6/home-2/?fbclid=IwAR38DbSCcwm2Jl4UqIzT9hYhZcU3qsGliuzODixxHMe5p0naCU9xZHlexHE#">
																						Make
																						a
																						Reservation</a>
																				</h3>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</section>
													</div>
												</div>
												<ul class="sub-menu">
													<li class=" menu-item menu-item-type-post_type menu-item-object-page">
														<a href="https://themes.themegoods.com/grandrestaurantv6/about-us/">About
															Us</a>
													</li>
													<li class=" menu-item menu-item-type-post_type menu-item-object-page">
														<a href="https://themes.themegoods.com/grandrestaurantv6/our-chefs/">Our
															Chefs</a>
													</li>
													<li class=" menu-item menu-item-type-post_type menu-item-object-page">
														<a href="https://themes.themegoods.com/grandrestaurantv6/our-services/">Our
															Services</a>
													</li>
													<li class=" menu-item menu-item-type-post_type menu-item-object-page">
														<a href="https://themes.themegoods.com/grandrestaurantv6/contact-multiple-maps/">Contact
															Multiple Maps</a>
													</li>
													<li class=" menu-item menu-item-type-post_type menu-item-object-page">
														<a href="https://themes.themegoods.com/grandrestaurantv6/contact-parallax/">Contact
															Parallax</a>
													</li>
													<li class=" menu-item menu-item-type-post_type menu-item-object-page">
														<a href="https://themes.themegoods.com/grandrestaurantv6/contact-gallery/">Contact
															Gallery</a>
													</li>
												</ul>
											</li> -->
											
											
										</ul>
									</div>
								</div>
								<br class="clear">
							</div>
						</div>
						<div class="elementor-element elementor-element-985faef elementor-widget__width-auto elementor-hidden-phone elementor-widget elementor-widget-button" data-id="985faef" data-element_type="widget" data-settings="{&quot;grandrestaurant_ext_link_reservation&quot;:&quot;true&quot;,&quot;grandrestaurant_ext_link_sidemenu&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_link_fullmenu&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_link_closed_fullmenu&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_scrollme&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_smoove&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_parallax_mouse&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_infinite&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_fadeout_animation&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_mobile_static&quot;:&quot;false&quot;}" data-widget_type="button.default">
							<div class="elementor-widget-container">
								<div class="elementor-button-wrapper">
									<a class="elementor-button elementor-button-link elementor-size-sm" href="https://themes.themegoods.com/grandrestaurantv6/home-2/?fbclid=IwAR38DbSCcwm2Jl4UqIzT9hYhZcU3qsGliuzODixxHMe5p0naCU9xZHlexHE#">
										<span class="elementor-button-content-wrapper">
											<span class="elementor-button-text">Reservation</span>
										</span>
									</a>
								</div>
							</div>
						</div>
						<div class="elementor-element elementor-element-afcb2a3 elementor-widget__width-auto elementor-hidden-desktop elementor-view-default elementor-widget elementor-widget-icon" data-id="afcb2a3" data-element_type="widget" data-settings="{&quot;grandrestaurant_ext_link_sidemenu&quot;:&quot;true&quot;,&quot;grandrestaurant_ext_link_reservation&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_link_fullmenu&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_link_closed_fullmenu&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_scrollme&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_smoove&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_parallax_mouse&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_infinite&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_fadeout_animation&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_mobile_static&quot;:&quot;false&quot;}" data-widget_type="icon.default">
							<div class="elementor-widget-container">
								<div class="elementor-icon-wrapper">
									<a class="elementor-icon" href="https://themes.themegoods.com/grandrestaurantv6/home-2/?fbclid=IwAR38DbSCcwm2Jl4UqIzT9hYhZcU3qsGliuzODixxHMe5p0naCU9xZHlexHE#">
										<i aria-hidden="true" class="fas fa-equals"></i>
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
