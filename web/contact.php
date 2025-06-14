<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Contact Us - Squib Healthcare LTD</title>
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
            <a class="nav-link fw-bold" style="color: #fff" href="contact.php">Contact</a>
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
          <h1 class="display-4 fw-bold mb-3">Contact Us</h1>
          <p class="lead">
            Get in touch with our team for any inquiries or support
          </p>
        </div>
        <div class="col-lg-4 text-end">
          <i class="bi bi-telephone-fill display-1"></i>
        </div>
      </div>
    </div>
  </section>

  <!-- Contact Information -->
  <section class="py-5">
    <div class="container">
      <div class="row g-4 mb-5">
        <div class="col-lg-4 col-md-6">
          <div class="text-center p-4 bg-light rounded shadow-sm h-100">
            <div
              class="bg-primary text-white rounded-circle d-inline-flex align-items-center justify-content-center mb-4"
              style="width: 80px; height: 80px">
              <i class="bi bi-geo-alt fs-2"></i>
            </div>
            <h5 class="text-primary mb-3">Head Office</h5>
            <p class="mb-3">
              76, Dhanmondi, Dhaka<br />Dhaka, Bangladesh
            </p>
            <!-- <a href="#" class="btn btn-outline-primary btn-sm"
                >Get Directions</a
              > -->
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="text-center p-4 bg-light rounded shadow-sm h-100">
            <div
              class="bg-primary text-white rounded-circle d-inline-flex align-items-center justify-content-center mb-4"
              style="width: 80px; height: 80px">
              <i class="bi bi-telephone fs-2"></i>
            </div>
            <h5 class="text-primary mb-3">Phone Numbers</h5>
            <p class="mb-1"><strong>Main:</strong> +8801716127410</p>
            <!-- <p class="mb-1"><strong>Emergency:</strong> +1 (555) 987-6543</p>
              <p class="mb-1"><strong>Fax:</strong> +1 (555) 123-4568</p>
              <p class="mb-3"><strong>Toll-Free:</strong> 1-800-PHARMA-1</p> -->
            <small class="text-muted">Available 24/7 for emergencies</small>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="text-center p-4 bg-light rounded shadow-sm h-100">
            <div
              class="bg-primary text-white rounded-circle d-inline-flex align-items-center justify-content-center mb-4"
              style="width: 80px; height: 80px">
              <i class="bi bi-envelope fs-2"></i>
            </div>
            <h5 class="text-primary mb-3">Email Addresses</h5>
            <p class="mb-1">
              <strong>All Queries:</strong> squibhealthcare@gmail.com
            </p>
            <!-- <p class="mb-1">
                <strong>Support:</strong> support@squibhealthcare.com
              </p>
              <p class="mb-1">
                <strong>Media:</strong> media@squibhealthcare.com
              </p>
              <p class="mb-3">
                <strong>Careers:</strong> careers@squibhealthcare.com
              </p> -->
            <small class="text-muted">Response within 24 hours</small>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Department Contacts -->
  <!-- <section class="py-5 bg-light">
      <div class="container">
        <div class="text-center mb-5">
          <h2 class="display-5 fw-bold text-primary mb-3">
            Department Contacts
          </h2>
          <p class="lead">
            Reach out to specific departments for specialized assistance
          </p>
        </div>
        <div class="row g-4">
          <div class="col-lg-6 col-md-6">
            <div
              class="d-flex align-items-start p-4 bg-white rounded shadow-sm"
            >
              <div
                class="bg-primary text-white rounded-circle d-inline-flex align-items-center justify-content-center me-4"
                style="width: 60px; height: 60px"
              >
                <i class="bi bi-heart-pulse fs-4"></i>
              </div>
              <div>
                <h5 class="text-primary mb-2">Medical Information</h5>
                <p class="mb-2">
                  Product information, clinical data, adverse events
                </p>
                <p class="mb-1"><strong>Phone:</strong> +1 (555) 123-4570</p>
                <p class="mb-0">
                  <strong>Email:</strong> medical@squibhealthcare.com
                </p>
              </div>
            </div>
          </div>
          <div class="col-lg-6 col-md-6">
            <div
              class="d-flex align-items-start p-4 bg-white rounded shadow-sm"
            >
              <div
                class="bg-primary text-white rounded-circle d-inline-flex align-items-center justify-content-center me-4"
                style="width: 60px; height: 60px"
              >
                <i class="bi bi-people fs-4"></i>
              </div>
              <div>
                <h5 class="text-primary mb-2">Clinical Trials</h5>
                <p class="mb-2">
                  Study participation, trial information, research
                </p>
                <p class="mb-1"><strong>Phone:</strong> +1 (555) 123-4571</p>
                <p class="mb-0">
                  <strong>Email:</strong> clinicaltrials@squibhealthcare.com
                </p>
              </div>
            </div>
          </div>
          <div class="col-lg-6 col-md-6">
            <div
              class="d-flex align-items-start p-4 bg-white rounded shadow-sm"
            >
              <div
                class="bg-primary text-white rounded-circle d-inline-flex align-items-center justify-content-center me-4"
                style="width: 60px; height: 60px"
              >
                <i class="bi bi-person-badge fs-4"></i>
              </div>
              <div>
                <h5 class="text-primary mb-2">Patient Support</h5>
                <p class="mb-2">
                  Patient assistance programs, insurance support
                </p>
                <p class="mb-1"><strong>Phone:</strong> +1 (555) 123-4572</p>
                <p class="mb-0">
                  <strong>Email:</strong> patientcare@squibhealthcare.com
                </p>
              </div>
            </div>
          </div>
          <div class="col-lg-6 col-md-6">
            <div
              class="d-flex align-items-start p-4 bg-white rounded shadow-sm"
            >
              <div
                class="bg-primary text-white rounded-circle d-inline-flex align-items-center justify-content-center me-4"
                style="width: 60px; height: 60px"
              >
                <i class="bi bi-newspaper fs-4"></i>
              </div>
              <div>
                <h5 class="text-primary mb-2">Media Relations</h5>
                <p class="mb-2">Press inquiries, media kits, interviews</p>
                <p class="mb-1"><strong>Phone:</strong> +1 (555) 123-4573</p>
                <p class="mb-0">
                  <strong>Email:</strong> press@squibhealthcare.com
                </p>
              </div>
            </div>
          </div>
          <div class="col-lg-6 col-md-6">
            <div
              class="d-flex align-items-start p-4 bg-white rounded shadow-sm"
            >
              <div
                class="bg-primary text-white rounded-circle d-inline-flex align-items-center justify-content-center me-4"
                style="width: 60px; height: 60px"
              >
                <i class="bi bi-briefcase fs-4"></i>
              </div>
              <div>
                <h5 class="text-primary mb-2">Business Development</h5>
                <p class="mb-2">Partnerships, licensing, collaborations</p>
                <p class="mb-1"><strong>Phone:</strong> +1 (555) 123-4574</p>
                <p class="mb-0">
                  <strong>Email:</strong> business@squibhealthcare.com
                </p>
              </div>
            </div>
          </div>
          <div class="col-lg-6 col-md-6">
            <div
              class="d-flex align-items-start p-4 bg-white rounded shadow-sm"
            >
              <div
                class="bg-primary text-white rounded-circle d-inline-flex align-items-center justify-content-center me-4"
                style="width: 60px; height: 60px"
              >
                <i class="bi bi-shield-check fs-4"></i>
              </div>
              <div>
                <h5 class="text-primary mb-2">Regulatory Affairs</h5>
                <p class="mb-2">
                  Compliance, regulatory submissions, approvals
                </p>
                <p class="mb-1"><strong>Phone:</strong> +1 (555) 123-4575</p>
                <p class="mb-0">
                  <strong>Email:</strong> regulatory@squibhealthcare.com
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section> -->

  <!-- Contact Form -->
  <section class="py-5">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 mx-auto">
          <div class="text-center mb-5">
            <h2 class="display-5 fw-bold text-primary mb-3">
              Send us a Message
            </h2>
            <p class="lead">
              Fill out the form below and our team will get back to you within
              24 hours
            </p>
          </div>
          <div class="bg-light p-5 rounded shadow-sm">
            <form
              id="contact-form"
              action="contact_handler.php"
              method="POST">
              <div class="row g-3">
                <div class="col-md-6">
                  <input
                    type="text"
                    class="form-control"
                    name="first_name"
                    placeholder="First Name"
                    required />
                </div>
                <div class="col-md-6">
                  <input
                    type="text"
                    class="form-control"
                    name="last_name"
                    placeholder="Last Name"
                    required />
                </div>
                <div class="col-md-6">
                  <input
                    type="email"
                    class="form-control"
                    name="email"
                    placeholder="Email Address"
                    required />
                </div>
                <div class="col-md-6">
                  <input
                    type="tel"
                    class="form-control"
                    name="phone"
                    placeholder="Phone Number" />
                </div>
                <div class="col-12">
                  <select class="form-select" name="department" required>
                    <option value="">Select Department</option>
                    <option value="general">General Inquiry</option>
                    <option value="products">Product Information</option>
                    <option value="clinical">Clinical Trials</option>
                    <option value="media">Media Relations</option>
                    <option value="careers">Careers</option>
                  </select>
                </div>
                <div class="col-12">
                  <textarea
                    class="form-control"
                    name="message"
                    rows="5"
                    placeholder="Your Message"
                    required></textarea>
                </div>
                <!-- Add this inside your form before the submit button -->
                <div class="col-12">
                  <button
                    class="g-recaptcha btn btn-primary w-100" style="background-color: #06264c; color: #fff;"
                    data-sitekey="6LeoqksrAAAAAAvu0sF_idYYqxLqxMLrQWX4jSuP"
                    data-callback="onSubmit"
                    data-action="submit">
                    Send Message
                  </button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Office Locations -->
  <!-- <section class="py-5 bg-light">
      <div class="container">
        <div class="text-center mb-5">
          <h2 class="display-5 fw-bold text-primary mb-3">Global Offices</h2>
          <p class="lead">Our presence around the world</p>
        </div>
        <div class="row g-4">
          <div class="col-lg-4 col-md-6">
            <div class="text-center p-4 bg-white rounded shadow-sm h-100">
              <h5 class="text-primary mb-3">North America</h5>
              <p class="mb-2">
                <strong>New York (HQ)</strong><br />123 Pharma Boulevard<br />New
                York, NY 10001
              </p>
              <p class="mb-2">
                <strong>Chicago</strong><br />456 Medical Center Dr<br />Chicago,
                IL 60601
              </p>
              <p class="mb-0">
                <strong>Toronto</strong><br />789 Health Plaza<br />Toronto, ON
                M5H 2N2
              </p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="text-center p-4 bg-white rounded shadow-sm h-100">
              <h5 class="text-primary mb-3">Europe</h5>
              <p class="mb-2">
                <strong>London</strong><br />321 Pharma House<br />London EC1A
                1BB
              </p>
              <p class="mb-2">
                <strong>Frankfurt</strong><br />654 Medizin Straße<br />60313
                Frankfurt
              </p>
              <p class="mb-0">
                <strong>Zurich</strong><br />987 Gesundheit Platz<br />8001
                Zurich
              </p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="text-center p-4 bg-white rounded shadow-sm h-100">
              <h5 class="text-primary mb-3">Asia Pacific</h5>
              <p class="mb-2">
                <strong>Singapore</strong><br />147 Biomedical Grove<br />Singapore
                138670
              </p>
              <p class="mb-2">
                <strong>Tokyo</strong><br />258 Yakuhin Tower<br />Tokyo
                100-0001
              </p>
              <p class="mb-0">
                <strong>Sydney</strong><br />369 Pharma Centre<br />Sydney NSW
                2000
              </p>
            </div>
          </div>
        </div>
      </div>
    </section> -->

  <!-- Emergency Contact -->
  <section class="py-5 bg-danger text-white">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-8">
          <h3 class="fw-bold mb-3">
            <i class="bi bi-exclamation-triangle me-3"></i>Emergency Medical
            Information
          </h3>
          <p class="mb-0">
            For urgent medical inquiries, adverse events, or product
            emergencies, contact our 24/7 hotline immediately.
          </p>
        </div>
        <div class="col-lg-4 text-lg-end">
          <a href="tel:+8801716127410" class="btn btn-light btn-lg me-3">
            <i class="bi bi-telephone-fill me-2"></i>Emergency Hotline
          </a>
        </div>
      </div>
    </div>
  </section>
  <!-- Scroll to Top Button -->
  <button id="scrollToTopBtn" title="Go to top">↑</button>
  <!-- Footer -->
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
            &copy; 2024 Squib Healthcare LTD. All rights reserved.
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
  <script src="https://www.google.com/recaptcha/api.js" async defer></script>
  <script>
    function onSubmit(token) {
      document.getElementById("contact-form").submit();
    }
  </script>
  <script src="script.js"></script>
</body>

</html>