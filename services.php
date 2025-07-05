<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Services - Squib Healthcare LTD</title>
  <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
    rel="stylesheet" />
  <link
    href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css"
    rel="stylesheet" />
  <link href="style.css" rel="stylesheet" />
  <style>
    @keyframes fadein {
      from {
        opacity: 0;
        top: 0;
      }

      to {
        opacity: 1;
        top: 100px;
      }
    }

    @keyframes fadeout {
      from {
        opacity: 1;
        top: 100px;
      }

      to {
        opacity: 0;
        top: 0;
      }
    }

    #scrollToTopBtn {
      position: fixed;
      bottom: 100px;
      right: 30px;
      z-index: 99;
      font-size: 18px;
      border: none;
      outline: none;
      background-color: #06264c;
      color: white;
      cursor: pointer;
      padding: 10px 15px;
      border-radius: 10px;
      display: none;
      /* Hidden by default */
      transition: background-color 0.3s;
    }

    #scrollToTopBtn:hover {
      background-color: #0056b3;
    }
  </style>
</head>

<body>
  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top">
    <div class="container">
      <a class="navbar-brand fw-bold" href="/">
        <i class="bi bi-capsule me-2"></i>Squib Healthcare LTD
      </a>
      <button
        class="navbar-toggler"
        type="button"
        data-bs-toggle="collapse"
        data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link" href="/">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/products">Products</a>
          </li>
          <li class="nav-item">
            <a class="nav-link fw-bold" style="color: #fff" href="services.php">Services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/aboutus">About Us</a>
          </li>
          <!-- <li class="nav-item"><a class="nav-link" href="portfolio.html">Portfolio</a></li> -->
          <li class="nav-item">
            <a class="nav-link" href="/contact">Contact</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/careers">Careers</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Page Header -->
  <section class="py-5 mt-5 bg-primary text-white">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-8">
          <h1 class="display-4 fw-bold mb-3">Our Services</h1>
          <p class="lead">
            Comprehensive pharmaceutical services to support healthcare
            innovation
          </p>
        </div>
        <div class="col-lg-4 text-end">
          <i class="bi bi-gear-fill display-1"></i>
        </div>
      </div>
    </div>
  </section>

  <!-- Main Services -->
  <section class="py-5">
    <div class="container">
      <div class="text-center mb-5">
        <h2 class="display-5 fw-bold text-primary mb-3">What We Offer</h2>
        <p class="lead">
          End-to-end pharmaceutical solutions from research to market
        </p>
      </div>
      <div class="row g-4">
        <div class="col-lg-4 col-md-6">
          <div class="card h-100 shadow-sm">
            <div class="card-body text-center p-4">
              <div
                class="bg-primary text-white rounded-circle d-inline-flex align-items-center justify-content-center mb-4"
                style="width: 80px; height: 80px">
                <i class="bi bi-search fs-2"></i>
              </div>
              <h4 class="text-primary mb-3">Research & Development</h4>
              <p class="mb-4">
                Cutting-edge pharmaceutical research and drug development
                services to bring innovative treatments to market.
              </p>
              <ul class="list-unstyled text-start">
                <li>
                  <i class="bi bi-check-circle text-success me-2"></i>Drug
                  Discovery
                </li>
                <li>
                  <i class="bi bi-check-circle text-success me-2"></i>Preclinical Research
                </li>
                <li>
                  <i class="bi bi-check-circle text-success me-2"></i>Formulation Development
                </li>
                <li>
                  <i class="bi bi-check-circle text-success me-2"></i>Patent
                  Support
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="card h-100 shadow-sm">
            <div class="card-body text-center p-4">
              <div
                class="bg-primary text-white rounded-circle d-inline-flex align-items-center justify-content-center mb-4"
                style="width: 80px; height: 80px">
                <i class="bi bi-gear fs-2"></i>
              </div>
              <h4 class="text-primary mb-3">Manufacturing</h4>
              <p class="mb-4">
                State-of-the-art manufacturing facilities ensuring highest
                quality standards and regulatory compliance.
              </p>
              <ul class="list-unstyled text-start">
                <li>
                  <i class="bi bi-check-circle text-success me-2"></i>GMP
                  Manufacturing
                </li>
                <li>
                  <i class="bi bi-check-circle text-success me-2"></i>Quality
                  Control
                </li>
                <li>
                  <i class="bi bi-check-circle text-success me-2"></i>Scale-up
                  Services
                </li>
                <li>
                  <i class="bi bi-check-circle text-success me-2"></i>Custom
                  Production
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="card h-100 shadow-sm">
            <div class="card-body text-center p-4">
              <div
                class="bg-primary text-white rounded-circle d-inline-flex align-items-center justify-content-center mb-4"
                style="width: 80px; height: 80px">
                <i class="bi bi-truck fs-2"></i>
              </div>
              <h4 class="text-primary mb-3">Distribution</h4>
              <p class="mb-4">
                Global distribution network ensuring timely delivery of
                medications to healthcare providers worldwide.
              </p>
              <ul class="list-unstyled text-start">
                <li>
                  <i class="bi bi-check-circle text-success me-2"></i>Global
                  Logistics
                </li>
                <li>
                  <i class="bi bi-check-circle text-success me-2"></i>Cold
                  Chain Management
                </li>
                <li>
                  <i class="bi bi-check-circle text-success me-2"></i>Inventory Management
                </li>
                <li>
                  <i class="bi bi-check-circle text-success me-2"></i>Supply
                  Chain Optimization
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="card h-100 shadow-sm">
            <div class="card-body text-center p-4">
              <div
                class="bg-primary text-white rounded-circle d-inline-flex align-items-center justify-content-center mb-4"
                style="width: 80px; height: 80px">
                <i class="bi bi-clipboard-check fs-2"></i>
              </div>
              <h4 class="text-primary mb-3">Regulatory Affairs</h4>
              <p class="mb-4">
                Expert regulatory support for drug approval processes and
                compliance with international standards.
              </p>
              <ul class="list-unstyled text-start">
                <li>
                  <i class="bi bi-check-circle text-success me-2"></i>FDA
                  Submissions
                </li>
                <li>
                  <i class="bi bi-check-circle text-success me-2"></i>EMA
                  Approval
                </li>
                <li>
                  <i class="bi bi-check-circle text-success me-2"></i>Compliance Audits
                </li>
                <li>
                  <i class="bi bi-check-circle text-success me-2"></i>Documentation Support
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="card h-100 shadow-sm">
            <div class="card-body text-center p-4">
              <div
                class="bg-primary text-white rounded-circle d-inline-flex align-items-center justify-content-center mb-4"
                style="width: 80px; height: 80px">
                <i class="bi bi-people fs-2"></i>
              </div>
              <h4 class="text-primary mb-3">Clinical Trials</h4>
              <p class="mb-4">
                Comprehensive clinical trial management services from protocol
                design to study completion.
              </p>
              <ul class="list-unstyled text-start">
                <li>
                  <i class="bi bi-check-circle text-success me-2"></i>Protocol
                  Development
                </li>
                <li>
                  <i class="bi bi-check-circle text-success me-2"></i>Patient
                  Recruitment
                </li>
                <li>
                  <i class="bi bi-check-circle text-success me-2"></i>Data
                  Management
                </li>
                <li>
                  <i class="bi bi-check-circle text-success me-2"></i>Statistical Analysis
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="card h-100 shadow-sm">
            <div class="card-body text-center p-4">
              <div
                class="bg-primary text-white rounded-circle d-inline-flex align-items-center justify-content-center mb-4"
                style="width: 80px; height: 80px">
                <i class="bi bi-headset fs-2"></i>
              </div>
              <h4 class="text-primary mb-3">Patient Support</h4>
              <p class="mb-4">
                Dedicated patient support programs including education,
                assistance, and medication access programs.
              </p>
              <ul class="list-unstyled text-start">
                <li>
                  <i class="bi bi-check-circle text-success me-2"></i>Patient
                  Education
                </li>
                <li>
                  <i class="bi bi-check-circle text-success me-2"></i>Financial Assistance
                </li>
                <li>
                  <i class="bi bi-check-circle text-success me-2"></i>Adherence Programs
                </li>
                <li>
                  <i class="bi bi-check-circle text-success me-2"></i>24/7
                  Support Hotline
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Specialized Services -->
  <section class="py-5 bg-light">
    <div class="container">
      <div class="text-center mb-5">
        <h2 class="display-5 fw-bold text-primary mb-3">
          Specialized Services
        </h2>
        <p class="lead">
          Advanced solutions for complex pharmaceutical challenges
        </p>
      </div>
      <div class="row g-4">
        <div class="col-lg-6">
          <div class="d-flex align-items-start">
            <div
              class="bg-primary text-white rounded-circle d-inline-flex align-items-center justify-content-center me-4"
              style="width: 60px; height: 60px">
              <i class="bi bi-shield-check fs-4"></i>
            </div>
            <div>
              <h5 class="text-primary mb-3">Pharmacovigilance</h5>
              <p class="mb-3">
                Comprehensive drug safety monitoring and adverse event
                reporting to ensure patient safety throughout the product
                lifecycle.
              </p>
              <ul class="list-unstyled">
                <li>
                  <i class="bi bi-arrow-right text-primary me-2"></i>Safety
                  Signal Detection
                </li>
                <li>
                  <i class="bi bi-arrow-right text-primary me-2"></i>Risk
                  Management Plans
                </li>
                <li>
                  <i class="bi bi-arrow-right text-primary me-2"></i>ICSR
                  Processing
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="d-flex align-items-start">
            <div
              class="bg-primary text-white rounded-circle d-inline-flex align-items-center justify-content-center me-4"
              style="width: 60px; height: 60px">
              <i class="bi bi-graph-up fs-4"></i>
            </div>
            <div>
              <h5 class="text-primary mb-3">Market Access</h5>
              <p class="mb-3">
                Strategic market access solutions to ensure optimal product
                positioning and reimbursement strategies globally.
              </p>
              <ul class="list-unstyled">
                <li>
                  <i class="bi bi-arrow-right text-primary me-2"></i>Health
                  Economics
                </li>
                <li>
                  <i class="bi bi-arrow-right text-primary me-2"></i>Pricing
                  Strategy
                </li>
                <li>
                  <i class="bi bi-arrow-right text-primary me-2"></i>Reimbursement Support
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="d-flex align-items-start">
            <div
              class="bg-primary text-white rounded-circle d-inline-flex align-items-center justify-content-center me-4"
              style="width: 60px; height: 60px">
              <i class="bi bi-laptop fs-4"></i>
            </div>
            <div>
              <h5 class="text-primary mb-3">Digital Health Solutions</h5>
              <p class="mb-3">
                Innovative digital platforms and technologies to enhance
                patient care and treatment outcomes.
              </p>
              <ul class="list-unstyled">
                <li>
                  <i class="bi bi-arrow-right text-primary me-2"></i>Mobile
                  Health Apps
                </li>
                <li>
                  <i class="bi bi-arrow-right text-primary me-2"></i>Telemedicine Platforms
                </li>
                <li>
                  <i class="bi bi-arrow-right text-primary me-2"></i>AI-Powered Diagnostics
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="d-flex align-items-start">
            <div
              class="bg-primary text-white rounded-circle d-inline-flex align-items-center justify-content-center me-4"
              style="width: 60px; height: 60px">
              <i class="bi bi-mortarboard fs-4"></i>
            </div>
            <div>
              <h5 class="text-primary mb-3">Medical Education</h5>
              <p class="mb-3">
                Comprehensive medical education programs for healthcare
                professionals and continuing medical education.
              </p>
              <ul class="list-unstyled">
                <li>
                  <i class="bi bi-arrow-right text-primary me-2"></i>CME
                  Programs
                </li>
                <li>
                  <i class="bi bi-arrow-right text-primary me-2"></i>Training
                  Workshops
                </li>
                <li>
                  <i class="bi bi-arrow-right text-primary me-2"></i>Scientific Publications
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Service Process -->
  <section class="py-5">
    <div class="container">
      <div class="text-center mb-5">
        <h2 class="display-5 fw-bold text-primary mb-3">
          Our Service Process
        </h2>
        <p class="lead">How we deliver excellence at every step</p>
      </div>
      <div class="row g-4">
        <div class="col-lg-3 col-md-6">
          <div class="text-center">
            <div
              class="bg-primary text-white rounded-circle d-inline-flex align-items-center justify-content-center mb-3"
              style="width: 80px; height: 80px">
              <span class="fs-3 fw-bold">1</span>
            </div>
            <h5 class="text-primary mb-3">Consultation</h5>
            <p>
              Initial assessment and understanding of your specific
              pharmaceutical needs and objectives.
            </p>
          </div>
        </div>
        <div class="col-lg-3 col-md-6">
          <div class="text-center">
            <div
              class="bg-primary text-white rounded-circle d-inline-flex align-items-center justify-content-center mb-3"
              style="width: 80px; height: 80px">
              <span class="fs-3 fw-bold">2</span>
            </div>
            <h5 class="text-primary mb-3">Strategy</h5>
            <p>
              Development of customized solutions and strategic planning
              tailored to your requirements.
            </p>
          </div>
        </div>
        <div class="col-lg-3 col-md-6">
          <div class="text-center">
            <div
              class="bg-primary text-white rounded-circle d-inline-flex align-items-center justify-content-center mb-3"
              style="width: 80px; height: 80px">
              <span class="fs-3 fw-bold">3</span>
            </div>
            <h5 class="text-primary mb-3">Implementation</h5>
            <p>
              Expert execution of services with rigorous quality control and
              regulatory compliance.
            </p>
          </div>
        </div>
        <div class="col-lg-3 col-md-6">
          <div class="text-center">
            <div
              class="bg-primary text-white rounded-circle d-inline-flex align-items-center justify-content-center mb-3"
              style="width: 80px; height: 80px">
              <span class="fs-3 fw-bold">4</span>
            </div>
            <h5 class="text-primary mb-3">Support</h5>
            <p>
              Ongoing support and monitoring to ensure optimal outcomes and
              continuous improvement.
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Call to Action -->
  <section class="py-5 bg-primary text-white">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-8">
          <h3 class="fw-bold mb-3">Ready to Partner with Us?</h3>
          <p class="mb-0">
            Contact our team to discuss your pharmaceutical service needs and
            discover how we can help you achieve your goals.
          </p>
        </div>
        <div class="col-lg-4 text-lg-end">
          <a href="/contact" class="btn btn-light btn-lg me-3">Get Quote</a>
          <a href="/aboutus" class="btn btn-outline-light btn-lg">Learn More</a>
        </div>
      </div>
    </div>
  </section>
  <!-- Scroll to Top Button -->
  <button id="scrollToTopBtn" title="Go to top">↑</button>
  <!-- Footer -->
  <footer class="bg-dark text-light py-5">
    <div class="container">
      <div class="row g-4">
        <div class="col-lg-4">
          <h5 class="fw-bold mb-3">
            <i class="bi bi-capsule me-2"></i>Squib Healthcare LTD
          </h5>
          <p class="mb-3">
            Leading pharmaceutical company dedicated to advancing healthcare
            through innovation and improving global health outcomes.
          </p>
          <div class="d-flex gap-3">
            <a href="#" class="text-light"><i class="bi bi-facebook fs-5"></i></a>
            <a href="#" class="text-light"><i class="bi bi-twitter fs-5"></i></a>
            <a href="#" class="text-light"><i class="bi bi-linkedin fs-5"></i></a>
            <a href="#" class="text-light"><i class="bi bi-instagram fs-5"></i></a>
          </div>
        </div>
        <div class="col-lg-2 col-md-6">
          <h6 class="fw-bold mb-3">Quick Links</h6>
          <ul class="list-unstyled">
            <li>
              <a href="/" class="text-light text-decoration-none">Home</a>
            </li>
            <li>
              <a href="/products" class="text-light text-decoration-none">Products</a>
            </li>
            <li>
              <a href="services.php" class="text-light text-decoration-none">Services</a>
            </li>
            <li>
              <a href="/aboutus" class="text-light text-decoration-none">About Us</a>
            </li>
            <li>
              <a href="/contact" class="text-light text-decoration-none">Contact</a>
            </li>
            <li>
              <a href="/careers" class="text-light text-decoration-none">Careers</a>
            </li>
          </ul>
        </div>
        <div class="col-lg-2 col-md-6">
          <h6 class="fw-bold mb-3">Resources</h6>
          <ul class="list-unstyled">
            <li>
              <a href="#" class="text-light text-decoration-none">Clinical Trials</a>
            </li>
            <li>
              <a href="#" class="text-light text-decoration-none">Research</a>
            </li>
            <li>
              <a href="#" class="text-light text-decoration-none">Publications</a>
            </li>
            <li>
              <a href="#" class="text-light text-decoration-none">News</a>
            </li>
          </ul>
        </div>
        <div class="col-lg-2 col-md-6">
          <h6 class="fw-bold mb-3">Support</h6>
          <ul class="list-unstyled">
            <li>
              <a href="#" class="text-light text-decoration-none">Patient Support</a>
            </li>
            <li>
              <a href="#" class="text-light text-decoration-none">Healthcare Providers</a>
            </li>
            <li>
              <a href="#" class="text-light text-decoration-none">FAQs</a>
            </li>
            <li>
              <a href="#contact" class="text-light text-decoration-none">Contact</a>
            </li>
          </ul>
        </div>
        <div class="col-lg-2 col-md-6">
          <h6 class="fw-bold mb-3">Legal</h6>
          <ul class="list-unstyled">
            <li>
              <a href="#" class="text-light text-decoration-none">Privacy Policy</a>
            </li>
            <li>
              <a href="#" class="text-light text-decoration-none">Terms of Use</a>
            </li>
            <li>
              <a href="#" class="text-light text-decoration-none">Compliance</a>
            </li>
            <li>
              <a href="#" class="text-light text-decoration-none">Safety</a>
            </li>
          </ul>
        </div>
      </div>
      <hr class="my-4" />
      <div class="row align-items-center">
        <div class="col-md-6">
          <p class="mb-0">
            &copy; <span id="currentYear"></span> Squib Healthcare LTD. All rights reserved. Designed and
            Developed by <a href="https://applivar.com" target="_blank" class="text-light text-decoration-none"><b>Applivar</b></a>
          </p>
        </div>
        <div class="col-md-6 text-md-end">
          <p class="mb-0">Regulatory Information | Safety Data Sheets</p>
        </div>
      </div>
    </div>
    <button id="scrollToTopBtn" title="Go to top">↑</button>
  </footer>
  <!-- Scripts -->
  <script>
    // Scroll to Top Button
    const scrollToTopBtn = document.getElementById("scrollToTopBtn");
    window.onscroll = function() {
      if (
        document.body.scrollTop > 20 ||
        document.documentElement.scrollTop > 20
      ) {
        scrollToTopBtn.style.display = "block";
      } else {
        scrollToTopBtn.style.display = "none";
      }
    };
    scrollToTopBtn.onclick = function() {
      document.body.scrollTop = 0;
      document.documentElement.scrollTop = 0;
    };
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <script src="script.js"></script>
</body>

</html>