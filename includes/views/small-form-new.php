<form action="<?=home_path()?>get_qoute"class="form-section"method="post"onsubmit="return final_validation()"><img alt=" transport review"height="120px"loading="lazy"src="<?=get_img()?>/Transport-Reviews.webp"width="120px"class="bb-img"><div class="form-section-group active-form"><p>Get a Free</p><p class="form-bold-heading"><span>Instant Quote</span></p><div><label class="label-ship"for="form">Ship From</label><div><input id="form_des"name="ship_from"class="input-ship"placeholder="Address or City"></div></div><div><label class="label-ship"for="to">Ship To</label><div><input id="to_des"name="ship_to"class="input-ship"placeholder="Address or City"></div></div><div><label class="label-ship"for="">Transport Method</label><div class="wrapper"><input id="option-1"name="transporttype"type="radio"value="Open"checked> <input id="option-2"name="transporttype"type="radio"value="Enclosed"> <label class="option option-1"for="option-1"><div class="dot"></div><span style="color:black;">Open</span></label> <label class="option option-2"for="option-2"><div class="dot"></div><span>Enclosed</span></label></div></div><div class="button-parent"><input id="step_one_btn"class="input-button"type="button"onclick="steps(1)"value="Get A Quote"></div></div><div class="form-section-group"><p>Get a Free</p><p class="form-bold-heading"><span>Instant Quote</span></p><div><label class="label-ship"for="myInput">YEAR</label><div><input id="myInput3"name="year"class="input-ship"placeholder="Select an option"><div id="myList3"><?php $end_year=1901;$current_year=date("Y");for($i=$current_year;$i>$end_year;$i--){echo '<div data-value="'.$i.'">'.$i.'</div>';} ?></div></div></div><div><label class="label-ship"for="myInput">MAKE</label><div><input id="myInput1"name="make"class="input-ship"placeholder="Select an option"><div id="myList1"><?php $make_query="SELECT * FROM make";$result=mysqli_query($con,$make_query)or die("make query failed");foreach($result as $make){; ?><div data-value="<?php echo $make['make']; ?>"value="<?php echo $make['id']; ?>"><?php echo $make['make']; ?></div><?php }; ?><div data-value="MotorCycle"value="">MotorCycle</div><div data-value="ATV"value="">ATV</div></div></div></div><div><label class="label-ship"for="models_small">MODELS</label><div><input id="models_input_small"name="models"class="input-ship"placeholder="Select Model or Type"><div id="models_list_small"></div></div></div><div id="vehicle_size_div"><label class="label-ship"for="vehicle_size_input">Vehicle Size</label><div><input id="vehicle_size_input"name="vehicle_size"class="input-ship"placeholder="Select an option"><div id="vehicle_size_list"><div id="vehicle_list_div"style="display:flex;flex-wrap:wrap"><div data-value="Small Car"><img alt="small car"height="25px"loading="lazy"src="<?=get_img()?>cars_icon/small-car.png"width="64px">Small Car</div><div data-value="Midsize Car"><img alt="midsize-car"height="25px"loading="lazy"src="<?=get_img()?>cars_icon/midsize-car.png"width="64px">Midsize Car</div><div data-value="Large Car"><img alt="large-car"height="25px"loading="lazy"src="<?=get_img()?>cars_icon/large-car.png"width="64px">Large Car</div><div data-value="Sports Car"><img alt="sports-car"height="25px"loading="lazy"src="<?=get_img()?>cars_icon/sports-car.png"width="64px">Sports Car</div><div data-value="Small SUV"><img alt="small-suv"height="25px"loading="lazy"src="<?=get_img()?>cars_icon/small-suv.png"width="64px">Small SUV</div><div data-value="Midsize SUV"><img alt="midsize-suv"height="25px"loading="lazy"src="<?=get_img()?>cars_icon/midsize-suv.png"width="64px">Midsize SUV</div><div data-value="Large SUV"><img alt="large-suv"height="25px"loading="lazy"src="<?=get_img()?>cars_icon/large-suv.png"width="64px">Large SUV</div><div data-value="HyperCar"><img alt="hypercar"height="25px"loading="lazy"src="<?=get_img()?>cars_icon/hypercar.png"width="64px">HyperCar</div><div data-value="Mini-van"><img alt="mini-van"height="25px"loading="lazy"src="<?=get_img()?>cars_icon/mini-van.png"width="64px">Mini-van</div><div data-value="Medium Pickup"><img alt="medium-pickup"height="25px"loading="lazy"src="<?=get_img()?>cars_icon/medium-pickup.png"width="64px">Medium Pickup</div><div data-value="Large Pickup"><img alt="Large Pickup"height="25px"loading="lazy"src="<?=get_img()?>cars_icon/large-pickup.png"width="64px">Large Pickup</div><div data-value="FullSize Van"><img alt="FullSize Van"height="25px"loading="lazy"src="<?=get_img()?>cars_icon/fullsize-van.png"width="64px">FullSize Van</div><div data-value="Travel Trailer"><img alt="Travel Trailer"height="25px"loading="lazy"src="<?=get_img()?>cars_icon/travel-trailer.png"width="64px">Travel Trailer</div><div data-value="Boat Trailer"><img alt="Boat Trailer"height="25px"loading="lazy"src="<?=get_img()?>cars_icon/boat-trailer.png"width="64px">Boat Trailer</div><div data-value="Golf Cart"><img alt="Golf Cart"height="25px"loading="lazy"src="<?=get_img()?>cars_icon/golf-cart.png"width="64px">Golf Cart</div><div data-value="Dually Pickup"><img alt="Dually Pickup"height="25px"loading="lazy"src="<?=get_img()?>cars_icon/dually-pickup.png"width="64px">Dually Pickup</div><div data-value="MotorCycle"><img alt="MotorCycle"height="25px"loading="lazy"src="<?=get_img()?>cars_icon/motorcycle.png"width="64px">MotorCycle</div><div data-value="Other"><img alt="other"height="40px"loading="lazy"src="<?=get_img()?>cars_icon/others.png"width="40px">Other</div></div></div></div></div><div><label class="label-ship"for="">Vehicle Type</label><div class="wrapper"><input id="option-3"name="vehicle_type"type="radio"value="Running"checked> <input id="option-4"name="vehicle_type"type="radio"value="Not Running"> <label class="option option-3"for="option-3"><div class="dot"></div><span>Running</span></label> <label class="option option-4"for="option-4"><div class="dot"></div><span>Not Running</span></label></div></div><div class="button-parent"><input onclick="steps(2)"class="input-button"type="button"value="Last Step"></div></div><div class="form-section-group"><p class="form-bold-heading"><span>Shipping Details</span></p><div><label class="label-ship"for="username_small">NAME</label><div><input id="username_small"name="username"class="input-ship"placeholder="Your Name"></div></div><div><label class="label-ship"for="usermail_small">SEND A QUOTE TO THIS EMAIL</label><div><input id="usermail_small"name="user_email"class="input-ship"placeholder="Your Email"type="email"></div></div><div><label class="label-ship"for="pick_up_date_small">FIRST AVAILABLE PICK-UP DATE</label><div><input id="pick_up_date_small"name="pick_up_date"class="input-ship"placeholder="Select Date"type="date"min="<?php echo date('Y-m-d'); ?>"></div></div><div><div><label class="label-ship"for="phone">PHONE NUMBER</label> <input id="phone_small"name="phone_number"class="input-ship"placeholder="( _ _ _ ) _ _ _ - _ _ _ _"pattern="\(\d{3}\)\s\d{3}-\d{4}"inputmode="decimal"title="Enter a valid phone number."maxlength="15"onkeydown="phoneNumberformatter()"required></div></div><input id="path_distance"name="path_distance"type="hidden"value=""><div class="button-parent"><input name="submit"class="input-button"type="submit"value="Submit"></div></div><div class="customer-face-section"style="display:flex;justify-content:center;align-items:center"><img alt="Rapid Auto Shipping"height="40px"loading="lazy"src="<?=get_img()?>customer-faces.png"width="76px"><p style="color:grey;font-size:12px;text-align:center"><span style="color:#ff5722;font-weight:700">2035</span> people shipped using<br><span style="color:#ff5722;font-weight:700">Rapid Auto Shipping</span> last week</p></div></form>