<?php

/*************************************************
 * Template Name: Contact
 * 
 * **********************************************/

get_header('header.php');
?>

<body>

  <!-- LOADER -->
  <div id="loader-overflow">
    <div id="loader3">Please enable JS</div>
  </div>

  <div id="wrap" class="boxed ">
    <div class="grey-bg"> <!-- Grey BG  -->

      <!--[if lte IE 8]>
				<div id="ie-container">
					<div id="ie-cont-close">
						<a href='#' onclick='javascript&#058;this.parentNode.parentNode.style.display="none"; return false;'><img src='images/ie-warn/ie-warning-close.jpg' style='border: none;' alt='Close'></a>
					</div>
					<div id="ie-cont-content" >
						<div id="ie-cont-warning">
							<img src='images/ie-warn/ie-warning.jpg' alt='Warning!'>
						</div>
						<div id="ie-cont-text" >
							<div id="ie-text-bold">
								You are using an outdated browser
							</div>
							<div id="ie-text">
								For a better experience using this site, please upgrade to a modern web browser.
							</div>
						</div>
						<div id="ie-cont-brows" >
							<a href='http://www.firefox.com' target='_blank'><img src='images/ie-warn/ie-warning-firefox.jpg' alt='Download Firefox'></a>
							<a href='http://www.opera.com/download/' target='_blank'><img src='images/ie-warn/ie-warning-opera.jpg' alt='Download Opera'></a>
							<a href='http://www.apple.com/safari/download/' target='_blank'><img src='images/ie-warn/ie-warning-safari.jpg' alt='Download Safari'></a>
							<a href='http://www.google.com/chrome' target='_blank'><img src='images/ie-warn/ie-warning-chrome.jpg' alt='Download Google Chrome'></a>
						</div>
					</div>
				</div>
				<![endif]-->



      <?php
      get_template_part('nav', 'black--no-transparent');
      ?>

      <!-- PAGE TITLE SMALL -->
      <div class="contact-bg page-title-cont page-title-large grey-dark-bg page-title-img  pt-300" style="background-image: url(<?php echo bloginfo('template_directory') ?>/assets/images/contact.jpg)">
        <div class="relative container align-left">
          <div class="row">

            <div class="col-md-12">
              <h1 class="my-page-title my-text-shadow">CONTACT</h1>
            </div>
          </div>
        </div>
      </div>

      <!-- GOOGLE MAP & CONTACT FORM -->
      <div class="page-section">
        <div class="container-fluid">
          <div class="row">

            <div class="col-md-6 map-container">
              <iframe frameborder="0" style="border:0" src="https://www.google.com/maps/d/u/1/embed?mid=1NfV6A554hjmLHSndil8PZzVCZjjc23o&ehbc=2E312F&noprof=1" width="100%" height="700"></iframe>
            </div>

            <div class="col-md-6">
              <div class="contact-form-cont">
                <!-- TITLE -->
                <div class="mb-40">
                  <h2 class="section-title">CONTACT <span class="bold">US</span></h2>
                </div>

                <!-- CONTACT FORM -->
                <div>
                  <form id="contact-form" action="#" method="POST">

                    <div class="row">
                      <div class="col-md-12 mb-30">
                        <!-- <label>Your name *</label> -->
                        <input type="text" value="" data-msg-required="Please enter your name" maxlength="100" class="controled" name="name" id="name" placeholder="NAME" required>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-md-12 mb-30">
                        <!-- <label>Your email address *</label> -->
                        <input type="email" value="" data-msg-required="Please enter your email address" data-msg-email="Please enter a valid email address" maxlength="100" class="controled" name="email" id="email" placeholder="EMAIL" required>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-md-12 mb-40">
                        <!-- <label>Message *</label> -->
                        <textarea maxlength="5000" data-msg-required="Please enter your message" rows="3" class="controled" name="message" id="message" placeholder="MESSAGE" required></textarea>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-md-12 text-center-xxs">
                        <input type="submit" value="SEND MESSAGE" class="button medium gray" data-loading-text="Loading...">
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="checkbox small">
                          <label><input type="checkbox" value="privacy" data-msg-required="Please accept the terms" id="agree" name="agree" class="checkbox" required>I agree to the terms of service</label>
                        </div>
                      </div>
                    </div>

                  </form>
                  <div class="alert alert-success hidden animated fadeIn" id="contactSuccess">
                    Thanks, your message has been sent to us.
                  </div>

                  <div class="alert alert-danger hidden animated shake" id="contactError">
                    <strong>Error!</strong> There was an error sending your message.
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>

      <!-- FEATURES 2 -->
      <div class="page-section" id="section-about">
        <div class="container-fluid">


          <div class="row">

            <div class="col-md-6 wow fadeInLeft equal-height ">
              <div class="fes2-main-text-cont padding-x-reset">
                <div class="title-fs-45">
                  DO YOU<br>NEED AN<br><span class="bold">OIL CHANGE?</span>
                </div>
                <div class="line-3-100"></div>
                <div class="mt-30">
                  <a class="button large thin gray hover-dark" href="https://www.porsche.com/germany/">NEAREST DEALERSHIP</a>
                </div>
              </div>
            </div>

            <div class="col-md-6">
              <div class="row">
                <div class="fes2-img equal-height about-img dealer-img"></div>
              </div>
            </div>

          </div>
        </div>
      </div>

      <!-- DIVIDER -->
      <hr class="mt-0 mb-0">

      <!-- CONTACT INFO SECTION 1 -->
      <div id="contact-link" class="page-section p-110-cont grey-light-bg">
        <div class="container">
          <div class="row">

            <div class="col-md-4 col-sm-6">
              <div class="cis-cont">
                <div class="cis-icon">
                  <div class="icon icon-basic-map"></div>
                </div>
                <div class="cis-text">
                  <h3><span class="bold">ADDRESS</span></h3>
                  <p>Dr. Ing. h.c. F. Porsche AG, D - 70435, Stuttgart</p>
                </div>
              </div>
            </div>
            <div class="col-md-4 col-sm-6">
              <div class="cis-cont">
                <div class="cis-icon">
                  <div class="icon icon-basic-mail"></div>
                </div>
                <div class="cis-text">
                  <h3><span class="bold">EMAIL</span></h3>
                  <p><a href="mailto:info@haswell.com">contact@porsche.de</a></p>
                </div>
              </div>
            </div>
            <div class="col-md-4 col-sm-6">
              <div class="cis-cont">
                <div class="cis-icon">
                  <div class="icon icon-basic-smartphone"></div>
                </div>
                <div class="cis-text">
                  <h3><span class="bold">CALL US</span></h3>
                  <p>+49 5361 946300</p>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>

    </div>


    <?php
    get_footer('footer.php');
    ?>