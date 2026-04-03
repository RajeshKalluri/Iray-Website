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
    /* Testimonials Section Styles */
    .testimonials-section {
      padding: 60px 0;
      background: linear-gradient(135deg, #0396FF 0%, #0D47A1 100%);
      position: relative;
      overflow: hidden;
      min-height: 600px;
    }

    .testimonials-title {
      text-align: center;
      color: #fff;
      font-size: 2rem;
      font-weight: 700;
      margin-bottom: 10px;
      text-transform: uppercase;
    }


    .partners-title {
      text-align: center;
      color: #f39c12;
      font-size: 2rem;
      font-weight: 700;
      margin-bottom: 40px;
      text-transform: uppercase;
    }

    .testimonials-subtitle {
      text-align: center;
      color: #fff;
      font-size: 1.1rem;
      max-width: 800px;
      margin-left: auto;
      margin-right: auto;
      line-height: 1.6;
    }

    .testimonial-slider {
      position: relative;
      max-width: 1400px;
      margin: 0 auto;
      padding: 40px 0;
      overflow: hidden;
    }

    .testimonial-grid {
      display: flex;
      align-items: center;
      position: relative;
      transition: all 0.5s ease;
      min-height: 500px;
      transform-style: preserve-3d;
      width: 100%;
    }

    .testimonial-card {
      position: absolute;
      background: #ffffff;
      border-radius: 15px;
      padding: 30px;
      text-align: center;
      box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1);
      transition: all 0.8s ease;
      width: 300px;
      height: 400px;
      left: 50%;
      opacity: 0;
      display: flex;
      flex-direction: column;
      align-items: center;
      transform: translateX(-50%) scale(0.8);
      pointer-events: none;
      cursor: pointer;
    }

    .testimonial-card.active {
      transform: translateX(-50%) scale(1);
      opacity: 1;
      z-index: 5;
      pointer-events: auto;
      width: 350px;
      height: 450px;
    }

    .testimonial-card.prev {
      transform: translateX(-150%) scale(0.8);
      opacity: 0.7;
      z-index: 4;
    }

    .testimonial-card.next {
      transform: translateX(50%) scale(0.8);
      opacity: 0.7;
      z-index: 4;
    }

    .testimonial-card.prev-out {
      transform: translateX(-250%) scale(0.8);
      opacity: 0.3;
      z-index: 3;
    }

    .testimonial-card.next-out {
      transform: translateX(150%) scale(0.8);
      opacity: 0.3;
      z-index: 3;
    }

    .client-image-wrapper {
      width: 80px;
      height: 80px;
      border-radius: 50%;
      overflow: hidden;
      margin: 0 auto 20px;
      border: 4px solid #fff;
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
      flex-shrink: 0;
    }

    .client-image {
      width: 100%;
      height: 100%;
      object-fit: cover;
    }

    .client-name {
      color: #333;
      font-size: 1.25rem;
      font-weight: 600;
      margin: 0 0 5px;
    }

    .client-position {
      color: #666;
      font-size: 12px;
      margin-bottom: 20px;
      min-height: 30px;
    }

    .testimonial-text {
      color: #444;
      font-size: 14px;
      line-height: 1.6;
      margin: 0;
      font-style: italic;
      overflow-y: auto;
      flex-grow: 1;
      padding: 0 10px;
    }

    .slider-nav {
      position: absolute;
      top: 50%;
      transform: translateY(-50%);
      width: 40px;
      height: 40px;
      background: rgba(255, 255, 255, 0.2);
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      cursor: pointer;
      transition: all 0.3s ease;
      z-index: 3;
      color: white;
      font-size: 20px;
    }

    .slider-nav:hover {
      background: rgba(255, 255, 255, 0.4);
    }

    .slider-nav.prev {
      left: 50px;
    }

    .slider-nav.next {
      right: 50px;
    }

    .slider-dots {
      display: flex;
      justify-content: center;
      gap: 10px;
      margin-top: 10px;
    }

    .dot {
      width: 10px;
      height: 10px;
      border-radius: 50%;
      background: rgba(255, 255, 255, 0.3);
      cursor: pointer;
      transition: all 0.3s ease;
    }

    .dot.active {
      background: #fff;
      transform: scale(1.2);
    }

    @media (max-width: 1200px) {
      .testimonial-card {
        width: 280px;
        height: 420px;
      }

      .testimonial-card.active {
        width: 320px;
        height: 450px;
      }

      .testimonial-card.prev {
        transform: translateX(-130%) scale(0.8);
      }

      .testimonial-card.next {
        transform: translateX(30%) scale(0.8);
      }
    }

    @media (max-width: 768px) {
      .testimonial-card {
        width: 260px;
        height: 400px;
      }

      .testimonial-card.active {
        width: 300px;
        height: 420px;
      }

      .testimonial-card.prev,
      .testimonial-card.next,
      .testimonial-card.prev-out,
      .testimonial-card.next-out {
        opacity: 0;
        pointer-events: none;
      }
    }

    /* Custom scrollbar for testimonial text */
    .testimonial-text::-webkit-scrollbar {
      width: 4px;
    }

    .testimonial-text::-webkit-scrollbar-track {
      background: #f1f1f1;
      border-radius: 2px;
    }

    .testimonial-text::-webkit-scrollbar-thumb {
      background: #888;
      border-radius: 2px;
    }

    .testimonial-text::-webkit-scrollbar-thumb:hover {
      background: #555;
    }

    /* Partners Section Styles */
    .partners-section {
      background-color: #f8f9fa;
      padding: 80px 0;
    }

    .partners-grid {
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      gap: 30px;
      max-width: 1200px;
      margin: 0 auto;
      padding: 0 20px;
    }

    .partner-card {
      background: #ffffff;
      border-radius: 12px;
      padding: 40px;
      display: flex;
      flex-direction: column;
      align-items: flex-start;
      box-shadow: 0 2px 15px rgba(0, 0, 0, 0.05);
      border: 1px solid #eaeaea;
      transition: transform 0.3s ease;
    }

    .partner-card:hover {
      transform: translateY(-5px);
    }

    .partner-logo {
      height: 50px;
      width: auto;
      margin-bottom: 30px;
      object-fit: contain;
      object-position: left;
    }

    .partner-description {
      color: #2D3748;
      font-size: 15px;
      line-height: 1.6;
      margin: 0;
      text-align: left;
      font-weight: 400;
    }

    @media (max-width: 1200px) {
      .partners-grid {
        grid-template-columns: repeat(2, 1fr);
        gap: 30px;
      }
    }

    @media (max-width: 768px) {
      .partners-grid {
        grid-template-columns: 1fr;
        gap: 20px;
      }

      .partner-card {
        margin: 0 20px;
      }
    }
  </style>

  <style>
    ul li {
      font-size: 15px;
      margin-bottom: 2px;
    }

    ol li {
      font-size: 15px;
      margin-bottom: 5px;
    }
  </style>
