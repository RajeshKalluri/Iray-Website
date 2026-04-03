<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <meta name="description" content="One of the World's best services company as well as a market leader that created enduring customer relationships">
  <link href="assets/images/favicon/favicon.png" rel="icon">
  <title>I-RAY IT Solutions Pvt. Ltd</title>

  <!-- Google Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:wght@400;500;600;700&family=Roboto:wght@400;700&display=swap">

  <!-- Tailwind (if not already included, add CDN) -->
  <!-- <script src="https://cdn.tailwindcss.com"></script> -->

  <!-- Your existing CSS -->
  <link rel="stylesheet" href="assets/css/all.css">
  <link rel="stylesheet" href="assets/css/libraries.css">
  <link rel="stylesheet" href="assets/css/style.css">

  <!-- Material Symbols -->
  <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />

  <style>
    .service-icon {
      font-size: 38px;
      color: var(--primary);
    }

    .custom-card {
      background: #f5f7fa;
      border: 1px solid #e5e7eb;
      border-radius: 12px;
      padding: 24px;
      height: 100%;
      display: flex;
      flex-direction: column;
      gap: 12px;
      transition: transform 0.2s ease;
    }

    .custom-card:hover {
      transform: translateY(-5px);
    }

    .custom-icon {
      font-size: 40px;
      color: #2f57ef;
    }

    .custom-title {
      font-size: 18px;
      font-weight: 700;
      margin: 0;
    }

    .custom-text {
      font-size: 14px;
      color: #6b7280;
      margin: 0;
    }

    .feature-card {
      background: #ffffff;
      border: 1px solid #e5e7eb;
      border-radius: 12px;
      padding: 25px;
      text-align: left;
      transition: 0.3s ease;
      height: 100%;
    }

    .feature-card:hover {
      transform: translateY(-6px);
      box-shadow: 0 8px 20px rgba(0, 0, 0, 0.08);
    }

    .feature-card h6 {
      font-size: 17px;
      font-weight: 600;
      margin-top: 12px;
      margin-bottom: 6px;
    }

    .feature-card p {
      font-size: 14px;
      color: #6b7280;
      margin: 0;
    }

    .feature-icon {
      font-size: 38px;
      color: #4f46e5;
      /* Primary color */
    }

    /* INDUSTRIES BOXES */
    .industry-box {
      background: #ffffff;
      border: 1px solid #d9dce3;
      border-radius: 12px;
      padding: 14px 10px;
      font-size: 16px;
      font-weight: 600;
      color: #333;
      text-align: center;
      transition: 0.3s ease;
    }

    .industry-box:hover {
      background: #e9efff;
      border-color: #4f46e5;
      transform: translateY(-4px);
    }



    .process-step {
      padding: 10px;
    }

    .process-icon {
      background: #e7eaff;
      color: #4f46e5;
      padding: 18px;
      font-size: 34px;
      border-radius: 50%;
      margin-bottom: 15px;
    }

    .process-step h6 {
      font-weight: 700;
      margin-bottom: 5px;
      font-size: 16px;
    }

    .process-step p {
      font-size: 14px;
      color: #6b7280;
      margin: 0 auto;
      max-width: 220px;
    }

    .bg-color2 {
      background-color: #f5f7fa !important;
    }
  </style>
</head>

<body>
  <div class="wrapper">

    <?php include 'header.php'; ?>

    <!-- ========================
        Page Title
    =========================== -->
    <section class="page-title page-title-layout11 bg-overlay bg-overlay-gradient bg-parallax text-center">
      <div class="bg-img"><img src="assets/images/page-titles/201.jpg" alt="background"></div>
      <div class="container">
        <div class="row">
          <div class="col-xl-10 offset-xl-1">
            <h3 style="color:white">Upgrade Your Business with Smarter Salesforce Tools.</h3>
            <p class="pagetitle__desc mb-0">We deliver tailored Salesforce strategies and solutions that drive growth, efficiency, and customer success.</p>
            <div class="align-items-center">
              <a href="contact-us.php" class="btn btn__primary btn__primary-style2 mr-30 mt-20">
                <span>Get in Touch</span>
              </a>
            </div>
          </div>
        </div>
      </div>
    </section>



    <link rel="stylesheet" href="styles.css" />
    <!-- =============================
     SECTION 1 – Salesforce Cloud Expertise
