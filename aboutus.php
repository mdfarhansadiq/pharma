<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>About Us - Squib Healthcare LTD</title>
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
          <!-- <li class="nav-item">
            <a class="nav-link" href="services.php">Services</a>
          </li> -->
          <li class="nav-item">
            <a class="nav-link fw-bold" style="color: #fff" href="/aboutus">About Us</a>
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
          <h1 class="display-4 fw-bold mb-3">About Squib Healthcare LTD</h1>
          <p class="lead">
            Pioneering innovation and excellence for over a decade
          </p>
        </div>
        <div class="col-lg-4 text-end">
          <i class="bi bi-building display-1"></i>
        </div>
      </div>
    </div>
  </section>

  <!-- Company Story -->
  <section class="py-5">
    <div class="container">
      <div class="row align-items-center mb-5">
        <div class="col-lg-6 mb-4 mb-lg-0">
          <img
            src="https://images.unsplash.com/photo-1582719478250-c89cae4dc85b"
            class="img-fluid rounded shadow-lg"
            alt="Pharmaceutical Laboratory" />
        </div>
        <div class="col-lg-6">
          <h2 class="display-5 fw-bold text-primary mb-4">Our Story</h2>
          <p class="lead mb-4">
            Founded in 2013, Squib Healthcare LTD began as a small dietary supplement company with a bold vision: to develop life-changing
            medications that would improve the quality of life for people
            around the world.
          </p>
          <!-- <p class="mb-4">
            From our humble beginnings with just 12 researchers, we have grown
            into a global pharmaceutical powerhouse, but our core mission
            remains unchanged. We are driven by the belief that everyone
            deserves access to safe, effective, and affordable medications.
          </p>
          <p class="mb-4">
            Our journey has been marked by groundbreaking discoveries,
            strategic partnerships, and an unwavering commitment to scientific
            excellence. Today, we stand proud as one of the leading
            pharmaceutical companies globally, with a portfolio that spans
            multiple therapeutic areas.
          </p> -->
        </div>
      </div>
    </div>
  </section>

  <!-- Statistics -->
  <section class="py-5 bg-light">
    <div class="container">
      <div class="text-center mb-5">
        <h2 class="display-5 fw-bold text-primary mb-3">Our Impact</h2>
        <p class="lead">
          Numbers that reflect our commitment to global health
        </p>
      </div>
      <div class="row g-4">
        <div class="col-md-6">
          <div class="text-center p-4 bg-white rounded shadow-sm h-100">
            <div
              class="bg-primary text-white rounded-circle d-inline-flex align-items-center justify-content-center mb-3"
              style="width: 80px; height: 80px">
              <i class="bi bi-calendar-check fs-2"></i>
            </div>
            <h3 class="text-primary fw-bold mb-1">13+</h3>
            <p class="mb-0">Years of Experience</p>
          </div>
        </div>
        <div class="col-md-6">
          <div class="text-center p-4 bg-white rounded shadow-sm h-100">
            <div
              class="bg-primary text-white rounded-circle d-inline-flex align-items-center justify-content-center mb-3"
              style="width: 80px; height: 80px">
              <i class="bi bi-capsule fs-2"></i>
            </div>
            <h3 class="text-primary fw-bold mb-1">10+</h3>
            <p class="mb-0">Products Developed</p>
          </div>
        </div>
        <!-- <div class="col-lg-3 col-md-6">
          <div class="text-center p-4 bg-white rounded shadow-sm h-100">
            <div
              class="bg-primary text-white rounded-circle d-inline-flex align-items-center justify-content-center mb-3"
              style="width: 80px; height: 80px">
              <i class="bi bi-globe fs-2"></i>
            </div>
            <h3 class="text-primary fw-bold mb-1">100+</h3>
            <p class="mb-0">Countries Served</p>
          </div>
        </div> -->
        <!-- <div class="col-lg-3 col-md-6">
          <div class="text-center p-4 bg-white rounded shadow-sm h-100">
            <div
              class="bg-primary text-white rounded-circle d-inline-flex align-items-center justify-content-center mb-3"
              style="width: 80px; height: 80px">
              <i class="bi bi-people fs-2"></i>
            </div>
            <h3 class="text-primary fw-bold mb-1">5000+</h3>
            <p class="mb-0">Employees Worldwide</p>
          </div>
        </div> -->
      </div>
    </div>
  </section>

  <!-- Mission & Vision -->
  <section class="py-5">
    <div class="container">
      <div class="row g-5">
        <div class="col-lg-6">
          <div class="h-100 p-4">
            <div class="text-center mb-4">
              <div
                class="bg-primary text-white rounded-circle d-inline-flex align-items-center justify-content-center mb-3"
                style="width: 100px; height: 100px">
                <i class="bi bi-bullseye fs-1"></i>
              </div>
            </div>
            <h3 class="text-primary text-center mb-4">Our Mission</h3>
            <p class="text-center lead mb-4">
              To discover, develop, and deliver innovative pharmaceutical
              solutions that improve the health and well-being of people
              worldwide.
            </p>
            <p class="text-center">
              We are committed to advancing medical science through rigorous
              research, maintaining the highest standards of quality and
              safety, and ensuring our medications are accessible to those who
              need them most.
            </p>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="h-100 p-4">
            <div class="text-center mb-4">
              <div
                class="bg-primary text-white rounded-circle d-inline-flex align-items-center justify-content-center mb-3"
                style="width: 100px; height: 100px">
                <i class="bi bi-eye fs-1"></i>
              </div>
            </div>
            <h3 class="text-primary text-center mb-4">Our Vision</h3>
            <p class="text-center lead mb-4">
              To be the world's most trusted pharmaceutical company, leading
              the way in innovation and setting new standards for healthcare
              excellence.
            </p>
            <p class="text-center">
              We envision a future where breakthrough treatments and cures are
              within reach for every patient, where healthcare disparities are
              eliminated, and where our scientific discoveries create lasting
              positive impact on global health.
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Values -->
  <section class="py-5 bg-light">
    <div class="container">
      <div class="text-center mb-5">
        <h2 class="display-5 fw-bold text-primary mb-3">Our Values</h2>
        <p class="lead">The principles that guide everything we do</p>
      </div>
      <div class="row g-4">
        <div class="col-lg-4 col-md-6">
          <div class="text-center p-4 bg-white rounded shadow-sm h-100">
            <div
              class="bg-primary text-white rounded-circle d-inline-flex align-items-center justify-content-center mb-3"
              style="width: 80px; height: 80px">
              <i class="bi bi-shield-check fs-2"></i>
            </div>
            <h5 class="text-primary mb-3">Integrity</h5>
            <p>
              We conduct our business with the highest ethical standards,
              transparency, and honesty in all our interactions.
            </p>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="text-center p-4 bg-white rounded shadow-sm h-100">
            <div
              class="bg-primary text-white rounded-circle d-inline-flex align-items-center justify-content-center mb-3"
              style="width: 80px; height: 80px">
              <i class="bi bi-lightbulb fs-2"></i>
            </div>
            <h5 class="text-primary mb-3">Innovation</h5>
            <p>
              We foster a culture of creativity and scientific excellence,
              continuously pushing the boundaries of medical research.
            </p>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="text-center p-4 bg-white rounded shadow-sm h-100">
            <div
              class="bg-primary text-white rounded-circle d-inline-flex align-items-center justify-content-center mb-3"
              style="width: 80px; height: 80px">
              <i class="bi bi-heart fs-2"></i>
            </div>
            <h5 class="text-primary mb-3">Compassion</h5>
            <p>
              Patient well-being is at the heart of everything we do, driving
              our commitment to developing life-saving treatments.
            </p>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="text-center p-4 bg-white rounded shadow-sm h-100">
            <div
              class="bg-primary text-white rounded-circle d-inline-flex align-items-center justify-content-center mb-3"
              style="width: 80px; height: 80px">
              <i class="bi bi-award fs-2"></i>
            </div>
            <h5 class="text-primary mb-3">Excellence</h5>
            <p>
              We strive for the highest quality in our products, services, and
              operations, exceeding industry standards.
            </p>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="text-center p-4 bg-white rounded shadow-sm h-100">
            <div
              class="bg-primary text-white rounded-circle d-inline-flex align-items-center justify-content-center mb-3"
              style="width: 80px; height: 80px">
              <i class="bi bi-people-fill fs-2"></i>
            </div>
            <h5 class="text-primary mb-3">Collaboration</h5>
            <p>
              We work together as one team, partnering with healthcare
              providers, patients, and communities worldwide.
            </p>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="text-center p-4 bg-white rounded shadow-sm h-100">
            <div
              class="bg-primary text-white rounded-circle d-inline-flex align-items-center justify-content-center mb-3"
              style="width: 80px; height: 80px">
              <i class="bi bi-recycle fs-2"></i>
            </div>
            <h5 class="text-primary mb-3">Sustainability</h5>
            <p>
              We are committed to responsible business practices that protect
              our environment for future generations.
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Leadership Team -->
  <section class="py-5">
    <div class="container">
      <div class="text-center mb-5">
        <h2 class="display-5 fw-bold text-primary mb-3">Leadership Team</h2>
        <p class="lead">Meet the visionaries driving our mission forward</p>
      </div>
      <div class="row g-4">
        <div class="col-lg-4 col-md-6">
          <div class="card h-100 shadow-sm border-0">
            <img
              src="https://images.unsplash.com/photo-1560250097-0b93528c311a"
              class="card-img-top"
              alt="CEO" />
            <div class="card-body text-center">
              <h5 class="card-title text-primary">Dr. Sarah Johnson</h5>
              <p class="card-text mb-3">
                <strong>Chief Executive Officer</strong>
              </p>
              <p class="card-text">
                25+ years in pharmaceutical leadership with expertise in
                global operations and strategic development.
              </p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="card h-100 shadow-sm border-0">
            <img
              src="https://images.unsplash.com/photo-1559839734-2b71ea197ec2"
              class="card-img-top"
              alt="CTO" />
            <div class="card-body text-center">
              <h5 class="card-title text-primary">Dr. Michael Chen</h5>
              <p class="card-text mb-3">
                <strong>Chief Scientific Officer</strong>
              </p>
              <p class="card-text">
                Leading our R&D initiatives with 20+ years of experience in
                drug discovery and development.
              </p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="card h-100 shadow-sm border-0">
            <img
              src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2"
              class="card-img-top"
              alt="CMO" />
            <div class="card-body text-center">
              <h5 class="card-title text-primary">Lisa Rodriguez</h5>
              <p class="card-text mb-3">
                <strong>Chief Operating Officer</strong>
              </p>
              <p class="card-text">
                Oversees manufacturing and supply chain operations with
                expertise in quality assurance and regulatory compliance.
              </p>
            </div>
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
          <h3 class="fw-bold mb-3">Join Our Mission</h3>
          <p class="mb-0">
            Be part of a team that's making a difference in global healthcare.
            Explore career opportunities at Squib Healthcare LTD.
          </p>
        </div>
        <div class="col-lg-4 text-lg-end">
          <a href="/contact" class="btn btn-light btn-lg me-3">Contact Us</a>
          <a href="/careers" class="btn btn-outline-light btn-lg">Careers</a>
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
            <!-- <li>
              <a href="services.php" class="text-light text-decoration-none">Services</a>
            </li> -->
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
  <!-- Scroll to Top Script -->
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
  <!-- Bootstrap Scripts -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <script src="script.js"></script>
</body>

</html>