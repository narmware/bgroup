<?php
    $title="Contact";
    include "header.php";
?>

						<div class="row">
							<div class="inner-content">
								<div class="contact">
									<div class="contact-head">
										<h2>Contact Us</h2>
									</div>
									<div class="contact-us">
										<div class="row">
											<div class="col-md-8 col-xs-12">
												<div class="main-contact-form">

													<h4>Drop us a Line</h4>
        <div class="form">
          <div id="sendmessage">Your message has been sent. Thank you!</div>
          <div id="errormessage"></div>
          <form action="" method="post" role="form" class="contactForm">
            <div class="form-row">
              <div class="form-group col-md-6">
                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                <div class="validation"></div>
              </div>
              <div class="form-group col-md-6">
                <input type="tel" data-rule="minlen:10" maxlength="10" class="form-control" name="mob" id="mob" placeholder="Your Mobile Number" data-rule="email" data-msg="Please enter a valid Mobile Number" />
                <div class="validation"></div>
              </div>
            </div>

            <div class="form-row">
              <div class="form-group col-md-6">
                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                <div class="validation"></div>
              </div>
              <div class="form-group col-md-6">
              <input type="text" class="form-control" name="sub" id="sub" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
              <div class="validation"></div>
              </div>


            </div>


            <div class="form-group">
              <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
              <div class="validation"></div>
            </div>
            <div class="text-center"><button type="submit">Send Message</button></div>
          </form>
        </div>

												</div>
											</div>
											<div class="col-md-4 col-xs-12">
											<div class="get-in-Touch">
													<h4>Contact Address</h4>
													<address>
													 	<i class="fa fa-map-marker"></i>
														Alandi-Dehu Road<br> Chikhali, Pune.
													</address>
													<address>
													 	<i class="fa fa-phone"></i>
														8888-01-9999<br>Mon-Fri, 9am until 6pm 
													</address>
													<address>
													 	<i class="fa fa-envelope-o"></i>
													 	<a href="mailto:info@bgroup.com">info@bgroup.com </a>
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
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3781.9971644804336!2d73.88373791434002!3d18.57416657238191!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc2c0d44aa0707d%3A0xb147c7cd20b2bedc!2sNarmware+Software+Solutions!5e0!3m2!1sen!2sin!4v1520318480477" style="width:100%;height:auto;" frameborder="0" style="border:0" allowfullscreen></iframe>
								</div>

							</div>
							<!--.inner-content-->
						</div>
						<!--inner-row-->

<?php
    include "footer.php";
?>
  <script src="contactform/contactform.js"></script>
<style>
.form #sendmessage {
  color: #50d8af;
  border: 1px solid #50d8af;
  display: none;
  text-align: center;
  padding: 15px;
  font-weight: 600;
  margin-bottom: 15px;
}

.form #errormessage {
  color: red;
  display: none;
  border: 1px solid red;
  text-align: center;
  padding: 15px;
  font-weight: 600;
  margin-bottom: 5px;
}

.form #sendmessage.show, .form #errormessage.show, .form .show {
  display: block;
}

 .form .validation {
  color: red;
  display: none;
  margin-top:-10px;
  margin-bottom:1px;
  font-weight: 400;
  font-size: 13px;
  margin-top:0 !important;  
}

.form input, .form textarea {
  padding: 10px 14px;
  border-radius: 0;
  box-shadow: none;
  font-size: 15px;
}

 .form button[type="submit"] {
  background: #50d8af;
  border: 0;
  border-radius: 3px;
  padding: 10px 30px;
  color: #fff;
  transition: 0.4s;
  cursor: pointer;
}

 .form button[type="submit"]:hover {
  background: #2dc899;
}


</style>