============================= -->
    <section class="about-layout2 pt-70 pb-70">
      <div class="container">

        <div class="row mb-40 text-center">
          <div class="col-lg-12">
            <h3 class="heading__title mb-20">Our Salesforce Cloud Expertise</h3>
            <p>We specialize in a wide range of Salesforce clouds to meet your specific industry needs and business challenges.</p>
          </div>
        </div>

        <div class="row">

          <div class="col-12 col-sm-6 col-md-6 col-lg-3 mb-4">
            <div class="custom-card">
              <span class="material-symbols-outlined custom-icon">workspace_premium</span>

              <div>
                <h6 class="custom-title">Certified Experts</h6>
                <p class="custom-text">
                  Our certified Salesforce professionals bring deep industry expertise.
                </p>
              </div>
            </div>
          </div>
          <div class="col-12 col-sm-6 col-md-6 col-lg-3 mb-4">
            <div class="custom-card">
              <span class="material-symbols-outlined custom-icon">support_agent</span>
              <h6 class="custom-title">Service Cloud</h6>
              <p class="custom-text">
                Deliver exceptional customer service across every channel.
              </p>
            </div>
          </div>
          <div class="col-12 col-sm-6 col-md-6 col-lg-3 mb-4">
            <div class="custom-card">
              <span class="material-symbols-outlined custom-icon">biotech</span>
              <h6 class="custom-title">Life Sciences Cloud</h6>
              <p class="custom-text">
                Accelerate innovation and strengthen customer relationships in pharma and biotech.
              </p>
            </div>
          </div>

          <div class="col-12 col-sm-6 col-md-6 col-lg-3 mb-4">
            <div class="custom-card">
              <span class="material-symbols-outlined custom-icon">shopping_cart</span>
              <h6 class="custom-title">D2C Commerce</h6>
              <p class="custom-text">
                Build powerful B2C and D2C commerce experiences to grow your business.
              </p>
            </div>
          </div>

          <div class="col-12 col-sm-6 col-md-6 col-lg-3 mb-4">
            <div class="custom-card">
              <span class="material-symbols-outlined custom-icon">groups</span>
              <h6 class="custom-title">Experience Cloud</h6>
              <p class="custom-text">
                Create connected digital experiences for customers, employees, and partners.
              </p>
            </div>
          </div>

          <div class="col-12 col-sm-6 col-md-6 col-lg-3 mb-4">
            <div class="custom-card">
              <span class="material-symbols-outlined custom-icon">account_balance</span>
              <h6 class="custom-title">Financial Services Cloud</h6>
              <p class="custom-text">
                Deliver unified, intelligent, and personalized financial services.
              </p>
            </div>
          </div>

          <div class="col-12 col-sm-6 col-md-6 col-lg-3 mb-4">
            <div class="custom-card">
              <span class="material-symbols-outlined custom-icon">engineering</span>
              <h6 class="custom-title">Field Service Lightning</h6>
              <p class="custom-text">
                Optimize your service operations with intelligent scheduling.
              </p>
            </div>
          </div>

          <div class="col-12 col-sm-6 col-md-6 col-lg-3 mb-4">
            <div class="custom-card">
              <span class="material-symbols-outlined custom-icon">trending_up</span>
              <h6 class="custom-title">Sales Cloud</h6>
              <p class="custom-text">
                Streamline your sales processes and close deals faster.
              </p>
            </div>
          </div>




        </div>

      </div>
    </section>


    <!-- =============================
     SECTION 2 – Why Partner with I-Ray IT
