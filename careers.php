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
  <style>
    .job__desc li {
      margin-left: -20px;
    }

    .job__desc li {
      list-style-type: circle;
    }

    .job__desc li li {
      list-style-type: disc;
    }

    .job-listings {
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      gap: 30px;
      padding: 40px 0;
    }

    .job-card {
      background: #fff;
      border-radius: 12px;
      overflow: hidden;
      position: relative;
      transition: all 0.3s ease;
      box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
      cursor: pointer;
      display: flex;
      flex-direction: column;
    }

    .job-card::before {
      content: '';
      position: absolute;
      left: 0;
      top: 0;
      height: 100%;
      width: 4px;
      background: #0272f6;
      transform: scaleY(0);
      transition: transform 0.3s ease;
    }

    .job-card:hover {
      transform: translateY(-5px);
      box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
    }

    .job-card:hover::before {
      transform: scaleY(1);
    }

    .job-card__content {
      padding: 25px;
    }

    .job-card__title {
      font-size: 1.25rem;
      color: #2c3e50;
      margin-bottom: 15px;
      font-weight: 600;
    }

    .job-card__meta {
      display: flex;
      align-items: center;
      gap: 15px;
      margin-bottom: 15px;
    }

    .job-card__location,
    .job-card__date {
      display: flex;
      align-items: center;
      gap: 5px;
      color: #666;
      font-size: 0.9rem;
    }

    .job-card__location i,
    .job-card__date i {
      color: #0272f6;
      font-size: 1rem;
    }

    /* Job Modal Styles */
    .job-modal {
      display: none;
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: rgba(0, 0, 0, 0.5);
      z-index: 1000;
    }

    .job-modal__content {
      background: #fff;
      width: 95%;
      max-width: 1200px;
      height: 90vh;
      margin: 2.5vh auto;
      border-radius: 12px;
      position: relative;
      animation: modalSlideIn 0.3s ease;
      display: flex;
      flex-direction: column;
    }

    .job-modal__header {
      padding: 25px 30px;
      border-bottom: 1px solid #eee;
      background: #fff;
      border-radius: 12px 12px 0 0;
      position: sticky;
      top: 0;
      z-index: 2;
    }

    .job-modal__title {
      font-size: 1.8rem;
      color: #2c3e50;
      margin-bottom: 10px;
    }

    .job-modal__meta {
      display: flex;
      gap: 20px;
      color: #666;
    }

    .job-modal__body {
      padding: 30px;
      overflow-y: auto;
      flex: 1;
      position: relative;
    }

    .job-modal__section {
      margin-bottom: 25px;
      max-width: 1000px;
      margin-left: auto;
      margin-right: auto;
    }

    .job-modal__section-title {
      font-size: 1.4rem;
      color: #2c3e50;
      margin-bottom: 15px;
      font-weight: 600;
    }

    .job-modal__close {
      position: absolute;
      top: 20px;
      right: 20px;
      background: none;
      border: none;
      font-size: 1.5rem;
      color: #666;
      cursor: pointer;
      transition: color 0.3s ease;
      z-index: 3;
    }

    .job-modal__close:hover {
      color: #0272f6;
    }

    .job-modal__footer {
      padding: 20px 30px;
      border-top: 1px solid #eee;
      text-align: right;
      background: #fff;
      border-radius: 0 0 12px 12px;
      position: sticky;
      bottom: 0;
      z-index: 2;
    }

    .btn-apply {
      background: #0272f6;
      color: #fff;
      padding: 12px 30px;
      border-radius: 6px;
      border: none;
      font-weight: 600;
      transition: all 0.3s ease;
      text-decoration: none;
      display: inline-block;
    }

    .btn-apply:hover {
      background: #0262d6;
      transform: translateY(-2px);
    }

    /* Improved content styling */
    .job-description {
      line-height: 1.6;
      color: #444;
      margin-bottom: 20px;
    }

    .job-responsibilities ul,
    .job-requirements ul {
      padding-left: 20px;
      margin-bottom: 15px;
    }

    .job-responsibilities li,
    .job-requirements li {
      margin-bottom: 10px;
      line-height: 1.5;
      color: #444;
    }

    @keyframes modalSlideIn {
      from {
        transform: translateY(-50px);
        opacity: 0;
      }

      to {
        transform: translateY(0);
        opacity: 1;
      }
    }

    @media (max-width: 1200px) {
      .job-listings {
        grid-template-columns: repeat(2, 1fr);
      }
    }

    @media (max-width: 768px) {
      .job-listings {
        grid-template-columns: 1fr;
      }

      .job-modal__content {
        width: 95%;
        height: 95vh;
        margin: 2.5vh auto;
      }

      .job-modal__title {
        font-size: 1.5rem;
      }

      .job-modal__section-title {
        font-size: 1.2rem;
      }

      .job-modal__body {
        padding: 20px;
      }
    }
  </style>
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
      <div class="bg-img"><img src="assets/images/page-titles/106.jpg" alt="background"></div>
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-12 col-xl-6 offset-xl-3">
            <h1 class="pagetitle__heading">Careers and Job Openings</h1>
            <!--<p class="pagetitle__desc mb-0">At I-RAY IT Solutions, we believe that great people are the foundation of our success. We are a dynamic and innovative technology company that thrives on pushing boundaries and delivering exceptional solutions to our clients. As we continue to grow and expand our operations, we are constantly seeking talented individuals who are passionate about technology and ready to make an impact.</p>-->
          </div><!-- /.col-xl-6 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.page-title -->

    <section class="gallery pt-70 pb-70">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-12 col-xl-6">
            <div class="gallery-images-wrapper">
              <a class="popup-gallery-item" href="assets/images/gallery/1.jpg">
                <img src="assets/images/gallery/1.jpg" alt="gallery img">
              </a>
              <a class="popup-gallery-item" href="assets/images/gallery/2.jpg">
                <img src="assets/images/gallery/2.jpg" alt="gallery img">
              </a>
              <a class="popup-gallery-item" href="assets/images/gallery/3.jpg">
                <img src="assets/images/gallery/3.jpg" alt="gallery img">
              </a>
              <a class="popup-gallery-item" href="assets/images/gallery/4.jpg">
                <img src="assets/images/gallery/4.jpg" alt="gallery img">
              </a>
            </div><!-- /.gallery-images-wrapper -->
          </div><!-- /.col-xl-5 -->
          <div class="col-sm-12 col-md-12 col-lg-12 col-xl-5 offset-xl-1">
            <div class="sticky-top">
              <h2 class="heading__subtitle">Improve Efficiency and Provide Better Experiences!</h2>
              <h3 class="heading__title">Join The Best Working To Build Greatest Talent!</h3>
              <p>At I-RAY IT Solutions, we believe that great people are the foundation of our success. We are a dynamic and innovative technology company that thrives on pushing boundaries and delivering exceptional solutions to our clients. As we continue to grow and expand our operations, we are constantly seeking talented individuals who are passionate about technology and ready to make an impact.</p>
              <!--<p>We believe that honesty, integrity, and a commitment to ethical
                business practices is a fundamental to how conduct ourselves in each interaction we have.</p>
              <p>Managed cloud services, mobile solutions, telecommunication services, managed security services, and
                emergency support.</p>-->
              <!--<a href="#" class="btn btn__primary mt-30">
                <span>Our Careers</span> <i class="icon-arrow-right"></i>
              </a>-->
            </div>
          </div><!-- /.col-xl-7 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section>

    <section class="careers pt-70 pb-70">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-6 offset-lg-3">
            <div class="heading text-center mb-50">
              <h2 class="heading__subtitle color-body">We Prepare For The Future.</h2>
              <h3 class="heading__title">Inspire And Get Inspired By Professional Experts</h3>
            </div><!-- /.heading -->
          </div><!-- /.col-lg-10 -->
        </div><!-- /.row -->
        <div class="job-listings">
          <div class="job-card" data-job="senior-laravel-developer">
            <div class="job-card__content">
              <h3 class="job-card__title">Senior Laravel Developer</h3>
              <div class="job-card__meta">
                <div class="job-card__location">
                  <i class="icon-map-marker"></i>
                  <span>India</span>
                </div>
                <div class="job-card__type">
                  <i class="icon-clock"></i>
                  <span>Full Time</span>
                </div>
              </div>
            </div>
          </div>
          <div class="job-card" data-job="automation-test-engineer">
            <div class="job-card__content">
              <h3 class="job-card__title">Automation Test Engineer</h3>
              <div class="job-card__meta">
                <div class="job-card__location">
                  <i class="icon-map-marker"></i>
                  <span>Hyderabad</span>
                </div>
                <div class="job-card__type">
                  <i class="icon-clock"></i>
                  <span>Full Time</span>
                </div>
              </div>
            </div>
          </div>
          <div class="job-card" data-job="usability-engineer">
            <div class="job-card__content">
              <h3 class="job-card__title">Usability Engineer</h3>
              <div class="job-card__meta">
                <div class="job-card__location">
                  <i class="icon-map-marker"></i>
                  <span>Hyderabad</span>
                </div>
                <div class="job-card__type">
                  <i class="icon-clock"></i>
                  <span>Full Time</span>
                </div>
              </div>
            </div>
          </div>

          <div class="job-card" data-job="csharp-developer">
            <div class="job-card__content">
              <h3 class="job-card__title">Software Developer with C#</h3>
              <div class="job-card__meta">
                <div class="job-card__location">
                  <i class="icon-map-marker"></i>
                  <span>Hyderabad</span>
                </div>
                <div class="job-card__type">
                  <i class="icon-clock"></i>
                  <span>Full Time</span>
                </div>
              </div>
            </div>
          </div>

          <div class="job-card" data-job="mern-developer">
            <div class="job-card__content">
              <h3 class="job-card__title">MERN Stack Developer</h3>
              <div class="job-card__meta">
                <div class="job-card__location">
                  <i class="icon-map-marker"></i>
                  <span>Hyderabad</span>
                </div>
                <div class="job-card__type">
                  <i class="icon-clock"></i>
                  <span>Full Time</span>
                </div>
              </div>
            </div>
          </div>

          <div class="job-card" data-job="azure-devops">
            <div class="job-card__content">
              <h3 class="job-card__title">Azure DevOps Engineer</h3>
              <div class="job-card__meta">
                <div class="job-card__location">
                  <i class="icon-map-marker"></i>
                  <span>Hyderabad</span>
                </div>
                <div class="job-card__type">
                  <i class="icon-clock"></i>
                  <span>Full Time</span>
                </div>
              </div>
            </div>
          </div>

          <div class="job-card" data-job="ai-blockchain">
            <div class="job-card__content">
              <h3 class="job-card__title">AI & Blockchain Developer</h3>
              <div class="job-card__meta">
                <div class="job-card__location">
                  <i class="icon-map-marker"></i>
                  <span>Hyderabad</span>
                </div>
                <div class="job-card__type">
                  <i class="icon-clock"></i>
                  <span>Full Time</span>
                </div>
              </div>
            </div>
          </div>
          <div class="job-card" data-job="wlan-developer">
            <div class="job-card__content">
              <h3 class="job-card__title">WLAN Developer</h3>
              <div class="job-card__meta">
                <div class="job-card__location">
                  <i class="icon-map-marker"></i>
                  <span>Hyderabad</span>
                </div>
                <div class="job-card__type">
                  <i class="icon-clock"></i>
                  <span>Full Time</span>
                </div>
              </div>
            </div>
          </div>

          <div class="job-card" data-job="bsp-driver">
            <div class="job-card__content">
              <h3 class="job-card__title">BSP/Driver</h3>
              <div class="job-card__meta">
                <div class="job-card__location">
                  <i class="icon-map-marker"></i>
                  <span>Hyderabad</span>
                </div>
                <div class="job-card__type">
                  <i class="icon-clock"></i>
                  <span>Full Time</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Job Details Modal -->
      <div class="job-modal" id="jobModal">
        <div class="job-modal__content">
          <button class="job-modal__close">&times;</button>
          <div class="job-modal__header">
            <h2 class="job-modal__title"></h2>
            <div class="job-modal__meta">
              <div class="job-location">
                <i class="icon-map-marker"></i>
                <span class="location-text"></span>
              </div>
              <div class="job-date">
                <i class="icon-calendar"></i>
                <span class="date-text"></span>
              </div>
            </div>
          </div>
          <div class="job-modal__body">
            <div class="job-modal__section">
              <h3 class="job-modal__section-title">Job Description</h3>
              <div class="job-description"></div>
            </div>
            <div class="job-modal__section">
              <h3 class="job-modal__section-title">Key Responsibilities</h3>
              <div class="job-responsibilities"></div>
            </div>
            <div class="job-modal__section">
              <h3 class="job-modal__section-title">Required Skills</h3>
              <div class="job-requirements"></div>
            </div>
          </div>
          <div class="job-modal__footer">
            <a href="#" class="btn-apply">Apply Now</a>
          </div>
        </div>
      </div>
    </section>

    <!--<section class="counters pt-60">
      <div class="container">
        <div class="row">
          <div class="col-sm-6 col-md-3 col-lg-3">
            <div class="counter-item">
              <h4 class="counter">6,154</h4>
              <p class="counter__desc">Projects And Software Developed in 2021</p>
            </div>
          </div>
          <div class="col-sm-6 col-md-3 col-lg-3">
            <div class="counter-item">
              <h4 class="counter">2,512</h4>
              <p class="counter__desc">Qualified Employees And Developers With Us</p>
            </div>
          </div>
          <div class="col-sm-6 col-md-3 col-lg-3">
            <div class="counter-item">
              <h4 class="counter">1,784</h4>
              <p class="counter__desc">Satisfied Clients We Have Served Globally</p>
            </div>
          </div>
          <div class="col-sm-6 col-md-3 col-lg-3">
            <div class="counter-item">
              <h4 class="counter">0,25</h4>
              <p class="counter__desc">Years Of Experience In The IT & Software Industry</p>
            </div>
          </div>
        </div>
      </div>
    </section>-->

    <!-- ========================
        Footer
      ========================== -->
    <?php include 'footer.php'; ?>
    <!-- /.Footer -->
  </div><!-- /.wrapper -->
  <script src="assets/js/jquery-3.5.1.min.js"></script>
  <script src="assets/js/plugins.js"></script>
  <script src="assets/js/main.js"></script>
  <script>
    const jobData = {
      'senior-laravel-developer': {
        title: 'Senior Laravel Developer',
        location: 'India',
        type: 'Full Time',
        description: 'We are looking for a highly skilled Senior Laravel Developer to Design, develop, and maintain high-quality Laravel-based applications aligned with business needs. Collaborate with product managers, QA teams, and stakeholders to deliver robust and scalable solutions. Apply strong full-stack development expertise, problem-solving skills, and effective communication to support product growth and performance.',
        responsibilities: [
          'Design and develop scalable front-end and back-end components.',
          'Write clean, efficient, and well-documented code following best practices.',
          'Collaborate with product teams to define roadmaps and align with business goals.',
          'Develop and maintain applications using PHP and Laravel.',
          'Implement Laravel features like middleware, service providers, and dependency injection.',
          'Use Eloquent ORM for efficient database interactions.',
          'Build dynamic UIs and admin panels using Livewire and Filament.',
          'Implement background jobs using Cron Jobs.',
          'Manage deployments and server configurations using Herd and Forge.',
          'Optimize MySQL databases for performance and scalability.',
          'Write and maintain test cases using Pest framework.',
          'Use Git for version control and collaborative development.',
          'Participate in code reviews to ensure quality and security.',
          'Develop and execute unit, integration, and end-to-end tests.',
          'Troubleshoot issues and perform root cause analysis.',
          'Participate in Agile ceremonies like sprint planning and stand-ups.',
          'Manage multiple tasks effectively in a fast-paced environment.',
          'Work independently while collaborating with the team.',
          'Understand business requirements to deliver customer-focused solutions.',
          'Estimate tasks and deliver features within deadlines.'
        ],
        requirements: [
          'Bachelor’s degree in Computer Science, Software Engineering, or related field (Master’s preferred).',
          '7+ years of software development experience.',
          'Strong expertise in OOP, PHP, Laravel, and MySQL.',
          'Proficiency in Livewire and Filament frameworks.',
          'Hands-on experience with Eloquent ORM.',
          'Experience with Cron Jobs for background processing.',
          'Familiarity with testing frameworks like Pest.',
          'Experience in deployment and server management using Herd and Forge.',
          'Working knowledge of Agile methodologies, Git, and JIRA.',
          'Strong problem-solving skills and attention to detail.',
          'Excellent communication and collaboration skills.',
          'Proactive mindset with ability to take initiative and deliver solutions.',
          'Willingness to learn and adapt to new technologies.'
        ],
        emailSubject: 'Senior Laravel Developer Application',
        emailBody: 'Hi Sir\n\nI am interested in the Senior Laravel Developer position at I-RAY IT SOLUTIONS.\n\nPlease find my profile from attachment.\n\n\n'
      },
      'automation-test-engineer': {
        title: 'Automation Test Engineer',
        location: 'Hyderabad',
        type: 'Full Time',
        description: 'We are looking for an experienced Automation Test Engineer with strong expertise in automating Windows-based applications. The candidate should have hands-on experience in building automation frameworks, working with CI/CD pipelines, and ensuring high-quality software delivery.',
        responsibilities: [
          'Design and develop automation scripts for Windows-based applications using C#.',
          'Implement automation for desktop and mobile applications using Appium and WinAppDriver.',
          'Set up and manage CI/CD pipelines using Jenkins or GitHub Actions.',
          'Collaborate with QA and development teams for quality deliverables.',
          'Troubleshoot and optimize automation scripts for performance and reliability.',
          'Develop reusable automation frameworks.',
          'Perform functional, regression, and integration testing.'
        ],
        requirements: [
          '6+ years of experience in software testing and automation.',
          'Minimum 3+ years of automation experience for Windows-based applications.',
          'Strong expertise in C# programming.',
          'Experience with Appium and WinAppDriver.',
          'Knowledge of CI/CD tools like Jenkins or GitHub Actions.',
          'Experience in automation framework development.',
          'Strong understanding of functional, regression, and integration testing.'
        ],
        emailSubject: 'Application for Automation Test Engineer',
        emailBody: 'Hi Sir\n\nI am interested in the Automation Test Engineer position at I-RAY IT SOLUTIONS.\n\nPlease find my profile from attachment.\n\n\n'
      },
      'usability-engineer': {
        title: 'Usability Engineer',
        location: 'Hyderabad',
        type: 'Full Time',
        experience: '5+ Years',
        description: 'We are seeking a highly skilled Usability Engineer with a minimum of 5 years of experience to advocate for user-centric design in our hearing aid solutions. The ideal candidate will apply design thinking principles to collect and analyze user insights, ensuring our products meet the highest usability standards while adhering to regulatory requirements.',
        responsibilities: [
          'Advocate for user-centric design to ensure our hearing aid solutions meet the highest usability standards through a holistic approach.',
          'Utilize design thinking principles to gather, analyze, and present user insights that guide product development.',
          'Gather and analyze use errors and user insights with a focus on regulatory requirements.',
          'Build strong relationships with diverse users, including expert customer HCPs.',
          'Collaborate with Product Management and R&D Engineers.',
          'Develop and maintain comprehensive documentation for the Human Factors & Usability Engineering Process.',
          'Participate in formative and summative usability testing in line with IEC 62366 standards.',
          'Analyze complaints from on-market products.',
          'Ensure all documentation and processes adhere to regulatory guidelines.'
        ],
        requirements: [
          'Bachelor\'s or Master\'s degree in Usability Engineering, Industrial Design, or related field.',
          'Minimum of 5 years of experience in Human Factors Engineering.',
          'Strong understanding of human factors and usability principles.',
          'Experience in applying IEC 62366 standards.',
          'Proficiency in gathering and analyzing user insights.',
          'Excellent communication and collaboration skills.',
          'Strong problem-solving abilities.',
          'Familiarity with FDA, IEC, and ANSI/AAMI standards.'
        ],
        emailSubject: 'Usability Engineer',
        emailBody: 'Hi Sir\n\nI am interested in the Usability Engineer position at I-RAY IT SOLUTIONS.\n\nPlease find my profile from attachment.\n\n\n'
      },
      'csharp-developer': {
        title: 'Software Developer with C#',
        location: 'Hyderabad',
        type: 'Full Time',
        experience: '4+ Years',
        description: 'We are seeking a talented and motivated Software Developer with expertise in C# tools development, automation, XML, XSLT, and Jenkins configurations (or similar tools) to join our dynamic team.',
        responsibilities: [
          'Develop and Maintain C# Tools.',
          'Implement automation solutions.',
          'Work with XML data and XSLT transformations.',
          'Set up and maintain Jenkins pipelines.',
          'Conduct code reviews and optimize code.',
          'Collaborate with cross-functional teams.',
          'Create and maintain comprehensive documentation.'
        ],
        requirements: [
          'Bachelor\'s degree in Computer Science or related field.',
          '4+ years of experience in software development with C#.',
          'Proficiency in C# and .NET framework.',
          'Strong experience with XML and XSLT.',
          'Experience with Jenkins and CI/CD.',
          'Knowledge of version control systems.',
          'Understanding of software development best practices.'
        ],
        emailSubject: 'Software Developer with C#',
        emailBody: 'Hi Sir\n\nI am interested in the Software Developer with C# position at I-RAY IT SOLUTIONS.\n\nPlease find my profile from attachment.\n\n\n'
      },
      'mern-developer': {
        title: 'MERN Stack Developer',
        location: 'Hyderabad',
        type: 'Full Time',
        description: 'We are seeking two skilled MERN Stack Developers to join our team, with one being a Senior Solution Architect (10+ years) and the other a Junior Developer (4+ years).',
        responsibilities: [
          'Configure application and database server environments.',
          'Develop and maintain the storefront and database.',
          'Test and optimize code pages.',
          'Optimize database performance.',
          'Integrate payment processing functionalities.',
          'Ensure site security.',
          'Collaborate with team members.',
          'Provide technical guidance to junior members.'
        ],
        requirements: [
          'Experience with MERN stack (MongoDB, Express.js, React, Node.js).',
          'Strong proficiency in configuring servers.',
          'Experience in storefront development.',
          'Knowledge of payment processing integrations.',
          'Understanding of security best practices.',
          'Strong problem-solving abilities.',
          'Excellent communication skills.'
        ],
        emailSubject: 'MERN Stack Developer',
        emailBody: 'Hi Sir\n\nI am interested in the MERN Stack Developer position at I-RAY IT SOLUTIONS.\n\nPlease find my profile from attachment.\n\n\n'
      },
      'azure-devops': {
        title: 'Azure DevOps Engineer',
        location: 'Hyderabad',
        type: 'Full Time',
        experience: '5+ Years',
        description: 'As an Azure DevOps Engineer with C# application development skills, you will be responsible for managing and optimizing our cloud infrastructure on Microsoft Azure and developing robust C# applications. You will collaborate closely with development, operations, and QA teams to enhance our development lifecycle, automate processes, and ensure high-performance, scalable, and secure systems.',
        responsibilities: [
          'Design, implement, and maintain CI/CD pipelines using Azure DevOps.',
          'Develop, deploy, and integrate C# applications, ensuring high performance and responsiveness.',
          'Monitor and maintain cloud infrastructure to ensure optimal performance, reliability, and security.',
          'Collaborate with development teams to integrate best practices in continuous integration and continuous deployment.',
          'Troubleshoot and resolve issues related to application and infrastructure performance, security, and availability.',
          'Implement and manage Azure services such as Azure Kubernetes Service (AKS), Azure Functions, and Azure Logic Apps.',
          'Develop and maintain scripts for automating various tasks and processes using PowerShell, Bash, or other scripting languages.',
          'Ensure compliance with industry standards and regulatory requirements for cloud security and data protection.',
          'Document processes, procedures, and best practices related to DevOps, cloud operations, and application development.'
        ],
        requirements: [
          'Bachelor\'s degree in Computer Science, Information Technology, or a related field.',
          'Proven experience as a DevOps Engineer with a focus on Microsoft Azure.',
          'Strong understanding of Azure services and cloud architecture.',
          'Proficiency in C# and .NET framework for application development.',
          'Experience with CI/CD tools and processes, particularly Azure DevOps.',
          'Proficiency in scripting languages such as PowerShell, Bash, or Python.',
          'Familiarity with containerization and orchestration technologies like Docker and Kubernetes.'
        ],
        emailSubject: 'Azure DevOps Engineer',
        emailBody: 'Hi Sir\n\nI am interested in the Azure DevOps Engineer position at I-RAY IT SOLUTIONS.\n\nPlease find my profile from attachment.\n\n\n'
      },
      'ai-blockchain': {
        title: 'AI & Blockchain Developer',
        location: 'Hyderabad',
        type: 'Full Time',
        experience: '5+ Years',
        description: 'We are looking for an experienced AI, blockchain, and mobile developer to migrate our AI app to AWS. You will transition our machine learning platform to SageMaker, integrate it with Managed Blockchain, and enhance the mobile apps.',
        responsibilities: [
          'Migrate Python models and workflows to SageMaker and optimize using components',
          'Develop and deploy models using Docker, Kubernetes, Python, and other tools',
          'Integrate SageMaker inferences with backend through APIs and SDK',
          'Implement MLOps best practices for governance using SageMaker Registry',
          'Develop serverless GraphQL API backend to read/write data to Managed Blockchain ledger',
          'Enhance Hyperledger Fabric integration on Managed Blockchain',
          'Design blockchain smart contracts that utilize ML insights and data',
          'Improve iOS and Android apps to seamlessly integrate ML and blockchain',
          'Continuously monitor and improve system performance, scalability, and reliability',
          'Keep up-to-date on the latest AWS, blockchain, and mobile services'
        ],
        requirements: [
          '5+ years developing models in Python and deploying on SageMaker',
          'Deep knowledge of Hyperledger Fabric and Managed Blockchain',
          'Proficiency with Swift, Kotlin, React Native or Flutter',
          'Experience with mobile SDKs, push notifications, and optimizations',
          'Understanding of serverless applications, microservices, and GraphQL',
          'Ability to quickly iterate solutions in a fast-paced environment',
          'Excellent communication and collaboration skills'
        ],
        emailSubject: 'Application for AI & Blockchain Developer',
        emailBody: 'Hi Sir\n\nI am interested in the AI & Blockchain Developer position at I-RAY IT SOLUTIONS.\n\nPlease find my profile from attachment.\n\n\n'
      },
      'data-science': {
        title: 'Principal Analyst - Data Science',
        location: 'Bangalore',
        type: 'Full Time',
        experience: '4+ Years',
        description: 'We are seeking a Principal Analyst in Data Science to lead our data science initiatives and drive innovation in our analytical capabilities.',
        responsibilities: [
          'Selecting features, building, and optimizing classifiers/regression using machine learning and deep learning techniques',
          'Proficient in using data analytics tools to perform queries and analyses and for defining and correlating data',
          'Processing, cleansing, and verifying the integrity of data used for analysis',
          'Performing data mining and analytics to support ongoing continuous risk monitoring',
          'Utilize data analysis by leveraging various statistical techniques',
          'Drive efficiency by automation of manual processes'
        ],
        requirements: [
          'Excellent understanding of machine learning algorithms',
          'Deep Knowledge of ML/AI software and packages',
          'Proficiency in statistics concepts',
          'Expertise in model validation and hyperparameter tuning',
          'Proficiency in using query languages such as SQL, spark',
          'Experience with Power BI, Python, PySpark',
          'Undergraduate degree in engineering with 4+ years experience'
        ],
        emailSubject: 'Application for Principal Analyst - Data Science',
        emailBody: 'Hi Sir\n\nI am interested in the Principal Analyst - Data Science position at I-RAY IT SOLUTIONS.\n\nPlease find my profile from attachment.\n\n\n'
      },

      'wlan-developer': {
        title: 'WLAN Developer',
        location: 'Hyderabad',
        type: 'Full Time',
        experience: '4+ Years',
        description: 'We are looking for an experienced WLAN Developer with expertise in wireless drivers and networking products.',
        responsibilities: [
          'Develop and maintain wireless drivers',
          'Work on networking products',
          'Implement and optimize wireless solutions',
          'Debug and troubleshoot driver issues',
          'Collaborate with the development team'
        ],
        requirements: [
          'Should have 4-8 years of Hands-on experience in wireless drivers (802.11ac or 11ax)',
          'Experience working on networking products required',
          'Hands on expertise in Atheros/Qualcomm wireless drivers is an added advantage',
          'Strong in C Programming and Data Structures',
          'Should be familiar with Linux kernel programming and device drivers',
          'Excellent analytical, problem-solving, programming and debugging skills required',
          'Good written, verbal communication and interpersonal skills required'
        ],
        emailSubject: 'Application for WLAN Developer',
        emailBody: 'Hi Sir\n\nI am interested in the WLAN Developer position at I-RAY IT SOLUTIONS.\n\nPlease find my profile from attachment.\n\n\n'
      },
      'bsp-driver': {
        title: 'BSP/Driver',
        location: 'Hyderabad',
        type: 'Full Time',
        experience: '3+ Years',
        description: 'We are seeking a BSP/Driver developer with experience in CPU initialization, system software, and driver development.',
        responsibilities: [
          'Development, testing and optimization of initialization routines for CPU',
          'Development of tests to validate complex system behavior',
          'Debug, root-cause analysis and fixing of issues in complex multi-processor systems',
          'Determine and maintain optimal configuration of control/configuration registers',
          'Performance analysis of various use-cases',
          'Porting of system software stacks/Drivers',
          'Develop prototype software for HW-SW architecture enhancements'
        ],
        requirements: [
          'Must be Proficient in C and MIPS assembly',
          'Basic knowledge of cross platform tool chains',
          'Basic knowledge of CPU architecture (MIPS and PowerPC)',
          'Understanding of memory organization, barriers, MMU',
          'Experience with bootloaders like u-boot, Redboot',
          'Experience with Linux kernel for MIPS/PowerPC platforms',
          'Knowledge of device driver programming',
          'Experience with debugging tools like Trace32, Logic Analyzers, Oscilloscope, J-Tag'
        ],
        emailSubject: 'Application for BSP/Driver',
        emailBody: 'Hi Sir\n\nI am interested in the BSP/Driver position at I-RAY IT SOLUTIONS.\n\nPlease find my profile from attachment.\n\n\n'
      }
    };

    // Modal functionality
    document.addEventListener('DOMContentLoaded', function() {
      const modal = document.getElementById('jobModal');
      const closeBtn = modal.querySelector('.job-modal__close');
      const jobCards = document.querySelectorAll('.job-card');

      jobCards.forEach(card => {
        card.addEventListener('click', function() {
          const jobId = this.dataset.job;
          const job = jobData[jobId];

          // Populate modal with job data
          modal.querySelector('.job-modal__title').textContent = job.title;
          modal.querySelector('.location-text').textContent = job.location;

          // Update description
          modal.querySelector('.job-description').textContent = job.description;

          // Update responsibilities
          const responsibilitiesList = document.createElement('ul');
          job.responsibilities.forEach(resp => {
            const li = document.createElement('li');
            li.textContent = resp;
            responsibilitiesList.appendChild(li);
          });
          modal.querySelector('.job-responsibilities').innerHTML = '';
          modal.querySelector('.job-responsibilities').appendChild(responsibilitiesList);

          // Update requirements
          const requirementsList = document.createElement('ul');
          job.requirements.forEach(req => {
            const li = document.createElement('li');
            li.textContent = req;
            requirementsList.appendChild(li);
          });
          modal.querySelector('.job-requirements').innerHTML = '';
          modal.querySelector('.job-requirements').appendChild(requirementsList);

          // Update apply button
          const applyBtn = modal.querySelector('.btn-apply');
          applyBtn.href = `mailto:info@I-RAYsolutions.com?subject=${encodeURIComponent(job.emailSubject)}&body=${encodeURIComponent(job.emailBody)}`;

          // Show modal
          modal.style.display = 'block';
          document.body.style.overflow = 'hidden';
        });
      });

      // Close modal functionality
      closeBtn.addEventListener('click', function() {
        modal.style.display = 'none';
        document.body.style.overflow = 'auto';
      });

      window.addEventListener('click', function(event) {
        if (event.target === modal) {
          modal.style.display = 'none';
          document.body.style.overflow = 'auto';
        }
      });
    });
  </script>
</body>

</html>