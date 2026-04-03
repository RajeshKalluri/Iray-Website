<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <meta name="description" content="Celebrating 10 Years of Excellence in IT Solutions - I-RAY IT Solutions Pvt. Ltd">
  <link href="assets/images/favicon/favicon.png" rel="icon">
  <title>10th Anniversary - I-RAY IT Solutions Pvt. Ltd</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:wght@400;500;600;700&amp;family=Roboto:wght@400;700&amp;display=swap">
  <link rel="stylesheet" href="assets/css/all.css">
  <link rel="stylesheet" href="assets/css/libraries.css">
  <link rel="stylesheet" href="assets/css/style.css">
  <style>
    .ceo-section {
      padding: 60px 0;
      background: #fff;
    }

    .ceo-content {
      display: flex;
      align-items: center;
      gap: 40px;
    }

    .ceo-image {
      flex: 1;
      max-width: 400px;
    }

    .ceo-image img {
      width: 100%;
      height: auto;
      border-radius: 10px;
      box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
    }

    .ceo-message {
      flex: 1;
    }

    .ceo-message h2 {
      color: #2c3e50;
      font-size: 2rem;
      margin-bottom: 20px;
    }

    .ceo-note {
      background: linear-gradient(90deg, #0272f6, #0272f6, #f27c25, #f27c25);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      display: inline-block;
    }


    .ceo-quote {
      font-size: 1.2rem;
      line-height: 1.8;
      color: #555;
      margin-bottom: 20px;
      font-style: italic;
    }

    .ceo-signature {
      font-weight: 600;
      color: #2c3e50;
      margin-top: 20px;
    }

    .ceo-role {
      color: #666;
      font-size: 1rem;
      margin-top: 5px;
    }

    .sports-section {
      background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
      padding: 80px 0;
      position: relative;
    }

    .sports-wrapper {
      width: 90%;
      margin: 0 auto;
      position: relative;
    }

    .sports-header {
      text-align: center;
      margin-bottom: 50px;
      position: relative;
    }

    .sports-header h2 {
      color: #2c3e50;
      font-size: 2.5rem;
      margin-bottom: 15px;
    }

    .sports-header p {
      color: #666;
      font-size: 1.1rem;
    }

    .sports-header:after {
      content: '';
      display: block;
      width: 80px;
      height: 3px;
      background: #3498db;
      margin: 20px auto;
    }

    .sports-container {
      position: relative;
      padding: 0 20px;
    }

    .sports-scroll {
      overflow-x: auto;
      overflow-y: hidden;
      white-space: nowrap;
      -webkit-overflow-scrolling: touch;
      scrollbar-width: none;
      padding: 20px 0;
      margin: 0 -10px;
    }

    .sports-scroll::-webkit-scrollbar {
      display: none;
    }

    .sports-row {
      display: inline-flex;
      gap: 15px;
      padding: 10px 5px;
    }

    .sports-col {
      width: 350px;
      height: 400px;
      display: inline-block;
      white-space: normal;
      vertical-align: top;
      padding: 0 5px;
    }

    .sports-card {
      background: white;
      border-radius: 15px;
      overflow: hidden;
      box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
      transition: transform 0.3s ease;
      height: 100%;
      display: flex;
      flex-direction: column;
    }

    .sports-card:hover {
      transform: translateY(-10px);
    }

    .sports-image-container {
      position: relative;
      width: 100%;
      padding-top: 66.67%;
      overflow: hidden;
    }

    .sports-card img {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      object-fit: cover;
    }

    .sports-content {
      padding: 25px;
      flex-grow: 1;
      display: flex;
      flex-direction: column;
    }

    .sports-title {
      color: #2c3e50;
      font-size: 1.5rem;
      margin-bottom: 15px;
      font-weight: 600;
    }

    .sports-description {
      color: #666;
      line-height: 1.6;
      margin-bottom: 0;
      flex-grow: 1;
    }

    .scroll-btn {
      position: absolute;
      top: 50%;
      transform: translateY(-50%);
      width: 40px;
      height: 40px;
      background: rgba(255, 255, 255, 0.9);
      border: none;
      border-radius: 50%;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
      cursor: pointer;
      z-index: 2;
      display: flex;
      align-items: center;
      justify-content: center;
      transition: all 0.3s ease;
    }

    .scroll-btn:hover {
      background: white;
      box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
    }

    .scroll-left {
      left: -5px;
    }

    .scroll-right {
      right: -5px;
    }

    .scroll-btn i {
      color: #2c3e50;
      font-size: 20px;
    }

    /* Video Player Styles */
    .video-container {
      position: relative;
      width: 100%;
      cursor: pointer;
    }

    .video-thumbnail {
      width: 100%;
      height: 100%;
      object-fit: cover;
      border-radius: 8px;
    }

    .play-button {
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      width: 80px;
      height: 80px;
      background: rgba(0, 0, 0, 0.7);
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      transition: all 0.3s ease;
    }

    .play-button:hover {
      background: rgba(0, 0, 0, 0.9);
      transform: translate(-50%, -50%) scale(1.1);
    }

    .play-button::after {
      content: '';
      width: 0;
      height: 0;
      border-style: solid;
      border-width: 15px 0 15px 25px;
      border-color: transparent transparent transparent #ffffff;
      margin-left: 5px;
    }

    /* Video Modal Styles */
    .video-modal {
      display: none;
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: rgba(0, 0, 0, 0.9);
      z-index: 1000;
      align-items: center;
      justify-content: center;
      padding: 20px;
    }

    .video-modal.active {
      display: flex;
    }

    .modal-content {
      position: relative;
      max-width: 90vw;
      max-height: 85vh;
      width: auto;
      height: auto;
      aspect-ratio: 16/9;
    }

    .about-layout2 {
      background: rgb(238, 240, 243);
    }

    .gallery-layout2 {
      background: #fff;
    }

    .modal-close {
      position: absolute;
      top: -40px;
      right: 0;
      color: #fff;
      font-size: 30px;
      cursor: pointer;
      background: none;
      border: none;
      padding: 5px;
    }

    .modal-video {
      width: 100%;
      height: 100%;
      object-fit: contain;
      background: #000;
    }

    @media (max-width: 768px) {
      .modal-content {
        max-width: 95vw;
        max-height: 80vh;
      }
    }

    .sports-winners-carousel-wrapper {
      position: relative;
      max-width: 1100px;
      margin: 0 auto 40px auto;
    }

    .sports-winners-carousel {
      display: flex;
      overflow-x: auto;
      scroll-behavior: smooth;
      gap: 24px;
      padding: 12px 0 24px 0;
    }

    .sports-winners-carousel::-webkit-scrollbar {
      display: none;
    }

    .winner-slide {
      min-width: 320px;
      max-width: 340px;
      flex: 0 0 auto;
      border-radius: 16px;
      overflow: hidden;
      box-shadow: 0 4px 16px rgba(2, 114, 246, 0.10), 0 2px 8px rgba(0, 0, 0, 0.06);
      position: relative;
      background: #fff;
      display: flex;
      flex-direction: column;
    }

    .winner-slide img {
      width: 100%;
      height: 220px;
      object-fit: cover;
      display: block;
    }

    .winner-label {
      position: absolute;
      bottom: 0;
      left: 0;
      width: 100%;
      background: linear-gradient(90deg, rgba(2, 114, 246, 0.92) 0%, rgba(242, 124, 37, 0.85) 100%);
      color: #fff;
      font-size: 1.08rem;
      font-weight: 600;
      padding: 12px 10px 10px 16px;
      text-align: center;
      letter-spacing: 0.5px;
      border-bottom-left-radius: 16px;
      border-bottom-right-radius: 16px;
      box-shadow: 0 2px 8px rgba(0, 0, 0, 0.10);
    }

    .carousel-btn {
      position: absolute;
      top: 50%;
      transform: translateY(-50%);
      width: 44px;
      height: 44px;
      background: #fff;
      border: none;
      border-radius: 50%;
      box-shadow: 0 2px 8px rgba(2, 114, 246, 0.10);
      cursor: pointer;
      z-index: 2;
      display: flex;
      align-items: center;
      justify-content: center;
      transition: background 0.2s;
    }

    .carousel-btn:hover {
      background: #f27c25;
      color: #fff;
    }

    .carousel-left {
      left: -22px;
    }

    .carousel-right {
      right: -22px;
    }

    .carousel-btn i {
      font-size: 1.3rem;
      color: #0272f6;
    }

    @media (max-width: 900px) {
      .ceo-content {
        flex-direction: column-reverse;
        gap: 24px;
        align-items: flex-start;
      }

      .about-layout2 .row.align-items-center {
        flex-direction: column-reverse;
      }

      .ceo-image {
        max-width: 100%;
        width: 100%;
        margin-bottom: 16px;
      }

      .ceo-message {
        width: 100%;
      }

      .ceo-message h2 {
        font-size: 1.5rem;
      }

      .ceo-quote {
        font-size: 1rem;
      }

      .winner-slide {
        min-width: 260px;
        max-width: 320px;
      }

      .winner-slide img {
        height: 160px;
      }

      .carousel-left {
        left: -12px;
        right: auto;
        top: 50%;
        bottom: auto;
        transform: translateY(-50%);
        margin: 0;
      }

      .carousel-right {
        right: -12px;
        left: auto;
        top: 50%;
        bottom: auto;
        transform: translateY(-50%);
        margin: 0;
      }
    }

    @media (max-width: 600px) {
      .ceo-section {
        padding: 32px 0 24px 0;
      }

      .ceo-content {
        flex-direction: column-reverse;
        gap: 16px;
        align-items: flex-start;
      }

      .about-layout2 .row.align-items-center {
        flex-direction: column-reverse;
      }

      .ceo-image {
        max-width: 100%;
        width: 100%;
        margin-bottom: 12px;
      }

      .ceo-message h2 {
        font-size: 1.15rem;
        margin-bottom: 12px;
      }

      .ceo-quote {
        font-size: 0.98rem;
        margin-bottom: 12px;
      }

      .ceo-signature {
        font-size: 1rem;
      }

      .ceo-role {
        font-size: 0.95rem;
      }

      .sports-winners-carousel-wrapper {
        max-width: 100vw;
        padding: 0 2vw;
      }

      .winner-slide {
        min-width: 90vw;
        max-width: 95vw;
        border-radius: 10px;
      }

      .winner-slide img {
        height: 38vw;
        min-height: 120px;
        max-height: 180px;
      }

      .winner-label {
        font-size: 1.05rem;
        padding: 10px 6px 10px 10px;
      }

      .carousel-btn {
        width: 36px;
        height: 36px;
        font-size: 1rem;
      }

      .carousel-left {
        left: 0;
        right: auto;
        top: 50%;
        bottom: auto;
        transform: translateY(-50%);
        margin: 0;
      }

      .carousel-right {
        right: 0;
        left: auto;
        top: 50%;
        bottom: auto;
        transform: translateY(-50%);
        margin: 0;
      }
    }
  </style>
</head>

<body>
  <div class="wrapper">
    <?php include 'header.php'; ?>

    <section class="page-title page-title-layout11 bg-overlay bg-overlay-gradient bg-parallax text-center">
      <div class="bg-img"><img src="assets/images/10th_Anniversary/photos-129.JPG" alt="background"></div>
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-12 col-xl-6 offset-xl-3">
            <h1 class="pagetitle__heading">10th Anniversary Celebration</h1>
            <p class="pagetitle__desc mb-0">A Decade of Innovation, Growth, and Success</p>
          </div>
        </div>
      </div>
    </section>

    <section class="about-layout2 pt-70 pb-50">
      <div class="container">
        <div class="row align-items-center">

          <div class="col-sm-12 col-md-12 col-lg-12 col-xl-6">
            <h5 class="mb-2">Celebrating a Decade of Excellence</h5>
            <p>As we mark our 10th anniversary, we reflect on an incredible journey of growth, innovation, and success. What started as a small IT solutions company has blossomed into a trusted partner for businesses worldwide.</p>
            <p>Over the past decade, we've achieved numerous milestones, built lasting relationships with our clients, and continuously evolved to meet the changing needs of the digital landscape. Our commitment to excellence and innovation has remained unwavering throughout this journey.</p>
          </div>
          <div class="col-sm-12 col-md-12 col-lg-12 col-xl-6">
            <div class="about__img mb-20">
              <img src="assets/images/10th_Anniversary/photos-159.JPG" alt="10th Anniversary Celebration" class="video-thumbnail">

              <!-- <div class="video-container" onclick="openVideoModal()">
                <img src="assets/images/10th_Anniversary/photos-159.JPG" alt="10th Anniversary Celebration" class="video-thumbnail">
                <div class="play-button"></div>
              </div> -->
            </div>
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
            <h2 class="ceo-note">A note from our CEO</h2>
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
            <div class="ceo-role">CEO & Delivery Head</div>
          </div>
        </div>
      </div>
    </section>
    <section class="sports-section">
      <div class="container">
        <div class="sports-header">
          <h2>Sports & Team Building Activities</h2>
          <p>Celebrating our anniversary with team spirit and healthy competition</p>
        </div>
        <!-- Intro about sports and anniversary games -->
        <div class="sports-intro" style="max-width: 800px; margin: 0 auto 32px auto; text-align: center; font-size: 1.15rem; color: #333;">
          <p>At I-RAY, our 10th Anniversary was not just a celebration of professional milestones, but also of team spirit, camaraderie, and the joy of sports. We believe that sports are essential for building strong teams, fostering healthy competition, and promoting well-being beyond the workplace.</p>
          <p>The anniversary games brought together employees from all departments, igniting passion and unity. Congratulations to all the winners and participants who made these events memorable!</p>
        </div>
        <!-- Winners Carousel -->
        <div class="sports-winners-carousel-wrapper">
          <div class="sports-winners-carousel" id="sportsWinnersCarousel">
            <div class="winner-slide" data-img="assets/images/10th_Anniversary/Sports/Cricket Winners.JPG" data-label="Cricket Winners">
              <img src="assets/images/10th_Anniversary/Sports/Cricket Winners.JPG" alt="Cricket Winners">
              <div class="winner-label">Cricket Winners</div>
            </div>
            <div class="winner-slide" data-img="assets/images/10th_Anniversary/Sports/Volleyball Winnes.JPG" data-label="Volleyball Winners">
              <img src="assets/images/10th_Anniversary/Sports/Volleyball Winnes.JPG" alt="Volleyball Winners">
              <div class="winner-label">Volleyball Winners</div>
            </div>
            <div class="winner-slide" data-img="assets/images/10th_Anniversary/Sports/Chess Winner.JPG" data-label="Chess Winner">
              <img src="assets/images/10th_Anniversary/Sports/Chess Winner.JPG" alt="Chess Winner">
              <div class="winner-label">Chess Winner</div>
            </div>
            <div class="winner-slide" data-img="assets/images/10th_Anniversary/Sports/MBSW Prasad P.JPG" data-label="Men's Badminton Singles Winner">
              <img src="assets/images/10th_Anniversary/Sports/MBSW Prasad P.JPG" alt="Men's Badminton Singles Winner">
              <div class="winner-label">Men's Badminton Singles Winner</div>
            </div>
            <div class="winner-slide" data-img="assets/images/10th_Anniversary/Sports/WBSW Sai Sri.JPG" data-label="Women's Badminton Singles Winner">
              <img src="assets/images/10th_Anniversary/Sports/WBSW Sai Sri.JPG" alt="Women's Badminton Singles Winner">
              <div class="winner-label">Women's Badminton Singles Winner</div>
            </div>
            <div class="winner-slide" data-img="assets/images/10th_Anniversary/Sports/MBDW .JPG" data-label="Men's Badminton Doubles Winners">
              <img src="assets/images/10th_Anniversary/Sports/MBDW .JPG" alt="Men's Badminton Doubles Winners">
              <div class="winner-label">Men's Badminton Doubles Winners</div>
            </div>
            <div class="winner-slide" data-img="assets/images/10th_Anniversary/Sports/WBDW.JPG" data-label="Women's Badminton Doubles Winners">
              <img src="assets/images/10th_Anniversary/Sports/WBDW.JPG" alt="Women's Badminton Doubles Winners">
              <div class="winner-label">Women's Badminton Doubles Winners</div>
            </div>
            <div class="winner-slide" data-img="assets/images/10th_Anniversary/Sports/BMDW.JPG" data-label="Badminton Mixed Doubles Winners">
              <img src="assets/images/10th_Anniversary/Sports/BMDW.JPG" alt="Badminton Mixed Doubles Winners">
              <div class="winner-label">Badminton Mixed Doubles Winners</div>
            </div>
            <div class="winner-slide" data-img="assets/images/10th_Anniversary/Sports/MCSW.JPG" data-label="Men's Carroms Singles Winner">
              <img src="assets/images/10th_Anniversary/Sports/MCSW.JPG" alt="Men's Carroms Singles Winner">
              <div class="winner-label">Men's Carroms Singles Winner</div>
            </div>
            <div class="winner-slide" data-img="assets/images/10th_Anniversary/Sports/WCSW.JPG" data-label="Women's Carroms Singles Winner">
              <img src="assets/images/10th_Anniversary/Sports/WCSW.JPG" alt="Women's Carroms Singles Winner">
              <div class="winner-label">Women's Carroms Singles Winner</div>
            </div>
            <div class="winner-slide" data-img="assets/images/10th_Anniversary/Sports/CDW.JPG" data-label="Carroms Doubles Winners">
              <img src="assets/images/10th_Anniversary/Sports/CDW.JPG" alt="Carroms Doubles Winners">
              <div class="winner-label">Carroms Doubles Winners</div>
            </div>
            <div class="winner-slide" data-img="assets/images/10th_Anniversary/Sports/Throwball Winners.JPG" data-label="Throwball Winners">
              <img src="assets/images/10th_Anniversary/Sports/Throwball Winners.JPG" alt="Throwball Winners">
              <div class="winner-label">Throwball Winners</div>
            </div>

          </div>
          <button class="carousel-btn carousel-left" onclick="scrollWinnersCarousel('left')"><i class="fas fa-chevron-left"></i></button>
          <button class="carousel-btn carousel-right" onclick="scrollWinnersCarousel('right')"><i class="fas fa-chevron-right"></i></button>
        </div>
        <!-- Games Description -->
        <div class="sports-games-desc" style="max-width: 800px; margin: 32px auto 0 auto; text-align: center; font-size: 1.08rem; color: #444;">
          <p>A variety of games were held, including cricket, volleyball, throwball, badminton, chess, and carroms. Each event was a testament to our team's enthusiasm and sportsmanship. The winners demonstrated exceptional skill and determination, inspiring everyone to strive for excellence both on and off the field.</p>
          <p>Sports at I-RAY are more than just games—they are a celebration of our values: teamwork, perseverance, and joy. We look forward to many more years of spirited competition and shared victories!</p>
        </div>
      </div>
    </section>
    <section class="gallery-layout2 pt-70 pb-50">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-12">
            <h3 class="text-center mb-50">Memorable Moments</h3>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-12 col-md-6 col-lg-3">
            <div class="gallery-item">
              <img src="assets/images/10th_Anniversary/photos-166.JPG" alt="Anniversary Celebration" class="img-fluid">
            </div>
          </div>
          <div class="col-sm-12 col-md-6 col-lg-3">
            <div class="gallery-item">
              <img src="assets/images/10th_Anniversary/photos-129.JPG" alt="Team Celebration" class="img-fluid">
            </div>
          </div>

          <div class="col-sm-12 col-md-6 col-lg-3">
            <div class="gallery-item">
              <img src="assets/images/10th_Anniversary/photos-1214.JPG" alt="Celebration Moment" class="img-fluid">
            </div>
          </div>
          <div class="col-sm-12 col-md-6 col-lg-3">
            <div class="gallery-item">
              <img src="assets/images/10th_Anniversary/photos-835.JPG" alt="Anniversary Event" class="img-fluid">
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="gallery-layout2 pt-0 pb-50">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-12">
            <h5 class="mb-2">Looking Forward to the Next Decade</h5>
            <p>As we celebrate this significant milestone, we're not just looking back at our achievements but also forward to the exciting opportunities that lie ahead. Our vision for the next decade is to continue pushing boundaries, embracing new technologies, and delivering even greater value to our clients.</p>
            <p>We extend our heartfelt gratitude to our clients, partners, and team members who have been instrumental in our success. Together, we look forward to creating many more milestones in the years to come.</p>
          </div>
        </div>
      </div>
    </section>

    <?php include 'footer.php'; ?>
  </div>

  <!-- Video Modal -->
  <div class="video-modal" id="videoModal">
    <div class="modal-content">
      <button class="modal-close" onclick="closeVideoModal()">×</button>
      <video class="modal-video" id="modalVideo" controls>
        <source src="assets/videos/10th_Aniversay.mp4" type="video/mp4">
        Your browser does not support the video tag.
      </video>
    </div>
  </div>

  <!-- Modal for sports winner images -->
  <div class="sports-modal" id="sportsModal" style="display:none; position:fixed; top:0; left:0; width:100vw; height:100vh; background:rgba(0,0,0,0.85); z-index:2000; align-items:center; justify-content:center;">
    <div class="sports-modal-content" style="position:relative; max-width:90vw; max-height:90vh; background:#fff; border-radius:14px; box-shadow:0 8px 32px rgba(0,0,0,0.25); display:flex; flex-direction:column; align-items:center;">
      <button class="sports-modal-close" onclick="closeSportsModal()" style="position:absolute; top:10px; right:16px; background:none; border:none; color:#222; font-size:2rem; cursor:pointer; z-index:2;">&times;</button>
      <img id="sportsModalImg" src="" alt="Winner" style="max-width:80vw; max-height:60vh; border-radius:10px; margin:40px 0 10px 0; box-shadow:0 2px 12px rgba(2,114,246,0.10);">
      <div id="sportsModalLabel" style="font-size:1.25rem; font-weight:600; color:#0272f6; margin-bottom:32px; text-align:center;"></div>
    </div>
  </div>

  <script src="assets/js/jquery-3.5.1.min.js"></script>
  <script src="assets/js/plugins.js"></script>
  <script src="assets/js/main.js"></script>
  <script>
    function scrollCards(direction) {
      const container = document.getElementById('sportsScroll');
      const scrollAmount = 400; // Adjust scroll amount as needed

      if (direction === 'left') {
        container.scrollBy({
          left: -scrollAmount,
          behavior: 'smooth'
        });
      } else {
        container.scrollBy({
          left: scrollAmount,
          behavior: 'smooth'
        });
      }
    }

    // Show/hide scroll buttons based on scroll position
    document.getElementById('sportsScroll').addEventListener('scroll', function() {
      const scrollLeft = document.querySelector('.scroll-left');
      const scrollRight = document.querySelector('.scroll-right');

      if (this.scrollLeft <= 0) {
        scrollLeft.style.opacity = '0.5';
      } else {
        scrollLeft.style.opacity = '1';
      }

      if (this.scrollLeft >= (this.scrollWidth - this.clientWidth)) {
        scrollRight.style.opacity = '0.5';
      } else {
        scrollRight.style.opacity = '1';
      }
    });

    function openVideoModal() {
      const modal = document.getElementById('videoModal');
      const video = document.getElementById('modalVideo');
      modal.classList.add('active');
      video.play();
    }

    function closeVideoModal() {
      const modal = document.getElementById('videoModal');
      const video = document.getElementById('modalVideo');
      modal.classList.remove('active');
      video.pause();
      video.currentTime = 0;
    }

    // Close modal when clicking outside the video
    document.getElementById('videoModal').addEventListener('click', function(e) {
      if (e.target === this) {
        closeVideoModal();
      }
    });

    // Close modal on escape key press
    document.addEventListener('keydown', function(e) {
      if (e.key === 'Escape' && document.getElementById('videoModal').classList.contains('active')) {
        closeVideoModal();
      }
    });

    function scrollWinnersCarousel(direction) {
      const container = document.getElementById('sportsWinnersCarousel');
      const scrollAmount = 350;
      if (direction === 'left') {
        container.scrollBy({
          left: -scrollAmount,
          behavior: 'smooth'
        });
      } else {
        container.scrollBy({
          left: scrollAmount,
          behavior: 'smooth'
        });
      }
    }

    document.addEventListener('DOMContentLoaded', function() {
      // Modal popup for sports winner images
      const winnerSlides = document.querySelectorAll('.winner-slide');
      const sportsModal = document.getElementById('sportsModal');
      const sportsModalImg = document.getElementById('sportsModalImg');
      const sportsModalLabel = document.getElementById('sportsModalLabel');
      winnerSlides.forEach(slide => {
        slide.style.cursor = 'pointer';
        slide.onclick = function() {
          sportsModalImg.src = slide.getAttribute('data-img');
          sportsModalLabel.textContent = slide.getAttribute('data-label');
          sportsModal.style.display = 'flex';
          document.body.style.overflow = 'hidden';
        };
      });
      window.closeSportsModal = function() {
        sportsModal.style.display = 'none';
        sportsModalImg.src = '';
        sportsModalLabel.textContent = '';
        document.body.style.overflow = '';
      }
      sportsModal.onclick = function(e) {
        if (e.target === sportsModal) window.closeSportsModal();
      };
      document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape' && sportsModal.style.display === 'flex') window.closeSportsModal();
      });
    });
  </script>
</body>

</html>