============================= -->
    <section class="about-layout2 pt-70 pb-70 bg-color2">
      <div class="container">

        <div class="row mb-40 text-center">
          <div class="col-lg-12">
            <h3 class="heading__title mb-20">Why Partner with I-Ray IT for Salesforce?</h3>
            <p>Our partnership advantage ensures you get the most out of your Salesforce investment with unparalleled expertise and dedicated support.</p>
          </div>
        </div>

        <div class="row">

          <div class="col-md-6 col-lg-3 mb-30">
            <div class="feature-card">
              <span class="material-symbols-outlined feature-icon">workspace_premium</span>
              <h6>Certified Experts</h6>
              <p>Our certified Salesforce professionals bring deep industry expertise.</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 mb-30">
            <div class="feature-card">
              <span class="material-symbols-outlined feature-icon">tune</span>
              <h6>Tailored Implementation</h6>
              <p>We customize Salesforce solutions to meet your business goals.</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 mb-30">
            <div class="feature-card">
              <span class="material-symbols-outlined feature-icon">verified</span>
              <h6>Proven Track Record</h6>
              <p>We have delivered successful Salesforce projects across industries.</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 mb-30">
            <div class="feature-card">
              <span class="material-symbols-outlined feature-icon">cloud_sync</span>
              <h6>Ongoing Support</h6>
              <p>We provide long-term support, maintenance, and optimization.</p>
            </div>
          </div>


        </div>
        <div class="row mb-40 text-center">
          <div class="col-lg-12">
            <h3 class="heading__title  mt-40">Industries We Serve</h3>
          </div>
        </div>

        <div class="row justify-content-center mb-60">
          <div class="col-6 col-sm-4 col-md-3 col-lg-2 mb-3">
            <div class="industry-box">Finance</div>
          </div>
          <div class="col-6 col-sm-4 col-md-3 col-lg-2 mb-3">
            <div class="industry-box">Healthcare</div>
          </div>
          <div class="col-6 col-sm-4 col-md-3 col-lg-2 mb-3">
            <div class="industry-box">Retail</div>
          </div>
          <div class="col-6 col-sm-4 col-md-3 col-lg-2 mb-3">
            <div class="industry-box">Manufacturing</div>
          </div>
          <div class="col-6 col-sm-4 col-md-3 col-lg-2 mb-3">
            <div class="industry-box">Technology</div>
          </div>
          <div class="col-6 col-sm-4 col-md-3 col-lg-2 mb-3">
            <div class="industry-box">Education</div>
          </div>
        </div>

      </div>
    </section>





    <!-- =============================
     SECTION 3 – Call to Action
============================= -->
    <section class="about-layout2 pt-70 pb-70 text-center">
      <div class="container">
        <div class="row mb-40 text-center">
          <div class="col-lg-12">
            <h3 class="heading__title mb-20">Our Salesforce Implementation Process</h3>
          </div>
        </div>

        <div class="row text-center ">

          <div class="col-12 col-sm-6 col-md-3 mb-4">
            <div class="process-step">
              <span class="material-symbols-outlined process-icon">search</span>
              <h6>Discovery & Strategy</h6>
              <p>Understanding your goals and planning the roadmap.</p>
            </div>
          </div>

          <div class="col-12 col-sm-6 col-md-3 mb-4">
            <div class="process-step">
              <span class="material-symbols-outlined process-icon">build</span>
              <h6>Design & Build</h6>
              <p>Configuring and customizing your Salesforce instance.</p>
            </div>
          </div>

          <div class="col-12 col-sm-6 col-md-3 mb-4">
            <div class="process-step">
              <span class="material-symbols-outlined process-icon">autorenew</span>
              <h6>Data Migration</h6>
              <p>Securely transferring your data to the new system.</p>
            </div>
          </div>

          <div class="col-12 col-sm-6 col-md-3 mb-4">
            <div class="process-step">
              <span class="material-symbols-outlined process-icon">rocket_launch</span>
              <h6>Training & Go-Live</h6>
              <p>Empowering your team and launching the solution.</p>
            </div>
          </div>

        </div>
        <div class="col-12 col-md-10 offset-md-1 pt-2 pb-4 bg-[#e5e7eb] rounded-xl"
          style="background-color: #bdcbe7ff; border-radius: 12px;">
          <h5 class="heading__title mb-20 mt-40">Ready to Transform Your Business with Salesforce?</h5>
          <p> Let’s discuss how our Salesforce expertise can help accelerate your business goals. Contact us for a free consultation.</p>
          <a href="contact-us.php" class="btn btn-primary mt-10 mb-20">
            Talk to Our Experts
          </a>
        </div>
      </div>
    </section>


  </div>
  <?php include 'footer.php'; ?>

  </div>

  <script src="assets/js/jquery-3.5.1.min.js"></script>
  <script src="assets/js/plugins.js"></script>
  <script src="assets/js/main.js"></script>
</body>

</html>