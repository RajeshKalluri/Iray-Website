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
    .evolution-timeline-section {
      background: #f8f9fa;
      padding: 60px 0 40px 0;
    }

    .evolution-timeline-title {
      text-align: center;
      font-size: 2.2rem;
      font-weight: 700;
      margin-bottom: 40px;
      background: linear-gradient(90deg, #0272f6, #f27c25);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
    }

    .timeline-grid {
      max-width: 1100px;
      margin: 0 auto;
      display: flex;
      flex-direction: column;
      gap: 0;
    }

    .timeline-row {
      display: flex;
      gap: 32px;
      margin-bottom: 0;
      position: relative;
      align-items: stretch;
      min-height: 220px;
    }

    .connection-line {
      width: 100%;
      height: 80%;
      display: flex;
      align-items: center;
      justify-content: center;
      margin: 0 0 0 0;
    }

    .connection-line img {
      width: 100%;
      height: 100px;
      object-fit: contain;
      display: block;
    }

    /* Full-width card with image on left or right */
    .timeline-row.full {
      display: flex;
      gap: 0;
      min-height: 220px;
    }

    .timeline-card.full {
      display: flex;
      flex-direction: row;
      align-items: stretch;
      width: 100%;
      min-height: 220px;
      background: #f7f7f7;
      border-radius: 12px;
      box-shadow: 0 4px 16px rgba(2, 114, 246, 0.10), 0 2px 8px rgba(0, 0, 0, 0.06);
      overflow: hidden;
      position: relative;
    }

    .timeline-card.full.reverse {
      flex-direction: row-reverse;
    }

    .timeline-card.full .card-img {
      width: 38%;
      min-width: 180px;
      background-size: cover;
      background-position: center;
      background-repeat: no-repeat;
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .timeline-card.full .card-content {
      width: 62%;
      padding: 36px 32px 32px 32px;
      display: flex;
      flex-direction: column;
      justify-content: center;
      background: #f7f7f7;
      color: #222;
      min-height: 220px;
      position: relative;
    }

    .timeline-card.full .year-badge {
      font-size: 2rem;
      font-weight: 700;
      color: #f27c25;
      position: absolute;
      top: 32px;
      right: 36px;
      z-index: 2;
      letter-spacing: 1px;
      background: none;
    }

    .timeline-card.full .timeline-title {
      font-size: 1.3rem;
      font-weight: 700;
      margin-bottom: 12px;
      color: #222;
    }

    .timeline-card.full .timeline-text {
      color: #222;
      font-size: 1.08rem;
      line-height: 1.6;
      font-weight: 500;
      margin-top: 0;
      text-align: left;
    }

    /* Split cards (2 or 3 per row) */
    .timeline-row.split {
      display: flex;
      gap: 32px;
    }

    .timeline-card.split {
      flex: 1 1 0;
      min-width: 0;
      min-height: 220px;
      background-size: cover;
      background-position: center;
      background-repeat: no-repeat;
      border-radius: 12px;
      box-shadow: 0 4px 16px rgba(2, 114, 246, 0.10), 0 2px 8px rgba(0, 0, 0, 0.06);
      position: relative;
      overflow: hidden;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: flex-start;
      /* margin-bottom: 36px; */
      border: 2px solid #e0e0e0;
    }

    .timeline-card.split .overlay {
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
      background: linear-gradient(120deg, rgba(2, 114, 246, 0.50) 0%, rgba(242, 124, 37, 0.30) 100%);
      opacity: 0.82;
      z-index: 1;
    }

    .timeline-card.split .timeline-card-content {
      position: relative;
      z-index: 2;
      padding: 24px 18px 18px 18px;
      color: #fff;
      display: flex;
      flex-direction: column;
      justify-content: flex-start;
      min-height: 120px;
      width: 100%;
      height: 100%;
    }

    .timeline-card.split .year-badge {
      font-size: 1.3rem;
      font-weight: 700;
      color: #f27c25;
      background: transparent;
      /* position: absolute; */
      top: 18px;
      left: 22px;
      z-index: 2;
      letter-spacing: 1px;
      text-shadow: 0 2px 8px #fff, 0 2px 8px #222;
    }

    .timeline-card.split .timeline-title {
      font-size: 1.1rem;
      font-weight: 700;
      margin-bottom: 8px;
      color: #fff;
      text-shadow: 0 2px 8px #222;
    }

    .timeline-card.split .timeline-text {
      color: #fff;
      text-shadow: 0 2px 8px #222;
      font-size: 1.08rem;
      line-height: 1.6;
      font-weight: 500;
      margin-top: 18px;
      word-break: break-word;
      text-align: center;
    }

    @media (max-width: 900px) {

      .timeline-row,
      .timeline-row.full,
      .timeline-row.split {
        flex-direction: column;
        gap: 0;
      }

      .timeline-card.full,
      .timeline-card.split {
        width: 100%;
        min-width: 0;
        margin-bottom: 18px;
        height: auto;
        min-height: 180px;
        flex-direction: column !important;
      }

      .timeline-card.full .card-img,
      .timeline-card.full .card-content {
        width: 100%;
        min-width: 0;
        min-height: 120px;
        padding: 24px 12px 18px 12px;
      }

      .timeline-card.full .year-badge {
        right: 18px;
        top: 18px;
        font-size: 1.2rem;
      }

      .connection-line {
        display: none;
      }
    }
  </style>
</head>

<body>
  <div class="wrapper">
    <?php include 'header.php'; ?>
    <section class="page-title page-title-layout11 bg-overlay bg-overlay-gradient bg-parallax text-center">
      <div class="bg-img"><img src="assets/images/10th_Anniversary/DSC00137.JPG" alt="10th Anniversary"></div>
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-12 col-xl-6 offset-xl-3">
            <h1 class="pagetitle__heading">Our Evolution</h1>
          </div>
        </div>
      </div>
    </section>
    <section class="evolution-timeline-section">
      <div class="container">
        <div class="evolution-timeline-title">A Decade of Milestones</div>
        <div class="timeline-grid">
          <div class="timeline-row split">
            <div class="timeline-card split" style="background-image:url('assets/images/evolution/2024(2).jpeg')">
              <div class="overlay"></div>
              <div class="timeline-card-content">
                <span class="year-badge">2024</span>
                <div class="timeline-title">Labelling & Technical Writing Expansion</div>
                <div class="timeline-text">We expanded into labelling and enhanced our technical writing capabilities through a successful venture with GN.</div>
              </div>
            </div>
            <div class="timeline-card split" style="background-image:url('assets/images/evolution/2024(3).jpeg')">
              <div class="overlay"></div>
              <div class="timeline-card-content">
                <span class="year-badge">2024</span>
                <div class="timeline-title">Strategic Partnership with Jabra</div>
                <div class="timeline-text">Focused on a strategic partnership with Jabra in 2025. Our Business Development Team is engaging with Jabra's leadership to explore collaboration opportunities in Embedded Systems Engineering and Cybersecurity Technologies.</div>
              </div>
            </div>
          </div>
          <div class="connection-line"><img src="assets/images/10th_Anniversary/connectionLine.png" alt="connection line"></div>
          <div class="timeline-row split">
            <div class="timeline-card split" style="background-image:url('assets/images/evolution/2023.jpeg')">
              <div class="overlay"></div>
              <div class="timeline-card-content">
                <span class="year-badge">2023</span>
                <div class="timeline-title">User Story Testing</div>
                <div class="timeline-text">Began user story testing to collaborate directly with developers, ensuring faster response times and improved product quality.</div>
              </div>
            </div>
            <!-- <div class="timeline-card split" style="background-image:url('assets/images/evolution/2023.jpeg')">
              <div class="overlay"></div>
              <div class="timeline-card-content">
                <span class="year-badge">2023</span>
                <div class="timeline-title">ODIN Development</div>
                <div class="timeline-text">Involved in development of ODIN for GN.</div>
              </div>
            </div> -->
            <div class="timeline-card split" style="background-image:url('assets/images/evolution/2023.jpeg')">
              <div class="overlay"></div>
              <div class="timeline-card-content">
                <span class="year-badge">2023</span>
                <div class="timeline-title">JIRA Administration Services</div>
                <div class="timeline-text">Partnered with "Helen of Troy" to provide expert JIRA administration services.</div>
              </div>
            </div>
          </div>
          <div class="connection-line"><img src="assets/images/10th_Anniversary/connectionLine.png" alt="connection line"></div>
          <div class="timeline-row full">
            <div class="timeline-card full">
              <div class="card-img" style="background-image:url('assets/images/evolution/2022.jpeg')"></div>
              <div class="card-content">
                <span class="year-badge">2022</span>
                <div class="timeline-title">ISO 13485 Certification & Partnerships</div>
                <div class="timeline-text">We are proud to be accredited with ISO 13485 certification, reaffirming our commitment to quality and compliance. We also partnered with Colibri and Atlas, broadening our expertise in integrations, migrations, and payment gateway solutions.</div>
              </div>
            </div>
          </div>
          <div class="connection-line"><img src="assets/images/10th_Anniversary/connectionLine.png" alt="connection line"></div>
          <div class="timeline-row split">
            <div class="timeline-card split" style="background-image:url('assets/images/evolution/2021.jpeg')">
              <div class="overlay"></div>
              <div class="timeline-card-content">
                <span class="year-badge">2021</span>
                <div class="timeline-title">US Entity Launch</div>
                <div class="timeline-text">Launched a new entity in the US to expand our global reach and better serve our clients.</div>
              </div>
            </div>
            <div class="timeline-card split" style="background-image:url('assets/images/evolution/2021.jpeg')">
              <div class="overlay"></div>
              <div class="timeline-card-content">
                <span class="year-badge">2021</span>
                <div class="timeline-title">APT Project Collaboration</div>
                <div class="timeline-text">Our collaboration with GN on the APT project has strengthened our partnership and driven innovation.</div>
              </div>
            </div>
            <div class="timeline-card split" style="background-image:url('assets/images/evolution/2021.jpeg')">
              <div class="overlay"></div>
              <div class="timeline-card-content">
                <span class="year-badge">2021</span>
                <div class="timeline-title">HECO TracRat Partnership</div>
                <div class="timeline-text">We partnered with HECO for TracRat, the most advanced online electric motor management software and repairable asset management solution available.</div>
              </div>
            </div>
          </div>
          <div class="connection-line"><img src="assets/images/10th_Anniversary/connectionLine.png" alt="connection line"></div>
          <div class="timeline-row full">
            <div class="timeline-card full">
              <div class="card-img" style="background-image:url('assets/images/10th_Anniversary/photos-166.JPG')"></div>
              <div class="card-content">
                <span class="year-badge">2020</span>
                <div class="timeline-title">Pandemic Adaptation & Community Support</div>
                <div class="timeline-text">i-Ray IT Solutions quickly adapted to global disruptions with remote work and innovative testing, ensuring seamless operations. We also supported those in need during the pandemic, demonstrating our commitment to the community and reinforcing the strength of our partnership with GN.</div>
              </div>
            </div>
          </div>
          <div class="connection-line"><img src="assets/images/10th_Anniversary/connectionLine.png" alt="connection line"></div>
          <div class="timeline-row split">
            <div class="timeline-card split" style="background-image:url('assets/images/evolution/2019.jpeg')">
              <div class="overlay"></div>
              <div class="timeline-card-content">
                <span class="year-badge">2019</span>
                <div class="timeline-title">Asset Tracking Tool</div>
                <div class="timeline-text">Developed an in-house asset tracking tool to streamline inventory management and improve asset visibility.</div>
              </div>
            </div>
            <div class="timeline-card split" style="background-image:url('assets/images/evolution/2019.jpeg')">
              <div class="overlay"></div>
              <div class="timeline-card-content">
                <span class="year-badge">2019</span>
                <div class="timeline-title">Team Growth</div>
                <div class="timeline-text">From a small team of 8 members to a dynamic workforce of 100, our journey has been marked by growth, collaboration, and success.</div>
              </div>
            </div>
          </div>
          <div class="connection-line"><img src="assets/images/10th_Anniversary/connectionLine.png" alt="connection line"></div>
          <div class="timeline-row full">
            <div class="timeline-card full">
              <div class="card-img" style="background-image:url('assets/images/evolution/2018.jpeg')"></div>
              <div class="card-content">
                <span class="year-badge">2018</span>
                <div class="timeline-title">Process Automation</div>
                <div class="timeline-text">Implemented new tools to streamline FSW and app automation. These advancements have enhanced our development and testing processes for better performance.</div>
              </div>
            </div>
          </div>
          <div class="connection-line"><img src="assets/images/10th_Anniversary/connectionLine.png" alt="connection line"></div>
          <div class="timeline-row split">
            <div class="timeline-card split" style="background-image:url('assets/images/evolution/2017.jpeg')">
              <div class="overlay"></div>
              <div class="timeline-card-content">
                <span class="year-badge">2017</span>
                <div class="timeline-title">Certifications Achieved</div>
                <div class="timeline-text">The team got certified in relevant qualifications, including ISTQB and CAST, showcasing our achievement for the year.</div>
              </div>
            </div>
            <div class="timeline-card split" style="background-image:url('assets/images/evolution/2017.jpeg')">
              <div class="overlay"></div>
              <div class="timeline-card-content">
                <span class="year-badge">2017</span>
                <div class="timeline-title">Automation Tools Evaluation</div>
                <div class="timeline-text">Evaluated new automation tools to enhance efficiency and performance.</div>
              </div>
            </div>
            <div class="timeline-card split" style="background-image:url('assets/images/evolution/2017.jpeg')">
              <div class="overlay"></div>
              <div class="timeline-card-content">
                <span class="year-badge">2017</span>
                <div class="timeline-title">First Sports Festival</div>
                <div class="timeline-text">Hosted Iray's first sports festival, fostering team spirit and camaraderie.</div>
              </div>
            </div>
          </div>
          <div class="connection-line"><img src="assets/images/10th_Anniversary/connectionLine.png" alt="connection line"></div>
          <div class="timeline-row full">
            <div class="timeline-card full">
              <div class="card-img" style="background-image:url('assets/images/evolution/2016.jpeg')"></div>
              <div class="card-content">
                <span class="year-badge">2016</span>
                <div class="timeline-title">Critical Supplier & Testing</div>
                <div class="timeline-text">Accredited as a "Critical Supplier" for GN. Initiated system-level testing department, marking a key milestone in our project development.</div>
              </div>
            </div>
          </div>
          <div class="connection-line"><img src="assets/images/10th_Anniversary/connectionLine.png" alt="connection line"></div>
          <div class="timeline-row split">

            <div class="timeline-card split" style="background-image:url('assets/images/evolution/2015.JPG')">
              <div class="overlay"></div>
              <div class="timeline-card-content">
                <span class="year-badge">2015</span>
                <div class="timeline-title">Our Department Team</div>
                <div class="timeline-text">Supported by a dedicated team of 8 members in our department.</div>
              </div>
            </div>
            <div class="timeline-card split" style="background-image:url('assets/images/evolution/2015.JPG')">
              <div class="overlay"></div>
              <div class="timeline-card-content">
                <span class="year-badge">2015</span>
                <div class="timeline-title">Iray's Journey Begins</div>
                <div class="timeline-text">Iray's journey began with GN.</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <?php include 'footer.php'; ?>
  </div><!-- /.wrapper -->
  <script src="assets/js/jquery-3.5.1.min.js"></script>
  <script src="assets/js/plugins.js"></script>
  <script src="assets/js/main.js"></script>
</body>

</html>