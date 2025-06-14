<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Products - Squib Healthcare LTD</title>
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
            <a class="nav-link fw-bold" style="color: #fff" href="products.php">Products</a>
          </li>
          <!-- <li class="nav-item">
              <a class="nav-link" href="services.php">Services</a>
            </li> -->
          <li class="nav-item">
            <a class="nav-link" href="aboutus.php">About Us</a>
          </li>
          <!-- <li class="nav-item"><a class="nav-link" href="portfolio.html">Portfolio</a></li> -->
          <li class="nav-item">
            <a class="nav-link" href="contact.php">Contact</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="careers.php">Careers</a>
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
          <h1 class="display-4 fw-bold mb-3">Our Products</h1>
          <p class="lead">
            Comprehensive range of dietary supplements for solutions for better health
            outcomes
          </p>
        </div>
        <div class="col-lg-4 text-end">
          <i class="bi bi-capsule-pill display-1"></i>
        </div>
      </div>
    </div>
  </section>

  <!-- Product Categories -->
  <section id="products" class="py-5 bg-light">
    <div class="container">
      <div class="text-center mb-5">
        <h2 class="display-5 fw-bold text-primary mb-3">Our Products</h2>
        <p class="lead">
          Comprehensive range of dietary supplements for better health
          outcomes
        </p>
      </div>
      <div class="row g-4">
        <div class="col-lg-4 col-md-6">
          <div class="card h-100 shadow-sm">
            <img
              src="https://images.unsplash.com/photo-1584308666744-24d5c474f2ae"
              class="card-img-top"
              alt="Cardiovascular" />
            <div class="card-body">
              <h5 class="card-title text-primary">Joint Cal</h5>
              <p class="card-text">
                Advanced joint health supplement designed to support mobility
                and reduce inflammation.
              </p>
              <ul class="list-unstyled">
                <li>
                  <i class="bi bi-check-circle text-success me-2"></i>Joint
                  Support
                </li>
                <li>
                  <i class="bi bi-check-circle text-success me-2"></i>
                  Mobility Enhancement
                </li>
                <li>
                  <i class="bi bi-check-circle text-success me-2"></i>Anti-inflammatory Properties
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="card h-100 shadow-sm">
            <img
              src="https://images.unsplash.com/photo-1571019613454-1cb2f99b2d8b"
              class="card-img-top"
              alt="Oncology" />
            <div class="card-body">
              <h5 class="card-title text-primary">NeuroTone</h5>
              <p class="card-text">
                Neurotonic supplements for improved cognitive function and
                overall well-being.
              </p>
              <ul class="list-unstyled">
                <li>
                  <i class="bi bi-check-circle text-success me-2"></i>
                  Cognitive Enhancement
                </li>
                <li>
                  <i class="bi bi-check-circle text-success me-2"></i>Memory Support
                </li>
                <li>
                  <i class="bi bi-check-circle text-success me-2"></i>Stress Relief
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="card h-100 shadow-sm">
            <img
              src="https://images.unsplash.com/photo-1559757175-0eb30cd8c063"
              class="card-img-top"
              alt="Respiratory" />
            <div class="card-body">
              <h5 class="card-title text-primary">Ferti-M</h5>
              <p class="card-text">
                Fertility supplements designed to support reproductive health
                and enhance fertility for male.
              </p>
              <ul class="list-unstyled">
                <li>
                  <i class="bi bi-check-circle text-success me-2"></i>
                  Reproductive Support
                </li>
                <li>
                  <i class="bi bi-check-circle text-success me-2"></i>
                  Fertility Enhancement
                </li>
                <li>
                  <i class="bi bi-check-circle text-success me-2"></i>
                  Male Enhancement
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="card h-100 shadow-sm">
            <img
              src="https://images.unsplash.com/photo-1576091160550-2173dba999ef"
              class="card-img-top"
              alt="Diabetes" />
            <div class="card-body">
              <h5 class="card-title text-primary">Ferti-F</h5>
              <p class="card-text">
                Fertility supplements designed to support reproductive health
                and enhance fertility for female.
              </p>
              <ul class="list-unstyled">
                <li>
                  <i class="bi bi-check-circle text-success me-2"></i>
                  Reproductive Support
                </li>
                <li>
                  <i class="bi bi-check-circle text-success me-2"></i>
                  Fertility Enhancement
                </li>
                <li>
                  <i class="bi bi-check-circle text-success me-2"></i>Female Enhancement
                </li>
              </ul>
            </div>
          </div>
        </div>
        <!-- <div class="col-lg-4 col-md-6">
            <div class="card h-100 shadow-sm">
              <img
                src="https://images.unsplash.com/photo-1559757148-5c350d0d3c56"
                class="card-img-top"
                alt="Vaccines"
              />
              <div class="card-body">
                <h5 class="card-title text-primary">Vaccines</h5>
                <p class="card-text">
                  Preventive vaccines for various infectious diseases and
                  immunization.
                </p>
                <ul class="list-unstyled">
                  <li>
                    <i class="bi bi-check-circle text-success me-2"></i>Flu
                    Vaccines
                  </li>
                  <li>
                    <i class="bi bi-check-circle text-success me-2"></i>COVID-19
                    Vaccines
                  </li>
                  <li>
                    <i class="bi bi-check-circle text-success me-2"></i>Travel
                    Vaccines
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="card h-100 shadow-sm">
              <img
                src="https://images.unsplash.com/photo-1576671081837-49000212a370"
                class="card-img-top"
                alt="Neurology"
              />
              <div class="card-body">
                <h5 class="card-title text-primary">Neurology</h5>
                <p class="card-text">
                  Advanced treatments for neurological disorders and brain
                  health.
                </p>
                <ul class="list-unstyled">
                  <li>
                    <i class="bi bi-check-circle text-success me-2"></i
                    >Alzheimer's Treatment
                  </li>
                  <li>
                    <i class="bi bi-check-circle text-success me-2"></i>Epilepsy
                    Management
                  </li>
                  <li>
                    <i class="bi bi-check-circle text-success me-2"></i>Pain
                    Management
                  </li>
                </ul>
              </div>
            </div>
          </div> -->
      </div>
    </div>
  </section>

  <!-- Product Features -->
  <section class="py-5 bg-light">
    <div class="container">
      <div class="text-center mb-5">
        <h2 class="display-5 fw-bold text-primary mb-3">
          Why Choose Our Products
        </h2>
        <p class="lead">
          Quality, safety, and efficacy are at the core of everything we
          develop
        </p>
      </div>
      <div class="row g-4">
        <div class="col-lg-3 col-md-6">
          <div class="text-center p-4">
            <div
              class="bg-primary text-white rounded-circle d-inline-flex align-items-center justify-content-center mb-3"
              style="width: 80px; height: 80px">
              <i class="bi bi-shield-check fs-2"></i>
            </div>
            <h5 class="text-primary mb-3">FDA Approved</h5>
            <p>
              All our products meet stringent FDA standards and regulatory
              requirements.
            </p>
          </div>
        </div>
        <div class="col-lg-3 col-md-6">
          <div class="text-center p-4">
            <div
              class="bg-primary text-white rounded-circle d-inline-flex align-items-center justify-content-center mb-3"
              style="width: 80px; height: 80px">
              <i class="bi bi-microscope fs-2"></i>
            </div>
            <h5 class="text-primary mb-3">Research-Based</h5>
            <p>
              Backed by extensive clinical research and proven therapeutic
              outcomes.
            </p>
          </div>
        </div>
        <div class="col-lg-3 col-md-6">
          <div class="text-center p-4">
            <div
              class="bg-primary text-white rounded-circle d-inline-flex align-items-center justify-content-center mb-3"
              style="width: 80px; height: 80px">
              <i class="bi bi-globe fs-2"></i>
            </div>
            <h5 class="text-primary mb-3">Global Reach</h5>
            <p>
              Available in over 100 countries with local support and
              distribution.
            </p>
          </div>
        </div>
        <div class="col-lg-3 col-md-6">
          <div class="text-center p-4">
            <div
              class="bg-primary text-white rounded-circle d-inline-flex align-items-center justify-content-center mb-3"
              style="width: 80px; height: 80px">
              <i class="bi bi-heart-pulse fs-2"></i>
            </div>
            <h5 class="text-primary mb-3">Patient-Centered</h5>
            <p>
              Designed with patient needs and quality of life improvements in
              mind.
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- CTA Section -->
  <section class="py-5 bg-primary text-white">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-8">
          <h3 class="fw-bold mb-3">
            Need More Information About Our Products?
          </h3>
          <p class="mb-0">
            Contact our medical information team for detailed product
            specifications, clinical data, and prescribing information.
          </p>
        </div>
        <div class="col-lg-4 text-lg-end">
          <a href="contact.php" class="btn btn-light btn-lg">Contact Us</a>
        </div>
      </div>
    </div>
  </section>
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
              <a href="products.php" class="text-light text-decoration-none">Products</a>
            </li>
            <!-- <li>
                <a href="services.php" class="text-light text-decoration-none"
                  >Services</a
                >
              </li> -->
            <li>
              <a href="aboutus.php" class="text-light text-decoration-none">About Us</a>
            </li>
            <li>
              <a href="contact.php" class="text-light text-decoration-none">Contact</a>
            </li>
            <li>
              <a href="careers.php" class="text-light text-decoration-none">Careers</a>
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
  <script>
    // Scroll to top button functionality
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
      document.body.scrollTop = 0; // For Safari
      document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
    };
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <script src="script.js"></script>
</body>

</html>