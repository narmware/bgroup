<?php
    $title="Contact";
    include "header.php";
?>

						<div class="row">
							<div class="inner-content">
								<div class="contact">
									<div class="contact-head">
										<h2>Contact Us</h2>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit</p>
									</div>
									<div class="contact-us">
										<div class="row">
											<div class="col-md-8 col-xs-12">
												<div class="main-contact-form">
													<h4>Drop us a Line</h4>
													<form action="">
														<input type="text" id="full-name" name="name" placeholder="Name">
														<input type="email" id="email" name="email" placeholder="Email Address">
														<input type="tel" id="phone" name="phone" placeholder="Phone">
														<input type="text" id="subject" name="subject" placeholder="Subject">
														<textarea name="message" id="message" cols="30" rows="4"></textarea>
														<input type="submit" class="btn btn-primary" value="submit">
													</form>
												</div>
											</div>
											<div class="col-md-4 col-xs-12">											<div class="get-in-Touch">
													<h4>Contact Address</h4>
													<address>
													 	<i class="fa fa-map-marker"></i>
														Mountain Drive, Kensington,<br> Newyork, USA.
													</address>
													<address>
													 	<i class="fa fa-phone"></i>
														12 345 890123<br>Mon-Fri, 9am until 6pm 
													</address>
													<address>
													 	<i class="fa fa-envelope-o"></i>
													 	<a href="mailto:sales@steelex.com">sales@steelex.com </a>
														<br>
														We reply within 24 hours
													</address>
												</div>
											</div>
										</div>
									</div>
								</div>
								<!--.contact-us-->
								
								<div class="map-area">
									<div id="mapCanvas" class="map-canvas"></div>
								</div>

							</div>
							<!--.inner-content-->
						</div>
						<!--inner-row-->

<?php
    include "footer.php";
?>
