<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Careers - Squib Healthcare LTD</title>
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
            <a class="nav-link" href="products.php">Products</a>
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
            <a class="nav-link fw-bold" style="color: #fff" href="careers.php">Careers</a>
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
          <h1 class="display-4 fw-bold mb-3">Join Our Team</h1>
          <p class="lead">
            Build your career with a company that's changing lives through
            innovation
          </p>
        </div>
        <div class="col-lg-4 text-end">
          <i class="bi bi-briefcase-fill display-1"></i>
        </div>
      </div>
    </div>
  </section>

  <!-- Why Work With Us -->
  <section class="py-5">
    <div class="container">
      <div class="text-center mb-5">
        <h2 class="display-5 fw-bold text-primary mb-3">
          Why Choose Squib Healthcare LTD?
        </h2>
        <p class="lead">
          Discover what makes us a great place to build your career
        </p>
      </div>
      <div class="row g-4">
        <div class="col-lg-4 col-md-6">
          <div class="text-center p-4">
            <div
              class="bg-primary text-white rounded-circle d-inline-flex align-items-center justify-content-center mb-3"
              style="width: 80px; height: 80px">
              <i class="bi bi-lightbulb fs-2"></i>
            </div>
            <h5 class="text-primary mb-3">Innovation First</h5>
            <p>
              Work on cutting-edge research and development projects that have
              the potential to save millions of lives worldwide.
            </p>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="text-center p-4">
            <div
              class="bg-primary text-white rounded-circle d-inline-flex align-items-center justify-content-center mb-3"
              style="width: 80px; height: 80px">
              <i class="bi bi-people fs-2"></i>
            </div>
            <h5 class="text-primary mb-3">Collaborative Culture</h5>
            <p>
              Join a diverse, inclusive team where your ideas are valued and
              collaboration drives our success.
            </p>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="text-center p-4">
            <div
              class="bg-primary text-white rounded-circle d-inline-flex align-items-center justify-content-center mb-3"
              style="width: 80px; height: 80px">
              <i class="bi bi-graph-up-arrow fs-2"></i>
            </div>
            <h5 class="text-primary mb-3">Career Growth</h5>
            <p>
              Advance your career with comprehensive training programs,
              mentorship, and leadership development opportunities.
            </p>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="text-center p-4">
            <div
              class="bg-primary text-white rounded-circle d-inline-flex align-items-center justify-content-center mb-3"
              style="width: 80px; height: 80px">
              <i class="bi bi-heart fs-2"></i>
            </div>
            <h5 class="text-primary mb-3">Work-Life Balance</h5>
            <p>
              Enjoy flexible work arrangements, comprehensive benefits, and
              wellness programs that support your well-being.
            </p>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="text-center p-4">
            <div
              class="bg-primary text-white rounded-circle d-inline-flex align-items-center justify-content-center mb-3"
              style="width: 80px; height: 80px">
              <i class="bi bi-globe fs-2"></i>
            </div>
            <h5 class="text-primary mb-3">Global Impact</h5>
            <p>
              Make a meaningful difference in global health outcomes and
              contribute to improving lives worldwide.
            </p>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="text-center p-4">
            <div
              class="bg-primary text-white rounded-circle d-inline-flex align-items-center justify-content-center mb-3"
              style="width: 80px; height: 80px">
              <i class="bi bi-award fs-2"></i>
            </div>
            <h5 class="text-primary mb-3">Recognition</h5>
            <p>
              Be part of an award-winning company recognized for excellence in
              pharmaceutical innovation and workplace culture.
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Open Positions -->
  <!-- <section class="py-5 bg-light">
    <div class="container">
      <div class="text-center mb-5">
        <h2 class="display-5 fw-bold text-primary mb-3">Open Positions</h2>
        <p class="lead">
          Explore current opportunities across our organization
        </p>
      </div>
      <div class="row g-4">
        <div class="col-lg-6">
          <div class="card h-100 shadow-sm">
            <div class="card-body">
              <div
                class="d-flex justify-content-between align-items-start mb-3">
                <h5 class="card-title text-primary">
                  Senior Research Scientist
                </h5>
                <span class="badge bg-primary">Full-time</span>
              </div>
              <p class="card-text mb-3">
                Lead breakthrough research in oncology drug development. PhD
                in Chemistry or related field required.
              </p>
              <div class="mb-3">
                <small class="text-muted">
                  <i class="bi bi-geo-alt me-1"></i>New York, NY
                  <i class="bi bi-calendar ms-3 me-1"></i>Posted 2 days ago
                </small>
              </div>
              <a href="#" class="btn btn-primary">Apply Now</a>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="card h-100 shadow-sm">
            <div class="card-body">
              <div
                class="d-flex justify-content-between align-items-start mb-3">
                <h5 class="card-title text-primary">
                  Clinical Trial Manager
                </h5>
                <span class="badge bg-primary">Full-time</span>
              </div>
              <p class="card-text mb-3">
                Oversee Phase II/III clinical trials for cardiovascular
                treatments. Experience in GCP required.
              </p>
              <div class="mb-3">
                <small class="text-muted">
                  <i class="bi bi-geo-alt me-1"></i>Chicago, IL
                  <i class="bi bi-calendar ms-3 me-1"></i>Posted 1 week ago
                </small>
              </div>
              <a href="#" class="btn btn-primary">Apply Now</a>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="card h-100 shadow-sm">
            <div class="card-body">
              <div
                class="d-flex justify-content-between align-items-start mb-3">
                <h5 class="card-title text-primary">
                  Regulatory Affairs Specialist
                </h5>
                <span class="badge bg-success">Remote</span>
              </div>
              <p class="card-text mb-3">
                Support FDA submissions and regulatory compliance. Advanced
                degree in life sciences preferred.
              </p>
              <div class="mb-3">
                <small class="text-muted">
                  <i class="bi bi-geo-alt me-1"></i>Remote
                  <i class="bi bi-calendar ms-3 me-1"></i>Posted 3 days ago
                </small>
              </div>
              <a href="#" class="btn btn-primary">Apply Now</a>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="card h-100 shadow-sm">
            <div class="card-body">
              <div
                class="d-flex justify-content-between align-items-start mb-3">
                <h5 class="card-title text-primary">
                  Manufacturing Engineer
                </h5>
                <span class="badge bg-primary">Full-time</span>
              </div>
              <p class="card-text mb-3">
                Optimize production processes for pharmaceutical
                manufacturing. Engineering degree required.
              </p>
              <div class="mb-3">
                <small class="text-muted">
                  <i class="bi bi-geo-alt me-1"></i>Frankfurt, Germany
                  <i class="bi bi-calendar ms-3 me-1"></i>Posted 5 days ago
                </small>
              </div>
              <a href="#" class="btn btn-primary">Apply Now</a>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="card h-100 shadow-sm">
            <div class="card-body">
              <div
                class="d-flex justify-content-between align-items-start mb-3">
                <h5 class="card-title text-primary">
                  Data Scientist - AI/ML
                </h5>
                <span class="badge bg-warning">Contract</span>
              </div>
              <p class="card-text mb-3">
                Apply machine learning to drug discovery and development
                processes. Python/R expertise required.
              </p>
              <div class="mb-3">
                <small class="text-muted">
                  <i class="bi bi-geo-alt me-1"></i>San Francisco, CA
                  <i class="bi bi-calendar ms-3 me-1"></i>Posted 1 day ago
                </small>
              </div>
              <a href="#" class="btn btn-primary">Apply Now</a>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="card h-100 shadow-sm">
            <div class="card-body">
              <div
                class="d-flex justify-content-between align-items-start mb-3">
                <h5 class="card-title text-primary">
                  Medical Affairs Director
                </h5>
                <span class="badge bg-primary">Full-time</span>
              </div>
              <p class="card-text mb-3">
                Lead medical strategy and KOL engagement for respiratory
                products. MD or PharmD required.
              </p>
              <div class="mb-3">
                <small class="text-muted">
                  <i class="bi bi-geo-alt me-1"></i>London, UK
                  <i class="bi bi-calendar ms-3 me-1"></i>Posted 4 days ago
                </small>
              </div>
              <a href="#" class="btn btn-primary">Apply Now</a>
            </div>
          </div>
        </div>
      </div>
      <div class="text-center mt-5">
        <a href="#" class="btn btn-outline-primary btn-lg">View All Positions</a>
      </div>
    </div>
  </section> -->
  <section class="py-5 bg-light">
    <div class="container">
      <div class="text-center mb-5">
        <h2 class="display-5 fw-bold text-primary mb-3">Open Positions</h2>
        <p class="lead">
          No current openings available. Please check back later or
          <a href="contact.php" class="text-primary">contact us</a> for
          potential opportunities.
        </p>
      </div>
    </div>
  </section>

  <!-- Benefits -->
  <!-- <section class="py-5">
    <div class="container">
      <div class="text-center mb-5">
        <h2 class="display-5 fw-bold text-primary mb-3">Benefits & Perks</h2>
        <p class="lead">
          Comprehensive package designed to support your success
        </p>
      </div>
      <div class="row g-4">
        <div class="col-lg-6">
          <div class="d-flex align-items-start">
            <div
              class="bg-primary text-white rounded-circle d-inline-flex align-items-center justify-content-center me-4"
              style="width: 60px; height: 60px">
              <i class="bi bi-shield-plus fs-4"></i>
            </div>
            <div>
              <h5 class="text-primary mb-3">Health & Wellness</h5>
              <ul class="list-unstyled">
                <li>
                  <i class="bi bi-check-circle text-success me-2"></i>Comprehensive medical, dental, and vision insurance
                </li>
                <li>
                  <i class="bi bi-check-circle text-success me-2"></i>Mental
                  health support and counseling services
                </li>
                <li>
                  <i class="bi bi-check-circle text-success me-2"></i>On-site
                  fitness centers and wellness programs
                </li>
                <li>
                  <i class="bi bi-check-circle text-success me-2"></i>Annual
                  health screenings and preventive care
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
              <i class="bi bi-piggy-bank fs-4"></i>
            </div>
            <div>
              <h5 class="text-primary mb-3">Financial Security</h5>
              <ul class="list-unstyled">
                <li>
                  <i class="bi bi-check-circle text-success me-2"></i>Competitive salary and performance bonuses
                </li>
                <li>
                  <i class="bi bi-check-circle text-success me-2"></i>401(k)
                  retirement plan with company matching
                </li>
                <li>
                  <i class="bi bi-check-circle text-success me-2"></i>Stock
                  purchase plan and equity participation
                </li>
                <li>
                  <i class="bi bi-check-circle text-success me-2"></i>Life and
                  disability insurance coverage
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
              <i class="bi bi-clock fs-4"></i>
            </div>
            <div>
              <h5 class="text-primary mb-3">Work-Life Balance</h5>
              <ul class="list-unstyled">
                <li>
                  <i class="bi bi-check-circle text-success me-2"></i>Flexible
                  work arrangements and remote options
                </li>
                <li>
                  <i class="bi bi-check-circle text-success me-2"></i>Generous
                  paid time off and holidays
                </li>
                <li>
                  <i class="bi bi-check-circle text-success me-2"></i>Parental
                  leave and family support programs
                </li>
                <li>
                  <i class="bi bi-check-circle text-success me-2"></i>Sabbatical opportunities for long-term employees
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
              <h5 class="text-primary mb-3">Learning & Development</h5>
              <ul class="list-unstyled">
                <li>
                  <i class="bi bi-check-circle text-success me-2"></i>Tuition
                  reimbursement for continuing education
                </li>
                <li>
                  <i class="bi bi-check-circle text-success me-2"></i>Professional development and training programs
                </li>
                <li>
                  <i class="bi bi-check-circle text-success me-2"></i>Conference attendance and industry networking
                </li>
                <li>
                  <i class="bi bi-check-circle text-success me-2"></i>Leadership development and mentorship programs
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section> -->

  <!-- Application Process -->
  <!-- <section class="py-5 bg-light">
    <div class="container">
      <div class="text-center mb-5">
        <h2 class="display-5 fw-bold text-primary mb-3">
          Application Process
        </h2>
        <p class="lead">Your journey to joining PharmaCare</p>
      </div>
      <div class="row g-4">
        <div class="col-lg-3 col-md-6">
          <div class="text-center">
            <div
              class="bg-primary text-white rounded-circle d-inline-flex align-items-center justify-content-center mb-3"
              style="width: 80px; height: 80px">
              <span class="fs-3 fw-bold">1</span>
            </div>
            <h5 class="text-primary mb-3">Apply Online</h5>
            <p>
              Submit your application through our careers portal with your
              resume and cover letter.
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
            <h5 class="text-primary mb-3">Initial Screening</h5>
            <p>
              Our HR team will review your application and conduct an initial
              phone screening.
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
            <h5 class="text-primary mb-3">Interview Process</h5>
            <p>
              Participate in multiple rounds of interviews with hiring
              managers and team members.
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
            <h5 class="text-primary mb-3">Welcome Aboard</h5>
            <p>
              Complete onboarding and begin your exciting journey with
              PharmaCare.
            </p>
          </div>
        </div>
      </div>
    </div>
  </section> -->

  <!-- Call to Action -->
  <section class="py-5 bg-primary text-white">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-8">
          <h3 class="fw-bold mb-3">Ready to Make a Difference?</h3>
          <p class="mb-0">
            Join our mission to advance global healthcare and build a
            rewarding career with Squib Healthcare LTD.
          </p>
        </div>
        <div class="col-lg-4 text-lg-end">
          <a href="#" class="btn btn-light btn-lg me-3">Browse Jobs</a>
          <a href="contact.php" class="btn btn-outline-light btn-lg">Contact HR</a>
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
              <a href="products.php" class="text-light text-decoration-none">Products</a>
            </li>
            <li>
              <a href="services.php" class="text-light text-decoration-none">Services</a>
            </li>
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
            <!-- <li>
              <a href="#" class="text-light text-decoration-none">Patient Support</a>
            </li> -->
            <!-- <li>
              <a href="#" class="text-light text-decoration-none">Healthcare Providers</a>
            </li> -->
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