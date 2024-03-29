<?php
foreach($blocksContent as $bl){
if($bl->block_code=="food"){
$menus = $bl;
break;
}
};
$params['status'] = '1';
$params['hienthi'] = '0';
  $menunoibat = App\Http\Services\ContentService::getProducts($params)->limit(8)->get();
?>
<section
	class="elementor-section elementor-top-section elementor-element elementor-element-bfb998c elementor-section-height-min-height elementor-section-stretched elementor-section-boxed elementor-section-height-default elementor-section-items-middle jarallax"
	data-id="bfb998c" data-element_type="section"
	data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;,&quot;background_background&quot;:&quot;classic&quot;,&quot;grandrestaurant_ext_is_background_parallax&quot;:&quot;true&quot;,&quot;shape_divider_top&quot;:&quot;split&quot;,&quot;grandrestaurant_ext_is_background_parallax_speed&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0.8000000000000000444089209850062616169452667236328125,&quot;sizes&quot;:[]},&quot;grandrestaurant_ext_is_background_backdrop&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_background_on_scroll&quot;:&quot;false&quot;}"
	style="background-image: none; width: 1857px; left: -343.5px;">
	<div class="elementor-shape elementor-shape-top" data-negative="false">
		<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 20"
			preserveAspectRatio="none">
			<path class="elementor-shape-fill"
				d="M0,0v3c0,0,393.8,0,483.4,0c9.2,0,16.6,7.4,16.6,16.6c0-9.1,7.4-16.6,16.6-16.6C606.2,3,1000,3,1000,3V0H0z"></path>
		</svg>
	</div>
	<div class="elementor-container elementor-column-gap-default">
		<div
			class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-8ecaba2"
			data-id="8ecaba2" data-element_type="column"
			data-settings="{&quot;grandrestaurant_ext_link_reservation&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_link_sidemenu&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_link_fullmenu&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_link_closed_fullmenu&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_scrollme&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_smoove&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_parallax_mouse&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_infinite&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_fadeout_animation&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_mobile_static&quot;:&quot;false&quot;}">
			<div class="elementor-widget-wrap elementor-element-populated">
				<div
					class="elementor-element elementor-element-6a6166b elementor-widget__width-inherit elementor-widget elementor-widget-grandrestaurant-animated-text"
					data-id="6a6166b" data-element_type="widget"
					data-settings="{&quot;grandrestaurant_ext_link_reservation&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_link_sidemenu&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_link_fullmenu&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_link_closed_fullmenu&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_scrollme&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_smoove&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_parallax_mouse&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_infinite&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_mobile_static&quot;:&quot;false&quot;}"
					data-widget_type="grandrestaurant-animated-text.default">
					<div class="elementor-widget-container">
						<div
							class="themegoods-animated-text text-alignment-center transition-bottom overflow-hidden blast-root"
							data-delimiter="sentence" data-transition="100"
							data-transition-delay="200"
							data-transition-duration="800">
							<h2>
								<span class="blast"
									style="transition-delay: 300ms; transition-duration: 800ms; transform: translateX(0px) translateY(0px) translateZ(0px); opacity: 1;">
									<?php echo e($menus->title); ?></span>
							</h2>
						</div>
					</div>
				</div>
				<div
					class="elementor-element elementor-element-e54e9a0 elementor-widget__width-auto elementor-widget elementor-widget-grandrestaurant-animated-text"
					data-id="e54e9a0" data-element_type="widget"
					data-settings="{&quot;grandrestaurant_ext_link_reservation&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_link_sidemenu&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_link_fullmenu&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_link_closed_fullmenu&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_scrollme&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_smoove&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_parallax_mouse&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_infinite&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_mobile_static&quot;:&quot;false&quot;}"
					data-widget_type="grandrestaurant-animated-text.default">
					<div class="elementor-widget-container">
						<div
							class="themegoods-animated-text text-alignment-left transition-bottom overflow-hidden blast-root"
							data-delimiter="word" data-transition="100"
							data-transition-delay="400"
							data-transition-duration="800">
							<h2>
								<span class="blast"
									style="transition-delay: 400ms; transition-duration: 800ms; transform: translateX(0px) translateY(0px) translateZ(0px); opacity: 1;">
							<?php echo e($menus->brief); ?></span>
							</h2>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div id="jarallax-container-1"
		style="position: absolute; top: 0px; left: 0px; width: 100%; height: 100%; overflow: hidden; z-index: -100;">
		<img class="jarallax-img"
			src="<?php echo e(asset('themes/frontend/home_files/images/asian-assorted-food-set-ERZSHTC-1.jpg')); ?>"
			style="object-fit: cover; object-position: 50% 50%; max-width: none; position: absolute; top: 0px; left: 0px; width: 1857px; height: 633.75px; overflow: hidden; pointer-events: none; transform-style: preserve-3d; backface-visibility: hidden; will-change: transform, opacity;">
	</div>
