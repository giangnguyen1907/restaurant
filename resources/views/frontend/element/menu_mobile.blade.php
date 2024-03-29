<div class="mobile_menu_wrapper">
   <a id="close_mobile_menu" href="javascript:;">
      <span class="ti-close"></span>
   </a>


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
      <ul id="mobile_main_menu" class="mobile_main_nav">
      <?php foreach($menu as $item){
                     					   		if($item->parent_id == $main_menu->id){
													if(in_array($item->id,$array_cate)) {
                     						?>
         <li id="menu-item-13" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-home current-menu-ancestor current-menu-parent menu-item-has-children menu-item-13">
            <a href="{{ $item->url_link }}">{{ $item->name }}</a>
            <ul class="sub-menu">
                            <?php
											foreach($menu as $sub_taxonomy){ 
												if($sub_taxonomy->parent_id == $item->id){
									 ?>    
                           <li id="menu-item-3676" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home menu-item-3676">
                              <a href="{{ $sub_taxonomy->url_link }}">{{ $sub_taxonomy->name }}</a>
                           </li>
                                
                           <?php }
                           } ?>
               
            </ul>
         </li>
         <?php } else { ?>
                     
                        <li id="menu-item-5390" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-5390">
                           <a href="{{ $item->url_link }}">{{ $item->name }}</a>
                        </li>
               <?php }
                  }
               } ?>
       
      </ul>
   </div>
   <!-- Begin Reservation -->
   <a href="javascript:;" id="tg_sidemenu_reservation" class="button ">Reservation</a>
   <!-- End Reservation -->

   <!-- Begin side menu sidebar -->
   <div class="page_content_wrapper">
      <div class="sidebar_wrapper">
         <div class="sidebar">

            <div class="content">

               <ul class="sidebar_widget">
               </ul>

            </div>

         </div>
      </div>
   </div>
   <!-- End side menu sidebar -->
</div>