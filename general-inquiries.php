<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <meta name="description" content="One of the World's best services company as well as a market leader that created enduring customer relationships">
  <link href="assets/images/favicon/favicon.png" rel="icon">
  <title>I-RAY IT Solutions Pvt. Ltd</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:wght@400;500;600;700&amp;family=Roboto:wght@400;700&amp;display=swap">
  <link rel="stylesheet" href="assets/css/all.css">
  <link rel="stylesheet" href="assets/css/libraries.css">
  <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
  <div class="wrapper">
    <!--<div class="preloader">
      <div class="loading"><span></span><span></span><span></span><span></span></div>
    </div>-->
    <!-- =========================
        Header
    =========================== -->
	<?php include 'header.php'; ?>
    <!-- /.Header -->

    <!-- ========================
       page title 
    =========================== -->
    <section class="page-title page-title-layout11 bg-overlay bg-overlay-gradient bg-parallax text-center">
      <div class="bg-img"><img src="assets/images/page-titles/101.jpg" alt=""></div>
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-12 col-xl-6 offset-xl-3">
            <h1 class="pagetitle__heading">Contact Us</h1>
            <p class="pagetitle__desc mb-30">We enable clients to develop and execute strategies to transform their business digitally.</p>
          </div>
        </div>
      </div>
    </section>

    <!-- ========================
      Secondary Nav
    =========================== -->
    <section class="contact-layout1 pt-0 mt--100">
      <div class="container">
	  
	  
        <div class="row">
          <div class="col-12">
            <div class="contact-panel d-flex flex-wrap">
              <div class="contact-panel__info">
                <div class="bg-img"><img src="assets/images/backgrounds/3.jpg" alt="banner"></div>
                <div class="contact-block">
                  <h5 class="contact-block__title">India</h5>
                  <ul class="contact-block__list list-unstyled"><!--
				  <li><strong>I-RAY IT SOLUTIONS PVT. LTD.</strong></li>-->
                    <li>304/A, 3rd Floor, Jain Sadguru <br>
Image's Capital Park, Image <br>
Garden Road, Silicon Valley, <br>
Madhapur, Hyderabad-500081.</li>
                  </ul>
                </div><!-- /.contact-panel__info__block -->
				
				<div class="contact-block">
                  <h5 class="contact-block__title">Sweden</h5>
                  <ul class="contact-block__list list-unstyled"><!--
				  <li><strong>I-RAY IT SOLUTIONS INC</strong></li>-->
                    <li>Hagaludsgatan 20,<br>
lgh 1403, Solna,<br>
Sweden 16963</li>
                  </ul>
                </div>
				
				<div class="contact-block">
                  <h5 class="contact-block__title">USA</h5>
                  <ul class="contact-block__list list-unstyled"><!--
				  <li><strong>I-RAY IT SOLUTIONS INC</strong></li>-->
                    <li>16192 Coastal Highway,<br>
Lewes, DE 19958</li>
                  </ul>
                </div>
				
                <div class="contact-block">
                  <h5 class="contact-block__title">Email</h5>
                  <ul class="contact-block__list list-unstyled">
                    <li><a href="mailto:info@i-raysolutions.com" class="text-yellow">info@i-raysolutions.com</a></li>
                  </ul>
                </div>
				
                <!--<div class="contact-block">
                  <h5 class="contact-block__title">Phone no</h5>
                </div>
                <a href="tel:914040202239" class="phone-number">
                  <i class="icon-phone"></i> <span>+91-40-35165116</span>
                </a>-->
              </div>
			  
			  <form class="contact-panel__form" action="contact-action.php" method="post" enctype="multipart/form-data">  
                <div class="row">
				<?php
	  $id=$_GET['id'];
	  if($id=="success"){
	  ?>
      <div class="col-lg-12 mb-3">
      <div class="alert alert-success alert-dismissable text-center">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        Details sent Successfully. We will get back to you soon.</div>
		</div>
      <?php
	  }
	  ?>
	  
                  <div class="col-sm-12">
                    <h4 class="contact-panel__title">General Inquiries</h4>
                    <p class="contact-panel__desc mb-20">We help our clients in all phases of IT implementation from consultation, setup, management, maintenance and support.</p>
                  </div>
                  <div class="col-sm-6 col-md-6 col-lg-6">
                    <div class="form-group">
                      <input type="text" class="form-control" placeholder="Name" id="contact-name" name="ef_name" required>
                    </div>
                  </div><!-- /.col-lg-6 -->
                  <div class="col-sm-6 col-md-6 col-lg-6">
				  <div class="form-group">
                      <input type="text" class="form-control" placeholder="Contact No" id="contact-Phone" name="ef_phone" required>
                    </div>
                  </div><!-- /.col-lg-6 -->
                  <div class="col-sm-6 col-md-6 col-lg-6">
                    <div class="form-group">
                      <input type="email" class="form-control" placeholder="Email" id="contact-email" name="ef_email" required>
                    </div>
                  </div><!-- /.col-lg-6 -->
                  <div class="col-sm-6 col-md-6 col-lg-6">
                    <div class="form-group">
                      <select class="form-control" name="ef_subject">
                        <option value="">Select Services</option>
                        <option value="Digital Transformation">Digital Transformation</option>
                        <option value="Cloud Operations">Cloud Operations</option>
                        <option value="Quality Engineering">Quality Engineering</option>
                        <option value="Networking Services">Networking Services</option>
                        <option value="Microsoft Dynamics">Microsoft Dynamics</option>
                        <option value="Others">Others</option>
                      </select>
                    </div>
                  </div><!-- /.col-lg-6 -->
				  <div class="col-sm-12 col-md-12 col-lg-12">
                    <div class="form-group">
                      <input type="text" class="form-control" placeholder="Company Name" id="company-name" name="ef_company" required>
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="form-group">
                      <textarea class="form-control" placeholder="Description" id="contact-message" name="ef_message"></textarea>
                    </div>
                    <button type="submit" class="btn btn__secondary btn__icon btn__xhight mt-10">
                      <span>Submit Form</span> <i class="icon-arrow-right"></i>
                    </button>
                  </div><!-- /.col-lg-12 -->
                </div><!-- /.row -->
              </form>
            </div>
          </div><!-- /.col-lg-6 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section>
	
    <!-- ========================
        Footer
      ========================== -->
	<?php include 'footer.php'; ?>
   <!-- /.Footer -->
  </div><!-- /.wrapper -->
  <script src="assets/js/jquery-3.5.1.min.js"></script>
  <script src="assets/js/plugins.js"></script>
  <script src="assets/js/main.js"></script>
</body>
</html>