</section>

<section
	class="elementor-section elementor-top-section elementor-element elementor-element-c2640ad elementor-section-full_width elementor-section-stretched elementor-section-height-default elementor-section-height-default"
	data-id="c2640ad" data-element_type="section"
	data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;,&quot;grandrestaurant_ext_is_background_parallax&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_background_backdrop&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_background_on_scroll&quot;:&quot;false&quot;}"
	style="width: 1857px; left: -343.5px;">
	<div class="elementor-container elementor-column-gap-default">
		<div
			class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-c817bbc"
			data-id="c817bbc" data-element_type="column"
			data-settings="{&quot;grandrestaurant_ext_link_reservation&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_link_sidemenu&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_link_fullmenu&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_link_closed_fullmenu&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_scrollme&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_smoove&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_parallax_mouse&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_infinite&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_fadeout_animation&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_mobile_static&quot;:&quot;false&quot;}">
			<div class="elementor-widget-wrap elementor-element-populated">
				<div
					class="elementor-element elementor-element-2d71984 elementor-widget elementor-widget-grandrestaurant-classic-food-menu-grid-image"
					data-id="2d71984" data-element_type="widget"
					data-settings="{&quot;grandrestaurant_ext_link_reservation&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_link_sidemenu&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_link_fullmenu&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_link_closed_fullmenu&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_scrollme&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_smoove&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_parallax_mouse&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_infinite&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_is_fadeout_animation&quot;:&quot;false&quot;,&quot;grandrestaurant_ext_mobile_static&quot;:&quot;false&quot;}"
					data-widget_type="grandrestaurant-classic-food-menu-grid-image.default">
					<div class="elementor-widget-container">
						<div class="ppb_portfolio one nopadding "
							style="padding:0px 0 0px 0;">
							<div class="page_content_wrapper fullwidth">
								<div
									class="portfolio_filter_wrapper four_cols gallery portfolio-content section content clearfix visible isotope"
									style="position: relative; overflow: hidden; height: 928.5px;">
                                
								<?php $__currentLoopData = $menunoibat; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $menus): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
									
									<div class="element classic3_cols isotope-item"
										style="position: absolute; left: 0px; top: 0px; transform: translate3d(0px, 0px, 0px);">
										<div
											class="one_fourth gallery4 filterable grid_image static animated1">
											<div id="portfolio_desc_3190"
												class="portfolio_desc grid_image portfolio4 filterable ">
												<div
													class="grid_image_frame">
													<div id="menu_3190"
														class="menu_content_classic center">
														<h5
															class="menu_post">
															<span class="menu_title"> <?php echo e($menus->title); ?></span>
														</h5>
														<div
															class="post_detail menu_excerpt"><?php echo e($menus->mota); ?></div>
														<br class="clear">
														<br>
														<span
															class="menu_price">
															<?php echo e($menus->gia); ?> <?php if($menus->donvitien=='Dollar') echo '$'; else echo $menus->donvitien ?></span>
													</div>
												</div>
											</div>
											<img width="400" height="400"
												decoding="async"
												src="<?php echo e($menus->image); ?>"
												alt="">
										</div>
									</div>
									<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>								
									
								</div>
							</div>
						</div>
						<br class="clear">
					</div>
				</div>
			</div>
		</div>
	</div>
</section><?php /**PATH D:\xampp\htdocs\restaurant\resources\views/frontend/element/thucdon.blade.php ENDPATH**/ ?>