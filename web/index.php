<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Squib Healthcare LTD - Leading Pharmaceutical Solutions</title>
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
      background-color: #007bff;
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
            <a class="nav-link fw-bold" style="color: #fff" href="/">Home</a>
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
            <a class="nav-link" href="careers.php">Careers</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Homepage Section -->
  <section id="homepage" class="hero-section py-5 mt-5">
    <div class="container">
      <div class="row align-items-center min-vh-75">
        <div class="col-lg-6 mb-4 mb-lg-0">
          <h1 class="display-4 fw-bold text-primary mb-4">
            Advancing Healthcare Through Innovation
          </h1>
          <p class="lead mb-4">
            Leading dietary-supplement medicine company dedicated to developing
            life-changing medicines and improving global health outcomes
            through cutting-edge research and development.
          </p>
          <div class="d-flex flex-column flex-sm-row gap-3">
            <a href="products.php" class="btn btn-primary btn-lg px-4">Our Products</a>
            <a href="aboutus.php" class="btn btn-outline-primary btn-lg px-4">Learn More</a>
          </div>
        </div>
        <div class="col-lg-6">
          <img
            src="https://images.unsplash.com/photo-1559757148-5c350d0d3c56"
            class="img-fluid rounded shadow-lg"
            alt="Pharmaceutical Research" />
        </div>
      </div>
    </div>
  </section>

  <!-- Products Section -->
  <section id="products" class="py-5 bg-light">
    <div class="container">
      <div class="text-center mb-5">
        <h2 class="display-5 fw-bold text-primary mb-3">Our Products</h2>
        <p class="lead">
          Comprehensive range of pharmaceutical solutions for better health
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

  <!-- Services Section -->
  <!-- <section id="services" class="py-5">
      <div class="container">
        <div class="text-center mb-5">
          <h2 class="display-5 fw-bold text-primary mb-3">Our Services</h2>
          <p class="lead">
            Comprehensive pharmaceutical services to support healthcare
            providers and patients
          </p>
        </div>
        <div class="row g-4">
          <div class="col-lg-4 col-md-6">
            <div class="text-center p-4">
              <div
                class="bg-primary text-white rounded-circle d-inline-flex align-items-center justify-content-center mb-3"
                style="width: 80px; height: 80px"
              >
                <i class="bi bi-search fs-2"></i>
              </div>
              <h4 class="text-primary mb-3">Research & Development</h4>
              <p>
                Cutting-edge pharmaceutical research and drug development
                services to bring innovative treatments to market.
              </p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="text-center p-4">
              <div
                class="bg-primary text-white rounded-circle d-inline-flex align-items-center justify-content-center mb-3"
                style="width: 80px; height: 80px"
              >
                <i class="bi bi-gear fs-2"></i>
              </div>
              <h4 class="text-primary mb-3">Manufacturing</h4>
              <p>
                State-of-the-art manufacturing facilities ensuring highest
                quality standards and regulatory compliance.
              </p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="text-center p-4">
              <div
                class="bg-primary text-white rounded-circle d-inline-flex align-items-center justify-content-center mb-3"
                style="width: 80px; height: 80px"
              >
                <i class="bi bi-truck fs-2"></i>
              </div>
              <h4 class="text-primary mb-3">Distribution</h4>
              <p>
                Global distribution network ensuring timely delivery of
                medications to healthcare providers worldwide.
              </p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="text-center p-4">
              <div
                class="bg-primary text-white rounded-circle d-inline-flex align-items-center justify-content-center mb-3"
                style="width: 80px; height: 80px"
              >
                <i class="bi bi-clipboard-check fs-2"></i>
              </div>
              <h4 class="text-primary mb-3">Regulatory Affairs</h4>
              <p>
                Expert regulatory support for drug approval processes and
                compliance with international standards.
              </p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="text-center p-4">
              <div
                class="bg-primary text-white rounded-circle d-inline-flex align-items-center justify-content-center mb-3"
                style="width: 80px; height: 80px"
              >
                <i class="bi bi-people fs-2"></i>
              </div>
              <h4 class="text-primary mb-3">Clinical Trials</h4>
              <p>
                Comprehensive clinical trial management services from protocol
                design to study completion.
              </p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="text-center p-4">
              <div
                class="bg-primary text-white rounded-circle d-inline-flex align-items-center justify-content-center mb-3"
                style="width: 80px; height: 80px"
              >
                <i class="bi bi-headset fs-2"></i>
              </div>
              <h4 class="text-primary mb-3">Patient Support</h4>
              <p>
                Dedicated patient support programs including education,
                assistance, and medication access programs.
              </p>
            </div>
          </div>
        </div>
      </div>
    </section> -->

  <!-- About Us Section -->
  <section id="aboutus" class="py-5 bg-light">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6 mb-4 mb-lg-0">
          <img
            src="https://images.unsplash.com/photo-1582719478250-c89cae4dc85b"
            class="img-fluid rounded shadow-lg"
            alt="Pharmaceutical Laboratory" />
        </div>
        <div class="col-lg-6">
          <h2 class="display-5 fw-bold text-primary mb-4">
            About Squib Healthcare LTD
          </h2>
          <p class="lead mb-4">
            With over 13 years of experience in pharmaceutical innovation,
            Squib Healthcare LTD has been at the forefront of developing
            life-saving medications and improving global health outcomes.
          </p>
          <p class="mb-4">
            Our commitment to excellence drives us to continuously invest in
            research and development, ensuring that we bring the most
            effective and safe treatments to patients worldwide. We pride
            ourselves on our rigorous quality standards, ethical practices,
            and dedication to improving lives.
          </p>

          <div class="row g-3 mb-4">
            <div class="col-6">
              <div class="text-center p-3 bg-white rounded shadow-sm">
                <h3 class="text-primary fw-bold mb-1">13</h3>
                <p class="mb-0 small">Years of Experience</p>
              </div>
            </div>
            <div class="col-6">
              <div class="text-center p-3 bg-white rounded shadow-sm">
                <h3 class="text-primary fw-bold mb-1">10+</h3>
                <p class="mb-0 small">Products Developed</p>
              </div>
            </div>
            <!-- <div class="col-6">
                <div class="text-center p-3 bg-white rounded shadow-sm">
                  <h3 class="text-primary fw-bold mb-1">100+</h3>
                  <p class="mb-0 small">Countries Served</p>
                </div>
              </div> -->
            <!-- <div class="col-6">
                <div class="text-center p-3 bg-white rounded shadow-sm">
                  <h3 class="text-primary fw-bold mb-1">5000+</h3>
                  <p class="mb-0 small">Employees Worldwide</p>
                </div>
              </div>
            </div> -->

            <a href="contact.php" class="btn btn-primary btn-lg">Get in Touch</a>
          </div>
        </div>
      </div>
  </section>

  <!-- Portfolio Section -->
  <!-- <section id="portfolio" class="py-5">
      <div class="container">
        <div class="text-center mb-5">
          <h2 class="display-5 fw-bold text-primary mb-3">Our Portfolio</h2>
          <p class="lead">
            Discover our breakthrough innovations and successful drug
            developments
          </p>
        </div>
        <div class="row g-4">
          <div class="col-lg-6">
            <div class="card shadow-sm h-100">
              <img
                src="https://images.unsplash.com/photo-1559757175-0eb30cd8c063"
                class="card-img-top"
                alt="Research Project 1"
              />
              <div class="card-body">
                <h5 class="card-title text-primary">CardioMax Pro</h5>
                <p class="card-text">
                  Revolutionary cardiovascular treatment that reduced heart
                  disease mortality by 40% in clinical trials. FDA approved in
                  2023.
                </p>
                <div class="d-flex justify-content-between align-items-center">
                  <span class="badge bg-success">Approved</span>
                  <small class="text-muted">2023</small>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="card shadow-sm h-100">
              <img
                src="https://images.unsplash.com/photo-1576091160550-2173dba999ef"
                class="card-img-top"
                alt="Research Project 2"
              />
              <div class="card-body">
                <h5 class="card-title text-primary">DiabetesShield</h5>
                <p class="card-text">
                  Next-generation diabetes management system with smart insulin
                  delivery technology. Currently in Phase III trials.
                </p>
                <div class="d-flex justify-content-between align-items-center">
                  <span class="badge bg-warning">Phase III</span>
                  <small class="text-muted">2024</small>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="card shadow-sm h-100">
              <img
                src="https://images.unsplash.com/photo-1571019613454-1cb2f99b2d8b"
                class="card-img-top"
                alt="Research Project 3"
              />
              <div class="card-body">
                <h5 class="card-title text-primary">OncoTarget</h5>
                <p class="card-text">
                  Precision oncology treatment targeting specific cancer
                  biomarkers. Breakthrough therapy designation received.
                </p>
                <div class="d-flex justify-content-between align-items-center">
                  <span class="badge bg-info">Breakthrough</span>
                  <small class="text-muted">2024</small>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="card shadow-sm h-100">
              <img
                src="https://images.unsplash.com/photo-1576671081837-49000212a370"
                class="card-img-top"
                alt="Research Project 4"
              />
              <div class="card-body">
                <h5 class="card-title text-primary">NeuroRestore</h5>
                <p class="card-text">
                  Innovative treatment for Alzheimer's disease showing promising
                  results in early-stage dementia patients.
                </p>
                <div class="d-flex justify-content-between align-items-center">
                  <span class="badge bg-primary">Phase II</span>
                  <small class="text-muted">2024</small>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section> -->

  <!-- Contact Section -->
  <section id="contact" class="py-5 bg-light">
    <div class="container">
      <div class="text-center mb-5">
        <h2 class="display-5 fw-bold text-primary mb-3">Contact Us</h2>
        <p class="lead">
          Get in touch with our team for any inquiries or support
        </p>
      </div>
      <div class="row">
        <div class="col-lg-8 mx-auto">
          <div class="row g-4">
            <div class="col-md-4">
              <div class="text-center p-4 bg-white rounded shadow-sm h-100">
                <div
                  class="bg-primary text-white rounded-circle d-inline-flex align-items-center justify-content-center mb-3"
                  style="width: 60px; height: 60px">
                  <i class="bi bi-geo-alt fs-4"></i>
                </div>
                <h5 class="text-primary mb-3">Address</h5>
                <p class="mb-0">
                  76, Dhanmondi, Dhaka<br />Dhaka, Bangladesh
                </p>
              </div>
            </div>
            <div class="col-md-4">
              <div class="text-center p-4 bg-white rounded shadow-sm h-100">
                <div
                  class="bg-primary text-white rounded-circle d-inline-flex align-items-center justify-content-center mb-3"
                  style="width: 60px; height: 60px">
                  <i class="bi bi-telephone fs-4"></i>
                </div>
                <h5 class="text-primary mb-3">Phone</h5>
                <p class="mb-0">
                  +880 1716127410<br />+880 1785707700
                </p>
              </div>
            </div>
            <div class="col-md-4">
              <div class="text-center p-4 bg-white rounded shadow-sm h-100">
                <div
                  class="bg-primary text-white rounded-circle d-inline-flex align-items-center justify-content-center mb-3"
                  style="width: 60px; height: 60px">
                  <i class="bi bi-envelope fs-4"></i>
                </div>
                <h5 class="text-primary mb-3">Email</h5>
                <p class="mb-0">
                  squibhealthcare@gmail.com
                </p>
              </div>
            </div>
          </div>

          <div class="mt-5">
            <div class="bg-white p-4 rounded shadow-sm">
              <h4 class="text-primary mb-4 text-center">Send us a Message</h4>
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
                      class="g-recaptcha btn btn-primary w-100"
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
    </div>
  </section>

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
  <div
    id="success-message"
    style="
        display: none;
        position: fixed;
        top: 100px;
        right: 20px;
        z-index: 1000px;
        background-color: #4caf50;
        color: white;
        padding: 15px 25px;
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        font-family: Arial, sans-serif;
        z-index: 1000;
        animation: fadein 0.5s, fadeout 0.5s 3.5s;
      ">
    ✅ Message sent successfully!
  </div>
  <script src="https://www.google.com/recaptcha/api.js" async defer></script>
  <script>
    function onSubmit(token) {
      document.getElementById("contact-form").submit();
    }
  </script>
  <script>
    const urlParams = new URLSearchParams(window.location.search);
    const successMessage = document.getElementById("success-message");
    if (urlParams.get("success") === "1") {
      successMessage.style.display = "block";
      setTimeout(() => {
        successMessage.style.display = "none";
        // Remove the URL parameter without reloading
        window.history.replaceState(null, null, window.location.pathname);
      }, 4000);
    }
    if (urlParams.get("error") === "1") {
      alert("There was an error sending your message. Please try again.");
    }
    if (urlParams.get("recaptcha_error") === "1") {
      alert("Please complete the reCAPTCHA to submit the form.");
    }
    if (urlParams.get("invalid_email") === "1") {
      alert("Please enter a valid email address.");
    }
    if (urlParams.get("missing_fields") === "1") {
      alert("Please fill in all required fields.");
    }
    if (urlParams.get("invalid_recaptcha") === "1") {
      alert("reCAPTCHA verification failed. Please try again.");
    }
  </script>
  <script>
    // Get the button
    let scrollToTopBtn = document.getElementById("scrollToTopBtn");

    // Show the button when scrolled down 20px
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

    // Scroll to top when clicked
    scrollToTopBtn.addEventListener("click", function() {
      window.scrollTo({
        top: 0,
        behavior: "smooth",
      });
    });
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <script src="script.js"></script>
</body>

</html>