</head>

<body>
  <div class="wrapper">

    <?php include 'header.php'; ?>

    <section class="page-title page-title-layout11 bg-overlay bg-overlay-gradient bg-parallax text-center">
      <div class="bg-img"><img src="assets/images/clients/photos-166.JPG" alt=""></div>
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-12 col-xl-6 offset-xl-3">
            <h1 class="pagetitle__heading">Client Testimonials</h1>
          </div>
        </div>
      </div>
    </section>


    <section class="partners-section">
      <div class="container">
        <h2 class="partners-title" style="margin-top: 0;">OUR PARTNERS</h2>
        <div class="partners-grid">
          <div class="partner-card">
            <img src="assets/images/gn.jpg" alt="GN" class="partner-logo">
            <p class="partner-description">GN's long-standing partnership with I-RAY delivers comprehensive software solutions and technical expertise in hearing technology.</p>
          </div>
          <div class="partner-card">
            <img src="assets/images/atlas.jpg" alt="Atlas" class="partner-logo">
            <p class="partner-description">Atlas's collaboration with I-RAY delivers integrated solutions that encompass hardware, software, and business services to meet diverse client needs.</p>
          </div>
          <div class="partner-card">
            <img src="assets/images/beltone.jpg" alt="Beltone" class="partner-logo">
            <p class="partner-description">Beltone and I-RAY's partnership focuses on developing innovative hearing solutions and software systems for enhanced patient care.</p>
          </div>
          <div class="partner-card">
            <img src="assets/images/colibri.jpg" alt="Colibri" class="partner-logo">
            <p class="partner-description">Colibri partners with I-RAY to deliver cutting-edge software solutions and technical expertise in hearing healthcare technology.</p>
          </div>
          <div class="partner-card">
            <img src="assets/images/progressive.jpg" alt="Progressive" class="partner-logo">
            <p class="partner-description">Progressive and I-RAY work together to create advanced software solutions that drive innovation in hearing aid technology.</p>
          </div>
          <div class="partner-card">
            <img src="assets/images/ikonic-it-solutions.jpg" alt="Ikonic IT Solutions" class="partner-logo">
            <p class="partner-description">Ikonic IT Solutions collaborates with I-RAY to provide comprehensive IT services and software development solutions.</p>
          </div>
          <div class="partner-card">
            <img src="assets/images/resound.jpg" alt="Resound" class="partner-logo">
            <p class="partner-description">ReSound's partnership with I-RAY focuses on developing state-of-the-art hearing solutions and software platforms.</p>
          </div>
          <div class="partner-card">
            <img src="assets/images/heco.jpg" alt="Heco" class="partner-logo">
            <p class="partner-description">Heco and I-RAY collaborate to deliver innovative audio solutions and software systems for the hearing care industry.</p>
          </div>
          <div class="partner-card">
            <img src="assets/images/cumulus.jpg" alt="Cumulus" class="partner-logo">
            <p class="partner-description">Cumulus partners with I-RAY to provide cloud-based solutions and software development services.</p>
          </div>

        </div>
      </div>
    </section>
    <section class="testimonials-section">
      <div class="container">
        <h2 class="testimonials-title">TESTIMONIALS</h2>
        <p class="testimonials-subtitle">Our valued clients share their experience working with I-RAY IT Solutions</p>

        <div class="testimonial-slider">
          <div class="testimonial-grid">
            
            <div class="testimonial-card">
              <div class="client-image-wrapper">
                <img src="assets/images/clients/Christoph .jpg" alt="Christoph Schmid" class="client-image">
              </div>
              <h3 class="client-name">Christoph Schmid</h3>
              <p class="client-position">ELT, CRDO, Chief Research and Development Officer</p>
              <div class="testimonial-text">
                I truly appreciate what your team has achieved over the past decade and how you have become a part of the GN family.
              </div>
            </div>
			<div class="testimonial-card">
              <div class="client-image-wrapper">
                <img src="assets/images/clients/Sreekumar .jpg" alt="Sreekumar M Menon" class="client-image">
              </div>
              <h3 class="client-name">Sreekumar M Menon</h3>
              <p class="client-position">Head of Cloud and Configuration</p>
              <div class="testimonial-text">
                We've been fortunate to partner with I-Ray for a decade, and we've always admired the team's commitment on software quality. Your contributions have been an integral part to our success, and we look forward to many more years together. Thank you and your team for everything you folks done and continue to do for us.
              </div>
            </div>

            <div class="testimonial-card">
              <div class="client-image-wrapper">
                <img src="assets/images/clients/Sobhitha .jpg" alt="Sobhitha Padmanabhan" class="client-image">
              </div>
              <h3 class="client-name">Sobhitha Padmanabhan</h3>
              <p class="client-position">Project Manager Advanced Production & SW Tools</p>
              <div class="testimonial-text">
                Iray and the team, your flexibility and support, even during stringent timelines, have been truly commendable. You have consistently met your commitments, demonstrating a strong sense of responsibility and excellence that has been instrumental in driving our releases and success.
              </div>
            </div>

            <div class="testimonial-card">
              <div class="client-image-wrapper">
                <img src="assets/images/clients/Soeren.JPG" alt="Soren Skov Andersen" class="client-image">
              </div>
              <h3 class="client-name">Lars Hagander</h3>
              <p class="client-position">Senior Project Manager</p>
              <div class="testimonial-text">
                I-Ray has been through a great development and I congratulate you and the i-ray team in your accomplishments. When working with i-ray people, I always met a true desire to help and find solutions.
              </div>
            </div>

            <div class="testimonial-card">
              <div class="client-image-wrapper">
                <img src="assets/images/clients/Harder.JPG" alt="Soeren Bak Harder" class="client-image">
              </div>
              <h3 class="client-name">Soeren Bak Harder</h3>
              <p class="client-position">Senior Manager, Systems Verification</p>
              <div class="testimonial-text">
                Over the past decade, our journey together has been marked by growth, and a shared commitment to excellence. You've become more than just a consultant; you're a trusted partner who understands our business and shares our vision.
              </div>
            </div>

            <div class="testimonial-card">
              <div class="client-image-wrapper">
                <img src="assets/images/clients/Thomas.JPG" alt="Thomas Bro-Rasmussen" class="client-image">
              </div>
              <h3 class="client-name">Thomas Bro-Rasmussen</h3>
              <p class="client-position">Head of Labelling</p>
              <div class="testimonial-text">
                Bringing I-Ray on board for translation, technical writing, and development tasks has been a total game changer for creating user guides at GN.
              </div>
            </div>
          </div>

          <div class="slider-nav prev">❮</div>
          <div class="slider-nav next">❯</div>

          <div class="slider-dots">
            <span class="dot active"></span>
            <span class="dot"></span>
            <span class="dot"></span>
            <span class="dot"></span>
            <span class="dot"></span>
            <span class="dot"></span>
          </div>
        </div>
      </div>
    </section>

    <?php include 'footer.php'; ?>
  </div>
  <script src="assets/js/jquery-3.5.1.min.js"></script>
  <script src="assets/js/plugins.js"></script>
  <script src="assets/js/main.js"></script>
  <script>
    document.addEventListener('DOMContentLoaded', function() {
      const slider = document.querySelector('.testimonial-grid');
      const cards = document.querySelectorAll('.testimonial-card');
      const dots = document.querySelectorAll('.dot');
      const prevBtn = document.querySelector('.slider-nav.prev');
      const nextBtn = document.querySelector('.slider-nav.next');
      let currentIndex = 0;
      const totalCards = cards.length;
      let autoPlayInterval;
      let isPaused = false;
      const autoPlayDelay = 8000; // 8 seconds between slides
      const pauseDuration = 15000; // 15 seconds pause when interacting

      function updateCards() {
        cards.forEach((card, index) => {
          card.classList.remove('active', 'prev', 'next', 'prev-out', 'next-out');

          let position = (index - currentIndex + totalCards) % totalCards;

          if (position === 0) {
            card.classList.add('active');
          } else if (position === totalCards - 1) {
            card.classList.add('prev');
          } else if (position === 1) {
            card.classList.add('next');
          } else if (position === totalCards - 2) {
            card.classList.add('prev-out');
          } else if (position === 2) {
            card.classList.add('next-out');
          }
        });

        dots.forEach((dot, index) => {
          dot.classList.toggle('active', index === currentIndex);
        });
      }

      function startAutoPlay() {
        stopAutoPlay(); // Clear any existing interval
        if (!isPaused) {
          autoPlayInterval = setInterval(nextSlide, autoPlayDelay);
        }
      }

      function stopAutoPlay() {
        if (autoPlayInterval) {
          clearInterval(autoPlayInterval);
        }
      }

      function pauseSlider() {
        isPaused = true;
        stopAutoPlay();
        setTimeout(() => {
          isPaused = false;
          startAutoPlay();
        }, pauseDuration);
      }

      function nextSlide() {
        currentIndex = (currentIndex + 1) % totalCards;
        updateCards();
      }

      function prevSlide() {
        currentIndex = (currentIndex - 1 + totalCards) % totalCards;
        updateCards();
      }

      // Event Listeners
      prevBtn.addEventListener('click', () => {
        prevSlide();
      });

      nextBtn.addEventListener('click', () => {
        nextSlide();
      });

      dots.forEach((dot, index) => {
        dot.addEventListener('click', () => {
          currentIndex = index;
          updateCards();
        });
      });

      cards.forEach(card => {
        card.addEventListener('click', () => {
          // Only pause if clicking the active card
          if (card.classList.contains('active')) {
            pauseSlider();
          }
        });
      });

      // Touch events for mobile swipe
      let touchStartX = 0;
      let touchEndX = 0;

      slider.addEventListener('touchstart', e => {
        touchStartX = e.changedTouches[0].screenX;
      });

      slider.addEventListener('touchend', e => {
        touchEndX = e.changedTouches[0].screenX;
        if (touchStartX - touchEndX > 50) {
          nextSlide();
        } else if (touchEndX - touchStartX > 50) {
          prevSlide();
        }
      });

      // Mouse hover pause
      slider.addEventListener('mouseenter', () => {
        stopAutoPlay();
      });

      slider.addEventListener('mouseleave', () => {
        if (!isPaused) {
          startAutoPlay();
        }
      });

      // Initial setup
      updateCards();
      startAutoPlay();
    });
  </script>
</body>

</html>