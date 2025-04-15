<!-- biogas.php -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Agaval Solutions - Biogas Solutions</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
  <link rel="stylesheet" href="style.css" />
<style>
  .biogas-services-section h2 {
    font-size: 2rem;
    margin-bottom: 30px;
    position: relative;
    display: inline-block;
    text-align: left;
    margin-left: 20px; /* Optional: Adjust as needed */
    padding-left: 0;
  }
  
</style>
</head>

<body>
  <!-- Top Bar -->
  <div class="top-bar">
    <div class="top-bar-container">
      <div class="contact-info">
        <span><i class="fas fa-envelope contact-icon"></i>agavalsolutions@gmail.com</span>
        <span><i class="fas fa-phone contact-icon"></i>+91 8489369808</span>
      </div>
    </div>
  </div>

  <!-- Navbar with Enhanced Logo -->
  <nav id="mainNav">
    <div class="navbar-container">
      <div class="logo-section">
        <div class="logo-container">
          <img src="images/logo.jpg" alt="Agaval Solutions Logo" class="main-logo" />
          <div class="logo-badge"><i class="fas fa-cogs"></i></div>
        </div>
        <div class="company-name">
          <span class="company-name-main">AGAVAL</span>
          <span class="company-name-sub">SOLUTIONS</span>
        </div>
      </div>
      <button class="mobile-menu-btn">
        <span></span>
        <span></span>
        <span></span>
      </button>
      <div class="nav-links">
        <a href="index.php">Home</a>
        <a href="about.php">About</a>
        <a href="products.php">Products</a>
        <div class="dropdown">
          <button class="dropdown-toggle">Services</button>
          <div class="dropdown-content">
            <a href="plc.php">PLC Programming</a>
            <a href="robot.php">Robotics Integration</a>
            <a href="biogas.php">Automated Customized Machines</a>
          </div>
        </div>
        <a href="contact.php">Contact</a>
      </div>
    </div>
  </nav>
  <div class="nav-overlay"></div>

  <!-- Banner -->
  <section class="biogas-banner">
    <div class="banner-content">
      <h1>Automated Customized Machines</h1>
      <p>We provide PLC-based automatic control systems for Oxygen gas generators.</p>
    </div>
  </section>

  <!-- Biogas Automation Section -->
  <section class="biogas-automation-section section-animate">
    <div class="biogas-automation-container">
      <div class="biogas-automation-image">
        <img src="images/auto3.jpg" alt="Biogas Automation Machines" />
      </div>
      <div class="biogas-automation-content">
        <h2>Automated Customized Machines</h2>
        <ul class="biogas-automation-list">
          <li>Special Purpose Machine</li>
          <li>Customised Machines</li>
          <li>Converting Relay Logic Control Panel to PLC Based Control</li>
          <li>Upgrading Your Old Machines to Industrial Automation 4.0</li>
        </ul>
      </div>
    </div>
  </section>

  <!-- Biogas Services Section -->
<section class="biogas-services-section section-animate">
    <h2 style="text-align: left;">Key Features</h2>
    <div class="biogas-applications-container">
      <div class="biogas-applications-content">
        <ul class="biogas-applications-list">
          <li>Industrial 4.0</li>
          <li>IOT Projects & Services</li>
          <li>Management Reporting System</li>
          <li>User-friendly SCADA/HMI Screens</li>
          <li>Easy Maintenance</li>
        </ul>
      </div>
      <div class="biogas-applications-image">
        <img src="images/auto4.jpg" alt="Biogas Control System" />
      </div>
    </div>
</section>

  <!-- Footer -->
  <footer id="footer">
    <div class="footer-content">
      <div class="footer-section">
        <h3>Agaval Solutions</h3>
        <p>Specialists in Industrial Automation: PLC, HMI, Robotics & Gas Generators</p>
        <p><i class="fas fa-map-marker-alt contact-icon"></i>No.1 Rajev Gandhi Street,<br>
           Meenakshi Nagar, Villapuram,<br>
           Madurai 625012</p>
        <p><i class="fas fa-phone contact-icon"></i>+91 8489369808</p>
        <p><i class="fas fa-envelope contact-icon"></i>agavalsolutions@gmail.com</p>
        <p><i class="fas fa-file-invoice contact-icon"></i>GST: 33BADPA0367A1ZO</p>
      </div>

      <div class="footer-section">
        <h3>Quick Links</h3>
        <a href="index.php"><i class="fas fa-home contact-icon"></i>Home</a>
        <a href="about.php"><i class="fas fa-info-circle index-contact-icon"></i>About</a>
        <a href="products.php"><i class="fas fa-box index-contact-icon"></i> Products</a>
        <div class="footer-dropdown">
          <a href="#" class="footer-dropdown-toggle"><i class="fas fa-cogs contact-icon"></i>Services</a>
          <div class="footer-dropdown-menu">
            <a href="plc.php"><i class="fas fa-microchip contact-icon"></i>PLC Programming</a>
            <a href="robot.php"><i class="fas fa-robot contact-icon"></i>Robotics Integration</a>
            <a href="biogas.php"><i class="fas fa-industry contact-icon"></i>Automated Customized Machines</a>
          </div>
        </div>
        <a href="contact.php"><i class="fas fa-address-book contact-icon"></i>Contact</a>
      </div>

      <div class="footer-section">
        <h3>Follow Us</h3>
        <div class="social-icons">
          <a href="https://wa.me/8489369808"><i class="fab fa-whatsapp"></i></a>
          <a href="mailto:agavalsolutions@gmail.com"><i class="fas fa-envelope contact-icon"></i></a>
          <a href="#"><i class="fab fa-facebook"></i></a>
        </div>
      </div>
    </div>
    <div class="copyright">
      © 2025 Agaval Solutions. All rights reserved.
    </div>
  </footer>

  <script src="script.js"></script>
</body>
</html>