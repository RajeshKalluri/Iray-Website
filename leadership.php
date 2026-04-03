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
    /* Leadership Section Styles */
    .leadership-section {
      padding: 80px 0;
      background: #f8f9fa;
    }

    .ceo-section {
      padding: 100px 0;
      background: linear-gradient(135deg, #fff 0%, #f8f9fa 100%);
      position: relative;
      overflow: hidden;
    }

    .ceo-section::before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: linear-gradient(45deg, rgba(2, 114, 246, 0.05) 0%, rgba(242, 124, 37, 0.05) 100%);
      z-index: 1;
    }

    .ceo-content {
      position: relative;
      z-index: 2;
      display: flex;
      align-items: center;
      gap: 60px;
      opacity: 0;
      animation: fadeInUp 1s ease forwards;
    }

    .ceo-image {
      flex: 1;
      max-width: 450px;
      position: relative;
      opacity: 0;
      transform: translateX(-50px);
      animation: slideInLeft 1s ease 0.3s forwards;
      cursor: pointer;
      perspective: 1000px;
    }

    .ceo-image::after {
      content: '';
      position: absolute;
      top: 20px;
      left: 20px;
      right: -20px;
      bottom: -20px;
      border: 2px solid #0272f6;
      border-radius: 10px;
      z-index: -1;
      opacity: 0;
      animation: borderFade 1s ease 1s forwards;
      transition: all 0.3s ease;
    }

    .ceo-image:hover::after {
      transform: translate(-5px, -5px);
      border-color: #f27c25;
    }

    .ceo-image img {
      width: 100%;
      height: auto;
      border-radius: 10px;
      box-shadow: 0 15px 35px rgba(0, 0, 0, 0.15);
      transition: all 0.5s ease;
      transform-style: preserve-3d;
    }

    .ceo-image:hover img {
      transform: translate(-5px, -5px) rotateY(5deg);
      box-shadow: 0 20px 40px rgba(2, 114, 246, 0.2);
    }

    .ceo-message {
      flex: 1;
      opacity: 1;
      transform: translateX(0);
      transition: all 0.8s ease;
    }

    .ceo-section:hover .ceo-message {
      transform: translateX(20px);
    }

    .ceo-message h2 {
      color: #2c3e50;
      font-size: 2rem;
      margin-bottom: 20px;
    }

    .ceo-quote {
      font-size: 1.25rem;
      line-height: 1.8;
      color: #2c3e50;
      margin-bottom: 30px;
      font-style: italic;
      position: relative;
      padding-left: 30px;
      border-left: 3px solid #0272f6;
      transition: all 0.3s ease;
    }

    .ceo-section:hover .ceo-quote {
      border-left-color: #f27c25;
      transform: translateX(5px);
      background: linear-gradient(90deg, rgba(2, 114, 246, 0.03), transparent);
    }

    .ceo-quote::before {
      content: '"';
      font-size: 4rem;
      color: rgba(2, 114, 246, 0.1);
      position: absolute;
      top: -20px;
      left: -20px;
      font-family: Georgia, serif;
    }

    .ceo-signature {
      font-weight: 600;
      color: #2c3e50;
      margin-top: 20px;
      font-size: 1.2rem;
      display: inline-block;
      position: relative;
      padding-bottom: 5px;
      transition: all 0.3s ease;
    }

    .ceo-section:hover .ceo-signature {
      color: #0272f6;
      transform: translateY(-2px);
    }

    .ceo-signature::after {
      content: '';
      position: absolute;
      bottom: 0;
      left: 0;
      width: 100%;
      height: 2px;
      background: linear-gradient(90deg, #0272f6, #f27c25);
      transform: scaleX(0);
      transform-origin: left;
      transition: transform 0.3s ease;
    }

    .ceo-section:hover .ceo-signature::after {
      transform: scaleX(1);
    }

    .ceo-role {
      color: #666;
      font-size: 1rem;
      margin-top: 5px;
      opacity: 1;
      transition: all 0.3s ease;
    }

    .ceo-section:hover .ceo-role {
      transform: translateY(-2px);
    }

    .team-grid {
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      gap: 40px;
      margin-top: 40px;
      max-width: 1200px;
      margin-left: auto;
      margin-right: auto;
      padding: 0 20px;
    }

    .team-card {
      background: #fff;
      border-radius: 12px;
      overflow: hidden;
      transition: all 0.4s ease;
      text-align: center;
      position: relative;
      box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1);
      display: flex;
      flex-direction: column;
    }

    .team-card::before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
      background: linear-gradient(135deg, rgba(2, 114, 246, 0.05), rgba(242, 124, 37, 0.05));
      opacity: 0;
      transition: opacity 0.4s ease;
      z-index: 1;
      pointer-events: none;
    }

    .team-card:hover {
      transform: translateY(-10px);
      box-shadow: 0 15px 30px rgba(0, 0, 0, 0.15);
    }

    .team-card:hover::before {
      opacity: 1;
    }

    .team-image {
      width: 100%;
      padding-bottom: 100%;
      position: relative;
      overflow: hidden;
      background: #f5f5f5;
    }

    .team-image::after {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
      background: linear-gradient(180deg, rgba(2, 114, 246, 0.1), rgba(242, 124, 37, 0.1));
      opacity: 0;
      transition: opacity 0.4s ease;
      z-index: 1;
    }

    .team-card:hover .team-image::after {
      opacity: 1;
    }

    .team-image img {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      object-fit: cover;
      object-position: top;
      transition: transform 0.4s ease;
    }

    .team-card:hover .team-image img {
      transform: scale(1.08);
    }

    .team-info {
      padding: 25px 20px;
      background: #fff;
      flex-grow: 1;
      display: flex;
      flex-direction: column;
      justify-content: center;
      min-height: 120px;
      position: relative;
      z-index: 2;
      transition: all 0.4s ease;
    }

    .team-card:hover .team-info {
      background: #f8f9fa;
    }

    .team-name {
      font-size: 1.4rem;
      color: #2c3e50;
      margin-bottom: 12px;
      font-weight: 600;
      line-height: 1.2;
      transition: color 0.4s ease;
    }

    .team-card:hover .team-name {
      color: #0272f6;
    }

    .team-role {
      color: #666;
      font-size: 0.70rem;
      text-transform: uppercase;
      letter-spacing: 1.5px;
      font-weight: 500;
      margin: 0;
      line-height: 1.4;
      transition: color 0.4s ease;
    }

    .team-card:hover .team-role {
      color: #f27c25;
    }

    .leadership-color {
      font-size: 2.5rem;
      font-weight: 700;
      margin-bottom: 50px;
      background: linear-gradient(90deg, #0272f6, #0272f6, #f27c25, #f27c25);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      text-transform: uppercase;
    }

    @media (max-width: 1200px) {
      .team-grid {
        grid-template-columns: repeat(2, 1fr);
        gap: 30px;
      }
    }

    @media (max-width: 768px) {
      .team-grid {
        grid-template-columns: repeat(1, 1fr);
        max-width: 400px;
        margin: 20px auto;
      }

      .team-name {
        font-size: 1.3rem;
      }

      .leadership-color {
        font-size: 2rem;
        padding: 0 20px;
      }

      .team-info {
        min-height: 100px;
      }
    }

    @keyframes fadeInUp {
      from {
        opacity: 0;
        transform: translateY(30px);
      }

      to {
        opacity: 1;
        transform: translateY(0);
      }
    }

    @keyframes slideInLeft {
      from {
        opacity: 0;
        transform: translateX(-50px);
      }

      to {
        opacity: 1;
        transform: translateX(0);
      }
    }

    @keyframes slideInRight {
      from {
        opacity: 0;
        transform: translateX(50px);
      }

      to {
        opacity: 1;
        transform: translateX(0);
      }
    }

    @keyframes borderFade {
      from {
        opacity: 0;
      }

      to {
        opacity: 1;
      }
    }

    @keyframes lineGrow {
      from {
        transform: scaleX(0);
      }

      to {
        transform: scaleX(1);
      }
    }

    @keyframes fadeIn {
      from {
        opacity: 0;
      }

      to {
        opacity: 1;
      }
    }

    @media (max-width: 991px) {
      .ceo-content {
        flex-direction: column;
        gap: 40px;
        text-align: center;
      }

      .ceo-image {
        max-width: 350px;
        margin: 0 auto;
      }

      .ceo-quote {
        padding-left: 0;
        border-left: none;
        padding: 0 20px;
      }

      .ceo-quote::before {
        left: 0;
      }
    }

    @media (max-width: 768px) {
      .ceo-section {
        padding: 60px 0;
      }

      .ceo-quote {
        font-size: 1.1rem;
      }
    }
  </style>
</head>

<body>
  <div class="wrapper">
    <?php include 'header.php'; ?>
    <section class="page-title page-title-layout11 bg-overlay bg-overlay-gradient bg-parallax text-center">
      <div class="bg-img"><img src="assets/images/Leaders/group_photo.JPG" alt="background"></div>
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-12 col-xl-6 offset-xl-3">
            <h1 class="pagetitle__heading">Our Leadership</h1>
          </div>
        </div>
      </div>
    </section>
    <section class="ceo-section">
      <div class="container">
        <div class="ceo-content">
          <div class="ceo-image">
            <img src="assets/images/Leaders/Satya_Kayala2.JPG" alt="Satya Kayala">
          </div>
          <div class="ceo-message">
            <p class="ceo-quote">
              As we mark 10 years of i-Ray, I want to thank each
              one of you. This achievement is not about one person
              —it's about all of us. Our journey has been built on
              teamwork, dedication, and strong relationships. Every
              challenge we faced, we overcame together and our
              success is because of the hard work & commitment of
              our amazing team. As we step into the future, let's
              continue growing and achieving more together. Here's
              to many more successful years ahead!
            </p>
            <div class="ceo-signature">- Satya Kayala</div>
            <div class="ceo-role">M.D & Delivery Head</div>
          </div>
        </div>
      </div>
    </section>

    <section class="leadership-section">
      <div class="container">
        <h2 class="leadership-color text-center">Our Leadership Team</h2>
        <div class="team-grid">
          <div class="team-card">
            <div class="team-image">
              <img src="assets/images/Leaders/RAJESH1.jpg" alt="Rajesh">
            </div>
            <div class="team-info">
              <h3 class="team-name">Rajesh Nakka</h3>
              <p class="team-role">Technical Manager </p>
            </div>
          </div>
          <div class="team-card">
            <div class="team-image">
              <img src="assets/images/Leaders/PRASAD.jpg" alt="Prasad">
            </div>
            <div class="team-info">
              <h3 class="team-name">Prasad Puvvala</h3>
              <p class="team-role">Technical Manager </p>
            </div>
          </div>
          <div class="team-card">
            <div class="team-image">
              <img src="assets/images/Leaders/RAVI1.jpg" alt="Ravi">
            </div>
            <div class="team-info">
              <h3 class="team-name">Raviprakash Akkipeddi</h3>
              <p class="team-role">Technology Architect</p>
            </div>
          </div>
          <div class="team-card">
            <div class="team-image">
              <img src="assets/images/Leaders/RAGHU1.jpg" alt="Raghu">
            </div>
            <div class="team-info">
              <h3 class="team-name">Raghavendraswamy Saini</h3>
              <p class="team-role">Manager Quality /Technical</p>
            </div>
          </div>

          <div class="team-card">
            <div class="team-image">
              <img src="assets/images/Leaders/TEJ.jpg" alt="Tej">
            </div>
            <div class="team-info">
              <h3 class="team-name">Tej Deep Porala</h3>
              <p class="team-role">Technical Manager</p>
            </div>
          </div>

          <div class="team-card">
            <div class="team-image">
              <img src="assets/images/Leaders/HR.jpg" alt="Sravan">
            </div>
            <div class="team-info">
              <h3 class="team-name">Sravan Kumar Palaparthi</h3>
              <p class="team-role">Cheif People Officer</p>
            </div>
          </div>
        </div>
      </div>
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