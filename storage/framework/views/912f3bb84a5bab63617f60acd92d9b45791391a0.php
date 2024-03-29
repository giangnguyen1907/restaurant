<div id="reservation_wrapper">
	<div class="reservation_content">
		<div class="reservation_form">
			<div class="reservation_form_wrapper">
				<a id="reservation_cancel_btn" href="javascript:;">
					<span class="ti-close"></span>
				</a>

				<h2 class="ppb_title"><span class="ppb_title_first">Table</span>Booking</h2>
				<div id="reponse_msg">
					<ul></ul>
				</div>

				<form id="tg_reservation_form" method="post" action="<?php echo e(route('frontend.booking.store')); ?>">
                  <?php echo csrf_field(); ?>
					<div class="one_third">
						<label for="your_name">Name*</label>
						<input name="name" type="text" class="required_field">
					</div>

					<div class="one_third">
						<label for="email">Email*</label>
						<input  name="email" type="text" class="email required_field">
					</div>

					<div class="one_third last">
						<label for="phone">Phone*</label>
						<input  name="phone" type="text" class="required_field">
					</div>

					<br class="clear">
					<br>

					<div class="one_third">
						<label for="date" class="hidden">Date*</label>
						<input type="text" class="pp_date required_field hasDatepicker" 
							name="booking_date" placeholder="dd/mm/yyyy">
					</div>

					<div class="one_third">
						<label for="time">Time*</label>
						<input type="text" class="pp_time required_field"  name="booking_time"
							value="" autocomplete="OFF">
					</div>

					<div class="one_third last">
						<label for="seats">Seats*</label>
						<select id="seats" name="seats" class="required_field" style="width:99%">
							<option value="1">1 person</option>
							<option value="2">2 people</option>
							<option value="3">3 people</option>
							<option value="4">4 people</option>
							<option value="5">5 people</option>
							<option value="6">6 people</option>
							<option value="7">7 people</option>
							<option value="8">8 people</option>
							<option value="9">9 people</option>
							<option value="10">10 people</option>
							<option value="11">11 people</option>
							<option value="12">12 people</option>
							<option value="13">13 people</option>
							<option value="14">14 people</option>
							<option value="15">15 people</option>
							<option value="16">16 people</option>
							<option value="17">17 people</option>
							<option value="18">18 people</option>
							<option value="19">19 people</option>
							<option value="20">20+ people</option>
						</select>
					</div>

					<br class="clear">
					<br>

					<div class="one">
						<label for="message">Special Requests</label>
						<textarea  name="content" rows="7" cols="10"></textarea>
					</div>


					<br class="clear">
					<br>

					<div class="one">
						<p> 
                        <button id="reservation_submit_btn" type="submit" name="is_type" value="booking" class="elementor-button elementor-size-sm">
                          <span>
                            <span class="elementor-button-text">
                            Book Now
                            </span>
                          </span>
                        </button>
							<!-- <input id="reservation_submit_btn" type="submit" value="Book Now"> -->
						</p>
					</div>

					<br class="clear">
				</form>
			</div>
		</div>
	</div>
	<div class="parallax_overlay_header"></div>
</div><?php /**PATH D:\xampp\htdocs\restaurant\resources\views/frontend/element/booking.blade.php ENDPATH**/ ?>